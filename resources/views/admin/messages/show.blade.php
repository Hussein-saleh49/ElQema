@extends('admin.master')
@section("title",__("keywords.view"))
@section('content')
<div class="container my-4">
    <div class="card shadow-sm rounded-3">
        <div class="card-body">
            <h5 class="card-title mb-4">{{ __("keywords.message")?? '' }}</h5>

            <p><strong>{{ __('keywords.type') }}:</strong> {{ ucfirst($message->type) == 'Individual' ? __('keywords.individual') : __('keywords.company') }}</p>
            <p><strong>{{ __('keywords.first_name') }}:</strong> {{ $message->first_name }}</p>
            <p><strong>{{ __('keywords.last_name') }}:</strong> {{ $message->last_name }}</p>
            <p><strong>{{ __('keywords.email') }}:</strong> {{ $message->email }}</p>

            @if($message->type === 'company')
                <p><strong>{{ __('keywords.company_name') }}:</strong> {{ $message->company_name }}</p>
                <p><strong>{{ __('keywords.department') }}:</strong> {{ $message->department }}</p>
                <p><strong>{{ __('keywords.job_title') }}:</strong> {{ $message->job_title }}</p>
            @endif

            <p><strong>{{ __('keywords.your_message') }}:</strong></p>
            <p>{{ $message->message }}</p>

            <a href="{{ route('admin.messages.index') }}" class="btn btn-secondary mt-3">{{ __('keywords.back') ?? 'Back' }}</a>
        </div>
    </div>
</div>
@endsection
