<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    //

    public function menuPage(){
      
        $menu = Menu::orderBy('created_at','DESC')->first();

        return view('menu.menu')->with('menu',$menu);
    }

    public function postMenu(Request $request){

       
        $menu = json_encode($request->input('menu'));
        
        $newMenu = new Menu();
        $newMenu->menu = $menu;
        $newMenu->save();

        flash('Menu created Successfully')->success();
        return back();
    }

    public function updateMenu(Request $request,$id){
        
        $menu = json_encode($request->input('menu'));
     
        Menu::where('id',$id)->update([
            'menu'=> $menu,
        ]);

        flash('Menu updated Successfully')->success();
        return back();
    }
}
