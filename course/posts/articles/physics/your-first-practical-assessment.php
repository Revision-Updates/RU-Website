<?php
	$Page_MetaID = 'course';
	$RSS_MetaID = 'physics';
	$Page_Parent = 'physics';
	$Course_Title = 'Physics';
	$Course_Banner = 'your-first-practical-assessment';
	$Course_Icon = 'phy';
	#Article Settings
	$Article_Title = 'Your First Practical Assessment';
	$Course_Slug = 'your-first-practical-assessment';
	$Article_Date = '17th July 2015';
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
							For the physics you may have already been notified about completing a <strong>'practice'</strong> practical assessment over the holiday break. As over the next two years you will be expected to complete at least twelve of them, each logged appropriately in your lab book (which you should receive in September).
							<br></br>
							When writing your practical assessment, you must initially remember that this is an A-Level assessment rather than a GCSE assessment. Therefore, you have an opportunity to use the knowledge you have gained from your Science GCSE IPAs and apply them with extensions. By extensions, this could mean having comparative graphs, citing sources and having bibliography.
							<br></br>
							At each stage, you must consider how to make it a fair test. However, as you are now at an A-Level stage, an evaluation would be more appropriate. By application, this may be potential sources of error from your investigation.
							<br></br>
							OCR have said in a <strong>draft</strong> that you will be marked on the following aspects:
							<ol>
								<li>Follows written procedures</li>
								<li>Applies investigative approaches and methods when using instruments and equipment</li>
								<li>Safely uses a range of practical equipment and materials</li>
								<li>Makes and records observations</li>
								<li>Researches, references and reports</li>
							</ol>
							As you can see each of these aspects are very important, but remember that this is only a practice and it is fair to say we are all likely to make mistakes. But its far better that we sort out any problems now rather than at a later stage. You should try and complete the assignment by the time at which you return to school.
							<br></br>
							To help get you started, why not follow our plan on what you need to include as a minimum:
							<ul>
								<li>Aims of the investigation</li>
								<li>Health and Safety issues</li>
								<li>Hypothesis</li>
								<li>Methodology (including variables - independent, dependant and control)</li>
								<li>Data Analysis (with explanation, citing sources as evidence)</li>
								<li>Evaluation (including potential sources of error)</li>
								<li>Bibliography (for all of your cited sources, for example, science journal page which gives the equation of a pendulums time period)</li>
							</ul>
							If you want to see the specifications* head over to <a href="http://revisionupdates.info/releases">RU Releases</a>, however, please note that OCR have not yet released any papers for completion (28th June 2015).
							<br></br>
							<blockquote>*Which include the practical assessment information as seen above quoted.</blockquote>
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