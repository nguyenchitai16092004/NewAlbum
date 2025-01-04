@extends('frontend.layouts.master')
@section('title', 'Shop')

@section('main')
<link rel="stylesheet" href="css/cart.css">
<div class="favorites">
    <h1 style="text-align: center;margin-top:100px">Your Cart</h1>
</div>

<div class="cart-container">
    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="img/product-img/BTS-Lightstick.jpg" alt="BTS Lightstick"></td>
                <td>BTS Official Light Stick</td>
                <td>1,827,680 VNĐ</td>
                <td class="quantity-buttons">
                    <button class="btn-minus">-</button>
                    <span class="quantity">1</span>
                    <button class="btn-plus">+</button>
                </td>
                <td>1,827,680 VNĐ</td>
                <td><button class="delete"><i class="fas fa-trash"></i></button></td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Pagination -->
<nav aria-label="navigation">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">...</a></li>
        <li class="page-item"><a class="page-link" href="#">21</a></li>
        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
    </ul>
</nav>
<div class="container-cart">
    <!-- Ghi chú -->
    <div class="note">
        <h5>Add a note to your order</h5>
        <textarea placeholder="Your note"></textarea>
        <button class="update">Update</button>
    </div>

    <!-- Tổng cộng và thanh toán -->
    <div class="summary">
        <div class="container-text">
            <p>Subtotal:</p>
            <p>1,827,680 VNĐ</p>
        </div>
        <button class="checkout">CHECK OUT</button>
    </div>
</div>

<div class="container-product">
    <h4>Before your checkout, have you considered:</h4>
    <div class="line"></div>
    <div class="row">
        <div class="product">
            <img src="img/product-img/Poster-BTS-Proof.jpg" alt="Poster BTS Proof">
            <p>Poster BTS Proof</p>
            <span class="price">200,000 VNĐ</span>
        </div>
        <div class="product">
            <img src="img/product-img/Poster-BTS-Proof.jpg" alt="Poster BTS Proof">
            <p>Poster BTS Proof</p>
            <span class="price">200,000 VNĐ</span>
        </div>
        <div class="product">
            <img src="img/product-img/Poster-BTS-Proof.jpg" alt="Poster BTS Proof">
            <p>Poster BTS Proof</p>
            <span class="price">200,000 VNĐ</span>
        </div>
        <div class="product">
            <img src="img/product-img/Poster-BTS-Proof.jpg" alt="Poster BTS Proof">
            <p>Poster BTS Proof</p>
            <span class="price">200,000 VNĐ</span>
        </div>
    </div>
</div>
@stop
