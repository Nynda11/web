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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web' );

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
define( 'AUTH_KEY',         'r&GMZG)i>B.ejGwYG(jF~XJ+7v`;<e)}!;?>BubrgDWRKN4}9Yp]m+DSTt^N[m$&' );
define( 'SECURE_AUTH_KEY',  'yNo!tVsoEQZv<*7<mw?ga:osiTy(o,Hv~.<iQYDPlQ2wHYHO;.z$-vc^f,XtSpcF' );
define( 'LOGGED_IN_KEY',    '=cDDkEx=]PAn|-o-u9qtg<o%RJ-06i&Gs0kSKNI_k4g*QY;j_D{oNQ8S)8sRo$ia' );
define( 'NONCE_KEY',        '>Qo49E;@KL&kO$&S{6606yU7%I#=%jqX29cdy#/5,wv1qqwyzruK;H4LNZQ}a&s4' );
define( 'AUTH_SALT',        '6G0C=2&9[^[A8md6Q$jn=]>0z-H?^VBc_wPc_]]+PfuWDJ{8GQtz#=k9]b,t[^?H' );
define( 'SECURE_AUTH_SALT', '-?l3x8v.5.1qy,AHVKpm9zejv`p:I<ayb,NmTl!>e9EtdXx4S3pu>zJpFV+T,DE5' );
define( 'LOGGED_IN_SALT',   'T8]XkZg+n/D*)Ta$/jFlx,prh{L#vbk u^Fj8JheROVy85z5?8!:d]/Tdq8=,9o(' );
define( 'NONCE_SALT',       'c/kfgB C_(pf4Qn~;V6)b({DS?rZ0EOSPC9C>XZ1JkmmKS!~`?j$+2{RUIAWIywQ' );

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
