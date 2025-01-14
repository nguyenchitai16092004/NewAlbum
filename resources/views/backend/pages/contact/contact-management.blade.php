@extends('backend.layouts.master')
@section('title', 'Contact Management')
@section('main')
    <style>
        .table {
            border-collapse: collapse;
            width: 100%;
            background-color: #f8f9fa;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .table th {
            background-color: #343a40;
            color: white;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }

        .table td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #dee2e6;
        }

        .table tbody tr:hover {
            background-color: #f1f3f5;
            cursor: pointer;
        }

        thead.thead-dark th {
            background-color: #212529;
            color: white;
        }

        .custom-pagination a {
            display: inline-block;
            padding: 10px 15px;
            margin: 0 5px;
            color: #007bff;
            text-decoration: none;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            background-color: #ffffff;
        }

        .custom-pagination a:hover {
            background-color: #007bff;
            color: white;
            text-decoration: none;
        }

        .btn {
            padding: 10px 20px; 
            font-size: 14px;
            border-radius: 8px;
            text-transform: uppercase;
            font-weight: bold; 
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
            border: none;
            margin-bottom: 10px;
        }

        .btn-sm {
            padding: 8px 15px;
            font-size: 12px;
            border-radius: 6px;
        }

        .btn-success {
            background-color: #000000;
            color: white;
        }

        .btn-success:hover {
            background-color: #000000;
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }

        .btn-danger {
            background-color: #000000;
            color: white;
        }

        .btn-danger:hover {
            background-color: #000000;
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }

        .btn:focus {
            outline: none;
            box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.25);
        }

        h4 {
            font-weight: bold;
            margin-bottom: 20px;
            color: #495057;
            text-align: center;
        }

        .product-status-wrap {
            padding: 20px;
            border-radius: 8px;
            background: #ffffff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        }
    </style>
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
                                        <th>Status</th>
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
                                            <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                            @if ($item->TrangThai)
                                                <td style="color: rgb(0, 0, 0); font-weight: bold;">
                                                    ✔
                                                </td>
                                            @else
                                                <td style="color: rgb(0, 0, 0); font-weight: bold;">
                                                    ✘
                                                </td>
                                            @endif
                                            <td>
                                                @if ($item->TrangThai == 0)
                                                <form action="{{ route('Accept_Contact', ['id' => $item->MaLH]) }}"
                                                    method="GET" class="d-inline">
                                                    <button class="btn btn-success btn-sm" data-toggle="tooltip"
                                                        title="Accept">Accept</button>
                                                </form>
                                                @endif
                                                <form action="{{ route('Delete_Contact', ['id' => $item->MaLH]) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" data-toggle="tooltip"
                                                    title="Delete"onclick="return confirm('Are you sure you want to delete this \contact?');">Delete</button>
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
