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
define( 'DB_NAME', 'wordpress_prif_7' );

/** Database username */
define( 'DB_USER', 'raafat_98' );

/** Database password */
define( 'DB_PASSWORD', '201710555Roula' );

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
define( 'AUTH_KEY',         '#[JC3s0LDo-(PkB0`>8YOwyqcESdx,ut(HUQ{z2|rbp^,%T^yt^rg=!mS~xoLw#U' );
define( 'SECURE_AUTH_KEY',  'G<$jIE.Hu`=_hJ}nBXQ;?0:s4<6Re,C=TC{_O2JuDFFA9qN$3yM#N;/y+3:679hZ' );
define( 'LOGGED_IN_KEY',    'DD:q<+!A#Z}C81fJoZGI*TyWz%F9/`Q*T1WP>:mk!5d=JfM&[4Mynj0#f~0S8y]%' );
define( 'NONCE_KEY',        'f%s#v0*yprzK},&54P+4r}=S[&hIsQM7^>[/Dh%cggR`.{W9.Rv{OO2+?J],AZe.' );
define( 'AUTH_SALT',        'wL Ebxl]/DY^QW^hI%@,zvJ^X)!>wW8^rt%7;.6p#Z1TdC>cZbHM]>Lt,@d7[>+D' );
define( 'SECURE_AUTH_SALT', '0U?(7zrJZaVBDz7;jCfe/:%91JAfzCiV%X1ZUk-&O$M*;xuK[U=p23fc;,t6Ufs=' );
define( 'LOGGED_IN_SALT',   'pgiF= 4)*fbv&l7$[gO`Q5nhyw7}ady7KR7oA@ZR.[,.6a7W-QY sxsyI|=3HEYS' );
define( 'NONCE_SALT',       '&CX7xKo_gs6f0O5Ve48qU<{K/BW;FloSBf2v^<i%FC1C}$&A<A8Rz. FXV[K;Hhi' );

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
