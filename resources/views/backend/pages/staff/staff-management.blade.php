@extends('backend.layouts.master')
@section('This page is Home Admin', 'Home Admin')
@section('main')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                    <h4>Staffs List</h4>
                    <div class="add-product">
                        <a href="{{ Route('Index_Add_Staff_Management') }}" style="background-color: black; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Add Staffs</a>
                    </div>                    
                        <div class="product-status-wrap drp-lst">
                            <div class="search-container mb-3">
                                <div class="input-group" style="width: 250px; display: flex; align-items: center;">
                                    <input type="text" class="form-control" placeholder="Search Staffs" style="border-radius: 10px 0 0 10px;">
                                    
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Birthday</th>
                                    <th>Number</th>
                                    <th>Address</th>
                                    <th>Account</th>
                                    <th>Password</th>
                                    <th>Status</th>
                                    <th>Gender</th>
                                    <th>Image</th>
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
