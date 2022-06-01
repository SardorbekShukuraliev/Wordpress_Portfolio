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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio-kids' );

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
define( 'AUTH_KEY',         'K8m!:%K=A#^h8<ard0`?+bcVC+e_d0IU}l0vF9n`v,^2ZP~Du[n`?G|!s)UZ}f3:' );
define( 'SECURE_AUTH_KEY',  '][O}EesSrr9Buh:lb;Z0|DOT1GF^8|PzT}k[>B;3ExI*Cf0b-)(/Ep8F4l.n9awq' );
define( 'LOGGED_IN_KEY',    't*/]f[yF7*lCz|:|PB]L+1^1v@Pl$+e/A`JV!{`, oaAkx|}z3Ndas7sB#a{lftz' );
define( 'NONCE_KEY',        '[*1HWI1Y7qykOqRM^96z_Llx#k$-y{@i+m/0_aI<;/w8z^`s*yd:PNM+g6y/)$cm' );
define( 'AUTH_SALT',        '2aH2|A9&4.+u#L 7D;N8H`Vd~_JGtrB|zH+{6Jy)5J3;x%QqIsiy2m)>m|0YBa8V' );
define( 'SECURE_AUTH_SALT', '_b]C@[^T.Xf#.Ye4K#g&L.B#4p;1cXwIjRCA^07b^BBLE&,.5{|4llybQ`V+]zPe' );
define( 'LOGGED_IN_SALT',   'S,Nf-I3*e3HnA7D}`l+lPl(&sb#RD,JG7B.-:2qu,V@ Fo.:3QfWa@(}0o)|12A/' );
define( 'NONCE_SALT',       'w7kaHOTM,A+ i%s,2_xs>DgsBBff&AOh<CE3x$YY<I0,0*b y}hHYagIfKGPV`U4' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
