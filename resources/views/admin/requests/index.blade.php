@extends('admin.master')
@section("title",__("keywords.demo_requests"))

@section('content')
<div class="container my-4">
    <div class="card shadow-sm rounded-3">
        <div class="card-body">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="card-title">{{ __('keywords.demo_requests') }}</h5>
            </div>

            <x-success-alert></x-success-alert>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-hover table-sm text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>{{ __('keywords.company') }}</th>
                            <th>{{ __('keywords.full_name') }}</th>
                            <th>{{ __('keywords.email') }}</th>
                            <th>{{ __('keywords.phone') }}</th>
                            <th>{{ __('keywords.status') }}</th>
                            <th>{{ __('keywords.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($requests as $request)
                            <tr>
                                <td>{{ $requests->firstItem() + $loop->index }}</td>
                                <td>{{ $request->organization }}</td>
                                <td>{{ $request->full_name }}</td>
                                <td>{{ $request->email }}</td>
                                <td>{{ $request->phone }}</td>
                                <td>
                                    <span class="{{ $request->is_processed ? 'text-success' : 'text-danger' }}">
                                        {{ $request->is_processed ? __('keywords.processed') : __('keywords.pending') }}
                                    </span>
                                </td>
                                <td class="d-flex justify-content-center gap-1">
                                    <!-- View Button -->
                                    <x-action-button type="view" href="{{ route('admin.requests.show', $request) }}"></x-action-button>

                                    <!-- Delete Button -->
                                    <form action="{{ route('admin.requests.destroy', $request) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="btn btn-danger btn-sm"
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
                                        <i class="bi bi-exclamation-circle-fill"></i> {{ __('keywords.no_requests_yet') }}
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="mt-3">
                    {{ $requests->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
