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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <style>
        body {margin: 0;padding: 0;background: url('images/bg.jpg') no-repeat;}
        .navbar-expand-xl {background-color: transparent;}
        .navbar-dark .navbar-nav .nav-link {color: #0c426f;}
        .text {
            text-align: center;
            font-size: 10pt;
            color: #783FA6;
            margin-top: 10px;
            font-weight: bold;
        }
        .logo_title{
            font-family: IranNastaliq,IRANSans;
            /* margin-top: 20px; */
            padding-top: 20px;
            padding-bottom: 20px;
            font-weight: 700;
            text-align: center;
            font-size: 28pt;
            background: -webkit-linear-gradient(#0c426f, #0062cc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        footer {background-color: #e9e9e9;border-top: 1px solid #bbbbbb;}
        .copyright {color: #0c426f;}
        .height100{height: 85vh;display:flex;align-items:center;}

        ul {padding-right: 5px;margin-top: 20px;list-style-type: none;}
        ul li {margin-bottom: 5px}
        ul li a {display: block;padding: 5px 10px;text-decoration:none; }
        ul li.active a{color: #F70000}
        .service_list {
            padding-right: 0;
            list-style-type: none;
            width: 260px;
            text-align: right;
            float: left;
        }
        .service_title{width: 260px;float: left;margin-top: 50px;}
        .service_list li:hover, .service_list li.active {
            -webkit-transition: all .1s;
            -o-transition: all .1s;
            transition: all .1s;
            border-right: 2px solid #0D2B67;
            padding-right: 10px;
        }
        .service_list li:hover a {text-decoration:none;}
        .service_list li a {border-bottom: 1px solid #dfe0e0;}
    </style>
</head>
<body>


<div class="container">
    <nav class="navbar navbar-expand-xl navbar-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContentXL">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">راهنما</a>
                </li>
            </ul>

        </div>
    </nav>

    <div class="row height100">
        <div class="col-md-8 offset-md-2 text-center">
            <div class="row">
                <div class="col-md-6">
                    {{--<img src="images/logo-small.png" width="249" height="174">--}}
                    <img src="images/logo.png" width="150" height="150">
                    <h3 class="logo_title">سامانه جامع و یکپارچه اعضاء</h3>
                    <p class="text">
                        دانشگاه معارف اسلامی
                        <br>
                        معاونت پژوهش
                        <br>
                        مرکز فناوری اطلاعات و ارتباطات
                    </p>

                </div>
                <div class="col-md-6">
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
                            <a href="#">سامانه علم سنجی اعضای هیأت علمی</a>
                        </li>
                    </ul>
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

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {

        $mainNav = $('#mainNav');
        $mainNavItem = $('#mainNav li');

        $mainNavItem.on('click', function(e){

            var currentMenuItem = $(this),
                currentMenu 	= $(this).parent(),
                nextMenu        = $(this).find('ul').first(),
                isSubMenu       = currentMenuItem.hasClass('dropdown') || currentMenuItem.hasClass('dropdown-submenu'),
                isBack          = currentMenuItem.hasClass('back-button');

            if( isSubMenu ) {
                currentMenu.addClass('next-menu');
                nextMenu.addClass('visible');
            }

            if( isBack ) {
                currentMenu.parent().parent().removeClass('next-menu');
                currentMenu.removeClass('visible');
            }

            e.stopPropagation();
        });

    });
</script>

</body>
</html>

