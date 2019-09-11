@inject('request', 'Illuminate\Http\Request')
@extends('layouts.dashboard')

@section('content')

    <div class="page-wrapper chiller-theme toggled">

        <main class="page-content">
            <div class="container-fluid management-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <img src="/images/MainLogo.png" width="120">
                        </div>
                        <div class="col-md-9" style="display: flex;align-items: center;">
                            <div style="margin-right: 15px">
                                <h3 style="font-size: 20px;font-weight: 700;margin-bottom: 15px;">مرکز مدیریت سامانه های دانشگاه معارف اسلامی</h3>
                                <h5>سامانه علم سنجی اساتید هیأت علمی</h5>
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
                                    <h4>لیست مدیریت ها</h4>
                                    <ul>

                                        @include('layouts.DashboardLayoutMenu')

                                    </ul>
                                </nav>

                                <div class="logout_div">
                                    <a href="{{ route('logout') }}">
                                        {{--<i class="fa fa-power-off"></i>--}}
                                        <span>بازگشت به صفحه مدیریت سامانه ها</span>
                                    </a>
                                </div>

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
