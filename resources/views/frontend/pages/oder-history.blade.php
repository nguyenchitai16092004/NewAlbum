@extends('frontend.layouts.master')
@section('title', 'Oder History')
@section('main')
    <link rel="stylesheet" href="css/oder-history.css">
    <div class="container-oder-history">
        <div class="ctn-oder-history">
            <div class="header">
                <div>
                    <h1>Welcome back!</h1>
                </div>
            </div>
            <p>You can review and edit your personal information here.</p>
            <nav class="navigation">
                <ul>
                <li><a href={{ asset('/account')}} >Account Information</a></li>
                <li><a href={{ asset('/oder-history')}} class="active">Order History</a></li>
                <li><a href={{ asset('/wishlist')}}>Wish List</a></li>
                <li><a href={{ asset('/rating-product')}}>Rating Product</a></li>
                </ul>
            </nav>
            <div class="content">
                <div class="ctn-order">
                    <div class="order-status">
                        <h2>Purchased Order</h2>
                        <ul>
                            <li class="active">Awaiting Confirmation</li>
                            <li>Awaiting Pickup</li>
                            <li>Awaiting Delivery</li>
                            <li>Delivered</li>
                            <li>Canceled</li>
                        </ul>
                    </div>
                   <div class="vertical-line"></div>
                    <div>
                        <table class="order-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="name">BTS Jungkook Dazed Magazine Fall 2023</td>
                                   <td class="quantity">1</td>
                                    <td class="price-oh">550.00 VND</td>
                                    <td class="total">550.00 VND</td>
                                    <td><a href="#" class="cancel-btn"><i class="fa-solid fa-x" style="color: #000205;"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="name">BTS Jungkook Dazed Magazine Fall 2023</td>
                                    <td class="quantity">1</td>
                                    <td class="price-oh">550.00 VND</td>
                                    <td class="total">550.00 VND</td>
                                    <td><a href="#" class="cancel-btn"><i class="fa-solid fa-x" style="color: #000205;"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
