@extends('front.master')
@section('content')
@include('front.layouts.banner')
<br>
<br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="title">
                    <h2>Job Ads</h2>
                    <span class="border"></span>
                </div>
                <table class="table table-bordered">
                    <tr>
                        <th>#ID</th>
                        <th>Position</th>
                        <th>Deadline</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-center" >There are no job ads</td>
                    </tr>

                </table>

            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="send-message-form">
                    <div class="title">
                        <h2>Apply</h2>
                        <span class="border"></span>
                    </div>
                    <h3>Send your details for consideration:</h3>
                    <form action="" method="POST" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" placeholder="Your Name *">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="email" placeholder="Your Email *">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="subject" placeholder="Position">
                            </div>
                            <div class="col-md-6">
                                <label for="">Add Resume</label>
                                <input type="file" name="subject" placeholder="Resume">
                            </div>
                           
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="message" placeholder="Write Your Cover Letter..." id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="thm-btn yellow-bg" type="submit">Send Request</button>    
                            </div>
                        </div>
                    </form>    
                </div>
             

            </div>

        </div>
    </div>
@endsection