<!DOCTYPE HTML>
<html>
	<head>
		<title>Revision Updates</title>
		<?php include('includes/tracking_info.php'); ?>
		<meta name="description" content="Revision Updates online platform with quick access to all of our educational resources for GCSE and A-Levels.">
		<meta name="keywords" content="Revision~Updates,Revision,Updates,Exams,Students,Learning,Education">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<?php include('includes/web_clip.php'); ?>
	</head>
	<body class="loading">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1>Revision Updates</h1>
						<p><a alt="RU Releases" href="http://revisionupdates.info/releases">RU Releases</a> &nbsp;&bull;&nbsp; <a alt="RU Digi" href="http://revisionupdates.info/ru-digi">RU Digi Calendar</a> &nbsp;&bull;&nbsp; <a alt="RU Ambassadors" href="http://revisionupdates.info/course">RU iTunes U</a></p>
						<nav>
							<ul>
								<?php 
									$page_type = 'main';
									include('includes/social_media.php'); 
								?>
							</ul>
						</nav>
					</header>

				<!-- Footer -->
					<footer id="footer">
						<span class="copyright"><?php include('includes/footer.php'); ?></span>
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