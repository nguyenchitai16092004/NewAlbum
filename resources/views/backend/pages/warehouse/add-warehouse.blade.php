@extends('backend.layouts.master')
@section('title', 'Add Warehouse')
@section('main')

<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description" style="color: black;">Add Warehouse</a></li>
                    </ul>
                    <!-- Add Warehouse Form -->
                    <form action="{{ route('Add_Warehouse') }}" id="addWarehouseForm" method="POST"
                        enctype="multipart/form-data" class="dropzone dropzone-custom">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="TenKho">Warehouse Name</label>
                                    <input name="TenKho" type="text" class="form-control" placeholder="Warehouse Name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="MaQL">Warehouse Manager</label>
                                    <select name="MaQL" id="MaQL" class="form-control">
                                        @foreach ($Quanly as $item)
                                            <option value="{{ $item->MaQL }}">{{ $item->TenQL }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="NgayNhap">Import Date</label>
                                    <input name="NgayNhap" type="date" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="NgayXuat">Export Date</label>
                                    <input name="NgayXuat" type="date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="DiaChi">Address</label>
                                    <input name="DiaChi" type="text" class="form-control"
                                        placeholder="Warehouse Address" required>
                                </div>
                            </div>
                        </div>

                        <div class="payment-adress">
                            <button type="submit" class="btn btn-primary waves-effect waves-light"
                                style="background-color: black">
                                Submit
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('addWarehouseForm');

        handleProductTypeChange(); // áp dụng khi trang load

        const ngayNhap = new Date(document.getElementById('NgayNhap').value);
        const ngayXuat = new Date(document.getElementById('NgayXuat').value);

        // Xử lý submit
        form.addEventListener('submit', function (e) {
            let valid = true;
            let atLeastOneChecked = false;

            // Ngày nhập phải < ngày xuất
            if (ngayNhap >= ngayXuat) {
                alert('Import Day must be less than Export Date!');
                valid = false;
            }

            if (!valid) {
                e.preventDefault();
            }
        });
    });
</script>
@stop