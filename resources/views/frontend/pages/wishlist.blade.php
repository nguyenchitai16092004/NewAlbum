@extends('frontend.layouts.master')
@section('title', 'Wishlist')
@section('main')
    <link rel="stylesheet" href="css/wishlist.css">
    <div class="ctn-rating-product">
        <div class="header">
            <div>
                <h1>Welcome back!</h1>
            </div>
        </div>
        <p>You can review and edit your personal information here.</p>
        <nav class="navigation">
            <ul>
                <li><a href="{{ asset('/account') }}">Account Information</a></li>
                <li><a href="{{ route('hoa_don_history', ['id' => session('User')]) }}">Order History</a></li>
                <li><a href="{{ asset('/wishlist') }}" class="active">Wish List</a></li>
                <li><a href="{{ asset('/rating-product') }}">Rating Product</a></li>
            </ul>
        </nav>
    </div>
    <div class="container" style="margin-top: 50px">
        <div class="product-grid">
            @if (isset($wishlists) && count($wishlists) > 0)
                @foreach ($wishlists as $wishlist)
                    <div class="product-card">
                        <a href="{{ url('single-product-details/' . $wishlist->product->Slug) }}">
                            <img src="{{ asset('Storage/SanPham/' . $wishlist->product->HinhAnh) }}"
                                alt="{{ $wishlist->product->TenSP }}" class="product-image">
                        </a>
                        <div class="product-details">
                            <h2 class="product-title">{{ $wishlist->product->TenSP }}</h2>
                            <p class="product-price">{{ number_format($wishlist->product->GiaBan) }} VNĐ</p>
                            <div class="action-buttons">
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <button class="btn essence-btn add-to-cart-btn action-button"
                                        data-id="{{ $wishlist->product->MaSP }}"
                                        data-name="{{ $wishlist->product->TenSP }}"
                                        data-price="{{ $wishlist->product->GiaBan }}"
                                        data-image="{{ asset('Storage/SanPham/' . $wishlist->product->HinhAnh) }}"
                                        data-slug="{{ $wishlist->product->Slug }}">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to Cart
                                    </button>
                                </div>
                                <form action="{{ route('wishlist.delete', ['id' => $wishlist->product->MaSP]) }}"
                                    method="POST" class="inline-form">
                                    @csrf
                                    @method('DELETE')
                                    <button class="action-button remove-button" type="submit">
                                        <i class="fa fa-heart-broken"></i> Remove
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p style="text-align: center;">No items in your wishlist.</p>
            @endif
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.add-to-cart-btn').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const productId = this.dataset.id;
                    const productName = this.dataset.name;
                    const productPrice = this.dataset.price;
                    const productImage = this.dataset.image;
                    const productSlug = this.dataset.slug;
                    fetch("{{ route('add.to.cart') }}", {
                            // gửi yc đến cart
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                                "Content-Type": "application/json" // khai báo dl là json
                            },
                            body: JSON.stringify({
                                // chuyển dl sang json
                                id: productId,
                                name: productName,
                                price: productPrice,
                                image: productImage,
                                slug: productSlug,
                            })
                        })
                        .then(response => response.json())
                        // trả phản hồi json-> js
                        .then(data => {
                            if (data.success) {
                                const cartQuantity = document.querySelector(
                                    '.header-meta .favourite-area span');
                                if (cartQuantity) {
                                    cartQuantity.textContent = Object.values(data.cart).reduce((
                                        total, item) => total + item.quantity, 0);
                                    // cập nhật slsp trong gh lên header.
                                }
                            }
                        })
                        .catch(error => console.error('Error:', error));
                });
            });
        });
    </script>
@stop
