@extends('front.master')
@section('content')
@include('front.layouts.banner')
<!--Start Contact area-->
<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-7 col-xs-12">
                <div class="contact-details">
                    <h2>Contact Details</h2>
                    <div>
                        <div class="item">
                            <div class="contact-details-title">

                            </div>
                            <ul class="contact-info">
                                <li>
                                    <div class="icon-box">
                                        <span class="flaticon-signs"></span>
                                    </div>
                                    <div class="text-box">
                                    <p><span>Address:</span>{{$contact->address}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-box">
                                        <span class="flaticon-email-envelope-back-symbol-on-phone-screen"></span>
                                    </div>
                                    <div class="text-box">
                                        <p><span>Call Us:</span> <a href="tel:{{$contact->mobile}}">{{$contact->mobile}}</a><br><span>Email:</span> <a href="mailto:{{$contact->email}}">{{$contact->email}}</a> </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-box">
                                        <span class="flaticon-clock-1"></span>
                                    </div>
                                    <div class="text-box">
                                        <p><span>Sat - Thu:</span>10.00am to 06.00pm<br>
                                        <span>Friday:</span>Closed</p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>
                    <div class="contact-social-links">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
                @if (Session::get('message'))
                    <p class="text-success">{{Session::get('message')}}</p>
                @endif
            <form action="{{route('insertMessage')}}" method="POST">
            @csrf

                <div class="row">
                    <h1>Send Message US</h1>
                    <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" id="">
                    </div>
                    <div class="col-md-6">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" id="">

                    </div>
                    <div class="col-md-12">
                        <label for="">Subject</label>
                        <input type="text" class="form-control" name="subject" id="">

                    </div>
                    <div class="col-md-12">
                        <label for="">Message</label>
                        <textarea name="message" id="" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                    <br><br>
                    <div class="col-md-12">
                        <button class="btn btn-outline-success" type="submit">Submit</button>
                    </div>

                </div>
            </form>

            </div>
        </div>
    </div>
</section>
<!--End Contact area-->

@endsection
