<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function pageloginregist(){
        return view('loginregist');
    }
    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/beranda');
        }
        return view('loginregist');
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }
}