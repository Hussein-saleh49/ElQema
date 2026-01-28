<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white shadow-sm">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand fw-bold text-danger" href="{{ route('front.index') }}">AL-QEMMA</a>

        <!-- Toggler Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="nav">
            <!-- Center links -->
            <ul class="navbar-nav mx-auto gap-3">
                <li class="nav-item">
                    <a class="nav-link @yield('about-activation')" href="{{ route('front.about') }}">
                        {{ __('theme.About Us') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('shop-activation')" href="{{ route('front.shop') }}">
                        {{ __('theme.nav_shop') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('services-activation')" href="{{ route('front.services') }}">
                        {{ __('theme.nav_services') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link @yield('contacts-activation')" href="{{ route('front.contacts') }}">
                        {{ __('theme.nav_contact') }}
                    </a>
                </li>
            </ul>

            <!-- Right side: dropdown + language switcher -->
            <div class="d-flex align-items-center gap-2 ms-auto">
                @if (!Auth::check())
                    <a href="{{ route('login') }}" class="btn btn-primary btn-sm px-3">
                        {{ __('theme.nav_login_register') }}
                    </a>
                @else
                    <a href="{{ route('front.request') }}" class="btn btn-primary btn-sm px-3">
                        {{ __('theme.nav_request_demo') }}
                    </a>

                    <!-- Cart icon -->
                    <a href="{{ route('front.cart.index') }}" class="nav-link position-relative">
                        <i class="bi bi-cart fs-5"></i>
                    </a>

                    <!-- User dropdown icon -->
                    <div class="dropdown">
                        <button
                            class="btn btn-primary btn-sm rounded-circle shadow-sm d-flex align-items-center justify-content-center"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false"
                            style="width: 30px; height: 30px; padding: 0;">
                            <i class="fa-solid fa-user" style="font-size: 13px;"></i>
                        </button>

                        <ul class="dropdown-menu dropdown-menu-end shadow-sm mt-2">
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="#">
                                    <i class="fa-solid fa-gear"></i>
                                    <span>{{ __('theme.nav_settings') }}</span>
                                </a>
                            </li>

                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item d-flex align-items-center gap-2 text-danger">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                        <span>{{ __('theme.nav_logout') }}</span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endif

                <!-- Language Switcher -->
                <a href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale() === 'ar' ? 'en' : 'ar') }}"
                    class="btn btn-light btn-sm rounded-circle shadow-sm d-flex align-items-center justify-content-center"
                    style="width:40px; height:40px;">
                    <i class="bi bi-globe fs-5"></i>
                </a>
            </div>
        </div>

    </div>
</nav>
