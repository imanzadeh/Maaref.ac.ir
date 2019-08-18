<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>استاتید هیات علمی</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">

    {{--<link rel="stylesheet" href="css/transition/reset.css"> <!-- CSS reset -->--}}
    <link rel="stylesheet" href="css/transition/style.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->

    <style>
        body {margin: 0;padding: 0;background: url('/images/bg.jpg') no-repeat;}
        .navbar-expand-xl {background-color: transparent;}
        .navbar-dark .navbar-nav .nav-link {color: #0c426f;}
        .text {
            text-align: center;
            font-size: 12pt;
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

        ul {padding-right: 5px;margin-top: 20px;list-style-type: none;}
        ul li {margin-bottom: 5px}
        ul li a {display: block;padding: 5px 10px;text-decoration:none; }
        ul li.active a{color: #F70000}
        .service_list {
            padding-right: 0;
            list-style-type: none;
            width: 275px;
            text-align: right;
            float: left;
        }
        .service_title{width: 270px;float: left;margin-top: 50px;font-size: 20px;color: #0c426f;font-weight: 700;}
        .service_list li:hover, .service_list li.active {
            -webkit-transition: all .1s;
            -o-transition: all .1s;
            transition: all .1s;
            border-right: 2px solid #0D2B67;
            padding-right: 10px;
        }
        .service_list li:hover a {text-decoration:none;}
        .service_list li a {border-bottom: 1px solid #dfe0e0;}

        #menu ul li:hover > ul { display: block;right: 350px; -webkit-transition: right 300ms ease-in; -moz-transition: right 300ms ease-in; -ms-transition: right 300ms ease-in; transition: right 300ms ease-in; }
        #menu ul li > ul { display: none; right: 0; position: absolute;top: 50%;min-width: 250px; z-index: -1; -webkit-transition: right 300ms ease-in; -moz-transition: right 300ms ease-in; -ms-transition: right 300ms ease-in; transition: right 300ms ease-in; }
        #menu ul li > ul li a:hover { background-color:#2e2e2e; }

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
                    <img src="images/logo1.png" class="text-focus-in1" width="150" height="150">
                    <p class="text text-focus-in3">
                         دانشگاه معارف اسلامی
                        <br>
                        معاونت پژوهش
                        <br>
                        مرکز فناوری اطلاعات و ارتباطات
                    </p>
                    <h3 class="logo_title text-focus-in2">سامانه جامع و یکپارچه اعضاء</h3>

                </div>
                <div class="col-md-6" id="menu">
                    <div class="cd-intro">
                        <div class="cd-intro-content mask-2">
                            <div class="content-wrapper">
                                <div>
                                    <h5 class="service_title">سامانه های مرتبط</h5>
                                    <ul class="service_list">
                                        <li>
                                            <a href="#">سامانه خدمات دانشجویی</a>
                                        </li>
                                        <li>
                                            <a href="#">سامانه خدمات کارمندان</a>
                                        </li>
                                        <li>
                                            <a href="#">سامانه انجمن دانش آموختگان</a>
                                        </li>
                                        <li>
                                            <a href="{{route('ProfessorsList')}}" class="js-trigger-transition">سامانه علم سنجی اعضای هیأت علمی</a>
                                        </li>
                                    </ul>
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

<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

</body>
</html>

