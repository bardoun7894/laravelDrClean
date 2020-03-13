<?php

namespace App\Http\Controllers\Api;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserApiResource;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    function register(Request $request){
     $request->validate([
       'first_name'=>'required',
       'last_name'=>'required',
       'email'=>'required',
       'password'=>'required',
       ]);
  $user=  User::create([
        'first_name'=>$request->input('first_name'),
        'last_name'=>$request->input('last_name'),
        'email'=>$request->input('email'),
        'password'=>Hash::make($request->input('password')),
        'api_token'=>bin2hex(openssl_random_pseudo_bytes(30))
    ]);
    return new UserApiResource($user);
    }
    function login(Request $request){
$request ->validate(
    [
        'email'=>'required',
        'password'=>'required',
    ]
    );

    $username = $request->input('email') ;
    
    $credentials =$request->only('email','password');

    if(Auth::attempt($credentials)){
        $user=User::where( 'email',$username)->first();
        return new UserApiResource($user);
    }
    $message =[
        'error'=>true,
        'message'=>'user login attempt failed'
            ];
   return response($message,404);



    }

}
