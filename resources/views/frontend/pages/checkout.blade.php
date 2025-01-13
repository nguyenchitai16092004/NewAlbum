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
        <!-- Billing Address -->
        <div class="col-12 col-md-6">
            <div class="checkout_details_area mt-50 clearfix">
                <div class="cart-page-heading mb-30" style="text-align:center">
                    <h5>Billing Address</h5>
                </div>
                <form action="#" method="post" style="margin-bottom:30px">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="first_name">First Name <span>*</span></label>
                            <input type="text" class="form-control" id="first_name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="last_name">Last Name <span>*</span></label>
                            <input type="text" class="form-control" id="last_name" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="phone_number">Phone Number <span>*</span></label>
                            <input type="text" class="form-control" id="phone_number" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="street_address">Address <span>*</span></label>
                            <input type="text" class="form-control" id="street_address" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="city">City <span>*</span></label>
                            <input type="text" class="form-control" id="city" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="note">Note</label>
                            <textarea class="form-control" id="note" rows="3"></textarea>
                        </div>
                    </div>
                </form>
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
                    @foreach($cart as $item)
                    <li>
                        <span>{{ $item['name'] }}</span>
                        <span>{{ $item['quantity'] }}</span>
                        <span>{{ number_format($item['price'] * $item['quantity']) }}VNĐ</span>
                    </li>
                    @endforeach
                    <li><span>Subtotal</span> <span></span> <span>${{ number_format($cartTotal) }}</span></li>
                    <li><span>Shipping</span> <span></span> <span>Free</span></li>
                    <li><span>Total</span> <span></span> <span>{{ number_format($cartTotal) }}VNĐ</span></li>
                </ul>
                <div class="terms-check">
                    <div id="accordion" role="tablist" class="mb-4">
                        <button class="btn-place-order">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
