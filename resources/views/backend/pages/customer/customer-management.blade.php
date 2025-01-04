@extends('backend.layouts.master')
@section('This page is Home Admin', 'Home Admin')
@section('main')

    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                    <h4>Customers List</h4>
<<<<<<< Updated upstream

                        <div class="product-status-wrap drp-lst">
                            <div class="search-container mb-3">
                                <div class="input-group" style="width: 250px; display: flex; align-items: center;">
                                    <input type="text" class="form-control" placeholder="Search Customers" style="border-radius: 10px 0 0 10px;">
                                    
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" style="height: 40px;" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="asset-inner">
                            <table>
                                <tr>
                                    <th>ID</th>
=======
                        <div class="asset-inner">
                            <table>
                                <tr>
                                    <th>ID Customer</th>
>>>>>>> Stashed changes
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Birthday</th>
                                    <th>Number</th>
<<<<<<< Updated upstream
                                    <th>Address</th> <!-- Migration không có trường address -->
                                    <th>Account</th>
=======
                                    <th>Username</th>
>>>>>>> Stashed changes
                                    <th>Password</th>
                                    <th>Status</th>
                                    <th>Gender</th>
                                    <th>Image</th>
<<<<<<< Updated upstream
=======
                                    <th>Address</th>
>>>>>>> Stashed changes
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
