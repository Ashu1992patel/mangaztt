<?php
if (!isset($_SESSION)) {
    session_start();
}
if (is_null($_SESSION['admin_master'])) {
    //echo 'Please Login';
    return redirect('/');
}
?>
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=0.0, maximum-scale=1.0, user-scalable=yes"/>
    <title>@yield('title')</title>

    {{--<script src="https://code.jquery.com/jquery-1.11.3.js"></script>--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
    {{--<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>--}}
    <script src="{{ url('assets/js/jquery-1.11.3.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap1.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery-ui.js') }}"></script>


    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet"/>
    <link href="{{ url('assets/css/bootstrap1.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/jquery-ui.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/css/bootstrap-chosen.css') }}" rel="stylesheet"/>
    <link href="{{ url('assets/css/font-awesome-animation.min.css')}}" rel="stylesheet">
    {{--<link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" media='all' rel='stylesheet'/>--}}
    <link href="{{ url('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet">

    <link href="{{ url('assets/css/default.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="{{ url('https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    {{--    <link href="{{ url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}" rel="stylesheet">--}}

    <link href="{{ url('assets/css/datepicker.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/css/form-wizard-green.css')}}" rel="stylesheet">
    <link href="{{ url('css/main.css')}}" rel="stylesheet">
    {{--<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>--}}
    {{--<script src="https://cdn.datatables.net/1.10.13/js/dataTables.uikit.min.js"></script>--}}
    <script src="{{ url('assets/js/jquery.dataTables.min.js') }}"></script>

    <script src="{{ url('assets/js/dataTables.uikit.min.js') }}"></script>
    <link rel="stylesheet" href="{{ url('assets/css/select2.css')}}">
    <script src="{{ url('assets/js/select2.js') }}"></script>
    <link rel="shortcut icon" sizes="120x120" href="{{url('assets/img/MM_.png')}}">

    <style type="text/css">
        .page_loader {
            z-index: 9999;
            position: fixed;
            width: 100%;
            height: 100%;
            background: rgba(23, 23, 23, 0.94);
            top: 0;
            left: 0;
        }

        .splash {
            animation: splash 2s ease-in;
            animation-fill-mode: forwards;
            -webkit-animation-fill-mode: forwards;
        }

        .splash .anim {
            opacity: 1;
        }

        .anim {
            height: 100%;
            position: absolute;
            left: 50%;
            width: 100px;
            top: 60%;
            transform: translate(-50%, 100%);
            animation: loader 2s linear;
            animation-fill-mode: forwards;
            -webkit-animation-fill-mode: forwards;
            opacity: 0;
            transition: .5s all;
        }

        .splesh_loader {
            position: absolute;
            left: 50%;
            top: 0;
            transform: translate(-50%, 0);
        }

        .splesh_loader:before {
            content: '';
            position: absolute;
            left: 50%;
            margin-left: 8px;
            bottom: -190px;
            width: 3px;
            background: #000;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.2) 50%, rgba(0, 0, 0, 0) 100%);
            height: 200px;
        }

        .splesh_loader:after {
            content: '';
            position: absolute;
            left: 50%;
            margin-left: -8px;
            bottom: -170px;
            width: 3px;
            background: #fff;
            background: linear-gradient(to bottom, white 0%, white 50%, rgba(255, 255, 255, 0) 100%);
            height: 200px;
        }

        @keyframes loader {
            0% {
                transform: translate(-50%, 110%);
            }
            30% {
                transform: translate(-50%, 50%);
            }
            100% {
                transform: translate(-50%, 0%);
            }
        }

        @keyframes splash {
            0% {
                transform: translate(0%, 0%);
            }
            50% {
                transform: translate(0%, 0%);
            }
            100% {
                transform: translate(0%, -100%);
            }
        }

        @keyframes drop {
            10%, 90% {
                opacity: 0.5;
            }
            20%, 80% {
                opacity: 1;
                top: 3.78em;
                transform: rotateX(-360deg);
            }
            40%, 60% {
                color: inherit;
                text-shadow: transparent 0 0 10px;
            }
            50% {
                text-shadow: white 0 0 10px;
                color: white;
            }
            100% {
                opacity: 0;
                top: 6.94em;
            }
        }

        .splash .tower-page-loader {
            display: none;
        }

        .tower-page-loader {
            text-align: center;
            position: absolute;
            left: 50%;
            width: 150px;
            margin-left: -75px;
            top: 20%;
            color: #bdbdbd;
        }

        .tower-page-loader span {
            vertical-align: middle;
            display: inline-block;
            position: relative;
            top: 0.63em;
            opacity: 0;
            text-shadow: transparent 0 0 10px;
            font-family: Consolas, Monaco, monospace;
            font-size: 2em;
            transform: rotateX(-90deg);
        }

        .tower-page-loader span:nth-child(1) {
            animation: drop 2.5s ease-in-out infinite;
            animation-delay: 0.5s;
        }

        .tower-page-loader span:nth-child(2) {
            animation: drop 2.5s ease-in-out infinite;
            animation-delay: 0.6s;
        }

        .tower-page-loader span:nth-child(3) {
            animation: drop 2.5s ease-in-out infinite;
            animation-delay: 0.7s;
        }

        .tower-page-loader span:nth-child(4) {
            animation: drop 2.5s ease-in-out infinite;
            animation-delay: 0.8s;
        }

        .tower-page-loader span:nth-child(5) {
            animation: drop 2.5s ease-in-out infinite;
            animation-delay: 0.9s;
        }

        .tower-page-loader span:nth-child(6) {
            animation: drop 2.5s ease-in-out infinite;
            animation-delay: 1s;
        }

        .tower-page-loader span:nth-child(7) {
            animation: drop 2.5s ease-in-out infinite;
            animation-delay: 1.1s;
        }
    </style>
    <style>


        body {
            padding-top: 70px;
            /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        }

        .errorAlert {
            padding: 8px;
            font-size: 12px;
            font-weight: bold;
        }

        .errorClass {
            border: 1px solid red;
        }

        .errorText {
            font-size: 11px;
            font-weight: bold;
            color: red;
            margin-top: 4px;
        }

        .roundCorner {
            padding: 5px;
            border-radius: 5px;
        }

        td.highlight {
            background-color: whitesmoke !important;
        }

        .contain_wid {
            width: 1170px;
            margin: 0 auto;
        }

        .heading {
            padding: 2px;
            background-color: #DFF0D8;
            text-align: center;
        }

        .btnSet {
            /*margin-top: 4px;*/
            margin-top: 20px;
        }

        .dd_ {
            width: 300px;
        }

        .bordmodal {
            border-top: none;
            border-bottom: solid 1px #eee;
            margin-bottom: 40px;
        }

        .a_txt {
            text-decoration: none !important;
            color: #754a40;
        }

        .dash_head {
            display: inline-block;
            width: 100%;
            background: #fff;
            padding: 10px 15px;
            box-shadow: rgba(0, 0, 0, 0.06) 0px 2px 2px, rgba(0, 0, 0, 0.05) 0px 2px 5px;
        }

        .dash_txt {
            display: inline-block;
            font-size: 18px;
            color: #0073d6;
            margin-top: 5px;
        }

    </style>

    @yield('head')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

    </script>
</head>

<body>
{{--<div class="page_loader" id="page_loader2">--}}
    {{--<div class="tower-page-loader">--}}
        {{--<span>L</span>--}}
        {{--<span>O</span>--}}
        {{--<span>A</span>--}}
        {{--<span>D</span>--}}
        {{--<span>I</span>--}}
        {{--<span>N</span>--}}
        {{--<span>G</span>--}}
    {{--</div>--}}
    {{--<div class="anim">--}}
        {{--<div id="loader" class="splesh_loader">--}}
            {{--<svg version="1.1" width="60px" height="70px" viewBox="0 0 60 70">--}}
                {{--<defs>--}}
                    {{--<filter id="f1" x="0" y="0">--}}
                        {{--<feGaussianBlur in="SourceGraphic" stdDeviation="2"></feGaussianBlur>--}}
                    {{--</filter>--}}
                {{--</defs>--}}
                {{--<g id="airplane">--}}
                    {{--<path fill="#fff" d="M0.677,20.977l4.355,1.631c0.281,0.104,0.579,0.162,0.88,0.16l9.76-0.004L30.46,41.58c0.27,0.34,0.679,0.545,1.112,0.541--}}
          {{--h1.87c0.992,0,1.676-0.992,1.322-1.918l-6.643-17.439l6.914,0.002l6.038,6.037c0.265,0.266,0.624,0.412,0.999,0.418l1.013-0.004--}}
          {{--c1.004-0.002,1.684-1.012,1.312-1.938l-2.911-7.277l2.912-7.278c0.372-0.928-0.313-1.941-1.313-1.938h1.017--}}
          {{--c-0.375,0-0.732,0.15-0.996,0.414l-6.039,6.039h-6.915l6.646-17.443c0.354-0.926-0.33-1.916-1.321-1.914l-1.87-0.004--}}
          {{--c-0.439,0.004-0.843,0.203-1.112,0.543L15.677,17.24l-9.765-0.002c-0.3,0.002-0.597,0.055-0.879,0.16L0.678,19.03--}}
          {{--C-0.225,19.36-0.228,20.637,0.677,20.977z" transform="translate(44,0) rotate(90 0 0)"></path>--}}
                {{--</g>--}}
                {{--<g id="shadow" transform="scale(.9)">--}}
                    {{--<path fill="#000" fill-opacity="0.3" d="M0.677,20.977l4.355,1.631c0.281,0.104,0.579,0.162,0.88,0.16l9.76-0.004L30.46,41.58c0.27,0.34,0.679,0.545,1.112,0.541--}}
      		{{--h1.87c0.992,0,1.676-0.992,1.322-1.918l-6.643-17.439l6.914,0.002l6.038,6.037c0.265,0.266,0.624,0.412,0.999,0.418l1.013-0.004--}}
      		{{--c1.004-0.002,1.684-1.012,1.312-1.938l-2.911-7.277l2.912-7.278c0.372-0.928-0.313-1.941-1.313-1.938h1.017--}}
      		{{--c-0.375,0-0.732,0.15-0.996,0.414l-6.039,6.039h-6.915l6.646-17.443c0.354-0.926-0.33-1.916-1.321-1.914l-1.87-0.004--}}
      		{{--c-0.439,0.004-0.843,0.203-1.112,0.543L15.677,17.24l-9.765-0.002c-0.3,0.002-0.597,0.055-0.879,0.16L0.678,19.03--}}
      		{{--C-0.225,19.36-0.228,20.637,0.677,20.977z" transform="translate(64,30) rotate(90 0 0)"--}}
                          {{--filter="url(#f1)"></path>--}}
                {{--</g>--}}
            {{--</svg>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {{-- <div class="navbar-nav navbar-left">
                 <div class="h5 form-control" style="background-color: #FFFFFF">
                     <a class="top-menu-head" style="text-decoration: none;" href="{{url('dashboard')}}"><i
                                 class="fa fa-home"
                                 aria-hidden="true"></i>

                         <strong class="text-primary">Banjari Tours & Travels</strong>
                     </a>
                 </div>
             </div>--}}
        </div>
        <div class="nav navbar-nav navbar-right">
            @include('layout.header.main_header')
        </div>
        {{--@include('layout.header.header')--}}
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container-fluid contain_wid">
    {{--<div class="container content">--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-12">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    @yield('content')
</div>
{{--Place holder--}}


<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Title</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <div class=" pull-right">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                    &nbsp;
                </div>
                &nbsp;
                <div id="modalBtn" class="pull-right">&nbsp;</div>
                {{--<button id="extraBtn1" type="button" class="btn btn-primary" style="display:none">Save changes</button>--}}
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="{{ url('assets/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ url('assets/js/validation.js') }}"></script>
<script src="{{ url('assets/js/jquery.table2excel.js') }}"></script>
<script src="{{ url('assets/js/form-wizard.js') }}"></script>
<script src="{{url('js/sweetalert.min.js')}}"></script>

<!------Popup Box -->
<div class="modal popup_bgcolor" id="sucess_popup">
    <div class="popup_box">
        <div class="alert_popup success_bg">
            <div class="popup_verified"><i class="mdi mdi-check"></i></div>
            <h4 class="popup_mainhead">Thank You!</h4>
            <p class="popup-text dynamic_popuptxt">You have successfully Submit</p>
        </div>
        <div class="popup_submit">
            <button class="popup_submitbtn success_bg sucess_btn" type="submit" onclick="HidePopoupMsg();">Ok
            </button>
        </div>
    </div>
</div>
<div class="modal popup_bgcolor" id="error_popup">
    <div class="popup_box">
        <div class="alert_popup error_bg">
            <div class="popup_verified"><i class="mdi mdi-close"></i></div>
            <h4 class="popup_mainhead">Error Massage!</h4>
            <p class="popup-text dynamic_popuptxt">You have entered wrong text</p>
        </div>
        <div class="popup_submit">
            <button class="popup_submitbtn error_bg error_btn" type="submit" onclick="HidePopoupMsg();">ok</button>
        </div>
    </div>
</div>
@if(session()->has('message'))
    <script type="text/javascript">
        setTimeout(function () {
            swal("Success", "{{ session()->get('message') }}", "success");
        }, 500);

    </script>
@endif
@if($errors->any())
    <script>
        setTimeout(function () {
            swal("Info", "{{$errors->first()}}", "info");
        }, 500);
    </script>
@endif
<script>

    function ShowSuccessPopupMsg(msg) {

        $('#sucess_popup').find('.dynamic_popuptxt').text(msg);
        $('#sucess_popup').addClass('show_popup');
    }
    function ShowErrorPopupMsg(msg) {
        $('#error_popup').find('.dynamic_popuptxt').text(msg);
        $('#error_popup').addClass('show_popup');
    }
    function HidePopoupMsg() {
        $('.popup_bgcolor').removeClass('show_popup');
    }

    $(document).ready(function () {
        $('#dtTable').DataTable(
            {
                "order": [],
                "columnDefs": [{
                    "targets": 'no-sort',
                    "orderable": false,

                }]
            });
        $('.dtTable').DataTable(
            {
                "order": [],
                "columnDefs": [{
                    "targets": 'no-sort',
                    "orderable": false,

                }],
                //scrollY: '25v',
                //"iDisplayLength": 5,
                "lengthMenu": [5, 10, 25]

            });

        window.setTimeout(function () {
            $(".alert").fadeTo(3000, 0).slideUp(300, function () {
                $(this).remove();
            });
        }, 6000);

        $(function () {
            $('.dtp').datepicker({
                format: "dd-MM-yyyy",
                maxViewMode: 2,
                todayBtn: "linked",
                daysOfWeekHighlighted: "0",
                autoclose: true,
                todayHighlight: true
            });
        });
    });
</script>
<script type="text/javascript">
    window.onload = function (e) {
        setTimeout(function () {
            $('#page_loader2').addClass('splash');
        }, 1000);
    }

</script>
</body>

</html>