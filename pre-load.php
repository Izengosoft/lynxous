<?php
	/**
		pre-load sets ABSPATH (url) and calls the config.php file for the db and calls 'constants.php' which sets any constants we need to load the environment
		constants.php calls 'settings.php' which pulls a cookie IF(exists), and gets the locale, and an ip address to set $_local $_user_location
		
			// LiGhT version 1.0 will load the config, constants, "simple setting" and the template
			// login and launch user_logged('in/index.php' && get_user($_user) && $_topic) 
			// both will load the $_default_topic which is lynxous
		
		@package lynxous
		
		we can add any other pre-load scripts to this file in the future
		ping the ip address or pull cookies ahead of constants and/or //-locale and load the language early (future version)
		
	*/



require( ABSPATH . 'includes/config.php');
require( ABSPATH . 'includes/constants.php'); 

?>