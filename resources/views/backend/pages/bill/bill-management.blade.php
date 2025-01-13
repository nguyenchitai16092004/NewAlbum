@extends('backend.layouts.master')
@section('This page is Home Admin', 'Home Admin')
@section('main')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                    <h4>Bills List</h4>
                        <div class="asset-inner">
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer</th>
                                    <th>Date</th>
                                    <th>Total Price</th>
                                    <th>Payment Method</th>
                                    <th>Payment Status</th>
                                    <th>Action</th>
                                    
                                </tr> 
                                @foreach ($HoaDon as $item)
                                <tr>
                                    <td>{{$item->MaHD}}</td>
                                    <td>{{$item->TenKH}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->TongTien}}</td>
                                    <td>{{$item->PTTT ? 'pay cash' : 'pay credit'}}</td>
                                    <td>{{$item->TrangThaiTT ? 'Paid' : 'Unpaid'}}</td>
                                    <td><a href="{{Route('Index_Detail_Bill',$item->MaHD)}}">Detail</a></td>
                                </tr>
                                @endforeach 
                            </table>
                        </div>
                        <div class="custom-pagination text-center mt-4">
                            {!! $HoaDon->links('pagination::bootstrap-4') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
