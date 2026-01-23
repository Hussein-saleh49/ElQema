@extends('admin.master')

@section('content')
<div class="container-fluid my-4">
    @if ($section)
        <div class="card shadow-sm rounded-3">
            <div class="card-body">
                <h5 class="card-title mb-4">{{ __("keywords.section_details") }}</h5>

                <div class="mb-3">
                    <strong>{{ __('keywords.name') }}:</strong>
                    <p>{{ $section->name }}</p>
                </div>s
                <div class="mb-3">
                    <strong>{{ __('keywords.title') }}:</strong>
                    <p>{{ $section->title }}</p>
                </div>

                <div class="mb-3">
                    <strong>{{ __('keywords.subtitle') }}:</strong>
                    <p>{{ $section->subtitle }}</p>
                </div>

                <div class="mb-3">
                    <strong>{{ __('keywords.description') }}:</strong>
                    <p>{{ $section->description }}</p>
                </div>

                <div class="mb-3">
                    <strong>{{ __('keywords.status') }}:</strong>
                    <p class="{{ $section->is_active ? 'text-success' : 'text-danger' }}">
                        {{ $section->is_active ? __('keywords.active') : __('keywords.inactive') }}
                    </p>
                </div>

                <div class="mb-3">
                    <strong>{{ __('keywords.image') }}:</strong>
                    <div class="mt-2">
                        @if ($section->image)
                            <img src="{{ asset('storage/sections/' . $section->image) }}"
                                 class="img-thumbnail" style="width: 150px; height: 100px; object-fit: cover;">
                        @else
                            <span class="text-muted">{{ __('keywords.no_image') }}</span>
                        @endif
                    </div>
                </div>

                <a href="{{ route('admin.sections.index') }}" class="btn btn-secondary">{{ __('keywords.back') }}</a>
                <a href="{{ route('admin.sections.edit', $section) }}" class="btn btn-primary">{{ __('keywords.edit') }}</a>
            </div>
        </div>
    @else
        <div class="alert alert-warning">{{ __('keywords.no_section_found') }}</div>
    @endif
</div>
@endsection
s