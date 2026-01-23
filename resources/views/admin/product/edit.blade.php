@extends('admin.master')

@section('content')
    <div class="container-fluid my-4">

        <div class="card shadow-sm rounded-3">
            <div class="card-body">
                <h5 class="card-title mb-4">{{ __('keywords.edit') ?? 'Edit Product' }}</h5>

                <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row g-3">

                        <!-- Product Name -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">{{ __('keywords.name') }}</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name', $product->name) }}" placeholder="{{ __('keywords.enter_name') }}"
                                required>
                            <x-empty-alert title="name"></x-empty-alert>
                        </div>

                        <!-- Product Features -->
                        <div class="col-md-12">
                            <label class="form-label fw-semibold">
                                {{ __('keywords.product_features') }}
                            </label>

                            <div id="features-wrapper">
                                @forelse ($product->product_features ?? [] as $feature)
                                    <div class="mb-2 feature-item d-flex gap-2">
                                        <input type="text" name="product_features[]" class="form-control"
                                            value="{{ $feature }}"
                                            placeholder="{{ __('keywords.enter_product_feature') }}">
                                        <button type="button" class="btn btn-danger btn-sm remove-feature">×</button>
                                    </div>
                                @empty
                                    <div class="mb-2 feature-item">
                                        <input type="text" name="product_features[]" class="form-control"
                                            placeholder="{{ __('keywords.enter_product_feature') }}">
                                    </div>
                                @endforelse
                            </div>

                            <button type="button" class="btn btn-sm btn-outline-primary mt-2" id="add-feature-btn">
                                + {{ __('keywords.add_feature') }}
                            </button>
                        </div>

                        <!-- Product Price -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">{{ __('keywords.price') }} ($)</label>
                            <input type="number" name="price" step="0.01"
                                class="form-control @error('price') is-invalid @enderror"
                                value="{{ old('price', $product->price) }}" placeholder="{{ __('keywords.enter_price') }}"
                                required>
                            <x-empty-alert title="price"></x-empty-alert>
                        </div>

                        <!-- Category -->
                        <div class="col-md-6 mt-3">
                            <label class="form-label fw-semibold">{{ __('keywords.category_id') }}</label>
                            <select name="category_id" class="form-select @error('category_id') is-invalid @enderror">
                                <option value="" disabled>{{ __('keywords.select_category') }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-empty-alert title="category_id"></x-empty-alert>
                        </div>

                        <!-- Brand -->
                        <div class="col-md-6 mt-3">
                            <label class="form-label fw-semibold">{{ __('keywords.brand_id') }}</label>
                            <select name="brand_id" class="form-select @error('brand_id') is-invalid @enderror">
                                <option value="" disabled>{{ __('keywords.select_brand') }}</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}"
                                        {{ old('brand_id', $product->brand_id) == $brand->id ? 'selected' : '' }}>
                                        {{ $brand->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-empty-alert title="brand_id"></x-empty-alert>
                        </div>

                        <!-- Description -->
                        <div class="col-12 mt-3">
                            <label class="form-label fw-semibold">{{ __('keywords.description') }}</label>
                            <textarea name="description" rows="4" class="form-control @error('description') is-invalid @enderror"
                                placeholder="{{ __('keywords.enter_description') }}">{{ old('description', $product->description) }}</textarea>
                            <x-empty-alert title="description"></x-empty-alert>
                        </div>

                        <!-- Main Product Image -->
                        <div class="col-12 mt-3">
                            <label class="form-label fw-semibold">{{ __('keywords.image') }}</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                            @if (!empty($product->image))
                                <small class="text-muted mt-2 d-block">Current main image:</small>
                                <img src="{{ asset('storage/products/' . $product->image) }}" class="img-thumbnail mt-1"
                                    style="width: 80px; height: 50px; object-fit: cover;">
                            @endif
                            <x-empty-alert title="image"></x-empty-alert>
                        </div>

                        <!-- Thumbnails Images -->
                        <div class="col-12 mt-3">
                            <label class="form-label fw-semibold">{{ __('keywords.thumbnails') }}</label>
                            <input type="file" name="images[]" multiple class="form-control @error('images') is-invalid @enderror">
                            
                            @if ($product->images->count())
                                <small class="text-muted mt-2 d-block">Current thumbnails:</small>
                                <div class="d-flex flex-wrap gap-2 mt-1">
                                    @foreach ($product->images as $img)
                                        <div class="position-relative">
                                            <img src="{{ asset('storage/products/' . $img->image) }}" class="img-thumbnail"
                                                style="width: 80px; height: 50px; object-fit: cover;">
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <!-- Product Status -->
                        <div class="col-md-6 mt-3">
                            <label class="form-label fw-semibold">{{ __('keywords.status') }}</label>
                            <select name="is_active" class="form-select @error('is_active') is-invalid @enderror">
                                <option value="1" {{ old('is_active', $product->is_active) == 1 ? 'selected' : '' }}>
                                    {{ __('keywords.active') }}
                                </option>
                                <option value="0" {{ old('is_active', $product->is_active) == 0 ? 'selected' : '' }}>
                                    {{ __('keywords.inactive') }}
                                </option>
                            </select>
                            <x-empty-alert title="is_active"></x-empty-alert>
                        </div>

                    </div>

                    <!-- Submit Buttons -->
                    <div class="mt-4 d-flex gap-2">
                        <button type="submit"
                            class="btn btn-success px-4">{{ __('keywords.update') ?? 'Update Product' }}</button>
                        <a href="{{ route('admin.products.index') }}"
                            class="btn btn-light border">{{ __('keywords.cancel') }}</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
