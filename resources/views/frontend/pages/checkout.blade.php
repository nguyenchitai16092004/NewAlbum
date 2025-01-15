@extends('frontend.layouts.master')
@section('title', 'Checkout')
@section('main')
    <link rel="stylesheet" href="css/checkout.css">

    <div class="breadcumb_area bg-img">
        <div class="container-checkout h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-checkout">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                <div class="order-details">
                    <ul class="order-details-form mb-4">
                        @foreach ($cart as $item)
                            <li>
                                <span>{{ $item['name'] }}</span>
                                <span>{{ $item['quantity'] }}</span>
                                <span>{{ number_format($item['price'] * $item['quantity']) }}VNĐ</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- Order Details -->
            <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                <div class="order-details-confirmation">
                    <div class="cart-page-heading">
                        <h5>Your Order</h5>
                        <p>The Details</p>
                    </div>
                    <ul class="order-details-form mb-4">
                        <li><span>Product</span> <span>Quantity</span> <span>Total</span></li>
                        @foreach ($cart as $item)
                            <li>
                                <span>{{ $item['name'] }}</span>
                                <span>{{ $item['quantity'] }}</span>
                                <span>{{ number_format($item['price'] * $item['quantity']) }}VNĐ</span>
                            </li>
                        @endforeach
                        <li><span>Subtotal</span> <span></span> <span>{{ number_format($cartTotal) }}VNĐ</span></li>
                        <li><span>Shipping</span> <span></span> <span>Free</span></li>
                        <li><span>Total</span> <span></span> <span>{{ number_format($cartTotal) }}VNĐ</span></li>
                    </ul>
                    <div class="terms-check">
                        <div id="accordion" role="tablist" class="mb-4">
                            <form action="{{ route('checkout.placeOrder') }}" method="POST">
                                @csrf
                                <input type="hidden" name="cart" value="{{ json_encode($cart) }}">
                                <input type="hidden" name="cartTotal" value="{{ $cartTotal }}">
                                <input type="text" name="diaChi" placeholder="Nhập địa chỉ giao hàng" required>
                                <button type="submit" class="btn-place-order">Place Order</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
