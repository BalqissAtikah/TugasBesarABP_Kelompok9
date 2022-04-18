<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;

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


// by: Arpriansah Y
Route::get('/login', [LoginController::class, 'pageloginregist'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/beranda', [BerandaController::class, 'index']);
Route::get('/pageadmin', [BerandaController::class, 'pageadmin'])->name('pageadmin');
Route::get('/pageuser', [BerandaController::class, 'pageuser'])->name('pageuser');