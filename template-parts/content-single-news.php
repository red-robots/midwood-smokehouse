<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bellaworks
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
	$type = get_field("feature_type");
	//$video_thumbnail = get_field("video_thumbnail");
	$featured_image = get_field("featured_image"); 
	?>
	<?php if ($type=='image') { ?>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>
	<?php } ?>
	<div class="entry-content clear">
		<?php the_content(); ?>
	</div>
</article><!-- #post-## -->
