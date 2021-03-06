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


        <div class="section">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                PHOTO TABLE

                            </h2>


{{--                            <div class="section mt-5">--}}
{{--                                <div class="container">--}}
{{--                                    <div class="row">--}}
                                        <div class="col text-right">

                                            <a style="width: 200px;" type="button" class="btn btn-outline-info  float-right " data-toggle="modal" data-target="#exampleModalinsert"  value="Add Photo">Add Photo</a>
{{--                                            <input  style="width: 200px;" type="button" class="btn btn-outline-info  float-right " data-toggle="modal" data-target="#exampleModalinsert"  value="Add Photo">--}}
                                        </div>
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                        </div>
                        <div class="body table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Caption</th>
                                    <th>Phot</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $key=>$imageinfo)
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <td>{{ $imageinfo->caption }}</td>
                                        <td>
                                            <div class="zoom"><img src="{{url('uploads/photo/'.$imageinfo->image)}}"
                                                                   style="height: 50px;width: 50px;" alt=""></div>
                                        </td>
                                        <td class="text-center" style="width: 15%;">



                                            <a href="#"  class="btn btn-info waves-effect getdata" data-toggle="modal"
                                               data-id="{{$imageinfo->id}}" data-caption="{{$imageinfo->caption}}" data-target="#exampleModal">
                                                <i class="material-icons">edit</i>
                                            </a>




                                            <button class="btn btn-danger waves-effect" type="button"
                                                    onclick="deletePhoto({{$imageinfo->id}})">
                                                <i class="material-icons">delete</i>
                                            </button>
                                            <form id="delete-form-{{ $imageinfo->id }}"
                                                  action="{{ url('photodestroy/'.$imageinfo->id) }}" method="POST"
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

















        {{--.......................model for edit.............................--}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true" style="width: 100%;">
            <form action="{{url('photoupdate/')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Image</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
{{--                        <p id="abc"></p>--}}
                        <div class="modal-body">
                            <input type="hidden" name="id"  id="id" class="form-control" value="" >
                            <div class="form-group">
                                <label for="usr">Select Image </label>
                                <input type="file" name="image" class="form-control" id="usr">
                            </div>

                            <label for="email_address">Caption</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="caption"  id="abc" class="form-control" value="" >

                                </div>
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


            <form  action="{{url('image/store')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Image</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="usr">Select Image </label>
                                <input type="file" name="image" class="form-control" id="usr">
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                <label for="pwd">Caption :</label>
                                <input type="text" name="caption" class="form-control" id="pwd">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submita</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>





        @endsection

        @push('js')
            <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>

            <script type="text/javascript">

                function deletePhoto(id) {
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




















            {{--        ..........edit model data...--}}
            <script>
                $(document).ready(function(){
                    $(".getdata").click(function(){
                        // alert('atik');
                            var photodata = $(this).data('id');
                            var caption = $(this).data('caption');
                            $("#abc").val(caption);
                            $("#id").val(photodata);
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


