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
define( 'DB_NAME', 'staysafe_bd' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '<w<?zjw$9Js<P5:)0%//J}>kF>0VQ9j.l*1^wn9kIawLKKaV:IwJ#Psb0vVgD)G?' );
define( 'SECURE_AUTH_KEY',  '$VR>xpoWI#H,H#5W[EK0h+HC6cD7/|u}OBxu~J`YHWcXV|)Xn4=fASemjl6_)I[f' );
define( 'LOGGED_IN_KEY',    '_6TNzqJ-p>Sdt-]?+8<[vM#?_}y)pnk`c9FaR+W=C<gLYvSTkgTG49XZ _xj`.QQ' );
define( 'NONCE_KEY',        'u0Ggx%m*/?8DWq*d=vLLsggMt!lZ=$B*Q;L5>7yf0w=x#)T4 gjU#Y1+.]8GYYX`' );
define( 'AUTH_SALT',        'z5EV?B``<CbZnZHFtVMp`XWl`0l1B<ndl1(K=UA[YX52s;X-s>ok )+3J+mxZw[5' );
define( 'SECURE_AUTH_SALT', 'r/Wx.%mEciaz4yIb5u}%*{W,18k5.qW-:.&(Q(x=iK8MqHBCMF!]x~AJN5f^QxX7' );
define( 'LOGGED_IN_SALT',   'MMIbA=e}1u:z!RmnYU$vTVDeYFG+*.o?Xk#CVI_FXKTJKwgM1&[n`km[T$:9>}qq' );
define( 'NONCE_SALT',       'gebw9h--IOJT&vC<Ypd/aG~dl=b>3{nS@Uox}eQ2W&x0l7zaj8Gc})whJHQ7 i^f' );

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
