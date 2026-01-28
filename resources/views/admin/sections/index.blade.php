@extends('admin.master')
@section("title",__("keywords.sections"))

@section('content')
<div class="container-fluid my-4">
    <div class="card shadow-sm rounded-3">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="card-title">{{ __('keywords.sections') }}</h5>
                <a href="{{ route('admin.sections.create') }}" class="btn btn-primary btn-sm">
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
                            <th>{{ __('keywords.title') }}</th>
                            <th>{{ __('keywords.subtitle') }}</th>
                            <th>{{ __('keywords.description') }}</th>
                            <th>{{ __('keywords.image') }}</th>
                            <th>{{ __('keywords.status') }}</th>
                            <th>{{ __('keywords.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($sections as $section)
                            <tr>
                                <td>{{ $sections->firstItem() + $loop->index }}</td>
                                <td>{{ $section->name }}</td>
                                <td>{{ $section->title }}</td>
                                <td>{{ $section->subtitle }}</td>
                                <td>{{ Str::limit($section->description, 50) }}</td>
                                <td>
                                    @if ($section->image)
                                        <img src="{{ asset('storage/sections/' . $section->image) }}"
                                             class="img-thumbnail" style="width: 80px; height: 50px; object-fit: cover;">
                                    @else
                                        {{ __('keywords.no_image') }}
                                    @endif
                                </td>
                                <td>
                                    <span class="{{ $section->is_active ? 'text-success' : 'text-danger' }}">
                                        {{ $section->is_active ? __('keywords.active') : __('keywords.inactive') }}
                                    </span>
                                </td>
                                <td class="d-flex justify-content-center gap-1">
                                    <x-action-button type="view"
                                        href="{{ route('admin.sections.show', $section) }}"></x-action-button>
                                    <x-action-button type="edit"
                                        href="{{ route('admin.sections.edit', $section) }}"></x-action-button>

                                    <form action="{{ route('admin.sections.destroy', $section) }}" method="POST" class="d-inline">
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
                                <td colspan="7">
                                    <div class="text-danger fw-bold fs-5 py-3">
                                        <i class="bi bi-exclamation-circle-fill"></i> {{ __('keywords.no_sections_yet') }}
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="mt-3">
                    {{ $sections->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
