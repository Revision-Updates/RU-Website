<!DOCTYPE HTML>
<html>
	<head>
		<title>Revision Updates - Drop</title>
		<?php include('../includes/init.php'); ?>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="loading">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1>File Drop</h1>
							<p>Need to send us a file? No problem, <a href="http://revisionupdates.info/drop">click me</a></p>
						<nav>
							<ul>
								<li><a class="icon fa-file-word-o"><span class="label"></span></a></li>
								<li><a class="icon fa-file-excel-o"><span class="label"></span></a></li>
								<li><a class="icon fa-file-powerpoint-o"><span class="label"></span></a></li>
								<li><a class="icon fa-file-image-o"><span class="label"></span></a></li>
								<li><a class="icon fa-file-audio-o"><span class="label"></span></a></li>
								<li><a class="icon fa-file-video-o"><span class="label"></span></a></li>
								<li><a class="icon fa-file-pdf-o"><span class="label"></span></a></li>
								<li><a class="icon fa-file-code-o"><span class="label"></span></a></li>
								<li><a class="icon fa-file-archive-o"><span class="label"></span></a></li>
							</ul>
						</nav>
					</header>

				<!-- Footer -->
					<footer id="footer">
						<span class="copyright"><?php include('../includes/footer.php'); ?></span>
					</footer>

			</div>
		</div>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script>
			window.onload = function() { document.body.className = ''; }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
	</body>
</html>