<?php

use App\Http\Controllers\web\IndexController;
use App\Http\Controllers\web\MenuController;
use App\Http\Controllers\web\OrdersController;
use App\Http\Controllers\web\ReservationController;
use App\Http\Controllers\web\TakeAwayController;
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

    // user route
    Route::post('register-user',[IndexController::class,'registerUser'])->name('register-user');
    Route::post('login-user',[IndexController::class,'loginCheck'])->name('login-user');
    Route::post('edit-user',[IndexController::class,'editUser'])->name('edit-user');

    // menu route
    Route::get('menu',[MenuController::class,'menu'])->name('menu');
    Route::post('add-cart',[MenuController::class,'create'])->name('add-cart');

    // checkout routes
    Route::post('place-order',[TakeAwayController::class,'create'])->name('place-order');

    // order history
    Route::get('orders',[OrdersController::class,'index'])->name('orders');

    //reservation routes
    Route::get('reservation',[ReservationController::class,'reservation'])->name('reservation');
    Route::post('reserve-table',[ReservationController::class,'reserveTable'])->name('reserve-table');

    //logout
    Route::get('logout',[IndexController::class,'logout'])->name('logout');

