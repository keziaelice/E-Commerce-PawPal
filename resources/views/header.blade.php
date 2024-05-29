<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="/, follow" />
    <title>PawPal</title>
    <meta name="description" content="Jesco - Fashoin eCommerce HTML Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon/favicon.ico')}}" type="image/png">

    <!-- vendor css (Icon Font) -->
    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/pe-icon-7-stroke.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/font.awesome.css')}}" />

    <!-- plugins css (All Plugins Files) -->
    <link rel="stylesheet" href="{{asset('css/plugins/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('css/plugins/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/plugins/jquery-ui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/plugins/nice-select.css')}}" />
    <link rel="stylesheet" href="{{asset('css/plugins/venobox.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

</head>

<body>

<!-- Header Area Start -->
<header>
    <div class="header-main sticky-nav">
        <div class="container position-relative">
            <div class="row">
                <div class="col-auto align-self-center">
                    <div class="header-logo">
                        <a href="/"><img src="{{asset('images/logo/logo.png')}}" alt="Site Logo" /></a>
                    </div>
                </div>
                <div class="col align-self-center d-none d-lg-block">
                    <div class="main-menu">
                        <ul>
                            <li class="dropdown"><a href="/">Home</a>
                            </li>
                            <li class="dropdown position-static"><a href="#">Shop <i class="pe-7s-angle-down"></i></a>
                                <ul class="mega-menu d-block">
                                    <li class="d-flex">
                                        <ul class="d-block">
                                            <li class="title"><a href="shop">Dog</a></li>
                                            <li><a href="shop">Food</a></li>
                                            <li><a href="shop">Treats</a></li>
                                            <li><a href="shop">Toys</a></li>
                                            <li><a href="shop">Supplies</a></li>
                                        </ul>
                                        <ul class="d-block">
                                            <li class="title"><a href="shop">Cat</a></li>
                                            <li><a href="shop">Food</a></li>
                                            <li><a href="shop">Treats</a></li>
                                            <li><a href="shop">Toys</a></li>
                                            <li><a href="shop">Supplies</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="menu-banner w-100">
                                            <li>
                                                <a class="p-0" href="shop"><img class="img-responsive w-100"
                                                        src="{{asset('images/banner/7.png')}}" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="p-0" href="shop"><img class="img-responsive w-100"
                                                        src="{{asset('images/banner/8.png')}}" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="p-0" href="shop"><img class="img-responsive w-100"
                                                        src="{{asset('images/banner/9.png')}}" alt=""></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="about">About us</a></li>
                            <li><a href="contact">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Header Action Start -->
                <div class="col col-lg-auto align-self-center pl-0">
                    <div class="header-actions">
                        <a href="login" class="header-action-btn login-btn" data-bs-toggle="modal"
                            data-bs-target="#loginActive">Sign In</a>
                        <!-- Single Wedge Start -->
                        <a href="#" class="header-action-btn" data-bs-toggle="modal" data-bs-target="#searchActive">
                            <i class="pe-7s-search"></i>
                        </a>
                        <!-- Single Wedge End -->
                        <!-- Single Wedge Start -->
                        {{-- <a href="#offcanvas-wishlist" --}}
                        <a href="wishlist"
                            {{-- class="header-action-btn offcanvas-toggle"> --}}
                            class="header-action-btn">
                            <i class="pe-7s-like"></i>
                        </a>
                        <!-- Single Wedge End -->
                        {{-- <a href="#offcanvas-cart" --}}
                        <a href="cart"
                            {{-- class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0"> --}}
                            class="header-action-btn header-action-btn-cart pr-0">
                            <i class="pe-7s-shopbag"></i>
                        </a>
                        <!-- Single Wedge Start: Account Icon -->
                        <a href="my-account" class="header-action-btn">
                            <i class="pe-7s-user"></i>
                        </a>
                        <!-- Single Wedge End -->
                        <a href="#offcanvas-mobile-menu"
                            class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                            <i class="pe-7s-menu"></i>
                        </a>
                    </div>
                    <!-- Header Action End -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->

<!-- OffCanvas Wishlist Start -->
<div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
    <div class="inner">
        <div class="head">
            <span class="title">Wishlist</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list">
                <li>
                    <a href="product-detail" class="image"><img src="{{asset('images/product-image/1.jpg')}}"
                            alt="Cart product Image"></a>
                    <div class="content">
                        <a href="product-detail" class="title">Women's Elizabeth Coat</a>
                        <span class="quantity-price">1 x <span class="amount">$21.86</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="product-detail" class="image"><img src="{{asset('images/product-image/2.jpg')}}"
                            alt="Cart product Image"></a>
                    <div class="content">
                        <a href="product-detail" class="title">Long sleeve knee length</a>
                        <span class="quantity-price">1 x <span class="amount">$13.28</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="product-detail" class="image"><img src="{{asset('images/product-image/3.jpg')}}"
                            alt="Cart product Image"></a>
                    <div class="content">
                        <a href="product-detail" class="title">Cool Man Wearing Leather</a>
                        <span class="quantity-price">1 x <span class="amount">$17.34</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="foot">
            <div class="buttons">
                <a href="wishlist" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
            </div>
        </div>
    </div>
</div>
<!-- OffCanvas Wishlist End -->
<!-- OffCanvas Cart Start -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart">
    <div class="inner">
        <div class="head">
            <span class="title">Cart</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list">
                <li>
                    <a href="product-detail" class="image"><img src="{{asset('images/product-image/1.jpg')}}"
                            alt="Cart product Image"></a>
                    <div class="content">
                        <a href="product-detail" class="title">Women's Elizabeth Coat</a>
                        <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="product-detail" class="image"><img src="{{asset('images/product-image/2.jpg')}}"
                            alt="Cart product Image"></a>
                    <div class="content">
                        <a href="product-detail" class="title">Long sleeve knee length</a>
                        <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="product-detail" class="image"><img src="{{asset('images/product-image/3.jpg')}}"
                            alt="Cart product Image"></a>
                    <div class="content">
                        <a href="product-detail" class="title">Cool Man Wearing Leather</a>
                        <span class="quantity-price">1 x <span class="amount">$37.34</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="foot">
            <div class="buttons mt-30px">
                <a href="cart" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                <a href="checkout" class="btn btn-outline-dark current-btn">checkout</a>
            </div>
        </div>
    </div>
</div>
<!-- OffCanvas Cart End -->

<!-- OffCanvas Menu Start -->
<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
    <button class="offcanvas-close"></button>

    <div class="inner customScroll">

        <div class="offcanvas-menu mb-4">
            <ul>
                <li><a href="/"><span class="menu-text">Home</span></a>
                </li>
                <li><a href="/shop"><span class="menu-text">Shop</span></a>
                </li>
                <li><a href="about">About Us</a></li>
                <li><a href="contact">Contact Us</a></li>
            </ul>
        </div>
        <!-- OffCanvas Menu End -->
        <!-- <div class="offcanvas-social mt-auto">
            <ul>
                <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
            </ul>
        </div> -->
    </div>
</div>
<!-- OffCanvas Menu End -->

</body>

</html>
