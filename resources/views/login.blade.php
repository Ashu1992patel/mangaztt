<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{url('assets/images1/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/vendor1/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/vendor1/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/vendor1/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/vendor1/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css1/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css1/main.css')}}">
    <!--===============================================================================================-->
    <style>

    </style>
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt="" style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
                <img src="{{url('assets/img/MM2.png')}}" style="margin-top: 82px;" alt="IMG">
            </div>
            {!! Form::open(['url' => 'admin_login', 'class' => 'form-horizontal login100-form', 'id'=>'frmLogin']) !!}
            {{--<form class="login100-form validate-form">--}}
            <div class="line_form"></div>
            <span class="login100-form-title">
                        <b style="font-family:Cambria;">LOGIN</b>
					</span>

            @if($errors->any())

                <div role="alert" id="alert" class="alert alert-danger">{{$errors->first()}}</div>
            @endif

            <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                <input class="input100" type="text" name="username" placeholder="Username" autocomplete="off" />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Password is required">
                <input class="input100" type="password" name="password" placeholder="Password" autocomplete="off" />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
            </div>
            <div class="container-login100-form-btn">
                {{--<button class="login100-form-btn">
                    <b style="font-family: Cambria">Login</b>
                </button>--}}
                <input type="submit" class="login100-form-btn" name="submit" value="Login">

            </div>

            <div class="text-center p-t-12">
						<span class="txt1">

						</span>
                <a class="txt2" href="#">
                </a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="{{url('assets/vendor1/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{url('assets/vendor1/bootstrap/js/popper.js')}}"></script>
<script src="{{url('assets/vendor1/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{url('assets/vendor1/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{url('assets/vendor1/tilt/tilt.jquery.min.js')}}"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="{{url('assets/js1/main.js')}}"></script>

</body>
</html>