@extends('front.auth.master')
@section('title', __('theme.reset_password'))

<section class="auth-section">
    <div class="container">

        <!-- Title -->
        <div class="row justify-content-center mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title">{{ __('theme.reset_password_title') }}</h2>
                <p>{{ __('theme.reset_password_subtitle') }}</p>
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
                    <i class="bi bi-key"></i>
                </div>

                <h5>{{ __('theme.create_new_password') }}</h5>
                <p>{{ __('theme.create_new_password_desc') }}</p>

                <a href="{{ route('login') }}" class="btn btn-primary mt-2">
                    {{ __('theme.back_to_login') }}
                </a>
            </div>

            <!-- Reset Card -->
            <div class="auth-card login-card">

                <h5>{{ __('theme.reset_password') }}</h5>
                <p>{{ __('theme.reset_password_form_desc') }}</p>

                <form method="POST" action="{{ route('password.store') }}">
                    @csrf

                    <!-- Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email -->
                    <div>
                        <input type="email" name="email" value="{{ old('email', request('email')) }}"
                            class="form-control" placeholder="{{ __('theme.email') }}" required>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div>
                        <input type="password" name="password" class="form-control"
                            placeholder="{{ __('theme.new_password') }}">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm -->
                    <div>
                        <input type="password" name="password_confirmation" class="form-control"
                            placeholder="{{ __('theme.confirm_new_password') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        {{ __('theme.reset_password_button') }}
                    </button>
                </form>

            </div>

        </div>
    </div>
</section>
