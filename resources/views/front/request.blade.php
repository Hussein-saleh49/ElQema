 @extends("front.master")
 @section("content")
 <!-- Form Section -->
    <section class="request-demo-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-4">
                    <h2 class="section-title">Request a Demo Now</h2>
                    <p class="section-desc">Witness the transformative power of our products.</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form class="demo-form">
                        <div class="mb-3">
                            <label for="company" class="form-label">Company / School / University</label>
                            <input type="text" class="form-control" id="company"
                                placeholder="Enter your organization">
                        </div>

                        <div class="mb-3">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullname"
                                placeholder="Enter your full name">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="phone"
                                placeholder="Enter your phone number">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Get Started</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection