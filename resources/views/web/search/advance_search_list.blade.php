@extends('web.web_master')

@section('title','Mangal Mandap : Advance List')
@section('head')
    @include('web.usage.lightbox_plugin')
@stop
@section('content')
    <input type="hidden" id="see_id" value="1"/>

    <section class="regitration_member all_pagescontainner">
        <div class="container">
            <div class="candidate_list_box">

                <div class="cand_search_filterbox" id="filter_box">
                    @if(isset($_SESSION['user_master']))
                        @php
                            $s_user = \App\Profiles::find($_SESSION['user_master']->id);
                            $s_image = \App\Images::find($s_user->id);
                                    $active = \App\ActivateProfile::find($_SESSION['user_master']->id);
$today = \Carbon\Carbon::now()->format('Y-m-d');
                        @endphp
                        <br>
                        @if($active->active != 'no' && $active->active != '' && $active->deactivated_at >= $today)
                            <div class="cand_profile_imgbox" style="cursor: pointer;"
                                 onclick="location.href='{{url('view_profile').'/'.$s_user->id}}';">

                                @if(file_exists($s_image->pic1))
                                    <img class="cand_img" src="{{url('').'/'.$s_image->pic1}}" width="50px"
                                         height="50px"/>
                                @else
                                    @if($s_image->gender == 'male')
                                        <img class="cand_img" src="{{url('images/male.png')}}"/>
                                    @else
                                        <img class="cand_img" src="{{url('images/female.png')}}"/>
                                    @endif
                                @endif

                            </div>
                            <div class="left_info">
                                @php
                                    $contact = \App\ViewContacts::where(['user_id' => $_SESSION['user_master']->id])->first();
                                @endphp
                                <div class="profile_cand_name"><i class="mdi mdi-account fa-sm pr-2"
                                                                  aria-hidden="true"></i> {{ucwords($s_user->name)}}
                                    (MM-{{$s_user->id}})
                                </div>
                                <div class="profile_cand_name"><i class="mdi mdi-access-point fa-sm pr-2"
                                                                  aria-hidden="true"></i> Plan :
                                    MM- {{$active->plan}}
                                </div>
                                <div class="profile_cand_name"><i class="mdi mdi-clock fa-sm pr-2"
                                                                  aria-hidden="true"></i> Plan Expire :
                                    {{$active->deactivated_at}}
                                </div>
                                <div class="profile_cand_name"><i class="mdi mdi-contacts fa-sm pr-2"
                                                                  aria-hidden="true"></i>Contact Left
                                    : {{isset($contact)?$contact->contact_left:'0'}}
                                </div>
                            </div>
                        @endif
                    @endif
                    <div class="search_filter_head">Refine Your Search</div>
                    <div class="refine_search_box style-scroll">
                        <form action="{{url('search_side')}}" enctype="multipart/form-data"
                              method="post">
                            <div class="filter_box border_none">
                                <label for="">Marital Status</label>
                                <i class="mdi mdi-chevron-up" onclick="FilterShowHide(this);"></i>
                            </div>
                            <div class="filter_data_box">
                                <input {{isset($_SESSION['marital_status'][0])?'checked':'checked'}} type="checkbox"
                                       class="search_filter" name="marital_status[]"
                                       value="Never Married">
                                &nbsp;&nbsp;<label class="label-checkbox">Never Married</label><br>
                                <input {{isset($_SESSION['marital_status'][1])?'checked':''}} type="checkbox"
                                       class="search_filter" name="marital_status[]" value="Divorced">
                                &nbsp;&nbsp;<label class="label-checkbox">Divorced</label><br>
                                <input {{isset($_SESSION['marital_status'][2])?'checked':''}} type="checkbox"
                                       class="search_filter" name="marital_status[]" value="Widowed">
                                &nbsp;&nbsp;<label class="label-checkbox">Widowed</label><br>
                                <input {{isset($_SESSION['marital_status'][3])?'checked':''}} type="checkbox"
                                       class="search_filter" name="marital_status[]" value="Separated">
                                &nbsp;&nbsp;<label class="label-checkbox">Separated</label><br>
                            </div>
                            <div class="filter_box">
                                <label for="">Age</label>
                                <i class="mdi mdi-chevron-up" onclick="FilterShowHide(this);"></i>
                            </div>
                            <div class="filter_data_box">
                                <div class="age_filterbox">
                                    <div class="row form-group">
                                        <div class="col-sm-1">
                                            From
                                        </div>
                                        <div class="col-sm-5">
                                            <select class="form-control" name="age1">
                                                <option selected="selected">18</option>
                                                <option>19</option>
                                                <option>20</option>
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option>
                                                <option>24</option>
                                                <option>25</option>
                                                <option>26</option>
                                                <option>27</option>
                                                <option>28</option>
                                                <option>29</option>
                                                <option>30</option>
                                                <option>31</option>
                                                <option>32</option>
                                                <option>33</option>
                                                <option>34</option>
                                                <option>35</option>
                                                <option>36</option>
                                                <option>37</option>
                                                <option>38</option>
                                                <option>39</option>
                                                <option>40</option>
                                                <option>41</option>
                                                <option>42</option>
                                                <option>43</option>
                                                <option>44</option>
                                                <option>45</option>
                                                <option>46</option>
                                                <option>47</option>
                                                <option>48</option>
                                                <option>49</option>
                                                <option>50</option>
                                                <option>51</option>
                                                <option>52</option>
                                                <option>53</option>
                                                <option>54</option>
                                                <option>55</option>
                                                <option>56</option>
                                                <option>57</option>
                                                <option>58</option>
                                                <option>59</option>
                                                <option>60</option>
                                                <option>61</option>
                                                <option>62</option>
                                                <option>63</option>
                                                <option>64</option>
                                                <option>65</option>
                                                <option>66</option>
                                                <option>67</option>
                                                <option>68</option>
                                                <option>69</option>
                                                <option>70</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-1">
                                            To
                                        </div>
                                        <div class="col-sm-5">
                                            <select class="form-control" name="age2">
                                                <option>18</option>
                                                <option>19</option>
                                                <option>20</option>
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option>
                                                <option>24</option>
                                                <option>25</option>
                                                <option>26</option>
                                                <option>27</option>
                                                <option>28</option>
                                                <option>29</option>
                                                <option selected="selected">30</option>
                                                <option>31</option>
                                                <option>32</option>
                                                <option>33</option>
                                                <option>34</option>
                                                <option>35</option>
                                                <option>36</option>
                                                <option>37</option>
                                                <option>38</option>
                                                <option>39</option>
                                                <option>40</option>
                                                <option>41</option>
                                                <option>42</option>
                                                <option>43</option>
                                                <option>44</option>
                                                <option>45</option>
                                                <option>46</option>
                                                <option>47</option>
                                                <option>48</option>
                                                <option>49</option>
                                                <option>50</option>
                                                <option>51</option>
                                                <option>52</option>
                                                <option>53</option>
                                                <option>54</option>
                                                <option>55</option>
                                                <option>56</option>
                                                <option>57</option>
                                                <option>58</option>
                                                <option>59</option>
                                                <option>60</option>
                                                <option>61</option>
                                                <option>62</option>
                                                <option>63</option>
                                                <option>64</option>
                                                <option>65</option>
                                                <option>66</option>
                                                <option>67</option>
                                                <option>68</option>
                                                <option>69</option>
                                                <option>70</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter_box">
                                <label for="">Religion</label>
                                <i class="mdi mdi-chevron-up" onclick="FilterShowHide(this);"></i>
                            </div>
                            <div class="filter_data_box">
                                <div class="age_filterbox">
                                    <select name="religion[]" class="typeDD" style="width:100%" multiple>
                                        <option selected value="Any">Doesn't Matter</option>
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
                            </div>


                            <div class="filter_box">
                                <label for="">Mother Tongue</label>
                                <i class="mdi mdi-chevron-up" onclick="FilterShowHide(this);"></i>
                            </div>
                            <div class="filter_data_box">
                                <div class="age_filterbox">
                                    <select class="typeDD" style="width:100%" name="language[]" multiple>
                                        <option selected value="Any">Doesn't Matter</option>
                                        <option value="Aka">Aka</option>
                                        <option value="Arabic">Arabic</option>
                                        <option value="Assamese">Assamese</option>
                                        <option value="Awadhi">Awadhi</option>
                                        <option value="Bengali">Bengali</option>
                                        <option value="Bhojpuri">Bhojpuri</option>
                                        <option value="Bhutia">Bhutia</option>
                                        <option value="Chatlisgarhi">Chatlisgarhi</option>
                                        <option value="Chinese">Chinese</option>
                                        <option value="Dogri">Dogri</option>
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
                                        <option value="Kumoani">Kumoani</option>
                                        <option value="Kutchi">Kutchi</option>
                                        <option value="Lepcha">Lepcha</option>
                                        <option value="Magahi">Magahi</option>
                                        <option value="Maithili">Maithili</option>
                                        <option value="Malay">Malay</option>
                                        <option value="Malayalam">Malayalam</option>
                                        <option value="Manipuri">Manipuri</option>
                                        <option value="Marathi">Marathi</option>
                                        <option value="Marwari">Marwari</option>
                                        <option value="Miji">Miji</option>
                                        <option value="Mizo">Mizo</option>
                                        <option value="Monpa">Monpa</option>
                                        <option value="Nepali">Nepali</option>
                                        <option value="Oriya">Oriya</option>
                                        <option value="Persian">Persian</option>
                                        <option value="Punjabi">Punjabi</option>
                                        <option value="Rajasthani">Rajasthani</option>
                                        <option value="Russian">Russian</option>
                                        <option value="Sanskrit">Sanskrit</option>
                                        <option value="Santhali">Santhali</option>
                                        <option value="Sindhi">Sindhi</option>
                                        <option value="Spanish">Spanish</option>
                                        <option value="Swedish">Swedish</option>
                                        <option value="Tamil">Tamil</option>
                                        <option value="Tagalog">Tagalog</option>
                                        <option value="Telugu">Telugu</option>
                                        <option value="Tulu">Tulu</option>
                                        <option value="Urdu">Urdu</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>


                            <div class="filter_box">
                                <label for="">Manglik</label>
                                <i class="mdi mdi-chevron-up" onclick="FilterShowHide(this);"></i>
                            </div>
                            <div class="filter_data_box">
                                <div class="age_filterbox">
                                    <select name="manglik" class="typeDD" style="width:100%">
                                        <option value="yes">Manglik</option>
                                        <option selected value="no">Non Manglik</option>
                                        <option value="dont know">Doesn't Matter</option>
                                    </select>
                                </div>
                            </div>
                            <div class="filter_box">
                                <label for="">Physical Status</label>
                                <i class="mdi mdi-chevron-up" onclick="FilterShowHide(this);"></i>
                            </div>
                            <div class="filter_data_box">
                                <div class="age_filterbox">
                                    <select name="physical"  class="typeDD" style="width:100%">
                                        <option selected value="Normal">Normal</option>
                                        <option value="Physically challenged">Physically challenged</option>
                                        <option value="dont know">Doesn't Matter</option>
                                    </select>
                                </div>
                            </div>


                            {{--<div class="filter_box">--}}
                            {{--<label for="">Height</label>--}}
                            {{--<i class="mdi mdi-chevron-up" onclick="FilterShowHide(this);"></i>--}}
                            {{--</div>--}}
                            {{--<div class="filter_data_box">--}}
                            {{--<div class="age_filterbox">--}}
                            {{--<div class="row form-group">--}}
                            {{--<div class="col-sm-1">--}}
                            {{--From--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-5">--}}
                            {{--<select name="p_heightfrom" id="Partner_heightfromid"--}}
                            {{--class="form-control txt_wizard">--}}
                            {{--<option selected="selected" value="3ft.5in-105cm">3ft.5in-105cm</option>--}}
                            {{--<option value="3ft.6in-107cm">3ft.6in-107cm</option>--}}
                            {{--<option value="3ft.7in-110cm">3ft.7in-110cm</option>--}}
                            {{--<option value="3ft.8in-112cm">3ft.8in-112cm</option>--}}
                            {{--<option value="3ft.9in-114cm">3ft.9in-114cm</option>--}}
                            {{--<option value="3ft.10in-117cm">3ft.10in-117cm</option>--}}
                            {{--<option value="3ft.11in-119cm">3ft.11in-119cm</option>--}}
                            {{--<option value="4ft-122cm">4ft-122cm</option>--}}
                            {{--<option value="4ft.1in-124cm">4ft.1in-124cm</option>--}}
                            {{--<option value="4ft.2in-127cm">4ft.2in-127cm</option>--}}
                            {{--<option value="4ft.3in-129cm">4ft.3in-129cm</option>--}}
                            {{--<option value="4ft.4in-132cm">4ft.4in-132cm</option>--}}
                            {{--<option value="4ft.5in-134cm">4ft.5in-134cm</option>--}}
                            {{--<option value="4ft.6in-137cm">4ft.6in-137cm</option>--}}
                            {{--<option value="4ft.7in-139cm">4ft.7in-139cm</option>--}}
                            {{--<option value="4ft.8in-142cm">4ft.8in-142cm</option>--}}
                            {{--<option value="4ft.9in-144cm">4ft.9in-144cm</option>--}}
                            {{--<option value="4ft.10in-147cm">4ft.10in-147cm</option>--}}
                            {{--<option value="4ft.11in-149cm">4ft.11in-149cm</option>--}}
                            {{--<option value="5ft-151cm">5ft-151cm</option>--}}
                            {{--<option value="5ft.1in-154cm">5ft.1in-154cm</option>--}}
                            {{--<option value="5ft.2in-157cm">5ft.2in-157cm</option>--}}
                            {{--<option value="5ft.3in-160cm">5ft.3in-160cm</option>--}}
                            {{--<option value="5ft.4in-162cm">5ft.4in-162cm</option>--}}
                            {{--<option value="5ft.5in-165cm">5ft.5in-165cm</option>--}}
                            {{--<option value="5ft.6in-167cm">5ft.6in-167cm</option>--}}
                            {{--<option value="5ft.7in-170cm">5ft.7in-170cm</option>--}}
                            {{--<option value="5ft.8in-172cm">5ft.8in-172cm</option>--}}
                            {{--<option value="5ft 9in-175cm</">5ft 9in-175cm</option>--}}
                            {{--<option value="5ft.10in-177cm">5ft.10in-177cm</option>--}}
                            {{--<option value="5ft.11in-180cm">5ft.11in-180cm</option>--}}
                            {{--<option value="6ft-182cm">6ft-182cm</option>--}}
                            {{--<option value="6ft.1in-185cm">6ft.1in-185cm</option>--}}
                            {{--<option value="6ft.1in-185cm">6ft.1in-185cm</option>--}}
                            {{--<option value="6ft.2in-187cm">6ft.2in-187cm</option>--}}
                            {{--<option value="6ft.3in-190cm">6ft.3in-190cm</option>--}}
                            {{--<option value="6ft.4in-193cm">6ft.4in-193cm</option>--}}
                            {{--<option value="6ft.5in-196cm">6ft.5in-196cm</option>--}}
                            {{--<option value="6ft.6in-198cm">6ft.6in-198cm</option>--}}
                            {{--<option value="6ft.7in-200cm">6ft.7in-200cm</option>--}}
                            {{--<option value="6ft.8in-203cm">6ft.8in-203cm</option>--}}
                            {{--<option value="6ft.9in-206cm">6ft.9in-206cm</option>--}}
                            {{--<option value="6ft.10in-208cm">6ft.10in-208cm</option>--}}
                            {{--<option value="6ft.11in-211cm">6ft.11in-211cm</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-1">--}}
                            {{--To--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-5">--}}
                            {{--<select name="p_heightto" id="Partner_heighttoid"--}}
                            {{--class="form-control drop_edit txt_wizard">--}}
                            {{--<option>- Select Height To -</option>--}}
                            {{--<option value="3ft.5in-105cm">3ft.5in-105cm</option>--}}
                            {{--<option value="3ft.6in-107cm">3ft.6in-107cm</option>--}}
                            {{--<option value="3ft.7in-110cm">3ft.7in-110cm</option>--}}
                            {{--<option value="3ft.8in-112cm">3ft.8in-112cm</option>--}}
                            {{--<option value="3ft.9in-114cm">3ft.9in-114cm</option>--}}
                            {{--<option value="3ft.10in-117cm">3ft.10in-117cm</option>--}}
                            {{--<option value="3ft.11in-119cm">3ft.11in-119cm</option>--}}
                            {{--<option value="4ft-122cm">4ft-122cm</option>--}}
                            {{--<option value="4ft.1in-124cm">4ft.1in-124cm</option>--}}
                            {{--<option value="4ft.2in-127cm">4ft.2in-127cm</option>--}}
                            {{--<option value="4ft.3in-129cm">4ft.3in-129cm</option>--}}
                            {{--<option value="4ft.4in-132cm">4ft.4in-132cm</option>--}}
                            {{--<option value="4ft.5in-134cm">4ft.5in-134cm</option>--}}
                            {{--<option value="4ft.6in-137cm">4ft.6in-137cm</option>--}}
                            {{--<option value="4ft.7in-139cm">4ft.7in-139cm</option>--}}
                            {{--<option value="4ft.8in-142cm">4ft.8in-142cm</option>--}}
                            {{--<option value="4ft.9in-144cm">4ft.9in-144cm</option>--}}
                            {{--<option value="4ft.10in-147cm">4ft.10in-147cm</option>--}}
                            {{--<option value="4ft.11in-149cm">4ft.11in-149cm</option>--}}
                            {{--<option value="5ft-151cm">5ft-151cm</option>--}}
                            {{--<option value="5ft.1in-154cm">5ft.1in-154cm</option>--}}
                            {{--<option value="5ft.2in-157cm">5ft.2in-157cm</option>--}}
                            {{--<option value="5ft.3in-160cm">5ft.3in-160cm</option>--}}
                            {{--<option value="5ft.4in-162cm">5ft.4in-162cm</option>--}}
                            {{--<option value="5ft.5in-165cm">5ft.5in-165cm</option>--}}
                            {{--<option value="5ft.6in-167cm">5ft.6in-167cm</option>--}}
                            {{--<option value="5ft.7in-170cm">5ft.7in-170cm</option>--}}
                            {{--<option value="5ft.8in-172cm">5ft.8in-172cm</option>--}}
                            {{--<option selected="selected" value="5ft 9in-175cm</">5ft 9in-175cm--}}
                            {{--</option>--}}
                            {{--<option value="5ft.10in-177cm">5ft.10in-177cm</option>--}}
                            {{--<option value="5ft.11in-180cm">5ft.11in-180cm</option>--}}
                            {{--<option value="6ft-182cm">6ft-182cm</option>--}}
                            {{--<option value="6ft.1in-185cm">6ft.1in-185cm</option>--}}
                            {{--<option value="6ft.1in-185cm">6ft.1in-185cm</option>--}}
                            {{--<option value="6ft.2in-187cm">6ft.2in-187cm</option>--}}
                            {{--<option value="6ft.3in-190cm">6ft.3in-190cm</option>--}}
                            {{--<option value="6ft.4in-193cm">6ft.4in-193cm</option>--}}
                            {{--<option value="6ft.5in-196cm">6ft.5in-196cm</option>--}}
                            {{--<option value="6ft.6in-198cm">6ft.6in-198cm</option>--}}
                            {{--<option value="6ft.7in-200cm">6ft.7in-200cm</option>--}}
                            {{--<option value="6ft.8in-203cm">6ft.8in-203cm</option>--}}
                            {{--<option value="6ft.9in-206cm">6ft.9in-206cm</option>--}}
                            {{--<option value="6ft.10in-208cm">6ft.10in-208cm</option>--}}
                            {{--<option value="6ft.11in-211cm">6ft.11in-211cm</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            <div class="filter_box">
                                <label for="">Caste</label>
                                <i class="mdi mdi-chevron-up" onclick="FilterShowHide(this);"></i>
                            </div>
                            <div class="filter_data_box">
                                <div class="age_filterbox">
                                    <select name="caste[]" class="typeDD" style="width:100%" multiple>
                                        <option selected value="Any">Doesn't Matter</option>
                                        <option value="Adi Dravida">Adi Dravida</option>
                                        <option value="Agarwal">Agarwal</option>
                                        <option value="Agnikula Kshatriya">Agnikula Kshatriya</option>
                                        <option value="Agri">A gri</option>
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
                                        <option value="Christian - Church of South India">Christian - Church of South
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
                                        <option value="Gujrati">Gujrati</option>
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
                                        <option value="Kumbhar">Kumbhar</option>
                                        <option value="Kumhar">Kumhar</option>
                                        <option value="Kummari">Kummari</option>
                                        <option value="Kunbi">Kunbi</option>
                                        <option value="Kurmi Kshatriya">Kurmi Kshatriya</option>
                                        <option value="Kurmi">Kurmi</option>
                                        <option value="Kuruba">Kuruba</option>
                                        <option value="Kuruhina Shetty">Kuruhina Shetty</option>
                                        <option value="Kurumbar">Kurumbar</option>
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
                                        <option value="Prajapati">Prajapati</option>
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

                            <div class="filter_box">
                                <label for="">Education</label>
                                <i class="mdi mdi-chevron-up" onclick="FilterShowHide(this);"></i>
                            </div>
                            <div class="filter_data_box">
                                <div class="age_filterbox">
                                    <select name="education[]" class="typeDD" style="width:100%" multiple>
                                        <option selected="selected" value="Any">Doesn't Matter</option>
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
                                        <OPTION VALUE='Bachelors - Arts/ Science/ Commerce/ Others'>Bachelors - Arts/
                                            Science/ Commerce/ Others
                                        </Option>
                                        <OPTION VALUE='Masters - Arts/ Science/ Commerce/ Others'>Masters - Arts/
                                            Science/
                                            Commerce/ Others
                                        </Option>
                                        <OPTION VALUE='Management - BBA/ MBA/ Others'>Management - BBA/ MBA/ Others
                                        </Option>
                                        <OPTION VALUE='Medicine - General/ Dental/ Surgeon/ Others'>Medicine - General/
                                            Dental/ Surgeon/ Others
                                        </Option>
                                        <OPTION VALUE='Legal - BL/ ML/ LLB/ LLM/ Others'>Legal - BL/ ML/ LLB/ LLM/
                                            Others
                                        </Option>
                                        <OPTION VALUE='Service - IAS/ IPS/ Others'>Service - IAS/ IPS/ Others</Option>
                                        <OPTION VALUE='Higher Secondary/ Secondary'>Higher Secondary/ Secondary</Option>
                                        <OPTION VALUE='Others'>Others</Option>
                                        <OPTION VALUE='Medicine - General/ Dental/ Surgeon/Engineering/CA/ Others'>
                                            Medicine
                                            - General/ Dental/ Surgeon/Engineering/CA/ Others
                                        </Option>
                                    </select>
                                </div>
                            </div>

                            <div class="filter_box">
                                <label for="">Occupation</label>
                                <i class="mdi mdi-chevron-up" onclick="FilterShowHide(this);"></i>
                            </div>
                            <div class="filter_data_box">
                                <div class="age_filterbox">
                                    <select name="occupation[]" class="typeDD" style="width:100%" multiple>
                                        <option selected="selected" value="Any">Doesn't Matter</option>
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
                                        <OPTION VALUE='Corporate Planning/ Consulting'>Corporate Planning/ Consulting
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
                                        <OPTION VALUE='Front Office/ Secretarial Staff/ Export/ Import'>Front Office/
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
                                        <OPTION VALUE='Production/ Maintenance/ Service Engg.'>Production/ Maintenance/
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
                                        <OPTION VALUE='Entertainment Professional'>Entertainment Professional</Option>
                                        <OPTION VALUE='Event Management Professional'>Event Management Professional
                                        </Option>
                                        <OPTION VALUE='Advertising / PR Professional'>Advertising / PR Professional
                                        </Option>
                                        <OPTION VALUE='Mariner / Merchant Navy'>Mariner / Merchant Navy</Option>
                                        <OPTION VALUE='Scientist / Researcher'>Scientist / Researcher</Option>
                                        <OPTION VALUE='CXO / President, Director, Chairman'>CXO / President, Director,
                                            Chairman
                                        </Option>
                                        <OPTION VALUE='Business'>Business</Option>
                                        <OPTION VALUE='Customer Care Professional'>Customer Care Professional</Option>
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


                            @php
                                $states =  \Illuminate\Support\Facades\DB::select("SELECT DISTINCT state FROM `statelist`");
                                    $cities =  \Illuminate\Support\Facades\DB::table('statelist')->distinct('state')->get();
                            @endphp
                            <div class="filter_box">
                                <label for="">State</label>
                                <i class="mdi mdi-chevron-up" onclick="FilterShowHide(this);"></i>
                            </div>
                            <div class="filter_data_box">
                                <select name="state[]" class="typeDD" style="width:100%" id="state" multiple>
                                    <option selected="selected" value="Any">Doesn't Matter</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->state}}">{{$state->state}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="filter_box">
                                <label for="">Income</label>
                                <i class="mdi mdi-chevron-up" onclick="FilterShowHide(this);"></i>
                            </div>
                            <div class="filter_data_box">
                                <div class="age_filterbox">
                                    <select  name="anual_income[]" id="anual_income" class="typeDD" style="width:100%" multiple>
                                        <option selected="selected" value="Any">Doesn't Matter</option>
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


                            <div class="filter_box">
                                <label for="">Family Status</label>
                                <i class="mdi mdi-chevron-up" onclick="FilterShowHide(this);"></i>
                            </div>
                            <div class="filter_data_box">
                                <select name="f_status" class="typeDD" style="width:100%">
                                    <option selected="" value="Not mentioned">Doesn't Matter</option>
                                    <option value="Rich">RICH</option>
                                    <option value="Upper middle class">UPPER MIDDLE</option>
                                    <option value="Middle class">MIDDLE</option>
                                </select>
                            </div>

                            <div class="filter_box">
                                <label for="">Diet</label>
                                <i class="mdi mdi-chevron-up" onclick="FilterShowHide(this);"></i>
                            </div>
                            <div class="filter_data_box">
                                <select name="diet" id="Diet_Partner" class="typeDD" style="width:100%">
                                    {{--<option selected="selected" value="Any">Any</option>--}}
                                    <option value="Not mentioned">Doesn't Matter</option>
                                    <option value="Vegetarian">Vegetarian</option>
                                    <option value="Non vegetarian">Non Vegetarian</option>
                                </select>
                            </div>

                            <div class="filter_box">
                                <label for="">Family Income</label>
                                <i class="mdi mdi-chevron-up" onclick="FilterShowHide(this);"></i>
                            </div>
                            <div class="filter_data_box">
                                <select name="family_income[]" id="family_income"
                                        class="typeDD" style="width:100%" multiple>
                                    <option selected="selected" value="Any">Doesn't Matter</option>
                                    <option value="Upto INR 1 Lakh" label="Upto INR 1 Lakh">Upto INR 1 Lakh</option>
                                    <option value="INR 1 Lakh to 2 Lakh" label="INR 1 Lakh to 2 Lakh">INR 1 Lakh to
                                        2 Lakh
                                    </option>
                                    <option value="INR 2 Lakh to 4 Lakh" label="INR 2 Lakh to 4 Lakh">INR 2 Lakh to
                                        4 Lakh
                                    </option>
                                    <option value="INR 4 Lakh to 7 Lakh" label="INR 4 Lakh to 7 Lakh"
                                    >INR 4 Lakh to 7 Lakh
                                    </option>
                                    <option value="INR 7 Lakh to 10 Lakh" label="INR 7 Lakh to 10 Lakh">INR 7 Lakh
                                        to 10 Lakh
                                    </option>
                                    <option value="INR 10 Lakh to 15 Lakh" label="INR 10 Lakh to 15 Lakh">INR 10
                                        Lakh to 15 Lakh
                                    </option>
                                    <option value="INR 15 Lakh to 20 Lakh" label="INR 15 Lakh to 20 Lakh">INR 15
                                        Lakh to 20 Lakh
                                    </option>
                                    <option value="INR 20 Lakh to 30 Lakh" label="INR 20 Lakh to 30 Lakh">INR 20
                                        Lakh to 30 Lakh
                                    </option>
                                    <option value="INR 30 Lakh to 50 Lakh" label="INR 30 Lakh to 50 Lakh">INR 30
                                        Lakh to 50 Lakh
                                    </option>
                                    <option value="INR 50 Lakh to 75 Lakh" label="INR 50 Lakh to 75 Lakh">INR 50
                                        Lakh to 75 Lakh
                                    </option>
                                    <option value="INR 75 Lakh to 1 Crore" label="INR 75 Lakh to 1 Crore">INR 75
                                        Lakh to 1 Crore
                                    </option>
                                    <option value="INR 1 Crore &amp; above" label="INR 1 Crore &amp; above">INR 1
                                        Crore &amp; above
                                    </option>
                                    <option value="Not applicable" label="Not applicable">Not applicable</option>
                                    <option value="Dont want to specify" label="Dont want to specify">Dont want to
                                        specify
                                    </option>

                                </select>
                            </div>

                            {{--<div class="filter_box">--}}
                            {{--<label for="">Drinking Habit</label>--}}
                            {{--<i class="mdi mdi-chevron-up" onclick="FilterShowHide(this);"></i>--}}
                            {{--</div>--}}
                            {{--<div class="filter_data_box">--}}
                            {{--<select name="drinking_habit" class="form-control requiredDD txt_wizard">--}}
                            {{--<option selected="selected" value="Any">Any</option>--}}
                            {{--<option value="1">Yes</option>--}}
                            {{--<option value="0">No</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}
                            {{--<div class="filter_box">--}}
                            {{--<label for="">Smoking Habit</label>--}}
                            {{--<i class="mdi mdi-chevron-up" onclick="FilterShowHide(this);"></i>--}}
                            {{--</div>--}}
                            {{--<div class="filter_data_box">--}}
                            {{--<select name="smoking_habit" class="form-control requiredDD txt_wizard">--}}
                            {{--<option selected="selected" value="Any">Any</option>--}}
                            {{--<option value="1">Yes</option>--}}
                            {{--<option value="0">No</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}
                            <div class="filter_box">
                                @if(!isset($_SESSION['user_master']))
                                    <button type="button" onclick="search_profile(this)" class="btn btn-sm btn-primary">
                                        Search
                                    </button>
                                @else
                                    <button type="submit" class="btn btn-sm btn-primary">Search</button>
                                @endif
                            </div>
                        </form>
                    </div>
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
                                        @if(isset($image->pic1) &&file_exists($image->pic1))
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
                                        <div class="cand_name" style="cursor: pointer;" data-content="{{$search_user->id}}"
                                             id="view_{{$search_user->id}}" onclick="view_contact(this)">{{$search_user->name}}{{'(MM'.$search_user->id.')'}}</div>
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
                                            <li>{{isset($search_user->salary)?$search_user->salary:'-'}}</li>

                                            <li data-toggle="tooltip" data-placement="bottom"
                                                title="{{$search_user->education_detail}}">{{$search_user->education}}</li>
                                        </ul>
                                    </div>
                                    <div class="cand_btnbox">
                                        <div class="btn-group cand_btncontainner" style="margin-bottom: 25px;">
                                            <a class="popup_submitbtn btn-sm btn-primary" data-content="{{$search_user->id}}"
                                               id="view_{{$search_user->id}}" onclick="view_contact(this)">View Profile
                                            </a>
                                        </div>
                                        <div class="btn-group cand_btncontainner" style="margin-bottom: 25px;">
                                            <a href="#" data-content="{{$search_user->id}}"
                                               id="send_{{$search_user->id}}"
                                               onclick="send_interest(this)"
                                               class="popup_submitbtn_lv btn-sm btn-success">Send
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
                            {{ $u_paginat->links() }}
                        @else
                            {{--<div class="home_brics_row">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-sm-4">--}}
                                        {{--<div class="white_brics">--}}
                                            {{--<div class="white_icon_withtxt">--}}
                                                {{--<div class="white_icons_blk"><i class="mdi mdi-heart-box"></i></div>--}}
                                                {{--<div class="white_brics_txt">Interest Receive</div>--}}
                                                {{--<div class="white_brics_count">1</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="brics_progress white_brics_border_clr1"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-sm-4">--}}
                                        {{--<div class="white_brics">--}}
                                            {{--<div class="white_icon_withtxt">--}}
                                                {{--<div class="white_icons_blk white_brics_clr2"><i--}}
                                                            {{--class="mdi mdi-contact-mail"></i>--}}
                                                {{--</div>--}}
                                                {{--<div class="white_brics_txt">Contact Left</div>--}}
                                                {{--<div class="white_brics_count">100</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="brics_progress white_brics_border_clr2"></div>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}

                                    {{--<div class="col-sm-4">--}}
                                        {{--<div class="white_brics">--}}
                                            {{--<div class="white_icon_withtxt">--}}
                                                {{--<div class="white_icons_blk white_brics_clr4"><i--}}
                                                            {{--class="mdi mdi-account-card-details"></i></div>--}}
                                                {{--<div class="white_brics_txt">Plan</div>--}}
                                                {{--<div class="white_brics_count">Gold</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="brics_progress white_brics_border_clr4"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            @if(count($users)>0)
                                @foreach($users as $search_user)
                                    @php
                                        $image = \App\Images::find($search_user->id);
                                    @endphp
                                    <div class="cand_box">
                                        <div class="cand_imgbox" style="cursor: pointer;"
                                             onclick="location.href='{{url('view_profile').'/'.$search_user->id}}';">
                                            @if(file_exists($image->pic1))
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
                                                <li>{{isset($search_user->salary)?$search_user->salary:'-'}}</li>

                                                <li data-toggle="tooltip" data-placement="bottom"
                                                    title="{{$search_user->education_detail}}">{{$search_user->education}}</li>
                                            </ul>
                                        </div>
                                        <div class="cand_btnbox">

                                            <div class="btn-group cand_btncontainner" style="margin-bottom: 25px;">
                                                {{--<button type="button" class="btn btn-success btn-xs res_btn"><span--}}
                                                {{--class="mdi mdi-heart"></span></button>--}}
                                                {{--<button type="button" class="btn btn-success btn-xs res_btn">Send Interest--}}
                                                {{--</button>--}}
                                                <a target="_blank" class="popup_submitbtn_view btn-sm btn-primary"
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
                                                       class="popup_submitbtn_lv btn-sm btn-success">Send Interest</a>
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
                                {{ $u_paginat->links() }}
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
        //        getmorepost();
        //        $(window).scroll(function (event) {
        //            var chk_scroll = $(window).scrollTop();
        //            //            if (chk_scroll > 70) {
        //            //                $('.top_manubar').addClass('top_manubar_fixed');
        //            ////                    $('.overall_containner').addClass('overall_margin');
        //            //                $('.profile_basic_menu_block').addClass('left_menu_fixed');
        //            //                $('.all_right_block').addClass('right_menu_fixed');
        //            //            }
        //            if ($(window).scrollTop() + $(window).height() == $(document).height()) {
        //                if (parseFloat($('#see_id').val()) <= parseFloat($('#user_count').val())) {
        //                    getmorepost();
        //                }
        //            }
        //        });
    </script>
@stop
