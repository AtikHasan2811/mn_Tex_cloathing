<?php

namespace App\Http\Controllers;
use App\User;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginCheck(Request $request){
        $checkemail = User::where('email', $request->email)->first();
        if($checkemail){
            if (Hash::check($request->password, $checkemail->password)){

                if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
                {
                    Session::flash('message', 'Authenticating Login Successfully');
                    return redirect()->route('dashboard');
                }
               
            }else{
                Session::flash('message','Password does not match!!!');
                return redirect()->back();
            }
        }else{
            Session::flash('message','Email does not found!!!');
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();
        Session::flash('success', 'Logout Successfully');
        return redirect()->route('index');
    }
}
