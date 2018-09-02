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
define('DB_NAME', 'vacuro.v1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ';Fz9P_=Eu6X`Zwt%!zVNT/])8)0f##3CanzVX6*Hzo#l%?6T`1PcAm*mD#B#62ar');
define('SECURE_AUTH_KEY',  '{CEnWfMS0|hY7n86`hZS-%qM!NdAvzLKZ4k~+JbPy-_V7;wLKbZ0,MUXD91P<#iS');
define('LOGGED_IN_KEY',    '/FdQCKwG[D26`a,&g0**Y~mNU10I,I=D&&nzxSaO&DpK+3p`VUQx^J$<8rCIJHNR');
define('NONCE_KEY',        'g^ zfm`j3va{H7V]|W69Mb{,h{+aikrla2,u(GK71,~*m.1D6f)1L<>K4NxX.dX4');
define('AUTH_SALT',        'T>yv.{Ze(S> {jj7m%t${Uw1QzX,cmHZ0L>Rq9JJ/=!5Oc9#5./kINP@r,8l9A]1');
define('SECURE_AUTH_SALT', '_XQ](ho-j9T[I~G[rzfTa(c=3|L-_ng:E&2%]B%QV=oooeAF}UN|e$z;FGS;~C/_');
define('LOGGED_IN_SALT',   'gaA~^VoHs%_bbFxX[=}jk41RxMEdRnxd/EmU-t1%%_$Y}+e79}$|K#[q?yL]k4wx');
define('NONCE_SALT',       'eyepSI +t[*gYKY*@n/ICwTOFFl|1^N(4Me^$K-@i?5[DA&()/DHi[5k[Wdzt(>1');

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
