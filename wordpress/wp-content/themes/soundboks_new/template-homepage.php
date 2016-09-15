<?php
/**
 * Template Name: Homepage
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

    <!-- THE SHOP CART SECTION
    =============================================-->
    <section class="shop-cart">
        <hr>
        <div class="container">
            <form class="form-actions" action="" method="POST">
            <div class="row top-space">
                <div class="col-md-4">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="<?php bloginfo('template_url'); ?>/images/4.png" alt="speaker">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">SOUNDBOKS PEAKER SYSTEM</h4>
                        <p>Two BATTERYBOKS, AUX cable, 220V charge.</p>

                          <p>  Shipping: 2-3 days.</p>
                      </div>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-1 col-xs-push-4 col-xs-2 col-md-push-0">
                    <div class="price-card">
                        <a href="#">&euro;699.00</a>
                    </div>
                </div>
                <div class="col-md-2 col-xs-pull-3 col-xs-6 col-md-pull-0">
                    <div class="quantity-card text-center">
                        <a href="#"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                        <div class="quanty">
                            <input type="hidden" class="form-control" id="exampleInputAmount">3
                        </div>
                        <a href="#"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-2 col-xs-3">
                    <div class="total-card text-right">
                        <a href="#">&euro;2.796.00</a>
                    </div>
                </div>
                <div class="col-md-1 hidden-xs">
                    <div class="total-card">
                         <a href="" id="del-all-card"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div><!--end row/**** -->
            <div class="divider"></div>
            <div class="row top-space">
                <div class="col-md-4">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="<?php bloginfo('template_url'); ?>/images/4.png" alt="speaker">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">SOUNDBOKS PEAKER SYSTEM</h4>
                        <p>Two BATTERYBOKS, AUX cable, 220V charge.</p>

                          <p>  Shipping: 2-3 days.</p>
                      </div>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-1 col-xs-push-4 col-xs-2 col-md-push-0">
                    <div class="price-card">
                        <a href="#">&euro;699.00</a>
                    </div>
                </div>
                <div class="col-md-2 col-xs-pull-3 col-xs-6 col-md-pull-0">
                    <div class="quantity-card text-center">
                        <a href="#"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                        <div class="quanty">
                            <input type="hidden" class="form-control" id="exampleInputAmount">3
                        </div>
                        <a href="#"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-2 col-xs-3">
                    <div class="total-card text-right">
                        <a href="#">&euro;2.796.00</a>
                    </div>
                </div>
                <div class="col-md-1 hidden-xs">
                    <div class="total-card">
                         <a href="" id="del-all-card"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div><!--end row/**** -->
            <hr>
            <div class="row">
                <div class="col-md-7">
                   <div class="form-inline form-discount">
                      <div class="form-group">
                        <div class="input-group">
                          <input type="text" class="form-control" id="exampleInputAmount" placeholder="DISCOUNT CODE">
                        </div>
                      </div>
                      <button type="submit" value="apply" class="btn btn-apply">Apply Discount</button>
                  </div>
                  <div class="check-disc">
                    <i class="fa fa-check-circle hidden-xs hidden-sm" aria-hidden="true"></i>
                    <h3 class="hidden-xs hidden-sm"><span>SBJULY16</span>: $200 discount for purchase of a SOUNDBOKS
                    or other related products above $600</h3>
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                    <h3><span>SBJULY16</span>: $200 discount for purchase of a SOUNDBOKS
                    or other related products above $600</h3>
                  </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="total-all">
                        <h3>Total  <span class="value-spend">&dollar; 799</span></h3>
                        <h3>APPLIED DISCOUNT  <span class="value-spend">-&dollar;3,459.00</span></h3>
                        <h3>ORDER SUBTOTAL  <span class="value-spend">&dollar; $17,997</span></h3>
                        <div class="form-inline">
                           <a href="#" class="update-cart">
                              <i class="fa fa-refresh" aria-hidden="true"></i> Update Cart
                           </a>
                           <button type="submit" class="btn btn-checkout" value="checkout">Checkout</button>
                        </div>
                         <div class="checkout-info">
                             <p>INCl. 15% VAT 230,- DKK</p>
                             <p>PAY AS LITTLE AS $25/MONTH</p>
                             <p>Apply & check out in seconds</p>
                             <a href="#">Learn More</a>
                         </div>
                    </div>
                </div>
            </div><!--end row/**** -->
         </form>
        </div><!--end container/**** -->
    </section>
    <!--End THE SHOP CART SECTION
    ============================================== -->

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
