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
        return view('website');
    }

    // public function simpan(Request $request){
    //     DB::table('destinasi')->insert([
    //         'namadestinasi'=>$request->namadestinasi,
    //         'lokasi'=>$request->lokasi,
    //         'pulau'=>$request->pulau,
    //         'deskripsi'=>$request->deskripsi,
    //     ]);
    //     return redirect('/view');
    // }
    // public function edit(){
    //     $dest = DB::table('destinasi')->where('id', $id)->get();
    //     return view('edit', ['destinasi'=>$dest]);
    // }
    // public function update(Request $request){
    //     DB::table('destinasi')->where('id', $request->id)->update([
    //         'namadestinasi'=>$request->namadestinasi,
    //         'lokasi'=>$request->lokasi,
    //         'pulau'=>$request->pulau,
    //         'deskripsi'=>$request->deskripsi,
    //     ]);
    //     return redirect('/view');
    // }
}
