<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Social;

class SocialController extends Controller
{
    //
    public function weAreSocial(){

        $social = Social::orderBy('created_at','DESC')->first();
       
        return view('socials.socials')->with('social',$social);
    }

    public function postSocial(Request $request){
      
        $socials = json_encode($request->input('social'));
        
        $new_social = new Social();
        $new_social->name = $socials;
        $new_social->save();


        flash('Social Media added Successfully')->success();
        return back();

    }


    public function updateSocial(Request $request, $id){
      
        $socials = json_encode($request->input('social'));
        
        Social::where('id',$id)->update([
            'name' => $socials,
        ]);
    
        flash('Social Media updated Successfully')->success();
        return back();

    }
}
