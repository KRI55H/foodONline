<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    // Reservation page
    public function reservation(){
        return view('web.reservation.reservation');
    }

    // table reservation
    public function reserveTable(Request $request){
        $validate = Validator::make($request->all(),[
            'name'=>'required',
            'mobile_no'=>'required|digits:10',
            'number_of_person'=>'required',
            'date'=>'required|before_or_equal:'.Carbon::now()->addDays(10).'|after_or_equal:'.Carbon::now(),
            'special_ocation'=>'required',
        ]);
        if($validate->fails()){
            return response()->json(['status'=>0,'message'=>$validate->errors()->first()]);
        }else{
            $input = $request->all();
            $input['user_id'] = Auth::guard('web')->user()->id;
            $insert = new Reservation();
            $insert->fill($input)->save();
            if($insert){
                return response()->json(['status'=>1,'message'=>'Table has been reserved.']);
            }else{
                return response()->json(['status'=>0,'message'=>'Failed to reserve table.']);
            }
        }
    }
}
