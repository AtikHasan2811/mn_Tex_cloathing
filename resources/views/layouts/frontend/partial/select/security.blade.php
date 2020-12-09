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
                <div class="col-sm-12 col-md-12">
                    <table class="table table-bordered ">

                        <tbody>
                        <tr style="background-color: #1f4e78;">
                            <td colspan="4"  style="color: #ffffff;"><strong>1 Security Vision and Responsibility</strong></td>

                            <td width="10%" style="color: #ffffff;"><strong>50%</strong></td>
                        </tr>

                        <tr style="background-color: #1f4e78;">
                            <td width="10%" style="color: #ffffff;"><strong>No</strong></td>
                            <td width="35%" style="color: #ffffff;"><strong>Question</strong></td>
                            <td width="10%" style="color: #ffffff;"><strong>Y/N</strong></td>
                            <td width="35%" style="color: #ffffff;"><strong>Evidence / Details</strong></td>
                            <td width="10%" style="color: #ffffff;"><strong>Should /Must </strong></td>
                        </tr>

                        <tr>
                            <td  class="text-center">1.1</td>
                            <td > Members should demonstrate their commitment to supply chain security and the CTPAT Program through a statement of support. The statement should be signed by a senior company official and displayed in appropriate company locations. </td>
                            <td >
                                <input type="radio"  name="status" value="yes">
                                <label for="male">Yes</label><br>
                                <input type="radio"  name="status" value="no">
                                <label for="female">No</label><br>
                            </td>

                            <td ><textarea placeholder="Evidence / Details write here... " class="form-control" style="border: none;" name="" id="" cols="55" rows="10">It was noted through the documentation review and management interview that the factory has already demonstrate their commitment to supply chain security and the C-TPAT program through a statement of support. Top management has already been appointed a senior responsible person Mr. Amran Hossain, Manager(HR & Compliance) who has signed the statment officially and displayed the statement onto the factory notice board, Security room & on the main entarence.</textarea> </td>


                            <td >
                                <input type="radio"  name="status1" value="should">
                                <label for="should">Should</label><br>
                                <input type="radio"  name="status1" value="must">
                                <label for="should">Must</label><br>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">1.2 </td>
                            <td >Has the company incorporated representatives from all of the relevant departments into a cross-functional team.  </td>
                            <td >
                                <input type="radio"  name="status" value="yes">
                                <label for="male">Yes</label><br>
                                <input type="radio"  name="status" value="no">
                                <label for="female">No</label><br>
                            </td>
                            <td ><textarea  placeholder="Evidence / Details write here... " class="form-control" style="border: none;" name="" id="" cols="55" rows="10"></textarea> </td>
                            <td >
                                <input type="radio"  name="status1" value="should">
                                <label for="should">Should</label><br>
                                <input type="radio"  name="status1" value="must">
                                <label for="should">Must</label><br>
                            </td>
                        </tr>

                        <tr>
                            <td  class="text-center">1.3 </td>
                            <td >The supply chain security program must be designed with, supported by, and implemented by an appropriate written review component. </td>
                            <td >
                                <input type="radio"  name="status" value="yes">
                                <label for="male">Yes</label><br>
                                <input type="radio"  name="status" value="no">
                                <label for="female">No</label><br>
                            </td>
                            <td ><textarea placeholder="Evidence / Details write here... " class="form-control" style="border: none;" name="" id="" cols="55" rows="10"></textarea> </td>
                            <td >
                                <input type="radio"  name="status1" value="should">
                                <label for="should">Should</label><br>
                                <input type="radio"  name="status1" value="must">
                                <label for="should">Must</label><br>
                            </td>
                        </tr>

                        <tr>
                            <td  class="text-center">1.4 </td>
                            <td >The Company’s Point(s) of Contact (POC) to CTPAT must be
                                knowledgeable about CTPAT program requirements.  </td>
                            <td >
                                <input type="radio"  name="status" value="yes">
                                <label for="male">Yes</label><br>
                                <input type="radio"  name="status" value="no">
                                <label for="female">No</label><br>
                            </td>

                            <td ><textarea placeholder="Evidence / Details write here... " class="form-control" style="border: none;" name="" id="" cols="55" rows="10"></textarea> </td>

                            <td >
                                <input type="radio"  name="status1" value="should">
                                <label for="should">Should</label><br>
                                <input type="radio"  name="status1" value="must">
                                <label for="should">Must</label><br>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                    <input  style="width: 200px;" type="button" class="btn btn-outline-info  float-right "  value="Submit">
                </div>

            </div>
        </div>
    </section>
    <!--...........................table end..........................-->




@endsection

@push('script')

@endpush
