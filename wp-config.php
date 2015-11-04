<?php
define( 'JETPACK_DEV_DEBUG', true);

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
define('DB_NAME', 'mct');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '!m;Prls2Ek%h&V#mWjue&Ru|rBa<3/.-MuD#-|! #Iq<n8)hU}=L`|EUH52p6u)j');
define('SECURE_AUTH_KEY',  '-aT[8Q~Ru3+`HTH:O#@FIn|&IwTOKv6+!]exGVHRG***{f@vMniU@.F_iK|Y1f;#');
define('LOGGED_IN_KEY',    'NY~HR^WdR3%6Pjs8K8u5YE1}a70lM?f<K-9}_+jN&1GHja>X!NFKE==Aa7$}x,BW');
define('NONCE_KEY',        'ofY!olYZy39b(OvrA+6,D!|-m=}/:SDZV;~m9cC^;E29 /w(3[n[x6:Q~}0L`UU?');
define('AUTH_SALT',        '6}U@^8,rgMTp{vE<^??B+IpJ|W7v9$PhaA$t>m+;uy;r0&VkCBk8p{;Mlba>mE5&');
define('SECURE_AUTH_SALT', 'E<$#&sPOo[q/-!{b`HQI-j3-!Lf5U]tS8YZ,ENNu[a}~Umn:hy0tDt4L-EZM?,I1');
define('LOGGED_IN_SALT',   'r,mGjT]XD~|f8IqMu=+J+.v1(KSvCGS8Jr-V7;cXk7Ay2@%9Fx&-2e<L+x]xYEb|');
define('NONCE_SALT',       '%~2HS<%JB<sb08nS6R._|yy88@r~KVU_`{5a9y*,e,.QIh5{dFW=;_!HyC%8u{>/');

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

// define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
