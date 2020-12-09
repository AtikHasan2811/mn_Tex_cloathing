@extends('front.master')
@section('content')
 @include('front.layouts.banner')
<!--Start welcome Industry area-->
@include('front.layouts.about')

<!--End welcome Industry area-->
 <br>
<!--Start special service area-->
{{--<section class="special-service-area">--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="row">--}}
{{--            <!--Start single item-->--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">--}}
{{--                <div class="single-item pd-bottom text-center">--}}
{{--                    <span class="flaticon-medal"></span>--}}
{{--                    <h3>Quality Assurance</h3>--}}
{{--                    <span class="border"></span>--}}
{{--                    --}}{{-- <a href="#">Know More<i class="fa fa-caret-right" aria-hidden="true"></i></a>     --}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--End single item-->--}}
{{--            <!--Start single item-->--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">--}}
{{--                <div class="single-item pd-bottom text-center">--}}
{{--                    <span class="flaticon-avatar"></span>--}}
{{--                    <h3>Professional Workers</h3>--}}
{{--                    <span class="border"></span>--}}
{{--                    --}}{{-- <a href="#">Know More<i class="fa fa-caret-right" aria-hidden="true"></i></a>     --}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--End single item-->--}}
{{--            <!--Start single item-->--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">--}}
{{--                <div class="single-item pd-bottom-2 text-center">--}}
{{--                    <span class="flaticon-justice"></span>--}}
{{--                    <h3>Creaditable Integrity</h3>--}}
{{--                    <span class="border"></span>--}}
{{--                    --}}{{-- <a href="#">Know More<i class="fa fa-caret-right" aria-hidden="true"></i></a>     --}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--End single item-->--}}
{{--            <!--Start single item-->--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">--}}
{{--                <div class="single-item text-center">--}}
{{--                    <span class="flaticon-people"></span>--}}
{{--                    <h3>effetctive Team Work</h3>--}}
{{--                    <span class="border"></span>--}}
{{--                    --}}{{-- <a href="#">Know More<i class="fa fa-caret-right" aria-hidden="true"></i></a>     --}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--End single item-->--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!--End special service area-->

<!--Start choosing area-->
{{--<section class="choosing-area">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="content">--}}
{{--                    <div class="sec-title">--}}
{{--                        <p>14 Years of Experince</p>--}}
{{--                        <h1>Why MN TEX</h1>--}}
{{--                    </div>--}}
{{--                    <div>--}}


{{--                    <p>{{$about->why_nslp}}</p>--}}

{{--                    </div>--}}

{{--                </div>--}}


{{--            </div>--}}
{{--            <div class="col-md-4">--}}
{{--                <div class="content">--}}
{{--                    <div class="sec-title">--}}
{{--                        <h1>Our Advantages</h1>--}}
{{--                    </div>--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <div class="icon-holder">--}}
{{--                                <span class="flaticon-avatar"></span>--}}
{{--                            </div>--}}
{{--                            <div class="text-holder">--}}
{{--                                <h3>We are Professional</h3>--}}
{{--                                <span>Engineers</span>--}}
{{--                                <p>We provide world class quality in most competitive price.</p>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="icon-holder">--}}
{{--                                <span class="flaticon-interface-2"></span>--}}
{{--                            </div>--}}
{{--                            <div class="text-holder">--}}
{{--                                <h3>We are Trusted</h3>--}}
{{--                                <span>Team Members</span>--}}
{{--                                <p>On time deliver at customers's premieses. Anxiety-fee garments shipment.</p>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="icon-holder">--}}
{{--                                <span class="flaticon-tool-1"></span>--}}
{{--                            </div>--}}
{{--                            <div class="text-holder">--}}
{{--                                <h3>We are Expert</h3>--}}
{{--                                <span>Designer</span>--}}
{{--                                <p>Relief from short supply, wastage, Pilferage that often occurs in case of imported accessories.</p>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}



{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!--End choosing area-->
 <br>
<!--Start caption area-->
{{--<section class="caption-area text-center" style="background-image:url({{asset('public/front/img')}}/resources/caption-bg.jpg);">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <h1>We Pride Ourselves In Providing The Best Service And The Highest Quality.</h1>--}}
{{--                <a class="thm-btn yellow-bg" href="{{route('product')}}">Our Products</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!--End caption area-->

@endsection
