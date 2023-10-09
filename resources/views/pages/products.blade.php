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
                                        <option value="sbt">Sort By Price From Low</option>
                                        <option value="sbt">Sort By Price From High</option>
                                        <option value="sbr">Sort By Rating</option>
                                        <option value="sbn">Sort By Newest</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-wrapper product-layout layout-grid">
                        <div class="row mtn-30">
{{--                            {{ dd($products->items()) }}--}}
                            @foreach($products->items() as $product)
                                <!-- Start Product Item -->
                                <div class="col-sm-6 col-lg-4">
                                    <div class="product-item">
                                        <div class="product-item__thumb">
                                            <a href="/products/{{ $product->id }}">
                                                <img class="thumb-primary" src="{{ $product->images->first()->path }}" alt="{{ $product->images->first()->alt }}" />
                                                <img class="thumb-secondary" src="{{ $product->images->first()->path }}" alt="{{ $product->images->first()->alt }}" />
                                            </a>

                                            <div class="ratting">
                                                @for($i = 0; $i < floor($product->ratting()); $i++)
                                                    <span><i class="ion-android-star"></i></span>
                                                @endfor
                                                @if($product->ratting() - floor($product->ratting()) >= 0.5)
                                                    <span><i class="ion-android-star-half"></i></span>
                                                @endif
                                                @for($i = 0; $i < (5 - floor($product->ratting()) - ($product->ratting() - floor($product->ratting()) >= 0.5 ? 1 : 0)); $i++)
                                                    <span><i class="ion-android-star-outline"></i></span>
                                                @endfor
                                            </div>
                                        </div>

                                        <div class="product-item__content">
                                            <div class="product-item__info">
                                                <h4 class="title"><a href="/products/{{ $product->id }}">{{ ucfirst($product->name) }}</a></h4>
                                                <span class="price"><strong>Price:</strong> ${{ $product->price }}</span>
                                            </div>

                                            <div class="product-item__action">
                                                <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                                <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                                <a class="btn-add-to-cart" href="/products/{{ $product->id }}"><i class="ion-eye"></i></a>
                                            </div>

                                            <div class="product-item__desc">
                                                <p>{{ $product->short_description }}</p>
                                            </div>
                                        </div>

                                        <div class="product-item__sale">
                                            <span class="sale-txt">{{ $product->discount }}%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Item -->
                            @endforeach
                        </div>
                    </div>

                    <div class="action-bar-inner mt-30">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <nav class="pagination-wrap mb-10 mb-sm-0">
{{--                                    {{ dd($products) }}--}}
                                    <ul class="pagination">
                                        @if(!$products->onFirstPage())
                                            <li><a href="{{ $products->previousPageUrl() }}"><i class="ion-ios-arrow-thin-left"></i></a></li>
                                        @endif
                                        @foreach($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                            <li>@if($page != $products->currentPage())<a href="{{ $url }}">@endif{{ $page }}</a></li>
                                        @endforeach
{{--                                        <li class="active"><a href="#">1</a></li>--}}
{{--                                        <li><a href="#">2</a></li>--}}
{{--                                        <li><a href="#">3</a></li>--}}
                                        @if($products->hasMorePages())
                                            <li><a href="{{ $products->nextPageUrl() }}"><i class="ion-ios-arrow-thin-right"></i></a></li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>

                            <div class="col-sm-6 text-center text-sm-right">
                                <p>Showing {{ (($products->currentPage() - 1) * $products->perPage()) + 1 }}–@if(((($products->currentPage() - 1) * $products->perPage()) + $products->perPage()) > $products->total()) {{ $products->total() }} @else {{ (($products->currentPage() - 1) * $products->perPage()) + $products->perPage() }} @endif of {{ $products->total() }} results</p>
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
                                    <li><a href="#" class="query-selector @if(!array_key_exists('color', $queries)) query-selector-selected @endif" query="color" data="all">All Colors</a></li>
                                    @foreach($colors as $color)
                                        <li><a href="#" class="query-selector @if(array_key_exists('color', $queries) && in_array($color->name, $queries['color'])) query-selector-selected @endif" query="color" data="{{ $color->name }}">{{ ucfirst($color->name) }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="sidebar-item">
                            <h4 class="sidebar-title">Product categories</h4>
                            <div class="sidebar-body">
                                <ul class="sidebar-list">
                                    <li><a href="#" class="query-selector @if(!array_key_exists('category', $queries)) query-selector-selected @endif" query="category" data="all">All Categories</a></li>
                                    @foreach($categories as $category)
                                        <li><a href="#" class="query-selector @if(array_key_exists('category', $queries) && in_array($category->name, $queries['category'])) query-selector-selected @endif" query="category" data="{{ $category->name }}">{{ ucfirst($category->name) }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="sidebar-item">
                            <h4 class="sidebar-title">Product tags</h4>
                            <div class="sidebar-body">
                                <ul class="tags">
                                    <li><a href="#" class="query-selector @if(!array_key_exists('tag', $queries)) query-selector-selected @endif" query="tag" data="all">All Tags</a></li>
                                    @foreach($tags as $tag)
                                        <li><a href="#" class="query-selector @if(array_key_exists('tag', $queries) && in_array($tag->name, $queries['tag'])) query-selector-selected @endif" query="tag" data="{{ $tag->name }}">{{ ucfirst($tag->name) }}</a></li>
                                    @endforeach
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
