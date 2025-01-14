@extends('frontend.layouts.master')
@section('title', 'Order History')
@section('main')
    <link rel="stylesheet" href="css/oder-history.css">
    <div class="container-hoa-don-history">
        <h1>Order History</h1>

        <!-- Flash messages -->
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <!-- Orders Table -->
        <table class="order-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Total Amount</th>
                    <th>Payment Method</th>
                    <th>Payment Status</th>
                    <th>Order Status</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($hoaDons) && count($hoaDons) > 0)
                @foreach ($hoaDons as $hoaDon)
                    <tr>
                        <td>{{ $hoaDon->MaHD }}</td>
                        <td>{{ number_format($hoaDon->TongTien, 2) }} VND</td>
                        <td>{{ $hoaDon->PTTT ? 'Online' : 'Cash' }}</td>
                        <td>{{ $hoaDon->TrangThaiTT ? 'Paid' : 'Unpaid' }}</td>
                        <td>
                            @if ($hoaDon->TrangThai == -1)
                                                        Cancelled
                                                    @elseif ($hoaDon->TrangThai == 0)
                                                        Not yet confirmed
                                                    @elseif ($hoaDon->TrangThai == 1)
                                                        Confirmed
                                                    @elseif ($hoaDon->TrangThai == 2)
                                                        In delivery
                                                    @elseif ($hoaDon->TrangThai == 3)
                                                        Delivered
                                                    @endif
                        </td>
                        <td>{{ $hoaDon->DiaChi }}</td>
                        <td>
                            @if ($hoaDon->TrangThai == 0)
                                <form action="{{ route('hoa-don.cancel', $hoaDon->MaHD) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-times"></i> Cancel
                                    </button>
                                </form>
                            @else
                                <button class="btn btn-secondary" disabled>Not Available</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7">No orders found.</td>
                </tr>
            @endif            
            </tbody>
        </table>
    </div>
@stop
