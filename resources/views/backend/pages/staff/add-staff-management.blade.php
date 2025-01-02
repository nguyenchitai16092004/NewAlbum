@extends('backend.layouts.master')
@section('This page is Add Library', 'Add Library')
@section('main')
<div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st style="background: rgba(255, 255, 255, 0.9);">
                       
                <h3 class="text-center mb-4">Add New Staff</h3>
                <form>
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Name">
                            </div>
                            <div class="form-group mb-4">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter Email">
                            </div>
                            <div class="form-group mb-4">
                                <label for="birthday">Birthday</label>
                                <input type="date" class="form-control" id="birthday">
                            </div>
                            <div class="form-group mb-4">
                                <label for="number">Phone Number</label>
                                <input type="text" class="form-control" id="number" placeholder="Enter Phone Number">
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Enter Address">
                            </div>
                            <div class="form-group mb-4">
                                <label for="account">Account</label>
                                <input type="text" class="form-control" id="account" placeholder="Enter Account">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter Password">
                            </div>
                            <div class="form-group mb-4">
                                <label for="gender">Gender</label>
                                <select class="form-control" id="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Image Upload -->
                    <div class="form-group mb-4">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" style="display: block; margin: 0 auto;">
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="add" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
