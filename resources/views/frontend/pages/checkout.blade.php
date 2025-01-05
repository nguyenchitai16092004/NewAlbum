@extends('frontend.layouts.master')
@section('This page is the Checkout.', 'Checkout')
@section('main')
<link rel="stylesheet" href="css/checkout.css">
    <!-- ##### Breadcumb Area Start ##### -->
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
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Checkout Area Start ##### -->
    <div class="container-checkout">
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-page-heading mb-30" style="text-align:center">
                            <h5>Billing Address</h5>
                        </div>

                        <form action="#" method="post"style="margin-bottom:30px">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="first_name">First Name <span>*</span></label>
                                    <input type="text" class="form-control" id="first_name" value="" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="last_name">Last Name <span>*</span></label>
                                    <input type="text" class="form-control" id="last_name" value="" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="company">Email</label>
                                    <input type="text" class="form-control" id="email" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="street_address">Phone Number <span>*</span></label>
                                    <input type="text" class="form-control mb-3" id="phone-number" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="country">City <span>*</span></label>
                                    <select class="w-100" id="city">
                                        <option value="usa">United States</option>
                                        <option value="uk">United Kingdom</option>
                                        <option value="ger">Germany</option>
                                        <option value="fra">France</option>
                                        <option value="ind">India</option>
                                        <option value="aus">Australia</option>
                                        <option value="bra">Brazil</option>
                                        <option value="cana">Canada</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="postcode">Adress <span>*</span></label>
                                    <input type="text" class="form-control" id="postcode" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="city">District <span>*</span></label>
                                    <input type="text" class="form-control" id="District" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="state">Commune <span>*</span></label>
                                    <input type="text" class="form-control" id="commune" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="phone_number">Note <span>*</span></label>
                                    <input type="text" class="form-control" id="note"
                                        value="">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                    <div class="order-details-confirmation">

                        <div class="cart-page-heading">
                            <h5>Your Order</h5>
                            <p>The Details</p>
                        </div>

                        <ul class="order-details-form mb-4">
                            <li><span>Product</span> <span>Quantity</span> <span>Total</span></li>
                            <li><span>Cocktail Yellow dress</span> <span>1</span> <span>$59.90</span></li>
                            <li><span>Subtotal</span> <span>1</span> <span>$59.90</span></li>
                            <li><span>Shipping</span> <span>1</span> <span>Free</span></li>
                            <li><span>Total</span> <span>1</span> <span>$59.90</span></li>
                        </ul>
                        <div class="col-12">
                                    <div class="custom-control custom-radio d-block mb-2">
                                        <input type="radio" class="custom-control-input" id="customRadio1" name="paymentOption">
                                        <label class="custom-control-label" for="customRadio1">
                                            Payment upon receipt
                                            <img src="img/product-img/cash.jpg" alt="Cash Icon" style="width: 20px; height: 20px; margin-left: 10px;">
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio d-block mb-2">
                                        <input type="radio" class="custom-control-input" id="customRadio2" name="paymentOption">
                                        <label class="custom-control-label" for="customRadio2">
                                            VNPay
                                            <img src="img/product-img/vnpay.jpg" alt="VNPay Icon" style="width: 20px; height: 20px; margin-left: 10px;">
                                        </label>
                                    </div>
                                </div>
                            <label for="terms"style="margin-left:16.5px">
                                <input type="checkbox" id="terms" style="width: 13px;">
                                I agree with the Terms and Conditions.
                            </label>
                        <div id="accordion" role="tablist" class="mb-4">
                        <a href="#" class="btn essence-btn">Place Order</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- ##### Checkout Area End ##### -->
@stop
