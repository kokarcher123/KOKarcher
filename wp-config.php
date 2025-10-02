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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'S-X=fg,hi _v%6QF1k)Q<6,3t:QI`k7u6*Qy7J&+|}TvZgNZ[Cc2bs</TcE#QRu6' );
define( 'SECURE_AUTH_KEY',  'ESY/ohL)&CGB3Na8yf{rRcSDz=s6x#fe6j1C 48WkW&e1$odj,1+#v^%7.O}$lO&' );
define( 'LOGGED_IN_KEY',    'zYMCed0W*@f;|kPYoyH[DqhT=7dvjgxc]tcX3bxvC>vYOMK}G(>j9<7Qz(5WybnI' );
define( 'NONCE_KEY',        ' >4d7?^@<!)w3 Czm/S,KSCxY._LJ>6xSzYUkDCdap[f/Q[Jfp|_.{$vP#-w:/V9' );
define( 'AUTH_SALT',        '3]~>xk9F&zSa/M{8&qi^^?ca9[{wz#tn1qR!gt*CK<,GFOBG{9KHFx&A*?9r#V6C' );
define( 'SECURE_AUTH_SALT', 'e9blcEB=IV$)gSPL:v$?;J_9ltCxj$0QT5a`E=+J8J+bjalhe|I0r(XW(}!b se7' );
define( 'LOGGED_IN_SALT',   ')$=b &H.razW&L(ygCcxdkw2tQdLlcMRHn]i6]p^80OA,yCO)x~%X.]83Sy3Z:E&' );
define( 'NONCE_SALT',       'uu`&xDg_F,iJ{SFi]|H:bvi xAj<9:9sIc/V@$/7?mjQPp&BKPWEv&6k.`hpS[Zu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
@ini_set( 'upload_max_filesize' , '512M' );
@ini_set( 'post_max_size', '512M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );