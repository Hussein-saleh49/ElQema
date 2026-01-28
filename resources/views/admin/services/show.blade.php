@extends('admin.master')
@section("title",__("keywords.view"))
@section('content')
<div class="container-fluid my-4">

    <div class="card shadow-sm rounded-3">
        <div class="card-body">

            <h5 class="card-title mb-4">{{ __('keywords.service_details') }}</h5>

            <div class="mb-3">
                <strong>{{ __('keywords.title') }}:</strong>
                <p>{{ $service->title }}</p>
            </div>
             <div class="mb-3">
                    <strong>{{ __('keywords.description') }}:</strong>
                    <p>{{ $service->description }}</p>
                </div>

            <div class="mb-3">
                <strong>{{ __('keywords.status') }}:</strong>
                <p class="{{ $service->is_active ? 'text-success' : 'text-danger' }}">
                    {{ $service->is_active ? __('keywords.active') : __('keywords.inactive') }}
                </p>
            </div>

            <div class="mb-3">
                <strong>{{ __('keywords.image') }}:</strong>
                <div>
                    @if ($service->image)
                        <img src="{{ asset('storage/services/' . $service->image) }}"
                             class="img-thumbnail"
                             style="width: 120px; height: 70px; object-fit: cover;">
                    @else
                        <span class="text-muted">{{ __('keywords.no_image') }}</span>
                    @endif
                </div>
            </div>

            <a href="{{ route('admin.services.index') }}"
               class="btn btn-secondary">
                {{ __('keywords.back') }}
            </a>

        </div>
    </div>
</div>
@endsection
