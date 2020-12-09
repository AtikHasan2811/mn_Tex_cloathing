<?php

namespace App\Http\Controllers;

use App\Advantage;
use App\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
//id	mobile	email	address	status	created_at	updated_at
    public function index(){
//        $data = array();
//        $data['menu_active']= 5;
        $data['contact']=Contact::all();
        return view('admin.contact',$data);
    }


    public function store(Request $request){
//        return $request->all();
        $this->validate($request,[
            'mobile' => 'required',
            'email' => 'required',
            'address' => 'required',
//            'status' => 'required',
        ]);
//        id	name	description	image	status	created_at	updated_at
        $data = new Contact();
        $data->mobile =$request->mobile;
        $data->email =$request->email;
        $data->address =$request->address;

        if(isset($request->status))
        {
            $data->status = true;
        }else {
            $data->status = false;
        }

        $data->save();
        return back();
    }


    public function contactdestroy(Request $request,$id){
        $data= Contact::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function contactupdate(Request $request){
        $data=Contact::where('id',$request->id)->first();
        $data->mobile =$request->mobile;
        $data->email =$request->email;
        $data->address =$request->address;
        if(isset($request->status))
        {
            $data->status = true;
        }else {
            $data->status = false;
        }

        $data->save();
        return redirect()->back();
    }



}
