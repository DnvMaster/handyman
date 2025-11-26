<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('Handyman | Ваш домашний мастер') }}</title>
    <link rel="icon" href="{{ asset('handyman/frontend/images/logo/favicon.png') }}" type="image/png">
    <link href="{{ asset('handyman/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('handyman/frontend/css/swiper-bundle.css') }}" rel="stylesheet">
    <link href="{{ asset('handyman/frontend/css/odometer-theme-default.css') }}" rel="stylesheet">
    <link href="{{ asset('handyman/frontend/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('handyman/frontend/css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('handyman/frontend/css/main.css') }}" rel="stylesheet">
</head>
<body class="home-one-bg overflow-x-hidden">
    <div class="loading-screen" id="loading-screen">
        <span class="bar top-bar"></span>
        <span class="bar down-bar"></span>
        <div class="animation-preloader">
            <div class="spinner"><img src="{{ asset('handyman/frontend/images/loader.gif') }}" alt="{{ __('Загрузка сайта ...' )}}"></div>
            <div class="txt-loading">
                <span data-text-preloader=" {{ __('H') }}" class="letters-loading">{{ __('H') }}</span>
                <span data-text-preloader=" {{ __('A') }}" class="letters-loading">{{ __('A') }}</span>
                <span data-text-preloader=" {{ __('N') }}" class="letters-loading">{{ __('N') }}</span>
                <span data-text-preloader=" {{ __('D') }}" class="letters-loading">{{ __('D') }}</span>
                <span data-text-preloader=" {{ __('Y') }}" class="letters-loading">{{ __('Y') }}</span>
                <span data-text-preloader=" {{ __('M') }}" class="letters-loading">{{ __('M') }}</span>
                <span data-text-preloader=" {{ __('A') }}" class="letters-loading">{{ __('A') }}</span>
                <span data-text-preloader=" {{ __('N') }}" class="letters-loading">{{ __('N') }}</span>
            </div>
        </div>
    </div>
    @include('handyman.frontend.home.body.search')
    @include('handyman.frontend.home.body.mouse_cursor')
    <div class="overlay"></div>
    <div class="side-overlay"></div>
    <div id="toast-container"></div>
    @include('handyman.frontend.home.body.scroll_top')
    <div class="cursor"></div>
    <span class="dot"></span>
    @include('handyman.frontend.home.body.offcanvas')
    @include('handyman.frontend.home.body.mobile_menu')
    @include('handyman.frontend.home.body.header')
    <div id="scrollSmoother-container">
        @yield('handyman')
        @include('handyman.frontend.home.body.footer')
    </div>
    <script src="{{ asset('handyman/frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('handyman/frontend/js/phosphor-icon.js') }}"></script>
    <script src="{{ asset('handyman/frontend/js/boostrap.bundle.min.js') }}"></script>
    <script src="{{ asset('handyman/frontend/js/waypoints.js') }}"></script>
    <script src="{{ asset('handyman/frontend/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('handyman/frontend/js/odometer.min.js') }}"></script>
    <script src="{{ asset('handyman/frontend/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('handyman/frontend/js/aos.js') }}"></script>
    <script src="{{ asset('handyman/frontend/js/before-after.js') }}"></script>
    <script src="{{ asset('handyman/frontend/js/nice-select.js') }}"></script>
    <script src="{{ asset('handyman/frontend/js/range-slider.js') }}"></script>
    <script src="{{ asset('handyman/frontend/js/gsap.min.js') }}"></script>
    <script src="{{ asset('handyman/frontend/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('handyman/frontend/js/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('handyman/frontend/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('handyman/frontend/js/custom-gsap.js') }}"></script>
    <script src="{{ asset('handyman/frontend/js/slider-active.js') }}"></script>
    <script src="{{ asset('handyman/frontend/js/main.js') }}"></script>
    <script src="{{ asset('handyman/frontend/js/tw-cursor.js') }}"></script>
</body>
</html>