@extends('backend.layouts.master')
@section('This page is Add Library', 'Add Library')
@section('main')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                    <h4>Blogs List</h4>
                    <div class="add-product">
                        <a href="{{ Route('Index_Add_Blog_Management') }}" style="background-color: black; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Add Blogs</a>
                    </div>                    
                        <div class="product-status-wrap drp-lst">
                            <div class="search-container mb-3">
                                <div class="input-group" style="width: 250px; display: flex; align-items: center;">
                                    <input type="text" class="form-control" placeholder="Search Blogs" style="border-radius: 10px 0 0 10px;">
                                    
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" style="height: 40px;" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
