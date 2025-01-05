@extends('backend.layouts.master')
@section('This page is Home Admin', 'Home Admin')
@section('main')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card" style="background: rgba(255, 255, 255, 0.9); padding: 20px; border-radius: 8px;">
                <h3 class="text-center mb-4">Admin Profile</h3>
                <div class="add-product">
                    <a href="{{ Route('Index_Edit_Admin_Profile') }}" style="background-color: black; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Edit Profile</a>
                </div>
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-md-6">
                        <div class="form-group mb-4 d-flex align-items-center">
                            <label for="image" class="mb-0" style="margin-right: 10px;">Profile Picture:</label>
                            <div class="profile-img">
                                <img src="https://via.placeholder.com/120" alt="Admin Image" class="img-thumbnail" style="width: 120px; height: 120px; object-fit: cover;">
                            </div>
                        </div> 
                        
                        <div class="form-group mb-4">
                            <label for="date">Date of Birth:</label>
                            <input type="date" class="form-control" id="date" value="1990-01-01" disabled>
                        </div>
                        <div class="form-group mb-4">
                            <label for="gender">Gender:</label>
                            <input type="text" class="form-control" id="gender" value="Male" disabled>
                        </div>
                    </div>
                    
                    <!-- Right Column -->
                    <div class="col-md-6">
                        <div class="form-group mb-4" style="display: fl">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" value="John Doe" disabled>
                        </div>
                        <div class="form-group mb-4">
                            <label for="position">Position:</label>
                            <input type="text" class="form-control" id="position" value="Administrator" disabled>
                        </div>
                        <div class="form-group mb-4">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" value="admin@example.com" disabled>
                        </div>
                        <div class="form-group mb-4">
                            <label for="phone">Phone Number:</label>
                            <input type="text" class="form-control" id="phone" value="+123456789" disabled>
                        </div>
                                                                                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
