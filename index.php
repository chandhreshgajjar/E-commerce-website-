<!DOCTYPE html>
<?php
	include ('connection.php');
	session_start();
	
?>


<html lang="zxx">


<!-- Mirrored from htmldemo.net/hono/hono/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Oct 2022 11:22:23 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Nudra | Home</title>

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="assesets/images/logo/logo.png" type="image/png">

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
    <?php
		include ('header.php');
	?>
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
					<span><?php echo $_SESSION['email'];?></span>
                </address>

                <ul class="social-link">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>

                <ul class="user-link">
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="cart.php">Cart</a></li>
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
                <li><a href="cart.php">Cart</a></li>
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
                <li><a href="cart.php" class="btn btn-block btn-green">View Cart</a></li>
                <li><a href="checkout.php" class=" btn btn-block btn-green mt-5">Checkout</a></li>
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
                <li><a href="#" class="btn btn-block btn-green">View wishlist</a></li>
            </ul>
        </div> <!-- End Offcanvas Mobile Menu Wrapper -->

    </div> <!-- End Offcanvas Mobile Menu Section -->

    <!-- Start Offcanvas Search Bar Section -->
    <div id="search" class="search-modal">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-lg btn-green">Search</button>
        </form>
    </div>
    <!-- End Offcanvas Search Bar Section -->

    <!-- Offcanvas Overlay -->
    <div class="offcanvas-overlay"></div>

    <!-- Start Hero Slider Section-->
    <div class="hero-slider-section">
        <!-- Slider main container -->
        <div class="hero-slider-active swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Start Hero Single Slider Item -->
                <div class="hero-single-slider-item swiper-slide">
                    <!-- Hero Slider Image -->
                    <div class="hero-slider-bg">
                        <img src="assets/images/hero-slider/home-2/silver-jewllery.png" alt="">
                    </div>
                    <!-- Hero Slider Content -->
                    <div class="hero-slider-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="hero-slider-content">
                                        <h4 class="subtitle"></h4>
                                        <h1 class="title"></h1>
                                        <!--<a href="product-details-default.html" class="btn btn-lg btn-outline-green">shop
                                            now </a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Hero Single Slider Item -->
				<!-- Start Hero Single Slider Item -->
                <div class="hero-single-slider-item swiper-slide">
                    <!-- Hero Slider Image -->
                    <div class="hero-slider-bg">
                        <img src="assets/images/hero-slider/home-2/Slider-2.webp" alt="">
                    </div>
                    <!-- Hero Slider Content -->
                    <div class="hero-slider-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="hero-slider-content">
                                        
                                        <!--<a href="product-details-default.html" class="btn btn-lg btn-outline-green">shop
                                            now </a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Hero Single Slider Item -->
				<!-- Start Hero Single Slider Item -->
                <div class="hero-single-slider-item swiper-slide">
                    <!-- Hero Slider Image -->
                    <div class="hero-slider-bg">
                        <img src="assets/images/hero-slider/home-2/Slider-3.webp" alt="">
                    </div>
                    <!-- Hero Slider Content -->
                    <div class="hero-slider-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="hero-slider-content">
                                        
                                        <!--<a href="product-details-default.html" class="btn btn-lg btn-outline-green">shop
                                            now </a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Hero Single Slider Item -->
                <!-- Start Hero Single Slider Item -->
                <div class="hero-single-slider-item swiper-slide">
                    <!-- Hero Slider Image -->
                    <div class="hero-slider-bg">
                        <img src="assets/images/hero-slider/home-2/Slider-1.webp" alt="">
                    </div>
                    <!-- Hero Slider Content -->
                    <div class="hero-slider-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="hero-slider-content">
                                        
                                        <!--<a href="product-details-default.html" class="btn btn-lg btn-outline-green">shop
                                            now </a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Hero Single Slider Item -->
            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination active-color-green"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev d-none d-lg-block"></div>
            <div class="swiper-button-next d-none d-lg-block"></div>
        </div>
    </div>
    <!-- End Hero Slider Section-->

    <!-- Start Company Logo Section --
    <div class="company-logo-section section-top-gap-100 section-fluid">
        <div class="company-logo-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="company-logo-slider default-slider-nav-arrow">
                            <!-- Slider main container --
                            <div class="swiper-container company-logo-slider">
                                <!-- Additional required wrapper --
                                <div class="swiper-wrapper">
                                    <!-- Start Company Logo Single Item --
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="assets/images/company-logo/company-logo-1.png" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item --
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="assets/images/company-logo/company-logo-2.png" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item --
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="assets/images/company-logo/company-logo-3.png" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item --
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="assets/images/company-logo/company-logo-4.png" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item --
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="assets/images/company-logo/company-logo-5.png" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item --
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="assets/images/company-logo/company-logo-6.png" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item --
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="assets/images/company-logo/company-logo-7.png" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item --
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="assets/images/company-logo/company-logo-8.png" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item --
                                </div>
                            </div>
                            <!-- If we need navigation buttons --
                            <div class="swiper-button-prev d-none d-md-block"></div>
                            <div class="swiper-button-next d-none d-md-block"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Company Logo Section --

    <!-- Start Banner Section -->
	<marquee style="color:black;font-size:20px">Use coupon code "FIRSTORDER" to get 20% off on your first order.</marquee>
    <div class="banner-section section-top-gap-100 section-fluid">
        <div class="banner-wrapper">
            <div class="container">
                <div class="row mb-n6">
				<?php
							$ring = $link->rawQuery('select * from category');
							if($link->count > 0){
								foreach($ring as $r){
								
						?>
                    <div class="col-md-3 col-12 mb-6">
                        <!-- Start Banner Single Item -->
                        <div class="banner-single-item banner-style-5 img-responsive" data-aos="fade-up"
                            data-aos-delay="0">
                            <a href="common.php?category_id=<?php echo $r['category_id'];?>" class="image banner-animation">
                                <img src="<?php echo $r['category_image']?>" alt="">
                            </a>
                        </div>
                        <!-- End Banner Single Item -->
                    </div>
					<?php
							
								}
							}
						?>
					<div class="col-md-3 col-12 mb-6">
                        <!-- Start Banner Single Item --
                        <div class="banner-single-item banner-style-5 img-responsive" data-aos="fade-up"
                            data-aos-delay="0">
                            <a href="necklace.php" class="image banner-animation">
                                <img src="assets/images/banner/Necklaces.webp" alt="">
                            </a>
                        </div>
                        <!-- End Banner Single Item --
                    </div>
                    <div class="col-md-3 col-12 mb-6">
                        <!-- Start Banner Single Item --
                        <div class="banner-single-item banner-style-5 img-responsive" data-aos="fade-up"
                            data-aos-delay="200">
                            <a href="bracelet.php" class="image banner-animation">
                                <img src="assets/images/banner/bracelet.webp" alt="">
                            </a>
                        </div>
                        <!-- End Banner Single Item --
                    </div>
                    <div class="col-md-3 col-12 mb-6">
                        <!-- Start Banner Single Item --
                        <div class="banner-single-item banner-style-5 img-responsive" data-aos="fade-up"
                            data-aos-delay="400">
                            <a href="earrings.php" class="image banner-animation">
                                <img src="assets/images/banner/earrings.webp" alt="">
                            </a>
                        </div>
						
                        <!-- End Banner Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Section -->

    <!-- Start Product Default Slider Section -->
    <div class="product-default-slider-section section-top-gap-100 section-fluid">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
								
                                <h1 class="section-title" style="text-align:center">OUR PRODUCTS</h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Section Content Text Area -->
        <div class="tab-pane active show sort-layout-single" id="layout-4-grid">
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                                    <!-- Start Product Default Single Item -->
                                                    <div class="product-default-single-item product-color--golden"
                                                        data-aos="fade-up" data-aos-delay="0">
                                                        <div class="image-box">
                                                            <a href="#" class="image-link">
                                                                <img src="assets/images/product/default/home-2/1.webp"
                                                                    alt="">
                                                                
                                                            </a>
                                                            <div class="action-link">
                                                                <div class="action-link-left">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalAddcart" style="color:black">Add to Cart</a>
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
                                                                        href="product-details-default.html">Silver Mop Round Tennis Bracelet</a></h6>
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
                                                            <a href="#" class="image-link">
                                                                <img src="assets/images/product/default/home-2/2.webp"
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
                                                                        href="#">Silver Chain Couple Ring</a></h6>
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
                                                                <img src="assets/images/product/default/home-2/3.webp"
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
                                                                        href="product-details-default.html">Rose Gold ZigZag Couple Ring</a></h6>
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
                                                            <a href="#" class="image-link">
                                                                <img src="assets/images/product/default/home-2/4.webp"
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
                                                                        href="product-details-default.html">Rose Gold Soleraite Ring</a></h6>
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
                                                            <a href="#" class="image-link">
                                                                <img src="assets/images/product/default/home-2/5.webp"
                                                                    alt="">
                                                            </a>
                                                            <div class="tag">
                                                                <span>sale</span>
                                                            </div>
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
                                                                        href="product-details-default.html">Silver Pearl Balls Chain Bracelet</a></h6>
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
                                                            <a href="#" class="image-link">
                                                                <img src="assets/images/product/default/home-2/6.jpeg"
                                                                    alt="">
                                                            </a>
                                                            <div class="tag">
                                                                <span>sale</span>
                                                            </div>
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
                                                                        href="product-details-default.html">Rose Gold Mother Of Pearl Pendant With Chain</a></h6>
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
                                                            <a href="#" class="image-link">
                                                                <img src="assets/images/product/default/home-2/7.jpeg"
                                                                    alt="">
                                                            </a>
                                                            <div class="tag">
                                                                <span>sale</span>
                                                            </div>
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
                                                                        href="product-details-default.html">Silver Multi Wearing Magnetic Heart & Dot Necklace</a></h6>
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
                                                        data-aos="fade-up" data-aos-delay="600">
                                                        <div class="image-box">
                                                            <a href="#" class="image-link">
                                                                <img src="assets/images/product/default/home-2/8.webp"
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
                                                                        href="product-details-default.html">Silver Star Signity Diamond Ring</a></h6>
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
                                                            <a href="#" class="image-link">
                                                                <img src="assets/images/product/default/home-2/9.webp"
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
                                                                        href="#">Silver Triangle Diamond Stud Earrings</a></h6>
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
                                                            <a href="#" class="image-link">
                                                                <img src="assets/images/product/default/home-2/10.webp"
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
                                                                        href="product-details-default.html">Silver Evil Eye Double Chain Bracelet</a></h6>
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
                                                    <!-- Start Product Default Single Item -->
                                                    <div class="product-default-single-item product-color--golden"
                                                        data-aos="fade-up" data-aos-delay="400">
                                                        <div class="image-box">
                                                            <a href="#" class="image-link">
                                                                <img src="assets/images/product/default/home-2/11.webp"
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
                                                                        href="product-details-default.html">Silver Imortant Hanging Earrings</a></h6>
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
                                        </div>
    </div>
    <!-- End Product Default Slider Section -->

    <!-- Start Banner Section -->
    <div class="banner-section section-top-gap-100">
        <div class="banner-wrapper clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Start Banner Single Item -->
                        <div class="banner-single-item banner-style-13 banner-color--green" data-aos="fade-up"
                            data-aos-delay="0">
                            <div class="image">
                                <img src="assets/images/banner/1.png" alt="">
                                
                            </div>

                        </div>
                        <!-- End Banner Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
                    <!-- End Banner Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Section -->

    <!-- Start Service Section -->
    
    <!-- End Service Section -->

    <!-- Start Banner Section -->
    
    <!-- End Banner Section -->

    <!-- Start Product List View Slider Section -->
    <div class="product-list-slider-section section-top-gap-100 section-fluid">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
                                <h3 class="section-title" style="text-align:center">Trending Products</h3>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Section Content Text Area -->
        <div class="row">
                                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                                    <!-- Start Product Default Single Item -->
                                                    <div class="product-default-single-item product-color--golden"
                                                        data-aos="fade-up" data-aos-delay="0">
                                                        <div class="image-box">
                                                            <a href="#" class="image-link">
                                                                <img src="assets/images/product/default/home-2/1.webp"
                                                                    alt="">
                                                                
                                                            </a>
                                                            <div class="action-link">
                                                                <div class="action-link-left">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalAddcart" style="color:black">Add to Cart</a>
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
                                                                        href="#">Silver Mop Round Tennis Bracelet</a></h6>
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
                                                            <a href="#" class="image-link">
                                                                <img src="assets/images/product/default/home-2/2.webp"
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
                                                                        href="#">Silver Chain Couple Ring</a></h6>
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
                                                                <img src="assets/images/product/default/home-2/3.webp"
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
                                                                        href="#">Rose Gold ZigZag Couple Ring</a></h6>
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
                                                            <a href="#" class="image-link">
                                                                <img src="assets/images/product/default/home-2/4.webp"
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
                                                                        href="#">Rose Gold Soleraite Ring</a></h6>
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
                                                            <a href="#" class="image-link">
                                                                <img src="assets/images/product/default/home-2/5.webp"
                                                                    alt="">
                                                            </a>
                                                            <div class="tag">
                                                                <span>sale</span>
                                                            </div>
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
                                                                        href="#">Silver Pearl Balls Chain Bracelet</a></h6>
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
                                                
                                                        
                                            </div>
    </div>
    <!-- End Product List View Slider Section -->

    <!-- Start Banner Section -->
    
    <!-- End Banner Section -->

    <!-- Start Blog Slider Section --
    <div class="blog-default-slider-section section-top-gap-100 section-fluid">
        <!-- Start Section Content Text Area --
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
                                <h3 class="section-title">THE LATEST BLOGS</h3>
                                <p>Present posts in a best way to highlight interesting moments of your blog.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Section Content Text Area --
        <div class="blog-wrapper" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="blog-default-slider default-slider-nav-arrow">
                            <!-- Slider main container --
                            <div class="swiper-container blog-slider">
                                <!-- Additional required wrapper --
                                <div class="swiper-wrapper">
                                    <!-- Start Product Default Single Item --
                                    <div class="blog-default-single-item blog-color--green swiper-slide">
                                        <div class="image-box">
                                            <a href="blog-single-sidebar-left.html" class="image-link">
                                                <img class="img-fluid"
                                                    src="assets/images/blog/blog-grid-home-1-img-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="blog-single-sidebar-left.html">Blog Post One</a>
                                            </h6>
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                                Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                            <div class="inner">
                                                <a href="blog-single-sidebar-left.html"
                                                    class="read-more-btn icon-space-left">Read More <span><i
                                                            class="ion-ios-arrow-thin-right"></i></span></a>
                                                <div class="post-meta">
                                                    <a href="#" class="date">24 Apr</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item --
                                    <div class="blog-default-single-item blog-color--green swiper-slide">
                                        <div class="image-box">
                                            <a href="blog-single-sidebar-left.html" class="image-link">
                                                <img class="img-fluid"
                                                    src="assets/images/blog/blog-grid-home-1-img-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="blog-single-sidebar-left.html">Blog Post Two</a>
                                            </h6>
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                                Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                            <div class="inner">
                                                <a href="#" class="read-more-btn icon-space-left">Read More <span><i
                                                            class="ion-ios-arrow-thin-right"></i></span></a>
                                                <div class="post-meta">
                                                    <a href="blog-single-sidebar-left.html" class="date">24 Apr</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item --
                                    <div class="blog-default-single-item blog-color--green swiper-slide">
                                        <div class="image-box">
                                            <a href="blog-single-sidebar-left.html" class="image-link">
                                                <img class="img-fluid"
                                                    src="assets/images/blog/blog-grid-home-1-img-3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="blog-single-sidebar-left.html">Blog Post
                                                    Three</a></h6>
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                                Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                            <div class="inner">
                                                <a href="blog-single-sidebar-left.html"
                                                    class="read-more-btn icon-space-left">Read More <span><i
                                                            class="ion-ios-arrow-thin-right"></i></span></a>
                                                <div class="post-meta">
                                                    <a href="#" class="date">24 Apr</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item --
                                    <div class="blog-default-single-item blog-color--green swiper-slide">
                                        <div class="image-box">
                                            <a href="blog-single-sidebar-left.html" class="image-link">
                                                <img class="img-fluid"
                                                    src="assets/images/blog/blog-grid-home-1-img-4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="blog-single-sidebar-left.html">Blog Post Four</a>
                                            </h6>
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                                Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                            <div class="inner">
                                                <a href="blog-single-sidebar-left.html"
                                                    class="read-more-btn icon-space-left">Read More <span><i
                                                            class="ion-ios-arrow-thin-right"></i></span></a>
                                                <div class="post-meta">
                                                    <a href="#" class="date">24 Apr</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item --
                                    <div class="blog-default-single-item blog-color--green swiper-slide">
                                        <div class="image-box">
                                            <a href="blog-single-sidebar-left.html" class="image-link">
                                                <img class="img-fluid"
                                                    src="assets/images/blog/blog-grid-home-1-img-5.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="blog-single-sidebar-left.html">Blog Post Five</a>
                                            </h6>
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                                Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                            <div class="inner">
                                                <a href="blog-single-sidebar-left.html"
                                                    class="read-more-btn icon-space-left">Read More <span><i
                                                            class="ion-ios-arrow-thin-right"></i></span></a>
                                                <div class="post-meta">
                                                    <a href="#" class="date">24 Apr</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item --
                                    <div class="blog-default-single-item blog-color--green swiper-slide">
                                        <div class="image-box">
                                            <a href="blog-single-sidebar-left.html" class="image-link">
                                                <img class="img-fluid"
                                                    src="assets/images/blog/blog-grid-home-1-img-6.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="blog-single-sidebar-left.html">Blog Post Six</a>
                                            </h6>
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                                Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                            <div class="inner">
                                                <a href="blog-single-sidebar-left.html"
                                                    class="read-more-btn icon-space-left">Read More <span><i
                                                            class="ion-ios-arrow-thin-right"></i></span></a>
                                                <div class="post-meta">
                                                    <a href="#" class="date">24 Apr</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product Default Single Item -->
                                </div>
                            </div>
                            <!-- If we need navigation buttons --
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Slider Section -->

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


<!-- Mirrored from htmldemo.net/hono/hono/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Oct 2022 11:23:38 GMT -->
</html>