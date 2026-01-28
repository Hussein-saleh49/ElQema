@extends('admin.master')
@section("title",__("keywords.subscribers"))
@section('content')
<div class="container my-4">
    <div class="card shadow-sm rounded-3">
        <div class="card-body">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="card-title">{{ __('keywords.subscribers') }}</h5>
            </div>

            <x-success-alert></x-success-alert>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-hover table-sm text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>{{ __('keywords.email') }}</th>
                            <th>{{ __('keywords.created_at') }}</th>
                            <th>{{ __('keywords.actions') }}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($subscribers as $subscriber)
                            <tr>
                                <td>{{ $subscribers->firstItem() + $loop->index }}</td>

                                <td>
                                    <span class="fw-semibold">
                                        {{ $subscriber->email }}
                                    </span>
                                </td>

                                <td>
                                    {{ $subscriber->created_at->format('Y-m-d') }}
                                </td>

                                <td class="d-flex justify-content-center gap-1">

                                    <!-- Delete -->
                                    <form action="{{ route('admin.subscribers.destroy', $subscriber) }}"
                                          method="POST"
                                          class="d-inline">
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
                                <td colspan="4">
                                    <div class="text-danger fw-bold fs-5 py-3">
                                        <i class="bi bi-exclamation-circle-fill"></i>
                                        {{ __('keywords.no_subscribers_yet') }}
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="mt-3">
                    {{ $subscribers->links() }}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
