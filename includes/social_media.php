<?php
	
	error_reporting(0);
	
	include('includes/config/social_media_config.php');
	
	if ($page_type = 'main') {
  	  	include('social_media_formats/social_media_main.php');
	} elseif ($page_type = 'ru_digi') {
   		include('social_media_formats/social_media_ru_digi.php');
   	} else {
		include('social_media_formats/social_media_main.php');
	}
?>	