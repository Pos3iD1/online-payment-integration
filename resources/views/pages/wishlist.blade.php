@php use Illuminate\Support\Facades\Auth; @endphp
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
                                    @if(Auth::user()->wishes->count())
                                        <thead>
                                        <tr>
                                            <th>Products</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Cart</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach(Auth::user()->wishes as $product)
                                            <tr>
                                                <td class="product-list">
                                                    <div class="cart-product-item d-flex align-items-center">
                                                        <div class="remove-icon">
                                                            <form action="{{ route('unwish', ['id' => $product->id]) }}" method="post">
                                                                @csrf
                                                                <button type="submit"><i class="fa fa-trash-o"></i></button>
                                                            </form>
                                                        </div>
                                                        <a href="/products/{{ $product->id }}" class="product-thumb">
                                                            <img src="{{ $product->images->first()->path }}" alt="{{ $product->images->first()->alt }}"/>
                                                        </a>
                                                        <a href="/products/{{ $product->id }}" class="product-name">{{ ucfirst($product->name) }}</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="price">${{ $product->price }}</span>
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
                                        @endforeach
                                        </tbody>
                                    @else
                                        <tbody>
                                        <tr>
                                            <th>Your wishlist is empty</th>
                                        </tr>
                                        </tbody>
                                    @endif

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
