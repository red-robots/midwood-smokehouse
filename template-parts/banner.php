<?php 
$banner = get_field('banner');
if($banner) { ?>
<div class="banner clear">
	<img src="<?php echo $banner['url'] ?>" alt="<?php echo $banner['PDF_set_info_title()'] ?>" />
</div>
<?php } ?>