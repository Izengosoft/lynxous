<?php 	

	/** index.php
	
		ABSPATH config.php, settings.php and 'load.php' were conceptually lifted from Wordpress.org and customized to lynxous.com by LiGhT.. 12.4.2015
		
		'index.html' sets the absolute path and calls 'pre-load.php' which will call the 'config.php' and 'settings.php'; settings calls 'load.php' which calls the index.php and populates it, passing it all the constants and variables needed: 
		
		ABSPATH . intro.html, [no cookie] 
		ABSPATH . /in/index.php  [logged] 
		ABSPATH . 'index.php' [unlogged]
		&& get-topic /topics/topic_name.XML // this is a quick fix and will be extended with Lucene 5.3.1
		// !IMPORTANT - remove these notes when complete 

		@params ABSPATH
		@package lynxous

		Loads the Environment
		hacked by LiGhT.. 12.4.2015
		
	*/

	/** Define ABSPATH as this file's directory */
	define( 'ABSPATH', dirname(__FILE__) . '/' );

	require( ABSPATH . 'pre-load.php');
	
?>




