<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bellaworks
 */

get_header(); ?>
<div id="primary" class="full-content-area clear single-page">
	<main id="main" class="site-main wrapper clear" role="main">

	<div class="med-wrapper clear error-404 not-found">
		<header class="entry-header">
			<h1 class="entry-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bellaworks' ); ?></h1>
		</header>
		<div class="entry-content text-center">
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below?', 'bellaworks' ); ?></p>
			<?php get_template_part('template-parts/content','sitemap'); ?>
		</div>
	</div>

	</main><!-- #main -->
</div><!-- #primary -->
	
<?php
get_footer();
