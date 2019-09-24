<?php require_once('includes/header.php'); ?>

<main class="site-main">

	<!-- intro -->
	<section class="pad-y-3 white">

		<div class="container content-width">

			<div class="title-group">
				<h2 class="h1">Hi, I'm Kirsten</h1>
				<h3 class="h2">Web Developer &amp; Creative Technologist</h2>
			</div>
			<p>I'm a web developer with a background in design. I love the web because it's so easy for anyone to make something and share it online; I'm always excited to see what crazy, beautiful, weird things people are making.</p>

			<p>I graduated from <a href="https://www.rit.edu/" title="Rochester Institute of Technology" target="_blank">RIT</a> in 2012 with a BFA in New Media Design &amp; Imaging.</p>

			<p>These days I'm making websites in the DC area. I like a good challenge, and I am always eager to learn something new.</p>

			<h3>I build user-friendly websites that help clients achieve their goals.</h3>

			<p>Most of the time this means not doing what I'm told. Instead, I ask a lot of questions to find out what a client really needs. Once I understand their goals, I can come up with a solution that works for both the client and the end user.</p>

			<p>That's where my design experience and technical skills come into play. I focus on user experience, because that is ultimately what makes something succeed.</p>

			<p><b>I am passionate about problem solving, user experience, and accessibility.</b></p>

		</div><!-- .container -->

	</section>

	<!-- contact -->
	<section id="contact" class="pad-y-3">

		<div class="container content-width title-group">

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
