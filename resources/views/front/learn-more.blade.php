 @extends("front.master")
 @section("content")
 <!-- ===================== Learn More Section ===================== -->
    <section class="learn-more-section container" style="padding-top:140px;">

        <div class="row g-4 mb-4 d-flex align-items-stretch">

            <!-- Text Card -->
            <div class="col-lg-6 d-flex flex-column align-items-start">
                <!-- الكارد النصي -->
                <div class="learn-more-card text-card flex-fill">
                    <h4>Hikvision Professional Learning</h4>
                    <p>
                        Our sales and consultation service provides personalized guidance and expert recommendations to
                        help you choose the right technology solutions for your specific needs and goals.
                    </p>
                </div>

                <!-- الزر أسفل الكارد -->
                <a href="#" class="learn-more-btn mt-3">Inquire about this service</a>
            </div>

            <!-- Image Card -->
            <div class="col-lg-6 d-flex">
                <div class="learn-more-card image-card flex-fill">
                    <img src="{{ asset("assets") }}/images/learn1.png" alt="" class="img-cover">
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
                        <img src="{{ asset("assets") }}/images/learn2.png" alt="Service 1" class="img-cover">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h4>Tailored technology solutions</h4>
                    <p>
                        Our sales and consultation service helps you navigate the complexities of technology adoption,
                        whether you’re a school or business. Our experts collaborate closely with you to assess your
                        unique needs, offering tailored advice and expert recommendations. Whether you’re upgrading
                        classroom displays to enhance interactive learning or implementing a new IT infrastructure to
                        support business operations, we provide comprehensive solutions.
                        Our team’s deep industry expertise and strong vendor relationships allow us to offer competitive
                        pricing and access to top-quality products. From the initial consultation to post-sales support,
                        we are committed to delivering exceptional service, ensuring a seamless experience from start to
                        finish. Partner with AL-QEMMA to unlock the potential of technology for your organization,
                        empowering growth and innovation.
                    </p>

                </div>
            </div>

            <!-- Row 2: Image Left, Text Right -->
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 d-flex order-lg-2">
                    <div class="learn-more-card image-card second-image flex-fill">
                        <img src="{{ asset("assets") }}/images/learn3.png" alt="Service 2" class="img-cover">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <h4>Satisfactory experience</h4>
                    <p>
                        Tailored Solutions:
                        We offer personalized recommendations based on your specific needs and objectives, ensuring that
                        the technology solutions we recommend align perfectly with your goals.
                        Industry Expertise:
                        Our team comprises knowledgeable experts with deep experience in both the education and business
                        sectors, staying updated with the latest trends and technologies to provide informed guidance.
                        Customer-Centric Approach:
                        Your satisfaction is our priority. We are committed to delivering exceptional service and
                        support, building lasting relationships based on trust and reliability.
                    </p>

                </div>
            </div>

        </div>
    </section>

     <section class="training-form-section container" style="padding-top:140px; padding-bottom:80px;">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg p-5">

                    <!-- Header -->
                    <div class="text-center mb-4">
                        <h2 class="fw-bold">Register for Training</h2>
                        <p class="text-muted fs-5">Apply now for our training programs</p>
                    </div>

                    <div class="d-flex justify-content-center mb-4">
                        <div class="toggle-button contact-toggle">
                            <input type="checkbox" id="toggleBtn">
                            <label for="toggleBtn">
                                <span class="left">Individual User</span>
                                <span class="right">Company / School</span>
                            </label>
                        </div>
                    </div>
                    <hr>

                    <!-- Form -->
                    <div id="individualForm">
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="First Name">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control form-control-lg" placeholder="Email Address">
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Enter Your Message</label>
                                <textarea class="form-control form-control-lg" rows="5"
                                    placeholder="Enter Your Message"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg w-100">Apply Now</button>
                        </form>
                    </div>

                    <!-- // -->
                    <div id="companyForm" style="display: none;">
                        <form>
                            <!-- Company / Department / Job -->
                            <div class="row mb-3">
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <label class="form-label">Company / School / University</label>
                                    <input type="text" class="form-control form-control-lg"
                                        placeholder="Company / School / University">
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <label class="form-label">Department</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="Department">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Job Title</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="Job Title">
                                </div>
                            </div>

                            <!-- Name -->
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="First Name">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="Last Name">
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                            </div>

                            <!-- Message -->
                            <div class="mb-4">
                                <label class="form-label">Your Message</label>
                                <textarea class="form-control form-control-lg" rows="5"
                                    placeholder="Enter your message"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary btn-lg w-100">Apply Now</button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection