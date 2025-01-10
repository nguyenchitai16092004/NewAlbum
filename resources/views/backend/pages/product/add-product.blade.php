@extends('backend.layouts.master')
@section('title', 'Add Product')
@section('main')

    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-payment-inner-st">
                        <!-- Add Product Form -->
                        <form action="{{ Route('Add_Product') }}" method="POST" enctype="multipart/form-data"
                            class="dropzone dropzone-custom">
                            @csrf
                            <div class="row">
                                <!-- Left Column -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="TenSP">Product Name</label>
                                        <input name="TenSP" type="text" class="form-control"
                                            placeholder="Product Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="GiaNhap">Import Price</label>
                                        <input name="GiaNhap" type="number" class="form-control" min="0"
                                            placeholder="Import Price">
                                    </div>
                                    <div class="form-group">
                                        <label for="GiaBan">Selling Price</label>
                                        <input name="GiaBan" type="number" class="form-control" min="0"
                                            placeholder="Selling Price">
                                    </div>
                                    <div class="form-group">
                                        <label for="TieuDe">Title</label>
                                        <input name="TieuDe" type="text" class="form-control"
                                            placeholder="Title Description">
                                    </div>
                                    <div class="form-group">
                                        <label for="MoTa">Description</label>
                                        <textarea name="MoTa" class="form-control" placeholder="Description"></textarea>
                                    </div>
                                </div>
                                <!-- Right Column -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="SoLuong">Quantity</label>
                                        <input name="SoLuong" type="number" class="form-control" min="0"
                                            placeholder="Quantity">
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
                                        <label for="HinhAnh">Image</label>
                                        <input name="HinhAnh" type="file" class="form-control-file">
                                    </div>
                                </div>
                            </div>
                            <div class="payment-adress">
                                <button type="submit" class="btn btn-primary waves-effect waves-light " style="background-color: black">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
