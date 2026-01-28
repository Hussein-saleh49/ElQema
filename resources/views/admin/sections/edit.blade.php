@extends('admin.master')
@section("title",__("keywords.edit"))

@section('content')
<div class="container-fluid my-4">

    <div class="card shadow-sm rounded-3">
        <div class="card-body">
            <h5 class="card-title mb-4">{{ __('keywords.edit') }} {{ __('keywords.section') }}</h5>

            <form action="{{ route('admin.sections.update', $section) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3">

                    <!-- Section name -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">{{ __('keywords.name') }}</label>
                        <input type="text" name="name"
                               class="form-control @error('name') is-invalid @enderror"
                               value="{{ old('name', $section->name) }}"
                               placeholder="{{ __('keywords.enter_name') }}">
                       <x-empty-alert title="name"></x-empty-alert>
                    </div>
                    <!-- Section Title -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">{{ __('keywords.title') }}</label>
                        <input type="text" name="title"
                               class="form-control @error('title') is-invalid @enderror"
                               value="{{ old('title', $section->title) }}"
                               placeholder="{{ __('keywords.enter_title') }}">
                       <x-empty-alert title="title"></x-empty-alert>
                    </div>

                    <!-- Section Subtitle -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">{{ __('keywords.subtitle') }}</label>
                        <input type="text" name="subtitle"
                               class="form-control @error('subtitle') is-invalid @enderror"
                               value="{{ old('subtitle', $section->subtitle) }}"
                               placeholder="{{ __('keywords.enter_subtitle') }}">
                       <x-empty-alert title="subtitle"></x-empty-alert>
                    </div>

                    <!-- Section Description -->
                    <div class="col-12">
                        <label class="form-label fw-semibold">{{ __('keywords.description') }}</label>
                        <textarea name="description" rows="4"
                                  class="form-control @error('description') is-invalid @enderror"
                                  placeholder="{{ __('keywords.enter_description') }}">{{ old('description', $section->description) }}</textarea>
                       <x-empty-alert title="description"></x-empty-alert>
                    </div>

                    <!-- Section Image -->
                    <div class="col-12">
                        <label class="form-label fw-semibold">{{ __('keywords.image') }}</label>
                        <input type="file" name="image"
                               class="form-control @error('image') is-invalid @enderror">
                       <x-empty-alert title="image"></x-empty-alert>

                        @if ($section->image)
                            <small class="text-muted mt-2">Current image:</small>
                            <div class="mt-2">
                                <img src="{{ asset('storage/sections/' . $section->image) }}" class="img-thumbnail"
                                     style="width: 100px; height: 60px; object-fit: cover;">
                            </div>
                        @endif
                    </div>

                    <!-- Section Status -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">{{ __('keywords.status') }}</label>
                        <select name="is_active"
                                class="form-select mt-4 form-select-lg border rounded @error('is_active') is-invalid @enderror">
                            <option value="1" {{ old('is_active', $section->is_active) == 1 ? 'selected' : '' }}>{{ __('keywords.active') }}</option>
                            <option value="0" {{ old('is_active', $section->is_active) == 0 ? 'selected' : '' }}>{{ __('keywords.inactive') }}</option>
                        </select>
                       <x-empty-alert title="is_active"></x-empty-alert>
                    </div>

                </div>

                <!-- Submit Buttons -->
                <div class="mt-4 d-flex gap-2">
                    <button type="submit" class="btn btn-success px-4">{{ __('keywords.update') }}</button>
                    <a href="{{ route('admin.sections.index') }}" class="btn btn-light border">{{ __('keywords.cancel') }}</a>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
