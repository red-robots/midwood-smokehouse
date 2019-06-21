<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bellaworks
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php if ( get_the_content() ) { ?>
	<div class="entry-content">
		<?php
			ob_start();
			the_content();
			$content = ob_get_contents();
			ob_end_clean();
			$content = str_replace('[button]','<span class="btnstyle">',$content);
			$content = str_replace('[/button]','</span>',$content);
			echo $content;
		?>
	</div><!-- .entry-content -->
	<?php } ?>
</article><!-- #post-## -->
