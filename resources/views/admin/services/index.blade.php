@extends('admin.master')
@section("title",__("keywords.services"))
@section('content')
    <div class="container my-4">

        <div class="card shadow-sm rounded-3">
            <div class="card-body">

                <!-- Header -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="card-title">{{ __("keywords.services") }}</h5>

                    <a href="{{ route('admin.services.create') }}" class="btn btn-primary btn-sm">
                        {{ __('keywords.add_new') }}
                    </a>
                </div>

                <x-success-alert></x-success-alert>

                <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-hover table-sm text-center align-middle">

                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>{{ __('keywords.title') }}</th>
                                <th>{{ __('keywords.description') }}</th>
                                <th>{{ __('keywords.image') }}</th>
                                <th>{{ __('keywords.status') }}</th>
                                <th>{{ __('keywords.actions') }}</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($services as $service)
                                <tr>
                                    <td>{{ $services->firstItem() + $loop->index }}</td>

                                    <td>{{ $service->title }}</td>
                                    <td>
                                        <span class="text-muted">
                                            {{ Str::limit($service->description, 60) }}
                                        </span>
                                    </td>

                                    <td>
                                        @if ($service->image)
                                            <img src="{{ asset('storage/services/' . $service->image) }}"
                                                class="img-thumbnail" style="width: 80px; height: 50px; object-fit: cover;">
                                        @else
                                            <span class="text-muted">{{ __('services.no_image') }}</span>
                                        @endif
                                    </td>

                                    <td>
                                        <span class="{{ $service->is_active ? 'text-success' : 'text-danger' }}">
                                            {{ $service->is_active ? __("keywords.active") : __("keywords.inactive") }}
                                        </span>
                                    </td>

                                    <td class="d-flex justify-content-center gap-1">

                                        <x-action-button type="view"
                                            href="{{ route('admin.services.show', $service) }}">
                                        </x-action-button>

                                        <x-action-button type="edit"
                                            href="{{ route('admin.services.edit', $service) }}">
                                        </x-action-button>

                                        <form action="{{ route('admin.services.destroy', $service) }}" method="POST"
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
                                    <td colspan="5">
                                        <div class="text-danger fw-bold fs-5 py-3">
                                            <i class="bi bi-exclamation-circle-fill"></i>
                                            {{ __("keywords.no_services_yet") }}
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>

                    <!-- Pagination -->
                    <div class="mt-3">
                        {{ $services->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
