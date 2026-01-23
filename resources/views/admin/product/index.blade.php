@extends('admin.master')

@section('content')
<div class="container my-4">
    <div class="card shadow-sm rounded-3">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="card-title">{{ __('keywords.products') }}</h5>
                <a href="{{ route('admin.products.create') }}" class="btn btn-primary btn-sm">
                    {{ __('keywords.add_new') }}
                </a>
            </div>

            <x-success-alert></x-success-alert>

            <div class="table-responsive">
                <table class="table table-hover table-sm text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>{{ __('keywords.name') }}</th>
                            <th>{{ __('keywords.description') }}</th>
                            <th>{{ __('keywords.product_features') }}</th>
                            <th>{{ __('keywords.price') }}</th>
                            <th>{{ __('keywords.category_id') }}</th>
                            <th>{{ __('keywords.brand_id') }}</th>
                            <th>{{ __('keywords.image') }}</th>
                            <th>{{ __('keywords.status') }}</th>
                            <th>{{ __('keywords.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td>{{ $products->firstItem() + $loop->index }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($product->description, 50) }}</td>
                                <td>
                                    <ul class="small text-muted ps-3 mb-0">
                                        @forelse ($product->product_features ?? [] as $feature)
                                            <li>{{ $feature }}</li>
                                        @empty
                                            <li class="text-muted">{{ __('theme.no_features') }}</li>
                                        @endforelse
                                    </ul>
                                </td>
                                <td>${{ number_format($product->price, 2) }}</td>
                                <td>{{ $product->category?->name ?? __('keywords.not_assigned') }}</td>
                                <td>{{ $product->brand?->name ?? __('keywords.not_assigned') }}</td>
                                <td>
                                    @if ($product->image)
                                        <img src="{{ asset('storage/products/' . $product->image) }}"
                                             class="img-thumbnail mb-1" style="width: 80px; height: 50px; object-fit: cover;">

                                        <!-- Thumbnails -->
                                        @if ($product->images && $product->images->count() > 0)
                                            <div class="d-flex flex-wrap gap-1 mt-1 justify-content-center">
                                                @foreach ($product->images as $thumb)
                                                    <img src="{{ asset('storage/products/' . $thumb->image) }}"
                                                         class="img-thumbnail"
                                                         style="width: 30px; height: 30px; object-fit: cover;">
                                                @endforeach
                                            </div>
                                        @endif
                                    @else
                                        {{ __('keywords.no_image') }}
                                    @endif
                                </td>
                                <td>
                                    <span class="{{ $product->is_active ? 'text-success' : 'text-danger' }}">
                                        {{ $product->is_active ? __('keywords.active') : __('keywords.inactive') }}
                                    </span>
                                </td>
                                <td class="d-flex justify-content-center gap-1">
                                    <x-action-button type="view"
                                        href="{{ route('admin.products.show', $product) }}"></x-action-button>
                                    <x-action-button type="edit"
                                        href="{{ route('admin.products.edit', $product) }}"></x-action-button>

                                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST"
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('{{ __('keywords.confirm_delete') }}')">
                                            {{ __('keywords.delete') }}
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10">
                                    <div class="text-danger fw-bold fs-5 py-3">
                                        <i class="bi bi-exclamation-circle-fill"></i>
                                        {{ __('keywords.no_products_yet') }}
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="mt-3">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
