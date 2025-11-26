<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('Handyman | Вход в аккаунт') }}</title>
    <link href="{{ asset('handyman/frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('handyman/frontend/admin/assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('handyman/frontend/admin/assets/css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('handyman/frontend/admin/assets/css/output.css') }}" rel="stylesheet">
    <link href="{{ asset('handyman/frontend/admin/assets/css/style.css') }}" rel="stylesheet">
  </head>
  <body>
    <section class="bg-white dark:bg-darkblack-500">
        <div class="flex flex-col lg:flex-row justify-between min-h-screen">
            <!-- Left -->
            <div class="lg:w-1/2 px-5 xl:pl-12 pt-10">
                <header>
                    <a href="{{ route('dashboard') }}"><h3 style="font-size: 20px; color: green; font-weight: 600;">{{ __('HandyMan') }}</h3></a>
                </header>
                <div class="max-w-[450px] m-auto pt-24 pb-16">
                    <header class="text-center mb-8">
                        <h2 class="text-bgray-900 dark:text-white text-4xl font-semibold font-poppins mb-2">{{ __('Вход в аккаунт') }}</h2>
                    </header>
                    <div class="relative mt-6 mb-5">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300 dark:border-darkblack-400"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="bg-white dark:bg-darkblack-500 px-2 text-base text-bgray-600">{{ __('Ваша почта и пароль') }}</span>
                        </div>
                    </div>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <input type="email" name="email" id="email" class="text-bgray-800 text-base border border-bgray-300 dark:border-darkblack-400 dark:bg-darkblack-500 dark:text-white h-14 w-full focus:border-success-300 focus:ring-0 rounded-lg px-4 py-3.5 placeholder:text-bgray-500 placeholder:text-base" placeholder="{{ __('Введите email') }}">
                        </div>
                        <div class="mb-6 relative">
                            <input type="password" name="password" id="password" class="text-bgray-800 text-base border border-bgray-300 dark:border-darkblack-400 dark:bg-darkblack-500 dark:text-white h-14 w-full focus:border-success-300 focus:ring-0 rounded-lg px-4 py-3.5 placeholder:text-bgray-500 placeholder:text-base" placeholder="{{ __('Введите пароль')}}">
                        </div>
                        <div class="flex justify-between mb-7">
                            <div class="flex items-center space-x-3">
                                <input type="checkbox" class="w-5 h-5 dark:bg-darkblack-500 focus:ring-transparent rounded-full border border-bgray-300 focus:accent-success-300 text-success-300" name="remember" id="remember">
                                <label for="remember" class="text-bgray-900 dark:text-white text-base font-semibold">{{ __('Запомнить')}}</label>
                            </div>
                        <div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" data-target="#multi-step-modal" class="modal-open text-success-300 font-semibold text-base underline">{{ __('Забыли пароль?') }}</a>
                        @endif
                    </div>
                </div>
                <button class="py-3.5 flex items-center justify-center text-white font-bold bg-success-300 hover:bg-success-400 transition-all rounded-lg w-full">{{ __('Войти') }}</button>
            </form>
            <p class="text-center text-bgray-900 dark:text-bgray-50 text-base font-medium pt-7">
                {{ __('У Вас ещё нет своего аккаунта?') }}&nbsp;
                <a href="{{ route('register') }}" class="font-semibold underline"> {{ __('Зарегистрируйтесь') }}</a>
            </p>
            <p class="text-bgray-600 dark:text-white text-center text-sm mt-6">
              {{ __('@ 2025 Handyman. All Right Reserved.') }}
            </p>
        </div>
        </div>
        <!-- Right -->
        <div class="lg:w-1/2 lg:block hidden bg-[#F6FAFF] dark:bg-darkblack-600 p-20 relative">
          <ul>
            <li class="absolute top-10 left-8">
              <img src="{{ asset('handyman/frontend/admin/assets/images/shapes/square.svg') }}" alt="{{ __('Square')}}">
            </li>
            <li class="absolute right-12 top-14">
              <img src="{{ asset('handyman/frontend/admin/assets/images/shapes/vline.svg') }}" alt="{{ __('Vline')}}">
            </li>
            <li class="absolute bottom-7 left-8">
              <img src="{{ asset('handyman/frontend/admin/assets/images/shapes/dotted.svg') }}" alt="{{ __('Dotted') }}">
            </li>
          </ul>
          <div>
            <img src="{{ asset('handyman/frontend/admin/assets/images/illustration/signin.svg') }}" alt="{{ __('Sign-in') }}">
          </div>
          <div>
            <div class="text-center max-w-lg px-1.5 m-auto"></div>
          </div>
        </div>
      </div>
    </section>
    <div class="modal hidden fixed inset-0 z-50 overflow-y-auto flex items-center justify-center" id="multi-step-modal">
      <div class="modal-overlay absolute inset-0 bg-gray-500 opacity-75 dark:bg-bgray-900 dark:opacity-50"></div>  
    </div>
    <script src="{{ asset('handyman/frontend/admin/assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('handyman/frontend/admin/assets/js/aos.js') }}"></script>
    <script src="{{ asset('handyman/frontend/admin/assets/js/slick.min.js')}}"></script>
    <script>AOS.init()</script>
    <script src="{{ asset('handyman/frontend/admin/assets/js/chart.js')}}"></script>
    <script src="{{ asset('handyman/frontend/admin/assets/js/main.js')}}"></script>
  </body>
</html>