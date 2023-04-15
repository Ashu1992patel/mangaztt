@extends('web.web_master')

@section('title','Mangal Mandap : Desire Candidate List')
@section('head')
    @include('web.usage.lightbox_plugin')
@stop
@section('content')
    <input type="hidden" id="see_id" value="1"/>

    <section class="regitration_member all_pagescontainner">
        <div class="container">
            <div class="candidate_list_box">
                <div class="cand_search_filterbox">
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

                <div class="cand_list_containner" id="candidate_list">

                    @if(count($users)>0)
                        @if(!isset($_SESSION['user_master']))
                            @foreach($users as $search_user)
                                @php
                                    $image = \App\Images::find($search_user->id);
                                @endphp
                                <div class="cand_box">
                                    <div class="cand_imgbox">
                                        @if(isset($image->pic1) && file_exists($image->pic1))
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
                            {{-- <div class="home_brics_row">
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
                                                 <div class="white_brics_count">100, 01-Dec-2018</div>
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
                             </div>--}}
                            @if(count($users)>0)
                                @foreach($users as $search_user)
                                    @php
                                        $image = \App\Images::find($search_user->id);
                                    @endphp
                                    <div class="cand_box">
                                        <div class="cand_imgbox" style="cursor: pointer;"
                                             onclick="location.href='{{url('view_profile').'/'.$search_user->id}}';">
                                            @if(isset($image) && file_exists($image->pic1))

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
                                                 onclick="location.href='{{url('view_profile').'/'.$search_user->id}}';">{{$search_user->name}}{{' (MM-'.$search_user->id.')'}}{{--<span data-toggle="tooltip" data-placement="right" title="Verified Profile By Aadhar" class="glyphicon glyphicon-ok icon-success"></span>--}}</div>
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
                                                <li>{{isset($search_user->salary)?$search_user->salary:'-'}}</li>

                                                <li>{{isset($search_user->status)?$search_user->status:'Not Specified'}}</li>
                                                <li data-toggle="tooltip" data-placement="bottom"
                                                    title="{{$search_user->education_detail}}">{{\Illuminate\Support\Str::limit( $search_user->education,28)}}</li>

                                                <li data-toggle="tooltip" data-placement="bottom"
                                                    title="{{$search_user->occupation_detail}}">{{ $search_user->occupation}}</li>
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

                </div>

            </div>
        </div>
    </section>

    <script type="text/javascript">
        append_loading_img = '<div class="feed_loadimg_block" id="load_img">' +
            '<img height="50px" class="center-block" src="{{ url('images/loading.gif') }}"/></div>';
        {{--function getmorepost() {--}}
        {{--$("#load_img").remove();--}}
        {{--cp = 1;--}}
        {{--cp += parseFloat($('#see_id').val());--}}
        {{--$('#see_id').val(cp);--}}
        {{--var value = $(".filter_form").serialize();--}}
        {{--$.ajax({--}}
        {{--type: "GET",--}}
        {{--contentType: "application/json; charset=utf-8",--}}
        {{--url: "{{ url('candidates').'/'}}" + cp,--}}
        {{--//                data: '{"currentpage":"' + cp + '"}',--}}
        {{--data: value,--}}
        {{--beforeSend: function () {--}}
        {{--$('#candidate_list').append(append_loading_img);--}}
        {{--},--}}
        {{--success: function (data) {--}}
        {{--$("#load_img").remove();--}}
        {{--$("#candidate_list").append(data);--}}
        {{--//                    swal("Good job!", "You clicked the button!", "error");--}}

        {{--},--}}
        {{--error: function (xhr, status, error) {--}}
        {{--$('#candidate_list').html(xhr.responseText);--}}
        {{--//                    ShowErrorPopupMsg('Error in uploading...');--}}
        {{--}--}}
        {{--});--}}
        {{--}--}}

        //           $(function () {
        //            $('body').on('click', '.pagination a', function (e) {
        //                e.preventDefault();
        //
        //                $('#load a').css('color', '#dfecf6');
        //                $('#load').append('<img style="position: absolute; left: 0; top: 0; z-index: 100000;" src="/images/loading.gif" />');
        //
        //                var url = $(this).attr('href');
        //                getArticles(url);
        //                window.history.pushState("", "", url);
        //            });
        //
        //            function getArticles(url) {
        //                $.ajax({
        //                    url: url
        //                }).done(function (data) {
        //                    $('.articles').html(data);
        //                }).fail(function () {
        //                    alert('Articles could not be loaded.');
        //                });
        //            }
        //        });

        function getReligion() {
            $(".filter_form").submit();
        }

        $(document).ready(function () {
            $(".search_filter").click(function () {
                debugger;
                $(".filter_form").submit();
//                var value = $(".filter_form").serialize();
                {{--$.ajax({--}}
                {{--type: 'get',--}}
                {{--url: "{{ url('refine_candidate_list')}}",--}}
                {{--data: value,--}}
                {{--beforeSend: function () {--}}
                {{--$('#candidate_list').append(append_loading_img);--}}
                {{--},--}}
                {{--success: function (data) {--}}
                {{--$("#load_img").remove();--}}
                {{--$("#candidate_list").html('');--}}
                {{--$("#candidate_list").html(data);--}}
                {{--},--}}
                {{--error: function (results) {--}}
                {{--$('#candidate_list').html(results.responseText);--}}
                {{--}--}}
                {{--});--}}
            });
        });

        //        $(window).scroll(function (event) {
        //            var chk_scroll = $(window).scrollTop();
        ////            if (chk_scroll > 70) {
        ////                $('.top_manubar').addClass('top_manubar_fixed');
        //////                    $('.overall_containner').addClass('overall_margin');
        ////                $('.profile_basic_menu_block').addClass('left_menu_fixed');
        ////                $('.all_right_block').addClass('right_menu_fixed');
        ////            }
        //            if ($(window).scrollTop() + $(window).height() == $(document).height()) {
        //                if (parseFloat($('#see_id').val()) <= parseFloat($('#user_count').val())) {
        //                    getmorepost();
        //                }
        //            }
        //        });
    </script>
@stop
