@extends('backend.layouts.master')
@section('title', 'Product Management')
@section('main')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Product List</h4>
                        <div class="add-product">
                            <a href="{{ route('Add_Index_Product') }}">Add Product</a>
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
                                    <th>Status</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($products as $item)
                                    <tr>
                                        <td><img src="data:image/jpg;base64,{{ $item->HinhAnh }}">                                        </td>
                                        <td>{{ $item->MaSP }}</td>
                                        <td>{{ $item->TenSP }}</td>
                                        <td>{{ $item->TenLoaiSP }}</td>
                                        <td>{{ $item->TenNhomNhacCaSi }}</td>
                                        <td>{{ $item->SoLuong }}</td>
                                        <td>{{ number_format($item->GiaNhap, 0) }}$</td>
                                        <td>{{ number_format($item->GiaBan, 0) }}$</td>
                                        <td>{{ $item->LoaiHang ? 'Available' : 'Pre-Order'}}</td>
                                        <td>{{ $item->TrangThai ? 'In Stock' : 'Out of Stock' }}</td>
                                        <td>{{ $item->MoTa }}</td>
                                        <td>
                                            <form action="{{ route('Index_Edit_Category', ['id' => $item->MaSP]) }}" method="GET" style="display:inline-block;">
                                                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                            <form action="{{ route('Delete_Category', ['id' => $item->MaSP]) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button data-toggle="tooltip" title="Delete" class="pd-setting-ed">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        
                        <!-- Pagination -->
                        <div class="custom-pagination">
                            {{ $products->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
