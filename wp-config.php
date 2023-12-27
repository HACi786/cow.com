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
define( 'DB_NAME', 'cow.com_db' );

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
define( 'AUTH_KEY',         'Uip-r/0QrFb9e]4]-[l7rB<5Ke[kz-3&?GmT}{Egzr?.|{}2@xo-Pc!;Q.r]dl44' );
define( 'SECURE_AUTH_KEY',  '#}D59!Y$n>*$TL*j!<0@2;@=N4a|;-G;6n-?Vl~: kmN:p59jF0D$WOb?yhk%SwW' );
define( 'LOGGED_IN_KEY',    'xrqS@-GBl<vm!df/L`A~.4;nVm#`E^$-(EIzzQnl,,<*e$%RNT%J^-ND~<s$nB[8' );
define( 'NONCE_KEY',        '.JAz)6r{qq,B/L2nDy(/.*AwOX^k~]d0+G1LB8;]K>!bU<+TA75j|<f@{C;4!6J=' );
define( 'AUTH_SALT',        '}rT-(LR.uy2bssF$P@kbgS?y`Ejt4?-=[3%l],le+<q`Do!]fU;*%5=N+3mLk,%h' );
define( 'SECURE_AUTH_SALT', 'zi{,vn|I<b(l_t #X?]Bv|SK0&Hgg~~2OAWIVwP^X=~Z]nF8,zppm,|hOJ2!t&!y' );
define( 'LOGGED_IN_SALT',   'G;??[~>F&itM7rKOnLCB7s9xb9O$1z:Cr+)x*jg+b(l}~3Jgbcm9`d>=_:_OFxI_' );
define( 'NONCE_SALT',       '>F(j:cB/[(PU:6Y.nG2=,c,$= VF,EQ,-w,FvlyR%]2+|C@B+W+ko8:4nF<f-Qm=' );

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
