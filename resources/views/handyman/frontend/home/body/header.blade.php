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