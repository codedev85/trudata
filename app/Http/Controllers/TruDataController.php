<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TruDataController extends Controller
{
    //
    public function getTruDataPage(){
        return view('tru-data.trudata');
    }
}
