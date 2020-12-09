@extends('layouts.backend.app')
@section('title','Dashboard')


@push('css')

@endpush
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">playlist_add_check</i>
                    </div>
                    <div class="content">
                        <div class="text">MACHINERIES ITEM</div>
                        <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">{{$no_machine}}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">help</i>
                    </div>
                    <div class="content">
                        <div class="text">PROJECTS</div>
                        <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">{{$no_project}}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">forum</i>
                    </div>
{{--                    <div class="content">--}}
{{--                        <div class="text">PRODUCTS</div>--}}
{{--                        <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20">{{$no_product}}</div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">photo</i>
                    </div>
                    <div class="content">
                        <div class="text">SLIDERS</div>
                    <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">{{$no_slider}}</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->

        <div class="row clearfix">
            <!-- Task Info -->
{{--            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">--}}
{{--                <div class="card">--}}
{{--                    <div class="header">--}}
{{--                        <h2>OUR MACHINERIES</h2>--}}
{{--                    </div>--}}
{{--                    <div class="body">--}}
{{--                        <div class="table-responsive">--}}
{{--                            <table class="table table-hover dashboard-task-infos">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th style="width: 10%">#</th>--}}
{{--                                    <th style="width: 15%">Photo</th>--}}
{{--                                    <th style="width: 50%">Name</th>--}}
{{--                                    <th style="width: 5%">No.</th>--}}
{{--                                    <th style="width: 10%">Origin</th>--}}
{{--                                    <th style="width: 10%">Production</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                @foreach ($machineries as $key=>$machine)--}}
{{--                                <tr>--}}
{{--                                <td>{{++$key}}</td>--}}
{{--                                <td>--}}
{{--                                    <div class="zoom"><img src="{{ url('uploads/about/' . $machine->image) }}"--}}
{{--                                        style="height: 100px;width: 100px;" alt=""></div>--}}
{{--                                </td>--}}
{{--                                <td>{{$machine->machine_name}}</td>--}}
{{--                                <td>{{$machine->number}}</td>--}}
{{--                                <td>{{$machine->origin}}</td>--}}
{{--                                <td>{{$machine->average_production}} pcs/day </td>--}}
{{--                                </tr>--}}

{{--                                @endforeach--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- #END# Task Info -->
        </div>
@endsection
@push('js')

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('/') }}assets/backend/plugins/jquery-countto/jquery.countTo.js"></script>
    <script src="{{ asset('/') }}assets/backend/js/pages/index.js"></script>
    <!-- Morris Plugin Js -->
    <script src="{{ asset('/') }}assets/backend/plugins/raphael/raphael.min.js"></script>
    <script src="{{ asset('/') }}assets/backend/plugins/morrisjs/morris.js"></script>
    <!-- ChartJs -->
    <script src="{{ asset('/') }}assets/backend/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{ asset('/') }}assets/backend/plugins/flot-charts/jquery.flot.js"></script>
    <script src="{{ asset('/') }}assets/backend/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="{{ asset('/') }}assets/backend/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="{{ asset('/') }}assets/backend/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="{{ asset('/') }}assets/backend/plugins/flot-charts/jquery.flot.time.js"></script>

@endpush
