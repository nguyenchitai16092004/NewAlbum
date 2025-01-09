@extends('frontend.layouts.master')
@section('title', 'Cart')
@section('main')
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/pagination.css">
    <div class="favorites">
        <h1 style="text-align: center;margin-top:100px">Your Cart</h1>
    </div>
    <button class="delete-all-product">Delete all</button>

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
                @if ($cart->count())
                    @foreach ($cart as $id => $item)
                        <tr>
                            <td><a href="#"><img src="{{ $item['image'] }}" alt="{{ $item['name'] }}"></a></td>
                            <td> <a href="#">
                                    <h6>{{ $item['name'] }}</h6>
                                </a></td>
                            <td class="price">{{ number_format($item['price']) }} VND</td>
                            <td class="quantity-buttons">
                                <button class="btn-minus">-</button>
                                <span class="quantity">{{ $item['quantity'] }}</span>
                                <button class="btn-plus">+</button>
                            </td>
                            <td class="total">{{ number_format($item['price'] * $item['quantity']) }} VND</td>
                            <td>
                                <button class="btn delete remove-from-cart" data-id="{{ $id }}">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" style="text-align: center;">Your cart is empty</td>
                    </tr>
                @endif
            </tbody>

        </table>
    </div>

    <nav aria-label="navigation" class="navigation">
        <ul class="pagination mt-50 mb-70">
            {{-- Previous Page Link --}}
            @if ($cart->onFirstPage())
                <li class="page-item disabled"><a class="page-link"><i class="fa fa-angle-left"></i></a></li>
            @else
                <li class="page-item"><a class="page-link" href="{{ $cart->previousPageUrl() }}"><i
                            class="fa fa-angle-left"></i></a></li>
            @endif

            {{-- Pagination Links --}}
            @foreach ($cart->getUrlRange(1, $cart->lastPage()) as $page => $url)
                @if ($page == $cart->currentPage())
                    <li class="page-item active"><a class="page-link">{{ $page }}</a></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($cart->hasMorePages())
                <li class="page-item"><a class="page-link" href="{{ $cart->nextPageUrl() }}"><i
                            class="fa fa-angle-right"></i></a></li>
            @else
                <li class="page-item disabled"><a class="page-link"><i class="fa fa-angle-right"></i></a></li>
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
                <p>
                    {{ number_format(
                        collect($cart->items())->sum(function ($item) {
                            return $item['price'] * $item['quantity'];
                        }),
                    ) }}
                    VND
                </p>
            </div>
            <button class="checkout">CHECK OUT</button>
        </div>


    </div>

    <div class="container-product">
        <h4>Before your checkout, have you considered:</h4>
        <div class="line"></div>
        <div class="row">
            @foreach ($recommendedProducts as $product)
                <div class="product">
                    <img src="{{ asset('Storage/SanPham/' . $product->HinhAnh) }}" alt="{{ $product->TenSP }}">
                    <p>{{ $product->TenSP }}</p>
                    <span class="price">{{ number_format($product->GiaBan) }} VND</span>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const deleteAllBtn = document.querySelector('.delete-all-product');

            if (deleteAllBtn) {
                deleteAllBtn.addEventListener('click', function() {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#000',
                        cancelButtonColor: '#ff0000',
                        confirmButtonText: 'OK',
                        cancelButtonText: 'Cancel'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            fetch("{{ route('clear.cart') }}", {
                                    method: "POST",
                                    headers: {
                                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                                        "Content-Type": "application/json"
                                    }
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        Swal.fire(
                                            'Deleted!',
                                            'All products have been removed from your cart.',
                                            'success'
                                        ).then(() => {
                                            location.reload();
                                        });
                                    }
                                })
                                .catch(error => console.error('Error:', error));
                        }
                    });
                });
            }
        });


        document.addEventListener("DOMContentLoaded", function() {
            // Xử lý nút tăng/giảm số lượng sản phẩm
            document.querySelectorAll('.btn-plus, .btn-minus').forEach(
                button => { // Lấy tất cả nút tăng/giảm số lượng
                    button.addEventListener('click', function() { // Thêm sự kiện click cho mỗi nút
                        const row = this.closest('tr'); // Lấy hàng (row) chứa nút được nhấn
                        const productId = row.querySelector('.remove-from-cart').dataset
                            .id; // Lấy ID sản phẩm từ nút xóa
                        const quantityEl = row.querySelector(
                            '.quantity'); // Lấy phần tử hiển thị số lượng
                        const priceEl = row.querySelector('.price'); // Lấy phần tử hiển thị giá
                        const totalEl = row.querySelector('.total'); // Lấy phần tử hiển thị tổng tiền
                        const isIncrease = this.classList.contains(
                            'btn-plus'); // Kiểm tra nếu nút là tăng số lượng
                        let quantity = parseInt(quantityEl
                            .innerText); // Lấy số lượng hiện tại và chuyển thành số nguyên

                        // Tăng hoặc giảm số lượng
                        quantity = isIncrease ? quantity + 1 : Math.max(quantity - 1,
                            1); // Đảm bảo số lượng không nhỏ hơn 1

                        // Cập nhật số lượng trên giao diện
                        quantityEl.innerText = quantity;

                        // Gửi yêu cầu cập nhật số lượng lên server
                        fetch("{{ route('update.cart') }}", {
                                method: "POST", // Sử dụng phương thức POST
                                headers: {
                                    "X-CSRF-TOKEN": "{{ csrf_token() }}", // Token CSRF để bảo mật
                                    "Content-Type": "application/json" // Định dạng nội dung là JSON
                                },
                                body: JSON.stringify({ // Dữ liệu được gửi lên server
                                    id: productId, // ID sản phẩm
                                    quantity: quantity // Số lượng mới
                                })
                            })
                            .then(response => response.json()) // Chuyển đổi phản hồi thành JSON
                            .then(data => {
                                if (data.success) { // Kiểm tra phản hồi từ server
                                    // Cập nhật tổng tiền cho sản phẩm
                                    totalEl.innerText =
                                        `${new Intl.NumberFormat().format(data.itemTotal)} VNĐ`;

                                    // Cập nhật tổng cộng cho giỏ hàng
                                    document.querySelector('.summary .container-text p:last-child')
                                        .innerText =
                                        `${new Intl.NumberFormat().format(data.cartTotal)} VNĐ`;
                                }
                            })
                            .catch(error => console.error('Error:', error)); // Hiển thị lỗi nếu có
                    });
                });

            // Xử lý nút xóa sản phẩm
            document.querySelectorAll('.remove-from-cart').forEach(button => { // Lấy tất cả nút xóa sản phẩm
                button.addEventListener('click', function(e) { // Thêm sự kiện click cho mỗi nút
                    e.preventDefault(); // Ngăn hành động mặc định (ví dụ chuyển trang)

                    const productId = this.dataset.id; // Lấy ID sản phẩm từ thuộc tính data-id

                    // Gửi yêu cầu xóa sản phẩm lên server
                    fetch("{{ route('remove.from.cart') }}", {
                            method: "POST", // Sử dụng phương thức POST
                            headers: {
                                "X-CSRF-TOKEN": "{{ csrf_token() }}", // Token CSRF để bảo mật
                                "Content-Type": "application/json" // Định dạng nội dung là JSON
                            },
                            body: JSON.stringify({ // Dữ liệu được gửi lên server
                                id: productId // ID sản phẩm cần xóa
                            })
                        })
                        .then(response => response.json()) // Chuyển đổi phản hồi thành JSON
                        .then(data => {
                            if (data.success) { // Kiểm tra phản hồi từ server
                                location.reload(); // Tải lại trang để cập nhật giao diện
                            }
                        })
                        .catch(error => console.error('Error:', error)); // Hiển thị lỗi nếu có
                });
            });
        });
    </script>


@stop
