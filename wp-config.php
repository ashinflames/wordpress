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
define('DB_NAME', 'brainspark2');

/** MySQL database username */
define('DB_USER', 'brainspark2');

/** MySQL database password */
define('DB_PASSWORD', 'brainspark');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication U nique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'S1W68G*P~;~-rSls=6aR,$%+z-TqC&,sl<5.:A;4c>;)9)e-T*$FN ~1J>(6G+qB');
define('SECURE_AUTH_KEY',  'ToOac3?vN3ZMT{;Rh,kBp}2|]>4-!-2kd#S22L$[DUbgtD|Q,33k.(j58`tB+tE4');
define('LOGGED_IN_KEY',    '+&s FJ{}};+6w3eOpu<%Vr+L@H>}47{2CE)_V9`OS/}w-q@N,g#vBjQOkY?|L)Bu');
define('NONCE_KEY',        'c8q-gYK!&a!|qjONYHvV+KY_(<rcUCCp$I)8N!-5@i|uiU3AG=f3A<Sy8;W|C7G2');
define('AUTH_SALT',        'v.]tjH.^d~5oA_RJab1Feb-7dH!I|Aedzr+-#~Iovw64x{5:[y;Kv--lPC(J55-V');
define('SECURE_AUTH_SALT', 'JVAB=q~M;f@Cx66e* :/OgJbRQ4|!xtQ-~ql49g_K>!DTllz[Y5JO9pa(6C4MWy0');
define('LOGGED_IN_SALT',   'bJM-CwdK0ZF#9sBFWTa0}SrIwiJl+>:]kl Z?NB]?A>H^V,%Q?aoy[n^^IDe<ZOG');
define('NONCE_SALT',       'MP,ah!eKo_ >r9Ft7axUm+3Gqs3#p8%#K1C)Bt^hCJD5/h?fq-& IU9s=Ql(ezmT');

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
