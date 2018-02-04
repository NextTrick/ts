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
define('DB_NAME', 'ts_db');

/** MySQL database username */
define('DB_USER', 'projectuser');

/** MySQL database password */
define('DB_PASSWORD', 'projectpass');

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
define('AUTH_KEY',         'p/&AMzbgQ<9p.IRrQj_2zN +T0?YYxoI0;w(gGOl.b+n(V}dF^>!1EJ%tpl*t-XZ');
define('SECURE_AUTH_KEY',  ' KN{b(x~hS*7A[l.XHAg8X`Q^_Uw,z!cp=KSdGF!aA/N`t9L]j&K%m{6^Z|h96!+');
define('LOGGED_IN_KEY',    '3:%SzX(7}-sx-11Z!mnmI`G9nN(&A*<%GMT=w-.{3[/Xu>c2H/!D`gq6!l7AU,+A');
define('NONCE_KEY',        'Ky9{us8g0XWa6b3/-4FQ^DK7nYTi)BC|p5w4R58g[4iKl!q%4>}O8X(>J2:}LeFa');
define('AUTH_SALT',        'i!i1qMRU(v4=%C?c8<>r0}Bc92+i6dL-n {aTz,T/_wLXntv?pcsC(P9Oq3>YHf[');
define('SECURE_AUTH_SALT', 'Xv+&0c`X~VG3F?kPuJ,%{]vy@WZmDBxV(5aA0,[0hSq&)x|<[ sNC[yMsGfAY7Hm');
define('LOGGED_IN_SALT',   'C;:j;1X@Alh%Bg%gu4_#a<Kw>?ziyg?{J;zKHt2#aiItOa-]EL>UlYKHh^Y2o;$!');
define('NONCE_SALT',       'b|~Gc3|p}v7KjR|=_ JxZ}wA2g0,|;G.2N5DT!jiW@5qnLX7$B}%-e7wTBkmb81;');

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
define('JETPACK_DEV_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
