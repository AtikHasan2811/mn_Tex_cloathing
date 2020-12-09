<!--Start header area-->
@php
    $contact = DB::table('contacts')->where('status',1)->first();
    $company = DB::table('companies')->where('status',1)->first();
@endphp
<header class="header-area">
    <div class="container">
        <div class="logo pull-left">
            <a href="{{route('index')}}">
                <img src="{{ url('uploads/about/' . $company->image) }}" alt="Awesome Logo" style="height: 48px;width: 203px;" >
            </a>
        </div>
        <div class="top-info pull-right">
            <ul>
                <!--<li class="single-info-box">-->
                <!--    <div class="icon-holder">-->
                <!--        <span class="flaticon-earth-grid"></span>-->
                <!--    </div>-->
                <!--    <div class="text-holder">-->
                <!--        <p><span>Address:</span>Pakuriya Road, R #23,<br>Sector #14,Uttara, Dhaka-1230</p>-->
                <!--    </div>-->
                <!--</li>-->
                  <li class="single-info-box">
                    <div class="icon-holder">
                        <span class="bi bi-telephone"></span>
                    </div>
                    <div class="text-holder">
                    <p><span>Call Us:</span> <a href="tel:{{$contact->mobile}}">{{$contact->mobile}}</a></a></p>

                    </div>
                </li>
                <li class="single-info-box">
                    <div class="icon-holder">
                        <span class="bi bi-envelope"></span>
                    </div>
                    <div class="text-holder">
                    <p><span>Email:</span><a href="mailto:{{$contact->email}}">{{$contact->email}}</a></p>

                    </div>
                </li>
                <!--<li>-->
                <!--    <div class="social-links">-->
                <!--        <ul>-->
                <!--            <li><a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
                <!--            <li><a href="https://www.instagram.com/snlabel/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>-->
                <!--            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
                <!--        </ul>-->
                <!--    </div>-->
                <!--</li>-->
            </ul>
        </div>
        @if (Session::get('message'))
        <p class="text-success">{{Session::get('message')}}</p>
        @endif
    </div>
</header>
<!--End header area-->
<!--Start mainmenu area-->
<section class="mainmeu-area stricky" >
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12 col-xs-12">
                <div class="mainmenu-bg clearfix" style="background: #013155">
                    <nav class="main-menu pull-left">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation">

                                @if ($menu_active == 1)
                                <li class="current" class=""><a href="{{route('index')}}">Home</a></li>
                                @else
                                 <li class=""><a href="{{route('index')}}">Home</a></li>
                                @endif


                                    @if ($menu_active == 2)
                                        <li  class="current" class="dropdown"><a style=" text-transform: uppercase;" href="{{route('about')}}">About</a>
                                            <ul>
                                                <li><a href="{{route('about')}}" style=" text-transform: uppercase;">About Us</a></li>
                                                <li><a style=" text-transform: uppercase;" href="{{route('mdMessage')}}">Message of MD</a></li>
                                            </ul>
                                        </li>

                                    @else

                                        <li class="dropdown"><a href="{{route('about')}}">About</a>
                                            <ul>
                                                <li><a style=" text-transform: uppercase;" href="{{route('about')}}">About Us</a></li>
                                                <li><a style=" text-transform: uppercase;" href="{{route('mdMessage')}}">Message of MD</a></li>
                                            </ul>
                                        </li>

                                    @endif

                                    @if ($menu_active == 3)

                                    <li class="dropdown current" ><a href="{{route('index')}}">Product</a>
                                        @php
                                             $parent_cats=DB::table('categories')->where('is_parent',1)->get();
                                          //    dd($parent_cats);
                                        @endphp


                                        <ul>
                                            @foreach($parent_cats as $cat)
                                            <li class="dropdown"><a style=" text-transform: uppercase;" href="{{route('productcategory',$cat->id)}}">{{$cat->title}}</a>

                                                @php
                                                    $p_cats=DB::table('categories')->where('parent_id',$cat->id)->get();
                                               //  echo $p_cats;
                                                @endphp



                                                <ul>
                                                    @foreach($p_cats as $cats)
                                                    <li><a style=" text-transform: uppercase;" href="{{route('productcategory',$cats->id)}}">{{$cats->title}}</a></li>

                                                    @endforeach
                                                </ul>

                                            </li>

                                            @endforeach
                                        </ul>







                                    @else
                                        <li class="dropdown " ><a href="{{route('index')}}">Product</a>
                                            @php
                                                $parent_cats=DB::table('categories')->where('is_parent',1)->get();
                                             //    dd($parent_cats);
                                            @endphp


                                            <ul>
                                                @foreach($parent_cats as $cat)
                                                    <li class="dropdown"><a style=" text-transform: uppercase;" href="{{route('productcategory',$cat->id)}}">{{$cat->title}}</a>

                                                        @php
                                                            $p_cats=DB::table('categories')->where('parent_id',$cat->id)->get();
                                                       //  echo $p_cats;
                                                        @endphp



                                                        <ul>
                                                            @foreach($p_cats as $cats)
                                                                <li><a style=" text-transform: uppercase;" href="{{route('productcategory',$cats->id)}}">{{$cats->title}}</a></li>

                                                            @endforeach
                                                        </ul>

                                                    </li>

                                                @endforeach
                                            </ul>







                                    @endif
{{--                                    @if ($menu_active == 3)--}}
{{--                                <li class="current"><a href="{{route('product')}}">Products</a>--}}
{{--                                </li>--}}
{{--                                    @else--}}
{{--                                        <li><a href="{{route('product')}}">Products</a>--}}
{{--                                        </li>--}}
{{--                                    @endif--}}

                            {{-- <li class="dropdown"><a href="{{route('machineries')}}">Machineries</a> --}}
{{--                                    @if ($menu_active == 4)--}}
{{--                                   <li class="current"><a href="{{route('machineries')}}">Machineries</a></li>--}}
{{--                                    @else--}}
{{--                                        <li><a href="{{route('machineries')}}">Machineries</a></li>--}}
{{--                                    @endif--}}


{{--                                <li><a href="{{route('project')}}">Certified</a></li>--}}

{{--                            <li><a href="{{route('news')}}">News</a></li>--}}
                            {{-- <li><a href="{{url('/career')}}">Career</a></li> --}}

                                    @if ($menu_active == 5)
                                <li class="current"><a href="{{route('gallery')}}">Gallery</a></li>
                                    @else
                                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                                    @endif

                                    @if ($menu_active == 6)
                                  <li class="current"><a href="{{route('contact')}}">Contact</a></li>
                                    @else
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                    @endif


                            </ul>
                        </div>
                    </nav>
                    {{-- <div class="top-search-box pull-right">
                        <button><i class="fa fa-search"></i></button>
                        <ul class="search-box">
				            <li>
				                <form action="#">
								    <input type="text" placeholder="Search for something...">
								    <button type="submit"><i class="fa fa-search"></i></button>
								</form>
				            </li>
				        </ul>
                    </div> --}}
                </div>
            </div>
            <div class="col-md-2 col-sm-12 col-xs-3">
                <div class="quote-button">
                    <a class="thm-btn yellow-bg"  data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-share" aria-hidden="true"></i>Get a Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End mainmenu area-->
