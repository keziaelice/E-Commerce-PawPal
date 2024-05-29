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
    <link rel="stylesheet" href="{{asset('/css/plugins/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/plugins/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/plugins/jquery-ui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/plugins/nice-select.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/plugins/venobox.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" />

</head>

<body>

    <!-- Top Bar -->

    {{-- <div class="header-to-bar"> HELLO EVERYONE! 25% Off All Products </div> --}}

    <!-- Top Bar -->
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


    {{-- <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Products</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end --> --}}

    <!-- Product Details Area Start -->
    <div class="product-details-area pt-5 pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                    <!-- Swiper -->
                    <div class="swiper-container zoom-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide zoom-image-hover">
                                <img class="img-responsive m-auto" src="{{asset('storage/p0001.jpeg')}}"
                                    alt="">
                            </div>
                            <div class="swiper-slide zoom-image-hover">
                                <img class="img-responsive m-auto" src="{{asset('storage/p0002.jpg')}}"
                                    alt="">
                            </div>
                            {{-- <div class="swiper-slide zoom-image-hover">
                                <img class="img-responsive m-auto" src="{{asset('storage/p0001.jpeg')}}"
                                    alt="">
                            </div>
                            <div class="swiper-slide zoom-image-hover">
                                <img class="img-responsive m-auto" src="{{asset('storage/p0001.jpeg')}}"
                                    alt="">
                            </div> --}}
                        </div>
                    </div>
                    <div class="swiper-container zoom-thumbs mt-3 mb-3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="{{asset('storage/p0001.jpeg')}}"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="{{asset('storage/p0002.jpg')}}"
                                    alt="">
                            </div>
                            {{-- <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="{{asset('images/product-image/small-image/3.jpg')}}"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="{{asset('images/product-image/small-image/4.jpg')}}"
                                    alt="">
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-details-content quickview-content">
                        <h2>Pedigree Adult Lamb & Vegetables</h2>
                        <div class="pricing-meta">
                            <ul>
                                <li class="old-price not-cut">Rp73.000</li>
                            </ul>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="pro-details-size-info d-flex align-items-center">
                            <span>Size</span>
                            <div class="pro-details-size">
                                <ul>
                                    <li><a class="active-size gray" href="#">S</a></li>
                                    <li><a class="gray" href="#">M</a></li>
                                    <li><a class="gray" href="#">L</a></li>
                                    <li><a class="gray" href="#">XL</a></li>
                                </ul>
                            </div>
                        </div>
                        <p class="m-0">Pedigree Dewasa Nutrisi Lengkap untuk Anjing telah dirumuskan untuk memberikan anjing dewasa semua energi dan nutrisi yang mereka butuhkan untuk terus menjalani hidup sepenuh-penuhnya. Ini dikemas dengan vitamin, seng dan Omega 6 untuk membantu menjaga anjing dewasa tampak seperti pemenang terbaik-di-show, dan telah memimpin tingkat Vitamin E untuk menjaga sistem kekebalan tubuh muda di jantung. Bersama-sama dengan campuran khusus serat yang mempromosikan pencernaan yang sehat, dan kibbles perawatan mulut untuk membersihkan gigi.</p>
                        <div class="pro-details-quality">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                            </div>
                            <div class="pro-details-cart">
                                <button class="add-cart" href="#"> Add To
                                    Cart</button>
                            </div>
                            <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                <a href="wishlist"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-details-compare-wishlist pro-details-compare">
                                <a href="compare"><i class="pe-7s-refresh-2"></i></a>
                            </div>
                        </div>
                        <div class="pro-details-sku-info pro-details-same-style  d-flex">
                            <span>SKU: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#">P0001</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-details-categories-info pro-details-same-style d-flex">
                            <span>Categories: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#">Food.</a>
                                </li>
                                <li>
                                    <a href="#">Dog</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-details-social-info pro-details-same-style d-flex">
                            <span>Share: </span>
                            <ul class="d-flex">
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
            </div>
        </div>
    </div>


    {{-- <!-- product details description area start -->
    <div class="description-review-area pb-100px" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="description-review-wrapper">
                <div class="description-review-topbar nav">
                    <a data-bs-toggle="tab" href="#des-details2">Information</a>
                    <a class="active" data-bs-toggle="tab" href="#des-details1">Description</a>
                    <a data-bs-toggle="tab" href="#des-details3">Reviews (02)</a>
                </div>
                <div class="tab-content description-review-bottom">
                    <div id="des-details2" class="tab-pane">
                        <div class="product-anotherinfo-wrapper text-start">
                            <ul>
                                <li><span>Weight</span> 400 g</li>
                                <li><span>Dimensions</span>10 x 10 x 15 cm</li>
                                <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
                            </ul>
                        </div>
                    </div>
                    <div id="des-details1" class="tab-pane active">
                        <div class="product-description-wrapper">
                            <p>

                                Lorem ipsum dolor sit amet, consectetur adipisi elit, incididunt ut labore et. Ut enim
                                ad minim veniam, quis nostrud exercita ullamco laboris nisi ut aliquip ex ea commol
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste
                                natus error sit voluptatem accusantiulo doloremque laudantium, totam rem aperiam, eaque
                                ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                explicabo. Nemo enim ipsam voluptat quia voluptas sit aspernatur aut odit aut fugit, sed
                                quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
                                quia non numquam eius modi tempora incidunt ut labore

                            </p>
                        </div>
                    </div>
                    <div id="des-details3" class="tab-pane">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="review-wrapper">
                                    <div class="single-review">
                                        <div class="review-img">
                                            <img src="{{asset('images/review-image/1.png')}}" alt="" />
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>White Lewis</h4>
                                                    </div>
                                                    <div class="rating-product">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="review-left">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>
                                                    Vestibulum ante ipsum primis aucibus orci luctustrices posuere
                                                    cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper
                                                    euismod vehicula. Phasellus quam nisi, congue id nulla.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-review child-review">
                                        <div class="review-img">
                                            <img src="{{asset('images/review-image/2.png')}}" alt="" />
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>White Lewis</h4>
                                                    </div>
                                                    <div class="rating-product">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="review-left">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere
                                                    cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper
                                                    euismod vehicula.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="ratting-form-wrapper pl-50">
                                    <h3>Add a Review</h3>
                                    <div class="ratting-form">
                                        <form action="#">
                                            <div class="star-box">
                                                <span>Your rating:</span>
                                                <div class="rating-product">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="rating-form-style">
                                                        <input placeholder="Name" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="rating-form-style">
                                                        <input placeholder="Email" type="email" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="rating-form-style form-submit">
                                                        <textarea name="Your Review" placeholder="Message"></textarea>
                                                        <button class="btn btn-primary btn-hover-color-primary "
                                                            type="submit" value="Submit">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product details description area end --> --}}

    <!-- Related product Area Start -->
    <div class="related-product-area pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center mb-30px0px line-height-1">
                        <h2 class="title m-0">Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="new-product-slider swiper-container slider-nav-style-1 small-nav">
                <div class="new-product-wrapper swiper-wrapper">
                    <div class="new-product-item swiper-slide">
                        <!-- Single Prodect -->
                        <div class="product">
                            <div class="thumb">
                                <a href="product-detail" class="image">
                                    <img src="{{asset('storage/p0003.jpeg')}}" alt="Product" />
                                    <img class="hover-image" src="{{asset('storage/p0003.jpeg')}}"
                                        alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="new">New</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist" class="action wishlist" title="Wishlist"><i
                                            class="pe-7s-like"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview"
                                        title="Quick view" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                </div>
                                <button title="Add To Cart" class=" add-to-cart">Add
                                    To Cart</button>
                            </div>
                            <div class="content">
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 100%"></span>
                                    </span>
                                </span>
                                <h5 class="title"><a href="single-product">Royal Canin Golden Retriever Adult
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="new">Rp1.179.000</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="new-product-item swiper-slide">
                        <!-- Single Prodect -->
                        <div class="product">
                            <div class="thumb">
                                <a href="product-detail" class="image">
                                    <img src="{{asset('storage/p0004.jpg')}}" alt="Product" />
                                    <img class="hover-image" src="{{asset('storage/p0004.jpg')}}"
                                        alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="new">New</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist" class="action wishlist" title="Wishlist"><i
                                            class="pe-7s-like"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview"
                                        title="Quick view" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                </div>
                                <button title="Add To Cart" class=" add-to-cart">Add
                                    To Cart</button>
                            </div>
                            <div class="content">
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 80%"></span>
                                    </span>
                                </span>
                                <h5 class="title"><a href="single-product">Gnawlers Calcium Milk Bone Dental Snack</a>
                                </h5>
                                <span class="price">
                                    <span class="new">Rp25.000</span>
                                </span>
                            </div>
                        </div>
                        <!-- Single Prodect -->
                    </div>
                    <div class="new-product-item swiper-slide">
                        <!-- Single Prodect -->
                        <div class="product">
                            <div class="thumb">
                                <a href="product-detail" class="image">
                                    <img src="{{asset('storage/p0007.jpg')}}" alt="Product" />
                                    <img class="hover-image" src="{{asset('storage/p0007.jpg')}}"
                                        alt="Product" />
                                </a>
                                <div class="actions">
                                    <a href="wishlist" class="action wishlist" title="Wishlist"><i
                                            class="pe-7s-like"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview"
                                        title="Quick view" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                    {{-- <a href="compare" class="action compare" title="Compare"><i
                                            class="pe-7s-refresh-2"></i></a> --}}
                                </div>
                                <button title="Add To Cart" class=" add-to-cart">Add
                                    To Cart</button>
                            </div>
                            <div class="content">
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 90%"></span>
                                    </span>
                                </span>
                                <h5 class="title"><a href="single-product">Non-Toxic Rubber Chew Bone Toy</a></h5>
                                <span class="price">
                                    <span class="new">Rp32.000</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="new-product-item swiper-slide">
                        <!-- Single Prodect -->
                        <div class="product">
                            <div class="thumb">
                                <a href="product-detail" class="image">
                                    <img src="{{asset('storage/p0008.jpeg')}}" alt="Product" />
                                    <img class="hover-image" src="{{asset('storage/p0008.jpeg')}}"
                                        alt="Product" />
                                </a>
                                <div class="actions">
                                    <a href="wishlist" class="action wishlist" title="Wishlist"><i
                                            class="pe-7s-like"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview"
                                        title="Quick view" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                </div>
                                <button title="Add To Cart" class=" add-to-cart">Add
                                    To Cart</button>
                            </div>
                            <div class="content">
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 70%"></span>
                                    </span>
                                </span>
                                <h5 class="title"><a href="single-product">Tempat Tidur Anjing Soft Warm Dog Bed Grey</a></h5>
                                <span class="price">
                                    <span class="new">Rp64.900</span>
                                </span>
                            </div>
                        </div>
                        <!-- Single Prodect -->
                    </div>
                    <div class="new-product-item swiper-slide">
                        <!-- Single Prodect -->
                        <div class="product">
                            <div class="thumb">
                                <a href="single-product" class="image">
                                    <img src="{{asset('images/product-image/3.jpg')}}" alt="Product" />
                                    <img class="hover-image" src="{{asset('images/product-image/4.jpg')}}"
                                        alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="sale">-10%</span>
                                    <span class="new">New</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist" class="action wishlist" title="Wishlist"><i
                                            class="pe-7s-like"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview"
                                        title="Quick view" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                    <a href="compare" class="action compare" title="Compare"><i
                                            class="pe-7s-refresh-2"></i></a>
                                </div>
                                <button title="Add To Cart" class=" add-to-cart">Add
                                    To Cart</button>
                            </div>
                            <div class="content">
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 80%"></span>
                                    </span>
                                    <span class="rating-num">( 4 Review )</span>
                                </span>
                                <h5 class="title"><a href="single-product">Ardene Microfiber
                                        Tights</a>
                                </h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                    <span class="old">$48.50</span>
                                </span>
                            </div>
                        </div>
                        <!-- Single Prodect -->
                    </div>
                    <div class="new-product-item swiper-slide">
                        <!-- Single Prodect -->
                        <div class="product">
                            <div class="thumb">
                                <a href="single-product" class="image">
                                    <img src="{{asset('images/product-image/1.jpg')}}" alt="Product" />
                                    <img class="hover-image" src="{{asset('images/product-image/2.jpg')}}"
                                        alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="new">New</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist" class="action wishlist" title="Wishlist"><i
                                            class="pe-7s-like"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview"
                                        title="Quick view" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                    <a href="compare" class="action compare" title="Compare"><i
                                            class="pe-7s-refresh-2"></i></a>
                                </div>
                                <button title="Add To Cart" class=" add-to-cart">Add
                                    To Cart</button>
                            </div>
                            <div class="content">
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">( 5 Review )</span>
                                </span>
                                <h5 class="title"><a href="single-product">Women's Elizabeth
                                        Coat
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                        </div>
                        <!-- Single Prodect -->
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Related product Area End -->



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

     <!-- Modal -->
     <div class="modal modal-2 fade" id="exampleModal" tab="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container zoom-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{asset('storage/p0001.jpeg')}}" alt="">
                                    </div>
                                    {{-- <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{asset('images/product-image/zoom-image/2.jpg')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{asset('images/product-image/zoom-image/3.jpg')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{asset('images/product-image/zoom-image/4.jpg')}}" alt="">
                                    </div> --}}
                                </div>
                            </div>
                            <div class="swiper-container zoom-thumbs mt-3 mb-3">
                                <div class="swiper-wrapper">
                                    {{-- <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{asset('images/product-image/small-image/1.jpg')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{asset('images/product-image/small-image/2.jpg')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{asset('images/product-image/small-image/3.jpg')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{asset('images/product-image/small-image/4.jpg')}}" alt="">
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-details-content quickview-content">
                                <h2>Pedigree Adult Lamb & Vegetables</h2>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">Rp73.000</li>
                                    </ul>
                                </div>
                                <p class="mt-30px mb-0">Pedigree Dewasa Nutrisi Lengkap untuk Anjing telah dirumuskan untuk memberikan anjing dewasa semua energi dan nutrisi yang mereka butuhkan untuk terus menjalani hidup sepenuh-penuhnya. Ini dikemas dengan vitamin, seng dan Omega 6 untuk membantu menjaga anjing dewasa tampak seperti pemenang terbaik-di-show, dan telah memimpin tingkat Vitamin E untuk menjaga sistem kekebalan tubuh muda di jantung. Bersama-sama dengan campuran khusus serat yang mempromosikan pencernaan yang sehat, dan kibbles perawatan mulut untuk membersihkan gigi.</p>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                    </div>
                                    <div class="pro-details-cart">
                                        <button class="add-cart" href="#"> Add To
                                            Cart</button>
                                    </div>
                                    <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                        <a href="wishlist"><i class="pe-7s-like"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details-sku-info pro-details-same-style  d-flex">
                                    <span>SKU: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a>P0001</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex">
                                    <span>Categories: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a>Food.</a>
                                        </li>
                                        <li>
                                            <a>Dog</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-social-info pro-details-same-style d-flex">
                                    <span>Share: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://x.com/"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        {{-- <li>
                                            <a href="#"><i class="fa fa-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-youtube"></i></a>
                                        </li> --}}
                                        <li>
                                            <a href="https://instagram.com/"><i class="fa fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
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
