<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class NewMailController extends Controller
{
   
    
  
        public function __constructor(){
    
        }
        public  function send(Request $request) {
          //gmail credentials
          //trudataservices@gmail.com
          //trud@t@123
            $this->email= $request->input('email');
            $this->message = $request->input('message');
            $this->f_name= $request->input('first_name');
            $this->l_name= $request->input('last_name');
            $this->subject = $request->input('subject');
         
            
            $this->data = array('name'=>"Ogbonna Vitalis(sender_name)", "f_name" => $this->f_name ,'l_name'=>$this->l_name, "body" => $this->message);
              
            // dd($data['body']);
           // dd($data['f_name']);
          
             Mail::send(['text/html'=>'mails.mail'],['name'=>'$artsttsts'], function($message){
             //dd($this->email);
            // dd($this->subject);
         
              $message->to('zaccheausolawuyi@gmail.com','Trudata')->subject($this->subject) ->setBody($this->data['body']);
              $message->from($this->email,$this->email);
    //   dd($message);
            });
         
            return back();
    
        }
    
    
        public  function send_to_kjk(Request $request) {
          
          $this->email= $request->input('email');
          $this->subject = $request->input('subject');
    
     
          Mail::send(['text'=>'mails.mail'],['name'=>'$artsttsts'], function($message){
           //dd($this->email);
          // dd($this->subject);
        
            $message->to($this->email,'to ola')->subject($this->subject);
            $message->from('zaccheausolawuyi@gmail.com','Tworeport');
    //   dd($message);
          });
       
          return back();
    
      }
    
    
}
