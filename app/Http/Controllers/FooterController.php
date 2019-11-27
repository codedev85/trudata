<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footer ;

class FooterController extends Controller
{
    //
    public function footerPage($id){

        $findFooter = Footer::where('id',$id)->first();
        

        return view('footer.footer')->with('findFooter',$findFooter);
    }

    public function createFooter(Request $request){
      

        $trudata        = $request->input('trudata');
        $welcome        = $request->input('welcome');
        $address        = $request->input('company_addres');
        $company        = json_encode($request->input('company'));
        $product        = json_encode($request->input('product'));
        $legal          = json_encode($request->input('legal'));
        $connectEmail   = $request->input('connect_email');
        $connectAddress = $request->input('connect_address');
        $copyright      = $request->input('copyright');

        $footer                 = new Footer();
        $footer->trudata        = $trudata;
        $footer->welcome        = $welcome;
        $footer->coy_address    = $address;
        $footer->company        = $company;
        $footer->product        = $product;
        $footer->legal          = $legal;
        $footer->connectEmail   = $connectEmail;
        $footer->connectAddress = $connectAddress;
        $footer->copyright      = $copyright;
        $footer->save();

        flash('Footer Created Successfully')->success();
        return back();
    }

    public function updateFooter(Request $request , $id){

        
        $trudata        = $request->input('trudata');
        $welcome        = $request->input('welcome');
        $address        = $request->input('company_addres');
        $company        = json_encode($request->input('company'));
        $product        = json_encode($request->input('product'));
        $legal          = json_encode($request->input('legal'));
        $connectEmail   = $request->input('connect_email');
        $connectAddress = $request->input('connect_address');
        $copyright      = $request->input('copyright');

        Footer::where('id',$id)->update([
            'trudata'        => $trudata,
            'welcome'        => $welcome,
            'coy_address'    => $address,
            'company'        => $company,
            'product'        => $product,
            'legal'          => $legal,
            'connectEmail'   => $connectEmail,
            'connectAddress' => $connectAddress,
            'copyright'      => $copyright
        ]);
        flash('Updated Successfully')->success();
        return back();
    }
}
