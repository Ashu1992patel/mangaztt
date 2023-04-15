@extends('layout.master.master')

@section('title','List of Users')

@section('content')
    {{--<script src="{{ url('assets/js/jquery.dataTables.min.js') }}"></script>--}}
    {{--<link href="{{ url('assets/css/jquery.dataTables.min.css') }}" rel='stylesheet'/>--}}
    {{--<a href="#" class="btn btn-sm bg-danger btnSet btn-primary add-user pull-right">--}}
    {{--<span class="fa fa-plus"></span>&nbsp;Create New User</a>--}}
    <h3 class="">List of Users</h3>
    <hr/>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    @if($errors->any())
        <div role='alert' id='alert' class='alert alert-danger'>{{$errors->first()}}</div>
    @endif
    <div class="row fa-border">
        <div class="container-fluid">
            <table id="dataTable" class="display compact" cellspacing="0" width="100%">
                <thead>
                <tr class="bg-info">
                    <th class="options">Options</th>
                    <th>Id</th>
                    <th>Name/Gender</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Contact</th>
                    <th>City</th>
                    <th>IsPaid</th>
                </tr>
                </thead>
                <tbody>
                @if(count($user_masters)>0)
                    @foreach($user_masters as $user_master)
                        @php
                            $paid = \App\ActivateProfile::find($user_master->id);
                            $contact_left = \App\ViewContacts::where(['user_id'=>$user_master->id])->first();
                        @endphp
                        <tr>
                            <td id="{{$user_master->id}}">
                                <a href="{{url('view_profile_admin').'/'.$user_master->id}}" target="_blank"
                                   id="{{$user_master->id}}" class="btn btn-xs btn-primary"
                                   title="View User Profile">
                                    <span class="fa fa-eye"></span></a>
                                <a href="{{url('edit_profile').'/'.$user_master->id}}" target="_blank"
                                   id="{{$user_master->id}}" class="btn btn-xs btn-default "
                                   title="Edit User">
                                    <span class="fa fa-pencil"></span></a>
                                @if($user_master->is_active == 1)
                                    <button type="button" id="{{ $user_master->id }}"
                                            class="btn btn-xs btn-danger btnDelete" title="Inactivate"><span
                                                class="fa fa-trash-o" aria-hidden="true"></span></button>
                                @else
                                    <button type="button" id="{{ $user_master->id }}"
                                            class="btn btn-xs btn-success btnActive" title="Activate"><span
                                                class="fa fa-check-circle" aria-hidden="true"></span></button>
                                @endif
                                {{--@if(isset($paid) && $paid->active != 'yes')--}}
                                {{--<a href="#" id="{{$user_master->id}}"--}}
                                {{--onclick="markPaidUser('{{$user_master->id}}');"--}}
                                {{--class="btn btn-xs btn-info"--}}
                                {{--title="Mark as paid">--}}
                                {{--<span class="fa fa-repeat"></span></a>--}}
                                {{--@else--}}
                                {{--<a href="#" id="{{$user_master->id}}"--}}
                                {{--onclick="markPaidUser('{{$user_master->id}}');"--}}
                                {{--class="btn btn-xs btn-danger"--}}
                                {{--title="Mark as paid">--}}
                                {{--<span class="fa fa-close"></span></a>--}}
                                {{--@endif--}}
                            </td>
                            <td>{{$user_master->id}}
                                @if($user_master->is_active == 1)
                                    <span class="label label-success">Active</span>
                                @else
                                    <span class="label label-danger">Inactive</span>
                                @endif

                            </td>
                            <td>{{$user_master->name.'/'.$user_master->gender}}</td>
                            <td>{{$user_master->email}}</td>
                            <td>{{$user_master->password}}</td>
                            <td>{{$user_master->contact}}</td>
                            <td>{{$user_master->city}}</td>
                            <td>
                                @if(isset($paid) && $paid->active == 'yes')
                                    <label for="" onclick="markUnPaidUser('{{$user_master->id}}');"
                                           class="btn-xs btn btn-success">Paid User</label><br>
                                    <span><b>Active Date:</b> {{ date_format(date_create($paid->activated_at), "d-M-Y h:i A")}}</span>
                                    <br>
                                    <span><b>Expire Date:</b> {{ date_format(date_create($paid->deactivated_at), "d-M-Y h:i A")}}</span>
                                    <br>
                                    <span><b>Contact Left:</b>@if(isset($contact_left) && $contact_left->contact_left > 0){{$contact_left->contact_left}} @else {{0}} @endif</span>
                                @else
                                    <label for="" onclick="markPaidUser('{{$user_master->id}}');"
                                           class="btn-xs btn btn-danger">UnPaid User</label>
                                @endif
                            </td>

                            {{--                            <td> {{ date_format(date_create($user_master->last_login), "d-M-Y h:i A")}}</td>--}}
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
    <br/>
    <script>
        $('.btnDelete').click(function () {
            var id = $(this).attr('id');
            $('#myModal').modal('show');
            $('.modal-body').html('<img height="50px" class="center-block" src="{{ url('assets/img/loading.gif') }}"/>');
            $('#myModal .modal-title').html('Confirm Inactivation');
            $('#myModal .modal-body').html('<h5>Are you sure want to Inactivate this user<h5/>');
            $('#modalBtn').html('<a class="btn btn-sm btn-danger" href="{{ url('user_master') }}/' + id +
                '/delete"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Confirm</a>'
            );
        });

        $('.btnActive').click(function () {
            var id = $(this).attr('id');
            $('#myModal').modal('show');
            $('.modal-body').html('<img height="50px" class="center-block" src="{{ url('assets/img/loading.gif') }}"/>');
            $('#myModal .modal-title').html('Confirm Activation');
            $('#myModal .modal-body').html('<h5>Are you sure want to activate this user<h5/>');
            $('#modalBtn').html('<a class="btn btn-sm btn-success" href="{{ url('user_master') }}/' + id +
                '/activate"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Confirm</a>'
            );
        });
        function markPaidUser(user_id) {
            $('#myModal').modal('show');
            $('.modal-body').html('<img height="50px" class="center-block" src="{{ url('assets/img/loading.gif') }}"/>');
            $('#myModal .modal-title').html('Confirm Activation');
            $('#myModal .modal-body').html('<h5>Are you sure want to mark this user paid<h5/>');
            $('#modalBtn').html('<a class="btn btn-sm btn-success" href="{{ url('mark_as_paid') }}/' + user_id +
                '"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Confirm</a>'
            );
        }
        function markUnPaidUser(user_id) {
            $('#myModal').modal('show');
            $('.modal-body').html('<img height="50px" class="center-block" src="{{ url('assets/img/loading.gif') }}"/>');
            $('#myModal .modal-title').html('Confirm Mark Unpaid');
            $('#myModal .modal-body').html('<h5>Are you sure want to mark this user unpaid<h5/>');
            $('#modalBtn').html('<a class="btn btn-sm btn-danger" href="{{ url('mark_as_unpaid') }}/' + user_id + '"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Confirm</a>'
            );
        }

        $(".add-user").click(function () {
            $('#myModal').modal('show');
            $('.modal-title').html('Add New User');
            $('.modal-body').html('<img height="50px" class="center-block" src="{{url('assets/img/loading.gif')}}"/>');
            //alert(id);
            $.ajax({
                type: "GET",
                contentType: "application/json; charset=utf-8",
                url: "{{ url('user_master/create') }}",
                success: function (data) {
                    $('.modal-body').html(data);
//            $('#modelBtn').visible(disabled);
                },
                error: function (xhr, status, error) {
                    $('.modal-body').html(xhr.responseText);
                    //$('.modal-body').html("Technical Error Occured!");
                }
            });

        });
        $(".edit-user_").click(function () {
            $('#myModal').modal('show');
            $('.modal-title').html('Edit User');
            $('.modal-body').html('<img height="50px" class="center-block" src="{{url('assets/img/loading.gif')}}"/>');

            var id = $(this).attr('id');
            var editurl = '{{ url('/') }}' + "/user_master/" + id + "/edit";
            $.ajax({
                type: "GET",
                contentType: "application/json; charset=utf-8",
                url: editurl,
                data: '{"data":"' + id + '"}',
                success: function (data) {
                    $('.modal-body').html(data);
                },
                error: function (xhr, status, error) {
                    $('.modal-body').html(xhr.responseText);
                    //$('.modal-body').html("Technical Error Occured!");
                }
            });
        });

        $(".reset-pass").click(function () {
            $('#myModal').modal('show');
            $('.modal-title').html('Reset Password');
            $('.modal-body').html('<img height="50px" class="center-block" src="{{url('assets/img/loading.gif')}}"/>');

            var id = $(this).attr('id');
            var editurl = '{{ url('/') }}' + "/user_master/" + id + "/resetPassword";
            $.ajax({
                type: "GET",
                contentType: "application/json; charset=utf-8",
                url: editurl,
                data: '{"data":"' + id + '"}',
                success: function (data) {
                    $('.modal-body').html(data);
                },
                error: function (xhr, status, error) {
                    $('.modal-body').html(xhr.responseText);
                    //$('.modal-body').html("Technical Error Occured!");
                }
            });
        });

        $(document).ready(function () {
//            var i = 0;
//            $('#dataTable thead th').each(function () {
//                var style = 'input-sm';
//                if (i < 2)
//                    style += " hidden";
//                else
//                    style += " datatable-col";
//                var title = $(this).text();
//                $('#table_filter').append('<input id="' + i + '" type="text" class="' + style + '" placeholder="' + title + '" />');
//                i++;
//            });

// DataTable
            var table = $('#dataTable').DataTable({
                "columnDefs": [
                    {"width": "20px", "targets": 0}
                ]
            });

            $('.datatable-col').on('keyup change', function () {
                table.column($(this).attr('id')).search($(this).val()).draw();
            });
        });
    </script>
@stop
