<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $request){
        User::create([
            'name' => $request->name,  
            'level' => $request->level, 
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/login');
    }
}
