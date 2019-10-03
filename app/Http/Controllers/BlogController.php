<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;
use Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
// use Carbon;
class BlogController extends Controller
{
    //

    public function getBlog(){

        return view('blog.blog');
    }
    //get all blogs 


    public function allBlog(){

        $blogs = Blog::orderBy('created_at','DESC')->paginate(20);
      

      
        return view('blog.all-blogs')->with('blogs',$blogs);
    }

    //show blog and add a click 

    public function showBlog($id){
      //  Data::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        // $blogPost = Blog::where('id',$id)->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->first();
        // dd($blogPost);
        $blogPost->increment('clicks');
        $blogPost->update();
        // dd($blogPost);
        return view('blog.blog_post');
    }

    //to get a single blog post

    public function blogPost($id){

        $findBlog = Blog::where('id',$id)->first();

        return view('blog.blog_post')->with('findBlog',$findBlog);
    }


    public function createBlog(){
        $categories = Category::all();
        return view('blog.admin-create-blog')->with('categories',$categories);
    }

    public function blogCategory(){

        return view('blog.blog-category');

    }

    public function postBlogCategory(Request $request){

            $category = $request->input('category');
            $blogCategory = new Category();
            $blogCategory->name = $category;
            $blogCategory->save();
            flash('Created Successfully')->success();
            return back();
    }

    public function postBlog(Request $request){
        // dd($request);
        $title = $request->input('title');
        $category = $request->input('category');
        $blog_main = $request->input('blog_main');
       

        if($request->hasFile('img')){

            $this->validate($request, [
                //   'img' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1272,min-height=375',
               ]);
            
   
               $blog_image = $request->file('img');
               $ext = $blog_image->getClientOriginalExtension();
               $image_resize = Image::make($blog_image->getRealPath());
               $resize = Image::make($image_resize)->fit(1000, 375)->encode($ext);
               $hash = md5($resize->__toString());
               $path = "{$hash}.$ext";
               $url = 'blog/'.$path;
               Storage::put($url, $resize->__toString());

            $blog = new Blog();
            
            $blog->title = $title;
            $blog->category_id = $category;
            $blog->content = $blog_main;
            $blog->user_id = Auth::user()->id;
            $blog->featured_article = 0;
            $blog->publish = 1;
            $blog->blog_img = $url;

            $blog->save();

            flash('Created Successfully')->success();
            return back();

        }
        flash('Error saving the data !!!')->error();
        return back();
    }


    public function editBlog($id){
      
        $findBlog = Blog::where('id',$id)->first();

        $categories = Category::all();

        return view('blog.edit-blog')->with('categories',$categories)->with('findBlog',$findBlog);

    }


    public function updateBlog(Request $request ,$id){

        $title = $request->input('title');
        $category = $request->input('category');
        $blog_main = $request->input('blog_main');

        if($request->hasFile('img')){

            $this->validate($request, [
                //   'img' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1272,min-height=375',
               ]);
            
   
               $blog_image = $request->file('img');
               $ext = $blog_image->getClientOriginalExtension();
               $image_resize = Image::make($blog_image->getRealPath());
               $resize = Image::make($image_resize)->fit(1000, 375)->encode($ext);
               $hash = md5($resize->__toString());
               $path = "{$hash}.$ext";
               $url = 'blog/'.$path;
               Storage::put($url, $resize->__toString());

               Blog::where('id',$id)->update([
                   
                    'title' => $title,
                    'category_id' => $category,
                    'content' => $blog_main,
                    'user_id' =>Auth::user()->id,
                    'publish' =>  1,
                    'blog_img' => $url,

               ]);

               flash('Updated Successfully')->success();
               return back();

            }else{

                Blog::where('id',$id)->update([
                   
                    'title' => $title,
                    'category_id' => $category,
                    'content' => $blog_main,
                    'user_id' =>Auth::user()->id,
                    'publish' =>  1,

               ]);

               flash('Updated Successfully')->success();
               return back();


            }
            flash('Error saving the data !!!')->error();
            return back();

      
    }


    public function publish($id){

        Blog::where('id',$id)->update([
            'publish' => 1,
           ]);
    
           flash('Article has been published suucessfully')->success();
           return back();

    }

    public function unpublish($id){

       Blog::where('id',$id)->update([
        'publish' => 0,
       ]);

       flash('Article has been unpublished Successfully')->success();
       return back();

    }

    public function feature($id){

        Blog::where('id',$id)->update([
            'featured_article' => 1,
           ]);
    
           flash('Added to featured articles suucessfully')->success();
           return back();

    }

    public function unfeature($id){

       Blog::where('id',$id)->update([
        'featured_article' => 0,
       ]);

       flash('Removed from featured articles  Successfully')->success();
       return back();

    }
}
