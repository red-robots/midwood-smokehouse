<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bellaworks
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="smokebg">
	<div class="move-r-l smoke"></div>
</div>
<div id="page" class="site clear">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bellaworks' ); ?></a>
	<header id="masthead" class="site-header clear" role="banner">
		<div class="wrapper clear row1">
			<a href="#" class="orderNowBtn">
				<span class="lbl">ORDER NOW</span>
				<span class="ribbon"></span>
				<span class="shadowL"></span>
				<span class="shadowR"><span></span></span>
			</a>
			<div class="logowrap">
			<?php if( get_custom_logo() ) { ?>
				<?php if ( is_home() ) { ?>
					<h1 class="logo">
		            	<?php the_custom_logo(); ?>
		            </h1>
				<?php } else { ?>
					<div class="logo">
		            	<?php the_custom_logo(); ?>
		            </div>
				<?php } ?>
	        <?php } else { ?>
	            <div class="logo">
		            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
	            </div>
	        <?php } ?>
	        </div>
		</div><!-- wrapper -->
		<div class="wrapper clear row2">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'bellaworks' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container_class'=>'menuwrap','link_before'=>'<span>','link_after'=>'</span>' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>

	</header><!-- #masthead -->

	<?php if ( is_front_page() || is_home() ) { ?>
		<?php get_template_part('template-parts/banner') ?>
	<?php } ?>

	<div id="content" class="site-content wrapper">
