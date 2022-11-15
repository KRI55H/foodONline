<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    // index page
    public function index(){
        $orders = Orders::where('user_id',Auth::guard('web')->user()->id)->orderBy('id','DESC')->get();
        return view('web.orders.index')->with('data',$orders);
    }
}
