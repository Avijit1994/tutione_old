<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="author" content="TheTuitionE"/>
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}

    <meta property="og:locale" content="en_US"/>

    {!! Twitter::generate() !!}
    <meta property="og:image:width" content="2560"/>
    <meta property="og:image:height" content="1600"/>

    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('pub-assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('pub-assets/css/intlTelInput.css') }}"/>
    <link rel="stylesheet" href="{{ asset('pub-assets/css/swiper.css') }}"/>
    <link rel="stylesheet" href="{{ asset('pub-assets/css/grt-youtube-popup.css') }}"/>
    <link rel="stylesheet" href="{{ asset('pub-assets/css/select2.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('pub-assets/css/cropper.css') }}"/>
    <link rel="stylesheet" href="{{ asset('pub-assets/css/sweetalert2.css') }}"/>
    <link rel="stylesheet" href="{{ asset('pub-assets/css/style.css') }}"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-222161990-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-222161990-1');
    </script>

    <!-- Meta Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '380701040485483');
        fbq('track', 'PageView');
    </script>

    <noscript>
        <img height="1" width="1" style="display:none"
             src="https://www.facebook.com/tr?id=380701040485483&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Meta Pixel Code -->
    <livewire:styles/>
    @laravelTelInputStyles

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
</head>

<body>
<header class="slide-nav transparent-bg {{ request()->routeIs(['welcome']) ? '' : 'homepages' }}">
    <div class="container tutione-bg">
        <div class="tutione-header">
            <a href="{{ route('welcome') }}" class="logo-img">
                @if(request()->routeIs(['welcome']))
                    <img class="img-logo" src="{{ asset('pub-assets/images/logo-light.png') }}"
                         data-light-logo="{{ asset('pub-assets/images/logo-light.png') }}"
                         data-dark-logo="{{ asset('pub-assets/images/logo-dark.png') }}" alt="logo"/>
                @else
                    <img class="img-logo" src="{{ asset('pub-assets/images/logo-dark.png') }}" alt="logo"/>
                @endif
            </a>
            <div class="responsive-menu">
                <nav class="main-nav">
                    <ul class="web-menu fl-right">
                        <li>
                            <a href="{{ route('page', 'apply-now') }}">CBSE Mock Test</a>
                        </li>
                        <li>
                            <a href="{{ route('page', 'find-teacher') }}">Find a Teacher</a>
                        </li>
                        <li>
                            <a href="{{ route('page', 'success-stories') }}">Success Stories</a>
                        </li>
                        <li>
                            <a href="{{ route('page', 'news') }}">News</a>
                        </li>
                        <li>
                            <a href="{{ route('page', 'join-us') }}">Join Us</a>
                        </li>
                        <li>
                            <a href="{{ route('page', 'book-demo') }}">Trial Class</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="mobile-menu"><i class="fas fa-bars"></i></div>
            @auth
                @if(Auth::guard('web')->check())
                    <a href="{{ route('admin.dashboard') }}" class="btn login-btn">{{ auth()->user()->name }}</a>
                @elseif(Auth::guard('student')->check())
                    <a href="{{ route('student.dashboard') }}" class="btn login-btn">{{ auth()->user()->name }}</a>
                @endif
            @else
                <a href="{{ route('login') }}" class="btn login-btn">Login</a>
            @endauth
        </div>
    </div>
</header>

{{ $slot }}

<footer class="section-footer">
    <section class="container footer-dark">
        <div class="row">
            <div class="col-md-3">
                <ul>
                    <li><b>Curriculum</b></li>
                    @foreach($curriculums as $curriculum)
                        <li><a href="{{ route('curriculum.detail',$curriculum->slug) }}">{{ $curriculum->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li><b>Subject</b></li>
                    <li><a href="https://thetuitione.com/cbse/x/physics">Physics</a></li>
                    <li><a href="https://thetuitione.com/cbse/x/chemistry">Chemistry</a></li>
                    <li><a href="https://thetuitione.com/cbse/x/mathematics">Math</a></li>
                    <li><a href="https://thetuitione.com/cbse/x/science">Science</a></li>
                    <li><a href="https://thetuitione.com/cbse/x/hindi">Hindi</a></li>
                    <li><a href="https://thetuitione.com/cbse/x/biology">Biology</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li><b>Company</b></li>
                    <li><a href="{{ route('page', 'about') }}">About</a></li>
                    <li><a href="{{ route('page', 'contact') }}">Contact Us</a></li>
                    <li>Careers</li>

                    <li><a href="{{ route('page', 'news') }}">Media</a></li>
                    <li><a href="{{ route('blogs') }}">Blogs</a></li>
                    <li class="social-media-links">
                        <a target="_blank" href="https://www.facebook.com/tutioneonline"><i
                                class="fab fa-facebook-square"></i></a>
                        <a target="_blank" href="https://www.linkedin.com/company/tutione/" href="#"><i
                                class="fab fa-linkedin"></i></a>
                        <a target="_blank" href="https://twitter.com/TutioneC" href="#"><i
                                class="fab fa-twitter-square"></i></a>
                        <a target="_blank" href="https://www.instagram.com/tutione_uae/" href="#"><i
                                class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li><b>More Subject</b></li>
                    <li><a href="https://thetuitione.com/cbse/x/arabic">Arabic</a></li>
                    <li><a href="https://thetuitione.com/cbse/x/french">French</a></li>
                    <li><a href="https://thetuitione.com/cbse/x/geography">Geography</a></li>
                    <li><a href="https://thetuitione.com/icse/xii/history">History</a></li>
                    <li><a href="https://thetuitione.com/icse/xii/economics">Economics</a></li>
                </ul>
            </div>
        </div>
        <hr/>
        <div class="row footer-copyright" style="font-size: 12px;">
            <div class="col-xl-6">© 2022 TheTuitionE Technology LLC, All Rights Reserved | Powered By <a
                    target="_blank" href="https://idearre.com/">Idearre Technology</a></div>
            <div class="col-xl-6 copyright-link">
                <img height="25" src="{{ asset('pub-assets/images/visa-master-icon.png') }}" alt=""/>
                <a class="footer-link" href="{{ route('page', 'privacy-policy') }}">Privacy Policy</a> | <a
                    class="footer-link" href="{{ route('page', 'terms-conditions') }}">Terms & Condition</a> |
                <a class="footer-link" href="{{ route('page', 'refund-policy') }}">Refund Policy</a>
            </div>
        </div>
    </section>
</footer>

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>--}}
<script type="text/javascript" src="{{ asset('pub-assets/js/jquery-3.6.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('pub-assets/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('pub-assets/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('pub-assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('pub-assets/js/swiper.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('pub-assets/js/jquery.validate.js') }}"></script>
<script type="text/javascript" src="{{ asset('pub-assets/js/sweetalert2.js') }}"></script>

<script type="text/javascript" src="{{ asset('pub-assets/js/jquery-repeater.js') }}"></script>
<script type="text/javascript" src="{{ asset('pub-assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('pub-assets/js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('pub-assets/js/select2.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('pub-assets/js/intlTelInput.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('pub-assets/js/jquery.countdown.js') }}"></script>
<script type="text/javascript" src="{{ asset('pub-assets/js/tutione.js') }}"></script>
<script defer src="https://unpkg.com/alpinejs@3.9.0/dist/cdn.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>
@laravelTelInputScripts
<livewire:scripts/>
@stack('script')

<script>
    $(document).scroll(function () {
        var y = $(this).scrollTop();
        if (y > 300) {
            $(".img-logo").attr("src", $(".img-logo").data("dark-logo"));
            $(".slide-nav").css("position", "fixed");

            $(".slide-nav").removeClass("transparent-bg").addClass("white-bg");
            $(".slide-nav").removeClass("scrolled-down").addClass("scrolled-up");

            // $(".slide-nav").addClass("scrolled-up");
        } else {
            $(".img-logo").attr("src", $(".img-logo").data("light-logo"));
            $(".slide-nav").removeClass("white-bg").addClass("transparent-bg").addClass("scrolled-down");
            $(".slide-nav").css("position", "absolute");

            if (y < 250) {
                $(".slide-nav").removeClass("scrolled-down").addClass("scrolled-up");
            }
        }
    });
</script>
<script>
    const url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?50806';
    const s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    const options = {
        "enabled": true,
        "chatButtonSetting": {
            "backgroundColor": "#4dc247",
            "ctaText": "",
            "borderRadius": "25",
            "marginLeft": "0",
            "marginBottom": "50",
            "marginRight": "50",
            "position": "right"
        },
        "brandSetting": {
            "brandName": "Tuitione",
            "brandSubTitle": "Mentoring the creators of tomorrow",
            "brandImg": "https://thetuitione.com/assets/images/favicon.png",
            "welcomeText": "Hi there!\nHow can I help you?",
            "messageText": "Hello, I have a question about",
            "backgroundColor": "#013c10",
            "ctaText": "Start Chat",
            "borderRadius": "25",
            "autoShow": false,
            "phoneNumber": "9710561530275"
        }
    };
    s.onload = function () {
        CreateWhatsappChatWidget(options);
    };
    const x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>
</body>

</html>
