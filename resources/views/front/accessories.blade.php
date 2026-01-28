@extends('front.master')
@section('title', __('keywords.products'))
@section('products-activation', 'active')
@section('content')

    <section class="shop-board-section container">
        <section class="shop-board-section container">
            @if (session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row g-4 mb-4">
                <div class="col-12">
                    <div
                        class="collection-card d-flex flex-column flex-md-row align-items-center justify-content-between p-4 shadow rounded">

                        <!-- النص -->
                        <div class="text-section mb-3 mb-md-0" style="max-width: 100%;">
                            <h5 class="fw-bold main-address">{{ __('theme.collection_boards') }}</h5>
                            <p class="text-muted small">{{ __('theme.collection_boards_desc') }}</p>
                        </div>

                        <!-- الصورة -->
                        <div class="image-section" style="flex-shrink: 0;">
                            <img src="{{ asset('assets/images/shop1.png') }}" alt="{{ __('theme.collection_boards') }}"
                                class="img-fluid rounded" style="width: 350px; height: 200px; object-fit: cover;">
                        </div>

                    </div>
                </div>
            </div>


            <div class="row g-4 mb-4">

                @foreach ($products as $product)
                    <div class="col-12">

                        <div class="card shadow-sm p-4">
                            <div class="row g-4 align-items-start">

                                <!-- TEXT -->
                                <div class="col-lg-7 col-12">
                                    <h4>{{ $product->title }}</h4>

                                    <!-- الوصف كامل -->
                                    <p class="mb-2">
                                        {{ $product->description }}
                                    </p>

                                    <ul class="small text-muted ps-3 mb-3">
                                        @forelse ($product->product_features ?? [] as $feature)
                                            <li>{{ $feature }}</li>
                                        @empty
                                            <li class="text-muted">{{ __('theme.no_features') }}</li>
                                        @endforelse
                                    </ul>

                                    <hr>

                                    <p class="fw-bold mb-2">
                                        {{ __('theme.price') }}:
                                        {{ number_format($product->price) }} EGP
                                    </p>

                                    <div class="d-flex align-items-center gap-2 mt-3">

                                        <a href="{{ route('front.productDetails', $product) }}"
                                            class="btn btn-primary btn-sm">
                                            {{ __('theme.view_details') }}
                                        </a>

                                        <form action="{{ route('front.cart.add', $product) }}" method="POST"
                                            class="m-0">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-secondary btn-sm">
                                                {{ __('theme.add_to_cart') }}
                                            </button>
                                        </form>

                                    </div>

                                </div>

                                <div class="col-lg-5 col-12">
                                    <img src="{{ asset('storage/products/' . $product->image) }}"
                                        class="img-fluid rounded object-fit-contain product-img"
                                        alt="{{ $product->title }}">
                                </div>


                            </div>
                        </div>

                    </div>
                @endforeach

                <!-- Pagination -->
                <div class="col-12 mt-3">
                    {{ $products->links() }}
                </div>

            </div>

        </section>
    @endsection
