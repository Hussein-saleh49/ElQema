@extends('front.auth.master')
@section('title', __('theme.login'))

<section class="auth-section">
    <div class="container">

        <!-- Title -->
        <div class="row justify-content-center mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title">{{ __('theme.welcome_qemma') }}</h2>
                <p>{{ __('theme.login_subtitle') }}</p>
            </div>
            <a href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale() === 'ar' ? 'en' : 'ar') }}"
                class="btn btn-light btn-sm rounded-circle shadow-sm d-flex align-items-center justify-content-center"
                style="width:40px; height:40px;">
                <i class="bi bi-globe fs-5"></i>
            </a>
        </div>

        <div class="auth-cards">

            <!-- Create Account Card -->
            <div class="auth-card text-center create-card">
                <div class="user-icon mb-3">
                    <i class="bi bi-person-circle"></i>
                </div>

                <h5>{{ __('theme.create_new_account') }}</h5>

                <p>
                    {{ __('theme.create_account_desc') }}
                </p>

                <a href="{{ route('register') }}" class="btn btn-primary mt-2">
                    {{ __('theme.create_account') }}
                </a>
            </div>

            <!-- Login Card -->
            <div class="auth-card login-card">

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <h5>{{ __('theme.login') }}</h5>
                <p>{{ __('theme.login_desc') }}</p>

                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <div>
                        <input name="email" type="email" value="{{ old('email') }}" class="form-control"
                            placeholder="{{ __('theme.email') }}">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div>
                        <input type="password" name="password" class="form-control"
                            placeholder="{{ __('theme.password') }}">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="remember-me">
                        <label class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="remember">
                            <span>{{ __('theme.remember_me') }}</span>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        {{ __('theme.sign_in') }}
                    </button>
                </form>

                <small>
                    <a href="{{ route('password.request') }}">
                        {{ __('theme.forgot_password') }}
                    </a>
                </small>

                <div class="social-btn mt-3">

                    <a href="{{ route('auth.redirect', 'facebook') }}" class="btn btn-outline-primary mb-2 w-100">
                        <i class="bi bi-facebook"></i>
                        {{ __('theme.sign_facebook') }}
                    </a>

                    <a href="{{ route('auth.redirect', 'google') }}" class="btn btn-outline-danger w-100">
                        <i class="bi bi-google"></i>
                        {{ __('theme.sign_google') }}
                    </a>

                </div>

            </div>
        </div>
    </div>
</section>
