@extends('front.master')
@section('content')
@include('front.layouts.banner')

<!--Start project area-->
<section id="project-area">
    <div class="container">
        <div class="sec-title">
            <p>For Best Quality We Use </p>
            <h1>Our Machineries</h1>
        </div>
        <div class="row project-content masonary-layout filter-layout">
            <!--Start single project-->
            @foreach ($machineries as $machine)
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item agriculture technology chemical">
                <div class="single-project">
                    <div class="img-holder" style="border: 1px solid black;">
                        <img style="height:300px;" src="{{url('uploads/about/' . $machine->image) }}" alt="Awesome Image">
                        <div class="overlay-box">
                            <div class="box">
                                <div class="content">
                                    <a href="{{route('machineriesDetails', $machine->id)}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <div class="title">
                                    <h3>{{$machine->machine_name}}</h3>
                                    <span>{{$machine->origin}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                       <div class="title">
                            <p>{{$machine->machine_name}}</p>
                        </div>

                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>
<!--End project Area-->


@endsection
