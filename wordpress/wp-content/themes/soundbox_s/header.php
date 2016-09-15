<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soundbox_s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Bootstrap and myStyle  css-->
  <link href="<?php bloginfo("template_url");?>/css/bootstrap.min.css" rel="stylesheet">
   <!-- Custom styles for this template  -->
   <link href="<?php bloginfo("template_url");?>/css/mystyle.css" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'soundbox_s' ); ?></a> -->

	<header id="masthead" class="site-header" role="banner">
				<!-- Navigation -->
		    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		        <div class="container">
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
		                    Menu <i class="fa fa-bars"></i>
		                </button>
		                <a class="navbar-brand page-scroll" href="#page-top">
		                    <img src="<?php bloginfo("template_url");?>/images/soundboks-black.png">
		                </a>
		            </div>

		            <!-- Collect the nav links, forms, and other content for toggling -->
		            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
		            	<ul class="nav navbar-nav">
		                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
		                    <li class="hidden">
		                        <a href="#page-top"></a>
		                    </li>
		                    <li>
		                        <a class="page-scroll" href="#about">About</a>
		                    </li>
		                    <li>
		                        <a class="page-scroll" href="#download">Download</a>
		                    </li>
		                    <li>
		                        <a class="page-scroll" href="#contact">Contact</a>
		                    </li>
		                </ul>
		                <ul class="nav navbar-nav">
		                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
		                    <li class="hidden">
		                        <a href="#page-top"></a>
		                    </li>
		                    <li>
		                        <a class="page-scroll" href="#about">About</a>
		                    </li>
		                    <li>
		                        <a class="page-scroll" href="#download">Download</a>
		                    </li>
		                    <li>
		                        <a class="page-scroll" href="#contact">Contact</a>
		                    </li>
		                </ul>
		            </div>
		            <!-- /.navbar-collapse -->
		        </div>
		        <!-- /.container -->
		    </nav>

	<!-- 	<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'soundbox_s' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav> #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">