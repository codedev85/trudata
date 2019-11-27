<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Hash;
use Mail;

class RoleController extends Controller
{
    //
    public function allRoles(){
  
        $roles = Role::all();

        return view('roles.all-roles')
                                    ->with('roles',$roles);
    }


    public function addNewRole(){

        return view('roles.add-new-role');
    }

    public function postRole(Request $request){
        //dd($request);

        $role = $request->input('role');
         
        $addRole = new Role();
        $addRole->name = $role;
        $addRole->save();
        flash('Role Created Successfully')->success();
        return back();
    }


    
    public function editRole($id){
        //dd($request);

       $findRole = Role::where('id',$id)->first();

       return view('roles.edit-role')->with('findRole',$findRole);
    }

    public function updateRole(Request $request,$id){

            $role = $request->input('role');

            Role::where('id',$id)->update([
                'name' => $role,
            ]);

            flash('Role Updated Successfully')->success();
            return back();

    }

    //find user and update their information 


    public function findUser($id){

        $findUser = User::where('id',$id)->first();

        return view('admin.update-info')->with('findUser',$findUser);

    }

    public function postUpdateUser(Request $request,$id){

      
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $role = $request->input('role');

        User::where('id',$id)->update([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'role_id'  => $role,
        ]);
        flash('User updated Successfully')->success();
        return back();
    }

    public function allAdmin(){
        $admins = User::paginate(5);

        return view('admin.all-admin')->with('admins',$admins);
    }

    public function editAdmin($id){

     
        $findUserAdmin = User::where('id',$id)->first();
      

        return view('admin.admin-reset')->with('findUserAdmin',$findUserAdmin);

    }

    public function addNewAdmin(){

        $roles =Role::all();

        return view('admin.add-admin')->with('roles',$roles);
    }


    public function postAdmin(Request $request){
       
        $name = $request->input('name');
        $this->email = $request->input('email');
        $this->password = $request->input('password');


        $confirmpassword = $request->input('confirm_password');
        $role = $request->input('role');

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
     // Output: 54esmdr0qf
       $this->randStrPassword =  substr(str_shuffle($permitted_chars), 0, 5);
     
        //dd( Hash::make($randStrPassword));
        Mail::send(['text/html'=> $this->randStrPassword ],['name'=>'$artsttsts'], function($message){
    
            // 'Your login credential is <br><a>'.$this->email .'</a><br><a>'.$this->randStrPassword. '</a>'
             $message->to($this->email,'Password')->subject('Login Credentials' )->setBody( 'Your login credential is '.$this->email .'password '.$this->randStrPassword);
             $message->from('trudata@gmail.com',$this->email);

           });

  
    
      

    
//     $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
//     $beautymail->send('emails.welcome', [], function($message) 
//     {
//         $email = Input::get('email');
//         $message
//             ->from('donotreply@justlaravel.com')
//             ->to($email, 'Howdy buddy!')
//             ->subject('Test Mail!');
//     });
//          return Redirect::back();
//     //return view('welcome');

       
// dd('work');
     

        // if($password == $confirmpassword ){
       
            $newAdmin           = new User();
            $newAdmin->name     = $name ;
            $newAdmin->email    =  $this->email;
            // $newAdmin->password = Hash::make($password);
            $newAdmin->password = Hash::make($this->randStrPassword);
            $newAdmin->role_id  = $role;
            $newAdmin->save();

            flash('User created Successfully. Check your mail for your login credentials')->success();
            return back();
     

 

    }

    public function suspendAdmin($id){
     User::where('id',$id)->update([
         'status'=> 0,
     ]);

     flash('Admin suspended')->success();
     return back();
    }

    public function approveAdmin($id){

        User::where('id',$id)->update([
            'status'=> 1,
        ]);
        flash('Admin approved')->success();
        return back();
    }

    public function sendMailToEachAdmin(Request $request, $id){


        $admin = User::where('id',$id)->first();

        return view('admin.send-mail-to-each-admin')->with('admin',$admin);

    }

    public function postMailToEachAdmin(Request $request){
       
        $this->email = $request->input('email');
        $this->subject = $request->input('subject');
        // $this->main_body - $request->input('main_body');
        $this->mainBody = $request->input('body');
        // dd($request->input('body'));

        Mail::send(['text/html'=> $this->email ],['name'=>'$artsttsts'], function($message){
    
            // 'Your login credential is <br><a>'.$this->email .'</a><br><a>'.$this->randStrPassword. '</a>'
             $message->to($this->email,'Password')->subject($this->subject )->setBody($this->mainBody);
             $message->from('trudata@gmail.com',$this->email);

           });
           return back();
    }


    public function sendMailToAllAdmin(){
        $admins = User::all();

        return view('admin.send-mail-to-all-admin')->with('admins',$admins);
    }


    public function postMailToAllAdmin(Request $request){
        // dd($request);
        $this->email = json_decode($request->input('email'));
         $mails = [];
     
         $adminEmail = array_push($mails , $this->email);
       
        $this->subject = $request->input('subject');
        $this->mainBody = $request->input('main_body');

//   dd($mails[0]);
  foreach($mails[0] as $this->mailingList){
 
        Mail::send(['text/html'=> $this->mailingList ],['name'=>'$artsttsts'], function($message){
    
             $message->to($this->mailingList,'Password')->subject($this->subject )->setBody($this->mainBody);
             $message->from('trudata@gmail.com',$this->mailingList);

           });
        }
     
           return back();

    }
}
