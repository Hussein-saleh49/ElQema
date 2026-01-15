 @extends('front.master')
 @section("title","Shop")
 @section('shop-activation', 'active')
 @section('content')
     <!-- ================= SHOP PAGE ================= -->
     <div class="shop-page">

         <!-- SHOP HERO -->
         <section class="shop-hero">
             <h1>Shop</h1>
             <p class="text-muted">Explore The Full Collection</p>
         </section>

         <!-- COLLECTION -->
         <div class="container mb-5">
             <div class="row g-4 justify-content-center">
                 <div class="col-12 col-md-6">
                     <div class="collection-card">
                         <div>
                             <h5 class="fw-bold">Collection Boards</h5>
                             <p class="text-muted small">
                                 Elevate collaboration with cutting-edge boards.
                             </p>
                             <a href="#" class="btn btn-dark btn-sm">Shop Now</a>
                         </div>
                         <img src="{{ asset('assets') }}/images/feature1.png" alt="">
                     </div>
                 </div>

                 <div class="col-12 col-md-6">
                     <div class="collection-card">
                         <div>
                             <h5 class="fw-bold">PCs & Accessories</h5>
                             <p class="text-muted small">
                                 Modern efficiency with reliable PCs.
                             </p>
                             <a href="#" class="btn btn-dark btn-sm">Shop Now</a>
                         </div>
                         <img src="{{ asset('assets') }}/images/shop1.png" alt="">
                     </div>
                 </div>
             </div>
         </div>

         <!-- SEARCH -->
         <div class="container mb-4">
             <div class="row g-3">
                 <div class="col-md-9">
                     <input type="text" class="form-control rounded-pill" placeholder="Search...">
                 </div>
                 <div class="col-md-3">
                     <select class="form-select rounded-pill">
                         <option>Price: High to Low</option>
                         <option>Price: Low to High</option>
                     </select>
                 </div>
             </div>
         </div>

         <!-- MAIN CONTENT -->
         <div class="container mb-5">
             <div class="row g-4">

                 <!-- FILTER -->
                 <div class="col-12 col-lg-3">
                     <div class="filter-box">
                         <h4 class="fw-bold mb-3">Filter</h4>

                         <div class="mb-3">
                             <small class="fw-semibold">Brand</small>
                             <div class="filter-option">
                                 <span>SMART</span>
                                 <input type="checkbox">
                             </div>
                             <div class="filter-option">
                                 <span>Cables & Accessories</span>
                                 <input type="checkbox">
                             </div>
                         </div>

                         <div class="mb-3">
                             <small class="fw-semibold">Product Type</small>
                             <div class="filter-option">
                                 <span>Interactive Displays</span>
                                 <input type="checkbox">
                             </div>
                             <div class="filter-option">
                                 <span>HDMI Cable</span>
                                 <input type="checkbox">
                             </div>
                         </div>

                         <div>
                             <small class="fw-semibold">Price</small>
                             <input type="range" class="form-range mt-2">
                         </div>
                     </div>
                 </div>

                 <!-- PRODUCTS -->
                 <div class="col-12 col-lg-9">
                     <div class="row g-4">
                         <!-- PRODUCT EXAMPLE -->
                         <div class="col-6 col-md-4">
                             <div class="product-card">
                                 <img src="{{ asset('assets') }}/images/feature1.png" alt="">
                                 <h6>HORIZON 75 Max Pro</h6>
                                 <small class="text-muted">Start From</small>
                                 <div class="price">EGP 55,000</div>
                                 <div class="d-flex justify-content-between align-items-center mt-2">
                                     <button class="btn btn-add btn-sm">Add to Cart</button>
                                     <button class="heart-btn">
                                         <i class="bi bi-heart"></i>
                                         <i class="bi bi-heart-fill"></i>
                                     </button>
                                 </div>
                             </div>
                         </div>
                         <!-- Duplicate other products as needed -->
                         <div class="col-6 col-md-4">
                             <div class="product-card">
                                 <img src="{{ asset('assets') }}/images/feature2.png" alt="">
                                 <h6>HDMI Adapter</h6>
                                 <small class="text-muted">Start From</small>
                                 <div class="price">EGP 225</div>
                                 <div class="d-flex justify-content-between align-items-center mt-2">
                                     <button class="btn btn-add btn-sm">Add to Cart</button>
                                     <button class="heart-btn">
                                         <i class="bi bi-heart"></i>
                                         <i class="bi bi-heart-fill"></i>
                                     </button>
                                 </div>
                             </div>
                         </div>
                         <div class="col-6 col-md-4">
                             <div class="product-card">
                                 <img src="{{ asset('assets') }}/images/feature3.png" alt="">
                                 <h6>Interactive Display</h6>
                                 <small class="text-muted">Start From</small>
                                 <div class="price">EGP 18,500</div>
                                 <div class="d-flex justify-content-between align-items-center mt-2">
                                     <button class="btn btn-add btn-sm">Add to Cart</button>
                                     <button class="heart-btn">
                                         <i class="bi bi-heart"></i>
                                         <i class="bi bi-heart-fill"></i>
                                     </button>
                                 </div>
                             </div>
                         </div>
                         <div class="col-6 col-md-4">
                             <div class="product-card">
                                 <img src="{{ asset('assets') }}/images/feature4.png" alt="">
                                 <h6>Interactive Display</h6>
                                 <small class="text-muted">Start From</small>
                                 <div class="price">EGP 18,500</div>
                                 <div class="d-flex justify-content-between align-items-center mt-2">
                                     <button class="btn btn-add btn-sm">Add to Cart</button>
                                     <button class="heart-btn">
                                         <i class="bi bi-heart"></i>
                                         <i class="bi bi-heart-fill"></i>
                                     </button>
                                 </div>
                             </div>
                         </div>
                         <div class="col-6 col-md-4">
                             <div class="product-card">
                                 <img src="{{ asset('assets') }}/images/feature5.png" alt="">
                                 <h6>Interactive Display</h6>
                                 <small class="text-muted">Start From</small>
                                 <div class="price">EGP 18,500</div>
                                 <div class="d-flex justify-content-between align-items-center mt-2">
                                     <button class="btn btn-add btn-sm">Add to Cart</button>
                                     <button class="heart-btn">
                                         <i class="bi bi-heart"></i>
                                         <i class="bi bi-heart-fill"></i>
                                     </button>
                                 </div>
                             </div>
                         </div>
                         <div class="col-6 col-md-4">
                             <div class="product-card">
                                 <img src="{{ asset('assets') }}/images/feature6.png" alt="">
                                 <h6>Interactive Display</h6>
                                 <small class="text-muted">Start From</small>
                                 <div class="price">EGP 18,500</div>
                                 <div class="d-flex justify-content-between align-items-center mt-2">
                                     <button class="btn btn-add btn-sm">Add to Cart</button>
                                     <button class="heart-btn">
                                         <i class="bi bi-heart"></i>
                                         <i class="bi bi-heart-fill"></i>
                                     </button>
                                 </div>
                             </div>
                         </div>
                         <div class="col-6 col-md-4">
                             <div class="product-card">
                                 <img src="{{ asset('assets') }}/images/feature6.png" alt="">
                                 <h6>Interactive Display</h6>
                                 <small class="text-muted">Start From</small>
                                 <div class="price">EGP 18,500</div>
                                 <div class="d-flex justify-content-between align-items-center mt-2">
                                     <button class="btn btn-add btn-sm">Add to Cart</button>
                                     <button class="heart-btn">
                                         <i class="bi bi-heart"></i>
                                         <i class="bi bi-heart-fill"></i>
                                     </button>
                                 </div>
                             </div>
                         </div>
                         <div class="col-6 col-md-4">
                             <div class="product-card">
                                 <img src="{{ asset('assets') }}/images/feature5.png" alt="">
                                 <h6>Interactive Display</h6>
                                 <small class="text-muted">Start From</small>
                                 <div class="price">EGP 18,500</div>
                                 <div class="d-flex justify-content-between align-items-center mt-2">
                                     <button class="btn btn-add btn-sm">Add to Cart</button>
                                     <button class="heart-btn">
                                         <i class="bi bi-heart"></i>
                                         <i class="bi bi-heart-fill"></i>
                                     </button>
                                 </div>
                             </div>
                         </div>
                         <div class="col-6 col-md-4">
                             <div class="product-card">
                                 <img src="{{ asset('assets') }}/images/feature1.png" alt="">
                                 <h6>Interactive Display</h6>
                                 <small class="text-muted">Start From</small>
                                 <div class="price">EGP 18,500</div>
                                 <div class="d-flex justify-content-between align-items-center mt-2">
                                     <button class="btn btn-add btn-sm">Add to Cart</button>
                                     <button class="heart-btn">
                                         <i class="bi bi-heart"></i>
                                         <i class="bi bi-heart-fill"></i>
                                     </button>
                                 </div>
                             </div>
                         </div>
                         <!-- Add more products as needed -->
                     </div>

                     <!-- LOAD MORE -->
                     <div class="text-center mt-4">
                         <button class="btn btn-dark rounded-pill px-4">
                             See More <i class="bi bi-chevron-down"></i>
                         </button>
                     </div>
                 </div>
             </div>
         </div>



     </div>
     <!-- ================= END SHOP PAGE ================= -->
 @endsection
