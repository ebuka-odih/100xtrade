<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap_custom.css') }}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
          integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    {{--<script src="//code.jivosite.com/widget/lBR9ssOUXB" async></script>--}}

    <style>
        .form-control {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #fdfeff;
            background-color: #171f2a;
            background-clip: padding-box;
            border: 1px solid #5b5b5b;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.375rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control:focus {
            background-color: black;
            color: white;
            border-color: #ffffff; /* Optional: to change the border color when focused */
            outline: none; /* Optional: to remove the default focus outline */
        }

    </style>
</head>

<body>
<div class="d-flex wrapper" id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper" class="sidebar-wrapper">
        <div class="sidebar-heading">
            <a href="{{ route('index') }}">
                {{--            <h3>{{ env('APP_NAME') }}</h3>--}}
                <img style="margin-left: -80px; margin-top: -30px" src="{{ asset('img/logo2.png') }}" alt="logo"
                     width="280" height="80">
            </a>
        </div>
        <nav class="sidebar mb-4">
            <ul class="nav flex-column" id="nav_accordion">
                <li class="nav-item">
                    <a class="nav-link d-flex gap-2 align-items-center {{ Route::is('user.dashboard') ? 'active' : '' }}"
                       href="{{ route('user.dashboard') }}">
                        <img src="{{ asset('assets/img/dashboard_icon.png') }}" alt="">
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
              <span class="fa fa-arrow-up">

              </span>
                        <span class="fw-semibold">Withdraw</span>
                    </a>
                </li>
                <li class="nav-item">
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
                <li class="nav-item">
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
                <li class="nav-item">
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
                <li class="nav-item">
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


                <div class="nav-item dropdown">
                    <a class="d-flex gap-2 align-items-center" href="#" id="navbarDropdown4" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <img style="border-radius: 50%" height="40" width="40" class="img-fluid"
                             src="{{ asset('storage/'.auth()->user()->avatar ?? 'img/trader.jpg') }}" alt="user">
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
                            <a class="dropdown-item d-flex align-items-center gap-2" href="{{ route('user.referrals.index') }}">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M14 14.252v2.09A6 6 0 0 0 6 22H4a8 8 0 0 1 10-7.749M12 13c-3.315 0-6-2.685-6-6s2.685-6 6-6s6 2.685 6 6s-2.685 6-6 6m0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4s-4 1.79-4 4s1.79 4 4 4m6 6v-3h2v3h3v2h-3v3h-2v-3h-3v-2z"/></svg>
                                Referral</a>
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
<script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/chart.js') }}"></script>
</body>


<!-- Mirrored from cryptdash.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jul 2024 12:42:43 GMT -->
</html>
