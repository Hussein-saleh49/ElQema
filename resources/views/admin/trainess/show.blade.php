@extends('admin.master')

@section('content')
<div class="container my-4">
    <div class="card shadow-sm rounded-3">
        <div class="card-body">
            <h5 class="card-title mb-4">{{ __("keywords.trainee")?? '' }}</h5>

            <p><strong>{{ __('keywords.type') }}:</strong> {{ ucfirst($trainee->type) == 'Individual' ? __('keywords.individual') : __('keywords.company') }}</p>
            <p><strong>{{ __('keywords.first_name') }}:</strong> {{ $trainee->first_name }}</p>
            <p><strong>{{ __('keywords.last_name') }}:</strong> {{ $trainee->last_name }}</p>
            <p><strong>{{ __('keywords.email') }}:</strong> {{ $trainee->email }}</p>

            @if($trainee->type === 'company')
                <p><strong>{{ __('keywords.company_name') }}:</strong> {{ $trainee->company_name }}</p>
                <p><strong>{{ __('keywords.department') }}:</strong> {{ $trainee->department }}</p>
                <p><strong>{{ __('keywords.job_title') }}:</strong> {{ $trainee->job_title }}</p>
            @endif

            <p><strong>{{ __('keywords.your_trainee') }}:</strong></p>
            <p>{{ $trainee->trainee }}</p>

            <a href="{{ route('admin.trainees.index') }}" class="btn btn-secondary mt-3">{{ __('keywords.back') ?? 'Back' }}</a>
        </div>
    </div>
</div>
@endsection
s