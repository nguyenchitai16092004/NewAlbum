@extends('frontend.layouts.master')
@section('title', 'Product Detail')
@section('main')
    <link rel="stylesheet" href="css/single-product-details.css">
    <div class="container-detail">
        <div class="product-container">
            <div class="product-image1"style="margin-top:40px">
                <img src="{{ asset('Storage/SanPham/' . $product->HinhAnh) }}" alt="{{ $product->TenSP }}">
            </div>
            <div class="product-details"style="margin-top:40px">
                <h1>{{ $product->TenSP }}</h1>
                <p>{{ $product->TieuDe }}</p>
                <div class="status-price">
                    <div class="status-product">
                        <p>Status:</p>
                        @if ($product->LoaiHang == 1)
                            <div class="pre-oder-new-arrivals pre-order">
                                <span>Pre&ndash;order</span>
                            </div>
                        @endif
                        @if ($product->LoaiHang != 1)
                            <div class="pre-oder-new-arrivals normal">
                                <span>Normal</span>
                            </div>
                        @endif
                    </div>
                    <p>Price: <strong>{{ number_format($product->GiaBan) }} VND</strong></p>
                </div>

                <div class="quantity">
                    <button class="btn-minus">-</button>
                    <input type="number" value="1">
                    <button class="btn-plus">+</button>
                </div>

                <button class="btn essence-btn add-to-cart-btn" data-id="{{ $product->MaSP }}"
                    data-name="{{ $product->TenSP }}" data-price="{{ $product->GiaBan }}"
                    data-image="{{ asset('Storage/SanPham/' . $product->HinhAnh) }}" data-slug="{{ $product->Slug }}">
                    ADD TO CART →
                </button>
                <div class="wishlist">
                    <span>🤍</span> WishList
                </div>
            </div>
        </div>
    </div>
    <div class="container-product">
        <!-- Description Section -->
        <div class="description-section">
            <h1>{{ $product->TenSP }}</h1>
            <h2>{{ $product->TieuDe }}</h2>
            <div class="product-image2">
                <img src="{{ asset('Storage/SanPham/' . $product->HinhAnh) }}" alt="{{ $product->TenSP }}">
            </div>
            <p id="product-description" style="display: none;">
                {{ $product->MoTa }}
            </p>
            <a href="#" class="more-button" id="more-button">More</a>
        </div>

        <!-- Review Section -->
        <div class="ctn-rating">
            <div class="review-section">
                <h3>Review</h3>
                <div class="rating">
                    <div class="rating-score">
                        {{ number_format($averageRating ?? 0, 1) }}
                    </div>
                    <div class="rating-stars">
                        @php
                            $fullStars = floor($averageRating);
                            $halfStar = $averageRating - $fullStars >= 0.5;
                        @endphp
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $fullStars)
                                ★
                            @elseif ($i == $fullStars + 1 && $halfStar)
                                ☆
                            @else
                                ☆
                            @endif
                        @endfor
                    </div>
                </div>
                {{-- <div class="write-review">
                    <label for="review">Write a review</label>
                    <textarea id="review" placeholder="Write your review here..."></textarea>
                    <div class="star-input">★★★★★</div>
                </div>
                <div class="ctn-comment">
                    <button class="btn-comment">Comment</button>
                </div> --}}
            </div>

            <div class="review-section-comment">
                <div class="review-section2">
                    <div class="review-header">
                        <span>All reviews ({{ $commentCount }})</span>
                    </div>
                </div>
                @foreach ($commentProducts as $comment)
                    <div class="comment-item">
                        <div class="comment-header">
                            <span class="comment-author">{{ $comment->khachHang->TenKH ?? 'Anonymous' }}</span>
                            <span class="comment-date">{{ $comment->created_at->format('F d, Y') }}</span>
                        </div>
                        <div class="comment-body">
                            <p>{{ $comment->NoiDung }}</p>
                        </div>
                        <div class="comment-rating">
                            Rating: {{ str_repeat('★', $comment->SoSao) }}{{ str_repeat('☆', 5 - $comment->SoSao) }}
                        </div>
                    </div>
                @endforeach
                <div class="pagination-links">
                    {{ $commentProducts->links() }}
                </div>
            </div>
        </div>
    </div>

    <div class="product-recommendation">
        <h3>You may also like these products</h3>
        <div class="products">
            @foreach ($recommendedProducts as $reProd)
                <div class="product-card">
                    <a href="{{ url('single-product-details/' . $reProd->Slug) }}">
                        <img src="{{ asset('Storage/SanPham/' . $reProd->HinhAnh) }}" alt="{{ $reProd->TenSP }}">
                    </a>
                    <a href="{{ url('single-product-details/' . $reProd->Slug) }}">
                        <p>{{ $product->TenSP }}</< /p>
                    </a>
                    @if ($reProd->isNew)
                        <div class="product-badge new-badge">
                            <span>New</span>
                        </div>
                    @endif
                    @if ($reProd->LoaiHang == 1)
                        <div class="pre-oder-new-arrivals">
                            <span>Pre&ndash;order</span>
                        </div>
                    @endif
                    <p><strong>305.000 VND</strong></p>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const moreButton = document.getElementById('more-button');
            const productDescription = document.getElementById('product-description');

            moreButton.addEventListener('click', function(event) {
                event.preventDefault();
                if (productDescription.style.display === 'none') {
                    productDescription.style.display = 'block';
                    moreButton.textContent = 'Hide';
                } else {
                    productDescription.style.display = 'none';
                    moreButton.textContent = 'More';
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Xử lý nút "ADD TO CART"
            document.querySelectorAll('.add-to-cart-btn').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();

                    const productId = this.dataset.id;
                    const productName = this.dataset.name;
                    const productPrice = this.dataset.price;
                    const productImage = this.dataset.image;
                    const productSlug = this.dataset.slug;

                    // Lấy giá trị số lượng từ ô input liền trước nút
                    const quantityInput = this.parentElement.querySelector('.quantity input');
                    const quantity = parseInt(quantityInput.value) ||
                        1; // Mặc định là 1 nếu giá trị không hợp lệ

                    fetch("{{ route('add.to.cart') }}", {
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                                "Content-Type": "application/json"
                            },
                            body: JSON.stringify({
                                id: productId,
                                name: productName,
                                price: productPrice,
                                image: productImage,
                                quantity: quantity, // Gửi số lượng tới server
                                slug: productSlug,
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                const cartQuantity = document.querySelector(
                                    '.header-meta .favourite-area span');
                                if (cartQuantity) {
                                    // Cập nhật số lượng sản phẩm trong giỏ hàng
                                    cartQuantity.textContent = Object.values(data.cart).reduce((
                                        total, item) => total + item.quantity, 0);
                                }
                            }
                        })
                        .catch(error => console.error('Error:', error));
                });
            });
        });
        document.addEventListener("DOMContentLoaded", function() {
            // Lấy các nút và ô input số lượng
            const quantityInputs = document.querySelectorAll('.quantity input');
            const plusButtons = document.querySelectorAll('.btn-plus');
            const minusButtons = document.querySelectorAll('.btn-minus');

            // Xử lý khi nhấn nút "+"
            plusButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const quantityInput = this.previousElementSibling; // Input liền trước nút "+"
                    let currentValue = parseInt(quantityInput.value) || 1; // Giá trị hiện tại
                    quantityInput.value = currentValue + 1; // Tăng giá trị lên 1
                });
            });

            // Xử lý khi nhấn nút "-"
            minusButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const quantityInput = this.nextElementSibling; // Input liền sau nút "-"
                    let currentValue = parseInt(quantityInput.value) || 1; // Giá trị hiện tại
                    if (currentValue > 1) {
                        quantityInput.value = currentValue - 1; // Giảm giá trị đi 1 (nếu lớn hơn 1)
                    }
                });
            });

            // Xử lý khi người dùng nhập trực tiếp vào ô input
            quantityInputs.forEach(input => {
                input.addEventListener('input', function() {
                    // Lấy giá trị đã nhập
                    let value = parseInt(this.value);

                    // Kiểm tra nếu giá trị không hợp lệ (NaN, số âm, hoặc nhỏ hơn 1)
                    if (isNaN(value) || value < 1) {
                        this.value = 1; // Gán lại giá trị tối thiểu là 1
                    } else {
                        this.value = value; // Cập nhật giá trị hợp lệ
                    }
                });

                // Ngăn nhập ký tự đặc biệt hoặc chữ vào ô input
                input.addEventListener('keydown', function(event) {
                    const allowedKeys = ["Backspace", "ArrowLeft", "ArrowRight", "Tab", "Delete"];
                    const isNumber = event.key >= '0' && event.key <= '9';
                    const isAllowedKey = allowedKeys.includes(event.key);

                    if (!isNumber && !isAllowedKey) {
                        event.preventDefault(); // Ngăn hành động nhập
                    }
                });
            });
        });
    </script>

@stop
