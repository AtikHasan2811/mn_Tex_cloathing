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
                                Machinery TABLE
                            </h2>
                            <div class="col text-right">
                                <a style="width: 200px;" type="button" class="btn btn-outline-info  float-right "
                                    data-toggle="modal" data-target="#exampleModalinsert" value="Add Photo">Add
                                    Machinery</a>
                            </div>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Name</th>
                                        <th>Types</th>
                                        <th>No.</th>
                                        <th>Origin</th>
                                        <th>Max RPM</th>
                                        <th>Max Width</th>
                                        <th>Avarage Production</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Photo</th>
                                        <th class="text-center">Action
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($machinery as $key => $value)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $value->machine_name }}</td>
                                            <td>{{$value->machine_type}}</td>
                                            <td>{{ $value->number }}</td>
                                            <td>{{ $value->origin }}</td>
                                            <td>{{ $value->max_prm }}</td>
                                            <td>{{ $value->max_width }}</td>
                                            <td>{{ $value->average_production }}</td>
                                            <td>{{ substr($value->description,0,100)}}...</td>
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
                                                    data-id="{{ $value->id }}"
                                                    data-machine_name="{{ $value->machine_name }}"
                                                    data-machine_type="{{$value->machine_type}}"
                                                    data-number="{{ $value->number }}" data-origin="{{ $value->origin }}"
                                                    data-max_prm="{{ $value->max_prm }}"
                                                    data-max_width="{{ $value->max_width }}"
                                                    data-average_production="{{ $value->average_production }}"
                                                    data-description="{{ $value->description }}"
                                                    data-status="{{ $value->status }}" data-target="#exampleModal">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <button class="btn btn-danger waves-effect" type="button"
                                                    onclick="machinerydestroy({{ $value->id }})">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                                <form id="delete-form-{{ $value->id }}"
                                                    action="{{ url('machinerydestroy/' . $value->id) }}" method="POST"
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

        {{-- Edit Modal Start --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true" style="width: 100%;">
            <form action="{{ url('machineryupdate/') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Image</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        {{-- <p id="abc"></p>--}}
                        <div class="modal-body">


                            <input type="hidden" name="id" id="id" class="form-control" value="">



                            <label for="email_address">Machine Name</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" required name="machine_name" id="machine_name" class="form-control"
                                        value="">
                                </div>
                            </div>

                            <label for="email_address">Machine Type</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" required name="machine_type" id="machine_type" class="form-control"
                                        value="">
                                </div>
                            </div>


                            <label for="email_address">Number</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" required name="number" id="number" class="form-control" value="">
                                </div>
                            </div>

                            <label for="email_address">Origin</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" required name="origin" id="origin" class="form-control" value="">
                                </div>
                            </div>

                            <label for="email_address">Max_Prm</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" required name="max_prm" id="max_prm" class="form-control" value="">
                                </div>
                            </div>

                            <label for="email_address">Max Width</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" required name="max_width" id="max_width" class="form-control"
                                        value="">
                                </div>
                            </div>

                            <label for="email_address">Average Production</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" required name="average_production" id="average_production"
                                        class="form-control" value="">
                                </div>
                            </div>

                            <label for="email_address">Description</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
                                    {{-- <input type="text" required name="description" id="description" class="form-control"
                                        value=""> --}}
                                </div>
                            </div>



                            <label for="email_address">Status</label>
                            <div class="form-group">
                                <input type="checkbox" id="publish" class="" name="status" value="1">
                                <label for="publish">Publish</label>
                            </div>



                            <div class="form-group">
                                <label for="usr">Select Image </label>
                                <input  type="file" name="image" class="form-control" id="usr">
                            </div>





                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

       {{-- Edit Modal End --}}


        
        <!-- Modal  for insert-->
        <div class="modal fade modal-xl" id="exampleModalinsert" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="{{ url('machinery/store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Advantage Info</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label for="email_address">Machine Name</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" required name="machine_name" class="form-control"
                                        value="">
                                </div>
                            </div>
                            <label for="email_address">Machine Types</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" required name="machine_type" class="form-control"
                                        value="">
                                </div>
                            </div>
                            <label for="email_address">No. of Machine</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" required name="number"class="form-control" value="1">
                                </div>
                            </div>
                            <label for="email_address">Origin</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" required name="origin"class="form-control" value="">
                                </div>
                            </div>
                            <label for="email_address">Max_Prm</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" required name="max_prm"  class="form-control" value="">
                                </div>
                            </div>
                            <label for="email_address">Max Width</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" required name="max_width" class="form-control"
                                        value="">
                                </div>
                            </div>

                            <label for="email_address">Average Production</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" required name="average_production"
                                        class="form-control" value="">
                                </div>
                            </div>

                            <label for="email_address">Description</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="vehicle2">Status</label><br>
                                <input type="checkbox" id="vehicle1" name="status" value="1">
                                <label for="vehicle1">Publish</label><br>
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

    @endsection

    @push('js')
        <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>

        <script type="text/javascript">
            function machinerydestroy(id) {
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

        {{-- id machine_name number origin max_prm max_width average_production description
        image status created_at updated_at--}}

        <script>
            $(document).ready(function() {
                $(".getdata").click(function() {
                    var id = $(this).data('id');
                    var machine_name = $(this).data('machine_name');
                    var machine_type = $(this).data('machine_type');
                    var number = $(this).data('number');
                    var origin = $(this).data('origin');
                    var max_prm = $(this).data('max_prm');
                    var max_width = $(this).data('max_width');
                    var average_production = $(this).data('average_production');
                    var description = $(this).data('description');
                    var status = $(this).data('status');
                    if (status == 1) {
                        $('#publish').prop('checked', true)
                    } else {

                    }
                    $("#id").val(id);
                    $("#machine_name").val(machine_name);
                    $("#machine_type").val(machine_type);
                    $("#number").val(number);
                    $("#origin").val(origin);
                    $("#max_prm").val(max_prm);
                    $("#max_width").val(max_width);
                    $("#average_production").val(average_production);
                    $("#description").val(description);
                });
            });

        </script>


    @endpush
