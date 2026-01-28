@extends('front.master')
@section('title', __('theme.contacts_title'))
@section('contacts-activation', 'active')

@section('content')
    <section class="contact-section" style="padding-top:140px;">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="fw-bold">{{ __('theme.contacts_title') }}</h2>
                <x-success-alert></x-success-alert>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow p-4">

                        <!-- Contact Info -->
                        @forelse ($settings as $setting)
                            <div class="row text-center mb-4">
                                <div class="col-md-6">
                                    @if (!empty($setting->address))
                                        <i class="bi bi-geo-alt fs-4 text-primary"></i>
                                        <p class="mb-0">{{ $setting->address }}</p>
                                </div>
                        @endif
                        <div class="col-md-3">
                            @if (!empty($setting->phone))
                                <i class="bi bi-telephone fs-4 text-primary"></i>
                                <p class="mb-0">{{ $setting->phone }}</p>
                            @endif
                        </div>
                        <div class="col-md-3">
                            @if (!empty($setting->email))
                                <i class="bi bi-envelope fs-4 text-primary"></i>
                                <p class="mb-0">{{ $setting->email }}</p>
                            @endif
                        </div>
                    </div>

                @empty
                    <span class="text-muted"> No data here </span>
                    @endforelse

                    <hr>

                    <h5 class="mb-3 d-flex align-items-center gap-2">
                        <i class="bi bi-person"></i> {{ __('theme.get_in_touch') }}
                    </h5>

                    <x-toggle-button></x-toggle-button>


                    {{-- ================= INDIVIDUAL FORM ================= --}}
                    <div id="individualForm" style="{{ $errors->company->any() ? 'display:none' : '' }}">
                        <form action="{{ route('front.contact.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="form" value="individual">

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" name="first_name" class="form-control"
                                        placeholder="{{ __('theme.first_name') }}" value="{{ old('first_name') }}">
                                    @error('first_name', 'individual')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <input type="text" name="last_name" class="form-control"
                                        placeholder="{{ __('theme.last_name') }}" value="{{ old('last_name') }}">
                                    @error('last_name', 'individual')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <input type="email" name="email" class="form-control"
                                    placeholder="{{ __('theme.email_address') }}" value="{{ old('email') }}">
                                @error('email', 'individual')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <textarea name="message" class="form-control" rows="4" placeholder="{{ __('theme.your_message') }}">{{ old('message') }}</textarea>
                                @error('message', 'individual')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button class="btn btn-primary w-100">
                                {{ __('theme.contact_us_button') }}
                            </button>
                        </form>
                    </div>

                    {{-- ================= COMPANY FORM ================= --}}
                    <div id="companyForm" style="{{ $errors->company->any() ? '' : 'display:none' }}">
                        <form action="{{ route('front.contact.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="form" value="company">

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <input type="text" name="company_name" class="form-control"
                                        placeholder="{{ __('theme.company_school_university') }}"
                                        value="{{ old('company_name') }}">
                                    @error('company_name', 'company')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <input type="text" name="department" class="form-control"
                                        placeholder="{{ __('theme.department') }}" value="{{ old('department') }}">
                                    @error('department', 'company')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <input type="text" name="job_title" class="form-control"
                                        placeholder="{{ __('theme.job_title') }}" value="{{ old('job_title') }}">
                                    @error('job_title', 'company')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input type="text" name="first_name" class="form-control"
                                        placeholder="{{ __('theme.first_name') }}" value="{{ old('first_name') }}">
                                    @error('first_name', 'company')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <input type="text" name="last_name" class="form-control"
                                        placeholder="{{ __('theme.last_name') }}" value="{{ old('last_name') }}">
                                    @error('last_name', 'company')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <input type="email" name="email" class="form-control"
                                    placeholder="{{ __('theme.email_address') }}" value="{{ old('email') }}">
                                @error('email', 'company')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <textarea name="message" class="form-control" rows="4" placeholder="{{ __('theme.your_message') }}">{{ old('message') }}</textarea>
                                @error('message', 'company')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button class="btn btn-primary w-100">
                                {{ __('theme.contact_us_button') }}
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        </div>
    </section>
@endsection
