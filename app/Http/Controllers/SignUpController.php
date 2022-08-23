<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function getSignUp (){
        return view ('signUp'); 
    }
    public function postSignUp (Request $request) {
       $user = new User; 
       $user -> user_name = $request -> user_name; 

       $user -> full_name = $request -> full_name;
       $user -> password = Hash::make($request->password);
       $user->save(); 
       return redirect() ->back()->with('Success', 'Create new user success');
    }
}
