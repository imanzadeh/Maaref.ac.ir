@inject('request', 'Illuminate\Http\Request')
@extends('layouts.dashboard')

@section('content')

    <div class="page-wrapper chiller-theme toggled">

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
            .umcGalleryWrapperItem .appIcon.members {
                background: url(images/icons/members.png) no-repeat center center / contain;
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
            .dashboard_menu {
                background: #fff;
                box-shadow: 0 0 6px -6px #333;
                padding: 20px 0;
                margin-bottom: 20px;
            }
            .dashboard_menu ul {list-style: none;margin-right: -15px;}
            .dashboard_menu ul li {margin-bottom: 10px}
            .dashboard_menu ul li .submenu {margin-top: 10px}
            .dashboard_menu ul li a, .dashboard_menu ul li .submenu li a {color: #333333}
            .dashboard_menu ul li:hover a {color: #3490dc;}
            .dashboard_menu ul li.active a, .dashboard_menu ul li .submenu li.active a {color: #3490dc}
            .dashboard_menu ul li:before {
                content: '\f192';
                font-family: "Font Awesome 5 pro";
                position: relative;
                top: 2px;
                margin-left: 5px;
                color: #f0bf00;
            }
            .dashboard_menu ul li .submenu ul li:before {
                content: '\f104';
                font-family: "Font Awesome 5 pro";
                position: relative;
                top: 2px;
                margin-left: 5px;
                color: #777777;
            }
            .dashboard_menu ul li input {margin-left: 10px}
            .dashboard_menu h4 {margin-right: 25px;margin-bottom: 20px;font-size: 18px}
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
            .logout_div {padding: 20px;background: #f0bf00;box-shadow: 0 0 6px -6px #333;}
            .logout_div a {color: #212529;font-weight: 700;}
            .logout_div a:hover {color: #1c75bc;text-decoration: none;}
            .logout_div a i {margin-left: 5px;position: relative;top: 2px;}
        </style>
        <main class="page-content">
            <div class="container-fluid" style="background: #ffffff;padding: 20px 0 !important;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <img src="/images/MainLogo.png" width="120">
                        </div>
                        <div class="col-md-9" style="display: flex;align-items: center;">
                            <div style="margin-right: 15px">
                                <h3 style="font-size: 20px;font-weight: 700;margin-bottom: 15px;">مرکز مدیریت سامانه های دانشگاه معارف اسلامی</h3>
                                <h5>سامانه اعضاء</h5>
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
                                <nav class="dashboard_menu">
                                    <h4>سامانه اعضاء</h4>
                                    <ul>

                                        {{--@if($user->can('users_manage'))

                                            <li class="{{ $request->segment(3) == 'ProfessorsList' ? 'active' : '' }}">
                                                <a href="{{route('management.ProfessorsList')}}">
                                                    لیست اساتید
                                                </a>
                                            </li>
                                            <li class="{{ $request->segment(3) == 'ImportProfessorsInfoForm' ? 'active' : '' }}">
                                                <a href="{{route('management.ImportProfessorsInfoForm')}}">
                                                    بروزرسانی مشخصات اساتید
                                                </a>
                                            </li>
                                            <li class="{{ $request->segment(3) == 'ProfessorTermLessonsImportForm' ? 'active' : '' }}">
                                                <a href="{{route('ProfessorTermLessons.ImportForm')}}">
                                                    دروس ترم جاری اساتید
                                                </a>
                                            </li>
                                            <li class="sidebar-sub-dropdown {{ $request->segment(2) == 'maaref_lessons' ? 'active' : ''}}">
                                                <a href="#">
                                                    مدیریت دروس دانشگاه
                                                </a>
                                                <div class="submenu" --}}{{--style="display: {{ $request->segment(2) == 'maaref_lessons' ? 'block' : 'none'}} "--}}{{-->
                                                    <ul>
                                                        <li class="{{ $request->segment(3) == 'lesson_types' ? 'active' : '' }}">
                                                            <a href="{{route('lesson_types.index')}}">
                                                                <span class="menu-text">مدیریت نوع دورس</span>
                                                            </a>
                                                        </li>
                                                        <li class="{{ $request->segment(3) == 'lesson_methods' ? 'active' : '' }}">
                                                            <a href="{{route('lesson_methods.index')}}">
                                                                <span class="menu-text">مدیریت نوع ارائه دورس</span>
                                                            </a>
                                                        </li>
                                                        <li class="{{ $request->segment(3) == 'lesson_genders' ? 'active' : '' }}">
                                                            <a href="{{route('lesson_genders.index')}}">
                                                                <span class="menu-text">مدیریت جنسیت دورس</span>
                                                            </a>
                                                        </li>
                                                        <li class="{{ $request->segment(3) == 'LessonsImportForm' ? 'active' : '' }}">
                                                            <a href="{{route('lessons_import.LessonsImportForm')}}">
                                                                <span class="menu-text">درج و بروز رسانی دورس</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                        @endif--}}
                                        @include('layouts.DashboardLayoutMenu')

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
                            <section>
                                <div class="container">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3></h3>
                                            <p>از طریق این سامانه شما می توانید به مدیریت اساتید هیأت علمی بپردازید. از جمله امکانات در دسترس عبارتند از: درج و ویرایش مشخصات استاد، درج و ویرایش رزومه اساتید،
                                            مدیریت دروس و ترم جاری و... </p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                </div>
            </div>
        </main>
        <!-- page-content" -->

    </div>
@endsection
