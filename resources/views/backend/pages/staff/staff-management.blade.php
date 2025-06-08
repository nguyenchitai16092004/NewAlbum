@extends('backend.layouts.master')

@section('title', 'Home Admin')

@section('main')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-status-wrap drp-lst">
                    <h4>Staffs List</h4>

                    <div class="add-product mb-3">
                        <a href="{{ route('staff.create') }}" style="background-color: black; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Add Staff</a>
                    </div>

                    <div class="search-container mb-3">
                        <div class="input-group" style="width: 250px;">
                            <input type="text" class="form-control" placeholder="Search Staffs">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="asset-inner">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Birthday</th>
                                    <th>Phone</th>
                                    <th>Position</th>
                                    <th>Account</th>
                                    <th>Password</th>
                                    <th>Status</th>
                                    <th>Gender</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($staffs as $staff)
                                    <tr>
                                        <td>{{ $staff->MaQL }}</td>
                                        <td>{{ $staff->TenQL }}</td>
                                        <td>{{ $staff->Email }}</td>
                                        <td>{{ $staff->NgaySinh }}</td>
                                        <td>{{ $staff->SDT }}</td>
                                        <td>{{ $staff->ChucVu }}</td>
                                        <td>{{ $staff->TenDN }}</td>
                                        <td>••••••</td>
                                        <td>{{ $staff->TrangThai ? 'Active' : 'Inactive' }}</td>
                                        <td>{{ $staff->GioiTinh ? 'Male' : 'Female' }}</td>
                                        <td>
                                            @if ($staff->HinhAnh)
                                                <img src="{{ asset('uploads/staff/' . $staff->HinhAnh) }}" width="50" height="50" style="object-fit: cover;">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('staff.edit', $staff->MaQL) }}" class="btn btn-warning btn-sm">Edit</a>

                                            <form action="{{ route('staff.destroy', $staff->MaQL) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure to delete this staff?');">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="custom-pagination mt-3">
                        {{ $staffs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
