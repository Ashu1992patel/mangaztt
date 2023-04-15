@extends('web.web_master')

@section('title','Mangal Mandap : Home')

@section('head')
    <style type="text/css">


        /* this is just for the demo */

        .panel-heading:hover {
            cursor: pointer;
        }

        .panel-heading {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .side-tab:hover {
            cursor: pointer;
        }

        .panel.panel-default {
            border: none;
            box-shadow: none !important;
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 0px;

        }

        .panel-heading {
            border: none;
            background-color: #eee;

        }

        .panel-body {
            background-color: #442e2e;
            color: #ffffff;
        }

        .panel-title {
            font-weight: 400;
            color: #442e2e;
        }

        /*----------------------------------
            Macbook pro mockup from:
            http://jaredhardy.com/minimal-devices/

        ----------------------------------*/

        .md-macbook-pro {
            display: block;
            /*width: 55.3125em;*/
            /*height: 31.875em;*/
            width: 100%;
            /*height: 100vh;*/
            font-size: 13px;
            margin: 0 auto;
        }

        @media (max-width: 1199px) {
            font-size: 11px;

        }

        @media (max-width: 1024px) {
            font-size: 10px;
        }

        @media (max-width: 767px) {
            font-size: 7px;
        }

        @media (max-width: 320px) {
            font-size:  5px;
        }

        .md-macbook-pro .md-lid {
            /*width: 45em;*/
            /*height: 30.625em;*/
            width: 100%;
            /*height: 100vh;*/
            overflow: hidden;
            margin: 0 auto;
            position: relative;
            border-radius: 1.875em;
            border: solid 0.1875em #cdced1;
            background: #131313;
        }

        .md-macbook-pro .md-camera {
            width: 0.375em;
            height: 0.375em;
            margin: 0 auto;
            position: relative;
            top: 1.0625em;
            background: #000;
            border-radius: 100%;
            box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 0.25);
        }

        .md-macbook-pro .md-camera:after {
            content: "";
            display: block;
            width: 0.125em;
            height: 0.125em;
            position: absolute;
            left: 0.125em;
            top: 0.0625em;
            background: #353542;
            border-radius: 100%;
        }

        .md-macbook-pro .md-screen {
            width: 42.25em;
            height: 26.375em;
            margin: 0 auto;
            position: relative;
            top: 2.0625em;
        / / background: #1d1d1d;
            background: #fff;
            overflow: hidden;
        }

        .md-macbook-pro .md-screen img {
            width: 100%;
        }

        .md-macbook-pro .md-base {
            width: 100%;
            height: 0.9375em;
            position: relative;
            top: -0.75em;
            background: #c6c7ca;
        }

        .md-macbook-pro .md-base:after {
            content: "";
            display: block;
            width: 100%;
            height: 0.5em;
            margin: 0 auto;
            position: relative;
            bottom: -0.1875em;
            background: #b9babe;
            border-radius: 0 0 1.25em 1.25em;
        }

        .md-macbook-pro .md-base:before {
            content: "";
            display: block;
            width: 7.6875em;
            height: 0.625em;
            margin: 0 auto;
            position: relative;
            background: #a6a8ad;
            border-radius: 0 0 0.625em 0.625em;
        }

        .md-macbook-pro.md-glare .md-lid:after {
            content: "";
            display: block;
            width: 50%;
            height: 100%;
            position: absolute;
            top: 0;
            right: 0;
            border-radius: 0 1.25em 0 0;
            background: -webkit-linear-gradient(37deg, rgba(255, 255, 255, 0) 50%, rgba(247, 248, 240, 0.025) 50%, rgba(250, 245, 252, 0.08));
            background: -moz-linear-gradient(37deg, rgba(255, 255, 255, 0) 50%, rgba(247, 248, 240, 0.025) 50%, rgba(250, 245, 252, 0.08));
            background: -o-linear-gradient(37deg, rgba(255, 255, 255, 0) 50%, rgba(247, 248, 240, 0.025) 50%, rgba(250, 245, 252, 0.08));
            background: linear-gradient(53deg, rgba(255, 255, 255, 0) 50%, rgba(247, 248, 240, 0.025) 50%, rgba(250, 245, 252, 0.08));
        }

        .bor-r50 {
            border-radius: 50px;
        }

        .mt30 {
            margin-top: 30px;
        }

        .ripplelink {
            /* display: block; */
            text-align: center;
            color: #fff;
            text-decoration: none;
            position: relative;
            overflow: hidden;
            -webkit-transition: all 0.2s ease;
            -moz-transition: all 0.2s ease;
            -o-transition: all 0.2s ease;
            transition: all 0.2s ease;
            z-index: 0;
        }

        .btn-big {
            padding: 12px 95px;
        }

        .btn-blue {
            background-color: #3879d9;
            color: #fff;
            font-family: 'Open Sans', sans-serif;
            font-size: 20px;
        }

        .member-know {
            font-family: 'Open Sans', sans-serif;
            font-size: 16px;
            font-weight: normal;
            margin-top: 10px;
        }

        .micon-contact {
            background-position: -15px -5px;
            width: 48px;
            height: 48px;
        }

        .membership-icon {
            background: url({{url('images/icons/LV-icons.png')}});
            margin: 0 auto;
        }

        .feature-block {
            min-height: 162px;
            margin-bottom: 5px;
        }

        .well-box {
            background-color: #fff;
            padding: 17px;
            border: 1px solid #e9e6e0;
            box-shadow: #e2e2e2 1px 1px 6px;
        }

        .micon-contact {
            background-position: -15px -5px;
            width: 48px;
            height: 48px;
        }

        .micon-chat {
            background-position: -15px -141px;
            width: 48px;
            height: 48px;
        }

        .micon-email {
            background-position: -15px -73px;
            width: 48px;
            height: 48px;
        }

        .main_story_box {
            width: 900px;
            height: 100%;
            margin-left: -450px;
            position: absolute;
            top: 59px;
            left: 50%;
            overflow: hidden;
        }

        .main_story_box .item {
            width: 100%;
            height: 340px;
            float: left;
        }

        .item_slider_containner {
            width: 100%;
            min-height: 240px;
            overflow: hidden;
        }

        .item_slider_containner img {
            width: 40%;
            height: 240px;
            float: left;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
        }

        .story_slider_text {
            background-color: #fff;
            width: 55%;
            min-height: 240px;
            padding: 20px 20px 20px 40px;
            margin-left: 5%;
            float: left;
            position: relative;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
        }

        .story_slider_text h3 {
            display: inline-block;
            width: 100%;
            color: #00a544;
        }

        .story_slider_text p {
            width: 100%;
            display: inline-block;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 7;
            -webkit-box-orient: vertical;
            color: #666666;
        }

        .story_slider_text:after {
            content: " ";
            border: 10px solid transparent;
            border-right-color: #fff;
            display: block;
            width: 0;
            height: 0;
            margin-top: -10px;
            position: absolute;
            left: -20px;
            top: 50%;
        }

        .aadhaar-holder-home {
            position: fixed;
            top: 15%;
            width: 189px;
            background: #fff;
            padding: 6px 14px 10px 20px;
            border-radius: 50px;
            right: -57px;
            z-index: 1000;
            box-shadow: 0px 0px 11px #00000026;
            display: none;
        }

        .aadhaar-holder-home .aadhaar-logo {
            background-position: -13px -345px;
            width: 141px;
            height: 81px;
            display: block;
        }

        @media screen and (min-width: 320px) and (max-width: 479px) {
            .item_slider_containner img {
                width: 100px;
                height: auto;
                float: left;
                margin-top: 70px;
            }

            .story_slider_text {
                width: calc(100% - 120px);
                float: right;
                background-color: #f5f5f5;
                padding: 15px 10px;
            }

            .story_slider_text h3 {
                font-size: 14px;
            }

            .story_slider_text p {
                font-size: 12px;
                -webkit-line-clamp: 10;
            }

            .story_slider_text:after {
                border-right-color: #f5f5f5;
            }

            .caroufredsel_wrapper {
                min-height: 300px;
            }
        }
    </style>
    <script type="text/javascript">
        //        setTimeout(function () {
        //            ShowLoginSignup('contact');
        //        }, 15000);
        $(function () {
            $('#success_story').carouFredSel({
                width: 900,
                height: '100%',
                direction: 'up',
                items: 1,
                scroll: {
                    duration: 600,
                    onBefore: function (data) {
                        data.items.visible.children().css('opacity', 0).delay(200).fadeTo(400, 1);
                        data.items.old.children().fadeTo(400, 0);
                    }
                }
            });
            /*-------Second Slider */

            var $l = $('#carousel-left'),
                    $c = $('#carousel-center'),
                    $r = $('#carousel-right');

            $l.carouFredSel({
                auto: false,
                items: 1,
                direction: 'right',
                prev: {
                    button: '#prev',
                    fx: 'uncover',
                    onBefore: function () {
                        setTimeout(function () {
                            $c.trigger('prev');
                        }, 100);
                    }
                },
                next: {
                    fx: 'cover'
                }
            });
            $c.carouFredSel({
                auto: false,
                items: 1,
                prev: {
                    onBefore: function () {
                        setTimeout(function () {
                            $r.trigger('prev');
                        }, 100);
                    }
                },
                next: {
                    onBefore: function () {
                        setTimeout(function () {
                            $l.trigger('next');
                        }, 100);
                    }
                }
            });
            $r.carouFredSel({
                auto: false,
                items: 1,
                prev: {
                    fx: 'cover'
                },
                next: {
                    button: '#next',
                    fx: 'uncover',
                    onBefore: function () {
                        setTimeout(function () {
                            $c.trigger('next');
                        }, 100);
                    }
                }
            });
        });
    </script>
@stop

@section('content')
    <div class="aadhaar-holder-home"><span class="membership-icon aadhaar-logo"></span></div>
    <section class="main_banner">
        <div class="banner_search_bg">
            <div class="container">
                <form id="searchFilter" method="post" class="banner_search_form">
                    <div class="banner_block_search">
                        <em>Looking For</em>
                        <select name="gender" class="form-control">
                            <option selected="">Female</option>
                            <option>Male</option>
                        </select>
                    </div>
                    <div class="banner_block_search">
                        <em>Age</em>
                        <input name="age1" type="number" min="18" max="70" value="18"
                               class="form-control banner_age_txt"
                               placeholder="minimum">
                        <input name="age2" type="number" min="18" max="70" value="25"
                               class="form-control banner_age_txt"
                               placeholder="maximum">
                    </div>
                    <div class="banner_block_search">
                        <em>Religion</em>
                        <select name="religion" class="form-control">
                            <option value="Any" selected="">Any</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Sikh">Sikh</option>
                            <option value="Christian">Christian</option>
                            <option value="Muslim">Muslim</option>
                            <option value="Jain">Jain</option>
                            <option value="Buddhist">Buddhist</option>
                            <option value="Atheist">Atheist</option>
                            <option value="Bahai">Bahai</option>
                            <option value="Jew">Jew</option>
                            <option value="Other">Other Religion</option>
                        </select>
                    </div>
                    {{--<div class="banner_block_search">--}}
                    {{--<em>Caste</em>--}}
                    {{--<select name="caste" class="form-control" id="caste">--}}
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
                    {{--<option value="Christian - Church of South India">Christian - Church of South--}}
                    {{--India--}}
                    {{--</option>--}}
                    {{--<option value="Christian - Evangelist">Christian - Evangelist</option>--}}
                    {{--<option value="Christian - Jacobite">Christian - Jacobite</option>--}}
                    {{--<option value="Christian - Knanaya">Christian - Knanaya</option>--}}
                    {{--<option value="Christian - Knanaya Catholic">Christian - Knanaya Catholic--}}
                    {{--</option>--}}
                    {{--<option value="Christian - Knanaya Jacobite">Christian - Knanaya Jacobite--}}
                    {{--</option>--}}
                    {{--<option value="Christian - Latin Catholic">Christian - Latin Catholic</option>--}}
                    {{--<option value="Christian - Malankara">Christian - Malankara</option>--}}
                    {{--<option value="Christian - Marthoma">Christian - Marthoma</option>--}}
                    {{--<option value="Christian - Others">Christian - Others</option>--}}
                    {{--<option value="Christian - Pentacost">Christian - Pentacost</option>--}}
                    {{--<option value="Christian - Roman Catholic">Christian - Roman Catholic</option>--}}
                    {{--<option value="Christian - Syrian Catholic">Christian - Syrian Catholic</option>--}}
                    {{--<option value="Christian - Syrian Jacobite">Christian - Syrian Jacobite</option>--}}
                    {{--<option value="Christian - Syrian Orthodox">Christian - Syrian Orthodox</option>--}}
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
                    <div class="banner_block_search">
                        <button type="submit" class="btn btn-success">
                            <i class="banner_search_btnicon mdi mdi-account-search"></i>Search Partner
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="eassy_staps_block">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 col-sm-12">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-title mb30 text-center">
                            <h2>Upgrade your membership to connect with those you like.</h2>
                            <p>Search your perfect life-partner from millions of Aadhaar linked profiles.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="well-box feature-block text-center">
                            <div class="membership-icon micon-contact"></div>
                            <div class="feature-info">
                                <h3>View Contacts</h3>
                                <p>Access contact number and connect directly on call or via sms</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="well-box feature-block text-center">
                            <div class="membership-icon micon-email"></div>
                            <div class="feature-info">
                                <h3>View Email</h3>
                                <p>Get the email id of your selected profile and reach via email</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="well-box feature-block text-center">
                            <div class="membership-icon micon-chat"></div>
                            <div class="feature-info">
                                <h3>Chat</h3>
                                <p>Chat instantly with all other<br>
                                    online users</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt30 text-center"><a href="{{url('membership')}}"
                                                               class="btn btn-blue bor-r50 btn-big ripplelink"
                                                               id="HP_Membership_CTA">Browse Membership Plans</a>
                        <p class="member-know">  </p>
                    </div>
                </div>
                
                
                
            </div>
        </div>

    </section>
    <section class="sucess_story">
        <div class="container">
            <div class="main_heading">
                <h3>Search your perfect life-partner for 3 easy steps</h3>
                <div class="bottom_head_animation">
                    <span class="heading_heart">❤</span>
                </div>
            </div>
            <div class="staps_block">
                <div class="col-sm-4">
                    <div class="staps_mainblock">
                        <div class="stpas_iconblock">
                            <i class="mdi mdi-account-plus"></i>
                        </div>
                        <h2>Sign up</h2>
                        <p>Register for free &amp; put up your Profile</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="staps_mainblock stap2_color">
                        <div class="stpas_iconblock">
                            <i class="mdi mdi-account-star"></i>
                        </div>
                        <h2>Connect</h2>
                        <p>Select &amp; Connect with Matches you like</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="staps_mainblock stap3_color">
                        <div class="stpas_iconblock">
                            <i class="mdi mdi-account-switch"></i>
                        </div>
                        <h2>Interact</h2>
                        <p>Become a Premium Member &amp; Start a Conversation</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="eassy_staps_block">
        <div class="container">
            <div class="main_heading">
                <h3>About Mangal Mandap</h3>
                <div class="bottom_head_animation">
                    <span class="heading_heart">❤</span>
                </div>
            </div>
            <div class="staps_block">
                <div class="col-sm-12">
                    <p>
                        Mangal Mandap is a leading Indian matrimonial matchmaking service provider.
                        Our team is committed to provide 360 degree solutions to all prospective Indian brides and
                        grooms for marriage.
                    </p>
                    <p>
                        We are technology driven company providing the best platform to those who are genuinely looking
                        for their
                        soul mates through matrimonial site. We are the first choice of
                        customers because of our customer centric approach and higher authenticity. In short span of
                        time,
                        we managed to create a niche place for our-self as compared to other matrimony sites.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="eassy_staps_block">
        {{--<div class="container">--}}
        {{--<div class="main_heading">--}}
        {{--<h3>Success Story</h3>--}}
        {{--<div class="bottom_head_animation">--}}
        {{--<span class="heading_heart">❤</span>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="story_block">--}}
        {{--<div class="main_story_box">--}}
        {{--<div id="success_story">--}}
        {{--<div class="item">--}}
        {{--<div class="item_slider_containner">--}}
        {{--<img src="images/succ1.jpg"/>--}}
        {{--<div class="story_slider_text">--}}
        {{--<h3>ANTIMA  
        
        
        
        
        
        
        
        
         DIPESH</h3>--}}
        {{--<p>“Hiii I am Dipesh Gautam I have registered our profile on mangalmandap.com after then I have receive some profiles form mangalmandap and after few month I have found better life partner in mangalmandap.com. Thank you so much team MangalMandap for providing better service.”</p>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="item">--}}
        {{--<div class="item_slider_containner">--}}
        {{--<img src="images/sucess_story4.jpg"/>--}}
        {{--<div class="story_slider_text">--}}
        {{--<h3>Reena Pathak and Lalit Soni</h3>--}}
        {{--<p>“We had a seamless experience finding a perfect girl for Pawan. We opted for--}}
        {{--personalized matchmaking service on Mangal Mandap and within 3 months we were--}}
        {{--able--}}
        {{--to finalize the match.” said Pawan’s father. On Priyanka’s end,...</p>--}}

        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="item">--}}
        {{--<div class="item_slider_containner">--}}
        {{--<img src="images/sucess_story5.jpg"/>--}}
        {{--<div class="story_slider_text">--}}
        {{--<h3>Sourabh and Amrita</h3>--}}
        {{--<p>“I have been working as a IT Software professional in Mexico for last 3 years and--}}
        {{--I always wanted to marry someone from Indian origin and at the same time I--}}
        {{--didn’t wanted to leave my job post marriage. It was a bit challenge...</p>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="item">--}}
        {{--<div class="item_slider_containner">--}}
        {{--<img src="images/sucess_story1.jpg"/>--}}
        {{--<div class="story_slider_text">--}}
        {{--<h3>RUCHI Weds PUSHPAK</h3>--}}
        {{--<p>“We had a seamless experience finding a perfect girl for Pushpak. We opted for personalized matchmaking service on Mangal Mandap and within 3 months we were able to finalize the match.” said Pushpak & Ruchi Parent.”</p>--}}

        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<!-- <div id="wrapper">--}}
        {{--<div id="carousel-left">--}}
        {{--<img src="images/sucess_story1.jpg" width="450" height="325" />--}}
        {{--<img src="images/sucess_story3.jpg" width="450" height="325" />--}}
        {{--<img src="images/sucess_story4.jpg" width="450" height="325"/ >--}}
        {{--<img src="images/sucess_story5.jpg" width="450" height="325" />--}}
        {{--</div>--}}
        {{--<div id="carousel-center">--}}
        {{--<img src="images/sucess_story3.jpg" width="550" height="400"/ >--}}
        {{--<img src="images/sucess_story4.jpg" width="550" height="400" />--}}
        {{--<img src="images/sucess_story5.jpg" width="550" height="400" />--}}
        {{--<img src="images/sucess_story1.jpg" width="550" height="400" />--}}
        {{--</div>--}}
        {{--<div id="carousel-right">--}}
        {{--<img src="images/sucess_story4.jpg" width="450" height="325"/ >--}}
        {{--<img src="images/sucess_story5.jpg" width="450" height="325" />--}}
        {{--<img src="images/sucess_story1.jpg" width="450" height="325" />--}}
        {{--<img src="images/sucess_story3.jpg" width="450" height="325" />--}}
        {{--</div>--}}
        {{--<a id="prev" class="story_arrow" href="#">&lsaquo;</a>--}}
        {{--<a id="next" class="story_arrow" href="#">&rsaquo;</a>--}}
        {{--</div>-->--}}
        {{--</div>--}}
        {{--</div>--}}
        <div class="container">
            <div class="main_heading">
                <h3>Success Story</h3>
                <div class="bottom_head_animation">
                    <span class="heading_heart">❤</span>
                </div>
            </div>
            <br>
            <br>
            <div class="col-sm-12">
                <div class="col-sm-4">
                    <!-- begin panel group -->
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


                        <!-- panel 7 -->
                        <div class="panel panel-default">
                            <!--wrap panel heading in span to trigger image change as well as collapse -->
                            <span class="side-tab" data-target="#tab7" data-toggle="tab" role="tab"
                                  aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading7" data-toggle="collapse"
                             data-parent="#accordion" href="#collapse7" aria-expanded="true"
                             aria-controls="collapse7">
                            <h4 class="panel-title">ANTIMA weds DIPESH</h4>
                        </div>
                    </span>

                            <div id="collapse7" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="heading7">
                                <div class="panel-body">
                                    <!-- Tab content goes here -->
                                    Hiii I am Dipesh Gautam I have registered our profile on mangalmandap.com after then I have receive some profiles form mangalmandap and after few month I have found better life partner in mangalmandap.com. Thank you so much team MangalMandap for providing better service.
                                </div>
                            </div>
                        </div>
                        <!-- / panel 7 -->


                        <!-- panel 8 -->
                        <div class="panel panel-default">
                            <!--wrap panel heading in span to trigger image change as well as collapse -->
                            <span class="side-tab" data-target="#tab8" data-toggle="tab" role="tab"
                                  aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading8" data-toggle="collapse"
                             data-parent="#accordion" href="#collapse8" aria-expanded="true"
                             aria-controls="collapse8">
                            <h4 class="panel-title">RUCHI weds PUSHPAK</h4>
                        </div>
                    </span>

                            <div id="collapse8" class="panel-collapse collapse " role="tabpanel"
                                 aria-labelledby="heading8">
                                <div class="panel-body">
                                    <!-- Tab content goes here -->
                                    We had a seamless experience finding a perfect girl for Pushpak. We opted for personalized matchmaking service on Mangal Mandap and within 3 months we were able to finalize the match.” said Pushpak & Ruchi Parent.
                                </div>
                            </div>
                        </div>
                        <!-- / panel 8 -->


                        <!-- panel 1 -->
                        <div class="panel panel-default">
                            <!--wrap panel heading in span to trigger image change as well as collapse -->
                            <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab"
                                  aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse"
                             data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                             aria-controls="collapseOne">
                            <h4 class="panel-title">SUNANDA PATE weds VIPIN PATEL</h4>
                        </div>
                    </span>

                            <div id="collapseOne" class="panel-collapse collapse " role="tabpanel"
                                 aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <!-- Tab content goes here -->
                                    I would like to thank you MANGALMANDAP.COM After a long wait, the finalist me
                                    through MANGALMANDAP.COM , I got my soulmate & After a long conversation we tired in
                                    marriage bonds.
                                </div>
                            </div>
                        </div>
                        <!-- / panel 1 -->

                        <!-- panel 2 -->
                        <div class="panel panel-default">
                            <!--wrap panel heading in span to trigger image change as well as collapse -->
                            <span class="side-tab" data-target="#tab2" data-toggle="tab" role="tab"
                                  aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse"
                             data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                             aria-controls="collapseTwo">
                            <h4 class="panel-title collapsed">MAYURI PILLAI  weds SHRIKANT PILLAI</h4>
                        </div>
                    </span>

                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <!-- Tab content goes here -->
                                    A big thanks to MANGALMANDAP.COM platform, here we got perfect match. we found each
                                    other perfect for each other and decided to tie the knot with our family permission.
                                    And Without any issues we happily got married
                                </div>
                            </div>
                        </div>
                        <!-- / panel 2 -->

                        <!--  panel 3 -->
                        <div class="panel panel-default">
                            <!--wrap panel heading in span to trigger image change as well as collapse -->
                            <span class="side-tab" data-target="#tab3" data-toggle="tab" role="tab"
                                  aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingThree" class="collapsed" data-toggle="collapse"
                             data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                             aria-controls="collapseThree">
                            <h4 class="panel-title">RAKESH RAJPUT  weds NEHA RAJPUT </h4>
                        </div>
                    </span>

                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <!-- tab content goes here -->
                                    We met through MANGALMANDAP.COM . Thank you so much MANGALMANDAP.COM for giving me
                                    POOJA DESHMUKH (my life). Thank you again. Wish you all the best to other members
                                    also who were searching their partners. God Bless!!!
                                </div>
                            </div>
                        </div>

                        <!--  panel 4 -->
                        <div class="panel panel-default">
                            <!--wrap panel heading in span to trigger image change as well as collapse -->
                            <span class="side-tab" data-target="#tab4" data-toggle="tab" role="tab"
                                  aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading4" class="collapsed" data-toggle="collapse"
                             data-parent="#accordion" href="#collapse4" aria-expanded="false"
                             aria-controls="collapse4">
                            <h4 class="panel-title">LOKESH LODHI weds PRATIBHA LODHI </h4>
                        </div>
                    </span>

                            <div id="collapse4" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="heading4">
                                <div class="panel-body">
                                    <!-- tab content goes here -->
                                    Me and my wife had Gold membership of Mangalmandap.com We were searching for a while
                                    to meet our soulmate but it took some time. Mangalmandap is perfect platform to
                                    search your partner. One fine day, I saw my wife's profile, it seemed quite
                                    interesting. We contacted through JS mobile application and after few meetings
                                    decided to involve our parents. Mangal Mandap is amazing platform for searching your
                                    partner. It is much better than other counterparts. Thank you MM team for making our
                                    life wonderfuls
                                </div>
                            </div>
                        </div>

                        <!--  panel 5 -->
                        <div class="panel panel-default">
                            <!--wrap panel heading in span to trigger image change as well as collapse -->
                            <span class="side-tab" data-target="#tab5" data-toggle="tab" role="tab"
                                  aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading5" class="collapsed" data-toggle="collapse"
                             data-parent="#accordion" href="#collapse5" aria-expanded="false"
                             aria-controls="collapse5">
                            <h4 class="panel-title">PRATIMA WEDS SANDEEP BARMAN</h4>
                        </div>
                    </span>

                            <div id="collapse5" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="heading5">
                                <div class="panel-body">
                                    <!-- tab content goes here -->
                                    I meet with SANDEEP in MANGALMANDAP.COM Got married .thanks MANGALMANDAP.COM for
                                    such
                                    platform and support.
                                </div>
                            </div>
                        </div>

                        <!--  panel 6 -->
                        <div class="panel panel-default">
                            <!--wrap panel heading in span to trigger image change as well as collapse -->
                            <span class="side-tab" data-target="#tab6" data-toggle="tab" role="tab"
                                  aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading6" class="collapsed" data-toggle="collapse"
                             data-parent="#accordion" href="#collapse6" aria-expanded="false"
                             aria-controls="collapse6">
                            <h4 class="panel-title">RIYA THAKUR weds RAVI PRATAP SINGH</h4>
                        </div>
                    </span>

                            <div id="collapse6" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="heading6">
                                <div class="panel-body">
                                    <!-- tab content goes here -->
                                    I found my perfect match for life on MANGALMANDAP.COM Easy, simple and beautiful
                                    matrimony
                                    . Thanks a lot MANGALMANDAP.
                                </div>
                            </div>
                        </div>

                    </div> <!-- / panel-group -->

                </div> <!-- / panel-group -->


                <div class="col-sm-8">
                    <!-- begin macbook pro mockup -->
                    <div class="md-macbook-pro md-glare">
                        <div class="md-lid">
                            <div class="md-camera"></div>
                            <div class="md-screen">
                                <!-- content goes here -->
                                <div class="tab-featured-image">
                                    <div class="tab-content">
                                        <div class="tab-pane  in active" id="tab7">
                                            <img src="{{url('images/succ1.jpg')}}" alt="tab7"
                                                 class="img img-responsive">
                                        </div>
                                        <div class="tab-pane fade" id="tab8">

                                            <img src="{{url('images/sucess_story1.jpg')}}" alt="tab8"
                                                 class="img img-responsive">

                                        </div>
                                        <div class="tab-pane  fade " id="tab1">
                                            <img src="{{url('slider/SUNANDA PATEL & VIPIN PATEL.jpg')}}" alt="tab1"
                                                 class="img img-responsive">
                                        </div>
                                        <div class="tab-pane fade" id="tab2">

                                            <img src="{{url('slider/mayuri pillai & shrikant pillai.jpg')}}" alt="tab1"
                                                 class="img img-responsive">

                                        </div>
                                        <div class="tab-pane fade" id="tab3">

                                            <img src="{{url('slider/RAKESH RAJPUT WEDS NEHA RAJPUT.jpg')}}" alt="tab2"
                                                 class="img img-responsive">

                                        </div>
                                        <div class="tab-pane fade" id="tab4">

                                            <img src="{{url('slider/LOKESH WEDS PRIYANKA.jpg')}}" alt="tab3"
                                                 class="img img-responsive">

                                        </div>
                                        <div class="tab-pane fade" id="tab5">

                                            <img src="{{url('slider/PRATIMA WEDS SANDEEP.jpg')}}" alt="tab5"
                                                 class="img img-responsive">

                                        </div>
                                        <div class="tab-pane fade" id="tab6">

                                            <img src="{{url('slider/RIYA THAKUR WEDS RAVI PRATAP SINGH.jpg')}}"
                                                 alt="tab6" class="img img-responsive">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end macbook pro mockup -->


                </div> <!-- / .col-md-8 -->
            </div> <!--/ .row -->
        </div> <!-- end sidetab container -->
    </section>

    <script>
        $(document).ready(function () {
            // globalloadershow();
            $("#searchFilter").on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: "{{ url('search') }}",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    //beforeSend: function () {
                    //},
                    success: function (data) {
                        if (data == 'success') {
                            setTimeout(function () {
                                window.location.href = "{{url('candidate_list')}}";
                            }, 500);
                        }
                    },
                    error: function (xhr, status, error) {

                    }
                });
            });

        });
    </script>
@stop
