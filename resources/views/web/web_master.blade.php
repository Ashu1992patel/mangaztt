<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <title>@yield('title')</title>
    @include('web.usage.plugin')
    @yield('head')
</head>
<body class="body_color">
@include('web.usage.header')
@yield('content') {{--Place holder--}}
@include('web.usage.footer')
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog modal-md" id="modal_size">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true" onclick="GloCloseModel();">&times;</span></button>
                <h4 id="modal_title" class="modal-title">Title</h4>
            </div>
            <div id="modal_body" class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <div class=" pull-right">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"
                            onclick="GloCloseModel();">Close
                    </button>
                    &nbsp;
                </div>
                &nbsp;
                <div id="modalBtn" class="pull-right">&nbsp;</div>
                {{--<button id="extraBtn1" type="button" class="btn btn-primary" style="display:none">Save changes</button>--}}
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@if(session()->has('message'))
    <script type="text/javascript">
        {{--if ('{{session()->get('message')}}' == 'Registration has been successful...please verify your account by entering verification code') {--}}
            {{--setTimeout(function () {--}}
                {{--ShowLoginSignup('verify');--}}
                {{--swal("Success", "{{ session()->get('message') }}", "success");--}}
            {{--}, 500);--}}
        {{--} else {--}}
            setTimeout(function () {
            swal("Success", "{{ session()->get('message') }}", "success");
        }, 500);
        //        }
    </script>
@endif
@if(isset($_SESSION['session_contact']))
    <script>
        ShowLoginSignup('verify');
    </script>
@endif
@if($errors->any())
    <script>
        if ('{{$errors->first()}}' == 'Please login first') {
            swal("Login", "{{$errors->first()}}", "error");
            ShowLoginSignup('signin');
        } else {
            setTimeout(function () {
                swal("Oops...", "{{$errors->first()}}", "error");
            }, 500);
        }
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endif
<script src="{{url('js/bootstrap-datepicker.js')}}"></script>

<script>

    //    setTimeout(function () {
    //        ShowupGrade();
    //    }, 10000);
    function view_contact(dis) {
        var search_user_id = $(dis).attr('data-content');
        $.ajax({
            type: "GET",
            contentType: "application/json; charset=utf-8",
            url: "{{ url('viewcontact') }}",
            data: {search_user_id: search_user_id},
            success: function (data) {
                if (data == 'success') {
                    viewUserContact(search_user_id);
//                    swal("Success", "Interest has been send", "success");
//                    setTimeout(function () {
//                        window.location.reload();
//                    }, 1000);
                } else if (data == 'unpaid') {
                    swal("Unpaid User", "Please make a payment to view contact", "info");
//                    setTimeout(function () {
//                        ShowLoginSignup('signin');
//                    }, 2000);
                } else if (data == 'Please login first') {
                    swal("Login First", "Before sending interest please login first", "info");
                    setTimeout(function () {
                        ShowLoginSignup('signin');
                    }, 2000);
                } else {
                    swal("Server Error", "Error", "error");
                }
            },
            error: function (xhr, status, error) {
                swal("Server Error", "Error", "error");
            }
        });
    }


    function search_profile(dis) {
        var search_user_id = $(dis).attr('data-content');
        $.ajax({
            type: "GET",
            contentType: "application/json; charset=utf-8",
            url: "{{ url('viewcontact') }}",
            data: {search_user_id: search_user_id},
            success: function (data) {
                if (data == 'success') {
                    viewUserContact(search_user_id);
//                    swal("Success", "Interest has been send", "success");
//                    setTimeout(function () {
//                        window.location.reload();
//                    }, 1000);
                } else if (data == 'unpaid') {
                    swal("Unpaid User", "Please make a payment to view contact", "info");
//                    setTimeout(function () {
//                        ShowLoginSignup('signin');
//                    }, 2000);
                } else if (data == 'Please login first') {
                    swal("Login First", "Before Searching match please Login/Register first.", "info");
                    setTimeout(function () {
                        ShowLoginSignup('signin');
                    }, 2000);
                } else {
                    swal("Server Error", "Error", "error");
                }
            },
            error: function (xhr, status, error) {
                swal("Server Error", "Error", "error");
            }
        });
    }

    function viewUserContact(user_id) {
        $('#myModal').addClass('in');
        $('#myModal').show();
        $('#modal_title').html('Contact Information');
        $('#modal_body').html('<img height="50px" class="center-block" src="{{url('images/loading.gif')}}"/>');
        $.ajax({
            type: "get",
            url: "{{url('show_contact')}}",
            data: {user_id: user_id},
            success: function (data) {
                debugger;
                $('#modal_body').html(data);
            },
            error: function (xhr, status, error) {
                $('#modal_body').html(xhr.responseText);
            }
        });
    }


    function send_interest(dis) {
        var search_user_id = $(dis).attr('data-content');
        $.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: "{{ url('sendrequest') }}",
            data: '{"search_user_id":"' + search_user_id + '"}',
            success: function (data) {
                if (data == 'success') {
                    swal("Success", "Interest has been send", "success");
                    setTimeout(function () {
                        window.location.reload();
                    }, 1000);
                } else if (data == 'Please login first') {
                    swal("Login First", "Before sending interest please login first", "error");
                    setTimeout(function () {
                        ShowLoginSignup('signin');
                    }, 2000);
                } else {
                    swal("Server Error", "Error", "error");
                }
            },
            error: function (xhr, status, error) {
                swal("Server Error", "Error", "error");
            }
        });
    }

    function cancelrequest(dis) {

        var search_user_id = $(dis).attr('data-content');
        $.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: "{{ url('cancelrequest') }}",
            data: '{"search_user_id":"' + search_user_id + '"}',
            success: function (data) {
                if (data == 'success') {
                    swal("Success", "Interest has been cancelled", "success");
                    setTimeout(function () {
                        window.location.reload();
                    }, 1000);
                } else if (data == 'Please login first') {
                    swal("Login First", "Before cancel interest please login first", "error");
                    setTimeout(function () {
                        ShowLoginSignup('signin');
                    }, 2000);
                } else {
                    swal("Server Error", "Error", "error");
                }
            },
            error: function (xhr, status, error) {
                alert('xhr.responseText');
//                    $('.search-user').html(xhr.responseText);
            }
        });
    }

    function acceptfrequest(dis) {
        var search_user_id = $(dis).attr('data-content');
        $.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: "{{ url('acceptfrequest') }}",
            data: '{"search_user_id":"' + search_user_id + '"}',
            success: function (data) {
                if (data == 'Friends') {
                    swal("Success", "Interest has been accepted", "success");
                    setTimeout(function () {
                        window.location.reload();
                    }, 2000);
                } else {
                    swal("Server Error", "Error", "info");
                }
            },
            error: function (xhr, status, error) {
                alert('xhr.responseText');
//                    $('#test').html(xhr.responseText);
            }
        });
    }
    function unfriend(dis) {
        var search_user_id = $(dis).attr('data-content');
        $.ajax({
            type: "get",
            contentType: "application/json; charset=utf-8",
            url: "{{ url('wunfriend') }}",
//                data: '{"data":"' + endid + '"}',
            data: {friend_id: search_user_id},
            success: function (data) {
                if (data == 'unfriend') {
                    swal("Success", "Unfriend successfully", "success");
                    setTimeout(function () {
                        window.location.reload();
                    }, 2000);
                } else {
                    swal("Server Error", "Error", "error");
                }
            },
            error: function (xhr, status, error) {
                swal("Server Error", "Error", "error");
            }
        });
    }
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

</script>
</body>

</html>