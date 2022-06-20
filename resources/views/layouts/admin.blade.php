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

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/bordered-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/charts/chart-apex.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/ext-component-toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-invoice-list.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <livewire:styles/>

</head>
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static " data-open="click" data-menu="vertical-menu-modern" data-col="">
<nav
    class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light border container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a>
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a>
            </li>
            <li class="nav-item nav-search">
                <a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
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
                       id="dropdown-user" href="#" data-bs-toggle="dropdown"
                       aria-haspopup="true"
                       aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name fw-bolder">{{ auth()->user()->name }}</span>
                            <span class="user-status">Admin</span>
                        </div>
                        <span class="avatar">
                            <img class="round" src="{{ empty(auth()->user()->image) ? auth()->user()->getUrlfriendlyAvatar(69) : asset('images/100/100/'.auth()->user()->image) }}" alt="avatar" height="40" width="40">
                            <span class="avatar-status-online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="{{ route('admin.profile.index') }}">
                            <i class="me-50" data-feather="user"></i> Profile</a>
                        <div class="dropdown-divider"></div>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
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
                <span class="me-75" data-feather="alert-circle"></span><span>No results found.</span>
            </div>
        </a>
    </li>
</ul>

<div class="main-menu menu-fixed menu-light menu-accordion border-end" data-scroll-to-active="true">
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
                <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                        data-feather="disc" data-ticon="disc"></i></a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('admin.dashboard') }}">
                    <i data-feather="home"></i>
                    <span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span>
                </a>
            </li>
            <li class=" nav-item {{ request()->routeIs('admin.curriculum.*') ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('admin.curriculum.index') }}">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Curriculum</span>
                </a>
            </li>
            <li class=" nav-item {{ request()->routeIs('admin.grade.*') ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('admin.grade.index') }}">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Grade</span>
                </a>
            </li>
            <li class=" nav-item {{ request()->routeIs('admin.subject.*') ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('admin.subject.index') }}">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Subject</span>
                </a>
            </li>
            <li class=" nav-item {{ request()->routeIs(['admin.student-new-register.index','admin.student-new-register.edit']) ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('admin.student-new-register.index') }}">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">New Register</span>
                </a>
            </li>
            <li class=" nav-item {{ request()->routeIs('admin.student.*') ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('admin.student.index') }}">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Student</span>
                </a>
            </li>
            <li class=" nav-item {{ request()->routeIs(['admin.teacher.index','admin.teacher.edit']) ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('admin.teacher.index') }}">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Teacher</span>
                </a>
            </li>
            <li
                class=" nav-item {{ request()->routeIs(['admin.test.*', 'admin.student-test.*']) ? 'open' : '' }}">
                <a class="d-flex align-items-center" href="#">
                    <i data-feather="shield"></i>
                    <span class="menu-title text-truncate" data-i18n="Roles &amp; Permission">Mock Test</span></a>
                <ul class="menu-content">
                    <li {{ request()->routeIs('admin.test.*') ? 'class=active' : '' }}>
                        <a class="d-flex align-items-center" href="{{ route('admin.test.index') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Roles">Create Test</span></a>
                    </li>
                    <li {{ request()->routeIs(['admin.student-test.index','admin.student-test.show']) ? 'class=active' : '' }}>
                        <a class="d-flex align-items-center" href="{{ route('admin.student-test.index') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate">Manage
                                    Test</span></a>
                    </li>
                    <li {{ request()->routeIs('admin.student-test.review') ? 'class=active' : '' }}>
                        <a class="d-flex align-items-center" href="{{ route('admin.student-test.review') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate">Test
                                    Review</span></a>
                    </li>
                </ul>
            </li>
            <li
                class=" nav-item {{ request()->routeIs(['admin.banner.*', 'admin.page.*', 'admin.testimonial.*', 'admin.story.*', 'admin.news.*', 'admin.category.*', 'admin.blog.*', 'admin.contact.*']) ? 'open' : '' }}">
                <a class="d-flex align-items-center" href="#">
                    <i data-feather="shield"></i>
                    <span class="menu-title text-truncate" data-i18n="Roles &amp; Permission">Website</span></a>
                <ul class="menu-content">
                    <li {{ request()->routeIs('admin.banner.*') ? 'class=active' : '' }}>
                        <a class="d-flex align-items-center" href="{{ route('admin.banner.index') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Roles">Slider</span></a>
                    </li>
                    <li {{ request()->routeIs('admin.page.*') ? 'class=active' : '' }}>
                        <a class="d-flex align-items-center" href="{{ route('admin.page.index') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Roles">Page</span></a>
                    </li>
                    <li {{ request()->routeIs('admin.testimonial.*') ? 'class=active' : '' }}>
                        <a class="d-flex align-items-center" href="{{ route('admin.testimonial.index') }}"><i
                                data-feather="circle"></i><span
                                class="menu-item text-truncate">What People Say</span></a>
                    </li>
                    <li {{ request()->routeIs('admin.story.*') ? 'class=active' : '' }}>
                        <a class="d-flex align-items-center" href="{{ route('admin.story.index') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate">Success  Stories</span></a>
                    </li>
                    <li {{ request()->routeIs('admin.news.*') ? 'class=active' : '' }}>
                        <a class="d-flex align-items-center" href="{{ route('admin.news.index') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate">News</span></a>
                    </li>
                    <li {{ request()->routeIs('admin.category.*') ? 'class=active' : '' }}>
                        <a class="d-flex align-items-center" href="{{ route('admin.category.index') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate">Blog Category</span></a>
                    </li>
                    <li {{ request()->routeIs('admin.blog.*') ? 'class=active' : '' }}>
                        <a class="d-flex align-items-center" href="{{ route('admin.blog.index') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate">Blog</span></a>
                    </li>
                    <li {{ request()->routeIs('admin.contact.*') ? 'class=active' : '' }}>
                        <a class="d-flex align-items-center" href="{{ route('admin.contact.index') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate">Query</span></a>
                    </li>
                </ul>
            </li>
            <li
                class=" nav-item {{ request()->routeIs(['admin.teacher.new-join', 'admin.user.*', 'admin.student-demo.*']) ? 'open' : '' }}">
                <a class="d-flex align-items-center" href="#">
                    <i data-feather="shield"></i>
                    <span class="menu-title text-truncate" data-i18n="Roles &amp; Permission">Lead</span></a>
                <ul class="menu-content">
                    <li {{ request()->routeIs('admin.teacher-new-join.*') ? 'class=active' : '' }}>
                        <a class="d-flex align-items-center" href="{{ route('admin.teacher-new-join.index') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate">New Teacher</span></a>
                    </li>
                    <li {{ request()->routeIs('admin.user.*') ? 'class=active' : '' }}>
                        <a class="d-flex align-items-center" href="{{ route('admin.user.index') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate">Staff</span></a>
                    </li>
                    <li {{ request()->routeIs('admin.student-demo.*') ? 'class=active' : '' }}>
                        <a class="d-flex align-items-center" href="{{ route('admin.student-demo.index') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate">Trial Class</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        {{ $slot }}
    </div>
</div>

<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0">
            <span class="float-md-start d-block d-md-inline-block mt-25">&copy; 2022 TheTuitionE Technology LLC All Rights Reserved | Powered By <a
                    class="ms-25"
                    href="https://idearre.com/" target="_blank">Idearre Technology</a>
            </span>
    </p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>

<script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>

<script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/moment.min.js') }}"></script>

<script src="{{ asset('app-assets/js/core/app-menu.min.js') }}"></script>
<script src="{{ asset('app-assets/js/core/app.min.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/customizer.min.js') }}"></script>

<script src="{{ asset('app-assets/js/scripts/pages/app-invoice-list.min.js') }}"></script>

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

<script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
<script>
    const editor = CKEDITOR.replace('description', {
        filebrowserUploadUrl: "{{ route( 'upload', ['_token'=> csrf_token() ] ) }}",
        filebrowserUploadMethod: 'form'
    });

    CKEDITOR.config.allowedContent = true;
    CKEDITOR.filebrowserUploadMethod = 'form';
    CKEDITOR.editorConfig = function (config) {
        config.extraPlugins = 'colorbutton,colordialog,panelbutton';
    };

    CKEDITOR.on('dialogDefinition', function (ev) {
        var dialogName = ev.data.name;
        var dialogDefinition = ev.data.definition;

        if (dialogName == 'image') {
            var infoTab2 = dialogDefinition.getContents('advanced');
            dialogDefinition.removeContents('advanced');
            var infoTab = dialogDefinition.getContents('info');
            infoTab.remove('txtBorder');
            infoTab.remove('cmbAlign');
            infoTab.remove('txtWidth');
            infoTab.remove('txtHeight');
            infoTab.remove('txtCellSpace');
            infoTab.remove('txtCellPad');
            infoTab.remove('txtCaption');
            infoTab.remove('txtSummary');
        }
    });

</script>
</body>
<!-- END: Body-->

</html>
