<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="/, follow" />
    <title>Jesco - Fashoin eCommerce HTML Template</title>
    <meta name="description" content="Jesco - Fashoin eCommerce HTML Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon/favicon.ico')}}" type="image/png">

    <!-- vendor css (Icon Font) -->
    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/pe-icon-7-stroke.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/vendor/font.awesome.css')}}" />

    <!-- plugins css (All Plugins Files) -->
    <link rel="stylesheet" href="{{asset('css/plugins/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('css/plugins/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/plugins/jquery-ui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/plugins/nice-select.css')}}" />
    <link rel="stylesheet" href="{{asset('css/plugins/venobox.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

</head>

<body>
    <!-- resources/views/home.blade.php -->
    @extends('app')

    @section('title', 'Home')

    @section('content')

     <div class="offcanvas-overlay"></div>

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
                        <a href="single-product" class="image"><img src="{{asset('images/product-image/1.jpg')}}"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product" class="title">Women's Elizabeth Coat</a>
                            <span class="quantity-price">1 x <span class="amount">$21.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product" class="image"><img src="{{asset('images/product-image/2.jpg')}}"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product" class="title">Long sleeve knee length</a>
                            <span class="quantity-price">1 x <span class="amount">$13.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product" class="image"><img src="{{asset('images/product-image/3.jpg')}}"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product" class="title">Cool Man Wearing Leather</a>
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
                        <a href="single-product" class="image"><img src="{{asset('images/product-image/1.jpg')}}"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product" class="title">Women's Elizabeth Coat</a>
                            <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product" class="image"><img src="{{asset('images/product-image/2.jpg')}}"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product" class="title">Long sleeve knee length</a>
                            <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product" class="image"><img src="{{asset('images/product-image/3.jpg')}}"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product" class="title">Cool Man Wearing Leather</a>
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
                    <li><a href="#"><span class="menu-text">Home</span></a>
                        <ul class="sub-menu">
                            <li><a href="/"><span class="menu-text">Home 1</span></a></li>
                            <li><a href="/-2"><span class="menu-text">Home 2</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Page</span></a>
                                <ul class="sub-menu">
                                                <li class="title"><a href="#">Shop Page</a></li>
                                                <li><a href="shop-3-column">Shop 3 Column</a></li>
                                                <li><a href="shop-4-column">Shop 4 Column</a></li>
                                                <li><a href="shop-left-sidebar">Shop Left Sidebar</a></li>
                                                <li><a href="shop-right-sidebar">Shop Right Sidebar</a></li>
                                                <li><a href="shop-list-left-sidebar">Shop List Left Sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar">Shop List Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">product Details Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product">Product Single</a></li>
                                    <li><a href="product-detail">Product Variable</a></li>
                                    <li><a href="single-product-affiliate">Product Affiliate</a></li>
                                    <li><a href="single-product-group">Product Group</a></li>
                                    <li><a href="single-product-tabstyle-2">Product Tab 2</a></li>
                                    <li><a href="single-product-tabstyle-3">Product Tab 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Single Product Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product-slider">Product Slider</a></li>
                                    <li><a href="single-product-gallery-left">Product Gallery Left</a>
                                    </li>
                                    <li><a href="single-product-gallery-right">Product Gallery Right</a>
                                    </li>
                                    <li><a href="single-product-sticky-left">Product Sticky Left</a></li>
                                    <li><a href="single-product-sticky-right">Product Sticky Right</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Other Shop Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="cart">Cart Page</a></li>
                                    <li><a href="checkout">Checkout Page</a></li>
                                    <li><a href="compare">Compare Page</a></li>
                                    <li><a href="wishlist">Wishlist Page</a></li>
                                    <li><a href="my-account">Account Page</a></li>
                                    <li><a href="login">Login & Register Page</a></li>
                                    <li><a href="empty-cart">Empty Cart Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="404">404 Page</a></li>
                                    <li><a href="privacy-policy">Privacy Policy</a></li>
                                    <li><a href="faq">Faq Page</a></li>
                                    <li><a href="coming-soon">Coming Soon Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="blog-grid">Blog Grid Page</a></li>
                            <li><a href="blog-grid-left-sidebar">Grid Left Sidebar</a></li>
                            <li><a href="blog-grid-right-sidebar">Grid Right Sidebar</a></li>
                            <li><a href="blog-single">Blog Single Page</a></li>
                            <li><a href="blog-single-left-sidebar">Single Left Sidebar</a></li>
                            <li><a href="blog-single-right-sidebar">Single Right Sidbar</a>
                        </ul>
                    </li>
                    <li><a href="about">About Us</a></li>
                    <li><a href="contact">Contact Us</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->
            <div class="offcanvas-social mt-auto">
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
            </div>
        </div>
    </div>
    <!-- OffCanvas Menu End -->

    <!-- About Intro Area start-->
    <div class="about-intro-area">
        <div class="container position-relative h-100 d-flex align-items-center">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-intro-content">
                        <h2 class="title">About Us</h2>
                        <p>We are a group of five dedicated students from the Information Systems for Business (ISB) program in Universitas Ciputra Surabaya, currently engaged in our Advanced Learning Project (ALP) for the Web Development course. Our team is composed of enthusiastic individuals who share a passion for technology and innovation. This project is not just an academic requirement but a stepping stone towards our aspirations in the tech industry.</p>
                    </div>
                </div>
            </div>
            <div class="intro-left">
                <img src="{{asset('images/about-image/intro-left.png')}}" alt="" class="intro-left-image">
            </div>
            <div class="intro-right">
                <img src="{{asset('images/about-image/intro-right.png')}}" alt="" class="intro-right-image">
            </div>
        </div>
    </div>

    <!-- About Intro Area End-->

    {{-- <!-- Service Area Start -->

    <div class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="service-left align-self-center align-items-center">
                        <img src="{{asset('images/about-image/srevice-left-img.png')}}" alt="" class="service-left-image">
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="service-right-content align-self-center align-items-center">
                        <span class="sami-title">100% Guaranteed Pure Cotton</span>
                        <h2 class="title">Best Products Here
                            Every Day</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius modjior tem incididunt
                            ut labore et dolore magna aliqua.</p>
                        <a href="shop-left-sidebar" class="btn btn-primary service-btn"> Shop Now <i
                                class="fa fa-shopping-basket ml-10px" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Area End --> --}}

    <!-- Team Area Start -->

    <div class="team-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center mb-30px0px">
                        <h2 class="title line-height-1">#ourteam</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-lm-30px">
                    <!-- Single Team -->
                    <div class="team-wrapper">
                        <div class="team-image overflow-hidden">
                            <img src="{{asset('images/team/1.png')}}" alt="">
                        </div>
                        <div class="team-content">
                            <h6 class="title">Angel Aprilia</h6>
                            {{-- <span class="sub-title">Our Team</span> --}}
                        </div>
                        <ul class="team-social d-flex pt-3">
                            <li><a href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://x.com"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://instagram.com/angelzyen"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Single Team -->
                </div>
                <div class="col-md-4 mb-lm-30px">
                    <!-- Single Team -->
                    <div class="team-wrapper">
                        <div class="team-image overflow-hidden">
                            <img src="{{asset('images/team/2.png')}}" alt="">
                        </div>
                        <div class="team-content">
                            <h6 class="title">Vincentia Jennifer</h6>
                            {{-- <span class="sub-title">Our Team</span> --}}
                        </div>
                        <ul class="team-social d-flex pt-3">
                            <li><a href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://x.com"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://instagram.com/jenniferevelynnn"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Single Team -->
                </div>
                <div class="col-md-4 pb-5">
                    <!-- Single Team -->
                    <div class="team-wrapper">
                        <div class="team-image overflow-hidden">
                            <img src="{{asset('images/team/3.png')}}" alt="">
                        </div>
                        <div class="team-content">
                            <h6 class="title">Kezia Elice</h6>
                            {{-- <span class="sub-title">Our Team</span> --}}
                        </div>
                        <ul class="team-social d-flex pt-3">
                            <li><a href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://x.com"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://instagram.com/kzialic"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Single Team -->
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-4 mb-lm-30px">
                    <!-- Single Team -->
                    <div class="team-wrapper">
                        <div class="team-image overflow-hidden">
                            <img src="{{asset('images/team/4.png')}}" alt="">
                        </div>
                        <div class="team-content">
                            <h6 class="title">Valencia Melita</h6>
                            {{-- <span class="sub-title">Our Team</span> --}}
                        </div>
                        <ul class="team-social d-flex pt-3">
                            <li><a href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://x.com"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://instagram.com/valenciamelitaa"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Single Team -->
                </div>
                <div class="col-md-4 mb-lm-30px">
                    <!-- Single Team -->
                    <div class="team-wrapper">
                        <div class="team-image overflow-hidden">
                            <img src="{{asset('images/team/5.png')}}" alt="">
                        </div>
                        <div class="team-content">
                            <h6 class="title">Ivan Indargo</h6>
                            {{-- <span class="sub-title">Our Team</span> --}}
                        </div>
                        <ul class="team-social d-flex pt-3">
                            <li><a href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://x.com"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://instagram.com/ivanindargo"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Single Team -->
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
    </div>

    <!-- Team Area End -->

    <!-- Feature Area Srart -->
    <div class="feature-area pb-100px pt-100px bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- single item -->
                    <div class="single-feature border-0">
                        <div class="feature-icon">
                            <img src="{{asset('images/icons/1.png')}}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Free Shipping</h4>
                            <span class="sub-title">Capped at $39 per order</span>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="col-lg-4 col-md-6 mb-md-30px mb-lm-30px mt-lm-30px">
                    <div class="single-feature border-0">
                        <div class="feature-icon">
                            <img src="{{asset('images/icons/2.png')}}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Card Payments</h4>
                            <span class="sub-title">12 Months Installments</span>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="col-lg-4 col-md-6 ">
                    <div class="single-feature border-0">
                        <div class="feature-icon">
                            <img src="{{asset('images/icons/3.png')}}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Easy Returns</h4>
                            <span class="sub-title">Shop With Confidence</span>
                        </div>
                    </div>
                    <!-- single item -->
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Area End -->

    {{-- <!-- Testimonial Area Start -->
    <div class="testimonial-area pb-40px pt-100px ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center mb-0">
                        <h2 class="title line-height-1">#testimonials</h2>
                    </div>
                </div>
            </div>
            <!-- Slider Start -->
            <div class="testimonial-wrapper swiper-container">
                <div class="swiper-wrapper">
                    <!-- Slider Single Item -->
                    <div class="swiper-slide">
                        <div class="testi-inner">
                            <div class="reating-wrap">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="testi-content">
                                <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                                </p>
                            </div>
                            <div class="testi-author">
                                <div class="author-img">
                                    <img src="{{asset('images/testimonial-image/1.png')}}" alt="">
                                </div>
                                <div class="author-name">
                                    <h4 class="name">Daisy Morgan</h4>
                                    <span class="title">Happy Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Single Item -->
                    <div class="swiper-slide">
                        <div class="testi-inner">
                            <div class="reating-wrap">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="testi-content">
                                <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                                </p>
                            </div>
                            <div class="testi-author">
                                <div class="author-img">
                                    <img src="{{asset('images/testimonial-image/2.png')}}" alt="">
                                </div>
                                <div class="author-name">
                                    <h4 class="name">Leah Chatman</h4>
                                    <span class="title">Happy Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Single Item -->
                    <div class="swiper-slide">
                        <div class="testi-inner">
                            <div class="reating-wrap">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="testi-content">
                                <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                                </p>
                            </div>
                            <div class="testi-author">
                                <div class="author-img">
                                    <img src="{{asset('images/testimonial-image/3.png')}}" alt="">
                                </div>
                                <div class="author-name">
                                    <h4 class="name">Reyna Chung</h4>
                                    <span class="title">Happy Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Single Item -->
                    <div class="swiper-slide">
                        <div class="testi-inner">
                            <div class="reating-wrap">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="testi-content">
                                <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                                </p>
                            </div>
                            <div class="testi-author">
                                <div class="author-img">
                                    <img src="{{asset('images/testimonial-image/1.png')}}" alt="">
                                </div>
                                <div class="author-name">
                                    <h4 class="name">Daisy Morgan</h4>
                                    <span class="title">Happy Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Single Item -->
                    <div class="swiper-slide">
                        <div class="testi-inner">
                            <div class="reating-wrap">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="testi-content">
                                <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                                </p>
                            </div>
                            <div class="testi-author">
                                <div class="author-img">
                                    <img src="{{asset('images/testimonial-image/2.png')}}" alt="">
                                </div>
                                <div class="author-name">
                                    <h4 class="name">Reyna Chung</h4>
                                    <span class="title">Happy Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Single Item -->
                </div>
            </div>
            <!-- Slider Start -->
        </div>
    </div>
    <!-- Testimonial Area End --> --}}

    <!-- Brand area start -->
    <div class="brand-area pb-5">
        <div class="container">
            <div class="brand-slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide brand-slider-item text-center">
                        <a href="#"><img class=" img-fluid" src="{{asset('storage/LOGO-UC-PANJANG-FIX-SEP-2021-01.png')}}" alt="" /></a>
                    </div>
                    <div class="swiper-slide brand-slider-item text-center">
                        <a href="#"><img class=" img-fluid" src="{{asset('storage/LOGO-UC-PANJANG-FIX-SEP-2021-01.png')}}" alt="" /></a>
                    </div>
                    <div class="swiper-slide brand-slider-item text-center">
                        <a href="#"><img class=" img-fluid" src="{{asset('storage/LOGO-UC-PANJANG-FIX-SEP-2021-01.png')}}" alt="" /></a>
                    </div>
                    <div class="swiper-slide brand-slider-item text-center">
                        <a href="#"><img class=" img-fluid" src="{{asset('storage/LOGO-UC-PANJANG-FIX-SEP-2021-01.png')}}" alt="" /></a>
                    </div>
                    <div class="swiper-slide brand-slider-item text-center">
                        <a href="#"><img class=" img-fluid" src="{{asset('storage/LOGO-UC-PANJANG-FIX-SEP-2021-01.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand area end -->

    <!-- Search Modal Start -->
    <div class="modal popup-search-style" id="searchActive">
        <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        <div class="modal-overlay">
            <div class="modal-dialog p-0" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Search Your Product</h2>
                        <form class="navbar-form position-relative" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search here...">
                            </div>
                            <button type="submit" class="submit-btn"><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    <!-- Login Modal Start -->
    <div class="modal popup-login-style" id="loginActive">
        <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        <div class="modal-overlay">
            <div class="modal-dialog p-0" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="login-content">
                            <h2>Log in</h2>
                            <h3>Log in your account</h3>
                            <form action="#">
                                <input type="text" placeholder="Username">
                                <input type="password" placeholder="Password">
                                <div class="remember-forget-wrap">
                                    <div class="remember-wrap">
                                        <input type="checkbox">
                                        <p>Remember</p>
                                        <span class="checkmark"></span>
                                    </div>
                                    <div class="forget-wrap">
                                        <a href="#">Forgot your password?</a>
                                    </div>
                                </div>
                                <button type="button">Log in</button>
                                <div class="member-register">
                                    <p> Not a member? <a href="login"> Register now</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Modal End -->
    @endsection

    <!-- Vendor JS -->
    <script src="{{asset('js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
    <script src="{{asset('js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('js/plugins/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/plugins/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/plugins/countdown.js')}}"></script>
    <script src="{{asset('js/plugins/scrollup.js')}}"></script>
    <script src="{{asset('js/plugins/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('js/plugins/venobox.min.js')}}"></script>
    <script src="{{asset('js/plugins/ajax-mail.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
