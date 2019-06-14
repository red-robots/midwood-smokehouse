<?php
/**
 * Template Name: Menus
 */

get_header(); ?>
<div id="primary" class="full-content-area clear menus-content">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php  
			if( $menus_links = get_field("menus_links") ) { ?>
			<div class="menus-options clear">
				<div class="flexrow">
				<?php $i=1; foreach ($menus_links as $m) { 
					$title = $m['title']; 
					$type = $m['url_type'];
					$pdf_link = '';
					$internal_link = '';
					$external_link = '';
					$iframe = ''; 
					$before_link = '';
					$after_link = '';

					if ($title) { 
						if($type=='pdf') { 
							$pdf_link = $m['pdf_link']['url'];
							$before_link = '<a href="'.$pdf_link.'" target="_blank">';
							$after_link = '</a>';
						}
						if($type=='internal') { 
							$internal_link = $m['internal_link'];
							$before_link = '<a href="'.$internal_link.'">';
							$after_link = '</a>';
						}
						if($type=='external') { 
							$external_link = $m['external_link'];
							$before_link = '<a href="'.$external_link.'" target="_blank">';
							$after_link = '</a>';
						}	
						if($type=='iframe') { 
							$iframe = $m['iframe'];
							$before_link = '<a href="#iframediv'.$i.'" class="iframeData">';
							$after_link = '</a>';
						}	
						?>
					
						<div class="menubox">
							<div class="inside clear">
								<?php echo $before_link ?>
								<span class="m-title"><?php echo $title ?></span>
								<?php echo $after_link ?>

								<?php if ($iframe) { ?>
								<div id="iframediv<?php echo $i?>" class="iframediv"><?php echo $iframe ?></div>
								<?php } ?>
								<img class="tray" src="<?php echo get_bloginfo('template_url') ?>/images/tray.png" alt="" aria-hidden="true"/>
							</div>
						</div>
					<?php $i++; } ?>
					
				<?php } ?>
				</div>
			</div>
			<?php } ?>

		<?php endwhile; ?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
