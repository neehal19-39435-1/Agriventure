<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use App\Http\Requests\StoreFarmerRequest;
use App\Http\Requests\UpdateFarmerRequest;
use Illuminate\Http\Request;

class FarmerController extends Controller
{
public function signUp(Request $request){
           
    $validate=$request->validate([
        "name"=>'required|max:20',
         "email"=>'required',
         "phone"=>'required|max:13',
         "address"=>'required',
         "store"=>'required',
         "password"=>'required|max:8',
         "retypepass"=>'required'
    ],

    ['name.required'=>'Field cannot be empty',
     'email.required'=>'Field cannot be empty',
    'phone.required'=>'Field cannot be empty',
    'address.required'=>'Field cannot be empty',
    'store.required'=>'Field cannot be empty',
    'password.required'=>'Field cannot be empty',
    'retypepass.required'=>'Field cannot be empty']

);
// $status="pending";
$status="Approved";
$password=$request->password;
$retypepass=$request->retypepass;

if($retypepass==$password){

    $emailCheck= Farmer::where('email',$request->email)->first();
    if($emailCheck){
        return redirect()->back()->with('failed', 'Email already exists');
    }
    else{

        $farmer= new Farmer();
        $farmer->name=$request->name;
        $farmer->email=$request->email;
        $farmer->phone=$request->phone;
        $farmer->address=$request->address;
        $farmer->store=$request->store;
        $farmer->password= md5($request->password);
        $farmer->status=$status;
        $res=$farmer->save();

        if($res){
            
            return redirect()->route('farmerlogin');
        }
        else{
            return redirect()->back()->with('failed', 'Registration Failed');
        }
    }

    }
    else{
      return redirect()->back()->with('failed', 'Confirm Password doesnt match with password');
    }
}

public function signIn(Request $request){

    $loginCheck = Farmer::where('email',$request->email)->where('password',md5($request->password))->first();

    if($loginCheck){
        if($loginCheck->status == "Approved")
        {
            $request->session()->put('id',$loginCheck->id);
            $request->session()->put('name',$loginCheck->name);
            $request->session()->put('email',$loginCheck->email);
            $request->session()->put('phone',$loginCheck->phone);
            $request->session()->put('address',$loginCheck->address);
            $request->session()->put('store',$loginCheck->store);
            return  redirect()->route('dashboard');
        }
        else{
            return redirect()->back()->with('failed', 'Your Registered id is in observation, Please wait for Admins approval');
        }
    }
    else{
        return redirect()->back()->with('failed', 'Invalid username or password');
    }
    }
    public function logout(){
        session()->forget('id');
        session()->forget('name');
        session()->forget('email');
        session()->forget('phone');
        session()->forget('address');
        session()->forget('store');
        return redirect()->route('farmerlogin');
    }



}


