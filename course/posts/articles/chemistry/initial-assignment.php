<?php
	$Page_MetaID = 'course';
	$RSS_MetaID = 'chemistry';
	$Page_Parent = 'chemistry';
	$Course_Title = 'Chemistry';
	$Course_Banner = 'chemistry';
	$Course_Icon = 'chem';
	#Article Settings
	$Article_Title = 'Initial Assignment';
	$Course_Slug = 'initial-assignment';
	$Article_Date = '18th July 2015';
	$Course_Lead_AuthorID = '2';
	$Course_Sub_AuthorID = '';
?>
<!DOCTYPE HTML>
	<head>
		<title>RU iTunes U - <?php echo $Course_Title; ?></title>
		<?php 
			include('../../../../includes/init.php'); 
		?>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="http://revisionupdates.info/course/posts/articles/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="http://revisionupdates.info/course/posts/articles/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="http://revisionupdates.info/course/posts/articles/assets/css/ie8.css" /><![endif]-->
		<script src="swfobject.js" language="javascript"></script>
	</head>

	<body>
		<div id="page-wrapper">

		<?php include '../../../../includes/header.php'; ?>
			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2><?php echo $Course_Title; ?></h2>
						<p><?php echo $Article_Title; ?></p>
					</header>
					<div class="box">
						<span class="image featured"><img src="http://revisionupdates.info/course/posts/images/<?php echo $Course_Banner; ?>_banner.jpg" alt="" /></span>
						<header>
						<h3><?php echo $Article_Title; ?></h3>
						<hp>Published: <?php echo $Article_Date; ?></hp>
						</header>
						<p>
							So, over the summer holidays you have been asked to complete a course in preparation.
							<br></br>
							Main link - <a href="https://www.futurelearn.com/courses/categories">https://www.futurelearn.com/courses/categories</a>
							<br></br>
							Course Information:<br>
							Course 1 - Basic Science: Understanding Numbers, commences on the 6th July.<br>
							Course 2 - Basic Science: Understanding Experiments, commences on the 10th August.
							<br></br>
							<blockquote>Duration (both courses): 3 hours a week, over a period of 4 weeks.</blockquote>
						</p>
					</div>
					<?php include '../../../../includes/article_author.php'; ?>
					</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<?php 
							include('../../../../includes/config/social_media_config.php');
							$page_type = 'ru_digi';
							include('../../../../includes/social_media_formats/social_media_ru_digi.php');
						?>
					</ul>
					<ul class="copyright">
						<li>
							<?php include('../../../../includes/footer.php'); ?>
						</li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="http://revisionupdates.info/course/posts/articles/assets/js/jquery.min.js"></script>
			<script src="http://revisionupdates.info/course/posts/articles/assets/js/jquery.dropotron.min.js"></script>
			<script src="http://revisionupdates.info/course/posts/articles/assets/js/jquery.scrollgress.min.js"></script>
			<script src="http://revisionupdates.info/course/posts/articles/assets/js/skel.min.js"></script>
			<script src="http://revisionupdates.info/course/posts/articles/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="http://revisionupdates.info/course/posts/articles/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="http://revisionupdates.info/course/posts/articles/assets/js/main.js"></script>

	</body>
</html>