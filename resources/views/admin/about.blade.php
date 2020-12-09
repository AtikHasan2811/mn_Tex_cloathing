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
                                        <th style="width: 10%">Photo</th>
                                        <th style="width: 20%">About</th>
                                        <th style="width: 20%">Mission</th>
                                        <th style="width: 30%">Message</th>
                                        <th style="width: 5%">Status</th>
                                        <th style="width: 10%" class="text-center">Action
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($about as $key => $value)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>
                                                <div class="zoom"><img src="{{ url('uploads/about/' . $value->image) }}"
                                                        style="height: 80px;width: 80px;" alt=""></div>




                                            </td>
                                            <td>{{substr($value->about,0,200)}}...</td>
                                            <td>{{substr($value->mission_vission,0,200)}}...</td>
                                            <td>{{substr($value->message,0,200)}}...</td>
                                            <td>
                                                @if ($value->status == true)
                                                    <span class="badge bg-blue">Published</span>
                                                @else
                                                    <span class="badge bg-pink">Pending</span>
                                                @endif
                                            </td>
                                            <td class="text-center" style="width: 15%;">
                                                <a href="#" class="btn btn-info waves-effect getdata" data-toggle="modal"
                                                    data-id="{{ $value->id }}" data-about="{{ $value->about }}"
                                                    data-mission_vission="{{ $value->mission_vission }}"
                                                    data-message="{{ $value->message }}"
                                                    data-why_nslp="{{ $value->why_nslp }}"
                                                    data-history="{{ $value->history }}" data-policy="{{ $value->policy }}"
                                                    data-status="{{ $value->status }}" data-target="#exampleModal">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <button class="btn btn-danger waves-effect" type="button"
                                                    onclick="deletePhoto({{ $value->id }})">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                                <form id="delete-form-{{ $value->id }}"
                                                    action="{{ url('photodestroy/' . $value->id) }}" method="POST"
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
            <form action="{{ url('aboutupdate/') }}" enctype="multipart/form-data" method="post">
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
                                    <label for="email_address">About</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="about" id="about" class="form-control" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <label for="email_address">Mission</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="mission_vission" id="mission_vission" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <label for="email_address">Message</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="message" id="message" class="form-control" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <label for="email_address">Why nslp</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="why_nslp" class="form-control" id="why_nslp" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <label for="email_address">History</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="history" class="form-control" id="history" cols="30" rows="5"></textarea>

                                        </div>
                                    </div>
                                    <label for="email_address">Vision</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="policy" id="policy" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <label for="email_address">Status</label>
                                    <div class="form-group">
                                        <input type="checkbox" id="publish" class="" name="status" value="1">
                                        <label for="publish">Publish</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="usr">Select Image </label>
                                        <input type="file" name="image" class="form-control" id="usr">
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
            <form action="{{ url('about/store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">About Info</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label for="email_address">About Us</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea name="about" class="form-control" id="" cols="30" rows="5"></textarea>
                                    {{-- <input type="text" required name="about" id="abc" class="form-control" value=""> --}}
                                </div>
                            </div>
                            <label for="email_address">Mission</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea name="mission_vission" class="form-control" id="" cols="30" rows="5"></textarea>
                                    {{-- <input type="text" required name="mission_vission" id="abc" class="form-control"
                                        value=""> --}}
                                </div>
                            </div>
                            <label for="email_address">Message of MD</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea name="message" class="form-control" id="" cols="30" rows="5"></textarea>
                                    {{-- <input type="text" required name="message" id="abc" class="form-control" value=""> --}}
                                </div>
                            </div>
                            <label for="email_address">Why SN Label?</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea name="why_nslp" class="form-control" id="" cols="30" rows="5"></textarea>
                                    {{-- <input type="text" required name="why_nslp" id="abc" class="form-control" value=""> --}}
                                </div>
                            </div>
                            <label for="email_address">History</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea name="history" class="form-control" id="" cols="30" rows="5"></textarea>
                                    {{-- <input type="text" name="history" id="abc" class="form-control" value=""> --}}
                                </div>
                            </div>
                            <label for="email_address">Vision</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea name="policy" class="form-control" id="" cols="30" rows="5"></textarea>
                                    {{-- <input type="text" required name="policy" class="form-control" value=""> --}}
                                </div>
                            </div>
                            <label for="email_address">History</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea name="history" id="" cols="30" rows="5" class="form-control"></textarea>
                                    {{-- <input type="text" required name="history" id="abc" class="form-control" value=""> --}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="vehicle2">Status</label><br>
                                <input type="checkbox" id="vehicle1" name="status" value="1">
                                <label for="vehicle1"></label><br>
                            </div>
                            <div class="form-group">
                                <label for="usr">Select Image </label>
                                <input required type="file" name="image" class="form-control" id="usr">
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

















        {{-- id about mission_vission message why_nslp history policy image status created_at
        updated_at--}}


        {{-- ..........edit model data...--}}
        <script>
            $(document).ready(function() {
                $(".getdata").click(function() {
                    // alert('atik');
                    var id = $(this).data('id');
                    var about = $(this).data('about');
                    // console.log(id);
                    var mission_vission = $(this).data('mission_vission');
                    var message = $(this).data('message');
                    var why_nslp = $(this).data('why_nslp');
                    var history = $(this).data('history');
                    var policy = $(this).data('policy');
                    var status = $(this).data('status');

                    // console.log(status);
                    if (status == 1) {
                        $('#publish').prop('checked', true)
                    } else {

                    }
                    $("#about").val(about);
                    $("#id").val(id);
                    $("#mission_vission").val(mission_vission);
                    $("#message").val(message);
                    $("#why_nslp").val(why_nslp);
                    $("#history").val(history);
                    $("#policy").val(policy);
                    // $("#status").val(status);



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
