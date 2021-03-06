<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('assets/media/image/favicon.png') }}" />

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{ url('vendors/bundle.css') }}" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="{{ url('assets/css/app.min.css') }}" type="text/css">
</head>

<body class="form-membership">

    <!-- begin::preloader-->
    <div class="preloader">
        <div class="preloader-icon"></div>
    </div>
    <!-- end::preloader -->

    <div class="form-wrapper">
        <div class="col-lg-1">
            <a href="{{url('/dataPegawai')}}"><i class="fa fa-chevron-left"></i></a>
        </div>
        <!-- logo -->
        <div id="logo">
            <img src="{{ url('assets/media/image/dark-logo.png') }}" alt="image">
        </div>
        <!-- ./ logo -->

        @yield('content')

    </div>

    <!-- Plugin scripts -->
    <script src="{{ url('vendors/bundle.js') }}"></script>

    <!-- App scripts -->
    <script src="{{ url('assets/js/app.min.js') }}"></script>
</body>

</html>