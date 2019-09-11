@inject('request', 'Illuminate\Http\Request')

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/DateTimePicker.css') }}" rel="stylesheet">
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jalali_calendar.js') }}" defer></script>
    <script src="{{ asset('js/DateTimePicker.js') }}" defer></script>

</head>
<body>

<div class="page-wrapper chiller-theme toggled">


<!-- sidebar-wrapper  -->
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

                            @if($request->segment(2) == 'members' || $request->segment(2) == 'maaref_lessons' || $request->segment(2) == 'professor_term_lessons')
                                <h5>سامانه اعضاء - علم سنجی اساتید هیأت علمی</h5>
                            @elseif($request->segment(2) == 'alumni')
                                <h5>سامانه اعضاء - انجمن دانش آموختگان</h5>
                            @elseif($request->segment(2) == 'resumes')
                                <h5>سامانه اعضاء - علم سنجی اساتید هیأت علمی</h5>
                            @elseif($request->segment(2) == 'payments')
                                <h5>سامانه یکپارچه پرداخت وجه</h5>
                            @elseif($request->segment(2) == 'reservations')
                                <h5>اتوماسیون تغذیه</h5>
                            @elseif($request->segment(2) == 'tickets')
                                <h5>سامانه تکتینگ</h5>
                            @endif
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
                            <nav class="dashboard_menu systems_list text-center profile-info">
                                <img src="/images/UsersPic/{{$user->pic}}" width="120" height="120">
                                <div class="person-name">{{$user->FirstName . " ". $user->LastName}}</div>
                                <div class="person-details">
                                    <i class="fas fa-user"></i>
                                    سمت: {{$user->getRoleNames()[0]}}
                                </div>
                            </nav>
                            <nav class="dashboard_menu">
                                <h4>لیست مدیریت ها</h4>
                                <ul>

                                    @include('layouts.DashboardLayoutMenu')

                                </ul>
                            </nav>

                            <div class="logout_div">
                                <a href="{{ route('dashboard') }}">
                                    {{--<i class="fa fa-power-off"></i>--}}
                                    <span>بازگشت به صفحه مدیریت سامانه ها</span>
                                </a>
                            </div>

                            <div class="logout_div">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span>خروج از سامانه</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>

                        </section>
                    </div>
                    <div class="col-md-9">
                        <div class="container">
                            <section>

                                @yield('content')

                            </section>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </main>
</div>

</body>
</html>
