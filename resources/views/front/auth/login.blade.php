@extends('front.auth.master')
@section('title', 'Login')
<!-- Auth Section -->
<section class="auth-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title">Welcome to AL-QEMMA</h2>
                <p>Manage your account, track orders, and explore our services.</p>
            </div>
        </div>

        <div class="auth-cards">

            <!-- Create Account Card -->
            <div class="auth-card text-center create-card">
                <div class="user-icon mb-3">
                    <i class="bi bi-person-circle"></i>
                </div>
                <h5>Create a New Account</h5>
                <p>
                    When creating an account, you can store multiple addresses, track orders, and more.
                    If an order has been placed as a guest, please create an account now using the same email
                    to track shipping status.
                </p>
                <a href="{{ route("register") }}" class="btn btn-primary mt-2">Create Account</a>
            </div>

            <!-- Login Card -->
            <div class="auth-card login-card">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <h5>Login</h5>
                <p>If you already have an account, please login to continue.</p>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div>
                        <input name="email" type="email" :value="old('email')" class="form-control"
                            placeholder="Email">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="remember-me">
                        <label class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="remember">
                            <span>Remember me</span>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary">Sign In</button>
                </form>
                <small><a href="{{ route("password.request") }}">Forgot Password?</a></small>

                <div class="social-btn mt-3">

                    <a href="{{ route('auth.redirect', 'facebook') }}" class="btn btn-outline-primary mb-2 w-100">
                        <i class="bi bi-facebook"></i>
                        Sign in with Facebook
                    </a>

                    <a href="{{ route('auth.redirect', 'google') }}" class="btn btn-outline-danger w-100">
                        <i class="bi bi-google"></i>
                        Sign in with Google
                    </a>

                </div>

            </div>

        </div>
    </div>
</section>
