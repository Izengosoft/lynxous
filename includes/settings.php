<?php

/** settings.php 
	this file will pull cookies and check login-status if logged = true   $logged=true;
	start-session; etc..
	
	somthing tells me that this page should pull the correct index 
	
	@params bool
	
	once we know the 'status' of user we can load the correct page; user logged $logged=true, false, or no cookie=null
	
**/

/* we init $logged to null before we check cookies */
define( $logged '');

/* we need to define the COOKIEPATH */
define(COOKIEPATH ''); // LOOK ME UP BOY!

// check to see the user status and then call load.php ( this would be the time to build in the login php parts from the folder)

?>