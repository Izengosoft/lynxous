<?php
/**
	pre-load calls the config.php file for the db and calls 'constants.php' which sets any constants we need to load the environment
	constants.php calls 'settings.php' which pulls a cookie IF(exists), and gets the locale, and an ip address to set $_local $_user_location
	
	@params ABSPATH
	
	we can add any other pre-load calls to this file in the future
*/

/** Define ABSPATH as this file's directory */
define( 'ABSPATH', dirname(__FILE__) . '/' );


require( ABSPATH . 'includes/config.php');
require( ABSPATH . 'includes/constants.php'); 

?>