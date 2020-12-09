<?php

namespace App\Http\Controllers;

use App\Service;
use App\Slider;
use App\Product;
use App\Project;
use App\About;
use App\Machinery;
use App\Gallary;
use App\Contact;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $data = array();
        $data['menu_active']= 1;
        $data['title']= "Home";
        $data['sliders']= Slider::where('status',1)->get();
        $data['services']= Service::where('status',1)->get();
        $data['products']= Product::where('status',1)->get();

        $data['about']= About::where('status',1)->first();
        $data['projects']= Project::where('status',1)->take(4)->get();
        return view('front.pages.index',$data);
    }


    public function about(){
        $data = array();
        $data['menu_active']= 2;
        $data['title']= "About";
        $data['about']= About::where('status',1)->first();
        return view('front.pages.about',$data);

    }

    public function profile(){
        $data = array();
        $data['title']= "Profile";
        return view('front.pages.profile',$data);

    }

    public function sisterConcerns(){
        $data = array();
        $data['title']= "Sister Concerns";
        return view('front.pages.sisterConcerns',$data);

    }

    public function mdMessage(){
        $data = array();
        $data['menu_active']= 2;
        $data['title']= "Message of MD";
        $data['about']= About::where('status',1)->first();
        return view('front.pages.mdMessage',$data);
    }


    public function service(){
        $data = array();
        $data['title']= "Services";
        return view('front.pages.service',$data);
    }

    public function serviceDetails(){
        $data = array();
        $data['title']= "Service Details";
        return view('front.pages.serviceDetails',$data);

    }

    public function project(){
        $data = array();

        $data['title']= "Certificate";
        $data['products']= Product::where('status',1)->get();
        $data['projects']= Project::paginate(8);
        return view('front.pages.project',$data);
    }

    public function projectDetails($id){

        $data = array();
        $data['menu_active']= 1;
        $data['title']= "Project Details";
        $data['project']= Project::find($id);
        return view('front.pages.projectDetails',$data);
    }

    public function mission(){
        $data = array();
        $data['title']= "Mission";
        $data['about']= About::where('status',1)->first();
        return view('front.pages.mission',$data);


    }

    public function vision(){
        $data = array();
        $data['title']= "Vision";
        $data['about']= About::where('status',1)->first();
        return view('front.pages.vision',$data);


    }

    public function product(){
        $data = array();
        $data['menu_active']= 3;
        $data['title']= "Products";
        $data['products']= Product::where('status',1)->get();
        return view('front.pages.product',$data);
    }

    public function productDetails($id){
        $data = array();
        $data['menu_active']= 1;
        $data['title']= "Product Details";
        $data['products']= Product::all();
        $data['product']= Product::find($id);
        return view('front.pages.productDetails',$data);

    }

    public function producbyid($id){
        $data = array();
        $data['menu_active']= 3;
        $data['title']= "Product Details";
        $data['products']= Product::where('cat_id',$id)->orWhere('child_cat_id',$id)->get();
//        $data['product']= Product::find($id);
        return view('front.pages.productbyid',$data);
    }





    public function team(){
        $data = array();
        $data['title']= "Team";
        $data['about']= About::where('status',1)->first();
        return view('front.pages.team',$data);



    }

    public function news(){
        $data = array();
        $data['title']= "News";
        return view('front.pages.news',$data);
    }

    public function newsDetails(){
        $data = array();
        $data['title']= "News Details";
        return view('front.pages.newsDetails',$data);
    }

    public function machineries(){
        $data = array();
        $data['menu_active']= 4;
        $data['title']= "Machineries";
        $data['machineries']=Machinery::where('status',1)->get();
        return view('front.pages.machineries',$data);
    }

    public function machineriesDetails($id){
        $data = array();
        $data['menu_active']= 4;
        $data['title']= "Machineries Details";

        $data['machine']= Machinery::find($id);
        return view('front.pages.machineriesDetails',$data);

    }

    public function gallery(){
        $data = array();
        $data['menu_active']= 5;
        $data['title']= "Gallery";
        $data['galleries']=Gallary::paginate(9);
        return view('front.pages.gallery',$data);
    }

    public function career(){
        $data = array();
        $data['title']= "Career";
        return view('front.pages.career',$data);


    }
    public function faq(){
        $data = array();
        $data['title']= "FAQ";
        return view('front.pages.faq',$data);


    }

    public function contact(){
        $data = array();
        $data['menu_active']= 6;
        $data['title']= "Contact";
        $data['contact']= Contact::where('status',1)->first();
        return view('front.pages.contact',$data);


    }


}
