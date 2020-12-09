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
                            <h2>Message Table</h2>
                            @if (Session::get('message'))
                                <p class="text-success">{{Session::get('message')}}</p>
                            @endif
                        </div>

                        <div class="body table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th style="width: 5%">#SL</th>
                                        <th style="width: 15%">Name</th>
                                        <th style="width: 15%">Email</th>
                                        <th style="width: 15%">Subject</th>
                                        <th style="width: 25%">Message</th>
                                        <th style="width: 15%"class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($messages as $key=>$message)
                                        <tr>
                                            <th scope="row">{{++$key}}</th>
                                            <td>{{$message->name}}</td>
                                            <td>{{$message->email}}</td>
                                            <td>{{$message->subject}}</td>
                                            <td>{{substr( $message->name, 0, 200)}}</td>
                                            <td class="text-center" style="width: 15%;">
                                            <a onclick="return confirm('Are you sure?')" href="{{route("deleteMessage",$message->id)}}" class=""btn btn-danger waves-effect"><i class="material-icons">delete</i></a>
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


    @endsection

    @push('js')
        <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>

        <script type="text/javascript">
            function productdestroy(id) {
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

        {{--Edit Modal Data--}}
        {{-- <script>
            $(document).ready(function() {
                $(".getdata").click(function() {
                    var id = $(this).data('id');
                    var name = $(this).data('name');
                    var description = $(this).data('description');
                    var status = $(this).data('status');
                    if (status == 1) {
                        $('#publish').prop('checked', true)
                    }
                    $("#id").val(id);
                    $("#name").val(name);
                    $("#description").val(description);
                });
            });
        </script> --}}
    @endpush
