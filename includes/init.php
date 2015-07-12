<?php
error_reporting(0);
include('includes/web_clip.php');
include('includes/tracking_info.php');

#Author Presets
#Main Author Presets
	if($Course_Lead_AuthorID != "") {
		if($Course_Lead_AuthorID == "1") {
			#Course Author 1 Settings - Sammy Herring
			$Course_Author = 'Sammy Herring';
			$Author_Type = 'Lead ';
			$Author_Prefix = ' - Content Director';
			$Course_Author_Link = 'http://sammyherring.co.uk';
			$Course_Author_Email = 'sammy_herring@revisionupdates.info';
			$Course_Author_Icon = 'sh_icon';
			$Course_Author_Bio = 'Web Developer working <a href="http://sammyherring.co.uk">freelance</a> operating in Kent and CEO of <a href="http://social-servers.co.uk">Social Systems</a>. Studying Mathematics (incl. FP1), Physics and Computer Science. While working as content director for <a href="https://twitter.com/revisionupdates">@RevisionUpdates</a>.';
			$Course_Author_Facebook = 'http://facebook.com/sammyherringsocial';
			$Course_Author_Twitter = 'http://twitter.com/sammy_herring';
			$Course_Author_Google = 'https://plus.google.com/117609819134494645136/';
			$Course_Author_GitHub = 'https://twitter.com/Sammy_Herring';
			$Course_Author_LinkedIn = 'http://uk.linkedin.com/in/sammyherring';
			$Course_Author_Dropbox = 'http://revisionupdates.info/sh-drop';
	 
		} elseif($Course_Lead_AuthorID == '2') {
			#Course Author 2 Settings - Toby Maskell
			$Course_Author = 'Toby Maskell';
			$Author_Type = 'Lead ';
			$Author_Prefix = '';
			$Course_Author_Link = '';
			$Course_Author_Email = 'toby_maskell@revisionupdates.info';
			$Course_Author_Icon = 'tm_icon';
			$Course_Author_Bio = 'Bio coming soon.';
			$Course_Author_Facebook = '';
			$Course_Author_Twitter = 'https://twitter.com/TobyMaskell';
			$Course_Author_Google = '';
			$Course_Author_GitHub = '';
			$Course_Author_LinkedIn = '';
			$Course_Author_Dropbox = 'http://revisionupdates.info/tm-drop';
			
		} elseif($Course_Lead_AuthorID == "3") {
			#Course Author 3 Settings - Ben Millbourne
			$Course_Author = 'Ben Millbourne';
			$Author_Type = 'Lead ';
			$Author_Prefix = '';
			$Course_Author_Link = '';
			$Course_Author_Email = 'ben_millbourne@revisionupdates.info';
			$Course_Author_Icon = 'bm_icon';
			$Course_Author_Bio = 'Hello, I am currently a Sixth Form student at Homewood School & Sixth Form Centre where I am studying Chemistry, Biology, and Forensics. In addition to this, I am also mentoring students in KS3 and working as a Learning Support Assistant (LSA). I will be working towards certification to become a trained Learning Support Assistant which could lead to a teaching role later in life. I am an administrator for a revision group, set up by a colleague, which supports students who want to achieve the highest grade they can; we also offer iTunes U courses to assist further with this. I take responsibility and dedication in every task I complete, which is why I have exceptional rapports with senior members of staff which could benefit me greatly if I need support. ';
			$Course_Author_Facebook = 'https://www.facebook.com/ben.millbourne';
			$Course_Author_Twitter = 'https://twitter.com/BMillbourne';
			$Course_Author_Google = '';
			$Course_Author_GitHub = '';
			$Course_Author_LinkedIn = '';
			$Course_Author_Dropbox = 'http://revisionupdates.info/bm-drop';
			
		} else {
			#Course Author Default Settings - Sammy Herring
			$Course_Author = 'Sammy Herring';
			$Author_Type = 'Lead ';
			$Author_Prefix = '';
			$Author_Prefix = ' - Content Director';
			$Course_Author_Link = 'http://sammyherring.co.uk';
			$Course_Author_Email = 'sammy_herring@revisionupdates.info';
			$Course_Author_Icon = 'sh_icon';
			$Course_Author_Bio = 'Web Developer working <a href="http://sammyherring.co.uk">freelance</a> operating in Kent and CEO of <a href="http://social-servers.co.uk">Social Systems</a>. Studying Mathematics (incl. FP1), Physics and Computer Science. While working as content director for <a href="https://twitter.com/revisionupdates">@RevisionUpdates</a>.';
			$Course_Author_Facebook = 'http://facebook.com/sammyherringsocial';
			$Course_Author_Twitter = 'http://twitter.com/sammy_herring';
			$Course_Author_Google = 'https://plus.google.com/117609819134494645136/';
			$Course_Author_GitHub = 'https://twitter.com/Sammy_Herring';
			$Course_Author_LinkedIn = 'http://uk.linkedin.com/in/sammyherring';
			$Course_Author_Dropbox = 'http://revisionupdates.info/sh-drop';
		}}
		
#Sub Author Presets
	if($Course_Sub_AuthorID != "") {
		if($Course_Sub_AuthorID == "1") {
			#Course Sub Author 1 Settings - Sammy Herring
			$Course_Sub_Author = 'Sammy Herring';
			$Author_Sub_Type = 'Lead ';
			$Author_Sub_Prefix = ' - Content Director';
			$Course_Sub_Author_Link = 'http://sammyherring.co.uk';
			$Course_Sub_Author_Email = 'sammy_herring@revisionupdates.info';
			$Course_Sub_Author_Icon = 'sh_icon';
			$Course_Sub_Author_Bio = 'Web Developer working <a href="http://sammyherring.co.uk">freelance</a> operating in Kent and CEO of <a href="http://social-servers.co.uk">Social Systems</a>. Studying Mathematics (incl. FP1), Physics and Computer Science. While working as content director for <a href="https://twitter.com/revisionupdates">@RevisionUpdates</a>.';
			$Course_Sub_Author_Facebook = 'http://facebook.com/sammyherringsocial';
			$Course_Sub_Author_Twitter = 'http://twitter.com/sammy_herring';
			$Course_Sub_Author_Google = 'https://plus.google.com/117609819134494645136/';
			$Course_Sub_Author_GitHub = 'https://twitter.com/Sammy_Herring';
			$Course_Sub_Author_LinkedIn = 'http://uk.linkedin.com/in/sammyherring';
			$Course_Sub_Author_Dropbox = 'http://revisionupdates.info/sh-drop';
	 
		} elseif($Course_Sub_AuthorID == '2') {
			#Course Sub Author 2 Settings - Toby Maskell
			$Course_Sub_Author = 'Toby Maskell';
			$Author_Sub_Type = 'Lead ';
			$Author_Sub_Prefix = '';
			$Course_Sub_Author_Link = '';
			$Course_Sub_Author_Email = 'toby_maskell@revisionupdates.info';
			$Course_Sub_Author_Icon = 'tm_icon';
			$Course_Sub_Author_Bio = 'Bio coming soon.';
			$Course_Sub_Author_Facebook = '';
			$Course_Sub_Author_Twitter = 'https://twitter.com/TobyMaskell';
			$Course_Sub_Author_Google = '';
			$Course_Sub_Author_GitHub = '';
			$Course_Sub_Author_LinkedIn = '';
			$Course_Sub_Author_Dropbox = 'http://revisionupdates.info/tm-drop';
			
		} elseif($Course_Sub_AuthorID == "3") {
			#Course Sub Author 3 Settings - Ben Millbourne
			$Course_Sub_Author = 'Ben Millbourne';
			$Author_Sub_Type = 'Lead ';
			$Author_Sub_Prefix = '';
			$Course_Sub_Author_Link = '';
			$Course_Sub_Author_Email = 'ben_millbourne@revisionupdates.info';
			$Course_Sub_Author_Icon = 'bm_icon';
			$Course_Sub_Author_Bio = 'Hello, I am currently a Sixth Form student at Homewood School & Sixth Form Centre where I am studying Chemistry, Biology, and Forensics. In addition to this, I am also mentoring students in KS3 and working as a Learning Support Assistant (LSA). I will be working towards certification to become a trained Learning Support Assistant which could lead to a teaching role later in life. I am an administrator for a revision group, set up by a colleague, which supports students who want to achieve the highest grade they can; we also offer iTunes U courses to assist further with this. I take responsibility and dedication in every task I complete, which is why I have exceptional rapports with senior members of staff which could benefit me greatly if I need support. ';
			$Course_Sub_Author_Facebook = 'https://www.facebook.com/ben.millbourne';
			$Course_Sub_Author_Twitter = 'https://twitter.com/BMillbourne';
			$Course_Sub_Author_Google = '';
			$Course_Sub_Author_GitHub = '';
			$Course_Sub_Author_LinkedIn = '';
			$Course_Sub_Author_Dropbox = 'http://revisionupdates.info/bm-drop';
			
		} else {
			#Course Sub Author Default Settings - Sammy Herring
			$Course_Sub_Author = 'Sammy Herring';
			$Author_Sub_Type = 'Lead ';
			$Author_Sub_Prefix = ' - Content Director';
			$Course_Sub_Author_Link = 'http://sammyherring.co.uk';
			$Course_Sub_Author_Email = 'sammy_herring@revisionupdates.info';
			$Course_Sub_Author_Icon = 'sh_icon';
			$Course_Sub_Author_Bio = 'Web Developer working <a href="http://sammyherring.co.uk">freelance</a> operating in Kent and CEO of <a href="http://social-servers.co.uk">Social Systems</a>. Studying Mathematics (incl. FP1), Physics and Computer Science. While working as content director for <a href="https://twitter.com/revisionupdates">@RevisionUpdates</a>.';
			$Course_Sub_Author_Facebook = 'http://facebook.com/sammyherringsocial';
			$Course_Sub_Author_Twitter = 'http://twitter.com/sammy_herring';
			$Course_Sub_Author_Google = 'https://plus.google.com/117609819134494645136/';
			$Course_Sub_Author_GitHub = 'https://twitter.com/Sammy_Herring';
			$Course_Sub_Author_LinkedIn = 'http://uk.linkedin.com/in/sammyherring';
			$Course_Sub_Author_Dropbox = 'http://revisionupdates.info/sh-drop';
		}}
?>
<!--<base target="_blank">-->
<script src='http://code.jquery.com/jquery-latest.min.js' type='text/javascript'></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
		<style>
		#note {
        position: absolute;
        z-index: 100000;
        top: 0;
        left: 0;
        right: 0;
        
        background: #83d3c9;
        text-align: center;
        text-color: #000;
        text-decoration: underline;
        line-height: 2.5;
        overflow: hidden; 
        -webkit-box-shadow: 0 0 5px black;
        -moz-box-shadow:    0 0 5px black;
        box-shadow:         0 0 5px black;
    	}
		.cssanimations.csstransforms #note {
        -webkit-transform: translateY(-50px);
        -webkit-animation: slideDown 5.0s 1.0s 1 ease forwards;
        -moz-transform:    translateY(-50px);
        -moz-animation:    slideDown 5.0s 1.0s 1 ease forwards;
    	}

		#close {
		position: absolute;
		right: 10px;
		top: 9px;
		text-indent: -9999px;
		background: url(http://revisionupdates.info/ru-digi/images/close.png);
		height: 16px;
		width: 16px;
		cursor: pointer;
		}
		.cssanimations.csstransforms #close {
		display: none;
    	}
    
		@-webkit-keyframes slideDown {
        0%, 100% { -webkit-transform: translateY(-50px); }
        10%, 90% { -webkit-transform: translateY(0px); }
		}
		@-moz-keyframes slideDown {
        0%, 100% { -moz-transform: translateY(-50px); }
        10%, 90% { -moz-transform: translateY(0px); }
		}
	</style>