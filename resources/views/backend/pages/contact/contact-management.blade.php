@extends('backend.layouts.master')
@section('title', 'Contact Management')
@section('main')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Contacts List</h4>
                        <div class="asset-inner">
                            <table class="table table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID Contact</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($LienHe as $item)
                                        <tr>
                                            <td>{{ $item->MaLH }}</td>
                                            <td>{{ $item->Ten }}</td>
                                            <td>{{ $item->SDT }}</td>
                                            <td>{{ $item->Email }}</td>
                                            <td>{{ Str::limit($item->TinNhan, 50, '...') }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>{{ $item->TrangThai ? 'Đã xác nhận' : 'Chưa xác nhận' }}</td>
                                            <td>
                                                <form action="{{ route('Accept_Contact', ['id' => $item->MaLH]) }}"
                                                    method="GET" class="d-inline">
                                                    <button class="btn btn-success btn-sm" data-toggle="tooltip"
                                                        title="Xác nhận">Xác Nhận</button>
                                                </form>
                                                <form action="{{ route('Delete_Contact', ['id' => $item->MaLH]) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" data-toggle="tooltip"
                                                        title="Xóa liên hệ">Xóa</button>
                                                </form> 
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Pagination -->
                        <div class="custom-pagination text-center mt-4">
                            {!! $LienHe->links('pagination::bootstrap-4') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
