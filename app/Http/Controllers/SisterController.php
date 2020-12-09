<?php

namespace App\Http\Controllers;

use App\Advantage;
use App\Sister;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SisterController extends Controller
{
//id	name	website	contact_parsone	phone	email	designation	address	description	status	created_at	updated_at

    public function index(){
//        $data = array();
//        $data['menu_active']= 5;
        $data['sister']=Sister::all();
        return view('admin.sister',$data);
    }


    public function store(Request $request){
//        return $request->all();

        $data = new Sister();
        $data->name =$request->name;
        $data->website =$request->website;
        $data->contact_parsone =$request->contact_parsone;
        $data->phone =$request->phone;
        $data->email =$request->email;
        $data->designation =$request->designation;
        $data->address =$request->address;
        $data->description =$request->description;
        if(isset($request->status))
        {
            $data->status = true;
        }else {
            $data->status = false;
        }

       $data->save();
        return back();
    }


    public function sisterdestroy(Request $request,$id){
        $data= Sister::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function sisterupdate(Request $request){
        $data=Sister::where('id',$request->id)->first();
        $data->name =$request->name;
        $data->website =$request->website;
        $data->contact_parsone =$request->contact_parsone;
        $data->phone =$request->phone;
        $data->email =$request->email;
        $data->designation =$request->designation;
        $data->address =$request->address;
        $data->description =$request->description;
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
