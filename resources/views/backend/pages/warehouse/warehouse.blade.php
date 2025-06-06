@extends('backend.layouts.master')

@section('title', 'Warehouse Management')

@section('main')

<div class="product-status mg-b-15">
    <div class="container-fluid">
        {{-- Display Search Results if Available --}}
        @if (isset($TimKiem) && $TimKiem->isNotEmpty())
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-status-wrap">
                        <h4 class="mb-3">Search Results</h4>
                        <table class="table table-bordered text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Warehouse ID</th>
                                    <th>Manager ID</th>
                                    <th>Import Date</th>
                                    <th>Export Date</th>
                                    <th>Address</th>
                                    <th>Warehouse Name</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($TimKiem as $item)
                                    <tr>
                                        <td>{{ $item->MaKho }}</td>
                                        <td>{{ $item->MaQL }}</td>
                                        <td>{{ $item->NgayNhap }}</td>
                                        <td>{{ $item->NgayXuat }}</td>
                                        <td>{{ Str::limit($item->DiaChi, 20, '...') }}</td>
                                        <td>{{ Str::limit($item->TenKho, 20, '...') }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        <td>
                                            <form action="{{ route('Edit_Index_Warehouse', ['id' => $item->MaKho]) }}"
                                                method="GET" style="display:inline-block;">
                                                <button data-toggle="tooltip" title="Edit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                </button>
                                            </form>
                                            <form action="{{ route('Delete_Warehouse', ['id' => $item->MaKho]) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button data-toggle="tooltip" title="Delete" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this warehouse entry?');">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
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
        @endif

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap drp-lst">
                    <h4 class="mb-4">Warehouse List</h4>
                    <div class="add-product mb-3">
                        <a href="{{ route('Index_Add_Warehouse') }}" class="btn btn-dark"
                            style="background-color: black">Add Warehouse</a>
                    </div>
                    <div class="asset-inner">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Warehouse ID</th>
                                    <th>Manager ID</th>
                                    <th>Import Date</th>
                                    <th>Export Date</th>
                                    <th>Address</th>
                                    <th>Warehouse Name</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($warehouses as $item)
                                    <tr>
                                        <td>{{ $item->MaKho }}</td>
                                        <td>{{ $item->MaQL }}</td>
                                        <td>{{ $item->NgayNhap }}</td>
                                        <td>{{ $item->NgayXuat }}</td>
                                        <td>{{ Str::limit($item->DiaChi, 20, '...') }}</td>
                                        <td>{{ Str::limit($item->TenKho, 20, '...') }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        <td>
                                            @if($item->TrangThai == 1)
                                                <span class="badge badge-success">Enable</span>
                                            @else
                                                <span class="badge badge-secondary">Disable</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ Route('Index_Warehouse_Detail', ['id' => $item->MaKho]) }}"
                                                class="btn btn-primary btn-sm">Detail</a>
                                            <form action="{{ route('Toggle_Warehouse_Status', ['id' => $item->MaKho]) }}"
                                                method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('PUT')
                                                <button data-toggle="tooltip"
                                                    title="{{ $item->TrangThai == 1 ? 'Disable' : 'Enable' }}"
                                                    class="btn btn-{{ $item->TrangThai == 1 ? 'warning' : 'success' }} btn-sm"
                                                    onclick="return confirm('Are you sure you want to {{ $item->TrangThai == 1 ? 'disable' : 'enable' }} this warehouse?');">
                                                    <i class="fa fa-{{ $item->TrangThai == 1 ? 'ban' : 'check' }}"></i>
                                                    {{ $item->TrangThai == 1 ? 'Disable' : 'Enable' }}
                                                </button>
                                            </form>

                                        </td>

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                </div>
            </div>
        </div>
    </div>
</div>

@stop