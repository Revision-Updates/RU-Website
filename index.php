<!DOCTYPE HTML>
<html>
	<head>
		<title>Revision Updates</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		
		<script>
 		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  		ga('create', 'UA-63834916-1', 'auto');
  		ga('send', 'pageview');

		</script>
		<link rel="shortcut icon" href="favicon.ico"> 
	</head>
	<body class="loading">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1>Revision Updates</h1>
						<p><a href="http://revisionupdates.info/releases">RU Releases</a> &nbsp;&bull;&nbsp; <a href="http://revisionupdates.info/ru-digi">RU Digi Calendar</a> &nbsp;&bull;&nbsp; <a href="http://revisionupdates.info/ambassadors">Ambassadors</a></p>
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