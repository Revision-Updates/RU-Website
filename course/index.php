<!DOCTYPE HTML>
<html>
	<head>
		<title>RU iTunes U</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<?php include('../includes/web_clip.php'); ?>
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
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
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
							<li><a href="http://revisionupdates.info/course/posts" class="button">View Posts</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<h2>RU iTunes U</h2>
					<p>An iTunes U course built for A-Level Students studying an array of subjects by <a href="http://revisionupdates.info">Revision Updates</a>.</p>
					<ul class="actions">
						<li><a href="http://revisionupdates.info/itunesu" class="button special">Download</a></li>
						<li><a href="#main" class="button">Learn More</a></li>
					</ul>
				</section>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>Introducing the ultimate iTunes U Course
							<br />
							for all of your A-Level revision needs.</h2>
							<p>
								In this <a href="http://revisionupdates.info">Revision Updates</a> iTunes U Course we cover a range of A-Level subjects that act as a tool for revision purposes. On the course we cover an array of topics with revision videos and assignments to help you progress as a learner, not to mention dedicated discussion groups. We believe that this is the <strong>ultimate</strong> revision tool.
							</p>
						</header>
						<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
					</section>

					<section class="box special features">
						<div class="features-row">
							<section>
								<span class="icon major fa-exchange accent2"></span>
								<h3>Submissions</h3>
								<p>
									Using our new innovative cloud based iTunes U system you have the ability to send in assignments. We can then offer constructive feedback to help your development.
							</section>
							<section>
								<span class="icon major fa-comments accent3"></span>
								<h3>Dedicated Discussions</h3>
								<p>With our new learning scheme on the iTunes U platform we have dedicated learning discussion groups for any queries that you may have as your knowledge progresses.</p>
							</section>
						</div>
						<div class="features-row">
							<section>
								<span class="icon major fa-cloud accent4"></span>
								<h3>Cloud Based</h3>
								<p>If you have already experienced Revision Updates, then you will know that our hand-built platform is entirely cloud based. We believe this gives a unique learning experience.</p>
							</section>
							<section>
								<span class="icon major fa-lock accent5"></span>
								<h3>Secure and Safe</h3>
								<p>
									Our platform uses the latest in security technologies all within Apple's learning environment. Therefore, you can expect seamless integration on your iOS device.
								</p>
							</section>
						</div>
					</section>

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

			<!-- CTA -->
				<section id="cta">

					<h2>Sign up for ambassador access</h2>
					<p>Enter your email address here and we will be in touch.</p>

					<form method="post">
						<div class="row uniform 50%">
							<div class="8u 12u(mobilep)">
								<input type="email" name="email" id="email" placeholder="Email Address" />
							</div>
							<div class="4u 12u(mobilep)">
								<input type="submit" value="Sign Up" class="fit" />
							</div>
						</div>
					</form>

				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<?php 
							include('../includes/config/social_media_config.php');
							$page_type = 'ru_digi';
							include('../includes/social_media_formats/social_media_ru_digi.php');
						?>
					</ul>
					<ul class="copyright">
						<li>
							<?php include('../includes/footer.php'); ?>
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
