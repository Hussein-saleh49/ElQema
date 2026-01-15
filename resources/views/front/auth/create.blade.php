@extends('front.auth.master')
@section("title","Register")
<!-- Create Account Section -->
<section class="create-account-section">
    <div class="container">
        <!-- Section Title -->
        <div class="row justify-content-center mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title">Create a New Account</h2>
                <p>Fill in the details below to create your account.</p>
            </div>
        </div>

        <!-- Account Card -->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-12">
                <div class="account-card" id="accountCard">
                    <!-- Toggle Button -->
                    <div class="text-center mb-4">
                        <div class="toggle-button">
                            <input type="checkbox" id="toggleBtn">
                            <label for="toggleBtn">
                                <span class="left">Individual User</span>
                                <span class="right">Company / School</span>
                            </label>
                        </div>
                    </div>

                    <!-- Individual User Form -->
                    <div id="individualForm">
                        <form id="createForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="First Name">
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Mobile Number</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Enter number">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter password">
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label">Day</label>
                                    <input type="number" class="form-control" placeholder="DD">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Month</label>
                                    <input type="number" class="form-control" placeholder="MM">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Year</label>
                                    <input type="number" class="form-control" placeholder="YYYY">
                                </div>
                            </div>

                            <div class="mb-3 mt-3">
                                <label class="form-label">Gender</label>
                                <select class="form-select">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="acceptTerms">
                                <label class="form-check-label" for="acceptTerms">Accept All Conditions</label>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Create Account</button>
                        </form>
                    </div>

                    <!-- Company / School Form -->
                    <div id="companyForm" style="display: none;">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Company / School / University</label>
                                    <input type="text" class="form-control" placeholder="Enter name">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Job Title</label>
                                    <input type="text" class="form-control" placeholder="Enter job title">
                                </div>
                            </div>

                            <div class="mb-3 mt-3">
                                <label class="form-label">Contact Person</label>
                                <input type="text" class="form-control" placeholder="Full Name">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" placeholder="Enter email">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Mobile Number</label>
                                <input type="tel" class="form-control" placeholder="Enter number">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Enter password">
                            </div>

                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">Accept All Conditions</label>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Create Account</button>
                        </form>
                    </div>

                    <!-- Social Login -->
                    <div class="social-login mt-4">
                        <p class="text-center mb-3">Or sign in with</p>
                        <div class="row g-3">
                            <div class="col-6">
                                <a href="#"
                                    class="btn btn-outline-primary w-100 d-flex align-items-center justify-content-center gap-2">
                                    <i class="bi bi-facebook fs-5"></i> Facebook
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#"
                                    class="btn btn-outline-danger w-100 d-flex align-items-center justify-content-center gap-2">
                                    <i class="bi bi-google"></i> Google
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
