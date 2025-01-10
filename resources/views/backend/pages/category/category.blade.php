@extends('backend.layouts.master')
@section('title', 'Category Management')
@section('main')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            {{-- Tìm kiếm --}}
            <div class="row mb-5">
                <form action="{{ Route('Search_Category') }}" method="GET" class="mb-3">
                    <div class="input-group" style="width: 250px; display: flex; align-items: center;">
                        <input type="text" name="search" class="form-control" placeholder="Search Blogs"
                            value="{{ request('search') }}" style="border-radius: 10px 0 0 10px;">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" style="height: 40px;" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                {{-- Hiển thị kết quả tìm kiếm nếu có --}}
                @if (isset($TimKiem) && $TimKiem->isNotEmpty())

                    <div class="col-12">
                        <div class="product-status-wrap">
                            <h4 class="mb-3">Search Results</h4>
                            <table class="table table-bordered text-center">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($TimKiem as $item)
                                        <tr>
                                            <td>{{ $item->MaLoaiSP }}</td>
                                            <td>{{ $item->TenLoaiSP }}</td>
                                            <td>
                                                <form
                                                    action="{{ route('Index_Edit_Category', ['id' => $item->MaLoaiSP]) }}"method="GET">
                                                    <button data-toggle="tooltip" title="Sửa" class="pd-setting-ed">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                                <form
                                                    action="{{ route('Delete_Category', ['id' => $item->MaLoaiSP]) }}"method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button data-toggle="tooltip" title q="Xóa" class="pd-setting-ed">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
            {{-- Trang danh sách sản phẩm --}}
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Category List</h4>
                        <div class="add-product"><a href="{{ Route('Index_Add_Category') }}"
                                style="background-color: black">Add Category</a></div>
                        <div class="asset-inner">
                            <table>
                                <tr>

                                    <th>ID</th>
                                    <th>Name Category</th>
                                    <th>Acction</th>
                                </tr>
                                @foreach ($categories as $item)
                                    @if ($item->TrangThai == 1)
                                        <tr>
                                            <td>{{ $item->MaLoaiSP }}</td>
                                            <td>{{ $item->TenLoaiSP }}</td>
                                            <td>
                                                <form
                                                    action="{{ route('Index_Edit_Category', ['id' => $item->MaLoaiSP]) }}"method="GET">
                                                    <button data-toggle="tooltip" title="Sửa" class="pd-setting-ed">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                                <form
                                                    action="{{ route('Delete_Category', ['id' => $item->MaLoaiSP]) }}"method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button data-toggle="tooltip" title q="Xóa" class="pd-setting-ed" onclick="return confirm('Are you sure you want to delete this category ?');">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="custom-pagination text-center mt-4">
                        {!! $categories->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
