<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Machinery;
use App\Product;
use App\Project;
use App\Slider;
class backendController extends Controller
{
    public function view_dashboard(){
        $data = array();
        $data['no_slider']=Slider::count();
//        $data['no_product']=Product::count();
        $data['no_project']=Project::count();
        $data['no_machine']=Machinery::count();
        $data['machineries']=Machinery::all();
        return view('admin.dashboard',$data);
    }
}
