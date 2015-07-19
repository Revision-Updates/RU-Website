					<div class="box">
						<header>
						<h3 class="align"><?php echo $Author_Type; ?>Author</h3>
						<p><?php echo $Course_Author; ?><?php if($Author_Prefix != "") { echo $Author_Prefix; }?></p>
						</header>
						<p>
							<span class="image left"><img src="http://revisionupdates.info/course/posts/articles/images/icons/<?php echo $Course_Author_Icon; ?>.png" alt="" /></span><?php echo $Course_Author_Bio; ?>
					<ul class="author">
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
						<p class="align-right"><?php echo $Course_Sub_Author; ?><?php if($Author_Sub_Prefix != "") { echo $Author_Sub_Prefix; }?></p>
						</header>
						<p>
							<span class="image right"><img src="http://revisionupdates.info/course/posts/articles/images/icons/<?php echo $Course_Sub_Author_Icon; ?>.png" alt="" /></span><?php echo $Course_Sub_Author_Bio; ?>
					<ul class="author" class="align-right">
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