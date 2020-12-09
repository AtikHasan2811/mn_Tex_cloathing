@extends('front.master')
@section('content')
@include('front.layouts.banner')

<!--Start project area-->
<section id="project-area">
    <div class="container">
        <div class="row project-content masonary-layout filter-layout">
            <!--Start single project-->
            @foreach ($galleries as $gallery)
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item agriculture technology chemical">
                <div class="single-project">
                    <div class="img-holder">
                        <img style="height: 300px" src="{{ url('uploads/about/' . $gallery->image) }}" alt="Awesome Image">
                    </div>
                    <div class="title-holder text-center mt-2" >
                        <h4 style="margin-top: 30px;">{{$gallery->caption}}</h4>
                            <p></p>
                    </div>
                </div>
            </div>
            @endforeach
            <!--End single project-->

        </div>
        <div class="row">
            <div class="col-md-12">
                {!! $galleries->links() !!}
            </div>
        </div>
    </div>
</section>
<!--End project Area-->


@endsection
