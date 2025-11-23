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