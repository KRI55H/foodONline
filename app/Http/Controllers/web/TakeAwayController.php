<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TakeAwayController extends Controller
{
    // place order
    public function create(Request $request){
        $id = Auth::guard('web')->user()->id;
        $orderId = strtoupper(Str::random(10));
        $insert = new Orders();
        $insert->fill([
            'user_id'=>$id,
            'order_id'=> $orderId,
            'total'=>$request->total
        ])->save();
        if($insert){
            Cart::where(['user_id'=>$id,'status'=>'0'])->update(['order_id'=>$orderId,'status'=>'1']);
            return response()->json(['status'=>1,'message'=>'Your order has been placed.','url'=>route('orders')]);
        }else{
            return response()->json(['status'=>0,'message'=>'Failed to place order.']);
        }
    }
}
