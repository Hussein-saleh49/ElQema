@extends('front.master')
@section('products-activation', 'active')
@section('content')
    <section class="shop-board-section container">

        <div class="row g-4 mb-4">
            <div class="col-lg-12">
                <div class="collection-card d-flex align-items-center justify-content-between p-4 shadow rounded">

                    <!-- النص على اليسار -->
                    <div style="max-width: 55%;">
                        <h5 class="fw-bold">{{ __('theme.collection_boards') }}</h5>
                        <p class="text-muted small">{{ __('theme.collection_boards_desc') }}</p>
                    </div>

                    <!-- الصورة على اليمين -->
                    <div style="max-width: 40%;">
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

                                <div class="d-flex gap-2">
                                    <a href="{{ route('front.productDetails', $product->id) }}"
                                        class="btn btn-primary btn-sm">
                                        {{ __('theme.view_details') }}
                                    </a>

                                    <a href="#" class="btn btn-outline-secondary btn-sm">
                                        {{ __('theme.add_to_cart') }}
                                    </a>
                                </div>
                            </div>

                            <!-- IMAGE -->
                            <div class="col-lg-5 col-12">

                                <!-- Bootstrap ratio -->
                                <div>
                                    <img src="{{ asset('storage/products/' . $product->image) }}"
                                        class="img-fluid rounded object-fit-contain" style="height: 250px; width: 100%;"
                                        alt="{{ $product->title }}">
                                </div>


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
