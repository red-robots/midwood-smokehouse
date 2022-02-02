<?php 
$banner = get_field('banner');
if($banner) { ?>
<div class="banner clear">
	<img src="<?php echo $banner['url'] ?>" alt="<?php echo $banner['title'] ?>" />
</div>
<?php } ?>