@extends('layouts.scaffold')
@push('title')
    {{ $title ?? '' }}
@endpush
@section('content')



    <div style="margin-top: 150px;" class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/bg/bg11.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Shop</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Shop</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space-top space-extra2-bottom">
        <div class="container">
            <div class="th-sort-bar">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md">
                        <p class="woocommerce-result-count">Showing 1–12 of 16 results</p>
                    </div>
                    <div class="col-md-auto">
                        <form class="woocommerce-ordering" method="get"><select name="orderby" class="orderby"
                                aria-label="Shop order">
                                <option value="menu_order" selected="selected">Default Sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by latest</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select></form>
                    </div>
                </div>
            </div>
            <div class="row gy-40">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="th-product product-grid">
                        <div class="product-img"><img src="{{asset('assets/img/product/product_1_1.png')}}" alt="Product Image">
                            <div class="overlay gradient-border"></div>
                            <div class="actions"><a href="cart.html.htm" class="icon-btn"><i
                                        class="far fa-cart-plus"></i></a> <a href="wishlist.html.htm"
                                    class="icon-btn"><i class="fas fa-heart"></i></a> <a href="#QuickView"
                                    class="icon-btn popup-content"><i class="fas fa-eye"></i></a></div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="shop-details.html.htm">Gaming Headphone</a></h3><span
                                class="price">$177.85</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="th-product product-grid">
                        <div class="product-img"><img src="{{asset('assets/img/product/product_1_2.png')}}" alt="Product Image">
                            <div class="overlay gradient-border"></div>
                            <div class="actions"><a href="cart.html.htm" class="icon-btn"><i
                                        class="far fa-cart-plus"></i></a> <a href="wishlist.html.htm"
                                    class="icon-btn"><i class="fas fa-heart"></i></a> <a href="#QuickView"
                                    class="icon-btn popup-content"><i class="fas fa-eye"></i></a></div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="shop-details.html.htm">Gaming Mouse</a></h3><span
                                class="price">$120.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="th-product product-grid">
                        <div class="product-img"><img src="{{asset('assets/img/product/product_1_3.png')}}" alt="Product Image">
                            <div class="overlay gradient-border"></div>
                            <div class="actions"><a href="cart.html.htm" class="icon-btn"><i
                                        class="far fa-cart-plus"></i></a> <a href="wishlist.html.htm"
                                    class="icon-btn"><i class="fas fa-heart"></i></a> <a href="#QuickView"
                                    class="icon-btn popup-content"><i class="fas fa-eye"></i></a></div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="shop-details.html.htm">Gaming Keyboard</a></h3><span
                                class="price">$96.85</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="th-product product-grid">
                        <div class="product-img"><img src="{{asset('assets/img/product/product_1_4.png')}}" alt="Product Image">
                            <div class="overlay gradient-border"></div>
                            <div class="actions"><a href="cart.html.htm" class="icon-btn"><i
                                        class="far fa-cart-plus"></i></a> <a href="wishlist.html.htm"
                                    class="icon-btn"><i class="fas fa-heart"></i></a> <a href="#QuickView"
                                    class="icon-btn popup-content"><i class="fas fa-eye"></i></a></div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="shop-details.html.htm">Gaming Chair</a></h3><span
                                class="price">$08.85<del>$06.99</del></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="th-product product-grid">
                        <div class="product-img"><img src="{{asset('assets/img/product/product_1_5.png')}}" alt="Product Image">
                            <div class="overlay gradient-border"></div>
                            <div class="actions"><a href="cart.html.htm" class="icon-btn"><i
                                        class="far fa-cart-plus"></i></a> <a href="wishlist.html.htm"
                                    class="icon-btn"><i class="fas fa-heart"></i></a> <a href="#QuickView"
                                    class="icon-btn popup-content"><i class="fas fa-eye"></i></a></div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="shop-details.html.htm">Microphone G9000</a></h3><span
                                class="price">$32.85</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="th-product product-grid">
                        <div class="product-img"><img src="{{asset('assets/img/product/product_1_6.png')}}" alt="Product Image">
                            <div class="overlay gradient-border"></div>
                            <div class="actions"><a href="cart.html.htm" class="icon-btn"><i
                                        class="far fa-cart-plus"></i></a> <a href="wishlist.html.htm"
                                    class="icon-btn"><i class="fas fa-heart"></i></a> <a href="#QuickView"
                                    class="icon-btn popup-content"><i class="fas fa-eye"></i></a></div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="shop-details.html.htm">Play Station Controller</a></h3>
                            <span class="price">$30.85</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="th-product product-grid">
                        <div class="product-img"><img src="{{asset('assets/img/product/product_1_7.png')}}" alt="Product Image">
                            <div class="overlay gradient-border"></div>
                            <div class="actions"><a href="cart.html.htm" class="icon-btn"><i
                                        class="far fa-cart-plus"></i></a> <a href="wishlist.html.htm"
                                    class="icon-btn"><i class="fas fa-heart"></i></a> <a href="#QuickView"
                                    class="icon-btn popup-content"><i class="fas fa-eye"></i></a></div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="shop-details.html.htm">PlayStation VR</a></h3><span
                                class="price">$232.85</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="th-product product-grid">
                        <div class="product-img"><img src="{{asset('assets/img/product/product_1_8.png')}}" alt="Product Image">
                            <div class="overlay gradient-border"></div>
                            <div class="actions"><a href="cart.html.htm" class="icon-btn"><i
                                        class="far fa-cart-plus"></i></a> <a href="wishlist.html.htm"
                                    class="icon-btn"><i class="fas fa-heart"></i></a> <a href="#QuickView"
                                    class="icon-btn popup-content"><i class="fas fa-eye"></i></a></div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="shop-details.html.htm">Wireless speaker</a></h3><span
                                class="price">$30.85</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="th-product product-grid">
                        <div class="product-img"><img src="{{asset('assets/img/product/product_1_9.png')}}" alt="Product Image">
                            <div class="overlay gradient-border"></div>
                            <div class="actions"><a href="cart.html.htm" class="icon-btn"><i
                                        class="far fa-cart-plus"></i></a> <a href="wishlist.html.htm"
                                    class="icon-btn"><i class="fas fa-heart"></i></a> <a href="#QuickView"
                                    class="icon-btn popup-content"><i class="fas fa-eye"></i></a></div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="shop-details.html.htm">PlayStation 4 Pro</a></h3><span
                                class="price">$32.85</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="th-product product-grid">
                        <div class="product-img"><img src="{{asset('assets/img/product/product_1_10.png')}}" alt="Product Image">
                            <div class="overlay gradient-border"></div>
                            <div class="actions"><a href="cart.html.htm" class="icon-btn"><i
                                        class="far fa-cart-plus"></i></a> <a href="wishlist.html.htm"
                                    class="icon-btn"><i class="fas fa-heart"></i></a> <a href="#QuickView"
                                    class="icon-btn popup-content"><i class="fas fa-eye"></i></a></div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="shop-details.html.htm">Gaming Controller</a></h3><span
                                class="price">$30.85</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="th-product product-grid">
                        <div class="product-img"><img src="{{asset('assets/img/product/product_1_11.png')}}" alt="Product Image">
                            <div class="overlay gradient-border"></div>
                            <div class="actions"><a href="cart.html.htm" class="icon-btn"><i
                                        class="far fa-cart-plus"></i></a> <a href="wishlist.html.htm"
                                    class="icon-btn"><i class="fas fa-heart"></i></a> <a href="#QuickView"
                                    class="icon-btn popup-content"><i class="fas fa-eye"></i></a></div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="shop-details.html.htm">RGB Play Station</a></h3><span
                                class="price">$232.85</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="th-product product-grid">
                        <div class="product-img"><img src="{{asset('assets/img/product/product_1_12.png')}}" alt="Product Image">
                            <div class="overlay gradient-border"></div>
                            <div class="actions"><a href="cart.html.htm" class="icon-btn"><i
                                        class="far fa-cart-plus"></i></a> <a href="wishlist.html.htm"
                                    class="icon-btn"><i class="fas fa-heart"></i></a> <a href="#QuickView"
                                    class="icon-btn popup-content"><i class="fas fa-eye"></i></a></div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="shop-details.html.htm">Gaming Computer</a></h3><span
                                class="price">$30.85</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="th-pagination text-center pt-50">
                <ul>
                    <li><a href="blog.html.htm"><span class="btn-border"></span> 1</a></li>
                    <li><a href="blog.html.htm"><span class="btn-border"></span> 2</a></li>
                    <li><a href="blog.html.htm"><span class="btn-border"></span> 3</a></li>
                    <li><a href="blog.html.htm"><span class="btn-border"></span><i class="far fa-arrow-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg></div>


@endsection
