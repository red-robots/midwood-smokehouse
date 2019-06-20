<?php
// $args = array(
// 	'posts_per_page'   => -1,
// 	'orderby'          => 'date',
// 	'order'            => 'DESC',
// 	'post_type'        => 'post',
// 	'post_status'      => 'publish'
// );
$args = array(
	'posts_per_page'   => -1,
	'post_type'        => 'post',
	'post_status'      => 'publish'
);
$news = new WP_Query($args);
if ( $news->have_posts() ) {  ?>
<div class="articles-section">
	<div class="flexbox clear">
	<?php while ( $news->have_posts() ) : $news->the_post();  
		$type = get_field("feature_type");
		$video_thumbnail = get_field("video_thumbnail");
		$featured_image = get_field("featured_image"); 
		$pagelink = get_permalink(); ?>
		<div class="article">
			<?php if($type=='image') { ?>
				<?php if($featured_image) { ?>
				<a href="<?php echo $pagelink ?>" class="imagewrap" style="background-image:url('<?php echo $featured_image['url']?>')">
					<img class="thumb" src="<?php echo $featured_image['url'] ?>" alt="<?php echo $featured_image['title'] ?>" style="display:none;">
					<img class="px" src="<?php echo get_bloginfo('template_url') ?>/images/transparent.png" alt="" aria-hidden="true" />
				</a>
				<?php }
			} else { ?>
				<?php if($video_thumbnail) { ?>
				<a href="<?php echo $pagelink ?>" class="imagewrap" style="background-image:url('<?php echo $video_thumbnail['url']?>')">
					<span class="playbtn"><i></i></span>
					<img class="thumb" src="<?php echo $video_thumbnail['url'] ?>" alt="<?php echo $video_thumbnail['title'] ?>" style="display:none;">
					<img class="px" src="<?php echo get_bloginfo('template_url') ?>/images/transparent.png" alt="" aria-hidden="true" />
				</a>
				<?php } ?>
			<?php } ?>
		</div>
	<?php endwhile; wp_reset_postdata(); ?>
	</div>
</div>
<?php } ?>