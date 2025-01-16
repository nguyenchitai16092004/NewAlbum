@extends('backend.layouts.master')
@section('title', 'Customer Management')
@section('main')

    <link rel="stylesheet" href="css/custom-style-pagination.css">
    <link rel="stylesheet" href="css/custom-style-statusiconcustomer.css">

    
    <script src="/js/onclick.js"></script>

    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Customers List</h4>
                        <div class="asset-inner">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID </th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Birthday</th>
                                        <th>Number</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Status</th>
                                        <th>Gender</th>
                                        <th>Image</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customer as $customers)
                                        <tr>
                                            <td>{{ $customers->MaKH }}</td>
                                            <td>{{ $customers->TenKH }}</td>
                                            <td>{{ $customers->Email }}</td>
                                            <td>{{ $customers->NgaySinh }}</td>
                                            <td>{{ $customers->SDT }}</td>
                                            <td>{{ $customers->TenDN }}</td>
                                            <td>{{ $customers->MatKhau }}</td>
                                            <td>
                                                <form action="{{ route('customer.updateStatus', $customers->MaKH) }}"
                                                    method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('PATCH')
                                                    <select name="TrangThai" onchange="this.form.submit()"
                                                        class="form-control">
                                                        <option value="1"
                                                            {{ $customers->TrangThai == 1 ? 'selected' : '' }}>Active
                                                        </option>
                                                        <option value="0"
                                                            {{ $customers->TrangThai == 0 ? 'selected' : '' }}>Inactive
                                                        </option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>{{ $customers->GioiTinh ? 'Male' : 'Female' }}</td>
                                            <td>{{ $customers->HinhAnh }}</td>
                                            <td>{{ $customers->DiaChiKH }}</td>
                                            <td>
                                                <!-- Nút Delete -->
                                                <form action="{{ route('customer.destroy', $customers->MaKH) }}"
                                                    method="POST" style="display: inline-block;"
                                                    onsubmit="return confirmDelete()">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        style="padding: 8px 17px;">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Phân trang -->
                        <div class="custom-pagination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    {{ $customer->links() }} <!-- Hiển thị phân trang dạng số -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
