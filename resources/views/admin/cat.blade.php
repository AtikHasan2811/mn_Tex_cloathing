@extends('layouts.backend.app')
@section('title', 'Dashboard')
    @push('css')
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
                -ms-transform: scale(3.5);
                /* IE 9 */
                -webkit-transform: scale(3.5);
                /* Safari 3-8 */
                transform: scale(3.5);
            }

        </style>
    @endpush
@section('content')
    <div class="container-fluid">
        <div class="section">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                About Table
                            </h2>
                            <div class="col text-right">
                                <a style="width: 200px;" type="button" class="btn btn-outline-info  float-right "
                                    data-toggle="modal" data-target="#exampleModalinsert" value="Add Photo">Add About</a>
                            </div>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th style="width: 5%">#SL</th>
                                        <th style="width: 20%">Title</th>
{{--                                        <th style="width: 20%">Slug</th>--}}
{{--                                        <th style="width: 20%">Summery</th>--}}
                                        <th style="width: 5%">Is Parent</th>
                                        <th style="width: 20%">Parent Category</th>
                                        <th style="width: 5%">Status</th>
                                        <th style="width: 20%" class="text-center">Action
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $value)

                                        @php
                                            $parent_cats=DB::table('categories')->select('title')->where('id',$value->parent_id)->get();
                                            // dd($parent_cats);

                                        @endphp
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>

                                            <td style="width: 20%;">{{$value->title}}</td>
{{--                                            <td>{{$value->slug}}</td>--}}
{{--                                            <td>{{$value->summary}}</td>--}}
                                            <td>{{(($value->is_parent==1)? 'Yes': 'No')}}</td>
                                            <td style="width: 20%;">
                                                @foreach($parent_cats as $parent_cat)
                                                    {{$parent_cat->title}}
                                                @endforeach
                                            </td>


                                            <td>
                                                @if ($value->status == 'active')
                                                    <span class="badge bg-blue">Published</span>
                                                @else
                                                    <span class="badge bg-pink">Pending</span>
                                                @endif
                                            </td>
                                            <td class="text-center" style="width: 20%;">
                                                <a href="#" class="btn btn-info waves-effect getdata" data-toggle="modal"
                                                    data-id="{{ $value->id }}"
                                                    data-title="{{ $value->title}}"
                                                    data-summary="{{ $value->summary}}"
                                                    data-is_parent="{{ $value->is_parent }}"
                                                    data-parent_id="{{ $value->parent_id }}"
                                                   data-status="{{ $value->status }}"
                                                   data-target="#exampleModal">
                                                    <i class="material-icons">edit</i>
                                                </a>



                                                <button class="btn btn-danger waves-effect" type="button"
                                                    onclick="deleteCat({{ $value->id }})">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                                <form id="delete-form-{{ $value->id }}"
                                                    action="{{ url('catdestroy/'.$value->id) }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>




















        {{--Model For Edit--}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true" style="width: 100%;">
            <form action="{{ url('categoryupdate/') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Image</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                    <input type="hidden" name="id" id="id" class="form-control" value="">


                            <div class="form-group">
                                <label for="email_address">Title</label>
                                <div class="form-line">
                                    <input type="text" required name="title" placeholder="Enter title" id="title" class="form-control" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email_address">Summary</label>
                                <div class="form-line">
                                    <input type="text" name="summary"  class="form-control" id="summary" cols="3" rows="5"> </input>
                                </div>
                            </div>


{{--                                                        <label >Is Parent</label>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <div class="form-line">--}}
{{--                                                                <textarea name="message" class="form-control" id="" cols="30" rows="5"></textarea>--}}
{{--                                                                <input class="form-control" type="checkbox" name='is_parent' id='is_parent' value='1' checked> Yes--}}
{{--                                                                <input   type="checkbox" id="vehicl" name="is_parent" value="1" checked>Yes--}}
{{--                                                                 <input type="text" required name="message" id="abc" class="form-control" value="">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}



{{--                            <div class="form-group">--}}
{{--                                <label for="vehicle2">Is Parent</label><br>--}}
{{--                                <input type="checkbox" id="paren" name="is_parent" value="1">--}}
{{--                                <label for="parent"></label><br>--}}
{{--                            </div>--}}

                            <div class="form-group">
                                <label for="is_parent">Is Parent</label><br>
                                <input type="checkbox" name='is_parent' id='parent' value='1'  >
                                <label for="parent" id="parent"></label><br>
                            </div>



                            @php
                                $parent_cats = DB::table('categories')->
                                    where('is_parent','1')
                                    ->where('status','active')
                                    ->get();
                            @endphp

                            <div class="form-group " id='parent_cat' style="display: none" >
                                <label for="parent_id">Parent Category</label>
                                <select name="parent_id" class="form-control" id="abc">
                                    <option value="">--Select any category--</option>
                                    @foreach($parent_cats as $key=>$parent_cat)
                                        <option class="current" value='{{$parent_cat->id}}'>{{$parent_cat->title}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <input type="checkbox" id="publish" class="" name="status" value="1">
                                <label for="publish">Publish</label>
                            </div>




                        </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
            </form>
        </div>
        {{--End Modal For Edit--}}



















        <!-- Modal  For Insert-->
        <div class="modal fade modal-xl" id="exampleModalinsert" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="{{ url('category/store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Category Info :</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">


                            <div class="form-group">
                                <label for="email_address">Title</label>
                                <div class="form-line">
                                     <input type="text" required name="title" placeholder="Enter title" id="abc" class="form-control" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email_address">Summary</label>
                                <div class="form-line">
                                    <input type="text" name="summary" class="form-control" id="" cols="3" rows="5"></input>
                                </div>
                            </div>





                            @php
                                $parent_cats = DB::table('categories')->
                                    where('is_parent','1')
                                    ->where('status','active')
                                    ->get();
                            @endphp



                            <div class="form-group">
                                <label for="is_parent">Is Parent</label><br>
                                <input type="checkbox" name='is_parent' id='is_parent' value='1' checked >
                                <label for="is_parent" id="is_parent"></label><br>
                            </div>


                            <div class="form-group d-none" id='parent_cat_div' style="display: none">
                                <label for="parent_id">Parent Category</label>
                                <select name="parent_id" class="form-control">
                                    <option value="">--Select any category--</option>
                                    @foreach($parent_cats as $key=>$parent_cat)
                                        <option value='{{$parent_cat->id}}'>{{$parent_cat->title}}</option>
                                    @endforeach
                                </select>
                            </div>




                            <div class="form-group">
                                <label for="vehicle2">Status</label><br>
                                <input type="checkbox" id="vehicle1" name="status" value="1">
                                <label for="vehicle1"></label><br>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endsection




    @push('js')
        <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>

        <script type="text/javascript">
            function deleteCat(id) {
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    buttonsStyling: false,
                    reverseButtons: true
                }).then((result) => {
                    if (result.value) {
                        event.preventDefault();
                        document.getElementById('delete-form-' + id).submit();
                    } else if (
                        // Read more about handling dismissals
                        result.dismiss === swal.DismissReason.cancel
                    ) {
                        swal(
                            'Cancelled',
                            'Your data is safe :)',
                            'error'
                        )
                    }
                })
            }

        </script>


















        {{-- ..........edit model data...--}}
        <script>
            $(document).ready(function() {
                   $(".getdata").click(function() {
                    var id = $(this).data('id');
                    var title = $(this).data('title');
                    var summary = $(this).data('summary');
                    var is_parent = $(this).data('is_parent');
                    var parent_id = $(this).data('parent_id');
                    var status = $(this).data('status');


                       if (status == "active") {
                           $('#publish').prop('checked', true)
                       } else {

                       }



                       if (is_parent == 1) {
                           $('#parent').prop('checked', true)

                           $('#parent').change(function(){
                               var is_checked=$('#parent').prop('checked');
                               // alert(is_checked);
                               if(is_checked==false){
                                   document.getElementById('parent_cat').style.display = 'block';
                               }
                               else{

                                   document.getElementById('parent_cat').style.display = 'none';
                               }
                           })
                       } else {

                           document.getElementById('parent_cat').style.display = 'block';

                           $('#is_parent').change(function(){
                               var is_checked=$('#is_parent').prop('checked');
                               // alert(is_checked);
                               if(is_checked==false){
                                   document.getElementById('parent_cat').style.display = 'block';
                               }
                               else{

                                   document.getElementById('parent_cat').style.display = 'none';
                               }
                           })

                       }





                       $("#id").val(id);
                    $("#title").val(title);
                    $("#summary").val(summary);


                });
            });




        </script>


            <script>
                $('#is_parent').change(function(){
                    var is_checked=$('#is_parent').prop('checked');
                    // alert(is_checked);
                    if(is_checked==false){
                        document.getElementById('parent_cat_div').style.display = 'block';
                    }
                    else{

                        document.getElementById('parent_cat_div').style.display = 'none';
                    }
                })
            </script>














    @endpush
