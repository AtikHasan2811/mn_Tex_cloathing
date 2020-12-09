<!--Start services area-->
<section class="services-area">
    <div class="container">
        <div class="sec-title">
            <p>For Best Quality Choose </p>
            <h1>Our Products</h1>
        </div>
        <div class="row">

            @foreach($services as $key=>$service)
            <!--Start single service item-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-service-item">
                    <div class="img-holder">
                        <img src="{{url('uploads/about/'.$service->image)}}" alt="Awesome Image" style="width: 370px;height: 200px;">
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a class="thm-btn yellow-bg" href="{{route('serviceDetails')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <div class="icon">
                            <span class="flaticon-nature-1"></span>
                        </div>
                        <div class="text">
                            <h3>{{$service->name}}</h3>
                            <p>{{$service->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single service item-->
            @endforeach

            <!--Start single service item-->

        </div>

    </div>
</section>
<!--End services area-->
