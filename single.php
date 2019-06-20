<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bellaworks
 */
get_header(); 
$post_type = get_post_type();
?>

	<div id="primary" class="full-content-area clear single-page">
		<main id="main" class="site-main wrapper clear" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<div class="med-wrapper clear">
				<?php if ($post_type=='post') { ?>
					<?php get_template_part( 'template-parts/content', 'single-news'); ?>
				<?php } else { ?>
					<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
				<?php } ?>
			</div>

		<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
