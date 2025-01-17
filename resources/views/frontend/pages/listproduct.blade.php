@extends('frontend.layouts.master')
@section('title')
    List product of {{ $category->TenLoaiSP }}
@stop
@section('main')
    <link rel="stylesheet" href="css/new-arrival.css">
    <div class="container mt-5">
        <h1 class="text-center mb-4">{{ $category->TenLoaiSP }}</h1>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="{{ url('single-product-details/' . $product->Slug) }}">
                            <img class="card-img-top" src="{{ asset('Storage/SanPham/' . $product->HinhAnh) }}"
                                alt="{{ $product->TenSP }}" style="height: 250px; object-fit: cover;">
                        </a>
                        @if ($product->isNew)
                            <div class="product-badge new-badge">
                                <span>New</span>
                            </div>
                        @endif
                        <div class="card-body text-center">
                            <a href="{{ url('single-product-details/' . $product->Slug) }}">
                                <h5 class="card-title">{{ $product->TenSP }}</h5>
                            </a>
                            @if ($product->LoaiHang == 1)
                                <div class="pre-oder-new-arrivals">
                                    <span>Pre&ndash;order</span>
                                </div>
                            @endif
                            <p class="card-text">{{ number_format($product->GiaBan) }} VNĐ</p>
                            <div class="hover-content">
                                <!-- Add to Cart -->
                                <button class="btn essence-btn add-to-cart-btn" data-id="{{ $product->MaSP }}"
                                    data-name="{{ $product->TenSP }}" data-price="{{ $product->GiaBan }}"
                                    data-image="{{ asset('Storage/SanPham/' . $product->HinhAnh) }}"
                                    data-slug="{{ $product->Slug }}">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center mt-4 pagination-container">
        <nav>
            <ul class="pagination">
                {{-- Nút Prev --}}
                <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $products->previousPageUrl() ?? '#' }}" tabindex="-1">
                        <i class="fa-solid fa-angle-left"></i>
                    </a>
                </li>

                {{-- Các số trang --}}
                @for ($i = 1; $i <= $products->lastPage(); $i++)
                    <li class="page-item {{ $i == $products->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor

                {{-- Nút Next --}}
                <li class="page-item {{ $products->hasMorePages() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $products->nextPageUrl() ?? '#' }}">
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </li>
            </ul>
        </nav>
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
