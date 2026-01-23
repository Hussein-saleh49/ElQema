@extends('admin.master')

@section('content')
<div class="container my-4">
    <div class="card shadow-sm rounded-3">
        <div class="card-body">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="card-title">{{ __('keywords.trainees') }}</h5>
            </div>

            <x-success-alert></x-success-alert>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-hover table-sm text-center align-middle">
                    <thead class="table-dark">
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
                        @forelse ($trainees as $trainee)
                            <tr>
                                <td>{{ $trainees->firstItem() + $loop->index }}</td>
                                <td>{{ ucfirst($trainee->type) }}</td>
                                <td>{{ $trainee->first_name }} {{ $trainee->last_name }}</td>
                                <td>{{ $trainee->email }}</td>

                                <!-- Company/School Info -->
                                <td>{{ $trainee->company_name ?? '-' }}</td>
                                <td>{{ $trainee->department ?? '-' }}</td>
                                <td>{{ $trainee->job_title ?? '-' }}</td>

                                <td>
                                    <span class="{{ $trainee->is_read ? 'text-success' : 'text-danger' }}">
                                        {{ $trainee->is_read ? __('keywords.read') : __('keywords.unread') }}
                                    </span>
                                </td>

                                <td class="d-flex justify-content-center gap-1">
                                    <!-- View Button -->
                                    <x-action-button type="view" href="{{ route('admin.trainees.show', $trainee) }}"></x-action-button>

                                    <!-- Delete Button -->
                                    <form action="{{ route("admin.trainees.destroy", $trainee) }}" method="POST" class="d-inline">
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
                                        <i class="bi bi-exclamation-circle-fill"></i> {{ __('keywords.no_trainees_yet') }}
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="mt-3">
                    {{ $trainees->links() }}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
