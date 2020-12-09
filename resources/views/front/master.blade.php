<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>MN TEX || {{$title}}</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- master stylesheet -->
	<link rel="stylesheet" href="{{asset('public/front/css')}}/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="{{asset('public/front/css')}}/responsive.css">

<link rel="shortcut icon" href="{{asset('public/front/img/resources/000001.png')}}" />
</head>
<body>
	<!-- Modal -->
<div class="modal fade" style="margin-top:15%" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Get A QUOTE ?</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<form action="{{route('insertMessage')}}" method="POST">
		<div class="modal-body">
				@csrf
				<input type="text" style="width: 45%" name="name" placeholder="Name">
				<input type="email" style="width: 45% ;float: right;" name="email" placeholder="Email"><br><br>
				<input type="text" style="width: 100%" name="subject" placeholder="Subject"><br><br>
				<textarea name="message" style="width: 100%" placeholder="Write details for your quotation" id="" cols="30" rows="5"></textarea>

		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
		  <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
		</div>
	</form>
	  </div>
	</div>

  </div>

<!--Start header area-->
@include('front.layouts.header')
<!--End header area-->
@yield('content')
<!--Start footer area-->
@include('front.layouts.footer')
<!--End footer bottom area-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<!-- main jQuery -->
<script src="{{asset('public/front/js')}}/jquery-1.11.1.min.js"></script>
<!-- bootstrap -->
<script src="{{asset('public/front/js')}}/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="{{asset('public/front/js')}}/jquery.bxslider.min.js"></script>
<!-- count to -->
<script src="{{asset('public/front/js')}}/jquery.countTo.js"></script>
<!-- owl carousel -->
<script src="{{asset('public/front/js')}}/owl.carousel.min.js"></script>
<!-- validate -->
<script src="{{asset('public/front/js')}}/validate.js"></script>
<!-- mixit up -->
<script src="{{asset('public/front/js')}}/jquery.mixitup.min.js"></script>
<!-- easing -->
<script src="{{asset('public/front/js')}}/jquery.easing.min.js"></script>
<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--gmap script-->
<script src="{{asset('public/front/js')}}/gmaps.js"></script>
<script src="{{asset('public/front/js')}}/map-helper.js"></script>
<!-- video responsive script -->
<script src="{{asset('public/front/js')}}/jquery.fitvids.js"></script>
<!-- jQuery ui js -->
<script src="{{asset('public/front/assets')}}/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- fancy box -->
<script src="{{asset('public/front/assets')}}/fancyapps-fancyBox/source/jquery.fancybox.pack.js"></script>
<script src="{{asset('public/front/js')}}/jquery.appear.js"></script>

<!-- revolution slider js -->
<script src="{{asset('public/front/assets')}}/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="{{asset('public/front/assets')}}/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{asset('public/front/assets')}}/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{asset('public/front/assets')}}/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{asset('public/front/assets')}}/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{asset('public/front/assets')}}/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{asset('public/front/assets')}}/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="{{asset('public/front/assets')}}/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{asset('public/front/assets')}}/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{asset('public/front/assets')}}/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{asset('public/front/assets')}}/revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- thm custom script -->
<script src="{{asset('public/front/js')}}/custom.js"></script>
</body>
</html>
