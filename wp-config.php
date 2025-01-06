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
define( 'DB_NAME', 'mydatabase' );

/** Database username */
define( 'DB_USER', 'John' );

/** Database password */
define( 'DB_PASSWORD', 'Banan' );

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
define( 'AUTH_KEY',         'nylr~D0w)fxt_Ol~]00Vz^t5`gCZLpm(@@ a2kMK,K}*6I t|YyL@BhiTDob7kEz' );
define( 'SECURE_AUTH_KEY',  'u6AI~5|bm:)5RL6.-1<#$h>e7-R2vh`:{z]#g[PBSV0@]4o5L;IKdk~Qv3[QX4i%' );
define( 'LOGGED_IN_KEY',    'JNk9lx8b%0yho]Rq,7HA*q0;83~H#y}d)+(]?[M*b%.jU=L1{~Pq0d{sc_#l.Ne[' );
define( 'NONCE_KEY',        'r1Kfjq@wmB;cs23*90E>dyW2,Oj9z)82qCLU=>aWOLBuUeE6)wU1g3IwopL*+v_R' );
define( 'AUTH_SALT',        '3928v>3:o98Ko}:6vUW.7ij7&SIwD8~QM9N[^bvyeIQY6q:fiy<AM,).~,IV5,0~' );
define( 'SECURE_AUTH_SALT', 'VG9&%V3]:!6Qd~Yp=IoXP$NaV0+(L HK=4Q6%Rtf/G=lv%Tmxb`Ygu-f%xlDnU3K' );
define( 'LOGGED_IN_SALT',   '%`[IL+K!xP9ulEF*YTVx;s$8IDu#.31%}QwG8?W]W~Sn9p-]VJ+|(eN )TM7+T@K' );
define( 'NONCE_SALT',       'k[3%H1Bt~(Dyu3Qt(yjPI{)GNm#B-IB#$KRdzNR( *!VXxy3F!rS~;hFI2^cHpGq' );

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


