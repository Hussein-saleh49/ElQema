@extends('front.auth.master')
@section('title', 'Forgot Password')

<!-- Auth Section -->
<section class="auth-section">
    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title">Forgot your password?</h2>
                <p>
                    No problem. Just let us know your email address and we will send you a password reset link.
                </p>
            </div>
        </div>

        <div class="auth-cards">

            <!-- Info Card -->
            <div class="auth-card text-center create-card">
                <div class="user-icon mb-3">
                    <i class="bi bi-shield-lock"></i>
                </div>

                <h5>Password Recovery</h5>
                <p>
                    Enter your registered email address and we’ll send you a secure link to reset your password.
                </p>

                <a href="{{ route('login') }}" class="btn btn-primary mt-2">
                    Back to Login
                </a>
            </div>

            <!-- Forgot Password Card -->
            <div class="auth-card login-card">

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <h5>Reset Password</h5>
                <p>Please enter your email to receive the reset link.</p>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div>
                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="form-control"
                            placeholder="Email address"
                            required
                        >
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Send Reset Link
                    </button>
                </form>

                <small class="d-block mt-3">
                    <a href="{{ route('login') }}">Remember your password? Login</a>
                </small>

            </div>

        </div>
    </div>
</section>
