@extends('backend.layouts.master')
@section('This page is Home Admin', 'Home Admin')
@section('main')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st" style="background: rgba(255, 255, 255, 0.9);">
                    <h3 class="text-center mb-4">Edit Blog</h3>
                    <form>
                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-6">
                                <!-- ID Blog Dropdown -->
                                <div class="form-group mb-4">
                                    <label for="blog_id">ID Blog</label>
                                    <select class="form-control" id="blog_id">
                                        <option selected>Choose Blog ID</option>
                                        <!-- Add options for Blog IDs here -->
                                        <option value="1">Blog 1</option>
                                        <option value="2">Blog 2</option>
                                        <option value="3">Blog 3</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="admin_id">ID Admin</label>
                                    <select class="form-control" id="admin_id">
                                        <option selected>Choose Admin ID</option>
                                        <!-- Add options for Admin IDs here -->
                                        <option value="1">Admin 1</option>
                                        <option value="2">Admin 2</option>
                                        <option value="3">Admin 3</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control-file" id="image" style="display: block; margin: 0 auto;">
                                </div>
                            </div>
                    
                            <!-- Right Column -->
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label for="author">Author</label>
                                    <input type="text" class="form-control" id="author" placeholder="Enter Author Name">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="date">Date</label>
                                    <input type="date" class="form-control" id="date">
                                </div>
                            </div>
                        </div>
                    
                        <!-- Content Section -->
                        <div class="form-group mb-4">
                            <label for="content">Content</label>
                            <textarea class="form-control" id="content" rows="5" placeholder="Enter Content"></textarea>
                        </div>
                    
                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="Submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>                        
                </div>
            </div>
        </div>
    </div>
</div>
@stop
