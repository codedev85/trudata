<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trudata;
use App\Contact;
use App\About;

class PageController extends Controller
{
    //
    public function allPages(){

        $whyUs    = Trudata::all();
        $contact  = Contact::all();
        $about    = About::all();

        return view('pages.pages')
                           ->with('about',$about)
                           ->with('contact',$contact)
                           ->with('whyUs',$whyUs);
    }
}
