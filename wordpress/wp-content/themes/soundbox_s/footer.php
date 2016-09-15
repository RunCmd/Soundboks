<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soundbox_s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'soundbox_s' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'soundbox_s' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'soundbox_s' ), 'soundbox_s', '<a href="http://underscores.me/" rel="designer">SoundBoks</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

 <?php wp_enqueue_script('jquery');?>
<?php wp_footer(); ?>
<!-- Javascript Bootstrap/ Jquery / Custom JS-->

 <script src="<?php bloginfo("template_url");?>/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo("template_url");?>/js/myjs.js"></script>
</body>
</html>