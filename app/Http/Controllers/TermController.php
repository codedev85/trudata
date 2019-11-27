<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Term;
use App\Banner;
use App\TermBanner;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class TermController extends Controller
{
    //
    public function getTerms(){
        
        $term = Term::all();

        return view('terms.term')->with('term',$term);

    }

    public function editTerm(){
   
       
        return view('terms.add-terms');
    }

    public function postTerm(Request $request){
       // dd($request);
        $mainPolicy      = $request->input('policy_title');
        $mainPolicyDesc  = $request->input('policy_desc');
        // $usageTitle      = json_encode($request->input('usage_title'));
        $siteUsage       = json_encode($request->input('site_usage'));
        $privacyPolicy   = $request->input('privacy_policy');
        $privacyTitle    = json_encode($request->input('privacy_title'));
        $privacyDesc     = json_encode($request->input('privacy_desc'));
        $cookiesPolicy   = $request->input('cookies_policy');
        $cookiesTitle    = json_encode($request->input('cookies_title'));
        $cookiesDesc     = json_encode($request->input('cookies_desc'));
        $security        = $request->input('security_policy');
        $securityPolicyTitle = json_encode($request->input('security_policy_title'));
        $securityPolicyDesc  = json_encode($request->input('security_policy_desc'));


        $newPolicy  = new Term();

        $newPolicy->policy_date    = $mainPolicy;
        $newPolicy->policy         = $mainPolicyDesc;
        // $newPolicy->site_usage     = $usageTitle;
        $newPolicy->site_usage     = $siteUsage;
        $newPolicy->privacy_desc   = $privacyDesc;
        $newPolicy->privacy_title  = $privacyTitle;
        // i need to chane this
        $newPolicy->privacy_policy_title = $privacyDesc;
        $newPolicy->cookies        = $cookiesPolicy;
        $newPolicy->cookies_title  = $cookiesTitle;
        $newPolicy->cookies_policies = $cookiesDesc;
        $newPolicy->security       = $security;
        $newPolicy->security_title = $securityPolicyTitle;
        $newPolicy->security_desc  = $securityPolicyDesc;
        $newPolicy->save();
        flash('Policies created  Successfully')->success();
        return back();
    }

    public function updateTerm($id){

            $findTerm = Term::where('id',$id)->first();
           // dd($findTerm);

            return view('terms.edit-term')->with('findTerm',$findTerm);
    }
    

    public function postUpdateTerm(Request $request,$id){

      
        $mainPolicy      = $request->input('policy_title');
        $mainPolicyDesc  = $request->input('policy_desc');
        // $usageTitle      = json_encode($request->input('usage_title'));
        $siteUsage       = json_encode($request->input('site_usage'));
        $privacyPolicy   = $request->input('privacy_policy');
        // dd($privacyPolicy);
        $privacyTitle    = json_encode($request->input('privacy_title'));
        $privacyDesc     = json_encode($request->input('privacy_desc'));
        $cookiesPolicy   = $request->input('cookies_policy');
        $cookiesTitle    = json_encode($request->input('cookies_title'));
        $cookiesDesc     = json_encode($request->input('cookies_desc'));
        $security        = $request->input('security_policy');
        $securityPolicyTitle = json_encode($request->input('security_policy_title'));
        $securityPolicyDesc  = json_encode($request->input('security_policy_desc'));


        Term::where('id',$id)->update([

            'policy_date'    => $mainPolicy,
            'policy'         => $mainPolicyDesc,
            'site_usage'     => $siteUsage,
            'privacy_desc'   => $privacyPolicy,
            'privacy_title'  => $privacyTitle,
            'privacy_policy_title' => $privacyDesc,
            'cookies'        =>  $cookiesPolicy,
            'cookies_title'  => $cookiesTitle,
            'cookies_policies' => $cookiesDesc,
            'security'       => $security,
            'security_title' => $securityPolicyTitle,
            'security_desc'  => $securityPolicyDesc,
        ]);

        flash('Policies updated  Successfully')->success();
        return back();
    }
   

    public function createTermBanner(){

        $termbanner =  TermBanner::orderBy('created_at','DESC')->first();

        return view('terms.add-terms-banner')->with('termbanner',$termbanner);
    }


    public function postTermBanner(Request $request){
     

    
        if($request->hasFile('term_banner')){
 
        $hero_image =  $request->file('term_banner');
 
         $ext = $hero_image->getClientOriginalExtension();
         $image_resize = Image::make($hero_image->getRealPath());
         $resize = Image::make($image_resize)->fit(1272, 375)->encode($ext);
         $hash = md5($resize->__toString());
         $path = "{$hash}.$ext";
         $url = 'Faq/'.$path;
         Storage::put($url, $resize->__toString());
         $faq = new TermBanner();
         $faq->hero_bg   = $url;

         $faq->save();
 
         flash('Term Of Use  Backgroud Saved Successfully')->success();
         return back();
        }
     }
 
     public function updateTermBanner(Request $request , $id){
        if($request->hasFile('term_banner')){

            $hero_image =  $request->file('term_banner');
     
             $ext = $hero_image->getClientOriginalExtension();
             $image_resize = Image::make($hero_image->getRealPath());
             $resize = Image::make($image_resize)->fit(1272, 375)->encode($ext);
             $hash = md5($resize->__toString());
             $path = "{$hash}.$ext";
             $url = 'Faq/'.$path;

             Storage::put($url, $resize->__toString());

             TermBanner::where('id',$id)->update([

                 'hero_bg' => $url,

             ]);
         
     
             flash('Term Of Use  Backgroud Updated Successfully')->success();

             return back();
            }

     }
}
