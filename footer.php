	</div><!-- #content -->

	<footer id="colophon" class="site-footer clear" role="contentinfo">
		<div class="wrapper">
			<?php  
			$partners_text = get_field('partners_text','option');
			$partners = get_field('partners','option');
			$facebook = get_field('facebook','option');
			$instagram = get_field('instagram','option');
			$twitter = get_field('twitter','option');
			?>

			<?php if ($linkedin || $facebook || $twitter) { ?>
			<div class="social-links">
				<div class="wrap">
					<span class="social-info">
						<span class="followus">Follow Us</span>
						<?php if ($facebook) { ?>
						<a href="<?php echo $facebook ?>" target="_blank"><i class="fab fa-facebook-square"></i><span class="sr-only">Facebook</span></a>
						<?php } ?>
						<?php if ($instagram) { ?>
						<a href="<?php echo $instagram ?>" target="_blank"><i class="fab fa-instagram"></i><span class="sr-only">Instagram</span></a>
						<?php } ?>
						<?php if ($twitter) { ?>
						<a href="<?php echo $twitter ?>" target="_blank"><i class="fab fa-twitter-square"></i><span class="sr-only">Twitter</span></a>
						<?php } ?>
					</span>
					<img class="bg" src="<?php echo get_bloginfo("template_url") ?>/images/social-bg.png" alt="" aria-hidden="true" />
				</div>
			</div>
			<?php } ?>

			<div class="partners-section clear">
				<div class="wrapper">
					<?php if ($partners_text) { ?>
					<div class="partners-text text-center"><?php echo $partners_text ?></div>	
					<?php } ?>

					<?php if ($partners) { ?>
					<div class="partners fullwrap">
						<div class="flexrow">
							<?php foreach ($partners as $p) { 
							$a_id = $p['ID'];
							$attachment_link = get_field("attachment_link",$a_id); 
							?>
							<div class="info">
								<?php if ($attachment_link) { ?>
									<a href="<?php echo $attachment_link ?>" target="_blank"><img src="<?php echo $p['url'] ?>" alt="<?php echo $p['title'] ?>" /></a>
								<?php } else { ?>
									<img src="<?php echo $p['url'] ?>" alt="<?php echo $p['title'] ?>" />
								<?php } ?>
							</div>	
							<?php } ?>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div><!-- wrapper -->
		<div class="bottom"></div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); 
$active = get_field('toggle_on', 'option');
//if( $active[0] == 'turnon' && is_front_page() ) {
?>
<?php if(is_front_page()) { ?>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			// Popup
			//$.colorbox({inline:true, href:".ajax"});
		});
	</script>
<?php } ?>

</body>
</html>
