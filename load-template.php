<?php 
	
	/**	load-template.php
	
		builds the template for a guest --unlogged and calls get_topic($_topic_name) which returns a parcable sheet with the values to filled the guest-template content area, meaning there are no edit controls or comment rights until logged as a user with an account.
		
		@package lynxous
		
		create by LiGhT.. 12.4.2015
	
	*/
	
	// we need to set 'INC' here and test ABSPATH to be sure..
	// require( ABSPATH . INC . 'function.php');
	
	include(ABSPATH . 'ui/head.php');
	include(ABSPATH . 'ui/top-bar.php');
	include(ABSPATH . 'ui/content-section.php');
	include(ABSPATH . 'ui/footer.php');

?>