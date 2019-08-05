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
</head>
<body>

<style>
    body {margin: 0;padding: 0;background: url('images/bg.jpg') no-repeat;}
    .navbar-expand-xl {background-color: transparent;}
    .navbar-dark .navbar-nav .nav-link {color: #0c426f;}
    .text {
        text-align: center;
        font-size: 8pt;
        color: #7b5d01;
        line-height: 1.8;
        font-weight: bold;
        margin-top: 5px;

    }
    .logo_title{
        font-family: IranNastaliq,IRANSans;
        margin-top: 0px;
        padding-top: 20px;
        padding-bottom: 20px;
        text-align: center;
        font-size: 23pt;
        background: -webkit-linear-gradient(#0c426f, #0c426f);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-shadow: 0px 0px 35px #c4b59d, 0px -1px 1px #0c426f;
    }
    .professor_list_title:after {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        top: 35%;
        margin: 16px;
        width: 5%;
        height: 2px;
        background: #ffdf81;
    }
    input, select {width: 100%;height: 40px;padding: 5px;border: 1px solid #ced4da;border-radius: 0 !important;}
    .form-group {margin-bottom: 5px}
    .name_input {width: 90%; margin-left: 5px;float: right}
    .submit_btn {height: 40px;width: 60px;background: #f0bf00;border: 1px solid #b3b3b3;border-radius: 0 !important;}
    .submit_btn i {color: #0c426f;font-size: 20px;margin: auto}
    .services-section{border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;padding: 15px;background: #e1e1e1a3;
        transition: max-height 1s linear;
        max-height: 100%;
    }
    .services-title {
        font-size: 18px;
        font-weight: bold;
        margin-top: 1rem;
        margin-bottom: 10px;
        text-align: right;
        white-space: nowrap;
        transition: width .8s ease;
        width: 0;
    }
    .list-inline>li:before {
        content: '\f192';
        font-family: "Font Awesome 5 Free";
        position: relative;
        top: 2px;
        margin-left: 5px;
        color: #d39e00;
    }
    .services-section .section-divider {
        display: block;
        width: 50px;
        height: 50px;
        position: absolute;
        left: 50%;
        margin-left: -25px;
        background-color: inherit;
        z-index: 1;
    }
    .section-divider.triangle.up {
        -moz-transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
    .section-divider.triangle.up {
        top: -40px;
        background: #ececec;
        border: 1px solid #ddd;
    }
    .section-divider.triangle.up i {
        transform: rotate(-45deg);
        font-size: 25px;
        color: #1a4b72;
        margin: auto;
        position: absolute;
        left: 40%;
        top: 30%;
        -webkit-animation: blink-1 2s linear 0.2s infinite both;
        animation: blink-1 2s linear 0.2s infinite both;
    }

    /**
     * ----------------------------------------
     * animation blink-1
     * ----------------------------------------
     */
    @-webkit-keyframes blink-1 {
        0%,
        50%,
        100% {
            opacity: 1;
        }
        25%,
        75% {
            opacity: 0;
        }
    }
    @keyframes blink-1 {
        0%,
        50%,
        100% {
            opacity: 1;
        }
        25%,
        75% {
            opacity: 0;
        }
    }

    .display_hide {
        transition:max-height 1s ease-out;
        height: 80px;
    }
    .display_hide ul {opacity: 0;}
    .display_hide .services-title{width: 100%;text-align: center;transition: width .8s ease;}


</style>

    <section style="padding-bottom: 30px;">
        <div class="col-lg-8 col-md-12 offset-lg-2 text-center">
            <div class="row">
                <div class="col-md-4">
                    <img src="images/logo1.png" class="text-focus-in1" width="100" height="100">
                    <p class="text text-focus-in3">
                        دانشگاه معارف اسلامی
                        <br>
                        معاونت پژوهش
                        <br>
                        مرکز فناوری اطلاعات و ارتباطات
                    </p>
                    <h3 class="logo_title text-focus-in2">سامانه علم سنجی اعضای هیأت علمی</h3>

                </div>
                <div class="col-md-8" id="menu">
                    <section class="cd-intro">
                        <div class="cd-intro-content mask-2">
                            <div class="content-wrapper">
                                <h3>جستجوی اعضای هیأت علمی براساس:</h3>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <select>
                                            <option value="" data-default>لطفا دانشکده را انتخاب کنید</option>
                                            <option>دانشکده مطالعات تاریخ و تمدن اسلامی </option>
                                            <option>دانشکده مطالعات انقلاب اسلامی</option>
                                            <option>دانشکده مطالعات اسلامی</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="group">
                                            <option value="" data-default>لطفا گروه را انتخاب کنید</option>
                                            <option>گروه آموزشی اخلاق اسلامی</option>
                                            <option>گروه آموزشی انقلاب اسلامی</option>
                                            <option>گروه آموزشی تاریخ و تمدن اسلامی</option>
                                            <option>گروه آموزشی زبان</option>
                                            <option>گروه آموزشی قرآن و متون اسلامی</option>
                                            <option>گروه آموزشی مبانی نظری اسلام</option>
                                            <option>گروه آموزشی مدیریت فرهنگی</option>
                                            <option>گروه آموزشی مشاوره</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="نام و نام خانوادگی" aria-label="نام و نام خانوادگی" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button type="submit" class="input-group-text submit_btn" id="basic-addon2"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                    {{--<div class="form-group">
                                        <input type="text" placeholder="نام و نام خانوادگی" name="name_field" class="name_input">
                                        <button type="submit" class="submit_btn"><i class="fa fa-search"></i></button>
                                    </div>--}}
                                </form>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

        </div>
    </section>

    <section class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-divider triangle up">
                        <i class="fas fa-angle-double-down"></i>
                    </div>
                    <h4 class="services-title">لیست خدمات اعضای هیأت علمی</h4>

                    <ul class="row list-inline">
                        <li class="col-md-4">
                            <a href="#">پست الکترونیکی</a>
                        </li>
                        <li class="col-md-4">
                            <a href="#">راهنمای خدمات فناوری اطلاعات</a>
                        </li>
                        <li class="col-md-4">
                            <a href="#">صندوق رفاه اعضای هیأت علمی</a>
                        </li>
                        <li class="col-md-4">
                            <a href="#">کتابخانه</a>
                        </li>
                        <li class="col-md-4">
                            <a href="#">دسترسی به اینترنت</a>
                        </li>
                        <li class="col-md-4">
                            <a href="#">سامانه الکترونیکی دبیرخانه و گردش مکاتبات</a>
                        </li>
                        <li class="col-md-4">
                            <a href="#">خدمات رفاهی</a>
                        </li>
                        <li class="col-md-4">
                            <a href="#">سامانه تغذیه</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-right professor_list_title">لیست اساتید هیأت علمی</h3>
                </div>
            </div>
            <div class="row">
                @foreach($users as $user)

                    <div class="col-lg-4 col-md-6">
                        <a href="ProfessorResume/{{$user->id}}">
                            <div class="row professor_div">
                                <div class="col-lg-5 col-5 text-center">
                                    <img src="{{ URL::asset('images') }}/UsersPic/{{$user->pic}}"
                                         class="professor_pic img-responsive">
                                </div>
                                <div class="col-lg-7 col-7" style="padding: 0">
                                    <label class="professor_name"> {{$user->FirstName . " ". $user->LastName}} </label>

                                    <label class="professor_email">  {{$user->email}} </label>
                                    <label> <strong>گروه آموزشی: </strong> {{$user->professor->getGroup($user->professor->group_id)->title}} </label>
                                    <label> {{$user->professor->getLevel($user->professor->level_id)}} </label>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p class="copyright">تمام حقوق مادی و معنوی این سایت برای دانشگاه معارف اسلامی محفوظ است</p>
        </div>
    </footer>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <script>
        /*$('.section-divider i').click(function () {
           $('.services-section').toggleClass('display_hide');
        });*/
        $(function () {
            $(".section-divider").click(function () {
                $('.services-section').next().toggleClass("display_hide");
                $('.services-section').toggleClass("display_hide"); // this just rotates the expander arrow
            });
        });
    </script>
</body>
</html>
