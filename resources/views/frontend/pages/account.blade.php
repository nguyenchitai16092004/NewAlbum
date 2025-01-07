@extends('frontend.layouts.master')
@section('title', 'Order History')
@section('main')
    <link rel="stylesheet" href="css/account.css">
    <div class="account-container">
        <div>
            <div class="account-header">
                <div class="account-header-content">
                    <h1>Welcome back!</h1>
                </div>
                <p class="account-description">You can review and edit your personal information here.</p>
            </div>
            <nav class="account-navigation">
            <ul>
                <li><a href="#" class="active">Account Information</a></li>
                <li><a href={{ asset('/oder-history')}}>Order History</a></li>
                <li><a href={{ asset('/wishlist')}}>Wish List</a></li>
                <li><a href={{ asset('/rating-product')}}>Rating Product</a></li>
            </ul>
        </nav>
        </div>
        <div class="account-content">
            <div class="account-card">
                <h2>Account Information</h2>
                <div class="account-info">
                    <div class="account-field name-field">
                        <label>Full name</label>
                        <span>Nguyen Mai Xuan Phu</span>
                    </div>
                    <div class="account-field phone-field">
                        <label>Phone number</label>
                        <span>0387159716</span>
                    </div>
                    <div class="account-field sex-field">
                        <label>Sex</label>
                        <div class="sex-options">
                            <input type="radio" id="male" name="sex" checked>
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="sex">
                            <label for="female">Female</label>
                        </div>
                    </div>
                    <div class="account-field birthday-field">
                        <label>Birthday</label>
                        <span>27/09/2004</span>
                    </div>
                    <div class="account-field address-field">
                        <label>Address</label>
                        <span>860/35 Huynh Tan Phat Quan 7</span>
                    </div>
                    <button class="account-update-btn">Update</button>
                </div>
            </div>
            <div class="account-card">
                <h2>Login Information</h2>
                <div class="account-info">
                    <div class="account-field email-field">
                        <label>Email</label>
                        <span>0306221264@caothang.edu.vn</span>
                    </div>
                    <div class="account-field password-field">
                        <label>Password</label>
                        <span>*************</span>
                    </div>
                    <button class="account-update-btn">Update</button>
                </div>
            </div>
        </div>
    </div>
@stop
