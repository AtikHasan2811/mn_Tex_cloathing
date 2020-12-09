@extends('auth.master')
@section('content')
<div class="container">
    <h1 class="text-center">Admin Register</h1>
    @if (Session::get('message'))
        <p class="text-danger text-center">{{Session::get('message')}}</p>
    @endif
    <div class="row">
        <div class="col-md-4 col-sm-4 col-lg-4"></div>
        <div class="col-md-4 col-sm-4 col-lg-4">
            <div class="form-group">
            <form action="{{route('insertAdmin')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" id="">
                        </div>
                        <div class="col-md-12">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="">
                        </div>
                        <div class="col-md-12">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" id="">
                        </div>
                        <div class="col-md-12">
                            <label for="">Confirm Password</label>
                            <input type="password" class="form-control" name="cpassword" id="">
                        </div>
                        <div class="col-md-6 mt-2">
                        <a class="badge badge-info" href="{{route('adminLogin')}}">Login ?</a>
                        </div>
                        <div class="col-md-6 mt-2">
                            <button class="btn btn-success" type="submit">Admin Register</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-sm-4"></div>
    </div>
</div>
    
@endsection