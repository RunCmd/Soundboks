<?php
/**
 * Template Name: Shop Cart Template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package soundboks_new
 */

get_header(); ?>

	 <!--CART / Garanties Section - CONTENT START
    ============================================= -->
 <section class="garanties">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="cart-i">
                    <img src="<?php bloginfo('template_url'); ?>/images/big-cart-icon.png" alt="big cart" />
                    <h1>CART</h1>
                </div>
            </div>
            <div class="col-md-3 hidden-xs hidden-sm width-icons">
                <div class="icons-i">
                    <img src="<?php bloginfo('template_url'); ?>/images/return-icon.png" alt="big cart" />
                    <h1>30 Days return</h1>
                </div>
            </div>
            <div class="col-md-3 hidden-xs hidden-sm width-icons">
                <div class="icons-i">
                    <img src="<?php bloginfo('template_url'); ?>/images/materials.png" alt="big cart" />
                    <h1>2 Years Warranty</h1>
                </div>
            </div>
            <div class="col-md-3 hidden-xs hidden-sm width-icons">
                <div class="icons-i">
                    <img src="<?php bloginfo('template_url'); ?>/images/shipping-icon.png" alt="big cart" />
                    <h1 id="world-text">Worldwide Instant Shipping</h1>
                </div>
            </div>
        </div><!-- end Row /*** -->
        
    </div><!--end container/**** -->
 </section>
<!--End CART /GARANTS SECTION
    ============================================= -->

     <!--ALSO INTERSTED SECTION FORTH
    ============================================== -->
    <section class="interest-in hidden-xs hidden-sm">
        <div class="container-fluid">
         <div class="row">
            <div class="col-md-4">
               <h2 class="hr-line"></h2>
            </div>
            <div class="col-md-4 content-in text-center"><h2><span class="line"></span>YOU MIGHT ALSO BE INTERESTED IN...<span class="line"></span></h2></div>
             <div class="col-md-4">
               <h2 class="hr-line"></h2>
            </div>
         </div>
        </div><!-- End fluid CONTAINER /*********-->
        <div class="container in-stock">
            <div class="row">
                <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="<?php bloginfo('template_url'); ?>/images/item-img.png" alt="microphone">
                        </a>
                      </div>
                      <div class="media-body">
                        <a href="#" class="media-heading">
                            <div class="title-stock">
                                <h3>NUCLEAR PACKAGE</h3>
                                 <p>Charge your phone up to 6 times on a single charge.</p>
                            </div>
                            <div class="cost-stock">
                                <p>$1,340</p>
                                <p>PAY FROM €30/MONTH</p>
                                <span>read about Klarna</span>
                            </div>
                        </a>
                      </div>
                    </div><!-- End STOCK Product /******-->

                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="<?php bloginfo('template_url'); ?>/images/item-img.png" alt="microphone">
                        </a>
                      </div>
                      <div class="media-body">
                        <a href="#" class="media-heading">
                            <div class="title-stock">
                                <h3>NUCLEAR PACKAGE</h3>
                                 <p>Charge your phone up to 6 times on a single charge.</p>
                            </div>
                            <div class="cost-stock">
                                <p>$1,340</p>
                                <p>PAY FROM €30/MONTH</p>
                                <span>read about Klarna</span>
                            </div>
                        </a>
                      </div>
                    </div><!-- End STOCK Product /******-->
                </div>
                <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="<?php bloginfo('template_url'); ?>/images/item-img.png" alt="microphone">
                        </a>
                      </div>
                      <div class="media-body">
                        <a href="#" class="media-heading">
                            <div class="title-stock">
                                <h3>NUCLEAR PACKAGE</h3>
                                 <p>Charge your phone up to 6 times on a single charge.</p>
                            </div>
                            <div class="cost-stock">
                                <p>$1,340</p>
                                <p>PAY FROM €30/MONTH</p>
                                <span>read about Klarna</span>
                            </div>
                        </a>
                      </div>
                    </div><!-- End STOCK Product /******-->
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="<?php bloginfo('template_url'); ?>/images/item-img.png" alt="microphone">
                        </a>
                      </div>
                      <div class="media-body">
                        <a href="#" class="media-heading">
                            <div class="title-stock">
                                <h3>NUCLEAR PACKAGE</h3>
                                 <p>Charge your phone up to 6 times on a single charge.</p>
                            </div>
                            <div class="cost-stock">
                                <p>$1,340</p>
                                <p>PAY FROM €30/MONTH</p>
                                <span>read about Klarna</span>
                            </div>
                        </a>
                      </div>
                    </div><!-- End STOCK Product /******-->
                </div>
            </div>
        </div>
        <!-- PRODUCTS end /********-->
        <hr>
    </section>
     <!--End SECTION FORTH CONTENT END
    ============================================== -->
<?php
get_footer();
