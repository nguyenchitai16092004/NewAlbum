@extends('backend.layouts.master')
@section('title', 'Edit Staff')

@section('main')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-payment-inner-st" style="background: rgba(255, 255, 255, 0.9);">
                    
                    <h3 class="text-center mb-4">Edit Staff</h3>
                    <form action="{{ route('staff.update', $staff->MaQL) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label for="TenQL">Name</label>
                                    <input type="text" name="TenQL" class="form-control" id="TenQL" value="{{ $staff->TenQL }}" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="Email">Email</label>
                                    <input type="email" name="Email" class="form-control" id="Email" value="{{ $staff->Email }}" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="NgaySinh">Birthday</label>
                                    <input type="date" name="NgaySinh" class="form-control" id="NgaySinh" value="{{ $staff->NgaySinh }}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="SDT">Phone Number</label>
                                    <input type="text" name="SDT" class="form-control" id="SDT" value="{{ $staff->SDT }}">
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label for="ChucVu">Position</label>
                                    <input type="text" name="ChucVu" class="form-control" id="ChucVu" value="{{ $staff->ChucVu }}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="TenDN">Account</label>
                                    <input type="text" name="TenDN" class="form-control" id="TenDN" value="{{ $staff->TenDN }}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="MatKhau">Password</label>
                                    <input type="password" name="MatKhau" class="form-control" id="MatKhau" placeholder="Leave blank to keep current">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="GioiTinh">Gender</label>
                                    <select name="GioiTinh" class="form-control" id="GioiTinh">
                                        <option value="1" {{ $staff->GioiTinh == 1 ? 'selected' : '' }}>Male</option>
                                        <option value="0" {{ $staff->GioiTinh == 0 ? 'selected' : '' }}>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Image Upload -->
                        <div class="form-group mb-4">
                            <label for="HinhAnh">Image</label>
                            <input type="file" name="HinhAnh" class="form-control-file" id="HinhAnh">
                            @if ($staff->HinhAnh)
                                <img src="{{ asset('uploads/staff/' . $staff->HinhAnh) }}" alt="Current Image" style="width: 100px; height: 100px; object-fit: cover; margin-top: 10px;">
                            @endif
                        </div>

                        <!-- Status -->
                        <div class="form-group mb-4">
                            <label for="TrangThai">Status</label>
                            <select name="TrangThai" class="form-control" id="TrangThai">
                                <option value="1" {{ $staff->TrangThai == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $staff->TrangThai == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('staff.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@stop
