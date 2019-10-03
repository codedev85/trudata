<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\About;
use App\Leadership;
use App\Team;
use App\Contact;

class AboutController extends Controller
{
    //
    public function getAboutUsPage(){

        $about = About::orderBy('created_at','DESC')->first();
        $leaders = Leadership::all();
        $teams  = Team::all();
        $contact = Contact::orderby('created_at','DESC')->first();
      
   
        return view('about.about-us')
                                ->with('about',$about)
                                ->with('leaders',$leaders)
                                ->with('teams',$teams)
                                ->with('contact' ,$contact);
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
    
        $hero_text_bg   = $request->input('hero_bg_text');
     
        $hero_text_sm   = $request->input('hero_bg_small');
        $mission_header = json_encode($request->input('vision'));
        $mission_desc   = json_encode($request->input('why_tru_data'));
        $team_header    = $request->input('team_header');
        $team_desc      = $request->input('team_desc');

         
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
                'hero_text_big'        => $hero_text_bg,
                'hero_text_small'      => $hero_text_sm,
                'hero_bg'              => $url,
                'mission'              => $mission_header,
                'mission_desc'         => $mission_desc,
                'join_our_team_header' => $team_header,
                'join_our_team_desc'   => $team_desc,
                // 'updated_at'       => date('Y,M,D'),
            ]);
      }else{

                $findWhyUsPage = About::where('id',$id)->update([
                    'hero_text_big'     => $hero_text_bg,
                    'hero_text_small'    => $hero_text_sm,
                    'mission'          => $mission_header,
                    'mission_desc'     => $mission_desc,
                    'join_our_team_header' => $team_header,
                    'join_our_team_desc'   => $team_desc,
                    // 'updated_at'     => date('Y,M,D'),
                ]);
      }

        flash('Updated Successfully')->success();
        return back();
    }

    public function leadershipIndex(){
       $leaders = Leadership::all();

        return view('leadership.admin-leadership-index')->with('leaders',$leaders);
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
             //   'img' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1272,min-height=375',
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
            $new_leader->name   = $name;
            $new_leader->title  = $title;
            $new_leader->desc   = $desc;
            $new_leader->img    = $url;
            $new_leader->save();
            flash('Created Successfully')->success();
            return back();

       }
       flash('Error saving the data !!!')->error();
       return back();
      
   }


   public function editLeadership($id){

    $findLeader = Leadership::where('id',$id)->first();

    return view('leadership.leadership-edit')->with('findLeader',$findLeader);

   }



   public function updateLeadership(Request $request ,$id){

   

    $name = $request->input('fullname');
    $title = $request->input('title');
    $desc = $request->input('desc');

    if($request->hasfile('img')){
        
        
                    $this->validate($request, [
                     //   'img' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1272,min-height=375',
                    ]);
                 
        
                    $hero_image = $request->file('img');
                    $ext = $hero_image->getClientOriginalExtension();
                    $image_resize = Image::make($hero_image->getRealPath());
                    $resize = Image::make($image_resize)->fit(429, 418)->encode($ext);
                    $hash = md5($resize->__toString());
                    $path = "{$hash}.$ext";
                    $url = 'leadership/'.$path;
                    Storage::put($url, $resize->__toString());
        
                  Leadership::where('id',$id)->update([
                      'name'  => $name,
                      'title' => $title,
                      'desc'  => $desc,
                      'img'   => $url,
                  ]);
                    flash('Updated Successfully')->success();
                    return back();
        
               }else{

                    Leadership::where('id',$id)->update([
                        'name'  => $name,
                        'title' => $title,
                        'desc'  => $desc,
                    ]);

                    flash('Updated Successfully')->success();
                    return back();

               }
               flash('Error Updating the data  !!!')->error();
               return back();



   }




        public function teamIndex(){
            $teams = Team::all();
            return view('team.team-index')->with('teams',$teams);
        }
        public function createTeam(){

            return view('team.team-create');

        }

        public function postTeam(Request $request){
            
            $name = $request->input('fullname');
          
            $title = $request->input('title');

            if($request->hasfile('img')){
                
             
                            $this->validate($request, [
                             //   'img' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1272,min-height=375',
                            ]);
                         
                
                            $hero_image = $request->file('img');
                            $ext = $hero_image->getClientOriginalExtension();
                            $image_resize = Image::make($hero_image->getRealPath());
                            $resize = Image::make($image_resize)->fit(1272, 375)->encode($ext);
                            $hash = md5($resize->__toString());
                            $path = "{$hash}.$ext";
                            $url = 'team/'.$path;
                            Storage::put($url, $resize->__toString());
                            $new_leader = new Team();
                            $new_leader->name   = $name;
                            $new_leader->title  = $title;
                            $new_leader->img    = $url;
                            $new_leader->save();
                            flash('Created Successfully')->success();
                            return back();
            }
        }


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
                    //   'img' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min-width=1272,min-height=375',
                   ]);
                
       
                   $benefit_image = $request->file('benefit_image');
                   $ext = $benefit_image->getClientOriginalExtension();
                   $image_resize = Image::make($benefit_image->getRealPath());
                   $resize = Image::make($image_resize)->fit(1272, 375)->encode($ext);
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
                    $newHomePage->trudata_services     = $services;
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
                    $new_HomePage->trudata_services     = $services;
    
    
                    $new_HomePage->save();
                  
                    //$newHomePage->save();
                    flash('Created Successfully')->success();
                    return back();
    
              }
              flash('Error Updating the data  !!!')->error();
              return back();
          }
        

}
