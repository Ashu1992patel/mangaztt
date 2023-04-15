@if(count($users)>0)
    @if(!isset($_SESSION['user_master']))
        @foreach($users as $search_user)
            @php
                $image = \App\Images::find($search_user->id);
            @endphp
            <div class="cand_box">
                <div class="cand_imgbox">
                    @if(isset($image->pic1))
                        <img class="cand_img" src="{{url('').'/'.$image->pic1}}"/>
                    @else
                        @if($search_user->gender == 'male')
                            <img class="cand_img" src="{{url('images/male.png')}}"/>
                        @else
                            <img class="cand_img" src="{{url('images/female.png')}}"/>
                        @endif
                    @endif

                </div>
                <div class="cand_details">
                    <div class="cand_name" style="cursor: pointer;"
                         onclick="location.href='{{url('view_profile').'/'.$search_user->id}}';">{{$search_user->name}}{{'(MM'.$search_user->id.')'}}</div>
                    <ul class="cand_info">
                        <li>{{isset($search_user->age)?$search_user->age:'Not Specified'}}
                            Years
                        </li>


                        <li>{{$search_user->height}}</li>
                        <li>{{isset($search_user->state)?$search_user->state:'-'}}</li>


                        <li>{{isset($search_user->city)?$search_user->city:'Not Specified'}}</li>

                        <li>{{isset($search_user->religion)?$search_user->religion:'Not Specified'}}</li>

                        <li>{{isset($search_user->caste)?$search_user->caste:'Not Specified'}}</li>

                        <li>{{isset($search_user->language)?$search_user->language:'Not Specified'}}</li>
                        <li>{{isset($search_user->occupation)?$search_user->occupation:'Not Specified'}}</li>

                        <li>{{isset($search_user->status)?$search_user->status:'Not Specified'}}</li>
                        <li data-toggle="tooltip" data-placement="bottom"
                            title="{{$search_user->education_detail}}">{{\Illuminate\Support\Str::limit( $search_user->education,28)}}</li>
                    </ul>
                </div>
                <div class="cand_btnbox">
                    <div class="btn-group cand_btncontainner" style="margin-bottom: 25px;">
                        <a class="popup_submitbtn btn-sm btn-primary"
                           href="{{url('view_profile').'/'.$search_user->id}}">View Profile
                        </a>
                    </div>
                    <div class="btn-group cand_btncontainner" style="margin-bottom: 25px;">
                        <a href="#" data-content="{{$search_user->id}}"
                           id="send_{{$search_user->id}}"
                           onclick="send_interest(this)"
                           class="popup_submitbtn2 btn-sm btn-success">Send
                            Interest</a>
                    </div>
                    <div class="btn-group cand_btncontainner" style="margin-bottom: 25px;">
                        <a href="#" data-content="{{$search_user->id}}"
                           id="view_{{$search_user->id}}" onclick="view_contact(this)"
                           class="popup_submitbtn_lv btn-sm upgrade_bg">View Contact</a>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $users->links() }}
    @else
        <div class="home_brics_row">
            <div class="row">
                <div class="col-sm-4">
                    <div class="white_brics">
                        <div class="white_icon_withtxt">
                            <div class="white_icons_blk"><i class="mdi mdi-heart-box"></i></div>
                            <div class="white_brics_txt">Interest Receive</div>
                            <div class="white_brics_count">1</div>
                        </div>
                        <div class="brics_progress white_brics_border_clr1"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="white_brics">
                        <div class="white_icon_withtxt">
                            <div class="white_icons_blk white_brics_clr2"><i
                                        class="mdi mdi-contact-mail"></i>
                            </div>
                            <div class="white_brics_txt">Contact Left</div>
                            <div class="white_brics_count">100</div>
                        </div>
                        <div class="brics_progress white_brics_border_clr2"></div>
                    </div>

                </div>

                <div class="col-sm-4">
                    <div class="white_brics">
                        <div class="white_icon_withtxt">
                            <div class="white_icons_blk white_brics_clr4"><i
                                        class="mdi mdi-account-card-details"></i></div>
                            <div class="white_brics_txt">Plan</div>
                            <div class="white_brics_count">Gold</div>
                        </div>
                        <div class="brics_progress white_brics_border_clr4"></div>
                    </div>
                </div>
            </div>
        </div>
        @if(count($users)>0)
            @foreach($users as $search_user)
                @php
                    $image = \App\Images::find($search_user->id);
                @endphp
                <div class="cand_box">
                    <div class="cand_imgbox" style="cursor: pointer;"
                         onclick="location.href='{{url('view_profile').'/'.$search_user->id}}';">
                        @if(isset($image->pic1))
                            <img class="cand_img" src="{{url('').'/'.$image->pic1}}"/>
                        @else
                            @if($search_user->gender == 'male')
                                <img class="cand_img" src="{{url('images/male.png')}}"/>
                            @else
                                <img class="cand_img" src="{{url('images/female.png')}}"/>
                            @endif
                        @endif

                    </div>
                    <div class="cand_details">
                        <div class="cand_name" style="cursor: pointer;"
                             onclick="location.href='{{url('view_profile').'/'.$search_user->id}}';">{{$search_user->name}}{{'(MM'.$search_user->id.')'}}</div>
                        <ul class="cand_info">
                            <li>{{isset($search_user->age)?$search_user->age:'Not Specified'}}
                                Years
                            </li>


                            <li>{{$search_user->height}}</li>
                            <li>{{isset($search_user->state)?$search_user->state:'-'}}</li>


                            <li>{{isset($search_user->city)?$search_user->city:'Not Specified'}}</li>

                            <li>{{isset($search_user->religion)?$search_user->religion:'Not Specified'}}</li>

                            <li>{{isset($search_user->caste)?$search_user->caste:'Not Specified'}}</li>

                            <li>{{isset($search_user->language)?$search_user->language:'Not Specified'}}</li>
                            <li>{{isset($search_user->occupation)?$search_user->occupation:'Not Specified'}}</li>

                            <li>{{isset($search_user->status)?$search_user->status:'Not Specified'}}</li>
                            <li data-toggle="tooltip" data-placement="bottom"
                                title="{{$search_user->education_detail}}">{{\Illuminate\Support\Str::limit( $search_user->education,28)}}</li>
                        </ul>
                    </div>
                    <div class="cand_btnbox">

                        <div class="btn-group cand_btncontainner" style="margin-bottom: 25px;">
                            {{--<button type="button" class="btn btn-success btn-xs res_btn"><span--}}
                            {{--class="mdi mdi-heart"></span></button>--}}
                            {{--<button type="button" class="btn btn-success btn-xs res_btn">Send Interest--}}
                            {{--</button>--}}
                            <a class="popup_submitbtn_view btn-sm btn-primary"
                               href="{{url('view_profile').'/'.$search_user->id}}">View Profile
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
                        @if($result[0]->status_ == 'NULL')
                            {{--<div class="btn-group cand_btncontainner"--}}
                            {{--data-content="{{$search_user->id}}"--}}
                            {{--id="send_{{$search_user->id}}" onclick="send_interest(this)">--}}
                            {{--<button type="button" class="btn btn-success btn-xs res_btn"><span--}}
                            {{--class="mdi mdi-heart"></span></button>--}}
                            {{--<button type="button" class="btn btn-success btn-xs res_btn">Send--}}
                            {{--Interest--}}
                            {{--</button>--}}
                            {{--</div>--}}

                            <div class="btn-group cand_btncontainner" style="margin-bottom: 25px;">
                                <a href="#" data-content="{{$search_user->id}}"
                                   id="send_{{$search_user->id}}" onclick="send_interest(this)"
                                   class="popup_submitbtn3 btn-sm btn-success">Send Interest</a>
                            </div>
                        @elseif($result[0]->status_ == 'SENDER')
                            {{--<div class="btn-group cand_btncontainner"--}}
                            {{--data-content="{{$search_user->id}}"--}}
                            {{--id="pending_{{$search_user->id}}" onclick="cancelrequest(this);">--}}
                            {{--<button type="button" class="btn btn-danger btn-xs res_btn"><span--}}
                            {{--class="mdi mdi-close"></span></button>--}}
                            {{--<button type="button" class="btn btn-danger btn-xs res_btn">Cancel--}}
                            {{--Interest--}}
                            {{--</button>--}}
                            {{--</div>--}}
                            <div class="btn-group cand_btncontainner" style="margin-bottom: 25px;">
                                <a href="#" data-content="{{$search_user->id}}"
                                   id="pending_{{$search_user->id}}" onclick="cancelrequest(this);"
                                   class="popup_submitbtn_cancel btn-sm btn-danger">Cancel
                                    Interest</a>
                            </div>
                        @elseif($result[0]->status_ == 'RECIEVER')
                            {{--<div class="btn-group cand_btncontainner"--}}
                            {{--data-content="{{$search_user->id}}"--}}
                            {{--id="pending_{{$search_user->id}}" onclick="acceptfrequest(this);">--}}
                            {{--<button type="button" class="btn btn-success btn-xs res_btn"><span--}}
                            {{--class="mdi mdi-check"></span></button>--}}
                            {{--<button type="button" class="btn btn-success btn-xs res_btn">Accept--}}
                            {{--Interest--}}
                            {{--</button>--}}
                            {{--</div>--}}
                            <div class="btn-group cand_btncontainner" style="margin-bottom: 25px;">
                                <a href="#" data-content="{{$search_user->id}}"
                                   id="pending_{{$search_user->id}}" onclick="acceptfrequest(this);"
                                   class="popup_submitbtn btn-sm btn-success">Accept Interest</a>
                            </div>
                        @elseif($result[0]->status_ == 'FRIENDS')
                            {{--<div class="btn-group cand_btncontainner"--}}
                            {{--data-content="{{$search_user->id}}"--}}
                            {{--id="friends_{{$search_user->id}}">--}}
                            {{--<button type="button" class="btn btn-default btn-xs res_btn"><span--}}
                            {{--class="mdi mdi-eye"></span></button>--}}
                            {{--<button type="button" class="btn btn-default btn-xs res_btn">Friends--}}
                            {{--</button>--}}
                            {{--</div>--}}
                            {{--<div class="btn-group cand_btncontainner"--}}
                            {{--data-content="{{$search_user->id}}"--}}
                            {{--id="friends_{{$search_user->id}}" onclick="unfriend(this);">--}}
                            {{--<button type="button" class="btn btn-default btn-xs res_btn"><span--}}
                            {{--class="mdi mdi-eye"></span></button>--}}
                            {{--<button type="button" class="btn btn-default btn-xs res_btn">UnFriend--}}
                            {{--</button>--}}
                            {{--</div>--}}
                            <div class="btn-group cand_btncontainner" style="margin-bottom: 25px;">
                                <a href="#" data-content="{{$search_user->id}}"
                                   id="friends_{{$search_user->id}}" onclick="unfriend(this);"
                                   class="popup_submitbtn btn-sm upgrade_bg">UnFriend</a>
                            </div>
                        @else

                        @endif
                        <div class="btn-group cand_btncontainner" style="margin-bottom: 25px;">
                            <a href="#" data-content="{{$search_user->id}}"
                               id="view_{{$search_user->id}}" onclick="view_contact(this)"
                               class="popup_submitbtn btn-sm btn-info">View Contact</a>
                        </div>
                        {{--<div class="btn-group cand_btncontainner" data-content="{{$search_user->id}}"--}}
                        {{--id="view_{{$search_user->id}}" onclick="view_contact(this)">--}}
                        {{--<button type="button" class="btn btn-info btn-xs res_btn"><span--}}
                        {{--class="mdi mdi-eye"></span></button>--}}
                        {{--<button type="button" class="btn btn-info btn-xs res_btn">View Contact--}}
                        {{--</button>--}}
                        {{--</div>--}}
                        {{--<div class="btn-group cand_btncontainner" onclick="ShowLoginSignup('signin');">--}}
                        {{--<button type="button" class="btn btn-success btn-sm res_btn"><span--}}
                        {{--class="mdi mdi-phone"></span></button>--}}
                        {{--<button type="button" class="btn btn-success btn-sm res_btn">Contact</button>--}}
                        {{--</div>--}}
                    </div>
                </div>
            @endforeach
            {{ $users->links() }}
        @endif
    @endif
@else
    <div class="cand_box">
        <span>< No Record Available></span>
    </div>
@endif