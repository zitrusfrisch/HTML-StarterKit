<!doctype html>

<!--[if lt IE 7 ]><html class="no-js ie6" lang="de"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="de"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="de"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="de"><!--<![endif]-->

<head>

<title>Pagetitle</title>

<meta charset="utf-8">
<meta name="description" content="XXXXXXXXXXXXXXXX">

<!-- Use Viewport-Metatag for responsive designs only!
<meta name="viewport" content="width=device-width, initial-scale=1.0">
-->

<!--[if IE]>
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->

<!-- Modernizr -->

<script src="js/libs/modernizr.js"></script>

<!-- CSS -->

<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/styles.css">

<!-- Icons -->

<link rel="shortcut icon" href="favicon.ico">
<link rel="apple-touch-icon" href="apple-touch-icon.png">

<!-- Use Mediaqueries polyfill for responsive designs only! -->
<!--[if lt IE 9 ]><script src="js/libs/css3-mediaqueries.js"></script><![endif]-->

</head>

<body>

	<header id="masthead" class="cf" role="banner">

		<a id="logo" href="/" title="XXXXXXXXXXXXXXXX">
			<img src="images/logo.png" alt="Logo" />
		</a>

		<nav id="mainnav">

			<ul>
				<li><a href="#" title="XXXXXXXXXXXXXXXX">Start</a></li>
				<li><a href="#" title="XXXXXXXXXXXXXXXX">Link</a></li>
				<li><a href="#" title="XXXXXXXXXXXXXXXX">Link</a></li>
			</ul>

		</nav>

	</header>

	<div id="main" class="cf">

<?php require_once("./inc/DEMO_content.inc.php"); ?>

	</div><!-- End #main -->

	<footer class="cf" role="contentinfo">

		<p>Copyright &copy; <?php print(Date("Y")); ?> <a href="/" title="XXXXXXXXXXXXXXXX">XXXXXXXXXXXXXXXX</a></p>

	</footer>

<!-- JavaScript -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script>
		if (typeof jQuery == 'undefined') {
			document.write(unescape("%3Cscript src='/js/libs/jquery.js'%3E%3C/script%3E"));
		}
	</script>
	<script src="js/functions.js"></script>

</body>

</html>