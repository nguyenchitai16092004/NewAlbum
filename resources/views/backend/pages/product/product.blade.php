@extends('backend.layouts.master')
@section('title', 'Product Management')
@section('main')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('success_delete'))
        <div class="alert alert-danger">
            {{ session('success_delete') }}
        </div>
    @endif
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Product List</h4>
                        <div class="add-product">
                            <a href="{{ route('Add_Index_Product') }}" style="background-color: black">Add Product</a>
                        </div>
                        <div class="asset-inner">
                            <table>
                                <tr>
                                    <th>Image</th>
                                    <th>ID</th>
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
                                @foreach ($products as $item)
                                        <tr>
                                            <td><img src="{{ asset('Storage/SanPham/' . $item->HinhAnh) }}"alt="{{ $item->TenSP }}" style="width: 100px; height:100px"></td>
                                            <td>{{ $item->MaSP }}</td>
                                            <td>{{ $item->TenSP }}</td>
                                            <td>{{ $item->TenLoaiSP }}</td>
                                            <td>{{ $item->TenNhomNhacCaSi }}</td>
                                            <td>{{ $item->SoLuong }}</td>
                                            <td>{{ number_format($item->GiaNhap, 0) }}VND</td>
                                            <td>{{ number_format($item->GiaBan, 0) }}VND</td>
                                            <td>{{ $item->LoaiHang ? 'Available' : 'Pre-Order' }}</td>
                                            <td>{{ $item->MoTa }}</td>
                                            <td>
                                                <form action="{{ route('Edit_Index_Product', ['id' => $item->MaSP]) }}"
                                                    method="GET" style="display:inline-block;">
                                                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                                <form action="{{ route('Delete_Product', ['id' => $item->MaSP]) }}"
                                                    method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button data-toggle="tooltip" title="Delete" class="pd-setting-ed"
                                                        onclick="return confirm('Are you sure you want to delete this product?');">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                @endforeach
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="custom-pagination text-center mt-4">
                            {!! $products->links('pagination::bootstrap-4') !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
