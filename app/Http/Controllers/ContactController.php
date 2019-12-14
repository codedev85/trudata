<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\Contact;
use App\Footer;
use App\Social;
use App\Menu;
use Mail;
use Auth;

class ContactController extends Controller
{
    //
    public function getContactPage(){

        $contact = Contact::all();
        $footer = Footer::all();
        $socials = Social::all();
        $menu   = Menu::orderBy('created_at','DESC')->first();
    // dd($contact);
        return view('contact.contact-us')->with('contact',$contact)->with('footer',$footer)->with('socials',$socials)->with('menu',$menu);
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
                  'hero_bg' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=1918,min_height=490',
              ]);
  
              $hero_image = $request->file('hero_bg');
              $ext = $hero_image->getClientOriginalExtension();
              $image_resize = Image::make($hero_image->getRealPath());
              $resize = Image::make($image_resize)->fit(1918, 490)->encode($ext);
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
                  'hero_bg' => 'required|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=1272,min_height=375',
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

    public function contactKJK(){

        return view('contact.contact-kjk');
    }

    public function sendMailToKJK(Request $request){

        //dd($request);
//mailchimp account information 
//Trudata 
//Trud@t@123
  
            //gmail credentials
            //trudataservices@gmail.com
            //trud@t@123
            //   $this->email= $request->input('email');
                $this->message = $request->input('message');
                $this->subject = $request->input('subject');
                $this->data = array('name'=>"Ogbonna Vitalis(sender_name)", "f_name" => Auth::user()->name , "body" => $this->message);
                Mail::send(['text/html'=>'mails.mail'],['name'=>'$artsttsts'], function($message){
                $message->to('jumoke@kjk.com.ng','KJK COMMUNIVATIONS')->subject($this->subject) ->setBody($this->data['body']);
                $message->from(Auth::user()->email, Auth::user()->email);
      
              });
              flash('Email Sent  Successfully')->success();
              return back();
      
          
    }
}
