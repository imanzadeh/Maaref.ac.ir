<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ورود به پنل کاربری</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">

    {{--<link rel="stylesheet" href="css/transition/reset.css"> <!-- CSS reset -->--}}
    <link rel="stylesheet" href="css/transition/style.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->

    <style>
        body {margin: 0;padding: 0;background: url('images/bg.jpg') no-repeat;}
        .navbar-expand-xl {background-color: transparent;}
        .navbar-dark .navbar-nav .nav-link {color: #0c426f;}
        .text {
            text-align: center;
            font-size: 10pt;
            color: #7b5d01;
            line-height: 1.8;
            font-weight: bold;
            margin-top: 5px;

        }
        .logo_title{
            font-family: IranNastaliq,IRANSans;
            margin-top: 20px;
            padding-top: 20px;
            padding-bottom: 20px;
            text-align: center;
            font-size: 28pt;
            background: -webkit-linear-gradient(#0c426f, #0c426f);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0px 0px 35px #c4b59d, 0px -1px 1px #0c426f;
        }
        .height100{height: 85vh;display:flex;align-items:center;}

        .card-body {padding-right: 80px}
        form label {text-align: right;margin-bottom: 10px}
        form .remember-label {margin-right: 10px;padding-top: 5px;margin-bottom: 10px}
        form input, form button {height: 30px;font-size: 10pt !important;}
        .alert-danger ul {margin-right: -20px;margin-top: 10px;}
        .alert-danger ul li {font-size: 12px;text-align: right;}

        .mask-2.cd-intro-content .content-wrapper::before {top: 10%;height: 80%;}
        /**
         * ----------------------------------------
         * animation text-focus-in
         * ----------------------------------------
         */
        @-webkit-keyframes text-focus-in {
            0% {
                -webkit-filter: blur(12px);
                filter: blur(12px);
                opacity: 0;
            }
            100% {
                -webkit-filter: blur(0px);
                filter: blur(0px);
                opacity: 1;
            }
        }
        @keyframes text-focus-in {
            0% {
                -webkit-filter: blur(12px);
                filter: blur(12px);
                opacity: 0;
            }
            100% {
                -webkit-filter: blur(0px);
                filter: blur(0px);
                opacity: 1;
            }
        }

        .text-focus-in1 {
            -webkit-animation: text-focus-in 1s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
            animation: text-focus-in 1s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
        }
        .text-focus-in2 {
            -webkit-animation: text-focus-in 1.2s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
            animation: text-focus-in 1.2s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
        }
        .text-focus-in3 {
            -webkit-animation: text-focus-in 1.4s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
            animation: text-focus-in 1.4s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
        }

        /**
         * ----------------------------------------
         * animation slide-in-top
         * ----------------------------------------
         */
        @-webkit-keyframes slide-in-top {
            0% {
                -webkit-transform: translateY(-1000px);
                transform: translateY(-1000px);
                opacity: 0;
            }
            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
                opacity: 1;
            }
        }
        @keyframes slide-in-top {
            0% {
                -webkit-transform: translateY(-1000px);
                transform: translateY(-1000px);
                opacity: 0;
            }
            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
                opacity: 1;
            }
        }

        .slide-in-top {
            -webkit-animation: slide-in-top 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
            animation: slide-in-top 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
        }

        /**
         * ----------------------------------------
         * animation slide-in-bottom
         * ----------------------------------------
         */
        @-webkit-keyframes slide-in-bottom {
            0% {
                -webkit-transform: translateY(1000px);
                transform: translateY(1000px);
                opacity: 0;
            }
            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
                opacity: 1;
            }
        }
        @keyframes slide-in-bottom {
            0% {
                -webkit-transform: translateY(1000px);
                transform: translateY(1000px);
                opacity: 0;
            }
            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
                opacity: 1;
            }
        }

        .slide-in-bottom {
            -webkit-animation: slide-in-bottom 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
            animation: slide-in-bottom 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
        }

        .row-flex {
            display: flex;
            flex-wrap: wrap;
        }
        [class*="col-"] {
            margin-bottom: 30px;
        }

        .content {
            height: 100%;
        }

        .verify_title {font-size: 18px;line-height: 30px;}
        .verify_title #mobile_number {color: #dc3545;}
        #seconds {font-size: 35px;color: #ffc107;}
    </style>

</head>
<body>


<div class="container">
    <nav class="navbar navbar-expand-xl navbar-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContentXL">

            <ul class="navbar-nav mr-auto slide-in-top">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">راهنما</a>
                </li>
            </ul>

        </div>
    </nav>

    <div class="row height100">
        <div class="col-lg-8 col-md-12 offset-lg-2 text-center">
            <div class="row row-flex">
                <div class="col-md-5">
                    <div class="row align-items-center content" style="height: 100%">
                        <div class="col-12">
                            <img src="{{ URL::asset('images') }}/logo1.png" class="text-focus-in1" width="140" height="140">

                            <p class="text text-focus-in3">
                                دانشگاه معارف اسلامی
                                <br>
                                معاونت پژوهش
                                <br>
                                مرکز فناوری اطلاعات و ارتباطات
                            </p>
                            <h3 class="logo_title text-focus-in2">سامانه یکپارچه مدیریت</h3>
                        </div>
                    </div>



                </div>
                <div class="col-md-7" id="menu">
                    <div class="cd-intro content">
                        <div class="cd-intro-content mask-2 content">
                            <div class="content-wrapper content">
                                <div class="card-body" id="login_form">

                                    @if(\Session::has('message'))
                                        <div class="alert alert-success">{{ \Session::get('message') }}</div>
                                    @endif

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div><br />
                                    @endif

                                    <form method="POST" action="{{ route('login') }}" class="login-form">
                                        @csrf

                                        <div class="form-group">
                                            <label class="input-bottom-error" id="txtNameFamily_pm">نام کاربری خود را وارد کنید.</label>
                                            <input autocomplete="off" caption="نام کاربری" id="username" type="text"
                                                   class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }} input-lg"
                                                   name="username" value="{{ old('username') }}" required autofocus placeholder="نام کاربری">

                                            @if ($errors->has('username'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('username') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label class="input-bottom-error" id="txtNameFamily_pm">رمز عبور خود را وارد کنید.</label>

                                            <input autocomplete="off" caption="رمز عبور" id="password" type="password"
                                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} input-lg"
                                                   name="password" required placeholder="رمز عبور" onFocus="this.select();">

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>


                                        <div class="form-group">
                                            <div class="captcha">
                                                <span>{!! captcha_img('flat') !!}</span>
                                                <button type="button" class="btn btn-success btn-refresh"
                                                        id="refresh"><i class="fas fa-sync-alt"></i>
                                                </button>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <input id="captcha" type="text" class="form-control" placeholder="عبارت امنیتی" name="captcha">
                                        </div>

                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label remember-label" for="remember">
                                                    {{ __('مرا به خاطر بسپار') }}
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <button type="submit" class="btn btn-primary submit-btn" style="width: 100%">
                                                {{ __('ورود') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif

                                        </div>
                                    </form>
                                </div>

                                <div class="card-body" id="code_verify" style="display: none">

                                    @if(\Session::has('message'))
                                        <div class="alert alert-danger" style="font-size: 12px;text-align: right">{{ \Session::get('message') }}</div>
                                    @endif

                                    <form class="form-horizontal" method="POST" action="{{ route('verify.submit') }}">
                                        <h2 class="verify_title margin-bottom-20">لطفا کد ارسالی به شماره <span id="mobile_number"></span> را در کادر زیر وارد کنید</h2>
                                        {{ csrf_field() }}

                                        <div id="timer" class="margin-bottom-20">
                                            <div id="seconds"></div>
                                        </div>

                                        <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">

                                            <input autocomplete="off" caption="کد ارسالی" type="text"
                                                   class="form-control input-lg" name="code" value="{{ old('code') }}" required autofocus placeholder="کد ارسالی">

                                            {{--<div class="input-bottom-error" id="txtNameFamily_pm">کد ارسالی به شماره همراه را وارد کنید.</div>--}}

                                            @if ($errors->has('code'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <div >
                                                <button type="submit" class="btn btn-primary" style="width: 100%">
                                                    تأیید تلفن همراه
                                                </button>
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
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<footer>
    <div class="container">
        <p class="copyright">تمام حقوق مادی و معنوی این سایت برای دانشگاه معارف اسلامی محفوظ است</p>
    </div>
</footer>

<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript">

    var timeLeft = 10;

    $('#refresh').click(function(){
        $.ajax({
            url: 'refreshCaptcha',
            type: 'get',
            dataType: 'html',
            success: function (json) {
                $('.captcha span').html(json);
            },
            error: function (data) {
                alert('لطفا دوباره سعی کنید.');
            }
        });
    });
    /*$('.submit-btn').click(function (e) {
        e.preventDefault();
        var username = $('#username').val();
        var password = $('#password').val();
        var captcha = $('#captcha').val();
        var _token = $('input[name="_token"]').val();

        $.ajax({
            type: 'post',
            url: '{{route('user.login.check')}}',
            data: {username: username, password: password, captcha: captcha,  _token:_token},
            success: function (data) {
                if (data) {
                    var mobile = data.mobile;
                    var first = mobile.substr(0, 4);
                    var last = mobile.substr(7, 4);
                    mobile = last + "***" + first;
                    $('#login_form').hide();
                    $('#code_verify').show();
                    $('#mobile_number').html(mobile);
                    timeLeft = 10;
                    setInterval(function() { makeTimer(); }, 1000);
                }
                else
                    alert('ddddddddddd');
            }
        });
    });*/

    function makeTimer() {
        timeLeft--;

        if (timeLeft == 0 ) {
            clearTimeout(timer);
            $('#login_form').show();
            $('#code_verify').hide();
            $('#captcha').val('');
            $.ajax({
                url: 'refreshCaptcha',
                type: 'get',
                dataType: 'html',
                success: function (json) {
                    $('.captcha span').html(json);
                },
                error: function (data) {
                    alert('لطفا دوباره سعی کنید.');
                }
            });
            //document.getElementById("logout-form").submit();

            /*$.ajax({
                dataType:"json",
                method:"get",
                url: 'route('LogoutAjax')',
                success: function (data) {
                    alert(data);
                    if (data == "success") {
                        $('#login_form').show();
                        $('#code_verify').hide();
                    }
                    else
                        alert(data);
                }
            });*/
        }
        else if (timeLeft > 0)
            $("#seconds").html(timeLeft);

    }


</script>
</body>
</html>
{{--@endsection--}}
