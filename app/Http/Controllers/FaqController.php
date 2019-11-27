<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;
use App\Footer;
use App\FaqBanner;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\Social;
use App\Menu;

class FaqController extends Controller
{
    //
    public function getFaqPage(){
      
         $faqs = Faq::where('status',1)->get();
    
        $faqbanner = FaqBanner::orderBy('created_at','DESC')->first();
         $footer = Footer::all();
         $socials = Social::all();
         $menu = Menu::orderBy('created_at','DESC')->first();
      
       
        return view('faq.faq')->with('faqs',$faqs)->with('footer',$footer)->with('faqbanner',$faqbanner)->with('socials',$socials)->with('menu',$menu);
    }


    public function allFaqs(){

        $faqs = Faq::paginate(8);

        return view('faq.all-faq')->with('faqs',$faqs);
    }

    public function createFaqs(){

        return view('faq.add-faq');
    }

    public function postFaq(Request $request){

        $title   = $request->input('title');
        $faqDesc = $request->input('faq_desc');
        
        $newFaq = new Faq();

        $newFaq->title = $title;
        $newFaq->desc  = $faqDesc;
        $newFaq->save();

        flash('FAQ Created Successfully')->success();
        return back();

    }

    public function editFaq($id){

      $findFaq = Faq::where('id',$id)->first();

      return view('faq.edit-faq')->with('findFaq',$findFaq);

    }

    public function updateFaq(Request $request,$id){
 
        $title   = $request->input('title');
        $faqDesc = $request->input('faq_desc');

        Faq::where('id',$id)->update([
            'title' => $title,
            'desc'  => $faqDesc,
        ]);
        flash('FAQ Updated Successfully')->success();
        return back();
    }

    public function publishFaq(Request $request , $id){
       
        $UnpublishFaq = Faq::where('id',$id)->update([
            'status'=> 1,
        ]);

        flash('FAQ  Publish Successfully')->success();
        return back();

    }

    public function unpublishFaq(Request $request , $id){
       
        $UnpublishFaq = Faq::where('id',$id)->update([
            'status'=> 0,
        ]);


        flash('FAQ  Unpublish Successfully')->success();
        return back();
    }

    public function addFaqBanner(){
  $faqbanner =  FaqBanner::orderBy('created_at','DESC')->first();
        return view('faq.add-faq-banner')->with('faqbanner',$faqbanner);
    }

    public function postFaqBanner(Request $request){
     

    
       if($request->hasFile('faq_banner')){

       $hero_image =  $request->file('faq_banner');

        $ext = $hero_image->getClientOriginalExtension();
        $image_resize = Image::make($hero_image->getRealPath());
        $resize = Image::make($image_resize)->fit(1272, 375)->encode($ext);
        $hash = md5($resize->__toString());
        $path = "{$hash}.$ext";
        $url = 'Faq/'.$path;
        Storage::put($url, $resize->__toString());
        $faq = new FaqBanner();
        $faq->hero_bg   = $url;
        $faq->save();

        flash('FAQ  Backgroud Saved Successfully')->success();
        return back();
       }
    }

    public function updateBanner(Request $request , $id){

        if($request->hasFile('faq_banner')){

            $this->validate($request, [
                'faq_banner' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1920,min-height=466',
            ]);
         
            $header_one = $request->input('header_one');
            $header_two = $request->input('header_two');
            $hero_image =  $request->file('faq_banner');
            
     
             $ext = $hero_image->getClientOriginalExtension();
             $image_resize = Image::make($hero_image->getRealPath());
             $resize = Image::make($image_resize)->fit(1920, 466)->encode($ext);
             $hash = md5($resize->__toString());
             $path = "{$hash}.$ext";
             $url = 'Faq/'.$path;

             Storage::put($url, $resize->__toString());

             FaqBanner::where('id',$id)->update([
                  'header_one'  => $header_one,
                  'header_two'  => $header_two,
                   'hero_bg'      => $url,

             ]);
         
     
             flash('FAQ  Backgroud Updated Successfully')->success();

             return back();
            }else{
                $header_one = $request->input('header_one');
                $header_two = $request->input('header_two');
               
                FaqBanner::where('id',$id)->update([
                    'header_one'  => $header_one,
                    'header_two'  => $header_two,
                   
  
               ]);
           
       
               flash('FAQ  Backgroud Updated Successfully')->success();
  
               return back();


            }


    }

    public function search(Request $request){

    // dd($request);

     $searchRequest = $request->input('search');
     $menu = Menu::orderBy('created_at','DESC')->first();
     $footer = Footer::all();
     $faqbanner = FaqBanner::orderBy('created_at','DESC')->first();
     $faqSearchedCount = Faq::where('title','LIKE','%'.$searchRequest.'%')->count();
    //  dd( $articleSearchedCount);
     $faqSearched = Faq::where('title','LIKE','%'.$searchRequest.'%')->paginate(10);

     $socials = Social::all();
 

    // dd( $articleSearched);
    if(count($faqSearched) > 0)

        return view('faq.search-faq')->withDetails($faqSearched)->withQuery ( $searchRequest)->with('menu',$menu)->with('footer',$footer)->with('faqSearched',$faqSearched)->with('faqSearchedCount',$faqSearchedCount)->with('socials',$socials)->with('faqbanner',$faqbanner);
       else return view ('faq.search-faq')->withMessage('No Details found. Try to search again !')->with('menu',$menu)->with('footer',$footer)->with('faqSearched',$faqSearched)->with('faqSearchedCount', $faqSearchedCount)->with('socials',$socials)->with('faqbanner',$faqbanner);
        
    }

}
