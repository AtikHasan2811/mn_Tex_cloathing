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
        $additionalImage = array();
        $data = new Product();
        $data->name =$request->name;
        $data->description =$request->description;

        $this->validate($request, [
            'name'=>'required',
            'image' => 'required',
            'image.*' => 'mimes:jpeg,jpg,gif,png'
                ]);


        if(isset($request->status))
        {
            $data->status = true;
        }else {
            $data->status = false;
        }

        $image ="";

         if($file=$request->file('image')){
                    $name=$file->getClientOriginalName();
                    $file->move('productImg',$name);
                    $image=$name;
                }

        // $image = $request->file('image');
        // if (isset($image)){
        //     $currentDate = Carbon::now()->toDateString();
        //     $imageName = uniqid().'-'.$currentDate.'.'.$image->getClientOriginalExtension();
        //     if (!file_exists('uploads/about')){
        //         makeDirectory('uploads/about',0777,true);
        //     }
        //     $image->move('uploads/products',$imageName);
        // }else{
        //     $imageName = 'default.png';
        // }

        $additional_images = $request->file('additional_image');
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


        $data->image =$image;
        $data->additional_image = json_encode($additionalImage);
        $data->save();
        return back();
    }


    public function productdestroy(Request $request,$id){
        $data= Product::find($id);
        if (file_exists('productImg/'.$data->image)){
            unlink('productImg/'.$data->image);
        }

        $additional_images = json_decode($data->additional_image);

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
            if (file_exists('productImg/'.$data->image)){
                unlink('productImg/'.$data->image);
            }
            $currentDate = Carbon::now()->toDateString();
            $imageName = uniqid().'-'.$currentDate.'.'.$image->getClientOriginalExtension();

            if (!file_exists('productImg/')){
                mkdir('productImg/',0777,true);
            }
            $image->move('productImg',$imageName);

        }else{
            $imageName = $data->image ;
        }


        $additional_images = $request->file('additional_image');

        if (isset($additional_images)){
            $additional_images_query = json_decode($data->additional_image);
            if($additional_images_query){
                foreach($additional_images_query as $add_image){
                    if (file_exists('productImg/'.$add_image)){
                        unlink('productImg/'.$add_image);
                    }
                }


            }

            if(isset($additional_images)){



            foreach($additional_images as $additional_image){

                $currentDate = Carbon::now()->toDateString();
                $additional_imageName= uniqid().'-'.$currentDate.'.'.$additional_image->getClientOriginalExtension();
                // if (!file_exists('uploads/products')){
                //     makeDirectory('uploads/products',0777,true);
                // }
                $additional_image->move('productImg/',$additional_imageName);
                $additionalImage[]= $additional_imageName;
            }

                $data->additional_image= json_encode($additionalImage);
            }
        }







        $data->image =$imageName;
        $data->save();
        return redirect()->back();
    }
}
