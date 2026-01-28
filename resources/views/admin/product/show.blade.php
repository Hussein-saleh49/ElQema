@extends('admin.master')
@section("title",__("keywords.view"))
@section('content')
<div class="container-fluid my-4">
    @if ($product)
        <div class="card shadow-sm rounded-3">
            <div class="card-body">
                <h5 class="card-title mb-4">{{ __('keywords.product_details') }}</h5>

                <!-- Name -->
                <div class="mb-3">
                    <strong>{{ __('keywords.name') }}:</strong>
                    <p>{{ $product->name }}</p>
                </div>

                <!-- Features -->
                <div class="mb-3">
                    <strong>{{ __('keywords.product_features') }}:</strong>
                    <ul>
                        @forelse ($product->product_features ?? [] as $feature)
                            <li>{{ $feature }}</li>
                        @empty
                            <li class="text-muted">{{ __('keywords.no_features') }}</li>
                        @endforelse
                    </ul>
                </div>

                <!-- Price -->
                <div class="mb-3">
                    <strong>{{ __('keywords.price') }}:</strong>
                    <p>${{ number_format($product->price, 2) }}</p>
                </div>

                <!-- Category -->
                <div class="mb-3">
                    <strong>{{ __('keywords.category_id') }}:</strong>
                    <p>{{ $product->category?->name ?? __('keywords.not_assigned') }}</p>
                </div>

                <!-- Brand -->
                <div class="mb-3">
                    <strong>{{ __('keywords.brand_id') }}:</strong>
                    <p>{{ $product->brand?->name ?? __('keywords.not_assigned') }}</p>
                </div>

                <!-- Status -->
                <div class="mb-3">
                    <strong>{{ __('keywords.status') }}:</strong>
                    <p class="{{ $product->is_active ? 'text-success' : 'text-danger' }}">
                        {{ $product->is_active ? __('keywords.active') : __('keywords.inactive') }}
                    </p>
                </div>

                <!-- Main Image -->
                <div class="mb-3">
                    <strong>{{ __('keywords.image') }}:</strong>
                    <div class="mt-2">
                        @if ($product->image)
                            <img src="{{ asset('storage/products/' . $product->image) }}" 
                                 class="img-thumbnail" style="width: 120px; height: 80px; object-fit: cover;">
                        @else
                            <span class="text-muted">{{ __('keywords.no_image') }}</span>
                        @endif
                    </div>
                </div>

                <!-- Thumbnails Images -->
                <div class="mb-3">
                    <strong>{{ __('keywords.thumbnails') }}:</strong>
                    <div class="d-flex flex-wrap gap-2 mt-2">
                        @forelse ($product->images ?? [] as $img)
                            <img src="{{ asset('storage/products/' . $img->image) }}" 
                                 class="img-thumbnail" style="width: 80px; height: 50px; object-fit: cover;">
                        @empty
                            <span class="text-muted">{{ __('keywords.no_thumbnails') }}</span>
                        @endforelse
                    </div>
                </div>

                <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
                    {{ __('keywords.back') }}
                </a>
            </div>
        </div>
    @else
        <div class="text-danger fw-bold fs-5 py-3">
            {{ __('keywords.no_products_yet') }}
        </div>
    @endif
</div>
@endsection
