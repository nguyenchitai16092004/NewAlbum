@extends('backend.layouts.master')
@section('title', 'Comments Management')
@section('main')

    <link rel="stylesheet" href="css/custom-style-pagination.css">
    <script src="/js/onclick.js"></script>

    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Comments List</h4>
                        <!-- Dropdown filters -->
                        <div class="d-flex justify-content-start align-items-center mb-3">
                            <!-- Filter by Stars -->
                            <form action="{{ route('comments.index') }}" method="GET" class="d-flex align-items-center">
                                <select name="stars" class="form-select me-4"
                                    style="width: 150px; height: 38px; font-size: 16px; border-radius: 8px; margin: 8px;">
                                    <option selected disabled>Filter by Stars</option>
                                    <option value="5">5 Stars</option>
                                    <option value="4">4 Stars</option>
                                    <option value="3">3 Stars</option>
                                    <option value="2">2 Stars</option>
                                    <option value="1">1 Star</option>
                                </select>

                                <!-- Sort by Date -->
                                <select name="date_sort" class="form-select me-4"
                                    style="width: 150px; height: 38px; font-size: 16px; border-radius: 8px; margin: 8px;">
                                    <option selected disabled>Sort by</option>
                                    <option class = "op" value="date_asc">Date (Oldest)</option>
                                    <option class = "op" value="date_desc">Date (Newest)</option>
                                </select>

                                <!-- Apply Filter Button -->
                                <button type="submit" class="btn"
                                    style="width: 100px; height: 42px; font-size: 16px; border-radius: 8px; margin: 8px; background-color: black; color: white;">Sort</button>
                            </form>
                        </div>

                        {{-- Table content --}}
                        <div class="asset-inner">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Comment</th>
                                        <th>ID Product</th>
                                        <th>ID Customer</th>
                                        <th>Number of Stars</th>
                                        <th>Content</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comments as $comment)
                                        <tr>
                                            <td>{{ $comment->MaBL }}</td>
                                            <td>{{ $comment->MaSP }}</td>
                                            <td>{{ $comment->MaKH }}</td>
                                            <td>{{ $comment->SoSao }}</td>
                                            <td>{{ $comment->NoiDung }}</td>
                                            <td>
                                                <form action="{{ route('comments.destroy', $comment->MaBL) }}" method="POST"
                                                    onsubmit="return confirmDelete()">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        style=" padding: 8px 17px;">Delete</button>
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
                                    {{ $comments->links() }} <!-- Hiển thị phân trang dạng số -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
