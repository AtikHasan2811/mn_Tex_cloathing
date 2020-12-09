<?php

namespace App\Http\Controllers;

use App\Gallary;
use App\Machinery;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MachineryController extends Controller
{
    public function index(){
        $data['machinery']=Machinery::all();
        return view('admin.machinery',$data);
    }

//id	machine_name	number	origin	max_prm	max_width	average_production	description	image	status	created_at	updated_at
    public function store(Request $request){
//id	machine_name	number	origin	max_prm	max_width	average_production	description	image	status	created_at	updated_at

        $data = new Machinery();
        $data->machine_name =$request->machine_name;
        $data->machine_type =$request->machine_type;
        $data->number =$request->number;
        $data->origin =$request->origin;
        $data->max_prm =$request->max_prm;
        $data->max_width =$request->max_width;
        $data->average_production =$request->average_production;
        $data->description =$request->description;
        if(isset($request->status))
        {
            $data->status = true;
        }else {
            $data->status = false;
        }
        $image = $request->file('image');
        if (isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = uniqid().'-'.$currentDate.'.'.$image->getClientOriginalExtension();

            if (!file_exists('uploads/about')){
                makeDirectory('uploads/about',0777,true);
            }
            $image->move('uploads/about',$imageName);
        }else{
            $imageName = 'default.png';
        }
        $data->image =$imageName;
        $data->save();
        return back();
    }

//id	caption	discription	image	status	created_at	updated_at
    public function machinerydestroy(Request $request,$id){
        $data= Machinery::find($id);
        if (file_exists('uploads/about/'.$data->image)){
            unlink('uploads/about/'.$data->image);
        }
        $data->delete();
        return redirect()->back();
    }
//id	caption	discription	image	status	created_at	updated_at
    public function machineryupdate(Request $request){
        $data=Machinery::where('id',$request->id)->first();
        $data->machine_name =$request->machine_name;
        $data->machine_type =$request->machine_type;
        $data->number =$request->number;
        $data->origin =$request->origin;
        $data->max_prm =$request->max_prm;
        $data->max_width =$request->max_width;
        $data->average_production =$request->average_production;
        $data->description =$request->description;
        if(isset($request->status))
        {
            $data->status = true;
        }else {
            $data->status = false;
        }
        $image = $request->file('image');

        if (isset($image)){
            if (file_exists('uploads/photo/'.$data->image)){
                unlink('uploads/photo/'.$data->image);
            }
            $currentDate = Carbon::now()->toDateString();
            $imageName = uniqid().'-'.$currentDate.'.'.$image->getClientOriginalExtension();

            if (!file_exists('uploads/about')){
                mkdir('uploads/about',0777,true);
            }
            $image->move('uploads/about',$imageName);
        }else{
            $imageName = $data->image ;
        }
        $data->image =$imageName;
        $data->save();
        return redirect()->back();
    }
}


//id	machine_name	number	origin	max_prm	max_width	average_production	description	image	status	created_at	updated_at
