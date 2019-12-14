<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;
use Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\Footer;
// use Carbon;
Use App\BlogBanner;
use Carbon\Carbon;
use App\Social;
use App\Menu;
use App\Contact;

class BlogController extends Controller
{
    //

    public function getBlog(){

        $blogbanner = BlogBanner::orderBy('created_at','DESC')->first();
        $footer = Footer::all();
        $contact =Contact::orderBy('created_at','DESC')->first();
        

        $featuredBlog = Blog::where('featured_article',1)->where('publish',1)->orderBy('created_at','DESC')->limit(3)->get();
      
        $allBlog      = Blog::where('publish',1)->orderBy('created_at','DESC')->paginate(12);
        $socials = Social::all();
        $menu = Menu::orderBy('created_at','DESC')->first();
    //    $max_query = Blog::orderBy('created_at','DESC')->pluck('clicks');
    //    dd($max_query);
           //to check for a week
       $blogPostForAWeek = Blog::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->limit(7)->orderBy('created_at','DESC')->get();

    //   dd($blogPostForAWeek);
       
       //to check for one month
       $blogPostForAMonth = Blog::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->limit(7)->orderBy('created_at','DESC')->get();
    // dd( $blogPostForAMonth);
        
      

        return view('blog.blog')->with('footer',$footer)->with('allBlog',$allBlog)->with('featuredBlog', $featuredBlog)
                                ->with('blogbanner',$blogbanner)->with('menu',$menu)->with('socials',$socials)
                                ->with('blogPostForAWeek' , $blogPostForAWeek)
                                ->with('contact',$contact)
                                ->with('blogPostForAMonth', $blogPostForAMonth);
    }
    //get all blogs 


 

    public function allBlog(){

        $blogs = Blog::orderBy('created_at','DESC')->paginate(10);

        $blogBanner = BlogBanner::all();
      

      
        return view('blog.all-blogs')->with('blogBanner', $blogBanner)->with('blogs',$blogs);
    }


  



    //show blog and add a click 

    public function showBlog($id){



     
     
      $blogPost = Blog::where('id',$id)->first();
      $blogBanner = BlogBanner::all();
      $footer = Footer::all();
      $menu = Menu::orderBy('created_at','DESC')->first();
      $socials = Social::all();
//   dd($blogPost);
     If($blogPost != NULL){
        $blogPost->increment('clicks');
        $blogPost->update();
     }
       
       

   
     
        return view('blog.blog_post')->with('blogBanner',$blogBanner)->with('blogPost',$blogPost)->with('footer',$footer)->with('menu',$menu)->with('socials',$socials);
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
                //   'img' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=380,min-height=268',
               ]);
            
   
               $blog_image = $request->file('img');
               $ext = $blog_image->getClientOriginalExtension();
               $image_resize = Image::make($blog_image->getRealPath());
            //    $resize = Image::make($image_resize)->fit(380, 268)->encode($ext);
               $resize = Image::make($image_resize)->fit(1446, 200)->encode($ext);
               $hash = md5($resize->__toString());
               $path = "{$hash}.$ext";
               $url = 'blog/'.$path;
               Storage::put($url, $resize->__toString());
         
               $thumbnail = $request->file('img');
               $ext_thumbnail = $thumbnail->getClientOriginalExtension();
               $thumbnail_resize = Image::make($thumbnail->getRealPath());
               $resize_thumbnail = Image::make($thumbnail_resize)->fit(380, 200)->encode($ext_thumbnail);
               $hash_thumbnail = md5($thumbnail_resize->__toString());
               $thumbnail_path = "{$hash_thumbnail}.$ext_thumbnail";
               $thumbnail_url = 'blog-thumbnail/'.$thumbnail_path;
               Storage::put($thumbnail_url, $resize_thumbnail->__toString());
            
               
            $blog = new Blog();

            $blog->title = $title;
            $blog->category_id = $category;
            $blog->content = $blog_main;
            $blog->user_id = Auth::user()->id;
            $blog->featured_article = 0;
            $blog->publish = 1;
            $blog->blog_img = $url;
            $blog->thumbnail = $thumbnail_url;

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
                  'img' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=380,min_height=268',
               ]);
            
   
               $blog_image = $request->file('img');
               $ext = $blog_image->getClientOriginalExtension();
               $image_resize = Image::make($blog_image->getRealPath());
               $resize = Image::make($image_resize)->fit(380, 268)->encode($ext);
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


    //to add banner to blog 


    public function AddBlogBanner(){

        return view('blog.add-blog-banner');
    }


    public function PostBlogBanner(Request $request){

        $banner = $request->input('banner');
        $header_one = $request->input('header_one');
        $header_two = $request->input('header_two');
   

        if($request->hasFile('banner')){

            $this->validate($request, [
              'banner' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=1916,min_height=467',
               ]);
            
   
               $blog_banner = $request->file('banner');
               $ext = $blog_banner->getClientOriginalExtension();
               $image_resize = Image::make($blog_banner->getRealPath());
               $resize = Image::make($image_resize)->fit(1916, 467)->encode($ext);
               $hash = md5($resize->__toString());
               $path = "{$hash}.$ext";
               $url = 'blog-banner/'.$path;
               Storage::put($url, $resize->__toString());

            //    Blog::where('id',$id)->update([

            //         'header_one' => $header_one,
            //         'header_two' => $header_two,
            //         'banner' => $url,

            //    ]);

            //    flash('Created Successfully')->success();
            //    return back();


            $blogBanner = new BlogBanner();
            $blogBanner->header_one = $header_one;
            $blogBanner->header_two = $header_two;
            $blogBanner->banner     = $url;
            $blogBanner->save();

            flash('Created Successfully')->success();
            return back();

    }

}


        public function EditBlogBanner($id){

            $EditBanner = BlogBanner::where('id',$id)->first();

            return view('blog.add-blog-banner')->with('EditBanner',$EditBanner);

        }

        public function UpdateBlogBanner(Request $request,$id){
            $header_one = $request->input('header_one');
            $header_two = $request->input('header_two');

            if($request->hasFile('banner')){

                $this->validate($request, [
                  'banner' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=1920,min_height=535',
                   ]);
                
       
                   $blog_banner = $request->file('banner');
                   $ext = $blog_banner->getClientOriginalExtension();
                   $image_resize = Image::make($blog_banner->getRealPath());
                   $resize = Image::make($image_resize)->fit(1920, 535)->encode($ext);
                   $hash = md5($resize->__toString());
                   $path = "{$hash}.$ext";
                   $url = 'blog-banner/'.$path;
                   Storage::put($url, $resize->__toString());
           
                   BlogBanner::where('id',$id)->update([
    
                        'header_one' => $header_one,
                        'header_two' => $header_two,
                        'banner' => $url,
    
                   ]);
    
                   flash('Created Successfully')->success();

                   return back();

            }elseif($request->input('header_one') || $request->input('header_two')){

                BlogBanner::where('id',$id)->update([
    
                    'header_one' => $header_one,
                    'header_two' => $header_two,

               ]);

               flash('Created Successfully')->success();

               return back();

            }


                flash('Error Loading The Data !!!')->error();

                return back();
            
    
        }
}
