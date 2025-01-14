@extends('backend.layouts.master')
@section('title', 'Detail Bill')
@section('main')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Bill Details List</h4>
                        <div class="asset-inner">
                            <table>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total Price</th>
                                </tr>
                                @foreach ($ChiTietHoaDon as $item)
                                    <tr>
                                        <td>{{ asset('Storage/SanPham/' . $item->HinhAnh) }}</td>
                                        <td>{{$item->TenSP}}</td>
                                        <td>{{$item->SoLuong}}</td>
                                        <td>{{$item->DonGia}}</td>
                                        <td>{{$item->TongTien}}</td>
                                    </tr>
                                @endforeach


                            </table>
                        </div>
                        <div class="custom-pagination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
