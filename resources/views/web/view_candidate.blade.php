@extends('web.web_master')

@section('title','Mangal Mandap : View Candidate')
@section('head')
    <style type="text/css">
        .similor_profile_ul {
            margin: 0px;
            padding: 0px;
            list-style: none;
            max-height: calc(100vh - 180px);
            overflow: auto;
        }

        .similor_profile_ul li {
            position: relative;
            width: 100%;
            margin-bottom: 10px;
            padding: 5px 3px 3px 110px;
            min-height: 80px;
            cursor: pointer;
            transition: .5s all;
        }

        .similor_profile_ul li:hover {
            background: #f5f5f5;
        }

        .simi_imgbox {
            position: absolute;
            left: 5px;
            top: 5px;
            width: 90px;
            overflow: hidden;
            text-align: center;
            max-height: 70px;
            border-radius: 10px;
        }

        .simi_img {
            width: 100%;
        }

        .simi_details {
            width: 100%;
            font-size: 12px;
            color: #757474;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .simi_name {
            font-size: 16px;
            margin: 3px 0px 5px 0px;
            display: inline-block;
            color: #000000;
            width: 100%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            text-transform: uppercase;
        }

        .simi_details {
            display: inline-block;
            width: 100%;
            font-size: 12px;
            color: #757474;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        /*---------------------View Details tabs------------*/
        a:hover, a:focus {
            outline: none;
            text-decoration: none;
        }

        .tab .nav-tabs {
            border-bottom: none;
            position: relative;
        }

        .tab .nav-tabs li {
            margin-right: 15px;
        }

        .tab .nav-tabs li a {
            padding: 20px 15px;
            font-size: 14px;
            font-weight: 600;
            color: #515571;
            border-radius: 0;
            text-transform: uppercase;
            margin-right: 0;
            border: none;
            position: relative;
            transition: all 0.5s ease 0s;
        }

        .tab .nav-tabs li a:hover {
            background: #fff;
        }

        .tab .nav-tabs li a:before {
            content: "";
            width: 100%;
            height: 1px;
            background: rgba(0, 0, 0, 0.2);
            position: absolute;
            bottom: 5px;
            left: 0;
            transform: scale(0);
            transition: all 700ms ease 0s;
        }

        .tab .nav-tabs li a:after {
            content: "";
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #4cc985;
            margin: 0 auto;
            position: absolute;
            bottom: 2px;
            left: 0;
            right: 0;
            transform: scale(0);
            transition: all 700ms ease 0s;
        }

        .tab .nav-tabs li.active a,
        .tab .nav-tabs li.active a:focus,
        .tab .nav-tabs li.active a:hover {
            border: none;
            color: #4cc985;
        }

        .tab .nav-tabs li a:hover:before,
        .tab .nav-tabs li.active a:before,
        .tab .nav-tabs li a:hover:after,
        .tab .nav-tabs li.active a:after {
            transform: scale(1);
        }

        .tab .tab-content {
            padding: 20px 5px;
            font-size: 14px;
            line-height: 22px;
            display: inline-block;
            width: 100%;
        }

        @media only screen and (max-width: 479px) {
            .tab .nav-tabs li {
                width: 100%;
            }

            .tab .nav-tabs li a {
                text-align: center;
            }
        }

        /*---------------------View Details tabs end------------*/
        /*---------------------Style Scroll --------------*/
        .style-scroll::-webkit-scrollbar {
            width: 10px;
            height: 10px;
            border-width: thin;
            border-style: solid;
            border-color: rgb(134, 188, 67);
            border-image: initial;
        }

        .style-scroll::-webkit-scrollbar-button {
            width: 0px;
            height: 0px;
            display: none;
        }

        .style-scroll::-webkit-scrollbar-corner {
            background-color: transparent;
        }

        .style-scroll::-webkit-scrollbar-thumb {
            background-color: rgb(134, 188, 67);
            box-shadow: rgba(0, 0, 0, 0.1) 1px 1px 0px inset, rgba(0, 0, 0, 0.07) 0px -1px 0px inset;
        }

        /*---------------------Style Scroll end-----------*/
        .cand_view_detailsbox {
            width: 100%;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            position: relative;
            padding: 0px 10px;
            min-height: 300px;
        }

        .view_details_box {
            color: #383535;
            border-right: solid thin #bbbbbb;
        }
    </style>
    @include('web.usage.lightbox_plugin')
@stop
@section('content')
    <section class="regitration_member all_pagescontainner">
        <div class="container">
            <div class="candidate_list_box">
                <div class="cand_search_filterbox">
                    <div class="search_filter_head">View Similar Profiles</div>
                    <ul class="similor_profile_ul style-scroll">
                        @foreach($similar_user as $similar)
                            @php
                                $similar_image = \App\Images::find($similar->id);
                            @endphp
                            <li onclick="window.location = '{{url('view_profile').'/'.$similar->id}}'">
                                <div class="simi_imgbox">
                                    @if(file_exists($similar_image->pic1))
                                        <img class="simi_img" src="{{url('').'/'.$similar_image->pic1}}"/>
                                    @else
                                        @if($similar->gender == 'male')
                                            <img class="simi_img" src="{{url('images/male.png')}}"/>
                                        @else
                                            <img class="simi_img" src="{{url('images/female.png')}}"/>
                                        @endif
                                    @endif
                                </div>
                                <div class="simi_details">
                                    <h4 class="simi_name">{{$similar->name}}</h4>
                                    <p class="simi_details">{{$similar->age}} yrs, {{$similar->height}}
                                        , {{$similar->state}}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="cand_list_containner">
                    <div class="cand_box">
                        @php
                            $image = \App\Images::find($user->id);
                        @endphp
                        <div class="cand_imgbox">
                            @if(file_exists($image->pic1))
                                <img class="cand_img" src="{{url('').'/'.$image->pic1}}"/>
                            @else
                                @if($user->gender == 'male')
                                    <img class="cand_img" src="{{url('images/male.png')}}"/>
                                @else
                                    <img class="cand_img" src="{{url('images/female.png')}}"/>
                                @endif
                            @endif
                            <div class="overlay_trust">
                                {{--<div class="meter_img img_80">80%</div>--}}
                                <div class="pics_counter_box"><i class="mdi mdi-camera"></i>
                                    {{--<span class="pics_counter">3</span>--}}
                                    <ul class="lightgallery list-unstyled">
                                        <li data-src="{{url('').'/'.$image->pic1}}">
                                            <img src="{{url('').'/'.$image->pic1}}"/>
                                        </li>
                                        <li data-src="{{url('').'/'.$image->pic2}}">
                                            <img src="{{url('').'/'.$image->pic2}}"/>
                                        </li>
                                        <li data-src="{{url('').'/'.$image->pic3}}">
                                            <img src="{{url('').'/'.$image->pic3}}"/>
                                        </li>
                                    </ul>
                                </div>
                                <div class="meter_caption">Reliable Score</div>
                            </div>
                        </div>
                        <div class="cand_details">
                            <div class="cand_name">{{$user->name}}</div>
                            <ul class="cand_info">
                                <li>{{isset($user->age)?$user->age:'Not Specified'}} Years
                                </li>


                                <li>{{isset($user->height)?$user->height:'Not Specified'}}</li>

                                <li>{{isset($user->city)?$user->city:'Not Specified'}}</li>

                                <li>{{isset($user->religion)?$user->religion:'Not Specified'}}</li>

                                <li>{{isset($user->caste)?$user->caste:'Not Specified'}}</li>

                                <li>{{isset($user->language)?$user->language:'Not Specified'}}</li>

                                <li>{{isset($user->status)?$user->status:'Not Specified'}}</li>
                                <li data-toggle="tooltip" data-placement="bottom"
                                    title="{{$user->education_detail}}">{{$user->education}}</li>
                            </ul>
                        </div>
                        <div class="cand_btnbox">
                            {{--<div class="btn-group cand_btncontainner" onclick="ShowLoginSignup('signin');">--}}
                            {{--<button type="button" class="btn btn-success btn-sm res_btn"><span--}}
                            {{--class="mdi mdi-heart"></span></button>--}}
                            {{--<button type="button" class="btn btn-success btn-sm res_btn">Send Interest</button>--}}
                            {{--</div>--}}

                            @if(isset($_SESSION['user_master']))
                                {{--<div class="btn-group cand_btncontainner" style="margin-bottom: 25px;">--}}
                                {{--<a class="popup_submitbtn btn-sm btn-primary"--}}
                                {{--href="{{url('view_profile').'/'.$user->id}}">View Profile--}}
                                {{--</a>--}}
                                {{--</div>--}}

                                @php
                                    $session_user = $_SESSION['user_master']->id;
                                     $queryResult = \Illuminate\Support\Facades\DB::select("call GetFriendType($session_user,$user->id)");
                                      $result = collect($queryResult);
                                @endphp
                                @if($result[0]->status_ == 'NULL')
                                    {{--<div class="btn-group cand_btncontainner"--}}
                                    {{--data-content="{{$user->id}}"--}}
                                    {{--id="send_{{$user->id}}" onclick="send_interest(this)">--}}
                                    {{--<button type="button" class="btn btn-success btn-xs res_btn"><span--}}
                                    {{--class="mdi mdi-heart"></span></button>--}}
                                    {{--<button type="button" class="btn btn-success btn-xs res_btn">Send--}}
                                    {{--Interest--}}
                                    {{--</button>--}}
                                    {{--</div>--}}
                                    <div class="btn-group cand_btncontainner" style="margin-bottom: 25px;">
                                        <a href="#" data-content="{{$user->id}}" id="send_{{$user->id}}"
                                           onclick="send_interest(this)" class="popup_submitbtn btn-sm btn-success">Send
                                            Interest</a>
                                    </div>

                                @elseif($result[0]->status_ == 'SENDER')
                                    {{--<div class="btn-group cand_btncontainner"--}}
                                    {{--data-content="{{$user->id}}"--}}
                                    {{--id="pending_{{$user->id}}" onclick="cancelrequest(this);">--}}
                                    {{--<button type="button" class="btn btn-danger btn-xs res_btn"><span--}}
                                    {{--class="mdi mdi-close"></span></button>--}}
                                    {{--<button type="button" class="btn btn-danger btn-xs res_btn">Cancel--}}
                                    {{--Interest--}}
                                    {{--</button>--}}
                                    {{--</div>--}}
                                    <div class="btn-group cand_btncontainner" style="margin-bottom: 25px;">
                                        <a href="#" data-content="{{$user->id}}"
                                           id="pending_{{$user->id}}" onclick="cancelrequest(this);"
                                           class="popup_submitbtn_cancel btn-sm btn-danger">Cancel Interest</a>
                                    </div>
                                @elseif($result[0]->status_ == 'RECIEVER')
                                    {{--<div class="btn-group cand_btncontainner"--}}
                                    {{--data-content="{{$user->id}}"--}}
                                    {{--id="pending_{{$user->id}}" onclick="acceptfrequest(this);">--}}
                                    {{--<button type="button" class="btn btn-success btn-xs res_btn"><span--}}
                                    {{--class="mdi mdi-check"></span></button>--}}
                                    {{--<button type="button" class="btn btn-success btn-xs res_btn">Accept--}}
                                    {{--Interest--}}
                                    {{--</button>--}}
                                    {{--</div>--}}
                                    <div class="btn-group cand_btncontainner" style="margin-bottom: 25px;">
                                        <a href="#" data-content="{{$user->id}}"
                                           id="pending_{{$user->id}}" onclick="acceptfrequest(this);"
                                           class="popup_submitbtn btn-sm btn-success">Accept Interest</a>
                                    </div>
                                @elseif($result[0]->status_ == 'FRIENDS')
                                    {{--<div class="btn-group cand_btncontainner"--}}
                                    {{--data-content="{{$user->id}}"--}}
                                    {{--id="friends_{{$user->id}}">--}}
                                    {{--<button type="button" class="btn btn-default btn-xs res_btn"><span--}}
                                    {{--class="mdi mdi-eye"></span></button>--}}
                                    {{--<button type="button" class="btn btn-default btn-xs res_btn">Friends--}}
                                    {{--</button>--}}
                                    {{--</div>--}}
                                    {{--<div class="btn-group cand_btncontainner"--}}
                                    {{--data-content="{{$user->id}}"--}}
                                    {{--id="friends_{{$user->id}}" onclick="unfriend(this);">--}}
                                    {{--<button type="button" class="btn btn-default btn-xs res_btn"><span--}}
                                    {{--class="mdi mdi-eye"></span></button>--}}
                                    {{--<button type="button" class="btn btn-default btn-xs res_btn">UnFriend--}}
                                    {{--</button>--}}
                                    {{--</div>--}}
                                    <div class="btn-group cand_btncontainner" style="margin-bottom: 25px;">
                                        <a href="#" data-content="{{$user->id}}" id="friends_{{$user->id}}"
                                           onclick="unfriend(this);"
                                           class="popup_submitbtn_unfriend btn-sm upgrade_bg">UnFriend</a>
                                    </div>
                                @else

                                @endif

                            @endif
                            <div class="btn-group cand_btncontainner" style="margin-bottom: 25px;">
                                <a href="#" data-content="{{$user->id}}"
                                   id="view_{{$user->id}}" onclick="view_contact(this)"
                                   class="popup_submitbtn btn-sm upgrade_bg">View Contact</a>
                            </div>
                        </div>
                    </div>

                    <div class="cand_view_detailsbox">
                        <div class="tab" role="tabpanel">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active links"><a href="#section1" aria-controls="home"
                                                                                role="tab" data-toggle="tab"
                                                                                aria-expanded="true">Personal
                                        Details</a></li>
                                <li role="presentation" class=" links"><a href="#section2" aria-controls="profile"
                                                                          role="tab"
                                                                          data-toggle="tab" aria-expanded="false">Family
                                        Details</a></li>
                                <li role="presentation" class=" links"><a href="#section3" aria-controls="messages"
                                                                          role="tab" data-toggle="tab"
                                                                          aria-expanded="false">Partner
                                        Expectations</a></li>
                            </ul>
                            <div class="tab-content tabs">
                                <section class="pull-left basic" id="section1">
                                    <h3>Basic</h3>
                                    <div class="col-sm-6 ">
                                        <ul class="cand_info view_details_box">
                                            <li>Age</li>
                                            <li>{{isset($user->age)?$user->age:'Not Specified'}} Years</li>
                                            <li>Height</li>
                                            <li>{{isset($user->height)?$user->height:'Not Specified'}}</li>

                                            <li>Location</li>
                                            <li>{{isset($user->city)?$user->city:'Not Specified'}}</li>

                                            <li>Religion</li>
                                            <li>{{isset($user->religion)?$user->religion:'Not Specified'}}</li>

                                            <li>Caste</li>
                                            <li>{{isset($user->caste)?$user->caste:'Not Specified'}}</li>

                                            <li>Manglik</li>
                                            <li>{{$user->manglik}}</li>

                                            <li>Gender</li>
                                            <li>{{$user->gender}}</li>


                                            <li>Marital Status</li>
                                            <li>{{isset($user->status)?$user->status:'Not Specified'}}</li>


                                        </ul>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <ul class="cand_info">
                                            <li>Mother Tongue</li>
                                            <li>{{isset($user->language)?$user->language:'Not Specified'}}</li>

                                            <li>Education</li>
                                            <li>{{isset($user->education)?$user->education:'Not Specified'}}</li>

                                            <li>Degree</li>
                                            <li>{{isset($user->highest_degree)?$user->highest_degree:'Not Specified'}}</li>

                                            <li>College</li>
                                            <li>{{isset($user->college_name)?$user->college_name:'Not Specified'}}</li>


                                            <li>Occupation</li>
                                            <li>{{isset($user->occupation)?$user->occupation:'Not Specified'}}</li>


                                            <li>Working With</li>
                                            <li>{{$user->employed_in}} Sector</li>


                                            <li>Annual Income</li>
                                            <li>{{isset($user->salary)?$user->salary:'Not Specified'}}</li>


                                        </ul>
                                    </div>
                                </section>
                                <section class="pull-left family" id="section2">
                                    <h3>Family</h3>

                                    <div class="col-sm-10">
                                        <ul class="cand_info">
                                            <li>Father's Occupation</li>
                                            <li>{{isset($user->father_occupation)?$user->father_occupation:'Not Specified'}}</li>


                                            <li>Mother's Occupation</li>
                                            <li>{{isset($user->mother_occupation)?$user->mother_occupation:'Not Specified'}}</li>

                                            <li>Married Sisters (s)</li>
                                            <li>{{$user->sis_married}}</li>
                                            <li>Unmarried Sister (s)</li>
                                            <li>{{$user->sisters}}</li>
                                            <li>Married Brother (s)</li>
                                            <li>{{$user->bro_married}}</li>
                                            <li>Unmarried Brother (s)</li>
                                            <li>{{$user->brothers}}</li>


                                        </ul>
                                    </div>
                                </section>
                                <section class="pull-left partner" id="section3">
                                    <h3>Partner Expectation</h3>

                                    <div class="col-sm-6">
                                        <ul class="cand_info">
                                            <li>Age</li>
                                            <li>
                                                From&nbsp; {{$user->p_agefrom}}
                                                &nbsp;To&nbsp; {{$user->p_ageto}}
                                            </li>


                                            <li>Marital Status</li>
                                            <li>
                                                {{$user->p_status}}
                                            </li>


                                            <li>Height</li>
                                            <li>
                                                From:&nbsp;{{$user->p_heightfrom}}
                                                &nbsp;To:&nbsp; {{$user->p_heightto}}
                                            </li>
                                            <li>Religion</li>
                                            <li>
                                                {{$user->p_religion}}
                                            </li>
                                            <li>City</li>
                                            <li>
                                                {{$user->p_city}}
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="cand_info">
                                            <li>State</li>
                                            <li>
                                                {{$user->p_state}}
                                            </li>
                                            <li>Language</li>
                                            <li>
                                                {{$user->p_language}}
                                            </li>
                                            <li>Salary</li>
                                            <li>
                                                {{$user->p_salary}}
                                            </li>
                                            <li>Physical</li>
                                            <li>
                                                {{$user->p_physical}}
                                            </li>

                                        </ul>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        /*.basic {*/
        /*background-color: lightgoldenrodyellow;*/
        /*padding: 0px 15px;*/
        /*}*/

        /*.family {*/
        /*background-color: #ecf2f3;*/
        /*padding: 0px 15px;*/
        /*}*/

        /*.partner {*/
        /*!*background-color: bisque;*!*/
        /*padding: 0px 15px;*/
        /*}*/
    </style>
    <script>
        $('.links a').on('click', function (e) {
            var href = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(href).offset().top
            }, '200');
            e.preventDefault();

        });
    </script>
@stop