@extends('front.master')
@section('content')
@include('front.layouts.banner')


<section id="project-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="{{asset('certificate/certificate-1.pdf')}}" target="_blank"><img style="height:auto; width:100%" src="{{asset('certificate/certificate-1.jpg')}}" alt="Certificate-One" ></a>
            
            </div>
             <div class="col-md-4">
                 <a href="{{asset('certificate/certificate-2.pdf')}}" target="_blank"><img style="height:auto; width:100%" src="{{asset('certificate/certificate-2.jpg')}}" alt="Certificate-One"></a>
            </div>
             <div class="col-md-4">
                 <a href="{{asset('certificate/certificate-3.pdf')}}" target="_blank"><img style="height:auto; width:100%" src="{{asset('certificate/certificate-3.jpg')}}" alt="Certificate-One" ></a>
            </div>
            
        </div>
    </div>
    
</section>





<!--<h1 style="margin: 20px">Under Construction</h1>-->

<!--Start project area-->

<!--<section id="project-area">-->
<!--    <div class="container">-->
<!--        <div class="sec-title">-->
<!--            <p>Always Trust in Work</p>-->
<!--            <h1>Latest Projects</h1>-->
<!--        </div>-->
<!--        <div class="row project-content masonary-layout filter-layout">-->
                <!--Start single latest project-->
<!--                @foreach ($projects as $project)-->
<!--                <div class="col-md-3 col-sm-6 col-xs-12">-->
<!--                    <div class="single-latest-project">-->
<!--                        <div class="img-holder">-->
<!--                            <img src="{{ url('uploads/about/' . $project->image) }}"  style="width: 370px; height: 227px;" alt="Awesome Image">-->
<!--                            <div class="overlay-box">-->
<!--                                <div class="box">-->
<!--                                    <div class="content">-->
<!--                                        <a href="{{route('projectDetails',$project->id)}}"><i class="fa fa-link" aria-hidden="true"></i></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>    -->
<!--                        </div>-->
<!--                        <div class="title-holder text-center">-->
<!--                        <h4>{{$project->name}}</h4>-->
<!--                            <p></p>    -->
<!--                        </div> -->
<!--                    </div>    -->
<!--                </div>-->
<!--                @endforeach-->
                <!--End single latest project-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                {!! $projects->links() !!}-->
<!--                {{-- <ul class="post-pagination text-center">-->
<!--                    <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i></a></li>-->
<!--                    <li class="active"><a href="#">1</a></li>-->
<!--                    <li><a href="#">2</a></li>-->
<!--                    <li><a href="#">3</a></li>-->
<!--                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>-->
<!--                </ul> --}}-->
<!--            </div>-->
<!--        </div>  -->
<!--    </div>    -->
<!--</section>      -->


<!--End project Area--> 
  
    
@endsection