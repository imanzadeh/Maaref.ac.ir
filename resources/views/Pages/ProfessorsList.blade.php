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
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet">

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
        select {
            background-image: linear-gradient(45deg, transparent 50%, #d39e00 60%), linear-gradient(135deg, #d39e00 40%, transparent 50%) !important;
            background-position: calc(5% - 28px) 14px, calc(5% - 20px) 14px, 100% 0;
            background-size: 7px 10px, 10px 7px;
            background-repeat: no-repeat;
            -webkit-appearance: none;
        }
        .form-group {margin-bottom: 5px}
        .name_input {width: 90%; margin-left: 5px;float: right}
        .submit_btn {height: 40px;width: 60px;background: #f0bf00;border: 1px solid #b3b3b3;border-radius: 0 !important;}
        .submit_btn i {color: #0c426f;font-size: 20px;margin: auto}
        .services-section{border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;padding: 10px;background: #e1e1e1a3;
            transition: max-height 1s linear;
            max-height: 100%;
        }
        .services-title {
            font-weight: bold;
            margin-top: 1rem;
            margin-bottom: 10px;
            text-align: right;
            transition: margin-top 1s;
        }
        .search_title {margin-bottom: 20px;font-weight: 700}
        .services-section ul{opacity: 1; transition: opacity 1s 1s;}
        .list-inline>li {margin-bottom: 5px}
        .list-inline>li:before {
            content: '\f192';
            font-family: "Font Awesome 5 pro";
            position: relative;
            top: 2px;
            margin-left: 5px;
            color: #f0bf00;
        }
        .services-section .section-divider {
            display: block;
            width: 50px;
            height: 50px;
            position: absolute;
            left: 50%;
            margin-left: -25px;
            background-color: inherit;
            /*z-index: 1;*/
        }
        .section-divider.triangle.up {
            -moz-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }
        .section-divider.triangle.up {
            top: -35px;
            background: #ececec;
            border: 1px solid #ddd;
        }
        .section-divider.triangle.up i {
            transform: rotate(135deg);
            font-size: 25px;
            color: #f0bf00;
            margin: auto;
            position: absolute;
            left: 32%;
            top: 20%;
            -webkit-animation: blink-1 2s linear 0.2s both;
            animation: blink-1 2s linear 0.2s both;
        }

        /**
         * ----------------------------------------
         * animation blink-1
         * ----------------------------------------
         */
        @-webkit-keyframes blink-1 {
            0%, 50%, 100% {opacity: 1;}
            25%, 75% {opacity: 0;}
        }
        @keyframes blink-1 {
            0%, 50%, 100% {opacity: 1;}
            25%, 75% {opacity: 0;}
        }

        .display_hide {
            transition:max-height 1s linear;
            max-height: 1%;
            padding: 0;
            margin-bottom: 30px;
        }
        .display_hide .section-divider{top: -25px !important; transition: top 0s;}
        .display_hide ul {opacity: 0; transition: opacity 0s;height: 0;visibility: hidden;}
        .display_hide .services-title{
            opacity: 0;
            transition: opacity 0s;
            height: 0;
            margin: 0;
        }

        .display_hide .section-divider.triangle.up i {
            -webkit-animation-name: icon_transition;
            -moz-animation-name: icon_transition;
            animation-name: icon_transition;
            -webkit-animation-duration: .5s;
            -moz-animation-duration: .5s;
            animation-duration: .5s;

        }

    </style>

    <style>
        /*=============  On Load Page  ============*/
        .fadein {
            opacity: 0;
            -moz-transition: opacity 1.5s;
            -webkit-transition: opacity 1.5s;
            -o-transition: opacity 1.5s;
            transition: opacity 2s 1s;
        }

        body.loaded .fadein{
            opacity: 1;
        }

        body.loaded .logo_div {
            -webkit-animation-name: logo_transition;
            -moz-animation-name: logo_transition;
            animation-name: logo_transition;

            -webkit-animation-duration: 1.5s;
            -moz-animation-duration: 1.5s;
            animation-duration: 1.5s;
            /*-webkit-animation-delay: 2.5s;
            -moz-animation-delay: 2.5s;
            animation-delay: 2.5s;*/
            -webkit-animation-fill-mode: backwards;
            -moz-animation-fill-mode: backwards;
            animation-fill-mode: backwards;
        }
        body.loaded .search_div {
            -webkit-animation-name: search_transition;
            -moz-animation-name: search_transition;
            animation-name: search_transition;

            -webkit-animation-duration: 1.5s;
            -moz-animation-duration: 1.5s;
            animation-duration: 2s;
            /*-webkit-animation-delay: 2.5s;
            -moz-animation-delay: 2.5s;
            animation-delay: 2.5s;*/
            -webkit-animation-fill-mode: backwards;
            -moz-animation-fill-mode: backwards;
            animation-fill-mode: backwards;
        }

        @-webkit-keyframes search_transition {
            0% {-webkit-transform: translateX(-100%);}
            50% {opacity: 0}
            100% {-webkit-transform: translateX(0);}
        }
        @-moz-keyframes search_transition {
            0% {-moz-transform: translateX(-100%);}
            50% {opacity: 0}
            100% {-moz-transform: translateX(0);}
        }
        @keyframes search_transition {
            0% {
                opacity: 0;
                -webkit-transform: translateX(100%);
                -moz-transform: translateX(100%);
                -ms-transform: translateX(100%);
                -o-transform: translateX(100%);
                transform: translateX(100%);
            }
            50% {opacity: 0}
            100% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
            }
        }

        @-webkit-keyframes logo_transition {
            0% {-webkit-transform: translateY(100%);}
            100% {-webkit-transform: translateY(0);}
        }
        @-moz-keyframes logo_transition {
            0% {-moz-transform: translateY(100%);}
            100% {-moz-transform: translateY(0);}
        }
        @keyframes logo_transition {
            0% {
                -webkit-transform: translateY(100%);
                -moz-transform: translateY(100%);
                -ms-transform: translateY(100%);
                -o-transform: translateY(100%);
                transform: translateY(100%);
            }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @-webkit-keyframes title_transition {
            0% {-webkit-transform: translateY(0);}
            100% {-webkit-transform: translateY(-10%);}
        }
        @-moz-keyframes title_transition {
            0% {-moz-transform: translateY(100%);}
            100% {-moz-transform: translateY(0);}
        }
        @keyframes title_transition {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
            }
            100% {
                -webkit-transform: translateY(-10%);
                -moz-transform: translateY(-10%);
                -ms-transform: translateY(-10%);
                -o-transform: translateY(-10%);
                transform: translateY(-30%);
            }
        }

        @keyframes icon_transition {
            0% {
                transform: rotate(135deg);
            }
            100% {
                transform: rotate(-45deg);
                left: 35%;
                top: 26%;
            }
        }
    </style>

</head>
<body>

    <section style="padding-bottom: 30px;">
        <div class="col-lg-8 col-md-12 offset-lg-2 text-center">
            <div class="row">
                <div class="col-md-4 logo_div fadein">
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
                <div class="col-md-8 search_div fadein" id="menu">
                    <section class="cd-intro">
                        <div class="cd-intro-content mask-2">
                            <div class="content-wrapper">
                                <h3 class="search_title">جستجوی اعضای هیأت علمی براساس:</h3>
                                <div>
                                    <div class="form-group">
                                        {{csrf_field()}}
                                        <select>
                                            <option value="" data-default>لطفا دانشکده را انتخاب کنید</option>
                                            <option>دانشکده مطالعات تاریخ و تمدن اسلامی </option>
                                            <option>دانشکده مطالعات انقلاب اسلامی</option>
                                            <option>دانشکده مطالعات اسلامی</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="group" id="group">
                                            <option value="" selected>لطفا گروه آموزشی را انتخاب کنید</option>
                                            @foreach($groups as $group)
                                                <option value="{{$group->id}}">گروه آموزشی  {{ $group->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="نام خانوادگی" aria-label="نام خانوادگی" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="input-group-text submit_btn" id="basic-addon2"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

        </div>
    </section>

    <section class="services-section fadein">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-divider triangle up">
                        <i class="fas fa-angle-double-down"></i>
                    </div>
                    <h3 class="services-title">لیست خدمات اعضای هیأت علمی</h3>

                    <ul class="row list-inline">
                        <li class="col-md-4">
                            پست الکترونیکی
                        </li>
                        <li class="col-md-4">
                            راهنمای خدمات فناوری اطلاعات
                        </li>
                        <li class="col-md-4">
                            صندوق رفاه اعضای هیأت علمی
                        </li>
                        <li class="col-md-4">
                            کتابخانه
                        </li>
                        <li class="col-md-4">
                            دسترسی به اینترنت
                        </li>
                        <li class="col-md-4">
                            سامانه الکترونیکی دبیرخانه و گردش مکاتبات
                        </li>
                        <li class="col-md-4">
                            خدمات رفاهی
                        </li>
                        <li class="col-md-4">
                            سامانه تغذیه
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <section class="fadein">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-right professor_list_title">لیست اساتید هیأت علمی</h3>
                </div>
            </div>
            <div class="row" id="ProfessorsList">
                @foreach($users as $user)

                    <div class="col-lg-4 col-md-6">
                        <a href="ProfessorResume/{{$user->id}}" class="js-trigger-transition">
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

    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

    <script>
        window.onload = function() {
            document.body.className += " loaded";
        }
        $(".section-divider").click(function () {
            $('.services-section').next().toggleClass("display_hide");
            $('.services-section').toggleClass("display_hide"); // this just rotates the expander arrow
        });
        $('.submit_btn').click(function () {
            var group = $('#group').val();
            var lastname = $('#lastname').val();

            if (group == '')
                group = null;
            if (lastname == '')
                lastname = null;

            $.ajax({
                url: "ProfessorsSearch/" + group + "/" + lastname,
                dataType:"json",
                method:"get",
                success:function(data)
                {
                    var html = '';
                    for(var count=0; count < data.length; count++)
                    {
                        html += '<div class="col-lg-4 col-md-6">';
                        html += '<a href="ProfessorResume/' + data[count].id + '" class="js-trigger-transition">';
                        html += '<div class="row professor_div">';
                        html += '<div class="col-lg-5 col-5 text-center">';
                        html += '<img src="{{ URL::asset('images') }}/UsersPic/'+data[count].pic+'" class="professor_pic img-responsive">';
                        html += '</div>';
                        html += '<div class="col-lg-7 col-7" style="padding: 0">';
                        html += '<label class="professor_name">' + data[count].FirstName + " "+ data[count].LastName + '</label>';

                        html += '<label class="professor_email">' + data[count].email +'</label>';
                        html += '<label> <strong>گروه آموزشی: </strong> '+ data[count].group +' </label>';
                        html += '<label> '+ data[count].level +' </label>';
                        html += '</div>';
                        html += '</div>';
                        html += '</a>';
                        html += '</div>';
                    }
                    $('#ProfessorsList').html(html);
                }
            });
        });
    </script>
</body>
</html>
