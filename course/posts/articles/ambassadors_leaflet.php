<?php
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
							<li><a href="http://revisionupdates.info/course/posts" class="button">Go Back</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>Ambassador's Leaflet</h2>
						<p>Contact us if you are interested. <a href="mailto:sammy_herring@revisionupdates.info">Click here</a>.</p>
					</header>
					<div class="box">
						<span class="image fit"><img src="http://revisionupdates.info/downloads/Revision Updates_Ambassadors.jpg" alt="" /></span>
						</div>
					<div class="box">
						<header>
						<h3 class="align"><?php echo $Author_Type; ?>Author</h3>
						<p><?php echo $Course_Author; ?></p>
						</header>
						<p>
							<span class="image left"><img src="http://revisionupdates.info/course/posts/articles/images/icons/<?php echo $Course_Author_Icon; ?>.png" alt="" /></span><?php echo $Course_Author_Bio; ?>
					<ul class="icons">
						<?php
							If ($Course_Author_Facebook != "") {
								?> <li><a href="<?php echo $Course_Author_Facebook; ?>" class="icon fa-facebook"><span class="label">Facebook</span></a></li><?php
							}
						?>
						<?php
							If ($Course_Author_Twitter != "") {
								?> <li><a href="<?php echo $Course_Author_Twitter; ?>" class="icon fa-twitter"><span class="label">Twitter</span></a></li><?php
							}
						?>
						<?php
							If ($Course_Author_Google != "") {
								?> <li><a href="<?php echo $Course_Author_Google; ?>" class="icon fa-google-plus"><span class="label">Google+</span></a></li><?php
							}
						?>
						<?php
							If ($Course_Author_LinkedIn != "") {
								?> <li><a href="<?php echo $Course_Author_LinkedIn; ?>" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li><?php
							}
						?>
						<?php
							If ($Course_Author_GitHub != "") {
								?> <li><a href="<?php echo $Course_Author_GitHub; ?>" class="icon fa-github"><span class="label">Github</span></a></li><?php
							}
						?>
						<?php
							If ($Course_Author_Dropbox != "") {
								?> <li><a href="<?php echo $Course_Author_Dropbox; ?>" class="icon fa-dropbox"><span class="label">Dropbox</span></a></li><?php
							}
						?>
						<?php
							If ($Course_Author_Email != "") {
								?> <li><a href="mailto:<?php echo $Course_Author_Email; ?>" class="icon fa-paper-plane-o"><span class="label">Email</span></a></li><?php
							}
						?>
						<?php
							If ($Course_Author_Link != "") {
								?> <li><a href="<?php echo $Course_Author_Link; ?>" class="button small">Blog</a></li><?php
							}
						?>
					</ul>
						</p>
						<?php if($Course_Sub_AuthorID != "") { ?>
						<header>
						<h3 class="align-right"><?php echo $Author_Sub_Type; ?>Author</h3>
						<p class="align-right"><?php echo $Course_Sub_Author; ?></p>
						</header>
						<p>
							<span class="image right"><img src="http://revisionupdates.info/course/posts/articles/images/icons/<?php echo $Course_Sub_Author_Icon; ?>.png" alt="" /></span><?php echo $Course_Sub_Author_Bio; ?>
					<ul class="icons" class="align-right">
						<?php
							If ($Course_Sub_Author_Facebook != "") {
								?> <li><a href="<?php echo $Course_Sub_Author_Facebook; ?>" class="icon fa-facebook"><span class="label">Facebook</span></a></li><?php
							}
						?>
						<?php
							If ($Course_Sub_Author_Twitter != "") {
								?> <li><a href="<?php echo $Course_Sub_Author_Twitter; ?>" class="icon fa-twitter"><span class="label">Twitter</span></a></li><?php
							}
						?>
						<?php
							If ($Course_Sub_Author_Google != "") {
								?> <li><a href="<?php echo $Course_Sub_Author_Google; ?>" class="icon fa-google-plus"><span class="label">Google+</span></a></li><?php
							}
						?>
						<?php
							If ($Course_Sub_Author_GitHub != "") {
								?> <li><a href="<?php echo $Course_Sub_Author_GitHub; ?>" class="icon fa-github"><span class="label">Github</span></a></li><?php
							}
						?>
						<?php
							If ($Course_Sub_Author_LinkedIn != "") {
								?> <li><a href="<?php echo $Course_Sub_Author_LinkedIn; ?>" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li><?php
							}
						?>
						<?php
							If ($Course_Sub_Author_Dropbox != "") {
								?> <li><a href="<?php echo $Course_Sub_Author_Dropbox; ?>" class="icon fa-dropbox"><span class="label">Dropbox</span></a></li><?php
							}
						?>
						<?php
							If ($Course_Sub_Author_Email != "") {
								?> <li><a href="mailto:<?php echo $Course_Sub_Author_Email; ?>" class="icon fa-paper-plane-o"><span class="label">Email</span></a></li><?php
							}
						?>
						<?php
							If ($Course_Sub_Author_Link != "") {
								?> <li><a href="<?php echo $Course_Sub_Author_Link; ?>" class="button small">Blog</a></li><?php
							}
						?>
					</ul>
					</p>
					<?php } ?>

					</div>
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