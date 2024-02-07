<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from htmldemo.net/hono/hono/shop-full-width.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Oct 2022 11:24:24 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Earrings</title>

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="assets/images/logo/logo.png" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <!-- Vendor CSS -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/ionicons.css">
    <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css"> -->

    <!-- Plugin CSS -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/venobox.min.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.lineProgressbar.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.min.css"> -->

    <!-- Main CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

</head>

<body>
    <!-- Start Header Area -->
    <?php
		include ('header.php');
	?>
    <!-- Start Header Area -->

    <!-- Start Mobile Header -->
    <div class="mobile-header mobile-header-bg-color--golden section-fluid d-lg-block d-xl-none">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-between">
                    <!-- Start Mobile Left Side -->
                    <div class="mobile-header-left">
                        <ul class="mobile-menu-logo">
                            <li>
                                <a href="index.html">
                                    <div class="logo">
                                        <img src="assets/images/logo/logo_black.png" alt="">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Mobile Left Side -->

                    <!-- Start Mobile Right Side -->
                    <div class="mobile-right-side">
                        <ul class="header-action-link action-color--black action-hover-color--golden">
                            <li>
                                <a href="#search">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#offcanvas-wishlish" class="offcanvas-toggle">
                                    <i class="icon-heart"></i>
                                    <span class="item-count">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                                    <i class="icon-bag"></i>
                                    <span class="item-count">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="#mobile-menu-offcanvas" class="offcanvas-toggle offside-menu">
                                    <i class="icon-menu"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Mobile Right Side -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Mobile Header -->

    <!--  Start Offcanvas Mobile Menu Section -->
    <div id="mobile-menu-offcanvas" class="offcanvas offcanvas-rightside offcanvas-mobile-menu-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-end">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- End Offcanvas Header -->
        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-mobile-menu-wrapper">
            <!-- Start Mobile Menu  -->
            <div class="mobile-menu-bottom">
                <!-- Start Mobile Menu Nav -->
                <div class="offcanvas-menu">
                    <ul>
                        <li>
                            <a href="#"><span>Home</span></a>
                            <ul class="mobile-sub-menu">
                                <li><a href="index.html">Home 1</a></li>
                                <li><a href="index-2.html">Home 2</a></li>
                                <li><a href="index-3.html">Home 3</a></li>
                                <li><a href="index-4.html">Home 4</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Shop</span></a>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Shop Layout</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="shop-grid-sidebar-left.html">Grid Left Sidebar</a></li>
                                        <li><a href="shop-grid-sidebar-right.html">Grid Right Sidebar</a></li>
                                        <li><a href="shop-full-width.html">Full Width</a></li>
                                        <li><a href="shop-list-sidebar-left.html">List Left Sidebar</a></li>
                                        <li><a href="shop-list-sidebar-right.html">List Right Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Shop Pages</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="empty-cart.html">Empty Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Product Single</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="product-details-default.html">Product Default</a></li>
                                        <li><a href="product-details-variable.html">Product Variable</a></li>
                                        <li><a href="product-details-affiliate.html">Product Referral</a></li>
                                        <li><a href="product-details-group.html">Product Group</a></li>
                                        <li><a href="product-details-single-slide.html">Product Slider</a></li>
                                        <li><a href="product-details-tab-left.html">Product Tab Left</a></li>
                                        <li><a href="product-details-tab-right.html">Product Tab Right</a></li>
                                        <li><a href="product-details-gallery-left.html">Product Gallery Left</a></li>
                                        <li><a href="product-details-gallery-right.html">Product Gallery Right</a></li>
                                        <li><a href="product-details-sticky-left.html">Product Sticky Left</a></li>
                                        <li><a href="product-details-sticky-right.html">Product Sticky right</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Blogs</span></a>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Blog Grid</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="blog-grid-sidebar-left.html">Blog Grid Sidebar left</a></li>
                                        <li><a href="blog-grid-sidebar-right.html">Blog Grid Sidebar Right</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog-full-width.html">Blog Full Width</a>
                                </li>
                                <li>
                                    <a href="#">Blog List</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="blog-list-sidebar-left.html">Blog List Sidebar left</a></li>
                                        <li><a href="blog-list-sidebar-right.html">Blog List Sidebar Right</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog Single</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="blog-single-sidebar-left.html">Blog Single Sidebar left</a></li>
                                        <li><a href="blog-single-sidebar-right.html">Blog Single Sidebar Right</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Pages</span></a>
                            <ul class="mobile-sub-menu">
                                <li><a href="faq.html">Frequently Questions</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div> <!-- End Mobile Menu Nav -->
            </div> <!-- End Mobile Menu -->

            <!-- Start Mobile contact Info -->
            <div class="mobile-contact-info">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/logo/logo_white.png" alt=""></a>
                </div>

                <address class="address">
                    <span>Address: Your address goes here.</span>
                    <span>Call Us: 0123456789, 0123456789</span>
                    <span>Email: demo@example.com</span>
                </address>

                <ul class="social-link">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>

                <ul class="user-link">
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                </ul>
            </div>
            <!-- End Mobile contact Info -->

        </div> <!-- End Offcanvas Mobile Menu Wrapper -->
    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!-- Start Offcanvas Mobile Menu Section -->
    <div id="offcanvas-about" class="offcanvas offcanvas-rightside offcanvas-mobile-about-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-end">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- End Offcanvas Header -->
        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <!-- Start Mobile contact Info -->
        <div class="mobile-contact-info">
            <div class="logo">
                <a href="index.html"><img src="assets/images/logo/logo_white.png" alt=""></a>
            </div>

            <address class="address">
                <span>Address: Your address goes here.</span>
                <span>Call Us: 0123456789, 0123456789</span>
                <span>Email: demo@example.com</span>
            </address>

            <ul class="social-link">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>

            <ul class="user-link">
                <li><a href="wishlist.html">Wishlist</a></li>
                <li><a href="cart.html">Cart</a></li>
                <li><a href="checkout.html">Checkout</a></li>
            </ul>
        </div>
        <!-- End Mobile contact Info -->
    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!-- Start Offcanvas Addcart Section -->
    <div id="offcanvas-add-cart" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-end">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- End Offcanvas Header -->

        <!-- Start  Offcanvas Addcart Wrapper -->
        <div class="offcanvas-add-cart-wrapper">
            <h4 class="offcanvas-title">Shopping Cart</h4>
            <ul class="offcanvas-cart">
                <li class="offcanvas-cart-item-single">
                    <div class="offcanvas-cart-item-block">
                        <a href="#" class="offcanvas-cart-item-image-link">
                            <img src="assets/images/product/default/home-1/default-1.jpg" alt=""
                                class="offcanvas-cart-image">
                        </a>
                        <div class="offcanvas-cart-item-content">
                            <a href="#" class="offcanvas-cart-item-link">Car Wheel</a>
                            <div class="offcanvas-cart-item-details">
                                <span class="offcanvas-cart-item-details-quantity">1 x </span>
                                <span class="offcanvas-cart-item-details-price">$49.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-cart-item-delete text-end">
                        <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-cart-item-single">
                    <div class="offcanvas-cart-item-block">
                        <a href="#" class="offcanvas-cart-item-image-link">
                            <img src="assets/images/product/default/home-2/default-1.jpg" alt=""
                                class="offcanvas-cart-image">
                        </a>
                        <div class="offcanvas-cart-item-content">
                            <a href="#" class="offcanvas-cart-item-link">Car Vails</a>
                            <div class="offcanvas-cart-item-details">
                                <span class="offcanvas-cart-item-details-quantity">3 x </span>
                                <span class="offcanvas-cart-item-details-price">$500.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-cart-item-delete text-end">
                        <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-cart-item-single">
                    <div class="offcanvas-cart-item-block">
                        <a href="#" class="offcanvas-cart-item-image-link">
                            <img src="assets/images/product/default/home-3/default-1.jpg" alt=""
                                class="offcanvas-cart-image">
                        </a>
                        <div class="offcanvas-cart-item-content">
                            <a href="#" class="offcanvas-cart-item-link">Shock Absorber</a>
                            <div class="offcanvas-cart-item-details">
                                <span class="offcanvas-cart-item-details-quantity">1 x </span>
                                <span class="offcanvas-cart-item-details-price">$350.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-cart-item-delete text-end">
                        <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
            </ul>
            <div class="offcanvas-cart-total-price">
                <span class="offcanvas-cart-total-price-text">Subtotal:</span>
                <span class="offcanvas-cart-total-price-value">$170.00</span>
            </div>
            <ul class="offcanvas-cart-action-button">
                <li><a href="cart.html" class="btn btn-block btn-golden">View Cart</a></li>
                <li><a href="compare.html" class=" btn btn-block btn-golden mt-5">Checkout</a></li>
            </ul>
        </div> <!-- End  Offcanvas Addcart Wrapper -->

    </div> <!-- End  Offcanvas Addcart Section -->

    <!-- Start Offcanvas Mobile Menu Section -->
    <div id="offcanvas-wishlish" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-end">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- ENd Offcanvas Header -->

        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-wishlist-wrapper">
            <h4 class="offcanvas-title">Wishlist</h4>
            <ul class="offcanvas-wishlist">
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="#" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/product/default/home-1/default-1.jpg" alt=""
                                class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="#" class="offcanvas-wishlist-item-link">Car Wheel</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$49.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-end">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="#" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/product/default/home-2/default-1.jpg" alt=""
                                class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="#" class="offcanvas-wishlist-item-link">Car Vails</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">3 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$500.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-end">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="#" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/product/default/home-3/default-1.jpg" alt=""
                                class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="#" class="offcanvas-wishlist-item-link">Shock Absorber</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$350.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-end">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
            </ul>
            <ul class="offcanvas-wishlist-action-button">
                <li><a href="#" class="btn btn-block btn-golden">View wishlist</a></li>
            </ul>
        </div> <!-- End Offcanvas Mobile Menu Wrapper -->

    </div> <!-- End Offcanvas Mobile Menu Section -->

    <!-- Start Offcanvas Search Bar Section -->
    <div id="search" class="search-modal">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-lg btn-golden">Search</button>
        </form>
    </div>
    <!-- End Offcanvas Search Bar Section -->

    <!-- Offcanvas Overlay -->
    <div class="offcanvas-overlay"></div>

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="hero-slider-section">
        <!-- Slider main container -->
        <div class="hero-slider-active swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Start Hero Single Slider Item -->
                <div class="hero-single-slider-item swiper-slide">
                    <!-- Hero Slider Image -->
                    <div class="hero-slider-bg">
                        <img src="assets/images/banner/earring-banner-2.webp" alt="">
                    </div>
                    <!-- Hero Slider Content -->
                    <div class="hero-slider-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="hero-slider-content">
                                        <h4 class="subtitle"></h4>
                                        <h1 class="title"></h1>
										<p style="font-size:40px;color:#000000;font-family:Open Sans,sans-serif;font-weight:600">Earrings<p> 	
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Hero Single Slider Item -->
				<!-- Start Hero Single Slider Item -->
                
                </div> <!-- End Hero Single Slider Item -->
            </div>

            <!-- If we need pagination -->
            <!-- If we need navigation buttons -->
          
        </div>
    </div>
	<!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Shop Section:::... --
    <div class="shop-section">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-12">
                    <!-- Start Shop Product Sorting Section --
                    <div class="shop-sort-section">
                        <div class="container">
                            <div class="row">
                                <!-- Start Sort Wrapper Box --
                                <div class="sort-box d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column"
                                    data-aos="fade-up" data-aos-delay="0">
                                    <!-- Start Sort tab Button --
                                    <div class="sort-tablist d-flex align-items-center">
                                        <ul class="tablist nav sort-tab-btn">
                                            <li><a class="nav-link active" data-bs-toggle="tab"
                                                    href="#layout-4-grid"><img src="assets/images/icons/bkg_grid.png"
                                                        alt=""></a></li>
                                            <li><a class="nav-link" data-bs-toggle="tab" href="#layout-list"><img
                                                        src="assets/images/icons/bkg_list.png" alt=""></a></li>
                                        </ul>

                                        <!-- Start Page Amount --
                                        <div class="page-amount ms-2">
                                            <span>Showing 1–9 of 21 results</span>
                                        </div> <!-- End Page Amount -->
                                    </div> <!-- End Sort tab Button -->

                                    <!-- Start Sort Select Option --
                                    <div class="sort-select-list d-flex align-items-center">
                                        <label class="me-2">Sort By:</label>
                                        <form action="#">
                                            <fieldset>
                                                <select name="speed" id="speed">
                                                    <option>Sort by average rating</option>
                                                    <option>Sort by popularity</option>
                                                    <option selected="selected">Sort by newness</option>
                                                    <option>Sort by price: low to high</option>
                                                    <option>Sort by price: high to low</option>
                                                    <option>Product Name: Z</option>
                                                </select>
                                            </fieldset>
                                        </form>
                                    </div> <!-- End Sort Select Option -->



                                </div> <!-- Start Sort Wrapper Box -->
                            </div>
                        </div>
                    </div> <!-- End Section Content -->

                    <!-- Start Tab Wrapper -->
                    <div class="sort-product-tab-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
								<h1 style="margin-top:50px;text-transform:uppercase;text-align:center;font-weight:600">our collection</h1>
                                    <div class="tab-content">
                                        <!-- Start Grid View Product -->
                                        <div class="tab-pane active show sort-layout-single" id="layout-4-grid">
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                                    <!-- Start Product Default Single Item -->
                                                    <div class="product-default-single-item product-color--golden"
                                                        data-aos="fade-up" data-aos-delay="0">
                                                        <div class="image-box">
                                                            <a href="product-details-default.html" class="image-link">
                                                                <img src="assets/images/product-2/earring/1.jpg"
                                                                    alt="">
                                                            </a>
                                                            <div class="action-link">
                                                                <div class="action-link-left">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalAddcart" style="color:#000000">Add to Cart</a>
                                                                </div>
                                                                <div class="action-link-right">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalQuickview"><i
                                                                            class="icon-magnifier"></i></a>
                                                                    <a href="wishlist.html"><i
                                                                            class="icon-heart"></i></a>
                                                                    <a href="compare.html"><i
                                                                            class="icon-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="content-left">
                                                                <h6 class="title"><a
                                                                        href="product-details-default.html">Epicuri per
                                                                        lobortis</a></h6>
                                                                <ul class="review-star">
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="empty"><i class="ion-android-star"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="content-right">
                                                                <span class="price">$68</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- End Product Default Single Item -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                                    <!-- Start Product Default Single Item -->
                                                    <div class="product-default-single-item product-color--golden"
                                                        data-aos="fade-up" data-aos-delay="200">
                                                        <div class="image-box">
                                                            <a href="product-details-default.html" class="image-link">
                                                                <img src="assets/images/product-2/earring/2.jpg"
                                                                    alt="">
                                                                
                                                            </a>
                                                            <div class="action-link">
                                                                <div class="action-link-left">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalAddcart" style="color:#000000">Add to Cart</a>
                                                                </div>
                                                                <div class="action-link-right">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalQuickview"><i
                                                                            class="icon-magnifier"></i></a>
                                                                    <a href="wishlist.html"><i
                                                                            class="icon-heart"></i></a>
                                                                    <a href="compare.html"><i
                                                                            class="icon-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="content-left">
                                                                <h6 class="title"><a
                                                                        href="product-details-default.html">Kaoreet
                                                                        lobortis sagit</a></h6>
                                                                <ul class="review-star">
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="empty"><i class="ion-android-star"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="content-right">
                                                                <span class="price">$95.00</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- End Product Default Single Item -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                                    <!-- Start Product Default Single Item -->
                                                    <div class="product-default-single-item product-color--golden"
                                                        data-aos="fade-up" data-aos-delay="400">
                                                        <div class="image-box">
                                                            <a href="product-details-default.html" class="image-link">
                                                                <img src="assets/images/product-2/earring/3.jpg"
                                                                    alt="">
                                                                
                                                            </a>
                                                            <div class="action-link">
                                                                <div class="action-link-left">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalAddcart" style="color:#000000">Add to Cart</a>
                                                                </div>
                                                                <div class="action-link-right">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalQuickview"><i
                                                                            class="icon-magnifier"></i></a>
                                                                    <a href="wishlist.html"><i
                                                                            class="icon-heart"></i></a>
                                                                    <a href="compare.html"><i
                                                                            class="icon-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="content-left">
                                                                <h6 class="title"><a
                                                                        href="product-details-default.html">Condimentum
                                                                        posuere</a></h6>
                                                                <ul class="review-star">
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="empty"><i class="ion-android-star"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="content-right">
                                                                <span class="price">$115.00</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- End Product Default Single Item -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                                    <!-- Start Product Default Single Item -->
                                                    <div class="product-default-single-item product-color--golden"
                                                        data-aos="fade-up" data-aos-delay="600">
                                                        <div class="image-box">
                                                            <a href="product-details-default.html" class="image-link">
                                                                <img src="assets/images/product-2/earring/4.jpg"
                                                                    alt="">
                                                              
                                                            </a>
                                                            <div class="action-link">
                                                                 <div class="action-link-left">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalAddcart" style="color:#000000">Add to Cart</a>
                                                                </div>
                                                                <div class="action-link-right">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalQuickview"><i
                                                                            class="icon-magnifier"></i></a>
                                                                    <a href="wishlist.html"><i
                                                                            class="icon-heart"></i></a>
                                                                    <a href="compare.html"><i
                                                                            class="icon-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="content-left">
                                                                <h6 class="title"><a
                                                                        href="product-details-default.html">Convallis
                                                                        quam sit</a></h6>
                                                                <ul class="review-star">
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="empty"><i class="ion-android-star"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="content-right">
                                                                <span class="price">$75.00 - $85.00</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- End Product Default Single Item -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                                    <!-- Start Product Default Single Item -->
                                                    <div class="product-default-single-item product-color--golden"
                                                        data-aos="fade-up" data-aos-delay="0">
                                                        <div class="image-box">
                                                            <a href="product-details-default.html" class="image-link">
                                                                <img src="assets/images/product-2/earring/5.jpg"
                                                                    alt="">
                                                                
                                                            </a>
                                                            <!--<div class="tag">
                                                                <span>sale</span>
                                                            </div>-->
                                                            <div class="action-link">
                                                                 <div class="action-link-left">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalAddcart" style="color:#000000">Add to Cart</a>
                                                                </div>
                                                                <div class="action-link-right">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalQuickview"><i
                                                                            class="icon-magnifier"></i></a>
                                                                    <a href="wishlist.html"><i
                                                                            class="icon-heart"></i></a>
                                                                    <a href="compare.html"><i
                                                                            class="icon-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="content-left">
                                                                <h6 class="title"><a
                                                                        href="product-details-default.html">Aliquam
                                                                        lobortis</a></h6>
                                                                <ul class="review-star">
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="empty"><i class="ion-android-star"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="content-right">
                                                                <span class="price">$75.00 - $85.00</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- End Product Default Single Item -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                                    <!-- Start Product Default Single Item -->
                                                    <div class="product-default-single-item product-color--golden"
                                                        data-aos="fade-up" data-aos-delay="200">
                                                        <div class="image-box">
                                                            <a href="product-details-default.html" class="image-link">
                                                                <img src="assets/images/product-2/earring/6.jpg"
                                                                    alt="">
                                                                
                                                            </a>
                                                            <!--<div class="tag">
                                                                <span>sale</span>
                                                            </div>-->
                                                            <div class="action-link">
                                                                 <div class="action-link-left">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalAddcart" style="color:#000000">Add to Cart</a>
                                                                </div>
                                                                <div class="action-link-right">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalQuickview"><i
                                                                            class="icon-magnifier"></i></a>
                                                                    <a href="wishlist.html"><i
                                                                            class="icon-heart"></i></a>
                                                                    <a href="compare.html"><i
                                                                            class="icon-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="content-left">
                                                                <h6 class="title"><a
                                                                        href="product-details-default.html">Condimentum
                                                                        posuere</a></h6>
                                                                <ul class="review-star">
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="empty"><i class="ion-android-star"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="content-right">
                                                                <span class="price"><del>$89.00</del> $80.00</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- End Product Default Single Item -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                                    <!-- Start Product Default Single Item -->
                                                    <div class="product-default-single-item product-color--golden"
                                                        data-aos="fade-up" data-aos-delay="400">
                                                        <div class="image-box">
                                                            <a href="product-details-default.html" class="image-link">
                                                                <img src="assets/images/product-2/earring/7.jpg"
                                                                    alt="">
                                                                
                                                            </a>
                                                            <!--<div class="tag">
                                                                <span>sale</span>
                                                            </div>-->
                                                            <div class="action-link">
                                                                 <div class="action-link-left">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalAddcart" style="color:#000000">Add to Cart</a>
                                                                </div>
                                                                <div class="action-link-right">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalQuickview"><i
                                                                            class="icon-magnifier"></i></a>
                                                                    <a href="wishlist.html"><i
                                                                            class="icon-heart"></i></a>
                                                                    <a href="compare.html"><i
                                                                            class="icon-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="content-left">
                                                                <h6 class="title"><a
                                                                        href="product-details-default.html">Condimentum
                                                                        posuere</a></h6>
                                                                <ul class="review-star">
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="empty"><i class="ion-android-star"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="content-right">
                                                                <span class="price">$75.00 - $85.00</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- End Product Default Single Item -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                                    <!-- Start Product Default Single Item --
                                                    <div class="product-default-single-item product-color--golden"
                                                        data-aos="fade-up" data-aos-delay="600">
                                                        <div class="image-box">
                                                            <a href="product-details-default.html" class="image-link">
                                                                <img src="assets/images/product/default/home-1/default-12.jpg"
                                                                    alt="">
                                                                <img src="assets/images/product/default/home-1/default-3.jpg"
                                                                    alt="">
                                                            </a>
                                                            <div class="action-link">
                                                                <div class="action-link-left">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                                </div>
                                                                <div class="action-link-right">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalQuickview"><i
                                                                            class="icon-magnifier"></i></a>
                                                                    <a href="wishlist.html"><i
                                                                            class="icon-heart"></i></a>
                                                                    <a href="compare.html"><i
                                                                            class="icon-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="content-left">
                                                                <h6 class="title"><a
                                                                        href="product-details-default.html">Condimentum
                                                                        posuere</a></h6>
                                                                <ul class="review-star">
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="empty"><i class="ion-android-star"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="content-right">
                                                                <span class="price">$75.00 - $85.00</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- End Product Default Single Item --
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                                    <!-- Start Product Default Single Item --
                                                    <div class="product-default-single-item product-color--golden"
                                                        data-aos="fade-up" data-aos-delay="0">
                                                        <div class="image-box">
                                                            <a href="product-details-default.html" class="image-link">
                                                                <img src="assets/images/product/default/home-1/default-10.jpg"
                                                                    alt="">
                                                                <img src="assets/images/product/default/home-1/default-5.jpg"
                                                                    alt="">
                                                            </a>
                                                            <div class="action-link">
                                                                <div class="action-link-left">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                                </div>
                                                                <div class="action-link-right">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalQuickview"><i
                                                                            class="icon-magnifier"></i></a>
                                                                    <a href="wishlist.html"><i
                                                                            class="icon-heart"></i></a>
                                                                    <a href="compare.html"><i
                                                                            class="icon-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="content-left">
                                                                <h6 class="title"><a
                                                                        href="product-details-default.html">Condimentum
                                                                        posuere</a></h6>
                                                                <ul class="review-star">
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="empty"><i class="ion-android-star"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="content-right">
                                                                <span class="price">$75.00 - $85.00</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- End Product Default Single Item --
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                                    <!-- Start Product Default Single Item --
                                                    <div class="product-default-single-item product-color--golden"
                                                        data-aos="fade-up" data-aos-delay="200">
                                                        <div class="image-box">
                                                            <a href="product-details-default.html" class="image-link">
                                                                <img src="assets/images/product/default/home-1/default-7.jpg"
                                                                    alt="">
                                                                <img src="assets/images/product/default/home-1/default-8.jpg"
                                                                    alt="">
                                                            </a>
                                                            <div class="action-link">
                                                                <div class="action-link-left">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                                </div>
                                                                <div class="action-link-right">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalQuickview"><i
                                                                            class="icon-magnifier"></i></a>
                                                                    <a href="wishlist.html"><i
                                                                            class="icon-heart"></i></a>
                                                                    <a href="compare.html"><i
                                                                            class="icon-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="content-left">
                                                                <h6 class="title"><a
                                                                        href="product-details-default.html">Donec eu
                                                                        libero ac</a></h6>
                                                                <ul class="review-star">
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="empty"><i class="ion-android-star"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="content-right">
                                                                <span class="price">$74</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- End Product Default Single Item -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                                    <!-- Start Product Default Single Item --
                                                    <div class="product-default-single-item product-color--golden"
                                                        data-aos="fade-up" data-aos-delay="400">
                                                        <div class="image-box">
                                                            <a href="product-details-default.html" class="image-link">
                                                                <img src="assets/images/product/default/home-1/default-5.jpg"
                                                                    alt="">
                                                                <img src="assets/images/product/default/home-1/default-8.jpg"
                                                                    alt="">
                                                            </a>
                                                            <div class="action-link">
                                                                <div class="action-link-left">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                                </div>
                                                                <div class="action-link-right">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalQuickview"><i
                                                                            class="icon-magnifier"></i></a>
                                                                    <a href="wishlist.html"><i
                                                                            class="icon-heart"></i></a>
                                                                    <a href="compare.html"><i
                                                                            class="icon-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="content-left">
                                                                <h6 class="title"><a
                                                                        href="product-details-default.html">Dolorum fuga
                                                                        eget</a></h6>
                                                                <ul class="review-star">
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="empty"><i class="ion-android-star"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="content-right">
                                                                <span class="price">$90</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- End Product Default Single Item -->
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                                    <!-- Start Product Default Single Item --
                                                    <div class="product-default-single-item product-color--golden"
                                                        data-aos="fade-up" data-aos-delay="600">
                                                        <div class="image-box">
                                                            <a href="product-details-default.html" class="image-link">
                                                                <img src="assets/images/product/default/home-1/default-10.jpg"
                                                                    alt="">
                                                                <img src="assets/images/product/default/home-1/default-6.jpg"
                                                                    alt="">
                                                            </a>
                                                            <div class="action-link">
                                                                <div class="action-link-left">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalAddcart">Add to Cart</a>
                                                                </div>
                                                                <div class="action-link-right">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalQuickview"><i
                                                                            class="icon-magnifier"></i></a>
                                                                    <a href="wishlist.html"><i
                                                                            class="icon-heart"></i></a>
                                                                    <a href="compare.html"><i
                                                                            class="icon-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="content-left">
                                                                <h6 class="title"><a
                                                                        href="product-details-default.html">Duis
                                                                        pulvinar obortis</a></h6>
                                                                <ul class="review-star">
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="fill"><i class="ion-android-star"></i>
                                                                    </li>
                                                                    <li class="empty"><i class="ion-android-star"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="content-right">
                                                                <span class="price">$86.00</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- End Product Default Single Item -->
                                                </div>
                                            </div>
                                        </div> <!-- End Grid View Product -->
                                        <!-- Start List View Product -->
                                        <div class="tab-pane sort-layout-single" id="layout-list">
                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- Start Product Defautlt Single --
                                                    <div class="product-list-single product-color--golden">
                                                        <a href="product-details-default.html"
                                                            class="product-list-img-link">
                                                            <img class="img-fluid"
                                                                src="assets/images/product/default/home-1/default-1.jpg"
                                                                alt="">
                                                            <img class="img-fluid"
                                                                src="assets/images/product/default/home-1/default-2.jpg"
                                                                alt="">
                                                        </a>
                                                        <div class="product-list-content">
                                                            <h5 class="product-list-link"><a
                                                                    href="product-details-default.html">KAOREET LOBORTIS
                                                                    SAGIT</a></h5>
                                                            <ul class="review-star">
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                            </ul>
                                                            <span class="product-list-price"><del>$30.12</del>
                                                                $25.12</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Nobis ad, iure incidunt. Ab consequatur temporibus non
                                                                eveniet inventore doloremque necessitatibus sed, ducimus
                                                                quisquam, ad asperiores</p>
                                                            <div class="product-action-icon-link-list">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#modalAddcart"
                                                                    class="btn btn-lg btn-black-default-hover">Add to
                                                                    cart</a>
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#modalQuickview"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-magnifier"></i></a>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-heart"></i></a>
                                                                <a href="compare.html"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-shuffle"></i></a>
                                                            </div>
                                                        </div>
                                                    </div> <!-- End Product Defautlt Single -->
                                                </div>
                                                <div class="col-12">
                                                    <!-- Start Product Defautlt Single --
                                                    <div class="product-list-single product-color--golden">
                                                        <a href="product-details-default.html"
                                                            class="product-list-img-link">
                                                            <img class="img-fluid"
                                                                src="assets/images/product/default/home-1/default-3.jpg"
                                                                alt="">
                                                            <img class="img-fluid"
                                                                src="assets/images/product/default/home-1/default-4.jpg"
                                                                alt="">
                                                        </a>
                                                        <div class="product-list-content">
                                                            <h5 class="product-list-link"><a
                                                                    href="product-details-default.html">CONDIMENTUM
                                                                    POSUERE</a></h5>
                                                            <ul class="review-star">
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                            </ul>
                                                            <span class="product-list-price">$95.00</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Nobis ad, iure incidunt. Ab consequatur temporibus non
                                                                eveniet inventore doloremque necessitatibus sed, ducimus
                                                                quisquam, ad asperiores</p>
                                                            <div class="product-action-icon-link-list">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#modalAddcart"
                                                                    class="btn btn-lg btn-black-default-hover">Add to
                                                                    cart</a>
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#modalQuickview"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-magnifier"></i></a>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-heart"></i></a>
                                                                <a href="compare.html"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-shuffle"></i></a>
                                                            </div>
                                                        </div>
                                                    </div> <!-- End Product Defautlt Single -->
                                                </div>
                                                <div class="col-12">
                                                    <!-- Start Product Defautlt Single --
                                                    <div class="product-list-single product-color--golden">
                                                        <a href="product-details-default.html"
                                                            class="product-list-img-link">
                                                            <img class="img-fluid"
                                                                src="assets/images/product/default/home-1/default-5.jpg"
                                                                alt="">
                                                            <img class="img-fluid"
                                                                src="assets/images/product/default/home-1/default-6.jpg"
                                                                alt="">
                                                        </a>
                                                        <div class="product-list-content">
                                                            <h5 class="product-list-link"><a
                                                                    href="product-details-default.html">ALIQUAM
                                                                    LOBORTIS</a></h5>
                                                            <ul class="review-star">
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                            </ul>
                                                            <span class="product-list-price"> $25.12</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Nobis ad, iure incidunt. Ab consequatur temporibus non
                                                                eveniet inventore doloremque necessitatibus sed, ducimus
                                                                quisquam, ad asperiores</p>
                                                            <div class="product-action-icon-link-list">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#modalAddcart"
                                                                    class="btn btn-lg btn-black-default-hover">Add to
                                                                    cart</a>
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#modalQuickview"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-magnifier"></i></a>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-heart"></i></a>
                                                                <a href="compare.html"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-shuffle"></i></a>
                                                            </div>
                                                        </div>
                                                    </div> <!-- End Product Defautlt Single -->
                                                </div>
                                                <div class="col-12">
                                                    <!-- Start Product Defautlt Single --
                                                    <div class="product-list-single product-color--golden">
                                                        <a href="product-details-default.html"
                                                            class="product-list-img-link">
                                                            <img class="img-fluid"
                                                                src="assets/images/product/default/home-1/default-7.jpg"
                                                                alt="">
                                                            <img class="img-fluid"
                                                                src="assets/images/product/default/home-1/default-8.jpg"
                                                                alt="">
                                                        </a>
                                                        <div class="product-list-content">
                                                            <h5 class="product-list-link"><a
                                                                    href="product-details-default.html">CONVALLIS QUAM
                                                                    SIT</a></h5>
                                                            <ul class="review-star">
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                            </ul>
                                                            <span class="product-list-price">$75.00 - $85.00</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Nobis ad, iure incidunt. Ab consequatur temporibus non
                                                                eveniet inventore doloremque necessitatibus sed, ducimus
                                                                quisquam, ad asperiores</p>
                                                            <div class="product-action-icon-link-list">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#modalAddcart"
                                                                    class="btn btn-lg btn-black-default-hover">Add to
                                                                    cart</a>
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#modalQuickview"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-magnifier"></i></a>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-heart"></i></a>
                                                                <a href="compare.html"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-shuffle"></i></a>
                                                            </div>
                                                        </div>
                                                    </div> <!-- End Product Defautlt Single -->
                                                </div>
                                                <div class="col-12">
                                                    <!-- Start Product Defautlt Single --
                                                    <div class="product-list-single product-color--golden">
                                                        <a href="product-details-default.html"
                                                            class="product-list-img-link">
                                                            <img class="img-fluid"
                                                                src="assets/images/product/default/home-1/default-9.jpg"
                                                                alt="">
                                                            <img class="img-fluid"
                                                                src="assets/images/product/default/home-1/default-10.jpg"
                                                                alt="">
                                                        </a>
                                                        <div class="product-list-content">
                                                            <h5 class="product-list-link"><a
                                                                    href="product-details-default.html">DONEC EU LIBERO
                                                                    AC</a></h5>
                                                            <ul class="review-star">
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                            </ul>
                                                            <span class="product-list-price"><del>$25.12</del>
                                                                $20.00</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Nobis ad, iure incidunt. Ab consequatur temporibus non
                                                                eveniet inventore doloremque necessitatibus sed, ducimus
                                                                quisquam, ad asperiores</p>
                                                            <div class="product-action-icon-link-list">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#modalAddcart"
                                                                    class="btn btn-lg btn-black-default-hover">Add to
                                                                    cart</a>
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#modalQuickview"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-magnifier"></i></a>
                                                                <a href="wishlist.html"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-heart"></i></a>
                                                                <a href="compare.html"
                                                                    class="btn btn-lg btn-black-default-hover"><i
                                                                        class="icon-shuffle"></i></a>
                                                            </div>
                                                        </div>
                                                    </div> <!-- End Product Defautlt Single -->
                                                </div>
                                            </div>
                                        </div> <!-- End List View Product -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Tab Wrapper -->

                    <!-- Start Pagination --
                    <div class="page-pagination text-center" data-aos="fade-up" data-aos-delay="0">
                        <ul>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="ion-ios-skipforward"></i></a></li>
                        </ul>
                    </div> <!-- End Pagination -->
                </div> <!-- End Shop Product Sorting Section  -->
            </div>
        </div>
    </div> <!-- ...:::: End Shop Section:::... -->

    <!-- Start Footer Section -->
    <?php
		include ('footer.php');
	?>
    <!-- End Footer Section -->

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Start Modal Add cart -->
    <?php
		include ('add-to-cart.php');
	?>
	<!-- End Modal Add cart -->

    <!-- Start Modal Quickview cart -->
    <div class="modal fade" id="modalQuickview" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-end">
                                <button type="button" class="close modal-close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-details-gallery-area mb-7">
                                    <!-- Start Large Image -->
                                    <div class="product-large-image modal-product-image-large swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-1/default-1.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-1/default-2.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-1/default-3.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-1/default-4.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-1/default-5.jpg" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="assets/images/product/default/home-1/default-6.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Large Image -->
                                    <!-- Start Thumbnail Image -->
                                    <div
                                        class="product-image-thumb modal-product-image-thumb swiper-container pos-relative mt-5">
                                        <div class="swiper-wrapper">
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-1.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-2.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-3.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-4.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-5.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-1/default-6.jpg" alt="">
                                            </div>
                                        </div>
                                        <!-- Add Arrows -->
                                        <div class="gallery-thumb-arrow swiper-button-next"></div>
                                        <div class="gallery-thumb-arrow swiper-button-prev"></div>
                                    </div>
                                    <!-- End Thumbnail Image -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-product-details-content-area">
                                    <!-- Start  Product Details Text Area-->
                                    <div class="product-details-text">
                                        <h4 class="title">Nonstick Dishwasher PFOA</h4>
                                        <div class="price"><del>$70.00</del>$80.00</div>
                                    </div> <!-- End  Product Details Text Area-->
                                    <!-- Start Product Variable Area -->
                                    <div class="product-details-variable">
                                        <!-- Product Variable Single Item -->
                                        <div class="variable-single-item">
                                            <span>Color</span>
                                            <div class="product-variable-color">
                                                <label for="modal-product-color-red">
                                                    <input name="modal-product-color" id="modal-product-color-red"
                                                        class="color-select" type="radio" checked>
                                                    <span class="product-color-red"></span>
                                                </label>
                                                <label for="modal-product-color-tomato">
                                                    <input name="modal-product-color" id="modal-product-color-tomato"
                                                        class="color-select" type="radio">
                                                    <span class="product-color-tomato"></span>
                                                </label>
                                                <label for="modal-product-color-green">
                                                    <input name="modal-product-color" id="modal-product-color-green"
                                                        class="color-select" type="radio">
                                                    <span class="product-color-green"></span>
                                                </label>
                                                <label for="modal-product-color-light-green">
                                                    <input name="modal-product-color"
                                                        id="modal-product-color-light-green" class="color-select"
                                                        type="radio">
                                                    <span class="product-color-light-green"></span>
                                                </label>
                                                <label for="modal-product-color-blue">
                                                    <input name="modal-product-color" id="modal-product-color-blue"
                                                        class="color-select" type="radio">
                                                    <span class="product-color-blue"></span>
                                                </label>
                                                <label for="modal-product-color-light-blue">
                                                    <input name="modal-product-color"
                                                        id="modal-product-color-light-blue" class="color-select"
                                                        type="radio">
                                                    <span class="product-color-light-blue"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- Product Variable Single Item -->
                                        <div class="d-flex align-items-center flex-wrap">
                                            <div class="variable-single-item ">
                                                <span>Quantity</span>
                                                <div class="product-variable-quantity">
                                                    <input min="1" max="100" value="1" type="number">
                                                </div>
                                            </div>

                                            <div class="product-add-to-cart-btn">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div> <!-- End Product Variable Area -->
                                    <div class="modal-product-about-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                            laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam
                                            in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel
                                            recusandae</p>
                                    </div>
                                    <!-- Start  Product Details Social Area-->
                                    <div class="modal-product-details-social">
                                        <span class="title">SHARE THIS PRODUCT</span>
                                        <ul>
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>

                                    </div> <!-- End  Product Details Social Area-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Quickview cart -->

    <!-- ::::::::::::::All JS Files here :::::::::::::: -->
    <!-- Global Vendor, plugins JS -->
    <!-- <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.min.js"></script> -->

    <!--Plugins JS-->
    <!-- <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/material-scrolltop.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/jquery.waypoints.js"></script>
    <script src="assets/js/plugins/jquery.lineProgressbar.js"></script>
    <script src="assets/js/plugins/aos.min.js"></script>
    <script src="assets/js/plugins/jquery.instagramFeed.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from htmldemo.net/hono/hono/shop-full-width.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Oct 2022 11:24:25 GMT -->
</html>