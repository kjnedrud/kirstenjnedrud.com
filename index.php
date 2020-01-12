<?php
/**
 * Home
 */
require_once('includes/header.php');
?>

<main class="site-main">

	<!-- hero -->
	<header class="hero purple-cool text-center">
		<div class="container">
			<h1>I solve problems with technology and&nbsp;design.</h1>
			<p><a href="#contact" class="button">Let's Chat!</a>
		</div>
	</header><!-- .hero -->

	<!-- intro -->
	<section class="pad-y-3 pad-x-2 white">

		<div class="container">

			<div class="title-group">
				<h1>Hi, I'm Kirsten</h1>
				<h2>Web Developer &amp; Creative Technologist</h2>
			</div>

			<p>I'm a web developer with a background in design. I love the web because it's so easy for anyone to make something and share it online; I'm always excited to see what extraordinary, beautiful, weird things people are making!</p>

			<p>I live and work in the DC area, making websites and software for the internet. In my free time, you can often find me bouldering at the local climbing gym, sampling craft beers, or workin' on my night cheese.</p>

		</div><!-- .container -->

	</section>

	<section class="pad-y-3 pad-x-2 grey-eggshell" id="projects">
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
					</ul>',
				'links' => [
					[
						'url' => 'https://www.printwithbanjo.com/',
						'text' => 'Visit Site',
					],
				],
			],
			[
				'title' => 'Economic Architecture Project',
				'image' => 'eap.jpg',
				'description' => '<ul>
						<li>prototyped home page message animation</li>
						<li>developed custom WordPress site</li>
						<li>built contact form with SendGrid API integration</li>
					</ul>',
				'links' => [
					[
						'url' => 'https://www.economicarchitectureproject.org/',
						'text' => 'Visit Site',
					],
				],
			],
			[
				'title' => 'More Vang',
				'image' => 'more-vang.jpg',
				'description' => '<ul>
						<li>built prototypes for animated home page and transitions</li>
						<li>developed custom WordPress site</li>
						<li>integrated web uploader tool for client files</li>
						<li>built secure payment site with Authorize.net API integration</li>
					</ul>',
				'links' => [
					[
						'url' => 'https://www.morevang.com/',
						'text' => 'Visit Site',
					],
				],
			],
			[
				'title' => 'Tri-M Music Honor Society',
				'image' => 'tri-m.jpg',
				'description' => '<ul>
						<li>worked with team on content migration and website organization strategy</li>
						<li>developed custom WordPress site</li>
						<li>built responsive templates based on initial designs</li>
					</ul>',
				'links' => [
					[
						'url' => 'https://www.musichonors.com/',
						'text' => 'Visit Site',
					],
				],
			],
		],
		'personal' => [
			[
				'title' => 'Kaleidocamera',
				'image' => 'kaleidocamera.jpg',
				'description' => '<p class="description">Browser-based kaleidoscope with HTML canvas.</p>
					<ul>
						<li>captures device camera with getUserMedia()</li>
						<li>performs triangle math calculations to reflect segments around a center point</li>
						<li>integrates with Imgur API to save images</li>
					</ul>',
				'links' => [
					[
						'url' => 'https://kaleidocamera.com',
						'text' => 'Visit Site',
					],
					[
						'url' => 'https://github.com/kjnedrud/kaleidocamera',
						'text' => 'Code on GitHub',
					],
				],
			],
			[
				'title' => 'Ingredi.js',
				'image' => 'ingredi.jpg',
				'alt' => 'Screenshot of JavaScript code',
				'description' => '<p class="description">In-progress JavaScript library for converting recipe ingredients.</p>
					<ul>
						<li>uses RegEx to parse amounts and units from ingredient strings</li>
						<li>multiplies amounts and converts common units</li>
					</ul>',
				'links' => [
					[
						'url' => 'https://github.com/kjnedrud/ingredi',
						'text' => 'Code on GitHub',
					],
				],
			],
		],
		'codepen' => [
			[
				'title' => 'Cashflow Prototype',
				'image' => 'cashflow.png',
				'description' => '<p class="description">Design and animation concept to visualize cashflow data in a financial planning app.</p>',
				'links' => [
					[
						'url' => 'https://codepen.io/kjnedrud/full/vYELEOR',
						'text' => 'Demo on Codepen',
					],
				],
				'type' => 'secondary',
			],
			[
				'title' => 'Line &amp; Dot Animation',
				'image' => 'complicated-organized.png',
				'description' => '<p class="description">SVG animation to illustrate the idea of transforming a complicated problem into an organized solution.</p>',
				'links' => [
					[
						'url' => 'https://codepen.io/kjnedrud/full/YzPwPvJ',
						'text' => 'Demo on Codepen',
					],
				],
				'type' => 'secondary',
			],
			[
				'title' => 'Typing Animation',
				'image' => 'typing.gif',
				'description' => '<p class="description">Prototype of a website hero that rotates through different phrases with a typing animation.</p>',
				'links' => [
					[
						'url' => 'https://codepen.io/kjnedrud/full/dyPGPNd',
						'text' => 'Demo on Codepen',
					],
				],
				'type' => 'secondary',
			],
		],
	]; ?>

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

	<section class="pad-y-3 pad-x-2 grey-eggshell">
		<div class="container extended-width">
			<header class="title-group container text-center">
				<h2>Experiments &amp; Prototypes</h2>
				<p class="description">Code snippets for demos, testing, and proof-of-concept.</p>
			</header>
			<div class="grid-cols grid-3 sm-grid-full">
				<?php foreach($projects['codepen'] as $project) : ?>
					<?php get_project_html($project); ?>
				<?php endforeach; ?>
			</div><!-- .grid-cols -->
		</div><!-- .container -->
	</section>

	<section class="pad-y-3 pad-x-2 white">
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

				<p class="note">This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a> and <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> apply.</p>

				<p class="clearfix">
					<button id="contact-submit" class="f-right" type="submit">Send</button>
				</p>

			</form><!-- #contact-form -->

		</div><!-- .container -->

	</section><!-- #contact -->

</main>

<?php require_once('includes/footer.php'); ?>
