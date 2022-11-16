<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Cart;
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
    public function index(Request $request){
        $popularData = Product::where(['is_active'=>"1",'is_popular'=>"1",'is_deleted'=>"0"])->get();
        $menuData = Product::where('is_deleted',"0")->limit(6)->get();
        return view('web.index.index')->with(['popularData'=>$popularData,'menuData'=>$menuData]);
    }

    // register user
    public function registerUser(Request $request){
        $validate = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'mobile_no'=>'required|numeric',
            'password'=>'required',
            'confirm_password'=>'required|same:password'
        ]);
        if($validate->fails()){
            return response()->json(['status'=>0,'message'=>$validate->errors()->first()]);
        }
        $insert = new User();
        $insert->fill([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile_no'=>$request->mobile_no,
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

    // edit user
    public function editUser(Request $request){
        $validate = Validator::make($request->all(),[
           'name'=>'required',
           'mobile_no'=>'required',
           'profile_img'=>'sometimes|mimes:png,jpg,jpeg,svg'
        ]);
        if($validate->fails()){
            return response()->json(['status'=>0,'message'=>$validate->errors()->first()]);
        }else{
            if($request->hasFile('profile_img')) {
                // unlink old file
                if (Auth::guard('web')->user()->profile_img != ""){
                    if (file_exists(public_path('/assets/img/user-img/' . Auth::guard('web')->user()->profile_img))) {
                        unlink(public_path('/assets/img/user-img/' . Auth::guard('web')->user()->profile_img));
                    }
                }
                // new file
                $file_name = "pro_".time().'.'.$request->profile_img->extension();
                $request->profile_img->move(public_path('/assets/img/user-img/'),$file_name);
                $input['profile_img'] = $file_name;
            }
            $input['name'] = $request->name;
            $input['mobile_no'] = $request->mobile_no;
            $update = User::where('id',Auth::guard('web')->user()->id)->update($input);
            if($update){
                return response()->json(['status'=>1,'message'=>"Profile has been updated successfully."]);
            }else{
                return response()->json(['status'=>0,'message'=>"Failed to update profile."]);
            }
        }
    }

    // logout
    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('/');
    }

}
