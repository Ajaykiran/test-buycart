<?php

namespace App\Http\Controllers;
use App\Models\User; 
use Illuminate\Http\Request;

class loginauthcontroller extends Controller
{
    public function login(){
        return view("auth.Login") ;
    }
    public function register(){
        return view("auth.Register");
    }
    public function registerUser(Request $request){
       $user=new user();
       $user->name=$request->name;
       $user->email=$request->email;
       $user->password=$request->password;
       $res=$user->save();
       if($res){
        return back() ->with('success','you are sucessfully registered');
       }else{
        return back() ->with('fail','try again');
       }

    }
}
