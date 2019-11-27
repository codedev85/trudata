<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\Trudata;
use App\Footer;
use App\Social;
use App\Menu;

class TruDataController extends Controller
{
    //
    public function getTruDataPage(){
       $trudata = Trudata::orderBy('created_at','DESC')->first();
       $footer = Footer::all();
       $socials = Social::all();
       $menu = Menu::orderBy('created_at','DESC')->first();
      
      
        return view('tru-data.trudata')->with('trudata',$trudata)->with('footer',$footer)->with('socials',$socials)->with('menu',$menu);
    }

    public function updateWhyUsPage($id){

        $whyUs = Trudata::where('id',$id)->first();
     
    
        return view('tru-data.admin-tru-data')->with('whyUs',$whyUs);
    }

    public function EditWhyUsPage(Request $request,$id){

//   dd($request);


        $why_us_text_big = $request->input('hero-bg-text');
        $why_us_text_small = $request->input('hero_bg_small'); 
        $embeded_url = $request->input('embeded');
        $contact_email = $request->input('contact_email');
        $contact_number = $request->input('contact_number');
        $why_tru_data = json_encode($request->input('why_tru_data'));
      
         $array = [];
      
        if($request->hasFile('hero_bg')  || $request->hasFile('verify_hero_bg') || $request->hasFile('why_tru_data_hero_bg')|| $request->hasFile('contact_hero_bg')){
         
            $this->validate($request, [
                'hero_bg' => 'mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1272,min-height=375',
                'verify_hero_bg' => 'mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1920,min-height=518',
                'why_tru_data_hero_bg' => 'mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1840,min-height=1236',
                'contact_hero_bg' => 'mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1840,min-height=1236',
            ]);


             array_push($array , $request->file('hero_bg'));
             array_push($array , $request->file('verify_hero_bg'));
             array_push($array , $request->file('why_tru_data_hero_bg'));
             array_push($array , $request->file('contact_hero_bg'));
            //  dd($array);
        
            $verify = $request->file('verify_hero_bg');
            $ext = $verify->getClientOriginalExtension();
            $image_resize_verify = Image::make($verify->getRealPath());
            $resize_verify = Image::make($image_resize_verify)->fit(1920, 518)->encode($ext);
            $hash_verify = md5($resize_verify->__toString());
            $path_verify = "{$hash_verify}.$ext";
            $url_verify = 'why-tru/'.$path_verify;
            Storage::put($url_verify, $resize_verify->__toString());
        

    
            $hero_image = $request->file('hero_bg');
            $ext = $hero_image->getClientOriginalExtension();
            $image_resize = Image::make($hero_image->getRealPath());
            $resize = Image::make($image_resize)->fit(1272, 375)->encode($ext);
            $hash = md5($resize->__toString());
            $path = "{$hash}.$ext";
            $url = 'why-tru/'.$path;
            Storage::put($url, $resize->__toString());
       
       
            
            $why_tru = $request->file('why_tru_data_hero_bg');
            $ext = $why_tru->getClientOriginalExtension();
            $image_resize_why_tru = Image::make($why_tru->getRealPath());
            $resize_why_tru = Image::make($image_resize_why_tru)->fit(1840, 1236)->encode($ext);
            $hashWhyUs = md5($resize_why_tru->__toString());
            $path = "{$hashWhyUs}.$ext";
            $url_why_us = 'why-tru/'.$path;
            Storage::put($url_why_us, $resize_why_tru->__toString());
   



            $contact_us = $request->file('contact_hero_bg');
            $ext = $contact_us->getClientOriginalExtension();
            $image_resize_contact_us = Image::make($contact_us->getRealPath());
            $resize_contact_us = Image::make($image_resize_contact_us)->fit(1840, 1236)->encode($ext);
            $hashContact = md5($resize_contact_us->__toString());
            $path = "{$hashContact}.$ext";
            $url_contact_us = 'why-tru/'.$path;
            Storage::put($url_contact_us, $resize_contact_us->__toString());


            $findWhyUsPage = Trudata::where('id',$id)->update([
                'hero_bg_text'   => $why_us_text_big,
                'hero_bg_small'  => $why_us_text_small,
                'embed_url'      => $embeded_url,
                'contact_email'  => $contact_email,
                'contact_number' => $contact_number,
                'why_us'         => $why_tru_data,
                'hero_bg_img'    => $url,
                'why_us_img'     => $url_why_us,
                'verify_img'     => $url_verify,
                'contact_img'    => $url_contact_us,
                'updated_at'     => date('Y,M,D'),
            ]);
            
        flash('Updated Successfully')->success();
        return back();
      }else{
     
                $findWhyUsPage = Trudata::where('id',$id)->update([
                    'hero_bg_text'   => $why_us_text_big,
                    'hero_bg_small'  => $why_us_text_small,
                    'embed_url'      => $embeded_url,
                    'contact_email'  => $contact_email,
                    'contact_number' => $contact_number,
                    'why_us'         => $why_tru_data,
                    // 'updated_at'     => date('Y,M,D'),
                ]);
                
        flash('Updated Successfully')->success();
        return back();
      }

        flash('Error uploading the data!!')->error();
        return back();

  }

// public function EditPostWhyUsPage($id){

//     Trudata::where('id',$id)->first();

//     return view();
// }

//   public function UpdatePostWhyUsPage(Request $request, $id){
    
//         //  dd($request);
    
    
//             $why_us_text_big = $request->input('hero-bg-text');
//             $why_us_text_small = $request->input('hero-bg-small'); 
//             $embeded_url = $request->input('embeded');
//             $contact_email = $request->input('contact_email');
//             $contact_number = $request->input('contact_number');
//             $why_tru_data = json_encode($request->input('why_tru_data'));
//             // dd($why_tru_data);
    
          
//             if($request->hasFile('hero_bg') && $request->hasFile('verify_hero_bg') && $request->hasFile('why_tru_data_hero_bg')&& $request->hasFile('contact_hero_bg')){
                
//                 $this->validate($request, [
//                     'hero_bg' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1272,min-height=375',
//                     'verify_hero_bg' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1920,min-height=518',
//                     'why_tru_data_hero_bg' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1840,min-height=1236',
//                     'contact_hero_bg' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1840,min-height=1236',
//                 ]);
    
//                 $verify = $request->file('verify_hero_bg');
//                 $ext = $verify->getClientOriginalExtension();
//                 $image_resize_verify = Image::make($verify->getRealPath());
//                 $resize_verify = Image::make($image_resize_verify)->fit(1920, 518)->encode($ext);
//                 $hash_verify = md5($resize_verify->__toString());
//                 $path_verify = "{$hash_verify}.$ext";
//                 $url_verify = 'why-tru/'.$path_verify;
              
//                 Storage::put($url_verify, $resize_verify->__toString());
               
    
    
//                 $hero_image = $request->file('hero_bg');
//                 $ext = $hero_image->getClientOriginalExtension();
//                 $image_resize = Image::make($hero_image->getRealPath());
//                 $resize = Image::make($image_resize)->fit(1272, 375)->encode($ext);
//                 $hash = md5($resize->__toString());
//                 $path = "{$hash}.$ext";
//                 $url = 'why-tru/'.$path;
//                 Storage::put($url, $resize->__toString());
    
                
//                 $why_tru = $request->file('why_tru_data_hero_bg');
//                 $ext = $why_tru->getClientOriginalExtension();
//                 $image_resize_why_tru = Image::make($why_tru->getRealPath());
//                 $resize_why_tru = Image::make($image_resize_why_tru)->fit(1840, 1236)->encode($ext);
//                 $hashWhyUs = md5($resize_why_tru->__toString());
//                 $path = "{$hashWhyUs}.$ext";
//                 $url_why_us = 'why-tru/'.$path;
//                 Storage::put($url_why_us, $resize_why_tru->__toString());
    
    
    
//                 $contact_us = $request->file('contact_hero_bg');
//                 $ext = $contact_us->getClientOriginalExtension();
//                 $image_resize_contact_us = Image::make($contact_us->getRealPath());
//                 $resize_contact_us = Image::make($image_resize_contact_us)->fit(1840, 1236)->encode($ext);
//                 $hashContact = md5($resize_contact_us->__toString());
//                 $path = "{$hashContact}.$ext";
//                 $url_contact_us = 'why-tru/'.$path;
//                 Storage::put($url_contact_us, $resize_contact_us->__toString());
    
    
//                 $findWhyUsPage = Trudata::where('id',$id)->update([
//                     'hero_bg_text'   => $why_us_text_big,
//                     'hero_bg_small'  => $why_us_text_small,
//                     'embed_url'      => $embeded_url,
//                     'contact_email'  => $contact_email,
//                     'contact_number' => $contact_number,
//                     'why_us'         => $why_tru_data,
//                     'hero_bg_img'    => $url,
//                     'why_us_img'     => $url_why_us,
//                     'verify_img'     => $url_verify,
//                     'contact_img'    => $url_contact_us,
//                     'updated_at'     => date('Y,M,D'),
//                 ]);
    
//         }
    
//         flash('Saved Successfully')->success();
//         return back()->with('success','Updated Successfully');
        
//       }







}
