<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpdb');

/** MySQL hostname */
if(isset($_SERVER['SERVER_SOFTWARE']) && strpos($_SERVER['SERVER_SOFTWARE'],'Google App Engine') !== false) {  	
  	define('DB_HOST', ':/cloudsql/studious-depth-159303:asia-east1:wpdb');
	define('DB_USER', 'root');
  	define('DB_PASSWORD', 'password');
}else{
  	define('DB_HOST', 'localhost');
  	define('DB_USER', 'root');
  	define('DB_PASSWORD', 'password');
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lfgP=j,|h9&!<`lLV:w[p,k-c+K9[^US_H3V?Y7T;(RCsOp0>qnC)X[tZ3!NQR_:');
define('SECURE_AUTH_KEY',  'sl;EIkEzh7jgMBx-lt-+C/xS`naG?.Q1x/6i.|v{04WDM(t5D*os1f62(l^PKlg`');
define('LOGGED_IN_KEY',    'amkot5s--bf`Fk-_h|ArP{y 67vwAcl|s3t?n.-xf~:*-O!,AM#OamH;r,NO?D74');
define('NONCE_KEY',        '>U=%xrHZ#46NK__X >b[[aw194NvpXHgR9B=u:RyKt`q}0*s1d~4).VuJ}FwQ=[}');
define('AUTH_SALT',        'JRH-OoHjKex{=w(pxEfmRfx:IkR.t`0OG:`Ua5P^YFf{=eH[u89)X`1A~]%v64q#');
define('SECURE_AUTH_SALT', 't7eYHefJOyu{WMQqQ/bjqv$x[|:*p.hGMZ8RP&watD=V_2?AQ`0vO)J.>zl#q%yy');
define('LOGGED_IN_SALT',   ',CpGcuH!eJ%]/mG&g]_i@+O$L67C3J3Al@`_fc2N31q)4#Lm*3Q }$Fozho~8dW+');
define('NONCE_SALT',       'SG4ex?%!C{@-d*!$n>G4^hUspnq(hW^DmTmA_<_@n?.hxJqO3Z_X`jg_,PUg^bV4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
