@extends('front.auth.master')
@section('title', __('theme.register'))

<section class="create-account-section">
    <div class="container">

        <!-- Section Title -->
        <div class="row justify-content-center mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title">{{ __('theme.create_new_account') }}</h2>
                <p>{{ __('theme.fill_details_below') }}</p>
            </div>
            <a href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale() === 'ar' ? 'en' : 'ar') }}"
                class="btn btn-light btn-sm rounded-circle shadow-sm d-flex align-items-center justify-content-center"
                style="width:40px; height:40px;">
                <i class="bi bi-globe fs-5"></i>
            </a>
        </div>

        <!-- Account Card -->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-12">
                <div class="account-card" id="accountCard">

                    @php
                        $oldType = old('type', 'individual');
                    @endphp

                    <!-- Toggle Button -->
                    <x-toggle-button></x-toggle-button>

                    <!-- Individual User Form -->
                    <div id="individualForm" style="display: {{ $oldType == 'individual' ? 'block' : 'none' }};">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf

                            <input type="hidden" name="type" value="individual">
                            <input type="hidden" name="form" value="individual">

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">{{ __('theme.first_name') }}</label>
                                    <input type="text" name="first_name" class="form-control"
                                        placeholder="{{ __('theme.first_name') }}" value="{{ old('first_name') }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">{{ __('theme.last_name') }}</label>
                                    <input type="text" name="last_name" class="form-control"
                                        placeholder="{{ __('theme.last_name') }}" value="{{ old('last_name') }}">
                                </div>
                            </div>

                            <div class="mb-3 mt-3">
                                <label class="form-label">{{ __('theme.email') }}</label>
                                <input type="email" name="email" class="form-control"
                                    placeholder="{{ __('theme.enter_email') }}" value="{{ old('email') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('theme.mobile_number') }}</label>
                                <input type="tel" name="phone" class="form-control"
                                    placeholder="{{ __('theme.enter_mobile') }}" value="{{ old('phone') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('theme.password') }}</label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="{{ __('theme.password') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('theme.confirm_password') }}</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="{{ __('theme.confirm_password') }}">
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label">{{ __('theme.day') }}</label>
                                    <input type="number" name="dob_day" class="form-control" placeholder="DD">
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">{{ __('theme.month') }}</label>
                                    <input type="number" name="dob_month" class="form-control" placeholder="MM">
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">{{ __('theme.year') }}</label>
                                    <input type="number" name="dob_year" class="form-control" placeholder="YYYY">
                                </div>
                            </div>

                            <div class="mb-3 mt-3">
                                <label class="form-label">{{ __('theme.gender') }}</label>
                                <select name="gender" class="form-select">
                                    <option value="">{{ __('theme.select_gender') }}</option>
                                    <option value="male">{{ __('theme.male') }}</option>
                                    <option value="female">{{ __('theme.female') }}</option>
                                </select>
                            </div>

                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" name="accept_terms"
                                    id="acceptTerms">
                                <label class="form-check-label" for="acceptTerms">
                                    {{ __('theme.accept_conditions') }}
                                </label>
                            </div>

                            <button type="button" id="submitBtnIndividual" class="btn btn-primary w-100">
                                {{ __('theme.create_account') }}
                            </button>
                        </form>
                    </div>

                    <!-- Company Form -->
                    <div id="companyForm" style="display: {{ $oldType == 'company' ? 'block' : 'none' }};">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf

                            <input type="hidden" name="type" value="company">
                            <input type="hidden" name="form" value="company">

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">{{ __('theme.company_name') }}</label>
                                    <input type="text" name="company_name" class="form-control"
                                        placeholder="{{ __('theme.company_name') }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">{{ __('theme.job_title') }}</label>
                                    <input type="text" name="job_title" class="form-control"
                                        placeholder="{{ __('theme.job_title') }}">
                                </div>
                            </div>

                            <div class="mb-3 mt-3">
                                <label class="form-label">{{ __('theme.contact_person') }}</label>
                                <input type="text" name="contact_person" class="form-control"
                                    placeholder="{{ __('theme.full_name') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('theme.email') }}</label>
                                <input type="email" name="email" class="form-control"
                                    placeholder="{{ __('theme.enter_email') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('theme.mobile_number') }}</label>
                                <input type="tel" name="phone" class="form-control"
                                    placeholder="{{ __('theme.enter_mobile') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('theme.password') }}</label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('theme.confirm_password') }}</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>

                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="acceptTermsCompany">
                                <label class="form-check-label" for="acceptTermsCompany">
                                    {{ __('theme.accept_conditions') }}
                                </label>
                            </div>

                            <button type="button" id="submitBtnCompany" class="btn btn-primary w-100">
                                {{ __('theme.create_account') }}
                            </button>
                        </form>
                    </div>

                    <!-- Social Login -->
                    <div class="social-login mt-4">
                        <p class="text-center mb-3">{{ __('theme.or_sign_with') }}</p>

                        <div class="row g-3">
                            <div class="col-6">
                                <a href="{{ route('auth.redirect', 'facebook') }}"
                                    class="btn btn-outline-primary w-100 d-flex justify-content-center gap-2">
                                    <i class="bi bi-facebook"></i>
                                    {{ __('theme.facebook') }}
                                </a>
                            </div>

                            <div class="col-6">
                                <a href="{{ route('auth.redirect', 'google') }}"
                                    class="btn btn-outline-danger w-100 d-flex justify-content-center gap-2">
                                    <i class="bi bi-google"></i>
                                    {{ __('theme.google') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Login -->
                    <div class="text-center mt-4">
                        <p>
                            {{ __('theme.have_account') }}
                            <a href="{{ route('login') }}" class="text-primary fw-bold">
                                {{ __('theme.login') }}
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
