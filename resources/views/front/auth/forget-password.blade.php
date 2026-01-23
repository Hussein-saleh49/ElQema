@extends('front.auth.master')
@section('title', __('theme.forgot_password'))

<section class="auth-section">
    <div class="container">

        <!-- Title -->
        <div class="row justify-content-center mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title">{{ __('theme.forgot_title') }}</h2>
                <p>{{ __('theme.forgot_subtitle') }}</p>
            </div>
            <a href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale() === 'ar' ? 'en' : 'ar') }}"
                class="btn btn-light btn-sm rounded-circle shadow-sm d-flex align-items-center justify-content-center"
                style="width:40px; height:40px;">
                <i class="bi bi-globe fs-5"></i>
            </a>
        </div>

        <div class="auth-cards">

            <!-- Info Card -->
            <div class="auth-card text-center create-card">
                <div class="user-icon mb-3">
                    <i class="bi bi-shield-lock"></i>
                </div>

                <h5>{{ __('theme.password_recovery') }}</h5>
                <p>{{ __('theme.password_recovery_desc') }}</p>

                <a href="{{ route('login') }}" class="btn btn-primary mt-2">
                    {{ __('theme.back_to_login') }}
                </a>
            </div>

            <!-- Reset Card -->
            <div class="auth-card login-card">

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <h5>{{ __('theme.reset_password') }}</h5>
                <p>{{ __('theme.reset_password_desc') }}</p>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                            placeholder="{{ __('theme.email') }}" required>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <button type="submit" class="btn btn-primary">
                        {{ __('theme.send_reset_link') }}
                    </button>
                </form>

                <small class="d-block mt-3">
                    <a href="{{ route('login') }}">
                        {{ __('theme.remember_password_login') }}
                    </a>
                </small>

            </div>
        </div>
    </div>
</section>
