<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DestinasiController;

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

Route::get('/home', [Home::class, 'index']);
Route::get('/destination', function () {
    return view('website');
});
Route::get('/welcome', function () {
    return view('homepage');
});


// by: Arpriansah Y
// Route::get('/', [infocation::class, 'index']);
Route::get('/view',[DestinasiController::class, 'index']);
Route::get('/login', [LoginController::class, 'pageloginregist'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/beranda', [BerandaController::class, 'index']);
Route::get('/pageadmin', [BerandaController::class, 'pageadmin'])->name('pageadmin');
Route::get('/pageuser', [BerandaController::class, 'pageuser'])->name('pageuser');