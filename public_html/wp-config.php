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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'FBC]YC T!nG(4[5,&zV}!RPq )gQG`!azj];!kyoKeV^x@idr@Uqbz~,*N=VhWZ>');
define('SECURE_AUTH_KEY',  'K&~abJ[u@s#a^QbV&8aPB%emQaUzm],cq?h@x[*,/<e EOZ&%w6L` Ba`B?^MZjl');
define('LOGGED_IN_KEY',    '`*&|Gi??`[d|>P8O7pjmr?vzB!GmAnNU7e2Yc}}}2~91b0.S1;#e4amWbg@T>kwY');
define('NONCE_KEY',        '2bj/flj5Qn1XJ:y+@.q9_zc+6Uow~#MivA`u&>P>6X-Fg9b%x8L_ObTZi`T}J#Pv');
define('AUTH_SALT',        'Xe|xmM|mXE1fK@#|.-v,5>0i>sL 1,#nGl0$B#z{x?Gqu<(2dV?H`tS&^4hx]F}0');
define('SECURE_AUTH_SALT', 'lj`v7IFsKE!D@kOm}_Z96YH~eV/BR(.(MM$<3Bk}WS{Vzn3C,8`ion?>ny^?1LAM');
define('LOGGED_IN_SALT',   'A}^70 4Fbgyfin]!a5uiQq&?`w?9-PYheE]a_@%_!_/.]SIIk7o?{,sKr.>+L!/b');
define('NONCE_SALT',       '>r/(#Vm/?KHb2&4T}% GCiH Mm<R/Ye-U?`uN*zmj<99Wah]F*gJo[K{h.{DeME%');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
