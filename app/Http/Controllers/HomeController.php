<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return redirect('homeafterlogin');
    }
    public function destinasiadmin(){
        return redirect('/edit');
    }
    public function destinasiuser(){
        return redirect('/destinasi');
    }
}
