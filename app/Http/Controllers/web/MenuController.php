<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    // menu page
    public function menu(){
        $main = array();
        $productData = Product::where(['is_active'=>'1','is_deleted'=>'0'])->get();
        $cartData = array();
        if(Auth::guard('web')->check()){
            foreach ($productData as $row){
                $cart = Cart::where(['user_id'=>Auth::guard('web')->user()->id,'product_id'=>$row->id,'status'=>'0'])->first();
                $row['qty'] = isset($cart->qty) ? $cart->qty :0;
                array_push($main,$row);
            }
            $cartData = Product::select('product.name','product.price','c.total','c.discount','c.delivery_charge','c.qty')
                ->join('cart as c','c.product_id','product.id')
                ->where(['is_active'=>'1','is_deleted'=>'0','user_id'=>Auth::guard('web')->user()->id,'status'=>'0'])
                ->get();
        }
        else{
            $main = $productData;
        }
        return view('web.menu.menu')->with([
            'data'=>$main,
            'cart'=>$cartData,
            'total'=> 0,
            'subtotal'=>0,
            'discount'=>0,
            'delivery'=>0
        ]);
    }

    // add items
    public function create(Request $request){
        if(Auth::guard('web')->check()){
            $cartData = Cart::where(['user_id'=>Auth::guard('web')->user()->id,'status'=>'0','product_id'=>$request->id])->first();
            $productData = Product::where('id',$request->id)->first();
            if($request->type == "insert"){
                if(isset($cartData)){
                    $update = Cart::where('id',$cartData->id)->update([
                        'qty' => $cartData->qty + 1,
                        'total' => $cartData->total + $productData->price,
                        'discount' => $cartData->discount + $productData->discount,
                    ]);
                    if($update){
                        $status = 1;
                    }else{
                        $status = 0;
                    }
                }
                else{
                    $input['user_id'] = Auth::guard('web')->user()->id;
                    $input['product_id'] = $request->id;
                    $input['qty'] = 1;
                    $input['total'] = $productData->price;
                    $input['discount'] = $productData->discount;
                    $input['delivery_charge'] = $productData->delivery_charge;
                    $input['status'] = '0';
                    $insert = new Cart();
                    $insert->fill($input)->save();
                    if($insert){
                        $status = 1;
                    }else{
                        $status = 0;
                    }
                }
            }
            else if($request->type == "remove"){
                if(isset($cartData)){
                    if($cartData->qty > 1){
                        $update = Cart::where('id',$cartData->id)->update([
                            'qty' => $cartData->qty - 1,
                            'total' => $cartData->total - $productData->price,
                            'discount' => $cartData->discount - $productData->discount,
                        ]);
                        if($update){
                            $status = 1;
                        }else{
                            $status = 0;
                        }
                    }else{
                        $delete = Cart::where(['user_id'=>Auth::guard('web')->user()->id,'status'=>'0','product_id'=>$request->id])->delete();
                        if($delete){
                            $status = 1;
                        }else{
                            $status = 0;
                        }
                    }
                }else{
                    return response()->json(['status'=>0,'message'=>'Action failed.']);
                }
            }
            if($status == 1){
                $cart = Product::select('product.name','product.price','c.total','c.discount','c.delivery_charge','c.qty')
                    ->join('cart as c','c.product_id','product.id')
                    ->where(['is_active'=>'1','is_deleted'=>'0','user_id'=>Auth::guard('web')->user()->id,'status'=>'0'])
                    ->get();
                $subtotal = 0;
                $discount = 0;
                $delivery = 0;
                $total = 0;
                $data = '<div class="card-body p-4 border-bottom">';
                if(sizeof($cart) > 0) {
                    foreach ($cart as $row) {
                        $data .= '<div class="row mb-1">
                                            <span class="text-muted align-middle fs-7 col-md-8">' . $row->qty . 'x ' . $row->name . '</span>
                                            <span class="col-md-4 text-end">&#8377; ' . $row->price . '</span>';
                        $data .= '</div>';
                        $subtotal = $subtotal + $row->total;
                        $discount = $discount + $row->discount;
                        if ($row->delivery_charge > $delivery) {
                            $delivery = $row->delivery_charge;
                        }
                    }
                    $total = $subtotal - $discount + $delivery;
                }else{
                    $data .= '<div class="text-center">
                                    <img src="'.asset('public/assets/img/no-item.png').'">
                                </div>';
                }

                $data .= '<div class="row mt-3 mb-1">
                                <span class="col-md-9 fs-7">Sub total</span>
                                <span class="col-md-3 fs-7 text-end subtotal">&#8377; '.$subtotal.'</span>
                            </div>
                            <div class="row  mb-1">
                                <span class="col-md-9 fs-7">Discount</span>
                                <span class="col-md-3 fs-7 text-end discount">- &#8377; '.$discount.'</span>
                            </div>
                            <div class="row mb-1">
                                <span class="col-md-9 fs-7">Delivery charge</span>
                                <span class="col-md-3 fs-7 text-end delivery">&#8377; '.$delivery.'</span>
                            </div>
                            <div class="row mt-2">
                                <span class="col-md-8 fs-5 fw-bold">GRAND TOTAL</span>
                                <span class="col-md-4 fs-5 text-end total" data-total="'.$total.'">&#8377; '.$total.'</span>
                            </div>
                        </div>
                        <div class="card-footer">';
                if(auth()->guard('web')->check() && sizeof($cart) > 0){
                    $data .= '<button class="btn btn-primary" id="orderNow"><i class="ri-loader-2-line spinner" style="display: none"></i>PLACE ORDER</button>';
                }else{
                    $data .='<button class="btn btn-primary" disabled>PLACE ORDER</button>';
                }
                $data .='</div>';
                return response()->json(['status'=>1,'data'=>$data]);
            }
            else{
                return response()->json(['status'=>0,'message'=>'Failed.','qty'=>$cartData->qty]);
            }
        }
        else{
            return response()->json(['status'=>0,'message'=>'Please login first','qty'=>0]);
        }
    }

}
