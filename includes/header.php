			<!-- Header -->
				<header id="header" <?php if($Nav_Alt == "yes") { echo 'class="alt"'; } ?> >
					<h1><a href="<?php echo $Course_Slug; ?>.php">RU iTunes U</a> by Revision Updates</h1>
					<nav id="nav">
						<ul>
							<li><a href="#page-wrapper">Welcome</a></li>
							<li>
								<a class="icon fa-angle-down">Resources</a>
								<ul>
									<li><a href="http://revisionupdates.info/releases/">RU Releases</a></li>
									<li><a href="http://revisionupdates.info/ru-digi/">RU Digi</a></li>
									<li><a href="http://revisionupdates.info/ambassadors/">Ambassadors</a></li>
									<li><a href="http://revisionupdates.info/itunesu/">iTunes U Download</a></li>
									<li>
										<a href="http://revisionupdates.info/course/posts/">Posts</a>
										<ul>
										<li><a href="http://revisionupdates.info/course/posts/articles/biology/">Biology</a></li>
										<li><a href="http://revisionupdates.info/course/posts/articles/chemistry/">Chemistry</a></li>
										<li><a href="http://revisionupdates.info/course/posts/articles/physics/">Physics</a></li>
										<li><a href="http://revisionupdates.info/course/posts/articles/mathematics/">Mathematics</a></li>
										<li><a href="http://revisionupdates.info/course/posts/articles/further-mathematics/">Further Mathematics</a></li>
										<li><a href="http://revisionupdates.info/course/posts/articles/computing/">Computing</a></li>
										<li><a href="http://revisionupdates.info/course/posts/articles/english-literature/">English Literature</a></li>
										<li><a href="http://revisionupdates.info/course/posts/articles/forensics/">Forensics</a></li>
										<li><a href="http://revisionupdates.info/course/posts/articles/french/">French</a></li>
										<li><a href="http://revisionupdates.info/course/posts/articles/geography/">Geography</a></li>
										<li><a href="http://revisionupdates.info/course/posts/articles/history/">History</a></li>
										</ul>
									</li>
									<li>
										<a>Admin</a>
										<ul>
											<li><a href="http://revisionupdates.info/admin/">Slack</a></li>
											<li><a href="http://ru.sammyherring.co.uk">Calendar</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="
								<?php
									if($Page_Parent == "") {
										echo "http://revisionupdates.info/course/posts/";
									} elseif($Page_Parent == "course") {
										echo "http://revisionupdates.info/course/";
									} elseif($Page_Parent == "posts") {
										echo "http://revisionupdates.info/course/posts/";
									} elseif($Page_Parent == "biology") {
										echo "http://revisionupdates.info/course/posts/articles/biology/";
									} elseif($Page_Parent == "chemistry") {
										echo "http://revisionupdates.info/course/posts/articles/chemistry/";
									} elseif($Page_Parent == "physics") {
										echo "http://revisionupdates.info/course/posts/articles/physics/";
									} elseif($Page_Parent == "mathematics") {
										echo "http://revisionupdates.info/course/posts/articles/mathematics/";
									} elseif($Page_Parent == "further-mathematics") {
										echo "http://revisionupdates.info/course/posts/articles/further-mathematics/";
									} elseif($Page_Parent == "computing") {
										echo "http://revisionupdates.info/course/posts/articles/computing/";
									} elseif($Page_Parent == "english-literature") {
										echo "http://revisionupdates.info/course/posts/articles/english-literature/";
									} elseif($Page_Parent == "forensics") {
										echo "http://revisionupdates.info/course/posts/articles/forensics/";
									} elseif($Page_Parent == "french") {
										echo "http://revisionupdates.info/course/posts/articles/french/";
									} elseif($Page_Parent == "geography") {
										echo "http://revisionupdates.info/course/posts/articles/geography/";
									} elseif($Page_Parent == "history") {
										echo "http://revisionupdates.info/course/posts/articles/history/";
									} elseif($Page_Parent == "view_posts") {
										echo "http://revisionupdates.info/course/posts";
									}
								?>
										" class="button">
										<?php
										if($Page_Parent == "view_posts") {
											echo "View Posts";
										} else {
											echo "Go Back";
										}
										?>
										</a></li>
						</ul>
					</nav>
				</header>
