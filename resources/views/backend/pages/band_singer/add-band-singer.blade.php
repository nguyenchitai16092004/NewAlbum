@extends('backend.layouts.master')
@section('Title', 'Add Singer/Band')
@section('main')

    <link rel="stylesheet" href="css/dropzone/dropzone.css">

    <div class="all-content-wrapper">
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active1"><a href="#description" style="color: black">Add Music Group/Artist</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="{{route('Add_Singer')}}" method="POST" class="dropzone dropzone-custom needsclick addlibrary">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <label for="">Group/Artist Name</label>
                                                                    <input name="TenNhomNhacCaSi" type="text" class="form-control" placeholder="Group/Artist Name" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Gender</label>
                                                                    <select name="GioiTinh" class="form-control" required>
                                                                        <option value="">Select Gender</option>
                                                                        <option value="1">Male</option>
                                                                        <option value="0">Female</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Type</label>
                                                                    <select name="Loai" class="form-control" required>
                                                                        <option value="">Select Type</option>
                                                                        <option value="1">Singer</option>
                                                                        <option value="0">Band</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light" style="background-color: black">Submit</button>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop