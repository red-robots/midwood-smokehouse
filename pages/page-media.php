<?php
/**
 * Template Name: In The Media
 *
 */

get_header(); ?>
<div id="primary" class="full-content-area clear">
	<main id="main" class="site-main" role="main">
		
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

		<div class="articles-wrapper">
			<?php get_template_part( 'template-parts/content', 'news' ); ?>
		</div>
		
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
