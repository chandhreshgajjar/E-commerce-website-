<header class="header-section d-none d-xl-block">
        <div class="header-wrapper">
            <!-- Start Header Top -->
            <div class="header-top header-top-bg--black section-fluid">
                <div class="container">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <div class="header-top-left">
                            <div
                                class="header-top-contact header-top-contact-color--white header-top-contact-hover-color--green">
                                <a href="tel:0123456789" class="icon-space-right"><i
                                        class="icon-call-in"></i>0123456789</a>
                                <a href="mailto:demo@example.com" class="icon-space-right"><i
                                        class="icon-envelope"></i>demo@example.com</a>
								<?php
									if(!isset($_SESSION['user_id'])){
										
									}
									else{
								?>
								<span style="color:white"><?php echo "Welcome"." ".$_SESSION['email'];?></span>
								<?php	
									}
								?>		
									
                            </div>
                        </div>
                        <div class="header-top-right">
                            <div
                                class="header-top-user-link header-top-user-link-color--white header-top-user-link-hover-color--green">
                                <a href="wishlist.php">Wishlist</a>
                                <a href="cart.php">Cart</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Top -->
            <!-- Start Header Bottom -->
            <div class="header-bottom header-bottom-color--green section-fluid sticky-header sticky-color--white">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center justify-content-between">
                            <!-- Start Header Logo -->
                            <div class="header-logo">
                                <div class="logo">
                                    <a href="#"><img src="assets/images/logo/logo.png" style="padding:0 30px 0 0" alt=""></a>
                                </div>
                            </div>
                            <!-- End Header Logo -->

                            <!-- Start Header Main Menu -->
                            <div class="main-menu menu-color--black menu-hover-color--green">
                                <nav>
                                    <ul>
									<?php
										require_once ('connection.php');    //require_once is used when we want to include some file in another file more than one time.  
										$cat_name=$link->rawQuery("select * from category");
										foreach($cat_name as $cn){
											if($link->count > 0){
											
									?>
                                        <li class="has-dropdown">
                                            <a class="active main-menu-link" href="common.php?category_id=<?php echo $cn['category_id']?>"><?php echo $cn['category_name']?><i
                                                    class=""></i></a>
                                            <!-- Sub Menu -->
                                            
                                        </li>
										<?php		
											}
										}
										?>
                                        <!--<li class="has-dropdown has-megaitem">
                                            <a href="ring.php">Rings <i
                                                    class=""></i></a>
                                            
                                            
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="earring.php">Earrings <i
                                                    class=""></i></a>
                                            <!-- Sub Menu --
                                            
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="bracelet.php">Bracelet <i class=""></i></a>
                                            
                                       
                                        </li>-->
										
										<li>
                                            <a href="#0">Personalised</a>
                                        </li>
										
                                    </ul>
                                </nav>
                            </div>
                            <!-- End Header Main Menu Start -->

                            <!-- Start Header Action Link -->
                            <ul class="header-action-link action-color--black action-hover-color--green">
								<li>
                                    <a href="#search">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
								<?php
											if(!isset($_SESSION['user_id'])){
								?>
								<li>
                                    <a href="login.php">
									<img src="assets/images/icons/1.png">
                                    </a>
                                </li>
								<?php	
											}
											else{
										?>
                                 <li>
                                    <a href="logout.php">
									<img src="assets/images/icons/logout-main.png">
                                    </a>
                                </li>       
                                <?php	
											}
								?>
								<li>
                                    <a href="my_order.php">
                                        <i class="icon-bag"></i>
                                        
                                    </a>
                                </li>
                         </ul>
                            <!-- End Header Action Link -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Bottom -->
        </div>
    </header>

    <!-- Start Mobile Header -->
    <div class="mobile-header mobile-header-bg-color--white section-fluid d-lg-block d-xl-none">
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
                        <ul class="header-action-link action-color--black action-hover-color--green">
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