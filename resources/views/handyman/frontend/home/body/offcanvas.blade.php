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