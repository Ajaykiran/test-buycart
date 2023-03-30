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
       // validate form data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|unique:users|max:255',
        'password' => 'required|string|min:8',
    ]);

    // create new user
    $user = new User();
    $user->name = $validatedData['name'];
    $user->email = $validatedData['email'];
    $user->password = $validatedData['password'];
    $user->save();

   // redirect to success page
   return redirect('/success');
    }

    public function loginuser(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8',
        ]);
        $user =USer::where('email','=',$request->email)->first();
        if($user){

        }else{
            return back() ->with('fail','This email is not registered.');
        }
        
    

    }
}
