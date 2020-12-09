<!--Start solution area-->
<section class="services-area solution-area">
    <div class="container">
        <div class="sec-title">
            <p>For Best Quality Choose </p>
            <h1>Our Products</h1>
        </div>
        <div class="row">
            @foreach ($products as $product)
             <!--Start single service item-->
             <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="single-service-item">
                    <div class="img-holder">
                        <img style="height:310px" src="{{url('productImg/'.$product->photo)}}" alt="Awesome Image">
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a class="thm-btn yellow-bg" href="{{route('productDetails',$product->id)}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <div class="icon">
                            <span class="flaticon-medal"></span>
                        </div>
                        <div class="text">
                        <h3>{{$product->name}}</h3>
                            <p>{{substr ($product->description,0,80)}}...</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single service item-->
            @endforeach
        </div>
    </div>
</section>
<!--End solution area-->

