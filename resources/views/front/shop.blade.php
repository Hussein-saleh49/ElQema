@extends('front.master')
@section('title', __('theme.shop_title'))
@section('shop-activation', 'active')
@section('content')
    <!-- ================= SHOP PAGE ================= -->
    <div class="shop-page">

        <!-- SHOP HERO -->
        <section class="shop-hero">
            <h1>{{ __('theme.shop_title') }}</h1>
            <p class="text-muted">{{ __('theme.shop_subtitle') }}</p>
        </section>

        <!-- COLLECTION -->
        <div class="container mb-5">
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-md-6">
                    <div class="collection-card">
                        <div>
                            <h5 class="fw-bold">{{ __('theme.collection_boards') }}</h5>
                            <p class="text-muted small">{{ __('theme.collection_boards_desc') }}</p>
                            <a href="{{ route('front.boards') }}" class="btn btn-dark btn-sm">{{ __('theme.shop_now') }}</a>
                        </div>
                        <img src="{{ asset('assets') }}/images/static.jpg" alt="{{ __('theme.collection_boards') }}"
                            style="width: 50%; height: 50%; object-fit: cover;">

                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="collection-card">
                        <div>
                            <h5 class="fw-bold">{{ __('theme.pcs_accessories') }}</h5>
                            <p class="text-muted small">{{ __('theme.pcs_accessories_desc') }}</p>
                            <a href="{{ route('front.accessories') }}"
                                class="btn btn-dark btn-sm">{{ __('theme.shop_now') }}</a>
                        </div>
                        <img src="{{ asset('assets') }}/images/shop1.png" alt="{{ __('theme.pcs_accessories') }}">
                    </div>
                </div>
            </div>
        </div>

        <!-- SEARCH -->
        <div class="container mb-4">
            <form action="{{ route('front.search') }}" method="GET">
                <div class="row g-3">
                    <div class="col-md-9">
                        <input type="text" name="search" class="form-control rounded-pill"
                            value="{{ request('search') }}" placeholder="{{ __('theme.search_placeholder') }}">
                    </div>
                    <div class="col-md-3">
                        <select name="sort" class="form-select rounded-pill">
                            <option value="">-- {{ __('theme.sort_by_price') }} --</option>
                            <option value="high_to_low" {{ request('sort') == 'high_to_low' ? 'selected' : '' }}>Price:
                                High to Low</option>
                            <option value="low_to_high" {{ request('sort') == 'low_to_high' ? 'selected' : '' }}>Price: Low
                                to High</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>

        <!-- MAIN CONTENT -->
        <div class="container mb-5">
            <form action="{{ route('front.shop') }}" method="GET">
                <div class="row g-4">

                    <!-- FILTER BOX -->
                    <div class="col-12 col-lg-3">
                        <div class="filter-box p-3 border rounded">

                            <h4 class="fw-bold mb-3">{{ __('theme.filter_title') }}</h4>

                            <!-- Brands -->
                            <div class="mb-3">
                                <small class="fw-semibold">{{ __('theme.brand_label') }}</small>
                                @foreach ($brands as $brand)
                                    <div class="form-check d-flex justify-content-between align-items-center">
                                        <label class="form-check-label">{{ $brand->name }}</label>
                                        <input class="form-check-input" type="checkbox" name="brand[]"
                                            value="{{ $brand->id }}"
                                            {{ is_array(request('brand')) && in_array($brand->id, request('brand')) ? 'checked' : '' }}>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Categories -->
                            <div class="mb-3">
                                <small class="fw-semibold">{{ __('theme.product_type_label') }}</small>
                                @foreach ($categories as $category)
                                    <div class="form-check d-flex justify-content-between align-items-center">
                                        <label class="form-check-label">{{ $category->name }}</label>
                                        <input class="form-check-input" type="checkbox" name="category[]"
                                            value="{{ $category->id }}"
                                            {{ is_array(request('category')) && in_array($category->id, request('category')) ? 'checked' : '' }}>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Price Range -->
                            <div class="mb-3">
                                <small class="fw-semibold">{{ __('theme.price_label') }}</small>
                                <input type="number" name="price_min" class="form-control mb-2" placeholder="Min"
                                    value="{{ request('price_min') }}">
                                <input type="number" name="price_max" class="form-control" placeholder="Max"
                                    value="{{ request('price_max') }}">
                            </div>

                            <button type="submit"
                                class="btn btn-primary btn-sm w-100 mt-2">{{ __('theme.apply_filter') }}</button>

                        </div>
                    </div>

                    <!-- PRODUCTS -->
                    <div class="col-12 col-lg-9">
                        <div class="row g-4">
                            @foreach ($products as $product)
                                <div class="col-6 col-md-4 mb-4">
                                    <div class="product-card">

                                        <img src="{{ asset('storage/products/' . $product->image) }}"
                                            alt="{{ $product->name }}">

                                        <h6>{{ $product->name }}</h6>

                                        <small class="text-muted">
                                            {{ __('theme.start_from') }}
                                        </small>

                                        <div class="price">
                                            EGP {{ number_format($product->price) }}
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center mt-2">

                                            <button class="btn btn-add btn-sm">
                                                {{ __('theme.add_to_cart') }}
                                            </button>

                                            <button class="heart-btn" data-id="{{ $product->id }}">
                                                <i class="bi bi-heart"></i>
                                                <i class="bi bi-heart-fill"></i>
                                            </button>

                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        <div class="mt-3">
                            {{ $products->links() }}
                        </div>
                    </div>

                </div>
            </form>
        </div>

    </div>
    <!-- ================= END SHOP PAGE ================= -->
@endsection
