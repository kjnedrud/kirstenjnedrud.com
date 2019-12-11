<?php
/**
 * Project template - primary
 * Called by get_project_html()
 */
?>

<?php if (!empty($project)) : ?>
	<article class="project <?php echo ($project['type'] == 'secondary') ? 'grid-item secondary' : 'container extended-width primary'; ?>">

		<picture class="preview">
			<?php if ($project['type'] == 'secondary') : ?>
				<img src="<?php get_responsive_image($project['image'], '340x255'); ?>" srcset="<?php get_responsive_image($project['image'], '340x255'); ?> 1x, <?php get_responsive_image($project['image'], '680x510'); ?> 2x" alt="<?php echo empty($project['alt']) ? "Screenshot of {$project['title']}" : "{$project['alt']}"; ?>">
			<?php else : ?>
				<!-- square -->
				<source media="(min-width: 650px) and (max-width:767px)" srcset="<?php get_responsive_image($project['image'], '600x600'); ?>">
				<!-- rect -->
				<source srcset="<?php get_responsive_image($project['image'], '540x405'); ?> 1x, <?php get_responsive_image($project['image'], '1080x810'); ?> 2x">
				<!-- fallback img -->
				<img src="<?php get_responsive_image($project['image'], '540x405'); ?>" srcset="<?php get_responsive_image($project['image'], '540x405'); ?> 1x, <?php get_responsive_image($project['image'], '1080x810'); ?> 2x" class="thumb" alt="<?php echo empty($project['alt']) ? "Screenshot of {$project['title']} website" : "{$project['alt']}"; ?>">
			<?php endif; ?>
		</picture>

		<div class="info">
			<h3><?php echo $project['title']; ?></h3>
			<?php echo $project['description']; ?>
			<?php if (!empty($project['links'])) : ?>
				<p>
					<?php foreach($project['links'] as $link_index => $link) : ?>
						<?php echo $link_index ? '<br>' : ''; ?>
						<a href="<?php echo $link['url']; ?>" target="_blank" class="project-link" title="<?php echo empty($link['title']) ? $link['text'] : $link['title']; ?>"><?php echo $link['text']; ?></a>
					<?php endforeach; ?>
				</p>
			<?php endif; ?>
		</div><!-- .info -->

	</article><!-- .project -->
<?php endif; ?>
