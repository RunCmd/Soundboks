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

    <!-- THE SHOP CART SECTION
    =============================================-->
    <section class="shop-cart">
        <hr>
        <div class="container">
            <div class="row top-space">
                <div class="col-md-4">
                    <div class="media">
                      <div class="media-left product-thumbnail">
                        <?php
                            $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

                            if ( ! $product_permalink ) {
                              echo $thumbnail;
                            } else {
                              printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail );
                            }
                          ?>
                       <!--  <a href="#">
                          <img class="media-object" src="<?php bloginfo('template_url'); ?>/images/4.png" alt="speaker">
                        </a> -->
                      </div>
                      <div class="media-body product-name" data-title="<?php _e( 'Product', 'woocommerce' ); ?>">
                        <?php
                          if ( ! $product_permalink ) {
                            echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;';
                          } else {
                            echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_title() ), $cart_item, $cart_item_key );
                          }

                          // Meta data
                          echo WC()->cart->get_item_data( $cart_item );

                          // Backorder notification
                          if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                            echo '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>';
                          }
                        ?>
                      <!--   <h4 class="media-heading">SOUNDBOKS PEAKER SYSTEM</h4>
                        <p>Two BATTERYBOKS, AUX cable, 220V charge.</p>

                          <p>  Shipping: 2-3 days.</p> -->
                      </div>
                    </div><!-- END IMAGE PRODUCT AND PRODUCT NAME-->
                </div><!-- End DIv Col md -4  -->
                <div class="col-md-2 col-md-offset-1 col-xs-push-4 col-xs-2 col-md-push-0">
                    <div class="price-card product-price" data-title="<?php _e( 'Price', 'woocommerce' ); ?>">
                        <?php
                           echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
                          ?>
                        <!-- <a href="#">&euro;699.00</a> -->
                    </div>
                </div>
                <div class="col-md-2 col-xs-pull-3 col-xs-6 col-md-pull-0">
                    <div class="quantity-card text-center product-quantity" data-title="<?php _e( 'Quantity', 'woocommerce' ); ?>">
                        <?php
                          if ( $_product->is_sold_individually() ) {
                            $product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                          } else {
                            $product_quantity = woocommerce_quantity_input( array(
                              'input_name'  => "cart[{$cart_item_key}][qty]",
                              'input_value' => $cart_item['quantity'],
                              'max_value'   => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
                              'min_value'   => '0'
                            ), $_product, false );
                          }

                          echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
                        ?>
                        <!-- <a href="#"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                        <div class="quanty">
                            <input type="hidden" class="form-control" id="exampleInputAmount">3
                        </div>
                        <a href="#"><i class="fa fa-caret-down" aria-hidden="true"></i></a> -->
                    </div>
                </div>
                <div class="col-md-2 col-xs-3">
                    <div class="total-card product-subtotal text-right" data-title="<?php _e( 'Total', 'woocommerce' ); ?>">
                        <?php
                          echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
                        ?>
                        <!-- <a href="#">&euro;2.796.00</a> -->
                    </div>
                </div>
                <div class="col-md-1 hidden-xs">
                    <div class="total-card product-remove">
                         <?php
                          echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
                            '<a href="%s" class="remove" title="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
                            esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
                            __( 'Remove this item', 'woocommerce' ),
                            esc_attr( $product_id ),
                            esc_attr( $_product->get_sku() )
                          ), $cart_item_key );
                        ?>
                         <!-- <a href="" id="del-all-card"><i class="fa fa-times" aria-hidden="true"></i></a> -->
                    </div>
                </div>
            </div><!--end row/****  HERE ENDS THE PRODUCT TABLE-->
            <?php
      }
    }

    do_action( 'woocommerce_cart_contents' );
    ?>
    <!-- BEGIN WITH ACTIONS AND UPDATE CART FROM THE TABLE  -->
            <div class="divider"></div>
            <hr>
            <div class="row actions">
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
                              <i class="fa fa-refresh" aria-hidden="true"></i>
                              <input type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update Cart', 'woocommerce' ); ?>" /> Update Cart
                           </a>
                           <?php do_action( 'woocommerce_cart_actions' ); ?>

                           <?php wp_nonce_field( 'woocommerce-cart' ); ?>
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
            </div>
        </div>
        <!-- PRODUCTS end /********-->
        <hr>
    </section>
     <!--End SECTION FORTH CONTENT END
    ============================================== -->
<?php
get_footer();
