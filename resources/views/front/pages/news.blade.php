@extends('front.master')
@section('content')
@include('front.layouts.banner')
<!--Start Blog area-->                                                                                 
<section id="news-area">
    <div class="container">
        <div class="row">

            <!--Start blog post-->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="blog-post">
                    <!--Start single blog post-->
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="{{asset('public/front/img')}}/news/1.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a class="thm-btn yellow-bg" href="{{route('newsDetails')}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <a href="{{route('newsDetails')}}">
                                <h2 class="blog-title">
                                    We Won Best Industries Services Award - 2015. 
                                </h2>
                            </a>
                            <ul class="meta-info">
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#">Oct 03, 2015</a></li>
                                <li><i class="fa fa-tags" aria-hidden="true"></i><a href="#">Chemical</a></li>
                                <li><i class="fa fa-eye" aria-hidden="true"></i><a href="#">72 Views</a></li>
                                <li><i class="fa fa-comments" aria-hidden="true"></i><a href="#">43 Comments</a></li>
                            </ul>
                            <div class="text">
                                <p>How all this mistakens idea off denouncing sed pleasur and praising our pain was born and get will give you complete occur in which toil and pain can procure him some great pleasure take a trivial example, which of us ever undertakes laborious physical exercise obtain some give you complete advantage from it accountof the system.</p>
                            </div>
                            <div class="author-info">
                                <div class="img-box">
                                    <img src="{{asset('public/front/img')}}/news/news-author-1.png" alt="Awesome Author Pic">
                                </div>
                                <div class="text-box">
                                    <h3>Mark Nicholes</h3>
                                    <span>Team Leader</span>
                                </div>    
                            </div>
                        </div> 
                    </div>
                    <!--End single blog post-->
                </div>
            </div>
            {{-- End Blog Post --}}

            {{-- Start Blog Post --}}
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="blog-post">
                    <!--Start single blog post-->
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="{{asset('public/front/img')}}/news/1.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a class="thm-btn yellow-bg" href="{{route('newsDetails')}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <a href="{{route('newsDetails')}}">
                                <h2 class="blog-title">
                                    We Won Best Industries Services Award - 2015. 
                                </h2>
                            </a>
                            <ul class="meta-info">
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#">Oct 03, 2015</a></li>
                                <li><i class="fa fa-tags" aria-hidden="true"></i><a href="#">Chemical</a></li>
                                <li><i class="fa fa-eye" aria-hidden="true"></i><a href="#">72 Views</a></li>
                                <li><i class="fa fa-comments" aria-hidden="true"></i><a href="#">43 Comments</a></li>
                            </ul>
                            <div class="text">
                                <p>How all this mistakens idea off denouncing sed pleasur and praising our pain was born and get will give you complete occur in which toil and pain can procure him some great pleasure take a trivial example, which of us ever undertakes laborious physical exercise obtain some give you complete advantage from it accountof the system.</p>
                            </div>
                            <div class="author-info">
                                <div class="img-box">
                                    <img src="{{asset('public/front/img')}}/news/news-author-1.png" alt="Awesome Author Pic">
                                </div>
                                <div class="text-box">
                                    <h3>Mark Nicholes</h3>
                                    <span>Team Leader</span>
                                </div>    
                            </div>
                        </div> 
                    </div>
                    <!--End single blog post-->
                </div>
            </div>
            {{-- End Blos Post --}}
            
            {{-- Start Blog Post --}}
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="blog-post">
                    <!--Start single blog post-->
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="{{asset('public/front/img')}}/news/1.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a class="thm-btn yellow-bg" href="{{route('newsDetails')}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <a href="{{route('newsDetails')}}">
                                <h2 class="blog-title">
                                    We Won Best Industries Services Award - 2015. 
                                </h2>
                            </a>
                            <ul class="meta-info">
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#">Oct 03, 2015</a></li>
                                <li><i class="fa fa-tags" aria-hidden="true"></i><a href="#">Chemical</a></li>
                                <li><i class="fa fa-eye" aria-hidden="true"></i><a href="#">72 Views</a></li>
                                <li><i class="fa fa-comments" aria-hidden="true"></i><a href="#">43 Comments</a></li>
                            </ul>
                            <div class="text">
                                <p>How all this mistakens idea off denouncing sed pleasur and praising our pain was born and get will give you complete occur in which toil and pain can procure him some great pleasure take a trivial example, which of us ever undertakes laborious physical exercise obtain some give you complete advantage from it accountof the system.</p>
                            </div>
                            <div class="author-info">
                                <div class="img-box">
                                    <img src="{{asset('public/front/img')}}/news/news-author-1.png" alt="Awesome Author Pic">
                                </div>
                                <div class="text-box">
                                    <h3>Mark Nicholes</h3>
                                    <span>Team Leader</span>
                                </div>    
                            </div>
                        </div> 
                    </div>
                    <!--End single blog post-->
                </div>
            </div>
            {{-- End Blos Post --}} 
            
            {{-- Start Blog Post --}}
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="blog-post">
                    <!--Start single blog post-->
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="{{asset('public/front/img')}}/news/1.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a class="thm-btn yellow-bg" href="{{route('newsDetails')}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <a href="{{route('newsDetails')}}">
                                <h2 class="blog-title">
                                    We Won Best Industries Services Award - 2015. 
                                </h2>
                            </a>
                            <ul class="meta-info">
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#">Oct 03, 2015</a></li>
                                <li><i class="fa fa-tags" aria-hidden="true"></i><a href="#">Chemical</a></li>
                                <li><i class="fa fa-eye" aria-hidden="true"></i><a href="#">72 Views</a></li>
                                <li><i class="fa fa-comments" aria-hidden="true"></i><a href="#">43 Comments</a></li>
                            </ul>
                            <div class="text">
                                <p>How all this mistakens idea off denouncing sed pleasur and praising our pain was born and get will give you complete occur in which toil and pain can procure him some great pleasure take a trivial example, which of us ever undertakes laborious physical exercise obtain some give you complete advantage from it accountof the system.</p>
                            </div>
                            <div class="author-info">
                                <div class="img-box">
                                    <img src="{{asset('public/front/img')}}/news/news-author-1.png" alt="Awesome Author Pic">
                                </div>
                                <div class="text-box">
                                    <h3>Mark Nicholes</h3>
                                    <span>Team Leader</span>
                                </div>    
                            </div>
                        </div> 
                    </div>
                    <!--End single blog post-->
                </div>
            </div>
            {{-- End Blos Post --}}  
        </div>

        <div class="row">
            <div class="col-md-12"> 
                <ul class="post-pagination text-center">
                    <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                </ul>
            </div> 
        </div>
    </div>
</section>                                  
<!--End Blog area--> 
  
    
@endsection