<!--Start footer area-->
@php
    $contact = DB::table('contacts')->where('status',1)->first();
    $company = DB::table('companies')->where('status',1)->first();
@endphp
<footer class="footer-area" style="background-color: #;">
    <div class="container">
        <div class="row">
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="single-footer-widget pd-bottom">
                    <div class="footer-logo">
                    <a href="{{route('index')}}">
                            <img src="{{ url('uploads/about/' . $company->image) }}" alt="Awesome Logo" style="height: 48px;width: 203px;" >
                        </a>
                    </div>
                    <div class="industry-info">
                        <p>With a view ot strenth the backward linkgage suppor ttowards the garments sector, Mn Tex Product Ltd. was established in the year of 2020.</p>
                    </div>
                    <ul class="footer-social-links">
                        <li><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i aria-hidden="true" class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="single-footer-widget pd-bottom">
                    <div class="title">
                        <h3>Quick Links</h3>
                    </div>
                    <ul class="quick-links left">
                    <li><a href="{{route('about')}}">About Us</a></li>
                    {{-- <li><a href="{{route('service')}}">All Services</a></li>
                    <li><a href="{{route('carrer')}}">Job Careers</a></li>
                    <li><a href="{{route('team')}}">Team Behind</a></li> --}}
                    <li><a href="{{route('product')}}">Our Products</a></li>
                    <li><a href="{{route('dashboard')}}">Admin</a></li>
                    </ul>
                    <ul class="quick-links">
                    {{-- <li><a href="{{route('news')}}">Latest News</a></li> --}}
                    <li><a href="{{route('project')}}">Our Projects</a></li>
                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                    {{-- <li><a href="{{route('faq')}}">FAQ’s</a></li> --}}
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <!--End single footer widget-->
             <!--Start single footer widget-->
             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="single-footer-widget pd-bottom-inst">
                    <div class="title">
                        <h3>Instagram</h3>
                    </div>
                    <ul class="instagram">
                          <li>
                            <div class="img-holder">
                                <img src="{{asset('public/front/img')}}/footer/1 (1).jpg" alt="Awesome Image" style="width: 90px;height: 75px;">
                                <div class="overlay-box">
                                    <div class="box">
                                        <div class="content">
                                            <a href="https://instagram.com/" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-holder">
                                <img src="{{asset('public/front/img')}}/footer/1 (1).jpg" alt="Awesome Image" style="width: 90px;height: 75px;">
                                <div class="overlay-box">
                                    <div class="box">
                                        <div class="content">
                                            <a href="https://instagram.com/" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                            <li>
                            <div class="img-holder">
                                <img src="{{asset('public/front/img')}}/footer/1 (5).jpg" alt="Awesome Image" style="width: 90px;height: 75px;">
                                <div class="overlay-box">
                                    <div class="box">
                                        <div class="content">
                                            <a href="https://instagram.com/" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-holder">
                                <img src="{{asset('public/front/img')}}/footer/1 (6).jpg" alt="Awesome Image" style="width: 90px;height: 75px;">
                                <div class="overlay-box">
                                    <div class="box">
                                        <div class="content">
                                            <a href="https://instagram.com/" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <li>
                            <div class="img-holder">
                                <img src="{{asset('public/front/img')}}/footer/1 (7).jpg" alt="Awesome Image" style="width: 90px;height: 75px;">
                                <div class="overlay-box">
                                    <div class="box">
                                        <div class="content">
                                            <a href="https://instagram.com/" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </li>
                     <li>
                            <div class="img-holder">
                                <img src="{{asset('public/front/img')}}/footer/1 (8).jpg" alt="Awesome Image" style="width: 90px;height: 75px;">
                                <div class="overlay-box">
                                    <div class="box">
                                        <div class="content">
                                            <a href="https://instagram.com/" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="follow-us" style="    box-shadow: 10px 5px 64px;">
                        <div class="icon">
                            <a target="_blank" href="http://instagram.com/">
                                <img src="{{ url('uploads/about/' . $company->image) }}" alt="Awesome Logo" style="height: 48px;width: 203px;" >
                            </a>
                        </div>
                        {{-- <div class="text-holder">
                            <a href="https://instagram.com/" target="_blank">Follow Us</a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="single-footer-widget">
                    <div class="title">
                        <h3>Get In Touch</h3>
                    </div>
                    <ul class="contact-address">
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-earth-grid"></span>
                            </div>
                            <div class="content-holder">
                                <p><span>Address:</span>{{$contact->address}}</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-email-envelope-back-symbol-on-phone-screen"></span>
                            </div>
                            <div class="content">
                                <p>
                                    <span>Contact Us: <a href="tel:{{$contact->mobile}}">{{$contact->mobile}}</a></span>
                                    <span>Email:<a href="mailto:{{$contact->email}}">{{$contact->email}}</a></span>
                                </p>

                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-clock"></span>
                            </div>
                            <div class="content-holder">
                                <p><span>Sat - Thu:</span> 10.00am - 06.00pm <br> Friday Closed</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--End single footer widget-->
        </div>
    </div>
</footer>
<!--End footer area-->

<!--Start footer bottom area-->
<section class="footer-bottom-area" style="background-color: ;">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                <div class="copyright-text">
                    <p>Copyright © 2020 All right reserved Leoit Ltd. <br>Developed by <a href="http://leoitbd.com/" target="_blank">leoitbd</a>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                <ul class="footer-menu">
                <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('product')}}">Products</a></li>
                    <!--<li><a href="#">Privacy Policies</a></li>-->
                <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End footer bottom area-->
