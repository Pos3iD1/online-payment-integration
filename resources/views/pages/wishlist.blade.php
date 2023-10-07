@extends('layouts.default')

@section('title', 'Wishlist :: Lukas - Car Parts Store eCommerce HTML Template')

@section('content')
<!--== Start Page Header Area ==-->
<div class="page-header-wrap bg-img" data-bg="assets/img/bg/page-header-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content">
                    <div class="page-header-content-inner">
                        <h1>Wishlist</h1>

                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="shop.html">Shop</a></li>
                            <li class="current"><a href="#">Wishlist</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Page Content Wrapper ==-->
<div class="page-content-wrapper sp-y">
    <div class="wishlist-page-content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shopping-cart-list-area">
                        <div class="shopping-cart-table table-responsive">
                            <table class="table table-bordered text-center mb-0">
                                <thead>
                                <tr>
                                    <th>Products</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Cart</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td class="product-list">
                                        <div class="cart-product-item d-flex align-items-center">
                                            <div class="remove-icon">
                                                <button><i class="fa fa-trash-o"></i></button>
                                            </div>
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product/product-1.png" alt="Product" />
                                            </a>
                                            <a href="single-product.html" class="product-name">Metallic cotton
                                                dress</a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price">$29.99</span>
                                    </td>
                                    <td>
                                        <div class="stock-status">
                                            <p>In Stock</p>
                                        </div>
                                    </td>
                                    <td class="add-cart">
                                        <a href="cart.html" class="btn btn-brand">Add to Cart</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="product-list">
                                        <div class="cart-product-item d-flex align-items-center">
                                            <div class="remove-icon">
                                                <button><i class="fa fa-trash-o"></i></button>
                                            </div>
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product/product-2.png" alt="Product" />
                                            </a>
                                            <a href="single-product.html" class="product-name">Open-knit sweater</a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price">$39.99</span>
                                    </td>
                                    <td>
                                        <div class="stock-status">
                                            <p>In Stock</p>
                                        </div>
                                    </td>
                                    <td class="add-cart">
                                        <a href="cart.html" class="btn btn-brand">Add to Cart</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="product-list">
                                        <div class="cart-product-item d-flex align-items-center">
                                            <div class="remove-icon">
                                                <button><i class="fa fa-trash-o"></i></button>
                                            </div>
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product/product-3.png" alt="Product" />
                                            </a>
                                            <a href="single-product.html" class="product-name">Metallic cotton
                                                dress</a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price">$29.99</span>
                                    </td>
                                    <td>
                                        <div class="stock-status">
                                            <p class="text-danger">Stock Out</p>
                                        </div>
                                    </td>
                                    <td class="add-cart">
                                        <a href="cart.html" class="btn btn-brand disabled">Add to Cart</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="product-list">
                                        <div class="cart-product-item d-flex align-items-center">
                                            <div class="remove-icon">
                                                <button><i class="fa fa-trash-o"></i></button>
                                            </div>
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product/product-4.png" alt="Product" />
                                            </a>
                                            <a href="single-product.html" class="product-name">Open-knit
                                                sweater</a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price">$39.99</span>
                                    </td>
                                    <td>
                                        <div class="stock-status">
                                            <p>In Stock</p>
                                        </div>
                                    </td>
                                    <td class="add-cart">
                                        <a href="cart.html" class="btn btn-brand">Add to Cart</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="product-list">
                                        <div class="cart-product-item d-flex align-items-center">
                                            <div class="remove-icon">
                                                <button><i class="fa fa-trash-o"></i></button>
                                            </div>
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product/product-5.png" alt="Product" />
                                            </a>
                                            <a href="single-product.html" class="product-name">Metallic cotton
                                                dress</a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price">$29.99</span>
                                    </td>
                                    <td>
                                        <div class="stock-status">
                                            <p>In Stock</p>
                                        </div>
                                    </td>
                                    <td class="add-cart">
                                        <a href="cart.html" class="btn btn-brand">Add to Cart</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="product-list">
                                        <div class="cart-product-item d-flex align-items-center">
                                            <div class="remove-icon">
                                                <button><i class="fa fa-trash-o"></i></button>
                                            </div>
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product/product-6.png" alt="Product" />
                                            </a>
                                            <a href="single-product.html" class="product-name">Open-knit
                                                sweater</a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price">$39.99</span>
                                    </td>
                                    <td>
                                        <div class="stock-status">
                                            <p>In Stock</p>
                                        </div>
                                    </td>
                                    <td class="add-cart">
                                        <a href="cart.html" class="btn btn-brand">Add to Cart</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="product-list">
                                        <div class="cart-product-item d-flex align-items-center">
                                            <div class="remove-icon">
                                                <button><i class="fa fa-trash-o"></i></button>
                                            </div>
                                            <a href="single-product.html" class="product-thumb">
                                                <img src="assets/img/product/product-7.png" alt="Product" />
                                            </a>
                                            <a href="single-product.html" class="product-name">Open-knit
                                                sweater</a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price">$39.99</span>
                                    </td>
                                    <td>
                                        <div class="stock-status">
                                            <p>In Stock</p>
                                        </div>
                                    </td>
                                    <td class="add-cart">
                                        <a href="cart.html" class="btn btn-brand">Add to Cart</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Content Wrapper ==-->
@endsection
