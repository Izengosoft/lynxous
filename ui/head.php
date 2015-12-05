<?php

	/** head.php

		this is called by guest_template.php which is called by 'setting.php'
		this holds the meta tags and head tags of the 'guest-template.php', and the top snippet of the body and wrapper
		added include favicon.php  
		
		@params meta tags
		@params stylesheets
		@params javascript
		@params jquery
		@package lynxous
		
		add any meta tags or links here either 'added to' or called by 'topic'
		
		created by LiGhT.. 12.4.2015

	*/
	
?>

<!DOCTYPE html> <!-- this tag needs to be extended && this comment removed -->
<html lang="en"> 
	<head>
		<title>Lynxous - Get involved in a real Community... The one you live in!</title>
  		<meta charset="utf-8" />
		
  		<link rel="stylesheet" href="css/lynx.css"   media="all" />
  		<link rel="stylesheet" href="css/font-awesome.min.css" />
		
		<?php 	
			if (!defined('INC'))
				define( 'INC', 'includes' . '/' );
				
			require( ABSPATH . INC . 'favicon.php'); 
		?>

		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	</head>

	<body>
		<div class="background_wrapper">
			<div id="wrapper">
		