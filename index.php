<?php require_once('includes/header.php'); ?>

<main class="site-main">

	<!-- intro -->
	<section class="pad-y-3 pad-x-2 grey-eggshell">

		<div class="container">

			<div class="title-group">
				<h2 class="h1">Hi, I'm Kirsten</h1>
				<h3 class="h2">Web Developer &amp; Creative Technologist</h2>
			</div>

			<p>I'm a web developer with a background in design. I love the web because it's so easy for anyone to make something and share it online; I'm always excited to see what extraordinary, beautiful, weird things people are making.</p>

			<p>I live and work in the DC area, making websites and software for the internet.</p>

		</div><!-- .container -->

	</section>

	<section class="pad-y-3 pad-x-2 white" id="projects">
		<div class="container title-group">
			<h1>What I Do</h1>
			<p>I bridge the gap between designers and developers. I ask a lot of questions and seldom do exactly what I'm told. I believe in building a more diverse, accessible web. I focus on creating the best possible user experience, because without users the things we build have no purpose.</p>
		</div>
	</section>

	<?php $projects = [
		'work' => [
			[
				'title' => 'Banjo',
				'image' => 'banjo.jpg',
				'description' => '<ul>
						<li>developed custom WordPress site</li>
						<li>created custom Gutenberg blocks using Advanced Custom Fields</li>
						<li>built dynamic contact form and integrations with the SendGrid API and Acuity Scheduling software</li>
					</ul>
					<p>
						<a href="https://www.printwithbanjo.com/" target="_blank" class="project-link">Visit Site &raquo;</a>
					</p>',
			],
			[
				'title' => 'Economic Architecture Project',
				'image' => 'eap.jpg',
				'description' => '<ul>
						<li>prototyped home page message animation</li>
						<li>developed custom WordPress site</li>
						<li>built contact form with SendGrid API integration</li>
					</ul>
					<p>
						<a href="https://www.economicarchitectureproject.org/" target="_blank" class="project-link">Visit Site &raquo;</a>
					</p>',
			],
			[
				'title' => 'More Vang',
				'image' => 'more-vang.jpg',
				'description' => '<ul>
						<li>built prototypes for animated home page and transitions</li>
						<li>developed custom WordPress site</li>
						<li>integrated web uploader tool for client files</li>
						<li>built secure payment site with Authorize.net API integration</li>
					</ul>
					<p>
						<a href="https://www.morevang.com/" target="_blank" class="project-link">Visit Site &raquo;</a>
					</p>',
			],
			[
				'title' => 'Tri-M Music Honor Society',
				'image' => 'tri-m.jpg',
				'description' => '<ul>
						<li>worked with team on content migration and website organization strategy</li>
						<li>developed custom WordPress site</li>
						<li>built responsive templates based on initial designs</li>
					</ul>
					<p>
						<a href="https://www.musichonors.com/" target="_blank" class="project-link">Visit Site &raquo;</a>
					</p>',
			],
		],
		'personal' => [
			[
				'title' => 'Kaleidocamera',
				'image' => 'kaleidocamera.jpg',
				'description' => '<p class="description">Browser-based kaleidoscope with HTML canvas</p>
					<ul>
						<li>captures device camera with getUserMedia()</li>
						<li>performs triangle math calculations to reflect segments around a center point</li>
						<li>integrates with Imgur API to save images</li>
					</ul>
					<p>
						<a href="https://kaleidocamera.com" target="_blank" class="project-link">Visit Site &raquo;</a>
						<br>
						<a href="https://github.com/kjnedrud/kaleidocamera" target="_blank" class="project-link">Code on GitHub &raquo;</a>
					</p>',
			],
			[
				'title' => 'Ingredi.js',
				'image' => 'ingredi.jpg',
				'description' => '<p class="description">In-progress JavaScript library for converting recipe ingredients</p>
					<ul>
						<li>uses RegEx to parse amounts and units from ingredient strings</li>
						<li>multiplies amounts and converts common units</li>
					</ul>
					<p>
						<a href="https://github.com/kjnedrud/ingredi" target="_blank" class="project-link">Code on GitHub &raquo;</a>
					</p>',
			],
		],
	]; ?>

	<section class="pad-y-3 pad-x-2 grey-eggshell">
		<div class="container">
			<header class="title-group text-center">
				<h2>Professional Work</h2>
				<p class="description">Some notable projects I've worked on over the years.</p>
			</header>
			<div class="bleed-full pad-x-2">
				<?php foreach($projects['work'] as $project) : ?>
					<?php get_project_html($project); ?>
				<?php endforeach; ?>
			</div><!-- .lg-bleed-full -->
		</div><!-- .container -->
	</section>

	<section class="pad-y-3 pad-x-2 white">
		<div class="container">
			<header class="title-group text-center">
				<h2>Personal Projects</h2>
				<p class="description">Things I've made in my spare time for fun or practical use.</p>
			</header>
			<div class="bleed-full pad-x-2">
				<?php foreach($projects['personal'] as $project) : ?>
					<?php get_project_html($project); ?>
				<?php endforeach; ?>
			</div><!-- .lg-bleed-full -->
		</div><!-- .container -->
	</section>

	<!-- contact -->
	<section id="contact" class="pad-y-3 pad-x-2">

		<div class="container title-group">

			<h2 class="h1">Get in Touch</h2>

			<p>Want to chat? Email me at <span class="email" data-email-a="kjnedrud" data-email-b="gmail.com">kjnedrud [at] gmail [dot] com</span> or use the form below.</p>

			<form id="contact-form" class="clearfix" action="/sendgrid.php" method="post" novalidate>

				<p>
					<label for="contact-email" class="required">Email</label>
					<input id="contact-email" type="email" name="email" required>
				</p>

				<p>
					<label for="contact-message" class="required">Message</label>
					<textarea id="contact-message" name="message" rows="6" required></textarea>
				</p>

				<button id="contact-submit" class="f-right" type="submit">Send</button>

			</form><!-- #contact-form -->

		</div><!-- .container -->

	</section><!-- #contact -->

</main>

<?php require_once('includes/footer.php'); ?>
