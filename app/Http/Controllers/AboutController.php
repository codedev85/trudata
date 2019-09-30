<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\About;
use App\Leadership;

class AboutController extends Controller
{
    //
    public function getAboutUsPage(){
        return view('about.about-us');
    }


    public function getAdminAboutUsPage($id){
        $about= About::where('id',$id)->first();
        return view('about.admin-about-us-create')->with('about',$about);
    }


    public function AdminCreateAboutUsPage(Request $request){
      

        $hero_text_bg = $request->input('hero_bg_text');
        $hero_text_sm = $request->input('hero_bg_small');
        $mission_header = json_encode($request->input('vision'));
        $mission_desc = json_encode($request->input('why_tru_data'));


         
        if($request->hasFile('hero_bg')){
            
            $this->validate($request, [
                'hero_bg' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1272,min-height=375',
            ]);

           
            $hero_image = $request->file('hero_bg');
            $ext = $hero_image->getClientOriginalExtension();
            $image_resize = Image::make($hero_image->getRealPath());
            $resize = Image::make($image_resize)->fit(1272, 375)->encode($ext);
            $hash = md5($resize->__toString());
            $path = "{$hash}.$ext";
            $url = 'about-us/'.$path;
            Storage::put($url, $resize->__toString());
            
            $about = new About();

            $about->hero_bg         = $url;
            $about->hero_text_big   = $hero_text_bg;
            $about->hero_text_small = $hero_text_sm;
            $about->mission         = $mission_header;
            $about->mission_desc    = $mission_desc;
            $about->save();

      }

        flash('Created Successfully')->success();
        return back();
    }


    
    public function AdminUpdateAboutUsPage(Request $request,$id){
    
        $hero_text_bg = $request->input('hero_bg_text');
     
        $hero_text_sm = $request->input('hero_bg_small');
        $mission_header = json_encode($request->input('vision'));
        $mission_desc = json_encode($request->input('why_tru_data'));


         
        if($request->hasFile('hero_bg') && $request->hasFile('verify_hero_bg') && $request->hasFile('why_tru_data_hero_bg')&& $request->hasFile('contact_hero_bg')){
            
            $this->validate($request, [
                'hero_bg' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1272,min-height=375',
            ]);

           
            $hero_image = $request->file('hero_bg');
            $ext = $hero_image->getClientOriginalExtension();
            $image_resize = Image::make($hero_image->getRealPath());
            $resize = Image::make($image_resize)->fit(1272, 375)->encode($ext);
            $hash = md5($resize->__toString());
            $path = "{$hash}.$ext";
            $url = 'about-us/'.$path;
            Storage::put($url, $resize->__toString());

            $findWhyUsPage = About::where('id',$id)->update([
                'hero_text_big'     => $hero_text_bg,
                'hero_text_small'    => $hero_text_sm,
                'hero_bg'          => $url,
                'mission'          => $mission_header,
                'mission_desc'     => $mission_desc,
                // 'updated_at'       => date('Y,M,D'),
            ]);
      }else{

                $findWhyUsPage = About::where('id',$id)->update([
                    'hero_text_big'     => $hero_text_bg,
                    'hero_text_small'    => $hero_text_sm,
                    'mission'          => $mission_header,
                    'mission_desc'     => $mission_desc,
                    // 'updated_at'     => date('Y,M,D'),
                ]);
      }

        flash('Updated Successfully')->success();
        return back();
    }

    public function leadershipIndex(){


        return view('leadership.admin-leadership-index');
    }

    public function createLeaderShip(){
        return view('leadership.leadership-create');
    }

   public function postLeadership(Request $request){
       $name   = $request->input('fullname');
       $title  = $request->input('title');
       $img    = $request->input('img');
       $desc   = $request->input('desc');

      if($request->hasfile('img')){


            $this->validate($request, [
                'img' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1272,min-height=375',
            ]);

            $hero_image = $request->file('img');
            $ext = $hero_image->getClientOriginalExtension();
            $image_resize = Image::make($hero_image->getRealPath());
            $resize = Image::make($image_resize)->fit(1272, 375)->encode($ext);
            $hash = md5($resize->__toString());
            $path = "{$hash}.$ext";
            $url = 'leadership/'.$path;
            Storage::put($url, $resize->__toString());

            $new_leader = new Leadership();
            $new_leader->name = $name;
            $new_leader->title =$title;
            $new_leader->desc = $desc;
            $new_leader->img =

       }
   }
}
