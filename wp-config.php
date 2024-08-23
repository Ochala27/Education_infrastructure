<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'education_infrastructure' );

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
define( 'AUTH_KEY',         'Olaj%OoupJzLGPZCGoFyEYHOOi,gty9U#vTtc<wZD,-[eMQba~Cs@9+<=kN]%fxj' );
define( 'SECURE_AUTH_KEY',  '_IJum46({~xNiA$BW`YrlBb!*cX>(mYhGv9y},7fH?z=&S88*hUNq,>SU7.{=GaH' );
define( 'LOGGED_IN_KEY',    '`P4P.9`ghs=`8s/W=+$E Y+ i&f%R}!o+k9S^L`CK?tSU3),5(ir(n+ }XG!`2;0' );
define( 'NONCE_KEY',        'j{OG$e<$SBK?q,0?%/DsUtDQXu=/yCY 3wl9;R0~eV]~lS-+a(K3#EdU?:Gx1Q`v' );
define( 'AUTH_SALT',        'HjNRs86WVL}9WhXPn8j5w$yuz2wL7~_q+AHgaJ|PBZ:.6.6_tAgsVj?NLs9:Iv+w' );
define( 'SECURE_AUTH_SALT', '(=kD]UOXT!cz*(-fEE#OLtrlr^!@]07F8+{/}HJ5]_:zTLD+s$mY@>WkI$%l({N!' );
define( 'LOGGED_IN_SALT',   'b>6/WB.;cp8m0G&z*.vW#?lR=>uNMN/Z+=>VX0;z_vgFJi]dOeQ1%Q`-Kd6S%JmM' );
define( 'NONCE_SALT',       'ol|*.SK<hG=xM6~HkA+8DBw*n}3P1{`BwFqu|%#Y%9lyTVrt<@UM1g!U3t*LVTIA' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
