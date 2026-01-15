 @extends("front.master")
 @section("content")
 <!-- Product Images & Content Section -->
    <section class="product-images-section">
        <div class="container">
            <div class="row align-items-start g-4">

                <!-- Images Column -->
                <div class="col-lg-6">
                    <div class="product-images-wrapper">

                        <!-- Thumbnails -->
                        <div class="thumbs-card-wrapper position-relative">
                           
                            <button class="thumb-arrow thumb-arrow-up desktop-arrow">
                                <i class="bi bi-chevron-up"></i>
                            </button>

                            <div class="thumbs-card">
                                <img src="{{ asset("assets") }}/images/board8.png" alt="Thumb 1" class="thumb-img">
                                <img src="{{ asset("assets") }}/images/board9.png" alt="Thumb 2" class="thumb-img">
                                <img src="{{ asset("assets") }}/images/board10.png" alt="Thumb 3" class="thumb-img">
                                <img src="{{ asset("assets") }}/images/board10.png" alt="Thumb 4" class="thumb-img">
                                <img src="{{ asset("assets") }}/images/board10.png" alt="Thumb 5" class="thumb-img">
                                <img src="{{ asset("assets") }}/images/board10.png" alt="Thumb 6" class="thumb-img">
                            </div>

                            <button class="thumb-arrow thumb-arrow-down desktop-arrow">
                                <i class="bi bi-chevron-down"></i>
                            </button>
                          
                        </div>

                        <!-- Main Image -->
                        <div class="main-image-card bg-white rounded-3 overflow-hidden w-100 position-relative">
                            <img src="{{ asset("assets") }}/images/board7.png" class="main-img rounded-3" alt="Board Main Image">

                            <button class="heart-btn">
                                <i class="bi bi-heart"></i>
                                <i class="bi bi-heart-fill"></i>
                            </button>
                        </div>

                    </div>
                </div>

                <!-- Content Column -->
                <div class="col-lg-6 d-flex flex-column">
                    <h3 class="product-title"><span class="brand">HIKVISION</span> DS86DR5/C</h3>
                    <p class="product-desc">
                        Hikvision Interactive panels are not just a purchase-they are a future-proof investment.
                        Transform traditional lessons into immersive, engaging learning experiences with
                        Hikvision’s advanced interactive technology.
                    </p>

                    <div class="size-select mb-3">
                        <select class="form-select w-auto">
                            <option>65 inch</option>
                            <option>75 inch</option>
                            <option>86 inch</option>
                        </select>
                    </div>

                    <hr>
                    <h5 class="price">EGP 160,000</h5>
                    <button class="btn out-stock-btn mt-2" disabled>Out of Stock</button>

                    <div class="column-end-desc mt-auto">
                        <h5 class="desc-title">DESCRIPTION</h5>
                        <p>
                            <strong>SIZE</strong> : (65 - 75 - 86 - 98) INCH<br>
                            <strong>RAM</strong> : 8 GB<br>
                            <strong>STORAGE</strong> : 128 GB<br>
                            <strong>PROCESSOR</strong> : Cortex - A55 x 8 (8 CORE)
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Specs Section -->
    <section class="specs-section py-5">
        <div class="container">
            <div class="row specs-wrapper">

                <div class="col-lg-4 specs-column">
                    <div class="spec-item"><i class="bi bi-display"></i><p>4K Ultra HD<br>50,000 hr LED</p></div>
                    <div class="spec-item"><i class="bi bi-android2"></i><p>Android 13<br>Embedded Computing</p></div>
                    <div class="spec-item"><i class="bi bi-mic"></i><p>Integrated<br>Microphone Array</p></div>
                    <div class="spec-item"><i class="bi bi-speaker"></i><p>2×20W Speakers<br>15W Subwoofer</p></div>
                </div>

                <div class="col-lg-4 specs-image">
                    <img src="{{ asset("assets") }}/images/board7.png" alt="Board" class="board-center-img rounded-3">
                </div>

                <div class="col-lg-4 specs-column">
                    <div class="spec-item"><i class="bi bi-usb-c"></i><p>Dual USB-C<br>65W Power</p></div>
                    <div class="spec-item"><i class="bi bi-wifi"></i><p>NFC & QR<br>Sign-in</p></div>
                    <div class="spec-item"><i class="bi bi-arrows-angle-expand"></i><p>Proximity &<br>Environment Sensors</p></div>
                    <div class="spec-item"><i class="bi bi-pencil"></i><p>Free Software<br>Included</p></div>
                </div>

            </div>

            <div class="d-flex justify-content-center mt-4">
                <button class="btn out-stock-btn" disabled>Out of Stock</button>
            </div>
        </div>
    </section>

    <!-- Learn More Section -->
    <section class="learn-more-new-section py-5">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 d-flex order-lg-2">
                    <div class="learn-more-card image-card second-image flex-fill">
                        <img src="{{ asset("assets") }}/images/board11.png" alt="Service 2" class="img-cover">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <h4>Explore what’s possible: Next-level engagement starts here</h4>
                    <p>
                        Our patented Tool Explorer technology takes interactivity and accessibility to the next level,
                        recognizing real-world objects like SMART programmable tools.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Similar Products Section -->
    <section class="similar-products-section py-5">
        <div class="container">
            <h3 class="section-title text-center mb-4">Similar Products</h3>
            <div class="row g-4">

                <!-- Product 1 -->
                <div class="col-lg-6 d-flex">
                    <div class="similar-card flex-fill d-flex flex-column flex-lg-row align-items-center gap-3 p-4 shadow-sm rounded-4">
                        <div class="image-wrapper flex-shrink-0 text-center">
                            <img src="{{ asset("assets") }}/images/feature4.png" alt="Product 1" class="img-cover rounded-3">
                        </div>
                        <div class="text-wrapper">
                            <h5 class="product-name">HORION Board X7 Series</h5>
                            <p class="product-desc">The X7 Series brings enhanced interactivity and collaborative tools.</p>
                            <ul class="small text-muted ps-3 mb-2">
                                <li>Advanced multi-touch technology</li>
                                <li>Seamless NFC & QR login</li>
                                <li>High durability & long-lasting display</li>
                            </ul>
                            <div class="d-flex gap-2 mt-2">
                                <a href="#" class="btn btn-primary btn-sm">View Details</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-lg-6 d-flex">
                    <div class="similar-card flex-fill d-flex flex-column flex-lg-row align-items-center gap-3 p-4 shadow-sm rounded-4">
                        <div class="image-wrapper flex-shrink-0 text-center">
                            <img src="{{ asset("assets") }}/images/feature5.png" alt="Product 2" class="img-cover rounded-3">
                        </div>
                        <div class="text-wrapper">
                            <h5 class="product-name">HORION Board Z9 Series</h5>
                            <p class="product-desc">Z9 Series delivers superior collaboration and interactivity.</p>
                            <ul class="small text-muted ps-3 mb-2">
                                <li>Ultra HD clarity</li>
                                <li>Embedded Android 13 OS</li>
                                <li>Multiple connectivity options</li>
                            </ul>
                            <div class="d-flex gap-2 mt-2">
                                <a href="#" class="btn btn-primary btn-sm">View Details</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection