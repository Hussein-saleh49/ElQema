@extends('front.master')
@section("title",__("keywords.services"))
@section('services-activation', 'active')
@section('content')
    <!-- Services Section -->
    <div class="service2 container">
        <h4 class="section-title">{{ __('theme.our_services') }}</h4>

        <div class="row g-3">
            <!-- Card 1 -->
            @if ($services->count() > 0)
                @foreach ($services as $service)
                    <div class="col-6 col-md-3">
                        <div class="card">
                            <img src="{{ asset('storage/services/' . $service->image) }}" alt="{{ $service->name }}">
                            <div class="card-body">
                                <h5>{{ $service->name }}</h5>
                                <p>{{ substr($service->description, 0, 100) . (strlen($service->description) > 100 ? '...' : '') }}
                                </p>

                                <a href="{{ route("front.learn") }}" class="btn btn-primary btn-sm">{{ __('theme.read_more') }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

            <!-- Pagination -->
            <div class="mt-3">
                {{ $services->links() }}
            </div>
        </div>
    </div>
@endsection
