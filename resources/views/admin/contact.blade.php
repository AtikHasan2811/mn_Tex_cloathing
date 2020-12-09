@extends('layouts.backend.app')
@section('title','Dashboard')


@push('css')

{{--    <link--}}
{{--        href="{{ asset('public/assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}"--}}
{{--        rel="stylesheet">--}}
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
    <div class="container-fluid">


{{--        id	about	mission_vission	message	why_nslp	history	policy	image	status	created_at	updated_at--}}

        <div class="section">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Contact TABLE

                            </h2>


{{--                            <div class="section mt-5">--}}
{{--                                <div class="container">--}}
{{--                                    <div class="row">--}}
                                        <div class="col text-right">
                                            <a style="width: 200px;" type="button" class="btn btn-outline-info  float-right " data-toggle="modal" data-target="#exampleModalinsert"  value="Add Photo">Add Contact</a>
{{--                                            <input  style="width: 200px;" type="button" class="btn btn-outline-info  float-right " data-toggle="modal" data-target="#exampleModalinsert"  value="Add Photo">--}}
                                        </div>
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                        </div>
{{--                        id	name	description	image	status	created_at	updated_at--}}
                        {{--        id	about	mission_vission	message	why_nslp	history	policy	image	status	created_at	updated_at--}}
                        <div class="body table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th class="text-center">Action
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contact as $key=>$value)
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <td>{{ $value->mobile }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ $value->address }}</td>
                                        <td>

                                            @if($value->status == true)
                                                <span class="badge bg-blue">Published</span>
                                            @else
                                                <span class="badge bg-pink">Pending</span>
                                            @endif


                                        </td>

                                        <td class="text-center" style="width: 15%;">



                                            <a href="#"  class="btn btn-info waves-effect getdata" data-toggle="modal"
                                               data-id="{{$value->id}}"
                                               data-mobile="{{$value->mobile}}"
                                               data-email="{{$value->email}}"
                                               data-address="{{$value->address}}"
                                               data-status="{{$value->status}}"
                                               data-target="#exampleModal">
                                                <i class="material-icons">edit</i>
                                            </a>




                                            <button class="btn btn-danger waves-effect" type="button"
                                                    onclick="contactdestroy({{$value->id}})">
                                                <i class="material-icons">delete</i>
                                            </button>
                                            <form id="delete-form-{{ $value->id }}"
                                                  action="{{ url('contactdestroy/'.$value->id) }}" method="POST"
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













        {{--                        id	name	description	image	status	created_at	updated_at--}}
        {{--.......................model for edit.............................--}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true" style="width: 100%;">
            <form action="{{url('contactupdate/')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Contact</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
{{--                        <p id="abc"></p>--}}
                        <div class="modal-body">


                <input type="hidden" name="id"  id="id" class="form-control" value="" >


                            <label for="email_address">Mobile</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="mobile"  id="mobile" class="form-control" value="" >
                                </div>
                            </div>


                            <label for="email_address">Email</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="email"  id="email" class="form-control" value="" >
                                </div>
                            </div>

                            <label for="email_address">Address</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="address"  id="address" class="form-control" value="" >
                                </div>
                            </div>



                            <label for="email_address">Status</label>
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

        {{--.........................end model...........................--}}







    <!-- Modal  for insert-->
        <div class="modal fade modal-xl" id="exampleModalinsert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">


            <form  action="{{url('contact/store')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Contact Info</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        {{--                        <p id="abc"></p>--}}
                        <div class="modal-body">


                            <label for="email_address">Mobile</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" required name="mobile"  id="mobile" class="form-control" value="" >
                                </div>
                            </div>



                            <label for="email_address">Email</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="email"  id="email" class="form-control" value="" >
                                </div>
                            </div>

                            <label for="email_address">Address</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="address"  id="address" class="form-control" value="" >
                                </div>
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

                function contactdestroy(id) {
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



            <script>
                $(document).ready(function(){
                    $(".getdata").click(function(){
                            var id = $(this).data('id');
                            var mobile = $(this).data('mobile');
                            var email = $(this).data('email');
                            var address = $(this).data('address');
                            var status = $(this).data('status');
                            if(status==1){
                                $('#publish').prop('checked', true)
                            }else {

                            }
                            $("#id").val(id);
                            $("#mobile").val(mobile);
                            $("#email").val(email);
                            $("#address").val(address);
                    });
                });




                // $(document).on("click", ".getdata", function () {
                //     var photodata = $(this).data('id');
                //     $("#abc").val(photodata);
                //     // As pointed out in comments,
                //     // it is unnecessary to have to manually call the modal.
                //     // $('#addBookDialog').modal('show');
                // });
            </script>


















    @endpush


