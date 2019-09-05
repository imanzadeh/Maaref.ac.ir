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

        @include('layouts.dashboard_menu')

        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid">

                @yield('content')

            </div>
        </main>
    </div>

</body>
</html>
