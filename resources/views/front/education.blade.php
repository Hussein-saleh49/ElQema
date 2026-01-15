 @extends("front.master")
 @section("content")
 <section class="big-card-section py-5">
        <div class="container">

            <!-- Big Card with Background Image -->
            <div class="big-card position-relative">

                <!-- Small Text Card (Top Left) -->
                <div class="small-text-card p-3 shadow-sm">
                    <h5>Elevate learning with AL-QEMMA</h5>
                    <p class="small text-white">
                        From interactive displays and collaborative software to professional training and ongoing
                        support,
                        we are committed to driving educational excellence in our communities. Together, we can help you
                        transform your classrooms into engaging hubs of creativity and discovery.
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
            <div
                class="shop-card full-width-card d-flex flex-column flex-lg-row align-items-center gap-4 p-4 shadow-sm mx-0">

                <!-- Text Left -->
                <div class="text-wrapper flex-fill pe-lg-4">
                    <h4>The effortless choice for educators and IT professionals</h4>
                    <p>
                        Embark on an educational journey where simplicity meets innovation with Intellevo’s cornerstone
                        solution – SMART interactive displays. SMART provides all the services you need to save time and
                        adoption pains: exceptional ease of use, built-in security, automatic OTA updates, and extensive
                        support.
                    </p>
                    <div class="d-flex gap-2 mt-3">
                        <a href="#" class="btn btn-primary btn-sm">View Details</a>
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
                    <h4>Connect any classroom with Board</h4>
                    <p>
                        Board solutions are designed for active learning. Our software and hardware connect students to
                        create a truly engaged learning environment wherever they are.
                        When you choose SMART for your classrooms, you get technology that works on its own and with
                        existing platforms such as Microsoft and Google.
                        So teachers can spend more time teaching and less time figuring out new complicated tools,
                        signing into endless platforms and breaking lesson flow.
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
                    <h4>Learning software teachers love</h4>
                    <p>
                        Superior digital ink that behaves how you expect and doesn’t interfere with your teaching. Ink
                        is the ONLY inking experience on the market that really is as easy as putting pen to paper: No
                        overlays, Intelligent activation, Flexibility, Easy saving.
                        Optimized for Board interactive displays, award-winning SMART Notebook is a FREE learning
                        software that helps you create dynamic, interactive lessons that encourage active learning.
                        Enable hands-on learning in a digital environment no matter what you’re teaching, increasing
                        student engagement and knowledge retention.
                    </p>

                </div>
            </div>

        </div>
    </section>
@endsection