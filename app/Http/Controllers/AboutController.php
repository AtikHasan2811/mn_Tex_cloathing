<?php

namespace App\Http\Controllers;

use App\About;
use App\photo;
use Carbon\Carbon;
use Illuminate\Http\Request;


class AboutController extends Controller
{
    public function index(){
//        $data = array();
//        $data['menu_active']= 5;
        $data['about']=About::all();
        return view('admin.about',$data);
    }



//{{--        id	about	mission_vission	message	why_nslp	history	policy	image	status	created_at	updated_at--}}


public function store(Request $request){
//        return $request->all();
        $this->validate($request,[
            'about' => 'required',
            'mission_vission' => 'required',
            'message' => 'required',
            'why_nslp' => 'required',
            'history' => 'required',
            'policy' => 'required',
            'about' => 'required',
            'image' => 'required',
//            'status' => 'required',
        ]);

        $data = new About();
        $data->about =$request->about;
        $data->mission_vission =$request->mission_vission;
        $data->message =$request->message;
        $data->why_nslp =$request->why_nslp;
        $data->history =$request->history;
        $data->about =$request->about;
        $data->policy =$request->policy;

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
//
//    public function photoview(){
//        $data= photo::all();
//        return view('admin.photo',compact('data'));
//    }
//
    public function photodestroy(Request $request,$id){
        $data= About::find($id);
        if (file_exists('uploads/about/'.$data->image)){
            unlink('uploads/about/'.$data->image);
        }
        $data->delete();
        return redirect()->back();
    }

//    public function photoedit($id){
//
//    }



    public function aboutupdate(Request $request){
        $data=About::where('id',$request->id)->first();
        $data->about =$request->about;
        $data->mission_vission =$request->mission_vission;
        $data->message =$request->message;
        $data->why_nslp =$request->why_nslp;
        $data->history =$request->history;
        $data->about =$request->about;
        $data->policy =$request->policy;
        if(isset($request->status))
        {
            $data->status = 1;
        }else {
            $data->status = 0;
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
