<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('assets/media/image/favicon.png') }}" />

    <!-- Main css -->
    <link rel="stylesheet" href="{{ url('vendors/bundle.css') }}" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    @yield('head')

    <!-- App css -->
    <link rel="stylesheet" href="{{ url('assets/css/app.min.css') }}" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-icon"></div>
        <span>Loading...</span>
    </div>
    <!-- ./ Preloader -->


    <!-- Layout wrapper -->
    <div class="layout-wrapper">

        <!-- Header -->
        <div class="header d-print-none">
            <div class="header-container">
                <div class="header-left">
                    <div class="navigation-toggler">
                        <a href="#" data-action="navigation-toggler">
                            <i data-feather="menu"></i>
                        </a>
                    </div>

                    <div class="header-logo">
                        <h1 class="text-light">KASIR</h1>
                    </div>
                </div>

                <div class="header-body">
                    <div class="header-body-left">
                        <ul class="navbar-nav">
                            <!-- navbar items -->
                        </ul>
                    </div>

                    <div class="header-body-right">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link mobile-header-search-btn" title="Search">
                                    <i data-feather="search"></i>
                                </a>
                            </li>

                            <li class="nav-item dropdown d-none d-md-block">
                                <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                                    <i class="maximize" data-feather="maximize"></i>
                                    <i class="minimize" data-feather="minimize"></i>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" title="User menu" data-toggle="dropdown">
                                    <figure class="avatar avatar-sm">
                                        <img src="{{ url('assets/media/image/user/men.svg') }}" class="rounded-circle" alt="avatar">
                                    </figure>
                                    <span class="ml-2 d-sm-inline d-none">Bony Gidden</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                    <div class="text-center py-4">
                                        <figure class="avatar avatar-lg mb-3 border-0">
                                            <img src="{{ url('assets/media/image/user/men.svg') }}" class="rounded-circle" alt="image">
                                        </figure>
                                        <h5 class="text-center">Bony Gidden</h5>
                                        <div class="mb-3 small text-center text-muted">@bonygidden</div>
                                    </div>
                                    <div class="list-group">
                                        <a href="{{ route('recovery-password') }}" class="list-group-item text-danger">Change Password</a>
                                    </div>
                                    <div class="list-group">
                                        <a href="#" class="list-group-item text-danger">Sign Out!</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item header-toggler">
                        <a href="#" class="nav-link">
                            <i data-feather="arrow-down"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ./ Header -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- begin::navigation -->
            <div class="navigation">
                <div class="navigation-header">
                    <span>Navigation</span>
                    <a href="#">
                        <i class="ti-close"></i>
                    </a>
                </div>
                <div class="navigation-menu-body">
                    <ul>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="pie-chart"></i>
                                </span>
                                <span>List Barang</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end::navigation -->

            <!-- Content body -->
            <div class="content-body">
                <!-- Content -->
                <div class="content @yield('parentClassName')">
                    @yield('content')
                </div>
                <!-- ./ Content -->

                <!-- Footer -->
                <footer class="content-footer">
                    <div>© {{ date('Y') }} Admin by ChofeeTeam</div>
                </footer>
                <!-- ./ Footer -->
            </div>
            <!-- ./ Content body -->
        </div>
        <!-- ./ Content wrapper -->
    </div>
    <!-- ./ Layout wrapper -->

    <!-- Main scripts -->
    <script src="{{ url('vendors/bundle.js') }}"></script>

    @yield('script')

    <!-- App scripts -->
    <script src="{{ url('assets/js/app.min.js') }}"></script>
</body>

</html>