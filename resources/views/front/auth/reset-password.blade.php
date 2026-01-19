@extends('front.auth.master')
@section('title', 'Reset Password')

<section class="auth-section">
    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title">Reset your password</h2>
                <p>
                    Please enter your new password below.
                </p>
            </div>
        </div>

        <div class="auth-cards">

            <!-- Info Card -->
            <div class="auth-card text-center create-card">
                <div class="user-icon mb-3">
                    <i class="bi bi-key"></i>
                </div>

                <h5>Create a New Password</h5>
                <p>
                    Choose a strong password to keep your account secure.
                </p>

                <a href="{{ route('login') }}" class="btn btn-primary mt-2">
                    Back to Login
                </a>
            </div>

            <!-- Reset Password Card -->
            <div class="auth-card login-card">

                <h5>Reset Password</h5>
                <p>Enter your new password and confirm it.</p>

                <form method="POST" action="{{ route('password.store') }}">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email -->
                    <div>
                        <input type="email" name="email" value="{{ old('email', request('email')) }}"
                            class="form-control" placeholder="Email address" required>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div>
                        <input type="password" name="password" class="form-control" placeholder="New password" >
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <input type="password" name="password_confirmation" class="form-control"
                            placeholder="Confirm new password" >
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Reset Password
                    </button>
                </form>

            </div>

        </div>
    </div>
</section>
