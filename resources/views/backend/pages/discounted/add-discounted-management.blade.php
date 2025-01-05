@extends('backend.layouts.master')
@section('This page is Add Library', 'Add Library')
@section('main')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Discount List</h4>
                        <div class="product-status-wrap drp-lst">
                            <div class="search-container mb-3">
                                <div class="input-group"
                                    style="width: 250px; display: flex; align-items: center;padding-bottom:10px ">
                                    <input type="text" class="form-control" placeholder="Search Product"
                                        style="border-radius: 10px 0 0 10px;">

                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" style="height: 40px;" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="asset-inner">
                                    <table>
                                        <tr>

                                            <th>ID</th>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>Quantity</th>
                                            <th>Selling price</th>
                                            <th>Acction</th>
                                        </tr>
                                        {{-- @foreach ($Products as $item)
                                            <tr>
                                                <td>{{ $item->MaSP }}</td>
                                                <td>{{ $item->TenSP }}</td>
                                                <td>{{ $item->TenLoaiSP }}</td>
                                                <td>{{ $item->SoLuong }}</td>
                                                <td>{{ $item->GiaBan }}</td>
                                                <td>{{ $item->MoTa }}</td>
                                                <td>
                                                    <form
                                                        action="{{ route('Delete_Category', ['id' => $item->MaSP]) }}"method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button data-toggle="tooltip" title="Xóa" class="pd-setting-ed">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach --}}
                                    </table>
                                </div>
                            </div>
                        </div>
                        <form action="{{ Route('Index_Discount') }}"
                            style=" display: flex ; justify-content: flex-end; align-items: flex-end;">
                            <div class="mb-3">
                                <label for="discount" class="form-label">Percentage Discount</label>
                                <input type="number" id="discount" name="discount" class="form-control"
                                    placeholder="Enter discount percentage" pattern="" required>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn-bottom-right"
                                    style="background-color: black; color: white; position: static; bottom: 10px; right: 10px; padding: 10px 20px; border-radius: 5px; margin-left: 10px;">
                                    Apply Discount
                                </button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
