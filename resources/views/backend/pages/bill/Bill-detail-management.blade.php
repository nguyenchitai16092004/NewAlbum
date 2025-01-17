@extends('backend.layouts.master')
@section('title', 'Detail Bill')
@section('main')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4 class="mb-4">Bill Details List</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Total Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($ChiTietHoaDon as $item)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('Storage/SanPham/' . $item->HinhAnh) }}"
                                                    alt="{{ $item->TenSP }}" class="img-thumbnail"
                                                    style="width: 80px; height: 80px;">
                                            </td>
                                            <td>{{ $item->TenSP }}</td>
                                            <td>{{ $item->SoLuong }}</td>
                                            <td>{{ number_format($item->DonGia) }} VNĐ</td>
                                            <td>{{ number_format($item->TongTien) }} VNĐ</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">No data available</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        @if ($ChiTietHoaDon->isNotEmpty())
                            <div class="custom-pagination text-center mt-4">
                                @if ($ChiTietHoaDon->first()->TrangThai == 0)
                                    <form action="{{ route('Update_Bill', ['id' => $ChiTietHoaDon->first()->MaHD]) }}"
                                        method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success">Accept</button>
                                    </form>
                                @elseif($ChiTietHoaDon->first()->TrangThai == -1)
                                    <form action="{{ route('Canncel_Bill', ['id' => $ChiTietHoaDon->first()->MaHD]) }}"
                                        method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-err"
                                            style="background-color: red ; color:white ; margin-left: 10px">Delete</button>
                                    </form>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
