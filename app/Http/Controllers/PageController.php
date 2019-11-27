<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trudata;
use App\Contact;
use App\About;
use App\Footer;
use App\Term;

class PageController extends Controller
{
    //
    public function allPages(){

        $whyUs    = Trudata::all();
        $contact  = Contact::all();
        $about    = About::all();
        $footer   = Footer::all();
        $term     = Term::all();

        return view('pages.pages')
                           ->with('term',$term)
                           ->with('about',$about)
                           ->with('footer',$footer)
                           ->with('contact',$contact)
                           ->with('whyUs',$whyUs);
    }
}
