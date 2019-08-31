@extends('layouts.dashboard')

@section('content')

    <div class="page-wrapper chiller-theme toggled">
        {{--<a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-angle-double-left"></i>
        </a>--}}

    <!-- sidebar-wrapper  -->
        <style>
            body {background-color: #f2f2f2;}
            .umcGalleryWrapperItem .cornerPiece {
                width: 142px;
                height: 152px;
                position: absolute;
                border-radius: 10px;
                overflow: hidden;
                background-color: #fff;
            }
            .umcGalleryWrapperItem .cornerPiece.boxShadow {
                transition: box-shadow 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;
                box-shadow: 0 1px 6px rgba(1,0,0,0.118), 0 1px 4px rgba(0,1,0,0.118);
            }
            .umcGalleryWrapperItem .cornerPiece.bl {
                top: 12px;
                right: 12px;
            }
           .umcGalleryWrapperItem .cornerPiece.tr {
                top: 0;
                right: 0;
           }
            .umcGalleryWrapperItem {
                cursor: pointer;
                position: relative;
                width: 155px;
                height: 165px;
                padding: 0;
                margin-bottom: 20px;
                line-height: 1.25;
            }
            .umcGalleryWrapperItem .appStatusIcon.noStatus {
                display: none;
            }
            .umcGalleryWrapperItem .appIcon {
                margin: 30px 10px 10px 10px;
                width: 135px;
                height: 78px;
                position: absolute;
                background-size: contain;
                z-index: 1;
                transition: opacity 0.4s;
            }
            .umcGalleryWrapperItem .appIcon.members,
            .umcGalleryWrapperItem .appIcon.members_students,
            .umcGalleryWrapperItem .appIcon.members_employees,
            .umcGalleryWrapperItem .appIcon.members_graduates {
                background: url(images/icons/members2.png) no-repeat center center / contain;
            }
            .umcGalleryWrapperItem .appIcon.reservation {
                background: url(images/icons/reservation.png) no-repeat center center / contain;
            }
            .umcGalleryWrapperItem .appIcon.payments {
                background: url(images/icons/payments.png) no-repeat center center / contain;
            }
            .umcGalleryWrapperItem .appIcon.tickets {
                background: url(images/icons/tickets.png) no-repeat center center / contain;
            }
            .umcGalleryWrapperItem .appIcon.librarianship {
                background: url(images/icons/library.png) no-repeat center center / contain;
            }
            .umcGalleryWrapperItem .appIcon.dorm {
                background: url(images/icons/dorm.png) no-repeat center center / contain;
            }
            .umcGalleryWrapperItem .appIcon.internet_request {
                background: url(images/icons/internet.png) no-repeat center center / contain;
            }
            .umcGalleryWrapperItem .appIcon.certificates {
                background: url(images/icons/certification.png) no-repeat center center / contain;
            }
            .umcGalleryWrapperItem .appIcon.exams {
                background: url(images/icons/registration.png) no-repeat center center / contain;
            }
            .umcGalleryWrapperItem .appIcon.AlumniAssociation {
                background: url(images/icons/AlumniAssociation.png) no-repeat center center / contain;
            }
            .umcGalleryWrapperItem.hover .contentWrapper {
                bottom: 0;
            }
            .umcGalleryWrapperItem .appInnerWrapper {
                cursor: pointer;
                position: relative;
                width: 100%;
                height: 100%;
                overflow: hidden;
                background-color: transparent;
                z-index: 1;
            }
            .umcGalleryWrapperItem .appInnerWrapper .contentWrapper {
                width: 100%;
                height: 100%;
                position: absolute;
                padding-top: 22px;
                bottom: -75px;
                transition: bottom 0.4s;
                pointer-events: none;
            }
            .umcGalleryWrapperItem .appInnerWrapper .contentWrapper .appContent {
                width: 100%;
                height: 70px;
                padding: 0.3em 0.6em;
                text-align: center;
            }
            .umcGalleryWrapperItem .appInnerWrapper .contentWrapper .appContent .umcGalleryName {
                margin-top: 20px;
            }
            .umcGalleryWrapperItem .appInnerWrapper .contentWrapper .appHover {
                width: 100%;
                height: 70px;
                padding: 8px;
                color: #fff;
                font-size: 12px;
                color: #ff9900;
                text-align: center;
            }
            .umcGalleryWrapperItem:hover .appIcon {
                opacity: 0.05;
            }
            .umcGalleryWrapperItem .umcGalleryItem, .umcGalleryWrapperItem .umcGalleryItem:hover {
                box-shadow: none;
            }
            .umcGalleryWrapperItem:hover .contentWrapper {
                bottom: 0;
            }
            .umcGalleryWrapperItem:active .boxShadow {
                box-shadow: 0 3px 10px rgba(1,0,0,0.157), 0 3px 10px rgba(0,1,0,0.227);
            }
            .umcGalleryWrapperItem:hover .cornerPiece.boxShadow {
                transition: box-shadow 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;
                box-shadow: 0 1px 12px 4px rgba(1,0,0,0.118), 0 1px 4px rgba(0,1,0,0.118);
            }
            nav {
                background: #fff;
                box-shadow: 0 0 6px -6px #333;
                padding: 20px 0;
                margin-bottom: 20px;
            }
            nav ul {list-style: none;margin-right: -15px;}
            nav ul li input {margin-left: 10px}
            nav h4 {margin-right: 25px;margin-bottom: 20px}
            label input {
                display: none; /* Hide the default checkbox */
            }

            /* Style the artificial checkbox */
            label span {
                height: 15px;
                width: 15px;
                margin-left: 5px;
                border: 1px solid grey;
                display: inline-block;
                position: relative;
                top: 3px;
            }
            /* Style its checked state...with a ticked icon */
            [type=checkbox]:checked + span:before {
                content: '\2714';
                position: absolute;
                top: -4px;
                left: 1px;
            }
            [type=checkbox]:checked + span {background: #f0bf00}
            .logout_div {padding: 18px;background: #f0bf00;box-shadow: 0 0 6px -6px #333;text-align: center}
            .logout_div a {color: #212529;font-weight: 700;font-size: 15px}
            .logout_div a:hover {color: #1c75bc;text-decoration: none;}
            .logout_div a i {margin-left: 5px;position: relative;top: 2px;}
            #systems_list .row {margin-bottom: 30px}
            .systems_title {padding-bottom: 15px;margin-bottom: 15px}
            .systems_title:after {
                background: #f0bf00 none repeat scroll 0 0;
                content: "";
                display: block;
                height: 2px;
                margin-top: 15px;
                width: 100px;
            }
        </style>
        <main class="page-content">
            <div class="container-fluid" style="background: #ffffff;padding: 20px 0 !important;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <img src="images/MainLogo.png" width="120">
                        </div>
                        <div class="col-md-9" style="display: flex;align-items: center;">
                            <div style="margin-right: 15px">
                                <h3 style="font-size: 20px;font-weight: 700;margin-bottom: 15px;">مرکز مدیریت سامانه های دانشگاه معارف اسلامی</h3>
                                <h5>لیست تمامی سامانه ها</h5>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="container">

                    <div class="row">
                        <div class="col-md-3">
                            <section>
                                <nav>
                                    <h4>دسته بندی سامانه ها</h4>
                                    <ul>
                                        <li>
                                            <label>
                                                <input type='checkbox' value="all_systems" id="all_systems" checked>
                                                <span></span>
                                                نمایش همه سامانه ها
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type='checkbox' value="education" id="education">
                                                <span></span>
                                                سامانه های آموزشی
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type='checkbox' value="research" id="research">
                                                <span></span>
                                                سامانه های پژوهشی
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type='checkbox' value="student" id="student">
                                                <span></span>
                                                سامانه های دانشجویی
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type='checkbox' value="financial" id="financial">
                                                <span></span>
                                                سامانه های اداری و مالی
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type='checkbox' value="it" id="it">
                                                <span></span>
                                                سامانه های فناوری اطلاعات
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type='checkbox' value="free_teach" id="free_teach">
                                                <span></span>
                                                سامانه های مرکز آموزش های آزاد
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type='checkbox' value="available" id="available">
                                                <span></span>
                                                سامانه های در دسترس
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type='checkbox' value="preparation" id="preparation">
                                                <span></span>
                                                سامانه های در حال آماده سازی
                                            </label>
                                        </li>
                                    </ul>
                                </nav>

                                <div class="logout_div">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off"></i>
                                        <span>خروج از سامانه</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                            </section>
                        </div>
                        <div class="form-group col-md-9">
                            <section id="systems_list">
                                <div class="container">

                                    @php
                                        $education = "";
                                        $research = "";
                                        $student = "";
                                        $financial = "";
                                        $free_teach = "";
                                        $it = "";
                                    @endphp

                                    @foreach($data as $system)
                                        @if($system->type == "education")
                                            @php
                                                $education .= '<div class="col-md-3 '.$system->type.'">
                                                    <a href="'.route($system->mainPage).'">
                                                        <div class="umcGalleryWrapperItem" id="'.$system->id.'">
                                                            <div class="cornerPiece boxShadow bl"></div>
                                                            <div class="cornerPiece boxShadow tr"></div>
                                                            <div class="cornerPiece boxShadowCover bl"></div>
                                                            <div class="appIcon umcGalleryIcon '.$system->name.'"></div>
                                                            <div class="appInnerWrapper umcGalleryItem">
                                                                <div class="contentWrapper">
                                                                    <div class="appContent">
                                                                        <div class="umcGalleryName">
                                                                            <div class="umcGalleryNameContent">'.$system->title.'</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="appHover">
                                                                        <div>'.$system->description.'</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="appStatusIcon noStatus"></div>
                                                            <div class="appStatusIcon appStatusHoverIcon noStatus"></div>
                                                        </div>
                                                    </a>
                                                </div>';
                                            @endphp
                                        @endif

                                        @if($system->type == "research")
                                            @php
                                                $research .= '<div class="col-md-3 '.$system->type.'">
                                                    <a href="'.route($system->mainPage).'">
                                                        <div class="umcGalleryWrapperItem" id="'.$system->id.'">
                                                            <div class="cornerPiece boxShadow bl"></div>
                                                            <div class="cornerPiece boxShadow tr"></div>
                                                            <div class="cornerPiece boxShadowCover bl"></div>
                                                            <div class="appIcon umcGalleryIcon '.$system->name.'"></div>
                                                            <div class="appInnerWrapper umcGalleryItem">
                                                                <div class="contentWrapper">
                                                                    <div class="appContent">
                                                                        <div class="umcGalleryName">
                                                                            <div class="umcGalleryNameContent">'.$system->title.'</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="appHover">
                                                                        <div>'.$system->description.'</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="appStatusIcon noStatus"></div>
                                                            <div class="appStatusIcon appStatusHoverIcon noStatus"></div>
                                                        </div>
                                                    </a>
                                                </div>';
                                            @endphp
                                        @endif

                                        @if($system->type == "student")
                                            @php
                                                $student .= '<div class="col-md-3 '.$system->type.'">
                                                    <a href="'.route($system->mainPage).'">
                                                        <div class="umcGalleryWrapperItem" id="'.$system->id.'">
                                                            <div class="cornerPiece boxShadow bl"></div>
                                                            <div class="cornerPiece boxShadow tr"></div>
                                                            <div class="cornerPiece boxShadowCover bl"></div>
                                                            <div class="appIcon umcGalleryIcon '.$system->name.'"></div>
                                                            <div class="appInnerWrapper umcGalleryItem">
                                                                <div class="contentWrapper">
                                                                    <div class="appContent">
                                                                        <div class="umcGalleryName">
                                                                            <div class="umcGalleryNameContent">'.$system->title.'</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="appHover">
                                                                        <div>'.$system->description.'</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="appStatusIcon noStatus"></div>
                                                            <div class="appStatusIcon appStatusHoverIcon noStatus"></div>
                                                        </div>
                                                    </a>
                                                </div>';
                                            @endphp
                                        @endif

                                        @if($system->type == "financial")
                                            @php
                                                $financial .= '<div class="col-md-3 '.$system->type.'">
                                                    <a href="'.route($system->mainPage).'">
                                                        <div class="umcGalleryWrapperItem" id="'.$system->id.'">
                                                            <div class="cornerPiece boxShadow bl"></div>
                                                            <div class="cornerPiece boxShadow tr"></div>
                                                            <div class="cornerPiece boxShadowCover bl"></div>
                                                            <div class="appIcon umcGalleryIcon '.$system->name.'"></div>
                                                            <div class="appInnerWrapper umcGalleryItem">
                                                                <div class="contentWrapper">
                                                                    <div class="appContent">
                                                                        <div class="umcGalleryName">
                                                                            <div class="umcGalleryNameContent">'.$system->title.'</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="appHover">
                                                                        <div>'.$system->description.'</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="appStatusIcon noStatus"></div>
                                                            <div class="appStatusIcon appStatusHoverIcon noStatus"></div>
                                                        </div>
                                                    </a>
                                                </div>';
                                            @endphp
                                        @endif

                                        @if($system->type == "free_teach")
                                            @php
                                                $free_teach .= '<div class="col-md-3 '.$system->type.'">
                                                    <a href="'.route($system->mainPage).'">
                                                        <div class="umcGalleryWrapperItem" id="'.$system->id.'">
                                                            <div class="cornerPiece boxShadow bl"></div>
                                                            <div class="cornerPiece boxShadow tr"></div>
                                                            <div class="cornerPiece boxShadowCover bl"></div>
                                                            <div class="appIcon umcGalleryIcon '.$system->name.'"></div>
                                                            <div class="appInnerWrapper umcGalleryItem">
                                                                <div class="contentWrapper">
                                                                    <div class="appContent">
                                                                        <div class="umcGalleryName">
                                                                            <div class="umcGalleryNameContent">'.$system->title.'</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="appHover">
                                                                        <div>'.$system->description.'</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="appStatusIcon noStatus"></div>
                                                            <div class="appStatusIcon appStatusHoverIcon noStatus"></div>
                                                        </div>
                                                    </a>
                                                </div>';
                                            @endphp
                                        @endif

                                        @if($system->type == "it")
                                            @php
                                                $it .= '<div class="col-md-3 '.$system->type.'">
                                                    <a href="'.route($system->mainPage).'">
                                                        <div class="umcGalleryWrapperItem" id="'.$system->id.'">
                                                            <div class="cornerPiece boxShadow bl"></div>
                                                            <div class="cornerPiece boxShadow tr"></div>
                                                            <div class="cornerPiece boxShadowCover bl"></div>
                                                            <div class="appIcon umcGalleryIcon '.$system->name.'"></div>
                                                            <div class="appInnerWrapper umcGalleryItem">
                                                                <div class="contentWrapper">
                                                                    <div class="appContent">
                                                                        <div class="umcGalleryName">
                                                                            <div class="umcGalleryNameContent">'.$system->title.'</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="appHover">
                                                                        <div>'.$system->description.'</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="appStatusIcon noStatus"></div>
                                                            <div class="appStatusIcon appStatusHoverIcon noStatus"></div>
                                                        </div>
                                                    </a>
                                                </div>';
                                            @endphp
                                        @endif

                                    @endforeach

                                    <div class="row education">
                                        <div class="col-md-12">
                                            <h3 class="systems_title">سامانه های آموزشی</h3>
                                        </div>
                                        @php echo $education; @endphp
                                    </div>
                                    <div class="row research">
                                        <div class="col-md-12">
                                            <h3 class="systems_title">سامانه های پژوهشی</h3>
                                        </div>
                                        @php echo $research; @endphp
                                    </div>
                                    <div class="row student">
                                        <div class="col-md-12">
                                            <h3 class="systems_title">سامانه های دانشجویی</h3>
                                        </div>
                                        @php echo $student; @endphp
                                    </div>
                                    <div class="row financial">
                                        <div class="col-md-12">
                                            <h3 class="systems_title">سامانه های اداری و مالی</h3>
                                        </div>
                                        @php echo $financial; @endphp
                                    </div>
                                    <div class="row free_teach">
                                        <div class="col-md-12">
                                            <h3 class="systems_title">سامانه های مرکز آموزش های آزاد</h3>
                                        </div>
                                        @php echo $free_teach; @endphp
                                    </div>
                                    <div class="row it">
                                        <div class="col-md-12">
                                            <h3 class="systems_title">سامانه های فناوری اطلاعات</h3>
                                        </div>
                                        @php echo $it; @endphp
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                </div>
            </div>
        </main>
        <!-- page-content" -->

        <script>
            $(document).ready(function(){
                $("input[type='checkbox']").click(function(){


                    if ($(this).val() == "all_systems") {
                        if ($(this).is(":checked")) {
                            $("input:checkbox").prop('checked', false);
                            $("#all_systems").prop("checked", true);
                            $("#systems_list .row").show(500);
                        }
                        else
                            $("#systems_list .row").hide(500);

                    }
                    else {
                        var i = 0;
                        $(':checkbox').each(function() {
                            if ($(this).is(":checked")) {
                                $("#systems_list .row." + $(this).val()).show(500);
                                i++;
                            } else {
                                $("#systems_list .row." + $(this).val()).hide(500);
                            }
                        });
                        if (i != 0)
                            $("#all_systems"). prop("checked", false);
                    }


                });
            });
        </script>
    </div>
@endsection
