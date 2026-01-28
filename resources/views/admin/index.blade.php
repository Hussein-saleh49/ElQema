@extends('admin.master')

@section('title', __('keywords.dashboard'))

@section('content')
    <div class="container-fluid px-4 py-4">

        <!-- ========================= -->
        <!-- Page Header -->
        <!-- ========================= -->
        <div class="row mb-4 align-items-center">
            <div class="col">
                <h4 class="fw-bold">
                    {{ __('keywords.welcome') }} 👋
                </h4>
                <small class="text-muted">ElQema Admin Dashboard</small>
            </div>
        </div>

        <!-- ========================= -->
        <!-- Statistic Cards -->
        <!-- ========================= -->
        <!-- ========================= -->
        <!-- Statistic Cards -->
        <!-- ========================= -->
        <div class="row g-3 mb-4">

            <div class="col-md-3">
                <div class="card text-white bg-primary shadow h-100">
                    <div class="card-body">
                        <h6>{{ __('keywords.total_products') }}</h6>
                        <h3 class="fw-bold">{{ $productsCount }}</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-white bg-success shadow h-100">
                    <div class="card-body">
                        <h6>{{ __('keywords.total_services') }}</h6>
                        <h3 class="fw-bold">{{ $servicesCount }}</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-white bg-warning shadow h-100">
                    <div class="card-body">
                        <h6>{{ __('keywords.total_carts') }}</h6>
                        <h3 class="fw-bold">{{ $totalCarts }}</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-white bg-danger shadow h-100">
                    <div class="card-body">
                        <h6>{{ __('keywords.total_subscribers') }}</h6>
                        <h3 class="fw-bold">
                            {{ $subscribersCount }}
                        </h3>
                    </div>
                </div>
            </div>

        </div>


        <!-- ========================= -->
        <!-- Chart -->
        <!-- ========================= -->
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-header bg-white fw-bold">
                Cart Activity (Last 6 Months)
            </div>
            <div class="card-body">
                <canvas id="salesChart" height="100"></canvas>
            </div>
        </div>

        <!-- ========================= -->
        <!-- Latest Products -->
        <!-- ========================= -->
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white fw-bold">
                Latest Products
            </div>

            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>{{ __('keywords.name') }}</th>
                            <th>{{ __('keywords.price') }}</th>
                            <th>{{ __('keywords.created_at') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($latestProducts as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }} $</td>
                                <td>{{ $product->created_at->format('d M Y') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted py-4">
                                    No products found
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- ========================= -->
    <!-- Chart.js -->
    <!-- ========================= -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('salesChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: @json($salesMonths),
                datasets: [{
                    label: 'Cart Value',
                    data: @json($salesData),
                    borderWidth: 2,
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
