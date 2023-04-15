@extends('web.web_master')

@section('title','Mangal Mandap : Membership')

@section('head')
    <link rel="stylesheet" href="{{url('css/custom.css')}}"/>

@stop

@section('content')
    <section class="regitration_member all_pagescontainner">
        <div class="container">
            <div class="col-sm-3">
                <div class="plan_mainbox">
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
            </div>
            <div class="col-sm-9">
                <div class="cand_list_containner">

                    <div class="cand_list_containner">
                        <div class="heading_row">
                            <span class="heading_txt">Membership Plans</span>
                        </div>
                        <div class="photoupload_containner">
                            <div class="col-sm-12">
                                {{--<div class="heading_inner_row margin_top0">--}}
                                {{--<span class="inner_heading_txt">Current Plan</span>--}}
                                {{--</div>--}}
                                {{--<div class="plans_container">--}}
                                {{--<div class="col-sm-6">--}}
                                {{--<div class="inner_plan_box">--}}
                                {{--<img src="images/plan_free.png">--}}
                                {{--<div class="text_package_box"><h2 style="--}}
                                {{--color: #3bb9de;--}}
                                {{--">Free</h2>--}}
                                {{--<p>1 Months</p>                                        <span--}}
                                {{--class="free_txt">--}}
                                {{--You can see all members but not contact and connect to other members.--}}
                                {{--</span>--}}

                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                <div class="heading_inner_row margin_top0">
                                    <span class="inner_heading_txt">Upgrade Your Plans</span>
                                </div>
                                <div class="plans_container">
                                    <div id="Online" class="tab-pane fade  gallery active in">
                                        <p class="plan-tagline"> All online services are self-assisted. Search and Send
                                            Interest. </p>
                                        <form name="membershipForm" id="membershipForm-2" class="ng-pristine ng-valid">

                                            <div class="row ">
                                                <div class="col-md-12 col-sm-12 col-xs-12 packages-section ">
                                                    <div class="col-md-3 col-sm-3 col-xs-12 LV-Basic">
                                                        <h2>MM-Bronze
                                                        </h2>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-6 get-contacts">
                                                        <div class="get-contacts-detail">
                                                            <p>View</p>
                                                            <h3>50</h3>
                                                            <p>Contacts</p></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-6 validity-offer-section">
                                                        <div class="get-validity-detail">
                                                            <p>Validity</p>
                                                            <h3>3</h3>
                                                            <p>Months</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-12 final-price-section">
                                                        <div class="price-detail">
                                                            <p>Final Price</p>
                                                            <h3><i class="fa fa-rupee"></i> 10500</h3>
                                                            <a href="#">
                                                                <button type="button" id="1"
                                                                        onclick="submitMembership(this)"
                                                                        class="btn btn-theme border-r-50 btn-LV-Basic ripplelink">
                                                                    BUY NOW
                                                                </button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <form name="membershipForm" id="membershipForm-7" class="ng-pristine ng-valid">
                                            <div class="row ">
                                                <div class="col-md-12 col-sm-12 col-xs-12 packages-section ">
                                                    <div class="col-md-3 col-sm-3 col-xs-12 LV-Super">
                                                        <h2>MM-Silver
                                                        </h2>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-6 get-contacts">
                                                        <div class="get-contacts-detail">
                                                            <p>View</p>
                                                            <h3>100</h3>
                                                            <p>Contacts</p></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-6 validity-offer-section">
                                                        <div class="get-validity-detail">
                                                            <p>Validity</p>
                                                            <h3>6</h3>
                                                            <p>Months</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-12 final-price-section">
                                                        <div class="price-detail">
                                                            <p>Final Price</p>
                                                            <h3><i class="fa fa-rupee"></i> 15500</h3>
                                                            <a href="#">
                                                                <button type="button" id="2"
                                                                        onclick="submitMembership(this)"
                                                                        class="btn btn-theme border-r-50 btn-LV-Super ripplelink">
                                                                    BUY NOW
                                                                </button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <form name="membershipForm" id="membershipForm-3" class="ng-pristine ng-valid">

                                            <div class="row ">
                                                <div class="col-md-12 col-sm-12 col-xs-12 packages-section ">
                                                    <div class="col-md-3 col-sm-3 col-xs-12 LV-Advance">
                                                        <h2>MM-Gold
                                                        </h2>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-6 get-contacts">
                                                        <div class="get-contacts-detail">
                                                            <p>View</p>
                                                            <h3>250</h3>
                                                            <p>Contacts</p></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-6 validity-offer-section">
                                                        <div class="get-validity-detail">
                                                            <p>Validity</p>
                                                            <h3>12</h3>
                                                            <p>Months</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-12 final-price-section">
                                                        <div class="price-detail">
                                                            <p>Final Price</p>
                                                            <h3><i class="fa fa-rupee"></i> 20500</h3>
                                                            <a href="#">
                                                                <button type="button" id="3"
                                                                        onclick="submitMembership(this)"
                                                                        class="btn btn-theme border-r-50 btn-LV-Advance ripplelink">
                                                                    BUY NOW
                                                                </button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <form name="membershipForm" id="membershipForm-4" class="ng-pristine ng-valid">

                                            <div class="row ">
                                                <div class="col-md-12 col-sm-12 col-xs-12 packages-section ">
                                                    <div class="col-md-3 col-sm-3 col-xs-12 LV-Advance">
                                                        <h2>Bank Details
                                                        </h2>
                                                    </div>
                                                    <div class="col-md-9 col-sm-9 col-xs-12 get-contacts">
                                                     
                                                     
                                                      <!--  <div class="get-contacts-detail">
                                                            <p>Account Number :- 36751854429</p>
                                                            <p>Account Name :- Mangal Mandap Matrimony</p>
                                                            <p>IFSC Code :- SBIN0001398</p>
                                                            <p>Branch Name :- TULARAM CHOWK, STATE BANK OF INDIA,
                                                                JABALPUR</p>
                                                        </div>
                                                        
                                                        -->
                                                       
                                                       
                                                       
                                                       
                                                        {{--<div class="col-md-3 col-sm-3 col-xs-3 validity-offer-section">--}}
                                                        {{--<div class="get-validity-detail">--}}
                                                        {{--<p>Validity</p>--}}
                                                        {{--<h3>12</h3>--}}
                                                        {{--<p>Months</p>--}}
                                                        {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-3 col-sm-3 col-xs-3 final-price-section">--}}
                                                        {{--<div class="price-detail">--}}
                                                        {{--<p>Final Price</p>--}}
                                                        {{--<h3><i class="fa fa-rupee"></i> 21000</h3>--}}
                                                        {{--<a href="#" >--}}
                                                        {{--<button type="button" id="3" onclick="submitMembership(this)" class="btn btn-theme border-r-50 btn-LV-Advance ripplelink">BUY NOW</button>--}}
                                                        {{--</a>--}}

                                                        {{--</div>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

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
        function submitMembership(dis) {
            $('#myModal').modal('show');
            $('#modal_title').html('Confirm Buy');
            $('#modal_size').removeClass('modal-dialog modal-md');
            $('#modal_size').addClass('modal-dialog modal-lg');
            $('#modal_body').html('<img height="50px" class="center-block" src="{{url('images/loading.gif')}}"/>');
            var plan_id = $(dis).attr('id');
            var editurl = '{{ url('getpayment') }}';
//            alert(editurl);
            $.ajax({
                type: "GET",
                contentType: "application/json; charset=utf-8",
                url: editurl,
                data: {
                    plan_id: plan_id
                },
                success: function (data) {
                    if (data == 'Please login first') {
                        $('#myModal').modal('hide');
                        swal("Warning", "Please login first", "info");
                        setTimeout(function () {
                            ShowLoginSignup('signin');
                        }, 2000);
                    } else {
                        $('#modal_body').html(data);
                    }
                },
                error: function (xhr, status, error) {
                    $('#modal_body').html(xhr.responseText);
                }
            });
        }
    </script>
@stop