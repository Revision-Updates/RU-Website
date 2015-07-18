<?php
	$Page_MetaID = 'course';
	$Page_Parent = 'posts';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>RU iTunes U - Articles</title>
		<?php include('../../../includes/init.php'); ?>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<meta http-equiv="refresh" content="5;URL='http://revisionupdates.info/course/posts'" />
	</head>
	<body>
		<div id="page-wrapper">
			<?php include('../../../includes/header.php'); ?>
			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>Articles</h2>
						<p>Uh-oh! You need to go to the exact course or article page... We'll <a href="http://revisionupdates.info/course/posts">redirect</a> you...</p>
						<br></br>
						<span class="icon major fa-cloud accent1"></span> 
						<span class="icon major fa-code accent2"></span> 
						<span class="icon major fa-code-fork accent3"></span>
						<span class="icon major fa-terminal accent4"></span> 
						<span class="icon major fa-upload accent5"></span> 
						<br></br>
						<i class="fa fa-spinner fa-pulse fa-5x"></i></p>
					</header>
					</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<?php 
							include('../../../includes/config/social_media_config.php');
							$page_type = 'ru_digi';
							include('../../../includes/social_media_formats/social_media_ru_digi.php');
						?>
					</ul>
					<ul class="copyright">
						<li>
							<?php include('../../../includes/footer.php'); ?>
						</li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>