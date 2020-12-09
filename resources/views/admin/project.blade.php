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
                                Project TABLE
                            </h2>
                                        <div class="col text-right">
                                            <a style="width: 200px;" type="button"
                                                class="btn btn-outline-info  float-right " data-toggle="modal"
                                                data-target="#exampleModalinsert" value="Add Photo">Add Project</a>
                                        </div>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th style="width: 5%">#SL</th>
                                        <th style="width: 15%" >Name</th>
                                        <th style="width: 30%">Description</th>
                                        <th style="width: 10%" >Date</th>
                                        <th style="width: 10%" >Client</th>
                                        <th style="width: 10%" >Status</th>
                                        <th style="width: 10%" >Photo</th>
                                        <th style="width: 10%" class="text-center">Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($project as $key => $value)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $value->name }}</td>
                                            <td>{{substr($value->description,0,100)}}</td>
                                            <td>{{ $value->date }}</td>
                                            <td>{{ $value->client }}</td>
                                            <td>

                                                @if ($value->status == true)
                                                    <span class="badge bg-blue">Published</span>
                                                @else
                                                    <span class="badge bg-pink">Pending</span>
                                                @endif


                                            </td>
                                            <td>
                                                <div class="zoom"><img src="{{ url('uploads/about/' . $value->image) }}"
                                                        style="height: 50px;width: 50px;" alt=""></div>
                                            </td>
                                            <td class="text-center" style="width: 15%;">



                                                <a href="#" class="btn btn-info waves-effect getdata" data-toggle="modal"
                                                    data-id="{{ $value->id }}" data-name="{{ $value->name }}"
                                                    data-description="{{ $value->description }}"
                                                    data-date="{{ $value->date }}" data-client="{{ $value->client }}"
                                                    data-status="{{ $value->status }}" data-target="#exampleModal">
                                                    <i class="material-icons">edit</i>
                                                </a>

                                                <button class="btn btn-danger waves-effect" type="button"
                                                    onclick="projectdestroy({{ $value->id }})">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                                <form id="delete-form-{{ $value->id }}"
                                                    action="{{ url('projectdestroy/' . $value->id) }}" method="POST"
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

        {{-- Modal For Edit Start--}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true" style="width: 100%;">
            <form action="{{ url('projectupdate/') }}" enctype="multipart/form-data" method="post">
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
                                    <label for="email_address">Name</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="name" id="name" class="form-control" value="">
                                        </div>
                                    </div>
                                    <label for="email_address">Description </label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="description" class="form-control" id="description" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>

                                    <label for="email_address">Date</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" name="date" id="date" class="form-control" value="">
                                        </div>
                                    </div>

                                    <label for="email_address">Client</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="client" id="client" class="form-control" value="">
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
        {{--Modal For Edit End--}}







        <!-- Modal  for insert-->
        <div class="modal fade modal-xl" id="exampleModalinsert" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="{{ url('project/store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Project Info</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <label for="email_address">Name</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="name" id="name" class="form-control" value="">
                                </div>
                            </div>

                            <label for="email_address">Description </label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>

                            <label for="email_address">Date</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date" name="date" id="date" class="form-control" value="">
                                </div>
                            </div>

                            <label for="email_address">Client</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="client" id="client" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="vehicle2">Status</label><br>
                                <input type="checkbox" id="vehicle1" name="status" value="1">
                                <label for="vehicle1">Publish</label><br>
                            </div>

                            <div class="form-group">
                                <label for="usr">Select Sample </label>
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
            function projectdestroy(id) {
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
                    // alert('atik');
                    var id = $(this).data('id');
                    var name = $(this).data('name');
                    // console.log(id);
                    var description = $(this).data('description');
                    var date = $(this).data('date');
                    var client = $(this).data('client');
                    var status = $(this).data('status');

                    // console.log(status);
                    if (status == 1) {
                        $('#publish').prop('checked', true)
                    } else {

                    }

                    $("#id").val(id);
                    $("#name").val(name);
                    $("#description").val(description);
                    $("#date").val(date);
                    $("#client").val(client);



                });
            });


        </script>

    @endpush
