<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){
        return view('homeafterlogin');
    }
    public function destinasiuser(){
        return view('website');
    }
}