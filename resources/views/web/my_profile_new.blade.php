@extends('web.web_master')

@section('title','Mangal Mandap : My Profile')
@section('head')
    @include('web.usage.lightbox_plugin')
    <link rel="stylesheet" href="{{url('css/bootstrap2.min.css')}}"/>
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}"/>
    <style type="text/css">
        /*.view_fixed_nav .btn-group a {*/
            /*padding: 5px 29px;*/
        /*}*/
        h3 {
            font-size: 18px;
            color: #d13b5b;
        }
        .modal-header
        {
            display: inline-block !important;
        }
        .font_bolt {
            font-weight: 700;
        }

        li {
            font-size: 15px;
        }

        .popup_submitbtn {
            padding: 7px;
            color: white;
            border: none;
            width: 160px !important;
            border-radius: 40px;
            outline: none;
            text-transform: uppercase;
            font-size: 12px;
            text-align: center;
        }

        .login_with_baskit ul li {
            font-size: 15px;
        }

        .footer_content {
            font-size: 15px;
        }

        .profile_user {
            width: auto;
            cursor: pointer;
            position: relative;
            font-size: 15px;
        }

        a {
            text-decoration: none !important;
            font-size: 15px;
        }

        .top_nav_fixed {
            /*position: fixed;*/
            /*top: 52%;*/
            /*width: 100%;*/
            /*z-index: 99;*/
            /*border-radius: initial;*/
            position: -webkit-sticky;
            position: sticky;
            top: 70px;
            bottom: 0;
            z-index: 10;
        }

        .viewdetails_container {
            padding-top: 60px;
            display: inline-block;
            width: 100%;
        }

        .tab_btn {
            transition: .5s all;
            -webkit-transition: .5s all;
            -moz-transition: .5s all;
            -o-transition: .5s all;
            padding: 5px 15px;
            background: none;
            outline: none;
            border: none;
            border-right: solid thin #cccccc;
            color: #113252;
            font-size: 14px;
            background-color: #00933d;
            color: #fff;
        }

        .tab_btn:active {
            outline: none;
            -webkit-appearance: none !important;
        }

        .tab_btn:focus {
            outline: none;
            -webkit-appearance: none !important;
        }

        .selected_tabs {
            background: #fbc02d;
            color: #ffffff;
        }

        .tab_btn:hover {
            background: #fbc02d;
            color: #ffffff;
            border-color: #fbc02d;
        }

        .tab_btn i {
            font-size: 16px;
            margin-right: 5px;
            padding: 0px !important;
        }

        .list_view_name {
            width: 100%;
            font-size: 34px;
            text-transform: uppercase;
            white-space: nowrap;
            text-shadow: 1px 2px #000000;
            overflow: hidden;
            text-overflow: ellipsis;
            cursor: pointer;
        }

        .view_topdetails_banner {
            width: 100%;
            display: inline-block;
            height: 400px;
            overflow: hidden;
            position: relative;
        }

        .view_topdetails_banner img {
            width: 100%;
        }

        .sub_cat_header_caption .filter_star_rating .mdi-star-outline {
            color: #ffffff;
        }

        .view_star_box {
            margin-bottom: 10px;
        }

        .view_card {
            margin-bottom: 20px;
            font-size: 14px;
        }

        .card_basic_header {
            width: 100%;
            display: inline-block;
            padding: 10px 15px 5px 15px;
            border-bottom: solid thin #e1e1e1;
        }

        .basic_bgcolor {
            background-color: #f5f5f5;
        }

        .view_service_container {
            width: 100%;
            display: inline-block;
        }

        .view_service_ul {
            display: inline-block;
            width: 100%;
            padding: 15px 0px 0px 2%;
            margin: 0px;
            list-style: none;
        }

        .view_service_li {
            display: inline-block;
            float: left;
            background: #ffffff;
            box-shadow: rgba(0, 0, 0, 0.08) 5px 8px 20px, rgba(72, 67, 67, 0.23) 0px 2px 5px;
            position: relative;
            overflow: hidden;
            padding: 20px 10px 10px 60px;
            transition: .5s all;
            margin: 0px 15px 15px 0px;
        }

        .view_service_first_cap {
            position: absolute;
            left: 10px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            background: #fbc02d;
            text-transform: uppercase;
            font-size: 24px;
            color: #151515;
            top: 10px;
        }

        .view_ser_cap {
            width: 100%;
            display: inline-block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(1, 1);
            }
            to {
                -webkit-transform: scale(1.5, 1.5);
            }
        }

        @keyframes zoom {
            from {
                transform: scale(1, 1);
            }
            to {
                transform: scale(1.5, 1.5);
            }
        }

        .carousel-inner .carousel-item > img {
            -webkit-animation: zoom 25s;
            -moz-animation: zoom 25s;
            -o-animation: zoom 25s;
            animation: zoom 25s;
            max-height: 450px;
            width: 100%;
        }

        .carousel_arrow {
            position: absolute;
            font-size: 35px;
            text-align: center;
            filter: alpha(opa
            
            =50);
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            width: 40px;
            height: 40px;
            line-height: 40px;
            top: 50%;
            margin-top: -20px;
            -moz-box-shadow: 0 0 10px 0 rgba(50, 50, 50, 0.25);
            box-shadow: 0 0 10px 0 rgba(50, 50, 50, 0.25);
            -webkit-box-shadow: 0 0 10px 0 rgba(50, 50, 50, 0.25);
            background: #fbc02d;
            color: #ffffff;
            text-decoration: none;
            cursor: pointer;
            background-image: none !important;
            opacity: 0.8;
            transition: .5s all;
            -webkit-transition: .5s all;
            -moz-transition: .5s all;
            -o-transition: .5s all;
        }

        .left_arrow {
            left: 10px;
        }

        .right_arrow {
            right: 10px;
        }

        .carousel_arrow:hover {
            background: #fff;
            color: #fbc02d;
            opacity: 1;
        }

        .carousel-indicators img {
            height: 50px !important;
        }

        .pad_botttom0 {
            padding-bottom: 0px;
        }

        .review_txt_row {
            display: inline-block;
            width: 100%;
            position: relative;
            padding-left: 120px;
        }

        .left_cap {
            position: absolute;
            left: 0px;
            top: -7px;
        }

        .view_progress {
            height: 7px;
            margin-bottom: 0px;
        }

        .view_progress .progress-bar {
            height: 100%;
        }

        .overall_rat_blk {
            position: relative;
            text-align: center;
        }

        .overall_rat_blk:before {
            content: "";
            position: absolute;
            width: 3px;
            height: 100%;
            background: #113252;
            left: 15px;
        }

        .over_cap {
            font-size: 18px;
            text-transform: uppercase;
        }

        .over_fill {
            margin: 0px auto;
            color: #ffffff;
            font-size: 30px;
            position: relative;
            padding: 10px 10px 3px 0px;
            max-width: 110px;
            margin-top: 5px;
            margin-bottom: 10px;
        }

        .fill_star {
            position: absolute;
            right: 10px;
            z-index: 10;
            top: 5px;
            font-size: 18px;
        }

        .review_stars .mdi {
            font-size: 16px;
        }

        .review_block {
            display: inline-block;
            width: 100%;
        }

        .review_row {
            position: relative;
            width: 100%;
            padding-left: 80px;
            margin-top: 10px;
            border-top: solid thin #e1e1e1;
            padding-top: 10px;
        }

        .review_post_img {
            left: 0px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            position: absolute;
            border: 3px solid #fff;
            box-shadow: 5px 8px 20px rgba(199, 199, 199, 0.19), 0 2px 5px rgba(107, 100, 100, 0.23);
            -webkit-box-shadow: 5px 8px 20px rgba(199, 199, 199, 0.19), 0 2px 5px rgba(107, 100, 100, 0.23);
            background-color: #ffffff;
        }

        .review_post_img img {
            width: 100%;
            height: 100%;
        }

        .review_name_blk {
            width: 100%;
            display: inline-block;
            padding-right: 80px;
            position: relative;
        }

        .review_name {
            display: inline-block;
            font-size: 16px;
            color: #666666;
        }

        .review_stars {
            display: inline-block;
            margin-left: 10px;
        }

        .review_date {
            position: absolute;
            right: 0px;
            top: 1px;
            color: #113252;
        }

        .review_text {
            margin: 10px 0px;
            color: #666666;
        }

        .write_review_blk .md-form {
            margin: 10px 0px 0px;
        }

        .review_star_block {
            display: inline-block;
            font-size: 28px;
        }

        .review_star_block .mdi-star {
            color: #fbc02d;
        }

        .write_review_txt {
            display: inline-block;
            width: 100%;
            color: #666666;
        }

        .review_pagination_box {
            border-top: solid thin #e1e1e1;
            width: 100%;
            padding-top: 10px;
        }

        .pagination_ul {
            margin: 0px auto;
            float: right;
        }

        .mapbox {
            height: 400px; /* The height is 400 pixels */
            width: 100%; /* The width is the width of the web page */
        }

        .mapouter {
            text-align: right;
            width: 100%;
        }

        .gmap_canvas {
            overflow: hidden;
            background: none !important;
            width: 100%;
        }

        .right_side_viewblk {
            margin: 0px -30px 0px 15px;
        }

        .contact_right_card {
            min-height: 450px;
            margin-bottom: 20px;
        }

        .margin_top0 {
            margin-top: 0px !important;
        }

        .view_social_icon a {
            margin: 0px 5px 0px 0px;
            padding: 10px 0px;
        }

        .view_social_icon i {
            font-size: 18px;
        }

        .card.more_details {
            margin-bottom: 20px;
        }

        .view_more_details_ul {
            margin: 0px;
            font-size: 14px;
            padding-top: 5px;
            border-top: solid thin #e1e1e1;
        }

        .view_more_details_ul li:nth-child(odd) {
            text-transform: uppercase;
            margin-top: 5px;
            text-shadow: 1px 1px #e6e6e6;
        }

        .view_related_list {
            font-size: 14px;
            margin: 0px;
            padding-top: 10px;
            border-top: solid thin #e1e1e1;
        }

        .top_menu {
            top: 54px;
        }

        .fade.in {
            opacity: 1;
        }
    </style>
    <link rel="stylesheet" href="{{url('css/media.css')}}"/>

@stop
@section('content')
    <section class="viewdetails_container" style="background-color: #e5e5e5;">
        {{--<section class="top_nav_fixed">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="view_fixed_nav">--}}
                        {{--<div class="btn-group" role="group" aria-label="Basic example">--}}
                            {{--<a href="#view_about_blk" id="about" type="button"--}}
                               {{--class="tab_btn waves-effect waves-light selected_tabs"><i--}}
                                        {{--class="mdi mdi-account fa-sm pr-2"--}}
                                        {{--aria-hidden="true"></i> About--}}
                            {{--</a>--}}
                            {{--<a href="#view_service_blk" type="button"--}}
                               {{--class="tab_btn waves-effect waves-light"><i class="mdi mdi-briefcase-check fa-sm pr-2"--}}
                                                                           {{--aria-hidden="true"></i>Education & Profession--}}
                            {{--</a>--}}
                            {{--<a type="button" href="#view_gallery_blk"--}}
                               {{--class="tab_btn waves-effect waves-light"><i class="mdi mdi-image fa-sm pr-2"--}}
                                                                           {{--aria-hidden="true"></i>Family Details--}}
                            {{--</a>--}}
                            {{--<a type="button" href="#view_userreview_blk"--}}
                               {{--class="tab_btn waves-effect waves-light"><i class="mdi mdi-message-draw fa-sm pr-2"--}}
                                                                           {{--aria-hidden="true"></i> Desire Partner--}}
                            {{--</a>--}}
                            {{--<a type="button" href="#view_life_style"--}}
                               {{--class="tab_btn waves-effect waves-light"><i class="mdi mdi-message-draw fa-sm pr-2"--}}
                                                                           {{--aria-hidden="true"></i> Life Style--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}
        <div class="container">
            <div class="row">
                <div class="view_service_container">
                    <div class="sub_service_listbox row">
                        <div class="col-sm-12 col-md-9">
                            <div class="view_fixed_nav">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="#view_about_blk" id="about" type="button"
                                       class="tab_btn waves-effect waves-light selected_tabs"><i
                                                class="mdi mdi-account fa-sm pr-2"
                                                aria-hidden="true"></i> About
                                    </a>
                                    <a href="#view_service_blk" type="button"
                                       class="tab_btn waves-effect waves-light"><i class="mdi mdi-briefcase-check fa-sm pr-2"
                                                                                   aria-hidden="true"></i>Education & Profession
                                    </a>
                                    <a type="button" href="#view_gallery_blk"
                                       class="tab_btn waves-effect waves-light"><i class="mdi mdi-image fa-sm pr-2"
                                                                                   aria-hidden="true"></i>Family Details
                                    </a>
                                    <a type="button" href="#view_userreview_blk"
                                       class="tab_btn waves-effect waves-light"><i class="mdi mdi-message-draw fa-sm pr-2"
                                                                                   aria-hidden="true"></i> Desire Partner
                                    </a>
                                    <a type="button" href="#view_life_style"
                                       class="tab_btn waves-effect waves-light"><i class="mdi mdi-message-draw fa-sm pr-2"
                                                                                   aria-hidden="true"></i> Life Style
                                    </a>
                                </div>
                            </div>
                            <div class="cand_box cand_profile_containner">
                                <div class="cand_imgbox">
                                    @php
                                        $image = \App\Images::find($user->id);
                                    @endphp

                                    {{--@if($user->is_show_pic == '1')--}}
                                        @if(isset($image->pic1) && file_exists($image->pic1))
                                            <img class="cand_img" src="{{url('').'/'.$image->pic1}}"/>
                                        @else
                                            @if($user->gender == 'male')
                                                <img class="cand_img" src="{{url('images/male.png')}}"/>
                                            @else
                                                <img class="cand_img" src="{{url('images/female.png')}}"/>
                                            @endif
                                        @endif
                                    {{--@else--}}
                                        {{--<img class="cand_img"--}}
                                             {{--src="{{url('images/female_large_protected.jpg')}}"/>--}}
                                    {{--@endif--}}

                                    {{--@if(file_exists($image->pic1))--}}
                                    {{--<img class="cand_img" src="{{url('').'/'.$image->pic1}}"/>--}}
                                    {{--@else--}}
                                    {{--@if($user->gender == 'male')--}}
                                    {{--<img class="cand_img" src="{{url('images/male.png')}}"/>--}}
                                    {{--@else--}}
                                    {{--<img class="cand_img" src="{{url('images/female.png')}}"/>--}}
                                    {{--@endif--}}
                                    {{--@endif--}}
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
                                <div class="cand_details u_info">
                                    <div class="cand_name">{{$user->name}}</div>
                                    <ul class="cand_info">
                                        <li>{{isset($user->age)?$user->age:'Not mentioned'}}
                                            Years
                                        </li>


                                        <li>{{$user->height}}</li>
                                        <li>{{isset($user->state)?$user->state:'-'}}</li>


                                        <li>{{isset($user->city)?$user->city:'Not mentioned'}}</li>

                                        <li>{{isset($user->religion)?$user->religion:'Not mentioned'}}</li>

                                        <li>{{isset($user->caste)?$user->caste:'Not mentioned'}}</li>

                                        <li>{{isset($user->language)?$user->language:'Not mentioned'}}</li>
                                        <li>{{isset($user->occupation)?$user->occupation:'Not mentioned'}}</li>

                                        <li>{{isset($user->status)?$user->status:'Not mentioned'}}</li>
                                        <li>{{isset($user->salary)?$user->salary:'Not mentioned'}}</li>

                                        <li data-toggle="tooltip" data-placement="bottom"
                                            title="{{$user->education_detail}}">{{\Illuminate\Support\Str::limit( $user->education,28)}}</li>


                                    </ul>

                                </div>
                                <div class="cand_btnbox u_btn">
                                    <div class="btn-group cand_btncontainner" style="margin-bottom: 25px;">
                                        <a href="{{url('edit_profile')}}" class="popup_submitbtn btn-sm upgrade_bg">Edit Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card view_card" id="view_about_blk">
                                <div class="card_basic_header">
                                    <h3>About {{ucwords($user->name)}}

                                    </h3>

                                </div>
                                <div class="card-body">
                                    <p>
                                        <b><i class="mdi mdi-account fa-sm pr-2" aria-hidden="true"></i>About Me:</b>
                                        <br>{{isset($user->about_me)?$user->about_me:'Not mentioned'}}
                                    </p>
                                    <p>
                                        <b><i class="mdi mdi-image fa-sm pr-2"
                                              aria-hidden="true"></i>About
                                            Family:</b> <br>{{isset($user->about_fam)?$user->about_fam:'Not mentioned'}}
                                    </p>
                                    <p>
                                        <b><i class="mdi mdi-briefcase-check fa-sm pr-2"
                                              aria-hidden="true"></i>Education:</b><br> {{isset($user->education_detail)?$user->education_detail:'Not mentioned'}}
                                    </p>
                                    <p>
                                        <b><i class="mdi mdi-message-draw fa-sm pr-2" aria-hidden="true"></i>Occupation:</b>
                                        <br>{{isset($user->occupation_detail)?$user->occupation_detail:'Not mentioned'}}
                                    </p>
                                </div>

                            </div>
                            <div class="card view_card" id="view_service_blk">
                                <div class="card_basic_header"><h3>Education & Profession </h3></div>
                                <div class="card-body">
                                    <div class="col-sm-12">
                                        <div class="col-sm-6 ">
                                            <ul class="cand_info view_details_box">
                                                <li class="font_bolt">Education</li>
                                                <li>@if(isset($user->education)) <a data-toggle="tooltip"
                                                                                    data-placement="bottom"
                                                                                    title="{{$user->education}}">{{\Illuminate\Support\Str::limit($user->education,25)}}</a> @else {{'Not mentioned'}} @endif
                                                </li>
                                               
                                               <li class="font_bolt">Occupation</li>
                                                <li>{{isset($user->occupation)?$user->occupation:'Not mentioned'}}</li>
                                                
                                                 <li class="font_bolt">Annual Income</li>
                                                <li>{{isset($user->salary)?$user->salary:'Not mentioned'}}</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <ul class="cand_info">
                                                <li class="font_bolt">College</li>
                                                <li>{{isset($user->college_name)?$user->college_name:'Not mentioned'}}</li>
                                                
                                                <li class="font_bolt">Job Location</li>
                                                <li>{{isset($user->job_location)?$user->job_location:'Not mentioned'}}</li>
                                               

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card view_card" id="view_gallery_blk">
                                <div class="card_basic_header"><h3>Family Details</h3></div>
                                <div class="card-body pad_botttom0">
                                    <div class="col-sm-6">
                                        <ul class="cand_info view_details_box">
                                            <li class="font_bolt">Father's Occupation</li>
                                            <!--<li>{{isset($user->father_occupation) ? \Illuminate\Support\Str::limit($user->father_occupation,25):'Not mentioned'}}</li>-->
                                            <li>{{isset($user->father_occupation)?$user->father_occupation:'Not mentioned'}}</li>
                                            <li class="font_bolt">Sisters(s)</li>
                                            <li>{{$user->sisters}}</li>
                                            <li class="font_bolt">Brother(s)</li>
                                            <li>{{$user->brothers}}</li>

                                            <li class="font_bolt">Gotra</li>
                                            <li>{{isset($user->father_side_gotra)?$user->father_side_gotra:'Not mentioned'}}</li>


                                            <li class="font_bolt">Family Type</li>
                                            <li>{{isset($user->f_type)?$user->f_type:'Not mentioned'}}</li>


                                            <li class="font_bolt">Family Income</li>
                                            <li>{{isset($user->f_income)?$user->f_income:'Not mentioned'}}</li>
                                            <li class="font_bolt">Family Status</li>
                                            <li>{{isset($user->f_status)?$user->f_status:'Not mentioned'}}</li>


                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="cand_info view_details_box">
                                            <li class="font_bolt">Mother's Occupation</li>
                                            <li>{{isset($user->mother_occupation)?$user->mother_occupation:'Not mentioned'}}</li>
                                            <li class="font_bolt">Married Sisters(s)</li>
                                            <li>
                                                @if(isset($user->sis_married) || $user->sis_married != '')
                                                    {{$user->sis_married}}
                                                @else
                                                    {{"Not mentioned"}}
                                                @endif
                                            </li>
                                            <li class="font_bolt">Married Brother(s)</li>
                                            <li>
                                                @if(isset($user->bro_married) || $user->bro_married != '')
                                                    {{$user->bro_married}}
                                                @else
                                                    {{"Not mentioned"}}
                                                @endif
                                            </li>
                                            <li class="font_bolt">Maternal Gotra</li>
                                            <li>{{isset($user->mother_side_gotra)?$user->mother_side_gotra:'Not mentioned'}}</li>

                                            <li class="font_bolt">Family Values</li>
                                            <li>{{isset($user->f_values)?$user->f_values:'Not mentioned'}}</li>

                                            <li class="font_bolt">Family Based Out</li>
                                            <li>{{isset($user->origin)?$user->origin:'Not mentioned'}}</li>

                                            {{--<li class="font_bolt">Unmarried Brother (s)</li>--}}
                                            {{--<li>{{$user->brothers}}</li>--}}
                                            {{--<li>Unmarried Sister (s)</li>--}}
                                            {{--<li>{{$user->sisters}}</li>--}}
                                            {{--<li>Married Brother (s)</li>--}}
                                            {{--<li>{{$user->bro_married}}</li>--}}
                                            {{--<li>Unmarried Brother (s)</li>--}}
                                            {{--<li>{{$user->brothers}}</li>--}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card view_card" id="view_userreview_blk">
                                <div class="card_basic_header"><h3>Desire Partner</h3></div>
                                <div class="card-body">
                                    <div class="col-sm-6">
                                        <ul class="cand_info view_details_box">
                                            <li class="font_bolt">Age</li>
                                            <li>
                                                From&nbsp; {{$user->p_agefrom}}
                                                &nbsp;To&nbsp; {{$user->p_ageto}}
                                            </li>

                                            <li class="font_bolt">Marital Status</li>
                                            <li>
                                                {{$user->p_status}}
                                            </li>

                                            <li class="font_bolt">Religion</li>
                                            <li>
                                                {{$user->p_religion}}
                                            </li>
                                            <li class="font_bolt">Education </li>
                                            <li>
                                                {{isset($user->education_partner)?$user->education_partner:'Not mentioned'}}
                                            </li>
                                            
                                             <li class="font_bolt">Occupation </li>
                                            <li>
                                                {{isset($user->occupation_partner)?$user->occupation_partner:'Not mentioned'}}
                                            </li>

                                            <li class="font_bolt">Height</li>
                                            <li>
                                                From:&nbsp;{{isset($user->p_heightfrom)?$user->p_heightfrom:'N/A'}}
                                                &nbsp;To:&nbsp; {{isset($user->p_heightto)?$user->p_heightto:'N/A'}}
                                            </li>
                                            <li class="font_bolt">Weight</li>
                                            <li>
                                                {{isset($user->weight)?$user->weight:'Not mentioned'}}
                                            </li>

                                            <li class="font_bolt">Complexion</li>
                                            <li>
                                                {{isset($user->complexion)?$user->complexion:'Not mentioned'}}
                                            </li>
                                            <li class="font_bolt">Blood Group</li>
                                            <li>
                                                {{isset($user->blood_group)?$user->blood_group:'Not mentioned'}}
                                            </li>
                                            <li class="font_bolt">City</li>
                                            <li>
                                                {{isset($user->p_city)?$user->p_city:'Not mentioned'}}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="cand_info ">
                                            <li class="font_bolt">State</li>
                                            <li>
                                                {{$user->p_state}}
                                            </li>
                                            <li class="font_bolt">Language</li>
                                            <li>
                                                {{$user->p_language}}
                                            </li>
                                            <li class="font_bolt">Salary</li>
                                            <li>
                                                {{$user->p_salary}}
                                            </li>

                                            <li class="font_bolt">Diet</li>
                                            <li>
                                                @if(isset($user->diet) || $user->diet != '')
                                                    {{$user->diet}}
                                                @else
                                                    {{"Not mentioned"}}
                                                @endif
                                            </li>
                                            <li class="font_bolt">Body Type</li>
                                            <li>
                                                {{$user->body_type}}
                                            </li>
                                            <li class="font_bolt">Smoking Habit</li>
                                            <li>
                                                {{isset($user->smoking_habit)?$user->smoking_habit:'Not mentioned'}}
                                            </li>
                                            <li class="font_bolt">Drinking Habit</li>
                                            <li>
                                                {{isset($user->drinking_habit)?$user->drinking_habit:'Not mentioned'}}
                                            </li>
                                            <li class="font_bolt">Physical Status</li>
                                            <li>
                                                {{$user->p_physical}}
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card view_card" id="view_life_style">
                                <div class="card_basic_header"><h3>Life Style</h3></div>
                                <div class="card-body">
                                    <div class="col-sm-6">
                                        <ul class="cand_info view_details_box">
                                            <li class="font_bolt">Complexion</li>
                                            <li>
                                                {{$user->complexion}}
                                            </li>
                                            <li class="font_bolt">Blood Group</li>
                                            <li>
                                                {{isset($user->blood_group)?$user->blood_group:'Not mentioned'}}
                                            </li>
                                            <li class="font_bolt">Weight</li>
                                            <li>
                                                {{isset($user->weight)?$user->weight:'Not mentioned'}}
                                            </li>
                                            <li class="font_bolt">Physical</li>
                                            <li>
                                                {{isset($user->physical)?$user->physical:'Not mentioned'}}

                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="cand_info ">


                                            <li class="font_bolt">Diet</li>
                                            <li>
                                                @if(isset($user->diet) || $user->diet != '')
                                                    {{$user->diet}}
                                                @else
                                                    {{"Not mentioned"}}
                                                @endif
                                            </li>
                                            <li class="font_bolt">Body Type</li>
                                            <li>
                                                {{$user->body_type}}
                                            </li>

                                            <li class="font_bolt">Drinking Habit</li>
                                            <li>
                                                {{isset($user->drinking_habit)?$user->drinking_habit:'Not mentioned'}}
                                            </li>

                                            <li class="font_bolt">Smoking Habit</li>
                                            <li>
                                                {{isset($user->smoking_habit)?$user->smoking_habit:'Not mentioned'}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="right_side_viewblk">
                                <div class="card more_details">
                                    <div class="card-body">
                                        <h3 class="margin_top0">Horoscope</h3>
                                        <ul class="list-unstyled view_more_details_ul">
                                            <li>Place of Birth</li>
                                            <li>{{isset($user->bop)?$user->bop:'Not mentioned'}}</li>
                                            <li>Date Of Birth</li>
                                            <li>{{isset($user->dob)?$user->dob:'Not mentioned'}}</li>
                                            <li>Time of Birth</li>
                                            <li>{{isset($user->tob)?$user->tob:'Not mentioned'}}</li>
                                            <li>{{"Horoscope match is "}}</li>
                                            
                                            <li>{{isset($user->horoscope_match)?$user->horoscope_match == 1 ? 'Must':'Not Necessary':'Not mentioned'}}</li>
                                            <li>Rashi</li>
                                            <li>{{isset($user->rashi)?$user->rashi:'Not mentioned'}}</li>
                                            <li>Manglik</li>
                                            <li>{{isset($user->manglik)? ucwords($user->manglik):'Not mentioned'}}</li>

                                        </ul>
                                    </div>
                                </div>

<div class="card more_details">
                                    <div class="card-body">
                                        <h3 class="margin_top0">Contact Details</h3>
                                        <ul class="list-unstyled view_more_details_ul">
                                            <li>Email id</li>
                                            <li>{{isset($user->email)?$user->email:'Not mentioned'}}</li>
                                            <li>Primary Number</li>
                                            <li>{{isset($user->contact)?$user->contact:'Not mentioned'}}</li>
                                            <li>Alternate Number</li>
                                            <li>{{isset($user->mob2)?$user->mob2:'Not mentioned'}}</li>
                                            <li>Landline Number</li>
                                            <li>{{isset($user->landline)?$user->landline:'Not mentioned'}}</li>
                                            <li>Contact Address</li>
                                            <li>{{isset($user->address)?$user->address:'Not mentioned'}}</li>
                                            
                                           

                                        </ul>
                                    </div>
                                </div>

                                {{--<div class="card more_details">--}}
                                {{--<div class="card-body">--}}
                                {{--<h4 class="search_filter_head">Our PromiseOur Promise</h4>--}}
                                {{--<ul class="style-scroll promise_member">--}}
                                {{--<li>--}}
                                {{--<i class="promise_icon mdi mdi-account-card-details"></i>--}}
                                {{--<h4 class="promise_caption">Best Matches</h4>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                {{--<i class="promise_icon mdi mdi-account-star"></i>--}}
                                {{--<h4 class="promise_caption">Verified Profile</h4>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                {{--<i class="promise_icon mdi mdi-security-network"></i>--}}
                                {{--<h4 class="promise_caption">Privacy Control</h4>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                {{--<i class="promise_icon mdi mdi-server-security"></i>--}}
                                {{--<h4 class="promise_caption">Fully Secure</h4>--}}
                                {{--</li>--}}
                                {{--</ul>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                        <!--<div class="no_containner">
                            <div class="no_found_row">No more category available !</div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>

        function ShowNavManu(dis) {
            var curr_class = $(dis).attr('class');
            if (curr_class == 'mdi mdi-menu') {
                $(dis).removeClass('mdi-menu');
                $(dis).addClass('mdi-close');
                $('#nav_manus').addClass('show_nav_menu');
            } else {
                $(dis).removeClass('mdi-close');
                $(dis).addClass('mdi-menu');
                $('#nav_manus').removeClass('show_nav_menu');
            }
        }

        $(window).scroll(function (event) {
            var chk_scroll = $(window).scrollTop();
//alert(chk_scroll);
            if (chk_scroll < 8) {
                $('.top_nav_fixed').removeClass('top_menu');
            } else if (chk_scroll > 8) {
                $('.top_nav_fixed').addClass('top_menu');
            }
//            $(".tab_btn").removeClass("selected_tabs");
//            $(this).addClass("selected_tabs");
//            $('html, body').stop().animate({
//                scrollTop: $($(this).attr('href')).offset().top - 110
//            }, 400);
//            return false;
        });
        $(document).ready(function (e) {
            $('[data-toggle="tooltip"]').tooltip();
            $('[data-toggle="popover"]').popover();

            scrollNav();
            function scrollNav() {
                $('.view_fixed_nav a').click(function () {
                    if ($(this).attr('id')) {
                        $('.top_nav_fixed').removeClass('top_menu');
                        $(".tab_btn").removeClass("selected_tabs");
                        $(this).addClass("selected_tabs");
                        $('html, body').stop().animate({
                            scrollTop: $($(this).attr('href')).offset().top - 110
                        }, 400);
                        return false;
                    } else {
                        $('.top_nav_fixed').addClass('top_menu');
                        $(".tab_btn").removeClass("selected_tabs");
                        $(this).addClass("selected_tabs");
                        $('html, body').stop().animate({
                            scrollTop: $($(this).attr('href')).offset().top - 110
                        }, 400);
                        return false;
                    }
                });
            }

            if ($('#top_manu_search select.select2').length) {
                $('#top_manu_search select.select2').select2({
                    theme: 'classic',
                    dropdownAutoWidth: true,
                    width: '100%'
                });
            }
        });
    </script>
@stop