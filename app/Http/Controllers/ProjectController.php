<?php

namespace App\Http\Controllers;

use App\Product;
use App\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $data['project']=Project::all();
        return view('admin.project',$data);
    }

//id	name	description	date	client	image	status	created_at	updated_at
    public function store(Request $request){
        $data = new Project();
        $data->name =$request->name;
        $data->description =$request->description;
        $data->date =$request->date;
        $data->client =$request->client;

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


    public function projectdestroy(Request $request,$id){
        $data= Project::find($id);
        if (file_exists('uploads/about/'.$data->image)){
            unlink('uploads/about/'.$data->image);
        }
        $data->delete();
        return redirect()->back();
    }




    public function projectupdate(Request $request){
        $data=Project::where('id',$request->id)->first();

        $data->name =$request->name;
        $data->description =$request->description;
        $data->date =$request->date;
        $data->client =$request->client;

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
