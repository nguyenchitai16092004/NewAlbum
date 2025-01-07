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
    <nav aria-label="navigation">
        <ul class="pagination">

            <!-- Previous Page Link -->
            <!-- Kiểm tra nếu hiện tại là trang đầu tiên -->
            @if ($cartPaginated->onFirstPage())
                <!-- Nếu là trang đầu tiên, disable nút Previous (trái) -->
                <li class="page-item disabled">
                    <a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                </li>
            @else
                <!-- Nếu không phải trang đầu tiên, hiển thị nút Previous (trái) và liên kết tới trang trước -->
                <li class="page-item">
                    <a class="page-link" href="{{ $cartPaginated->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a>
                </li>
            @endif

            <!-- Page Numbers -->
            <!-- Duyệt qua tất cả các trang có sẵn và tạo liên kết cho từng trang -->
            @foreach ($cartPaginated->getUrlRange(1, $cartPaginated->lastPage()) as $page => $url)
                <!-- Kiểm tra nếu trang hiện tại có bằng với trang đang duyệt -->
                <li class="page-item {{ $cartPaginated->currentPage() == $page ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
            @endforeach

            <!-- Next Page Link -->
            <!-- Kiểm tra nếu có trang tiếp theo -->
            @if ($cartPaginated->hasMorePages())
                <!-- Nếu có trang tiếp theo, hiển thị nút Next (phải) và liên kết tới trang tiếp theo -->
                <li class="page-item">
                    <a class="page-link" href="{{ $cartPaginated->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a>
                </li>
            @else
                <!-- Nếu không có trang tiếp theo, disable nút Next (phải) -->
                <li class="page-item disabled">
                    <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                </li>
            @endif

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
