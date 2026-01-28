@extends('front.master')
@section('title', __('theme.hero_title'))
@section('content')

    <!-- Hero -->
    <section class="container pt-5 mt-5" data-aos="fade-up">
        <div class="row align-items-center" data-aos="fade-right" data-aos-duration="1000">
            <div class="col-lg-6">
                <h1 class="fw-bold mb-3 hero-text-animate">{{ __('theme.hero_title') }}</h1>
                <p class="text-muted hero-text-animate">{{ __('theme.hero_text') }}</p>
                <a class="btn btn-primary mt-3 hero-text-animate"
                    href="{{ route('front.request') }}">{{ __('theme.hero_btn') }}</a>
            </div>
            <div class="col-lg-6 text-center" data-aos="zoom-out" data-aos-duration="1200">
                <img src="{{ asset('assets/images/hero.png') }}" class="img-fluid rounded-4 hero-img hero-img-animate"
                    alt="">
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="container mb-5" data-aos="fade-up">
        <h2 class="section-title text-center">{{ __('theme.featured_products') }}</h2>

        <div class="row g-4">
            @forelse ($products as $product)
                <div class="col-6 col-md-4">
                    <div
                        class="service-card-horizontal card-color-1 d-flex flex-column flex-lg-row align-items-center shadow-sm rounded p-2">

                        <!-- Text -->
                        <div class="service-text-card flex-fill p-2">
                            <h5>{{ $product->name }}</h5>
                            <p class="text-muted mb-2">
                                {{ $product->description }}
                            </p>
                            <a href="{{ route('front.productDetails', $product) }}" class="btn btn-primary btn-sm">
                                {{ __('theme.learn_more') }}
                            </a>


                        </div>

                        <!-- Image -->
                        <div class="service-img-card flex-shrink-0 mt-2 mt-lg-0" style="width: 150px; height: 120px;">
                            <img src="{{ asset('storage/products/' . $product->image) }}"
                                class="img-fluid rounded w-100 h-100" style="object-fit: cover;"
                                alt="{{ $product->name }}">
                        </div>

                    </div>
                </div>
            @empty
                <div class="col-12 text-center text-danger">
                    {{ __('keywords.no_products_yet') }}
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-3 d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section py-5">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gx-0 gx-lg-5 gy-5 align-items-center">

                <div class="col-lg-6 order-lg-1" data-aos="fade-right" data-aos-delay="200">
                    <h3>{{ __('theme.about_title') }}</h3>
                    <p class="highlight-text mb-4">{{ __('theme.about_text') }}</p>

                    <div class="features-list">
                        <div class="feature-item d-flex mb-3" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-box me-3 text-primary fs-3">
                                <i class="bi bi-check2-circle"></i>
                            </div>
                            <div class="text">
                                <h4>{{ __('theme.expert_consulting') }}</h4>
                                <p>{{ __('theme.expert_consulting_text') }}</p>
                            </div>
                        </div>
                        <div class="feature-item d-flex mb-3" data-aos="zoom-in" data-aos-delay="400">
                            <div class="icon-box me-3 text-primary fs-3">
                                <i class="bi bi-lightbulb"></i>
                            </div>
                            <div class="text">
                                <h4>{{ __('theme.innovative_solutions') }}</h4>
                                <p>{{ __('theme.innovative_solutions_text') }}</p>
                            </div>
                        </div>
                        <div class="feature-item d-flex mb-3" data-aos="zoom-in" data-aos-delay="500">
                            <div class="icon-box me-3 text-primary fs-3">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <div class="text">
                                <h4>{{ __('theme.growth_strategy') }}</h4>
                                <p>{{ __('theme.growth_strategy_text') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="cta-buttons mt-4">
                        <a href="{{ route('front.request') }}"
                            class="btn btn-primary me-2">{{ __('theme.request_demo') }}</a>
                    </div>
                </div>

                <div class="col-lg-6 order-lg-2 text-center" data-aos="zoom-out" data-aos-delay="200">

                    <a href="{{ route('front.about') }}">
                        <img src="{{ asset('assets/images/Frame 29.png') }}" class="img-fluid rounded-4 about-img"
                            alt="">
                    </a>

                    <div class="experience-box position-absolute top-0 start-0 bg-primary text-white p-3 rounded-3 shadow"
                        data-aos="zoom-in" data-aos-delay="300">
                        <div class="years fs-3 fw-bold">15+</div>
                        <div class="text">{{ __('theme.years_experience') }}</div>
                    </div>

                </div>


            </div>
        </div>
    </section>

    <!-- Why Choose -->
    <section class="container mb-5" data-aos="fade-up">
        <div class="container">
            <div class="section-header text-center">
                <h2>{{ __('theme.why_choose_title') }} </h2>
                <p>{{ __('theme.why_choose_text') }}</p>
            </div>

            <div class="why-grid">
                <div class="why-card">
                    <div class="icon">🎓</div>
                    <h5>{{ __('theme.expert_training') }}</h5>
                    <p>{{ __('theme.expert_training_text') }}</p>
                </div>
                <div class="why-card">
                    <div class="icon">💻</div>
                    <h5>{{ __('theme.interactive_learning') }}</h5>
                    <p>{{ __('theme.interactive_learning_text') }}</p>
                </div>
                <div class="why-card">
                    <div class="icon">🌍</div>
                    <h5>{{ __('theme.global_standards') }}</h5>
                    <p>{{ __('theme.global_standards_text') }}</p>
                </div>
                <div class="why-card">
                    <div class="icon">⚡</div>
                    <h5>{{ __('theme.fast_support') }}</h5>
                    <p>{{ __('theme.fast_support_text') }}</p>
                </div>
                <div class="why-card">
                    <div class="icon">📈</div>
                    <h5>{{ __('theme.career_growth') }}</h5>
                    <p>{{ __('theme.career_growth_text') }}</p>
                </div>
                <div class="why-card">
                    <div class="icon">🛡</div>
                    <h5>{{ __('theme.trusted_quality') }}</h5>
                    <p>{{ __('theme.trusted_quality_text') }}</p>
                </div>
                <div class="why-card">
                    <div class="icon">🎯</div>
                    <h5>{{ __('theme.focused_learning') }}</h5>
                    <p>{{ __('theme.focused_learning_text') }}</p>
                </div>
                <div class="why-card">
                    <div class="icon">🤝</div>
                    <h5>{{ __('theme.reliable_partnership') }}</h5>
                    <p>{{ __('theme.reliable_partnership_text') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- With Training Programs -->
    <section class="container mb-5" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 position-relative text-center mt-1 training-screens" style="height: 400px;">
                    <img src="{{ asset('assets/images/training1.png') }}" class="screen-1 position-absolute"
                        alt="">
                    <img src="{{ asset('assets/images/training2.png') }}" class="screen-2 position-absolute"
                        alt="">
                    <img src="{{ asset('assets/images/training3.png') }}" class="screen-3 position-absolute"
                        alt="">
                </div>

                <div class="col-lg-6">
                    <h2 class="fw-bold mb-3">{{ __('theme.training_programs_title') }}</h2>
                    <p class="text-muted mb-4">{{ __('theme.training_programs_text') }}</p>

                    <div class="row g-3 mb-4">
                        <div class="col-4">
                            <div class="card h-100 p-3 bg-white bg-opacity-75 shadow-sm rounded-3">
                                <div class="mb-2"><i class="bi bi-camera-video fs-4 text-primary"></i></div>
                                <p class="mb-0 small fw-medium text-dark">{{ __('theme.live_webinars') }}</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card h-100 p-3 bg-white bg-opacity-75 shadow-sm rounded-3">
                                <div class="mb-2"><i class="bi bi-laptop fs-4 text-primary"></i></div>
                                <p class="mb-0 small fw-medium text-dark">{{ __('theme.online_coursework') }}</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card h-100 p-3 bg-white bg-opacity-75 shadow-sm rounded-3">
                                <div class="mb-2"><img src="{{ asset('assets/images/training22.png') }}"
                                        alt="icon" class="img-fluid" style="width:24px; height:24px;"></div>
                                <p class="mb-0 small fw-medium text-dark">{{ __('theme.customized_learning') }}</p>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('front.training') }}"
                        class="btn btn-primary btn-sm px-4">{{ __('theme.learn_more') }}</a>
                </div>

            </div>
        </div>
    </section>

    <!-- Customer Service -->
    <section id="customer-service" class="container mb-5">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gx-0 gx-lg-5 gy-5 align-items-start">
                <div class="col-lg-6 order-lg-1" data-aos="fade-right" data-aos-delay="200">
                    <h2>{{ __('theme.customer_services_title') }}</h2>
                    <p class="highlight-text mb-4">{{ __('theme.customer_services_text') }}</p>
                    <ul class="feature-list">
                        <li>{{ __('theme.customer_services_li1') }}</li>
                        <li>{{ __('theme.customer_services_li2') }}</li>
                        <li>{{ __('theme.customer_services_li3') }}</li>
                        <li>{{ __('theme.customer_services_li4') }}</li>
                    </ul>
                </div>

                <div class="col-lg-6 order-lg-2" data-aos="zoom-out" data-aos-delay="200">
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="customer-card">
                                <img src="{{ asset('assets/images/customer1.png') }}"
                                    alt="{{ __('theme.customer_service_1') }}" class="customer-card-img">
                                <p class="customer-card-text">{{ __('theme.customer_service_1') }}</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="customer-card">
                                <img src="{{ asset('assets/images/customer2.png') }}"
                                    alt="{{ __('theme.customer_service_2') }}" class="customer-card-img">
                                <p class="customer-card-text">{{ __('theme.customer_service_2') }}</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="customer-card">
                                <img src="{{ asset('assets/images/customer3.png') }}"
                                    alt="{{ __('theme.customer_service_3') }}" class="customer-card-img">
                                <p class="customer-card-text">{{ __('theme.customer_service_3') }}</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="customer-card">
                                <img src="{{ asset('assets/images/customer4.png') }}"
                                    alt="{{ __('theme.customer_service_4') }}" class="customer-card-img">
                                <p class="customer-card-text">{{ __('theme.customer_service_4') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
