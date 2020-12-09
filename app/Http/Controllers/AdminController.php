<?php

namespace App\Http\Controllers;
use App\User;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminLogin(){
        return view('auth.login');
    }

    public function adminRegister(){
        return view('auth.register');
    }

    public function insertAdmin(Request $request){
        $checkmail = User::where('email', $request->email)->first();
        $user = new User();
        $user->name = $request->name;
        if($checkmail){
            Session::flash('message','Email already used');
            return redirect()->back();
        }else{
            $user->email= $request->email;
            if($request->password == $request->cpassword){
                $user->password=Hash::make($request->password);
                $user->save();
                return redirect()->route('adminLogin');
            }else{
                Session::flash('message','Password does not  match');
                return redirect()->back();
            }
        }
    }
}
