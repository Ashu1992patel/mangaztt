@extends('layout.master.master')

@section('title', 'List of All User')

@section('head')
    @include('web.usage.lightbox_plugin')
    <style>
        b {
            color: #337ab7;
        }

        .candidate_list_box {
            /*display: inline-block;*/
            /*width: 100%;*/
            padding-left: 0px;
            /*position: relative;*/
        }

        .cand_list_containner {
            display: inline-block;
            width: 90%;
        }

        .popup_submitbtn_view {
            padding: 4px 5px !important;
        }

        .profile_cand_name {
            font-size: 11px !important;
        }

        .cand_btncontainner {
            margin-bottom: -2px;
        }

        .cand_box {
            min-height: 295px;
        }
    </style>
    {{-- <script> --}}
    {{-- $(document).ready(function () { --}}
    {{-- $('[data-toggle="tooltip"]').tooltip(); --}}
    {{-- }); --}}
    {{-- </script> --}}
@stop
@section('content')

    <form method="POST" action="{{ route('admin_s_user') }}" class="form-horizontal" id="user_master">

        <input name="_token" type="hidden" value="{{ csrf_token() }}" />

        <div class="dash_head">
            <div class="col-sm-3 dash_txt">List of Registered Users</div>
            <div class="col-sm-6">
                <input type="text" class="form-control required" placeholder="Enter Record" name="user_id">
            </div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-success">Search</button>
                <a href="{{ url('user_master') }}" class="btn btn-primary">Reset</a>
            </div>
        </div>
    </form>
    <br>
    <br>

    <input type="hidden" id="see_id" value="1" />

    {{-- <section class="regitration_member all_pagescontainner"> --}}
    <div class="container">
        <div class="candidate_list_box">


            <div class="cand_list_containner" id="candidate_list">
                @if (count($users) > 0)
                    @foreach ($users as $search_user)
                        @php
                            $image = \App\Images::find($search_user->id);
                        @endphp
                        <div class="cand_box">
                            <div class="cand_imgbox" style="cursor: pointer;"
                                onclick="window.open('{{ url('view_profile_admin') . '/' . $search_user->id }}', '_blank');">
                                {{--                                @if ($search_user->is_show_pic == '1') --}}
                                @if (isset($image->pic1) && file_exists($image->pic1))
                                    <img class="cand_img" src="{{ url('') . '/' . $image->pic1 }}" />
                                @else
                                    @if ($search_user->gender == 'male')
                                        <img class="cand_img" src="{{ url('images/male.png') }}" />
                                    @else
                                        <img class="cand_img" src="{{ url('images/female.png') }}" />
                                    @endif
                                @endif
                                {{-- @else --}}
                                {{-- <img class="cand_img" src="{{url('images/female_large_protected.jpg')}}"/> --}}
                                {{-- @endif --}}

                            </div>


                            <div class="cand_details">
                                <div class="cand_name" style="cursor: pointer;">
                                    {{ $search_user->name }}{{ ' (MM-' . $search_user->id . ')' }}
                                    @if ($search_user->is_active == 1)
                                        <button type="button" id="{{ $search_user->id }}"
                                            class="btn btn-xs btn-danger btnDelete" title="Mark as Hold"><span
                                                class="fa fa-trash-o" aria-hidden="true"></span></button>
                                    @else
                                        <button type="button" id="{{ $search_user->id }}"
                                            class="btn btn-xs btn-success btnActive" title="Mark as Unhold"><span
                                                class="fa fa-check-circle" aria-hidden="true"></span></button>
                                    @endif
                                    {{-- <span data-toggle="tooltip" data-placement="right"
                                           title="Verified Profile By Aadhar"
                                           class="glyphicon glyphicon-ok icon-success"></span> --}}
                                </div>
                                <ul class="cand_info">
                                    <li>{{ isset($search_user->age) ? $search_user->age : 'Not Mentioned' }}
                                        Years
                                    </li>


                                    <li>{{ $search_user->height }}</li>
                                    <li>{{ isset($search_user->state) ? $search_user->state : '-' }}</li>


                                    <li>{{ isset($search_user->city) ? $search_user->city : 'Not Mentioned' }}</li>

                                    <li>{{ isset($search_user->religion) ? $search_user->religion : 'Not Mentioned' }}</li>

                                    <li>{{ isset($search_user->caste) ? $search_user->caste : 'Not Mentioned' }}</li>

                                    <li>{{ isset($search_user->language) ? $search_user->language : 'Not Mentioned' }}</li>
                                    <li>{{ isset($search_user->salary) ? $search_user->salary : '-' }}</li>

                                    <li>{{ isset($search_user->status) ? $search_user->status : 'Not Mentioned' }}</li>
                                    <li>{{ isset($search_user->dob) ? $search_user->dob : 'Not Mentioned' }}</li>
                                    <li data-toggle="tooltip" data-placement="bottom"
                                        title="{{ $search_user->education_detail }}">
                                        {{ \Illuminate\Support\Str::limit($search_user->education, 28) }}
                                    </li>

                                    <li data-toggle="tooltip" data-placement="bottom"
                                        title="{{ $search_user->occupation_detail }}">{{ $search_user->occupation }}</li>

                                    <li data-toggle="tooltip" data-placement="bottom" title="Email">
                                        {{ \Illuminate\Support\Str::limit($search_user->email) }}</li>

                                    <li data-toggle="tooltip" data-placement="bottom" title="Password">
                                        {{ $search_user->password }}</li>
                                </ul>
                            </div>
                            <div class="cand_btnbox">

                                <div class="btn-group cand_btncontainner">
                                    {{-- <button type="button" class="btn btn-success btn-xs res_btn"><span --}}
                                    {{-- class="mdi mdi-heart"></span></button> --}}
                                    {{-- <button type="button" class="btn btn-success btn-xs res_btn">Send Interest --}}
                                    {{-- </button> --}}
                                    <a target="_blank" class="popup_submitbtn_view btn-xs btn-primary"
                                        href="{{ url('view_profile_admin') . '/' . $search_user->id }}">View Profile
                                        {{-- <button type="button" class="btn btn-primary btn-xs res_btn"><span --}}
                                        {{-- class="mdi mdi-eye"></span></button> --}}
                                        {{-- <button type="button" class="btn btn-primary btn-xs res_btn">View Profile --}}
                                        {{-- </button> --}}
                                    </a>
                                    {{-- <a href="{{url('edit_profile').'/'.$search_user->id}}" target="_blank" --}}
                                    {{-- id="{{$search_user->id}}" class="popup_submitbtn_view btn-xs btn-success" --}}
                                    {{-- title="Edit User">Edit Profile</a> --}}

                                    <a class="popup_submitbtn_view btn-xs btn-success" type="button"
                                        onclick="view_adhar_user_id('{{ $search_user->id }}')">View Aadhar
                                    </a>

                                    <a onclick="view_user_contact('{{ $search_user->id }}')"
                                        class="popup_submitbtn_view btn-xs btn-danger" title="View Contact">View Contact</a>
                                </div>
                                <div class="btn-group cand_btncontainner">
                                    {{-- <button type="button" class="btn btn-success btn-xs res_btn"><span --}}
                                    {{-- class="mdi mdi-heart"></span></button> --}}
                                    {{-- <button type="button" class="btn btn-success btn-xs res_btn">Send Interest --}}
                                    {{-- </button> --}}

                                    @php
                                        $contact = \App\ViewContacts::where(['user_id' => $search_user->id])->first();
                                        $active = \App\ActivateProfile::find($search_user->id);
                                    @endphp
                                    @if (isset($contact) && $contact->contact_left > 0)
                                        <a onclick="markUnPaidUser('{{ $search_user->id }}');"
                                            class="popup_submitbtn_view btn-xs btn-danger" title="Unpaid">Mark as Unpaid</a>
                                        <div class="profile_cand_name"><b><i class="mdi mdi-access-point fa-sm pr-2"
                                                    aria-hidden="true"></i> Plan</b> :
                                            MM- {{ $active->plan }}
                                        </div>
                                        <div class="profile_cand_name"><b><i class="mdi mdi-clock fa-sm pr-2"
                                                    aria-hidden="true"></i> Plan Activate</b> :
                                            {{ date_format(date_create($active->activated_at), 'd-M-Y h:i A') }}
                                        </div>
                                        <div class="profile_cand_name"><b><i class="mdi mdi-clock fa-sm pr-2"
                                                    aria-hidden="true"></i> Plan Expire</b> :
                                            {{ date_format(date_create($active->deactivated_at), 'd-M-Y') }}
                                        </div>
                                        <div class="profile_cand_name"><b> <i class="mdi mdi-contacts fa-sm pr-2"
                                                    aria-hidden="true"></i>Contact Left</b>
                                            : {{ isset($contact) ? $contact->contact_left : '0' }}
                                        </div>
                                    @else
                                        <a onclick="getPaidUser({{ $search_user->id }})"
                                            class="popup_submitbtn_view btn-sm btn-success">Mark as paid
                                            {{-- <button type="button" class="btn btn-primary btn-xs res_btn"><span --}}
                                            {{-- class="mdi mdi-eye"></span></button> --}}
                                            {{-- <button type="button" class="btn btn-primary btn-xs res_btn">View Profile --}}
                                            {{-- </button> --}}
                                        </a>
                                    @endif
                                    <div class="profile_cand_name"><b><i class="mdi mdi-clock fa-sm pr-2"
                                                aria-hidden="true"></i> Signup Date</b> :
                                        {{ date_format(date_create($search_user->date_created), 'd-M-Y h:i A') }}
                                    </div>

                                </div>
                            </div>

                        </div>
                    @endforeach
                    {{ isset($users) ? $users->links() : $users->links() }}
                @else
                    <div class="cand_box">
                        <span>
                            < No Record Available>
                        </span>
                    </div>
                @endif
            </div>

        </div>
    </div>
    {{-- </section> --}}

    <script type="text/javascript">
        $('.btnDelete').click(function() {
            var id = $(this).attr('id');
            $('#myModal').modal('show');
            $('.modal-body').html(
                '<img height="50px" class="center-block" src="{{ url('assets/img/loading.gif') }}"/>');
            $('#myModal .modal-title').html('Confirm Inactivation');
            $('#myModal .modal-body').html('<h5>Are you sure want to Inactivate this user<h5/>');
            $('#modalBtn').html('<a class="btn btn-sm btn-danger" href="{{ url('user_master') }}/' + id +
                '/delete"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Confirm</a>'
            );
        });

        $('.btnActive').click(function() {
            var id = $(this).attr('id');
            $('#myModal').modal('show');
            $('.modal-body').html(
                '<img height="50px" class="center-block" src="{{ url('assets/img/loading.gif') }}"/>');
            $('#myModal .modal-title').html('Confirm Activation');
            $('#myModal .modal-body').html('<h5>Are you sure want to activate this user<h5/>');
            $('#modalBtn').html('<a class="btn btn-sm btn-success" href="{{ url('user_master') }}/' + id +
                '/activate"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Confirm</a>'
            );
        });

        function view_adhar_user_id(user_id) {
            $('#myModal').modal('show');
            $('.modal-dialog').removeClass('modal-lg');
            $('.modal-dialog').addClass('modal-md');
            $('.modal-title').html('Aadhar');
            $('.modal-body').html('<img height="50px" class="center-block" src="{{ url('assets/img/loading.gif') }}"/>');
            $.ajax({
                type: "get",
                data: {
                    user_id: user_id
                },
                url: "{{ url('admingetAadhar') }}",
                success: function(data) {
                    $('.modal-body').html(data);
                },
                error: function(xhr, status, error) {
                    $('.modal-body').html(xhr.responseText);
                }
            });
        }

        function view_user_contact(user_id) {
            $('#myModal').modal('show');
            $('.modal-dialog').removeClass('modal-lg');
            $('.modal-dialog').addClass('modal-md');
            $('.modal-title').html('Contact Information');
            $('.modal-body').html('<img height="50px" class="center-block" src="{{ url('assets/img/loading.gif') }}"/>');

            $.ajax({
                type: "get",
                url: "{{ url('show_contact_admin') }}",
                data: {
                    user_id: user_id
                },
                success: function(data) {
                    $('.modal-body').html(data);
                },
                error: function(xhr, status, error) {
                    $('.modal-body').html(xhr.responseText);
                }
            });
        }

        //        $(function () {
        //            $(".typeDD").select2({
        //                width: 'element',
        //                minimumResultsForSearch: Infinity,
        //                cache: true
        //            });
        //        });
        function markUnPaidUser(user_id) {
            $('#myModal').modal('show');
            $('.modal-body').html('<img height="50px" class="center-block" src="{{ url('assets/img/loading.gif') }}"/>');
            $('#myModal .modal-title').html('Confirm Mark Unpaid');
            $('#myModal .modal-body').html('<h5>Are you sure want to mark this user unpaid<h5/>');
            $('#modalBtn').html('<a class="btn btn-sm btn-danger" href="{{ url('mark_as_unpaid') }}/' + user_id +
                '"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Confirm</a>'
            );
        }

        function getPaidUser(getUserId) {
            var checkstr = confirm('are you sure you want this user as paid user?');
            if (checkstr == true) {
                // do your code
                window.location.href = '{{ url('mark_as_paid') . '/' }}' + getUserId;
            } else {
                return false;
            }
        }
    </script>
@stop
