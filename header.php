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
<?php $banner = get_field('banner'); ?>
<?php if ( is_home() || is_front_page() ) { 
$partners_text = get_field('partners_text','option'); 
$tagline = get_bloginfo('description');
$meta_title = get_bloginfo('name');
if($tagline) {
	$meta_title = $meta_title . ' - ' . $tagline;
}
?>
<meta property="og:url" content="https://midwoodsmokehouse.com/" />
<meta property="og:title" content="<?php echo $meta_title; ?>" />
<meta property="og:description" content="<?php echo $partners_text ?>" />
<?php } else { ?>
	<?php if ( get_the_title() ) { ?>
	<meta property="og:title" content="<?php echo get_the_title(); ?>" />
	<meta property="og:url" content="<?php echo get_permalink(); ?>" />
	<?php } ?>
	<?php if(get_the_content()) { ?>
	<meta property="og:description"  content="<?php echo get_the_excerpt(); ?>" />
	<?php } ?>
<?php } ?>
<?php if ($banner) { ?>
<meta property="og:image" content="<?php echo $banner['sizes']['large'] ?>" />	
<?php } ?>

<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="topDiv"></div>
<div id="overlaydiv"><a class="closeOverlay" href="#"><i class="far fa-times-circle"></i><span style="display:none;">Close</span></a></div>
<div class="smokebg">
	<div class="move-r-l smoke"></div>
</div>
<div id="page" class="site clear">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bellaworks' ); ?></a>
	<header id="masthead" class="site-header clear" role="banner">
		<div class="wrapper clear row1">
			<div class="orderNowInfo">
				<div class="orderNowText">
					<?php  
						$order_logo[] = array(
								'image'=>get_field('logo_1','option'),
								'url'=>get_field('logo_1_link','option'),
								'text'=>get_field('logo_1_text','option')
							);
						$order_logo[] = array(
								'image'=>get_field('logo_2','option'),
								'url'=>get_field('logo_2_link','option'),
								'text'=>get_field('logo_2_text','option')
							);
					?>

					<?php $j=1; foreach ($order_logo as $o) { 
						$o_logo = $o['image'];
						$o_link = $o['url'];
						$o_text = $o['text'];
						if($o_logo && $o_link) { ?>
							<a class="o-info logo<?php echo $j?>" href="<?php echo $o_link ?>" target="_blank">
								<span class="imgwrap"><img src="<?php echo $o_logo['url'] ?>" alt="<?php echo $o_logo['title'] ?>" /></span>
								<?php if ($o_text) { ?>
									<span class="details">
										<span class="txt1"><?php echo $o_text; ?></span>
									</span>
								<?php } ?>
							</a>
						<?php $j++; } ?>
					<?php } ?>

				</div>
				<a href="#" class="orderNowBtn">
					<span class="lbl">ORDER NOW</span>
					<span class="ribbon"></span>
					<span class="shadowL"></span>
					<span class="shadowR"><span></span></span>
				</a>
			</div>
			
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
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="sr-only"><?php esc_html_e( 'MENU', 'bellaworks' ); ?></span><span class="burger"></span></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container_class'=>'menuwrap','link_before'=>'<span>','link_after'=>'</span>' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>

	</header><!-- #masthead -->

	<?php get_template_part('template-parts/banner') ?>

	<div id="content" class="site-content wrapper">
