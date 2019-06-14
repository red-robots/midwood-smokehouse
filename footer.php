	</div><!-- #content -->

	<footer id="colophon" class="site-footer clear" role="contentinfo">
		<div class="wrapper">
			<?php  
			$partners_text = get_field('partners_text','option');
			$partners = get_field('partners','option');
			?>

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

<?php wp_footer(); ?>

</body>
</html>
