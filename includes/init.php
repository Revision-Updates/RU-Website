<?php
error_reporting(0);
include('includes/web_clip.php');
include('includes/tracking_info.php');

	If ($Course_Lead_AuthorID != "") {
		If ($Course_Lead_AuthorID = "1") {
			#Course Author 1 Settings - Sammy Herring
			$Course_Author = 'Sammy Herring';
			$Course_Author_Link = 'http://sammyherring.co.uk';
			$Course_Author_Icon = 'sh_icon';
			$Course_Author_Bio = 'Web Developer working <a href="http://sammyherring.co.uk">freelance</a> operating in Kent and CEO of <a href="http://social-servers.co.uk">Social Systems</a>. Studying Mathematics (incl. FP1), Physics and Computer Science. While overseeing <a href="https://twitter.com/revisionupdates">@RevisionUpdates</a>.';
			$Course_Author_Facebook = 'http://facebook.com/sammyherringsocial';
			$Course_Author_Twitter = 'http://twitter.com/sammy_herring';
			$Course_Author_Google = 'https://plus.google.com/117609819134494645136/';
			$Course_Author_GitHub = 'https://twitter.com/Sammy_Herring';
	 
		} Elseif ($Course_Lead_AuthorID = "2") {
			#Course Author 2 Settings - Toby Maskell
			$Course_Author = 'Toby Maskell';
			$Course_Author_Link = 'http://sammyherring.co.uk';
			$Course_Author_Icon = 'pic05';
			$Course_Author_Bio = 'Web Developer working <a href="http://sammyherring.co.uk">freelance</a> operating in Kent and CEO of <a href="http://social-servers.co.uk">Social Systems</a>. Studying Mathematics (incl. FP1), Physics and Computer Science. While overseeing <a href="https://twitter.com/revisionupdates">@RevisionUpdates</a>.';
			$Course_Author_Facebook = 'http://facebook.com/sammyherringsocial';
			$Course_Author_Twitter = 'http://twitter.com/sammy_herring';
			$Course_Author_Google = 'https://plus.google.com/117609819134494645136/';
			$Course_Author_GitHub = 'https://twitter.com/Sammy_Herring';
			
		} Elseif ($Course_Lead_AuthorID = "3") {
			#Course Author 2 Settings - Ben Millbourne
			$Course_Author = 'Ben Millbourne';
			$Course_Author_Link = 'http://sammyherring.co.uk';
			$Course_Author_Icon = 'pic05';
			$Course_Author_Bio = 'Web Developer working <a href="http://sammyherring.co.uk">freelance</a> operating in Kent and CEO of <a href="http://social-servers.co.uk">Social Systems</a>. Studying Mathematics (incl. FP1), Physics and Computer Science. While overseeing <a href="https://twitter.com/revisionupdates">@RevisionUpdates</a>.';
			$Course_Author_Facebook = 'http://facebook.com/sammyherringsocial';
			$Course_Author_Twitter = 'http://twitter.com/sammy_herring';
			$Course_Author_Google = 'https://plus.google.com/117609819134494645136/';
			$Course_Author_GitHub = 'https://twitter.com/Sammy_Herring';
			
		} Else {
			#Course Author Default Settings - Sammy Herring
			$Course_Author1 = 'Sammy Herring';
			$Course_Author_Link1 = 'http://sammyherring.co.uk';
			$Course_Author_Icon1 = 'http://revisionupdates.info/images/icons/sh_icon';
			$Course_Author_Bio1 = 'Web Developer working <a href="http://sammyherring.co.uk">freelance</a> operating in Kent and CEO of <a href="http://social-servers.co.uk">Social Systems</a>. Studying Mathematics (incl. FP1), Physics and Computer Science. While overseeing <a href="https://twitter.com/revisionupdates">@RevisionUpdates</a>.';
			$Course_Author_Facebook1 = 'http://facebook.com/sammyherringsocial';
			$Course_Author_Twitter1 = 'http://twitter.com/sammy_herring';
			$Course_Author_Google1 = 'https://plus.google.com/117609819134494645136/';
			$Course_Author_GitHub1 = 'https://twitter.com/Sammy_Herring';
	}}
?>
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