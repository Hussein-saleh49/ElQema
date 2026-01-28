<div class="row">
    <!-- FILTER BOX -->
    <div class="col-12 col-lg-3">
        <div class="filter-box p-3 border rounded">
            <h4 class="fw-bold mb-3">{{ __('theme.filter_title') }}</h4>

          

            <!-- Brands -->
            <select class="form-control mb-3" wire:model="brandId" wire:change="filter">
                <option value="">{{ __("keywords.select_brand") }}</option>
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>

            <!-- Categories -->
            <select class="form-control mb-3" wire:model="categoryId" wire:change="filter">
                <option value="">{{ __("keywords.select_category") }}</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <!-- Price -->
            <input type="number" class="form-control mb-2" placeholder="{{ __("keywords.enter_min") }}"
                   wire:model.lazy="priceMin" wire:change="filter">
            <input type="number" class="form-control" placeholder="{{ __("keywords.enter_max") }}"
                   wire:model.lazy="priceMax" wire:change="filter">
        </div>
    </div>

    <!-- PRODUCTS -->
    <div class="col-12 col-lg-9">
        <div class="row g-4">
            @forelse($results as $product)
                <div class="col-6 col-md-4 mb-4">
                    <div class="product-card">
                        <a href="{{ route('front.productDetails', $product) }}">
                            <img src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}">
                        </a>
                        <h6>{{ $product->name }}</h6>
                        <div class="price">EGP {{ number_format($product->price) }}</div>
                    </div>
                </div>
            @empty
                <p class="text-muted">{{ __("keywords.no_products_yet") }}</p>
            @endforelse
        </div>
    </div>
</div>
