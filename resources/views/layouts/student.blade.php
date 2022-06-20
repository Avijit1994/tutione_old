<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="description"
          content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard - TheTuitionE</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
          rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.min.css') }}">
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}"> --}}
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}"> --}}
<!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/bordered-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.min.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/charts/chart-apex.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('app-assets/css/plugins/extensions/ext-component-toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-invoice-list.min.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- END: Custom CSS-->
    <livewire:styles/>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
      data-menu="vertical-menu-modern" data-col="">

<!-- BEGIN: Header-->
<nav
    class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a>
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link nav-link-style">
                    <i class="ficon"
                       data-feather="moon"></i>
                </a>
            </li>
            <li class="nav-item nav-search">
                <a class="nav-link nav-link-search"><i class="ficon"
                                                       data-feather="search"></i></a>
                <div class="search-input">
                    <div class="search-input-icon"><i data-feather="search"></i></div>
                    <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                           data-search="search">
                    <div class="search-input-close"><i data-feather="x"></i></div>
                    <ul class="search-list search-list-main"></ul>
                </div>
            </li>

            @auth
                <li class="nav-item dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle dropdown-user-link"
                       id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name fw-bolder">{{ auth()->user()->name }}</span><span
                                class="user-status">Student</span></div>
                        <span class="avatar"><img
                                class="round"
                                src="{{ empty(auth()->user()->image) ? auth()->user()->getUrlfriendlyAvatar(69) : asset('images/100/100/'.auth()->user()->image) }}" alt="avatar"
                                height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="{{ route('student.profile') }}">
                            <i class="me-50" data-feather="user"></i> Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('student.test.index') }}">
                            <i class="me-50" data-feather="settings"></i> Exam</a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                   this.closest('form').submit();">
                                <i class="me-50" data-feather="power"></i> Logout</a>
                        </form>
                    </div>
                </li>
            @endauth
        </ul>
    </div>
</nav>

<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion justify-content-between"><a
            class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start">
                <span class="me-75"
                      data-feather="alert-circle"></span>
                <span>No results found.</span>
            </div>
        </a></li>
</ul>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto">
                <a class="navbar-brand" href="{{ route('welcome') }}">
                        <span class="brand-logo">
                            <img class="img-logo" src="{{ asset('pub-assets/images/logo-dark.png') }}" alt="">
                        </span>
                </a>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pe-0"
                   data-bs-toggle="collapse">
                    <i class="d-block d-xl-none text-primary toggle-icon font-medium-4"
                       data-feather="x"></i>
                    <i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                        data-feather="disc" data-ticon="disc"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item {{ request()->routeIs('student.dashboard') ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('student.dashboard') }}">
                    <i data-feather="home"></i>
                    <span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('student.test.*') ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('student.test.index') }}">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Exam</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center" href="">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Class</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center" href="">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Event</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center" href="">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Attendance</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center" href="">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Resource</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center" href="">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Notice</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center" href="">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Upgrade Plan/Add Subject</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center" href="">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Result</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center" href="">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Ticket</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center" href="">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Chat</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center" href="">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Parent</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center" href="">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Billing</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        {{ $slot }}
    </div>
</div>
<!-- END: Content-->

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0">

            <span class="float-md-start d-block d-md-inline-block mt-25">&copy; 2022 TheTuitionE Technology LLC All Rights Reserved | Powered By <a
                    class="ms-25"
                    href="https://idearre.com/" target="_blank">Idearre Technology</a>
            </span>
    </p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
{{-- <script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script> --}}
<script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/moment.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('app-assets/js/core/app-menu.min.js') }}"></script>
<script src="{{ asset('app-assets/js/core/app.min.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/customizer.min.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
{{-- <script src="{{ asset('app-assets/js/scripts/pages/dashboard-analytics.min.js') }}"></script> --}}
<script src="{{ asset('app-assets/js/scripts/pages/app-invoice-list.min.js') }}"></script>
<!-- END: Page JS-->
<livewire:scripts/>

<script>
    $(window).on('load', function () {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
</body>
<!-- END: Body-->

</html>
