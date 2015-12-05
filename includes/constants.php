<?php

	/** constants.php
	
		This file was hacked from Wordpress 4.2.1 under the terms of the GNU GENERAL PUBLIC LICENSE. This version complete and intact can be found at:
		www.github.org/izengosoft/wordpress-4.2.1 It is free and open source to any one see: WP-GNU-license.txt for terms and conditions. pieces of this code was pulled and modified and as well falls under this same license. Any altered or modified code within has been identified according to the terms and conditions set in the GNU GENERAL PUBLIC LICENSE, which is included with this release and is limited to only the parts of the original WP code hacked, which can be reused or modified under the same GNU license. @hacked by LiGhT... 12.3.2015
		
		place all global constants within this file
		and clean it up a bit, remove WP version notes and remove this comment
		
		@params human-readable time
		@params cookie constants
		@params functionality constants
		@params [finally] load 'setting.php'
		@package lynxous
		
		@hack Wordpress default-constants
		created by LiGhT.. 12.4 2015
		
	 */


// Constants for expressing human-readable intervals
// in their respective number of seconds.
define( 'MINUTE_IN_SECONDS', 60 );
define( 'HOUR_IN_SECONDS',   60 * MINUTE_IN_SECONDS );
define( 'DAY_IN_SECONDS',    24 * HOUR_IN_SECONDS   );
define( 'WEEK_IN_SECONDS',    7 * DAY_IN_SECONDS    );
define( 'MONTH_IN_SECONDS',  30 * DAY_IN_SECONDS	);
define( 'YEAR_IN_SECONDS',  365 * DAY_IN_SECONDS    );

//HACK THIS BEFORE USING

/**
 * Defines cookie related (Lynxous-hacked-WordPress) constants
 * 
 *
 * Defines constants after site is loaded. Cookie-related constants may be overridden in ms_network_cookies().
 * @since WP-3.0.0
 */
function cookie_constants() {
	/**
	 * Used to guarantee unique hash cookies
	 *
	 * @since 1.5.0
	 */
	if ( !defined( 'COOKIEHASH' ) ) {
			define( 'COOKIEHASH', md5( ABSPATH ) ); // $siteurl REMOVED from WP and replaced with www.(this).com 
	}

	/**
	 * @since 2.0.0
	 */
	if ( !defined('USER_COOKIE') )
		define('USER_COOKIE', 'lynxoususer_' . COOKIEHASH);

	/**
	 * @since 2.0.0
	 */
	if ( !defined('PASS_COOKIE') )
		define('PASS_COOKIE', 'lynxouspass_' . COOKIEHASH);

	/**
	 * @since 2.5.0
	 */
	if ( !defined('AUTH_COOKIE') )
		define('AUTH_COOKIE', 'lynxous_' . COOKIEHASH);

	/**
	 * @since 2.6.0
	 */
	if ( !defined('SECURE_AUTH_COOKIE') )
		define('SECURE_AUTH_COOKIE', 'lynxous_sec_' . COOKIEHASH);

	/**
	 * @since 2.6.0
	 */
	if ( !defined('LOGGED_IN_COOKIE') )
		define('LOGGED_IN_COOKIE', 'lynxous_logged_in_' . COOKIEHASH);

	/**
	 * @since 2.3.0
	 */
	if ( !defined('TEST_COOKIE') )
		define('TEST_COOKIE', 'lynxous_test_cookie');

	/**
	 * @since 1.2.0 //this needs to be dug out, ie., preg_replace() and get_option() seem like WP_functions check functions.php
	 */
	if ( !defined('COOKIEPATH') )
		define('COOKIEPATH', preg_replace('|https?://[^/]+|i', '', get_option('home') . '/' ) );

	/**
	 * @since 1.5.0
	 */
	if ( !defined('SITECOOKIEPATH') )
		define('SITECOOKIEPATH', preg_replace('|https?://[^/]+|i', '', get_option('siteurl') . '/' ) );

	/**
	 * @since 2.6.0 REMOVED LiGhT... 12.3.2015
	 */
	

	/**
	 * @since 2.6.0 REMOVED LiGhT... 12.3.2015
	 */


	/**
	 * @since 2.0.0
	 */
	if ( !defined('COOKIE_DOMAIN') )
		define('COOKIE_DOMAIN', false);
}

/**
 * Defines cookie related lynxous constants
 *
 * @since 3.0.0
 */
function lynx_ssl_constants() {
	/**
	 * @since 2.6.0 REMOVED 12.3.2015 LiGhT...
	 */


	/**
	 * @since 2.6.0
	 */
	if ( !defined('FORCE_SSL_LOGIN') )
		define('FORCE_SSL_LOGIN', false);
	force_ssl_login(FORCE_SSL_LOGIN);
}

/**
 * Defines functionality related constants
 * LEFT INTACT by LiGhT... at no time whatsoever!
 * 
 */
function functionality_constants() {
	/**
	 * @since 2.5.0
	 */
	if ( !defined( 'AUTOSAVE_INTERVAL' ) )
		define( 'AUTOSAVE_INTERVAL', 60 );

	/**
	 * @since 2.9.0
	 */
	if ( !defined( 'EMPTY_TRASH_DAYS' ) )
		define( 'EMPTY_TRASH_DAYS', 30 );

	if ( !defined('POST_REVISIONS') )
		define('POST_REVISIONS', true);

	/**
	 * @since 3.3.0
	 */
	if ( !defined( 'CRON_LOCK_TIMEOUT' ) )
		define('CRON_LOCK_TIMEOUT', 60);  // In seconds
}

/** This calls settings and sends us to the next thang! */	
require_once( ABSPATH . 'includes/settings.php');
	
?>

