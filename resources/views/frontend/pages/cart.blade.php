@extends('frontend.layouts.master')
@section('title', 'Cart')
@section('main')
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/pagination.css">
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
                @foreach ($cartPaginated as $item)
                    <tr>
                        <td><img src="{{ asset($item['image']) }}" alt="{{ $item['product'] }}"></td>
                        <td>{{ $item['product'] }}</td>
                        <td>{{ number_format($item['price'], 0, ',', '.') }} VNĐ</td>
                        <td class="quantity-buttons">
                            <button class="btn-minus">-</button>
                            <span class="quantity" style="color:black">{{ $item['quantity'] }}</span>
                            <button class="btn-plus">+</button>
                        </td>
                        <td>{{ number_format($item['total'], 0, ',', '.') }} VNĐ</td>
                        <td><button class="delete"><i class="fas fa-trash"></i></button></td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <!-- Pagination -->
    <nav aria-label="navigation" class="pagination-container mt-50 mb-70">
        {{ $cart->links('pagination::bootstrap-4') }}
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
                <p>1.827.680 VNĐ</p>
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
