<?php

namespace App\Http\Controllers;

use App\FAQ;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FRQController extends Controller
{
    public function index(){
//        $data = array();
//        $data['menu_active']= 5;
        $data['faq']=FAQ::all();
        return view('admin.faq',$data);
    }


    public function store(Request $request){
        $this->validate($request,[
            'question' => 'required',
            'answer' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
//id	question	answer	description	image	status	created_at	updated_at

        $data = new FAQ();
        $data->question =$request->question;
        $data->answer =$request->answer;
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


    public function faqdestroy(Request $request,$id){
        $data= FAQ::find($id);
        if (file_exists('uploads/about/'.$data->image)){
            unlink('uploads/about/'.$data->image);
        }
        $data->delete();
        return redirect()->back();
    }

    public function faqupdate(Request $request){
        $data=FAQ::where('id',$request->id)->first();
        $data->question =$request->question;
        $data->answer =$request->answer;
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
//id	question	answer	description	image	status	created_at	updated_at
