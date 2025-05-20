@extends('backend.layouts.master')

@section('title', 'Product Management')

@section('main')

    <div class="product-status mg-b-15">
        <div class="container-fluid">
            {{-- Tìm kiếm --}}
            <div class="row mb-4">
                <div class="col-lg-12">
                    <form action="{{ Route('Search_Product') }}" method="GET" class="mb-3">
                        <select name="filter" class="form-select" style="height: 20px; width: 150px;">
                            <option value="TenSP" selected>Tên sản phẩm</option>
                            <option value="TenLoaiSP">Loại sản phẩm</option>
                            <option value="TenNhomNhacCaSi">Nhóm nhạc/Ca sĩ</option>
                        </select>
                        <div class="input-group mb-2" style="width: 350px; display: flex; align-items: center;">
                            <input type="text" name="search" class="form-control" placeholder="Tìm kiếm..."
                                value="{{ request('search') }}" style="border-radius: 0;">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" style="height: 40px;" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>

            {{-- Hiển thị kết quả tìm kiếm nếu có --}}
            @if (isset($TimKiem) && $TimKiem->isNotEmpty())
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-status-wrap">
                            <h4 class="mb-3">Search Results</h4>
                            <table class="table table-bordered text-center">
                                <thead class="thead-dark">
                                    <tr>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Band/Singer</th>
                                        <th>Quantity</th>
                                        <th>Import Price</th>
                                        <th>Selling Price</th>
                                        <th>Product Type</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($TimKiem as $item)
                                        <tr>
                                            <td>{{ $item->MaSP }}</td>
                                            <td>
                                                <img src="{{ asset('Storage/SanPham/' . $item->HinhAnh) }}"
                                                    alt="{{ $item->TenSP }}" style="width: 100px; height:100px">
                                            </td>
                                            <td>{{ Str::limit($item->TenSP,20,'...') }}</td>
                                            <td>{{ $item->TenLoaiSP }}</td>
                                            <td>{{ $item->TenNhomNhacCaSi }}</td>
                                            <td>{{ $item->SoLuong }}</td>
                                            <td>{{ number_format($item->GiaNhap, 0) }} VND</td>
                                            <td>{{ number_format($item->GiaBan, 0) }} VND</td>
                                            <td>{{ $item->LoaiHang ? 'Available' : 'Pre-Order' }}</td>
                                            <td>{{ Str::limit($item->MoTa, 20, '...') }}</td>
                                            <td>
                                                <form action="{{ route('Edit_Index_Product', ['id' => $item->MaSP]) }}"
                                                    method="GET" style="display:inline-block;">
                                                    <button data-toggle="tooltip" title="Edit"
                                                        class="btn btn-primary btn-sm">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                    </button>
                                                </form>
                                                <form action="{{ route('Delete_Product', ['id' => $item->MaSP]) }}"
                                                    method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button data-toggle="tooltip" title="Delete"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure you want to delete this product?');">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4 class="mb-4">Product List</h4>
                        <div class="add-product mb-4">
                            <a href="{{ route('Add_Index_Product') }}" class="btn btn-dark"
                                style="background-color: black">Add Product</a>
                        </div>
                        <div class="asset-inner">
                            <table class="table table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Band/Singer</th>
                                        <th>Quantity</th>
                                        <th>Import Price</th>
                                        <th>Selling Price</th>
                                        <th>Product Type</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $item)
                                        <tr>
                                            <td>{{ $item->MaSP }}</td>
                                            <td>
                                                <img src="{{ asset('Storage/SanPham/' . $item->HinhAnh) }}"
                                                    alt="{{ $item->TenSP }}" style="width: 100px; height:100px">
                                            </td>
                                            <td>{{ Str::limit($item->TenSP,20,'...') }}</td>
                                            <td>{{ $item->TenLoaiSP }}</td>
                                            <td>{{ $item->TenNhomNhacCaSi }}</td>
                                            <td>{{ $item->SoLuong }}</td>
                                            <td>{{ number_format($item->GiaNhap, 0) }} VND</td>
                                            <td>{{ number_format($item->GiaBan, 0) }} VND</td>
                                            <td>{{ $item->LoaiHang ? 'Pre-Order' : 'Available' }}</td>
                                            <td>{{ Str::limit($item->MoTa, 20, '...') }}</td>
                                            <td>
                                                <form action="{{ route('Edit_Index_Product', ['id' => $item->MaSP]) }}"
                                                    method="GET" style="display:inline-block;">
                                                    <button data-toggle="tooltip" title="Edit"
                                                        class="btn btn-primary btn-sm">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                    </button>
                                                </form>
                                                <form action="{{ route('Delete_Product', ['id' => $item->MaSP]) }}"
                                                    method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button data-toggle="tooltip" title="Delete"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure you want to delete this product?');">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="custom-pagination text-center mt-4">
                            {{ $products->links('pagination::bootstrap-4')}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
