<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini">
    <div id="app">
        <div class="wrapper">

            <!-- Navbar -->
            @include('layouts.include.navbar')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('layouts.include.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                @yield('content-header')
                <!-- /.content-header -->

                <!-- Main content -->
                @yield('content')
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Main Footer -->
            @include('layouts.include.footer')
        </div>

        <!-- ./wrapper -->
    </div>
    <!-- REQUIRED SCRIPTS -->

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script')

</body>

</html>
