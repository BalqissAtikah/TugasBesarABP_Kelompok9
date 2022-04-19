<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('homeafterlogin');
    }
    public function destinasiadmin(){
        return view('websiteadmin');
    }
    public function destinasiuser(){
        return view('website');
    }
}
