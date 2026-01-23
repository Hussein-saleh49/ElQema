@extends('front.master')

@section('content')

    <section class="request-demo-section">
        <div class="container">

            {{-- Success Message --}}
            @if(session('success'))
                <div class="row justify-content-center mb-4">
                    <div class="col-md-6">
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    </div>
                </div>
            @endif

            {{-- Validation Errors (general) --}}
            @if ($errors->any())
                <div class="row justify-content-center mb-4">
                    <div class="col-md-6">
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-4">
                    <h2 class="section-title">{{ __('theme.request_demo_title') }}</h2>
                    <p class="section-desc">{{ __('theme.request_demo_desc') }}</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">

                    <form class="demo-form" method="POST" action="{{ route('front.request.store') }}">
                        @csrf

                        {{-- Company --}}
                        <div class="mb-3">
                            <label class="form-label">{{ __('theme.company_school') }}</label>
                            <input
                                type="text"
                                name="organization"
                                class="form-control @error('organization') is-invalid @enderror"
                                value="{{ old('organization') }}"
                                placeholder="{{ __('theme.enter_organization') }}"
                            >

                            @error('organization')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Full Name --}}
                        <div class="mb-3">
                            <label class="form-label">{{ __('theme.full_name') }}</label>
                            <input
                                type="text"
                                name="full_name"
                                class="form-control @error('full_name') is-invalid @enderror"
                                value="{{ old('full_name') }}"
                                placeholder="{{ __('theme.enter_full_name') }}"
                            >

                            @error('full_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div class="mb-3">
                            <label class="form-label">{{ __('theme.email') }}</label>
                            <input
                                type="email"
                                name="email"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}"
                                placeholder="{{ __('theme.enter_email') }}"
                            >

                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Phone --}}
                        <div class="mb-3">
                            <label class="form-label">{{ __('theme.phone') }}</label>
                            <input
                                type="tel"
                                name="phone"
                                class="form-control @error('phone') is-invalid @enderror"
                                value="{{ old('phone') }}"
                                placeholder="{{ __('theme.enter_phone') }}"
                            >

                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            {{ __('theme.get_started') }}
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </section>

@endsection
