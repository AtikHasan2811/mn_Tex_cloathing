@extends('front.master')
@section('content')
@include('front.layouts.banner')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-4">
        <img style="height: 400px; width:380px" src="{{ url('uploads/about/' . $about->image) }}" alt="IMG">

        </div>
        <div class="col-sm-12 col-md-8">
            <h1>Message from MD’S desk</h1><br><br>
        <p>{{$about->message}}</p>
        </div>

    </div>
</div>
    <br><br>
@endsection