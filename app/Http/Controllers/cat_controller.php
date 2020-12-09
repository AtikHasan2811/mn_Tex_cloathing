<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class cat_controller extends Controller
{
    public function index(){
        $data = Category::all();
        return view('admin.cat',compact('data'));
    }
//id	title	slug	summary	photo	is_parent	parent_id	added_by	status	created_at	updated_at
    public function store(Request $request){
//        return $request;
        $data= new Category();
        $data->title= $request->title;
//        $data->slug= Str::slug($request->title);
        $data->summary= $request->summary;
        $data->photo= null;
        if ($request->is_parent){
            $data->is_parent= $request->is_parent;
        }else{
            $data->parent_id= 0;
        }
        $data->parent_id=$request->parent_id;


        if ($request->status==1){
            $data->status= $request->status;
        }else{
            $data->status='inactive';
        }

        $data->save();

        return back();

    }


    public function destroy($id){
        $data=Category::find($id);
        $data->delete();
        return back();

    }


    public function catupdate(Request $request){
//        return $request;

        $data= Category::find($request->id);


        $data->title= $request->title;
//        $data->slug= Str::slug($request->title);
        $data->summary= $request->summary;
        $data->photo= null;
        if ($request->is_parent){
            $data->is_parent= $request->is_parent;
        }else{
            $data->is_parent= 0;
        }
        $data->parent_id=$request->parent_id;


        if ($request->status==1){
            $data->status= $request->status;
        }else{
            $data->status='inactive';
        }

        $data->save();

        return back();


    }

}
