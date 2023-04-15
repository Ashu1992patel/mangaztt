@extends('web.web_master')

@section('title','Mangal Mandap : Profile Picture')
@section('head')

    <link href="{{url('css/cropper.min.css')}}" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="{{url('js/cropper.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var result = $('.result'),
                img_result = $('.img-result'),
                img_w = $('.img-w'),
                img_h = $('.img-h'),
                options = $('.options'),
                save = $('.save'),
                cropped = $('.cropped'),
                dwn = $('.download'),
                upload = $('#file-input'),
                cropper = '';
            var roundedCanvas;

            $('#file-input').change(function (e) {
                if (e.target.files.length) {
                    // start file reader
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        if (e.target.result) {
                            // create new image
                            var img = document.createElement('img');
                            img.id = 'image';
                            img.src = e.target.result;
                            // clean result before
                            //result.innerHTML = '';
                            result.children().remove();
                            // append new image
                            result.append(img);
                            // show save btn and options
                            // save.removeClass('hide');
                            options.removeClass('hide');
                            // init cropper
                            cropper = new Cropper(img);
                            // cropbtn setting enabled
                            $('#cropbtn_setting').find('.btn').removeAttr("disabled");
                            $('#btncrop_download').attr("disabled", "true");
                            $('#save_toserver').attr("disabled", "true");
                            save.removeAttr("disabled");

                            $('#btn_RotateLeft').click(function () {
                                cropper.rotate(90);
                            });
                            $('#btn_RotateRight').click(function () {
                                cropper.rotate(-90);
                            });
                            $('#btn_RotateReset').click(function () {
                                cropper.reset();
                            });
                            $('#btn_Compresed').click(function () {
                                debugger;
                                /*     cropper.(UMD, compressed);*/
                            });
                        }
                    };
                    reader.readAsDataURL(e.target.files[0]);
                }
            });
            $('#save').click(function (e) {
                e.preventDefault();
                // get result to data uri
                var imgSrc = cropper.getCroppedCanvas({
                    width: img_w.value // input value
                }).toDataURL();
                // remove hide class of img
                cropped.removeClass('hide');
                img_result.removeClass('hide');
                // show image cropped
                cropped.attr('src', imgSrc);
                dwn.removeClass('hide');
                dwn.download = 'imagename.png';
                dwn.attr('href', imgSrc);
                // download button enabled
                $('#btncrop_download').removeAttr("disabled");
                $('#save_toserver').removeAttr("disabled");
            });
            /* function getRoundedCanvas(sourceCanvas) {
             debugger;
             var canvas = document.createElement('canvas');
             var context = canvas.getContext('2d');
             var width = 300;
             var height = 300;

             canvas.width = width;
             canvas.height = height;

             context.imageSmoothingEnabled = true;
             context.drawImage(sourceCanvas, 0, 0, width, height);
             context.globalCompositeOperation = 'destination-in';
             context.beginPath();
             context.arc(width / 2, height / 2, Math.min(width, height) / 2, 0, 2 * Math.PI, true);
             context.fill();
             return canvas;
             }*/
        });
    </script>
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
                            <span class="heading_txt">My Profile Photos</span>
                        </div>
                        <div class="photoupload_containner">
                            <div class="col-sm-6">
                                <div class="view_photo_containner">
                                    @if(isset($image->pic1))
                                        <img src="{{url('').'/'.$image->pic1}}"/>
                                    @else
                                        @if($user->gender == 'male')
                                            <img src="{{url('images/male.png')}}"/>
                                        @else
                                            <img src="{{url('images/female.png')}}"/>
                                        @endif
                                    @endif
                                    <div class="set_profile">
                                        Change Profile Picture
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="upload_image_box">
                                    <div class="upload_caption">
                                        Upload photos from your computer
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-sm res_btn">
                                            <span class="mdi mdi-image"></span></button>
                                        <button onclick="upload_pic();" type="button"
                                                class="btn btn-primary btn-sm res_btn">Browse Photo
                                        </button>
                                    </div>
                                    <!-- <input type="file" name="profile_pic" id="recend_select_file" class="profile-upload-pic"
                                            onchange="ChangeSetImage(this, _UserProfile);"/>-->
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="heading_inner_row">
                                    <span class="inner_heading_txt">Uploaded Photos</span>
                                </div>
                                @if(isset($image->pic1))
                                    <div class="view_uploaded_photo">
                                        <img class="img_width100" src="{{url('').'/'.$image->pic1}}"/>
                                        <i class="mdi mdi-delete delete_image" id="1" onclick="delete_pic(this)"></i>
                                    </div>
                                @endif

                                @if(isset($image->pic2))
                                    <div class="view_uploaded_photo">
                                        <img class="img_width100" src="{{url('').'/'.$image->pic2}}"/>
                                        <i class="mdi mdi-delete delete_image" id="2" onclick="delete_pic(this)"></i>
                                    </div>
                                @endif

                                @if(isset($image->pic3))
                                    <div class="view_uploaded_photo">
                                        <img class="img_width100" src="{{url('').'/'.$image->pic3}}"/>
                                        <i class="mdi mdi-delete delete_image" id="3" onclick="delete_pic(this)"></i>
                                    </div>
                                @endif

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function upload_pic() {
            $('#myModal').addClass('in');
            $('#myModal').show();
//            $('#modal_size').removeClass('modal-dialog modal-md');
//            $('#modal_size').addClass('modal-dialog modal-lg');
            $('#modal_title').html('Upload Pictures');
            $('#modal_body').html('<img height="50px" class="center-block" src="{{url('images/loading.gif')}}"/>');
            $.ajax({
                type: "get",
                url: "{{url('getUpload')}}",
                success: function (data) {
                    $('#modal_body').html(data);
                },
                error: function (xhr, status, error) {
                    $('#modal_body').html(xhr.responseText);
                }
            });
        }

        function delete_pic(dis) {
            var id = $(dis).attr('id');
            $('#myModal').modal('show');
            $('#modal_body').html('<img height="50px" class="center-block" src="{{url('images/loading.gif')}}"/>');
            $('#modal_title').html('Confirm Deletion');
            $('#modal_body').html('<h5>Are you sure want to delete this picture<h5/>');
            $('#modalBtn').html('<a class="btn btn-sm btn-danger" href="{{url('picture').'/'}}' + id +
                '/delete"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Confirm</a>'
            );
        }


    </script>
@stop
