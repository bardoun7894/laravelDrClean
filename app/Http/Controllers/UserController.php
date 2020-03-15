<?php

namespace App\Http\Controllers;
use App\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{  
    
    public function index(){
        if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
            // Ignores notices and reports all other kinds... and warnings
            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
            // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
            }
    $users =User::with(['adresses'])->paginate(16);

    return view('admin.customers.customers')->with(
        ['users' =>$users,]);
}

public function store(Request $request){
   $request->validate([
    'first_name'=>'required',
    'last_name'=>'required',
    'email'=>'required',
    'number_phone'=>'required',
   ]);

   $user=new User();
   $user->first_name= $request->input('first_name');
   $user->last_name= $request->input('last_name');
   $user->email= $request->input('email');
   $user->number_phone= $request->input('number_phone');
   $user->password= $request->input('password');
   $user->save();
   Session::flash('message','User '.$user->first_name.' has been added Successfully');
   return redirect()->back();
}


public function delete(Request $request)
{
$id=$request->input('user_id');
User::destroy($id);
Session::flash('message','User has been deleted');
return redirect()->back();
}


public function update(Request $request)
{
 
}


}
