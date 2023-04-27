<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'digitalart' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+q=$pYVu+OW@Z3G?xXsZq)JNv5ANl9604CZ{N>b4H^z(1#x0cwmOs)EQvgM<J~?K' );
define( 'SECURE_AUTH_KEY',  '$Qrg^yyF$AWBLt>CeFDxmSE0HYk<6>L/p}DKAh}V.CB*d6>muVx=v1ehW8qqhIvg' );
define( 'LOGGED_IN_KEY',    'Vs(#V2@IN_R?P&^f<f0gFzFAhl:%cH<Bi1c*1o>vMOJBq@u>OlO8O&[d6N5Fs_XR' );
define( 'NONCE_KEY',        '{3[K-G84H[/1*I2T)W?=SQ9STf8}&0z#eU#yAx}]LTy()oK30/w?EzGV`sSVXCL-' );
define( 'AUTH_SALT',        '=,U_rb-N+kz%*eRM[3GpBhTHl<lE[r4k!Q,D>bp_,#w9~8_gnv:=0Bo_8}e2D?gy' );
define( 'SECURE_AUTH_SALT', 'L7wp@24.0HE~D?N2lHl-nsca{@LqPgc#_<BuRrGYf{ :us|to?!e,]7/W6ao6AS<' );
define( 'LOGGED_IN_SALT',   '-R3XtPI+YUBENXy$!#02j.Ay;P<Q4ey K#GP25?v1GE@Du02u#jG^4x5zVEQYtum' );
define( 'NONCE_SALT',       '+^TyX?RTiTO>SPF8pXJaU_g=I4qhACD@?dp+dd;FnJ}/0d?dbjv[}kc?&*}p|1N#' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
