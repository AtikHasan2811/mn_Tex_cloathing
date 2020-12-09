<?php

namespace App\Http\Controllers;

use App\About;
use App\Advantage;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdvantageController extends Controller
{
    public function index(){
//        $data = array();
//        $data['menu_active']= 5;
        $data['about']=Advantage::all();
        return view('admin.advantage',$data);
    }


    public function store(Request $request){
//        return $request->all();
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
//            'status' => 'required',
        ]);
//        id	name	description	image	status	created_at	updated_at
        $data = new Advantage();
        $data->name =$request->name;
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

//            if (!file_exists(file_get_contents('upload/about'))){
//                makeDirectory('uploads/about',0777,true);
//            }


            $image->move('uploads/about',$imageName);
        }else{
            $imageName = 'default.png';
        }
        $data->image =$imageName;
        $data->save();
        return back();
    }


    public function photodestroy(Request $request,$id){
        $data= Advantage::find($id);
        if (file_exists('uploads/about/'.$data->image)){
            unlink('uploads/about/'.$data->image);
        }
        $data->delete();
        return redirect()->back();
    }

    public function advantageupdate(Request $request){
        $data=Advantage::where('id',$request->id)->first();
        $data->name =$request->name;
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
