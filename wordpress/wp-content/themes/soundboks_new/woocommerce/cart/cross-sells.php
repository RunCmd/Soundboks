<?php
/**
 * Cross-sells
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cross-sells.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product, $woocommerce_loop;

if ( ! $crosssells = WC()->cart->get_cross_sells() ) {
	return;
}

$args = array(
	'post_type'           => 'product',
	'ignore_sticky_posts' => 1,
	'no_found_rows'       => 1,
	'posts_per_page'      => apply_filters( 'woocommerce_cross_sells_total', $posts_per_page ),
	'orderby'             => $orderby,
	'post__in'            => $crosssells,
	'meta_query'          => WC()->query->get_meta_query()
);

$products                    = new WP_Query( $args );
$woocommerce_loop['name']    = 'cross-sells';
$woocommerce_loop['columns'] = apply_filters( 'woocommerce_cross_sells_columns', $columns );

if ( $products->have_posts() ) : ?>

	<div class="cross-sells">

	</div>
	<!--ALSO INTERSTED SECTION FORTH
    ============================================== -->
    <section class="interest-in hidden-xs hidden-sm">
        <div class="container-fluid">
         <div class="row">
            <div class="col-md-4">
               <h2 class="hr-line"></h2>
            </div>
            <div class="col-md-4 content-in text-center"><h2><span class="line"></span><?php _e( 'You may be interested in&hellip;', 'woocommerce' ) ?><span class="line"></span></h2></div>
             <div class="col-md-4">
               <h2 class="hr-line"></h2>
            </div>
         </div>
        </div><!-- End fluid CONTAINER /*********-->
        <div class="container in-stock">
            <div class="row">
                <div class="col-md-6">
                  	<?php woocommerce_product_loop_start(); ?>

					<?php while ( $products->have_posts() ) : $products->the_post(); ?>

						<?php wc_get_template_part( 'content', 'product' ); ?>

					<?php endwhile; // end of the loop. ?>

				<?php woocommerce_product_loop_end(); ?>
                </div>
            </div>
        </div>
        <!-- PRODUCTS end /********-->
        <hr>
    </section>
     <!--End SECTION FORTH CONTENT END
    ============================================== -->

<?php endif;

wp_reset_query();
