<input type="hidden" id="user_count" value="{{$user_count}}"/>
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
                    <li>{{isset($search_user->age)?$search_user->age:'Not Specified'}} Years</li>
                    <li>{{isset($search_user->height)?$search_user->height:'Not Specified'}}</li>

                    <li>{{isset($search_user->city)?$search_user->city:'Not Specified'}}</li>

                    <li>{{isset($search_user->religion)?$search_user->religion:'Not Specified'}}</li>

                    <li>{{isset($search_user->caste)?$search_user->caste:'Not Specified'}}</li>

                    <li>{{isset($search_user->language)?$search_user->language:'Not Specified'}}</li>

                    <li>{{isset($search_user->status)?$search_user->status:'Not Specified'}}</li>

                    <li>{{isset($search_user->education)?$search_user->education:'Not Specified'}}</li>
                </ul>
            </div>
            <div class="cand_btnbox">
                <a class="btn-group cand_btncontainner"
                   href="{{url('view_profile').'/'.$search_user->id}}">
                    <button type="button" class="btn btn-primary btn-xs res_btn"><span
                                class="mdi mdi-eye"></span></button>
                    <button type="button" class="btn btn-primary btn-xs res_btn">View Profile
                    </button>
                </a>
                <div class="btn-group cand_btncontainner" data-content="{{$search_user->id}}"
                     id="send_{{$search_user->id}}" onclick="send_interest(this)">
                    <button type="button" class="btn btn-success btn-xs res_btn"><span
                                class="mdi mdi-heart"></span></button>
                    <button type="button" class="btn btn-success btn-xs res_btn">Send Interest
                    </button>
                </div>

                <button class="member_btn btn btn-default" id="friends_" style="display: none;">
                    <i class="mdi mdi-account-multiple"></i> Friends
                </button>
                <button class="member_btn btn btn-default"
                        onclick="unfriend('{{$search_user->id}}')"
                        id="unfriends_"
                        style="display: none;">
                    <i class="mdi mdi-account-multiple"></i> Unfriend
                </button>
                {{--<div class="btn-group cand_btncontainner" onclick="ShowLoginSignup('signin');">--}}
                {{--<button type="button" class="btn btn-success btn-sm res_btn"><span--}}
                {{--class="mdi mdi-phone"></span></button>--}}
                {{--<button type="button" class="btn btn-success btn-sm res_btn">Contact</button>--}}
                {{--</div>--}}
            </div>
        </div>
    @endforeach
    {{ $users->links() }}
@else
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
                    <li>{{$search_user->age}} Years</li>
                    <li>{{--152cm - 5ft 6inch--}}{{$search_user->height}}</li>
                    <li>{{$search_user->city}}</li>
                    <li>{{$search_user->religion}}</li>
                    <li>{{$search_user->caste}}</li>
                    <li>{{$search_user->language}}</li>
                    <li>{{$search_user->status}}</li>
                    <li data-toggle="tooltip" data-placement="bottom"
                        title="{{$search_user->education}}">{{\Illuminate\Support\Str::limit($search_user->education,30)}}</li>
                </ul>
            </div>
            <div class="cand_btnbox">
                <a class="btn-group cand_btncontainner"
                   href="{{url('view_profile').'/'.$search_user->id}}">
                    <button type="button" class="btn btn-primary btn-xs res_btn"><span
                                class="mdi mdi-eye"></span></button>
                    <button type="button" class="btn btn-primary btn-xs res_btn">View Profile
                    </button>
                </a>

                @php
                    $session_user = $_SESSION['user_master']->id;
                     $queryResult = \Illuminate\Support\Facades\DB::select("call GetFriendType($session_user,$search_user->id)");
                      $result = collect($queryResult);
                @endphp
                @if($result[0]->status_ == 'NULL')
                    <div class="btn-group cand_btncontainner" data-content="{{$search_user->id}}"
                         id="send_{{$search_user->id}}" onclick="send_interest(this)">
                        <button type="button" class="btn btn-success btn-xs res_btn"><span
                                    class="mdi mdi-heart"></span></button>
                        <button type="button" class="btn btn-success btn-xs res_btn">Send Interest
                        </button>
                    </div>
                @elseif($result[0]->status_ == 'SENDER')
                    <div class="btn-group cand_btncontainner" data-content="{{$search_user->id}}"
                         id="pending_{{$search_user->id}}" onclick="cancelrequest(this);">
                        <button type="button" class="btn btn-danger btn-xs res_btn"><span
                                    class="mdi mdi-close"></span></button>
                        <button type="button" class="btn btn-danger btn-xs res_btn">Cancel
                            Interest
                        </button>
                    </div>
                @elseif($result[0]->status_ == 'RECIEVER')
                    <div class="btn-group cand_btncontainner" data-content="{{$search_user->id}}"
                         id="pending_{{$search_user->id}}" onclick="acceptfrequest(this);">
                        <button type="button" class="btn btn-success btn-xs res_btn"><span
                                    class="mdi mdi-check"></span></button>
                        <button type="button" class="btn btn-success btn-xs res_btn">Accept
                            Interest
                        </button>
                    </div>
                @elseif($result[0]->status_ == 'FRIENDS')
                    <div class="btn-group cand_btncontainner" data-content="{{$search_user->id}}"
                         id="friends_{{$search_user->id}}">
                        <button type="button" class="btn btn-default btn-xs res_btn"><span
                                    class="mdi mdi-eye"></span></button>
                        <button type="button" class="btn btn-default btn-xs res_btn">Friends
                        </button>
                    </div>
                    <div class="btn-group cand_btncontainner" data-content="{{$search_user->id}}"
                         id="friends_{{$search_user->id}}" onclick="unfriend(this);">
                        <button type="button" class="btn btn-default btn-xs res_btn"><span
                                    class="mdi mdi-eye"></span></button>
                        <button type="button" class="btn btn-default btn-xs res_btn">UnFriend
                        </button>
                    </div>
                @else

                @endif
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

