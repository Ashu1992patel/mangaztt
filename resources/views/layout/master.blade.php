<?php
if (!isset($_SESSION)) {
    session_start();
}
if (is_null($_SESSION['user_master'])) {
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes"/>
    <title>@yield('title')</title>
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>--}}
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    {{--    <link href="{{ url('js/jquiry.js') }}" rel="stylesheet">--}}
    <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="{{ url('assets/style.css') }}" rel="stylesheet"/>
    <link href="{{ url('assets/bootstrap1.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/jquery-ui.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/bootstrap-chosen.css') }}" rel="stylesheet"/>
    <link href="{{ url('assets/font-awesome-animation.min.css')}}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" media='all' rel='stylesheet'/>
    <link href="{{ url('assets/default.css') }}" rel="stylesheet">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/assets/bootstrap.min.css">--}}
    {{--<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">--}}
    <link href="{{ url('assets/datepicker.css') }}" rel="stylesheet">
    <link href="{{ url('assets/font-awesome.min.css')}}" rel="stylesheet">
    {{--<link href="{{ url('js/bootstrap-select.js') }}" rel="stylesheet">--}}
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.uikit.min.js"></script>

    {{--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/assets/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{ url('assets/select2.css')}}">

    <script src="{{ url('js/select2.js') }}"></script>

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
            margin-top: 19px;
        }

        .dd_ {
            width: 300px;
        }

        .bordmodal {
            border-top: none;
            border-bottom: solid 1px #eee;
            margin-bottom: 40px;
        }
    </style>

    @yield('head')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</head>

<body>

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
            <div class="navbar-nav navbar-left">
                <div class="h5 form-control" style="background-color: #FFFFFF">
                    <a class="top-menu-head" href="{{url('dashboard')}}"><i class="fa fa-home"
                                                                            aria-hidden="true"></i>

                        <strong class="text-primary">Banjari Tours & Travels</strong>
                    </a>
                </div>
            </div>
        </div>
        <div class="nav navbar-nav navbar-right">
            @if($_SESSION['user_master']->role_master_id == 1)
                @include('layout.header.admin_header')
            @elseif($_SESSION['user_master']->role_master_id == 2)
                @include('layout.header.tally_caller_header')
            @elseif($_SESSION['user_master']->role_master_id == 3)
                @include('layout.header.executive_header')
            @endif
        </div>
        {{--@include('layout.header.header')--}}
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container-fluid contain_wid">
    <div class="container content">
        <div class="row">
            <div class="col-lg-12">
                @yield('content') {{--Place holder--}}
            </div>
        </div>
    </div>
</div>

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
<script>
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
</body>

</html>