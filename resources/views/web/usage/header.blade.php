<script src="{{url('js/validation.js')}}"></script>

<input type="hidden" id="glo_share_title" value=""/>
<input type="hidden" id="glo_share_detail"
       value="Mangal Mandap is a leading Indian matrimonial matchmaking service provider. Our team is committed to provide 360 degree solutions to all prospective Indian brides and grooms for marriage. "/>
<input type="hidden" id="glo_share_image" value="images/footer_logo.jpg"/>
<input type="hidden" id="glo_share_url" value="http://mangalmadap.com"/>
{{--<div id="add_social_link">--}}
{{--</div>--}}
<style type="text/css">
    .errorClass {
        border: 1px solid red !important;
    }

    .login_txt::placeholder {
        opacity: 1 !important; /* Firefox */
    }
</style>
<nav class="main_menu fixed_menu" id="top_header_menu">
    <div class="container">
        <div class="row">
            <div class="top_menubox">
                <div class="main_logo">
                    @if(isset($_SESSION['user_master']))
                        <a href="{{url('candidate_list')}}">
                            <img src="{{url('images/mangal_logo.jpg')}}">
                        </a>
                    @else
                        <a href="{{url('/')}}">
                            <img src="{{url('images/mangal_logo.jpg')}}">
                        </a>
                    @endif
                </div>
                <div class="menu_all_containner">
                    <div class="mobile_show" onclick="MenuShow(this);">
                        <i class="filter_icon pull-right mdi mdi-menu"></i>
                    </div>
                    <div class="login_with_baskit">
                        @if(isset($_SESSION['user_master']))
                            @php
                                $user_id =$_SESSION['user_master']->id;
                                    $active_plan = \App\ActivateProfile::where(['id'=>$_SESSION['user_master']->id])->first();
                                    $interest_count = \Illuminate\Support\Facades\DB::selectOne("SELECT COUNT(id) as interest_count FROM `friends` WHERE friend_id = $user_id and status = 'pending'");
                                                        $today = \Carbon\Carbon::now()->format('Y-m-d');

                            @endphp

                            <ul class="menu_ul" id="after_login_ul">
                                {{--<li><a href="MyDashboard.php">--}}
                                {{--<i class="mdi mdi-speedometer"></i>Dashboard</a>--}}
                                {{--</li>--}}
                                <li>
                                    <a href="{{url('candidate_list')}}"> <i class="mdi mdi-home"></i>Home</a></li>
                                <li><a href="{{url('userProfiles')}}">
                                        <i class="mdi mdi-account-switch"></i>Inbox
                                        <span class="badge">{{isset($interest_count->interest_count) ? $interest_count->interest_count : '0'}}</span></a>
                                </li>
                                @if(!isset($active_plan->plan_id))
                                    <li><a href="{{url('membership')}}">
                                            <i class="mdi mdi-currency-inr"></i>Upgrade Plan</a>
                                    </li>
                                @else
                                    @if($active_plan->deactivated_at < $today)
                                        <li><a href="{{url('membership')}}">
                                                <i class="mdi mdi-currency-inr"></i>Upgrade Plan</a>
                                        </li>
                                    @endif
                                @endif
                                <li>
                                    <div class="profile_user glo_menuclick">
                                        <i class="mdi mdi-account-search"></i><span class="caret"></span> Search
                                        <div class="menu_basic_popup scale0">
                                            <div class="menu_popup_containner padding0">

                                                <div class="menu_popup_settingrow effect">
                                                    <a onclick="search_by_id();" data-toggle="modal"
                                                       data-target="#myModal" class="menu_setting_row">
                                                        <i class="mdi mdi-account-search"></i>
                                                        Search by Profile Id
                                                    </a>
                                                </div>
                                                <div class="menu_popup_settingrow effect">
                                                    <a href="{{url('advance_search')}}">
                                                        <i class="mdi mdi-account-search"></i>
                                                        Advance Search
                                                    </a>
                                                </div>
                                                <div class="menu_popup_settingrow effect">
                                                    <a href="{{url('desire_candidates')}}" class="menu_setting_row">
                                                        <i class="mdi mdi-account"></i>
                                                        Desire Profile
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li style="border: none;">
                                    <div class="profile_user glo_menuclick">
                                        @php
                                            $image = \App\Images::find($_SESSION['user_master']->id);
                                        @endphp
                                        @if(isset($image->pic1))
                                            <img src="{{url('').'/'.$image->pic1}}"/>
                                        @else
                                            @if($_SESSION['user_master']->gender == 'male')
                                                <img src="{{url('images/male.png')}}"/>
                                            @else
                                                <img src="{{url('images/female.png')}}"/>
                                            @endif
                                        @endif
                                        <span class="caret"></span>
                                        <div class="menu_basic_popup scale0">
                                            <div class="menu_popup_containner padding0">

                                                <div class="menu_popup_settingrow effect">
                                                    <a href="{{url('myp')}}" class="menu_setting_row">
                                                        <i class="mdi mdi-account-edit"></i>
                                                        My
                                                        Profile({{isset($_SESSION['user_master'])?$_SESSION['user_master']->id:''}}
                                                        )
                                                    </a>
                                                </div>

                                                {{--<div class="menu_popup_settingrow effect">--}}
                                                {{--<a href="{{url('membership')}}" class="menu_setting_row">--}}
                                                {{--<i class="mdi mdi-currency-inr"></i>--}}
                                                {{--My membership--}}
                                                {{--</a>--}}
                                                {{--</div>--}}


                                                <div class="menu_popup_settingrow effect">
                                                    <a onclick="aadhar();" data-toggle="modal"
                                                       data-target="#myModal" class="menu_setting_row">
                                                        <i class="mdi mdi-account-search"></i>
                                                        Aadhar
                                                    </a>
                                                </div>
                                                <div class="menu_popup_settingrow effect">
                                                    <a onclick="privacy_control();" data-toggle="modal"
                                                       data-target="#myModal"
                                                       class="menu_setting_row">
                                                        <i class="mdi mdi-lock-open-outline"></i>
                                                        Privacy Control
                                                    </a>
                                                </div>


                                                {{--<div class="menu_popup_settingrow effect">--}}
                                                {{--<a href="#" class="menu_setting_row">--}}
                                                {{--<i class="mdi mdi-delete-forever"></i>--}}
                                                {{--Delete Account--}}
                                                {{--</a>--}}
                                                {{--</div>--}}

                                                <div class="menu_popup_settingrow effect">
                                                    <a onclick="update_password();" data-toggle="modal"
                                                       data-target="#myModal_UpdatePassword"
                                                       class="menu_setting_row">
                                                        <i class="mdi mdi-lock-open-outline"></i>
                                                        Change Password
                                                    </a>
                                                </div>
                                                <div class="menu_popup_settingrow effect">
                                                    <a href="{{url('logout')}}" class="menu_setting_row">
                                                        <i class="mdi mdi-logout"></i>
                                                        Logout
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        @else
                            <ul class="menu_ul">
                                <li>
                                    <a href="{{url('/')}}"> <i class="mdi mdi-home"></i>Home</a></li>
                                <li onclick="ShowLoginSignup('signin');">
                                    <i class="mdi mdi-account"></i>Login
                                </li>
                                <li>
                                    <a href="{{url('registration')}}">
                                        <i class="mdi mdi-account-edit"></i>Registration</a></li>
                                <!-- <li >
                                     <i class="mdi mdi-currency-inr"></i>Payment</li>-->
                                <li>
                                    <a href="{{url('membership')}}"><i class="mdi mdi-wallet-membership"></i>Membership</a>
                                </li>

                                {{--<li>--}}
                                {{--<div class="profile_user glo_menuclick">--}}
                                {{--<i class="mdi mdi-account-search"></i><span class="caret"></span> Search--}}
                                {{--<div class="menu_basic_popup scale0">--}}
                                {{--<div class="menu_popup_containner padding0">--}}

                                {{--<div class="menu_popup_settingrow effect">--}}
                                {{--<a onclick="search_by_id();" data-toggle="modal"--}}
                                {{--data-target="#myModal" class="menu_setting_row">--}}
                                {{--<i class="mdi mdi-account-search"></i>--}}
                                {{--Search by Profile Id--}}
                                {{--</a>--}}
                                {{--</div>--}}

                                {{--<div class="menu_popup_settingrow effect">--}}
                                {{--<a href="{{url('advance_search')}}">--}}
                                {{--<i class="mdi mdi-account-search"></i>--}}
                                {{--Advance Search--}}
                                {{--</a>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</li>--}}
                                <li style="border: none;">
                                    <a target="_blank" href="{{url('payment')}}"><i
                                                class="mdi mdi-wallet-membership"></i>Payment</a>
                                </li>

                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
{{--<div class="page_loader" id="page_loader">--}}
{{--<div class="two_heart_box">--}}
{{--<div class="heart_left_block">--}}
{{--<div class="chest" id="chest">--}}
{{--<div class="heart loader_left side top"></div>--}}
{{--<div class="heart center">&hearts;</div>--}}
{{--<div class="heart loader_right side"></div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="heart_right_block">--}}
{{--<div class="chest" id="chest">--}}
{{--<div class="heart loader_left side top"></div>--}}
{{--<div class="heart center">&hearts;</div>--}}
{{--<div class="heart loader_right side"></div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

<div class="modal popup_bgcolor" id="loginSignup_popup">
    <div class="login_popup_box">
        <div class="close_login stap3_color" onclick="HidePopoupMsg();"><i class="mdi mdi-close"></i></div>
        <div class="login_lefttxtbox stap3_color">
            <div class="left_block login" style="display: none;">
                <h1>Login</h1>
                <p>Find inspiration for your Special Day. Yours could be the next Success Story.</p>
                <img src="{{url('images/bottom-couple.png')}}">
            </div>
            <div class="left_block registration" style="display: block;">
                <h1>Contact</h1>
                <p>We understand your time is precious.
                    Please provide below details and we will
                    call you shortly.</p>
                <img src="{{url('images/contact_us.png')}}">
            </div>
            <div class="left_block forgot">
                <h1>Forgot</h1>
                <p>Don't worry, it happens to the best of us.</p>
                <img src="{{url('images/forgot_image.png')}}">
            </div>
            <div class="left_block resend">
                <h1>Resend Password</h1>
                <p>Don't worry, it happens to the best of us.</p>
                <img src="{{url('images/verify_image.png')}}">
            </div>
            <div class="left_block verify">
                <h1>Verify</h1>
                <p>Hurray! You are just one step away from validating your account.</p>
                <img src="{{url('images/verify_image.png')}}"/>
            </div>
        </div>
        <div class="login_right_txt">
            <div class="right_block login" style="display: none;">
                <div class="deli_row">
                    <input type="text" name="email_pass" autocomplete="off" class="form-control login_txt"
                           placeholder="Email id " id="login_mobile">
                </div>
                <div class="deli_row">
                    <input type="password" name="login_password" autocomplete="off" class="form-control login_txt"
                           placeholder="Password" id="login_password">
                </div>
                <hr>
                <div class="deli_row">
                    <button onclick="send_login();" type="button" class="btn btn-success login_btn">
                        <i class="mdi mdi-account-check basic_icon_margin"></i>Submit
                    </button>
                </div>
                <hr>
                <div class="product_btn_box">
                    <div class="btn btn-danger btn-sm" onclick="ShowLoginSignup('forgot')">
                        <i class="mdi mdi-account-alert basic_icon_margin"></i>Forgot
                    </div>
                    <div class="btn btn-primary btn-sm" onclick="ShowLoginSignup('resend')">
                        <i class="mdi mdi-repeat basic_icon_margin"></i>Resend
                    </div>
                    {{--<a class="btn btn-warning" href="{{url('registration')}}" style="margin-left: 18px;">--}}
                    {{--<i class="mdi mdi-account-edit basic_icon_margin"></i>Sign UP--}}
                    {{--</a>--}}
                    <div class="btn btn-info btn-sm pull-center" style="margin-left: 5px;"
                         onclick="ShowLoginSignup('verify')">
                        <i class="mdi mdi-account-check basic_icon_margin"></i>Verify Account
                    </div>
                    {{--<div class="btn btn-primary btn-sm pull-center" style="margin-left: 5px;">--}}
                    {{--<i class="mdi mdi-account-edit basic_icon_margin"></i>Sign UP--}}
                    {{--</div>--}}
                    {{--<a class="btn btn-primary btn-sm" href="{{url('registration')}}" style="margin-left: 7px;">--}}
                    {{--<i class="mdi mdi-account-edit basic_icon_margin"></i>Sign UP--}}
                    {{--</a>--}}
                    {{--<div class="btn btn-primary pull-right" onclick="ShowLoginSignup('signup');">--}}
                    {{--<i class="mdi mdi-account-edit basic_icon_margin"></i>Sign UP--}}
                    {{--</div>--}}
                </div>
            </div>
            <div class="right_block forgot">
                <div class="deli_row">
                    <input type="text" name="email_pass" autocomplete="off" id="fcontact_no"
                           class="form-control login_txt"
                           placeholder="Registered Email/Mobile No (Password will be send to your no)">
                </div>
                <hr>
                <div class="deli_row">
                    <button class="btn btn-success login_btn resent_btn" onclick="forgotpasswordsend()">
                        <i class="mdi mdi-account-check basic_icon_margin"></i>Submit
                    </button>
                </div>
                <hr>
                <div class="product_btn_box">
                    <div class="btn btn-primary login_btn" onclick="ShowLoginSignup('signin');">
                        <i class="mdi mdi-account-edit basic_icon_margin"></i>Sign In
                    </div>
                </div>
            </div>
            <div class="right_block resend">
                <div class="deli_row">
                    <input type="text" name="re_contact_no" autocomplete="off" id="re_contact_no"
                           class="form-control login_txt contact " minlength="10" maxlength="50"
                           placeholder="Registered Email (For verification code )">
                </div>
                <hr>
                <div class="deli_row">
                    <button class="btn btn-success login_btn resent_btn" onclick="resend_passwordsend()">
                        <i class="mdi mdi-account-check basic_icon_margin"></i>Submit
                    </button>
                </div>
                <hr>
                <div class="product_btn_box">
                    <div class="btn btn-primary login_btn" onclick="ShowLoginSignup('signin');">
                        <i class="mdi mdi-account-edit basic_icon_margin"></i>Sign In
                    </div>
                </div>
            </div>
            <div class="right_block verify">
                <div class="deli_row">
                    <input type="text" name="email_pass" autocomplete="off" class="form-control login_txt"
                           placeholder="Enter email verification code" minlength="6" maxlength="6" id="txtotp2">
                </div>
                <hr>
                <div class="deli_row">
                    <button class="btn btn-success login_btn" onclick="submitotpForm()">
                        <i class="mdi mdi-account-check basic_icon_margin"></i>Submit
                    </button>
                </div>
                @if(!isset($_SESSION['session_contact']))
                    <hr>
                    <div class="product_btn_box">
                        <div class="btn btn-primary login_btn" onclick="ShowLoginSignup('signin');">
                            <i class="mdi mdi-account-edit basic_icon_margin"></i>Sign In
                        </div>
                    </div>
                @endif
                <hr>
                <div class="product_btn_box">
                    <div class="btn btn-primary login_btn" onclick="ShowLoginSignup('resend');">
                        <i class="mdi mdi-account-edit basic_icon_margin"></i>Resend
                    </div>
                </div>
            </div>
            <div class="right_block registration" style="display: block;">
                <div class="deli_row">
                    <input type="text" name="reg_name" id="c_name" autocomplete="off" class="form-control login_txt"
                           placeholder="Enter Name">
                </div>
                <div class="deli_row">
                    <select class="form-control" id="c_looking_for">
                        <option selected value="0"> Seeking Match For</option>
                        <option value="Self">Self</option>
                        <option value="Sun">Sun</option>
                        <option value="Daughter">Daughter</option>
                        <option value="Brother">Brother</option>
                        <option value="Sister">Sister</option>
                        <option value="Friend">Friend</option>
                        <option value="Relative">Relative</option>
                    </select>
                </div>
                <div class="deli_row">
                    <input type="text" name="reg_email" id="c_email" autocomplete="off" class="form-control login_txt"
                           placeholder="Enter Email Id">
                </div>
                <div class="deli_row">
                    <input type="text" name="reg_number" autocomplete="off" id="c_contact"
                           class="form-control login_txt"
                           placeholder="Enter Mobile Number">
                </div>
                <div class="deli_row">
                    <button class="btn btn-success login_btn" onclick="getContactUs();">
                        <i class="mdi mdi-account basic_icon_margin"></i>Get Invited
                    </button>
                </div>
                <hr>
                <div class="deli_row">
                    <button class="btn btn-default login_btn" onclick="ShowLoginSignup('signin');">
                        <i class="mdi mdi-account-check basic_icon_margin"></i>Existing User? Log In
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!------Popup Box -->
<div class="modal popup_bgcolor msg" id="sucess_popup">
    <div class="popup_box">
        <div class="alert_popup success_bg">
            <div class="popup_verified"><i class="mdi mdi-check"></i></div>
            <h4 class="popup_mainhead">Thank You!</h4>
            <p class="popup-text dynamic_popuptxt">You have successfully Submit</p>
        </div>
        <div class="popup_submit">
            <button class="popup_submitbtn success_bg sucess_btn" type="submit" onclick="HidePopoupMsg();">Ok
            </button>
        </div>
    </div>
</div>
<div class="modal popup_bgcolor msg" id="error_popup">
    <div class="popup_box">
        <div class="alert_popup error_bg">
            <div class="popup_verified"><i class="mdi mdi-close"></i></div>
            <h4 class="popup_mainhead">Error Massage!</h4>
            <p class="popup-text dynamic_popuptxt">You have entered wrong text</p>
        </div>
        <div class="popup_submit">
            <button class="popup_submitbtn error_bg error_btn" type="submit" onclick="HidePopoupMsg();">ok</button>
        </div>
    </div>
</div>
<div class="modal popup_bgcolor msg" id="conformation_popup">
    <div class="popup_box">
        <div class="alert_popup conformation_bg">
            <div class="popup_verified"><i class="mdi mdi-close"></i></div>
            <h4 class="popup_mainhead">Confirmation Massage!</h4>
            <p class="popup-text dynamic_popuptxt">Do you really want to delete this record.t</p>
        </div>
        <div class="popup_submit">
            <a class="popup_submitbtn conformation_bg conformation_btn" type="submit" id="ConfirmBtn"
               onclick="HidePopoupMsg();">Yes
            </a>
            <a class="popup_submitbtn conformation_nobtn" type="submit" onclick="HidePopoupMsg();">No</a>
        </div>
    </div>
</div>
<div class="modal popup_bgcolor msg" id="upgradeplan_popup">
    <div class="popup_box">
        <div class="alert_popup upgrade_bg">
            <div class="popup_verified"><i class="mdi mdi-autorenew"></i></div>
            <h4 class="popup_mainhead">Upgrade Your Plan</h4>
        </div>
        <p class="upgrade-text dynamic_popuptxt">You are on a Free Membership Plan. Please upgrade your membership by
            availing our paid services to contact selected profiles.</p>
        <div class="popup_submit">
            <a class="popup_submitbtn btn-sm upgrade_bg" href="{{url('membership')}}">Upgrade Now</a>
            <a class="closebtn btn btn-sm" onclick="HidePopoupMsg();">Close</a>
        </div>
    </div>
</div>
<div id="myModal_UpdatePassword" data-toggle="modal" data-easein="bounceIn" class="connect_LBbox modal fade in"
     role="dialog"
     aria-hidden="false">
    <div class="modal-dialog forgotpass_lb">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" onclick="GloCloseModel();">×</button>
                <h4 class="modal-title">UPDATE PASSWORD ?</h4>
            </div>
            <div class="modal-body">
                <div class="basic_lb_row">
                    <div class="textbox_containner">
                        <input type="text" class="animate_txt" name="txtChange_previousPsd"
                               id="txtChange_previousPsd" autocomplete="off" data-validate="TT_btnChangepass">
                        <label class="animate_placeholder" for="txtChange_previousPsd">Old Password</label>
                        <div class="forgot_icon"><i class="mdi mdi-lock mdi-16px"></i></div>
                    </div>

                    {{--<input type="hidden" value="{{$user->password}}" id="cpswd">--}}
                </div>
                <div class="basic_lb_row">
                    <div class="textbox_containner">
                        <input type="text" class="animate_txt" name="txtchange_newPsd"
                               id="txtchange_newPsd" autocomplete="off" data-validate="TT_btnChangepass">
                        <label class="animate_placeholder" for="txtchange_newPsd">New Password</label>
                        <div class="forgot_icon"><i class=" mdi mdi-lock-open-outline mdi-16px"></i></div>
                    </div>
                </div>
                <div class="basic_lb_row">
                    <div class="textbox_containner">
                        <input type="text" class="animate_txt" name="txtchange_retypePsd"
                               id="txtchange_retypePsd" autocomplete="off" data-validate="txtchange_retypePsd">
                        <label class="animate_placeholder" for="txtchange_retypePsd">Re-type Password</label>
                        <div class="forgot_icon"><i class=" mdi mdi-lock-open-outline mdi-16px"></i></div>
                    </div>
                </div>
                <p class="statusMsg"></p>
            </div>
            <div class="modal-footer text-center">
                <button type="button" onclick="submitChange();" class="btn btn-primary" id="TT_btnChangepass">Update
                </button>
            </div>
        </div>

    </div>
</div>
<div class="div_overlay" id="overlay_menu" onclick="Hidefilter();"></div>
<p id="err1"></p>
<script type="text/javascript">
    function MenuShow(dis) {
        $(dis).parent().find('.menu_ul').addClass('menu_ul_show');
        $('#overlay_menu').fadeIn();
    }
    function Hidefilter() {
        $('.menu_ul').removeClass('menu_ul_show');
        $('#filter_box').removeClass('cand_search_filterbox_show');
        $('#overlay_menu').hide();
    }
    function aadhar() {
        $('#myModal').addClass('in');
        $('#myModal').show();
        $('#modal_size').removeClass('modal-dialog modal-md');
        $('#modal_size').addClass('modal-dialog modal-lg');
        $('#modal_title').html('Aadhar');
        $('#modal_body').html('<img height="50px" class="center-block" src="{{url('images/loading.gif')}}"/>');
        $.ajax({
            type: "get",
            url: "{{url('getAadhar')}}",
            success: function (data) {
                $('#modal_body').html(data);
            },
            error: function (xhr, status, error) {
                $('#modal_body').html(xhr.responseText);
            }
        });
    }

    function advance_search() {
        $('#myModal').addClass('in');
        $('#myModal').show();
        $('#modal_size').removeClass('modal-dialog modal-md');
        $('#modal_size').addClass('modal-dialog modal-lg');
        $('#modal_title').html('Advance Search');
        $('#modal_body').html('<img height="50px" class="center-block" src="{{url('images/loading.gif')}}"/>');
        $.ajax({
            type: "get",
            url: "{{url('advance_search')}}",
            success: function (data) {
                $('#modal_body').html(data);
            },
            error: function (xhr, status, error) {
                $('#modal_body').html(xhr.responseText);
            }
        });
    }
    function privacy_control() {
        $('#myModal').addClass('in');
        $('#myModal').show();
        $('#modal_title').html('Privacy Control<span style="font-size: 13px">(Profile Visibility Controls)</span>');
        $('#modal_body').html('<img height="50px" class="center-block" src="{{url('images/loading.gif')}}"/>');
        $.ajax({
            type: "get",
            url: "{{url('privacy_control')}}",
            success: function (data) {
                $('#modal_body').html(data);
            },
            error: function (xhr, status, error) {
                $('#modal_body').html(xhr.responseText);
            }
        });
    }

    function search_by_id() {
        $('#myModal').addClass('in');
        $('#myModal').show();
        $('#modal_size').removeClass('modal-dialog modal-md');
        $('#modal_size').addClass('modal-dialog modal-lg');
        $('#modal_title').html('Search By Profile Id');
        $('#modal_body').html('<img height="50px" class="center-block" src="{{url('images/loading.gif')}}"/>');
        $.ajax({
            type: "get",
            url: "{{url('search_by_id')}}",
            success: function (data) {
                $('#modal_body').html(data);
            },
            error: function (xhr, status, error) {
                $('#modal_body').html(xhr.responseText);
            }
        });
    }

    function getContactUs() {
        var c_name = $('#c_name').val();
        var c_looking_for = $('#c_looking_for :selected').val();
        var c_email = $('#c_email').val();
        var c_contact = $('#c_contact').val();
        if (c_name == '') {
            swal("Warning", "Please enter name", "info");
        } else if (c_looking_for == '0') {
            swal("Warning", "Please select seeking for", "info");
        } else if (c_email == '') {
            swal("Warning", "Please enter email", "info");
        } else if (c_contact == '') {
            swal("Warning", "Please enter contact", "info");
        } else {
            $.ajax({
                type: "get",
                url: "{{url('contact_us')}}",
                data: "c_name= " + c_name + "&c_looking_for= " + c_looking_for + "&c_email= " + c_email + "&c_contact= " + c_contact,
                success: function (data) {
                    HidePopoupMsg();
                    if (data == "success") {
                        swal("Success", "Your request has been send", "success");
                    }
                    else {
                        window.location.href = "{{url('/')}}";
                    }
                },
                error: function (xhr, status, error) {
                    $('#err1').html(xhr.responseText);
                }
            });
        }
    }

    $(document).ready(function () {
        $(document).keyup(function (event) {
            if (event.keyCode == 13) {
                send_login();
            }
        });
    });

    function send_login() {
        var login_mobile = $('#login_mobile').val();
        var login_password = $('#login_password').val();
        var result = true;
        if (!Boolean(Requiredtxt("#login_mobile")) || !Boolean(Requiredtxt("#login_password"))) {
            result = false;
        }
        if (!result) {
            return false;
        } else {
            $.ajax({
                type: "get",
                url: "{{url('login_user')}}",
//                data: "login_mobile= " + login_mobile + "&login_password= " + login_password,
                data: {login_mobile: login_mobile, login_password: login_password},
                success: function (data) {
//                console.log(data);
                    if (data == "Invalid") {
                        HidePopoupMsg();
                        //ShowErrorPopupMsg('Email or Password is invalid');
                        ShowLoginSignup('signin');
                        swal("Oops....", "Email or Password is invalid", "info");
                    } else if (data == "Inactivate") {
                        swal("Oops....", "Your account is deactivated by admin, Please contact to mangal mandap admin(7354933132)", "info");
                    } else if (data == "NotVerified") {
                        swal("Oops....", "Your account in not verified, verification code has been sent to your registered mobile no", "info");
                    } else {
                        HidePopoupMsg();
                        // ShowSuccessPopupMsg('Login Success');
                        window.location.href = "{{url('candidate_list')}}";
                    }
                },
                error: function (xhr, status, error) {
                    $('#err1').html(xhr.responseText);

//                alert(data);
                }
            });
        }
    }
    function Requiredtxt(me) {
        var text = $.trim($(me).val());
        if (text == '') {
            $(me).addClass("errorClass");
            return false;
        } else {
            $(me).removeClass("errorClass");
            return true;
        }
    }
    function forgotpasswordsend() {
        var contact = $('#fcontact_no').val();
        var result = true;
        if (!Boolean(Requiredtxt("#fcontact_no"))) {
            result = false;
        }
        if (!result) {
            return false;
        } else {
            $('.resent_btn').prop('disabled', true);

            $.ajax({
                type: "get",
                contentType: "application/json; charset=utf-8",
                url: "{{ url('forgot_password') }}",
                data: {contact: contact},
                success: function (data) {
                    $('.resent_btn').prop('disabled', false);
                    if (data == 'ok') {
                        swal("Success....", "Password has been sent to your registered email address successfully", "success");
                    } else if (data == 'Incorrect') {
                        swal("Oops....", "Please enter your registered email address", "info");
                    }
                },
                error: function (xhr, status, error) {
//                    alert('xhr.responseText');
                    $('.resent_btn').prop('disabled', false);
                    $('#err').html(xhr.responseText);
                }
            });
        }
    }

    function resend_passwordsend() {
        var contact = $('#re_contact_no').val();
        var result = true;
        if (!Boolean(Requiredtxt("#re_contact_no"))) {
            result = false;
        }
        if (!result) {
            return false;
        } else {
            $('.resent_btn').prop('disabled', true);
            $.ajax({
                type: "get",
                contentType: "application/json; charset=utf-8",
                url: "{{ url('resend_code') }}",
                data: {contact: contact},
                success: function (data) {
                    $('.resent_btn').prop('disabled', false);

                    if (data == 'ok') {
                        swal("Success....", "Verification code has been sent", "success");
                        ShowLoginSignup('verify');
                    } else if (data == 'Incorrect') {
                        swal("Oops....", "Please enter registered email address", "info");
                    }
                },
                error: function (xhr, status, error) {
//                    alert('xhr.responseText');
                    $('.resent_btn').prop('disabled', false);
                    $('#err').html(xhr.responseText);
                }
            });
        }
    }
    function submitotpForm() {
        var txtotp = $('#txtotp2').val();
        if (txtotp.trim() == '') {
            swal("Oops....", "Please enter verification code", "info");
            $('#txtotp').focus();
            return false;
        } else {
            $.ajax({
                type: "get",
                contentType: "application/json; charset=utf-8",
                url: "{{ url('verify_otp') }}",
                data: {txtotp: txtotp},
                success: function (data) {
                    if (data == 'ok') {
                        $('#txtotp').val('');
                        swal("Success", "You have verified successfully...you will be redirected in 3 seconds", "success");
                        setTimeout(function () {
                            window.location.href = "{{url('profile_photo')}}";
                            //http://localhost:8000/candidate_list 12 Jan
                        }, 2000);
                    } else if (data == 'contact_verified') {
                        $('#txtotp').val('');
                        swal("Success", "Contact has been verified", "success");
                        setTimeout(function () {
                            window.location.href = "{{url('edit_profile')}}";
                        }, 3000);
                    } else if (data == 'Incorrect') {
                        $('#txtotp').val('');
                        swal("Oops....", "Incorrect otp...Please enter correct otp", "info");
                    }
                },
                error: function (xhr, status, error) {
//                    alert('xhr.responseText');
                    $('#err').html(xhr.responseText);
                }
            });
        }
    }

    {{--function forget_password() {--}}
        {{--var forget_mobile = $('#forget_mobile').val();--}}
        {{--if (forget_mobile.trim() == '') {--}}
            {{--ShowErrorPopupMsg('Please enter mobile no');--}}
        {{--} else {--}}
            {{--$.ajax({--}}
                {{--type: "get",--}}
                {{--url: "{{url('forget_mobile')}}",--}}
                {{--data: {forget_mobile: forget_mobile},--}}
                {{--success: function (data) {--}}
{{--//                console.log(data);--}}
                    {{--if (data == "Invalid") {--}}
                        {{--HidePopoupMsg();--}}
                        {{--ShowErrorPopupMsg('Email or Password is invalid');--}}
                    {{--}--}}
                    {{--else {--}}
                        {{--HidePopoupMsg();--}}
                        {{--// ShowSuccessPopupMsg('Login Success');--}}
                        {{--window.location.href = "{{url('candidate_list')}}";--}}
                    {{--}--}}
                {{--},--}}
                {{--error: function (xhr, status, error) {--}}
                    {{--$('#err1').html(xhr.responseText);--}}

{{--//                alert(data);--}}
                {{--}--}}
            {{--});--}}
        {{--}--}}
    {{--}--}}


    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    function submitChange() {
//        var cpassword = $('#cpswd').val();
        var oldpassword = $('#txtChange_previousPsd').val();
        var newpassword = $('#txtchange_newPsd').val();
        var confirmpassword = $('#txtchange_retypePsd').val();
        if (newpassword.trim() == '') {
            swal("Warning", "Please enter new password", "info");
            return false;
        } else if (confirmpassword.trim() == '') {
            swal("Warning", "Please enter confirm password", "info");
            return false;
        } else if (confirmpassword.trim() != newpassword.trim()) {
            swal("Warning", "Password Mismatch", "info");
            return false;
        } else {
            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                url: "{{ url('change_password') }}",
                data: '{"newpassword":"' + newpassword + '", "confirmpassword":"' + confirmpassword + '", "oldpassword":"' + oldpassword + '"}',
                success: function (data) {
                    if (data == 'ok') {
//                        console.log(data);
                        $('#txtChange_previousPsd').val('');
                        $('#txtchange_newPsd').val('');
                        $('#txtchange_retypePsd').val('');
                        swal("Success", "Password changed successfully", "success");
//                        $('#myModal_UpdatePassword').modal('toggle');
                    } else if (data == 'Incorrect') {
                        $('#txtChange_previousPsd').val('');
                        swal("Error", "Incorrect current password", "error");
                    }
                },
                error: function (xhr, status, error) {
                    $('#err').html(xhr.responseText);
                }
            });
        }
    }

</script>