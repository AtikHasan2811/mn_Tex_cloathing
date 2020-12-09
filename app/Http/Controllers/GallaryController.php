<?php

namespace App\Http\Controllers;

use App\FAQ;
use App\Gallary;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    public function index(){
        $data['gallary']=Gallary::all();
        return view('admin.gallary',$data);
    }

//id	caption	discription	image	status	created_at	updated_at
    public function store(Request $request){
//        return $request->all();
//        $this->validate($request,[
//            'caption' => 'required',
//            'discription' => 'required',
//            'image' => 'required',
//        ]);
//id	caption	discription	image	status	created_at	updated_at

        $data = new Gallary();
        $data->caption =$request->caption;
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
    public function gallarydestroy(Request $request,$id){
        $data= Gallary::find($id);
        if (file_exists('uploads/about/'.$data->image)){
            unlink('uploads/about/'.$data->image);
        }
        $data->delete();
        return redirect()->back();
    }
//id	caption	discription	image	status	created_at	updated_at
    public function gallaryupdate(Request $request){
        $data=Gallary::where('id',$request->id)->first();
        $data->caption =$request->caption;
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
