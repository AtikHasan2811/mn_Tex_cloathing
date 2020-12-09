<?php

namespace App\Http\Controllers;

use App\photo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(){
        $data = array();
        $data['menu_active']= 5;
        $data['photos']=photo::all();
        return view('layouts.frontend.partial.photo',$data);
    }

    public function store(Request $request){
    	     $this->validate($request,[
            'image' => 'required',
            'caption' => 'required',
        ]);

        $data = new photo();
        $data->caption =$request->caption;
        $image = $request->file('image');
        if (isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = uniqid().'-'.$currentDate.'.'.$image->getClientOriginalExtension();

            if (!file_exists('uploads/photo')){
                makeDirectory('uploads/photo',0777,true);
            }
            $image->move('uploads/photo',$imageName);
        }else{
            $imageName = 'default.png';
        }
        $data->image =$imageName;
        $data->save();
        return back();
    }

    public function photoview(){
        $data= photo::all();
        return view('admin.photo',compact('data'));
    }

    public function photodestroy(Request $request,$id){
       $data= photo::find($id);
        if (file_exists('uploads/photo/'.$data->image)){
            unlink('uploads/photo/'.$data->image);
        }
       $data->delete();
       return redirect()->back();
    }

    public function photoedit($id){

    }



    public function photoupdate(Request $request){
        $data=photo::where('id',$request->id)->first();
        $data->caption =$request->caption;
        $image = $request->file('image');

        if (isset($image)){
            if (file_exists('uploads/photo/'.$data->image)){
                unlink('uploads/photo/'.$data->image);
            }
            $currentDate = Carbon::now()->toDateString();
            $imageName = uniqid().'-'.$currentDate.'.'.$image->getClientOriginalExtension();

            if (!file_exists('uploads/photo')){
                mkdir('uploads/photo',0777,true);
            }
            $image->move('uploads/photo',$imageName);
        }else{
            $imageName = $data->image ;
        }
        $data->image =$imageName;
        $data->save();
       return redirect()->back();


    }


    public function sum(){
        return view('admin.sum');
    }

}
