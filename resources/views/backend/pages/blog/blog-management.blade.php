@extends('backend.layouts.master')
@section('title', 'Blog Management')
@section('main')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Blogs List</h4>
                        <div class="add-product">
                            <a href="{{ route('Index_Add_Blog') }}" 
                               style="background-color: black; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Add Blogs</a>
                        </div>
                        
                        <!-- Search Form -->
                        <form action="" method="GET" class="mb-3">
                            <div class="input-group" style="width: 250px; display: flex; align-items: center;">
                                <input type="text" name="search" class="form-control" placeholder="Search Blogs" 
                                       value="{{ request('search') }}" style="border-radius: 10px 0 0 10px;">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" style="height: 40px;" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        
                        <!-- Table -->
                        <div class="asset-inner">
                            <table>
                                <tr>
                                    <th>Image</th>
                                    <th>ID Blog</th>
                                    <th>Author Name</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($blogs as $item)
                                @if ($item->TrangThai == 1)
                                <tr>
                                    <td><img src="{{ asset('Storage/Blog/' . $item->HinhAnh) }}" alt="{{ $item->TieuDe }}" style="width: 100px; height: 100px;"></td>
                                    <td>{{ $item->MaBL }}</td>
                                    <td>{{ $item->TenQL }}</td>
                                    <td>{{ $item->TieuDeBlog     }}</td>
                                    <td>{{ Str::limit($item->NoiDung, 20, '...') }}</td>
                                    <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                    <td>
                                        <form action="{{ route('Index_Edit_Blog', ['id' => $item->MaBL]) }}"method="GET" style="display:inline-block;">
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                        <form action="{{ route('Delete_Blog', ['id' => $item->MaBL]) }}"
                                            method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button data-toggle="tooltip" title="Delete" class="pd-setting-ed"
                                                onclick="return confirm('Are you sure you want to delete this product?');">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endif
                                
                                @endforeach
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="custom-pagination text-center mt-4">
                            {{ $blogs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
