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
define( 'DB_NAME', 'shoppingzone' );

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
define( 'AUTH_KEY',         '<W)-?.d+A  Pqo}cxc a.F;U YVhvRJg&EPxu QSc|,p9_-8!Z[rJQ15Dg @;Go_' );
define( 'SECURE_AUTH_KEY',  '?E!ZVR0{vXiIK0dKg5i7UuzC+34B^62/}nYjymC|4R~@Hp],4 iONE>OAW#^E823' );
define( 'LOGGED_IN_KEY',    'e}j~PIL_.`+}YmW`^>7I!v:bkx;?wjUk*:[XK&9fZQ_>Vh~sqzy3OJkg[iBJp8uq' );
define( 'NONCE_KEY',        'MIRvE$)ePb 1_oMW-k0hJWgzFb6C7CFl;05oW` hKo@pFVsBCI:)P7DU/Xb%3TWC' );
define( 'AUTH_SALT',        '5eUx;$k]sUl$%QJ`;y]DtPG[gSqHC=ISK|tT_ .q6K c` {90=!(+25?:h(Q#*(f' );
define( 'SECURE_AUTH_SALT', 'KYO,4%|MQ4/1wIv-P?([Z!=Bs6_um hp[*{:TIdawM;Rz)}Y~z5vPa.UYW/s&K= ' );
define( 'LOGGED_IN_SALT',   ':E#j S8)[j)&utG!qusD)U~Ibt0~wEka*6> >XL. G=d/EfL1 7!{[YKc4bQntoh' );
define( 'NONCE_SALT',       'E7v-=WG;?PDhgRfK}J?1FKb^?luuS28kdhw^z!zULyKi:xt~p63og,,#HjVFni9<' );

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
