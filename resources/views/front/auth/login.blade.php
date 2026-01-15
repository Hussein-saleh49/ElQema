@extends('front.auth.master')
@section("title","Login")
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
                <a href="create-account.html" class="btn btn-primary mt-2">Create Account</a>
            </div>

            <!-- Login Card -->
            <div class="auth-card login-card">
                <h5>Login</h5>
                <p>If you already have an account, please login to continue.</p>
                <form>
                    <input type="email" class="form-control" placeholder="Email">
                    <input type="password" class="form-control" placeholder="Password">
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </form>
                <small><a href="#">Forgot Password?</a></small>

                <!-- Social Login -->
                <div class="social-btn mt-3">
                    <button class="btn btn-outline-primary mb-2"><i class="bi bi-facebook"></i> Sign in with Facebook</button>
                    <button class="btn btn-outline-danger"><i class="bi bi-google"></i> Sign in with Google</button>
                </div>
            </div>

        </div>
    </div>
</section>
