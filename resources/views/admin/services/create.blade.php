@extends('admin.master')
@section("title",__("keywords.add_new"))
@section('content')
    <div class="container-fluid my-4">

        <div class="card shadow-sm rounded-3">
            <div class="card-body">

                <h5 class="card-title mb-4">{{ __('keywords.add_new') }}</h5>

                <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row g-3">

                        <!-- Title -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">{{ __('keywords.title') }}</label>
                            <input type="text" name="title" value="{{ old('title') }}"
                                class="form-control @error('title') is-invalid @enderror"
                                placeholder="{{ __('keywords.enter_title') }}">
                            <x-empty-alert title="title"></x-empty-alert>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">{{ __('keywords.description') }}</label>
                            <textarea name="description" rows="4" class="form-control @error('description') is-invalid @enderror"
                                placeholder="{{ __('keywords.enter_description') }}">{{ old('description') }}</textarea>
                            <x-empty-alert title="description"></x-empty-alert>
                        </div>


                        <!-- Image -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">{{ __('keywords.image') }}</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                            <x-empty-alert title="image"></x-empty-alert>
                        </div>

                        <!-- Status -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">{{ __('keywords.status') }}</label>
                            <select name="is_active" class="form-select mt-4 @error('is_active') is-invalid @enderror">
                                <option value="1">{{ __('keywords.active') }}</option>
                                <option value="0">{{ __('keywords.inactive') }}</option>
                            </select>
                            <x-empty-alert title="is_active"></x-empty-alert>
                        </div>

                    </div>

                    <!-- Buttons -->
                    <div class="mt-4 d-flex gap-2">
                        <button type="submit" class="btn btn-primary px-4">
                            {{ __('keywords.submit') }}
                        </button>

                        <a href="{{ route('admin.services.index') }}" class="btn btn-light border">
                            {{ __('keywords.cancel') }}
                        </a>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
