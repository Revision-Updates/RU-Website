<?php
	$Page_MetaID = 'course';
	$RSS_MetaID = 'further-mathematics';
	$Page_Parent = 'further-mathematics';
	$Course_Title = 'Further Mathematics';
	$Course_Banner = 'graphical-calculator-introduction';
	$Course_Icon = 'fmath';
	#Article Settings
	$Article_Title = 'Graphical Calculator - Introduction';
	$Course_Slug = 'graphical-calculator-introduction';
	$Article_Date = '16th July 2015';
	$Course_Lead_AuthorID = '1';
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
							Have you managed to have a play with a <strong>graphical calculator</strong> yet? Well, if not, then we would highly recommend getting your hands on one. On these little gizmos, you could do anything from drawing a flower graphically to programming a quadratic formula solver.
							<br></br>
							How to make a flower graph:
							<ol>
								<li>Click Menu</li>
								<li>Click Graph</li>
								<li>Click Type (or F3)</li>
								<li>Select Param</li>
								<li>Enter for Xt1 = 11sin ATCos T</li>
								<li>Enter for Yt1 = 11sin ATSin T</li>
								<li>Click execute and you can see you magnificent graph in the shape of a flower</li>
							</ol>
As an extension, if you really want a challenge why not try changing the '11' (in both equations) to a variable such as 'A' in <strong>Dynamic Graph mode</strong>. You should see the number of petals changing over time. Remember, if you cannot see the graph correctly, click shift V-Window, then click TRIG.
<br></br>
Of course, there are lots of other functions on the calculator such as programming, so why not get started with a few of these videos (as can be seen in the assignments section. While you're at it you could even download <a href="http://sammyherring.github.io/GeoCalc/">GeoCalc</a> onto your calculator - the ultimate geometry solver!
						</p>
					</div>
										<div class="row">
						<div class="6u 12u(narrower)">

							<section class="box special">
								<h3>Programming Tutorial - Part 1</h3>
								<p>Programming Tutorial with Casio Graphing Calculators (Part 1) - Inputs and Outputs</p>
									<iframe width="340" height="260" src="https://www.youtube.com/embed/P6MdmW-coXM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
							</section>

						</div>
						<div class="6u 12u(narrower)">

							<section class="box special">
								<h3>Programming Tutorial - Part 2</h3>
								<p>Programming Tutorial with Casio Graphing Calculators (Part 2) - Conditional Statements and Loops</p>
									<iframe width="340" height="260" src="https://www.youtube.com/embed/uOSJK_14384?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
							</section>

						</div>
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