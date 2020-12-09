<?php

namespace App\Http\Controllers;

use App\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $data['slider']=Slider::all();
        return view('admin.slider',$data);
    }

    public function store(Request $request){
        $data = new Slider();
        $data->title =$request->title;
        $data->subtitle =$request->subtitle;
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



    public function sliderdestroy(Request $request,$id){
        $data= Slider::find($id);
        if (file_exists('uploads/about/'.$data->image)){
            unlink('uploads/about/'.$data->image);
        }
        $data->delete();
        return redirect()->back();
    }


    public function sliderupdate(Request $request){
        $data=Slider::where('id',$request->id)->first();

        $data->title =$request->title;
        $data->subtitle =$request->subtitle;
        $data->description =$request->description;
        if(isset($request->status))
        {
            $data->status = true;
        }else {
            $data->status = false;
        }


        $image = $request->file('image');
        if (isset($image)){
            if (file_exists('uploads/about/'.$data->image)){
                unlink('uploads/about/'.$data->image);
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
        $data->image =$imageName;
        $data->save();
        return redirect()->back();


    }

}
