<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
// use App\Http\Controllers\infocation;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('homepage');
});


Route::get('/login', [LoginController::class, 'pageloginregist'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/register', [RegisterController::class, 'register'])->name('register');



//Route::group(['middleware'=>['auth', 'ceklevel::user']], function(){
//    Route::get('/home', function () {
//        return view('homeafterlogin');
//    });
//    Route::get('/destinasi', [HomeController::class, 'destinasiuser'])->name('destinasiuser');
//});

Route::group(['middleware'=>['auth', 'ceklevel::admin']], function(){
    //Route::get('/home', function () {
    //    return view('homeafterlogin');
    //});
    //Route::get('/destinasi', [HomeController::class, 'destinasiuser'])->name('destinasiuser');
<<<<<<< HEAD
    Route::get('/edit', [HomeController::class, 'destinasiadmin'])->name('destinasiadmin');
    Route::get('/home/edit/{id}', [HomeController::class, 'edit']);
    
=======
    // Route::get('/edit', [HomeController::class, 'destinasiadmin'])->name('destinasiadmin');
    Route::get('/edit',[DestinasiController::class, 'index'])-> name('destinasiadmin');
>>>>>>> 76c90f02ab2df328f86a663fcde31a259f0828ec
});

Route::group(['middleware'=>['auth', 'ceklevel::admin','ceklevel::user']], function(){
    Route::get('/view',[DestinasiController::class, 'index'])-> name('destinasiuser');
    Route::get('/home', function () {
        return view('homeafterlogin');
    });
<<<<<<< HEAD
    Route::get('/destinasi', [HomeController::class, 'destinasiuser'])->name('destinasiuser');
    Route::get('/home/update', [HomeController::class, 'update']);
=======
    // Route::get('/destinasi', [HomeController::class, 'destinasiuser'])->name('destinasiuser');
>>>>>>> 76c90f02ab2df328f86a663fcde31a259f0828ec
});