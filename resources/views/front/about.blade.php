@extends('front.master')
@section('content')
<!-- About Section -->
<section class="about2-section container" style="padding-top:140px">

    <!-- Top Grid -->
    <div class="row g-4 mb-5 about2-row">

        <!-- Left Column -->
        <div class="col-lg-6 d-flex">
            <div class="about2-stack w-100">

                <!-- Text Card -->
                <div class="about2-card equal-card">
                    <h5>{{ __('theme.get_to_know') }}</h5>
                    <p>
                        {{ __('theme.about_description') }}
                    </p>
                </div>

                <!-- Image Card -->
                <div class="about2-card image-card equal-card">
                    <img src="{{ asset('assets') }}/images/about2.png" alt="">
                </div>

            </div>
        </div>

        <!-- Right Column -->
        <div class="col-lg-6 d-flex">
            <div class="about2-card image-card about2-right-card w-100">
                <img src="{{ asset('assets') }}/images/about1.png" alt="">
            </div>
        </div>

    </div>

    <!-- Vision / Mission -->
    <div class="row g-4 mb-4 about2-vision">

        <div class="col-lg-6">
            <div class="about2-card">
                <h6>{{ __('theme.vision_title') }}</h6>

                <strong>{{ __('theme.vision') }}</strong>
                <p>{{ __('theme.vision_description') }}</p>

                <strong>{{ __('theme.mission') }}</strong>
                <p>{{ __('theme.mission_description') }}</p>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="about2-card image-card position-relative">
                <img src="{{ asset('assets') }}/images/about3.png" alt="" class="img-fluid">

                <!-- زر Request a Demo -->
                <a href="#" class="btn btn-primary position-absolute demo-btn">
                    {{ __('theme.request_demo') }}
                </a>
            </div>
        </div>

    </div>

    <!-- Core Values -->
    <div class="about2-values text-center mb-5">
        <h5 class="mb-4">{{ __('theme.elevating_education') }}</h5>
        <h5 class="mb-4" style="color: rgb(220, 94, 94);">{{ __('theme.through_core_value') }}</h5>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="value-box">
                <i class="bi bi-award" style="color: green;"></i>
                <h6>{{ __('theme.excellence') }}</h6>
                <p>{{ __('theme.excellence_description') }}</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="value-box">
                <i class="bi bi-lightbulb" style="color: green;"></i>
                <h6>{{ __('theme.innovation') }}</h6>
                <p>{{ __('theme.innovation_description') }}</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="value-box">
                <i class="bi bi-shield-check" style="color: green;"></i>
                <h6>{{ __('theme.integrity') }}</h6>
                <p>{{ __('theme.integrity_description') }}</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="value-box">
                <i class="bi bi-heart" style="color: green;"></i>
                <h6>{{ __('theme.dedication') }}</h6>
                <p>{{ __('theme.dedication_description') }}</p>
            </div>
        </div>
    </div>

    <!-- Partnership -->
    <div class="row g-4 align-items-center text-center">
        <div class="col-12">
            <h2 class="fw-bold mt-5 mb-4">{{ __('theme.strong_partnership') }}</h2>
        </div>

        <div class="col-lg-6 mt-1 text-start">
            <p>{{ __('theme.partnership_text_1') }}</p>
            <p>{{ __('theme.partnership_text_2') }}</p>
            <p>{{ __('theme.partnership_text_3') }}</p>
        </div>

        <div class="col-lg-6 position-relative text-center mt-1" style="height: 400px;">
            <img src="{{ asset('assets') }}/images/training1.png" class="screen-1 position-absolute" alt="">
            <img src="{{ asset('assets') }}/images/training2.png" class="screen-2 position-absolute" alt="">
            <img src="{{ asset('assets') }}/images/training3.png" class="screen-3 position-absolute" alt="">
        </div>
    </div>

</section>
@endsection
