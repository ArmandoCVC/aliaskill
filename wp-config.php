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
define( 'DB_NAME', 'aliaskill' );

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
define( 'AUTH_KEY',         'iynXgcBLE8uz)IGrW-k5|G18y;To|HsQzhFZ4#=?:S1:;t{Q>d)$[a )JaEXzx1%' );
define( 'SECURE_AUTH_KEY',  'JJw ~~39bl A7hpxs#|#a`S53D)b*`XU`i YpBOT#@Me/d/U -NoBE7wA3f0vOX6' );
define( 'LOGGED_IN_KEY',    'k_@f3!0op3Pz_UmVU_!$=B, ]bK7G^tYy1OdM({Z#rU@W7JcOqw]cUfqz6OI;`T[' );
define( 'NONCE_KEY',        ';X]?yAY-mOl_wg]>$Z1w.t#HArS#bb!)+Cm]n@tRH/7&3V&|R}6uAKftPhWgA<9O' );
define( 'AUTH_SALT',        '!i%O7lb8H6vPxQ{F,;-Y9+}C[u|&7FCz{OW=pn729Bz;>z4v/=c<<W% 04yR5Y2<' );
define( 'SECURE_AUTH_SALT', '!vp,U#cxB4e,vTS~SAf+;Oar+Kk8I_DGHH+T9p!orDjKBm9TGnj2jMrnZFiGlsKg' );
define( 'LOGGED_IN_SALT',   ',z8HfAV06;<[bV@2$+!k*]pEKD{s}OZ4vPPtS(f<P[+i1l,rV]zEk,y UQkO3T|F' );
define( 'NONCE_SALT',       '9-_l>ix;BR=^22:Bgv7xU*!Ww22eEDm12RI:]8!yPt%{XaH&a=&v<?9z9&euJm* ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ws_';

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
