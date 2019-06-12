<?php 
get_header(); 
?>
<main id="main" class="site-main wrapper clear" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="locations-section">
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
	<?php endwhile; ?>
</main><!-- #main -->
<?php
get_footer();
