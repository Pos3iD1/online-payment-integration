<!--== Start Header Area ==-->
<header class="header-area">
    <div class="container container-wide">
        <div class="row align-items-center">
            <div class="col-sm-4 col-lg-2">
                <div class="site-logo text-center text-sm-left">
                    <a href="/"><img src="/assets/img/logo.png" alt="Logo" /></a>
                </div>
            </div>

            <div class="col-lg-7 d-none d-lg-block">
                <div class="site-navigation">
                    <ul class="main-menu nav">
                        <li class="has-submenu"><a href="/">Home</a>
{{--                            <ul class="sub-menu">--}}
{{--                                <li><a href="index.html">Home 1</a></li>--}}
{{--                                <li><a href="index-2.html">Home 2</a></li>--}}
{{--                                <li><a href="index-boxed.html">Home Box Layout</a></li>--}}
{{--                            </ul>--}}
                        </li>
                        <li><a href="/about">About</a></li>
                        <li class="has-submenu"><a href="/products">Shop</a>
{{--                            <ul class="sub-menu">--}}
{{--                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>--}}
{{--                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>--}}
{{--                                <li><a href="single-product.html">Single Product</a></li>--}}
{{--                            </ul>--}}
                        </li>
                        <li class="has-submenu"><a href="/blog">blog</a>
{{--                            <ul class="sub-menu">--}}
{{--                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>--}}
{{--                                <li><a href="blog.html">Blog Right Sidebar</a></li>--}}
{{--                                <li><a href="blog-details.html">Single Blog</a></li>--}}
{{--                                <li><a href="blog-details-sidebar.html">Single Blog Sidebar</a></li>--}}
{{--                            </ul>--}}
                        </li>
                        <li><a href="/gallery">Gallery</a></li>
                        <li class="has-submenu"><a href="/">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="/cart">Cart</a></li>
                                <li><a href="/checkout">Checkout</a></li>
                                <li><a href="/wishlist">Wishlist</a></li>
                            </ul>
                        </li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-8 col-lg-3">
                <div class="site-action d-flex justify-content-center justify-content-sm-end align-items-center">
                    <ul class="login-reg-nav nav">
                        @guest
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Register</a></li>
                        @endguest
                        @auth
                            <li><a href="#">Orders</a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <a href="/logout" onclick="event.preventDefault(); this.closest('form').submit()">Logout</a>
                                </form>
                            </li>
                        @endauth
                    </ul>

                    <div class="mini-cart-wrap">
                        <a href="/cart" class="btn-mini-cart">
                            <i class="ion-bag"></i>
                            <span class="cart-total">3</span>
                        </a>

                        <div class="mini-cart-content">
                            <div class="mini-cart-product">
                                <div class="mini-product">
                                    <div class="mini-product__thumb">
                                        <a href="single-product.html"><img src="/assets/img/product/product-1.png" alt="product" /></a>
                                    </div>
                                    <div class="mini-product__info">
                                        <h2 class="title"><a href="single-product.html">Auto Clutch & Brake</a></h2>

                                        <div class="mini-calculation">
                                            <p class="price">5 x <span>$20.33</span></p>
                                            <button class="remove-pro"><i class="ion-trash-b"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mini-product">
                                    <div class="mini-product__thumb">
                                        <a href="single-product.html"><img src="/assets/img/product/product-2.png" alt="product" /></a>
                                    </div>
                                    <div class="mini-product__info">
                                        <h2 class="title"><a href="single-product.html">Leather Steering Wheel</a></h2>

                                        <div class="mini-calculation">
                                            <p class="price">5 x <span>$20.33</span></p>
                                            <button class="remove-pro"><i class="ion-trash-b"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mini-product">
                                    <div class="mini-product__thumb">
                                        <a href="single-product.html"><img src="/assets/img/product/product-3.png" alt="product" /></a>
                                    </div>
                                    <div class="mini-product__info">
                                        <h2 class="title"><a href="single-product.html">Leather Steering Wheel</a></h2>

                                        <div class="mini-calculation">
                                            <p class="price">5 x <span>$20.33</span></p>
                                            <button class="remove-pro"><i class="ion-trash-b"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="responsive-menu d-lg-none">
                        <button class="btn-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--== End Header Area ==-->
