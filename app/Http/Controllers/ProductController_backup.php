<?php

namespace App\Http\Controllers;

use App\News;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
//        $data['products']=Product::all();
//        return view('admin.product',$data);
    }





    public function store(Request $request){
        $data = new Product();
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
            $image->move('uploads/about',$imageName);
        }else{
            $imageName = 'default.png';
        }
        $data->image =$imageName;
        $data->save();
        return back();
    }


    public function productdestroy(Request $request,$id){
        $data= Product::find($id);
        if (file_exists('uploads/about/'.$data->image)){
            unlink('uploads/about/'.$data->image);
        }
        $data->delete();
        return redirect()->back();
    }




    public function productupdate(Request $request){
        $data=Product::where('id',$request->id)->first();

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
