@extends('front.master')
@section("title",__("theme.learn_more"))
@section('content')
    <!-- ===================== Learn More Section ===================== -->
    <section class="learn-more-section container" style="padding-top:140px;">

        <div class="row g-4 mb-4 d-flex align-items-stretch">

            <!-- Text Card -->
            <div class="col-lg-6 d-flex flex-column align-items-start">
                <div class="learn-more-card text-card flex-fill">
                    <h4>{{ __('theme.hikvision_learning') }}</h4>
                    <p>{{ __('theme.hikvision_learning_text') }}</p>
                </div>

                <a href="#" class="learn-more-btn mt-3">{{ __('theme.inquire_service') }}</a>
            </div>

            <!-- Image Card -->
            <div class="col-lg-6 d-flex">
                <div class="learn-more-card image-card flex-fill">
                    <img src="{{ asset('assets') }}/images/learn1.png" alt="" class="img-cover">
                </div>
            </div>

        </div>

    </section>

    <!-- ===================== New Learn More Section ===================== -->
    <section class="learn-more-new-section py-5">
        <div class="container">

            <!-- Row 1: Image Left, Text Right -->
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 d-flex">
                    <div class="learn-more-card image-card first-image flex-fill">
                        <img src="{{ asset('assets') }}/images/learn2.png" alt="Service 1" class="img-cover">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h4>{{ __('theme.tailored_solutions') }}</h4>
                    <p>{{ __('theme.tailored_solutions_text') }}</p>
                </div>
            </div>

            <!-- Row 2: Image Left, Text Right -->
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 d-flex order-lg-2">
                    <div class="learn-more-card image-card second-image flex-fill">
                        <img src="{{ asset('assets') }}/images/learn3.png" alt="Service 2" class="img-cover">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <h4>{{ __('theme.satisfactory_experience') }}</h4>
                    <p>{{ __('theme.satisfactory_experience_text') }}</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Training Form Section -->
    <section class="training-form-section container" style="padding-top:140px; padding-bottom:80px;">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg p-5">

                    <!-- Header -->
                    <div class="text-center mb-4">
                        <h2 class="fw-bold">{{ __('theme.training_form_title') }}</h2>
                        <p class="text-muted fs-5">{{ __('theme.training_form_subtitle') }}</p>
                    </div>

                    <!-- Success Message -->
                    @if (session('success'))
                        <div class="alert alert-success text-center">{{ session('success') }}</div>
                    @endif

                    <!-- Error Message -->
                    @if (session('error'))
                        <div class="alert alert-danger text-center">{{ session('error') }}</div>
                    @endif

                    <!-- Toggle Button -->
                    <div class="text-center mb-4">
                        <div class="toggle-button contact-toggle" dir="ltr">
                            <input type="checkbox" id="toggleBtn">
                            <label for="toggleBtn" class="d-flex justify-content-between">
                                <span class="fw-bold fs-6">{{ __('theme.individual_user') }}</span>
                                <span class="fw-bold fs-6">{{ __('theme.company_school') }}</span>
                            </label>
                        </div>
                    </div>
                    <hr>

                    <!-- Individual Form -->
                    <div id="individualForm" style="{{ $errors->company->any() ? 'display:none' : '' }}">
                        <form action="{{ route('front.trainee.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="form" value="individual">

                            <div class="row mb-3">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label class="form-label">{{ __('theme.first_name') }}</label>
                                    <input type="text" name="first_name" class="form-control form-control-lg"
                                        placeholder="{{ __('theme.first_name') }}" value="{{ old('first_name') }}">
                                    @error('first_name', 'individual')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">{{ __('theme.last_name') }}</label>
                                    <input type="text" name="last_name" class="form-control form-control-lg"
                                        placeholder="{{ __('theme.last_name') }}" value="{{ old('last_name') }}">
                                    @error('last_name', 'individual')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('theme.email_address') }}</label>
                                <input type="email" name="email" class="form-control form-control-lg"
                                    placeholder="{{ __('theme.email_address') }}" value="{{ old('email') }}">
                                @error('email', 'individual')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">{{ __('theme.enter_message') }}</label>
                                <textarea name="message" class="form-control form-control-lg" rows="5"
                                    placeholder="{{ __('theme.enter_message') }}">{{ old('message') }}</textarea>
                                @error('message', 'individual')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit"
                                class="btn btn-primary btn-lg w-100">{{ __('theme.apply_now') }}</button>
                        </form>
                    </div>

                    <!-- Company Form -->
                    <div id="companyForm" style="{{ $errors->company->any() ? '' : 'display:none' }}">
                        <form action="{{ route('front.trainee.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="form" value="company">

                            <div class="row mb-3">
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <label class="form-label">{{ __('theme.company_school_university') }}</label>
                                    <input type="text" name="company_name" class="form-control form-control-lg"
                                        placeholder="{{ __('theme.company_school_university') }}"
                                        value="{{ old('company_name') }}">
                                    @error('company_name', 'company')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <label class="form-label">{{ __('theme.department') }}</label>
                                    <input type="text" name="department" class="form-control form-control-lg"
                                        placeholder="{{ __('theme.department') }}" value="{{ old('department') }}">
                                    @error('department', 'company')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">{{ __('theme.job_title') }}</label>
                                    <input type="text" name="job_title" class="form-control form-control-lg"
                                        placeholder="{{ __('theme.job_title') }}" value="{{ old('job_title') }}">
                                    @error('job_title', 'company')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label class="form-label">{{ __('theme.first_name') }}</label>
                                    <input type="text" name="first_name" class="form-control form-control-lg"
                                        placeholder="{{ __('theme.first_name') }}" value="{{ old('first_name') }}">
                                    @error('first_name', 'company')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">{{ __('theme.last_name') }}</label>
                                    <input type="text" name="last_name" class="form-control form-control-lg"
                                        placeholder="{{ __('theme.last_name') }}" value="{{ old('last_name') }}">
                                    @error('last_name', 'company')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ __('theme.email_address') }}</label>
                                <input type="email" name="email" class="form-control form-control-lg"
                                    placeholder="{{ __('theme.email_address') }}" value="{{ old('email') }}">
                                @error('email', 'company')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">{{ __('theme.enter_message') }}</label>
                                <textarea name="message" class="form-control form-control-lg" rows="5"
                                    placeholder="{{ __('theme.enter_message') }}">{{ old('message') }}</textarea>
                                @error('message', 'company')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit"
                                class="btn btn-primary btn-lg w-100">{{ __('theme.apply_now') }}</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
