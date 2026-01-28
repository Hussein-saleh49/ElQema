@extends('admin.master')
@section("title",__("keywords.edit"))
@section('content')
<div class="container-fluid my-4">

    <div class="card shadow-sm rounded-3">
        <div class="card-body">

            <h5 class="card-title mb-4">{{ __('keywords.edit') }}</h5>

            <form action="{{ route('admin.services.update', $service) }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-3">

                    <!-- Title -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">{{ __('keywords.title') }}</label>
                        <input type="text"
                               name="title"
                               value="{{ old('title', $service->title) }}"
                               class="form-control @error('title') is-invalid @enderror">

                        <x-empty-alert title="title"></x-empty-alert>
                    </div>

                    <!-- Description -->
                    <div class="col-12">
                        <label class="form-label fw-semibold">{{ __('keywords.description') }}</label>
                        <textarea name="description"
                                  rows="4"
                                  class="form-control @error('description') is-invalid @enderror"
                                  placeholder="{{ __('keywords.enter_description') }}">{{ old('description', $service->description) }}</textarea>

                        <x-empty-alert title="description"></x-empty-alert>
                    </div>

                    <!-- Image -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">{{ __('keywords.image') }}</label>
                        <input type="file"
                               name="image"
                               class="form-control @error('image') is-invalid @enderror">

                        @if ($service->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/services/' . $service->image) }}"
                                     class="img-thumbnail"
                                     style="width: 90px; height: 55px; object-fit: cover;">
                            </div>
                        @endif
                    </div>

                    <!-- Status -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">{{ __('keywords.status') }}</label>
                        <select name="is_active"
                                class="form-select mt-4 @error('is_active') is-invalid @enderror">
                            <option value="1" {{ $service->is_active ? 'selected' : '' }}>
                                {{ __('keywords.active') }}
                            </option>
                            <option value="0" {{ ! $service->is_active ? 'selected' : '' }}>
                                {{ __('keywords.inactive') }}
                            </option>
                        </select>

                        <x-empty-alert title="is_active"></x-empty-alert>
                    </div>

                </div>

                <!-- Buttons -->
                <div class="mt-4 d-flex gap-2">
                    <button type="submit" class="btn btn-primary px-4">
                        {{ __('keywords.update') }}
                    </button>

                    <a href="{{ route('admin.services.index') }}"
                       class="btn btn-light border">
                        {{ __('keywords.cancel') }}
                    </a>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
{{--  --}}