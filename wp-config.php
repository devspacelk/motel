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
define( 'DB_NAME', 'motel' );

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
define( 'AUTH_KEY',         '>1&N~e[FHj?-v=VIZkiE~n(>)zAVn(=zs:MxO=duoi.K?_i2}A[=}^w2kfXzSmK7' );
define( 'SECURE_AUTH_KEY',  'y<M>N+1;C%|Cj9q*no+fWml[LOPu`)y{>U+68W=b6#7<B|8vinwnWdlcq8CL|*B|' );
define( 'LOGGED_IN_KEY',    'W]`x6gPA L%g7o,XC&F<Kfns7GD*Dy350kr:0^Z,m@znOk>I&@v!ziS6uIfRTYRk' );
define( 'NONCE_KEY',        ' |L{rA`tmAy-_$o[,qNmka*LO#{-~00cyZl1fa?trCQOF$N?]8NWYjNZ2.@A{qyG' );
define( 'AUTH_SALT',        '8GQBD75Vfb<I!F=(=[9@4[0I1Dnu}!{$ PQT5}Pltjytg=I]:`;oh!8{RdP$SA=S' );
define( 'SECURE_AUTH_SALT', 'x5Rpx$o6<`RnUboW/cm+;<8LB|~{!u[mZ=7[B:4>S{}x{to::Y}O[~$1}Km[!aAd' );
define( 'LOGGED_IN_SALT',   '1pO@VTQwDr8(+$~#!=Jo1)SW68e}nsxz3( ,8(Se9mJ23-==Y1cxJgdds01CVbMK' );
define( 'NONCE_SALT',       '4)FJcnVSFtAFTM1xe3BWq|M5c[pfVICmf8W>9)/O<gbCNomHuO:891E[bA+b!8h`' );

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
