<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    // Reservation page
    public function reservation(){
        return view('web.reservation.reservation');
    }
}
