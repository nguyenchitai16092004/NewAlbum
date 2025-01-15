@extends('backend.layouts.master')
@section('This page is Home Admin', 'Home Admin')
@section('main')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Discount List</h4>
                        <div class="add-product">

                            <a href="{{ Route('Index_Add_Discount') }}" style="background-color: black">Add Discount</a>

                        </div>
                        <div class="asset-inner">
                            <table>
                                <tr>

                                    <th>ID</th>
                                    <th>Percentage discount</th>
                                    <th>Create At</th>
                                    <th>Update At</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($discounted as $item)
                                    <tr>
                                        <td>{{ $item->MaSPGG }}</td>
                                        <td>{{ $item->PhanTramGG }}</td>
                                        <td>{{ $item->created_at }}</td>a
                                        <td>{{ $item->updated_at }}</td>
                                        <td>
                                            <form
                                                action="{{ route('Index_Edit_Discount', ['id' => $item->MaSPGG]) }}"method="GET">
                                                <button data-toggle="tooltip" title="Sửa" class="pd-setting-ed">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                            <form
                                                action="{{ route('Delete_Discount', ['id' => $item->MaSPGG]) }}"method="POST">
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

@stop
