@extends('front.master')

@section('title', __('Cart'))
@section('content')
<div class="container my-5">

    <h2 class="mb-4">{{ __('Your Cart') }}</h2>

    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger text-center">{{ session('error') }}</div>
    @endif

    @if($cartItems->count() > 0)
        <div class="table-responsive">
            <table class="table table-hover align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>{{ __('Product') }}</th>
                        <th>{{ __('Price') }}</th>
                        <th>{{ __('Quantity') }}</th>
                        <th>{{ __('Subtotal') }}</th>
                        <th>{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cartItems as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->product->name }}</td>
                            <td>${{ number_format($item->product->price, 2) }}</td>
                            <td>
                                <form action="{{ route("front.cart.updateQuantity", $item->id) }}" method="POST" class="d-flex justify-content-center align-items-center">
                                    @csrf
                                    @method('PATCH')
                                    <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" class="form-control w-50 me-2">
                                    <button class="btn btn-sm btn-primary">{{ __('Update') }}</button>
                                </form>
                            </td>
                            <td>${{ number_format($item->product->price * $item->quantity, 2) }}</td>
                            <td>
                                <form action="{{ route("front.cart.remove", $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('{{ __('Are you sure?') }}')">
                                        {{ __('Remove') }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-end mt-3">
                <h4>{{ __('Total') }}: ${{ number_format($cartItems->sum(fn($i) => $i->product->price * $i->quantity), 2) }}</h4>
                {{-- <a href="{{ route('checkout') }}" class="btn btn-success btn-lg mt-2">{{ __('Proceed to Checkout') }}</a> --}}
            </div>
        </div>
    @else
        <div class="alert alert-info text-center">
            {{ __('Your cart is empty.') }}
        </div>
    @endif

</div>
@endsection
