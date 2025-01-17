@extends('backend.layouts.master')
@section('title', 'Contact Management')
@section('main')

    <link rel="stylesheet" href="css/custom-style-contact.css">

    <div class="container-fluid">
        <div class="product-status mg-b-15">
            <div class="row">
                <div class="col-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Contact List</h4>
                        <div class="asset-inner">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($LienHe as $contact)
                                        <tr>
                                            <td>{{ $contact->MaLH }}</td>
                                            <td>{{ $contact->Ten }}</td>
                                            <td>{{ $contact->Email }}</td>
                                            <td>{{ $contact->SDT }}</td>
                                            <td>{{ Str::limit($contact->TinNhan, 50, '...') }}</td>
                                            <td>
                                                <span style="font-weight: bold;">
                                                    {{ $contact->TrangThai ? '✔' : '✘' }}
                                                </span>
                                            </td>
                                            <td>{{ $contact->created_at->format('d/m/Y') }}</td>
                                            <td>
                                                @if (!$contact->TrangThai)
                                                    <form action="{{ route('Accept_Contact', ['id' => $contact->MaLH]) }}" method="GET" class="d-inline">
                                                        <button class="btn btn-success btn-sm">Accept</button>
                                                    </form>
                                                @endif
                                                <form action="{{ route('Delete_Contact', ['id' => $contact->MaLH]) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this contact?');">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="custom-pagination text-center mt-4">
                            {!! $LienHe->links('pagination::bootstrap-4') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
