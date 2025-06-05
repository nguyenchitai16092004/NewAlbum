@extends('backend.layouts.master')
@section('title', 'Warehouse Detail')
@section('main')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap drp-lst">
                    <h4 class="mb-4">Warehouse Details List</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Warehouse Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Stock Quantity</th>
                                    <th scope="col">Import Price</th>
                                    <th scope="col">Selling Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($chiTietKho as $item)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('Storage/SanPham/' . $item->HinhAnh) }}"
                                                alt="{{ $item->TenSP }}" class="img-thumbnail"
                                                style="width: 80px; height: 80px;">
                                        </td>
                                        <td>{{ $item->TenSP }}</td>
                                        <td>{{ $item->TenKho }}</td>
                                        <td>{{ $item->DiaChi }}</td>
                                        <td>{{ $item->SoLuongTon }}</td>
                                        <td>{{ number_format($item->GiaNhap, 2) }} VND</td>
                                        <td>{{ number_format($item->GiaBan, 2) }} VND</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No data available</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@stop