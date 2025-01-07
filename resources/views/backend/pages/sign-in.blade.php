@extends('backend.layouts.master')
@section('This page is Add Library', 'Add Library')
@section('main')
    <div class="container mt-5">
        <h2 class="text-center">Đăng nhập</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" name="password" id="password" class="form-control" required>
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
        </form>
    </div>
@stop
