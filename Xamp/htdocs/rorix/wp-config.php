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
define( 'DB_NAME', 'rorixdb' );

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
define( 'AUTH_KEY',         '`+<,Mtp/.Q~0,=]RWEVU-<z7U:iLhc/bUp[[:rY&#*;c2fWu6X8x%* p-7tQo[<V' );
define( 'SECURE_AUTH_KEY',  'xT85FL{z&YaLKGOL/=H1,/YZ%=a`Y:7_>IL>=0)[DAO+s?!><i3I|cB++|TEx?>I' );
define( 'LOGGED_IN_KEY',    '(Uj44J-xBm{&,fLX3%7w*@aJA[WY6`-9c8O.jfz&ZzZvg:3[v$ ObW~TS,/M3$RH' );
define( 'NONCE_KEY',        '-7iN.Ax/=aIKk*qWenA}28`?N-uUWJG+Hz0bC/GNYJtghWyt8M$^P~)0byJ,aW)B' );
define( 'AUTH_SALT',        'F@b@mULQeS^r6`c(.Iu$/{nXuxK[(RRS_%q6Thb{[)pY>*vh?H[PhkQ#(u1~-exD' );
define( 'SECURE_AUTH_SALT', 'oQ+,/WyWOr IwHJm*lV.CFgB7xK|?{avz]pP!xGD0?+b][3dX7`VtNG#&: *d]8#' );
define( 'LOGGED_IN_SALT',   '^gU>g;MY)H=dEkAXpU:V3K=%G<2EXKV5mdgD0)rZ+i#<H5pl)5du8Q6s7W]LmDaJ' );
define( 'NONCE_SALT',       'r4tWk}oP`>W32671^ |y>uRBl^;%wnm-eX}bb9cqb7qSFv<NQ,KA`+PS=*/K>GU@' );

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
