@extends('front.master')
@section('content')
@include('front.layouts.banner')
{{-- <br><br>
<h1>This Section is Under Construction</h1>
<br><br> --}}
<!--Start project area-->
<section id="project-area" class="project-single-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img  style="height:350px; width:400px" src="{{ url('uploads/about/' . $project->image) }}" alt="Awesome Image">
            </div>
            <div class="col-md-6">
                <div class="single-project-info" style="margin: 0px">
                    <div class="sec-title-two">
                        <h2>Project Info:</h2>
                            <span class="border"></span>
                    </div>
                    <ul>
                    <li><span>Client :</span>{{$project->client}}</li>
                    <li><span>Date :</span>{{$project->date}}</li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="content">
                    <div class="sec-title-two">
                    <h2>{{$project->name}}</h2>
                        <span class="border"></span>
                    </div>
                    <p>{{$project->description}}</p>
                </div>    
            </div>
        </div>
    </div>    
</section>  
<!--End project Area--> 
  
    
@endsection