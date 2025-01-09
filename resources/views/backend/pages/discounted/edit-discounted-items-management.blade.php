@extends('backend.layouts.master')
@section('title', 'Quản lý phiếu nhập')
@section('main')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap drp-lst">
                    <h4>Goods-Receipt-List</h4>
                    <div class="add-product">
                        {{-- <a href="{{ route('') }}">Thêm phiếu nhập</a> --}}
                    </div>
                    <div class="asset-inner">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Import ID</th>
                                    <th>Import Name</th>
                                    <th>Total Amount</th>
                                    <th>Import Date</th>
                                    <th>Update Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($goods as $item)
                                <tr>
                                    <td>{{ $item->MaPN }}</td>
                                    <td>{{ number_format($item->TongTien, 2) }} đ</td>
                                    <td>{{ $item->NgayNhap }}</td>
                                    <td>{{ $item->NgayCapNhat }}</td>
                                    <td>
                                        <button class="btn {{ $item->TrangThai ? 'btn-success' : 'btn-danger' }}">
                                            {{ $item->TrangThai ? 'Hoạt động' : 'Không hoạt động' }}
                                        </button>
                                    </td>
                                    <td>{{ $item->MaQL }}</td>
                                    <td>
                                        <a href="{{ route('phieu-nhap.edit', $item->MaPN) }}" class="btn btn-primary" data-toggle="tooltip" title="Chỉnh sửa">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        <form action="{{ route('phieu-nhap.destroy', $item->MaPN) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" data-toggle="tooltip" title="Xóa" onclick="return confirm('Bạn có chắc chắn muốn xóa phiếu nhập này?');">
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
            </div>
        </div>
    </div>
</div>
@stop
