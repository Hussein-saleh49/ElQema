@extends("front.master")
@section("content")
<section class="big-card-section py-5">
    <div class="container">

        <!-- Big Card with Background Image -->
        <div class="big-card position-relative">

            <!-- Small Text Card (Top Left) -->
            <div class="small-text-card p-3 shadow-sm">
                <h5>{{ __('theme.elevate_learning') }}</h5>
                <p class="small text-white">
                    {{ __('theme.education_intro_text') }}
                </p>
            </div>

            <!-- Big Card Image -->
            <div class="big-card-content">
                <img src="{{ asset("assets") }}/images/download (2).jpg" alt="Big Card Image" class="img-fluid rounded">
            </div>

            <!-- Small Image Card (Bottom Right) -->
            <div class="small-image-card position-absolute">
                <img src="{{ asset("assets") }}/images/board2.png" alt="Mini Image" class="img-fluid rounded">
            </div>

        </div>

    </div>

    <!-- Full Width White Card (Text Left, Image Right) -->
    <div class="full-width-section mt-5">
        <div class="shop-card full-width-card d-flex flex-column flex-lg-row align-items-center gap-4 p-4 shadow-sm mx-0">

            <!-- Text Left -->
            <div class="text-wrapper flex-fill pe-lg-4">
                <h4>{{ __('theme.educators_choice') }}</h4>
                <p>
                    {{ __('theme.educators_choice_text') }}
                </p>
                <div class="d-flex gap-2 mt-3">
                    <a href="#" class="btn btn-primary btn-sm">{{ __('theme.view_details') }}</a>
                </div>
            </div>

            <!-- Image Right -->
            <div class="image-wrapper flex-shrink-0">
                <img src="{{ asset("assets") }}/images/board3.png" alt="SMART Board" class="img-cover rounded">
            </div>

        </div>
    </div>
</section>

<section class="learn-more-new-section py-5">
    <div class="container">

        <!-- Row 1: Image Left, Text Right -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 d-flex">
                <div class="learn-more-card image-card first-image flex-fill">
                    <img src="{{ asset("assets") }}/images/board4.png" alt="Service 1" class="img-cover">
                </div>
            </div>
            <div class="col-lg-6">
                <h4>{{ __('theme.connect_classroom') }}</h4>
                <p>
                    {{ __('theme.connect_classroom_text') }}
                </p>
            </div>
        </div>

        <!-- Row 2: Image Left, Text Right -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 d-flex order-lg-2">
                <div class="learn-more-card image-card second-image flex-fill">
                    <img src="{{ asset("assets") }}/images/board5.png" alt="Service 2" class="img-cover">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <h4>{{ __('theme.learning_software') }}</h4>
                <p>
                    {{ __('theme.learning_software_text') }}
                </p>
            </div>
        </div>

    </div>
</section>
@endsection
