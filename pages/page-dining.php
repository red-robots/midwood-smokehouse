<?php
/**
 * Template Name: Private Dining
 */

get_header(); ?>
<div id="primary" class="full-content-area clear private-dining">
	<?php $galleries = get_field('galleries'); ?>
    <?php if ($galleries) { ?>
		<div class="swiper-container clear">
			<div class="swiper swiper-wrapper">
				<?php $j=1; foreach($galleries as $g) { ?>
				<div class="slick-slide swipeImg<?php echo ($j==1) ? ' slick-current slick-active slick-center':''?>">
					<div class="imagediv" style="background-image:url('<?php echo $g['url']; ?>')"></div>
					<img src="<?php echo $g['url']; ?>" alt="<?php echo $g['title']?>" />
				</div>
				<?php $j++; } ?>
			</div>
		</div>
    <?php } ?>

	<main id="main" class="site-main  clear" role="main">
		<div class="med-wrapper clear">
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile; // End of the loop.
			?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
