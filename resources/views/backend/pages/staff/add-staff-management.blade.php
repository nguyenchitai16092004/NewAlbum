@extends('backend.layouts.master')
@section('title', 'Add Staff')
@section('main')

<link rel="stylesheet" href="{{ asset('css/custom-style-addstaff.css') }}">

<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st" style="background: rgba(255, 255, 255, 0.9);">

                    <h3 class="text-center mb-4">Add Staff</h3>
                    <form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label for="TenQL">Name</label>
                                    <input type="text" name="TenQL" class="form-control" id="TenQL" placeholder="Enter Name" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="Email">Email</label>
                                    <input type="email" name="Email" class="form-control" id="Email" placeholder="Enter Email" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="NgaySinh">Birthday</label>
                                    <input type="date" name="NgaySinh" class="form-control" id="NgaySinh">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="SDT">Phone Number</label>
                                    <input type="text" name="SDT" class="form-control" id="SDT" placeholder="Enter Phone Number">
                                </div>
                                <!-- Image Upload -->
                                <div class="form-group mb-4">
                                    <label for="HinhAnh">Image</label>
                                    <input type="file" name="HinhAnh" class="form-control-file" id="HinhAnh" style="display: block; margin: 0 auto;">
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-md-6">
                                {{-- Bạn có thể thêm trường Address nếu muốn, nhưng migration chưa có --}}
                                {{-- <div class="form-group mb-4">
                                    <label for="DiaChi">Address</label>
                                    <input type="text" name="DiaChi" class="form-control" id="DiaChi" placeholder="Enter Address">
                                </div> --}}

                                <div class="form-group mb-4">
                                    <label for="TenDN">Account</label>
                                    <input type="text" name="TenDN" class="form-control" id="TenDN" placeholder="Enter Account" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="MatKhau">Password</label>
                                    <input type="password" name="MatKhau" class="form-control" id="MatKhau" placeholder="Enter Password" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="GioiTinh">Gender</label>
                                    <select name="GioiTinh" class="form-control" id="GioiTinh" required>
                                        <option value="1">Male</option>
                                        <option value="0">Female</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4 ">
                                    <label>Position:</label>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check mb-3" style="padding: 10px;">
                                            <input class="form-check-input" type="radio" name="ChucVu" id="admin" value="Admin" checked>
                                            <label class="form-check-label" for="admin">Admin</label>
                                        </div>
                                        <div class="form-check" style="padding: 10px;">
                                            <input class="form-check-input" type="radio" name="ChucVu" id="employee" value="Employee">
                                            <label class="form-check-label" for="employee">Employee</label>
                                        </div>
                                    </div>
                                </div>          
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@stop
