@extends('front.auth.master')
@section('title', 'Register')

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
                    @php
                        $oldType = old('type', 'individual');
                    @endphp

                    <!-- Toggle Button -->
                    <div class="text-center mb-4">
                        <div class="toggle-button">
                            <input type="checkbox" id="toggleBtn" {{ $oldType == 'company' ? 'checked' : '' }}>
                            <label for="toggleBtn">
                                <span class="left">Individual User</span>
                                <span class="right">Company / School</span>
                            </label>
                        </div>
                    </div>


                    <!-- Individual User Form -->
                    <div id="individualForm" style="display: {{ $oldType == 'individual' ? 'block' : 'none' }};">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <input type="hidden" name="type" value="individual">
                            <input type="hidden" name="form" value="individual">

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">First Name</label>
                                    <input type="text" name="first_name" class="form-control"
                                        placeholder="First Name" value="{{ old('first_name') }}">
                                    @error('first_name', 'individual')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name"
                                        value="{{ old('last_name') }}">
                                    @error('last_name', 'individual')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 mt-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email"
                                    value="{{ old('email') }}">
                                @error('email', 'individual')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Mobile Number</label>
                                <input type="tel" name="phone" class="form-control" placeholder="Enter number"
                                    value="{{ old('phone') }}">
                                @error('phone', 'individual')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="Enter password">
                                @error('password', 'individual')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="Confirm password">
                                @error('password_confirmation', 'individual')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label">Day</label>
                                    <input type="number" name="dob_day" class="form-control" placeholder="DD"
                                        value="{{ old('dob_day') }}">
                                    @error('dob_day', 'individual')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Month</label>
                                    <input type="number" name="dob_month" class="form-control" placeholder="MM"
                                        value="{{ old('dob_month') }}">
                                    @error('dob_month', 'individual')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Year</label>
                                    <input type="number" name="dob_year" class="form-control" placeholder="YYYY"
                                        value="{{ old('dob_year') }}">
                                    @error('dob_year', 'individual')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 mt-3">
                                <label class="form-label">Gender</label>
                                <select name="gender" class="form-select">
                                    <option value="">Select Gender</option>
                                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male
                                    </option>
                                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female
                                    </option>
                                </select>
                                @error('gender', 'individual')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" name="accept_terms" id="acceptTerms"
                                    {{ old('accept_terms') ? 'checked' : '' }}>
                                <label class="form-check-label" for="acceptTerms">Accept All Conditions</label>
                                @error('accept_terms', 'individual')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="button" id="submitBtnIndividual" class="btn btn-primary w-100">Create
                                Account</button>

                        </form>
                    </div>

                    <!-- Company / School Form -->
                    <div id="companyForm" style="display: {{ $oldType == 'company' ? 'block' : 'none' }};">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <input type="hidden" name="type" value="company">
                            <input type="hidden" name="form" value="company">

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Company / School / University</label>
                                    <input type="text" name="company_name" class="form-control"
                                        placeholder="Enter name" value="{{ old('company_name') }}">
                                    @error('company_name', 'company')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Job Title</label>
                                    <input type="text" name="job_title" class="form-control"
                                        placeholder="Enter job title" value="{{ old('job_title') }}">
                                    @error('job_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 mt-3">
                                <label class="form-label">Contact Person</label>
                                <input type="text" name="contact_person" class="form-control"
                                    placeholder="Full Name" value="{{ old('contact_person') }}">
                                @error('contact_person', 'company')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email"
                                    value="{{ old('email') }}">
                                @error('email', 'company')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Mobile Number</label>
                                <input type="tel" name="phone" class="form-control" placeholder="Enter number"
                                    value="{{ old('phone') }}">
                                @error('phone', 'company')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="Enter password">
                                @error('password', 'company')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="Confirm password">
                                @error('password_confirmation', 'company')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" name="accept_terms"
                                    id="acceptTermsCompany" {{ old('accept_terms') ? 'checked' : '' }}>
                                <label class="form-check-label" for="acceptTermsCompany">Accept All Conditions</label>
                                @error('accept_terms', 'company')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="button" id="submitBtnCompany" class="btn btn-primary w-100">Create
                                Account</button>

                        </form>
                    </div>

                    <!-- Social Login -->
                    <div class="social-login mt-4">
                        <p class="text-center mb-3">Or sign in with</p>
                        <div class="row g-3">
                            <div class="col-6">
                                <a href="{{ route('auth.redirect', 'facebook') }}"
                                    class="btn btn-outline-primary w-100 d-flex align-items-center justify-content-center gap-2">
                                    <i class="bi bi-facebook fs-5"></i> Facebook
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{ route('auth.redirect', 'google') }}"
                                    class="btn btn-outline-danger w-100 d-flex align-items-center justify-content-center gap-2">
                                    <i class="bi bi-google fs-5"></i> Google
                                </a>



                            </div>
                        </div>
                    </div>

                    <!-- After Social Login -->
                    <div class="text-center mt-4">
                        <p>Already have an account?
                            <a href="{{ route('login') }}" class="text-primary fw-bold">Login</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
