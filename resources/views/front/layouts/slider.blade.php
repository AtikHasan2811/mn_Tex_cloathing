
<!--Start rev slider wrapper-->
<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
            @foreach($sliders as $key=>$slider)
            <li data-transition="slidingoverlayleft">
                <img src="{{url('uploads/about/'.$slider->image)}}"  alt="" width="1920" height="580" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >

                <div class="tp-caption tp-resizeme"
                    data-x="right" data-hoffset="0"
                    data-y="center" data-voffset="-4"
                    data-transform_idle="o:1;"
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                    data-splitin="none"
                    data-splitout="none"
                    data-start="500">
                    <div class="slide-content-box">
                        <h3 style="padding: 7px 20px;">MN TEX CLOTHING</h3>
                        <h1>{{$slider->title}}</h1>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</section>
<!--End rev slider wrapper-->
