@extends('backend.layouts.master')
@section('title', 'Edit Product')
@section('main')
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-payment-inner-st">
                        <!-- Edit Product Form -->
                        <form action="{{ route('Edit_Product', ['id' => $products->MaSP]) }}" method="POST"
                            enctype="multipart/form-data" class="dropzone dropzone-custom" id="editProductForm">
                            @csrf
                            <div class="row">
                                <!-- Left Column -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="TenSP">Product Name</label>
                                        <input name="TenSP" type="text" class="form-control"
                                            value="{{ $products->TenSP }}" placeholder="Product Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="GiaNhap">Import Price</label>
                                        <input name="GiaNhap" type="number" class="form-control"
                                            value="{{ $products->GiaNhap }}" placeholder="Import Price">
                                    </div>
                                    <div class="form-group">
                                        <label for="GiaBan">Selling Price</label>
                                        <input name="GiaBan" type="number" class="form-control"
                                            value="{{ $products->GiaBan }}" min="0" placeholder="Selling Price">
                                    </div>
                                    <div class="form-group">
                                        <label for="TieuDe">Title</label>
                                        <input name="TieuDe" type="text" class="form-control"
                                            value="{{ $products->GiaBan }}" placeholder="Title Description">
                                    </div>
                                    <div class="form-group">
                                        <label for="MoTa">Description</label>
                                        <textarea name="MoTa" class="form-control" placeholder="Description">{{ $products->MoTa }}</textarea>
                                    </div>
                                </div>
                                <!-- Right Column -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="SoLuong">Quantity</label>
                                        <input name="SoLuong" type="number" class="form-control"
                                            value="{{ $products->SoLuong }}" placeholder="Quantity">
                                    </div>
                                    <div class="form-group">
                                        <label for="LoaiHang">Product Type</label>
                                        <select name="LoaiHang" class="form-control" id="LoaiHang">
                                            <option value="0" {{ $products->LoaiHang == 0 ? 'selected' : '' }}>Available</option>
                                            <option value="1" {{ $products->LoaiHang == 1 ? 'selected' : '' }}>Pre-Order</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="MaNhomNhacCaSi">Band/Singer</label>
                                        <select name="MaNhomNhacCaSi" id="MaNhomNhacCaSi" class="form-control">
                                            @foreach ($Band as $item)
                                                <option value="{{ $item->MaNhomNhacCaSi }}"
                                                    {{ $products->MaNhomNhacCaSi == $item->MaNhomNhacCaSi ? 'selected' : '' }}>
                                                    {{ $item->TenNhomNhacCaSi }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="MaLoaiSP">Category</label>
                                        <select name="MaLoaiSP" id="MaLoaiSP" class="form-control">
                                            @foreach ($Category as $item)
                                                <option value="{{ $item->MaLoaiSP }}"
                                                    {{ $products->MaLoaiSP == $item->MaLoaiSP ? 'selected' : '' }}>
                                                    {{ $item->TenLoaiSP }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="HinhAnh">Image</label>
                                        <input name="HinhAnh" type="file" class="form-control-file">
                                    </div>
                                    <img src="{{ asset('Storage/SanPham/' . $products->HinhAnh) }}"
                                        style="width: 100px; height:100px">
                                </div>
                            </div>
                            <div class="payment-adress">
                                <button type="submit" class="btn btn-primary waves-effect waves-light "
                                    style="background-color: black">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Validation -->
    <script>
        const productTypeSelect = document.querySelector('#LoaiHang');
        const quantityInput = document.querySelector('input[name="SoLuong"]');

        // Lưu lại giá trị ban đầu của số lượng
        let originalQuantity = quantityInput.value;

        // Xử lý thay đổi Product Type
        productTypeSelect.addEventListener('change', function () {
            if (productTypeSelect.value === "1") { // Pre-Order
                quantityInput.value = 0;
                quantityInput.setAttribute('readonly', true); // Khóa số lượng
            } else { // Available
                quantityInput.removeAttribute('readonly'); // Mở khóa số lượng
                quantityInput.value = originalQuantity; // Giữ lại giá trị ban đầu
            }
        });

        // Đảm bảo trạng thái đúng khi tải trang
        document.addEventListener('DOMContentLoaded', function () {
            if (productTypeSelect.value === "1") {
                quantityInput.value = 0;
                quantityInput.setAttribute('readonly', true);
            } else {
                quantityInput.removeAttribute('readonly');
                quantityInput.value = originalQuantity;
            }
        });
    </script>
@stop


