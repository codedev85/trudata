<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\Contact;

class ContactController extends Controller
{
    //
    public function getContactPage(){

        $contact = Contact::all();
    //  dd($contact);
        return view('contact.contact-us')->with('contact',$contact);
    }

    public function  showContactUsPage(){
        $contact = Contact::all();
      
        return view('contact.admin-contact-us-create');
    }

    public function createContactUsPage(Request $request){
        


          $why_us_text_big    = $request->input('hero-bg-text');
          $why_us_text_small  = $request->input('hero_bg_small'); 
          $embeded_url        = $request->input('embeded');
          $contact_email      = $request->input('contact_email');
          $contact_number     = $request->input('contact_number');
          $address            = $request->input('address');
  
  
        
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
              $url = 'why-tru/'.$path;
              Storage::put($url, $resize->__toString());
  
              
     
              $create_contact = new Contact();
            
                  $create_contact->hero_bg_text   =  $why_us_text_big;
                  $create_contact->hero_bg_small  =  $why_us_text_small;
                  $create_contact->embed_url      =  $embeded_url;
                  $create_contact->contact_email  =  $contact_email;
                  $create_contact->contact_number = $contact_number;
                  $create_contact->address        = $address;
                  $create_contact->hero_bg_img    = $url;

                  $create_contact->save();
             
    
        }
  
          flash('Updated Successfully')->success();
          return back();
    }


    public function updateContactUsPage($id){

        $findContact = Contact::where('id',$id)->first();

        return view('contact.admin-contact-us-create')->with('findContact',$findContact);

    }


    public function updateContactUsPagePost(Request $request , $id){
       


          $why_us_text_big    = $request->input('hero-bg-text');
          $why_us_text_small  = $request->input('hero_bg_small'); 
          $embeded_url        = $request->input('embeded');
          $contact_email      = $request->input('contact_email');
          $contact_number     = $request->input('contact_number');
          $address            = $request->input('address');
  
  
        
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
              $url = 'why-tru/'.$path;
              Storage::put($url, $resize->__toString());
  
              
     
  
              $findWhyUsPage = Contact::where('id',$id)->update([
                  'hero_bg_text'   => $why_us_text_big,
                  'hero_bg_small'  => $why_us_text_small,
                  'embed_url'      => $embeded_url,
                  'contact_email'  => $contact_email,
                  'contact_number' => $contact_number,
                  'address'        => $address,
                  'hero_bg_img'    => $url,
               //   'updated_at'     => date('Y,M,D'),
              ]);
        }else{
  
                  $findWhyUsPage = Contact::where('id',$id)->update([
                      'hero_bg_text'   => $why_us_text_big,
                      'hero_bg_small'  => $why_us_text_small,
                      'embed_url'      => $embeded_url,
                      'contact_email'  => $contact_email,
                      'contact_number' => $contact_number,
                      'address'        => $address,
                      // 'updated_at'     => date('Y,M,D'),
                  ]);
        }
  
          flash('Updated Successfully')->success();
          return back();
    }
}
