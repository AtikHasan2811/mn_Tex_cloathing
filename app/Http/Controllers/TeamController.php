<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TeamController extends Controller
{
//id	name	discription	mobile	email	roll	image	status	created_at	updated_at
    public function index(){
        $data['team']=Team::all();
        return view('admin.team',$data);
    }

    //id	name	discription	mobile	email	roll	image	status	created_at	updated_at
    public function store(Request $request){
        $data = new Team();
        $data->name =$request->name;
        $data->description =$request->description;
        $data->mobile =$request->mobile;
        $data->email =$request->email;
        $data->roll =$request->roll;
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





    public function teamdestroy(Request $request,$id){
        $data= Team::find($id);
        if (file_exists('uploads/about/'.$data->image)){
            unlink('uploads/about/'.$data->image);
        }
        $data->delete();
        return redirect()->back();
    }


    public function teamupdate(Request $request){
        $data=Team::where('id',$request->id)->first();

        $data->name =$request->name;
        $data->description =$request->description;
        $data->mobile =$request->mobile;
        $data->email =$request->email;
        $data->roll =$request->roll;
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

//id	name	discription	mobile	email	roll	image	status	created_at	updated_at
