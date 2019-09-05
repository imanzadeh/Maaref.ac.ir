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

        .card-body {padding-right: 40px}
        form label {text-align: right;margin-bottom: 10px}
        form .remember-label {margin-right: 10px;padding-top: 10px;margin-bottom: 10px}
        form input, form button {height: 40px;font-size: 10pt !important;}
        .alert-danger ul {margin-right: -20px;margin-top: 10px;}
        .alert-danger ul li {font-size: 12px;text-align: right;}

        #seconds {font-size: 35px;color: #ffc107;}

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
            <div class="row">
                <div class="col-md-6">
                    <div class="row align-items-center" style="height: 100%">
                        <div class="col-12">
                            <img src="{{ URL::asset('images') }}/logo1.png" class="text-focus-in1" width="140" height="140">

                            <p class="text text-focus-in3">
                                دانشگاه معارف اسلامی
                                <br>
                                معاونت پژوهش
                                <br>
                                مرکز فناوری اطلاعات و ارتباطات
                            </p>
                            <h3 class="logo_title text-focus-in2">سامانه جامع و یکپارچه اعضاء</h3>
                        </div>
                    </div>



                </div>
                <div class="col-md-6" id="menu">
                    <div class="cd-intro">
                        <div class="cd-intro-content mask-2">
                            <div class="content-wrapper">

                                <div id="notifier" class="notify-wrap" style="display:none;clear:both;margin-top:0px">

                                </div>

                                <div>
                                    <div class="card-body">

                                        @if(\Session::has('message'))
                                            <div class="alert alert-danger" style="font-size: 12px;text-align: right">{{ \Session::get('message') }}</div>
                                        @endif

                                        <form class="form-horizontal" method="POST" action="{{ route('verify.submit') }}">
                                            <h2 class="margin-bottom-20">لطفا کد ارسالی به شماره همراهتان را در کادر زیر وارد کنید</h2>
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
</div>

<footer>
    <div class="container">
        <p class="copyright">تمام حقوق مادی و معنوی این سایت برای دانشگاه معارف اسلامی محفوظ است</p>
    </div>
</footer>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>



<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript">
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
</script>
<script>
    var timeLeft = 90;
    function makeTimer() {
        timeLeft--;

        if (timeLeft == 0 ) {
            clearTimeout(timer);
            document.getElementById("logout-form").submit();
        }

        /*var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
        var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
        var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

        if (hours < "10") { hours = "0" + hours; }
        if (minutes < "10") { minutes = "0" + minutes; }
        if (seconds < "10") { seconds = "0" + seconds; }*/

        /*$("#days").html(days + "<span>Days</span>");
        $("#hours").html(hours + "<span>Hours</span>");*/
        // $("#minutes").html(minutes);
        $("#seconds").html(timeLeft);

    }

    setInterval(function() { makeTimer(); }, 1000);
</script>
</body>
</html>

{{--@extends('layouts.login')

@section('content')

    <div class="omni-authorize clearfix">
        <div class="col-md-6 omni-authorize-form">
            <div class="omni-form-inner">
                <div class="logo" align="center">
                    <div class="MaarefLogo"></div>
                    <div style="margin-top:10px;color:#107837;font-size:18px;margin-bottom:30px">
                        سامانه یکپارچه اعضاء
                    </div>
                </div>

                <div id="timer">
                    <div id="seconds"></div>
                    <div>:</div>
                    <div id="minutes"></div>
                </div>

                <div class="content">
                    <div id="notifier" class="notify-wrap" style="display:none;clear:both;margin-top:0px">

                    </div>
                    <div>

                        <div class="card-body">

                            @if(\Session::has('message'))
                                <div class="alert alert-success">{{ \Session::get('message') }}</div>
                            @endif

                            <form class="form-horizontal" method="POST" action="{{ route('verify.submit') }}">
                                <h2 class="text-center margin-bottom-30">لطفا کد ارسالی به شماره همراهتان را در کادر زیر وارد کنید</h2>
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">

                                        <input autocomplete="off" caption="کد ارسالی" type="text"
                                               class="form-control input-lg" name="code" value="{{ old('code') }}" required autofocus placeholder="کد ارسالی">

                                        <div class="input-bottom-error" id="txtNameFamily_pm">کد ارسالی به شماره همراه را وارد کنید.</div>

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
            <center>
                <div style="margin: 20px;margin-top: 30px;max-width:600px" align="center">
                    <div style="text-align:justify;font-size:14px;line-height: 30px;padding: 15px">
                        <p style="color:#FF0066" align="center"><i class="fa fa-bell"></i>&nbsp;در صورت بروز هرگونه اشکال یا خطا، با شماره تلفن 32110488-025 تماس حاصل فرموده و یا با پست الکترونیک it@maaref.ac.ir مکاتبه نمائید.</p>
                    </div>
                    <div class="copyright" align="center">2019 &copy; مرکز فناوری دانشگاه معارف اسلامی.</div>
                </div>
            </center>
            <div class="omni-footer">
            </div>
        </div>
        <div class="col-md-6 omni-authorize-image">
            <div class="omni-authorize-copy" style="text-shadow: 5px 2px 5px #000;margin: 50px 110px 110px 110px;text-align: justify;width: unset !important;">
                <h5>
                    <i class="fa fa-quote-right"></i> بى شك دوست محمد(ص ) كسى است كه خدا را فرمان برد اگر چه خويشاوندى او با آن حضرت دور باشد.
                    <i class="fa fa-quote-left"></i><BR><BR><span style="font-size: 15px !important;">حضرت علي (ع) - همان ، خ 92، ص 1129.</span>
                </h5>
            </div>
        </div>
    </div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

    <script>
        var timeLeft = 90;
        function makeTimer() {
            timeLeft--;

            if (timeLeft == 0 ) {
                clearTimeout(timer);
                document.getElementById("logout-form").submit();
            }

            var days = Math.floor(timeLeft / 86400);
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

            if (hours < "10") { hours = "0" + hours; }
            if (minutes < "10") { minutes = "0" + minutes; }
            if (seconds < "10") { seconds = "0" + seconds; }

            /*$("#days").html(days + "<span>Days</span>");
            $("#hours").html(hours + "<span>Hours</span>");*/
            $("#minutes").html(minutes);
            $("#seconds").html(seconds);

        }

        setInterval(function() { makeTimer(); }, 1000);
    </script>

@endsection--}}
