@extends('admin.master')
@section("title", __("keywords.settings"))

@section('content')
<div class="container my-4">
    <div class="card shadow-sm rounded-3">
        <div class="card-body">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="card-title">{{ __('keywords.settings') }}</h5>

            </div>

            <x-success-alert></x-success-alert>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-hover table-sm text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>{{ __('keywords.address') }}</th>
                            <th>{{ __('keywords.email') }}</th>
                            <th>{{ __('keywords.phone') }}</th>
                            <th>{{ __('keywords.social') }}</th>
                            <th>{{ __('keywords.created_at') }}</th>
                            <th>{{ __('keywords.actions') }}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($settings as $setting)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $setting->address }}</td>

                                <td>
                                    <span class="fw-semibold">
                                        {{ $setting->email }}
                                    </span>
                                </td>

                                <td>{{ $setting->phone }}</td>

                                <td>
                                    <a href="{{ $setting->facebook }}" target="_blank" class="btn btn-sm btn-primary">FB</a>
                                    <a href="{{ $setting->instagram }}" target="_blank" class="btn btn-sm btn-danger">IG</a>
                                    <a href="{{ $setting->youtube }}" target="_blank" class="btn btn-sm btn-dark">YT</a>
                                    <a href="{{ $setting->tiktok }}" target="_blank" class="btn btn-sm btn-secondary">TT</a>
                                </td>

                                <td>
                                    {{ $setting->created_at->format('Y-m-d') }}
                                </td>

                                <td class="d-flex justify-content-center gap-1">

                                    <!-- Edit -->
                                    <a href="{{ route('admin.settings.edit', $setting) }}"
                                       class="btn btn-warning btn-sm">
                                        {{ __('keywords.edit') }}
                                    </a>

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">
                                    <div class="text-danger fw-bold fs-5 py-3">
                                        <i class="bi bi-exclamation-circle-fill"></i>
                                        {{ __('keywords.no_settings_yet') }}
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</div>
@endsection
