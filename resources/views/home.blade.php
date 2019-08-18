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
                margin: 10px;
                width: 135px;
                height: 78px;
                position: absolute;
                background: url(images/ucs_logo_gray.svg) no-repeat center center;
                background-size: contain;
                z-index: 1;
                transition: opacity 0.4s;
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
            }
            nav ul {list-style: none;margin-right: -15px;}
            nav ul li input {margin-left: 10px}
            nav h4 {margin-right: 25px;margin-bottom: 20px}
        </style>
        <main class="page-content">
            <div class="container-fluid" style="background: #ffffff;padding: 40px 0 !important;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <img src="images/logo1.png" width="120">
                        </div>
                        <div class="col-md-9">
                            <h3 style="font-size: 20px;font-weight: 700;margin-bottom: 15px;">
                                مرکز مدیریت سامانه های دانشگاه معارف اسلامی
                            </h3>
                            <h5>لیست تمامی سامانه های در دسترس</h5>
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
                                    <h4>لیست سامانه ها</h4>
                                    <ul>
                                        <li><input type="checkbox">سامانه های آموزشی</li>
                                        <li><input type="checkbox">سامانه های پژوهشی</li>
                                        <li><input type="checkbox">سامانه های اداری و مالی</li>
                                        <li><input type="checkbox">سامانه های فناوری اطلاعات</li>
                                        <li><input type="checkbox">سامانه های مرکز آموزش های آزاد</li>
                                    </ul>
                                </nav>
                            </section>
                        </div>
                        <div class="form-group col-md-9">
                            <section>
                                <div class="container">

                                    <div class="row">
                                        @foreach($systems as $system)
                                            <div class="col-md-3">
                                                <div class="umcGalleryWrapperItem">
                                                    <div class="cornerPiece boxShadow bl"></div>
                                                    <div class="cornerPiece boxShadow tr"></div>
                                                    <div class="cornerPiece boxShadowCover bl"></div>
                                                    <div class="appIcon umcGalleryIcon umcAppCenter-icon-apps-prometheus_20181119120515"></div>
                                                    <div class="appInnerWrapper umcGalleryItem">
                                                        <div class="contentWrapper">
                                                            <div class="appContent">
                                                                <div class="umcGalleryName">
                                                                    <div class="umcGalleryNameContent">{{$system->name}}</div>
                                                                </div>
                                                            </div>
                                                            <div class="appHover">
                                                                <div>Promtheus based database backend for the UCS Dashboard</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="appStatusIcon noStatus"></div>
                                                    <div class="appStatusIcon appStatusHoverIcon noStatus"></div>
                                                </div>
                                            </div>
                                        @endforeach
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
