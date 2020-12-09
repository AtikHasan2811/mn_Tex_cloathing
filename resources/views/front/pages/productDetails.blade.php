@extends('front.master')
@section('content')
@include('front.layouts.banner')
<!--Start solution area-->
<section id="solution-single-area" class="chemical-research-area">
    <div class="container">
                                <div class="text-holder text-center">
                                    <div class="sec-title-two">
                                    <h2>{{$product->name}}</h2>
                                        <span class="border"></span>
                                    </div>
                                    <!--<p>{{$product->description}}</p>-->


                                </div>
        <div class="row">
            <div class="col-md-9 pull-right">
                <div class="single-solution-content">
                    <div class="row">
                        <div class="top">
                            <div class="col-md-5">
                                <div class="img-holder">
                                    <img style="height:455px; width:400px" src="{{url('productImg/'.$product->photo)}}" alt="Product Image">
                                </div>
                            </div>
                            <div class="col-md-7">
                                  <div class="row">
                        @php
                            $additional_images= json_decode($product->additional_photo, true);
                        @endphp
                        @if ($additional_images)
                            @foreach ($additional_images as $additional_image)
                            <div class="col-md-6" style="margin-bottom: 3px">
                                <img style="width: 100%" src="{{url('productImg/'.$additional_image)}}" alt="Additional Image">
                            </div>
                            @endforeach
                        @endif


                    </div>
                            </div>
                        </div>
                    </div>


                    <br>

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
{{--                                <a href="">--}}
{{--                                    <span class="flaticon-pdf"></span>Download.Pdf--}}
{{--                                    <i class="fa fa-caret-right pull-right" aria-hidden="true"></i>--}}
{{--                                </a>--}}
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
