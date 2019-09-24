<?php
/**
 * Site Header
 */

// config
require_once('includes/config.php');

?><!doctype html>
<html lang="en">
<head>
	<title>Kirsten J. Nedrud - Web Developer &amp; Creative Technologist</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
	<link href="//fonts.googleapis.com/css?family=Bitter:400,700,400italic|Open+Sans:400,400i,700,700i" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<?php if (ENV == 'prod') : ?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-51227523-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-51227523-1');
		</script>
	<?php endif; ?>
</head>

<body>

<header class="site-header purple-warm text-center">

	<!-- todo: add nav once we have more pages -->
	<!-- <div class="container">
		<a href="/" title="Kirsten J. Nedrud">Kirsten J. Nedrud</a>
		<nav class="site-nav"></nav>
	</div> -->

	<div class="hero purple-cool">

		<div class="container content-width">

			<h1>I solve problems with technology and design.</h1>

			<p><a href="#contact" class="button">Let's Chat!</a>
		</div>
	</div><!-- .hero -->

</header><!-- .site-header -->

