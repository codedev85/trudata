<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function getAboutUsPage(){
        return view('about.about-us');
    }
}
