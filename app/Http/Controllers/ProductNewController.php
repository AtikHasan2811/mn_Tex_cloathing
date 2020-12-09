<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductNewController extends Controller
{
    public function index(){
        $products=Product::all();
        return view('admin.product',compact('products'));
    }



   public function viewSubcategory(Request $request)
    {
        $output ='';
        $query=\App\Category::where('parent_id',$request->id)->get();
        $product="";
        if($query){
            foreach($query as $data ){
                $product.="<option value='".$data->id."'>$data->title</option>";
            }
            $product .="";
        }
        echo $product;
}
    public function viewSubcat(Request $request)
    {
        $output ='';
        $query=\App\Category::where('parent_id',$request->id)->get();
        $productData="";
        if($query){
            foreach($query as $data ){
                $productData.="<option value='".$data->id."'>$data->title</option>";
            }
            $productData .="";
        }
        echo $productData;
    }










public function store(Request $request){
    $additionalImage = array();
    $data = new Product();
    $data->title =$request->title;
//    $data->slug =Str::slug($request->title);
    $data->summary =$request->summary;
    $data->description =$request->description;
    $data->cat_id =$request->cat_id;
    $data->child_cat_id =$request->child_cat_id;
    if(isset($request->status))
    {
        $data->status = 'active';
    }else {
        $data->status = 'inactive';
    }
    $image ="";

    if($file=$request->file('photo')){
        $name=$file->getClientOriginalName();
        $file->move('productImg',$name);
        $image=$name;
    }

    $additional_images = $request->file('additional_photo');
    if(isset($additional_images)){
        foreach($additional_images as $additional_image){
            if (isset($additional_image)){
                $currentDate = Carbon::now()->toDateString();
                $additional_imageName= uniqid().'-'.$currentDate.'.'.$additional_image->getClientOriginalExtension();
                // if (!file_exists('uploads/products')){
                //     makeDirectory('uploads/products',0777,true);
                // }
                $additional_image->move('productImg',$additional_imageName);
                $additionalImage[]= $additional_imageName;
            }
        }

    }

    $data->photo =$image;
    $data->additional_photo = json_encode($additionalImage);
    $data->save();
    return back();
}

    public function destroy(Request $request,$id){
        $data= Product::find($id);
        if (file_exists('productImg/'.$data->photo)){
            unlink('productImg/'.$data->photo);
        }

        $additional_images = json_decode($data->additional_photo);

        if($additional_images){
            foreach($additional_images as $additional_image){
                if (file_exists('productImg/'.$additional_image)){
                    unlink('productImg/'.$additional_image);
                }
            }

        }
        $data->delete();
        return redirect()->back();
    }





    public function productupdate(Request $request){
        $data=Product::where('id',$request->id)->first();
        $data->title =$request->title;
//        $data->slug =Str::slug($request->title);
        $data->summary =$request->summary;
        $data->cat_id =$request->cat_id;
        $data->child_cat_id =$request->child_cat_id;
        $data->description =$request->description;
        if(isset($request->status))
        {
            $data->status = 'active';
        }else {
            $data->status = 'inactive';
        }


           $file=$request->file('photo');


        if($file=$request->file('photo')){

            if (file_exists('productImg/'.$data->photo)){
                unlink('productImg/'.$data->photo);
            }
            $name=$file->getClientOriginalName();
            $file->move('productImg',$name);
            $image=$name;
            $data->photo =$image;

        }


        $additional_images = $request->file('additional_photo');
        if(isset($additional_images)){

            $additional = json_decode($data->additional_photo);

            if($additional){
                foreach($additional as $additional_image){
                    if (file_exists('productImg/'.$additional_image)){
                        unlink('productImg/'.$additional_image);
                    }
                }

            }


            foreach($additional_images as $additional_image){
                if (isset($additional_image)){
                    $ext=$additional_image->getClientOriginalExtension();
                    $currentDate = Carbon::now()->toDateString();
                    $additional_imageName= uniqid().'-'.$currentDate.'.'.$ext;
                    // if (!file_exists('uploads/products')){
                    //     makeDirectory('uploads/products',0777,true);
                    // }
                    $additional_image->move('productImg',$additional_imageName);
                    $additionalImage[]= $additional_imageName;
                    $data->additional_photo = json_encode($additionalImage);
                }
            }

        }

//        $image = $request->file('photo');
//
//
//
//
//        $image = $request->file('photo');
//        if (isset($image)){
//            if (file_exists('productImg/'.$data->photo)){
//                unlink('productImg/'.$data->photo);
//            }
//
//
//
//            $currentDate = Carbon::now()->toDateString();
//            $imageName = uniqid().'-'.$currentDate.'.'.$image->getClientOriginalExtension();
//
//            if (!file_exists('productImg/')){
//                mkdir('productImg/',0777,true);
//            }
//            $image->move('productImg/',$imageName);
//        }else{
//            $imageName = $data->photo ;
//        }


        $data->save();
        return back();
    }










}
