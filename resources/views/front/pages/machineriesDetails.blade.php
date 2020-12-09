@extends('front.master')
@section('content')
@include('front.layouts.banner')
{{--
<br><br>
<h1>This Section is Under Construction</h1>
<br><br> --}}


<!--Start project area-->
<section id="project-area" class="project-single-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img  style="height:350px; width:400px" src="{{url('uploads/about/' . $machine->image) }}" alt="Awesome Image">

            </div>
            <div class="col-md-6">
                <div class="single-project-info" style="margin: 0px">
                    <div class="sec-title-two">
                        <h2>Specification:</h2>
                            <span class="border"></span>
                    </div>
                    <ul>
                    <li><span>No. of Machine :</span>{{$machine->number}}</li>
                    <li><span>Origin :</span>{{$machine->origin}}</li>
                    <li><span>Maximum RPM :</span>{{$machine->max_prm}}</li>
                    <li><span>Maximum Width :</span>{{$machine->max_width}}</li>
                    <li><span>Average Production :</span>{{$machine->average_production}} pcs/day</li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="content">
                    <div class="sec-title-two">
                    <h2>{{$machine->machine_name}}</h2>
                        <span class="border"></span>
                    </div>
                    <p>{{$machine->description}}</p>
                </div>
            </div>
        </div>

    </div>
</section>
<!--End project Area-->


@endsection
