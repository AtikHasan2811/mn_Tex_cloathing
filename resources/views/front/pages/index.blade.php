@extends('front.master')
@section('content')

<!--Start rev slider wrapper-->
@include('front.layouts.slider')
<!--End rev slider wrapper-->

<!--Start services area-->
@include('front.layouts.product')
<!--End services area-->

<!--Start about us area-->
@include('front.layouts.about')
<!--End about us area-->

<!--Start our team area-->
@include('front.layouts.team')
<!--End our team area-->

<!--Start latest project area-->
@include('front.layouts.project')
<!--End latest project area-->

<!--Start Brand area-->
{{--@include('front.layouts.brand')--}}
<!--End Brand area-->

<!--Start google map area-->
@include('front.layouts.googlemap')
<!--End google map area-->

@endsection
