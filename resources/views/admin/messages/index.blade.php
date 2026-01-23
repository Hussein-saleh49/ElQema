@extends('admin.master')

@section('content')
<div class="container my-4">
    <div class="card shadow-sm rounded-3">
        <div class="card-body">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="card-title">{{ __('keywords.messages') }}</h5>
            </div>

            <x-success-alert></x-success-alert>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-hover table-sm text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>{{ __('keywords.type') }}</th>
                            <th>{{ __('keywords.name') }}</th>
                            <th>{{ __('keywords.email') }}</th>
                            <th>{{ __('keywords.company_name') }}</th>
                            <th>{{ __('keywords.department') }}</th>
                            <th>{{ __('keywords.job_title') }}</th>
                            <th>{{ __('keywords.status') }}</th>
                            <th>{{ __('keywords.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($messages as $message)
                            <tr>
                                <td>{{ $messages->firstItem() + $loop->index }}</td>
                                <td>{{ ucfirst($message->type) }}</td>
                                <td>{{ $message->first_name }} {{ $message->last_name }}</td>
                                <td>{{ $message->email }}</td>

                                <!-- Company/School Info -->
                                <td>{{ $message->company_name ?? '-' }}</td>
                                <td>{{ $message->department ?? '-' }}</td>
                                <td>{{ $message->job_title ?? '-' }}</td>

                                <td>
                                    <span class="{{ $message->is_read ? 'text-success' : 'text-danger' }}">
                                        {{ $message->is_read ? __('keywords.read') : __('keywords.unread') }}
                                    </span>
                                </td>

                                <td class="d-flex justify-content-center gap-1">
                                    <!-- View Button -->
                                    <x-action-button type="view" href="{{ route('admin.messages.show', $message) }}"></x-action-button>

                                    <!-- Delete Button -->
                                    <form action="{{ route("admin.messages.destroy", $message) }}" method="POST" class="d-inline">
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
                                <td colspan="9">
                                    <div class="text-danger fw-bold fs-5 py-3">
                                        <i class="bi bi-exclamation-circle-fill"></i> {{ __('keywords.no_messages_yet') }}
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="mt-3">
                    {{ $messages->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
