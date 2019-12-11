<?php
/**
 * Project template - primary
 * Called by get_project_html()
 */
?>

<?php if (!empty($project)) : ?>
	<article class="container extended-width project primary">

		<picture class="preview">
			<!-- square -->
			<source media="(min-width: 650px) and (max-width:767px)" srcset="<?php get_responsive_image($project['image'], '600x600'); ?>">
			<!-- rect -->
			<source srcset="<?php get_responsive_image($project['image'], '540x405'); ?> 1x, <?php get_responsive_image($project['image'], '1080x810'); ?> 2x">
			<!-- fallback img -->
			<img src="<?php get_responsive_image($project['image'], '540x405'); ?>" srcset="<?php get_responsive_image($project['image'], '540x405'); ?> 1x, <?php get_responsive_image($project['image'], '1080x810'); ?> 2x" class="thumb" alt="<?php echo empty($project['alt']) ? "Screenshot of {$project['title']} website" : "{$project['alt']}"; ?>">
		</picture>

		<div class="info">
			<h3><?php echo $project['title']; ?></h3>
			<?php echo $project['description']; ?>
		</div>
	</article><!-- .project -->
<?php endif; ?>
