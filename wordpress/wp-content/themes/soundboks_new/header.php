<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soundboks_new
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Bootstrap Core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/mystyle.css" rel="stylesheet">
 	<!--Fonts Styles-->
     <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- Header
	    ============================================= -->
	    <header class="site-header main-header" id="masthead" role="banner">
	        <nav class="navbar navbar-main">
	            <div class="container">
	                <div class="navbar-header">
	                  <div class="row">
	                    <button type="button" class="col-xs-1 navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	                        <i class="fa fa-bars" aria-hidden="true"></i>
	                    </button>
	                    <a class="navbar-brand col-xs-9" href="#"><img src="<?php bloginfo('template_url'); ?>/images/soundboks-black.png" alt="logo"></a>
	                    <a href="#" id="shop-cart" class="col-xs-1 visible-xs"><img src="<?php bloginfo('template_url'); ?>/images/cart-full-black.png" alt="shopping cart"></a>
	                  </div>
	                </div>
	                <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
	                    <div class="col-md-8 col-xs-12 nav-wrap">
	                        <ul class="nav navbar-nav nav-region">
	                            <li><a href="#owl-hero" class="page-scroll">US</a></li>
	                            <li><a href="#owl-hero" class="line">|</a></li>
	                            <li><a href="#services" class="page-scroll">Europe</a></li>
	                        </ul>
	                    </div>
	                    <div class="main-shop">
	                    	<?php wp_nav_menu( array('menu_class' =>'nav navbar-nav', 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
	                    </div>
	                </div>
	            </div>
	        </nav>
	    </header>
	<!--End  Header #masthead 
	    ============================================= -->
