<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">

        {{--<li>--}}
        {{--<ul class="nav navbar-nav navbar-left">--}}
        {{--<li class="dropdown">--}}
        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"--}}
        {{--data-close-others="false">--}}
        {{--<span style="color:#fff">  Quick Links--}}
        {{--<span class="caret"></span></span></a>--}}
        {{--<ul class="dropdown-menu">--}}
        {{--<li><a href="{{ url('booking_master') }}"><i class="fa fa-angle-double-right"></i> Bookings </a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        <ul class="nav navbar-nav">
            <li><a class="top-menu-head" href="{{url('dashboard')}}"><i class="fa fa-home"
                                                                        aria-hidden="true"></i> Home</a>
            </li>
        </ul>
        <li>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                                style="color:#fff"> Hi, {{$_SESSION['admin_master']->name}}
                            &nbsp;<b class="fa fa-angle-down"></b></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{url('change_password')}}">Change Password</a></li>
                        <li class="divider"></li>
                        {{--<li class="dropdown-header">Select Branch</li>--}}
                        {{--@foreach($_SESSION['all_branches'] as $key=>$value)--}}
                        {{--<li><a href="{{url('_switchBranch/'.$key)}}"><i class="fa fa-fw fa-building-o"></i>&nbsp;{{$value}}--}}
                        {{--</a></li>--}}
                        {{--@endforeach--}}
                        {{--<li class="divider"></li>--}}
                        <li><a href="{{ url('logout') }}"><i class="fa fa-fw fa-power-off"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>
<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <div class="logo_dash_box">
            <div class="logo_img_box">
                <img src="{{url('assets/img/MM2.png')}}">
            </div>
            {{--<div class="company_name">Mangal Mandap</div>--}}
        </div>
        <ul class="sidebar-nav" style="margin-left:0;">
            <li class="sidebar-brand"><a href="#menu-toggle" id="menu-toggle" style="margin-top:20px;float:right;"> <i
                            class="fa fa-bars" style="font-size:30px !Important;" aria-hidden="true"
                            aria-hidden="true"> </i> </a></li>
            <li><a href="{{url('dashboard')}}" title="Home"><i class="fa fa-home"
                                                               aria-hidden="true"></i><span
                            style="margin-left:10px;"> Home</span></a></li>
            <li><a href="{{url('user_master')}}" title="All Users"><i class="fa fa-users"
                                                                      aria-hidden="true"></i><span
                            style="margin-left:10px;"> All Profiles</span></a></li>
            <li><a href="{{url('all_user?type=paid')}}" title="Paid Users"><i class="fa fa-child"
                                                                                      aria-hidden="true"></i><span
                            style="margin-left:10px;"> Paid Users</span></a></li>
            <li><a href="{{url('all_user?type=unpaid')}}" title="Paid Users"><i class="fa fa-child"
                                                                                      aria-hidden="true"></i><span
                            style="margin-left:10px;"> Unpaid Users</span></a></li>
            {{--<li><a href="{{url('user_list')}}" title="User List"><i class="fa fa-user"--}}
                                                                    {{--aria-hidden="true"></i><span--}}
                            {{--style="margin-left:10px;">Users List</span></a></li>--}}
            <li><a href="{{url('user_list?type=active')}}" title="User List"><i class="fa fa-user"
                                                                                aria-hidden="true"></i><span
                            style="margin-left:10px;">Active Users</span></a></li>
            <li><a href="{{url('user_list?type=inactive')}}" title="Deleted Users"><i class="fa fa-child"
                                                                                      aria-hidden="true"></i><span
                            style="margin-left:10px;"> Hold Users</span></a></li>
            {{--<li><a href="{{url('user_master')}}" title="Membership"><i class="fa fa-map-marker"--}}
            {{--aria-hidden="true"></i><span--}}
            {{--style="margin-left:10px;"> Membership</span></a></li>--}}
            {{--<li><a href="{{url('lead')}}" title="Leads"><i class="fa fa-list-alt"--}}
            {{--aria-hidden="true"></i><span--}}
            {{--style="margin-left:10px;"> Leads</span></a></li>--}}

            {{--<li><a href="{{url('hotel')}}" title="Hotels"><i class="fa fa-hospital-o"--}}
            {{--aria-hidden="true"></i><span--}}
            {{--style="margin-left:10px;"> Hotels</span></a></li>--}}
            <li><a href="{{ url('logout') }}" title="Logout"><i class="fa fa-lock" aria-hidden="true"> </i> <span
                            style="margin-left:10px;">Log Out </span> </a></li>

        </ul>
    </div>
</div>
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>