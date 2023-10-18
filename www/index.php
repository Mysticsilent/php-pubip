<!DOCTYPE HTML>
<!--
	Big Picture by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php if ($_SERVER["HTTP_X_FORWARDED_FOR"] != "") {
	$IP = $_SERVER["HTTP_X_FORWARDED_FOR"];
	$proxy = $_SERVER["REMOTE_ADDR"];
	$host = @gethostbyaddr($_SERVER["HTTP_X_FORWARDED_FOR"]);
} else {
	$IP = $_SERVER["REMOTE_ADDR"];
	$host = @gethostbyaddr($_SERVER["REMOTE_ADDR"]);
} 
	$time_start = microtime(true);
	usleep(100);
	$time_end = microtime(true);
	$time = $time_end - $time_start;
	$time = round($time, 3);
?>

<html>
	<head>
		<title>IP: <?php echo $IP; ?></title>
		<link rel="icon" type="image/x-icon" href="/images/favicon.ico">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content">
					<header>
					
					<h2><?php echo $IP; ?></h2>
					<h1><?php echo $host; ?></h1>
					<p><small>It took <?php echo $time; ?> seconds to load this page</small></p>
					</header>
					
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>