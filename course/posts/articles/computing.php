<?php
	$Page_MetaID = 'course';
	$RSS_MetaID = 'computing';
	$Course_Title = 'Computing';
	$Course_Banner = 'computing';
	$Course_Slug = 'computing';
	$Course_Icon = 'comp';
	$Course_Date = '15th July 2015';
	$Course_Mantra = 'As apart of our core education package we support Biology A-Level. Currently, our resources are aimed at the OCR B Advancing Biology specification.';
	$Course_Lead_AuthorID = '1';
	$Course_Sub_AuthorID = '';
?>
<!DOCTYPE HTML>
	<head>
		<title>RU iTunes U - <?php echo $Course_Title; ?></title>
		<?php 
			include('../../../includes/init.php'); 
		?>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>

	<body>
		<div id="page-wrapper">

		<?php include '../../../includes/article_header.php'; ?>
			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2><?php echo $Course_Title; ?></h2>
						<p><?php echo $Course_Mantra; ?></p>
					</header>
					<div class="box">
						<span class="image featured"><img src="http://revisionupdates.info/course/posts/images/<?php echo $Course_Banner; ?>_banner.jpg" alt="" /></span>
						<header>
						<h3>Announcements <a href="http://revisionupdates.info/course/posts/feeds/computing.rss" class="icon rss circle fa-rss"><span class="label">RSS</span></a></h3>
						<hp>Last Updated: <?php echo $Course_Date; ?></hp>
						</header>
						<p>
							<span class="image left"><img src="http://revisionupdates.info/course/posts/articles/images/icons/<?php echo $Course_Icon; ?>.png" alt="" /></span>Just to let you know, we will be publishing Revision Updates A-Level Edition officially as apart of our <strong>public release</strong> on the 27th August 2015 (although we will start adding people from the 20th). As apart of the release with v2.0 revision updates we will be offering a new standard of resources that are specifically designed for all of your A-Level needs. We have an ever-expanding database of resources that we will be making available from day one.
						</p>

					</div>
					<?php include '../../../includes/article_ad.php'; ?>
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