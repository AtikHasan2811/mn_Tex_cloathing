<!--Start about us area-->
<section class="about-us-area">
    <div class="outer-box clearfix">
{{--        <div class="image-column bg-dark" style="background-image:url({{ asset('public/front/img') }}/about/abc.png);">--}}
        @if($about)
        <div class="image-column bg-dark" style="background-image:url({{ asset(url('uploads/about/' . $about->image)) }});">
        @endif

{{--            src="{{ url('uploads/about/' . $value->image) }}"--}}
            <ul class="icon-box" role="tablist">
                <li class="single-item active" data-tab-name="about">
                    <a href="#about" aria-controls="about" role="tab" data-toggle="tab" class="clearfix">
                        <div class="icon">
                            <span class="flaticon-sign"></span>
                        </div>
                        <div class="content">
                            <h2>About Us</h2>
                            <p>Company Overview</p>
                        </div>
                    </a>
                </li>

                <li class="single-item" data-tab-name="process">
                    <a href="#process" aria-controls="process" role="tab" data-toggle="tab" class="clearfix">
                        <div class="icon">
                            <span class="flaticon-sign"></span>
                        </div>
                        <div class="content">
                            <h2>Mission</h2>
                            <p>Processing & Develop</p>
                        </div>
                    </a>
                </li>
                <li class="single-item" data-tab-name="histwo">
                    <a href="#histwo" aria-controls="histwo" role="tab" data-toggle="tab" class="clearfix">
                        <div class="icon">
                            <span class="flaticon-sign"></span>
                        </div>
                        <div class="content">
                            <h2>Vision</h2>
                            <p>Rich 25+ Years History</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="content-column tab-content">
            <!--Start single tab content-->
            <div class="inner-box tab-pane fade in active" id="about">
                <div class="sec-title">
                    <p>Welcome to Industry Press</p>
                    <h1>About Us</h1>
                </div>
                <div class="text-box">
                    @if($about)
                    <p>{{$about->about}}</p>
                    @endif

                </div>

            </div>
            <!--End single tab content-->
            <!--Start single tab content-->
            <div class="inner-box tab-pane fade active" id="history">
                <div class="sec-title">
                    <p>Welcome to Industry Press</p>
                    <h1>Our History</h1>
                </div>
                <div class="text-box">
                    @if($about)
                        <p>{{$about->history}}</p>
                    @endif

                </div>
            </div>
            <!--End single tab content-->
            <!--Start single tab content-->
            <div class="inner-box tab-pane fade active" id="process">
                <div class="sec-title">
                    <p>Our mission</p>
                    <h1>Mission</h1>
                </div>
                <div class="text-box">

                    @if($about)
                        <p>{{$about->mission_vission}}</p>
                    @endif
                </div>
            </div>
            <!--End single tab content-->
            <!--Start single tab content-->
            <div class="inner-box tab-pane fade active" id="histwo">
                <div class="sec-title">
                    <p>Our vision</p>
                    <h1>Vision</h1>
                </div>
                <div class="accordion-box">

                    @if($about)
                        <p>{{$about->policy}}</p>
                    @endif
                </div>
            </div>
            <!--End single tab content-->
        </div>
    </div>
</section>
<!--End about us area-->
