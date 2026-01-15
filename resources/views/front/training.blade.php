 @extends('front.master')
 @section('content')
     <section class="training2-section container" style="padding-top:140px;">

         <div class="row g-4 mb-4 d-flex flex-nowrap">

             <!-- Text Card -->
             <div class="d-flex" style="flex: 0 0 50%;">
                 <div class="training2-card flex-fill">
                     <h4>Hikvision Professional Learning</h4>
                     <p>
                         Discover your full potential with our transformative training programs...
                     </p>
                 </div>
             </div>

             <!-- Image Card -->
             <div class="d-flex" style="flex: 0 0 50%;">
                 <div class="training2-card image-card flex-fill">
                     <img src="{{ asset('assets') }}/images/training10.png" alt="" class="img-cover">
                 </div>
             </div>

         </div>


         <!-- Values Section -->
         <div class="about2-values text-center mb-5">
             <h2 class="mb-4" style="color: rgb(220, 94, 94);">Professional Development</h2>
         </div>

         <div class="row g-4">
             <div class="col-md-4">
                 <div class="value-box">
                     <h4>Effective Use of Technology</h4>
                     <p>Equip yourself with the skills and knowledge needed to effectively use Hikvision interactive
                         displays in teaching and training. Learn how to integrate Hikvision’s advanced interactive tools
                         into your lessons to make learning more engaging, dynamic, and impactful.</p>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="value-box">
                     <h4>Improved Student Engagement</h4>
                     <p>Discover how to create interactive, multimedia-rich learning experiences using Hikvision panels.
                         Increase student engagement and motivation through tools that support collaboration, creativity,
                         and active participation—leading to stronger learning outcomes.</p>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="value-box">
                     <h4>Enhanced Collaboration</h4>
                     <p>Learn how to facilitate collaborative learning activities with Hikvision’s multi-touch and
                         multi-user capabilities. Students can work together on projects, share ideas, and collaborate in
                         real-time, boosting teamwork and communication skills.</p>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="value-box">
                     <h4>Personalized Learning</h4>
                     <p>Learn how to design personalized learning experiences using Hikvision’s flexible digital tools.
                         Tailor lessons to meet the unique needs, levels, and learning styles of each student—making
                         instruction more adaptive and effective.</p>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="value-box">
                     <h4>Enhancing Classroom Relevance</h4>
                     <p>Discover how to bring real-world scenarios into the classroom using Hikvision interactive
                         displays. Help students connect their learning to real-life applications, making lessons more
                         meaningful and relevant to the world around them.</p>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="value-box">
                     <h4>Adapting to Change</h4>
                     <p>Education and technology are constantly evolving. Hikvision professional development helps
                         teachers and institutions adapt to new tools, new methods, and new challenges—ensuring they
                         continue to teach effectively in today’s fast-changing environment.</p>
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
                                 <span class="right">Company/School</span>
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
                                 <textarea class="form-control form-control-lg" rows="5" placeholder="Enter Your Message"></textarea>
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
                                 <textarea class="form-control form-control-lg" rows="5" placeholder="Enter your message"></textarea>
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
