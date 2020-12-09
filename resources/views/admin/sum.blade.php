@extends('layouts.backend.app')
@section('title','Dashboard')


@push('css')

    <link
        href="{{ asset('public/assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}"
        rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        .zoom {
            /*padding: 50px;*/
            /*background-color: green;*/
            transition: transform .2s;
            width: 50px;
            height: 50px;
            /*margin: 0 auto;*/
        }

        .zoom:hover {
            -ms-transform: scale(3.5); /* IE 9 */
            -webkit-transform: scale(3.5); /* Safari 3-8 */
            transform: scale(3.5);
        }
    </style>
@endpush
@section('content')


<div class="section">
    <div class="row">
        <div class="col-md-12">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                VERTICAL LAYOUT
                                <small>With floating label</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">



                            <input type="radio" name="type" value="1111" id="h" onclick="func2();"/>0 Human<br/>
                            <input type="radio" name="type" value="2222" id="r"  onclick="func2();"/>1 Robot<br/>
                            <input type="radio" name="type" value="3333" id="a" onclick="func2();"/>2 Animal<br/>


                            <form>
                                <div class="form-group form-float">
                                    <div class="form-group">
                                        <label class="form-label">First Number</label>
                                        <input type="number" id="email_address" class="form-control prc" style="border: 1px solid red;">
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-group">
                                        <label class="form-label">Secund Number</label>
                                        <input type="number" id="email_address" class="form-control prc" style="border: 1px solid red;">
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-group">



                                        <input type="radio" class="prc" id="female" name="gender" value="0.5">
                                        <label for="female">Should</label><br>
                                        <input type="radio" class="prc" id="other" name="gender" value="1">
                                        <label for="other">Must</label>


{{--                                        <label class="form-label">Third Number</label>--}}
{{--                                        <input type="number" id="email_address" class="form-control prc" style="border: 1px solid red;">--}}

                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-group" >
                                        <label class="form-label text-center" style="">Total</label>
                                       <output id="result"></output>
{{--                                        <input type="text" id="email_address" class="form-control" style="border: 1px solid red; background-color: lightgrey">--}}
                                    </div>
                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



        @endsection

        @push('js')
            <script>
                $(".form-group").on('input','.prc',function (){
                    var totalSum = 0;
                    $(".form-group .prc").each(function (){
                    var inputVal = $(this).val();

                    if($.isNumeric(inputVal)){
                        totalSum += parseFloat(inputVal);
                    }

                    });
                    $('#result').text(totalSum);
                });
            </script>
        @endpush


