<?php

namespace App\Http\Controllers;

use App\About;
use App\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class NewsController extends Controller
{

    public function index(){
        $data['news']=News::all();
        return view('admin.news',$data);
    }

//id	title	subtitle	description	date	image	status	created_at	updated_at
    public function store(Request $request){
        $data = new News();
        $data->title =$request->title;
        $data->subtitle =$request->subtitle;
        $data->description =$request->description;
        $data->date =$request->date;

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


    public function newsdestroy(Request $request,$id){
        $data= News::find($id);
        if (file_exists('uploads/about/'.$data->image)){
            unlink('uploads/about/'.$data->image);
        }
        $data->delete();
        return redirect()->back();
    }




    public function newsupdate(Request $request){
        $data=News::where('id',$request->id)->first();

        $data->title =$request->title;
        $data->subtitle =$request->subtitle;
        $data->description =$request->description;
        $data->date =$request->date;

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
        $data->save();
        return redirect()->back();
    }
}
