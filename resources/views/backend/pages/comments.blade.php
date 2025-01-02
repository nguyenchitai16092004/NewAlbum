@extends('backend.layouts.master')
@section('This page is Home Admin', 'Home Admin')
@section('main')
    <div class="product-status-wrap drp-lst">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>Comments List</h4>
            <div class="d-flex " style="gap: 10px;">
                <!-- Dropdown 1 -->
                <select class="form-select" style="width: 150px; font-size: 14px; padding: 5px;">
                    <option selected>Filter by Stars</option>
                    <option value="5">5 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="2">2 Stars</option>
                    <option value="1">1 Star</option>
                </select>

                <!-- Dropdown 2 -->
                <select class="form-select" style="width: 150px; font-size: 14px; padding: 5px;">
                    <option selected>Sort by</option>
                    <option value="date_asc">Date (Oldest)</option>
                    <option value="date_desc">Date (Newest)</option>
                    <option value="stars_asc">Stars (Lowest)</option>
                    <option value="stars_desc">Stars (Highest)</option>
                </select>
            </div>
        </div>
    </div>


    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">   
                        <div class="asset-inner">
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>ID Product</th>
                                    <th>ID Customer</th>
                                    <th>Number of Starts</th>
                                    <th>Content</th>
                                    <th>Action</th>
                                </tr>   
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
