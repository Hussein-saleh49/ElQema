@extends('front.master')
@section("title","Home")
@section('content')
  

    <!-- Hero -->
    <section class="container pt-5 mt-5" data-aos="fade-up">
        <div class="row align-items-center" data-aos="fade-right" data-aos-duration="1000">
            <div class="col-lg-6">
                <h1 class="fw-bold mb-3 hero-text-animate">AL Qemma for Engineering Projects</h1>
                <p class="text-muted hero-text-animate">
                    Leadership and excellence in developing the educational process through providing smart and
                    innovative technological solutions in the field of education.
                </p>
                <button class="btn btn-primary mt-3 hero-text-animate">Request a Demo</button>
            </div>
            <div class="col-lg-6 text-center" data-aos="zoom-out" data-aos-duration="1200">
                <img src="{{ asset('assets') }}/images/hero.png" class="img-fluid rounded-4 hero-img hero-img-animate"
                    alt="">
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="container mb-5" data-aos="fade-up">
        <h2 class="section-title text-center">Discover Our Featured Products</h2>
        <div class="row g-4">

            <div class="col-6 col-md-4">
                <div class="service-card-horizontal card-color-1">
                    <div class="service-text-card">
                        <h5>HIKVISION DS8662RD/C</h5>
                        <p class="text-muted">The Hikvision series is more than: it’s an investment that has got you
                            covered for the future</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                    <div class="service-img-card">
                        <img src="{{ asset('assets') }}/images/feature1.png" alt="HIKVISION DS8662RD/C">
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4">
                <div class="service-card-horizontal card-color-2">
                    <div class="service-text-card">
                        <h5>HORION M6APRO</h5>
                        <p class="text-muted">The Horion series is more than: it’s an investment that has got you
                            covered for the future</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                    <div class="service-img-card">
                        <img src="{{ asset('assets') }}/images/feature2.png" alt="HORION M6APRO">
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4">
                <div class="service-card-horizontal card-color-3">
                    <div class="service-text-card">
                        <h5>HORION 75 m6a pro</h5>
                        <p class="text-muted">The GX series is more than: it’s an investment that has got you covered
                            for the future</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                    <div class="service-img-card">
                        <img src="{{ asset('assets') }}/images/feature3.png" alt="HORION 75 m6a pro">
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4">
                <div class="service-card-horizontal card-color-1">
                    <div class="service-text-card">
                        <h5>8K HDMI 2.1 Braided Cable</h5>
                        <p class="text-muted">Provides an incredible video experience at 8K @6Hz and with a bandwidth of
                            48 Gbps</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                    <div class="service-img-card">
                        <img src="{{ asset('assets') }}/images/feature4.png" alt="8K HDMI 2.1 Braided Cable">
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4">
                <div class="service-card-horizontal card-color-2">
                    <div class="service-text-card">
                        <h5>USB C Adapter</h5>
                        <p class="text-muted">Provides an incredible video experience at 8K @6Hz and with a bandwidth of
                            48 Gbps</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                    <div class="service-img-card">
                        <img src="{{ asset('assets') }}/images/feature5.png" alt="USB C Adapter">
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4">
                <div class="service-card-horizontal card-color-3">
                    <div class="service-text-card">
                        <h5>USB C Adapter</h5>
                        <p class="text-muted">A 4K HDMI port, and 100W Power Delivery charging port in one</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                    <div class="service-img-card">
                        <img src="{{ asset('assets') }}/images/feature6.png" alt="USB C Adapter">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section py-5">
        <div class="container section-title text-center" data-aos="fade-up">
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gx-0 gx-lg-5 gy-5 align-items-center">
                <!-- Left Content -->
                <div class="col-lg-6 order-lg-1" data-aos="fade-right" data-aos-delay="200">
                    <h3>Empowering Businesses Through Innovative Solutions</h3>
                    <p class="highlight-text mb-4">Agile methodologies drive our collaborative approach, ensuring
                        optimal outcomes across diverse industry verticals.</p>
                    <div class="features-list">
                        <div class="feature-item d-flex mb-3" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-box me-3 text-primary fs-3">
                                <i class="bi bi-check2-circle"></i>
                            </div>
                            <div class="text">
                                <h4>Expert Consulting</h4>
                                <p>Strategic implementation of emerging technologies drives competitive advantage and
                                    sustainable growth.</p>
                            </div>
                        </div>
                        <div class="feature-item d-flex mb-3" data-aos="zoom-in" data-aos-delay="400">
                            <div class="icon-box me-3 text-primary fs-3">
                                <i class="bi bi-lightbulb"></i>
                            </div>
                            <div class="text">
                                <h4>Innovative Solutions</h4>
                                <p>Delivering scalable solutions that address complex business challenges effectively.
                                </p>
                            </div>
                        </div>
                        <div class="feature-item d-flex mb-3" data-aos="zoom-in" data-aos-delay="500">
                            <div class="icon-box me-3 text-primary fs-3">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <div class="text">
                                <h4>Growth Strategy</h4>
                                <p>Helping organizations achieve sustainable competitive advantages in their markets.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cta-buttons mt-4">
                        <a href="#" class="btn btn-primary me-2">Request a Demo</a>
                    </div>
                </div>
                <!-- Right Image -->
                <div class="col-lg-6 order-lg-2 text-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('assets') }}/images/Frame 29.png" class="img-fluid rounded-4 about-img"
                        alt="About Image">
                    <div class="experience-box position-absolute top-0 start-0 bg-primary text-white p-3 rounded-3 shadow"
                        data-aos="zoom-in" data-aos-delay="300">
                        <div class="years fs-3 fw-bold">15+</div>
                        <div class="text">Years of<br>Experience</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose -->
    <section class="container mb-5" data-aos="fade-up">
        <div class="container">
            <div class="section-header text-center">
                <h2>Why Choose <span>AL-QEMMA</span></h2>
                <p>Your trusted partner in education & training solutions</p>
            </div>

            <div class="why-grid">
                <div class="why-card">
                    <div class="icon">🎓</div>
                    <h5>Expert Training</h5>
                    <p>Professional instructors with real-world experience</p>
                </div>

                <div class="why-card">
                    <div class="icon">💻</div>
                    <h5>Interactive Learning</h5>
                    <p>Hands-on programs with modern technologies</p>
                </div>

                <div class="why-card">
                    <div class="icon">🌍</div>
                    <h5>Global Standards</h5>
                    <p>Courses aligned with international standards</p>
                </div>

                <div class="why-card">
                    <div class="icon">⚡</div>
                    <h5>Fast Support</h5>
                    <p>Dedicated team to support your learning journey</p>
                </div>

                <div class="why-card">
                    <div class="icon">📈</div>
                    <h5>Career Growth</h5>
                    <p>Programs designed to boost your career path</p>
                </div>

                <div class="why-card">
                    <div class="icon">🛡</div>
                    <h5>Trusted Quality</h5>
                    <p>High quality content and certified outcomes</p>
                </div>

                <div class="why-card">
                    <div class="icon">🎯</div>
                    <h5>Focused Learning</h5>
                    <p>Well-structured programs designed for real results</p>
                </div>

                <div class="why-card">
                    <div class="icon">🤝</div>
                    <h5>Reliable Partnership</h5>
                    <p>We build long-term relationships with our clients</p>
                </div>
            </div>
        </div>
    </section>

    <!-- With Training Programs -->
    <section class="container mb-5" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Images -->
                <div class="col-lg-6 position-relative text-center mt-1" style="height: 400px;">
                    <!-- container للصور مع position-relative -->
                    <img src="{{ asset('assets') }}/images/training1.png" class="screen-1 position-absolute"
                        alt="">
                    <img src="{{ asset('assets') }}/images/training2.png" class="screen-2 position-absolute"
                        alt="">
                    <img src="{{ asset('assets') }}/images/training3.png" class="screen-3 position-absolute"
                        alt="">
                </div>

                <!-- Right Content -->
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-3">With Training<br>Programs</h2>

                    <p class="text-muted mb-4">
                        SMART’s interactive displays place the tools you need at your
                        fingertips—tools that make it easy to build connections with your
                        students through active learning experiences.
                    </p>

                    <!-- Cards -->
                    <div class="row g-3 mb-4">
                        <!-- البطاقة 1 -->
                        <div class="col-4">
                            <div class="card h-100 p-3 bg-white bg-opacity-75 shadow-sm rounded-3">
                                <div class="mb-2">
                                    <i class="bi bi-camera-video fs-4 text-primary"></i>
                                </div>
                                <p class="mb-0 small fw-medium text-dark">
                                    Live and on-demand webinars
                                </p>
                            </div>
                        </div>

                        <!-- البطاقة 2 -->
                        <div class="col-4">
                            <div class="card h-100 p-3 bg-white bg-opacity-75 shadow-sm rounded-3">
                                <div class="mb-2">
                                    <i class="bi bi-laptop fs-4 text-primary"></i>
                                </div>
                                <p class="mb-0 small fw-medium text-dark">
                                    Online coursework & certifications
                                </p>
                            </div>
                        </div>

                        <!-- البطاقة 3 -->
                        <div class="col-4">
                            <div class="card h-100 p-3 bg-white bg-opacity-75 shadow-sm rounded-3">
                                <div class="mb-2">
                                    <img src="{{ asset('assets') }}/images/training22.png" alt="icon"
                                        class="img-fluid" style="width:24px; height:24px;">
                                </div>
                                <p class="mb-0 small fw-medium text-dark">
                                    Customized professional learning
                                </p>
                            </div>
                        </div>
                    </div>


                    <a href="#" class="btn btn-primary btn-sm px-4">Learn More</a>
                </div>

            </div>
        </div>
    </section>


    <!-- customer service -->
    <section id="customer-service" class="container mb-5">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gx-0 gx-lg-5 gy-5 align-items-start">
                <!-- Left Text Content -->
                <div class="col-lg-6 order-lg-1" data-aos="fade-right" data-aos-delay="200">
                    <h2>Coustomer Centric Services </h2>
                    <p class="highlight-text mb-4">
                        Our strategies focus on understanding customer needs, enhancing satisfaction, and ensuring
                        loyalty.
                    </p>
                    <ul class="feature-list">
                        <li>Personalized support for every client</li>
                        <li>Efficient and reliable service delivery</li>
                        <li>Continuous improvement based on feedback</li>
                        <li>At AL-QEMMA, we offer a wide array of services tailored to meet your diverse needs. From
                            product sales and expert consultation to reliable technical support, maintenance, and
                            cutting-edge educational solutions for homes, we've got you covered with comprehensive
                            solutions</li>
                    </ul>
                </div>

                <!-- Right Cards Content -->
                <div class="col-lg-6 order-lg-2" data-aos="zoom-out" data-aos-delay="200">
                    <div class="row g-4">
                        <!-- Card 1 -->
                        <div class="col-6">
                            <div class="customer-card">
                                <img src="{{ asset('assets') }}/images/customer1.png" alt="Customer 1"
                                    class="customer-card-img">
                                <p class="customer-card-text">Product Sales and Consultation</p>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="col-6">
                            <div class="customer-card">
                                <img src="{{ asset('assets') }}/images/customer2.png" alt="Customer 2"
                                    class="customer-card-img">
                                <p class="customer-card-text">Technical Support</p>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="col-6">
                            <div class="customer-card">
                                <img src="{{ asset('assets') }}/images/customer3.png" alt="Customer 3"
                                    class="customer-card-img">
                                <p class="customer-card-text">Maintenance & Upgrades</p>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div class="col-6">
                            <div class="customer-card">
                                <img src="{{ asset('assets') }}/images/customer4.png" alt="Customer 4"
                                    class="customer-card-img">
                                <p class="customer-card-text">Educational Support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
