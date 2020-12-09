
<!--Start latest project area-->                                                                                  
<section class="latest-project-area" style="background-image:url({{asset('public/front/img')}}/project/bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-title pull-left">
                    <p>Our Works</p>
                    <h1>Latest Projects</h1>    
                </div>
                <div class="button pull-right">
                <a class="thm-btn yellow-bg" href="{{route('project')}}">More Projects</a>
                </div>
            </div>
        </div> 
        <div class="row">
            <!--Start single latest project-->
            @foreach ($projects as $project)
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-latest-project">
                    <div class="img-holder">
                        <img src="{{ url('uploads/about/' . $project->image) }}"  style="width: 370px; height: 227px;" alt="Awesome Image">
                        <div class="overlay-box">
                            <div class="box">
                                <div class="content">
                                    <a href="{{route('projectDetails',$project->id)}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="title-holder text-center">
                        <h4>{{$project->name}}</h4>
                        <p></p>    
                    </div> 
                </div>    
            </div>       
            @endforeach
            <!--End single latest project-->
        </div>
    </div>
</section>   
<!--End latest project area-->