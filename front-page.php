<?php 
get_header(); 
?>
<main id="main" class="site-main clear" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="locations-section wrapper clear">
		<h3 class="row-title text-center">Locations</h3>
		<?php  
		$locations = get_field('locations');
		if($locations) { ?>
		<div class="fullwrap">
			<div class="flexrow">
				<?php foreach ($locations as $row) { 
				$name = $row['name'];
				$address = $row['address']; ?>
					<?php if ($name && $address) { ?>
					<div class="flexbox location-info">
						<h3 class="name"><?php echo $name; ?></h3>
						<div class="address"><?php echo $address; ?></div>
					</div>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
		<?php } ?>
	</div>

	<?php  
	$testimonial = get_field('featured_testimonial');
	if($testimonial) {
		$content = $testimonial->post_content;
		$content = apply_filters('the_content',$content);
	}
	if($testimonial) { ?>
	<div class="featured-testimonial">
		<div class="wrapper">
			<div class="midwrap text-center">
				<?php if ($testimonial->post_content) { ?>
					<div class="testimonial"><?php echo $content; ?></div>
					<div class="author">- <?php echo $testimonial->post_title; ?> -</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php } ?>


	<?php 
		$order_title = get_field('order_section_title'); 
		$download_text1 = get_field('download_text1'); 
		$download_text2 = get_field('download_text2'); 
		$apple_app_logo = get_field('apple_app_logo'); 
		$apple_url = get_field('apple_url'); 
		$android_app_logo = get_field('android_app_logo'); 
		$android_url = get_field('android_url'); 
	?>
	<div class="order-online-section clear">
		<div class="wrapper">
			<?php if ($order_title) { ?>
			<h3 class="fork-title row-title text-center"><span><?php echo $order_title; ?></span></h3>
			<?php } ?>

			<div class="ribbon clear">
				<div class="fullwrap">
					<div class="inside">
						<div class="flexrow">
							<div class="col col1">
							<?php if ($download_text1) { ?>
								<div class="dl dtxt1"><?php echo $download_text1 ?></div>
							<?php } ?>
							<?php if ($download_text2) { ?>
								<div class="dl dtxt2"><?php echo $download_text2 ?></div>
							<?php } ?>
							</div>
							<div class="col col2">
								<div class="wrap">
									<?php if ($apple_app_logo && $apple_url) { ?>
										<a class="applogo apple" href="<?php echo $apple_url ?>" target="_blank"><img src="<?php echo $apple_app_logo['url'] ?>" alt="App Store"></a>
									<?php } ?>
									<?php if ($android_app_logo && $android_url) { ?>
										<a class="applogo googleplay" href="<?php echo $android_url ?>" target="_blank"><img src="<?php echo $android_app_logo['url'] ?>" alt="Google Play"></a>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<img class="ribbon-edge left" src="<?php echo get_bloginfo('template_url') ?>/images/ribbon.png" alt="" />
					<img class="ribbon-edge right" src="<?php echo get_bloginfo('template_url') ?>/images/ribbon.png" alt="" />
				</div>
			</div>

		</div>
	</div>

	<?php endwhile; ?>
</main><!-- #main -->
<?php
get_footer();
