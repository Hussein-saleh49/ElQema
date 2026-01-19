<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white shadow-sm">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand fw-bold text-danger" href="{{ route('front.index') }}">
            AL-QEMMA
        </a>

        <div class="collapse navbar-collapse" id="nav">

            <!-- Center links -->
            <ul class="navbar-nav mx-auto gap-3">
                <li class="nav-item">
                    <a class="nav-link @yield('shop-activation')" href="{{ route('front.shop') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('services-activation') " href="{{ route('front.services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('products-activation')" href="{{ route('front.products') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('contacts-activation')" href="{{ route('front.contacts') }}">Contact</a>
                </li>
            </ul>

            <!-- Right side -->
            <ul class="navbar-nav ms-auto gap-3 align-items-center">
                @if (!Auth::check())
                    <li class="nav-item">
                        <a href="{{ route("login") }}" class="btn btn-primary btn-sm px-3">
                            Login/Register
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('front.request') }}" class="btn btn-primary btn-sm px-3">
                            Request a Demo
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="bi bi-cart fs-5"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown">

                        <a class="btn btn-primary btn-sm dropdown-toggle rounded-pill shadow-sm px-4 fw-bold"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            User
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm mt-1">
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="#">
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item d-flex align-items-center gap-2 text-danger">
                                        <span>Logout</span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>

        </div>
    </div>
</nav>
