@extends('frontend.layouts.master')
@section('title', 'Home')
@section('main')
    <link rel="stylesheet" href="css/home.css">
    <!-- ##### Welcome Area Start ##### -->
    @include('frontend.partials.slideshow')
    <!-- ##### Top Catagory Area Start ##### -->
    <section class="top-catagory">
        <div class="container ctn-top-catagory">
            @if ($preOder3ProductsCol1->count() >= 3)
                <div class="prod-1">
                    <div class="img-prod-1">
                        <a href="{{ url('single-product-details/' . $preOder3ProductsCol1[0]->Slug) }}">
                            <img src="{{ asset('Storage/SanPham/' . $preOder3ProductsCol1[0]->HinhAnh) }}"
                                alt="{{ $preOder3ProductsCol1[0]->TenSP }}">
                        </a>
                    </div>
                    <div class="product-description">
                        <a href="{{ url('single-product-details/' . $preOder3ProductsCol1[0]->Slug) }}">
                            <h6>{{ $preOder3ProductsCol1[0]->TenSP }}</h6>
                        </a>
                        @if ($preOder3ProductsCol1[0]->LoaiHang == 1)
                            <div class="pre-oder-new-arrivals">
                                <span style="margin-left: 7px">Pre&ndash;order</span>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="prod-2">
                    <div class="img-prod-1">
                        <a href="{{ url('single-product-details/' . $preOder3ProductsCol1[1]->Slug) }}">
                            <img src="{{ asset('Storage/SanPham/' . $preOder3ProductsCol1[1]->HinhAnh) }}"
                                alt="{{ $preOder3ProductsCol1[1]->TenSP }}">
                        </a>
                    </div>
                    <div class="name-pro np-1">
                        <div class="product-description">
                            <a href="{{ url('single-product-details/' . $preOder3ProductsCol1[1]->Slug) }}">
                                <h6>{{ $preOder3ProductsCol1[1]->TenSP }}</h6>
                            </a>
                            @if ($preOder3ProductsCol1[1]->LoaiHang == 1)
                                <div class="pre-oder-new-arrivals">
                                    <span style="margin-left: 7px">Pre&ndash;order</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="prod-3">
                    <div class="img-prod-1">
                        <a href="{{ url('single-product-details/' . $preOder3ProductsCol1[2]->Slug) }}">
                            <img src="{{ asset('Storage/SanPham/' . $preOder3ProductsCol1[2]->HinhAnh) }}"
                                alt="{{ $preOder3ProductsCol1[2]->TenSP }}">
                        </a>
                    </div>
                    <div class="name-pro np-1">
                        <div class="product-description">
                            <a href="{{ url('single-product-details/' . $preOder3ProductsCol1[2]->Slug) }}">
                                <h6>{{ $preOder3ProductsCol1[2]->TenSP }}</h6>
                            </a>
                            @if ($preOder3ProductsCol1[2]->LoaiHang == 1)
                                <div class="pre-oder-new-arrivals">
                                    <span style="margin-left: 7px">Pre&ndash;order</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @else
                <p>No products available.</p>
            @endif
        </div>

        <div style="margin-top: 90px;" class="container ctn-top-catagory pre-col2">
            @if ($preOder3ProductsCol2->count() >= 3)
                <div class="prod-1 prod-col-2">
                    <div class="img-prod-1">
                        <a href="{{ url('single-product-details/' . $preOder3ProductsCol2[0]->Slug) }}">
                            <img src="{{ asset('Storage/SanPham/' . $preOder3ProductsCol2[0]->HinhAnh) }}"
                                alt="{{ $preOder3ProductsCol2[0]->TenSP }}">
                        </a>
                    </div>
                    <div class="name-pro np-1">
                        <div class="product-description">
                            <a href="{{ url('single-product-details/' . $preOder3ProductsCol2[0]->Slug) }}">
                                <h6>{{ $preOder3ProductsCol2[0]->TenSP }}</h6>
                            </a>
                            @if ($preOder3ProductsCol2[0]->LoaiHang == 1)
                                <div class="pre-oder-new-arrivals">
                                    <span style="margin-left: 7px">Pre&ndash;order</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="prod-2">
                    <div class="img-prod-1">
                        <a href="{{ url('single-product-details/' . $preOder3ProductsCol2[1]->Slug) }}">
                            <img src="{{ asset('Storage/SanPham/' . $preOder3ProductsCol2[1]->HinhAnh) }}"
                                alt="{{ $preOder3ProductsCol2[1]->TenSP }}">
                        </a>
                    </div>
                    <div class="name-pro np-1">
                        <div class="product-description">
                            <a href="{{ url('single-product-details/' . $preOder3ProductsCol2[1]->Slug) }}">
                                <h6>{{ $preOder3ProductsCol2[1]->TenSP }}</h6>
                            </a>
                            @if ($preOder3ProductsCol2[1]->LoaiHang == 1)
                                <div class="pre-oder-new-arrivals">
                                    <span style="margin-left: 7px">Pre&ndash;order</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="prod-3">
                    <div class="img-prod-1">
                        <a href="{{ url('single-product-details/' . $preOder3ProductsCol2[2]->Slug) }}">
                            <img src="{{ asset('Storage/SanPham/' . $preOder3ProductsCol2[2]->HinhAnh) }}"
                                alt="{{ $preOder3ProductsCol1[2]->TenSP }}">
                        </a>
                    </div>
                    <div class="name-pro np-1">
                        <div class="product-description">
                            <a href="{{ url('single-product-details/' . $preOder3ProductsCol2[2]->Slug) }}">
                                <h6>{{ $preOder3ProductsCol2[2]->TenSP }}</h6>
                            </a>
                            @if ($preOder3ProductsCol2[2]->LoaiHang == 1)
                                <div class="pre-oder-new-arrivals">
                                    <span style="margin-left: 7px">Pre&ndash;order</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @else
                <p>No products available.</p>
            @endif
        </div>
    </section>
    <!-- ##### New Arrivals Area Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <h2>NEW ARRIVALS</h2>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        <!-- Single Product -->
                        @foreach ($allProducts as $product)
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <a href="{{ url('single-product-details/' . $product->Slug) }}">
                                        <img src="{{ asset('Storage/SanPham/' . $product->HinhAnh) }}"
                                            alt="{{ $product->TenSP }}">
                                    </a>
                                    @if ($product->isNew)
                                        <div class="product-badge new-badge">
                                            <span>New</span>
                                        </div>
                                    @endif
                                    <!-- Favourite -->

                                    <div class="product-favourite">
                                        <form action="{{ route('wishlist.store') }}" method="POST"
                                            id="wishlist-{{ $product->MaSP }}">
                                            @csrf
                                            <input type="hidden" name="MaSP" value="{{ $product->MaSP }}">
                                            <input type="hidden" name="HinhAnh" value="{{ $product->HinhAnh }}">
                                            <a type="submit" class="favme fa fa-heart"
                                                onclick="document.getElementById('wishlist-{{ $product->MaSP }}').submit();"></a>
                                        </form>
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    <a href="{{ url('single-product-details/' . $product->Slug) }}">
                                        <h6>{{ $product->TenSP }}</h6>
                                    </a>
                                    @if ($product->LoaiHang == 1)
                                        <div class="pre-oder-new-arrivals">
                                            <span>Pre&ndash;order</span>
                                        </div>
                                    @endif
                                    <p class="product-price price">{{ number_format($product->GiaBan) }} VNĐ</p>
                                    <!-- Hover Content -->
                                    <div class="hover-content">
                                        <!-- Add to Cart -->
                                        <div class="add-to-cart-btn">
                                            <div class="add-to-cart-btn">
                                                <button class="btn essence-btn add-to-cart-btn"
                                                    data-id="{{ $product->MaSP }}" data-name="{{ $product->TenSP }}"
                                                    data-price="{{ $product->GiaBan }}"
                                                    data-image="{{ asset('Storage/SanPham/' . $product->HinhAnh) }}"
                                                    data-slug="{{ $product->Slug }}">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="view-all">
            <a href="{{ asset('/new-arrival') }}">View All <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>
    <section class="new_arrivals_area section-padding-80 clearfix">
        <h2>Pre-Order</h2>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pre-oders-product">
                        <!-- Single Product -->
                        @foreach ($allPreOderProducts as $product)
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <a href="{{ url('single-product-details/' . $product->Slug) }}">
                                        <img src="{{ asset('Storage/SanPham/' . $product->HinhAnh) }}"
                                            alt="{{ $product->TenSP }}">
                                    </a>
                                    @if ($product->isNew)
                                        <div class="product-badge new-badge">
                                            <span>New</span>
                                        </div>
                                    @endif
                                    <!-- Favourite -->

                                    <div class="product-favourite">
                                        <form action="{{ route('wishlist.store') }}" method="POST"
                                            id="wishlist-{{ $product->MaSP }}">
                                            @csrf
                                            <input type="hidden" name="MaSP" value="{{ $product->MaSP }}">
                                            <input type="hidden" name="HinhAnh" value="{{ $product->HinhAnh }}">
                                            <a type="submit" class="favme fa fa-heart"
                                                onclick="document.getElementById('wishlist-{{ $product->MaSP }}').submit();"></a>
                                        </form>
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    <a href="{{ url('single-product-details/' . $product->Slug) }}">
                                        <h6>{{ $product->TenSP }}</h6>
                                    </a>
                                    @if ($product->LoaiHang == 1)
                                        <div class="pre-oder-new-arrivals">
                                            <span>Pre&ndash;order</span>
                                        </div>
                                    @endif
                                    <p class="product-price price">{{ number_format($product->GiaBan) }} VNĐ</p>
                                    <!-- Hover Content -->
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
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="view-all">
            <a href="{{ asset('/pre-oders') }}">View All <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>
    <section class="new_arrivals_area section-padding-80 clearfix">
        <h2>K-GOODS</h2>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pre-oders-product">
                        <!-- Single Product -->
                        @foreach ($allKGoodsProducts as $product)
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <a href="{{ url('single-product-details/' . $product->Slug) }}">
                                        <img src="{{ asset('Storage/SanPham/' . $product->HinhAnh) }}"
                                            alt="{{ $product->TenSP }}">
                                    </a>
                                    @if ($product->isNew)
                                        <div class="product-badge new-badge">
                                            <span>New</span>
                                        </div>
                                    @endif
                                    <!-- Favourite -->

                                    <div class="product-favourite">
                                        <form action="{{ route('wishlist.store') }}" method="POST"
                                            id="wishlist-{{ $product->MaSP }}">
                                            @csrf
                                            <input type="hidden" name="MaSP" value="{{ $product->MaSP }}">
                                            <input type="hidden" name="HinhAnh" value="{{ $product->HinhAnh }}">
                                            <a type="submit" class="favme fa fa-heart"
                                                onclick="document.getElementById('wishlist-{{ $product->MaSP }}').submit();"></a>
                                        </form>
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    <a href="{{ url('single-product-details/' . $product->Slug) }}">
                                        <h6>{{ $product->TenSP }}</h6>
                                    </a>
                                    @if ($product->LoaiHang == 1)
                                        <div class="pre-oder-new-arrivals">
                                            <span>Pre&ndash;order</span>
                                        </div>
                                    @endif
                                    <p class="product-price price">{{ number_format($product->GiaBan) }} VNĐ</p>
                                    <!-- Hover Content -->
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
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="view-all">
            <a href="{{ url('/listproduct/k-goods') }}">View All <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>
    <section class="new_arrivals_area section-padding-80 clearfix">
        <h2>POSTER</h2>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pre-oders-product owl-carousel">
                        @foreach ($allPosterProducts as $product)
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <a href="{{ url('single-product-details/' . $product->Slug) }}">
                                        <img src="{{ asset('Storage/SanPham/' . $product->HinhAnh) }}"
                                            alt="{{ $product->TenSP }}">
                                    </a>
                                    @if ($product->isNew)
                                        <div class="product-badge new-badge">
                                            <span>New</span>
                                        </div>
                                    @endif
                                    <!-- Favourite -->
                                    <div class="product-favourite">
                                        <form action="{{ route('wishlist.store') }}" method="POST"
                                            id="wishlist-{{ $product->MaSP }}">
                                            @csrf
                                            <input type="hidden" name="MaSP" value="{{ $product->MaSP }}">
                                            <input type="hidden" name="HinhAnh" value="{{ $product->HinhAnh }}">
                                            <a type="submit" class="favme fa fa-heart"
                                                onclick="document.getElementById('wishlist-{{ $product->MaSP }}').submit();"></a>
                                        </form>
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    @if ($product->LoaiHang == 1)
                                    @endif
                                    <a href="{{ url('single-product-details/' . $product->Slug) }}">
                                        <h6>{{ $product->TenSP }}</h6>
                                    </a>
                                    @if ($product->LoaiHang == 1)
                                        <div class="pre-oder-new-arrivals">
                                            <span>Pre&ndash;order</span>
                                        </div>
                                    @endif
                                    <p class="product-price price">{{ number_format($product->GiaBan) }} VNĐ</p>
                                    <!-- Hover Content -->
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
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="view-all">
            <a href="{{ url('/listproduct/poster') }}">View All <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".add-to-cart-btn").forEach((button) => {
                button.addEventListener("click", function(e) {
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
                                "Content-Type": "application/json", // khai báo dl là json
                            },
                            body: JSON.stringify({
                                // chuyển dl sang json
                                id: productId,
                                name: productName,
                                price: productPrice,
                                image: productImage,
                                slug: productSlug,
                            }),
                        })
                        .then((response) => response.json())
                        // trả phản hồi json-> js
                        .then((data) => {
                            if (data.success) {
                                const cartQuantity = document.querySelector(
                                    ".header-meta .favourite-area span"
                                );
                                if (cartQuantity) {
                                    cartQuantity.textContent = Object.values(
                                        data.cart
                                    ).reduce((total, item) => total + item.quantity, 0);
                                    // cập nhật slsp trong gh lên header.
                                }
                            }
                        })
                        .catch((error) => console.error("Error:", error));
                });
            });
        });
    </script>
@stop
