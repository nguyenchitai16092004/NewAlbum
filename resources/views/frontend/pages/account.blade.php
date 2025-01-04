@extends('frontend.layouts.master')
@section('title', 'Oder History')
@section('main')
    <link rel="stylesheet" href="css/account.css">
    <div class="container-account">
        <div class="ctn-account">
            <div class="header">
                <div>
                    <h1>Welcome back!</h1>
                </div>
            </div>
            <p>You can review and edit your personal information here.</p>
            <nav class="navigation">
                <ul>
                    <li><a href="#" class="active">Account Information</a></li>
                    <li><a href="#">Order History</a></li>
                    <li><a href="#">Wish List</a></li>
                    <li><a href="#">Rating Product</a></li>
                </ul>
            </nav>
        </div>
        <div class="ctn-account-2">
            <div class="card">
                <h2>Account Information</h2>
                <div class="info">
                    <div class="field field-name name">
                        <label>Full name</label>
                        <span>Nguyen Mai Xuan Phu</span>
                    </div>
                    <div class="field field-name phone">
                        <label>Phone number</label>
                        <span>0387159716</span>
                    </div>
                    <div class="field field-name ">
                        <label>Sex</label>
                        <div class="field-name sex">
                            <input type="radio" id="male" name="sex" checked>
                            <label class="male" for="male">Male</label>
                            <input type="radio" id="female" name="sex">
                            <label class="female" for="female">Female</label>
                        </div>
                    </div>
                    <div class="field field-name">
                        <label>Birthday</label>
                        <span>27/09/2004</span>
                    </div>
                    <div class="field field-name">
                        <label>Address</label>
                        <span>860/35 Huynh Tan Phat Quan 7</span>
                    </div>
                    <button class="update-btn" style="">Update</button>
                </div>
                <div class="card-2">
                <h2>Login Information</h2>
                <div class="info">
                    <div class="field field-name email">
                        <label>Email</label>
                        <span>0306221264@caothang.edu.vn</span>
                    </div>
                    <div class="field field-name">
                        <label>Password</label>
                        <span>*************</span>
                    </div>
                    <button class="update-btn">Update</button>
                </div>
            </div>
            </div>

            
        </div>
    </div>
@stop
