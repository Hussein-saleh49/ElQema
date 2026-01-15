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
                        <h5>Get to Know AL-QEMMA</h5>
                        <p>
                            The company has had noticeable success in its field thanks to our deep understanding of the
                            different needs of educational institutions and our great team that provides a specialized
                            educational experience and premium after-sales support to satisfy all our customers’ needs.
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
                    <h6>Your key to Consistency</h6>

                    <strong>Vision</strong>
                    <p>
                        Leadership and excellence in developing the educational process through offering the best and
                        advanced technological solutions and innovations in the field of education
                    </p>

                    <strong>Mission</strong>
                    <p>
                        We look forward to creating a reality through which we can implement modern technologies in all
                        educational fields and provide a more productive outstanding educational experience, by
                        cooperating with the major global and local companies that are expert in designing and
                        manufacturing the required hardware, equipment, and solutions.
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about2-card image-card position-relative">
                    <img src="{{ asset('assets') }}/images/about3.png" alt="" class="img-fluid">

                    <!-- زر Request a Demo -->
                    <a href="#" class="btn btn-primary position-absolute demo-btn">
                        Request a Demo
                    </a>
                </div>
            </div>

        </div>



        <div class="about2-values text-center mb-5">
            <h5 class="mb-4">Elevating Education </h5>
            <h5 class="mb-4" style="color: rgb(220, 94, 94);"> Through Core Value</h5>
        </div>


        <div class="row g-4">
            <div class="col-md-6">
                <div class="value-box">
                    <i class="bi bi-award" style="color: green;"></i>
                    <h6>Excellence</h6>
                    <p>Our commitment to surpassing expectations propels us, ensuring that every project not only
                        distinguishes itself but also shines with exceptional quality. Our team of technology
                        experts craft immersive experiences that leave a lasting impact.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="value-box">
                    <i class="bi bi-lightbulb" style="color: green;"></i>
                    <h6>Innovation</h6>
                    <p>We embrace creativity and forward thinking, constantly seeking out new ideas and technologies
                        to drive positive change. Each idea we conceive expands boundaries and opens new frontiers,
                        pushing us towards groundbreaking achievements.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="value-box">
                    <i class="bi bi-shield-check" style="color: green;"></i>
                    <h6>Integrity</h6>
                    <p>Honesty, transparency, and ethical behavior are non-negotiable principles that guide us to do
                        what's right, even when no one is watching. In a world reliant on digital interactions, our
                        commitment to trust builds enduring relationships with our clients.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="value-box">
                    <i class="bi bi-heart" style="color: green;"></i>

                    <h6>Dedication</h6>
                    <p>At AL-QEMMA we are united by a shared passion for making a difference and a relentless drive
                        to achieve our goals and deliver exceptional results. Our commitment to making a meaningful
                        impact is as deep and enduring as the ocean itself.</p>
                </div>
            </div>
        </div>

        </div>

        <!-- Partnership -->
        <div class="row g-4 align-items-center text-center">
            <div class="col-12">
                <h2 class="fw-bold mt-5 mb-4">A Strong Partnership</h2>
            </div>

            <div class="col-lg-6 mt-1 text-start">
                <p>
                    <strong>Horion</strong> Technologies is fundamental to our mission of delivering cutting-edge
                    interactive solutions to schools and businesses. By partnering with SMART, we gain access to
                    industry-leading interactive technologies that empower educators, professionals, and organizations
                    to achieve their goals.
                </p>
                <p>
                    Working closely with <strong>Horion</strong> Technologies ensures that our team is well-equipped to
                    provide
                    comprehensive training, technical support, and maintenance services to our customers. It also
                    enables us to seamlessly integrate their products into educational and business environments. This
                    integration enhances functionality, usability, and overall user experience.
                </p>
                <p>
                    We are committed to leveraging our partnership to provide tailored solutions that meet the unique
                    needs of schools and businesses, ensuring optimal outcomes and success.
                </p>
            </div>

            <div class="col-lg-6 position-relative text-center mt-1" style="height: 400px;">
                <!-- container للصور مع position-relative -->
                <img src="{{ asset('assets') }}/images/training1.png" class="screen-1 position-absolute" alt="">
                <img src="{{ asset('assets') }}/images/training2.png" class="screen-2 position-absolute" alt="">
                <img src="{{ asset('assets') }}/images/training3.png" class="screen-3 position-absolute" alt="">
            </div>
        </div>



    </section>
@endsection
