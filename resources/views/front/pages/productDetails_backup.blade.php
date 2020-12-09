@extends('front.master')
@section('content')
@include('front.layouts.banner')
<!--Start solution area-->
<section id="solution-single-area" class="chemical-research-area">
    <div class="container">
        <div class="row">
            <div class="col-md-9 pull-right">
                <div class="single-solution-content">
                    <div class="row">
                        <div class="top">
                            <div class="col-md-5">
                                <div class="img-holder">
                                    <img style="height:400px; width:400px" src="{{url('uploads/about/'.$product->image)}}" alt="Product Image">    
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="text-holder">
                                    <div class="sec-title-two">
                                    <h2>{{$product->name}}</h2>
                                        <span class="border"></span>
                                    </div>
                                    <p>{{$product->description}}</p>
                                    
                                    {{-- <p>Must explain to you how all this mistaken idea of denouncing works pleasure and praising uts pain was born and I will gives you a itself completed account of the system, and sed expounds the ut actual teachings of that greater sed explores truth, the master-builders of human happiness one rejects, dislikes avoided pleasure.</p>
                                    <p>Denouncing works pleasures and praising pains was us born and I will gives you a completed ut workers accounts of the system, and expounds that actual teachings greater explores.</p>    --}}
                                </div>    
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="caption-box">
                                <div class="title pull-left">
                                    <h3>Are you looking for a best and quality service? Just join<br> with Industial Press.</h3>
                                </div>
                                <div class="button pull-right">
                                    <a class="thm-btn yellow-bg" data-toggle="modal" data-target="#exampleModal" href="#">Get a Quote</a>    
                                </div>
                            </div>
                        </div>
                    </div>     
                          
                </div>
            </div>
            <div class="col-md-3 pull-left">
                <div class="sidebar">
                    <!--Start single sidebar item-->
                    <div class="single-sidebar-item">
                        <ul class="solution-categories">
                            <li>
                            <a href="{{route('product')}}">View All Products
                                    <i class="fa fa-caret-right pull-right" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="active">
                                <a href="">{{$product->name}}
                                    <i class="fa fa-caret-right pull-right" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>    
                    </div>
                    <!--End single sidebar item-->
                    <!--Start single sidebar item-->
                    <div class="single-sidebar-item">
                        <div class="sec-title-two">
                            <h2>Our Brochures</h2>
                            <span class="border"></span>
                        </div>
                        <ul class="brochures-list">
                            <li>
                                <a href="">
                                    <span class="flaticon-pdf"></span>Download.Pdf
                                    <i class="fa fa-caret-right pull-right" aria-hidden="true"></i>
                                </a>
                            </li>    
                        </ul>    
                    </div>
                    <!--End single sidebar item-->
                </div>   
            </div>
        </div> 

        @include('front.layouts.product')
    </div>
</section>
<!--End solution area-->   
@endsection