@extends('web.web_master')

@section('title','Mangal Mandap : My Profile')
@section('head')
    @include('web.usage.lightbox_plugin')

@stop
@section('content')
    <section class="regitration_member all_pagescontainner">
        <div class="container">
            <div class="candidate_list_box">
                <div class="cand_profile_box margin0">
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
                    </div>
                    {{--<div class="profile_status">--}}
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
                    {{--</div>--}}
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
                            <span class="reliable_symbol approved">
                            <i class="mdi mdi-checkbox-marked"></i>
                        </span>
                        </a>
                        <a href="#" class="reliable_row">
                            Aadhar Verification
                            <span class="reliable_symbol not_approved">
                        <i class="mdi mdi-close-box"></i>
                                {{--<i class="mdi mdi-checkbox-marked"></i>--}}
                        </span>
                        </a>
                    </div>
                </div>
                <div class="cand_list_containner">
                    <div class="cand_list_containner">
                        <div class="heading_row">
                            <span class="heading_txt">My Profile</span>
                            <a class="btn-group pull-right" href="{{url('edit_profile')}}">
                                <button type="button" class="btn btn-primary btn-sm res_btn">
                                    <span class="mdi mdi-account-edit"></span></button>
                                <button type="button" class="btn btn-primary btn-sm res_btn">Edit Profile</button>
                            </a>
                        </div>
                        <div class="cand_box cand_profile_containner">
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
                                    <li>{{isset($user->age)?$user->age:'Not Specified'}}
                                        Years
                                    </li>


                                    <li>{{$user->height}}</li>
                                    <li>{{isset($user->state)?$user->state:'-'}}</li>


                                    <li>{{isset($user->city)?$user->city:'Not Specified'}}</li>

                                    <li>{{isset($user->religion)?$user->religion:'Not Specified'}}</li>

                                    <li>{{isset($user->caste)?$user->caste:'Not Specified'}}</li>

                                    <li>{{isset($user->language)?$user->language:'Not Specified'}}</li>
                                    <li>{{isset($user->occupation)?$user->occupation:'Not Specified'}}</li>

                                    <li>{{isset($user->status)?$user->status:'Not Specified'}}</li>
                                    <li data-toggle="tooltip" data-placement="bottom"
                                        title="{{$user->education_detail}}">{{ \Illuminate\Support\Str::limit( $user->education,28)}}</li>


                                </ul>
                            </div>
                        </div>
                        <div class="cand_view_detailsbox">
                            <div class="tab" role="tabpanel">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active links"><a href="#section1"
                                                                                    aria-controls="home"
                                                                                    role="tab" data-toggle="tab"
                                                                                    aria-expanded="true">Personal
                                            Details</a></li>
                                    <li role="presentation" class=" links"><a href="#education" aria-controls="profile"
                                                                              role="tab"
                                                                              data-toggle="tab" aria-expanded="false">Education</a>
                                    </li>
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
                                    <div id="section1">
                                        <section class="pull-left basic" id="section1">
                                            <h3>BASIC</h3>
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
                                                    <li>{{isset($user->manglik)?$user->manglik:'Not Specified'}}</li>


                                                    <li>Gender</li>
                                                    <li>{{$user->gender}}</li>


                                                    <li>Marital Status</li>
                                                    <li>{{isset($user->status)?$user->status:'Not Specified'}}</li>

                                                    <li>Mobile 1</li>
                                                    <li>{{isset($user->mob)?$user->mob:'Not Specified'}}</li>


                                                </ul>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <ul class="cand_info">
                                                    <li>Mother Tongue</li>
                                                    <li>{{isset($user->language)?$user->language:'Not Specified'}}</li>
                                                    <li>Horoscope Match</li>
                                                    <li>{{isset($user->horoscope_match)?$user->horoscope_match:'Not Specified'}}</li>

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

                                                    <li>Mobile 2</li>
                                                    <li>{{isset($user->mob2)?$user->mob2:'Not Specified'}}</li>
                                                </ul>
                                            </div>
                                        </section>
                                    </div>
                                    <br>
                                    <div id="education">
                                        <section class="pull-left partner">
                                            <h3>EDUCATION</h3>
                                            <div class="col-sm-6 ">
                                                <ul class="cand_info view_details_box">
                                                    <li>Education</li>
                                                    <li>{{isset($user->education)?$user->education:'Not Specified'}}</li>
                                                    <li>Education Details</li>
                                                    <li>{{isset($user->education_detail)?$user->education_detail:'Not Specified'}}</li>


                                                </ul>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <ul class="cand_info">
                                                    <li>Degree</li>
                                                    <li>{{isset($user->highest_degree)?$user->highest_degree:'Not Specified'}}</li>

                                                    <li>College</li>
                                                    <li>{{isset($user->college_name)?$user->college_name:'Not Specified'}}</li>
                                                </ul>
                                            </div>
                                        </section>
                                    </div>
                                    <br>
                                    <div id="section2">
                                        <section class="pull-left family">
                                            <h3>FAMILY DETAILS</h3>

                                            <div class="col-sm-6">
                                                <ul class="cand_info view_details_box">
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

                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="cand_info">
                                                    <li>Family Values</li>
                                                    <li>{{isset($user->f_values)?$user->f_values:'Not Specified'}}</li>
                                                    <li>Family Type</li>
                                                    <li>{{isset($user->f_type)?$user->f_type:'Not Specified'}}</li>
                                                    <li>Family Status</li>
                                                    <li>{{$user->f_status}}</li>

                                                    <li>Unmarried Brother (s)</li>
                                                    <li>{{$user->brothers}}</li>
                                                    {{--<li>Unmarried Sister (s)</li>--}}
                                                    {{--<li>{{$user->sisters}}</li>--}}
                                                    {{--<li>Married Brother (s)</li>--}}
                                                    {{--<li>{{$user->bro_married}}</li>--}}
                                                    {{--<li>Unmarried Brother (s)</li>--}}
                                                    {{--<li>{{$user->brothers}}</li>--}}
                                                </ul>
                                            </div>
                                        </section>
                                    </div>
                                    <br>
                                    <div>
                                        <section class="pull-left partner" id="section3">
                                            <h3 class="underline">PARTNER EXPECTATION</h3>
                                            <div class="col-sm-6">
                                                <ul class="cand_info view_details_box">
                                                    <li>Age</li>
                                                    <li>
                                                        From&nbsp; {{$user->p_agefrom}}
                                                        &nbsp;To&nbsp; {{$user->p_ageto}}
                                                    </li>

                                                    <li>Marital Status</li>
                                                    <li>
                                                        {{$user->p_status}}
                                                    </li>

                                                    <li>Religion</li>
                                                    <li>
                                                        {{$user->p_religion}}
                                                    </li>
                                                    <li>Education Partner</li>
                                                    <li>
                                                        {{$user->education_partner}}
                                                    </li>
                                                    <li>City</li>
                                                    <li>
                                                        {{$user->p_city}}
                                                    </li>
                                                    <li>Height</li>
                                                    <li>
                                                        From:&nbsp;{{$user->p_heightfrom}}
                                                        &nbsp;To:&nbsp; {{$user->p_heightto}}
                                                    </li>
                                                    <li>Weight</li>
                                                    <li>
                                                        {{$user->weight}}
                                                    </li>

                                                    <li>Complexion</li>
                                                    <li>
                                                        {{$user->complexion}}
                                                    </li>
                                                    <li>Blood Group</li>
                                                    <li>
                                                        {{$user->blood_group}}
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="cand_info ">
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
                                                    <li>Diet</li>
                                                    <li>
                                                        {{$user->diet}}
                                                    </li>
                                                    <li>Body Type</li>
                                                    <li>
                                                        {{$user->body_type}}
                                                    </li>

                                                    <li>Drinking Habit</li>
                                                    <li>
                                                        {{$user->drinking_habit}}
                                                    </li>

                                                    <li>Smoking Habit</li>
                                                    <li>
                                                        {{$user->smoking_habit}}
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
            </div>
        </div>
    </section>
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
