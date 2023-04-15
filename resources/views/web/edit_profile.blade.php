@extends('web.web_master')

@section('title','Mangal Mandap : My Profile')
@section('head')
    <style type="text/css">
        .textbox_containner {
            display: flex;
            flex-flow: column-reverse;
            width: 100%;
            height: 34px;
            border: solid thin #e1e1e1;
            padding: 0px 5px 5px 15px;
            margin-top: 10px;
        }

        .animate_placeholder, .animate_txt {
            transition: all 0.2s;
            touch-action: manipulation;
        }

        .animate_txt {
            font-size: 14px;
            border: 0;
            -webkit-appearance: none;
            border-radius: 0;
            padding: 0px 2px;
            cursor: text;
            color: #353535;
            background: transparent;
        }

        .animate_txt:focus {
            outline: 0;
        }

        .animate_placeholder {
            letter-spacing: 1px;
            margin: 0px;
            font-size: 12px;
            color: #848181;
        }

        .animate_txt:placeholder-shown + .animate_placeholder {
            cursor: text;
            max-width: fit-content;
            white-space: nowrap;
            text-overflow: ellipsis;
            transform-origin: left bottom;
            transform: translate(0, 2.125rem) scale(1.1);
        }

        ::-webkit-input-placeholder {
            opacity: 0;
            transition: inherit;
        }

        .animate_txt:focus::-webkit-input-placeholder {
            opacity: 1;
            color: #cccccc;
        }

        .animate_txt:not(:placeholder-shown) + .animate_placeholder,
        .animate_txt:focus + .animate_placeholder {
            transform: translate(0, 0) scale(1);
            cursor: pointer;
            background: #f5f5f5;
            padding: 2px 6px;
            border: solid thin #e1e1e1;
            border-radius: 5px;
            max-width: fit-content;
        }

        .updated_box {
            width: 100%;
            display: inline-block;
            background: #ffffff;
            position: relative;
            padding: 10px 15px;
            margin-bottom: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .top_heading_box {
            display: inline-block;
            width: 100%;
        }

        .update_databox {
            width: 100%;
            float: left;
            margin-top: 10px;
            border-top: solid thin #e1e1e1;
            display: none;
        }

        .update_profile_row {
            margin-top: 15px;
        }

        .collapse_btnbox {
            width: 25px;
            text-align: center;
            height: 25px;
            line-height: 25px;
            background: #ff5757;
            color: #ffffff;
            font-size: 20px;
            cursor: pointer;
            transition: .5s all;
        }

        .collapse_btnbox:hover {
            background: #f12020;
        }

        .drop_edit {
            outline: none;
            box-shadow: none;
            border: solid thin #e1e1e1 !important;
            border-radius: 0px;
            height: 35px;
            color: #a7a7a7;
            font-weight: bold;
            margin-top: 10px;
        }

        .drop_edit:focus {
            outline: none;
            box-shadow: none;
            border: none;
        }

        .editable_false .textbox_containner {
            pointer-events: none;
            background: #e1e1e136;
        }

        .editable_false .drop_edit {
            pointer-events: none;
            background: #e1e1e136;
        }

        .editable_false .update_txtarea {
            pointer-events: none;
            background: #e1e1e136;
        }

        .submit_btnbox {
            margin: 25px 0px 10px;
            text-align: right;
        }

        .after_editable_btnbox {
            display: none;
        }

        .update_txtarea {
            min-height: 80px;
            resize: none;
            border-radius: 0px;
        }

        .editable_txt {
            width: 100%;
            resize: none;
            border: solid thin #e1e1e1;
        }
    </style>
    <script type="text/javascript">
        function RemoveEditable(dis) {
            $(dis).hide();
            $(dis).parent().find(".after_editable_btnbox").show();
            $(dis).parent().parent().removeClass("editable_false");
        }
        function AddEditable(dis) {
            $(dis).parent().hide();
            $(dis).parent().next().show();
            $(dis).parent().parent().parent().addClass("editable_false");
        }
        function Collapsebtn(dis) {
            var chk_icon = $(dis).attr('class');
            if (chk_icon == 'mdi mdi-plus') {
                $(dis).removeClass('mdi-plus');
                $(dis).addClass('mdi-minus');
                $(dis).parent().parent().next().slideDown();
            } else {
                $(dis).removeClass('mdi-minus');
                $(dis).addClass('mdi-plus');
                $(dis).parent().parent().next().slideUp();
            }

        }
    </script>
@stop
@section('content')
    <section class="regitration_member">
        <div class="container">
            <div class="candidate_list_box">
                <div class="cand_profile_box">
                    <div class="cand_profile_imgbox my_profile_imgbox">
                        @php
                            $image = \App\Images::find($user->id);
                        @endphp
                        @if(isset($image->pic1))
                            <img src="{{url('').'/'.$image->pic1}}"/>
                        @else
                            @if($user->gender == 'male')
                                <img src="{{url('images/male.png')}}"/>
                            @else
                                <img src="{{url('images/female.png')}}"/>
                            @endif
                        @endif
                    </div>
                    <a class="edit_profile_img" href="{{url('profile_photo')}}">
                        <i class="mdi mdi-pencil"></i>
                    </a>
                    <div class="cand_name_box">
                        <div class="profile_cand_name"> {{$user->name}}</div>
                        <div class="cand_id">MM{{$user->id}}</div>
                        <div class="profile_cand_name"> ({{ucfirst($user->gender)}})</div>
                        {{--<div class="cand_id">MM{{$user->id}}</div>--}}
                    </div>
                    <div class="profile_status">
                        {{--<div class="status_text">80% Profile Completed</div>--}}
                        {{--<div class="status_progress">--}}
                        {{--<div class="progress">--}}
                        {{--<div class="progress-bar progress-bar-striped active" role="progressbar"--}}
                        {{--aria-valuenow="75"--}}
                        {{--aria-valuemin="0" aria-valuemax="100"--}}
                        {{--style="width: 75%;/* background-color: #07d; */">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                    <div class="profile_reliable_points">
                        <a href="#" class="reliable_row">
                            PERSONAL INFORMATION
                            <span class="reliable_symbol approved">
                            <i class="mdi mdi-checkbox-marked"></i>
                        </span>
                        </a>
                        <a href="#" class="reliable_row">
                            EDUCATION &amp; PROFESSION
                            <span class="reliable_symbol approved">
                            <i class="mdi mdi-checkbox-marked"></i>
                        </span>
                        </a>
                        <a href="#" class="reliable_row">
                            FAMILY DEATILS
                            <span class="reliable_symbol approved">
                            <i class="mdi mdi-checkbox-marked"></i>
                        </span>
                        </a>
                        <a href="{{url('profile_photo')}}" class="reliable_row">
                            Profile Photos
                            <span class="reliable_symbol approved">
                            <i class="mdi mdi-checkbox-marked"></i>
                        </span>
                        </a>
                        <a href="#" class="reliable_row">
                            Partner Preference
                            <span class="reliable_symbol not_approved">
                              <i class="mdi mdi-close-marked"></i>
                        </span>
                        </a>
                        {{--<a href="#" class="reliable_row">--}}
                        {{--Aadhar Verification--}}
                        {{--<span class="reliable_symbol not_approved">--}}
                        {{--<i class="mdi mdi-close-box"></i>--}}
                        {{--</span>--}}
                        {{--</a>--}}
                    </div>
                </div>
                <div class="cand_list_containner">
                    <form class="filter_form">
                        {{--<form role="form" id="updatefrm" action="{{url('profile_update')}}" method="post">--}}
                        <div class="updated_box ">
                            <div class="top_heading_box">
                                <span class="heading_txt">Personal Information</span>
                                <span class="collapse_btnbox pull-right">
                                <i class="mdi mdi-minus" onclick="Collapsebtn(this);"></i>
                            </span>
                            </div>
                            <div class="update_databox editable_false" style="display: block;">
                                <div class="update_profile_row row">
                                    <div class="col-sm-6">
                                        <div class="textbox_containner">
                                            <input type="text" editable="false" name="name" autocomplete="off"
                                                   class="animate_txt" id="name" placeholder="Enter Name"
                                                   value="{{$user->name}}">
                                            <label class="animate_placeholder" for="name">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="textbox_containner">
                                            <input type="email" editable="false" name="email" autocomplete="off"
                                                   class="animate_txt" id="email" placeholder="xyz@gmail.com"
                                                   value="{{$user->email}}">
                                            <label class="animate_placeholder" for="email">Email</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="update_profile_row row">
                                    <div class="col-sm-6">
                                        <div class="textbox_containner">
                                            <input type="text" name="contact" autocomplete="off" class="animate_txt"
                                                   id="contact" placeholder="Enter Primary No"
                                                   value="{{$user->contact}}"/>
                                            <label class="animate_placeholder" for="contact">Primary No.</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        @if($user->is_once_dob == '1')
                                            <div class="textbox_containner">
                                                <input type="text" editable="false" name="dob" autocomplete="off"
                                                       class="animate_txt editable_false" disabled id="DOB1"
                                                       placeholder="DOB"
                                                       value="{{ date_format(date_create($user->dob), "d-M-Y")}}"
                                                       title="You can only edit once in a life this field"
                                                       data-toggle="tooltip" data-placement="top">
                                                <label class="animate_placeholder"
                                                       title="You can only edit once in a life" data-toggle="tooltip"
                                                       data-placement="top" for="name">DOB</label>
                                                {{--<label class="" title="You can only edit once in a life this field"--}}
                                                {{--data-toggle="tooltip" data-placement="top"--}}
                                                {{--                                                       for="name">{{$user->religion}}</label>--}}
                                            </div>
                                        @else
                                            <div class="textbox_containner">
                                                <input type="text" editable="false" name="dob" autocomplete="off"
                                                       class="animate_txt dob" id="DOB1"
                                                       placeholder="DOB"
                                                       value="{{ date_format(date_create($user->dob), "d-M-Y")}}">
                                                <label class="animate_placeholder" title="You can only once in a life"
                                                       data-toggle="tooltip" data-placement="top" for="name">DOB</label>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                                <div class="update_profile_row row">
                                    <div class="col-sm-6">
                                        <div class="textbox_containner">
                                            <input type="text" editable="false" name="mob" autocomplete="off"
                                                   class="animate_txt" id="mob" placeholder="Enter Number"
                                                   value="{{$user->mob2}}">
                                            <label class="animate_placeholder" for="mob">Alternate Number</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="textbox_containner">
                                            <input type="text" editable="false" name="mob2" autocomplete="off"
                                                   class="animate_txt" id="mob2" placeholder="Enter Alternate Number"
                                                   value="{{$user->landline}}">
                                            <label class="animate_placeholder" for="mob2">Landline Number</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="update_profile_row row">
                                    <div class="col-sm-6">
                                        <select id="body_type1" name="body_type" class="form-control drop_edit">
                                            <option value="">Body Type</option>
                                            <option {{$user->body_type == "Average"?'selected':''}} value="Average">
                                                Average
                                            </option>
                                            <option {{$user->body_type == "Athletic"?'selected':''}} value="Athletic">
                                                Athletic
                                            </option>
                                            <option {{$user->body_type == "Slim"?'selected':''}} value="Slim">
                                                Slim
                                            </option>
                                            <option {{$user->body_type == "Heavy"?'selected':''}} value="Heavy">
                                                Heavy
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="height" id="heightid" class="form-control drop_edit txt_wizard">
                                            <option value="{{$user->height}}">{{$user->height!=''?$user->height:'- Select Height -'}}</option>
                                            <option value="3ft.5in-105cm">3ft.5in-105cm</option>
                                            <option value="3ft.6in-107cm">3ft.6in-107cm</option>
                                            <option value="3ft.7in-110cm">3ft.7in-110cm</option>
                                            <option value="3ft.8in-112cm">3ft.8in-112cm</option>
                                            <option value="3ft.9in-114cm">3ft.9in-114cm</option>
                                            <option value="3ft.10in-117cm">3ft.10in-117cm</option>
                                            <option value="3ft.11in-119cm">3ft.11in-119cm</option>
                                            <option value="4ft-122cm">4ft-122cm</option>
                                            <option value="4ft.1in-124cm">4ft.1in-124cm</option>
                                            <option value="4ft.2in-127cm">4ft.2in-127cm</option>
                                            <option value="4ft.3in-129cm">4ft.3in-129cm</option>
                                            <option value="4ft.4in-132cm">4ft.4in-132cm</option>
                                            <option value="4ft.5in-134cm">4ft.5in-134cm</option>
                                            <option value="4ft.6in-137cm">4ft.6in-137cm</option>
                                            <option value="4ft.7in-139cm">4ft.7in-139cm</option>
                                            <option value="4ft.8in-142cm">4ft.8in-142cm</option>
                                            <option value="4ft.9in-144cm">4ft.9in-144cm</option>
                                            <option value="4ft.10in-147cm">4ft.10in-147cm</option>
                                            <option value="4ft.11in-149cm">4ft.11in-149cm</option>
                                            <option value="5ft-151cm">5ft-151cm</option>
                                            <option value="5ft.1in-154cm">5ft.1in-154cm</option>
                                            <option value="5ft.2in-157cm">5ft.2in-157cm</option>
                                            <option value="5ft.3in-160cm">5ft.3in-160cm</option>
                                            <option value="5ft.4in-162cm">5ft.4in-162cm</option>
                                            <option value="5ft.5in-165cm">5ft.5in-165cm</option>
                                            <option value="5ft.6in-167cm">5ft.6in-167cm</option>
                                            <option value="5ft.7in-170cm">5ft.7in-170cm</option>
                                            <option value="5ft.8in-172cm">5ft.8in-172cm</option>
                                            <option value="5ft 9in-175cm</">5ft 9in-175cm</option>
                                            <option value="5ft.10in-177cm">5ft.10in-177cm</option>
                                            <option value="5ft.11in-180cm">5ft.11in-180cm</option>
                                            <option value="6ft-182cm">6ft-182cm</option>
                                            <option value="6ft.1in-185cm">6ft.1in-185cm</option>
                                            <option value="6ft.1in-185cm">6ft.1in-185cm</option>
                                            <option value="6ft.2in-187cm">6ft.2in-187cm</option>
                                            <option value="6ft.3in-190cm">6ft.3in-190cm</option>
                                            <option value="6ft.4in-193cm">6ft.4in-193cm</option>
                                            <option value="6ft.5in-196cm">6ft.5in-196cm</option>
                                            <option value="6ft.6in-198cm">6ft.6in-198cm</option>
                                            <option value="6ft.7in-200cm">6ft.7in-200cm</option>
                                            <option value="6ft.8in-203cm">6ft.8in-203cm</option>
                                            <option value="6ft.9in-206cm">6ft.9in-206cm</option>
                                            <option value="6ft.10in-208cm">6ft.10in-208cm</option>
                                            <option value="6ft.11in-211cm">6ft.11in-211cm</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="update_profile_row row">
                                    <div class="col-sm-6">
                                        {{--<div class="textbox_containner">--}}
                                        {{--<input type="text" editable="false" name=complexion" autocomplete="off"--}}
                                        {{--class="animate_txt" id="Complexion" placeholder="Complexion"--}}
                                        {{--value="{{$user->complexion}}">--}}
                                        {{--<label class="animate_placeholder" for="Complexion">Complexion</label>--}}
                                        <select name="complexion" class="form-control drop_edit txt_wizard">
                                            <option selected="" value="">Select Complexion</option>
                                            <option value="Very fair">Very fair</option>
                                            <option value="Fair">Fair</option>
                                            <option value="Wheatish">Wheatish</option>
                                            <option value="Wheatish Brown">Wheatish Brown</option>
                                            <option value="Brown">Brown</option>
                                            <option value="Dark">Dark</option>
                                        </select>
                                        {{--</div>--}}
                                    </div>
                                    <div class="col-sm-6">
                                        @if($user->is_once_religion==0)
                                            <select id="Religion" name="religion"
                                                    title="You can only edit once in a life" data-toggle="tooltip"
                                                    data-placement="top" class="form-control drop_edit ">
                                                <option value="{{$user->religion}}">{{$user->religion!=''?$user->religion:'Select Religion'}}</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Sikh">Sikh</option>
                                                <option value="Christian">Christian</option>
                                                <option value="Muslim">Muslim</option>
                                                <option value="Jain">Jain</option>
                                                <option value="Buddhist">Buddhist</option>
                                                <option value="Atheist">Atheist</option>
                                                <option value="Bahai">Bahai</option>
                                                <option value="Jew">Jew</option>
                                                <option value="Other Religion">Other Religion</option>
                                            </select>
                                        @else
                                            <div class="textbox_containner">
                                                <input type="text" editable="false" name="religion1" autocomplete="off"
                                                       class="animate_txt editable_false" disabled id="rel1"
                                                       placeholder="Religion"
                                                       value="{{$user->religion!=''?$user->religion:'Select Religion'}}"
                                                       title="You can only edit once in a life this field"
                                                       data-toggle="tooltip" data-placement="top">
                                                <label class="animate_placeholder"
                                                       title="You can only edit once in a life" data-toggle="tooltip"
                                                       data-placement="top" for="name">Religion</label>
                                                {{--<label class="" title="You can only edit once in a life this field"--}}
                                                {{--data-toggle="tooltip" data-placement="top"--}}
                                                {{--                                                       for="name">{{$user->religion}}</label>--}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="update_profile_row row">
                                    <div class="col-sm-6">
                                        <select id="Mother_tongue" name="language" class="form-control drop_edit">
                                            <option value="{{$user->language}}">{{$user->language!=''?$user->language:'Mother Tongue'}}</option>
                                            <option value="English">English</option>
                                            <option value="French">French</option>
                                            <option value="Garhwali">Garhwali</option>
                                            <option value="Garo">Garo</option>
                                            <option value="Gujarati">Gujarati</option>
                                            <option value="Haryanvi">Haryanvi</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="Kakbarak">Kakbarak</option>
                                            <option value="Kanauji">Kanauji</option>
                                            <option value="Kannada">Kannada</option>
                                            <option value="Kashmiri">Kashmiri</option>
                                            <option value="Khandesi">Khandesi</option>
                                            <option value="Khasi">Khasi</option>
                                            <option value="Konkani">Konkani</option>
                                            <option value="Koshali">Koshali</option>
                                            <option value="Other">Other</option>

                                        </select>
                                        <!-- <input type="text" editable="false" name="religion" autocomplete="off" class="animate_txt" id="Religion" placeholder="Complexion" value="Religion>-->
                                    </div>
                                    <div class="col-sm-6">

                                        <!--  <input type="Weight" editable="false" name="Weight" autocomplete="off" class="animate_txt" id="Weight" placeholder="Weight" value="Weight">-->
                                        <select name="caste" class="form-control requiredDD drop_edit txt_wizard"
                                                id="caste">
                                            <option selected
                                                    value="{{$user->caste}}">{{$user->caste!=''?$user->caste:'Select caste'}}</option>
                                            <option value="Adi Dravida">Adi Dravida</option>
                                            <option value="Agarwal">Agarwal</option>
                                            <option value="Agnikula Kshatriya">Agnikula Kshatriya</option>
                                            <option value="Agri">Agri</option>
                                            <option value="Ahom">Ahom</option>
                                            <option value="Ambalavasi">Ambalavasi</option>
                                            <option value="Arora">Arora</option>
                                            <option value="Arunthathiyar">Arunthathiyar</option>
                                            <option value="Arya Vysya">Arya Vysya</option>
                                            <option value="Baidya">Baidya</option>
                                            <option value="Bagga">Bagga</option>
                                            <option value="Baishnab">Baishnab</option>
                                            <option value="Baishya">Baishya</option>
                                            <option value="Balija">Balija</option>
                                            <option value="Banik">Banik</option>
                                            <option value="Baniya">Baniya</option>
                                            <option value="Barujibi">Barujibi</option>
                                            <option value="Besta">Besta</option>
                                            <option value="Bhandari">Bhandari</option>
                                            <option value="Bhatia">Bhatia</option>
                                            <option value="Bhavasar Kshatriya">Bhavasar Kshatriya</option>
                                            <option value="Bhovi">Bhovi</option>
                                            <option value="Billava">Billava</option>
                                            <option value="Boyer">Boyer</option>
                                            <option value="Brahmbatt">Brahmbatt</option>
                                            <option value="Brahmin">Brahmin</option>
                                            <option value="Brahmin - Adi Gaur">Brahmin - Adi Gaur</option>
                                            <option value="Brahmin - Anavil">Brahmin - Anavil</option>
                                            <option value="Brahmin - Audichya">Brahmin - Audichya</option>
                                            <option value="Brahmin - Barendra">Brahmin - Barendra</option>
                                            <option value="Brahmin - Bhatt">Brahmin - Bhatt</option>
                                            <option value="Brahmin - Bhumihar">Brahmin - Bhumihar</option>
                                            <option value="Brahmin - Daivadnya">Brahmin - Daivadnya</option>
                                            <option value="Brahmin - Danua">Brahmin - Danua</option>
                                            <option value="Brahmin - Deshastha">Brahmin - Deshastha</option>
                                            <option value="Brahmin - Dhiman">Brahmin - Dhiman</option>
                                            <option value="Brahmin - Dravida">Brahmin - Dravida</option>
                                            <option value="Brahmin - Garhwali">Brahmin - Garhwali</option>
                                            <option value="Brahmin - Gaur">Brahmin - Gaur</option>
                                            <option value="Brahmin - Goswami">Brahmin - Goswami</option>
                                            <option value="Brahmin - Gurukkal">Brahmin - Gurukkal</option>
                                            <option value="Brahmin - Halua">Brahmin - Halua</option>
                                            <option value="Brahmin - Havyaka">Brahmin - Havyaka</option>
                                            <option value="Brahmin - Hoysala">Brahmin - Hoysala</option>
                                            <option value="Brahmin - Iyengar">Brahmin - Iyengar</option>
                                            <option value="Brahmin - Iyer">Brahmin - Iyer</option>
                                            <option value="Brahmin - Jangid">Brahmin - Jangid</option>
                                            <option value="Brahmin - Jhadua">Brahmin - Jhadua</option>
                                            <option value="Brahmin - Kanyakubj">Brahmin - Kanyakubj</option>
                                            <option value="Brahmin - Karhade">Brahmin - Karhade</option>
                                            <option value="Brahmin - Kokanastha">Brahmin - Kokanastha</option>
                                            <option value="Brahmin - Kota">Brahmin - Kota</option>
                                            <option value="Brahmin - Kulin">Brahmin - Kulin</option>
                                            <option value="Brahmin - Kumoani">Brahmin - Kumoani</option>
                                            <option value="Brahmin - Madhwa">Brahmin - Madhwa</option>
                                            <option value="Brahmin - Maithil">Brahmin - Maithil</option>
                                            <option value="Brahmin - Modh">Brahmin - Modh</option>
                                            <option value="Brahmin - Mohyal">Brahmin - Mohyal</option>
                                            <option value="Brahmin - Nagar">Brahmin - Nagar</option>
                                            <option value="Brahmin - Namboodiri">Brahmin - Namboodiri</option>
                                            <option value="Brahmin - Niyogi">Brahmin - Niyogi</option>
                                            <option value="Brahmin - Panda">Brahmin - Panda</option>
                                            <option value="Brahmin - Pareek">Brahmin - Pareek</option>
                                            <option value="Brahmin - Pandit">Brahmin - Pandit</option>
                                            <option value="Brahmin - Rarhi">Brahmin - Rarhi</option>
                                            <option value="Brahmin - Rigvedi">Brahmin - Rigvedi</option>
                                            <option value="Brahmin - Rudraj">Brahmin - Rudraj</option>
                                            <option value="Brahmin - Sakaldwipi">Brahmin - Sakaldwipi</option>
                                            <option value="Brahmin - Sanadya">Brahmin - Sanadya</option>
                                            <option value="Brahmin - Sanketi">Brahmin - Sanketi</option>
                                            <option value="Brahmin - Saraswat">Brahmin - Saraswat</option>
                                            <option value="Brahmin - Saryuparin">Brahmin - Saryuparin</option>
                                            <option value="Brahmin - Shivhalli">Brahmin - Shivhalli</option>
                                            <option value="Brahmin - Shrimali">Brahmin - Shrimali</option>
                                            <option value="Brahmin - Smartha">Brahmin - Smartha</option>
                                            <option value="Brahmin - Sri Vishnava">Brahmin - Sri Vishnava</option>
                                            <option value="Brahmin - Stanika">Brahmin - Stanika</option>
                                            <option value="Brahmin - Tyagi">Brahmin - Tyagi</option>
                                            <option value="Brahmin - Vaidiki">Brahmin - Vaidiki</option>
                                            <option value="Brahmin - Vyas">Brahmin - Vyas</option>
                                            <option value="Chamar">Chamar</option>
                                            <option value="Chambhar">Chambhar</option>
                                            <option value="Chandravanshi Kahar">Chandravanshi Kahar</option>
                                            <option value="Chasa">Chasa</option>
                                            <option value="Chaudary">Chaudary</option>
                                            <option value="Chaurasia">Chaurasia</option>
                                            <option value="Chettiar">Chettiar</option>
                                            <option value="Chhetri">Chhetri</option>
                                            <option value="Christian - Born Again">Christian - Born Again</option>
                                            <option value="Christian - Bretheren">Christian - Bretheren</option>
                                            <option value="Christian - Church of South India">Christian - Church of
                                                South
                                                India
                                            </option>
                                            <option value="Christian - Evangelist">Christian - Evangelist</option>
                                            <option value="Christian - Jacobite">Christian - Jacobite</option>
                                            <option value="Christian - Knanaya">Christian - Knanaya</option>
                                            <option value="Christian - Knanaya Catholic">Christian - Knanaya Catholic
                                            </option>
                                            <option value="Christian - Knanaya Jacobite">Christian - Knanaya Jacobite
                                            </option>
                                            <option value="Christian - Latin Catholic">Christian - Latin Catholic
                                            </option>
                                            <option value="Christian - Malankara">Christian - Malankara</option>
                                            <option value="Christian - Marthoma">Christian - Marthoma</option>
                                            <option value="Christian - Others">Christian - Others</option>
                                            <option value="Christian - Pentacost">Christian - Pentacost</option>
                                            <option value="Christian - Roman Catholic">Christian - Roman Catholic
                                            </option>
                                            <option value="Christian - Syrian Catholic">Christian - Syrian Catholic
                                            </option>
                                            <option value="Christian - Syrian Jacobite">Christian - Syrian Jacobite
                                            </option>
                                            <option value="Christian - Syrian Orthodox">Christian - Syrian Orthodox
                                            </option>
                                            <option value="Christian - Syro Malabar">Christian - Syro Malabar</option>
                                            <option value="Christian - unspecified">Christian - unspecified</option>
                                            <option value="CKP">CKP</option>
                                            <option value="Coorgi">Coorgi</option>
                                            <option value="Devadiga">Devadiga</option>
                                            <option value="Devandra Kula Vellalar">Devandra Kula Vellalar</option>
                                            <option value="Devang Koshthi">Devang Koshthi</option>
                                            <option value="Devanga">Devanga</option>
                                            <option value="Dhangar">Dhangar</option>
                                            <option value="Dheevara">Dheevara</option>
                                            <option value="Dhiman">Dhiman</option>
                                            <option value="Dhoba">Dhoba</option>
                                            <option value="Dhobi">Dhobi</option>
                                            <option value="Ediga">Ediga</option>
                                            <option value="Ezhava">Ezhava</option>
                                            <option value="Ezhuthachan">Ezhuthachan</option>
                                            <option value="Gabit">Gabit</option>
                                            <option value="Gandla">Gandla</option>
                                            <option value="Ganiga">Ganiga</option>
                                            <option value="Garhwali">Garhwali</option>
                                            <option value="Gavara">Gavara</option>
                                            <option value="Ghumar">Ghumar</option>
                                            <option value="Goala">Goala</option>
                                            <option value="Goan">Goan</option>
                                            <option value="Gond">Gond</option>
                                            <option value="Goud">Goud</option>
                                            <option value="Gounder">Gounder</option>
                                            <option value="Gowda">Gowda</option>
                                            <option value="Gudia">Gudia</option>
                                            
                                            <option value="Gujjar">Gujjar</option>
                                            <option value="Gupta">Gupta</option>
                                            <option value="Intercaste">Intercaste</option>
                                            <option value="Intercaste">Intercaste</option>
                                            <option value="Irani">Irani</option>
                                            <option value="Jain - Shwetambar">Jain - Shwetambar</option>
                                            <option value="Jain - Digambar">Jain - Digambar</option>
                                            <option value="Jain - Agarwal">Jain - Agarwal</option>
                                            <option value="Jain - Bania">Jain - Bania</option>
                                            <option value="Jain - Intercaste">Jain - Intercaste</option>
                                            <option value="Jain - Jaiswal">Jain - Jaiswal</option>
                                            <option value="Jain - Khandelwal">Jain - Khandelwal</option>
                                            <option value="Jain - Kutchi">Jain - Kutchi</option>
                                            <option value="Jain - No Bar">Jain - No Bar</option>
                                            <option value="Jain - Oswal">Jain - Oswal</option>
                                            <option value="Jain - Others">Jain - Others</option>
                                            <option value="Jain - Porwal">Jain - Porwal</option>
                                            <option value="Jain - Unspecified">Jain - Unspecified</option>
                                            <option value="Jain - Vaishya">Jain - Vaishya</option>
                                            <option value="Jaiswal">Jaiswal</option>
                                            <option value="Jangam">Jangam</option>
                                            <option value="Jat">Jat</option>
                                            <option value="Jatav">Jatav</option>
                                            <option value="Kadava Patel">Kadava Patel</option>
                                            <option value="kahar">kahar</option>
                                            <option value="Kaibarta">Kaibarta</option>
                                            <option value="Kalar">Kalar</option>
                                            <option value="Kalinga">Kalinga</option>
                                            <option value="Kalita">Kalita</option>
                                            <option value="Kalwar">Kalwar</option>
                                            <option value="Kamboj">Kamboj</option>
                                            <option value="Kamma">Kamma</option>
                                            <option value="Kansari">Kansari</option>
                                            <option value="Kapu">Kapu</option>
                                            <option value="Karana">Karana</option>
                                            <option value="Karmakar">Karmakar</option>
                                            <option value="Karuneegar">Karuneegar</option>
                                            <option value="Kasar">Kasar</option>
                                            <option value="Kushwaha">Kushwaha</option>
                                            <option value="Kashyap">Kashyap</option>
                                            <option value="Kayastha">Kayastha</option>
                                            <option value="Khatik">Khatik</option>
                                            <option value="Khandayat">Khandayat</option>
                                            <option value="Khandelwal">Khandelwal</option>
                                            <option value="Khatri">Khatri</option>
                                            <option value="Koli">Koli</option>
                                            <option value="Kongu Vellala Gounder">Kongu Vellala Gounder</option>
                                            <option value="Konkani">Konkani</option>
                                            <option value="Kori">Kori</option>
                                            <option value="kostha">kostha</option>
                                            <option value="kosthi">kosthi</option>
                                            <option value="Kshatriya">Kshatriya</option>
                                            <option value="Kudumbi">Kudumbi</option>
                                            <option value="Kulal">Kulal</option>
                                            <option value="Kulalar">Kulalar</option>
                                            <option value="Kulita">Kulita</option>
                                            <option value="Kumbhakar">Kumbhakar</option>
                                            
                                            <option value="Kumhar">Kumhar</option>
                                            <option value="Kumawat">Kumawat</option>
                                            <option value="Kummari">Kummari</option>
                                            <option value="Kunbi">Kunbi</option>
                                            <option value="Kurmi Kshatriya">Kurmi Kshatriya</option>
                                            <option value="Kurmi">Kurmi</option>
                                            <option value="Kuruba">Kuruba</option>
                                            <option value="Kuruhina Shetty">Kuruhina Shetty</option>
                                            <option value="Kurumbar">Kurumbar</option>
                                            <option value="Kushwaha">Kushwaha</option>
                                            <option value="Kutchi">Kutchi</option>
                                            <option value="Lambadi">Lambadi</option>
                                            <option value="Leva patel">Leva patel</option>
                                            <option value="Leva patil">Leva patil</option>
                                            <option value="Lingayath">Lingayath</option>
                                            <option value="Lohana">Lohana</option>
                                            <option value="Lubana">Lubana</option>
                                            <option value="Madiga">Madiga</option>
                                            <option value="Mahajan">Mahajan</option>
                                            <option value="Mahar">Mahar</option>
                                            <option value="Mahendra">Mahendra</option>
                                            <option value="Maheshwari">Maheshwari</option>
                                            <option value="Mahishya">Mahishya</option>
                                            <option value="Majabi">Majabi</option>
                                            <option value="Mala">Mala</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malla">Malla</option>
                                            <option value="Mangalorean">Mangalorean</option>
                                            <option value="Manipuri">Manipuri</option>
                                            <option value="Mapila">Mapila</option>
                                            <option value="Maratha">Maratha</option>
                                            <option value="Maruthuvar">Maruthuvar</option>
                                            <option value="Matang">Matang</option>
                                            <option value="Meena">Meena</option>
                                            <option value="Meenavar">Meenavar</option>
                                            <option value="Mehra">Mehra</option>
                                            <option value="Meru Darji">Meru Darji</option>
                                            <option value="Mochi">Mochi</option>
                                            <option value="Modak">Modak</option>
                                            <option value="Mogaveera">Mogaveera</option>
                                            <option value="Mudaliyar">Mudaliyar</option>
                                            <option value="Mudiraj">Mudiraj</option>
                                            <option value="Mukkulathor">Mukkulathor</option>
                                            <option value="Munnuru Kapu">Munnuru Kapu</option>
                                            <option value="Muslim - Ansari">Muslim - Ansari</option>
                                            <option value="Muslim - Arain">Muslim - Arain</option>
                                            <option value="Muslim - Awan">Muslim - Awan</option>
                                            <option value="Muslim - Bohra">Muslim - Bohra</option>
                                            <option value="Muslim - Dekkani">Muslim - Dekkani</option>
                                            <option value="Muslim - Dudekula">Muslim - Dudekula</option>
                                            <option value="Muslim - Hanafi">Muslim - Hanafi</option>
                                            <option value="Muslim - Jat">Muslim - Jat</option>
                                            <option value="Muslim - Khoja">Muslim - Khoja</option>
                                            <option value="Muslim - Lebbai">Muslim - Lebbai</option>
                                            <option value="Muslim - Malik">Muslim - Malik</option>
                                            <option value="Muslim - Mapila">Muslim - Mapila</option>
                                            <option value="Muslim - Maraicar">Muslim - Maraicar</option>
                                            <option value="Muslim - Memon">Muslim - Memon</option>
                                            <option value="Muslim - Mughal">Muslim - Mughal</option>
                                            <option value="Muslim - Others">Muslim - Others</option>
                                            <option value="Muslim - Pathan">Muslim - Pathan</option>
                                            <option value="Muslim - Qureshi">Muslim - Qureshi</option>
                                            <option value="Muslim - Rajput">Muslim - Rajput</option>
                                            <option value="Muslim - Rowther">Muslim - Rowther</option>
                                            <option value="Muslim - Shafi">Muslim - Shafi</option>
                                            <option value="Muslim - Sheikh">Muslim - Sheikh</option>
                                            <option value="Muslim - Siddiqui">Muslim - Siddiqui</option>
                                            <option value="Muslim - Syed">Muslim - Syed</option>
                                            <option value="Muslim - UnSpecified">Muslim - UnSpecified</option>
                                            <option value="Muthuraja">Muthuraja</option>
                                            <option value="Nadar">Nadar</option>
                                            <option value="Nai">Nai</option>
                                            <option value="Naicker">Naicker</option>
                                            <option value="Naidu">Naidu</option>
                                            <option value="Naik">Naik</option>
                                            <option value="Nair">Nair</option>
                                            <option value="Namosudra">Namosudra</option>
                                            <option value="Napit">Napit</option>
                                            <option value="Nayaka">Nayaka</option>
                                            <option value="Nepali">Nepali</option>
                                            <option value="Nhavi">Nhavi</option>
                                            <option value="Oswal">Oswal</option>
                                            <option value="Other">Other</option>
                                            <option value="Padmasali">Padmasali</option>
                                            <option value="Pal">Pal</option>
                                            <option value="Panchal">Panchal</option>
                                            <option value="Panicker">Panicker</option>
                                            <option value="Parkava Kulam">Parkava Kulam</option>
                                            <option value="Parsi">Parsi</option>
                                            <option value="Pasi">Pasi</option>
                                            <option value="Patel">Patel</option>
                                            <option value="Patnaick">Patnaick</option>
                                            <option value="Patra">Patra</option>
                                            <option value="Pillai">Pillai</option>
                                            <option value="Porwal">Porwal</option>
                                            
                                            <option value="Rajaka">Rajaka</option>
                                            <option value="Rajastani">Rajastani</option>
                                            <option value="Rajbonshi">Rajbonshi</option>
                                            <option value="Rajput">Rajput</option>
                                            <option value="Ramdasia">Ramdasia</option>
                                            <option value="Ramgariah">Ramgariah</option>
                                            <option value="Ravidasia">Ravidasia</option>
                                            <option value="Rawat">Rawat</option>
                                            <option value="Reddy">Reddy</option>
                                            <option value="Sadgope">Sadgope</option>
                                            <option value="Saha">Saha</option>
                                            <option value="Sahu">Sahu</option>
                                            <option value="Saini">Saini</option>
                                            <option value="Saliya">Saliya</option>
                                            <option value="SC">SC</option>
                                            <option value="Senai Thalaivar">Senai Thalaivar</option>
                                            <option value="Settibalija">Settibalija</option>
                                            <option value="Shetty">Shetty</option>
                                            <option value="Shimpi">Shimpi</option>
                                            <option value="Sikh - Ahluwalia">Sikh - Ahluwalia</option>
                                            <option value="Sikh - Arora">Sikh - Arora</option>
                                            <option value="Sikh - Bhatia">Sikh - Bhatia</option>
                                            <option value="Sikh - Ghumar">Sikh - Ghumar</option>
                                            <option value="Sikh - Intercaste">Sikh - Intercaste</option>
                                            <option value="Sikh - Jat">Sikh - Jat</option>
                                            <option value="Sikh - Kamboj">Sikh - Kamboj</option>
                                            <option value="Sikh - Khatri">Sikh - Khatri</option>
                                            <option value="Sikh - Kshatriya">Sikh - Kshatriya</option>
                                            <option value="Sikh - Lubana">Sikh - Lubana</option>
                                            <option value="Sikh - Majabi">Sikh - Majabi</option>
                                            <option value="Sikh - No Bar">Sikh - No Bar</option>
                                            <option value="Sikh - Others">Sikh - Others</option>
                                            <option value="Sikh - Rajput">Sikh - Rajput</option>
                                            <option value="Sikh - Ramdasia">Sikh - Ramdasia</option>
                                            <option value="Sikh - Ramgharia">Sikh - Ramgharia</option>
                                            <option value="Sikh - Saini">Sikh - Saini</option>
                                            <option value="Sikh - Unspecified">Sikh - Unspecified</option>
                                            <option value="Sindhi">Sindhi</option>
                                            <option value="Sindhi-Amil">Sindhi-Amil</option>
                                            <option value="Sindhi-Baibhand">Sindhi-Baibhand</option>
                                            <option value="Sindhi-Bhanusali">Sindhi-Bhanusali</option>
                                            <option value="Sindhi-Bhatia">Sindhi-Bhatia</option>
                                            <option value="Sindhi-Chhapru">Sindhi-Chhapru</option>
                                            <option value="Sindhi-Dadu">Sindhi-Dadu</option>
                                            <option value="Sindhi-Hyderabadi">Sindhi-Hyderabadi</option>
                                            <option value="Sindhi-Larai">Sindhi-Larai</option>
                                            <option value="Sindhi-Larkana">Sindhi-Larkana</option>
                                            <option value="Sindhi-Lohana">Sindhi-Lohana</option>
                                            <option value="Sindhi-Rohiri">Sindhi-Rohiri</option>
                                            <option value="Sindhi-Sahiti">Sindhi-Sahiti</option>
                                            <option value="Sindhi-Sakkhar">Sindhi-Sakkhar</option>
                                            <option value="Sindhi-Sehwani">Sindhi-Sehwani</option>
                                            <option value="Sindhi-Shikarpuri">Sindhi-Shikarpuri</option>
                                            <option value="Sindhi-Thatai">Sindhi-Thatai</option>
                                            <option value="SKP">SKP</option>
                                            <option value="Sonar">Sonar</option>
                                            <option value="Soni">Soni</option>
                                            <option value="Sourashtra">Sourashtra</option>
                                            <option value="ST">ST</option>
                                            <option value="Sundhi">Sundhi</option>
                                            <option value="Suthar">Suthar</option>
                                            <option value="Swakula Sali">Swakula Sali</option>
                                            <option value="Tamboli">Tamboli</option>
                                            <option value="Tanti">Tanti</option>
                                            <option value="Tantubai">Tantubai</option>
                                            <option value="Telaga">Telaga</option>
                                            <option value="Teli">Teli</option>
                                            <option value="Thakkar">Thakkar</option>
                                            <option value="Thakur">Thakur</option>
                                            <option value="Thigala">Thigala</option>
                                            <option value="Thiyya">Thiyya</option>
                                            <option value="Tili">Tili</option>
                                            <option value="Uppara">Uppara</option>
                                            <option value="Vaddera">Vaddera</option>
                                            <option value="Vaish">Vaish</option>
                                            <option value="Vaishnav">Vaishnav</option>
                                            <option value="Vaishnava">Vaishnava</option>
                                            <option value="Vaishya">Vaishya</option>
                                            <option value="Vaishya Vani">Vaishya Vani</option>
                                            <option value="Valmiki">Valmiki</option>
                                            <option value="Vania">Vania</option>
                                            <option value="Vaniya">Vaniya</option>
                                            <option value="Vanjara">Vanjara</option>
                                            <option value="Vanjari">Vanjari</option>
                                            <option value="Vankar">Vankar</option>
                                            <option value="Vannar">Vannar</option>
                                            <option value="Vannia Kula Kshatriyar">Vannia Kula Kshatriyar</option>
                                            <option value="Veera Saivam">Veera Saivam</option>
                                            <option value="Velama">Velama</option>
                                            <option value="Vellalar">Vellalar</option>
                                            <option value="Veluthedathu Nair">Veluthedathu Nair</option>
                                            <option value="Vilakkithala Nair">Vilakkithala Nair</option>
                                            <option value="Vishwabrahmin">Vishwabrahmin</option>
                                            <option value="Vishwakarma">Vishwakarma</option>
                                            <option value="Vokkaliga">Vokkaliga</option>
                                            <option value="Vysya">Vysya</option>
                                            <option value="Yadav">Yadav</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="update_profile_row row">
                                    <div class="col-sm-6">
                                        <div class="textbox_containner">

                                            <input type="text" editable="false" name="subcaste" autocomplete="off"
                                                   class="animate_txt" id="subcaste" placeholder="Subcast"
                                                   value="{{$user->subcaste}}">
                                            <label class="animate_placeholder" for="Subcast">Subcaste</label>
                                        </div>
                                    </div>
                                    {{--<div class="col-sm-6">--}}

                                        {{--<!--  <input type="Weight" editable="false" name="Weight" autocomplete="off" class="animate_txt" id="Weight" placeholder="Weight" value="Weight">-->--}}
                                        {{--<select id="Manglik" name="manglik" class="form-control drop_edit">--}}
                                            {{--<option {{$user->manglik == 'Yes' ? 'selected':''}} value="Yes">Manglik</option>--}}
                                            {{--<option {{$user->manglik == 'No' ? 'selected':''}} value="No">Non Manglik</option>--}}
                                            {{--<option {{$user->manglik == "Don't Know" ? 'selected' : '' }} value="Don't Know">Don't Know</option>--}}
                                        {{--</select>--}}


                                    {{--</div>--}}
                                    
                                    
                                    <div class="col-sm-6">
                                        <div class="textbox_containner">

                                            <input type="text" editable="false" name="address" autocomplete="off"
                                                   class="animate_txt" id="address" placeholder="address"
                                                   value="{{$user->address}}">
                                            <label class="animate_placeholder" for="address">address</label> 
                                        </div>
                                    </div>
                                </div>
                                <div class="update_profile_row row">
                                    <div class="col-sm-6">
                                        <select id="physical" name="physical" class="form-control drop_edit">
                                            <option selected
                                                    value="{{$user->physical}}">{{$user->physical!='Not mentioned'?$user->physical:'Physical Status'}}</option>
                                            <option value="Normal">Normal</option>
                                            <option value="Physically Challenged">Physically Challenged</option>

                                        </select>
                                    </div>
                                   
                                </div>
                                <div class="update_profile_row row">
                                    <div class="col-sm-6">
                                        <select name="Marital_Status" id="marital_Status"
                                                class="form-control drop_edit">
                                            <option {{$user->status == "Never married"?'selected':''}} value="Never married">
                                                Never married
                                            </option>
                                            <option {{$user->status == "Divorced"?'selected':''}} value="Divorced">
                                                Divorced
                                            </option>
                                            <option {{$user->status == "Separated"?'selected':''}} value="Separated">
                                                Separated
                                            </option>
                                            <option {{$user->status == "Widowed"?'selected':''}} value="Widowed">
                                                Widowed
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="gender" class="form-control drop_edit">
                                            <option value="male" {{$user->gender=='male'?'selected':''}}>Male</option>
                                            <option value="female" {{$user->gender=='female'?'selected':''}}>Female
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="update_profile_row row">
                                    @php
                                        $states =  \Illuminate\Support\Facades\DB::select("SELECT DISTINCT state FROM `statelist`");
                                     $cities =  \Illuminate\Support\Facades\DB::table('statelist')->distinct('state')->get();
                                    @endphp
                                    <div class="col-sm-6">
                                        <select name="state" class="form-control txt_wizard drop_edit" id="state">
                                            <option value="">Select State</option>
                                            @foreach($states as $state)
                                                <option {{$user->state==$state->state?'selected':''}} value="{{$state->state}}">{{$state->state}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="col-sm-6">
                                        {{--<select name="city" class="form-control requiredDD txt_wizard drop_edit"--}}
                                        {{--id="city">--}}
                                        {{--<option value="">Select City</option>--}}
                                        {{--@foreach($cities as $city)--}}
                                        {{--<option {{$user->city_name==$city->city_name?'selected':''}} value="{{$city->city_name}}">{{$city->city_name}}</option>--}}
                                        {{--@endforeach--}}
                                        {{--</select>--}}

                                        <div class="textbox_containner">
                                            <input type="text" name="city" autocomplete="off" class="animate_txt"
                                                   id="city" placeholder="Enter City"
                                                   value="{{$user->city}}"/>
                                            <label class="animate_placeholder" for="city">City</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row update_profile_row">

                                    <div class="col-sm-6">
                                        <select name="rashi" id="rashi1" class="form-control txt_wizard drop_edit">
                                            <option selected
                                                    value="{{$user->rashi}}">{{$user->rashi!=''?$user->rashi:'Select Rashi'}}</option>
                                            <option value="Dhanu (Sagittarius)">Dhanu (Sagittarius)</option>
                                            <option value="Kanya (Virgo)">Kanya (Virgo)</option>
                                            <option value="Kark (Cancer)">Kark (Cancer)</option>
                                            <option value="Kumbh (Aquarius)">Kumbh (Aquarius)</option>
                                            <option value="Makar (Capricorn)">Makar (Capricorn)</option>
                                            <option value="Meen (Pisces)">Meen (Pisces)</option>
                                            <option value="Mesh (Aries)">Mesh (Aries)</option>
                                            <option value="Mithun (Gemini)">Mithun (Gemini)</option>
                                            <option value="Simha (Leo)">Simha (Leo)</option>
                                            <option value="Tula (Libra)">Tula (Libra)</option>
                                            <option value="Vrishabh (Taurus)">Vrishabh (Taurus)</option>
                                            <option value="Vrishchik (Scorpio)">Vrishchik (Scorpio)</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="star" class="form-control txt_wizard drop_edit" id="star1">
                                            <option selected
                                                    value="{{$user->star}}">{{$user->star!=''?$user->star:'Select star'}}</option>

                                            <option value="Anuradha / Anusham / Anizham">Anuradha / Anusham / Anizham
                                            </option>
                                            <option value="Ardra / Thiruvathira">Ardra / Thiruvathira</option>
                                            <option value="Ashlesha / Ayilyam">Ashlesha / Ayilyam</option>
                                            <option value="Ashwini / Ashwathi">Ashwini / Ashwathi</option>
                                            <option value="Bharani">Bharani</option>
                                            <option value="Chitra / Chitha">Chitra / Chitha</option>
                                            <option value="Dhanista / Avittam">Dhanista / Avittam</option>
                                            <option value="Hastha / Atham">Hastha / Atham</option>
                                            <option value="Jyesta / Kettai">Jyesta / Kettai</option>
                                            <option value="Krithika / Karthika">Krithika / Karthika</option>
                                            <option value="Makha / Magam">Makha / Magam</option>
                                            <option value="Moolam / Moola">Moolam / Moola</option>
                                            <option value="Mrigasira / Makayiram">Mrigasira / Makayiram</option>
                                            <option value="Poorvabadrapada / Puratathi">Poorvabadrapada / Puratathi
                                            </option>
                                            <option value="Poorvapalguni / Puram ">Poorvapalguni / Puram / Pubbhe
                                            </option>
                                            <option value="Poorvashada / Pooradam">Poorvashada / Pooradam</option>
                                            <option value="Punarvasu / Punarpusam">Punarvasu / Punarpusam</option>
                                            <option value="Pushya / Poosam / Pooyam ">Pushya / Poosam / Pooyam</option>
                                            <option value="Revathi">Revathi</option>
                                            <option value="Rohini">Rohini</option>
                                            <option value="Shatataraka / Sadayam / Satabishek">Shatataraka / Sadayam /
                                                Satabishek
                                            </option>
                                            <option value="Shravan / Thiruvonam">Shravan / Thiruvonam</option>
                                            <option value="Swati / Chothi">Swati / Chothi</option>
                                            <option value="Uttarabadrapada / Uthratadhi">Uttarabadrapada / Uthratadhi
                                            </option>
                                            <option value="Uttarapalguni / Uthram">Uttarapalguni / Uthram</option>
                                            <option value="Uttarashada / Uthradam">Uttarashada / Uthradam</option>
                                            <option value="Vishaka / Vishakam">Vishaka / Vishakam</option>
                                        </select>

                                    </div>

                                </div>
                                <div class="row update_profile_row">
                                    <div class="col-sm-12">
                                        <label class="animate_placeholder" for="about_me" style="font-size: 14px;">About
                                            me</label>

                                        <textarea type="text" editable="false" name="about_me"
                                                  autocomplete="off"
                                                  class="editable_txt" id="about_me"
                                                  placeholder="Express Yourself" rows="3">{{$user->about_me}}</textarea>


                                    </div>
                                </div>
                                {{--<div class="row update_profile_row">--}}
                                {{--<div class="col-sm-6">--}}
                                {{--<select name="gender" class="form-control requiredDD txt_wizard drop_edit">--}}
                                {{--<option value="male">Male</option>--}}
                                {{--<option value="female">Female</option>--}}
                                {{--</select>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                <div class="submit_btnbox row">
                                    <div class="after_editable_btnbox">
                                        <button type="button"
                                                class="btn btn-primary btn-sm center_btnmargin search_filter"
                                                id="btn_Update_profile"><i
                                                    class="mdi mdi-account-check basic_icon_margin"></i>Update Profile
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm" id="btn_Edit_profile2"
                                                onclick="AddEditable(this);"><i
                                                    class="mdi mdi-close basic_icon_margin"></i>Cancel
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-success btn-sm" id="btn_Edit_profile3"
                                            onclick="RemoveEditable(this);"><i
                                                class="mdi mdi-account-edit basic_icon_margin"></i>Edit Profile
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="updated_box ">
                            <div class="top_heading_box">
                                <span class="heading_txt">Education & Profession</span>
                                <span class="collapse_btnbox pull-right">
                                <i class="mdi mdi-plus" onclick="Collapsebtn(this);"></i>
                            </span>
                            </div>
                            <div class="update_databox editable_false">

                                <div class="row update_profile_row">
                                    <div class="col-sm-6">
                                        {{--<input type="text" editable="false" name="highest_degree" autocomplete="off"--}}
                                        {{--class="animate_txt id=" placeholder="Highest Degree">--}}
                                        {{--<label class="animate_placeholder" for="highest_degree">Highest--}}
                                        {{--Degree</label>--}}
                                        <select name="education" class="form-control txt_wizard drop_edit"
                                                id="highest_degree">
                                            <option selected="selected" value="">Select Highest Education</option>
                                            <OPTION VALUE='10+2/Senior Secondary School'>10+2/Senior Secondary School
                                            </Option>
                                            <OPTION VALUE='CA'>CA</Option>
                                            <OPTION VALUE='CS'>CS</Option>
                                            <OPTION VALUE='Diploma'>Diploma</Option>
                                            <OPTION VALUE='ICWA'>ICWA</Option>
                                            <OPTION VALUE='PhD'>PhD</Option>
                                            <OPTION VALUE='Bachelors - Engineering/ Computers'>Bachelors - Engineering/
                                                Computers
                                            </Option>
                                            <OPTION VALUE='Masters - Engineering/ Computers'>Masters - Engineering/
                                                Computers
                                            </Option>
                                            <OPTION VALUE='Bachelors - Arts/ Science/ Commerce/ Others'>Bachelors -
                                                Arts/
                                                Science/ Commerce/ Others
                                            </Option>
                                            <OPTION VALUE='Masters - Arts/ Science/ Commerce/ Others'>Masters - Arts/
                                                Science/ Commerce/ Others
                                            </Option>
                                            <OPTION VALUE='Management - BBA/ MBA/ Others'>Management - BBA/ MBA/ Others
                                            </Option>
                                            <OPTION VALUE='Medicine - General/ Dental/ Surgeon/ Others'>Medicine -
                                                General/
                                                Dental/ Surgeon/ Others
                                            </Option>
                                            <OPTION VALUE='Legal - BL/ ML/ LLB/ LLM/ Others'>Legal - BL/ ML/ LLB/ LLM/
                                                Others
                                            </Option>
                                            <OPTION VALUE='Service - IAS/ IPS/ Others'>Service - IAS/ IPS/ Others
                                            </Option>
                                            <OPTION VALUE='Higher Secondary/ Secondary'>Higher Secondary/ Secondary
                                            </Option>
                                            <OPTION VALUE='Others'>Others</Option>
                                            <OPTION VALUE='Medicine - General/ Dental/ Surgeon/Engineering/CA/ Others'>
                                                Medicine - General/ Dental/ Surgeon/Engineering/CA/ Others
                                            </Option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="textbox_containner">
                                            <input type="text" editable="false" name="college_name" autocomplete="off"
                                                   class="animate_txt " id="college_name"
                                                   placeholder="College Name" value="{{$user->college_name}}">
                                            <label class="animate_placeholder" for="college_name">College Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row update_profile_row">
                                    <div class="col-sm-6">
                                        {{--<div class="textbox_containner">--}}
                                        {{--<input type="text" editable="false" name="education_detail" autocomplete="off"--}}
                                        {{--class="animate_txt " id="education_detail"--}}
                                        {{--placeholder="Education detail" value="{{$user->education_detail}}">--}}
                                        {{--<label class="animate_placeholder" for="college_name">Education Detail</label>--}}
                                        {{--</div>--}}
                                        <label class="animate_placeholder" for="occupation_detail">Education
                                            Details</label>
                                        <textarea type="text" editable="false" name="education_detail"
                                                  autocomplete="off"
                                                  class="editable_txt" id="education_detail"
                                                  placeholder="Occupation Details"
                                                  rows="3">{{$user->education_detail}}</textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="textbox_containner">
                                            <input type="text" editable="false" name="occ_location" autocomplete="off"
                                                   class="animate_txt " id="occ_location"
                                                   placeholder="Occupation Location" value="">
                                            <label class="animate_placeholder" for="college_name">Occupation
                                                Location</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row update_profile_row">
                                    <div class="col-sm-6">


                                        <select name="occupation" id="occupation"
                                                class="form-control txt_wizard drop_edit">
                                            <option selected="selected" value="">Select Occupation</option>
                                            <OPTION VALUE = 'Accounts/Finance Professional '>Accounts/Finance Professional </Option>
 <OPTION VALUE = 'Administrative Professional '>Administrative Professional </Option>
 <OPTION VALUE = 'Advertising / PR Professional '>Advertising / PR Professional </Option>
 <OPTION VALUE = 'Agriculture &amp; Farming Professional '>Agriculture &amp; Farming Professional </Option>
 <OPTION VALUE = 'Air Hostess '>Air Hostess </Option><OPTION VALUE = 'Airforce'>Airforce</Option>
 <OPTION VALUE = 'Airline Professional '>Airline Professional </Option>
 <OPTION VALUE = 'Architect '>Architect </Option>
 <OPTION VALUE = 'Army'>Army</Option>
 <OPTION VALUE = 'Arts &amp; Craftsman '>Arts &amp; Craftsman </Option>
 <OPTION VALUE = 'Auditor '>Auditor </Option>
 <OPTION VALUE = 'Banking Service Professional '>Banking Service Professional </Option>
 <OPTION VALUE = 'Beautician '>Beautician </Option>
 <OPTION VALUE = 'BPO/ Call Centre/ ITES/ Telecalling'>BPO/ Call Centre/ ITES/ Telecalling</Option>
 <OPTION VALUE = 'Business '>Business </Option>
 <OPTION VALUE = 'Chartered Accountant '>Chartered Accountant </Option>
 <OPTION VALUE = 'Clerk '>Clerk </Option>
 <OPTION VALUE = 'Company Secretary '>Company Secretary </Option>
 <OPTION VALUE = 'Consultant '>Consultant </Option>
 <OPTION VALUE = 'Corporate Planning/ Consulting '>Corporate Planning/ Consulting </Option>
 <OPTION VALUE = 'Customer Care Professional '>Customer Care Professional </Option>
 <OPTION VALUE = 'CXO / President, Director, Chairman '>CXO / President, Director, Chairman </Option>
 <OPTION VALUE = 'Dentist '>Dentist </Option>
 <OPTION VALUE = 'dermatologist'>dermatologist</Option>
 <OPTION VALUE = 'Doctor '>Doctor </Option>
 <OPTION VALUE = 'Education Professional '>Education Professional </Option>
 <OPTION VALUE = 'Engineer - Non IT '>Engineer - Non IT </Option>
 <OPTION VALUE = 'Entertainment Professional '>Entertainment Professional </Option>
 <OPTION VALUE = 'Event Management Professional '>Event Management Professional </Option>
 <OPTION VALUE = 'Executive '>Executive </Option>
 <OPTION VALUE = 'Fashion Designer '>Fashion Designer </Option>
 <OPTION VALUE = 'Front Office/ Secretarial Staff/ Export/ Import'>Front Office/ Secretarial Staff/ Export/ Import</Option>
 <OPTION VALUE = 'Graphic Designer '>Graphic Designer </Option>
 <OPTION VALUE = 'Government Service'>Government Service</Option>
 <OPTION VALUE = 'Hardware Professional '>Hardware Professional </Option>
 <OPTION VALUE = 'Health Care Professional '>Health Care Professional </Option>
 <OPTION VALUE = 'Hotel / Hospitality Professional '>Hotel / Hospitality Professional </Option>
 <OPTION VALUE = 'HR/ Admin/ PM/ IR/ Training '>HR/ Admin/ PM/ IR/ Training </Option>
 <OPTION VALUE = 'IAS/IES/IFS/IPS/Others'>IAS/IES/IFS/IPS/Others</Option>
 <OPTION VALUE = 'Interior Designer '>Interior Designer </Option>
 <OPTION VALUE = 'Journalist '>Journalist </Option>
 <OPTION VALUE = 'Lawyer &amp; Legal Professional '>Lawyer &amp; Legal Professional </Option>
 <OPTION VALUE = 'Logistics/ Purchase/ SCM '>Logistics/ Purchase/ SCM </Option>
 <OPTION VALUE = 'Manager '>Manager </Option>
 <OPTION VALUE = 'Mariner / Merchant Navy '>Mariner / Merchant Navy </Option>
 <OPTION VALUE = 'Marketing Professional '>Marketing Professional </Option>
 <OPTION VALUE = 'Media Professional '>Media Professional </Option>
 <OPTION VALUE = 'Navy'>Navy</Option>
 <OPTION VALUE = 'Not Working'>Not Working</Option>
 <OPTION VALUE = 'Nurse '>Nurse </Option>
 <OPTION VALUE = 'Officer '>Officer </Option>
 <OPTION VALUE = 'Others '>Others </Option>
 <OPTION VALUE = 'Paramedical Professional '>Paramedical Professional </Option>
 <OPTION VALUE = 'Pilot '>Pilot </Option>
 <OPTION VALUE = 'Private Service '>Private Service </Option>
 <OPTION VALUE = 'Production/ Maintenance/ Service Engg. '>Production/ Maintenance/ Service Engg. </Option>
 <OPTION VALUE = 'Professor / Lecturer '>Professor / Lecturer </Option>
 <OPTION VALUE = 'Sales Professional '>Sales Professional </Option>
 <OPTION VALUE = 'Scientist / Researcher '>Scientist / Researcher </Option>
 <OPTION VALUE = 'Social Worker '>Social Worker </Option>
 <OPTION VALUE = 'Software Professional '>Software Professional </Option>
 <OPTION VALUE = 'Sportsman '>Sportsman </Option>
 <OPTION VALUE = 'Supervisors '>Supervisors </Option>
 <OPTION VALUE = 'Teaching / Academician '>Teaching / Academician </Option>
 <OPTION VALUE = 'Technician '>Technician </Option>
 <OPTION VALUE = 'Unemployed'>Unemployed</Option>
                                        </select>

                                    </div>

                                    <div class="col-sm-6">
                                        <select name="anual_income" id="anual_income"
                                                class="form-control requiredDD drop_edit txt_wizard">
                                            <option selected
                                                    value="{{$user->salary}}">{{$user->salary!=''?$user->salary:'Anual Income'}}</option>
                                            <option>Nill</option>
                                            <option>Under Rs.50,000</option>
                                            <option>Rs.50,001 - 1,00,000</option>
                                            <option>Rs.1,00,001 - 1,50,000</option>
                                            <option>Rs.1,50,001 - 2,00,000</option>
                                            <option>Rs.2,00,001 - 2,50,000</option>
                                            <option>Rs.2,50,001 - 3,00,000</option>
                                            <option>Rs.3,00,001 - 5,00,000</option>
                                            <option>Rs.5,00,001 - 7,00,000</option>
                                            <option>Rs.7,00,001 - 10,00,000</option>
                                            <option>Rs.10,00,001 - 15,00,000</option>
                                            <option>Rs.15,00,001 - 20,00,000</option>
                                            <option>Rs.20,00,001 - 25,00,000</option>
                                            <option>Rs.25,00,001 - 50,00,000</option>
                                            <option>Rs.50,00,001 - 75,00,000</option>
                                            <option>Rs.75,00,001 - 100,00,000</option>
                                            <option>Rs.100,00,001 and above</option>
                                            <option>Under $25,000</option>
                                            <option>$25,001 - 50,000</option>
                                            <option>$50,001 - 75,000</option>
                                            <option>$75,001 - 100,000</option>
                                            <option>$100,001 - 150,000</option>
                                            <option>$150,001 - 200,000</option>
                                            <option>$200,001 and above</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="row update_profile_row">
                                    <div class="col-sm-6">
                                        {{--<div class="textbox_containner">--}}
                                        {{--<input type="text" editable="false" name="occupation" autocomplete="off"--}}
                                        {{--class="animate_txt " id="occupation"--}}
                                        {{--placeholder="Occupation" value="{{$user->occupation}}">--}}
                                        {{--<label class="animate_placeholder" for="occupation">Occupation</label>--}}
                                        {{--</div>--}}
                                        <label class="animate_placeholder" for="occupation_detail">Occupation
                                            Details</label>
                                        <textarea type="text" editable="false" name="occupation_detail"
                                                  autocomplete="off"
                                                  class="editable_txt" id="occupation_detail"
                                                  placeholder="Occupation Details"
                                                  rows="3">{{$user->occupation_detail}}</textarea>

                                    </div>
                                    <div class="col-sm-6">
                                        {{--<div class="textbox_containner">--}}
                                        {{--<input type="text" editable="false" name="education_detail" autocomplete="off"--}}
                                        {{--class="animate_txt " id="education_detail"--}}
                                        {{--placeholder="Education Detail" value="{{$user->education_detail}}">--}}
                                        {{--<label class="animate_placeholder" for="Education Detail">Education Detail</label>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>


                                <div class="submit_btnbox row">
                                    <div class="after_editable_btnbox">
                                        <button type="button"
                                                class="btn btn-primary btn-sm center_btnmargin search_filter"
                                                id="btn_Update_profile"><i
                                                    class="mdi mdi-account-check basic_icon_margin"></i>Update Profile
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm" id="btn_Edit_profile3"
                                                onclick="AddEditable(this);"><i
                                                    class="mdi mdi-close basic_icon_margin"></i>Cancel
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-success btn-sm" id="btn_Edit_profile4"
                                            onclick="RemoveEditable(this);"><i
                                                class="mdi mdi-account-edit basic_icon_margin"></i>Edit Profile
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div class="updated_box ">
                            <div class="top_heading_box">
                                <span class="heading_txt">Family Details</span>
                                <span class="collapse_btnbox pull-right">
                                <i class="mdi mdi-plus" onclick="Collapsebtn(this);"></i>
                            </span>
                            </div>
                            <div class="update_databox editable_false">

                                <div class="row update_profile_row">
                                    <div class="col-sm-6">
                                        <select name="f_type" class="form-control txt_wizard drop_edit">
                                            <option {{$user->f_type == 'Joint' ? 'selected' :''}} value="Joint">JOINT</option>
                                            <option {{$user->f_type == 'Nuclear' ? 'selected' :''}} value="Nuclear">NUCLEAR</option>
                                            <option {{$user->f_type == 'Other' ? 'selected' :''}} value="Other">OTHER</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="f_status" class="form-control requiredDD txt_wizard drop_edit">
                                            <option {{$user->f_status == 'Rich' ? 'selected':''}} value="Rich">RICH</option>
                                            <option {{$user->f_status == 'Upper middle class' ? 'selected':''}} value="Upper middle class">UPPER MIDDLE</option>
                                            <option {{$user->f_status == 'Middle class' ? 'selected':''}} value="Middle class">MIDDLE</option>
                                        </select>


                                    </div>
                                </div>
                                <div class="row update_profile_row">
                                    <div class="col-sm-6">
                                        <select name="f_values" class="form-control txt_wizard drop_edit">

                                            <option {{$user->f_values == 'Orthodox' ? 'selected' : ''}} value="Orthodox">ORTHODOX</option>
                                            <option {{$user->f_values == 'Traditional' ? 'selected' : ''}} value="Traditional">TRADITIONAL</option>
                                            <option {{$user->f_values == 'Moderate' ? 'selected' : ''}} value="Moderate">MODERATE</option>
                                            <option {{$user->f_values == 'Liberal' ? 'selected' : ''}} value="Liberal">LIBERAL</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="row update_profile_row">
                                    <div class="col-sm-6">

                                        <label class="animate_placeholder" for="occupation" style="font-size: 14px;">Father
                                            Occupation</label>
                                        <textarea type="text" editable="false" name="father_occupation"
                                                  autocomplete="off"
                                                  class="editable_txt " id="father_occupation"
                                                  placeholder="Father Occupation"
                                                  rows="3">{{$user->father_occupation}}</textarea>


                                    </div>
                                    <div class="col-sm-6">

                                        <label class="animate_placeholder" for="occupation" style="font-size: 14px;">Mother
                                            Occupation</label>
                                        <textarea type="text" editable="false" name="mother_occupation"
                                                  autocomplete="off"
                                                  class="editable_txt" id="mother_occupation"
                                                  placeholder="Mother Occupation"
                                                  rows="3">{{$user->mother_occupation}}</textarea>

                                    </div>
                                </div>
                                <div class="row update_profile_row">
                                    <div class="col-sm-6">
                                        <select id="brothers" class="form-control txt_wizard drop_edit" name="brothers">
                                            <option value="0" selected="selected">No of Brothers</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value=">4">More than 4</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <select id="bro_married" class="form-control txt_wizard drop_edit"
                                                name="bro_married">
                                            <option value="0" selected="selected">No of Married Brothers</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value=">4">More than 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row update_profile_row">
                                    <div class="col-sm-6">
                                        <select id="sisters" class="form-control txt_wizard drop_edit" name="sisters">
                                            <option value="0" selected="selected">No of Sisters</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value=">4">More than 4</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <select id="married_sister" class="form-control txt_wizard drop_edit"
                                                name="married_sister">
                                            <option value="0" selected="selected">No of Married Sister</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value=">4">More than 4</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row update_profile_row">
                                    <div class="col-sm-6">
                                        <div class="textbox_containner">
                                            <input type="text" editable="false" name="gotra" autocomplete="off"
                                                   class="animate_txt " id="gotra"
                                                   placeholder="Gotra">
                                            <label class="animate_placeholder" for="gotra">Gotra</label>
                                        </div>
                                    </div>
                                    {{--<div class="col-sm-6">--}}
                                    {{--<div class="textbox_containner">--}}
                                    {{--<input type="text" editable="false" name="father_side_gotra"--}}
                                    {{--autocomplete="off"--}}
                                    {{--class="animate_txt "--}}
                                    {{--id="father_side_gotra"--}}
                                    {{--placeholder="Father side gotra" value="{{$user->father_side_gotra}}">--}}
                                    {{--<label class="animate_placeholder" for="father_side_gotra">Meternal side--}}
                                    {{--gotra</label>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="col-sm-6">
                                        <div class="textbox_containner">
                                            <input type="text" editable="false" name="mother_side_gotra"
                                                   autocomplete="off"
                                                   class="animate_txt "
                                                   id="mother_side_gotra"
                                                   placeholder="Metarnal side gotra"
                                                   value="{{$user->mother_side_gotra}}">
                                            <label class="animate_placeholder" for="mother_side_gotra">Metarnal side
                                                gotra</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row update_profile_row">
                                    <div class="col-sm-6">
                                        <select name="family_income" id="family_income"
                                                class="form-control requiredDD drop_edit txt_wizard">
                                            <option selected
                                                    value="{{$user->family_income}}">{{$user->family_income!=''?$user->family_income:'Anual Income'}}</option>
                                            <option>Nill</option>
                                            <option>Under Rs.50,000</option>
                                            <option>Rs.50,001 - 1,00,000</option>
                                            <option>Rs.1,00,001 - 1,50,000</option>
                                            <option>Rs.1,50,001 - 2,00,000</option>
                                            <option>Rs.2,00,001 - 2,50,000</option>
                                            <option>Rs.2,50,001 - 3,00,000</option>
                                            <option>Rs.3,00,001 - 5,00,000</option>
                                            <option>Rs.5,00,001 - 7,00,000</option>
                                            <option>Rs.7,00,001 - 10,00,000</option>
                                            <option>Rs.10,00,001 - 15,00,000</option>
                                            <option>Rs.15,00,001 - 20,00,000</option>
                                            <option>Rs.20,00,001 - 25,00,000</option>
                                            <option>Rs.25,00,001 - 50,00,000</option>
                                            <option>Rs.50,00,001 - 75,00,000</option>
                                            <option>Rs.75,00,001 - 100,00,000</option>
                                            <option>Rs.100,00,001 and above</option>
                                            <option>Under $25,000</option>
                                            <option>$25,001 - 50,000</option>
                                            <option>$50,001 - 75,000</option>
                                            <option>$75,001 - 100,000</option>
                                            <option>$100,001 - 150,000</option>
                                            <option>$150,001 - 200,000</option>
                                            <option>$200,001 and above</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <select id="living" class="form-control txt_wizard drop_edit" name="living">
                                            <option value="0" selected="selected">Living</option>
                                            <option value="Living with me">Living with me</option>
                                            <option value="Not living with me">Not living with me</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row update_profile_row">
                                    <div class="col-sm-6">

                                        <label class="animate_placeholder" for="occupation" style="font-size: 14px;">Contact
                                            Address</label>
                                        <textarea type="text" editable="false" name="address" autocomplete="off"
                                                  class="editable_txt" id="address"
                                                  placeholder="Contact Address"
                                                  rows="3">{{$user->address}}</textarea>


                                    </div>
                                    <div class="col-sm-6">

                                        <label class="animate_placeholder" for="occupation" style="font-size: 14px;">About
                                            Family</label>
                                        <textarea type="text" editable="false" name="about_family"
                                                  class="editable_txt" id="about_family" data-placement="About Family"
                                                  placeholder="About Family" rows="3">{{$user->about_family}}</textarea>


                                    </div>
                                </div>

                                <div class="submit_btnbox row">
                                    <div class="after_editable_btnbox">
                                        <button type="button"
                                                class="btn btn-primary btn-sm center_btnmargin search_filter"
                                                id="btn_Update_profile"><i
                                                    class="mdi mdi-account-check basic_icon_margin"></i>Update Profile
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm" id="btn_Edit_profile5"
                                                onclick="AddEditable(this);"><i
                                                    class="mdi mdi-close basic_icon_margin"></i>Cancel
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-success btn-sm" id="btn_Edit_profile6"
                                            onclick="RemoveEditable(this);"><i
                                                class="mdi mdi-account-edit basic_icon_margin"></i>Edit Profile
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="updated_box ">
                            <div class="top_heading_box">
                                <span class="heading_txt">Socio Religious Background</span>
                                <span class="collapse_btnbox pull-right">
                                <i class="mdi mdi-plus" onclick="Collapsebtn(this);"></i>
                            </span>
                            </div>
                            <div class="update_databox editable_false">

                                <div class="row update_profile_row">
                                    <div class="col-sm-6">
                                        <select name="manglik" class="form-control requiredDD drop_edit txt_wizard">
                                            <option {{$user->manglik == 'Yes' ? 'selected':''}} value="Yes">Manglik
                                            </option>
                                            <option {{$user->manglik == 'No' ? 'selected':''}} value="No">Non Manglik
                                            </option>
                                            <option {{$user->manglik == "Don't Know" ? 'selected' : '' }} value="Don't Know">
                                                Don't Know
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="horoscope_match" id="HoroscopeMatch_Partner"
                                                class="form-control requiredDD drop_edit txt_wizard">
                                            <option selected="" value="">Horoscope Match</option>
                                            <option value="1">Must</option>
                                            <option value="0">Not Necessary</option>
                                           {{-- <option value="2">Doesn't Matter</option>--}}
                                        </select>
                                    </div>
                                </div>
                                <div class="row update_profile_row">

                                    <div class="col-sm-6">
                                        <div class="textbox_containner">
                                            <input type="text" editable="false" name="bop" autocomplete="off"
                                                   class="animate_txt " id="bop"
                                                   placeholder="Birth place">
                                            <label class="animate_placeholder" for="bop">Birth place</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="textbox_containner">

                                            <input type="time" name="tob" editable="false" autocomplete="off"
                                                   class="animate_txt " id="tob"
                                                   placeholder="Time of Birth"
                                                   title="Time of Birth" data-toggle="tooltip"
                                                   data-placement="top">
                                            {{--<label class="animate_placeholder" for="tob">Time of Birth</label>--}}

                                        </div>
                                    </div>
                                </div>
                                <div class="row update_profile_row">
                                    <div class="col-sm-6">
                                        <select name="rashi" id="rashi1" class="form-control drop_edit txt_wizard">
                                            <option selected
                                                    value="{{$user->rashi}}">{{$user->rashi!=''?$user->rashi:'Select Rashi'}}</option>
                                            <option>Nill</option>
                                            <option value="Dhanu (Sagittarius)">Dhanu (Sagittarius)</option>
                                            <option value="Kanya (Virgo)">Kanya (Virgo)</option>
                                            <option value="Kark (Cancer)">Kark (Cancer)</option>
                                            <option value="Kumbh (Aquarius)">Kumbh (Aquarius)</option>
                                            <option value="Makar (Capricorn)">Makar (Capricorn)</option>
                                            <option value="Meen (Pisces)">Meen (Pisces)</option>
                                            <option value="Mesh (Aries)">Mesh (Aries)</option>
                                            <option value="Mithun (Gemini)">Mithun (Gemini)</option>
                                            <option value="Simha (Leo)">Simha (Leo)</option>
                                            <option value="Tula (Libra)">Tula (Libra)</option>
                                            <option value="Vrishabh (Taurus)">Vrishabh (Taurus)</option>
                                            <option value="Vrishchik (Scorpio)">Vrishchik (Scorpio)</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="star" class="form-control txt_wizard drop_edit" id="star1">
                                            <option value="">Select Star</option>
                                            <option value="Anuradha / Anusham / Anizham">Anuradha / Anusham / Anizham
                                            </option>
                                            <option value="Ardra / Thiruvathira">Ardra / Thiruvathira</option>
                                            <option value="Ashlesha / Ayilyam">Ashlesha / Ayilyam</option>
                                            <option value="Ashwini / Ashwathi">Ashwini / Ashwathi</option>
                                            <option value="Bharani">Bharani</option>
                                            <option value="Chitra / Chitha">Chitra / Chitha</option>
                                            <option value="Dhanista / Avittam">Dhanista / Avittam</option>
                                            <option value="Hastha / Atham">Hastha / Atham</option>
                                            <option value="Jyesta / Kettai">Jyesta / Kettai</option>
                                            <option value="Krithika / Karthika">Krithika / Karthika</option>
                                            <option value="Makha / Magam">Makha / Magam</option>
                                            <option value="Moolam / Moola">Moolam / Moola</option>
                                            <option value="Mrigasira / Makayiram">Mrigasira / Makayiram</option>
                                            <option value="Poorvabadrapada / Puratathi">Poorvabadrapada / Puratathi
                                            </option>
                                            <option value="Poorvapalguni / Puram ">Poorvapalguni / Puram / Pubbhe
                                            </option>
                                            <option value="Poorvashada / Pooradam">Poorvashada / Pooradam</option>
                                            <option value="Punarvasu / Punarpusam">Punarvasu / Punarpusam</option>
                                            <option value="Pushya / Poosam / Pooyam ">Pushya / Poosam / Pooyam</option>
                                            <option value="Revathi">Revathi</option>
                                            <option value="Rohini">Rohini</option>
                                            <option value="Shatataraka / Sadayam / Satabishek">Shatataraka / Sadayam /
                                                Satabishek
                                            </option>
                                            <option value="Shravan / Thiruvonam">Shravan / Thiruvonam</option>
                                            <option value="Swati / Chothi">Swati / Chothi</option>
                                            <option value="Uttarabadrapada / Uthratadhi">Uttarabadrapada / Uthratadhi
                                            </option>
                                            <option value="Uttarapalguni / Uthram">Uttarapalguni / Uthram</option>
                                            <option value="Uttarashada / Uthradam">Uttarashada / Uthradam</option>
                                            <option value="Vishaka / Vishakam">Vishaka / Vishakam</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="submit_btnbox row">
                                    <div class="after_editable_btnbox">
                                        <button type="button"
                                                class="btn btn-primary btn-sm center_btnmargin search_filter"
                                                id="btn_Update_profile"><i
                                                    class="mdi mdi-account-check basic_icon_margin"></i>Update Profile
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm" id="btn_Edit_profile7"
                                                onclick="AddEditable(this);"><i
                                                    class="mdi mdi-close basic_icon_margin"></i>Cancel
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-success btn-sm" id="btn_Edit_profile8"
                                            onclick="RemoveEditable(this);"><i
                                                class="mdi mdi-account-edit basic_icon_margin"></i>Edit Profile
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="updated_box ">
                            <div class="top_heading_box">
                                <span class="heading_txt">Partner Preference</span>
                                <span class="collapse_btnbox pull-right">
                                <i class="mdi mdi-plus" onclick="Collapsebtn(this);"></i>
                            </span>
                            </div>
                            <div class="update_databox editable_false">
                                @php
                                    $states =  \Illuminate\Support\Facades\DB::select("SELECT DISTINCT state FROM `statelist`");
                                @endphp
                                <div class="row update_profile_row">
                                    <div class="col-sm-6">
                                        <div class="textbox_containner">
                                            <input type="number" min="18" editable="false" max="90" name="p_agefrom"
                                                   autocomplete="off"
                                                   class="animate_txt " value="{{$user->p_agefrom}}" id="p_agefrom"
                                                   placeholder="From Age">
                                            <label class="animate_placeholder" for="p_agefrom">From Age</label>
                                        </div>
                                        <div class="textbox_containner">
                                            <input type="number" min="18" max="90" editable="false" name="p_ageto"
                                                   autocomplete="off" value="{{$user->p_ageto}}"
                                                   class="animate_txt " id="p_ageto"
                                                   placeholder="To Age">
                                            <label class="animate_placeholder" for="p_ageto">To Age</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="p_heightfrom" id="Partner_heightfromid"
                                                class="form-control drop_edit txt_wizard">
                                            <option selected="selected"
                                        value="{{isset($user->p_heightfrom)?$user->p_heightfrom:''}}">{{isset($user->p_heightfrom)?$user->p_heightfrom:'- Select Height From -'}}</option>
                                            <option value="3ft.5in-105cm">3ft.5in-105cm</option>
                                            <option value="3ft.6in-107cm">3ft.6in-107cm</option>
                                            <option value="3ft.7in-110cm">3ft.7in-110cm</option>
                                            <option value="3ft.8in-112cm">3ft.8in-112cm</option>
                                            <option value="3ft.9in-114cm">3ft.9in-114cm</option>
                                            <option value="3ft.10in-117cm">3ft.10in-117cm</option>
                                            <option value="3ft.11in-119cm">3ft.11in-119cm</option>
                                            <option value="4ft-122cm">4ft-122cm</option>
                                            <option value="4ft.1in-124cm">4ft.1in-124cm</option>
                                            <option value="4ft.2in-127cm">4ft.2in-127cm</option>
                                            <option value="4ft.3in-129cm">4ft.3in-129cm</option>
                                            <option value="4ft.4in-132cm">4ft.4in-132cm</option>
                                            <option value="4ft.5in-134cm">4ft.5in-134cm</option>
                                            <option value="4ft.6in-137cm">4ft.6in-137cm</option>
                                            <option value="4ft.7in-139cm">4ft.7in-139cm</option>
                                            <option value="4ft.8in-142cm">4ft.8in-142cm</option>
                                            <option value="4ft.9in-144cm">4ft.9in-144cm</option>
                                            <option value="4ft.10in-147cm">4ft.10in-147cm</option>
                                            <option value="4ft.11in-149cm">4ft.11in-149cm</option>
                                            <option value="5ft-151cm">5ft-151cm</option>
                                            <option value="5ft.1in-154cm">5ft.1in-154cm</option>
                                            <option value="5ft.2in-157cm">5ft.2in-157cm</option>
                                            <option value="5ft.3in-160cm">5ft.3in-160cm</option>
                                            <option value="5ft.4in-162cm">5ft.4in-162cm</option>
                                            <option value="5ft.5in-165cm">5ft.5in-165cm</option>
                                            <option value="5ft.6in-167cm">5ft.6in-167cm</option>
                                            <option value="5ft.7in-170cm">5ft.7in-170cm</option>
                                            <option value="5ft.8in-172cm">5ft.8in-172cm</option>
                                            <option value="5ft 9in-175cm</">5ft 9in-175cm</option>
                                            <option value="5ft.10in-177cm">5ft.10in-177cm</option>
                                            <option value="5ft.11in-180cm">5ft.11in-180cm</option>
                                            <option value="6ft-182cm">6ft-182cm</option>
                                            <option value="6ft.1in-185cm">6ft.1in-185cm</option>
                                            <option value="6ft.1in-185cm">6ft.1in-185cm</option>
                                            <option value="6ft.2in-187cm">6ft.2in-187cm</option>
                                            <option value="6ft.3in-190cm">6ft.3in-190cm</option>
                                            <option value="6ft.4in-193cm">6ft.4in-193cm</option>
                                            <option value="6ft.5in-196cm">6ft.5in-196cm</option>
                                            <option value="6ft.6in-198cm">6ft.6in-198cm</option>
                                            <option value="6ft.7in-200cm">6ft.7in-200cm</option>
                                            <option value="6ft.8in-203cm">6ft.8in-203cm</option>
                                            <option value="6ft.9in-206cm">6ft.9in-206cm</option>
                                            <option value="6ft.10in-208cm">6ft.10in-208cm</option>
                                            <option value="6ft.11in-211cm">6ft.11in-211cm</option>
                                        </select>
                                        <select name="p_heightto" id="Partner_heighttoid"
                                                class="form-control drop_edit txt_wizard">
                                            <option selected="selected"
                                                    value="{{isset($user->p_heightfrom)?$user->p_heightfrom:''}}">{{isset($user->p_heightfrom)?$user->p_heightfrom:'- Select Height To -'}}</option>
                                            <option value="3ft.5in-105cm">3ft.5in-105cm</option>
                                            <option value="3ft.6in-107cm">3ft.6in-107cm</option>
                                            <option value="3ft.7in-110cm">3ft.7in-110cm</option>
                                            <option value="3ft.8in-112cm">3ft.8in-112cm</option>
                                            <option value="3ft.9in-114cm">3ft.9in-114cm</option>
                                            <option value="3ft.10in-117cm">3ft.10in-117cm</option>
                                            <option value="3ft.11in-119cm">3ft.11in-119cm</option>
                                            <option value="4ft-122cm">4ft-122cm</option>
                                            <option value="4ft.1in-124cm">4ft.1in-124cm</option>
                                            <option value="4ft.2in-127cm">4ft.2in-127cm</option>
                                            <option value="4ft.3in-129cm">4ft.3in-129cm</option>
                                            <option value="4ft.4in-132cm">4ft.4in-132cm</option>
                                            <option value="4ft.5in-134cm">4ft.5in-134cm</option>
                                            <option value="4ft.6in-137cm">4ft.6in-137cm</option>
                                            <option value="4ft.7in-139cm">4ft.7in-139cm</option>
                                            <option value="4ft.8in-142cm">4ft.8in-142cm</option>
                                            <option value="4ft.9in-144cm">4ft.9in-144cm</option>
                                            <option value="4ft.10in-147cm">4ft.10in-147cm</option>
                                            <option value="4ft.11in-149cm">4ft.11in-149cm</option>
                                            <option value="5ft-151cm">5ft-151cm</option>
                                            <option value="5ft.1in-154cm">5ft.1in-154cm</option>
                                            <option value="5ft.2in-157cm">5ft.2in-157cm</option>
                                            <option value="5ft.3in-160cm">5ft.3in-160cm</option>
                                            <option value="5ft.4in-162cm">5ft.4in-162cm</option>
                                            <option value="5ft.5in-165cm">5ft.5in-165cm</option>
                                            <option value="5ft.6in-167cm">5ft.6in-167cm</option>
                                            <option value="5ft.7in-170cm">5ft.7in-170cm</option>
                                            <option value="5ft.8in-172cm">5ft.8in-172cm</option>
                                            <option value="5ft 9in-175cm</">5ft 9in-175cm</option>
                                            <option value="5ft.10in-177cm">5ft.10in-177cm</option>
                                            <option value="5ft.11in-180cm">5ft.11in-180cm</option>
                                            <option value="6ft-182cm">6ft-182cm</option>
                                            <option value="6ft.1in-185cm">6ft.1in-185cm</option>
                                            <option value="6ft.1in-185cm">6ft.1in-185cm</option>
                                            <option value="6ft.2in-187cm">6ft.2in-187cm</option>
                                            <option value="6ft.3in-190cm">6ft.3in-190cm</option>
                                            <option value="6ft.4in-193cm">6ft.4in-193cm</option>
                                            <option value="6ft.5in-196cm">6ft.5in-196cm</option>
                                            <option value="6ft.6in-198cm">6ft.6in-198cm</option>
                                            <option value="6ft.7in-200cm">6ft.7in-200cm</option>
                                            <option value="6ft.8in-203cm">6ft.8in-203cm</option>
                                            <option value="6ft.9in-206cm">6ft.9in-206cm</option>
                                            <option value="6ft.10in-208cm">6ft.10in-208cm</option>
                                            <option value="6ft.11in-211cm">6ft.11in-211cm</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row update_profile_row">
                                    <div class="col-sm-6">
                                        <select id="Material_status" name="p_status"
                                                class="form-control drop_edit txt_wizard">
                                            <option value="Never married">Never married</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Separated">Separated</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <select id="children" name="p_children"
                                                class="form-control drop_edit txt_wizard">
                                            <option selected="">Have Children</option>
                                            <option value="no">No</option>
                                            <option value="yes">Yes</option>

                                            <option>Doesn't Matter</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row update_profile_row">
                                    <div class="col-sm-6">
                                        {{--<select name="p_state" class="form-control txt_wizard drop_edit" id="p_state">--}}
                                        {{--<option value="">Select State</option>--}}
                                        {{--@foreach($states as $state)--}}
                                        {{--<option value="{{$state->state}}">{{$state->state}}</option>--}}
                                        {{--@endforeach--}}
                                        {{--</select>--}}
                                        <select name="p_state" class="form-control txt_wizard drop_edit" id="p_state">
                                            <option value="">Select State</option>
                                            @foreach($states as $state)
                                                <option {{$user->state==$state->state?'selected':''}} value="{{$state->state}}">{{$state->state}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="textbox_containner">
                                            <input type="text" editable="false" name="p_city"
                                                   autocomplete="off" class="animate_txt " id="p_city"
                                                   placeholder="City" value="{{$user->p_city}}">
                                            <label class="animate_placeholder" for="p_city">City</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row update_profile_row">
                                    <div class="col-sm-6">

                                        <select name="p_language" class="form-control txt_wizard drop_edit"
                                                id="MotherTongue_partner"
                                                class="form-control txt_wizard">
                                            <option selected="selected"
                                                    value="{{isset($user->p_language)?$user->p_language:''}}">{{isset($user->p_heightfrom)?$user->p_language:'- Mother Tongue -'}}</option>
                                            <option value="English">English</option>
                                            <option value="French">French</option>
                                            <option value="Garhwali">Garhwali</option>
                                            <option value="Garo">Garo</option>
                                            <option value="Gujarati">Gujarati</option>
                                            <option value="Haryanvi">Haryanvi</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="Kakbarak">Kakbarak</option>
                                            <option value="Kanauji">Kanauji</option>
                                            <option value="Kannada">Kannada</option>
                                            <option value="Kashmiri">Kashmiri</option>
                                            <option value="Khandesi">Khandesi</option>
                                            <option value="Khasi">Khasi</option>
                                            <option value="Konkani">Konkani</option>
                                            <option value="Koshali">Koshali</option>
                                            <option value="Other">Other</option>


                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="p_religion" class="form-control requiredDD txt_wizard drop_edit"
                                                id="p_religion">
                                            <option selected="selected"
                                                    value="{{$user->p_religion}}">{{$user->p_religion}}</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Muslim">Muslim</option>
                                            <option value="Muslim - Shia">Muslim - Shia</option>
                                            <option value="Muslim - Sunni">Muslim - Sunni</option>
                                            <option value="Christian">Christian</option>
                                            <option value="Christian - Catholic">Christian - Catholic</option>
                                            <option value="Christian - Orthodox">Christian - Orthodox</option>
                                            <option value="Christian - Protestant">Christian - Protestant</option>
                                            <option value="Sikh">Sikh</option>
                                            <option value="Jain">Jain</option>
                                            <option value="Parsi">Parsi</option>
                                            <option value="Buddhist">Buddhist</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row update_profile_row">

                                    {{--<div class="col-sm-6">--}}
                                    {{--<select name="p_caste" class="form-control requiredDD  txt_wizard drop_edit"--}}
                                    {{--id="p_caste">--}}
                                    {{--<option selected value="">Select caste</option>--}}
                                    {{--<option value="Adi Dravida">Adi Dravida</option>--}}
                                    {{--<option value="Agarwal">Agarwal</option>--}}
                                    {{--<option value="Agnikula Kshatriya">Agnikula Kshatriya</option>--}}
                                    {{--<option value="Agri">Agri</option>--}}
                                    {{--<option value="Ahom">Ahom</option>--}}
                                    {{--<option value="Ambalavasi">Ambalavasi</option>--}}
                                    {{--<option value="Arora">Arora</option>--}}
                                    {{--<option value="Arunthathiyar">Arunthathiyar</option>--}}
                                    {{--<option value="Arya Vysya">Arya Vysya</option>--}}
                                    {{--<option value="Baidya">Baidya</option>--}}
                                    {{--<option value="Bagga">Bagga</option>--}}
                                    {{--<option value="Baishnab">Baishnab</option>--}}
                                    {{--<option value="Baishya">Baishya</option>--}}
                                    {{--<option value="Balija">Balija</option>--}}
                                    {{--<option value="Banik">Banik</option>--}}
                                    {{--<option value="Baniya">Baniya</option>--}}
                                    {{--<option value="Barujibi">Barujibi</option>--}}
                                    {{--<option value="Besta">Besta</option>--}}
                                    {{--<option value="Bhandari">Bhandari</option>--}}
                                    {{--<option value="Bhatia">Bhatia</option>--}}
                                    {{--<option value="Bhavasar Kshatriya">Bhavasar Kshatriya</option>--}}
                                    {{--<option value="Bhovi">Bhovi</option>--}}
                                    {{--<option value="Billava">Billava</option>--}}
                                    {{--<option value="Boyer">Boyer</option>--}}
                                    {{--<option value="Brahmbatt">Brahmbatt</option>--}}
                                    {{--<option value="Brahmin">Brahmin</option>--}}
                                    {{--<option value="Brahmin - Adi Gaur">Brahmin - Adi Gaur</option>--}}
                                    {{--<option value="Brahmin - Anavil">Brahmin - Anavil</option>--}}
                                    {{--<option value="Brahmin - Audichya">Brahmin - Audichya</option>--}}
                                    {{--<option value="Brahmin - Barendra">Brahmin - Barendra</option>--}}
                                    {{--<option value="Brahmin - Bhatt">Brahmin - Bhatt</option>--}}
                                    {{--<option value="Brahmin - Bhumihar">Brahmin - Bhumihar</option>--}}
                                    {{--<option value="Brahmin - Daivadnya">Brahmin - Daivadnya</option>--}}
                                    {{--<option value="Brahmin - Danua">Brahmin - Danua</option>--}}
                                    {{--<option value="Brahmin - Deshastha">Brahmin - Deshastha</option>--}}
                                    {{--<option value="Brahmin - Dhiman">Brahmin - Dhiman</option>--}}
                                    {{--<option value="Brahmin - Dravida">Brahmin - Dravida</option>--}}
                                    {{--<option value="Brahmin - Garhwali">Brahmin - Garhwali</option>--}}
                                    {{--<option value="Brahmin - Gaur">Brahmin - Gaur</option>--}}
                                    {{--<option value="Brahmin - Goswami">Brahmin - Goswami</option>--}}
                                    {{--<option value="Brahmin - Gurukkal">Brahmin - Gurukkal</option>--}}
                                    {{--<option value="Brahmin - Halua">Brahmin - Halua</option>--}}
                                    {{--<option value="Brahmin - Havyaka">Brahmin - Havyaka</option>--}}
                                    {{--<option value="Brahmin - Hoysala">Brahmin - Hoysala</option>--}}
                                    {{--<option value="Brahmin - Iyengar">Brahmin - Iyengar</option>--}}
                                    {{--<option value="Brahmin - Iyer">Brahmin - Iyer</option>--}}
                                    {{--<option value="Brahmin - Jangid">Brahmin - Jangid</option>--}}
                                    {{--<option value="Brahmin - Jhadua">Brahmin - Jhadua</option>--}}
                                    {{--<option value="Brahmin - Kanyakubj">Brahmin - Kanyakubj</option>--}}
                                    {{--<option value="Brahmin - Karhade">Brahmin - Karhade</option>--}}
                                    {{--<option value="Brahmin - Kokanastha">Brahmin - Kokanastha</option>--}}
                                    {{--<option value="Brahmin - Kota">Brahmin - Kota</option>--}}
                                    {{--<option value="Brahmin - Kulin">Brahmin - Kulin</option>--}}
                                    {{--<option value="Brahmin - Kumoani">Brahmin - Kumoani</option>--}}
                                    {{--<option value="Brahmin - Madhwa">Brahmin - Madhwa</option>--}}
                                    {{--<option value="Brahmin - Maithil">Brahmin - Maithil</option>--}}
                                    {{--<option value="Brahmin - Modh">Brahmin - Modh</option>--}}
                                    {{--<option value="Brahmin - Mohyal">Brahmin - Mohyal</option>--}}
                                    {{--<option value="Brahmin - Nagar">Brahmin - Nagar</option>--}}
                                    {{--<option value="Brahmin - Namboodiri">Brahmin - Namboodiri</option>--}}
                                    {{--<option value="Brahmin - Niyogi">Brahmin - Niyogi</option>--}}
                                    {{--<option value="Brahmin - Panda">Brahmin - Panda</option>--}}
                                    {{--<option value="Brahmin - Pareek">Brahmin - Pareek</option>--}}
                                    {{--<option value="Brahmin - Pandit">Brahmin - Pandit</option>--}}
                                    {{--<option value="Brahmin - Rarhi">Brahmin - Rarhi</option>--}}
                                    {{--<option value="Brahmin - Rigvedi">Brahmin - Rigvedi</option>--}}
                                    {{--<option value="Brahmin - Rudraj">Brahmin - Rudraj</option>--}}
                                    {{--<option value="Brahmin - Sakaldwipi">Brahmin - Sakaldwipi</option>--}}
                                    {{--<option value="Brahmin - Sanadya">Brahmin - Sanadya</option>--}}
                                    {{--<option value="Brahmin - Sanketi">Brahmin - Sanketi</option>--}}
                                    {{--<option value="Brahmin - Saraswat">Brahmin - Saraswat</option>--}}
                                    {{--<option value="Brahmin - Saryuparin">Brahmin - Saryuparin</option>--}}
                                    {{--<option value="Brahmin - Shivhalli">Brahmin - Shivhalli</option>--}}
                                    {{--<option value="Brahmin - Shrimali">Brahmin - Shrimali</option>--}}
                                    {{--<option value="Brahmin - Smartha">Brahmin - Smartha</option>--}}
                                    {{--<option value="Brahmin - Sri Vishnava">Brahmin - Sri Vishnava</option>--}}
                                    {{--<option value="Brahmin - Stanika">Brahmin - Stanika</option>--}}
                                    {{--<option value="Brahmin - Tyagi">Brahmin - Tyagi</option>--}}
                                    {{--<option value="Brahmin - Vaidiki">Brahmin - Vaidiki</option>--}}
                                    {{--<option value="Brahmin - Vyas">Brahmin - Vyas</option>--}}
                                    {{--<option value="Chamar">Chamar</option>--}}
                                    {{--<option value="Chambhar">Chambhar</option>--}}
                                    {{--<option value="Chandravanshi Kahar">Chandravanshi Kahar</option>--}}
                                    {{--<option value="Chasa">Chasa</option>--}}
                                    {{--<option value="Chaudary">Chaudary</option>--}}
                                    {{--<option value="Chaurasia">Chaurasia</option>--}}
                                    {{--<option value="Chettiar">Chettiar</option>--}}
                                    {{--<option value="Chhetri">Chhetri</option>--}}
                                    {{--<option value="Christian - Born Again">Christian - Born Again</option>--}}
                                    {{--<option value="Christian - Bretheren">Christian - Bretheren</option>--}}
                                    {{--<option value="Christian - Church of South India">Christian - Church of--}}
                                    {{--South--}}
                                    {{--India--}}
                                    {{--</option>--}}
                                    {{--<option value="Christian - Evangelist">Christian - Evangelist</option>--}}
                                    {{--<option value="Christian - Jacobite">Christian - Jacobite</option>--}}
                                    {{--<option value="Christian - Knanaya">Christian - Knanaya</option>--}}
                                    {{--<option value="Christian - Knanaya Catholic">Christian - Knanaya Catholic--}}
                                    {{--</option>--}}
                                    {{--<option value="Christian - Knanaya Jacobite">Christian - Knanaya Jacobite--}}
                                    {{--</option>--}}
                                    {{--<option value="Christian - Latin Catholic">Christian - Latin Catholic--}}
                                    {{--</option>--}}
                                    {{--<option value="Christian - Malankara">Christian - Malankara</option>--}}
                                    {{--<option value="Christian - Marthoma">Christian - Marthoma</option>--}}
                                    {{--<option value="Christian - Others">Christian - Others</option>--}}
                                    {{--<option value="Christian - Pentacost">Christian - Pentacost</option>--}}
                                    {{--<option value="Christian - Roman Catholic">Christian - Roman Catholic--}}
                                    {{--</option>--}}
                                    {{--<option value="Christian - Syrian Catholic">Christian - Syrian Catholic--}}
                                    {{--</option>--}}
                                    {{--<option value="Christian - Syrian Jacobite">Christian - Syrian Jacobite--}}
                                    {{--</option>--}}
                                    {{--<option value="Christian - Syrian Orthodox">Christian - Syrian Orthodox--}}
                                    {{--</option>--}}
                                    {{--<option value="Christian - Syro Malabar">Christian - Syro Malabar</option>--}}
                                    {{--<option value="Christian - unspecified">Christian - unspecified</option>--}}
                                    {{--<option value="CKP">CKP</option>--}}
                                    {{--<option value="Coorgi">Coorgi</option>--}}
                                    {{--<option value="Devadiga">Devadiga</option>--}}
                                    {{--<option value="Devandra Kula Vellalar">Devandra Kula Vellalar</option>--}}
                                    {{--<option value="Devang Koshthi">Devang Koshthi</option>--}}
                                    {{--<option value="Devanga">Devanga</option>--}}
                                    {{--<option value="Dhangar">Dhangar</option>--}}
                                    {{--<option value="Dheevara">Dheevara</option>--}}
                                    {{--<option value="Dhiman">Dhiman</option>--}}
                                    {{--<option value="Dhoba">Dhoba</option>--}}
                                    {{--<option value="Dhobi">Dhobi</option>--}}
                                    {{--<option value="Ediga">Ediga</option>--}}
                                    {{--<option value="Ezhava">Ezhava</option>--}}
                                    {{--<option value="Ezhuthachan">Ezhuthachan</option>--}}
                                    {{--<option value="Gabit">Gabit</option>--}}
                                    {{--<option value="Gandla">Gandla</option>--}}
                                    {{--<option value="Ganiga">Ganiga</option>--}}
                                    {{--<option value="Garhwali">Garhwali</option>--}}
                                    {{--<option value="Gavara">Gavara</option>--}}
                                    {{--<option value="Ghumar">Ghumar</option>--}}
                                    {{--<option value="Goala">Goala</option>--}}
                                    {{--<option value="Goan">Goan</option>--}}
                                    {{--<option value="Gond">Gond</option>--}}
                                    {{--<option value="Goud">Goud</option>--}}
                                    {{--<option value="Gounder">Gounder</option>--}}
                                    {{--<option value="Gowda">Gowda</option>--}}
                                    {{--<option value="Gudia">Gudia</option>--}}
                                    {{--<option value="Gujrati">Gujrati</option>--}}
                                    {{--<option value="Gujjar">Gujjar</option>--}}
                                    {{--<option value="Gupta">Gupta</option>--}}
                                    {{--<option value="Intercaste">Intercaste</option>--}}
                                    {{--<option value="Intercaste">Intercaste</option>--}}
                                    {{--<option value="Irani">Irani</option>--}}
                                    {{--<option value="Jain - Shwetambar">Jain - Shwetambar</option>--}}
                                    {{--<option value="Jain - Digambar">Jain - Digambar</option>--}}
                                    {{--<option value="Jain - Agarwal">Jain - Agarwal</option>--}}
                                    {{--<option value="Jain - Bania">Jain - Bania</option>--}}
                                    {{--<option value="Jain - Intercaste">Jain - Intercaste</option>--}}
                                    {{--<option value="Jain - Jaiswal">Jain - Jaiswal</option>--}}
                                    {{--<option value="Jain - Khandelwal">Jain - Khandelwal</option>--}}
                                    {{--<option value="Jain - Kutchi">Jain - Kutchi</option>--}}
                                    {{--<option value="Jain - No Bar">Jain - No Bar</option>--}}
                                    {{--<option value="Jain - Oswal">Jain - Oswal</option>--}}
                                    {{--<option value="Jain - Others">Jain - Others</option>--}}
                                    {{--<option value="Jain - Porwal">Jain - Porwal</option>--}}
                                    {{--<option value="Jain - Unspecified">Jain - Unspecified</option>--}}
                                    {{--<option value="Jain - Vaishya">Jain - Vaishya</option>--}}
                                    {{--<option value="Jaiswal">Jaiswal</option>--}}
                                    {{--<option value="Jangam">Jangam</option>--}}
                                    {{--<option value="Jat">Jat</option>--}}
                                    {{--<option value="Jatav">Jatav</option>--}}
                                    {{--<option value="Kadava Patel">Kadava Patel</option>--}}
                                    {{--<option value="kahar">kahar</option>--}}
                                    {{--<option value="Kaibarta">Kaibarta</option>--}}
                                    {{--<option value="Kalar">Kalar</option>--}}
                                    {{--<option value="Kalinga">Kalinga</option>--}}
                                    {{--<option value="Kalita">Kalita</option>--}}
                                    {{--<option value="Kalwar">Kalwar</option>--}}
                                    {{--<option value="Kamboj">Kamboj</option>--}}
                                    {{--<option value="Kamma">Kamma</option>--}}
                                    {{--<option value="Kansari">Kansari</option>--}}
                                    {{--<option value="Kapu">Kapu</option>--}}
                                    {{--<option value="Karana">Karana</option>--}}
                                    {{--<option value="Karmakar">Karmakar</option>--}}
                                    {{--<option value="Karuneegar">Karuneegar</option>--}}
                                    {{--<option value="Kasar">Kasar</option>--}}
                                    {{--<option value="Kushwaha">Kushwaha</option>--}}
                                    {{--<option value="Kashyap">Kashyap</option>--}}
                                    {{--<option value="Kayastha">Kayastha</option>--}}
                                    {{--<option value="Khatik">Khatik</option>--}}
                                    {{--<option value="Khandayat">Khandayat</option>--}}
                                    {{--<option value="Khandelwal">Khandelwal</option>--}}
                                    {{--<option value="Khatri">Khatri</option>--}}
                                    {{--<option value="Koli">Koli</option>--}}
                                    {{--<option value="Kongu Vellala Gounder">Kongu Vellala Gounder</option>--}}
                                    {{--<option value="Konkani">Konkani</option>--}}
                                    {{--<option value="Kori">Kori</option>--}}
                                    {{--<option value="kostha">kostha</option>--}}
                                    {{--<option value="kosthi">kosthi</option>--}}
                                    {{--<option value="Kshatriya">Kshatriya</option>--}}
                                    {{--<option value="Kudumbi">Kudumbi</option>--}}
                                    {{--<option value="Kulal">Kulal</option>--}}
                                    {{--<option value="Kulalar">Kulalar</option>--}}
                                    {{--<option value="Kulita">Kulita</option>--}}
                                    {{--<option value="Kumbhakar">Kumbhakar</option>--}}
                                    {{--<option value="Kumbhar">Kumbhar</option>--}}
                                    {{--<option value="Kumhar">Kumhar</option>--}}
                                    {{--<option value="Kummari">Kummari</option>--}}
                                    {{--<option value="Kunbi">Kunbi</option>--}}
                                    {{--<option value="Kurmi Kshatriya">Kurmi Kshatriya</option>--}}
                                    {{--<option value="Kurmi">Kurmi</option>--}}
                                    {{--<option value="Kuruba">Kuruba</option>--}}
                                    {{--<option value="Kuruhina Shetty">Kuruhina Shetty</option>--}}
                                    {{--<option value="Kurumbar">Kurumbar</option>--}}
                                    {{--<option value="Kutchi">Kutchi</option>--}}
                                    {{--<option value="Lambadi">Lambadi</option>--}}
                                    {{--<option value="Leva patel">Leva patel</option>--}}
                                    {{--<option value="Leva patil">Leva patil</option>--}}
                                    {{--<option value="Lingayath">Lingayath</option>--}}
                                    {{--<option value="Lohana">Lohana</option>--}}
                                    {{--<option value="Lubana">Lubana</option>--}}
                                    {{--<option value="Madiga">Madiga</option>--}}
                                    {{--<option value="Mahajan">Mahajan</option>--}}
                                    {{--<option value="Mahar">Mahar</option>--}}
                                    {{--<option value="Mahendra">Mahendra</option>--}}
                                    {{--<option value="Maheshwari">Maheshwari</option>--}}
                                    {{--<option value="Mahishya">Mahishya</option>--}}
                                    {{--<option value="Majabi">Majabi</option>--}}
                                    {{--<option value="Mala">Mala</option>--}}
                                    {{--<option value="Mali">Mali</option>--}}
                                    {{--<option value="Malla">Malla</option>--}}
                                    {{--<option value="Mangalorean">Mangalorean</option>--}}
                                    {{--<option value="Manipuri">Manipuri</option>--}}
                                    {{--<option value="Mapila">Mapila</option>--}}
                                    {{--<option value="Maratha">Maratha</option>--}}
                                    {{--<option value="Maruthuvar">Maruthuvar</option>--}}
                                    {{--<option value="Matang">Matang</option>--}}
                                    {{--<option value="Meena">Meena</option>--}}
                                    {{--<option value="Meenavar">Meenavar</option>--}}
                                    {{--<option value="Mehra">Mehra</option>--}}
                                    {{--<option value="Meru Darji">Meru Darji</option>--}}
                                    {{--<option value="Mochi">Mochi</option>--}}
                                    {{--<option value="Modak">Modak</option>--}}
                                    {{--<option value="Mogaveera">Mogaveera</option>--}}
                                    {{--<option value="Mudaliyar">Mudaliyar</option>--}}
                                    {{--<option value="Mudiraj">Mudiraj</option>--}}
                                    {{--<option value="Mukkulathor">Mukkulathor</option>--}}
                                    {{--<option value="Munnuru Kapu">Munnuru Kapu</option>--}}
                                    {{--<option value="Muslim - Ansari">Muslim - Ansari</option>--}}
                                    {{--<option value="Muslim - Arain">Muslim - Arain</option>--}}
                                    {{--<option value="Muslim - Awan">Muslim - Awan</option>--}}
                                    {{--<option value="Muslim - Bohra">Muslim - Bohra</option>--}}
                                    {{--<option value="Muslim - Dekkani">Muslim - Dekkani</option>--}}
                                    {{--<option value="Muslim - Dudekula">Muslim - Dudekula</option>--}}
                                    {{--<option value="Muslim - Hanafi">Muslim - Hanafi</option>--}}
                                    {{--<option value="Muslim - Jat">Muslim - Jat</option>--}}
                                    {{--<option value="Muslim - Khoja">Muslim - Khoja</option>--}}
                                    {{--<option value="Muslim - Lebbai">Muslim - Lebbai</option>--}}
                                    {{--<option value="Muslim - Malik">Muslim - Malik</option>--}}
                                    {{--<option value="Muslim - Mapila">Muslim - Mapila</option>--}}
                                    {{--<option value="Muslim - Maraicar">Muslim - Maraicar</option>--}}
                                    {{--<option value="Muslim - Memon">Muslim - Memon</option>--}}
                                    {{--<option value="Muslim - Mughal">Muslim - Mughal</option>--}}
                                    {{--<option value="Muslim - Others">Muslim - Others</option>--}}
                                    {{--<option value="Muslim - Pathan">Muslim - Pathan</option>--}}
                                    {{--<option value="Muslim - Qureshi">Muslim - Qureshi</option>--}}
                                    {{--<option value="Muslim - Rajput">Muslim - Rajput</option>--}}
                                    {{--<option value="Muslim - Rowther">Muslim - Rowther</option>--}}
                                    {{--<option value="Muslim - Shafi">Muslim - Shafi</option>--}}
                                    {{--<option value="Muslim - Sheikh">Muslim - Sheikh</option>--}}
                                    {{--<option value="Muslim - Siddiqui">Muslim - Siddiqui</option>--}}
                                    {{--<option value="Muslim - Syed">Muslim - Syed</option>--}}
                                    {{--<option value="Muslim - UnSpecified">Muslim - UnSpecified</option>--}}
                                    {{--<option value="Muthuraja">Muthuraja</option>--}}
                                    {{--<option value="Nadar">Nadar</option>--}}
                                    {{--<option value="Nai">Nai</option>--}}
                                    {{--<option value="Naicker">Naicker</option>--}}
                                    {{--<option value="Naidu">Naidu</option>--}}
                                    {{--<option value="Naik">Naik</option>--}}
                                    {{--<option value="Nair">Nair</option>--}}
                                    {{--<option value="Namosudra">Namosudra</option>--}}
                                    {{--<option value="Napit">Napit</option>--}}
                                    {{--<option value="Nayaka">Nayaka</option>--}}
                                    {{--<option value="Nepali">Nepali</option>--}}
                                    {{--<option value="Nhavi">Nhavi</option>--}}
                                    {{--<option value="Oswal">Oswal</option>--}}
                                    {{--<option value="Other">Other</option>--}}
                                    {{--<option value="Padmasali">Padmasali</option>--}}
                                    {{--<option value="Pal">Pal</option>--}}
                                    {{--<option value="Panchal">Panchal</option>--}}
                                    {{--<option value="Panicker">Panicker</option>--}}
                                    {{--<option value="Parkava Kulam">Parkava Kulam</option>--}}
                                    {{--<option value="Parsi">Parsi</option>--}}
                                    {{--<option value="Pasi">Pasi</option>--}}
                                    {{--<option value="Patel">Patel</option>--}}
                                    {{--<option value="Patnaick">Patnaick</option>--}}
                                    {{--<option value="Patra">Patra</option>--}}
                                    {{--<option value="Pillai">Pillai</option>--}}
                                    {{--<option value="Porwal">Porwal</option>--}}
                                    {{--<option value="Prajapati">Prajapati</option>--}}
                                    {{--<option value="Rajaka">Rajaka</option>--}}
                                    {{--<option value="Rajastani">Rajastani</option>--}}
                                    {{--<option value="Rajbonshi">Rajbonshi</option>--}}
                                    {{--<option value="Rajput">Rajput</option>--}}
                                    {{--<option value="Ramdasia">Ramdasia</option>--}}
                                    {{--<option value="Ramgariah">Ramgariah</option>--}}
                                    {{--<option value="Ravidasia">Ravidasia</option>--}}
                                    {{--<option value="Rawat">Rawat</option>--}}
                                    {{--<option value="Reddy">Reddy</option>--}}
                                    {{--<option value="Sadgope">Sadgope</option>--}}
                                    {{--<option value="Saha">Saha</option>--}}
                                    {{--<option value="Sahu">Sahu</option>--}}
                                    {{--<option value="Saini">Saini</option>--}}
                                    {{--<option value="Saliya">Saliya</option>--}}
                                    {{--<option value="SC">SC</option>--}}
                                    {{--<option value="Senai Thalaivar">Senai Thalaivar</option>--}}
                                    {{--<option value="Settibalija">Settibalija</option>--}}
                                    {{--<option value="Shetty">Shetty</option>--}}
                                    {{--<option value="Shimpi">Shimpi</option>--}}
                                    {{--<option value="Sikh - Ahluwalia">Sikh - Ahluwalia</option>--}}
                                    {{--<option value="Sikh - Arora">Sikh - Arora</option>--}}
                                    {{--<option value="Sikh - Bhatia">Sikh - Bhatia</option>--}}
                                    {{--<option value="Sikh - Ghumar">Sikh - Ghumar</option>--}}
                                    {{--<option value="Sikh - Intercaste">Sikh - Intercaste</option>--}}
                                    {{--<option value="Sikh - Jat">Sikh - Jat</option>--}}
                                    {{--<option value="Sikh - Kamboj">Sikh - Kamboj</option>--}}
                                    {{--<option value="Sikh - Khatri">Sikh - Khatri</option>--}}
                                    {{--<option value="Sikh - Kshatriya">Sikh - Kshatriya</option>--}}
                                    {{--<option value="Sikh - Lubana">Sikh - Lubana</option>--}}
                                    {{--<option value="Sikh - Majabi">Sikh - Majabi</option>--}}
                                    {{--<option value="Sikh - No Bar">Sikh - No Bar</option>--}}
                                    {{--<option value="Sikh - Others">Sikh - Others</option>--}}
                                    {{--<option value="Sikh - Rajput">Sikh - Rajput</option>--}}
                                    {{--<option value="Sikh - Ramdasia">Sikh - Ramdasia</option>--}}
                                    {{--<option value="Sikh - Ramgharia">Sikh - Ramgharia</option>--}}
                                    {{--<option value="Sikh - Saini">Sikh - Saini</option>--}}
                                    {{--<option value="Sikh - Unspecified">Sikh - Unspecified</option>--}}
                                    {{--<option value="Sindhi">Sindhi</option>--}}
                                    {{--<option value="Sindhi-Amil">Sindhi-Amil</option>--}}
                                    {{--<option value="Sindhi-Baibhand">Sindhi-Baibhand</option>--}}
                                    {{--<option value="Sindhi-Bhanusali">Sindhi-Bhanusali</option>--}}
                                    {{--<option value="Sindhi-Bhatia">Sindhi-Bhatia</option>--}}
                                    {{--<option value="Sindhi-Chhapru">Sindhi-Chhapru</option>--}}
                                    {{--<option value="Sindhi-Dadu">Sindhi-Dadu</option>--}}
                                    {{--<option value="Sindhi-Hyderabadi">Sindhi-Hyderabadi</option>--}}
                                    {{--<option value="Sindhi-Larai">Sindhi-Larai</option>--}}
                                    {{--<option value="Sindhi-Larkana">Sindhi-Larkana</option>--}}
                                    {{--<option value="Sindhi-Lohana">Sindhi-Lohana</option>--}}
                                    {{--<option value="Sindhi-Rohiri">Sindhi-Rohiri</option>--}}
                                    {{--<option value="Sindhi-Sahiti">Sindhi-Sahiti</option>--}}
                                    {{--<option value="Sindhi-Sakkhar">Sindhi-Sakkhar</option>--}}
                                    {{--<option value="Sindhi-Sehwani">Sindhi-Sehwani</option>--}}
                                    {{--<option value="Sindhi-Shikarpuri">Sindhi-Shikarpuri</option>--}}
                                    {{--<option value="Sindhi-Thatai">Sindhi-Thatai</option>--}}
                                    {{--<option value="SKP">SKP</option>--}}
                                    {{--<option value="Sonar">Sonar</option>--}}
                                    {{--<option value="Soni">Soni</option>--}}
                                    {{--<option value="Sourashtra">Sourashtra</option>--}}
                                    {{--<option value="ST">ST</option>--}}
                                    {{--<option value="Sundhi">Sundhi</option>--}}
                                    {{--<option value="Suthar">Suthar</option>--}}
                                    {{--<option value="Swakula Sali">Swakula Sali</option>--}}
                                    {{--<option value="Tamboli">Tamboli</option>--}}
                                    {{--<option value="Tanti">Tanti</option>--}}
                                    {{--<option value="Tantubai">Tantubai</option>--}}
                                    {{--<option value="Telaga">Telaga</option>--}}
                                    {{--<option value="Teli">Teli</option>--}}
                                    {{--<option value="Thakkar">Thakkar</option>--}}
                                    {{--<option value="Thakur">Thakur</option>--}}
                                    {{--<option value="Thigala">Thigala</option>--}}
                                    {{--<option value="Thiyya">Thiyya</option>--}}
                                    {{--<option value="Tili">Tili</option>--}}
                                    {{--<option value="Uppara">Uppara</option>--}}
                                    {{--<option value="Vaddera">Vaddera</option>--}}
                                    {{--<option value="Vaish">Vaish</option>--}}
                                    {{--<option value="Vaishnav">Vaishnav</option>--}}
                                    {{--<option value="Vaishnava">Vaishnava</option>--}}
                                    {{--<option value="Vaishya">Vaishya</option>--}}
                                    {{--<option value="Vaishya Vani">Vaishya Vani</option>--}}
                                    {{--<option value="Valmiki">Valmiki</option>--}}
                                    {{--<option value="Vania">Vania</option>--}}
                                    {{--<option value="Vaniya">Vaniya</option>--}}
                                    {{--<option value="Vanjara">Vanjara</option>--}}
                                    {{--<option value="Vanjari">Vanjari</option>--}}
                                    {{--<option value="Vankar">Vankar</option>--}}
                                    {{--<option value="Vannar">Vannar</option>--}}
                                    {{--<option value="Vannia Kula Kshatriyar">Vannia Kula Kshatriyar</option>--}}
                                    {{--<option value="Veera Saivam">Veera Saivam</option>--}}
                                    {{--<option value="Velama">Velama</option>--}}
                                    {{--<option value="Vellalar">Vellalar</option>--}}
                                    {{--<option value="Veluthedathu Nair">Veluthedathu Nair</option>--}}
                                    {{--<option value="Vilakkithala Nair">Vilakkithala Nair</option>--}}
                                    {{--<option value="Vishwabrahmin">Vishwabrahmin</option>--}}
                                    {{--<option value="Vishwakarma">Vishwakarma</option>--}}
                                    {{--<option value="Vokkaliga">Vokkaliga</option>--}}
                                    {{--<option value="Vysya">Vysya</option>--}}
                                    {{--<option value="Yadav">Yadav</option>--}}
                                    {{--</select>--}}
                                    {{--</div>--}}
                                    <div class="col-sm-6">
                                        <select id="p_manglik" name="p_manglik"
                                                class="form-control requiredDD txt_wizard drop_edit">
                                            <option selected="selected"
                                                    value="{{isset($user->p_manglik)?$user->p_manglik:''}}">{{isset($user->p_manglik)?$user->p_manglik:'- Manglik -'}}</option>
                                            <option value="Manglik">Manglik</option>
                                            <option value="Non Manglik">Non Manglik</option>
                                            <option value="Does't Matter">Does't Matter</option>
                                        </select>


                                    </div>
                                </div>


                                <div class="row update_profile_row">
                                    <div class="col-sm-6">

                                        <select name="education_partner" id="education_partner"
                                                class="form-control txt_wizard drop_edit">
                                            <option selected="selected"
                                value="{{isset($user->education_partner)?$user->education_partner:''}}">{{isset($user->education_partner)?$user->education_partner:'- Education -'}}</option>
                                            
                                             <OPTION VALUE='Any'>Any
                                            </Option>
                                            
                                            <OPTION VALUE='10+2/Senior Secondary School'>10+2/Senior Secondary School
                                            </Option>
                                            <OPTION VALUE='CA'>CA</Option>
                                            <OPTION VALUE='CS'>CS</Option>
                                            <OPTION VALUE='Diploma'>Diploma</Option>
                                            <OPTION VALUE='ICWA'>ICWA</Option>
                                            <OPTION VALUE='PhD'>PhD</Option>
                                            <OPTION VALUE='Bachelors - Engineering/ Computers'>Bachelors - Engineering/
                                                Computers
                                            </Option>
                                            <OPTION VALUE='Masters - Engineering/ Computers'>Masters - Engineering/
                                                Computers
                                            </Option>
                                            <OPTION VALUE='Bachelors - Arts/ Science/ Commerce/ Others'>Bachelors -
                                                Arts/ Science/ Commerce/ Others
                                            </Option>
                                            <OPTION VALUE='Masters - Arts/ Science/ Commerce/ Others'>Masters - Arts/
                                                Science/ Commerce/ Others
                                            </Option>
                                            <OPTION VALUE='Management - BBA/ MBA/ Others'>Management - BBA/ MBA/
                                                Others
                                            </Option>
                                            <OPTION VALUE='Medicine - General/ Dental/ Surgeon/ Others'>Medicine -
                                                General/ Dental/ Surgeon/ Others
                                            </Option>
                                            <OPTION VALUE='Legal - BL/ ML/ LLB/ LLM/ Others'>Legal - BL/ ML/ LLB/ LLM/
                                                Others
                                            </Option>
                                            <OPTION VALUE='Service - IAS/ IPS/ Others'>Service - IAS/ IPS/ Others
                                            </Option>
                                            <OPTION VALUE='Higher Secondary/ Secondary'>Higher Secondary/ Secondary
                                            </Option>
                                            <OPTION VALUE='Others'>Others</Option>
                                            <OPTION VALUE='Medicine - General/ Dental/ Surgeon/Engineering/CA/ Others'>
                                                Medicine - General/ Dental/ Surgeon/Engineering/CA/ Others
                                            </Option>
                                        </select>
                                    </div>
                                    
                                    
                                    
                                    <div class="col-sm-6">


                                        <select name="occupation_partner" id="occupation_partner"
                                                class="form-control txt_wizard drop_edit">
                                            <option selected="selected" value="">Select Occupation</option>
                                            <OPTION VALUE='Any'>Any</Option>
                                            <OPTION VALUE='Manager'>Manager</Option>
                                            <OPTION VALUE='Supervisors'>Supervisors</Option>
                                            <OPTION VALUE='Administrative Professional'>Administrative Professional
                                            </Option>
                                            <OPTION VALUE='Pilot'>Pilot</Option>
                                            <OPTION VALUE='Air Hostess'>Air Hostess</Option>
                                            <OPTION VALUE='Airline Professional'>Airline Professional</Option>
                                            <OPTION VALUE='Architect'>Architect</Option>
                                            <OPTION VALUE='Interior Designer'>Interior Designer</Option>
                                            <OPTION VALUE='Chartered Accountant'>Chartered Accountant</Option>
                                            <OPTION VALUE='Company Secretary'>Company Secretary</Option>
                                            <OPTION VALUE='Corporate Planning/ Consulting'>Corporate Planning/
                                                Consulting
                                            </Option>
                                            <OPTION VALUE='Accounts/Finance Professional'>Accounts/Finance Professional
                                            </Option>
                                            <OPTION VALUE='Banking Service Professional'>Banking Service Professional
                                            </Option>
                                            <OPTION VALUE='BPO/ Call Centre/ ITES/ Telecalling'>BPO/ Call Centre/ ITES/
                                                Telecalling
                                            </Option>
                                            <OPTION VALUE='Fashion Designer'>Fashion Designer</Option>
                                            <OPTION VALUE='Graphic Designer'>Graphic Designer</Option>
                                            <OPTION VALUE='Front Office/ Secretarial Staff/ Export/ Import'>Front
                                                Office/
                                                Secretarial Staff/ Export/ Import
                                            </Option>
                                            <OPTION VALUE='Beautician'>Beautician</Option>
                                            <OPTION VALUE='Professor / Lecturer'>Professor / Lecturer</Option>
                                            <OPTION VALUE='Teaching / Academician'>Teaching / Academician</Option>
                                            <OPTION VALUE='Education Professional'>Education Professional</Option>
                                            <OPTION VALUE='Hotel / Hospitality Professional'>Hotel / Hospitality
                                                Professional
                                            </Option>
                                            <OPTION VALUE='HR/ Admin/ PM/ IR/ Training'>HR/ Admin/ PM/ IR/ Training
                                            </Option>
                                            <OPTION VALUE='Software Professional'>Software Professional</Option>
                                            <OPTION VALUE='Hardware Professional'>Hardware Professional</Option>
                                            <OPTION VALUE='Engineer - Non IT'>Engineer - Non IT</Option>
                                            <OPTION VALUE='Production/ Maintenance/ Service Engg.'>Production/
                                                Maintenance/
                                                Service Engg.
                                            </Option>
                                            <OPTION VALUE='Lawyer &amp; Legal Professional'>Lawyer &amp; Legal
                                                Professional
                                            </Option>
                                            <OPTION VALUE='Logistics/ Purchase/ SCM'>Logistics/ Purchase/ SCM</Option>
                                            <OPTION VALUE='Doctor'>Doctor</Option>
                                            <OPTION VALUE='Dentist'>Dentist</Option>
                                            <OPTION VALUE='Health Care Professional'>Health Care Professional</Option>
                                            <OPTION VALUE='Paramedical Professional'>Paramedical Professional</Option>
                                            <OPTION VALUE='Nurse'>Nurse</Option>
                                            <OPTION VALUE='Marketing Professional'>Marketing Professional</Option>
                                            <OPTION VALUE='Sales Professional'>Sales Professional</Option>
                                            <OPTION VALUE='Journalist'>Journalist</Option>
                                            <OPTION VALUE='Media Professional'>Media Professional</Option>
                                            <OPTION VALUE='Entertainment Professional'>Entertainment Professional
                                            </Option>
                                            <OPTION VALUE='Event Management Professional'>Event Management Professional
                                            </Option>
                                            <OPTION VALUE='Advertising / PR Professional'>Advertising / PR Professional
                                            </Option>
                                            <OPTION VALUE='Mariner / Merchant Navy'>Mariner / Merchant Navy</Option>
                                            <OPTION VALUE='Scientist / Researcher'>Scientist / Researcher</Option>
                                            <OPTION VALUE='CXO / President, Director, Chairman'>CXO / President,
                                                Director,
                                                Chairman
                                            </Option>
                                            <OPTION VALUE='Business'>Business</Option>
                                            <OPTION VALUE='Customer Care Professional'>Customer Care Professional
                                            </Option>
                                            <OPTION VALUE='Social Worker'>Social Worker</Option>
                                            <OPTION VALUE='Sportsman'>Sportsman</Option>
                                            <OPTION VALUE='Technician'>Technician</Option>
                                            <OPTION VALUE='Arts &amp; Craftsman'>Arts &amp; Craftsman</Option>
                                            <OPTION VALUE='Army'>Army</Option>
                                            <OPTION VALUE='Navy'>Navy</Option>
                                            <OPTION VALUE='Airforce'>Airforce</Option>
                                            <OPTION VALUE='IAS/IES/IFS/IPS/Others'>IAS/IES/IFS/IPS/Others</Option>
                                            <OPTION VALUE='Unemployed'>Unemployed</Option>
                                            <OPTION VALUE='Others'>Others</Option>
                                            <OPTION VALUE='Not Working'>Not Working</Option>
                                            <OPTION VALUE='Officer'>Officer</Option>
                                            <OPTION VALUE='Executive'>Executive</Option>
                                            <OPTION VALUE='Clerk'>Clerk</Option>
                                            <OPTION VALUE='Agriculture &amp; Farming Professional'>Agriculture &amp;
                                                Farming Professional
                                            </Option>
                                            <OPTION VALUE='Auditor'>Auditor</Option>
                                            <OPTION VALUE='Consultant'>Consultant</Option>
                                            <OPTION VALUE='dermatologist'>dermatologist</Option>
                                        </select>

                                    </div>

                        </div>
                                     <div class="row update_profile_row">
                                    <div class="col-sm-6">
                                        <select name="p_salary" id="annual_income_partner"
                                                class="form-control drop_edit txt_wizard">
                                            <option selected="selected"
                                                    value="{{isset($user->p_salary)?$user->p_salary:'Any'}}">{{isset($user->p_salary)?$user->p_salary:' Doesnt Matter'}}</option>
                                            <option selected="selected" value="">Select Income</option>
                                            <OPTION VALUE='Any'>Any</Option>
                                            <option>Under Rs.50,000</option>
                                            <option>Rs.50,001 - 1,00,000</option>
                                            <option>Rs.1,00,001 - 1,50,000</option>
                                            <option>Rs.1,50,001 - 2,00,000</option> 
                                            <option>Rs.2,00,001 - 2,50,000</option>
                                            <option>Rs.2,50,001 - 3,00,000</option>
                                            <option>Rs.3,00,001 - 5,00,000</option>
                                            <option>Rs.5,00,001 - 7,00,000</option>
                                            <option>Rs.7,00,001 - 10,00,000</option>
                                            <option>Rs.10,00,001 - 15,00,000</option>
                                            <option>Rs.15,00,001 - 20,00,000</option>
                                            <option>Rs.20,00,001 - 25,00,000</option>
                                            <option>Rs.25,00,001 - 50,00,000</option>
                                            <option>Rs.50,00,001 - 75,00,000</option>
                                            <option>Rs.75,00,001 - 100,00,000</option>
                                            <option>Rs.100,00,001 and above</option>
                                            <option>Under $25,000</option>
                                            <option>$25,001 - 50,000</option>
                                            <option>$50,001 - 75,000</option>
                                            <option>$75,001 - 100,000</option>
                                            <option>$100,001 - 150,000</option>
                                            <option>$150,001 - 200,000</option>
                                            <option>$200,001 and above</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="row update_profile_row">
                                    <div class="col-sm-6">
                                        <select id="Material_status-Partner" name="p_physical"
                                                class="form-control drop_edit txt_wizard">
                                            <option selected="selected"
                                                    value="{{isset($user->p_physical)?$user->p_physical:'Any'}}">{{isset($user->p_physical)?$user->p_physical:' Doesnt Matter'}}</option>
                                            <option selected="">Physical status</option>
                                            <option value="Normal">Normal</option>
                                            <option value="Physically challenged">Physically challenged</option>
                                            <option value="Does not matter">Doesn't Matter</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="diet" id="Diet_Partner" class="form-control drop_edit txt_wizard">
                                            <option selected="selected"
                                                    value="{{isset($user->diet)?$user->diet:'Any'}}">{{isset($user->diet)?$user->diet:' Doesnt Matter'}}</option>
                                            <option value="Vegetarian">Vegetarian</option>
                                            <option value="Non Vegetarian">Non Vegetarian</option>
                                            <option>Doesn't Matter</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="submit_btnbox row">
                                    <div class="after_editable_btnbox">
                                        <button type="button"
                                                class="btn btn-primary btn-sm center_btnmargin search_filter search_filter"
                                                id="btn_Update_profile"><i
                                                    class="mdi mdi-account-check basic_icon_margin"></i>Update Profile
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm" id="btn_Edit_profile9"
                                                onclick="AddEditable(this);"><i
                                                    class="mdi mdi-close basic_icon_margin"></i>Cancel
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-success btn-sm" id="btn_Edit_profile10"
                                            onclick="RemoveEditable(this);"><i
                                                class="mdi mdi-account-edit basic_icon_margin"></i>Edit Profile
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="updated_box ">
                            <div class="top_heading_box">
                                <span class="heading_txt">Life Style</span>
                                <span class="collapse_btnbox pull-right">
                                <i class="mdi mdi-plus" onclick="Collapsebtn(this);"></i>
                            </span>
                            </div>
                            <div class="update_databox editable_false">


                                <div class="row update_profile_row">
                                    <div class="col-sm-6">
                                        <select name="diet" class="form-control drop_edit requiredDD txt_wizard">
                                            <option value="">Eating Habit*</option>
                                            <option selected="" value="Vegetarian">Vegetarian</option>
                                            <option value="Non vegetarian">Non Vegetarian</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <select id="body_type" name="body_type" class="form-control drop_edit">
                                            <option value="">Body Type</option>
                                            <option {{$user->body_type == "Average"?'selected':''}} value="Average">
                                                Average
                                            </option>
                                            <option {{$user->body_type == "Athletic"?'selected':''}} value="Athletic">
                                                Athletic
                                            </option>
                                            <option {{$user->body_type == "Slim"?'selected':''}} value="Slim">
                                                Slim
                                            </option>
                                            <option {{$user->body_type == "Heavy"?'selected':''}} value="Heavy">
                                                Heavy
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row update_profile_row">
                                    <div class="col-sm-6">
                                        <select name="p_drinking_habit"
                                                class="form-control drop_edit requiredDD txt_wizard">
                                            <option value="">Drinking Habits*</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="p_smoking_habit"
                                                class="form-control drop_edit requiredDD txt_wizard">
                                            <option value="">Smoking Habits*</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row update_profile_row">
                                    <div class="col-sm-6">
                                        <div class="textbox_containner">
                                            <input type="text" editable="false" name="weight" autocomplete="off"
                                                   class="animate_txt " id="weight"
                                                   placeholder="Weight">
                                            <label class="animate_placeholder" for="weight">Weight</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="complexion" class="form-control drop_edit requiredDD txt_wizard">
                                            <option value="">Select Complexion</option>
                                            <option selected="" value="Very fair">Very fair</option>
                                            <option value="Fair">Fair</option>
                                            <option value="Wheatish">Wheatish</option>
                                            <option value="Wheatish Brown">Wheatish Brown</option>
                                            <option value="Brown">Brown</option>
                                            <option value="Dark">Dark</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row update_profile_row">
                                    <div class="col-sm-6">
                                        <select name="blood_group" class="form-control drop_edit txt_wizard" type="text"
                                                id="blood_group">
                                            <option value="Not mentioned" selected="selected"> Select Blood Group
                                            </option>
                                            <option value="O+">O+</option>
                                            <option value="A+">A+</option>
                                            <option value="B+">B+</option>
                                            <option value="O-">O-</option>
                                            <option value="A-">A-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB-">AB-</option>
                                            <option value="A1B+">A1B+</option>
                                            <option value="A1B-">A1B-</option>
                                            <option value="A2B+">A2B+</option>
                                            <option value="A2B-">A2B-</option>
                                            <option value="A1+">A1+</option>
                                            <option value="A1-">A1-</option>
                                            <option value="A2+">A2+</option>
                                            <option value="A2-">A2-</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <select id="p_physical" class="form-control drop_edit txt_wizard"
                                                name="p_physical">
                                            <option value="" selected="selected">Physical Status</option>
                                            <option value="Normal">Normal</option>
                                            <option value="Physically challenged">Physically challenged</option>
                                            <option value="Does not matter">Does not matter</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="submit_btnbox row">
                                    <div class="after_editable_btnbox">
                                        <button type="button"
                                                class="btn btn-primary btn-sm center_btnmargin search_filter search_filter"
                                                id="btn_Update_profile"><i
                                                    class="mdi mdi-account-check basic_icon_margin"></i>Update Profile
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm" id="btn_Edit_profile11"
                                                onclick="AddEditable(this);"><i
                                                    class="mdi mdi-close basic_icon_margin"></i>Cancel
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-success btn-sm" id="btn_Edit_profile12"
                                            onclick="RemoveEditable(this);"><i
                                                class="mdi mdi-account-edit basic_icon_margin"></i>Edit Profile
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <p id="err"></p>
    </section>

    <script>
        $(document).ready(function () {
            $(".search_filter").click(function () {
                var value = $(".filter_form").serialize();
                $.ajax({
                    type: 'POST',
                    url: "{{ url('profile_update')}}",
                    data: value,
                    success: function (data) {
                        if (data == 'reverify') {
                            swal("Success", "Details has been updated...please verify your new contactnow", "success");
                            setTimeout(function () {
                                ShowLoginSignup('verify');
                            }, 2000);
                        } else {
                            swal("Success", "Details has been updated", "success");
                        }
                    },
                    error: function (results) {
//                        swal("Error", "Server Error", "error");
                        $('#err').html(results.responseText);
                    }
                });
            });
        });
        $(document).ready(function () {
            $('.dob').datepicker({
                format: "dd-MM-yyyy",
                maxViewMode: 2,
                endDate: '-18y',
                daysOfWeekHighlighted: "0",
                autoclose: true,
            });
        });
    </script>
@stop
