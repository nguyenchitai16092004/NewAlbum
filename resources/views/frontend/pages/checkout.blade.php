@extends('frontend.layouts.master')
@section('title', 'Checkout')
@section('main')
<link rel="stylesheet" href="css/checkout.css">
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="container">
        <div class="section">
            <h2>Delivery</h2>
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" placeholder="Enter your phone number">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" placeholder="Enter your address">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" placeholder="Enter your city">
            </div>
            <div class="form-group">
                <label for="district">District</label>
                <input type="text" id="district" placeholder="Enter your district">
            </div>
            <div class="form-group">
                <label for="commune">Commune</label>
                <input type="text" id="commune" placeholder="Enter your commune">
            </div>
            <div class="form-group">
                <label for="note">Note</label>
                <textarea id="note" class="note" placeholder="Enter additional notes"></textarea>
            </div>
        </div>

        <div class="section">
            <h2>Payment Method</h2>
            <div class="payment-method">
                <input type="radio" id="cod" name="payment">
                <label for="cod">Payment upon receipt</label>
            </div>
            <div class="payment-method">
                <input type="radio" id="momo" name="payment">
                <label for="momo">Pay with Momo</label>
            </div>
            <div class="payment-method">
                <input type="radio" id="zalopay" name="payment">
                <label for="zalopay">Pay with Zalopay</label>
            </div>
        </div>

        <div class="section cart-info">
            <h2>Cart Information</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Example Product</td>
                        <td>1</td>
                        <td>$100</td>
                    </tr>
                </tbody>
            </table>
            <p>Temporality: <span>Standard</span></p>
            <p>Shipping Method: <span>Express</span></p>
            <p>Total: <strong>$100</strong></p>
        </div>

        <div class="buttons">
            <button>Continue Shopping</button>
            <button>Pay Now</button>
        </div>
        <div class="terms">
            <input type="checkbox" id="terms">
            <label for="terms">I agree with the terms and conditions.</label>
        </div>
    </div>
    <!-- ##### Checkout Area End ##### -->
@stop
