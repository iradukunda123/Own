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
define( 'DB_NAME', 'idukadb' );

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
define( 'AUTH_KEY',         'pZU*c>AHi@/Yk.kCrYaQa9,Hd-f70A%]a7Lq-Qoa2AwP}*Xb06Hi  qjmWS+/1R?' );
define( 'SECURE_AUTH_KEY',  '.:)*6Mx0~Ow4B|/An*54l6~^Nct)co.<2wP{b.0f.@cQk-?QFQ-84)`pBFp_+Pga' );
define( 'LOGGED_IN_KEY',    '{:Ys3p-; /B SuJSR:H0RVk/TPRmlJO*zUK?<%n$;)w(3w&:)Iqq$^^<o^|jbgn0' );
define( 'NONCE_KEY',        '9kCWfR}c5+_NgLl{NH_KrhIq@h=&q2mN`ZV:m5QW1z=1]oYI|^4#4kEU;}[ Pj=,' );
define( 'AUTH_SALT',        'CN~>Vld:n|R^5EkV`%wZ+a]w(`X&Ts~3vZFus<C_dLBp$uc7h$.m(/9*XI#pO)e,' );
define( 'SECURE_AUTH_SALT', '[o<hjpwR0,?)`x6WfEriTS.WYs.8cKB2ILlsXyEq_KbbRho_zJ>`I;Gc=ag-+q&F' );
define( 'LOGGED_IN_SALT',   'pBm*5*lLe,]LG6R{iS^!n9UhU0Y0/pa]yZZ8$C(VW$.E!@5Y5+nz23BVn|J.jUYX' );
define( 'NONCE_SALT',       '+>OpI?k`LFiRkrm<e.JD9= clR&BV[Kyn/,ereW&C2;_q#fT43HGGGA;SCxVIv$r' );

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
