<!--..................................top header section.....................................-->
<div class="section mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-5 pl-2">
                <p style="font-size: 22px;">Office 1N
                    Centrum House
                    38 Queen Street
                    Glasgow
                    G1 3DX
                    Scotland
                </p>
            </div>
            <div class="col-md-4 mt-4">
                <img src="{{asset('/')}}public/assets/frontend/image/logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-4 mt-5  pl-5">
                <h3 style="color: #0f2d4e">C-TPAT Report</h3>
                Doc. Number: IA-FM45
                Issue Number: 3
                Issue Date: 27/12/2019
            </div>
        </div>
    </div>
</div>
<!--...........................end top header.............................................-->



<!--......................navbar start..................................-->
<nav class="navbar navbar-light navbar-expand-lg "uk-sticky="top: 200; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
{{--<nav class="navbar navbar-light navbar-expand-lg mt-5 ">--}}
    <div class="container">
        <a href="#showcase" class="navbar-brand">
            <img src="{{asset('/')}}public/assets/frontend/image/logo.png" alt="m" class="img-fluid" width="50" height="100" style="width: 100px; height: 30px;">
            <!--            <h3 class="d-inline align-middle">Mizuxe</h3>-->
        </a>

        <button type="button" name="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#a">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="a">
            <ul class="navbar-nav mr-auto top">
                @if($menu_active==1)
                    <li class="nav-item current" style="background-color: #1f4e78; color: #ffffff;" >
                        <a class="nav-link" style="color:#ffffff;" href="{{url('/')}}" id="ab">Report</a>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}" id="ab">Report</a>
                @endif
                </li>



                @if($menu_active==2)
                        <li class="nav-item dropdown current" style="background-color: #1f4e78; color: #ffffff;" >
                            <a class="nav-link dropdown-toggle dropbtn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ffffff;">
                                Select
                            </a>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropbtn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #252525;">
                                Select
                            </a>
                    @endif



{{--                <li class="nav-item dropdown">--}}

                    <div class="dropdown-menu dropdown-content scrollmenu" aria-labelledby="navbarDropdown" >
                        <a style="padding: 0px 10px;" class="dropdown-item" href="{{url('secutity')}}">1 Security Vision</a>
                        <div class="dropdown-divider"></div>
                        <a style="padding: 0px 10px;" class="dropdown-item" href="#">2 Risk Assessment</a>
                        <div class="dropdown-divider"></div>
                        <a style="padding: 0px 10px;" class="dropdown-item" href="#">3 Business Partner Security  </a>
                        <div class="dropdown-divider"></div>
                        <a style="padding: 0px 10px;"  class="dropdown-item" href="#">4 Cybersecurity  </a>
                        <div class="dropdown-divider"></div>
                        <a style="padding: 0px 10px;"  class="dropdown-item" href="#">5 CIIT Security  </a>
                        <div class="dropdown-divider"></div>
                        <a style="padding: 0px 10px;"  class="dropdown-item" href="#">6 Seal Security  </a>
                        <div class="dropdown-divider"></div>
                        <a style="padding: 0px 10px;"  class="dropdown-item" href="#">7 Procedural Security  </a>
                        <div class="dropdown-divider"></div>
                        <a style="padding: 0px 10px;" class="dropdown-item" href="#"> 8 Agricultural Secutity </a>
                        <div class="dropdown-divider"></div>
                        <a style="padding: 0px 10px;" class="dropdown-item" href="#">9 Physical Access Controls  </a>
                        <div class="dropdown-divider"></div>
                        <a style="padding: 0px 10px;" class="dropdown-item" href="#">10 Physical Security  </a>
                        <div class="dropdown-divider"></div>
                        <a style="padding: 0px 10px;" class="dropdown-item" href="#">11 Personnel Security  </a>
                        <div class="dropdown-divider"></div>
                        <a style="padding: 0px 10px;" class="dropdown-item" href="#">12 Educ, Training & Awareness </a>

                    </div>
                </li>


                        @if($menu_active==3)
                            <li class="nav-item current" style="background-color: #1f4e78;     padding-right: 21px; color: #ffffff;" >
                                <a class="nav-link" style="color:#ffffff;" href="{{url('result')}}" id="ab">Result</a>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('result')}}" id="ab">Result</a>
                                @endif
                            </li>



                        @if($menu_active==4)
                        <li class="nav-item current" style="background-color: #1f4e78;     padding-right: 21px; color: #ffffff;" >
                            <a class="nav-link" style="color:#ffffff;" href="{{url('corrective')}}" id="ab">Corrective</a>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('corrective')}}" id="ab">Corrective</a>
                            @endif
                        </li>






                    @if($menu_active==5)
                        <li class="nav-item current" style="background-color: #1f4e78;     padding-right: 21px; color: #ffffff;" >
                            <a class="nav-link" style="color:#ffffff;" href="{{url('photo')}}" id="ab">Photo</a>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('photo')}}" id="ab">Photo</a>
                            @endif
                        </li>

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ url('photo') }}" id="ab">Photo </a>--}}
{{--                </li>--}}

            </ul>
        </div>
    </div>
</nav>

<!--......................navbar end..................................-->






