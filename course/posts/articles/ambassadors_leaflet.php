<?php

	$Page_MetaID = 'course';
	$Page_Parent = 'posts';
	$Course_Lead_AuthorID = '1';
	$Course_Sub_AuthorID = '';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>RU iTunes U - Ambassador's Leaflet</title>
		<?php include('../../../includes/init.php'); ?>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">
			<?php include('../../../includes/header.php'); ?>
			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>Ambassador's Leaflet</h2>
						<p>Contact us if you are interested. <a href="mailto:sammy_herring@revisionupdates.info">Click here</a>.</p>
					</header>
					<div class="box">
						<span class="image fit"><img src="http://revisionupdates.info/downloads/Revision Updates_Ambassadors.jpg" alt="" /></span>
						</div>
						<?php include '../../../includes/article_author.php'; ?>
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