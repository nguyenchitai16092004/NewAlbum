@extends('backend.layouts.master')
@section('title', 'Add Product')
@section('main')

<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active; text-align: center; "><a href="#description" style="color: black;">Add
                                Product</a></li>
                    </ul>
                    <!-- Add Product Form -->
                    <form action="{{ Route('Add_Product') }}" id="addProductForm" method="POST"
                        enctype="multipart/form-data" class="dropzone dropzone-custom" id="addProductForm">
                        @csrf
                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="TenSP">Product Name</label>
                                    <input name="TenSP" type="text" class="form-control" placeholder="Product Name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="GiaNhap">Import Price</label>
                                    <input name="GiaNhap" id="GiaNhap" type="number" class="form-control" min="0"
                                        placeholder="Import Price" required>
                                </div>
                                <div class="form-group">
                                    <label for="GiaBan">Selling Price</label>
                                    <input name="GiaBan" id="GiaBan" type="number" class="form-control" min="0"
                                        placeholder="Selling Price" required>
                                </div>
                                <div class="form-group">
                                    <label for="TieuDe">Title</label>
                                    <input name="TieuDe" type="text" class="form-control"
                                        placeholder="Title Description" required>
                                </div>
                                <div class="form-group">
                                    <label for="MoTa">Description</label>
                                    <textarea name="MoTa" class="form-control" placeholder="Description"
                                        required></textarea>
                                </div>
                            </div>
                            <!-- Right Column -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="SoLuong">Quantity</label>
                                    <input name="SoLuong" type="number" class="form-control" min="0"
                                        placeholder="Quantity" required>
                                </div>
                                <div class="form-group">
                                    <label for="LoaiHang">Product Type</label>
                                    <select name="LoaiHang" class="form-control">
                                        <option value="0">Available</option>
                                        <option value="1">Pre-Order</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="MaNhomNhacCaSi">Band/Singer</label>
                                    <select name="MaNhomNhacCaSi" id="MaNhomNhacCaSi" class="form-control">
                                        @foreach ($Band as $item)
                                            <option value="{{ $item->MaNhomNhacCaSi }}">{{ $item->TenNhomNhacCaSi }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="MaLoaiSP">Category</label>
                                    <select name="MaLoaiSP" id="MaLoaiSP" class="form-control">
                                        @foreach ($Category as $item)
                                            <option value="{{ $item->MaLoaiSP }}">{{ $item->TenLoaiSP }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="MaKho">Warehouses</label>
                                    @foreach($Warehouses as $kho)
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input kho-checkbox"
                                                id="kho_{{ $kho->MaKho }}" name="khos[{{ $kho->MaKho }}][checked]"
                                                value="1">
                                            <label class="form-check-label" for="kho_{{ $kho->MaKho }}">
                                                {{ $kho->TenKho }} - {{ $kho->DiaChi }}
                                            </label>
                                            <input type="number" class="form-control mt-1 kho-soluong"
                                                name="khos[{{ $kho->MaKho }}][SoLuong]"
                                                placeholder="Quantity for this warehouse" min="0" disabled>
                                            <div id="checkbox-group-error" class="text-danger mb-2" style="display: none;">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="form-group">
                                    <label for="HinhAnh">Image</label>
                                    <input name="HinhAnh" type="file" class="form-control-file" required>
                                </div>
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
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('addProductForm');
        const productTypeSelect = document.querySelector('select[name="LoaiHang"]');
        const quantityInput = document.querySelector('input[name="SoLuong"]');

        // Xử lý loại hàng
        function handleProductTypeChange() {
            if (productTypeSelect.value === "1") {
                quantityInput.value = 0;
                quantityInput.setAttribute('readonly', true);
            } else {
                quantityInput.removeAttribute('readonly');
                if (parseInt(quantityInput.value) < 1) {
                    quantityInput.value = 1;
                }
            }
            // Bổ sung sau xử lý quantityInput
            document.querySelectorAll('.kho-checkbox').forEach(checkbox => {
                const maKho = checkbox.id.replace('kho_', '');
                const qtyInput = document.querySelector(`input[name="khos[${maKho}][SoLuong]"]`);
                const errorDiv = qtyInput.nextElementSibling;

                if (productTypeSelect.value === "1") {
                    checkbox.disabled = true;
                    checkbox.checked = false;
                    qtyInput.disabled = true;
                    qtyInput.value = '';
                    errorDiv.style.display = 'none';
                    qtyInput.classList.remove('is-invalid');
                } else {
                    checkbox.disabled = false;
                }
            });

        }

        productTypeSelect.addEventListener('change', handleProductTypeChange);
        handleProductTypeChange(); // áp dụng khi trang load

        // Bật/tắt ô số lượng theo checkbox
        document.querySelectorAll('.kho-checkbox').forEach(checkbox => {
            checkbox.addEventListener('change', function () {
                const maKho = this.id.replace('kho_', '');
                const qtyInput = document.querySelector(`input[name="khos[${maKho}][SoLuong]"]`);
                const errorDiv = qtyInput.nextElementSibling;

                if (this.checked) {
                    qtyInput.disabled = false;
                    qtyInput.focus();
                } else {
                    qtyInput.disabled = true;
                    qtyInput.value = '';
                    errorDiv.style.display = 'none';
                    qtyInput.classList.remove('is-invalid');
                }
            });
        });

        // Xử lý submit
        form.addEventListener('submit', function (e) {
            let valid = true;
            let atLeastOneChecked = false;

            const giaNhap = parseFloat(document.getElementById('GiaNhap').value);
            const giaBan = parseFloat(document.getElementById('GiaBan').value);
            const totalQuantity = parseInt(quantityInput.value) || 0;

            const errorGroupDiv = document.getElementById('checkbox-group-error');
            errorGroupDiv.style.display = 'none';
            errorGroupDiv.textContent = '';

            let warehouseTotal = 0;

            // Kiểm tra từng warehouse
            document.querySelectorAll('.kho-checkbox').forEach(checkbox => {
                const maKho = checkbox.id.replace('kho_', '');
                const qtyInput = document.querySelector(`input[name="khos[${maKho}][SoLuong]"]`);
                const errorDiv = qtyInput.nextElementSibling;

                errorDiv.style.display = 'none';
                qtyInput.classList.remove('is-invalid');

                if (checkbox.checked) {
                    atLeastOneChecked = true;

                    const qty = parseInt(qtyInput.value);
                    if (isNaN(qty) || qty <= 0) {
                        errorDiv.textContent = 'Please enter a valid quantity for warehouse.';
                        errorDiv.style.display = 'block';
                        qtyInput.classList.add('is-invalid');
                        valid = false;
                    } else {
                        warehouseTotal += qty;
                    }
                }
            });

            // Không chọn checkbox nào
            if (!atLeastOneChecked) {
                errorGroupDiv.textContent = 'Please select at least one warehouse.';
                errorGroupDiv.style.display = 'block';
                valid = false;
                if (!valid) e.preventDefault();
            }


            // Tổng số lượng không khớp
            if (atLeastOneChecked && valid && warehouseTotal !== totalQuantity) {
                errorGroupDiv.textContent = 'Total quantity for selected warehouses must equal total product quantity.';
                errorGroupDiv.style.display = 'block';
                valid = false;
            }


            // Giá nhập phải < giá bán
            if (giaNhap >= giaBan) {
                alert('Import Price must be less than Selling Price!');
                valid = false;
            }

            if (!valid) {
                e.preventDefault();
            }
        });
    });
</script>

@stop