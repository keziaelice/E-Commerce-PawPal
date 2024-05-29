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
    <!-- resources/views/home.blade.php -->
    @extends('app')

    @section('title', 'Home')

    @section('content')
     <div class="offcanvas-overlay"></div>

    {{-- <!-- OffCanvas Wishlist Start -->
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
    <!-- OffCanvas Cart End --> --}}

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
                    <h2 class="breadcrumb-title">Shop</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Account</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end --> --}}

    <!-- account area start -->
    <div class="account-dashboard pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#dashboard" data-bs-toggle="tab" class="nav-link active">Dashboard</a></li>
                            <li> <a href="#orders" data-bs-toggle="tab" class="nav-link">Orders</a></li>
                            <li><a href="#address" data-bs-toggle="tab" class="nav-link">Addresses</a></li>
                            <li><a href="#account-details" data-bs-toggle="tab" class="nav-link">Account details</a>
                            </li>
                            <li><a href="login" class="nav-link">logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                        <div class="tab-pane fade show active" id="dashboard">
                            <h4>Dashboard </h4>
                            <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent
                                    orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a
                                    href="#">Edit your password and account details.</a></p>
                        </div>
                        <div class="tab-pane fade" id="orders">
                            <h4>Orders</h4>
                            <div class="table_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>May 9, 2024</td>
                                            <td><span class="success">Completed</span></td>
                                            <td>Rp73.000 for 1 item </td>
                                            <td><a href="cart" class="view">view</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>May 10, 2024</td>
                                            <td>Processing</td>
                                            <td>Rp1.262.900 for 3 items </td>
                                            <td><a href="cart" class="view">view</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane" id="address">
                            <p>The following addresses will be used on the checkout page by default.</p>
                            <h5 class="billing-address">Billing address</h5>
                            <a href="#" class="view">Edit</a>
                            <p class="mb-2"><strong>Michael M Kurniawan</strong></p>
                            <address>
                                <span class="mb-1 d-inline-block"><strong>City:</strong> Surabaya</span>,
                                <br>
                                <span class="mb-1 d-inline-block"><strong>State:</strong> Jawa Timur</span>,
                                <br>
                                <span class="mb-1 d-inline-block"><strong>ZIP:</strong> 60219</span>,
                                <br>
                                <span><strong>Country:</strong> Indonesia</span>
                            </address>
                        </div>
                        <div class="tab-pane fade" id="account-details">
                            <h3>Account details </h3>
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">
                                        <form action="#">
                                            <p>Already have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#loginActive">Log in instead!</a></p>
                                            <div class="input-radio">
                                                <span class="custom-radio"><input type="radio" value="1"
                                                        name="id_gender"> Mr.</span>
                                                <span class="custom-radio"><input type="radio" value="1"
                                                        name="id_gender"> Mrs.</span>
                                            </div> <br>
                                            <div class="default-form-box mb-20">
                                                <label>First Name</label>
                                                <input type="text" name="first-name">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Last Name</label>
                                                <input type="text" name="last-name">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Email</label>
                                                <input type="text" name="email-name">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Password</label>
                                                <input type="password" name="user-password">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Birthdate</label>
                                                <input type="date" name="birthday">
                                            </div>
                                            <span class="example">
                                                (E.g.: 05/31/1970)
                                            </span>
                                            <br>
                                            <label class="checkbox-default" for="offer">
                                                <input type="checkbox" id="offer">
                                                <span>Receive offers from our partners</span>
                                            </label>
                                            <br>
                                            <label class="checkbox-default checkbox-default-more-text" for="newsletter">
                                                <input type="checkbox" id="newsletter">
                                                <span>Sign up for our newsletter<br><em>You may unsubscribe at any
                                                        moment. For that purpose, please find our contact info in the
                                                        legal notice.</em></span>
                                            </label>
                                            <div class="save_button mt-3">
                                                <button class="btn"
                                                    type="submit">Save</button>
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
    <!-- account area start -->

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
