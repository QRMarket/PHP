<?php 
error_reporting(E_ALL);
include '../inc/config.php';
include '../inc/functions.php';
include 'header.php';
?>
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
  <div class="page_wrapper">
      

                                                <div class="container">

                                                    <div class="section_offset">

                                                        <div class="row">

                                                            <!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

                                                            <aside class="col-md-3 has_mega_menu">

                                                                <section class="animated transparent" data-animation="fadeInDown" data-animation-delay="200">

                                                                    <h3>Categories</h3>

                                                                 <?php prepareCategoryMenu(); ?>               

                                                                </section><!--/ .animated.transparent-->

                                                            </aside><!--/ [col]-->

                                                            <!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->

                                                            <!-- - - - - - - - - - - - - - Main slider - - - - - - - - - - - - - - - - -->

                                                            <div class="col-md-9">

                                                                <div class="animated transparent" data-animation="fadeInDown" data-animation-delay="400">

                                                                    <!-- - - - - - - - - - - - - - Revolution slider - - - - - - - - - - - - - - - - -->

                                                                    <div class="revolution_slider">

                                                                        <div class="rev_slider">

                                                                            <ul>

                                                                                <!-- - - - - - - - - - - - - - Slide 1 - - - - - - - - - - - - - - - - -->

                                                                                <li data-transition="papercut" data-slotamount="7">

                                                                                    <img src="<?php echo ROOT_PATH; ?>images/home_slide_4.jpg" alt="">

                                                                                        <div class="caption sfl stl layer_1" data-x="left" data-hoffset="60" data-y="90" data-easing="easeOutBack" data-speed="600" data-start="900">Best Quality</div>

                                                                                        <div class="caption sfl stl layer_2" data-x="left" data-y="138" data-hoffset="60" data-easing="easeOutBack" data-speed="600" data-start="1000">Medications</div>

                                                                                        <div class="caption sfl stl layer_3" data-x="left" data-y="190" data-hoffset="60" data-easing="easeOutBack" data-speed="600" data-start="1100">at Low Prices</div>

                                                                                        <div class="caption sfb stb" data-x="left" data-y="245" data-hoffset="60" data-easing="easeOutBack" data-speed="700" data-start="1100">
                                                                                            <a href="#" class="button_blue big_btn">Shop Now!</a>
                                                                                        </div>

                                                                                </li>

                                                                                <!-- - - - - - - - - - - - - - End of Slide 1 - - - - - - - - - - - - - - - - -->

                                                                                <!-- - - - - - - - - - - - - - Slide 2 - - - - - - - - - - - - - - - - -->

                                                                                <li data-transition="papercut" data-slotamount="7" class="align_center">

                                                                                    <img src="<?php echo ROOT_PATH; ?>images/home_slide_5.jpg" alt="">

                                                                                        <div class="caption sfl stl layer_5" data-x="center" data-y="77" data-easing="easeOutBack" data-speed="600" data-start="900">Have A Question?</div>

                                                                                        <div class="caption sfl stl layer_6" data-x="center" data-y="135" data-easing="easeOutBack" data-speed="600" data-start="1050"><small>Our</small> Pharmacists<br><small>Are</small> Ready <small>to</small> Help You!</div>

                                                                                        <div class="caption sfb stb" data-x="center" data-y="260" data-easing="easeOutBack" data-speed="700" data-start="1150">
                                                                                            <a href="#" class="button_blue big_btn">Contact Us Now!</a>
                                                                                        </div>

                                                                                </li>

                                                                                <!-- - - - - - - - - - - - - - End of Slide 2 - - - - - - - - - - - - - - - - -->

                                                                                <!-- - - - - - - - - - - - - - Slide 3 - - - - - - - - - - - - - - - - -->

                                                                                <li data-transition="papercut" data-slotamount="7">

                                                                                    <img src="<?php echo ROOT_PATH; ?>images/home_slide_6.jpg" alt="">

                                                                                        <div class="caption sfl stl layer_8" data-x="right" data-y="73" data-hoffset="-60" data-easing="easeOutBack" data-speed="600" data-start="900">Get 10% Off</div>

                                                                                        <div class="caption sfl stl layer_9" data-x="right" data-y="122" data-hoffset="-60" data-easing="easeOutBack" data-speed="600" data-start="1000">For Reorders</div>

                                                                                        <div class="caption sfl stl layer_10" data-x="right" data-y="178" data-hoffset="-60" data-easing="easeOutBack" data-speed="600" data-start="1100">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus.</div>

                                                                                        <div class="caption sfb stb" data-x="right" data-hoffset="-60" data-y="262" data-easing="easeOutBack" data-speed="700" data-start="1150">
                                                                                            <a href="#" class="button_blue big_btn">Read More</a>
                                                                                        </div>

                                                                                </li>

                                                                                <!-- - - - - - - - - - - - - - End of Slide 3 - - - - - - - - - - - - - - - - -->

                                                                            </ul>

                                                                        </div><!--/ .rev_slider-->

                                                                    </div><!--/ .revolution_slider-->

                                                                    <!-- - - - - - - - - - - - - - End of Revolution slider - - - - - - - - - - - - - - - - -->

                                                                </div><!--/ .animated.transparent-->

                                                            </div><!--/ [col]-->

                                                            <!-- - - - - - - - - - - - - - End of main slider - - - - - - - - - - - - - - - - -->

                                                        </div><!--/ .row-->

                                                    </div><!--/ .section_offset-->

                                                    <!-- - - - - - - - - - - - - - Infoblocks - - - - - - - - - - - - - - - - -->

					<ul class="clearfix infoblocks_wrap section_offset five_items">

						<li>
							<a href="#" class="infoblock type_1">

								<i class="icon-thumbs-up-1"></i>
								<span class="caption"><b>The Highest Product Quality</b></span>

							</a><!--/ .infoblock-->
						</li>

						<li>
							<a href="#" class="infoblock type_1">

								<i class="icon-paper-plane"></i>
								<span class="caption"><b>Fast &amp; Free Delivery</b></span>

							</a><!--/ .infoblock-->
						</li>

						<li>
							<a href="#" class="infoblock type_1">

								<i class="icon-lock"></i>
								<span class="caption"><b>Safe &amp; Secure Payment</b></span>

							</a><!--/ .infoblock-->
						</li>

						<li>
							<a href="#" class="infoblock type_1">

								<i class="icon-diamond"></i>
								<span class="caption"><b>Get 10% OFF For Reorder</b></span>

							</a><!--/ .infoblock-->
						</li>

						<li>
							<a href="#" class="infoblock type_1">

								<i class="icon-money"></i>
								<span class="caption"><b>100% Money back Guaranted</b></span>

							</a><!--/ .infoblock-->
						</li>

					</ul><!--/ .infoblocks_wrap.section_offset.clearfix-->
					
					<!-- - - - - - - - - - - - - - End of infoblocks - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Today's deals - - - - - - - - - - - - - - - - -->

                                                    <section class="section_offset animated transparent" data-animation="fadeInDown"> 

                                                        <h3 class="section_title">Today's Deals</h3>

                                                        <div class="tabs type_2 products">

                                                            <!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

                                                            <?php prepareCategoryTabMenu(0); ?>

                                                            <!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

                                                            <!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

                                                            <div class="tab_containers_wrap">

                                                                <div id="tab-1" class="tab_container">

                                                                    <!-- - - - - - - - - - - - - - Carousel of today's deals - - - - - - - - - - - - - - - - -->

                                                                    <div class="owl_carousel carousel_in_tabs type_2">

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_1.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>30%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="11" data-day="6" data-hours="15" data-minutes="0" data-seconds="0"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_2.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>25%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="2" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_3.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>40%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="6" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_4.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>15%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="1" data-day="31" data-hours="18" data-minutes="40" data-seconds="40"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_5.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>50%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="3" data-day="16" data-hours="11" data-minutes="10" data-seconds="10"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                    </div><!--/ .owl_carousel-->

                                                                    <!-- - - - - - - - - - - - - - End of carousel of today's deals - - - - - - - - - - - - - - - - -->

                                                                </div><!--/ #tab-1-->

                                                                <div id="tab-2" class="tab_container">

                                                                    <!-- - - - - - - - - - - - - - Carousel of beauty products - - - - - - - - - - - - - - - - -->

                                                                    <div class="owl_carousel carousel_in_tabs type_2">

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_2.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>25%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="2" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_1.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>30%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="11" data-day="6" data-hours="15" data-minutes="0" data-seconds="0"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_4.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>15%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="1" data-day="31" data-hours="18" data-minutes="40" data-seconds="40"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_3.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>40%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="6" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_5.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>50%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="3" data-day="16" data-hours="11" data-minutes="10" data-seconds="10"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                    </div><!--/ .owl_carousel-->

                                                                    <!-- - - - - - - - - - - - - - End of carousel of beauty products - - - - - - - - - - - - - - - - -->

                                                                </div><!--/ #tab-2-->

                                                                <div id="tab-3" class="tab_container">

                                                                    <!-- - - - - - - - - - - - - - Carousel of personal care - - - - - - - - - - - - - - - - -->

                                                                    <div class="owl_carousel carousel_in_tabs type_2">

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_5.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>50%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="3" data-day="16" data-hours="11" data-minutes="10" data-seconds="10"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_4.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>15%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="1" data-day="31" data-hours="18" data-minutes="40" data-seconds="40"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_1.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>30%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="11" data-day="6" data-hours="15" data-minutes="0" data-seconds="0"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_2.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>25%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="2" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_3.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>40%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="6" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                    </div><!--/ .owl_carousel-->

                                                                    <!-- - - - - - - - - - - - - - End of carousel of personal care - - - - - - - - - - - - - - - - -->

                                                                </div><!--/ #tab-3-->

                                                                <div id="tab-4" class="tab_container">

                                                                    <!-- - - - - - - - - - - - - - Carousel of vitamins & supplements - - - - - - - - - - - - - - - - -->

                                                                    <div class="owl_carousel carousel_in_tabs type_2">

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/tabs_img_1.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>30%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="11" data-day="6" data-hours="15" data-minutes="0" data-seconds="0"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_2.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>25%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="2" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/tabs_img_3.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>40%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="6" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_4.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>15%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="1" data-day="31" data-hours="18" data-minutes="40" data-seconds="40"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_5.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>50%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="3" data-day="16" data-hours="11" data-minutes="10" data-seconds="10"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                    </div><!--/ .owl_carousel-->

                                                                    <!-- - - - - - - - - - - - - - End of carousel of vitamins & supplements - - - - - - - - - - - - - - - - -->

                                                                </div><!--/ #tab-4-->

                                                                <div id="tab-5" class="tab_container">

                                                                    <!-- - - - - - - - - - - - - - Carousel of baby needs products - - - - - - - - - - - - - - - - -->

                                                                    <div class="owl_carousel carousel_in_tabs type_2">

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_2.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>25%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="2" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_1.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>30%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="11" data-day="6" data-hours="15" data-minutes="0" data-seconds="0"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_4.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>15%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="1" data-day="31" data-hours="18" data-minutes="40" data-seconds="40"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_3.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>40%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="6" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_5.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>50%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="3" data-day="16" data-hours="11" data-minutes="10" data-seconds="10"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                    </div><!--/ .owl_carousel-->

                                                                    <!-- - - - - - - - - - - - - - End of carousel of baby needs products - - - - - - - - - - - - - - - - -->

                                                                </div><!--/ #tab-5-->

                                                                <div id="tab-6" class="tab_container">

                                                                    <!-- - - - - - - - - - - - - - Carousel of diet & fitness products - - - - - - - - - - - - - - - - -->

                                                                    <div class="owl_carousel carousel_in_tabs type_2">

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_5.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>50%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="3" data-day="16" data-hours="11" data-minutes="10" data-seconds="10"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_4.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>15%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="1" data-day="31" data-hours="18" data-minutes="40" data-seconds="40"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_1.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>30%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="11" data-day="6" data-hours="15" data-minutes="0" data-seconds="0"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_2.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>25%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="2" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_3.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>40%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="6" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                    </div><!--/ .owl_carousel-->

                                                                    <!-- - - - - - - - - - - - - - End of carousel of diet & fitness products - - - - - - - - - - - - - - - - -->

                                                                </div><!--/ #tab-6-->

                                                                <div id="tab-7" class="tab_container">

                                                                    <!-- - - - - - - - - - - - - - Carousel of sexual well-being - - - - - - - - - - - - - - - - -->

                                                                    <div class="owl_carousel carousel_in_tabs type_2">

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/tabs_img_2.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>30%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="11" data-day="6" data-hours="15" data-minutes="0" data-seconds="0"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_2.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>25%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="2" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/tabs_img_3.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>40%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="6" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_4.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>15%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="1" data-day="31" data-hours="18" data-minutes="40" data-seconds="40"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_5.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_offer percentage">

                                                                                <div>50%</div>OFF

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                                                            <div class="countdown" data-year="2016" data-month="3" data-day="16" data-hours="11" data-minutes="10" data-seconds="10"></div>

                                                                            <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                    </div><!--/ .owl_carousel-->

                                                                    <!-- - - - - - - - - - - - - - End of carousel of sexual well-being  - - - - - - - - - - - - - - - - -->

                                                                </div><!--/ #tab-7-->

                                                            </div>

                                                            <!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->

                                                        </div>

                                                    </section><!--/ .section_offset-->

                                                    <!-- - - - - - - - - - - - - - End of taday's deals - - - - - - - - - - - - - - - - -->

                                                 
                                                   
                                                    <!-- - - - - - - - - - - - - - Banners - - - - - - - - - - - - - - - - -->

                                                    <div class="section_offset">

                                                        <div class="row">

                                                            <div class="col-sm-4">

                                                                <div class="animated transparent" data-animation="fadeInDown">

                                                                    <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                                                                    <a href="#" class="banner">
                                                                        <img src="<?php echo ROOT_PATH; ?>images/banner_img_3.jpg" alt="">
                                                                    </a>

                                                                    <!-- - - - - - - - - - - - - - End banner - - - - - - - - - - - - - - - - -->

                                                                </div><!--/ .animated.transparent-->

                                                            </div><!--/ [col]-->

                                                            <div class="col-sm-4">

                                                                <div class="animated transparent" data-animation="fadeInDown" data-animation-delay="150">

                                                                    <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                                                                    <a href="#" class="banner">
                                                                        <img src="<?php echo ROOT_PATH; ?>images/banner_img_4.jpg" alt="">
                                                                    </a>

                                                                    <!-- - - - - - - - - - - - - - End banner - - - - - - - - - - - - - - - - -->

                                                                    <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                                                                    <a href="#" class="banner">
                                                                        <img src="<?php echo ROOT_PATH; ?>images/banner_img_5.jpg" alt="">
                                                                    </a>

                                                                    <!-- - - - - - - - - - - - - - End banner - - - - - - - - - - - - - - - - -->

                                                                </div><!--/ .animated.transparent-->

                                                            </div><!--/ [col]-->

                                                            <div class="col-sm-4">

                                                                <div class="animated transparent" data-animation="fadeInDown" data-animation-delay="450">

                                                                    <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                                                                    <a href="#" class="banner">
                                                                        <img src="<?php echo ROOT_PATH; ?>images/banner_img_6.jpg" alt="">
                                                                    </a>

                                                                    <!-- - - - - - - - - - - - - - End banner - - - - - - - - - - - - - - - - -->

                                                                </div><!--/ .animated.transparent-->

                                                            </div><!--/ [col]-->

                                                        </div><!--/ .row-->

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - End of banners - - - - - - - - - - - - - - - - -->

                                                    <!-- - - - - - - - - - - - - - Bestsellers - - - - - - - - - - - - - - - - -->

                                                    <section class="section_offset animated transparent" data-animation="fadeInDown"> 

                                                        <h3>Bestsellers</h3>

                                                        <div class="tabs type_2 products">

                                                            <!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

                                                           <?php prepareCategoryTabMenu(21) ?>

                                                            <!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

                                                            <!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

                                                            <div class="tab_containers_wrap">

                                                                <div id="tab-22" class="tab_container">

                                                                    <!-- - - - - - - - - - - - - - Carousel of medicine & health - - - - - - - - - - - - - - - - -->

                                                                    <div class="owl_carousel carousel_in_tabs type_2">

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/product_img_7.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <a href="#">Aenean Auctor Wisi Et Urna Amet, Liqui-gels 24 capsules</a>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><b>$5.99</b></p>

                                                                                </div>

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/product_img_8.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <a href="#">Ipsum Dolor Sit Amet Adipiscing Elit, Allergy &amp; Sinus 4.25 fl oz(126 ml)</a>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><b>$8.99</b></p>

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                                                                </div>

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/product_img_9.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <a href="#">Dolor Sit Amet Lorem, 2mg, White Ice Mint 160 ea</a>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><b>$76.99</b></p>

                                                                                </div>

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/product_img_10.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <a href="#">Ipsum Dolor Sit Amet Adipiscing, Capsules 60 ea</a>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><b>$35.99</b></p>

                                                                                </div>

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/product_img_7.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <a href="#">Aenean Auctor Wisi Et Urna Amet, Liqui-gels 24 capsules</a>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><b>$5.99</b></p>

                                                                                </div>

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/product_img_8.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <a href="#">Ipsum Dolor Sit Amet Adipiscing Elit, Allergy &amp; Sinus 4.25 fl oz(126 ml)</a>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><b>$8.99</b></p>

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                                                                </div>

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/product_img_9.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <a href="#">Dolor Sit Amet Lorem, 2mg, White Ice Mint 160 ea</a>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><b>$76.99</b></p>

                                                                                </div>

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/product_img_10.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <a href="#">Ipsum Dolor Sit Amet Adipiscing, Capsules 60 ea</a>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><b>$35.99</b></p>

                                                                                </div>

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                    </div><!--/ .owl_carousel-->

                                                                    <!-- - - - - - - - - - - - - - End of carousel of medicine & health - - - - - - - - - - - - - - - - -->

                                                                </div><!--/ #tab-22-->

                                                                <div id="tab-23" class="tab_container">

                                                                    <!-- - - - - - - - - - - - - - Carousel of beauty products - - - - - - - - - - - - - - - - -->

                                                                    <div class="owl_carousel carousel_in_tabs type_2">

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/tabs_img_2.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <a href="#">Vestibulum Iaculis Lacinia Amet 30</a>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                                                                </div>

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/product_img_1.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <a href="#">Ipsum Dolor Sit Amet Adipiscing, Capsules 60 ea</a>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><b>$27.99</b></p>

                                                                                </div>

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/product_img_8.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing, 2.5 fl oz (75ml)</a>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                                                </div>

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/tabs_img_1.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <a href="#">Aenean Auctor Wisi Et Urna Ipsum 750mg, Softgels 120 ea</a>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                                                </div>

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/tabs_img_1.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <a href="#">Aenean Auctor Wisi Et Urna Ipsum 750mg, Softgels 120 ea</a>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                                                </div>

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/tabs_img_2.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <a href="#">Vestibulum Iaculis Lacinia Amet 30</a>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                                                                </div>

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/tabs_img_3.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <a href="#">Lorem Ipsum Dolor Sit Amet Con Sectetuer Adipiscing, 2.5 fl oz (75ml)</a>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                                                </div>

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/product_img_1.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <a href="#">Ipsum Dolor Sit Amet Adipiscing, Capsules 60 ea</a>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><b>$27.99</b></p>

                                                                                </div>

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                    </div><!--/ .owl_carousel-->

                                                                    <!-- - - - - - - - - - - - - - End of carousel of beauty products - - - - - - - - - - - - - - - - -->

                                                                </div><!--/ #tab-23-->

                                                                <div id="tab-24" class="tab_container">

                                                                    <!-- - - - - - - - - - - - - - Carousel of personal care - - - - - - - - - - - - - - - - -->

                                                                    <div class="owl_carousel carousel_in_tabs type_2">

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_5.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_4.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_1.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_2.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_3.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                    </div><!--/ .owl_carousel-->

                                                                    <!-- - - - - - - - - - - - - - End of carousel of personal care - - - - - - - - - - - - - - - - -->

                                                                </div><!--/ #tab-24-->

                                                                <div id="tab-25" class="tab_container">

                                                                    <!-- - - - - - - - - - - - - - Carousel of vitamins & supplements - - - - - - - - - - - - - - - - -->

                                                                    <div class="owl_carousel carousel_in_tabs type_2">

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/tabs_img_1.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_2.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/tabs_img_3.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_4.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_5.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                    </div><!--/ .owl_carousel-->

                                                                    <!-- - - - - - - - - - - - - - End of carousel of vitamins & supplements - - - - - - - - - - - - - - - - -->

                                                                </div><!--/ #tab-25-->

                                                                <div id="tab-26" class="tab_container">

                                                                    <!-- - - - - - - - - - - - - - Carousel of baby needs products - - - - - - - - - - - - - - - - -->

                                                                    <div class="owl_carousel carousel_in_tabs type_2">

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_2.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_1.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_4.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_3.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_5.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                    </div><!--/ .owl_carousel-->

                                                                    <!-- - - - - - - - - - - - - - End of carousel of baby needs products - - - - - - - - - - - - - - - - -->

                                                                </div><!--/ #tab-26-->

                                                                <div id="tab-27" class="tab_container">

                                                                    <!-- - - - - - - - - - - - - - Carousel of diet & fitness products - - - - - - - - - - - - - - - - -->

                                                                    <div class="owl_carousel carousel_in_tabs type_2">

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_5.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_4.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_1.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_2.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_3.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                    </div><!--/ .owl_carousel-->

                                                                    <!-- - - - - - - - - - - - - - End of carousel of diet & fitness products - - - - - - - - - - - - - - - - -->

                                                                </div><!--/ #tab-27-->

                                                                <div id="tab-28" class="tab_container">

                                                                    <!-- - - - - - - - - - - - - - Carousel of sexual well-being - - - - - - - - - - - - - - - - -->

                                                                    <div class="owl_carousel carousel_in_tabs type_2">

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/tabs_img_2.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_2.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/tabs_img_3.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_4.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                                                    <ul class="rating alignright">

                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li class="active"></li>
                                                                                        <li></li>
                                                                                        <li></li>

                                                                                    </ul>

                                                                                    <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                                                    <p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                                        <div class="product_item">

                                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <div class="image_wrap">

                                                                                <img src="<?php echo ROOT_PATH; ?>images/deals_img_5.jpg" alt="">

                                                                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                                    <div class="actions_wrap">

                                                                                        <div class="centered_buttons">

                                                                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                                                                        </div><!--/ .centered_buttons -->

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                                                                    </div><!--/ .actions_wrap-->

                                                                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                                            </div><!--/. image_wrap-->

                                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                                            <div class="label_bestseller">Bestseller</div>

                                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                                            <div class="description">

                                                                                <p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

                                                                                <div class="clearfix product_info">

                                                                                    <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

                                                                                </div><!--/ .clearfix.product_info-->

                                                                            </div>

                                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                                        </div><!--/ .product_item-->

                                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                                    </div><!--/ .owl_carousel-->

                                                                    <!-- - - - - - - - - - - - - - End of carousel of sexual well-being  - - - - - - - - - - - - - - - - -->

                                                                </div><!--/ #tab-28-->

                                                            </div>

                                                            <!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->

                                                        </div>

                                                    </section><!--/ .section_offset-->

                                                    <!-- - - - - - - - - - - - - - End of bestsellers - - - - - - - - - - - - - - - - -->

                                                </div><!--/ .container-->

                                            </div><!--/ .page_wrapper-->

<!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
<?php include 'footer.php'; ?>