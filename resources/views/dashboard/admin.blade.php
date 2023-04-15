@extends('layout.master.master')

@section('title', 'Home')

@section('head')
    <link href="{{ url('assets/css/font-awesome-animation.min.css') }}" rel="stylesheet"/>
    {{--    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet"/>--}}
    <style>
        .time {
            padding-right: 10px
        }

        .badge_capacity {
            display: inline-block;
            min-width: 10px;
            /*padding: 3px 7px;*/
            padding: 6px;
            font-size: 12px;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            background-color: #a94442;
            border-radius: 10px;
        }

        .awesome_style {
            font-size: 100px;
            text-decoration: none;
        }

        .content {
            background-color: transparent;
        }
    </style>
    <style type="text/css">


        .dash_time {
            display: inline-block;
            float: right;
            font-size: 14px;
            background: #0073d6;
            color: #fff;
            padding: 5px 10px;
        }

        .brics_mainblock {
            display: inline-block;
            width: 100%;
            margin: 20px 0px;
        }

        .dash_brics_block {
            display: inline-block;
            background: #fff;
            padding: 20px 15px;
            box-shadow: rgba(0, 0, 0, 0.06) 0px 2px 2px, rgba(0, 0, 0, 0.05) 0px 2px 5px;
            position: relative;
            width: 23%;
            margin-right: 2%;
            margin-bottom: 20px;
            float: left;
            cursor: pointer;
            color: #808080;
            min-height: 90px;
            text-decoration: none;
            transition: .5s all;
        }

        .dash_brics_block:hover {
            box-shadow: rgba(66, 66, 66, 0.72) 0px 2px 2px, rgba(0, 0, 0, 0.05) 0px 2px 5px;
        }

        .dash_brics_icon {
            display: inline-block;
            width: 50px;
            font-size: 36px;
            z-index: 2;
            position: absolute;
            color: #fff;
            top: 20px;
        }

        .dash_brics_icon i {

        }

        .dash_brics_txt {
            display: inline-block;
            font-size: 18px;
            float: right;
            margin-top: 10px;
            text-transform: uppercase;
        }

        .border_gardian {
            position: absolute;
            width: 70px;
            bottom: 0px;
            height: 100%;
            left: 0px;
            background: -webkit-linear-gradient(#37f1e1, #4879ef);
            z-index: 1;
        }

        /*.dash_brics_block a {
            text-decoration: none;
            width: 100%;
            display: inline-block;
        }*/
    </style>
@stop
@section('content')
    <div class="dash_head">
        <div class="dash_txt">Welcome to Mangal Mandap</div>
        <div class="dash_time">
            Last Login : {{ date_format(date_create($user_master->last_login), "d-M-Y h:i A")}}
        </div>
    </div>
    <div class="brics_mainblock">
        <a class="dash_brics_block" href="{{url('user_master')}}">

            <div class="dash_brics_icon">
                <i class="fa fa-users"></i>
            </div>
            <div class="dash_brics_txt">
                All Profiles
            </div>
            <div class="border_gardian"></div>
        </a>
        <a href="{{url('user_list')}}">
            <div class="dash_brics_block">
                <div class="dash_brics_icon">
                    <i class="fa fa-user"></i>
                </div>
                <div class="dash_brics_txt">
                    All Users
                </div>
                <div class="border_gardian" style="
    background: -webkit-linear-gradient(#fd6562,#324a82);
"></div>
            </div>
        </a>
        <a href="{{url('user_list?type=active')}}">
            <div class="dash_brics_block">
                <div class="dash_brics_icon">
                    <i class="fa fa-child"></i>
                </div>
                <div class="dash_brics_txt">
                    Active Users
                </div>
                <div class="border_gardian" style="
    background: -webkit-linear-gradient(#2bf38d,#798cb9);
"></div>
            </div>

        </a>
        <a href="{{url('user_list?type=inactive')}}">
            <div class="dash_brics_block">
                <div class="dash_brics_icon">
                    <i class="fa fa-map-o"></i>
                </div>
                <div class="dash_brics_txt">
                    InActive Users
                </div>
                <div class="border_gardian" style="
    background: -webkit-linear-gradient(#fd6562,#324a82);
"></div>
            </div>
        </a>

        {{--<a href="lead">--}}
        {{--<div class="dash_brics_block">--}}
        {{--<div class="dash_brics_icon">--}}
        {{--<i class="fa fa-list-alt"></i>--}}
        {{--</div>--}}
        {{--<div class="dash_brics_txt">--}}
        {{--Leads--}}
        {{--</div>--}}
        {{--<div class="border_gardian" style="--}}
        {{--background: -webkit-linear-gradient(#ffed0f,#615f25);--}}
        {{--"></div>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--<a href="hotel">--}}
        {{--<div class="dash_brics_block">--}}

        {{--<div class="dash_brics_icon">--}}
        {{--<i class="fa fa-hospital-o"></i>--}}
        {{--</div>--}}
        {{--<div class="dash_brics_txt">--}}
        {{--Hotels--}}
        {{--</div>--}}
        {{--<div class="border_gardian" style="--}}
        {{--background: -webkit-linear-gradient(#ecd2d4,#000000);--}}
        {{--"></div>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--<a href="vehicle">--}}
        {{--<div class="dash_brics_block">--}}
        {{--<div class="dash_brics_icon">--}}
        {{--<i class="fa fa-bus"></i>--}}
        {{--</div>--}}
        {{--<div class="dash_brics_txt">--}}
        {{--Vehicles--}}
        {{--</div>--}}
        {{--<div class="border_gardian" style="--}}
        {{--background: -webkit-linear-gradient(#4adeff,#01455a);--}}
        {{--"></div>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--<a href="inclusion">--}}
        {{--<div class="dash_brics_block">--}}
        {{--<div class="dash_brics_icon">--}}
        {{--<i class="fa fa-info"></i>--}}
        {{--</div>--}}
        {{--<div class="dash_brics_txt">--}}
        {{--Inclusions--}}
        {{--</div>--}}
        {{--<div class="border_gardian" style="--}}
        {{--background: -webkit-linear-gradient(#00000094,#adadad);--}}
        {{--"></div>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--<a href="sentence">--}}
        {{--<div class="dash_brics_block">--}}
        {{--<div class="dash_brics_icon">--}}
        {{--<i class="fa fa-align-center"></i>--}}
        {{--</div>--}}
        {{--<div class="dash_brics_txt">--}}
        {{--Sentence--}}
        {{--</div>--}}
        {{--<div class="border_gardian" style="--}}
        {{--background: -webkit-linear-gradient(#ffa8a7,#ff0d15);--}}
        {{--"></div>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--<a href="category">--}}
        {{--<div class="dash_brics_block">--}}
        {{--<div class="dash_brics_icon">--}}
        {{--<i class=" fa fa-calendar-check-o"></i>--}}
        {{--</div>--}}
        {{--<div class="dash_brics_txt">--}}
        {{--Category--}}
        {{--</div>--}}
        {{--<div class="border_gardian" style="--}}
        {{--background: -webkit-linear-gradient(#c5c5c5,#324a82);--}}
        {{--"></div>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--<a href="policy">--}}
        {{--<div class="dash_brics_block">--}}
        {{--<div class="dash_brics_icon">--}}
        {{--<i class="fa fa-pencil-square-o"></i>--}}
        {{--</div>--}}
        {{--<div class="dash_brics_txt">--}}
        {{--Policy--}}
        {{--</div>--}}
        {{--<div class="border_gardian" style="--}}
        {{--background: -webkit-linear-gradient(#d800ff,#1f459e);--}}
        {{--"></div>--}}
        {{--</div>--}}
        {{--</a>--}}
    </div>
    {{--<div class="pull-right time badge_capacity"></div>--}}
    {{-- <div class="pull-right  badge_capacity"></div>--}}
    {{--<h2 class="text-center"
        style=" text-shadow: 1px 1px 0px black, 0 0 2px #ccc, 0 0 5px darkblue;
">Welcome to Banjari Tours & Travels</h2>
    <hr/>--}}
    <div class="col-md-12 seperate ">
        {{--<div class="col-md-2" onclick="window.location = '{{url('user_master')}}'">--}}
        {{--<div class="col-md-12 faa-parent box animated-hover bg6 style_prevu_kit">--}}
        {{--<span class="fa fa-users faa-shake faa-fast"></span><h4>Users</h4></div>--}}
        {{--</div>--}}
        {{--<div class="col-md-2" onclick="window.location = '{{url('enquiry')}}'">--}}
        {{--<div class="col-md-12 faa-parent box animated-hover bg9 style_prevu_kit">--}}
        {{--<span class="fa fa-address-book faa-shake faa-fast"></span><h4>Enquiries</h4></div>--}}
        {{--</div>--}}
        {{--<div class="col-md-2" onclick="window.location = '{{url('lead')}}'">--}}
        {{--<div class="col-md-12 box bg1 style_prevu_kit">--}}
        {{--<span class="fa fa-reply-all faa-parent animated-hover faa-shake faa-fast"></span><h4>Leads</h4>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-2" onclick="window.location = '{{url('place')}}'">--}}
        {{--<div class="col-md-12 faa-parent box animated-hover bg12 style_prevu_kit">--}}
        {{--<span class="fa fa-location-arrow faa-shake faa-fast"></span><h5 style="font-size: 17px;"><b>Places</b></h5></div>--}}
        {{--</div>--}}
        {{--<div class="col-md-2" onclick="window.location = '{{url('hotel')}}'">--}}
        {{--<div class="col-md-12 faa-parent box animated-hover bg4 style_prevu_kit">--}}
        {{--<span class="fa fa-hospital-o faa-shake faa-fast"></span><h5 style="font-size: 17px;"><b>Hotels</b></h5></div>--}}
        {{--</div>--}}
        {{--<div class="col-md-2" onclick="window.location = '{{url('vehicle')}}'">--}}
        {{--<div class="col-md-12 box bg1 style_prevu_kit">--}}
        {{--<span class="fa fa-bus faa-parent animated-hover faa-shake faa-fast"></span><h4>Vehicles</h4>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--  <table width="100%" border="0" align="left">
              <tbody>
              <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
              </tr>
              <tr>
                  <td width="19%" align="center"><a href="user_master" class="a_txt"><i
                                  class="fa awesome_style animated-hover faa-tada faa-fast fa-users"></i><br>
                          <h4>Users</h4></a></td>
                  <td width="19%" align="center"><a href="enquiry" class="a_txt"><i
                                  class="fa awesome_style animated-hover faa-tada faa-fast fa-address-book"></i><br>
                          <h4>Enquiries</h4></a></td>
                  <td width="19%" align="center"><a href="lead" class="a_txt"><i
                                  class="fa awesome_style animated-hover faa-tada faa-fast fa-reply-all"></i> <br>
                          <h4>Leads</h4></a></td>
                  <td width="19%" align="center"><a href="place" class="a_txt"><i
                                  class="fa awesome_style animated-hover faa-tada faa-fast fa-location-arrow"></i><br>
                          <h4>Places</h4></a></td>
                  <td width="19%" align="center"><a href="hotel" class="a_txt"><i
                                  class="fa awesome_style animated-hover faa-tada faa-fast fa-hospital-o"></i><br>
                          <h4>Hotels</h4></a></td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td></td>
                  --}}{{--<td><a href="http://www.monkeyjobs.in/admin/profiles_lists"></a></td>--}}{{--
              </tr>
              <tr>
                  <td align="center"><a href="vehicle" class="a_txt"><i
                                  class="fa awesome_style animated-hover faa-tada faa-fast fa-bus"></i><br>
                          <h4>Vehicles</h4></a></td>

                  <td align="center"><a href="inclusion" class="a_txt"><i
                                  class="fa awesome_style animated-hover faa-tada faa-fast fa-info-circle"></i><br>
                          <h4>Inclusions</h4></a></td>
                  <td width="19%" align="center"><a href="sentence" class="a_txt"><i
                                  class="fa awesome_style animated-hover faa-tada faa-fast fa-align-center"></i><br>
                          <h4>Sentences</h4></a></td>
                  <td align="center"><a href="tour" class="a_txt"><i
                                  class="fa awesome_style animated-hover faa-tada faa-fast fa-i-cursor"></i><br>
                          <h4>Itineraries</h4></a></td>
                  <td align="center"><a href="category" class="a_txt"><i
                                  class="fa awesome_style animated-hover faa-tada faa-fast fa-calendar-check-o"></i><br>
                          <h4>Category</h4></a></td>
                  --}}{{--<td align="center"><a href="http://www.monkeyjobs.in/admin/invite_employer"><i--}}{{--
                  --}}{{--class="fa awesome_style fa-envelope"></i><br>--}}{{--
                  --}}{{--Invite Employer</a></td>--}}{{--
                  --}}{{--<td align="center"><a href="http://www.monkeyjobs.in/admin/invite_jobseeker"><i--}}{{--
                  --}}{{--class="fa awesome_style fa-users"></i> <br>--}}{{--
                  --}}{{--Invite Jobseeker</a></td>--}}{{--
                  --}}{{--<td align="center"><a href="http://www.monkeyjobs.in/admin/email_template"><i--}}{{--
                  --}}{{--class="fa fa-envelope awesome_style"></i><br>--}}{{--
                  --}}{{--Email Templates</a></td>--}}{{--
                  --}}{{--<td align="center"><a href="http://www.monkeyjobs.in/admin/ads"><i--}}{{--
                  --}}{{--class="fa awesome_style fa-bullhorn"></i><br>--}}{{--
                  --}}{{--Ads</a></td>--}}{{--
              </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
              </tr>
              <tr>
                  <td align="center"><a href="{{url('policy')}}" class="a_txt"><i
                                  class="fa awesome_style animated-hover faa-tada faa-fast fa-calendar-check-o"></i><br>
                          <h4>Policy</h4></a></td>
                  --}}{{--<td align="center"><a href="http://www.monkeyjobs.in/admin/institute"><i--}}{{--
                  --}}{{--class="fa awesome_style fa-university"></i><br>--}}{{--
                  --}}{{--Institute</a></td>--}}{{--
                  --}}{{--<td align="center"><a href="http://www.monkeyjobs.in/admin/salary"><i--}}{{--
                  --}}{{--class="fa awesome_style fa-money"></i> <br>--}}{{--
                  --}}{{--Salary</a></td>--}}{{--
                  --}}{{--<td align="center"><a href="http://www.monkeyjobs.in/admin/qualification"><i--}}{{--
                  --}}{{--class="fa  awesome_style fa-graduation-cap">&nbsp;</i><br>--}}{{--
                  --}}{{--Qualification</a></td>--}}{{--
                  --}}{{--<td align="center"><a href="http://www.monkeyjobs.in/admin/prohibited_keyword"><i--}}{{--
                  --}}{{--class="fa awesome_style fa-tags"></i><br>--}}{{--
                  --}}{{--Manage Prohibited Keywords</a></td>--}}{{--
              </tr>
              --}}{{--<tr>--}}{{--
              --}}{{--<td align="center">&nbsp;</td>--}}{{--
              --}}{{--<td align="center">&nbsp;</td>--}}{{--
              --}}{{--<td align="center">&nbsp;</td>--}}{{--
              --}}{{--<td align="center">&nbsp;</td>--}}{{--
              --}}{{--<td align="center">&nbsp;</td>--}}{{--
              --}}{{--</tr>--}}{{--
              --}}{{--<tr>--}}{{--
              --}}{{--<td align="center"><a href="http://www.monkeyjobs.in/admin/skills"><i--}}{{--
              --}}{{--class="fa awesome_style fa-tags"></i><br>--}}{{--
              --}}{{--Manage Skills</a></td>--}}{{--
              --}}{{--<td align="center"><a href="http://www.monkeyjobs.in/admin/manage_newsletters"><i--}}{{--
              --}}{{--class="fa fa-envelope awesome_style"></i><br>--}}{{--
              --}}{{--Manage Newsletters</a></td>--}}{{--
              --}}{{--<td align="center"><a href="http://www.monkeyjobs.in/admin/job_alert_queue"><i--}}{{--
              --}}{{--class="fa fa-envelope awesome_style"></i><br>--}}{{--
              --}}{{--Job Alert Queue</a></td>--}}{{--
              --}}{{--<td align="center"></td>--}}{{--
              --}}{{--<td align="center"></td>--}}{{--
              --}}{{--</tr>--}}{{--
              --}}{{--<tr>--}}{{--
              --}}{{--<td align="center">&nbsp;</td>--}}{{--
              --}}{{--<td align="center">&nbsp;</td>--}}{{--
              --}}{{--<td align="center">&nbsp;</td>--}}{{--
              --}}{{--<td align="center">&nbsp;</td>--}}{{--
              --}}{{--<td align="center">&nbsp;</td>--}}{{--
              --}}{{--</tr>--}}{{--
              </tbody>
          </table>
      </div>--}}
        <script type="text/javascript">
            var start = new Date;
            start.setSeconds(start.getSeconds());
            $('.time').text('Date & Time: ' + set_format(start));
            setInterval(function () {
                start.setSeconds(start.getSeconds() + 1);
                $('.time').text('Date & Time: ' + set_format(start));
            }, 1000);

            function set_format(d) {
                var dd = appendZ(d.getDate());
                var MM = appendZ(d.getMonth() + 1);
                var yyyy = d.getFullYear();
                var h = appendZ(d.getHours());
                var m = appendZ(d.getMinutes());
                var s = appendZ(d.getSeconds());
                var temp = (h < 12) ? ' AM' : ' PM';

                return dd + '-' + MM + '-' + yyyy + ' ' + hours12(h) + ':' + m + ':' + s + temp;
            }

            function appendZ(d) {
                if (d < 10) {
                    d = '0' + d;
                }
                return d;
            }

            function hours12(h) {
                return (h + 24) % 12 || 12;
            }
        </script>
@stop