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
                <span data-text-preloader="H" class="letters-loading">
                    H
                </span>
                <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
                <span data-text-preloader="N" class="letters-loading">
                    H
                </span>
                <span data-text-preloader="D" class="letters-loading">
                    D
                </span>
                <span data-text-preloader="Y" class="letters-loading">
                    Y
                </span>
                <span data-text-preloader="M" class="letters-loading">
                    M
                </span>
                <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
                <span data-text-preloader="N" class="letters-loading">
                    N
                </span>
            </div>
        </div>
    </div>
    <!--==================== Search Popup Start ====================-->
    <div class="search_popup">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="search_wrapper">
                        <div class="search_top d-flex justify-content-between align-items-center">
                            <div class="search_logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('handyman/frontend/images/logo/logo.png') }}" alt="{{ __('HandyMan') }}">
                                </a>
                            </div>
                            <div class="search_close">
                                <button type="button" class="search_close_btn">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="search_form">
                            <form action="#">
                                @csrf
                                <div class="search_input">
                                    <input class="search-input-field" type="text" placeholder="{{ __('Поиск мастера или ...') }}">
                                    <span class="search-focus-border"></span>
                                    <button type="submit">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-popup-overlay"></div>
    <!--==================== Search Popup End ====================-->


    <!--==================== mouse cursor drag start ====================-->
    <div class="mouseCursor cursor-outer d-none"></div>
    <div class="mouseCursor cursor-inner">
        <span class="inner-text-1 tw-text-lg fw-bold text-white">
            <span>
                <svg width="48" height="47" viewBox="0 0 48 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M33.6454 16.1088L15.7477 32.4423L14.3477 30.9082L32.2453 14.5746L33.6454 16.1088Z" fill="white">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M31.4786 15.2755C27.8709 18.5679 27.8182 24.431 30.9057 27.8141L31.6057 28.5811L33.1398 27.1811L32.4398 26.414C30.0957 23.8454 30.1506 19.2992 32.8787 16.8096L33.6453 16.1099L32.2453 14.5758L31.4786 15.2755Z" fill="white">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32.8783 16.8088C29.2706 20.1012 23.4271 19.6189 20.3397 16.2358L19.6396 15.4688L21.1738 14.0687L21.8738 14.8358C24.218 17.4045 28.7502 17.7643 31.4783 15.2747L32.2449 14.575L33.645 16.1091L32.8783 16.8088Z" fill="white">
                </svg>
            </span>
            <br>{{ __('О компании') }}
        </span>
            <span class="inner-text-2">
                <span>
                <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.132374 56.2074L6.68723 62.776C6.98521 63.0747 8.773 63.0747 9.07084 62.776L47.2086 25.4537C47.8044 24.8564 48.4004 24.5578 49.2942 24.5578C49.5922 24.5578 50.1881 24.5578 50.486 24.8564C51.6778 25.155 52.2736 26.3494 52.2736 27.5437V46.3542V46.6529H61.8082C62.404 46.6529 62.7022 46.6529 63 46.6529V0.970426C63 0.970426 63 0.970427 62.4042 0.373196C61.8083 -0.224035 62.1063 0.0747274 61.5102 0.0747274H16.8176C16.8176 0.373196 16.8176 0.671811 16.8176 1.56766V10.8234C16.8176 11.4205 16.8176 12.0177 16.8176 12.0177H35.8865C37.0783 12.0177 38.2701 12.6148 38.5679 13.8091C39.1638 15.0034 38.8659 16.1978 37.9721 17.0936L0.728355 54.1174C0.430367 54.416 0.132374 54.7146 0.132374 55.3117C-0.16547 55.9088 0.132374 55.9088 0.132374 56.2074Z" fill="currentColor">
                </svg>
            </span>
        </span>
    </div>
    <!--==================== mouse cursor drag end ====================-->



    <!--==================== Overlay Start ====================-->
    <div class="overlay"></div>
    <!--==================== Overlay End ====================-->


    <!--==================== Sidebar Overlay End ====================-->
    <div class="side-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->


    <!--==================== Custom Toast Message start ====================-->
    <!-- Custom Toast Message start -->
    <div id="toast-container"></div>
    <!--==================== Custom Toast Message End ====================-->


    <!-- ==================== Scroll to Top End Here ==================== -->
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            </svg>
        </button>
    </div>
    <!-- ==================== Scroll to Top End Here ==================== -->


    <!-- ==================== Custom Cursor Start Here ==================== -->
    <div class="cursor"></div>
    <span class="dot"></span>
    <!-- ==================== Custom Cursor End Here ==================== -->




    <!--==================== offcanvus Start ====================-->
    <div class="twoffcanvas-area">
        <div class="twoffcanvas bg-img bg-black position-fixed top-0 bottom-0 tw-p-13">
            <div class="twoffcanvas__close-btn">
                <button class="close-btn"><i class="ph-bold ph-x"></i></button>
            </div>
            <div class="twoffcanvas__logo tw-mb-15">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('handyman/frontend/images/logo/logo.png') }}" alt="{{ __('HandyMan') }}">
                </a>
            </div>
            <div class="twoffcanvas__title tw-mb-12">
                <p>Ваш домашний мастер всегда рядом: ремонт, установка, помощь по дому быстро и без хлопот.</p>
            </div>
            <div class="twoffcanvas__contact-info tw-mb-13">
                <div class="twoffcanvas__contact-title tw-mb-8">
                    <h4 class="font-body fw-semibold text-capitalize tw-text-3xl tw-mb-6 d-inline-block">{{ __('Связаться') }}</h4>
                </div>
                <ul>
                    <li class="d-flex align-items-center tw-mb-4">
                        <i class="text-main-600 text-white ph ph-map-pin"></i>
                        <a class="text-white hover-text-main-600 tw-ms-3" href="https://www.google.com/maps/@23.8223586,90.3661283,15z" target="_blank">{{ __('Минск | Беларусь')}}</a>
                    </li>
                    <li class="d-flex align-items-center tw-mb-4">
                        <i class="text-main-600 text-white ph ph-envelope"></i>
                        <a class="text-white hover-text-main-600 tw-ms-3" href="mailto:techubinfo@mail.com"><span class="__cf_email__">{{ __('handyman@handyman.loc') }}</span></a>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="text-main-600 text-white ph ph-phone-outgoing"></i>
                        <a class="text-white hover-text-main-600 tw-ms-3" href="tel:+375295550000">{{ __('(+375) 29 555 0000') }}</a>
                    </li>
                </ul>
            </div>
            <div class="twoffcanvas__input">
                <div class="twoffcanvas__input-title">
                    <h4 class="font-body fw-semibold text-capitalize tw-text-3xl text-white tw-mb-6">{{ __('Получите обновление') }}</h4>
                </div>
                <form action="#">
                    <div class="position-relative">
                        <input class="placeholder-text-white" type="text" placeholder="{{ __('Введите эл.почту')}}">
                        <button>
                            <i class="ph ph-paper-plane-tilt"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="twoffcanvas__social">
                <ul class="footer-social d-flex align-items-center tw-gap-4">
                    <li>
                        <a href="https://www.facebook.com" class="tw-w-10 tw-h-10 lh-1 d-inline-flex align-items-center justify-content-center text-white rounded-circle hover-bg-main-600 hover-text-heading"><i class="ph-bold ph-facebook-logo"></i></a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com" class="tw-w-10 tw-h-10 lh-1 d-inline-flex align-items-center justify-content-center text-white rounded-circle hover-bg-main-600 hover-text-heading"><i class="ph-bold ph-twitter-logo"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com" class="tw-w-10 tw-h-10 lh-1 d-inline-flex align-items-center justify-content-center text-white rounded-circle hover-bg-main-600 hover-text-heading"><i class="ph-bold ph-instagram-logo"></i></a>
                    </li>
                    <li>
                        <a href="https://www.pinterest.com" class="tw-w-10 tw-h-10 lh-1 d-inline-flex align-items-center justify-content-center text-white rounded-circle hover-bg-main-600 hover-text-heading"><i class="ph-bold ph-pinterest-logo"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!--==================== offcanvus End ====================-->
    <!-- ==================== Mobile Menu Start Here ==================== -->
    <div class="mobile-menu d-xl-none d-block scroll-sm position-fixed bg-black tw-w-350-px tw-h-screen overflow-y-auto tw-p-6 tw-z-999 tw--translate-x-full tw-pb-68 ">
        <button type="button" class="close-button position-absolute tw-end-0 top-0 tw-me-2 tw-mt-2 tw-w-605 tw-h-605 rounded-circle d-flex justify-content-center align-items-center text-neutral-900 bg-neutral-200 hover-bg-neutral-900 hover-text-white">
            <i class="ph ph-x"></i>
        </button>
        <div class="mobile-menu__inner">
            <a href="{{ url('/') }}" class="mobile-menu__logo">
                <img src="{{ asset('handyman/frontend/images/logo/logo.png') }}" alt="{{ __('HandyMan') }}">
            </a>
            
            <div class="mobile-menu__menu">
                <!-- Nav menu Start -->
                <ul class="nav-menu d-xl-flex align-items-center nav-menu--mobile d-block tw-mt-8">
                    <li class="nav-menu__item has-submenu activePage">
                        <a href="{{ url('/') }}" class="nav-menu__link tw-pe-4 text-heading hover-text-main-600 tw-py-9 fw-medium w-100">{{ __('Главная') }}</a>
                        <!-- mega menu start -->
                        <div class="mega-menu tw-p-6 tw-rounded-lg scroll-sm nav-submenu position-absolute start-0 top-100 tw-w-max bg-white tw-duration-200 tw-z-99">
                            <div class="row g-4 row-cols-1 row-cols-lg-1 row-cols-xl-3 row-cols-xxl-4">
                                <div class="col">
                                    <div class="mega-menu-item group-item">
                                        <div class="position-relative border border-neutral-200 tw-rounded-lg overflow-hidden">
                                            <a href="{{ url('/') }}" class="d-block">
                                                <img src="{{ asset('handyman/frontend/images/thumbs/home-img2.png') }}" alt="{{ __('HandyMan - home page') }}" class="tw-h-320-px w-100 object-fit-cover object-top">
                                            </a>
                                            <div class="d-lg-flex d-none">
                                                <div class="mega-menu-item__overlay position-absolute top-0 tw-start-0 w-100 h-100 d-flex justify-content-center align-items-center tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1 tw-scale-08 group-hover-item-scale-1 tw-rounded-lg pointer-event-none"></div>
                                                <div class="mega-menu-item__buttons position-absolute top-0 tw-start-0 w-100 h-100 d-flex justify-content-center align-items-center flex-column tw-gap-4 tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1">
                                                    <a href="{{ url('/') }}" class="tw-primary-btn d-inline-flex align-items-center justify-content-center lh-1 fw-semibold bg-main-600 text-white tw-rounded-4xl position-relative z-1">
                                                        <span class="btn_inner position-relative z-1 w-100 text-center">
                                                            <span class="btn_icon d-inline-flex align-items-center justify-content-center position-absolute end-0 top-0 h-100 z-2 lh-1 text-heading tw-text-lg">
                                                                <span class="overflow-hidden position-relative d-inline-flex">
                                                                    <i class="ph-bold ph-arrow-right"></i>
                                                                    <i class="ph-bold ph-arrow-right"></i>
                                                                </span>
                                                            </span>
                                                            <span class="btn_text d-inline-flex overflow-hidden text-white">
                                                                <span class="d-flex align-items-center tw-transition-5 text-capitalize">{{ __('Просмотр') }}</span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mt-4 text-center">
                                            <a href="{{ url('/') }}" class="text-heading hover-text-main-600 fw-semibold tw-text-md text-capitalize line-clamp-1">{{ __('Уборочный сервис') }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mega-menu-item group-item">
                                        <div class="position-relative border border-neutral-200 tw-rounded-lg overflow-hidden">
                                            <a href="index-2.html" class="d-block">
                                                <img src="{{ asset('handyman/frontend/images/thumbs/home-img1.png') }}" alt="Home Page Image" class="tw-h-320-px w-100 object-fit-cover object-top">
                                            </a>
                                            <div class="d-lg-flex d-none">
                                                <div class="mega-menu-item__overlay position-absolute top-0 tw-start-0 w-100 h-100 d-flex justify-content-center align-items-center tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1 tw-scale-08 group-hover-item-scale-1 tw-rounded-lg pointer-event-none"></div>
                                                <div class="mega-menu-item__buttons position-absolute top-0 tw-start-0 w-100 h-100 d-flex justify-content-center align-items-center flex-column tw-gap-4 tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1">
                                                    <a href="index-2.html" class="tw-primary-btn d-inline-flex align-items-center justify-content-center lh-1 fw-semibold bg-main-600 text-white tw-rounded-4xl position-relative z-1">
                                                        <span class="btn_inner position-relative z-1 w-100 text-center">
                                                            <span class="btn_icon d-inline-flex align-items-center justify-content-center position-absolute end-0 top-0 h-100 z-2 lh-1 text-heading tw-text-lg">
                                                                <span class="overflow-hidden position-relative d-inline-flex">
                                                                    <i class="ph-bold ph-arrow-right"></i>
                                                                    <i class="ph-bold ph-arrow-right"></i>
                                                                </span>
                                                            </span>
                                                            <span class="btn_text d-inline-flex overflow-hidden text-white">
                                                                <span class="d-flex align-items-center tw-transition-5 text-capitalize">Live Preview</span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mt-4 text-center">
                                            <a href="index-2.html" class="text-heading hover-text-main-600 fw-semibold tw-text-md text-capitalize line-clamp-1">Cleaning Service Two</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mega-menu-item group-item">
                                        <div class="position-relative border border-neutral-200 tw-rounded-lg overflow-hidden">
                                            <a href="index-3.html" class="d-block">
                                                <img src="{{ asset('handyman/frontend//images/thumbs/home-img3.png') }}" alt="Home Page Image" class="tw-h-320-px w-100 object-fit-cover object-top">
                                            </a>
                                            <div class="d-lg-flex d-none">
                                                <div class="mega-menu-item__overlay position-absolute top-0 tw-start-0 w-100 h-100 d-flex justify-content-center align-items-center tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1 tw-scale-08 group-hover-item-scale-1 tw-rounded-lg pointer-event-none"></div>
                                                <div class="mega-menu-item__buttons position-absolute top-0 tw-start-0 w-100 h-100 d-flex justify-content-center align-items-center flex-column tw-gap-4 tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1">
                                                    <a href="index-3.html" class="tw-primary-btn d-inline-flex align-items-center justify-content-center lh-1 fw-semibold bg-main-600 text-white tw-rounded-4xl position-relative z-1">
                                                        <span class="btn_inner position-relative z-1 w-100 text-center">
                                                            <span class="btn_icon d-inline-flex align-items-center justify-content-center position-absolute end-0 top-0 h-100 z-2 lh-1 text-heading tw-text-lg">
                                                                <span class="overflow-hidden position-relative d-inline-flex">
                                                                    <i class="ph-bold ph-arrow-right"></i>
                                                                    <i class="ph-bold ph-arrow-right"></i>
                                                                </span>
                                                            </span>
                                                            <span class="btn_text d-inline-flex overflow-hidden text-white">
                                                                <span class="d-flex align-items-center tw-transition-5 text-capitalize">Live Preview</span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mt-4 text-center">
                                            <a href="index-3.html" class="text-heading hover-text-main-600 fw-semibold tw-text-md text-capitalize line-clamp-1">Air Conditioning</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mega-menu-item group-item">
                                        <div class="position-relative border border-neutral-200 tw-rounded-lg overflow-hidden">
                                            <a href="index-4.html" class="d-block">
                                                <img src="{{ asset('handyman/frontend/images/thumbs/home-img4.png') }}" alt="Home Page Image" class="tw-h-320-px w-100 object-fit-cover object-top">
                                            </a>
                                            <div class="d-lg-flex d-none">
                                                <div class="mega-menu-item__overlay position-absolute top-0 tw-start-0 w-100 h-100 d-flex justify-content-center align-items-center tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1 tw-scale-08 group-hover-item-scale-1 tw-rounded-lg pointer-event-none"></div>
                                                <div class="mega-menu-item__buttons position-absolute top-0 tw-start-0 w-100 h-100 d-flex justify-content-center align-items-center flex-column tw-gap-4 tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1">
                                                    <a href="index-4.html" class="tw-primary-btn d-inline-flex align-items-center justify-content-center lh-1 fw-semibold bg-main-600 text-white tw-rounded-4xl position-relative z-1">
                                                        <span class="btn_inner position-relative z-1 w-100 text-center">
                                                            <span class="btn_icon d-inline-flex align-items-center justify-content-center position-absolute end-0 top-0 h-100 z-2 lh-1 text-heading tw-text-lg">
                                                                <span class="overflow-hidden position-relative d-inline-flex">
                                                                    <i class="ph-bold ph-arrow-right"></i>
                                                                    <i class="ph-bold ph-arrow-right"></i>
                                                                </span>
                                                            </span>
                                                            <span class="btn_text d-inline-flex overflow-hidden text-white">
                                                                <span class="d-flex align-items-center tw-transition-5 text-capitalize">Live Preview</span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mt-4 text-center">
                                            <a href="index-4.html" class="text-heading hover-text-main-600 fw-semibold tw-text-md text-capitalize line-clamp-1">Handyman</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mega-menu-item group-item">
                                        <div class="position-relative border border-neutral-200 tw-rounded-lg overflow-hidden">
                                            <a href="index-5.html" class="d-block">
                                                <img src="{{ asset('handyman/frontend/images/thumbs/home-img5.png') }}" alt="Home Page Image" class="tw-h-320-px w-100 object-fit-cover object-top">
                                            </a>
                                            <div class="d-lg-flex d-none">
                                                <div class="mega-menu-item__overlay position-absolute top-0 tw-start-0 w-100 h-100 d-flex justify-content-center align-items-center tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1 tw-scale-08 group-hover-item-scale-1 tw-rounded-lg pointer-event-none"></div>
                                                <div class="mega-menu-item__buttons position-absolute top-0 tw-start-0 w-100 h-100 d-flex justify-content-center align-items-center flex-column tw-gap-4 tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1">
                                                    <a href="index-5.html" class="tw-primary-btn d-inline-flex align-items-center justify-content-center lh-1 fw-semibold bg-main-600 text-white tw-rounded-4xl position-relative z-1">
                                                        <span class="btn_inner position-relative z-1 w-100 text-center">
                                                            <span class="btn_icon d-inline-flex align-items-center justify-content-center position-absolute end-0 top-0 h-100 z-2 lh-1 text-heading tw-text-lg">
                                                                <span class="overflow-hidden position-relative d-inline-flex">
                                                                    <i class="ph-bold ph-arrow-right"></i>
                                                                    <i class="ph-bold ph-arrow-right"></i>
                                                                </span>
                                                            </span>
                                                            <span class="btn_text d-inline-flex overflow-hidden text-white">
                                                                <span class="d-flex align-items-center tw-transition-5 text-capitalize">Live Preview</span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mt-4 text-center">
                                            <a href="index-5.html" class="text-heading hover-text-main-600 fw-semibold tw-text-md text-capitalize line-clamp-1">Computer  & Mobile repair</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- mega menu end -->
                    </li>
                    <li class="nav-menu__item has-submenu position-relative">
                        <a href="javascript:void(0)" class="nav-menu__link tw-pe-4 text-heading hover-text-main-600 tw-py-9 fw-medium w-100">Pages</a>
                        <ul class="nav-submenu scroll-sm position-absolute start-0 top-100 tw-w-max bg-white overflow-hidden tw-p-2 tw-duration-200 tw-z-99">
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="about.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    About Us</a>
                            </li>
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="team.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Team</a>
                            </li>
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="team-details.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Team Details</a>
                            </li>
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="pricing.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Pricing</a>
                            </li>
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="product.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Products</a>
                            </li>
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="product-details.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Products Details</a>
                            </li>
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="shop.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Shop</a>
                            </li>
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="cart.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Cart</a>
                            </li>
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="checkout.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Checkout</a>
                            </li>
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="faq.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    FAQ</a>
                            </li>
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="appointment.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Book An Appointment</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item has-submenu position-relative">
                        <a href="javascript:void(0)" class="nav-menu__link tw-pe-4 text-heading hover-text-main-600 tw-py-9 fw-medium w-100">Services</a>
                        <ul class="nav-submenu scroll-sm position-absolute start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-hidden tw-p-2 tw-duration-200 tw-z-99">
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="service.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Services
                                </a>
                            </li>
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="service-details.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">Services Details</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item has-submenu position-relative">
                        <a href="javascript:void(0)" class="nav-menu__link tw-pe-4 text-heading hover-text-main-600 tw-py-9 fw-medium w-100">Projects</a>
                        <ul class="nav-submenu scroll-sm position-absolute start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-hidden tw-p-2 tw-duration-200 tw-z-99">
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="project.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Projects</a>
                            </li>
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="project-details.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Projects Details</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item has-submenu position-relative">
                        <a href="javascript:void(0)" class="nav-menu__link tw-pe-4 text-heading hover-text-main-600 tw-py-9 fw-medium w-100">News</a>
                        <ul class="nav-submenu scroll-sm position-absolute start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-hidden tw-p-2 tw-duration-200 tw-z-99">
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="blog.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Blog</a>
                            </li>
                            <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                <a href="blog-details.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                    Blog Details</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item">
                        <a href="contact.html" class="nav-menu__link text-heading hover-text-main-600 tw-py-9 fw-medium w-100">Contacts</a>
                    </li>
                </ul>
                <!-- Nav menu End  -->
            </div>
        </div>
    </div>
    <!-- ==================== Mobile Menu End Here ==================== -->

    <header class="header-top position-relative z-2 d-none d-xxl-block bg-white">
        <div class="container tw-container-1870-px">
            <div class="header-top header-top-two-bg tw-py-3 tw-px-8 bg-main-two-600">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="header-top-right d-flex align-items-center tw-gap-6">
                                <div>
                                    <a class="header-top-two-address d-inline-flex align-items-center text-heading tw-gap-2 hover-text-main-600" href="mailto:support@gmial.com"><span class="d-inline-block lh-1 text-main-600"><i class="ph ph-envelope"></i></span> support@gmial.com</a>
                                </div>
                                <div>
                                    <a class="header-top-two-address d-inline-flex align-items-center text-heading tw-gap-2 hover-text-main-600" href="mailto:+11234567899"><span class="d-inline-block lh-1 text-main-600"><i class="ph ph-envelope"></i></span> +1 (123) 456-7899</a>
                                </div>
                                <div>
                                    <p class="header-top-two-address d-inline-flex align-items-center text-heading tw-gap-2"><span class="d-inline-block lh-1 text-main-600"><i class="ph ph-clock"></i></span> Mon – Fri: 8:30 am – 5:00 pm, Sat – Sun: Closed</p>
                                </div>
                            </div>
                            <ul class="header-social d-flex align-items-center tw-gap-4">
                                <li class="text-heading">Follow Us:</li>
                                <li>
                                    <a class="text-heading hover-text-main-600" href="https://www.facebook.com"><i class="ph-bold ph-facebook-logo"></i></a>
                                </li>
                                <li>
                                    <a class="text-heading hover-text-main-600" href="https://www.twitter.com"><i class="ph-bold ph-twitter-logo"></i></a>
                                </li>
                                <li>
                                    <a class="text-heading hover-text-main-600" href="https://www.linkedin.com"><i class="ph-bold ph-instagram-logo"></i></a>
                                </li>
                                <li>
                                    <a class="text-heading hover-text-main-600" href="https://www.pinterest.com"><i class="ph-bold ph-pinterest-logo"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ==================== Header Start Here ==================== -->
    <header class="header header-two bg-white tw-transition-all tw-z-99 @@headeripClass">
        <div class="container tw-container-1870-px">
            <nav class="d-flex align-items-center justify-content-between position-relative">


                <!-- header left  -->
                <div class="header-left">
                    <!-- Logo Start -->
                    <div class="logo">
                        <a href="{{ url('/')}}" class="link">
                            <img src="{{ asset('handyman/frontend/images/logo/logo.png') }}" alt="{{ __('HandyMan') }}" class="max-w-200-px">
                        </a>
                    </div>
                    <!-- Logo End  -->
                </div>
                <!-- header left  -->




                <!-- Menu Start  -->
                <div class="header-menu d-xl-block d-none">
                    <!-- Nav menu Start -->
                    <ul class="nav-menu d-xl-flex align-items-center tw-gap-8">
                        <li class="nav-menu__item has-submenu activePage">
                            <a href="{{ url('/')}}" class="nav-menu__link tw-pe-4 text-heading hover-text-main-600 tw-py-9 fw-medium w-100">{{__('Главная') }}</a>
                            <!-- mega menu start -->
                            <div class="mega-menu tw-p-6 tw-rounded-lg scroll-sm nav-submenu position-absolute start-0 top-100 tw-w-max bg-white tw-duration-200 tw-z-99">
                                <div class="row g-4 row-cols-1 row-cols-lg-1 row-cols-xl-3 row-cols-xxl-4">
                                    <div class="col">
                                        <div class="mega-menu-item group-item">
                                            <div class="position-relative border border-neutral-200 tw-rounded-lg overflow-hidden">
                                                <a href="{{ url('/') }}" class="d-block">
                                                    <img src="{{ asset('handyman/frontend/images/thumbs/home-img2.png') }}" alt="Home Page Image" class="tw-h-320-px w-100 object-fit-cover object-top">
                                                </a>
                                                <div class="d-lg-flex d-none">
                                                    <div class="mega-menu-item__overlay position-absolute top-0 tw-start-0 w-100 h-100 d-flex justify-content-center align-items-center tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1 tw-scale-08 group-hover-item-scale-1 tw-rounded-lg pointer-event-none"></div>
                                                    <div class="mega-menu-item__buttons position-absolute top-0 tw-start-0 w-100 h-100 d-flex justify-content-center align-items-center flex-column tw-gap-4 tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1">
                                                        <a href="{{ url('/') }}" class="tw-primary-btn d-inline-flex align-items-center justify-content-center lh-1 fw-semibold bg-main-600 text-white tw-rounded-4xl position-relative z-1">
                                                            <span class="btn_inner position-relative z-1 w-100 text-center">
                                                                <span class="btn_icon d-inline-flex align-items-center justify-content-center position-absolute end-0 top-0 h-100 z-2 lh-1 text-heading tw-text-lg">
                                                                    <span class="overflow-hidden position-relative d-inline-flex">
                                                                        <i class="ph-bold ph-arrow-right"></i>
                                                                        <i class="ph-bold ph-arrow-right"></i>
                                                                    </span>
                                                                </span>
                                                                <span class="btn_text d-inline-flex overflow-hidden text-white">
                                                                    <span class="d-flex align-items-center tw-transition-5 text-capitalize">Live Preview</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tw-mt-4 text-center">
                                                <a href="{{ url('/') }}" class="text-heading hover-text-main-600 fw-semibold tw-text-md text-capitalize line-clamp-1">Cleaning Service One</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mega-menu-item group-item">
                                            <div class="position-relative border border-neutral-200 tw-rounded-lg overflow-hidden">
                                                <a href="index-2.html" class="d-block">
                                                    <img src="{{ asset('handyman/frontend/images/thumbs/home-img1.png') }}" alt="Home Page Image" class="tw-h-320-px w-100 object-fit-cover object-top">
                                                </a>
                                                <div class="d-lg-flex d-none">
                                                    <div class="mega-menu-item__overlay position-absolute top-0 tw-start-0 w-100 h-100 d-flex justify-content-center align-items-center tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1 tw-scale-08 group-hover-item-scale-1 tw-rounded-lg pointer-event-none"></div>
                                                    <div class="mega-menu-item__buttons position-absolute top-0 tw-start-0 w-100 h-100 d-flex justify-content-center align-items-center flex-column tw-gap-4 tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1">
                                                        <a href="index-2.html" class="tw-primary-btn d-inline-flex align-items-center justify-content-center lh-1 fw-semibold bg-main-600 text-white tw-rounded-4xl position-relative z-1">
                                                            <span class="btn_inner position-relative z-1 w-100 text-center">
                                                                <span class="btn_icon d-inline-flex align-items-center justify-content-center position-absolute end-0 top-0 h-100 z-2 lh-1 text-heading tw-text-lg">
                                                                    <span class="overflow-hidden position-relative d-inline-flex">
                                                                        <i class="ph-bold ph-arrow-right"></i>
                                                                        <i class="ph-bold ph-arrow-right"></i>
                                                                    </span>
                                                                </span>
                                                                <span class="btn_text d-inline-flex overflow-hidden text-white">
                                                                    <span class="d-flex align-items-center tw-transition-5 text-capitalize">Live Preview</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tw-mt-4 text-center">
                                                <a href="index-2.html" class="text-heading hover-text-main-600 fw-semibold tw-text-md text-capitalize line-clamp-1">Cleaning Service Two</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mega-menu-item group-item">
                                            <div class="position-relative border border-neutral-200 tw-rounded-lg overflow-hidden">
                                                <a href="index-3.html" class="d-block">
                                                    <img src="{{ asset('handyman/frontend/images/thumbs/home-img3.png') }}" alt="Home Page Image" class="tw-h-320-px w-100 object-fit-cover object-top">
                                                </a>
                                                <div class="d-lg-flex d-none">
                                                    <div class="mega-menu-item__overlay position-absolute top-0 tw-start-0 w-100 h-100 d-flex justify-content-center align-items-center tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1 tw-scale-08 group-hover-item-scale-1 tw-rounded-lg pointer-event-none"></div>
                                                    <div class="mega-menu-item__buttons position-absolute top-0 tw-start-0 w-100 h-100 d-flex justify-content-center align-items-center flex-column tw-gap-4 tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1">
                                                        <a href="index-3.html" class="tw-primary-btn d-inline-flex align-items-center justify-content-center lh-1 fw-semibold bg-main-600 text-white tw-rounded-4xl position-relative z-1">
                                                            <span class="btn_inner position-relative z-1 w-100 text-center">
                                                                <span class="btn_icon d-inline-flex align-items-center justify-content-center position-absolute end-0 top-0 h-100 z-2 lh-1 text-heading tw-text-lg">
                                                                    <span class="overflow-hidden position-relative d-inline-flex">
                                                                        <i class="ph-bold ph-arrow-right"></i>
                                                                        <i class="ph-bold ph-arrow-right"></i>
                                                                    </span>
                                                                </span>
                                                                <span class="btn_text d-inline-flex overflow-hidden text-white">
                                                                    <span class="d-flex align-items-center tw-transition-5 text-capitalize">Live Preview</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tw-mt-4 text-center">
                                                <a href="index-3.html" class="text-heading hover-text-main-600 fw-semibold tw-text-md text-capitalize line-clamp-1">Air Conditioning</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mega-menu-item group-item">
                                            <div class="position-relative border border-neutral-200 tw-rounded-lg overflow-hidden">
                                                <a href="index-4.html" class="d-block">
                                                    <img src="{{ asset('handyman/frontend/images/thumbs/home-img4.png') }}" alt="Home Page Image" class="tw-h-320-px w-100 object-fit-cover object-top">
                                                </a>
                                                <div class="d-lg-flex d-none">
                                                    <div class="mega-menu-item__overlay position-absolute top-0 tw-start-0 w-100 h-100 d-flex justify-content-center align-items-center tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1 tw-scale-08 group-hover-item-scale-1 tw-rounded-lg pointer-event-none"></div>
                                                    <div class="mega-menu-item__buttons position-absolute top-0 tw-start-0 w-100 h-100 d-flex justify-content-center align-items-center flex-column tw-gap-4 tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1">
                                                        <a href="index-4.html" class="tw-primary-btn d-inline-flex align-items-center justify-content-center lh-1 fw-semibold bg-main-600 text-white tw-rounded-4xl position-relative z-1">
                                                            <span class="btn_inner position-relative z-1 w-100 text-center">
                                                                <span class="btn_icon d-inline-flex align-items-center justify-content-center position-absolute end-0 top-0 h-100 z-2 lh-1 text-heading tw-text-lg">
                                                                    <span class="overflow-hidden position-relative d-inline-flex">
                                                                        <i class="ph-bold ph-arrow-right"></i>
                                                                        <i class="ph-bold ph-arrow-right"></i>
                                                                    </span>
                                                                </span>
                                                                <span class="btn_text d-inline-flex overflow-hidden text-white">
                                                                    <span class="d-flex align-items-center tw-transition-5 text-capitalize">Live Preview</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tw-mt-4 text-center">
                                                <a href="index-4.html" class="text-heading hover-text-main-600 fw-semibold tw-text-md text-capitalize line-clamp-1">Handyman</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mega-menu-item group-item">
                                            <div class="position-relative border border-neutral-200 tw-rounded-lg overflow-hidden">
                                                <a href="index-5.html" class="d-block">
                                                    <img src="{{ asset('handyman/frontend/images/thumbs/home-img5.png') }}" alt="Home Page Image" class="tw-h-320-px w-100 object-fit-cover object-top">
                                                </a>
                                                <div class="d-lg-flex d-none">
                                                    <div class="mega-menu-item__overlay position-absolute top-0 tw-start-0 w-100 h-100 d-flex justify-content-center align-items-center tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1 tw-scale-08 group-hover-item-scale-1 tw-rounded-lg pointer-event-none"></div>
                                                    <div class="mega-menu-item__buttons position-absolute top-0 tw-start-0 w-100 h-100 d-flex justify-content-center align-items-center flex-column tw-gap-4 tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1">
                                                        <a href="index-5.html" class="tw-primary-btn d-inline-flex align-items-center justify-content-center lh-1 fw-semibold bg-main-600 text-white tw-rounded-4xl position-relative z-1">
                                                            <span class="btn_inner position-relative z-1 w-100 text-center">
                                                                <span class="btn_icon d-inline-flex align-items-center justify-content-center position-absolute end-0 top-0 h-100 z-2 lh-1 text-heading tw-text-lg">
                                                                    <span class="overflow-hidden position-relative d-inline-flex">
                                                                        <i class="ph-bold ph-arrow-right"></i>
                                                                        <i class="ph-bold ph-arrow-right"></i>
                                                                    </span>
                                                                </span>
                                                                <span class="btn_text d-inline-flex overflow-hidden text-white">
                                                                    <span class="d-flex align-items-center tw-transition-5 text-capitalize">Live Preview</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tw-mt-4 text-center">
                                                <a href="index-5.html" class="text-heading hover-text-main-600 fw-semibold tw-text-md text-capitalize line-clamp-1">Computer  & Mobile repair</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- mega menu end -->
                        </li>
                        <li class="nav-menu__item has-submenu position-relative">
                            <a href="javascript:void(0)" class="nav-menu__link tw-pe-4 text-heading hover-text-main-600 tw-py-9 fw-medium w-100">Pages</a>
                            <ul class="nav-submenu scroll-sm position-absolute start-0 top-100 tw-w-max bg-white overflow-hidden tw-p-2 tw-duration-200 tw-z-99">
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="about.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        About Us</a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="team.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Team</a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="team-details.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Team Details</a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="pricing.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Pricing</a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="product.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Products</a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="product-details.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Products Details</a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="shop.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Shop</a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="cart.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Cart</a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="checkout.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Checkout</a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="faq.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        FAQ</a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="appointment.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Book An Appointment</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-menu__item has-submenu position-relative">
                            <a href="javascript:void(0)" class="nav-menu__link tw-pe-4 text-heading hover-text-main-600 tw-py-9 fw-medium w-100">Services</a>
                            <ul class="nav-submenu scroll-sm position-absolute start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-hidden tw-p-2 tw-duration-200 tw-z-99">
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="service.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Services
                                    </a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="service-details.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">Services Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-menu__item has-submenu position-relative">
                            <a href="javascript:void(0)" class="nav-menu__link tw-pe-4 text-heading hover-text-main-600 tw-py-9 fw-medium w-100">Projects</a>
                            <ul class="nav-submenu scroll-sm position-absolute start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-hidden tw-p-2 tw-duration-200 tw-z-99">
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="project.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Projects</a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="project-details.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Projects Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-menu__item has-submenu position-relative">
                            <a href="javascript:void(0)" class="nav-menu__link tw-pe-4 text-heading hover-text-main-600 tw-py-9 fw-medium w-100">News</a>
                            <ul class="nav-submenu scroll-sm position-absolute start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-hidden tw-p-2 tw-duration-200 tw-z-99">
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="blog.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Blog</a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="blog-details.html" class="nav-submenu__link position-relative z-1 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
                                        Blog Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-menu__item">
                            <a href="contact.html" class="nav-menu__link text-heading hover-text-main-600 tw-py-9 fw-medium w-100">Contacts</a>
                        </li>
                    </ul>
                    <!-- Nav menu End  -->
                </div>
                <!-- Menu End  -->

                <!-- Header Right start -->
                <div class="header-right d-flex align-items-center tw-gap-5">
                    <!-- Search Start  -->
                    <div class="header-search">
                        <button class="tw-w-122 tw-h-122 lh-1 d-inline-flex align-items-center justify-content-center text-main-600 rounded-circle open-search tw-transition-3 hover-bg-main-600 hover-text-white" style="background: #ebf6e5;" aria-label="search products" title="open search box">
                            <span class="tw-text-xl"><i class="ph-bold ph-magnifying-glass"></i></span>
                        </button>
                    </div>
                    <!-- Search End  -->
                    <!-- Cart Start  -->
                    <div class="header-cart header-two-cart d-none d-md-block">
                        <button class="tw-w-122 tw-h-122 lh-1 d-inline-flex align-items-center justify-content-center text-main-600 rounded-circle open-cart tw-transition-3 hover-bg-main-600 hover-text-white" style="background: #ebf6e5;" aria-label="search products" title="open search box">
                            <span class="tw-text-lg"><img src="{{ asset('handyman/frontend/images/icons/cart.svg') }}" alt="cart"></span>
                        </button>
                    </div>
                    <!-- Cart End  -->
                    <!-- Button Start  -->
                    <div class="header-two-button">
                        <a href="contact.html" class="tw-primary-btn d-inline-flex align-items-center justify-content-center lh-1 fw-semibold bg-main-600 text-white tw-rounded-4xl position-relative z-1">
                            <span class="btn_inner position-relative z-1 w-100 text-center">
                                <span class="btn_icon d-inline-flex align-items-center justify-content-center position-absolute end-0 top-0 h-100 z-2 lh-1 text-heading tw-text-lg">
                                    <span class="overflow-hidden position-relative d-inline-flex">
                                        <i class="ph-bold ph-arrow-right"></i>
                                        <i class="ph-bold ph-arrow-right"></i>
                                    </span>
                                </span>
                                <span class="btn_text d-inline-flex overflow-hidden text-white">
                                    <span class="d-flex align-items-center tw-transition-5 text-capitalize">Get A Quote</span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <!-- Button End  -->
                    <!-- MobileMenu Button Start  -->
                    <button type="button" class="toggle-mobileMenu d-xl-none text-white tw-text-9">
                        <span><img src="{{ asset('handyman/frontend/images/icons/memu-toggole.svg') }}" alt="icon"></span>
                    </button>
                    <!-- MobileMenu Button End  -->
                </div>
                <!-- Header Right End  -->
            </nav>
        </div>
    </header>
    <!-- ==================== Header End Here ==================== -->





    <div id="scrollSmoother-container">
        <section class="banner-two-area position-relative z-1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 col-md-11 col-sm-11">
                        <div class="banner-two-left">
                            <div>
                                <h6 class="banner-two-subtitle text-main-600 tw-text-lg text-uppercase tw-mb-2"><span><img src="assets/images/icons/banner-two-subtitle.svg" alt="subtitle"></span> We Clean, You Shine</h6>
                                <h1 class="banner-two-title tw-text-118 tw-char-animation tw-mb-9">Best Cleaning Experience From Top Service</h1>
                            </div>
                            <div class="banner-two-button">
                                <a href="contact.html" class="tw-primary-btn d-inline-flex align-items-center justify-content-center lh-1 fw-semibold bg-main-600 text-white tw-rounded-4xl position-relative z-1">
                                    <span class="btn_inner position-relative z-1 w-100 text-center">
                                        <span class="btn_icon d-inline-flex align-items-center justify-content-center position-absolute end-0 top-0 h-100 z-2 lh-1 text-heading tw-text-lg">
                                            <span class="overflow-hidden position-relative d-inline-flex">
                                                <i class="ph-bold ph-arrow-right"></i>
                                                <i class="ph-bold ph-arrow-right"></i>
                                            </span>
                                        </span>
                                        <span class="btn_text d-inline-flex overflow-hidden text-white">
                                            <span class="d-flex align-items-center tw-transition-5 text-capitalize">Get a Free Quote</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="banner-two-thumb position-absolute end-0">
                    <img src="{{ asset('handyman/frontend/images/thumbs/banner-two-thumb.png') }}" alt="thumb">
                </div>
                <img class="banner-two-shape-1 position-absolute z-n1" src="{{ asset('handyman/frontend/images/shapes/banner-two-shape1.png') }}" alt="shape">
                <img class="banner-two-shape-2 position-absolute bottom-0 start-0 z-n1" src="{{ asset('handyman/frontend/images/shapes/banner-two-shape2.png') }}" alt="shape">
                <img class="banner-two-shape-3 position-absolute translate-middle-x z-n1" src="{{ asset('handyman/frontend/images/shapes/banner-two-shape3.png') }}" alt="shape">
            </div>
        </section>
        <section class="feature-two-area pb-120 position-relative z-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="feature-two-wrapper text-center bg-white tw-rounded-xl tw-pt-10 tw-pb-8 tw-px-10 tw-mb-7 animation-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <div class="feature-two-icon tw-mb-5">
                                <span class="tw-w-19 tw-h-19 lh-1 d-inline-flex align-items-center justify-content-center bg-main-600 rounded-circle position-relative z-1"><img class="animate__wobble" src="assets/images/icons/feature-two-icon1.svg" alt="icon"></span>
                            </div>
                            <div>
                                <h4 class="tw-text-605 tw-mb-4"><a href="#">Support 24/7</a></h4>
                                <p>There are cleaning passages this marke available areas conservation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="feature-two-wrapper text-center bg-white tw-rounded-xl tw-pt-10 tw-pb-8 tw-px-10 tw-mb-7 animation-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            <div class="feature-two-icon tw-mb-5">
                                <span class="tw-w-19 tw-h-19 lh-1 d-inline-flex align-items-center justify-content-center bg-main-600 rounded-circle position-relative z-1"><img class="animate__wobble" src="assets/images/icons/feature-two-icon2.svg" alt="icon"></span>
                            </div>
                            <div>
                                <h4 class="tw-text-605 tw-mb-4"><a href="#">Payment Secure</a></h4>
                                <p>There are cleaning passages this marke available areas conservation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="feature-two-wrapper text-center bg-white tw-rounded-xl tw-pt-10 tw-pb-8 tw-px-10 tw-mb-7 animation-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                            <div class="feature-two-icon tw-mb-5">
                                <span class="tw-w-19 tw-h-19 lh-1 d-inline-flex align-items-center justify-content-center bg-main-600 rounded-circle position-relative z-1"><img class="animate__wobble" src="assets/images/icons/feature-two-icon3.svg" alt="icon"></span>
                            </div>
                            <div>
                                <h4 class="tw-text-605 tw-mb-4"><a href="#">Top Cleaning Services</a></h4>
                                <p>There are cleaning passages this marke available areas conservation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-two-area pb-120 position-relative z-1">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-2">
                        <div class="section-wrapper tw-mb-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <h6 class="section-subtitle tw-text-lg fw-semibold text-uppercase text-main-600 tw-mb-3"><span><img src="assets/images/icons/section-subtitle.svg" alt="subtitle"></span> who we are</h6>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="tw-mb-10" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <h2 class="about-two-title text-invert text-capitalize fw-medium tw-mb-13">We believe that a clean space is a happy space. Founded in 1897, our mission is to make homes & businesses <br> sparkle while...</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-9 col-md-10">
                        <div class="about-two-thumb one" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <img class="tw-rounded-xl tw-animation-img-left" src="{{ asset('handyman/frontend/images/thumbs/about-two-thumb1.jpg') }}" alt="thumb">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="tw-mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <div class="row align-items-end">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="bg-main-two-600 tw-rounded-xl tw-mw-56 w-100 tw-px-10 tw-py-13">
                                        <h2 class="tw-text-133 fw-medium text-heading mb-0 lh-1"><span class="font-heading text-heading odometer" data-count="50"></span>k+</h2>
                                        <p class="text-heading">Client’s Serviced</p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="about-two-thumb two">
                                        <img class="tw-rounded-xl tw-animation-img-right" src="{{ asset('handyman/frontend/images/thumbs/about-two-thumb2.jpg') }}" alt="thumb">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tw-me-20">
                            <div class="tw-mb-6">
                                <p>At Shiny Clean, we believe a clean space is a happy space. with years
                                    of experience in residential and commercial cleaning, our mission is to
                                    deliver top-quality services that health...</p>
                            </div>
                            <div>
                                <a href="about.html" class="tw-primary-btn d-inline-flex align-items-center justify-content-center lh-1 fw-semibold bg-main-600 text-white tw-rounded-4xl position-relative z-1">
                                    <span class="btn_inner position-relative z-1 w-100 text-center">
                                        <span class="btn_icon d-inline-flex align-items-center justify-content-center position-absolute end-0 top-0 h-100 z-2 lh-1 text-heading tw-text-lg">
                                            <span class="overflow-hidden position-relative d-inline-flex">
                                                <i class="ph-bold ph-arrow-right"></i>
                                                <i class="ph-bold ph-arrow-right"></i>
                                            </span>
                                        </span>
                                        <span class="btn_text d-inline-flex overflow-hidden text-white">
                                            <span class="d-flex align-items-center tw-transition-5 text-capitalize">Book Now</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="about-two-text-shape">
                    <h6>Office Cleaning</h6>
                </div>
                <img class="about-two-bg-shape position-absolute bottom-0 start-0 z-n1" src="{{ asset('handyman/frontend/images/shapes/about-two-bg-shape.png') }}" alt="shape">
            </div>
        </section>
        <section class="service-two-area py-120 position-relative z-1 @@serviceipClass">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <div class="tw-mb-7">
                                <ul class="service-two-nav-tabs nav nav-tabs" id="myTab" role="tablist">
                                    <li class="service-two-nav-item nav-item tw-mb-6 w-100 animation-item" role="presentation">
                                        <button class="service-two-nav-link nav-link bg-white tw-rounded-xl w-100 active d-inline-flex justify-content-start align-items-center tw-gap-6" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                            <span class="service-two-left-icon">
                                                <span class="tw-w-170 tw-h-170 lh-1 d-inline-flex justify-content-center align-items-center bg-main-two-600 tw-rounded-lg"><img class="animate__wobble" src="{{ asset('handyman/frontend/images/icons/service-two-icon1.svg') }}" alt="icon"></span>
                                            </span>
                                            <span class="text-start">
                                                <span class="service-two-left-title tw-text-505 fw-semibold text-heading text-capitalize tw-mb-2">Deep Cleaning</span>
                                                <span class="service-two-left-paragraph text-body">At Shiny Clean, we believe </span>
                                            </span>
                                        </button>
                                    </li>
                                    <li class="service-two-nav-item nav-item tw-mb-6 w-100 animation-item" role="presentation">
                                        <button class="service-two-nav-link nav-link bg-white tw-rounded-xl w-100 d-inline-flex justify-content-start align-items-center tw-gap-6" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                            <span class="service-two-left-icon">
                                                <span class="tw-w-170 tw-h-170 lh-1 d-inline-flex justify-content-center align-items-center bg-main-two-600 tw-rounded-lg"><img class="animate__wobble" src="assets/images/icons/service-two-icon2.svg" alt="icon"></span>
                                            </span>
                                            <span class="text-start">
                                                <span class="service-two-left-title tw-text-505 fw-semibold text-heading text-capitalize tw-mb-2">Office Cleaning</span>
                                                <span class="service-two-left-paragraph text-body">At Shiny Clean, we believe </span>
                                            </span>
                                        </button>
                                    </li>
                                    <li class="service-two-nav-item nav-item tw-mb-6 w-100 animation-item" role="presentation">
                                        <button class="service-two-nav-link nav-link bg-white tw-rounded-xl w-100 d-inline-flex justify-content-start align-items-center tw-gap-6" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                            <span class="service-two-left-icon">
                                                <span class="tw-w-170 tw-h-170 lh-1 d-inline-flex justify-content-center align-items-center bg-main-two-600 tw-rounded-lg"><img class="animate__wobble" src="assets/images/icons/service-two-icon3.svg" alt="icon"></span>
                                            </span>
                                            <span class="text-start">
                                                <span class="service-two-left-title tw-text-505 fw-semibold text-heading text-capitalize tw-mb-2">Move In/Out Cleaning</span>
                                                <span class="service-two-left-paragraph text-body">At Shiny Clean, we believe </span>
                                            </span>
                                        </button>
                                    </li>
                                    <li class="service-two-nav-item nav-item tw-mb-6 w-100 animation-item" role="presentation">
                                        <button class="service-two-nav-link nav-link bg-white tw-rounded-xl w-100 d-inline-flex justify-content-start align-items-center tw-gap-6" id="house-tab" data-bs-toggle="tab" data-bs-target="#house" type="button" role="tab" aria-controls="house" aria-selected="false">
                                            <span class="service-two-left-icon">
                                                <span class="tw-w-170 tw-h-170 lh-1 d-inline-flex justify-content-center align-items-center bg-main-two-600 tw-rounded-lg"><img class="animate__wobble" src="{{ asset('handyman/frontend/images/icons/service-two-icon4.svg') }}" alt="icon"></span>
                                            </span>
                                            <span class="text-start">
                                                <span class="service-two-left-title tw-text-505 fw-semibold text-heading text-capitalize tw-mb-2">House Cleaning</span>
                                                <span class="service-two-left-paragraph text-body">At Shiny Clean, we believe </span>
                                            </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <a href="service-details.html" class="tw-primary-btn d-inline-flex align-items-center justify-content-center lh-1 fw-semibold bg-main-600 text-white tw-rounded-4xl position-relative z-1">
                                    <span class="btn_inner position-relative z-1 w-100 text-center">
                                        <span class="btn_icon d-inline-flex align-items-center justify-content-center position-absolute end-0 top-0 h-100 z-2 lh-1 text-heading tw-text-lg">
                                            <span class="overflow-hidden position-relative d-inline-flex">
                                                <i class="ph-bold ph-arrow-right"></i>
                                                <i class="ph-bold ph-arrow-right"></i>
                                            </span>
                                        </span>
                                        <span class="btn_text d-inline-flex overflow-hidden text-white">
                                            <span class="d-flex align-items-center tw-transition-5 text-capitalize">More Service</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-10">
                        <div class="service-two-wrapper tw-ms-17">
                            <div class="section-wrapper tw-mb-10">
                                <h6 class="section-subtitle tw-text-lg fw-semibold text-uppercase text-main-600 tw-mb-3"><span><img src="assets/images/icons/section-subtitle.svg" alt="subtitle"></span>Services</h6>
                                <h2 class="section-title text-heading tw-text-14 fw-medium tw-char-animation tw-mb-6">Where Cleanliness meets Care Services</h2>
                                <p>At Shiny Clean, we believe a clean space is a happy space. with years of experience in residential and commercial cleaning, our mission is to deliver top-quality services </p>
                            </div>
                            <div class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div>
                                            <div class="service-two-thumbs position-relative z-1">
                                                <img class="tw-rounded-lg" src="{{ asset('handyman/frontend/images/thumbs/service-two-thumb.jpg') }}" alt="thumb">
                                                <div class="service-two-content position-absolute">
                                                    <h4 class="tw-text-122 text-white tw-mb-3"><a href="service-details.html">Deep Cleaning</a></h4>
                                                    <p class="text-white tw-mb-6">At Shiny Clean, we believe a clean space is a happy space. with years of experience i residential and commercial cleaning, our mission is to deliver top-quality services </p>
                                                    <div>
                                                        <a class="fw-semibold text-white d-inline-flex align-items-center tw-gap-2 hover-text-main-600" href="#">Read More <span><i class="ph-bold ph-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div>
                                            <div class="service-two-thumbs position-relative z-1">
                                                <img class="tw-rounded-lg" src="{{ asset('handyman/frontend/images/thumbs/service-two-thumb2.jpg') }}" alt="thumb">
                                                <div class="service-two-content position-absolute">
                                                    <h4 class="tw-text-122 text-white tw-mb-3"><a href="service-details.html">Deep Cleaning</a></h4>
                                                    <p class="text-white tw-mb-6">At Shiny Clean, we believe a clean space is a happy space. with years of experience i residential and commercial cleaning, our mission is to deliver top-quality services </p>
                                                    <div>
                                                        <a class="fw-semibold text-white d-inline-flex align-items-center tw-gap-2 hover-text-main-600" href="#">Read More <span><i class="ph-bold ph-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <div>
                                            <div class="service-two-thumbs position-relative z-1">
                                                <img class="tw-rounded-lg" src="{{ asset('handyman/frontend/images/thumbs/service-two-thumb3.jpg') }}" alt="thumb">
                                                <div class="service-two-content position-absolute">
                                                    <h4 class="tw-text-122 text-white tw-mb-3"><a href="service-details.html">Deep Cleaning</a></h4>
                                                    <p class="text-white tw-mb-6">At Shiny Clean, we believe a clean space is a happy space. with years of experience i residential and commercial cleaning, our mission is to deliver top-quality services </p>
                                                    <div>
                                                        <a class="fw-semibold text-white d-inline-flex align-items-center tw-gap-2 hover-text-main-600" href="#">Read More <span><i class="ph-bold ph-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="house" role="tabpanel" aria-labelledby="house-tab">
                                        <div>
                                            <div class="service-two-thumbs position-relative z-1">
                                                <img class="tw-rounded-lg" src="{{ asset('handyman/frontend/images/thumbs/service-two-thumb4.jpg') }}" alt="thumb">
                                                <div class="service-two-content position-absolute">
                                                    <h4 class="tw-text-122 text-white tw-mb-3"><a href="service-details.html">Deep Cleaning</a></h4>
                                                    <p class="text-white tw-mb-6">At Shiny Clean, we believe a clean space is a happy space. with years of experience i residential and commercial cleaning, our mission is to deliver top-quality services </p>
                                                    <div>
                                                        <a class="fw-semibold text-white d-inline-flex align-items-center tw-gap-2 hover-text-main-600" href="#">Read More <span><i class="ph-bold ph-arrow-up-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img class="service-two-hand position-absolute end-0 z-n1" src="{{ asset('handyman/frontend/images/shapes/service-two-hand.png') }}" alt="hand">
            </div>
        </section>
        <section class="choose-us-two-area py-120 position-relative z-1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-9">
                        <div class="choose-us-two-thumb position-relative z-1 tw-me-10" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <div class="choose-us-two-thumb-1 text-end position-relative z-2">
                                <img src="{{ asset('handyman/frontend/images/thumbs/choose-us-two-thumb1.jpg') }}" alt="thumb">
                            </div>
                            <div class="choose-us-two-thumb-2">
                                <img src="{{ asset('handyman/frontend/images/thumbs/choose-us-two-thumb2.jpg') }}" alt="thumb">
                            </div>
                            <div>
                                <img class="choose-us-two-thumb-shape-1 tw-rounded-xl position-absolute z-n1" src="assets/images/shapes/choose-us-two-thumb-shape1.jpg" alt="shape">
                                <img class="choose-us-two-thumb-shape-2 tw-rounded-xl position-absolute z-n1" src="assets/images/shapes/choose-us-two-thumb-shape2.png" alt="shape">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-10">
                        <div class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <div class="section-wrapper tw-mb-10">
                                <h6 class="section-subtitle tw-text-lg fw-semibold text-uppercase text-main-600 tw-mb-3"><span><img src="assets/images/icons/section-subtitle.svg" alt="subtitle"></span>why choose us</h6>
                                <h2 class="section-title text-heading tw-text-14 fw-semibold tw-char-animation tw-mb-6">Clean Spaces Matter Most –We’re Experts at Making Them</h2>
                                <p>At Servicepro, we are dedicated to providing top-notch service with attention to every detail. Our team of trained professionals takes great pride in their work, going above and beyond to exceed your expectations. whether</p>
                            </div>
                            <div class="choose-us-two-list tw-mb-43">
                                <ul>
                                    <li class="tw-text-505 fw-medium text-heading float-start w-50 tw-mb-4"><span class="text-main-600 tw-text-xl"><i class="ph ph-check-circle"></i></span> Trusted & Vetted Cleaners</li>
                                    <li class="tw-text-505 fw-medium text-heading float-start w-50 tw-mb-4"><span class="text-main-600 tw-text-xl"><i class="ph ph-check-circle"></i></span> Eco-Friendly Products</li>
                                    <li class="tw-text-505 fw-medium text-heading float-start w-50 tw-mb-4"><span class="text-main-600 tw-text-xl"><i class="ph ph-check-circle"></i></span> Satisfaction Guaranteed</li>
                                    <li class="tw-text-505 fw-medium text-heading float-start w-50 tw-mb-4"><span class="text-main-600 tw-text-xl"><i class="ph ph-check-circle"></i></span> Affordable Pricing</li>
                                </ul>
                            </div>
                            <div>
                                <a href="#" class="tw-primary-btn d-inline-flex align-items-center justify-content-center lh-1 fw-semibold bg-main-600 text-white tw-rounded-4xl position-relative z-1">
                                    <span class="btn_inner position-relative z-1 w-100 text-center">
                                        <span class="btn_icon d-inline-flex align-items-center justify-content-center position-absolute end-0 top-0 h-100 z-2 lh-1 text-heading tw-text-lg">
                                            <span class="overflow-hidden position-relative d-inline-flex">
                                                <i class="ph-bold ph-arrow-right"></i>
                                                <i class="ph-bold ph-arrow-right"></i>
                                            </span>
                                        </span>
                                        <span class="btn_text d-inline-flex overflow-hidden text-white">
                                            <span class="d-flex align-items-center tw-transition-5 text-capitalize">More Service</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img class="choose-us-two-shape-1 position-absolute start-0 z-n1" src="{{ asset('handyman/frontend/images/shapes/choose-us-two-shape1.png" alt="shapes') }}">
                <img class="choose-us-two-shape-2 position-absolute bottom-0 start-0 z-n1" src="{{ asset('handyman/frontend/images/shapes/choose-us-two-shape2.png') }}" alt="shapes">
                <img class="choose-us-two-shape-3 position-absolute end-0 z-n1" src="{{ asset('handyman/frontend/images/shapes/choose-us-two-shape3.png') }}" alt="shapes">
            </div>
        </section>
        <section class="work-two-area pt-120 position-relative z-1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9">
                        <div class="section-wrapper tw-mb-30" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <h6 class="section-subtitle tw-text-lg fw-semibold text-uppercase text-main-600 tw-mb-3"><span><img src="{{ asset('handyman/frontend/images/icons/section-subtitle.svg') }}" alt="subtitle"></span>why choose us</h6>
                            <h2 class="about-two-title text-invert text-capitalize fw-medium tw-mb-13">We’re fully committed to providing expert cleaning explore how our service actually works today.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="work-two-wrapper">
                            <div class="work-two-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <div class="work-two-thumb">
                                    <img src="{{ asset('handyman/frontend/images/thumbs/work-two-thumb1.png') }}" alt="thumb">
                                    <div class="work-two-icon">
                                        <span>01</span>
                                    </div>
                                    <div class="work-two-thumb-border"></div>
                                </div>
                                <div class="work-two-content text-center">
                                    <h4 class="work-two-title tw-text-7 fw-medium tw-mb-3">Book Your Service</h4>
                                    <p>Schedule your cleaning online or <br> by phone in minutes.</p>
                                </div>
                            </div>
                            <div class="work-two-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                <div class="work-two-thumb">
                                    <img src="{{ asset('handyman/frontend/images/thumbs/work-two-thumb2.png') }}" alt="thumb">
                                    <div class="work-two-icon">
                                        <span>02</span>
                                    </div>
                                    <div class="work-two-thumb-border"></div>
                                </div>
                                <div class="work-two-content text-center">
                                    <h4 class="work-two-title tw-text-7 fw-medium tw-mb-3">Get Confirmation</h4>
                                    <p>Schedule your cleaning online or <br> by phone in minutes.</p>
                                </div>
                            </div>
                            <div class="work-two-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <div class="work-two-thumb">
                                    <img src="{{ asset('handyman/frontend/images/thumbs/work-two-thumb3.png') }}" alt="thumb">
                                    <div class="work-two-icon">
                                        <span>03</span>
                                    </div>
                                    <div class="work-two-thumb-border"></div>
                                </div>
                                <div class="work-two-content text-center">
                                    <h4 class="work-two-title tw-text-7 fw-medium tw-mb-3">Enjoy Your Clean</h4>
                                    <p>Schedule your cleaning online or <br> by phone in minutes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img class="work-two-shape-1 position-absolute start-0 z-n1" src="{{ asset('handyman/frontend/images/shapes/work-two-shape1.png') }}" alt="shape">
                <img class="work-two-shape-2 position-absolute bottom-0 z-n1" src="{{ asset('handyman/frontend/images/shapes/work-two-shape2.png') }}" alt="shape">
            </div>
        </section>





        <section class="before-after-area py-120 position-relative z-1">
            <div class="container">
                <div class="row align-items-end tw-mb-14">
                    <div class="col-xl-7 col-lg-10">
                        <div class="section-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <h6 class="section-subtitle tw-text-lg fw-semibold text-uppercase text-main-600 tw-mb-3"><span><img src="assets/images/icons/section-subtitle.svg" alt="subtitle"></span>before & after</h6>
                            <h2 class="section-title text-heading tw-text-14 fw-semibold tw-char-animation tw-mb-6">Clean Finish, Happy Homeowners Every Time</h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-8">
                        <div class="before-after-list" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <ul>
                                <li class="tw-text-505 fw-medium text-heading float-start w-50 tw-mb-4"><span class="text-main-600 tw-text-xl"><i class="ph ph-check-circle"></i></span> Trusted & Vetted</li>
                                <li class="tw-text-505 fw-medium text-heading float-start w-50 tw-mb-4"><span class="text-main-600 tw-text-xl"><i class="ph ph-check-circle"></i></span> Eco-Friendly Products</li>
                                <li class="tw-text-505 fw-medium text-heading float-start w-50 tw-mb-4"><span class="text-main-600 tw-text-xl"><i class="ph ph-check-circle"></i></span> Satisfaction</li>
                                <li class="tw-text-505 fw-medium text-heading float-start w-50 tw-mb-4"><span class="text-main-600 tw-text-xl"><i class="ph ph-check-circle"></i></span> Affordable Pricing</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="before-after-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <img src="{{ asset('handyman/frontend/images/thumbs/before-after-thumb1.jpg') }}" alt="thumb">
                            <img src="{{ asset('handyman/frontend/images/thumbs/before-after-thumb2.jpg') }}" alt="thumb">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img class="position-absolute top-0 start-0 z-n1" src="{{ asset('handyman/frontend/images/shapes/before-after-shape1.png') }}" alt="shape">
                <img class="before-after-shape-2 position-absolute end-0 z-n1" src="{{ asset('handyman/frontend/images/shapes/before-after-shape2.png') }}" alt="shape">
            </div>
        </section>


        <section class="counter-area pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="counter-two-heading text-center tw-mb-12 position-relative z-1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <h6 class="tw-text-505 fw-normal bg-white tw-px-8 d-inline-block">Quality service is our promise to every valued customer.</h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="counter-wrapper counter-two-wrapper d-flex align-items-center justify-content-between">
                            <div class="text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <div>
                                    <h2 class="counter-title tw-text-23 fw-medium font-heading text-heading mb-0 lh-1"><span class="font-heading odometer" data-count="35"></span>+</h2>
                                    <p class="counter-paragraph tw-py-2 tw-text-505 fw-medium text-heading bg-white">Years of Experience</p>
                                </div>
                            </div>
                            <div class="text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                <div>
                                    <h2 class="counter-title tw-text-23 fw-medium font-heading text-heading mb-0 lh-1"><span class="font-heading odometer" data-count="75"></span>k</h2>
                                    <p class="counter-paragraph tw-py-2 tw-text-505 fw-medium text-heading bg-white">Years of Experience</p>
                                </div>
                            </div>
                            <div class="text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                <div>
                                    <h2 class="counter-title tw-text-23 fw-medium font-heading text-heading mb-0 lh-1"><span class="font-heading odometer" data-count="135"></span>+</h2>
                                    <p class="counter-paragraph tw-py-2 tw-text-505 fw-medium text-heading bg-white">Years of Experience</p>
                                </div>
                            </div>
                            <div class="text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <div>
                                    <h2 class="counter-title tw-text-23 fw-medium font-heading text-heading mb-0 lh-1"><span class="font-heading odometer" data-count="35"></span>k</h2>
                                    <p class="counter-paragraph tw-py-2 tw-text-505 fw-medium text-heading bg-white">Years of Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <section class="faq-two-area py-120 @@faqipClass">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-8">
                        <div class="faq-two-left" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <div class="section-wrapper">
                                <h6 class="section-subtitle tw-text-lg fw-semibold text-uppercase text-main-600 tw-mb-3"><span><img src="{{ asset('handyman/frontend/images/icons/section-subtitle.svg') }}" alt="subtitle"></span>FAQS</h6>
                                <h2 class="section-title text-heading tw-text-14 fw-semibold tw-char-animation tw-mb-6">Frequently Asked Questions</h2>
                            </div>
                            <div class="faq-two-left-contact bg-white tw-rounded-xl tw-pt-12 tw-pb-15 tw-ps-10 tw-pe-20">
                                <div>
                                    <h4 class="tw-text-7 fw-normal tw-mb-10">Looking For The Cleaning Service In New York? Contact Us Now!</h4>
                                </div>
                                <div>
                                    <a class="bg-main-600 text-white tw-rounded-4xl fw-bold tw-py-2 tw-ps-2 tw-pe-6" href="tel:+1123456-7890"><span class="tw-w-10 tw-h-10 lh-1 d-inline-flex align-items-center justify-content-center rounded-circle bg-white text-heading"><i class="ph ph-phone-call"></i></span> + 1 (123) 456-7890</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="faq-two-wrapper tw-ms-10" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <div class="accordion" id="general_faqaccordion">
                                <div class="accordion-item faq-two-accordion-item">
                                    <h2 class="accordion-header" id="order_one">
                                        <button class="accordion-button faq-two-accordion-button tw-text-lg" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_one" aria-expanded="true" aria-controls="order__collapse_one">
                                            1. What types of cleaning services do you offer?
                                        </button>
                                    </h2>
                                    <div id="order__collapse_one" class="accordion-collapse collapse show" aria-labelledby="order_one" data-bs-parent="#general_faqaccordion">
                                        <div class="accordion-body faq-two-accordion-body">
                                            <p class="tw-text-base fw-medium">Cleaning Service provides a comprehensive and thorough process that goes beyond regular upkeep
                                                regular upkeep. Our experienced team will hand-wipe all surfaces, scrub away build-up, dust hard.
                                                hard-to-reach areas, wash baseboards, and vacuum furniture and upholstery.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item faq-two-accordion-item">
                                    <h2 class="accordion-header" id="order_two">
                                        <button class="accordion-button collapsed faq-two-accordion-button tw-text-lg" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_two" aria-expanded="false" aria-controls="order__collapse_two">
                                            2. Do I need to be home during the cleaning?
                                        </button>
                                    </h2>
                                    <div id="order__collapse_two" class="accordion-collapse collapse" aria-labelledby="order_two" data-bs-parent="#general_faqaccordion">
                                        <div class="accordion-body faq-two-accordion-body">
                                            <p class="tw-text-base fw-medium">Cleaning Service provides a comprehensive and thorough process that goes beyond regular upkeep
                                                regular upkeep. Our experienced team will hand-wipe all surfaces, scrub away build-up, dust hard.
                                                hard-to-reach areas, wash baseboards, and vacuum furniture and upholstery.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item faq-two-accordion-item">
                                    <h2 class="accordion-header" id="order_three">
                                        <button class="accordion-button collapsed faq-two-accordion-button tw-text-lg" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_three" aria-expanded="false" aria-controls="order__collapse_three">
                                            3. What cleaning products do you use?
                                        </button>
                                    </h2>
                                    <div id="order__collapse_three" class="accordion-collapse collapse" aria-labelledby="order_three" data-bs-parent="#general_faqaccordion">
                                        <div class="accordion-body faq-two-accordion-body">
                                            <p class="tw-text-base fw-medium">Cleaning Service provides a comprehensive and thorough process that goes beyond regular upkeep
                                                regular upkeep. Our experienced team will hand-wipe all surfaces, scrub away build-up, dust hard.
                                                hard-to-reach areas, wash baseboards, and vacuum furniture and upholstery.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item faq-two-accordion-item">
                                    <h2 class="accordion-header" id="order_four">
                                        <button class="accordion-button collapsed faq-two-accordion-button tw-text-lg" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_four" aria-expanded="false" aria-controls="order__collapse_four">
                                            4. How do I book a cleaning appointment?
                                        </button>
                                    </h2>
                                    <div id="order__collapse_four" class="accordion-collapse collapse" aria-labelledby="order_four" data-bs-parent="#general_faqaccordion">
                                        <div class="accordion-body faq-two-accordion-body">
                                            <p class="tw-text-base fw-medium">Cleaning Service provides a comprehensive and thorough process that goes beyond regular upkeep
                                                regular upkeep. Our experienced team will hand-wipe all surfaces, scrub away build-up, dust hard.
                                                hard-to-reach areas, wash baseboards, and vacuum furniture and upholstery.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item faq-two-accordion-item">
                                    <h2 class="accordion-header" id="order_five">
                                        <button class="accordion-button collapsed faq-two-accordion-button tw-text-lg" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_five" aria-expanded="false" aria-controls="order__collapse_five">
                                            5. What time do you offer cleaning services?
                                        </button>
                                    </h2>
                                    <div id="order__collapse_five" class="accordion-collapse collapse" aria-labelledby="order_five" data-bs-parent="#general_faqaccordion">
                                        <div class="accordion-body faq-two-accordion-body">
                                            <p class="tw-text-base fw-medium">Cleaning Service provides a comprehensive and thorough process that goes beyond regular upkeep
                                                regular upkeep. Our experienced team will hand-wipe all surfaces, scrub away build-up, dust hard.
                                                hard-to-reach areas, wash baseboards, and vacuum furniture and upholstery.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>








        <section class="testimonial-two-area py-120 position-relative z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-wrapper text-center pb-120" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <h6 class="section-subtitle tw-text-lg fw-semibold text-uppercase text-main-600 tw-mb-3"><span><img src="{{ asset('handyman/frontend/images/icons/section-subtitle.svg') }}" alt="subtitle"></span>Testimonial</h6>
                            <h2 class="section-title text-heading tw-text-14 fw-semibold tw-char-animation tw-mb-6">Empowering Thousands of Users and Enterprises</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="testimonial-two-wrapper quotes page-width position-relative z-1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <div class="testimonial-two-item one quotes-slide slideshow__slide--active" data-slider-slide-index="6" aria-hidden="false" tabindex="-1">
                            <div class="tw-mb-3">
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                            </div>
                            <div class="tw-mb-3">
                                <p class="text-heading">Amazing and highly efficient, they met all my
                                    expectations & more. They were there on time
                                    & left my duplex in pristine conditio. thank you,
                                    cleaning services. Servicepro</p>
                            </div>
                            <div class="d-flex align-items-center tw-gap-4">
                                <div class="testimonial-three-img">
                                    <img src="{{ asset('handyman/frontend/images/thumbs/testi-three-img.png') }}" alt="img">
                                </div>
                                <div>
                                    <h6>Amelia Johnson</h6>
                                    <p>Marketing Director</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-two-item two bg-black quotes-slide slideshow__slide--active" data-slider-slide-index="3" aria-hidden="false" tabindex="-1">
                            <div class="tw-mb-3">
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                            </div>
                            <div class="tw-mb-3">
                                <p class="text-white">Amazing and highly efficient, they met all my
                                    expectations & more. They were there on time
                                    & left my duplex in pristine conditio. thank you,
                                    cleaning services. Servicepro</p>
                            </div>
                            <div class="d-flex align-items-center tw-gap-4">
                                <div class="testimonial-three-img">
                                    <img src="{{ asset('handyman/frontend/images/thumbs/testi-three-img.png') }}" alt="img">
                                </div>
                                <div>
                                    <h6 class="text-white">Amelia Johnson</h6>
                                    <p class="text-white">Marketing Director</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-two-item three quotes-slide slideshow__slide--active" data-slider-slide-index="2" aria-hidden="false" tabindex="-1">
                            <div class="tw-mb-3">
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                            </div>
                            <div class="tw-mb-3">
                                <p class="text-heading">Amazing and highly efficient, they met all my
                                    expectations & more. They were there on time
                                    & left my duplex in pristine conditio. thank you,
                                    cleaning services. Servicepro</p>
                            </div>
                            <div class="d-flex align-items-center tw-gap-4">
                                <div class="testimonial-three-img">
                                    <img src="{{ asset('handyman/frontend/images/thumbs/testi-three-img.png') }}" alt="img">
                                </div>
                                <div>
                                    <h6>Amelia Johnson</h6>
                                    <p>Marketing Director</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-two-item four quotes-slide slideshow__slide--active" data-slider-slide-index="4" aria-hidden="false" tabindex="-1">
                            <div class="tw-mb-3">
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                            </div>
                            <div class="tw-mb-3">
                                <p class="text-heading">Amazing and highly efficient, they met all my
                                    expectations & more. They were there on time
                                    & left my duplex in pristine conditio. thank you,
                                    cleaning services. Servicepro</p>
                            </div>
                            <div class="d-flex align-items-center tw-gap-4">
                                <div class="testimonial-three-img">
                                    <img src="{{ asset('handyman/frontend/images/thumbs/testi-three-img.png') }}" alt="img">
                                </div>
                                <div>
                                    <h6>Amelia Johnson</h6>
                                    <p>Marketing Director</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-two-item five bg-main-600 quotes-slide slideshow__slide--active" data-slider-slide-index="1" aria-hidden="false" tabindex="-1">
                            <div class="tw-mb-3">
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                            </div>
                            <div class="tw-mb-3">
                                <p class="text-heading text-white">Amazing and highly efficient, they met all my
                                    expectations & more. They were there on time
                                    & left my duplex in pristine conditio. thank you,
                                    cleaning services. Servicepro</p>
                            </div>
                            <div class="d-flex align-items-center tw-gap-4">
                                <div class="testimonial-three-img">
                                    <img src="{{ asset('handyman/frontend/images/thumbs/testi-three-img.png') }}" alt="img">
                                </div>
                                <div>
                                    <h6 class="text-white">Amelia Johnson</h6>
                                    <p class="text-white">Marketing Director</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-two-item six quotes-slide slideshow__slide--active" data-slider-slide-index="5" aria-hidden="false" tabindex="-1">
                            <div class="tw-mb-3">
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                                <i class="text-main-two-600 ph ph-star"></i>
                            </div>
                            <div class="tw-mb-3">
                                <p class="text-heading">Amazing and highly efficient, they met all my
                                    expectations & more. They were there on time
                                    & left my duplex in pristine conditio. thank you,
                                    cleaning services. Servicepro</p>
                            </div>
                            <div class="d-flex align-items-center tw-gap-4">
                                <div class="testimonial-three-img">
                                    <img src="{{ asset('handyman/frontend/images/thumbs/testi-three-img.png') }}" alt="img">
                                </div>
                                <div>
                                    <h6>Amelia Johnson</h6>
                                    <p>Marketing Director</p>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
            </div>
            <div>
                <img class="testimonial-two-shape-1 position-absolute start-0 z-n1" src="{{ asset('handyman/frontend/images/shapes/testimonial-two-shape1.png') }}" alt="shape">
                <img class="testimonial-two-shape-2 position-absolute start-0 z-n1" src="{{ asset('handyman/frontend/images/shapes/testimonial-two-shape2.png') }}" alt="shape">
                <img class="testimonial-two-shape-3 position-absolute z-n1" src="{{ asset('handyman/frontend/images/shapes/testimonial-two-shape3.png') }}" alt="shape">
            </div>
        </section>
        <section class="contact-two-area py-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="contact-two-left" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <div class="tw-mb-6">
                                <img class="tw-rounded-lg w-100" src="{{ asset('handyman/frontend/images/thumbs/contact-two-thumb.jpg') }}" alt="thumb">
                            </div>
                            <div class="contact-two-info bg-white tw-rounded-lg tw-py-5 tw-ps-10 tw-pe-6">
                                <div>
                                    <h4 class="tw-text-2xl fw-medium text-main-600 tw-mb-6">100% Satisfaction Guarantee</h4>
                                    <p class="fw-medium tw-w-320-px">Your satisfaction is our top priority! We
                                        proudly offer a 100% Happiness
                                        Guarantee on all our cleanings.</p>
                                </div>
                                <div class="contact-two-info-shape">
                                    <img src="{{ asset('handyman/frontend/images/shapes/contact-two-info-shape.png') }}" alt="shape">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-two-wrapper bg-white tw-py-15 tw-ps-10 tw-pe-5 tw-rounded-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <div class="section-wrapper tw-mb-10">
                                <h6 class="section-subtitle tw-text-lg fw-semibold text-uppercase text-main-600 tw-mb-3"><span><img src="{{ asset('handyman/frontend/images/icons/section-subtitle.svg') }}" alt="subtitle"></span>get in touch</h6>
                                <h2 class="section-title text-heading tw-text-12 fw-semibold tw-char-animation tw-mb-6">Bring Back the
                                    Sparkle to Your Home</h2>
                            </div>
                            <div>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-two-form tw-mb-4">
                                                <label class="tw-mb-3">Your Name*</label>
                                                <div class="position-relative z-1">
                                                    <input type="text" class="form-control focus-outline-0 bg-transparent text-heading tw-placeholder-text-heading tw-py-3 tw-ps-5 tw-pe-15 w-100 tw-rounded-md focus-border-black" placeholder="Your Name*">
                                                    <span class="position-absolute top-50 translate-middle-y end-0 tw-me-4 tw-text-xl"><i class="ph ph-user"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-two-form tw-mb-4">
                                                <label class="tw-mb-3">Your Email*</label>
                                                <div class="position-relative z-1">
                                                    <input type="email" class="form-control focus-outline-0 bg-transparent text-heading tw-placeholder-text-heading tw-py-3 tw-ps-5 tw-pe-15 w-100 tw-rounded-md focus-border-black" placeholder="Your Email*">
                                                    <span class="position-absolute top-50 translate-middle-y end-0 tw-me-4 tw-text-xl"><i class="ph ph-envelope"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-two-form position-relative tw-mb-4">
                                                <label class="tw-mb-3">Service</label>
                                                <div class="nice-select tw-mb-3 tw-text-base tw-px-5 tw-h-122 d-inline-flex align-items-center font-body text-body bg-white tw-rounded-lg w-100"><span class="current">Rooms</span>
                                                    <ul class="list w-100">
                                                        <li class="option">Select service that fits you best</li>
                                                        <li class="option">01</li>
                                                        <li class="option">02</li>
                                                        <li class="option">03</li>
                                                        <li class="option">04</li>
                                                        <li class="option">05</li>
                                                        <li class="option">06</li>
                                                        <li class="option">07</li>
                                                        <li class="option">08</li>
                                                        <li class="option">09</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-two-form tw-mb-4">
                                                <label class="tw-mb-3">Date</label>
                                                <div class="position-relative z-1">
                                                    <input type="date" class="form-control focus-outline-0 bg-transparent text-heading tw-placeholder-text-heading tw-py-3 tw-ps-5 w-100 tw-rounded-md focus-border-black" name="birthday">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-two-form tw-mb-4">
                                                <label class="tw-mb-3">Time</label>
                                                <div class="position-relative z-1">
                                                    <input type="time" id="appt" name="appt" class="form-control focus-outline-0 bg-transparent text-heading tw-placeholder-text-heading tw-py-3 tw-ps-5 w-100 tw-rounded-md focus-border-black">
                                                    <span class="position-absolute top-50 translate-middle-y end-0 tw-me-4 tw-text-xl"><i class="ph ph-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="tw-mt-8">
                                                <button class="w-100 tw-primary-btn d-inline-flex align-items-center justify-content-center lh-1 fw-semibold bg-main-600 text-white tw-rounded-4xl position-relative z-1">
                                                    <span class="btn_inner position-relative z-1 w-100 text-center">
                                                        <span class="btn_icon d-inline-flex align-items-center justify-content-center position-absolute end-0 top-0 h-100 z-2 lh-1 text-heading tw-text-lg">
                                                            <span class="overflow-hidden position-relative d-inline-flex">
                                                                <i class="ph-bold ph-arrow-right"></i>
                                                                <i class="ph-bold ph-arrow-right"></i>
                                                            </span>
                                                        </span>
                                                        <span class="btn_text d-inline-flex overflow-hidden text-white">
                                                            <span class="d-flex align-items-center tw-transition-5 text-capitalize">Book Now</span>
                                                        </span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>



                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta-two-area position-relative z-1 overflow-hidden">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <div class="section-wrapper text-center tw-mb-10">
                                <h6 class="section-subtitle tw-text-lg fw-semibold text-uppercase text-main-600 tw-mb-3"><span><img src="{{ asset('handyman/frontend/images/icons/section-subtitle.svg') }}" alt="subtitle"></span>Book an appointment</h6>
                                <h2 class="section-title text-heading tw-text-14 fw-semibold tw-char-animation tw-mb-6">We professionally aim to offer excellent cleaning service for every client.</h2>
                                <p class="fw-medium tw-w-680-px m-auto">At Servicepro, our commitment to providing exceptional cleaning services is unwavering. With a team of highly skilled professionals, </p>
                            </div>
                            <div>
                                <a href="contact.html" class="tw-primary-btn d-inline-flex align-items-center justify-content-center lh-1 fw-semibold bg-main-600 text-white tw-rounded-4xl position-relative z-1">
                                    <span class="btn_inner position-relative z-1 w-100 text-center">
                                        <span class="btn_icon d-inline-flex align-items-center justify-content-center position-absolute end-0 top-0 h-100 z-2 lh-1 text-heading tw-text-lg">
                                            <span class="overflow-hidden position-relative d-inline-flex">
                                                <i class="ph-bold ph-arrow-right"></i>
                                                <i class="ph-bold ph-arrow-right"></i>
                                            </span>
                                        </span>
                                        <span class="btn_text d-inline-flex overflow-hidden text-white">
                                            <span class="d-flex align-items-center tw-transition-5 text-capitalize">Book Appointment</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img class="cta-two-shape-1 position-absolute z-n1" src="{{ asset('handyman/frontend/images/shapes/cta-two-shape1.png') }}" alt="shape">
                <img class="cta-two-shape-2 position-absolute z-n1" src="{{ asset('handyman/frontend/images/shapes/cta-two-shape2.png') }}" alt="shape">
                <img class="cta-two-shape-3 position-absolute z-n1" src="{{ asset('handyman/frontend/images/shapes/cta-two-shape3.png') }}" alt="shape">
                <img class="cta-two-shape-4 position-absolute z-n1" src="{{ asset('handyman/frontend/images/shapes/cta-two-shape4.png') }}" alt="shape">
                <img class="cta-two-shape-5 position-absolute z-n1" src="{{ asset('handyman/frontend/images/shapes/cta-two-shape5.png') }}" alt="shape">
                <img class="cta-two-shape-6 position-absolute z-n1" src="{{ asset('handyman/frontend/images/shapes/cta-two-shape6.png') }}" alt="shape">
                <img class="cta-two-shape-7 position-absolute top-50 translate-middle-y start-0 z-n1" src="{{ asset('handyman/frontend/images/shapes/cta-two-shape7.png') }}" alt="shape">
            </div>
        </section>



        <section class="maquee-area maquee-two-area tw-pb-25 overflow-hidden position-relative z-2">
            <div class="maquee-slider">
                <div class="swiper maquee-active d-flex align-items-center">
                    <div class="swiper-wrapper maquee-transition">
                        <!-- slide 1 -->
                        <div class="maquee-box w-auto swiper-slide">
                            <div class="maquee-content">
                                <h5 class="maquee-title maquee-two-title text-capitalize fw-semibold lh-1">Bring Back the Sparkle to Your Home</h5>
                            </div>
                        </div>
                        <!-- slide 2 -->
                        <div class="maquee-box w-auto swiper-slide">
                            <div class="maquee-content">
                                <h5 class="maquee-title maquee-two-title text-capitalize fw-semibold lh-1">Bring Back the Sparkle to Your Home</h5>
                            </div>
                        </div>
                        <!-- slide 3 -->
                        <div class="maquee-box w-auto swiper-slide">
                            <div class="maquee-content">
                                <h5 class="maquee-title maquee-two-title text-capitalize fw-semibold lh-1">Bring Back the Sparkle to Your Home</h5>
                            </div>
                        </div>
                        <!-- slide 4 -->
                        <div class="maquee-box w-auto swiper-slide">
                            <div class="maquee-content">
                                <h5 class="maquee-title maquee-two-title text-capitalize fw-semibold lh-1">Bring Back the Sparkle to Your Home</h5>
                            </div>
                        </div>
                        <!-- slide 5 -->
                        <div class="maquee-box w-auto swiper-slide">
                            <div class="maquee-content">
                                <h5 class="maquee-title maquee-two-title text-capitalize fw-semibold lh-1">Bring Back the Sparkle to Your Home</h5>
                            </div>
                        </div>
                        <!-- slide 6 -->
                        <div class="maquee-box w-auto swiper-slide">
                            <div class="maquee-content">
                                <h5 class="maquee-title maquee-two-title text-capitalize fw-semibold lh-1">Bring Back the Sparkle to Your Home</h5>
                            </div>
                        </div>
                        <!-- slide 5 -->
                        <div class="maquee-box w-auto swiper-slide">
                            <div class="maquee-content">
                                <h5 class="maquee-title maquee-two-title text-capitalize fw-semibold lh-1">Bring Back the Sparkle to Your Home</h5>
                            </div>
                        </div>
                        <!-- slide 6 -->
                        <div class="maquee-box w-auto swiper-slide">
                            <div class="maquee-content">
                                <h5 class="maquee-title maquee-two-title text-capitalize fw-semibold lh-1">Bring Back the Sparkle to Your Home</h5>
                            </div>
                        </div>
                        <!-- slide 6 -->
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-two-area py-120 position-relative z-1">
            <div class="container">
                <div class="row align-items-center tw-mb-10">
                    <div class="col-xl-5">
                        <div class="section-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <h6 class="section-subtitle tw-text-lg fw-semibold text-uppercase text-main-600 tw-mb-3"><span><img src="{{ asset('handyman/frontend/images/icons/section-subtitle.svg') }}" alt="subtitle"></span>News & Blogs</h6>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="section-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <h2 class="section-title text-heading tw-text-14 fw-semibold tw-char-animation tw-mb-6">Cleaning Service Get Latest News & Updates</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <ul class="nav nav-tabs blog-two-nav-tabs d-flex flex-column sticky-item" id="myTab" role="tablist">
                            <li class="blog-two-nav-item tw-mb-5 nav-item" role="presentation">
                                <button class="blog-two-nav-link nav-link text-heading fw-bold tw-rounded-xl w-100 hover-text-heading active" id="hometwo-tab" data-bs-toggle="tab" data-bs-target="#hometwo" type="button" role="tab" aria-controls="hometwo" aria-selected="true">One Article</button>
                            </li>
                            <li class="blog-two-nav-item tw-mb-5 nav-item" role="presentation">
                                <button class="blog-two-nav-link nav-link text-heading fw-bold tw-rounded-xl w-100 hover-text-heading" id="profiletwo-tab" data-bs-toggle="tab" data-bs-target="#profiletwo" type="button" role="tab" aria-controls="profiletwo" aria-selected="false">Two Article</button>
                            </li>
                            <li class="blog-two-nav-item tw-mb-5 nav-item" role="presentation">
                                <button class="blog-two-nav-link nav-link text-heading fw-bold tw-rounded-xl w-100 hover-text-heading" id="messagestwo-tab" data-bs-toggle="tab" data-bs-target="#messagestwo" type="button" role="tab" aria-controls="messagestwo" aria-selected="false">Three Article</button>
                            </li>
                            <li class="blog-two-nav-item tw-mb-5 nav-item" role="presentation">
                                <button class="blog-two-nav-link nav-link text-heading fw-bold tw-rounded-xl w-100 hover-text-heading" id="settingstwo-tab" data-bs-toggle="tab" data-bs-target="#settingstwo" type="button" role="tab" aria-controls="settingstwo" aria-selected="false">Four Article</button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="tab-content">
                            <div class="tab-pane active" id="hometwo" role="tabpanel" aria-labelledby="hometwo-tab">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="blog-wrapper blog-two-wrapper main tw-ms-25 tw-p-705 tw-rounded-lg">
                                            <div class="blog-main-thumb blog-two-thumb position-relative overflow-hidden tw-rounded-2xl tw-mb-8">
                                                <img class="w-img w-100 tw-rounded-lg tw-transition-5" src="{{ asset('handyman/frontend/images/thumbs/blog-two-thumb1.jpg') }}" alt="blog">
                                                <img class="w-img w-100 tw-rounded-lg tw-transition-5" src="{{ asset('handyman/frontend/images/thumbs/blog-two-thumb1.jpg') }}" alt="blog">
                                                <a class="blog-card-image-link d-flex align-items-center justify-content-center w-100 h-100 position-absolute z-1 top-0 start-0" href="blog-details.html"></a>
                                            </div>
                                            <div>
                                                <div class="blog-meta tw-mb-6">
                                                    <ul class="d-flex align-items-center tw-gap-5">
                                                        <li class="d-inline-flex align-items-center tw-gap-3 tw-text-xl"><span class="text-main-600 tw-text-xl"><i class="ph-bold ph-user-plus"></i></span> By Admin</li>
                                                        <li class="d-inline-flex align-items-center tw-gap-3 tw-text-xl"><span class="text-main-600 tw-text-xl"><i class="ph-bold ph-calendar"></i></span> 23, August 2026</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h4 class="blog-two-title tw-text-9 fw-medium tw-mb-10"><a href="blog-details.html">Why Business Cleaning Enhances Workplace Morale Quickly</a></h4>
                                                </div>
                                                <div>
                                                    <a href="blog-details.html" class="tw-primary-btn d-inline-flex align-items-center justify-content-center lh-1 fw-semibold bg-main-600 text-white tw-rounded-4xl position-relative z-1">
                                                        <span class="btn_inner position-relative z-1 w-100 text-center">
                                                            <span class="btn_icon d-inline-flex align-items-center justify-content-center position-absolute end-0 top-0 h-100 z-2 lh-1 text-heading tw-text-lg">
                                                                <span class="overflow-hidden position-relative d-inline-flex">
                                                                    <i class="ph-bold ph-arrow-right"></i>
                                                                    <i class="ph-bold ph-arrow-right"></i>
                                                                </span>
                                                            </span>
                                                            <span class="btn_text d-inline-flex overflow-hidden text-white">
                                                                <span class="d-flex align-items-center tw-transition-5 text-capitalize">Get A Free Quote</span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="profiletwo" role="tabpanel" aria-labelledby="profiletwo-tab">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="blog-wrapper blog-two-wrapper main tw-ms-25 tw-p-705 tw-rounded-lg">
                                            <div class="blog-main-thumb blog-two-thumb position-relative overflow-hidden tw-rounded-2xl tw-mb-8">
                                                <img class="w-img w-100 tw-rounded-lg tw-transition-5" src="{{ asset('handyman/frontend/images/thumbs/blog-two-thumb2.jpg') }}" alt="blog">
                                                <img class="w-img w-100 tw-rounded-lg tw-transition-5" src="{{ asset('handyman/frontend/images/thumbs/blog-two-thumb2.jpg') }}" alt="blog">
                                                <a class="blog-card-image-link d-flex align-items-center justify-content-center w-100 h-100 position-absolute z-1 top-0 start-0" href="blog-details.html"></a>
                                            </div>
                                            <div>
                                                <div class="blog-meta tw-mb-6">
                                                    <ul class="d-flex align-items-center tw-gap-5">
                                                        <li class="d-inline-flex align-items-center tw-gap-3 tw-text-xl"><span class="text-main-600 tw-text-xl"><i class="ph-bold ph-user-plus"></i></span> By Admin</li>
                                                        <li class="d-inline-flex align-items-center tw-gap-3 tw-text-xl"><span class="text-main-600 tw-text-xl"><i class="ph-bold ph-calendar"></i></span> 23, August 2026</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h4 class="blog-two-title tw-text-9 fw-medium tw-mb-10"><a href="blog-details.html">How Professional Cleaning Boosts Employee Morale Instantly</a></h4>
                                                </div>
                                                <div>
                                                    <a href="blog-details.html" class="tw-primary-btn d-inline-flex align-items-center justify-content-center lh-1 fw-semibold bg-main-600 text-white tw-rounded-4xl position-relative z-1">
                                                        <span class="btn_inner position-relative z-1 w-100 text-center">
                                                            <span class="btn_icon d-inline-flex align-items-center justify-content-center position-absolute end-0 top-0 h-100 z-2 lh-1 text-heading tw-text-lg">
                                                                <span class="overflow-hidden position-relative d-inline-flex">
                                                                    <i class="ph-bold ph-arrow-right"></i>
                                                                    <i class="ph-bold ph-arrow-right"></i>
                                                                </span>
                                                            </span>
                                                            <span class="btn_text d-inline-flex overflow-hidden text-white">
                                                                <span class="d-flex align-items-center tw-transition-5 text-capitalize">Get A Free Quote</span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="messagestwo" role="tabpanel" aria-labelledby="messagestwo-tab">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="blog-wrapper blog-two-wrapper main tw-ms-25 tw-p-705 tw-rounded-lg">
                                            <div class="blog-main-thumb blog-two-thumb position-relative overflow-hidden tw-rounded-2xl tw-mb-8">
                                                <img class="w-img w-100 tw-rounded-lg tw-transition-5" src="{{ asset('handyman/frontend/images/thumbs/blog-two-thumb3.jpg') }}" alt="blog">
                                                <img class="w-img w-100 tw-rounded-lg tw-transition-5" src="{{ asset('handyman/frontend/images/thumbs/blog-two-thumb3.jpg') }}" alt="blog">
                                                <a class="blog-card-image-link d-flex align-items-center justify-content-center w-100 h-100 position-absolute z-1 top-0 start-0" href="blog-details.html"></a>
                                            </div>
                                            <div>
                                                <div class="blog-meta tw-mb-6">
                                                    <ul class="d-flex align-items-center tw-gap-5">
                                                        <li class="d-inline-flex align-items-center tw-gap-3 tw-text-xl"><span class="text-main-600 tw-text-xl"><i class="ph-bold ph-user-plus"></i></span> By Admin</li>
                                                        <li class="d-inline-flex align-items-center tw-gap-3 tw-text-xl"><span class="text-main-600 tw-text-xl"><i class="ph-bold ph-calendar"></i></span> 23, August 2026</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h4 class="blog-two-title tw-text-9 fw-medium tw-mb-10"><a href="blog-details.html">The Fast Link Between Office Cleanliness and Team Motivation</a></h4>
                                                </div>
                                                <div>
                                                    <a href="blog-details.html" class="tw-primary-btn d-inline-flex align-items-center justify-content-center lh-1 fw-semibold bg-main-600 text-white tw-rounded-4xl position-relative z-1">
                                                        <span class="btn_inner position-relative z-1 w-100 text-center">
                                                            <span class="btn_icon d-inline-flex align-items-center justify-content-center position-absolute end-0 top-0 h-100 z-2 lh-1 text-heading tw-text-lg">
                                                                <span class="overflow-hidden position-relative d-inline-flex">
                                                                    <i class="ph-bold ph-arrow-right"></i>
                                                                    <i class="ph-bold ph-arrow-right"></i>
                                                                </span>
                                                            </span>
                                                            <span class="btn_text d-inline-flex overflow-hidden text-white">
                                                                <span class="d-flex align-items-center tw-transition-5 text-capitalize">Get A Free Quote</span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="settingstwo" role="tabpanel" aria-labelledby="settingstwo-tab">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="blog-wrapper blog-two-wrapper main tw-ms-25 tw-p-705 tw-rounded-lg">
                                            <div class="blog-main-thumb blog-two-thumb position-relative overflow-hidden tw-rounded-2xl tw-mb-8">
                                                <img class="w-img w-100 tw-rounded-lg tw-transition-5" src="{{ asset('handyman/frontend/images/thumbs/blog-two-thumb4.jpg') }}" alt="blog">
                                                <img class="w-img w-100 tw-rounded-lg tw-transition-5" src="{{ asset('handyman/frontend/images/thumbs/blog-two-thumb4.jpg') }}" alt="blog">
                                                <a class="blog-card-image-link d-flex align-items-center justify-content-center w-100 h-100 position-absolute z-1 top-0 start-0" href="blog-details.html"></a>
                                            </div>
                                            <div>
                                                <div class="blog-meta tw-mb-6">
                                                    <ul class="d-flex align-items-center tw-gap-5">
                                                        <li class="d-inline-flex align-items-center tw-gap-3 tw-text-xl"><span class="text-main-600 tw-text-xl"><i class="ph-bold ph-user-plus"></i></span> By Admin</li>
                                                        <li class="d-inline-flex align-items-center tw-gap-3 tw-text-xl"><span class="text-main-600 tw-text-xl"><i class="ph-bold ph-calendar"></i></span> 23, August 2025</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h4 class="blog-two-title tw-text-9 fw-medium tw-mb-10"><a href="blog-details.html">Why a Clean Workplace Sparks Better Morale and Productivity</a></h4>
                                                </div>
                                                <div>
                                                    <a href="blog-details.html" class="tw-primary-btn d-inline-flex align-items-center justify-content-center lh-1 fw-semibold bg-main-600 text-white tw-rounded-4xl position-relative z-1">
                                                        <span class="btn_inner position-relative z-1 w-100 text-center">
                                                            <span class="btn_icon d-inline-flex align-items-center justify-content-center position-absolute end-0 top-0 h-100 z-2 lh-1 text-heading tw-text-lg">
                                                                <span class="overflow-hidden position-relative d-inline-flex">
                                                                    <i class="ph-bold ph-arrow-right"></i>
                                                                    <i class="ph-bold ph-arrow-right"></i>
                                                                </span>
                                                            </span>
                                                            <span class="btn_text d-inline-flex overflow-hidden text-white">
                                                                <span class="d-flex align-items-center tw-transition-5 text-capitalize">Get A Free Quote</span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img class="blog-two-shape-1 position-absolute start-0 z-n1" src="{{ asset('handyman/frontend/images/shapes/blog-two-shape1.png') }}" alt="shape">
                <img class="blog-two-shape-2 position-absolute top-50 translate-middle-y start-0 z-n1" src="{{ asset('handyman/frontend/images/shapes/blog-two-shape2.png') }}" alt="shape">
                <img class="blog-two-shape-3 position-absolute z-n1" src="{{ asset('handyman/frontend/images/shapes/blog-two-shape3.png') }}" alt="shape">
            </div>
        </section>




        <!-- ==================== Footer Start Here ==================== -->
        <footer class="footer footer-two-area position-relative z-1 overflow-hidden">
            <div class="container">
                <div class="footer-two-border position-relative z-1">
                    <div class="row tw-pb-10">
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="footer-two-col-1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <div class="tw-mb-6">
                                    <a href="{{ url('/') }}"><img src="{{ asset('handyman/frontend/images/logo/logo.png') }}" alt="logo"></a>
                                </div>
                                <div>
                                    <h4 class="tw-text-8 fw-medium text-heading tw-mb-6">Australia</h4>
                                    <p class="tw-w-244-px fw-medium">ServicePro World House,
                                        Level 7, 05 Jones St, NSW, 2060</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="footer-two-col-2 tw-mt-23" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                <div>
                                    <h4 class="tw-text-8 fw-medium text-heading tw-mb-6">Dubai</h4>
                                    <p class="tw-w-244-px fw-medium">Sheikh Mohammed bin salah, #234 B - Downtown - Dubai</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="footer-two-col-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <h4 class="tw-text-2xl fw-medium text-heading tw-mb-10">Useful Link</h4>
                                <ul class="d-flex flex-column tw-gap-5">
                                    <li>
                                        <a href="about.html" class="text-heading hover-text-main-600 d-inline-flex align-items-center tw-gap-2">About Company</a>
                                    </li>
                                    <li>
                                        <a href="appointment.html" class="text-heading hover-text-main-600 d-inline-flex align-items-center tw-gap-2"> Appointment</a>
                                    </li>
                                    <li>
                                        <a href="service.html" class="text-heading hover-text-main-600 d-inline-flex align-items-center tw-gap-2"> Our Services</a>
                                    </li>
                                    <li>
                                        <a href="blog.html" class="text-heading hover-text-main-600 d-inline-flex align-items-center tw-gap-2"> Latest Blog</a>
                                    </li>
                                    <li class="mb-0">
                                        <a href="contact.html" class="text-heading hover-text-main-600 d-inline-flex align-items-center tw-gap-2"> Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="footer-two-col-4 tw-ms-10" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                                <h4 class="tw-text-2xl fw-medium text-heading tw-mb-10">Services</h4>
                                <ul class="d-flex flex-column tw-gap-5">
                                    <li>
                                        <a href="#" class="text-heading hover-text-main-600 d-inline-flex align-items-center tw-gap-2"> House cleaning</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-heading hover-text-main-600 d-inline-flex align-items-center tw-gap-2"> Office cleaning</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-heading hover-text-main-600 d-inline-flex align-items-center tw-gap-2"> Apartment cleaning</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-heading hover-text-main-600 d-inline-flex align-items-center tw-gap-2"> Deep cleaning</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-heading hover-text-main-600 d-inline-flex align-items-center tw-gap-2"> Recurring cleaning</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div>
                                <h4 class="tw-text-xl fw-normal text-heading tw-mb-10">Subscribe to Newsletter</h4>
                                <form action="#" class="footer-two-form position-relative form-submit d-flex tw-gap-3 tw-mb-8 overflow-hidden tw-me-20">
                                    <input type="email" class="form-control bg-transparent shadow-none border border-neutral-700 text-heading tw-ps-6 tw-pe-13 focus-border-main-600 tw-h-15 tw-placeholder-text-neutral-900 focus-tw-placeholder-text-hidden tw-rounded-xl tw-placeholder-transition-2" placeholder="Enter Email Address" required>
                                    <div class="footer-form-button position-absolute top-50 end-0 translate-middle-y">
                                        <button class="bg-main-600 h-100 tw-py-5 tw-px-10 text-white tw-rounded-xl tw-transition-3">
                                            <span>Subscribe <i class="ph ph-arrow-right"></i></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="footer-two-info d-flex align-items-center justify-content-between tw-ms-10">
                                <div>
                                    <a class="text-heading tw-text-2xl fw-medium hover-text-main-600" href="mailto:Info@Servicepro">Info@Servicepro</a>
                                </div>
                                <div>
                                    <a class="text-heading tw-text-2xl fw-medium hover-text-main-600" href="tel:+4755574901">+47 555 74 901</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- bottom Footer -->
                <div class="tw-py-6">
                    <div class="container container-two">
                        <div class="footer-copyright-wrapper d-flex align-items-center justify-content-between tw-gap-4 flex-wrap">
                            <ul class="footer-social footer-two-social d-flex align-items-center tw-gap-4">
                                <li>
                                    <a href="https://www.facebook.com" class="tw-w-9 tw-h-9 lh-1 d-inline-flex align-items-center justify-content-center tw-text-base text-heading rounded-circle hover-bg-main-600 hover-text-heading"><i class="ph-bold ph-facebook-logo"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com" class="tw-w-9 tw-h-9 lh-1 d-inline-flex align-items-center justify-content-center tw-text-base text-heading rounded-circle hover-bg-main-600 hover-text-heading"><i class="ph-bold ph-twitter-logo"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com" class="tw-w-9 tw-h-9 lh-1 d-inline-flex align-items-center justify-content-center tw-text-base text-heading rounded-circle hover-bg-main-600 hover-text-heading"><i class="ph-bold ph-instagram-logo"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.com" class="tw-w-9 tw-h-9 lh-1 d-inline-flex align-items-center justify-content-center tw-text-base text-heading rounded-circle hover-bg-main-600 hover-text-heading"><i class="ph-bold ph-pinterest-logo"></i></a>
                                </li>
                            </ul>
                            <p class="text-heading text-line-1 fw-normal"><a href="index.html" class="fw-semibold text-main-600 hover-underline hover-text-heading">© Agenk</a> 2025 . All rights reserved, Wowtheme7</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img class="footer-two-shape-1 position-absolute end-0 z-n1" src="{{ asset('handyman/frontend/images/shapes/footer-two-shape1.png') }}" alt="shape">
            </div>
        </footer>
        <!-- ==================== Footer End Here ==================== -->
    </div>
    <!-- Jquery js -->
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