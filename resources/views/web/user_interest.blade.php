@extends('web.web_master')

@section('title','Mangal Mandap : Profiles List')
@section('head')
    <style>

    </style>
@stop
@section('content')
    <section class="regitration_member all_pagescontainner">
        <div class="container">
            <div class="candidate_list_box">
                <div class="cand_search_filterbox res_none">
                    <div class="search_filter_head">Our Promise</div>
                    <ul class="style-scroll promise_member">
                        <li>
                            <i class="promise_icon mdi mdi-account-card-details"></i>
                            <h4 class="promise_caption">Best Matches</h4>
                        </li>
                        <li>
                            <i class="promise_icon mdi mdi-account-star"></i>
                            <h4 class="promise_caption">Verified Profile</h4>
                        </li>
                        <li>
                            <i class="promise_icon mdi mdi-security-network"></i>
                            <h4 class="promise_caption">Privacy Control</h4>
                        </li>
                        <li>
                            <i class="promise_icon mdi mdi-server-security"></i>
                            <h4 class="promise_caption">Fully Secure</h4>
                        </li>
                    </ul>
                </div>
                <div class="cand_list_containner">
                    <div class="heading_row">
                        <span class="heading_txt">Profiles List</span>
                    </div>
                    <div class="photoupload_containner">
                        <div id="exTab3" class="">
                            <div class="tab-content clearfix">
                                <ul class="nav nav-pills">
                                    <li class="active">
                                        <a href="#1b" data-toggle="tab">Send Interests</a>
                                    </li>
                                    <li><a href="#2b" data-toggle="tab">Receive Interests</a>
                                    </li>
                                    <li><a href="#3b" data-toggle="tab">Accepted</a>
                                    </li>
                                    {{--<li><a href="#4a" data-toggle="tab">Background color</a>--}}
                                    {{--</li>--}}
                                </ul>
                                <div class="cand_list_containner tab-pane active" id="1b">
                                    @if(count($send_requests)>0)
                                        @foreach($send_requests as $send_request)
                                            @php
                                                $search_user = \App\Profiles::find($send_request->friend_id);
                                                 $image = \App\Images::find($search_user->id);
                                             $session_user1 = $_SESSION['user_master']->id;
                                         $queryResult = \Illuminate\Support\Facades\DB::select("call GetFriendType($session_user1,$send_request->friend_id)");
                                          $result = collect($queryResult);
                                            @endphp
                                            <div class="cand_box">
                                                <div class="cand_imgbox">
                                                    {{--@if(file_exists($image->pic1))--}}
                                                        {{--<img class="cand_img" src="{{url('').'/'.$image->pic1}}"/>--}}
                                                    {{--@else--}}
                                                        {{--@if($search_user->gender == 'male')--}}
                                                            {{--<img class="cand_img" src="{{url('images/male.png')}}"/>--}}
                                                        {{--@else--}}
                                                            {{--<img class="cand_img"--}}
                                                                 {{--src="{{url('images/female.png')}}"/>--}}
                                                        {{--@endif--}}
                                                    {{--@endif--}}
                                                        @if($search_user->is_show_pic == '1')
                                                            @if(isset($image->pic1) && file_exists($image->pic1))
                                                                <img class="cand_img" src="{{url('').'/'.$image->pic1}}"/>
                                                            @else
                                                                @if($search_user->gender == 'male')
                                                                    <img class="cand_img" src="{{url('images/male.png')}}"/>
                                                                @else
                                                                    <img class="cand_img" src="{{url('images/female.png')}}"/>
                                                                @endif
                                                            @endif
                                                        @else
                                                            <img class="cand_img"
                                                                 src="{{url('images/female_large_protected.jpg')}}"/>
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
                                                    <div class="cand_name" style="cursor: pointer;"
                                                         onclick="location.href='{{url('view_profile').'/'.$search_user->id}}';">{{$search_user->name}}{{'(MM'.$search_user->id.')'}}</div>
                                                    <ul class="cand_info">
                                                        <li>{{isset($search_user->age)?$search_user->age:'Not Specified'}}
                                                            Years
                                                        </li>


                                                        <li>{{isset($search_user->height)?$search_user->height:'Not Specified'}}</li>

                                                        <li>{{isset($search_user->city)?$search_user->city:'Not Specified'}}</li>

                                                        <li>{{isset($search_user->religion)?$search_user->religion:'Not Specified'}}</li>

                                                        <li>{{isset($search_user->caste)?$search_user->caste:'Not Specified'}}</li>

                                                        <li>{{isset($search_user->language)?$search_user->language:'Not Specified'}}</li>

                                                        <li>{{isset($search_user->status)?$search_user->status:'Not Specified'}}</li>
                                                        <li data-toggle="tooltip" data-placement="bottom"
                                                            title="{{$search_user->education_detail}}">{{\Illuminate\Support\Str::limit($search_user->education,25)}}</li>
                                                    </ul>
                                                </div>
                                                <div class="cand_btnbox">
                                                    <div class="btn-group cand_btncontainner"
                                                         style="margin-bottom: 25px;">
                                                        {{--<button type="button" class="btn btn-success btn-xs res_btn"><span--}}
                                                        {{--class="mdi mdi-heart"></span></button>--}}
                                                        {{--<button type="button" class="btn btn-success btn-xs res_btn">Send Interest--}}
                                                        {{--</button>--}}
                                                        <a class="popup_submitbtn_view btn-sm btn-primary"
                                                           href="{{url('view_profile').'/'.$search_user->id}}">View
                                                            Profile
                                                            {{--<button type="button" class="btn btn-primary btn-xs res_btn"><span--}}
                                                            {{--class="mdi mdi-eye"></span></button>--}}
                                                            {{--<button type="button" class="btn btn-primary btn-xs res_btn">View Profile--}}
                                                            {{--</button>--}}
                                                        </a>
                                                    </div>

                                                    @php
                                                        $session_user = $_SESSION['user_master']->id;
                                                         $queryResult = \Illuminate\Support\Facades\DB::select("call GetFriendType($session_user,$search_user->id)");
                                                          $result = collect($queryResult);
                                                    @endphp
                                                    @if($result[0]->status_ == 'SENDER')
                                                        {{--<div class="btn-group cand_btncontainner"--}}
                                                        {{--data-content="{{$search_user->id}}"--}}
                                                        {{--id="pending_{{$search_user->id}}"--}}
                                                        {{--onclick="cancelrequest(this);">--}}
                                                        {{--<button type="button"--}}
                                                        {{--class="btn btn-danger btn-xs res_btn"><span--}}
                                                        {{--class="mdi mdi-close"></span></button>--}}
                                                        {{--<button type="button"--}}
                                                        {{--class="btn btn-danger btn-xs res_btn">Cancel--}}
                                                        {{--Interest--}}
                                                        {{--</button>--}}
                                                        {{--</div>--}}
                                                        <div class="btn-group cand_btncontainner"
                                                             style="margin-bottom: 25px;">
                                                            <a href="#" data-content="{{$search_user->id}}"
                                                               id="pending_{{$search_user->id}}"
                                                               onclick="cancelrequest(this);"
                                                               class="popup_submitbtn_cancel btn-sm btn-danger">Cancel
                                                                Interest</a>
                                                        </div>
                                                    @endif
                                                    {{--<div class="btn-group cand_btncontainner" onclick="ShowLoginSignup('signin');">--}}
                                                    {{--<button type="button" class="btn btn-success btn-sm res_btn"><span--}}
                                                    {{--class="mdi mdi-phone"></span></button>--}}
                                                    {{--<button type="button" class="btn btn-success btn-sm res_btn">Contact</button>--}}
                                                    {{--</div>--}}
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="list_no_record">< No Record Available ></div>
                                    @endif
                                    {{--<div align="center">--}}
                                    {{--{{$users->links()}}--}}
                                    {{--</div>--}}
                                </div>
                                <div class="tab-pane" id="2b">
                                    @if(count($request_lists)>0)
                                        @foreach($request_lists as $request_list)
                                            @php
                                                $search_user = \App\Profiles::find($request_list->user_id);
                                                 $image = \App\Images::find($search_user->id);
                                            $session_user1 = $_SESSION['user_master']->id;
                                         $queryResult = \Illuminate\Support\Facades\DB::select("call GetFriendType($session_user1,$request_list->user_id)");
                                          $result = collect($queryResult);
                                            @endphp
                                            <div class="cand_box">
                                                <div class="cand_imgbox">
                                                    @if($search_user->is_show_pic == '1')
                                                        @if(isset($image->pic1) && file_exists($image->pic1))
                                                            <img class="cand_img" src="{{url('').'/'.$image->pic1}}"/>
                                                        @else
                                                            @if($search_user->gender == 'male')
                                                                <img class="cand_img" src="{{url('images/male.png')}}"/>
                                                            @else
                                                                <img class="cand_img" src="{{url('images/female.png')}}"/>
                                                            @endif
                                                        @endif
                                                    @else
                                                        <img class="cand_img"
                                                             src="{{url('images/female_large_protected.jpg')}}"/>
                                                    @endif
                                                    <div class="overlay_trust">
                                                        {{--<div class="meter_img img_80">80%</div>--}}
                                                        <div class="pics_counter_box"><i class="mdi mdi-camera"></i>
                                                            {{--<span class="pics_counter">3</span>--}}
                                                            {{--<ul class="lightgallery list-unstyled">--}}
                                                            {{--<li data-src="{{url('').'/'.$image->pic1}}">--}}
                                                            {{--<img src="{{url('').'/'.$image->pic1}}"/>--}}
                                                            {{--</li>--}}
                                                            {{--<li data-src="{{url('').'/'.$image->pic2}}">--}}
                                                            {{--<img src="{{url('').'/'.$image->pic2}}"/>--}}
                                                            {{--</li>--}}
                                                            {{--<li data-src="{{url('').'/'.$image->pic3}}">--}}
                                                            {{--<img src="{{url('').'/'.$image->pic3}}"/>--}}
                                                            {{--</li>--}}
                                                            {{--</ul>--}}
                                                        </div>
                                                        <div class="meter_caption">Reliable Score</div>
                                                    </div>
                                                </div>
                                                <div class="cand_details">
                                                    <div class="cand_name" style="cursor: pointer;"
                                                         onclick="location.href='{{url('view_profile').'/'.$search_user->id}}';">{{$search_user->name}}{{'(MM'.$search_user->id.')'}}</div>
                                                    <ul class="cand_info">
                                                        <li>{{isset($search_user->age)?$search_user->age:'Not Specified'}}
                                                            Years
                                                        </li>


                                                        <li>{{isset($search_user->height)?$search_user->height:'Not Specified'}}</li>

                                                        <li>{{isset($search_user->city)?$search_user->city:'Not Specified'}}</li>

                                                        <li>{{isset($search_user->religion)?$search_user->religion:'Not Specified'}}</li>

                                                        <li>{{isset($search_user->caste)?$search_user->caste:'Not Specified'}}</li>

                                                        <li>{{isset($search_user->language)?$search_user->language:'Not Specified'}}</li>

                                                        <li>{{isset($search_user->status)?$search_user->status:'Not Specified'}}</li>
                                                        <li data-toggle="tooltip" data-placement="bottom"
                                                            title="{{$search_user->education_detail}}">{{\Illuminate\Support\Str::limit($search_user->education,25)}}</li>
                                                    </ul>
                                                </div>
                                                <div class="cand_btnbox">
                                                    <div class="btn-group cand_btncontainner"
                                                         style="margin-bottom: 25px;">
                                                        {{--<button type="button" class="btn btn-success btn-xs res_btn"><span--}}
                                                        {{--class="mdi mdi-heart"></span></button>--}}
                                                        {{--<button type="button" class="btn btn-success btn-xs res_btn">Send Interest--}}
                                                        {{--</button>--}}
                                                        <a class="popup_submitbtn_view btn-sm btn-primary"
                                                           href="{{url('view_profile').'/'.$search_user->id}}">View
                                                            Profile
                                                            {{--<button type="button" class="btn btn-primary btn-xs res_btn"><span--}}
                                                            {{--class="mdi mdi-eye"></span></button>--}}
                                                            {{--<button type="button" class="btn btn-primary btn-xs res_btn">View Profile--}}
                                                            {{--</button>--}}
                                                        </a>
                                                    </div>

                                                    @php
                                                        $session_user = $_SESSION['user_master']->id;
                                                         $queryResult = \Illuminate\Support\Facades\DB::select("call GetFriendType($session_user,$search_user->id)");
                                                          $result = collect($queryResult);
                                                    @endphp
                                                    @if($result[0]->status_ == 'RECIEVER')
                                                        {{--<div class="btn-group cand_btncontainner"--}}
                                                        {{--data-content="{{$search_user->id}}"--}}
                                                        {{--id="pending_{{$search_user->id}}"--}}
                                                        {{--onclick="acceptfrequest(this);">--}}
                                                        {{--<button type="button"--}}
                                                        {{--class="btn btn-success btn-xs res_btn"><span--}}
                                                        {{--class="mdi mdi-check"></span></button>--}}
                                                        {{--<button type="button"--}}
                                                        {{--class="btn btn-success btn-xs res_btn">Accept--}}
                                                        {{--Interest--}}
                                                        {{--</button>--}}
                                                        {{--</div>--}}
                                                        <div class="btn-group cand_btncontainner"
                                                             style="margin-bottom: 25px;">
                                                            <a href="#"
                                                               data-content="{{$search_user->id}}"
                                                               id="pending_{{$search_user->id}}"
                                                               onclick="acceptfrequest(this);"
                                                               class="popup_submitbtn_cancel btn-sm btn-success">Accept
                                                                Interest</a>
                                                        </div>
                                                    @endif
                                                    {{--<div class="btn-group cand_btncontainner" onclick="ShowLoginSignup('signin');">--}}
                                                    {{--<button type="button" class="btn btn-success btn-sm res_btn"><span--}}
                                                    {{--class="mdi mdi-phone"></span></button>--}}
                                                    {{--<button type="button" class="btn btn-success btn-sm res_btn">Contact</button>--}}
                                                    {{--</div>--}}
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="list_no_record">< No Record Available ></div>
                                    @endif
                                </div>
                                <div class="tab-pane" id="3b">
                                    @if(count($friends)>0)
                                        @foreach($friends as $search_user)
                                            @php
                                                $user_ = \App\Profiles::find($search_user->id);
                                                $image = \App\Images::find($search_user->id);
                                               $session_user1 = $_SESSION['user_master']->id;
                                         $queryResult = \Illuminate\Support\Facades\DB::select("call GetFriendType($session_user1,$search_user->id)");
                                          $result = collect($queryResult);
                                            @endphp
                                            <div class="cand_box">
                                                <div class="cand_imgbox">
                                                    @if($user_->is_show_pic == '1')
                                                        @if(isset($image->pic1) && file_exists($image->pic1))
                                                            <img class="cand_img" src="{{url('').'/'.$image->pic1}}"/>
                                                        @else
                                                            @if($user_->gender == 'male')
                                                                <img class="cand_img" src="{{url('images/male.png')}}"/>
                                                            @else
                                                                <img class="cand_img" src="{{url('images/female.png')}}"/>
                                                            @endif
                                                        @endif
                                                    @else
                                                        <img class="cand_img"
                                                             src="{{url('images/female_large_protected.jpg')}}"/>
                                                    @endif
                                                    <div class="overlay_trust">
                                                        {{--<div class="meter_img img_80">80%</div>--}}
                                                        <div class="pics_counter_box"><i class="mdi mdi-camera"></i>
                                                            {{--<span class="pics_counter">3</span>--}}
                                                            {{--<ul class="lightgallery list-unstyled">--}}
                                                            {{--<li data-src="{{url('').'/'.$image->pic1}}">--}}
                                                            {{--<img src="{{url('').'/'.$image->pic1}}"/>--}}
                                                            {{--</li>--}}
                                                            {{--<li data-src="{{url('').'/'.$image->pic2}}">--}}
                                                            {{--<img src="{{url('').'/'.$image->pic2}}"/>--}}
                                                            {{--</li>--}}
                                                            {{--<li data-src="{{url('').'/'.$image->pic3}}">--}}
                                                            {{--<img src="{{url('').'/'.$image->pic3}}"/>--}}
                                                            {{--</li>--}}
                                                            {{--</ul>--}}
                                                        </div>
                                                        <div class="meter_caption">Reliable Score</div>
                                                    </div>
                                                </div>
                                                <div class="cand_details">
                                                    <div class="cand_name" style="cursor: pointer;"
                                                         onclick="location.href='{{url('view_profile').'/'.$search_user->id}}';">{{$search_user->name}}{{'(MM'.$search_user->id.')'}}</div>
                                                    <ul class="cand_info">
                                                        <li>{{isset($search_user->age)?$search_user->age:'Not Specified'}}
                                                            Years
                                                        </li>


                                                        <li>{{isset($search_user->height)?$search_user->height:'Not Specified'}}</li>

                                                        <li>{{isset($search_user->city)?$search_user->city:'Not Specified'}}</li>

                                                        <li>{{isset($search_user->religion)?$search_user->religion:'Not Specified'}}</li>

                                                        <li>{{isset($search_user->caste)?$search_user->caste:'Not Specified'}}</li>

                                                        <li>{{isset($search_user->language)?$search_user->language:'Not Specified'}}</li>

                                                        <li>{{isset($search_user->status)?$search_user->status:'Not Specified'}}</li>
                                                        <li data-toggle="tooltip" data-placement="bottom"
                                                            title="{{$search_user->education}}">{{\Illuminate\Support\Str::limit($search_user->education,25)}}</li>
                                                    </ul>
                                                </div>
                                                <div class="cand_btnbox">
                                                    <div class="btn-group cand_btncontainner"
                                                         style="margin-bottom: 25px;">
                                                        {{--<button type="button" class="btn btn-success btn-xs res_btn"><span--}}
                                                        {{--class="mdi mdi-heart"></span></button>--}}
                                                        {{--<button type="button" class="btn btn-success btn-xs res_btn">Send Interest--}}
                                                        {{--</button>--}}
                                                        <a class="popup_submitbtn_view btn-sm btn-primary"
                                                           href="{{url('view_profile').'/'.$search_user->id}}">View
                                                            Profile
                                                            {{--<button type="button" class="btn btn-primary btn-xs res_btn"><span--}}
                                                            {{--class="mdi mdi-eye"></span></button>--}}
                                                            {{--<button type="button" class="btn btn-primary btn-xs res_btn">View Profile--}}
                                                            {{--</button>--}}
                                                        </a>
                                                    </div>

                                                    @php
                                                        $session_user = $_SESSION['user_master']->id;
                                                         $queryResult = \Illuminate\Support\Facades\DB::select("call GetFriendType($session_user,$search_user->id)");
                                                          $result = collect($queryResult);
                                                    @endphp
                                                    @if($result[0]->status_ == 'FRIENDS')
                                                        {{--<div class="btn-group cand_btncontainner"--}}
                                                        {{--data-content="{{$search_user->id}}"--}}
                                                        {{--id="friends_{{$search_user->id}}">--}}
                                                        {{--<button type="button"--}}
                                                        {{--class="btn btn-default btn-xs res_btn"><span--}}
                                                        {{--class="mdi mdi-account-check"></span>--}}
                                                        {{--</button>--}}
                                                        {{--<button type="button"--}}
                                                        {{--class="btn btn-default btn-xs res_btn">Friends--}}
                                                        {{--</button>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="btn-group cand_btncontainner"--}}
                                                        {{--data-content="{{$search_user->id}}"--}}
                                                        {{--id="friends_{{$search_user->id}}"--}}
                                                        {{--onclick="unfriend(this);">--}}
                                                        {{--<button type="button"--}}
                                                        {{--class="btn btn-warning btn-xs res_btn"><span--}}
                                                        {{--class="mdi mdi-account-off"></span></button>--}}
                                                        {{--<button type="button"--}}
                                                        {{--class="btn btn-warning btn-xs res_btn">UnFriend--}}
                                                        {{--</button>--}}
                                                        {{--</div>--}}
                                                        <div class="btn-group cand_btncontainner"
                                                             style="margin-bottom: 25px;">
                                                            <a href="#"
                                                               data-content="{{$search_user->id}}"
                                                               id="friends_{{$search_user->id}}"
                                                               onclick="unfriend(this);"
                                                               class="popup_submitbtn_unfriend btn-sm upgrade_bg">UnFriend</a>
                                                        </div>
                                                    @endif
                                                    <div class="btn-group cand_btncontainner"
                                                         style="margin-bottom: 25px;">
                                                        <a href="#" data-content="{{$search_user->id}}"
                                                           id="view_{{$search_user->id}}"
                                                           onclick="view_contact(this)"
                                                           class="popup_submitbtn btn-sm btn-info">View
                                                            Contact</a>
                                                    </div>
                                                    {{--<div class="btn-group cand_btncontainner" onclick="ShowLoginSignup('signin');">--}}
                                                    {{--<button type="button" class="btn btn-success btn-sm res_btn"><span--}}
                                                    {{--class="mdi mdi-phone"></span></button>--}}
                                                    {{--<button type="button" class="btn btn-success btn-sm res_btn">Contact</button>--}}
                                                    {{--</div>--}}
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="list_no_record">< No Record Available ></div>
                                    @endif

                                </div>
                                {{--<div class="tab-pane" id="4b">--}}
                                {{--<h3>We use css to change the background color of the content to be equal to the tab</h3>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
