<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;




class HomePage extends Controller
{
    //
    public function getHomePage(){

        $homepage = Hmepage::orderBy('created_at','DESC')->first();
        dd($homepage);
        return view('welcome');
    }

    // public function  adminIndexPageEdit(){ 

    //     return view('homepage.admin-homepage-create');

    // }

    // public function adminPostHomepageData(Request $request){
        
    //  // dd($request);

    //       $hero_text       = $request->input('hero_bg_text');
    //       $hero_text_sm    = $request->input('hero_bg_small');
    //       $benefit         = json_encode($request->input('benefit'));
    //       $why_us          = $request->input('who_wea_are');
    //       $why_us_desc     = $request->input('who_we_are_desc');
    //       $about_title     = $request->input('about_title');
    //       $about_desc      = $request->input('about_desc');
    //       $services         = json_encode($request->input('service'));

    //    //   dd($service);

    //       if($request->hasFile('benefit_image') && $request->hasFile('service_img')){

           
    //           $this->validate($request, [
    //             //   'img' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1272,min-height=375',
    //            ]);
            
   
    //            $benefit_image = $request->file('benefit_image');
    //            $ext = $benefit_image->getClientOriginalExtension();
    //            $image_resize = Image::make($benefit_image->getRealPath());
    //            $resize = Image::make($image_resize)->fit(1272, 375)->encode($ext);
    //            $hash = md5($resize->__toString());
    //            $path = "{$hash}.$ext";
    //            $url = 'benefit/'.$path;
    //            Storage::put($url, $resize->__toString());



    //            $service_image = $request->file('service_img');
    //            $ext2 = $service_image->getClientOriginalExtension();
    //            $image_resize2 = Image::make($service_image->getRealPath());
    //            $resize2 = Image::make($image_resize2)->fit(1272, 375)->encode($ext2);
    //            $hash2 = md5($resize2->__toString());
    //            $path2 = "{$hash2}.$ext2";
    //            $url2 = 'services/'.$path2;
    //            Storage::put($url2, $resize2->__toString());
            
    //            $newHomePage = new Homepage();

    //             $newHomePage->hero_title           = $hero_text;
    //             $newHomePage->hero_desc            = $hero_text_sm;
    //             $newHomePage->benefits             = $benefit;
    //             $newHomePage->who_we_are_title     = $why_us;
    //             $newHomePage->who_we_are_desc      = $why_us_desc;
    //             $newHomePage->about_trudata_title  = $about_title;
    //             $newHomePage->trudata_services     = $services;
    //             $newHomePage->trudata_services_img = $url2;
    //             $newHomePage->benefits_url         = $url;
              
    //             $newHomePage->save();
    //             flash('Created Successfully')->success();
    //             return back();
    //       }else{

    //             $new_HomePage = new Homepage();
           
            
    //             $new_HomePage->hero_title           = $hero_text;
    //             $new_HomePage->hero_desc            = $hero_text_sm;
    //             $new_HomePage->benefits             = $benefit;
    //             $new_HomePage->who_we_are_title     = $why_us;
    //             $new_HomePage->who_we_are_desc      = $why_us_desc;
    //             $new_HomePage->about_trudata_title  = $about_title;
    //             $new_HomePage->trudata_services     = $services;


    //             $new_HomePage->save();
              
    //             //$newHomePage->save();
    //             flash('Created Successfully')->success();
    //             return back();

    //       }
    //       flash('Error Updating the data  !!!')->error();
    //       return back();
    //   }
}
