<?php
/**
 * Template Name: Locations
 */

get_header(); ?>
<div id="primary" class="full-content-area clear private-dining">
	<main id="main" class="site-main clear" role="main">
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile; // End of the loop.
		?>

		<?php  
		$args = array(
			'posts_per_page'   => -1,
			'post_type'        => 'location',
			'post_status'      => 'publish'
		);
		$locations = new WP_Query($args);
		if ( $locations->have_posts() ) {  ?>
		<div class="locations-listing clear">
			<div class="flexrow">
			<?php while ( $locations->have_posts() ) : $locations->the_post(); 
				$name = get_the_title();
				$address1 = get_field('address1');
				$address2 = get_field('address2');
				$phone = get_field('phone');
				$map = get_field('map');
				$booknow = get_field('booknow');
				$hours = get_field('hours'); ?>
				<div class="details text-center">
					<div class="inside">
						<div class="address-info">
							<h3 class="name"><?php echo $name ?></h3>
							<?php if ($address1) { ?>
							<div class="address add1"><?php echo $address1 ?></div>	
							<?php } ?>
							<?php if ($address2) { ?>
							<div class="address add2"><?php echo $address2 ?></div>	
							<?php } ?>
							<?php if ($phone) { ?>
							<div class="phone"><?php echo $phone ?></div>	
							<?php } ?>
							<div class="break clear"></div>
							<?php if ($map) { ?>
							<div class="map orangetxt"><a href="<?php echo $map ?>" target="_blank">&ndash; MAP &ndash;</a></div>	
							<?php } ?>
							<?php if ($booknow) { ?>
							<div class="booknow orangetxt"><a href="<?php echo $booknow ?>" target="_blank">&ndash; BOOK NOW &ndash;</a></div>	
							<?php } ?>
						</div>
						<div class="hours-info">
							<div class="hours-title"><span>Hours of Operation</span></div>
							<div class="hours"><?php echo $hours ?></div>
						</div>
						<div class="arrow-down"><img src="<?php echo get_bloginfo('template_url') ?>/images/ribbon2.png" alt="" aria-hidden="true" /></div>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
		<?php } ?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
