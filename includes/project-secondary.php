<?php
/**
 * Project template - secondary
 * Called by get_project_html()
 */
?>

<?php if (!empty($project)) : ?>
	<article class="grid-item project secondary">
		<picture class="preview">
			<!-- <img src="//placehold.it/340x255" srcset="//placehold.it/340x255 1x, //placehold.it/680x510 2x"> -->
			<img src="<?php get_responsive_image($project['image'], '340x255'); ?>" srcset="<?php get_responsive_image($project['image'], '340x255'); ?> 1x, <?php get_responsive_image($project['image'], '680x510'); ?> 2x" alt="<?php echo empty($project['alt']) ? "Screenshot of {$project['title']}" : "{$project['alt']}"; ?>">
		</picture>
		<div class="info">
			<h3><?php echo $project['title']; ?></h3>
			<?php echo $project['description']; ?>
		</div>
	</article><!-- .project -->
<?php endif; ?>

