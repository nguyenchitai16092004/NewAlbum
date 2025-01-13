@extends('backend.layouts.master')
@section('This page is Home Admin', 'Home Admin')
@section('main')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap drp-lst">
                <h4>Bill Details List</h4>
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>ID Bill</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Name Product</th>
                                <th>Price</th>
                                <th>Total Price</th>
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
