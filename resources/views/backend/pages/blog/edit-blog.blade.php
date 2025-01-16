@extends('backend.layouts.master')
@section('title', 'Edit Blog')

@section('main')
    <link rel="stylesheet" href="css/custom-style-addstaff.css">
    
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st" style="background: rgba(255, 255, 255, 0.9);">

                        <h3 class="text-center mb-4">Add Blog</h3>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ Route('Edit_Blog', ['id' => $blog->MaBL]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <img src="{{ asset('Storage/Blog/' . $blog->HinhAnh) }}" alt="{{ $blog->TieuDe }}"
                                style="width: 100px; height: 100px;">
                            <div class="row">
                                <!-- Cột trái -->
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="HinhAnh">Image</label>
                                        <input type="file" class="form-control-file" id="HinhAnh" name="HinhAnh">
                                    </div>
                                </div>

                                <!-- Cột phải -->
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="TieuDe">Title</label>
                                        <input type="text" class="form-control" name="TieuDeBlog" id="TieuDe"value="{{ $blog->TieuDeBlog }}" placeholder="Enter Title Name">
                                    </div>
                                </div>
                            </div>

                            <!-- Phần nội dung -->
                            <div class="form-group mb-4">
                                <label for="NoiDung">Content</label>
                                <textarea class="form-control" id="NoiDung" name="NoiDung" rows="5" placeholder="Enter Content">{{ $blog->NoiDung }}</textarea>
                            </div>

                            <!-- Nút Submit -->
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
