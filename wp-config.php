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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'skyhighprojects' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')nh*99H19}k$:r$&`H{(!G5$ku*^m/pW*<~2>xNCslM&l2ko0bSv}}L:nz=%;qt!' );
define( 'SECURE_AUTH_KEY',  'hz3p]bK&iT&n=yX}n@DBqmJa*m2j/;P8IGXz8?7g WkN=x&*]>==*o++++2;Uc&1' );
define( 'LOGGED_IN_KEY',    'nj6F3Rt.+|&.bvt%A:B=|RVjLSa=!3|)kEQ=_ K15j:(QR)uuU|%$nL=o;Un8M!&' );
define( 'NONCE_KEY',        'YcAIm%Jyq;s=.w F5>6ew`SFG!hYp;)zCM/X0*B:qPQM*Ilx8u [OSFMB^3v),U3' );
define( 'AUTH_SALT',        'fZ*47<{3EAd_N^K*!ZBt>Gfr^amMfdc=c;WKpWo-%cw!45m)_{8y0<W]+K*uUqv:' );
define( 'SECURE_AUTH_SALT', 'yFo:b{A%N}<YoH9ueNpa+akk+7G#ndMkH d&S6(HY8wE[)2{F=v{b7e<XVxo8xsj' );
define( 'LOGGED_IN_SALT',   'faz-{TQ;oW.ODc2SzzJK:F:mm:3NZIA`l}GLGeI5cVJITYEMX[q;$2w^/gA7g(zs' );
define( 'NONCE_SALT',       '*W#~P)!#_j`LMdD#dk:iGc6,mbd|f:yn={CP4c:D[/{m379K?SSVgKJ<9y<`ppL8' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
