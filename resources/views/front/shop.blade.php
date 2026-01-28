@extends('front.master')
@section('title', __('theme.shop_title'))
@section('shop-activation', 'active')
@section('content')
    <!-- ================= SHOP PAGE ================= -->
    <div class="shop-page">
        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif


        <!-- SHOP HERO -->
        <section class="shop-hero">
            <h1>{{ __('theme.shop_title') }}</h1>
            <p class="text-muted">{{ __('theme.shop_subtitle') }}</p>
        </section>

        <!-- COLLECTION -->
        <div class="container mb-5">
            <div class="row g-4 justify-content-center align-items-stretch">

                <div class="col-12 col-md-6">
                    <div class="collection-card position-relative">

                        <div class="collection-content">
                            <h5 class="fw-bold">{{ __('theme.collection_boards') }}</h5>
                            <p class="text-muted small">{{ __('theme.collection_boards_desc') }}</p>
                            <a href="{{ route('front.boards') }}" class="btn btn-dark btn-sm">
                                {{ __('theme.shop_now') }}
                            </a>
                        </div>

                        <!-- images -->
                        <div class="collection-images position-relative">

                            <img src="{{ asset('assets/images/training3.png') }}" class="collection-img img-1"
                                alt="image 1">

                            <img src="{{ asset('assets/images/training2.png') }}" class="collection-img img-2"
                                alt="image 2">

                            <img src="{{ asset('assets/images/training1.png') }}" class="collection-img img-3"
                                alt="image 3">

                        </div>

                    </div>
                </div>


                <div class="col-12 col-md-6">
                    <div class="collection-card">
                        <div class="collection-content">
                            <h5 class="fw-bold">{{ __('theme.pcs_accessories') }}</h5>
                            <p class="text-muted small">{{ __('theme.pcs_accessories_desc') }}</p>
                            <a href="{{ route('front.accessories') }}"
                                class="btn btn-dark btn-sm">{{ __('theme.shop_now') }}</a>
                        </div>
                        <img src="{{ asset('assets') }}/images/shop1.png" alt="{{ __('theme.pcs_accessories') }}">
                    </div>
                </div>
            </div>
        </div>


        <livewire:search-bar></livewire:search-bar>



        <!-- MAIN CONTENT -->
        <div class="container mb-5">

            <livewire:filter-shop></livewire:filter-shop>

        </div>

    </div>

    </div>
    <!-- ================= END SHOP PAGE ================= -->
@endsection
