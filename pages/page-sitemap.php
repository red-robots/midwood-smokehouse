<?php
/**
 * Template Name: Sitemap
 */

get_header(); 
$banner = get_field('banner'); 
$div_open = ($banner) ? '':'<div class="med-wrapper clear">'; 
$div_close = ($banner) ? '':'</div>'; 
?>
<div id="primary" class="full-content-area clear single-page">
	<main id="main" class="site-main wrapper clear" role="main">
		<?php echo $div_open ?>
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
				get_template_part('template-parts/content','sitemap');
			endwhile; // End of the loop.
			?>
		<?php echo $div_close ?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
