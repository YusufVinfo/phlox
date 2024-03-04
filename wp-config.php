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
define( 'DB_NAME', 'phlox_commerce' );

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
define( 'AUTH_KEY',         '$?*,fiz35ApI*xjI/(]gEf*I[d{*5R9Wv/psET|6Oe-2L[<8frPtKP@ky ,N=~1[' );
define( 'SECURE_AUTH_KEY',  're=h|CEeLzRn;gvaMuIx/TS$QF#1DNWY(]!mYBC],b~EX<(/;ty7<:IQX,+Q-!in' );
define( 'LOGGED_IN_KEY',    'vw?qi!/TO+AaW3Pf2K  e,MD>6G~[f}p!Nq/:|Ap?=78.#8~fZ:/h-F+@wP9*3%p' );
define( 'NONCE_KEY',        'glmVXU|GPQ)Mnu{_;kO)L,KN=$.}`g]<qe4fu|~oxSvIAmLy#_YlZ}5nCFW]-$4+' );
define( 'AUTH_SALT',        '=YCu}%)5+.I6F6k7z(. l*uO{AK*{aKT8Gi?9LyOMWd<#?1,x%4Qx,qoZg[Xv=/!' );
define( 'SECURE_AUTH_SALT', ':]{xbLgK-U_F(Y!?SxEv<jsJoD85noRB5Cedx&8e`}[-l%F*3;N)mgQ@Av3FX=ca' );
define( 'LOGGED_IN_SALT',   'PwTNZ*$hIyp+ioD=f5Kb H!EVaWAFg*+i[BY?QLStK!#If:10)bsBbr,2e%wK7h)' );
define( 'NONCE_SALT',       '=j @M68#wH;,mOgrFOvF6 HVDHUdE<kJ5B[/)Wju7f6:/KU/ Jf)0c6-VtqEOW.0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'phlx_';

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
