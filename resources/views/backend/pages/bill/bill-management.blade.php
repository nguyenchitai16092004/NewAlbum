@extends('backend.layouts.master')
@section('title', 'Bill Management')
@section('main')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Bills List</h4>
                        <div class="asset-inner">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Customer</th>
                                        <th>Date</th>
                                        <th>Total Price</th>
                                        <th>Payment Method</th>
                                        <th>Payment Status</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($HoaDon->count() > 0)
                                        @foreach ($HoaDon as $item)
                                            <tr>
                                                <td>{{ $item->MaHD }}</td>
                                                <td>{{ $item->TenKH }}</td>
                                                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
                                                <td>{{ number_format($item->TongTien, 0, ',', '.') }} VND</td>
                                                <td>{{ $item->PTTT ? 'Pay Cash' : 'Pay Credit' }}</td>
                                                <td>{{ $item->TrangThaiTT ? 'Paid' : 'Unpaid' }}</td>
                                                <td>
                                                    @if ($item->TrangThai == -1)
                                                        Cancelled
                                                    @elseif ($item->TrangThai == 0)
                                                        Not yet confirmed
                                                    @elseif ($item->TrangThai == 1)
                                                        Confirmed
                                                    @elseif ($item->TrangThai == 2)
                                                        In delivery
                                                    @elseif ($item->TrangThai == 3)
                                                        Delivered
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ Route('Index_Bill_Detail',['id' =>   $item->MaHD]) }}" class="btn btn-primary btn-sm">
                                                        Detail
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="7" class="text-center">No bills found</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="custom-pagination text-center mt-4">
                            {{ $HoaDon->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
