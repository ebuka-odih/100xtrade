<!doctype html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Premium HTML5 Template by Indonez">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, javascript">
    <meta name="author" content="Indonez">
    <meta name="theme-color" content="#FC5B3F">
    <!-- preload assets -->
    <link rel="preload" href="{{ asset('fonts/fa-brands-400.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('fonts/fa-solid-900.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('fonts/inter-v12-latin-regular.woff2') }}" as="font" type="font/woff2"
          crossorigin>
    <link rel="preload" href="{{ asset('fonts/inter-v12-latin-500.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('fonts/inter-v12-latin-700.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('css/style.css') }}" as="style">
    <link rel="preload" href="{{ asset('js/vendors/uikit.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('js/utilities.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('js/config-theme.js') }}" as="script">
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- uikit -->
    <script src="{{ asset('js/vendors/uikit.min.js') }}"></script>
    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- touch icon -->
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon.png">
    <title>{{ env('APP_NAME') }}</title>
    <script src="//code.jivosite.com/widget/lBR9ssOUXB" async></script>

    <style>
        /* Default: hide on large screens */
        .mobile-register-btn {
            display: none;
        }

        /* Show on mobile (screen width 768px and below) */
        @media (max-width: 768px) {
            .mobile-register-btn {
                display: block;
            }
        }
    </style>
</head>

<body>
<!-- page loader begin -->
<div class="page-loader">
    <div></div>
    <div></div>
    <div></div>
</div>
<!-- page loader end -->
<!-- header begin -->
<header style="display: none">
    <div class="uk-section uk-padding-remove-vertical">
        <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
            <div class="uk-container" data-uk-navbar>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo" href="{{ route('index') }}">
                        <img src="{{ asset('img/logo.png') }}" alt="logo" width="200" height="80">
                    </a>
                    <ul class="uk-navbar-nav uk-visible@m">

                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About STP</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <a
                            style="padding: 10px; font-size: 17px; text-align: center; width: 100%; height: 50px"
                            class="uk-button uk-button-primary uk-border-rounded mobile-register-btn"
                            href="{{ route('register') }}"
                        >
                            Register
                        </a>
                    </ul>
                </div>
                <div class="uk-navbar-right">
                    <div class="uk-navbar-item uk-visible@m in-optional-nav">
                        <a href="{{ route('register') }}" class="uk-button uk-button-primary uk-border-rounded">Create
                            account</a>
                        <a href="{{ route('login') }}" class="uk-button uk-button-link">Sign in<i
                                class="fas fa-user-circle"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- header end -->
@yield('content')
<!-- footer begin -->
<footer style="display: none">
    <div class="uk-section uk-section-secondary in-footer-feature uk-margin-medium-top">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-5-6@m">
                    <div class="uk-grid uk-grid-collapse uk-child-width-1-3@s" data-uk-grid="">
                        <div class="uk-flex uk-flex-middle">
                            <div class="in-icon-wrap uk-margin-right">
                                <i class="fas fa-history"></i>
                            </div>
                            <div>
                                <h6 class="uk-margin-remove">12 years of Excellence</h6>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-middle uk-flex-center@m">
                            <div class="in-icon-wrap uk-margin-right">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <div>
                                <h6 class="uk-margin-remove">15+ Global Awards</h6>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-middle uk-flex-right@m">
                            <div class="in-icon-wrap uk-margin-right">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h6 class="uk-margin-remove">24/7 Customer Support</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section uk-background-secondary uk-light">
        <div class="uk-container uk-text-small">
            <div class="uk-child-width-1-2@m" data-uk-grid="">
                <div class="in-footer-logo">
                    <img src="{{ asset('img/logo.png') }}" alt="logo" width="200" height="80">
                    {{--						<img src="img/in-lazy.gif" data-src="img/in-logo.svg" alt="logo" width="127" height="27" data-uk-img="">--}}
                </div>
            </div>
            <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-large-top" data-uk-grid="">
                <div>
                    <h5>Markets</h5>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{ route('user.dashboard') }}">Stocks</a></li>
                        <li><a href="{{ route('user.dashboard') }}">Forex</a></li>
                    </ul>
                </div>
                <div>
                    <h5>Company</h5>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{ route('disclosure') }}">FCM Disclosure</a></li>
                        <li><a href="{{ route('terms') }}">Terms & Condition </a></li>
                    </ul>
                </div>
                <div>
                    <h5>Account Types</h5>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{ route('user.dashboard') }}">Demo account</a></li>
                        <li><a href="{{ route('user.dashboard') }}">Standard account</a></li>
                    </ul>
                </div>
                <div>
                    <h5>Learn to Trade</h5>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{ route('user.dashboard') }}">News and trade ideas</a></li>
                        <li><a href="{{ route('user.dashboard') }}">Trading strategy</a></li>
                    </ul>
                </div>
            </div>
            <div class="uk-grid uk-margin-large-top">
                <div class="uk-width-1-1">
                    <p class="copyright-text uk-heading-line"><span>Copyright ©{{ Date('Y') }} {{ env('APP_NAME') }} Inc. All Rights Reserved.</span>
                    </p>

                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->
<!-- to top begin -->
<a href="#" class="to-top uk-visible@m" data-uk-scroll>
    Top<i class="fas fa-chevron-up"></i>
</a>
<!-- to top end -->
<!-- javascript -->
<script src="{{ asset('js/utilities.min.js') }}"></script>
<script src="{{ asset('js/config-theme.js') }}"></script>
</body>


<!-- Mirrored from www.indonez.com/html-demo/liquid/homepage4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Feb 2025 22:31:41 GMT -->
</html>
