@extends('front.master')
@section('title', __('keywords.product_details'))
@section('content')
    <!-- Product Images & Content Section -->
    <section class="product-images-section">
        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

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
                                @forelse ($product->images as $thumb)
                                    <img src="{{ asset('storage/products/' . $thumb->image) }}"
                                        data-image="{{ asset('storage/products/' . $thumb->image) }}"
                                        alt="Thumb {{ $loop->iteration }}" class="thumb-img">
                                @empty
                                    <p class="text-muted">No thumbnails available</p>
                                @endforelse
                            </div>


                            <button class="thumb-arrow thumb-arrow-down desktop-arrow">
                                <i class="bi bi-chevron-down"></i>
                            </button>

                        </div>

                        <!-- Main Image -->
                        <div class="main-image-card bg-white rounded-3 overflow-hidden w-100 position-relative">
                            <img src="{{ asset('storage/products/' . $product->image) }}" class="main-img rounded-3"     
                                id="mainProductImage" alt="{{ $product->name }}">


                            
                        </div>

                    </div>
                </div>

                <!-- Content Column -->
                <div class="col-lg-6 d-flex flex-column">
                    <h3 class="product-title"><span class="brand">{{ $product->name }}</h3>
                    <p class="product-desc">
                        {{ $product->description }}
                    </p>

                    {{-- <div class="size-select mb-3">
                        <select class="form-select w-auto">
                            <option>65 inch</option>
                            <option>75 inch</option>
                            <option>86 inch</option>
                        </select>
                    </div> --}}

                    <hr>
                    <h5 class="price">EGP {{ number_format($product->price) }}</h5>
                    @if (!$product->is_active)
                        <button class="btn out-stock-btn mt-2" disabled>{{ __('theme.out_of_stock') }}</button>
                    @else
                        <form action="{{ route('front.cart.add', $product) }}" method="POST">
                            @csrf
                            <button class="btn btn-primary mt-2">{{ __('theme.add_to_cart') }}</button>
                        </form>
                    @endif
                    <div class="column-end-desc mt-auto">
                        <h5 class="desc-title">{{ __('theme.view_details') }}</h5>
                        <p>
                            @foreach ($product->product_features ?? [] as $key => $feature)
                                <strong>Feature {{ $key + 1 }}:</strong> {{ $feature }}<br>
                            @endforeach
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
                    <div class="spec-item"><i class="bi bi-display"></i>
                        <p>4K Ultra HD<br>50,000 hr LED</p>
                    </div>
                    <div class="spec-item"><i class="bi bi-android2"></i>
                        <p>Android 13<br>Embedded Computing</p>
                    </div>
                    <div class="spec-item"><i class="bi bi-mic"></i>
                        <p>Integrated<br>Microphone Array</p>
                    </div>
                    <div class="spec-item"><i class="bi bi-speaker"></i>
                        <p>2×20W Speakers<br>15W Subwoofer</p>
                    </div>
                </div>

                <div class="col-lg-4 specs-image">
                    <img src="{{ asset('storage/products/' . $product->image) }}" class="main-img rounded-3"
                        alt="{{ $product->name }}">
                </div>

                <div class="col-lg-4 specs-column">
                    <div class="spec-item"><i class="bi bi-usb-c"></i>
                        <p>Dual USB-C<br>65W Power</p>
                    </div>
                    <div class="spec-item"><i class="bi bi-wifi"></i>
                        <p>NFC & QR<br>Sign-in</p>
                    </div>
                    <div class="spec-item"><i class="bi bi-arrows-angle-expand"></i>
                        <p>Proximity &<br>Environment Sensors</p>
                    </div>
                    <div class="spec-item"><i class="bi bi-pencil"></i>
                        <p>Free Software<br>Included</p>
                    </div>
                </div>

            </div>

            <div class="d-flex justify-content-center mt-4">
                  @if (!$product->is_active)
                <button class="btn out-stock-btn" disabled>{{ __("theme.out_of_stock") }}</button>
                @endif
            </div>
        </div>
    </section>

    <!-- Learn More Section -->
    <section class="learn-more-new-section py-5">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 d-flex order-lg-2">
                    <div class="learn-more-card image-card second-image flex-fill">
                        <img src="{{ asset('assets/images/board11.png') }}" alt="Service 2" class="img-cover">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <h4>{{ __('theme.product_title') }}</h4>
                    <p>
                        {{ __('theme.product_desc') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Similar Products Section -->
    <section class="similar-products-section py-5">
        <div class="container">
            <h3 class="section-title text-center mb-4">{{ __('theme.similar_products') }}</h3>
            <div class="row g-4">

                @forelse($similarProducts as $simProduct)
                    <div class="col-lg-6 d-flex">
                        <div
                            class="similar-card flex-fill d-flex flex-column flex-lg-row align-items-center gap-3 p-4 shadow-sm rounded-4">

                            <!-- Product Image -->
                            <div class="image-wrapper flex-shrink-0 text-center">
                                <img src="{{ asset('storage/products/' . $simProduct->image) }}"
                                    alt="{{ $simProduct->name }}" class="img-cover rounded-3">
                            </div>

                            <!-- Product Info -->
                            <div class="text-wrapper">
                                <h5 class="product-name">{{ $simProduct->name }}</h5>
                                <p class="product-desc">{{ $simProduct->description }}</p>

                                @if (!empty($simProduct->product_features))
                                    <ul class="small text-muted ps-3 mb-2">
                                        @foreach ($simProduct->product_features as $feature)
                                            <li>{{ $feature }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                <div class="d-flex gap-2 mt-2">
                                    <a href="{{ route('front.productDetails', $simProduct) }}"
                                        class="btn btn-primary btn-sm">{{ __('theme.view_details') }}</a>
                                    <a href="#"
                                        class="btn btn-outline-secondary btn-sm">{{ __('theme.add_to_cart') }}</a>
                                </div>
                            </div>

                        </div>
                    </div>
                @empty
                    <p class="text-center text-muted">No similar products found.</p>
                @endforelse

            </div>
        </div>
    </section>

@endsection
