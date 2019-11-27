<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\HomePage;
use App\Partner;
use App\Footer;
use App\Menu;
use App\Social;

class HomePageController extends Controller
{

    public function getHomePage(){

        $homepage = Homepage::orderBy('created_at','DESC')->first();
    //  dd($homepage);
        $partners = Partner::where('status',1)->get();
        $footer = Footer::all();
        // $menu = Menu::all();
        $menu = Menu::orderBy('created_at','DESC')->first();
        $socials = Social::all();
        // dd($socials);
       
          
//  dd($footer);

        return view('welcome')->with('homepage',$homepage)->with('partners',$partners)->with('footer',$footer)->with('menu',$menu)->with('socials',$socials);
    }


    public function  adminIndexPageEdit(){ 
                $homepage = HomePage::all();
         //dd($homepage);
       
                return view('homepage.admin-homepage-create')->with('homepage',$homepage);
        
            }
        
    //
    public function adminPostHomepageData(Request $request){
        
     // dd($request);

          $hero_text       = $request->input('hero_bg_text');
          $hero_text_sm    = $request->input('hero_bg_small');
          $benefit         = json_encode($request->input('benefit'));
          $why_us          = $request->input('who_wea_are');
          $why_us_desc     = $request->input('who_we_are_desc');
          $about_title     = $request->input('about_title');
          $about_desc      = $request->input('about_desc');
          $services         = json_encode($request->input('service'));

       //   dd($service);

          if($request->hasFile('benefit_image') && $request->hasFile('service_img')){

           
              $this->validate($request, [
                   'benefit_image' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=587,min-height=1023',
               ]);
            
   
               $benefit_image = $request->file('benefit_image');
               $ext = $benefit_image->getClientOriginalExtension();
               $image_resize = Image::make($benefit_image->getRealPath());
               $resize = Image::make($image_resize)->fit(587, 1023)->encode($ext);
               $hash = md5($resize->__toString());
               $path = "{$hash}.$ext";
               $url = 'benefit/'.$path;
               Storage::put($url, $resize->__toString());



               $service_image = $request->file('service_img');
               $ext2 = $service_image->getClientOriginalExtension();
               $image_resize2 = Image::make($service_image->getRealPath());
               $resize2 = Image::make($image_resize2)->fit(1272, 375)->encode($ext2);
               $hash2 = md5($resize2->__toString());
               $path2 = "{$hash2}.$ext2";
               $url2 = 'services/'.$path2;
               Storage::put($url2, $resize2->__toString());
            
               $newHomePage = new Homepage();

                $newHomePage->hero_title           = $hero_text;
                $newHomePage->hero_desc            = $hero_text_sm;
                $newHomePage->benefits             = $benefit;
                $newHomePage->who_we_are_title     = $why_us;
                $newHomePage->who_we_are_desc      = $why_us_desc;
                $newHomePage->about_trudata_title  = $about_title;
                $newHomePage->trudata_serrvices    = $services;
                $newHomePage->trudata_services_img = $url2;
                $newHomePage->benefits_url         = $url;
              
                $newHomePage->save();
                flash('Created Successfully')->success();
                return back();
          }else{

                $new_HomePage = new Homepage();
           
            
                $new_HomePage->hero_title           = $hero_text;
                $new_HomePage->hero_desc            = $hero_text_sm;
                $new_HomePage->benefits             = $benefit;
                $new_HomePage->who_we_are_title     = $why_us;
                $new_HomePage->who_we_are_desc      = $why_us_desc;
                $new_HomePage->about_trudata_title  = $about_title;
                $new_HomePage->trudata_serrvices    = $services;


                $new_HomePage->save();
              
                //$newHomePage->save();
                flash('Created Successfully')->success();
                return back();

          }
          flash('Error Updating the data  !!!')->error();

          return back();
      }



      public function adminUpdateHomepageData(Request $request,$id){
        
 //dd($request);
    
    
    
          $hero_text       = $request->input('hero_bg_text');
          $hero_text_sm    = $request->input('hero_bg_small');
          $benefit         = json_encode($request->input('benefit'));
          $why_us          = $request->input('who_we_are');
          $why_us_desc     = $request->input('who_we_are_desc');
          $about_title     = $request->input('about_title');
          $about_desc      = $request->input('about_desc');
          $services         = json_encode($request->input('service'));
        //   $url             = $request->input('benefit_image_db');
        //   $url2            = $request->input('trudata_services_db');
        //   $url3            = $request->input('hero_bg_db');

       //   dd($service);

          if($request->hasFile('hero_bg') || $request->hasFile('benefit_image') || $request->hasfile('video_upload')|| $request->hasfile('hero_bg_img')  || $request->hasFile('service_img')){

             

            if($request->file('benefit_image')!= NULL){

                $this->validate($request, [
                    'benefit_image' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=587,min-height=1023',
                  ]);


               $benefit_image = $request->file('benefit_image');
               $ext = $benefit_image->getClientOriginalExtension();
               $image_resize = Image::make($benefit_image->getRealPath());
               $resize = Image::make($image_resize)->fit(587, 1023)->encode($ext);
               $hash = md5($resize->__toString());
               $path = "{$hash}.$ext";
               $url = 'benefit/'.$path;
               Storage::put($url, $resize->__toString());

            }else{

                $url = $request->input('benefit_image_db');

            }
            
            
            
            if($request->file('service_img') != NULL){


               $service_image = $request->file('service_img');
               $ext2 = $service_image->getClientOriginalExtension();
               $image_resize2 = Image::make($service_image->getRealPath());
               $resize2 = Image::make($image_resize2)->fit(1272, 375)->encode($ext2);
               $hash2 = md5($resize2->__toString());
               $path2 = "{$hash2}.$ext2";
               $url2 = 'services/'.$path2;
               Storage::put($url2, $resize2->__toString());

            }else{

                $url2 =  $request->input('trudata_services_db');
            }


            if($request->file('hero_bg_img') != NULL){

                $this->validate($request, [
                    'hero_bg_img' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=587,min-height=658',
                   ]);
    

                $hero_bg_image = $request->file('hero_bg_img');
                $ext4 = $hero_bg_image->getClientOriginalExtension();
                $image_resize4 = Image::make($hero_bg_image->getRealPath());
                $resize4 = Image::make($image_resize4)->fit(507, 658)->encode($ext4);
                $hash4 = md5($resize4->__toString());
                $path4 = "{$hash4}.$ext4";
                $url4 = 'hero_img/'.$path4;
                Storage::put($url4, $resize4->__toString());
           // dd($url4);
 
            }else{

                $url4 =  $request->input('hero_bg_img_db');

            }
            
            
            if($request->file('hero_bg') != NULL){
               
                $hero_image = $request->file('hero_bg');
                $ext_hero = $hero_image->getClientOriginalExtension();
                $url3 = Storage::putFile('video', $request->file('hero_bg'));

                // $file = $request->file('hero_bg');
                // $filename = $file->getClientOriginalName();
                // $path = public_path().'/videos/';
                // // dd($path);
                // $url3 = $file->move($path, $filename);
            
            }else{

                 $url3 =  $request->input('hero_bg_db');
            }
 
            if($request->file('video_upload') != NULL){

                $uploadVideo = $request->file('video_upload');
                $videoExt = $uploadVideo->getClientOriginalExtension();
                $url_video = Storage::putFile('video', $request->file('video_upload'));
                dd($url_video);

            }else{

                $url_Video =  $request->input('video_upload_db');
            }


     
            
               Homepage::where('id',$id)->update([
                    'hero_title'      => $hero_text,
                    'hero_desc'        => $hero_text_sm,
                    'benefits'         => $benefit,
                    'who_we_are_title' => $why_us,
                    'who_we_are_desc' => $why_us_desc,
                    'about_trudata_title' => $about_title,
                    'trudata_serrvices'  =>  $services,
                    'about_trudata_desc' => $about_desc,
                    'trudata_services_img'=> $url2,
                    'video_upload' => $url_Video,
                    'benefits_url'  => $url,
                    'video_url'      => $url3,
                    'hero_image'     => $url4,
               ]);
                
                flash('Updated Successfully')->success();
                return back();
          }else{
        //    dd('dd save');
                    Homepage::where('id',$id)->update([
                        'hero_title'      => $hero_text,
                        'hero_desc'        => $hero_text_sm,
                        'benefits'         => $benefit,
                        'who_we_are_title' => $why_us,
                        'who_we_are_desc' => $why_us_desc,
                        'about_trudata_title' => $about_title,
                        'about_trudata_desc' => $about_desc,
                        'trudata_serrvices'  =>  $services,
                    ]);
              
                flash('Updated Successfully')->success();
                return back();

          }
        //   dd('work at');
          flash('Error Updating the data  !!!')->error();
          return back();
      }
      

      public function allpartners(){
          $partners = Partner::paginate(5);
        
          return view('partner.all-partners')->with('partners',$partners);
      }

      public function createPartners(){
          return view('partner.partner-create');
      }


      public function postPartner(Request $request){
        
           $name = $request->input('name');
        

          if($request->hasFile('partner_img')){

           
              $this->validate($request, [
                //   'partner_img' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1272,min-height=375',
               ]);
            
   
               $partner_image = $request->file('partner_img');
               $ext = $partner_image->getClientOriginalExtension();
               $image_resize = Image::make($partner_image->getRealPath());
               $resize = Image::make($image_resize)->fit(3500, 1500)->encode($ext);
               $hash = md5($resize->__toString());
               $path = "{$hash}.$ext";
               $url = 'partner/'.$path;
               Storage::put($url, $resize->__toString());
            
                    $createPartner = new Partner();
                    $createPartner->partner_name = $name;
                    $createPartner->partner_img  = $url;
                    $createPartner->save();
               
                
                flash('Updated Successfully')->success();
                return back();
          }
        
          flash('Error Updating the data  !!!')->error();
          return back();
      }



      public function editPartners($id){
        
           $findPartner = Partner::where('id',$id)->first();
          
      
           return view('partner.edit-partner')->with('findPartner',$findPartner);
   
     }


      public function updatePartner(Request $request,$id){
        

          if($request->hasFile('partner_image')){

           
              $this->validate($request, [
                //   'partner_image' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1272,min-height=375',
               ]);
            
   
               $partner_image = $request->file('partner_image');
               $ext = $benefit_image->getClientOriginalExtension();
               $image_resize = Image::make($benefit_image->getRealPath());
               $resize = Image::make($image_resize)->fit(1272, 375)->encode($ext);
               $hash = md5($resize->__toString());
               $path = "{$hash}.$ext";
               $url = 'benefit/'.$path;
               Storage::put($url, $resize->__toString());
            
               Homepage::where('id',$id)->update([
                    'benefits_url '  => $url,
               ]);
                
                flash('Updated Successfully')->success();
                return back();
          }
        
          flash('Error Updating the data  !!!')->error();
          return back();
      }


      public function approvePartner(Request $request ,$id){

        Partner::where('id',$id)->update([
            'status'=> 1,
        ]);

        flash('Partnership Approved')->success();

        return back();
      }

      public function suspendPartner(Request $request ,$id){

        Partner::where('id',$id)->update([
            'status'=> 0,
        ]);

        flash('Partnership Revoked')->success();

        return back();
      }
      
    }
