<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    // view index page
    public function index(){
        $popularData = Product::where(['is_active'=>"1",'is_popular'=>"1",'is_deleted'=>"0"])->get();
        $menuData = Product::where('is_deleted',"0")->get();
        return view('web.index.index')->with(['popularData'=>$popularData,'menuData'=>$menuData]);
    }

    // register user
    public function registerUser(Request $request){
        $validate = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email',
            'mobileNo'=>'required|numeric',
            'password'=>'required',
            'confirmPassword'=>'required|same:password'
        ]);
        if($validate->fails()){
            return response()->json(['status'=>0,'message'=>$validate->errors()->first()]);
        }
        $insert = new User();
        $insert->fill([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile_no'=>$request->mobileNo,
            'password'=>Hash::make($request->password)
        ])->save();
        if($insert){
            Auth::guard('web')->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')]);
            return response()->json(['status'=>1,'message'=>"Account has been registered successfully"]);
        }else{
            return response()->json(['status'=>0,'message'=>"Failed to register account"]);
        }
    }

    // login check
    public function loginCheck(Request $request){
        $validate = Validator::make($request->all(),[
           'email'=>"required",
           'password'=>'required',
        ]);
        if($validate->fails()){
            return response()->json(['status'=>0,'message'=>$validate->errors()->first()]);
        }
        if(Auth::guard('web')->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])){
            return response()->json(['status'=>1,'message'=>"Logged in successfully."]);
        }else{
            return response()->json(['status'=>0,'message'=>"Failed to Login"]);
        }
    }
}
