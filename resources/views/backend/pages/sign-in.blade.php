@extends('backend.layouts.layout')
@section('title', 'Admin Sign-in')
@section('main')
    <div class="d-flex justify-content-center align-items-center" style="height: 100%; background-color: #f7f7f7;">
        <div class="container p-4 shadow-lg rounded" 
             style="max-width: 400px; background-color: white; margin-top:10%; padding-bottom: 10px;">
            <h2 class="text-center mb-4" style="font-weight: bold; color: #343a40;">Đăng nhập Admin</h2>
            <form action="{{ route('Login_Admin') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="TenDN" class="form-label">User Name</label>
                    <input type="text" name="TenDN" id="TenDN" class="form-control" 
                           value="{{ old('TenDN') }}" required>
                    @error('TenDN')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="MatKhau" class="form-label">Password</label>
                    <input type="password" name="MatKhau" id="MatKhau" class="form-control" required>
                    @error('MatKhau')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-block" 
                            style="font-weight: bold;">Đăng nhập</button>
                </div>
            </form>
        </div>
    </div>
@stop
