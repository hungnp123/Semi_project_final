<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function getLogin (){
        return view ('login'); 
    }
    public function postLogin (Request $request) {
        $arr = ['user_name' => $request->user_name, 'password' => $request -> password]; 
        if(Auth::attempt($arr)) {
            return view ('user/homepage'); 
        }else {
            dd('Failed');
        }
    }
    public function getLogOut() {
        Auth::logout(); 
        return redirect()-> intented('user/login');
    }
}
