<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bellaworks
 */

get_header(); ?>

	<div id="primary" class="full-content-area clear">
		<main id="main" class="site-main wrapper clear" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php 
			$type = get_field("feature_type");
			//$video_thumbnail = get_field("video_thumbnail");
			$featured_image = get_field("featured_image"); 
			?>
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content clear">
				<?php if ($type=='image' && $featured_image) { ?>
					<div class="textwrap"><?php the_content(); ?></div>
					<div class="imagediv"><img class="feat-image" src="<?php echo $featured_image['sizes']['medium_large']; ?>" alt="<?php echo $featured_image['title'] ?>" /></div>
				<?php } else { ?>
					<?php the_content(); ?>
				<?php } ?>
			</div>

		<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
