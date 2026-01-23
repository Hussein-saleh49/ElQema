@extends('admin.auth.master')
@section('title', __('keywords.reset_password'))

@section('content')
    <div class="wrapper vh-100">
        <div class="row align-items-center h-100">

            <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" method="POST"
                action="{{ route('admin.password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

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

                <h1 class="h6 mb-3">{{ __('keywords.reset_password') }}</h1>
                <p class="text-muted mb-4">{{ __('keywords.reset_password_info') }}</p>
                <div class="row justify-content-center mb-5">
                    <a href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale() === 'ar' ? 'en' : 'ar') }}"
                        class="nav-link text-dark p-0">
                        <i class="bi bi-globe fs-5"></i>
                    </a>
                </div>

                <!-- Email -->
                <div class="form-group mb-3">
                    <label for="inputEmail" class="sr-only">{{ __('keywords.email') }}</label>
                    <input type="email" name="email" id="inputEmail"
                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                        placeholder="{{ __('keywords.email') }}" value="{{ old('email', request('email')) }}" autofocus>
                    @error('email')
                        <span class="invalid-feedback d-block mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group mb-3">
                    <label for="inputPassword" class="sr-only">{{ __('keywords.new_password') }}</label>
                    <input type="password" name="password" id="inputPassword"
                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                        placeholder="{{ __('keywords.new_password') }}">
                    @error('password')
                        <span class="invalid-feedback d-block mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="form-group mb-3">
                    <label for="inputPasswordConfirmation" class="sr-only">{{ __('keywords.confirm_password') }}</label>
                    <input type="password" name="password_confirmation" id="inputPasswordConfirmation"
                        class="form-control form-control-lg" placeholder="{{ __('keywords.confirm_password') }}">
                </div>

                <!-- Submit -->
                <button class="btn btn-lg btn-primary btn-block"
                    type="submit">{{ __('keywords.reset_password') }}</button>

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
