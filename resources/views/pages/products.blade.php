@extends('layouts.default')

@section('title', 'Shop Right Sidebar :: Lukas - Car Parts Store eCommerce HTML Template')

@section('content')
    <!--== Start Page Header Area ==-->
    <div class="page-header-wrap bg-img" data-bg="assets/img/bg/page-header-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="page-header-content">
                        <div class="page-header-content-inner">
                            <h1>Shop Right Sidebar</h1>

                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="current"><a href="#">Shop</a></li>
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
        <div class="container container-wide">
            <div class="row">
                <div class="col-lg-9">
                    <div class="action-bar-inner mb-30">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="shop-layout-switcher mb-15 mb-sm-0">
                                    <ul class="layout-switcher nav">
                                        <li data-layout="grid" class="active"><i class="fa fa-th"></i></li>
                                        <li data-layout="list"><i class="fa fa-th-list"></i></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="sort-by-wrapper">
                                    <label for="sort" class="sr-only">Sort By</label>
                                    <select name="sort" id="sort">
                                        <option value="sbp">Sort By Popularity</option>
                                        <option value="sbn">Sort By Newest</option>
                                        <option value="sbt">Sort By Trending</option>
                                        <option value="sbr">Sort By Rating</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-wrapper product-layout layout-grid">
                        <div class="row mtn-30">
                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="single-product.html">
                                            <img class="thumb-primary" src="assets/img/product/product-6.png" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/product-7.png" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star-half"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="single-product.html">Auto Clutch & Brake</a></h4>
                                            <span class="price"><strong>Price:</strong> $165.00</span>
                                        </div>

                                        <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div>

                                        <div class="product-item__desc">
                                            <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p>
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">25%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="single-product.html">
                                            <img class="thumb-primary" src="assets/img/product/product-2.png" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/product-3.png" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star-half"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="single-product.html">17 INCH RIMS 8 LUG</a></h4>
                                            <span class="price"><strong>Price:</strong> $235.00</span>
                                        </div>

                                        <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div>

                                        <div class="product-item__desc">
                                            <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="single-product.html">
                                            <img class="thumb-primary" src="assets/img/product/product-4.png" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/product-5.png" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star-half"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="single-product.html">AIR INTAKE SYSTEM</a></h4>
                                            <span class="price"><strong>Price:</strong> $125.00</span>
                                        </div>

                                        <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div>

                                        <div class="product-item__desc">
                                            <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p>
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">35%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="single-product.html">
                                            <img class="thumb-primary" src="assets/img/product/product-11.png" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/product-10.png" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star-half"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="single-product.html">LEATHER STEERING WHEEL</a></h4>
                                            <span class="price"><strong>Price:</strong> $25.00</span>
                                        </div>

                                        <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div>

                                        <div class="product-item__desc">
                                            <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p>
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">15%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="single-product.html">
                                            <img class="thumb-primary" src="assets/img/product/product-13.png" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/product-7.png" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star-half"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="single-product.html">Auto Clutch & Brake</a></h4>
                                            <span class="price"><strong>Price:</strong> $165.00</span>
                                        </div>

                                        <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div>

                                        <div class="product-item__desc">
                                            <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="single-product.html">
                                            <img class="thumb-primary" src="assets/img/product/product-3.png" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/product-2.png" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star-half"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="single-product.html">17 INCH RIMS 8 LUG</a></h4>
                                            <span class="price"><strong>Price:</strong> $235.00</span>
                                        </div>

                                        <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div>

                                        <div class="product-item__desc">
                                            <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p>
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">25%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="single-product.html">
                                            <img class="thumb-primary" src="assets/img/product/product-7.png" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/product-9.png" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star-half"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="single-product.html">AIR INTAKE SYSTEM</a></h4>
                                            <span class="price"><strong>Price:</strong> $125.00</span>
                                        </div>

                                        <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div>

                                        <div class="product-item__desc">
                                            <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="single-product.html">
                                            <img class="thumb-primary" src="assets/img/product/product-12.png" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/product-13.png" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star-half"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="single-product.html">LEATHER STEERING WHEEL</a></h4>
                                            <span class="price"><strong>Price:</strong> $25.00</span>
                                        </div>

                                        <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div>

                                        <div class="product-item__desc">
                                            <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p>
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">11%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->

                            <!-- Start Product Item -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="single-product.html">
                                            <img class="thumb-primary" src="assets/img/product/product-11.png" alt="Product" />
                                            <img class="thumb-secondary" src="assets/img/product/product-10.png" alt="Product" />
                                        </a>

                                        <div class="ratting">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star-half"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-item__content">
                                        <div class="product-item__info">
                                            <h4 class="title"><a href="single-product.html">LEATHER STEERING WHEEL</a></h4>
                                            <span class="price"><strong>Price:</strong> $25.00</span>
                                        </div>

                                        <div class="product-item__action">
                                            <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                            <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                        </div>

                                        <div class="product-item__desc">
                                            <p>Pursue pleasure rationally encounter consequences that are extremely painful.
                                                Nor
                                                again is there anyone who loves or pursues or desires to obtain pain of
                                                itself,
                                                because it is pain, but because occasionally circles</p>
                                        </div>
                                    </div>

                                    <div class="product-item__sale">
                                        <span class="sale-txt">15%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->
                        </div>
                    </div>

                    <div class="action-bar-inner mt-30">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <nav class="pagination-wrap mb-10 mb-sm-0">
                                    <ul class="pagination">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="ion-ios-arrow-thin-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="col-sm-6 text-center text-sm-right">
                                <p>Showing 1–12 of 26 results</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="sidebar-area">
                        <div class="sidebar-item">
                            <h4 class="sidebar-title">Filter By Color</h4>
                            <div class="sidebar-body">
                                <ul class="sidebar-list">
                                    <li><a href="#">Black <span>(2)</span></a></li>
                                    <li><a href="#">Blue <span>(3)</span></a></li>
                                    <li><a href="#">Green <span>(6)</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="sidebar-item">
                            <h4 class="sidebar-title">Recent Products</h4>
                            <div class="sidebar-body">
                                <div class="sidebar-product">
                                    <a href="single-product.html" class="image"><img src="assets/img/product/product-1.png" alt="product" /></a>
                                    <div class="content">
                                        <a href="single-product.html" class="title">Injected humour</a>
                                        <span class="price">$799.99</span>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebar-product">
                                    <a href="single-product.html" class="image"><img src="assets/img/product/product-2.png" alt="product" /></a>
                                    <div class="content">
                                        <a href="single-product.html" class="title">Classical literature</a>
                                        <span class="price">$599.99 <span class="old">$799.99</span></span>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebar-product">
                                    <a href="single-product.html" class="image"><img src="assets/img/product/product-3.png" alt="product" /></a>
                                    <div class="content">
                                        <a href="single-product.html" class="title">Classical literature</a>
                                        <span class="price">$649.99 <span class="old">$799.99</span></span>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-item">
                            <h4 class="sidebar-title">Product categories</h4>
                            <div class="sidebar-body">
                                <ul class="sidebar-list">
                                    <li><a href="#">All Product</a></li>
                                    <li><a href="#">Best Seller</a></li>
                                    <li><a href="#">Car</a></li>
                                    <li><a href="#">Parts</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Tayer</a></li>
                                    <li><a href="#">Uncategorized</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="sidebar-item">
                            <h4 class="sidebar-title">Product tags</h4>
                            <div class="sidebar-body">
                                <ul class="tags">
                                    <li><a href="#">Car</a></li>
                                    <li><a href="#">Parts</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Tayer</a></li>
                                    <li><a href="#">Seat</a></li>
                                    <li><a href="#">Engine</a></li>
                                    <li><a href="#">Parts</a></li>
                                    <li><a href="#">Fuel</a></li>
                                    <li><a href="#">Modern</a></li>
                                    <li><a href="#">Brake</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Content Wrapper ==-->
@endsection
