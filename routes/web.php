<?php

use App\Http\Controllers\web\IndexController;
use App\Http\Controllers\web\ReservationController;
use Illuminate\Support\Facades\Route;

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
// web routes
//index routes
Route::get('/',[IndexController::class,'index'])->name('/');

// register route
Route::post('register-user',[IndexController::class,'registerUser'])->name('register-user');
// login route
Route::post('login-user',[IndexController::class,'loginCheck'])->name('login-user');


//reservation routes
Route::get('reservation',[ReservationController::class,'reservation'])->name('reservation');
