<!DOCTYPE HTML>
<html>
	<head>
		<title>RU iTunes U - Posts</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<?php include('../../includes/web_clip.php'); ?>
		<script src='http://code.jquery.com/jquery-latest.min.js' type='text/javascript'></script>
		<script>
			$(document).ready(function(){
			$('a[href^="#"]').on('click',function (e) {
			e.preventDefault();

			var target = this.hash;
			var $target = $(target);

			$('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    	}, 900, 'swing', function () {
	        	window.location.hash = target;
	    	});
			});
			});
		</script>
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="index.php">RU iTunes U</a> by Revision Updates</h1>
					<nav id="nav">
						<ul>
							<li><a href="#page-wrapper">Welcome</a></li>
							<li>
								<a class="icon fa-angle-down">Resources</a>
								<ul>
									<li><a href="http://revisionupdates.info/releases">RU Releases</a></li>
									<li><a href="http://revisionupdates.info/ru-digi">RU Digi</a></li>
									<li><a href="http://revisionupdates.info/ambassadors">Ambassadors</a></li>
									<li><a href="http://revisionupdates.info/itunesu">iTunes U Download</a></li>
									<li>
										<a>Admin</a>
										<ul>
											<li><a href="http://revisionupdates.info/admin">Slack</a></li>
											<li><a href="http://ru.sammyherring.co.uk">Calendar</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="http://revisionupdates.info/course" class="button">Go Back</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>Posts</h2>
						<p>More content coming soon.</p>
						<br></br>
						<span class="icon major fa-cloud accent1"></span> 
						<span class="icon major fa-code accent2"></span> 
						<span class="icon major fa-code-fork accent3"></span>
						<span class="icon major fa-terminal accent4"></span> 
						<span class="icon major fa-upload accent5"></span> 
					</header>
					<div class="box">
						<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
						<h3>Announcements</h3>
						<p>
							<span class="image left"><img src="images/v2_ico.png" alt="" /></span>Just to let you know, we will be publishing Revision Updates A-Level Edition officially as apart of our <strong>public release</strong> on the 27th August 2015 (although we will start adding people from the 20th).

As apart of the release with v2.0 revision updates we will be offering a new standard of resources that are specifically designed for all of your A-Level needs. We have an ever-expanding database of resources that we will be making available from day one.
<br></br>
If you would like to see any more information regarding the iTunes U course please see our <a href="http://revisionupdates.info/course">dedicated website</a>.
						</p>
						<div class="row">
							<div class="6u 12u(mobilep)">
								<h3>Supported Subjects</h3>
								<p>
									<ul>
										<li>Biology</li>
										<li>Chemistry</li>
										<li>Physics</li>
										<li>Mathematics</li>
										<li>Further Mathematics</li>
										<li>Computing</li>
										<li>English Literature</li>
										<li>Forensics</li>
										<li>French</li>
										<li>Geography</li>
										<li>History</li>
									</ul>
								</p>
							</div>
							<div class="6u 12u(mobilep)">
								<h3>Day One</h3>
								<p>
									<span class="image left"><img src="images/d1_ico.png" alt="" /></span>
									Should we not yet be supporting a course that you would like us to support do not hesitate to ask us to do so, you can get in touch with me via <a href="mailto:sammy_herring@revisionupdates.info">email</a>. Please note that we having a growing ambassadors team and we are looking for more members, please see are <a href="http://revisionupdates.info/course/posts/articles/ambassadors_leaflet.php">information sheet</a> to see if you are interested. We would like to remind you that it is only thanks to the generosity of students willing to help us develop our learning resources platform.
								<br></br>
									We would like to take this opportunity to thank you for joining our beta of Revision Updates iTunes U and we are happy to answer any questions that you may have. <a href="mailto:sammy_herring@revisionupdates.info">Click here</a> to email us for a query.
								</p>
							</div>
						</div>
					</div>
				
					<div class="row">
						<div class="6u 12u(narrower)">

							<section class="box special">
								<span class="image featured"><img src="images/pic02.jpg" alt="" /></span>
								<h3>RU Releases</h3>
								<p>
									Our largest learning resource with over 50 GB of data. With a student-centric focus, we cover multiple subjects aimed at both GCSE and A-Level (GCE) students.
								</p>
								<ul class="actions">
									<li><a href="http://revisionupdates.info/releases" class="button alt">Learn More</a></li>
								</ul>
							</section>

						</div>
						<div class="6u 12u(narrower)">

							<section class="box special">
								<span class="image featured"><img src="images/pic03.jpg" alt="" /></span>
								<h3>RU Digi</h3>
								<p>
									Yet another of Revision Updates innovative resources. A cloud based calendar system, where we track and monitor all revision sessions for your convenience.
								</p>
								<ul class="actions">
									<li><a href="http://revisionupdates.info/ru-digi/" class="button alt">Learn More</a></li>
								</ul>
							</section>

						</div>
					</div>
					</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<?php 
							include('../../includes/config/social_media_config.php');
							$page_type = 'ru_digi';
							include('../../includes/social_media_formats/social_media_ru_digi.php');
						?>
					</ul>
					<ul class="copyright">
						<li>
							<?php include('../../includes/footer.php'); ?>
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