@extends('backend.layouts.master')
@section('This page is Receipt Form', 'Receipt Form')
@section('main')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap drp-lst">
                    <h4>Receipt Entry Form</h4>
                    <!-- Receipt Details Section -->
                    <h4 class="mt-4">Receipt Details</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Receipt ID</th>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Purchase Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            @foreach($receiptDetails as $detail)
                                <tr>
                                    <td>{{ $detail->MaPN }}</td>
                                    <td>{{ $detail->MaSP }}</td>
                                    <td>{{ $detail->TenSP }}</td>
                                    <td>{{ number_format($detail->GiaNhap, 2) }}</td>
                                    <td>{{ $detail->SoLuong }}</td>
                                    <td>{{ number_format($detail->TongTien, 2) }}</td>
                                    <td>
                                        <a href="{{ route('receiptDetails.edit', [$detail->MaPN, $detail->MaSP]) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('receiptDetails.destroy', [$detail->MaPN, $detail->MaSP]) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody> --}}
                    </table>
                    <div class="form-group">
                        <label for="TongTien">Total</label>
                        <input type="number" step="0.01" id="TongTien" name="TongTien" class="form-control" readonly>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Receipt Entry Form</h4>
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="MaPN">Receipt ID</label>
                                <input type="number" id="MaPN" name="MaPN" class="form-control" required>
                            </div>

                            <!-- Radio Buttons để chọn sản phẩm mới hay có sẵn -->
                            <div class="form-group">
                                <label>Product Type</label>
                                <div>
                                    <input type="radio" id="existingProduct" name="productType" value="existing" checked> 
                                    <label for="existingProduct">Existing Product</label>
                                    <input type="radio" id="newProduct" name="productType" value="new">
                                    <label for="newProduct">New Product</label>
                                </div>
                            </div>

                            <!-- Existing Product Section -->
                            <div id="existingProductSection">
                                <div class="form-group">
                                    <label for="ProductSearch">Search Product</label>
                                    <input type="text" id="ProductSearch" name="ProductSearch" class="form-control" placeholder="Search product by name" required>
                                </div>
                                
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="Image">Image</label> 
                                        <input type="file" id="Image" name="Image" class="" readonly>
                                    </div>
                                    <label for="MaSP">Product ID</label>
                                    <input type="text" id="MaSP" name="MaSP" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="TenSP">Product Name</label>
                                    <input type="text" id="TenSP" name="TenSP" class="form-control" readonly>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="GiaNhap">Import Price</label>
                                        <input type="text" id="GiaNhap" name="GiaNhap" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="SellingPrice">Selling Price</label>
                                        <input type="text" id="SellingPrice" name="SellingPrice" class="form-control" readonly>
                                    </div>
                                </div>
                                
                            </div>      

                            <!-- New Product Section -->
                            <div id="newProductSection" style="display: none;">
                                <div class="form-group">
                                    <label for="Image">Image</label> 
                                    <input type="file" id="Image" name="Image" class="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="NewProductName">New Product Name</label>
                                    <input type="text" id="NewProductName" name="NewProductName" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="NewProductPrice">Import Price</label>
                                    <input type="number" step="0.01" id="NewProductPrice" name="NewProductPrice" class="form-control" required>
                                    <label for="NewSellingPrice">Selling Price</label>
                                    <input type="number" step="0.01" id="NewSellingPrice" name="NewSellingPrice" class="form-control" required>
                                </div>
                            </div>

                            <!-- Quantity and Total Section -->
                            <div class="form-group">
                                <label for="SoLuong">Quantity</label>
                                <input type="number" id="SoLuong" name="SoLuong" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const quantityInput = document.getElementById('SoLuong');
            const purchasePriceInput = document.getElementById('GiaNhap');
            const sellingPriceInput = document.getElementById('SellingPrice');
            const totalInput = document.getElementById('TongTien');
            const existingProductRadio = document.getElementById('existingProduct');
            const newProductRadio = document.getElementById('newProduct');
            const existingProductSection = document.getElementById('existingProductSection');
            const newProductSection = document.getElementById('newProductSection');
            const productSearchInput = document.getElementById('ProductSearch');
            const productIdInput = document.getElementById('MaSP');
            const productNameInput = document.getElementById('TenSP');
            const productPurchasePriceInput = document.getElementById('GiaNhap');
            const productSellingPriceInput = document.getElementById('SellingPrice');

            function calculateTotal() {
                const quantity = parseFloat(quantityInput.value) || 0;
                const price = parseFloat(sellingPriceInput.value) || 0;
                totalInput.value = (quantity * price).toFixed(2);
            }

            function toggleProductSection() {
                if (existingProductRadio.checked) {
                    existingProductSection.style.display = 'block';
                    newProductSection.style.display = 'none';
                } else {
                    existingProductSection.style.display = 'none';
                    newProductSection.style.display = 'block';
                }
            }

            // Event listener for changing the product section
            existingProductRadio.addEventListener('change', toggleProductSection);
            newProductRadio.addEventListener('change', toggleProductSection);

            // Event listener for searching and selecting a product
            productSearchInput.addEventListener('input', function() {
                // Mock search - In a real scenario, this would query the database
                const products = [
                    { id: '101', name: 'Product A', price: 100, sellingPrice: 150 },
                    { id: '102', name: 'Product B', price: 200, sellingPrice: 250 }
                ];
                
                const searchQuery = productSearchInput.value.toLowerCase();
                const matchedProduct = products.find(product => product.name.toLowerCase().includes(searchQuery));

                if (matchedProduct) {
                    productIdInput.value = matchedProduct.id;
                    productNameInput.value = matchedProduct.name;
                    productPurchasePriceInput.value = matchedProduct.price;
                    productSellingPriceInput.value = matchedProduct.sellingPrice;
                } else {
                    productIdInput.value = '';
                    productNameInput.value = '';
                    productPurchasePriceInput.value = '';
                    productSellingPriceInput.value = '';
                }
            });

            quantityInput.addEventListener('input', calculateTotal);
            sellingPriceInput.addEventListener('input', calculateTotal);

            toggleProductSection();
        });
    </script>
@stop
