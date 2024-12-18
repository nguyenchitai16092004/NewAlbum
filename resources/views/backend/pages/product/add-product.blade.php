@extends('backend.layouts.master')

@section('title', 'Add Library')

@section('main')
<link rel="stylesheet" href="{{ asset('css/dropzone/dropzone.css') }}">

<div class="all-content-wrapper">
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Add Product</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <!-- Add Product Form -->
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <form action="" method="POST" enctype="multipart/form-data" class="dropzone dropzone-custom">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Name Product</label>
                                                <input name="ten_sp" type="text" class="form-control" placeholder="Product Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Import price</label>
                                                <input name="gia_nhap" type="number" class="form-control" placeholder="import price">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Selling Price</label>
                                                <input name="gia_ban" type="number" class="form-control" placeholder="Selling Price">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Description</label>
                                                <textarea name="mo_ta" class="form-control" placeholder="Description"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <div class="dz-message needsclick">
                                                    <label for="">Image</label>
                                                </div>
                                                <input name="image" type="file" class="form-control-file">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Quantity</label>
                                                <input name="so_luong" type="number" class="form-control" placeholder="Quantity">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Product Type</label>
                                                <select name="LoaiHang" class="form-control">
                                                    <option value="0">Available</option>
                                                    <option value="1">Pre-Oder</option>  
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="MaNhomNhacCaSi">Nhóm nhạc/Ca sĩ:</label>
                                                <select name="MaNhomNhacCaSi" id="MaNhomNhacCaSi" class="form-control">
                                                    <option value="" selected disabled>Chọn nhóm nhạc/ca sĩ</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="payment-adress">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Account Information -->
                            <div class="product-tab-list tab-pane fade" id="reviews">
                                <!-- Content for Account Info -->
                            </div>
                            <!-- Social Links -->
                            <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                <!-- Content for Social Links -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/dropzone/dropzone.js') }}"></script>
@stop
    