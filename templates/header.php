<!doctype html>
<html lang="en">
	<head>
		<!-- Basic page needs
		============================================ -->
		<title>ShopMe | Home</title>
		<meta charset="utf-8">
		<meta name="author" content="">
		<meta name="description" content="">
		<meta name="keywords" content="">

		<!-- Mobile specific metas
		============================================ -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo ROOT_PATH; ?>images/fav_icon.ico">

		<!-- Google web fonts
		============================================ -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

		<!-- Libs CSS
		============================================ -->
		<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/animate.css">
		<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/fontello.css">
		<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/bootstrap.min.css">
		
		<!-- Theme CSS
		============================================ -->
		<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>js/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>js/owlcarousel/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>js/arcticmodal/jquery.arcticmodal.css">
		<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/style.css">

		<!-- JS Libs
		============================================ -->
		<script src="<?php echo ROOT_PATH; ?>js/modernizr.js"></script>

		<!-- Old IE stylesheet
		============================================ -->
		<!--[if lte IE 9]>
			<link rel="stylesheet" type="text/css" href="<?php echo ROOT_PATH; ?>css/oldie.css">
		<![endif]-->
	</head>
	<body class="front_page">

		

		<!-- - - - - - - - - - - - - - Main Wrapper - - - - - - - - - - - - - - - - -->

		<div class="wide_layout">

			<!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

			<header id="header">

				<!-- - - - - - - - - - - - - - Top part - - - - - - - - - - - - - - - - -->

				<div class="top_part">

					<div class="container">

						<div class="row">

							<div class="col-md-7 col-sm-8">

								<!-- - - - - - - - - - - - - - Navigation of shop - - - - - - - - - - - - - - - - -->

								<nav>

									<ul class="topbar">

										<li><a href="<?php echo ROOT_PATH; ?>index.php">Home</a></li>
										<li><a href="shop_my_account.html">My Account</a></li>
										<li><a href="<?php echo ROOT_PATH ?>templates/shop_shopping_cart.php">Shopping Cart</a></li>
                                                                                <li><a href="<?php echo ROOT_PATH; ?>templates/shop_checkout.php">Checkout</a></li>
										<li><a href="additional_page_contact.html">Contact us</a></li>
										
									</ul>

								</nav>

								<!-- - - - - - - - - - - - - - End navigation of shop - - - - - - - - - - - - - - - - -->

							</div> <!--/ [col]-->

							<div class="col-md-5 col-sm-4">

								<div class="clearfix">

									<!-- - - - - - - - - - - - - - Language change - - - - - - - - - - - - - - - - -->

									<div class="alignright site_settings">

										<span class="current open_"><img src="<?php echo ROOT_PATH; ?>images/flag_en.jpg" alt="">English</span>

										<ul class="dropdown site_setting_list language">

											<li class="animated_item"><a href="#"><img src="<?php echo ROOT_PATH; ?>images/flag_en.jpg" alt=""> English</a></li>
											<li class="animated_item"><a href="#"><img src="<?php echo ROOT_PATH; ?>images/flag_g.jpg" alt=""> German</a></li>
											<li class="animated_item"><a href="#"><img src="<?php echo ROOT_PATH; ?>images/flag_s.jpg" alt=""> Spanish</a></li>

										</ul>

									</div><!--/ .alignright.site_settings-->

									<!-- - - - - - - - - - - - - - End of language change - - - - - - - - - - - - - - - - -->
									
									<!-- - - - - - - - - - - - - - Currency change - - - - - - - - - - - - - - - - -->

									<div class="alignright site_settings currency">

										<span class="current open_">USD</span>

										<ul class="dropdown site_setting_list">

											<li class="animated_item"><a href="#">USD</a></li>
											<li class="animated_item"><a href="#">EUR</a></li>
											<li class="animated_item"><a href="#">GBP</a></li>

										</ul>

									</div><!--/ .alignright.site_settings.currency-->

									<!-- - - - - - - - - - - - - - End of currency change - - - - - - - - - - - - - - - - -->

								</div><!--/ .clearfix-->

							</div><!--/ [col]-->

						</div><!--/ .row-->

					</div><!--/ .container -->

				</div><!--/ .top_part -->
				
				<!-- - - - - - - - - - - - - - End of top part - - - - - - - - - - - - - - - - -->

				<hr>

				<!-- - - - - - - - - - - - - - Bottom part - - - - - - - - - - - - - - - - -->

				<div class="bottom_part">

					<div class="sticky_part">

						<div class="container">

							<div class="row">

								<div class="main_header_row">

									<div class="col-sm-3">

										<!-- - - - - - - - - - - - - - Logo - - - - - - - - - - - - - - - - -->

										<a href="<?php echo ROOT_PATH; ?>index.php" class="logo">

											<img src="<?php echo ROOT_PATH; ?>images/logo.png" alt="">

										</a>

										<!-- - - - - - - - - - - - - - End of logo - - - - - - - - - - - - - - - - -->

									</div><!--/ [col]-->

									<div class="col-lg-6 col-md-5 col-sm-5">

										<!-- - - - - - - - - - - - - - Call to action - - - - - - - - - - - - - - - - -->

										<div class="call_us">

											<span>Call us toll free:</span> <b>+1888 234 5678</b>

										</div><!--/ .call_us-->

										<!-- - - - - - - - - - - - - - End call to action - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Search form - - - - - - - - - - - - - - - - -->

										<form class="clearfix search">

											<input type="text" name="" tabindex="1" placeholder="Search..." class="alignleft">
											
											<!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

											<div class="search_category alignleft">

												<div class="open_categories">All Categories</div>

												<ul class="categories_list dropdown">

													<li class="animated_item"><a href="#">Medicine &amp; Health</a></li>
													<li class="animated_item"><a href="#">Beauty</a></li>
													<li class="animated_item"><a href="#">Personal Care</a></li>
													<li class="animated_item"><a href="#">Vitamins &amp; Supplements</a></li>
													<li class="animated_item"><a href="#">Baby Needs</a></li>
													<li class="animated_item"><a href="#">Diet &amp; Fitness</a></li>
													<li class="animated_item"><a href="#">Sexual Well-being</a></li>

												</ul>

											</div><!--/ .search_category.alignleft-->

											<!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->

											<button class="button_blue def_icon_btn alignleft"></button>

										</form><!--/ #search-->
										
										<!-- - - - - - - - - - - - - - End search form - - - - - - - - - - - - - - - - -->

									</div><!--/ [col]-->

									<div class="col-lg-3 col-sm-4">
										
										<!-- - - - - - - - - - - - - - Wishlist & compare counters - - - - - - - - - - - - - - - - -->

										<div class="align_right shop_links">
											
											<a href="#" class="small_link"><i class="icon-heart-5"></i> Wishlist (7)</a>
											<a href="#" class="small_link"><i class="icon-resize-small"></i> Compare (2)</a>

										</div><!--/ .align_right.shop_links-->
										
										<!-- - - - - - - - - - - - - - End of wishlist & compare counters - - - - - - - - - - - - - - - - -->

										<div class="align_right">

											<!-- - - - - - - - - - - - - - Login / register - - - - - - - - - - - - - - - - -->

											<div class="login">

												<a class="small_link" href="#" data-modal-url="modals/login.html">Login</a> / <a class="small_link" href="#">Register</a>

											</div><!--/ .login-->

											<!-- - - - - - - - - - - - - - End of Login / register - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Shopping cart - - - - - - - - - - - - - - - - -->

											<div class="shopping_cart_wrap">

												<button id="open_shopping_cart" class="open_button" data-amount="3">
													<b class="title">My Cart</b>
													<b class="total_price">$999.00</b>
												</button>

												<!-- - - - - - - - - - - - - - Products list - - - - - - - - - - - - - - - - -->

												<div class="shopping_cart dropdown">

													<div class="animated_item">

														<p class="title">Recently added item(s)</p>

														<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

														<div class="clearfix sc_product">

															<a href="#" class="product_thumb"><img src="<?php echo ROOT_PATH; ?>images/sc_img_1.jpg" alt=""></a>

															<a href="#" class="product_name">Aenean Auctor Wisi Et Urna Ipsum...</a>

															<p>1 x $499.00</p>

															<button class="close"></button>

														</div><!--/ .clearfix.sc_product-->
														
														<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

													</div><!--/ .animated_item-->

													<div class="animated_item">

														<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

														<div class="clearfix sc_product">

															<a href="#" class="product_thumb"><img src="<?php echo ROOT_PATH; ?>images/sc_img_2.jpg" alt=""></a>

															<a href="#" class="product_name">Lorem Ipsum Dolor Sit Amet...</a>

															<p>1 x $499.00</p>

															<button class="close"></button>

														</div><!--/ .clearfix.sc_product-->
														
														<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

													</div><!--/ .animated_item-->

													<div class="animated_item">

														<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

														<div class="clearfix sc_product">

															<a href="#" class="product_thumb"><img src="<?php echo ROOT_PATH; ?>images/sc_img_3.jpg" alt=""></a>

															<a href="#" class="product_name">Nemo Enim Ipsam <br>Voluptatem 30 ea</a>

															<p>1 x $499.00</p>

															<button class="close"></button>

														</div><!--/ .clearfix.sc_product-->
														
														<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

													</div><!--/ .animated_item-->

													<div class="animated_item">

														<!-- - - - - - - - - - - - - - Total info - - - - - - - - - - - - - - - - -->

														<ul class="total_info">

															<li><span class="price">Tax:</span> $0.00</li>

															<li><span class="price">Discount:</span> $37.00</li>

															<li class="total"><b><span class="price">Total:</span> $999.00</b></li>

														</ul>
														
														<!-- - - - - - - - - - - - - - End of total info - - - - - - - - - - - - - - - - -->

													</div><!--/ .animated_item-->

													<div class="animated_item">

														<a href="#" class="button_grey">View Cart</a>

														<a href="#" class="button_blue">Checkout</a>

													</div><!--/ .animated_item-->

												</div><!--/ .shopping_cart.dropdown-->
												
												<!-- - - - - - - - - - - - - - End of products list - - - - - - - - - - - - - - - - -->

											</div><!--/ .shopping_cart_wrap.align_left-->
											
											<!-- - - - - - - - - - - - - - End of shopping cart - - - - - - - - - - - - - - - - -->

										</div><!--/ .align_right-->

									</div><!--/ [col]-->

								</div><!--/ .main_header_row-->

							</div><!--/ .row-->

						</div><!--/ .container-->

					</div>

				</div><!--/ .bottom_part -->

				<!-- - - - - - - - - - - - - - End of bottom part - - - - - - - - - - - - - - - - -->

			</header>
			
			<!-- - - - - - - - - - - - - - End Header - - - - - - - - - - - - - - - - -->
