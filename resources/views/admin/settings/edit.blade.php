@extends('admin.master')

@section('title', __('keywords.settings'))

@section('content')
<div class="container my-4">

    <div class="card shadow-sm rounded-3">
        <div class="card-body">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="card-title mb-0">
                    <i class="bi bi-gear-fill me-1"></i>
                    {{ __('keywords.settings') }}
                </h5>

                <a href="{{ route('admin.settings.index') }}"
                   class="btn btn-secondary btn-sm">
                    <i class="bi bi-arrow-left"></i>
                    {{ __('keywords.back') }}
                </a>
            </div>

            <!-- Success Alert -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form -->
            <form action="{{ route('admin.settings.update', $setting) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">

                    <!-- Address -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">{{ __('keywords.address') }}</label>
                        <input type="text"
                               name="address"
                               class="form-control @error('address') is-invalid @enderror"
                               value="{{ old('address', $setting->address) }}">
                        <x-empty-alert title="address"></x-empty-alert>
                    </div>

                    <!-- Email -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">{{ __('keywords.email') }}</label>
                        <input type="email"
                               name="email"
                               class="form-control @error('email') is-invalid @enderror"
                               value="{{ old('email', $setting->email) }}">
                        <x-empty-alert title="email"></x-empty-alert>
                    </div>

                    <!-- Phone -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">{{ __('keywords.phone') }}</label>
                        <input type="text"
                               name="phone"
                               class="form-control @error('phone') is-invalid @enderror"
                               value="{{ old('phone', $setting->phone) }}">
                        <x-empty-alert title="phone"></x-empty-alert>
                    </div>

                    <!-- Facebook -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Facebook</label>
                        <input type="url"
                               name="facebook"
                               class="form-control @error('facebook') is-invalid @enderror"
                               value="{{ old('facebook', $setting->facebook) }}">
                        <x-empty-alert title="facebook"></x-empty-alert>
                    </div>

                    <!-- Instagram -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Instagram</label>
                        <input type="url"
                               name="instagram"
                               class="form-control @error('instagram') is-invalid @enderror"
                               value="{{ old('instagram', $setting->instagram) }}">
                        <x-empty-alert title="instagram"></x-empty-alert>
                    </div>

                    <!-- YouTube -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">YouTube</label>
                        <input type="url"
                               name="youtube"
                               class="form-control @error('youtube') is-invalid @enderror"
                               value="{{ old('youtube', $setting->youtube) }}">
                        <x-empty-alert title="youtube"></x-empty-alert>
                    </div>

                    <!-- TikTok -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">TikTok</label>
                        <input type="url"
                               name="tiktok"
                               class="form-control @error('tiktok') is-invalid @enderror"
                               value="{{ old('tiktok', $setting->tiktok) }}">
                        <x-empty-alert title="tiktok"></x-empty-alert>
                    </div>

                </div>

                <!-- Save -->
                <div class="text-end mt-4">
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="bi bi-save"></i>
                        {{ __("keywords.submit") }}
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection
