@extends('backend.layouts.master')
@section('title', 'Singer/Band Management')
@section('main')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Departments List</h4>
                        <div class="add-product">
                            <a href="{{ Route('Index_Add_Band') }}">Add Band/Singer</a>
                        </div>
                        <div class="asset-inner">
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Name Band/Singer</th>
                                    <th>Gener</th>
                                    <th>Type</th>
                                    <th>Acction</th>
                                </tr>
                                @foreach ($bands as $item)
                                    <tr>
                                        <td>{{ $item->MaNhomNhacCaSi }}</td>
                                        <td>{{ $item->TenNhomNhacCaSi }}</td>
                                        <td>{{ $item->GioiTinh ? 'Male' : 'Female' }}</td>
                                        <td>{{ $item->Loai ? 'Singer' : 'Band' }}</td>
                                        <td>
                                            <form action="{{ route('Index_Edit_Band', ['id' => $item->MaNhomNhacCaSi]) }}"method="GET">
                                                <button data-toggle="tooltip" title="Sửa" class="pd-setting-ed">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                            <form action="{{ route('Delete_Band', ['id' => $item->MaNhomNhacCaSi]) }}"method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button data-toggle="tooltip" title="Xóa" class="pd-setting-ed">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </td>
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
