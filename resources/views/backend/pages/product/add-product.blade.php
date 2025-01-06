@extends('backend.layouts.master')

@section('This page is Add Library', 'Add Library')
@section('main')
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
    <div class="all-content-wrapper">
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Library Assets</a></li>
                                <li><a href="#reviews"> Account Information</a></li>
                                <li><a href="#INFORMATION">Social Information</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="/upload"
                                                        class="dropzone dropzone-custom needsclick addlibrary"
                                                        id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="nameasset" type="text"
                                                                        class="form-control" placeholder="Name of Asset">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="subject" type="text"
                                                                        class="form-control" placeholder="Subject">
                                                                </div>
                                                                <div class="form-group alert-up-pd">
                                                                    <div class="dz-message needsclick download-custom">
                                                                        <i class="fa fa-download edudropnone"
                                                                            aria-hidden="true"></i>
                                                                        <h2 class="edudropnone">Drop image here or click to
                                                                            upload.</h2>
                                                                        <p class="edudropnone"><span
                                                                                class="note needsclick">(This is just a demo
                                                                                dropzone. Selected image is
                                                                                <strong>not</strong> actually
                                                                                uploaded.)</span>
                                                                        </p>
                                                                        <input name="imageico" class="hd-pro-img"
                                                                            type="text" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="department" type="number"
                                                                        class="form-control" placeholder="Department">
                                                                </div>
                                                                <div class="form-group res-mg-t-15">
                                                                    <input name="type" type="text"
                                                                        class="form-control" placeholder="Type">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="price" type="text"
                                                                        class="form-control" placeholder="Price">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="year" type="number"
                                                                        class="form-control" placeholder="Year">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="status" type="text"
                                                                        class="form-control" placeholder="Status">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit"
                                                                        class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Email">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="number" class="form-control"
                                                                    placeholder="Phone">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Password">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Confirm Password">
                                                            </div>
                                                            <a href="#"
                                                                class="btn btn-primary waves-effect waves-light">Submit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="url" class="form-control"
                                                                    placeholder="Facebook URL">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="url" class="form-control"
                                                                    placeholder="Twitter URL">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="url" class="form-control"
                                                                    placeholder="Google Plus">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="url" class="form-control"
                                                                    placeholder="Linkedin URL">
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary waves-effect waves-light">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


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

    <script src="js/dropzone/dropzone.js"></script>
@stop

</div>

<script src="{{ asset('js/dropzone/dropzone.js') }}"></script>
@stop
    

