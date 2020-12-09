<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{asset('public/front/img/breadcrumb/breadcrumb-bg.jpg')}});">
	<div class="container text-center">
    <h1>{{$title}}</h1>
	</div>
</section>
<!--End breadcrumb area-->

<!--Start breadcrumb bottom area-->       
<section class="breadcrumb-bottom-area">
    <div class="container">
        <div class="left pull-left">
            <a href="#">{{$title}}</a>    
        </div>
        <div class="right pull-right">
            <ul>
            <li><a href="{{route('index')}}">Home</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>{{$title}}</li>
            </ul>    
        </div>        
    </div>    
</section>     
<!--End breadcrumb bottom area-->