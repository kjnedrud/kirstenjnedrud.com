<?php
/**
 * Site Header
 */

// config & helpers
require_once('includes/config.php');
require_once('includes/helpers.php');

?><!doctype html>
<html lang="en">
<head>
	<title>Kirsten J. Nedrud - Web Developer &amp; Creative Technologist</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
	<link href="//fonts.googleapis.com/css?family=Bitter:400,700,400italic|Open+Sans:400,400i,700,700i" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php get_asset('/assets/css/main.css'); ?>">
	<link rel="icon" type="image/png" href="<?php get_asset('/assets/img/favicon.png'); ?>">
	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<?php if (ENV == 'prod') : ?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo GOOGLE_ANALYTICS_ID; ?>"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', '<?php echo GOOGLE_ANALYTICS_ID; ?>');
		</script>
	<?php endif; ?>
</head>

<body>

<header class="site-header text-center fixed">

	<div class="container clearfix">
		<a href="#top" title="Kirsten J. Nedrud" class="home-link f-left">Kirsten J. Nedrud</a>
		<nav class="site-nav f-right">
			<a href="#projects">Projects</a>
			<a href="#contact">Contact</a>
		</nav>
	</div>

</header><!-- .site-header -->

