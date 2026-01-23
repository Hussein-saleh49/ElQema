@extends('front.master')
@section('products-activation', 'active')
@section('content')
    <section class="shop-board-section container">
        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif


        <div class="row g-4 mb-4">
            <div class="col-lg-12">
                <div class="collection-card">
                    <div>
                        <h5 class="fw-bold">{{ __('theme.collection_boards') }}</h5>
                        <p class="text-muted small">{{ __('theme.collection_boards_desc') }}</p>

                    </div>
                    <img src="{{ asset('assets') }}/images/static.jpg" alt="{{ __('theme.collection_boards') }}"
                        style="width: 40%; height: 40%; object-fit: cover;">

                </div>
            </div>
        </div>
        <div class="row g-4 mb-4">

            @if ($products->count() > 0)
                @foreach ($products as $product)
                    <div class="col-lg-12">
                        <div class="shop-card d-flex flex-column flex-lg-row shadow-sm rounded p-4 gap-3">

                            <!-- نص المنتج -->
                            <div class="text-wrapper flex-fill d-flex flex-column justify-content-start"
                                style="flex: 0 0 60%; max-width: 60%; word-break: break-word;">
                                <h4>{{ $product->name }}</h4>

                                <!-- الوصف الكامل -->
                                <p>{{ $product->description }}</p>

                                <ul class="small text-muted ps-3 mb-0">
                                    @forelse ($product->product_features ?? [] as $feature)
                                        <li>{{ $feature }}</li>
                                    @empty
                                        <li class="text-muted">{{ __('theme.no_features') }}</li>
                                    @endforelse
                                </ul>

                                <hr>

                                <p class="fw-bold">
                                    {{ __('theme.price') }}: {{ number_format($product->price) }} EGP
                                </p>

                                <div class="d-flex gap-2 mt-3">
                                    <a href="{{ route('front.productDetails', $product) }}"
                                        class="btn btn-primary btn-sm">{{ __('theme.view_details') }}</a>
                                    <form action="{{ route('front.cart.add', $product) }}" method="POST"
                                        style="display: inline">
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-outline-secondary btn-sm">{{ __('theme.add_to_cart') }}</button>
                                    </form>
                                </div>
                            </div>

                            <!-- صورة المنتج -->
                            <div class="image-wrapper flex-shrink-0" style="flex: 0 0 40%; max-width: 40%;">
                                <img src="{{ asset('storage/products/' . $product->image) }}" class="img-fluid rounded"
                                    style="width: 100%; height: auto; object-fit: cover;" alt="{{ $product->title }}">
                            </div>

                        </div>
                    </div>
                @endforeach
            @endif

            <!-- Pagination -->
            <div class="mt-3 col-12">
                {{ $products->links() }}
            </div>

        </div>

    </section>
@endsection
