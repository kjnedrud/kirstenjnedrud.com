<?php
/**
 * Project template
 * Called by get_project_html()
 */
?>

<?php if (!empty($project)) : ?>
	<div class="container extended-width project">

		<picture class="preview">
			<!-- square -->
			<!-- <source media="(min-width: 601px) and (max-width:767px)" srcset="//placehold.it/600x600"> -->
			<source media="(min-width: 600px) and (max-width:767px)" srcset="<?php get_responsive_image($project['image'], '600x600'); ?>">
			<!-- rect -->
			<!-- <source srcset="//placehold.it/540x405 1x, //placehold.it/1080x810 2x"> -->
			<source srcset="<?php get_responsive_image($project['image'], '540x405'); ?> 1x, <?php get_responsive_image($project['image'], '1080x810'); ?> 2x">
			<!-- fallback img -->
			<!-- <img src="//placehold.it/540x405" srcset="//placehold.it/540x405 1x, //placehold.it/1080x810 2x" class="thumb"> -->
			<img src="<?php get_responsive_image($project['image'], '540x405'); ?>" srcset="<?php get_responsive_image($project['image'], '540x405'); ?> 1x, <?php get_responsive_image($project['image'], '1080x810'); ?> 2x" class="thumb">
		</picture>

		<div class="info">
			<h3><?php echo $project['title']; ?></h3>
			<?php echo $project['description']; ?>
		</div>
	</div>
<?php endif; ?>
