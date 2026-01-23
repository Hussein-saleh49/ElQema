@extends('admin.master')

@section('content')
<div class="container my-4">
    <div class="card shadow-sm rounded-3">
        <div class="card-body">

            <h5 class="card-title mb-4">{{ __("keywords.demo_requests") }}</h5>

            <p><strong>{{ __('keywords.company') }}:</strong> {{ $request->organization }}</p>
            <p><strong>{{ __('keywords.full_name') }}:</strong> {{ $request->full_name }}</p>
            <p><strong>{{ __('keywords.email') }}:</strong> {{ $request->email }}</p>
            <p><strong>{{ __('keywords.phone') }}:</strong> {{ $request->phone }}</p>
            <p><strong>{{ __('keywords.status') }}:</strong>
                <span class="{{ $request->is_processed ? 'text-success' : 'text-danger' }}">
                    {{ $request->is_processed ? __('keywords.processed') : __('keywords.pending') }}
                </span>
            </p>

            <a href="{{ route('admin.requests.index') }}" class="btn btn-secondary mt-3">{{ __('keywords.back') }}</a>

        </div>
    </div>
</div>
@endsection
