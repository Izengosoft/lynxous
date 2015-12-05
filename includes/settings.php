<?php

	/** settings.php
	
		this file will pull cookies and check login-status if logged = true   $logged=true;
		start-session; etc..
		
		somthing tells me that this page should pull the correct index 
		
		@params bool
		
		once we know the 'status' of user we can load the correct page; user logged $logged=true, false, or no cookie=null
		
	**/

// init $logged to null before we check cookies 
define( '$_logged', '');

/* we need to define the COOKIEPATH */
// define(COOKIEPATH ''); // LOOK ME UP BOY!

// call load.php which loads the guest --unlogged && the $_default_topic, which is lynxous
require( ABSPATH . 'load-template.php' );
?>