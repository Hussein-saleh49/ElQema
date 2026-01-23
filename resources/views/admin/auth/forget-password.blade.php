@extends('admin.auth.master')
@section('title', __('keywords.forgot_password'))

@section('content')
    <div class="wrapper vh-100">
        <div class="row align-items-center h-100">

            <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" method="POST"
                action="{{ route('admin.password.email') }}">
                @csrf

                <!-- Logo -->
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="#">
                    <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                        xml:space="preserve">
                        <g>
                            <polygon class="st0" points="78,105 15,105 24,87 87,87" />
                            <polygon class="st0" points="96,69 33,69 42,51 105,51" />
                            <polygon class="st0" points="78,33 15,33 24,15 87,15" />
                        </g>
                    </svg>
                </a>

                <h1 class="h6 mb-3">{{ __('keywords.forgot_password') }}</h1>
                <p class="text-muted mb-4">{{ __('keywords.forgot_password_info') }}</p>
                <div class="row justify-content-center mb-5">
                    <a href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale() === 'ar' ? 'en' : 'ar') }}"
                        class="nav-link text-dark p-0">
                        <i class="bi bi-globe fs-5"></i>
                    </a>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">{{ __('keywords.email') }}</label>
                    <input type="email" name="email" id="inputEmail"
                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                        placeholder="{{ __('keywords.email') }}" value="{{ old('email') }}" autofocus>
                    @error('email')
                        <span class="invalid-feedback d-block mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit -->
                <button class="btn btn-lg btn-primary btn-block"
                    type="submit">{{ __('keywords.send_reset_link') }}</button>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Back to Login -->
                <p class="mt-3">
                    <a href="{{ route('admin.login') }}"
                        class="text-decoration-none">{{ __('keywords.back_to_login') }}</a>
                </p>

                <p class="mt-5 mb-3 text-muted">© 2026</p>
            </form>

        </div>
    </div>
@endsection
