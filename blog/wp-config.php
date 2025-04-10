<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u559798794_GNEg6' );

/** Database username */
define( 'DB_USER', 'u559798794_tVv3G' );

/** Database password */
define( 'DB_PASSWORD', 'lsvrFB5AcV' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'p|5QeWX^z_0(nX!SbE}Jn+_<(a!W>kQ0|K5poA>%ww@.ps|n729[<$h~ :QXy3;S' );
define( 'SECURE_AUTH_KEY',   'AJbB#ZF]@-o9bReIrTYs/u~oV@zPdt-[j3i5@<Ei|9W>;rv2Zg:V$_41aVz+!aI}' );
define( 'LOGGED_IN_KEY',     'QPBglDbEJDGM((QbUJx$5J> i.=Io82P{-ya8.epX-mSv{YVX]s<m:}%o#WSR.Ci' );
define( 'NONCE_KEY',         'q/dHE96^VR#_HpfjhYR^<!5P__UbTO*4TrmX7N{.ixin`%18pPiXI^VWKD,S%?cP' );
define( 'AUTH_SALT',         '}DV&^VU]mOfN<c]k>x/SiYKv9Wp}JJWsg_9}2hJMmT<1IQ2*z2>P&P#]_tDF>l?L' );
define( 'SECURE_AUTH_SALT',  'N0<};pk_RpfSG=+GU$3=8W=G,.!oVs[rlBeNuqNrWKX>|@ 1Mq[nut{n1ppV/BvZ' );
define( 'LOGGED_IN_SALT',    'Z(KVJ[pLKbQda+MxJ2b#n}M3G-S9{cyGN*`RBf&gzLjfKCh{6P}< Nii`!FTG1mO' );
define( 'NONCE_SALT',        'AdtAC#b))G<vK-J)v)<O1oN89ZGe[`cti4HUf-_*U%5TXz1OfoGF|13^lDQ(>.~f' );
define( 'WP_CACHE_KEY_SALT', '%FDKMjz.5qRg[w;+XI@Qdn?3%}dkDEywLi!v;0y3u2 B+}fPCA9TZ0,.~h|3cpm ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '3221f99c3877d7fabec6c0cb43362a67' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
