<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets2/css/bootstrap_custom.css') }}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="{{ asset('assets2/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/styles.css') }}">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
          integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    {{--<script src="//code.jivosite.com/widget/lBR9ssOUXB" async></script>--}}


</head>

<body>
<div class="d-flex wrapper" id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper" class="sidebar-wrapper">
        <div class="sidebar-heading">
            <a href="{{ route('index') }}">
                {{--            <h3>{{ env('APP_NAME') }}</h3>--}}
                <img  src="{{ asset('img2/logo2.png') }}" alt="logo" height="50">
            </a>
        </div>
        <nav class="sidebar mb-4">
            <ul class="nav flex-column" id="nav_accordion">
                <li class="nav-item">
                    <a class="nav-link d-flex gap-2 align-items-center {{ Route::is('user.dashboard') ? 'active' : '' }}"
                       href="{{ route('user.dashboard') }}">
                        <img src="{{ asset('assets2/img/dashboard_icon.png') }}" alt="">
                        <span class="fw-semibold">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex gap-2 align-items-center {{ Route::is('user.deposit') ? 'active' : '' }}"
                       href="{{ route('user.deposit') }}">
                    <span class="material-symbols-outlined fw-lighter">
                        account_balance_wallet
                    </span>
                        <span class="fw-semibold">Deposit</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex gap-2 align-items-center {{ Route::is('user.withdrawal') ? 'active' : '' }}"
                       href="{{ route('user.withdrawal') }}">
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16"><path fill="currentColor" d="m8 0l2 3H9v2H7V3H6zm7 7v8H1V7zm1-1H0v10h16z"/><path fill="currentColor" d="M8 8a3 3 0 1 1 0 6h5v-1h1V9h-1V8zm-3 3a3 3 0 0 1 3-3H3v1H2v4h1v1h5a3 3 0 0 1-3-3"/></svg>
                        <span class="fw-semibold">Withdraw</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex gap-2 align-items-center {{ Route::is('user.trade.index') ? 'active' : '' }}" href="{{ route('user.trade.index') }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 19h16M4 15l4-6l4 2l4-5l4 4"/></svg>
                        <span class="fw-semibold">Trade Room</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex gap-2 align-items-center {{ Route::is('user.tradeSignal') ? 'active' : '' }}" href="{{ route('user.tradeSignal') }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M3.261 2.186c.337-.274.829-.154 1.044.223c.197.344.09.777-.21 1.035A5.99 5.99 0 0 0 2 8a5.99 5.99 0 0 0 2.095 4.556c.3.258.407.69.21 1.034c-.215.378-.707.498-1.044.223A7.49 7.49 0 0 1 .5 8a7.49 7.49 0 0 1 2.761-5.814m8.434.223c-.197.344-.09.777.21 1.035A5.99 5.99 0 0 1 14 8a5.99 5.99 0 0 1-2.095 4.556c-.3.258-.407.69-.21 1.034c.215.378.707.498 1.044.223A7.49 7.49 0 0 0 15.5 8a7.49 7.49 0 0 0-2.761-5.814c-.337-.274-.829-.154-1.044.223M4.759 4.878c.315-.327.837-.21 1.062.184c.19.33.097.744-.144 1.04A3 3 0 0 0 5 8c0 .72.254 1.381.677 1.898c.241.296.333.71.144 1.04c-.225.394-.747.511-1.062.184A4.5 4.5 0 0 1 3.5 8c0-1.213.48-2.313 1.26-3.122m5.42.184c-.19.33-.098.744.144 1.04C10.746 6.618 11 7.28 11 8s-.254 1.381-.677 1.898c-.242.296-.333.71-.144 1.04c.225.394.747.511 1.062.184A4.5 4.5 0 0 0 12.5 8c0-1.213-.48-2.313-1.26-3.122c-.314-.327-.836-.21-1.061.184M8 9.5a1.5 1.5 0 1 0 0-3a1.5 1.5 0 0 0 0 3" clip-rule="evenodd"/></svg>
                        <span class="fw-semibold">Signal</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex gap-2 align-items-center {{ Route::is('user.copytrade.index') ? 'active' : '' }}" href="{{ route('user.copytrade.index') }}">
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none"><path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M19 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-2v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h2V4a2 2 0 0 1 2-2zm-9 13H8a1 1 0 0 0-.117 1.993L8 17h2a1 1 0 0 0 .117-1.993zm9-11H9v2h6a2 2 0 0 1 2 2v8h2zm-7 7H8a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2"/></g></svg>
                        <span class="fw-semibold">Copy Trader</span>
                    </a>
                </li>
                <li>
                    <hr/>
                </li>

                <li class="nav-item">
                    <a class="nav-link d-flex gap-2 align-items-center {{ Route::is('user.cryptoExchange') ? 'active' : '' }}"
                       href="{{ route('user.cryptoExchange') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 256 256">
                            <defs>
                                <linearGradient id="logosBitcoin0" x1="49.973%" x2="49.973%" y1="-.024%" y2="99.99%">
                                    <stop offset="0%" stop-color="#f9aa4b"/>
                                    <stop offset="100%" stop-color="#f7931a"/>
                                </linearGradient>
                            </defs>
                            <path fill="url(#logosBitcoin0)"
                                  d="M252.171 158.954c-17.102 68.608-86.613 110.314-155.123 93.211c-68.61-17.102-110.316-86.61-93.213-155.119C20.937 28.438 90.347-13.268 158.957 3.835c68.51 17.002 110.317 86.51 93.214 155.119"/>
                            <path fill="#fff"
                                  d="M188.945 112.05c2.5-17-10.4-26.2-28.2-32.3l5.8-23.1l-14-3.5l-5.6 22.5c-3.7-.9-7.5-1.8-11.3-2.6l5.6-22.6l-14-3.5l-5.7 23q-4.65-1.05-9-2.1v-.1l-19.4-4.8l-3.7 15s10.4 2.4 10.2 2.5c5.7 1.4 6.7 5.2 6.5 8.2l-6.6 26.3c.4.1.9.2 1.5.5c-.5-.1-1-.2-1.5-.4l-9.2 36.8c-.7 1.7-2.5 4.3-6.4 3.3c.1.2-10.2-2.5-10.2-2.5l-7 16.1l18.3 4.6c3.4.9 6.7 1.7 10 2.6l-5.8 23.3l14 3.5l5.8-23.1c3.8 1 7.6 2 11.2 2.9l-5.7 23l14 3.5l5.8-23.3c24 4.5 42 2.7 49.5-19c6.1-17.4-.3-27.5-12.9-34.1c9.3-2.1 16.2-8.2 18-20.6m-32.1 45c-4.3 17.4-33.7 8-43.2 5.6l7.7-30.9c9.5 2.4 40.1 7.1 35.5 25.3m4.4-45.3c-4 15.9-28.4 7.8-36.3 5.8l7-28c7.9 2 33.4 5.7 29.3 22.2"/>
                        </svg>
                        <span class="fw-semibold">Crypto Exchange</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link d-flex gap-2 align-items-center {{ Route::is('user.kycform') ? 'active' : '' }}"
                       href="{{ route('user.kycform') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 14 14">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  d="M12.25 1.81V.5M11 5.31c0 .66.53.88 1.25.88s1.25 0 1.25-.88C13.5 4 11 4 11 2.69c0-.88.53-.88 1.25-.88s1.25.33 1.25.88m-1.25 3.5V7.5m-9.75-4h-1a1 1 0 0 0-1 1V9a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V4.5a1 1 0 0 0-1-1M2 10v1.5m0-8v-3m6 7H7a1 1 0 0 0-1 1V10a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V8.5a1 1 0 0 0-1-1M7.5 11v2.5m0-6V4"
                                  stroke-width="1"/>
                        </svg>
                        <span class="fw-semibold">KYC <span>{!! auth()->user()->status() !!}</span></span>
                    </a>
                </li>
                <li class="nav-item d-none">
                    <a class="nav-link d-flex gap-2 align-items-center {{ Route::is('user.stocks') ? 'active' : '' }}"
                       href="{{ route('user.stocks') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 14 14">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  d="M12.25 1.81V.5M11 5.31c0 .66.53.88 1.25.88s1.25 0 1.25-.88C13.5 4 11 4 11 2.69c0-.88.53-.88 1.25-.88s1.25.33 1.25.88m-1.25 3.5V7.5m-9.75-4h-1a1 1 0 0 0-1 1V9a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V4.5a1 1 0 0 0-1-1M2 10v1.5m0-8v-3m6 7H7a1 1 0 0 0-1 1V10a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V8.5a1 1 0 0 0-1-1M7.5 11v2.5m0-6V4"
                                  stroke-width="1"/>
                        </svg>
                        <span class="fw-semibold">Buy Stock</span>
                    </a>
                </li>
                <li class="nav-item d-none">
                    <a class="nav-link d-flex gap-2 align-items-center {{ Route::is('user.stockHoldings') ? 'active' : '' }}"
                       href="{{ route('user.stockHoldings') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                  d="M12 3.248c.415 0 .752.336.752.752v.464h.051c1.014 0 1.824.827 1.824 1.833a.752.752 0 0 1-1.504 0a.324.324 0 0 0-.32-.328h-1.607c-.1 0-.152.031-.189.067a.4.4 0 0 0-.106.225a.44.44 0 0 0 .033.263a.26.26 0 0 0 .157.133l2.361.85c1.827.659 1.365 3.394-.598 3.394h-.077v.599a.752.752 0 1 1-1.504 0v-.599h-.077a1.83 1.83 0 0 1-1.823-1.833a.752.752 0 1 1 1.504 0c0 .187.15.328.32.328h1.657c.093 0 .136-.028.161-.051a.27.27 0 0 0 .077-.152a.3.3 0 0 0-.02-.17c-.017-.03-.048-.07-.13-.1l-2.361-.85c-.966-.349-1.287-1.294-1.166-2.05c.122-.764.732-1.56 1.781-1.56h.052V4c0-.416.336-.752.752-.752M7.37 13.542c.54-.338 1.2-.544 2.063-.544H12.5c.533 0 1.007.167 1.354.489a1.616 1.616 0 0 1 0 2.376c-.347.322-.82.49-1.354.49h-2c-.2 0-.283.061-.313.091a.2.2 0 0 0-.06.152a.2.2 0 0 0 .06.15c.03.03.112.093.313.093h3c.788 0 1.541-.275 2.31-.712c.591-.335 1.142-.735 1.713-1.149q.285-.207.579-.416l.053-.034a1.7 1.7 0 0 1 2.283.453c.23.321.357.735.3 1.171c-.057.429-.284.817-.648 1.117l-.004.004l-.112.114a16 16 0 0 1-1.87 1.58c-1.177.845-2.86 1.785-4.604 1.785H4A.75.75 0 0 1 3.248 20v-3.5c0-.416.336-.752.752-.752c.624 0 1.017-.14 1.309-.32c.314-.192.556-.453.872-.805l.031-.035c.292-.326.658-.734 1.158-1.046m11.663 2.656a1 1 0 0 1 .086-.078c.118-.091.126-.155.128-.165a.14.14 0 0 0-.03-.096a.2.2 0 0 0-.113-.078c-.027-.007-.08-.012-.163.032q-.234.166-.483.348c-.586.425-1.233.894-1.903 1.274c-.89.506-1.906.909-3.054.909H10.5c-.55 0-1.03-.187-1.375-.53a1.72 1.72 0 0 1-.502-1.218c0-.436.164-.881.502-1.218c.345-.344.826-.53 1.375-.53h2c.216 0 .305-.064.332-.09a.11.11 0 0 0 .04-.083a.11.11 0 0 0-.04-.084c-.027-.025-.116-.089-.332-.089H9.433c-.603 0-.982.138-1.266.316c-.307.192-.546.453-.865.81l-.015.015c-.298.333-.672.75-1.192 1.069a3.6 3.6 0 0 1-1.343.485v2.05h8.75c1.254 0 2.611-.703 3.725-1.502a14.4 14.4 0 0 0 1.78-1.518l.021-.023z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <span class="fw-semibold">Holdings</span>
                    </a>
                </li>
                <li class="nav-item d-none">
                    <a class="nav-link d-flex gap-2 align-items-center {{ Route::is('user.filledOrders') ? 'active' : '' }}"
                       href="{{ route('user.filledOrders') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 512 512">
                            <path fill="currentColor" fill-rule="evenodd"
                                  d="M469.333 256c0 106.039-85.961 192-192 192c-49.795 0-95.163-18.956-129.281-50.046l29.775-30.602c26.414 23.621 61.283 37.981 99.506 37.981c82.475 0 149.334-66.858 149.334-149.333s-66.859-149.333-149.334-149.333C194.859 106.667 128 173.525 128 256q.002 6.066.476 12.01l42.191-42.18l30.17 30.17l-94.17 94.17L12.497 256l30.17-30.17l43.094 43.083A195 195 0 0 1 85.333 256c0-106.039 85.962-192 192-192c106.039 0 192 85.961 192 192M255.999 149.333V267.52l73.6 48.853l23.467-35.413l-54.4-36.48v-95.147z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <span class="fw-semibold">Buy History</span>
                    </a>
                </li>
                <li class="nav-item d-none">
                    <a class="nav-link d-flex gap-2 align-items-center {{ Route::is('user.sellHistory') ? 'active' : '' }}"
                       href="{{ route('user.sellHistory') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  d="M24 31.68V16.319m-3.936 12.479c.775.98 1.746 1.346 3.098 1.346h1.87c1.741 0 3.152-1.375 3.152-3.072h0c0-1.697-1.41-3.072-3.152-3.072h-2.066c-1.74 0-3.152-1.375-3.152-3.072h0c0-1.697 1.41-3.072 3.152-3.072h1.87c1.353 0 2.324.365 3.099 1.346m-3.874 14.96v7.592m19.44-30.21v19.27L24.965 41.517a1.81 1.81 0 0 1-1.81 0L4.5 30.745V11.474m26.448 7.318L43.5 11.545l-9.12-5.266h0l-6.426 3.71c-2.183 1.26-5.732 1.254-7.929-.014L13.56 6.242L4.5 11.474l12.552 7.247"
                                  stroke-width="1"/>
                        </svg>
                        <span class="fw-semibold">Sell History</span>
                    </a>
                </li>


            </ul>

        </nav>
    </div>


    <!-- Page Content -->
    <div id="page-content-wrapper" class="page-content-wrapper">
        <nav class="navbar navbar-expand-lg py-lg-3 px-2 px-lg-4 d-flex fixed-top justify-content-between">
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center d-lg-none">
            <span class="material-symbols-outlined menu-toggle" id="menu-toggle">
              menu
            </span>
                </div>

            </div>

            <div class="d-flex gap-3 p-lg-2 p-lg-0 align-items-center justify-content-end">
                <h3 class="badge bg-success">${{ number_format(auth()->user()->balance, 2) }}</h3>


                <div class="nav-item dropdown">
                    <a class="d-flex gap-2 align-items-center" href="#" id="navbarDropdown4" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <img style="border-radius: 50%" height="40" width="40" class="img-fluid"
                             src="{{ asset('img/trader.jpg') }}" alt="user">
                        <div class="d-flex flex-column d-none d-xl-block">
                            <p class="mb-0 text-white fw-semibold">{{ auth()->user()->name }}</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end user shadow border-0" aria-labelledby="navbarDropdown4"
                        onclick="event.stopPropagation()">
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2" href="{{ route('user.profile') }}">
                  <span class="material-symbols-outlined fw-light">
                    account_circle
                  </span>
                                Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2"
                               href="{{ route('user.referrals.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                          d="M14 14.252v2.09A6 6 0 0 0 6 22H4a8 8 0 0 1 10-7.749M12 13c-3.315 0-6-2.685-6-6s2.685-6 6-6s6 2.685 6 6s-2.685 6-6 6m0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4s-4 1.79-4 4s1.79 4 4 4m6 6v-3h2v3h3v2h-3v3h-2v-3h-3v-2z"/>
                                </svg>
                                Referral</a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2"
                               href="{{ route('user.kycform') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                          d="M14 14.252v2.09A6 6 0 0 0 6 22H4a8 8 0 0 1 10-7.749M12 13c-3.315 0-6-2.685-6-6s2.685-6 6-6s6 2.685 6 6s-2.685 6-6 6m0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4s-4 1.79-4 4s1.79 4 4 4m6 6v-3h2v3h3v2h-3v3h-2v-3h-3v-2z"/>
                                </svg>
                                KYC</a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2" href="{{ route('user.profile') }}">
                                <span class="material-symbols-outlined fw-light"> settings </span>
                                Settings</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link class="dropdown-item d-flex align-items-center gap-1"
                                                 :href="route('logout')"
                                                 onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    <span class="material-symbols-outlined fw-light"> logout </span>
                                    Log Out
                                </x-dropdown-link>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- For pc -->
        </nav>
        @include('dashboard.layout.alert')
        @yield('content')
    </div>

    <!-- /#page-content-wrapper -->
</div>

@if (session('success') || session('error'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: '<h4 style="font-size: 1.25rem; margin-bottom: 0.5rem; color: #0a3622">Success</h4>',
                html: '<p style="font-size: 1rem; color: #00000;">{{ session("success") }}</p>',
                confirmButtonText: '<a href="" class="btn btn-sm btn-success">Ok</a>',
                buttonsStyling: false,
                customClass: {
                    popup: 'modern-alert-popup',
                    confirmButton: 'modern-confirm-button',
                },
                timer: 3000
            });
            @endif
            {{--            @if (session('error'))--}}
            {{--                Swal.fire({--}}
            {{--                    icon: 'error',--}}
            {{--                    title: '<h4 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Error</h4>',--}}
            {{--                    html: '<p style="font-size: 1rem; color: #6c757d;">{{ session("error") }}</p>',--}}
            {{--                    confirmButtonText: '<span style="padding: 0.5rem 1rem; font-size: 0.9rem;">Try Again</span>',--}}
            {{--                    buttonsStyling: false,--}}
            {{--                    customClass: {--}}
            {{--                        popup: 'modern-alert-popup',--}}
            {{--                        confirmButton: 'modern-confirm-button',--}}
            {{--                    },--}}
            {{--                    timer: 5000--}}
            {{--                });--}}
            {{--            @endif--}}
        });
    </script>
@endif

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="{{ asset('assets2/js/jquery.nice-select.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="{{ asset('assets2/js/main.js') }}"></script>
<script src="{{ asset('assets2/js/chart.js') }}"></script>
</body>


<!-- Mirrored from cryptdash.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jul 2024 12:42:43 GMT -->
</html>
