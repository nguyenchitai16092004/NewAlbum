@extends('backend.layouts.master')
@section('This page is Home Admin', 'Home Admin')
@section('main')
<link rel="stylesheet" href="/css/custom-style-addstaff.css">
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st" style="background: rgba(255, 255, 255, 0.9);">
                    <h3 class="text-center mb-4">Response Contact</h3>
                    <form>
                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label for="contact_id">ID Contact</label>
                                    <input type="text" class="form-control" id="contact_id" placeholder="Contact ID" readonly>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="customer_id">ID Customer</label>
                                    <input type="text" class="form-control" id="customer_id" placeholder="Customer ID" readonly>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Customer Name" readonly>
                                </div>
                            </div>
                    
                            <!-- Right Column -->
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control" id="phone" placeholder=" Phone Number" readonly>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email" readonly>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="date">Date</label>
                                    <input type="date" class="form-control" id="date" readonly>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Message Section -->
                        <div class="form-group mb-4">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Customer Message" readonly></textarea>
                        </div>
                    
                        <!-- Response Section -->
                        <div class="form-group mb-4">
                            <label for="response">Response</label>
                            <textarea class="form-control" id="response" rows="3" placeholder="Enter your response"></textarea>
                        </div>
                    
                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="Submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>                        
                </div>
            </div>
        </div>
    </div>
</div>
@stop
