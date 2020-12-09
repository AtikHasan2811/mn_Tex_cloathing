
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{asset('public/assets/backend/images/user.png')}}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    {{-- <li>
                        <a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li> --}}
                        <li>
                        <a href="{{route('logout')}}">Logout</a>
                        </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="menu">
        <ul class="list">
                <li>
                    <a href="{{url('/dashboard')}}">
                        <i class="material-icons">home</i>
                        <span>Dashboard</span>
                    </a>
                </li>
            <li>
                <a href="{{url('sliderview')}}">
                    <i class="material-icons">open_in_new</i>
                    <span>Slider</span>
                </a>
            </li>
{{--            <li>--}}
{{--                <a href="{{url('productview')}}">--}}
{{--                    <i class="material-icons">open_in_new</i>--}}
{{--                    <span>Product</span>--}}
{{--                </a>--}}
{{--            </li>--}}



                        <li>
                            <a href="{{route('category')}}">
                                <i class="material-icons">open_in_new</i>
                                <span>Category</span>
                            </a>
                        </li>

                <li>
                    <a href="{{route('product')}}">
                        <i class="material-icons">open_in_new</i>
                        <span>Product</span>
                    </a>
                </li>





{{--            <li>--}}
{{--                <a href="{{url('machineryview')}}">--}}
{{--                    <i class="material-icons">open_in_new</i>--}}
{{--                    <span>Machinery</span>--}}
{{--                </a>--}}
{{--            </li>--}}
            <li>
                <a href="{{url('projectview')}}">
                    <i class="material-icons">open_in_new</i>
                    <span>Project</span>
                </a>
            </li>
            <li>
                <a href="{{url('gallaryview')}}">
                    <i class="material-icons">open_in_new</i>
                    <span>Gallery</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin_about')}}">
                    <i class="material-icons">open_in_new</i>
                    <span>About</span>
                </a>
            </li>
{{--            <li>--}}
{{--                <a href="{{url('advantageview')}}">--}}
{{--                    <i class="material-icons">open_in_new</i>--}}
{{--                    <span>Advantage</span>--}}
{{--                </a>--}}
{{--            </li>--}}
            <li>
                <a href="{{url('companyview')}}">
                    <i class="material-icons">open_in_new</i>
                    <span>Company</span>
                </a>
            </li>
            <li>
                <a href="{{url('contactview')}}">
                    <i class="material-icons">open_in_new</i>
                    <span>Contact</span>
                </a>
            </li>

            <li>
                <a href="{{route('messageView')}}">
                    <i class="material-icons">open_in_new</i>
                    <span>Message</span>
                </a>
            </li>

            {{-- <li>
                <a href="{{url('teamview')}}">
                    <i class="material-icons">open_in_new</i>
                    <span>Team</span>
                </a>
            </li> --}}
            {{-- <li>
                <a href="{{url('photoview')}}">
                    <i class="material-icons">open_in_new</i>
                    <span>Photo</span>
                </a>
            </li> --}}
                <li>
                <a class="dropdown-item" href="{{route('logout')}}">
                        <i class="material-icons col-light-blue">donut_large</i>
                        <span>Log Out</span>
                    </a>
                </li>

        </ul>
    </div>
    <!-- #Menu -->






