  @extends('front.master')
  @section("title","Contacts")
  @section("contacts-activation","active")
  @section('content')
      <section class="contact-section " style="padding-top:140px;">
          <div class="container">

              <div class="text-center mb-5">
                  <h2 class="fw-bold">Contact Us</h2>

              </div>


              <!-- Form -->
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="card shadow p-4">

                          <!-- Contact Info ONE ROW -->
                          <div class="row text-center mb-4">
                              <div class="col-md-4 mb-3 mb-md-0">
                                  <i class="bi bi-geo-alt fs-4 text-primary"></i>
                                  <p class="mb-0 small">
                                      96 Tahrir St.Dokki, Giza, Egypt
                                  </p>
                              </div>

                              <div class="col-md-4 mb-3 mb-md-0">
                                  <i class="bi bi-telephone fs-4 text-primary"></i>
                                  <p class="mb-0 small">
                                      +20 233386200
                                  </p>
                              </div>

                              <div class="col-md-4">
                                  <i class="bi bi-envelope fs-4 text-primary"></i>
                                  <p class="mb-0 small">
                                      Purchasing@alqemmaeg.com
                                  </p>
                              </div>
                          </div>

                          <hr>

                          <h5 class="mb-2 d-flex align-items-center gap-2">
                              <i class="bi bi-person"></i> Get In Touch
                          </h5>

                          <div class="d-flex justify-content-center mb-4">
                              <div class="toggle-button contact-toggle">
                                  <input type="checkbox" id="toggleBtn">
                                  <label for="toggleBtn">
                                      <span class="left">Individual User</span>
                                      <span class="right">Company/School</span>
                                  </label>
                              </div>
                          </div>

                          <div id="individualForm">
                              <form>
                                  <div class="row">
                                      <div class="col-md-6 mb-3">
                                          <input type="text" class="form-control" placeholder="First Name">
                                      </div>
                                      <div class="col-md-6 mb-3">
                                          <input type="text" class="form-control" placeholder="Last Name">
                                      </div>
                                  </div>

                                  <div class="mb-3">
                                      <input type="email" class="form-control" placeholder="Email Address">
                                  </div>

                                  <div class="mb-3">
                                      <textarea class="form-control" rows="4" placeholder="Enter your message"></textarea>
                                  </div>

                                  <button class="btn btn-primary w-100">Contact Us</button>
                              </form>
                          </div>
                          <!-- // -->
                          <div id="companyForm" style="display: none;">
                              <form>
                                  <!-- Company / Department / Job -->
                                  <div class="row mb-3">
                                      <div class="col-md-4 mb-3 mb-md-0">
                                          <label class="form-label">Company / School / University</label>
                                          <input type="text" class="form-control"
                                              placeholder="Company / School / University">
                                      </div>
                                      <div class="col-md-4 mb-3 mb-md-0">
                                          <label class="form-label">Department</label>
                                          <input type="text" class="form-control" placeholder="Department">
                                      </div>
                                      <div class="col-md-4">
                                          <label class="form-label">Job Title</label>
                                          <input type="text" class="form-control" placeholder="Job Title">
                                      </div>
                                  </div>

                                  <!-- Name -->
                                  <div class="row mb-3">
                                      <div class="col-md-6 mb-3 mb-md-0">
                                          <label class="form-label">First Name</label>
                                          <input type="text" class="form-control" placeholder="First Name">
                                      </div>
                                      <div class="col-md-6">
                                          <label class="form-label">Last Name</label>
                                          <input type="text" class="form-control" placeholder="Last Name">
                                      </div>
                                  </div>

                                  <!-- Email -->
                                  <div class="mb-3">
                                      <label class="form-label">Email Address</label>
                                      <input type="email" class="form-control" placeholder="Enter Email">
                                  </div>

                                  <!-- Message -->
                                  <div class="mb-3">
                                      <label class="form-label">Your Message</label>
                                      <textarea class="form-control" rows="4" placeholder="Enter your message"></textarea>
                                  </div>

                                  <!-- Submit Button -->
                                  <button type="submit" class="btn btn-primary w-100">Contact Us</button>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </section>
  @endsection
