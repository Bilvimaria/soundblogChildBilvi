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
define('DB_NAME', 'soundblogchildBilvi');

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
define('AUTH_KEY',         'm]v!]rfx0_rc~q[>W*o1)nFj&,<]S.N@TF~HgXQZ4kK(I/Sj(hbuD:w?_=>Jj6`I');
define('SECURE_AUTH_KEY',  '}IZcavD5V<G-3X=XCp6kuO<_& $2TB`bX,& ;)mfD;*cPaM8Y0[zWk911^2a~f]s');
define('LOGGED_IN_KEY',    'n)WmO!(S!9o0AJVSr0y-M}lj>0M/wCRN}=N4UAE]0q2:uWet?h=FYyv`s8[J+S,o');
define('NONCE_KEY',        'aZs^CCXK1x|-*i4v)HQYgY[lBb?S6GYK$36RBm~k<[FRyR,MLY$d&Q~_udDnv2wF');
define('AUTH_SALT',        'k594YQQGYBN<Gnt<@U{QbqxR7TVoE!A(M2.K|$*{+nbqd)>-p~@8E7.]}|1G0oix');
define('SECURE_AUTH_SALT', 'g~3%=gi-,7Eo/r|@`Uu$?-SJ(Xf{qK*Vk^k!}RLM-LtL%FxO`v01^N{:moO4C/y#');
define('LOGGED_IN_SALT',   '?DmrC*JJNzPGS0%<PkFD84vmY&v_[: ]X<Pp+|u<J;NmOvwKpAA`1(gS&Jup[INJ');
define('NONCE_SALT',       '1501OEMVo;>r>.)bu]bivyKp=G +6}J7E@I0~5XsnaA7a[tnEP[{[T2/OMr/7s.h');

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
