@extends('layouts.frontend.app')

@section('title','Home')
{{--@section('title','')--}}


@push('css')

@endpush

@section('content')


    <!--........................table start.......................-->
    <section class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <table class="table table-bordered ">



                        <tbody>


                        <tr style="background-color: #1f4e78;" >
                            <td  style="color: #ffffff;"><strong>Section</strong></td>
                            <td  style="color: #ffffff;"><strong>Description</strong></td>
                            <td  style="color: #ffffff;"><strong>Score</strong></td>
                        </tr>

                        <tr>
                            <td  class="text-center">1</td>
                            <td >Security Vision</td>
                            <td > 75%</td>

                        </tr>

                        <tr>
                            <td  class="text-center">2</td>
                            <td >Risk Assessment</td>
                            <td > 100%</td>

                        </tr>


                        <tr>
                            <td  class="text-center">3</td>
                            <td >Business Partner Security</td>
                            <td >100% </td>

                        </tr>


                        <tr>
                            <td  class="text-center">4</td>
                            <td >Cyber Security</td>
                            <td >100% </td>

                        </tr>


                        <tr>
                            <td  class="text-center">5</td>
                            <td >CIIT Security</td>
                            <td > 100%</td>

                        </tr>

                        <tr>
                            <td  class="text-center">6</td>
                            <td >Seal Security</td>
                            <td >100% </td>

                        </tr>

                        <tr>
                            <td  class="text-center">7</td>
                            <td >Procedural Security</td>
                            <td > 100%</td>

                        </tr>


                        <tr>
                            <td  class="text-center">8</td>
                            <td >Agriculture Security</td>
                            <td >33% </td>

                        </tr>


                        <tr>
                            <td  class="text-center">9</td>
                            <td >Physical Access Control</td>
                            <td > 100%</td>

                        </tr>

                        <tr>
                            <td  class="text-center">10</td>
                            <td >Physical Security</td>
                            <td > 88%</td>

                        </tr>

                        <tr>
                            <td  class="text-center">11</td>
                            <td >Personnel Security</td>
                            <td >100% </td>

                        </tr>

                        <tr>
                            <td  class="text-center">12</td>
                            <td >Education and Training</td>
                            <td >100% </td>

                        </tr>

                        <tr style="background-color: #999b9b;">

                            <td colspan="2" style="color: #ffffff; font-weight: bold">RATING</td>
                            <td  style="color: #ffffff; font-weight: bold">91% </td>

                        </tr>

{{--                        <tr>--}}
{{--                            <td  class="text-center">14</td>--}}
{{--                            <td ></td>--}}
{{--                            <td > </td>--}}

{{--                        </tr>--}}





















                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img src="{{asset('/')}}public/assets/frontend/image/chart.png" alt="" style="    height: 440px;
    width: 541px;">
                </div>
            </div>
        </div>
    </section>
    <!--...........................table end..........................-->




@endsection

@push('script')

@endpush
