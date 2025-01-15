@extends('backend.layouts.master')
@section('title', 'Singer/Band Management')
@section('main')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            {{-- Tìm kiếm --}}
            <div class="row mb-4">
                <div class="col-lg-12">
                    <form action="{{Route('Search_Band')}}" method="GET" class="mb-3">
                        <div class="input-group" style="width: 250px; display: flex; align-items: center;">
                            <input type="text" name="search" class="form-control" placeholder="Search" value="" style="border-radius: 10px 0 0 10px;">
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
                                        <th>ID</th>
                                        <th>Name Band/Singer</th>
                                        <th>Gender</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($TimKiem as $item)
                                        <tr>
                                            <td>{{ $item->MaNhomNhacCaSi }}</td>
                                            <td>{{ $item->TenNhomNhacCaSi }}</td>
                                            <td>{{ $item->GioiTinh ? 'Male' : 'Female' }}</td>
                                            <td>{{ $item->Loai ? 'Singer' : 'Band' }}</td>
                                            <td>
                                                <a href="{{ route('Index_Edit_Band', ['id' => $item->MaNhomNhacCaSi]) }}" class="btn btn-primary btn-sm" title="Edit">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <form action="{{ route('Delete_Band', ['id' => $item->MaNhomNhacCaSi]) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-trash-o"></i>
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

            {{-- Danh sách nhóm nhạc --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-status-wrap">
                        <h4>Band/Singer List</h4>
                        <div class="add-product mb-3">
                            <a href="{{ route('Index_Add_Band') }}" class="btn btn-dark" style="background-color: black">Add Band/Singer</a>
                        </div>
                        <table class="table table-bordered text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name Band/Singer</th>
                                    <th>Gender</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($bands->count() > 0)
                                    @foreach ($bands as $item)
                                        <tr>
                                            <td>{{ $item->MaNhomNhacCaSi }}</td>
                                            <td>{{ $item->TenNhomNhacCaSi }}</td>
                                            <td>{{ $item->GioiTinh ? 'Male' : 'Female' }}</td>
                                            <td>{{ $item->Loai ? 'Singer' : 'Band' }}</td>
                                            <td>
                                                <a href="{{ route('Index_Edit_Band', ['id' => $item->MaNhomNhacCaSi]) }}" class="btn btn-primary btn-sm" title="Edit">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <form action="{{ route('Delete_Band', ['id' => $item->MaNhomNhacCaSi]) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">No bands or singers found</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <div class="custom-pagination text-center mt-4">
                            {{ $bands->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
