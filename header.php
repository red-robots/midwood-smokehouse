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
<meta property="og:type" content="website" />
<?php } else { ?>
	<?php if ( get_the_title() ) { ?>
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?php echo get_the_title(); ?>" />
	<meta property="og:url" content="<?php echo get_permalink(); ?>" />
	<?php } ?>
	<?php if(get_the_content()) { ?>
	<meta property="og:description"  content="<?php echo get_the_excerpt(); ?>" />
	<?php } ?>
<?php } ?>
<?php if ($banner) {  ?>
<meta property="og:image" content="<?php echo $banner['sizes']['large'] ?>" />	
<?php } ?>

<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131407606-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131407606-3');
</script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php 
$active = get_field('toggle_on', 'option');
$offer = get_field('offer', 'option');
$btnText = get_field('button_text', 'option');
$btnLink = get_field('button_link', 'option');
$is_turn_on = ( isset($active[0]) && $active[0] ) ? $active[0] : '';
// echo '<pre>';
// print_r($active);
// echo '</pre>';
 ?>
<!-- Gift Card popup -->
<?php if( $is_turn_on == 'turnon' && is_front_page() ) { ?>
	<div style="display: none;">
		<div class='ajax popup' >
			<a href="<?php echo $btnLink; ?>" target="_blank">
				<?php echo $offer; ?>
			</a>
		<br>
			<div class="view-btn">
				<a href="<?php echo $btnLink; ?>" target="_blank"><?php echo $btnText; ?></a>
			</div>
		</div>
	</div>
<?php } ?>

<!-- <div style='display:none'>
	<div id='inline_content' class="ajax popup">
		<a href="https://direct.chownow.com/order/1482/locations" target="_blank">
			<img src="<?php //bloginfo('template_url'); ?>/images/curbside.jpg">
		</a>
	</div>
</div> -->


<div id="topDiv"></div>
<div id="overlaydiv"><a class="closeOverlay" href="#"><i class="far fa-times-circle"></i><span style="display:none;">Close</span></a></div>
<div class="smokebg">
	<div class="move-r-l smoke"></div>
</div>
<div id="page" class="site clear">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bellaworks' ); ?></a>
	<header id="masthead" class="site-header clear" role="banner">
		<div class="wrapper clear row1">

      <?php $delivery = get_field("delivery_platforms","option"); ?>
			<?php if ($delivery) { ?>
      <div class="orderNowInfo">
				<div class="orderNowText">
					<?php $j=1; foreach ($delivery as $d) { 
            $brandImg = ( isset($d['logo']) && $d['logo'] ) ? $d['logo'] : '';
            $brandLink = ( isset($d['url']) && $d['url'] ) ? $d['url'] : 'javascript:void(0)';
            $linkTarget = ( isset($d['url']) && $d['url'] ) ? '_blank' : '_self';
            $a_class = ($brandImg) ? 'has-logo':'no-logo';
            $a_class .= ( isset($d['url']) && $d['url'] ) ? ' hasLink':' noLink';

            if($d['url'] || $d['text']) { ?>
              <a class="o-info logo<?php echo $j?> <?php echo $a_class?>" href="<?php echo $brandLink ?>" target="<?php echo $linkTarget ?>">
                <?php if ( $brandImg ) { ?>
                  <span class="imgwrap"><img src="<?php echo $brandImg['url'] ?>" alt="<?php echo $brandImg['title'] ?>" /></span>
                <?php } ?>
                <?php if ($d['text']) { ?>
                  <span class="details">
                    <span class="txt1"><?php echo $d['text']; ?></span>
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
      <?php } ?>
			
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
