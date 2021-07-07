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
define( 'DB_NAME', 'kadosh' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress2021' );

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
define( 'AUTH_KEY',         'FLHmNx;?xUIJsOpOO@knLQ>/4`/c.WJV[4CD@b->!?Rk@C|4wgyGb)4kSs|d6v)S' );
define( 'SECURE_AUTH_KEY',  ' V_Y6:.%VhIPxn$a`!}.M$g0*G3?Q:G};t]E)8B&pfI#)mSn#%t%RW}QFbP1lD^l' );
define( 'LOGGED_IN_KEY',    'hIqvn-O,q}tF_:X.];vwz=Y!|vzm:P?Q#B2X6c%t[?](fU6H`.gETV n4yX&@? D' );
define( 'NONCE_KEY',        '?$S!z/~V.}]W#G+BYF45mQn:Bl6[?F@)s-WX(,ycV=csr%jXz?f)Ct8F[%,Ii;OX' );
define( 'AUTH_SALT',        'M^Jt8caPs4l6o$J5YsKgD{:C@kT/MT _h05B&LcW0Nw``o`ts:CRNNgCz0LT-rBE' );
define( 'SECURE_AUTH_SALT', 'uF9REm537Y%,(-8eItkNU9!z 0}/Z8X64fjHx TEidOk;<$EL]0G[v+9$hIeuiC#' );
define( 'LOGGED_IN_SALT',   'xR+[$EK7;M }fQlWHj=sFOC:9]lNVc2h^}Dl]bZ=P2SP[7~p-_I9)? AdPQ84}xL' );
define( 'NONCE_SALT',       'G)M7(|4S}w`<k8.gJGY}{e>{H?<`ZoVhD)sp]q|w%l)(c/VqJHLY!_#g-Ptm&EV`' );

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
