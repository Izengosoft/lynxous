<?php
/* config.php sets the db constants and any global constants we need */

/*** hacked from wp by light ***//


/* data base configurations.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. 
 *
 * @package Lynxous
 */

// ** MySQL settings ** //
/** The name of the database */
define('DBNAME', 'lynxous_db');

/** MySQL database username */ // change online to lynxous_db_superuser
define('DBUSER', 'root'); 

/** MySQL database password // change online to AtdPlw7wbb03tAFU1iPxmQHkbex3n7GGy8RdCeH2 */
define('DBPASS', '');

/** MySQL hostname */
define('DBHOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DBCHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DBCOLLATE', '');

/*
 * Authentication Unique Keys and Salts.
 *
 * We can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 */
define('AUTH_KEY',         't8p{_Pw@-xv$$WUizyG?OjoJH#j`q7S%gO3(%sjgSkLZfZ[0{ep*LB]Cw-b|yF{>');
define('SECURE_AUTH_KEY',  'bv5qG-9?Ng82}b rgX[1`l,X|+~0vi1+aRc:Ou;^@Wj!OJqx-,}1Vad8g=4)9Jnj');
define('LOGGED_IN_KEY',    'zJx#6g{%*G8@~{y6_9|4?8~21h%?_D`+C8+)+BqjFS.8<ZWbvPHjD>#&[XEKr<n_');
define('NONCE_KEY',        '{s0Gc+nN:0J VNG!QctmT$woix:mT=BsB{>;uAzv?xj0lI1<$kX=RbGW{6(fiE3A');
define('AUTH_SALT',        'O_I*b1.(D=czh?J)p?LX-JR[(#)>kHGd{iO[$&7]  wBc5hAHTRI1}M1@V4uH$tT');
define('SECURE_AUTH_SALT', 'i!lG?WB[;-71{3St&UK-8otD~vb{k*hW06T(0n{=~kw}(_4=oz**;e}$xhK&Nzsn');
define('LOGGED_IN_SALT',   'SVF9Hb:o? h85X8+>bk(TeyJ7IziB<ipI2q%O/2Q:uRRgOt1,nyo{$;5he~v?mwR');
define('NONCE_SALT',       '={J;p<}(CD7;6+rtho!^3kV1WWj|xBUJh7`eB=N3LuH<I#@OwS}V>$v&1915i!Lk');

/**#@-*/

/**
 * Lynxous Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lynx_';

/**
 * debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('DEBUG', false);

/** Absolute path to the Lynxous directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'settings.php');

//** add any new constant here **//


?>