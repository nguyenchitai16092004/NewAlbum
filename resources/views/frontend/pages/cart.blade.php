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
                            <td><a href="{{ asset('/single-product-detail') }}"><img src="{{ $item['image'] }}"
                                        alt="{{ $item['name'] }}"></a></td>
                            <td> <a href="{{ asset('/single-product-detail') }}">
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
        <div class="note">
            <h5>Add a note to your order</h5>
            <textarea placeholder="Your note"></textarea>
            <button class="update">Update</button>
        </div>

        <div class="summary" style="{{ $cartTotal > 0 ? '' : 'display: none;' }}">
            <div class="container-text">
                <p>Subtotal:</p>
                <p>{{ number_format($cartTotal) }} VND</p>
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
                    <a href="{{ asset('/single-product-detail') }}"><img
                            src="{{ asset('Storage/SanPham/' . $product->HinhAnh) }}" alt="{{ $product->TenSP }}"></a>
                    <a href="{{ asset('/single-product-detail') }}">
                        <p>{{ $product->TenSP }}</p>
                    </a>
                    <span class="price">{{ number_format($product->GiaBan) }} VND</span>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        //sk xóa toàn bộ gh
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
                                        document.querySelector('.cart-container tbody')
                                            .innerHTML =
                                            `<tr><td colspan="6" style="text-align: center;">Your cart is empty</td></tr>`;
                                        document.querySelector('.summary').style.display =
                                            'none';
                                        Swal.fire(
                                            'Deleted!',
                                            'All products have been removed from your cart.',
                                            'success'
                                        );
                                    }
                                })
                                .catch(error => console.error('Error:', error));
                        }
                    });
                });
            }

            // sk thay đổi slsp
            document.querySelectorAll('.btn-plus, .btn-minus').forEach(button => {
                button.addEventListener('click', function() {
                    const row = this.closest('tr'); //hàng chứa btn
                    const productId = row.querySelector('.remove-from-cart').dataset
                        .id; // lấy id sp
                    const quantityEl = row.querySelector('.quantity'); // sl
                    const totalEl = row.querySelector('.total'); // tổng tiền của sp
                    const isIncrease = this.classList.contains(
                        'btn-plus'); // Kiểm tra nếu là nút tăng số lượng.
                    let quantity = parseInt(quantityEl.innerText); // Lấy số lượng hiện tại.

                    quantity = isIncrease ? quantity + 1 : quantity - 1;

                    if (quantity === 0) {
                        fetch("{{ route('remove.from.cart') }}", {
                                method: "POST",
                                headers: {
                                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                                    "Content-Type": "application/json"
                                },
                                body: JSON.stringify({
                                    id: productId
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    row.remove(); // Xóa hàng khỏi gd
                                    document.querySelector(
                                            '.summary .container-text p:last-child').innerText =
                                        `${new Intl.NumberFormat().format(data.cartTotal)} VND`; // cập nhật tổng tiền.
                                    if (Object.keys(data.cart).length === 0) {
                                        // ktra nếu gh trống hiển thị tb
                                        document.querySelector('.cart-container tbody')
                                            .innerHTML =
                                            `<tr><td colspan="6" style="text-align: center;">Your cart is empty</td></tr>`;
                                        document.querySelector('.summary').style.display =
                                            'none';
                                    }
                                }
                            })
                            .catch(error => console.error('Error:', error));
                    } else {
                        // Nếu dl > 0, update slsp.
                        quantityEl.innerText = quantity;

                        fetch("{{ route('update.cart') }}", {
                                method: "POST",
                                headers: {
                                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                                    "Content-Type": "application/json"
                                },
                                body: JSON.stringify({
                                    id: productId, // id sp mới.
                                    quantity: quantity //sl mới.
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    totalEl.innerText =
                                        `${new Intl.NumberFormat().format(data.itemTotal)} VND`; // update tổng tiền của sp
                                    document.querySelector(
                                            '.summary .container-text p:last-child').innerText =
                                        `${new Intl.NumberFormat().format(data.cartTotal)} VND`; // update tổng tiền của gh.
                                }
                            })
                            .catch(error => console.error('Error:', error));
                    }
                });
            });

            // sk xóa sản phẩm
            document.querySelectorAll('.remove-from-cart').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const productId = this.dataset.id; // lấy id sp

                    fetch("{{ route('remove.from.cart') }}", {
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                                "Content-Type": "application/json"
                            },
                            body: JSON.stringify({
                                id: productId // id sp cần xóa
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                this.closest('tr')
                                    .remove(); //xóa hàng khỏi gd
                                document.querySelector('.summary .container-text p:last-child')
                                    .innerText =
                                    `${new Intl.NumberFormat().format(data.cartTotal)} VND`; // update tổng tiền của gh.
                                if (Object.keys(data.cart).length === 0) {
                                    // nếu gh trống hiển thị tb
                                    document.querySelector('.cart-container tbody').innerHTML =
                                        `<tr><td colspan="6" style="text-align: center;">Your cart is empty</td></tr>`;
                                    document.querySelector('.summary').style.display =
                                        'none';
                                }
                            }
                        })
                        .catch(error => console.error('Error:', error));
                });
            });
        });
    </script>
@stop
