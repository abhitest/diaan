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
define( 'DB_NAME', 'diaan' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Sun@123456' );

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
define( 'AUTH_KEY',         'Dzy1Q1&^gl)jyk-frDYE$GMX=ZqH!];$?sYAa=jc]_L68Mnzd:&EKn72!R)xoIF3' );
define( 'SECURE_AUTH_KEY',  'B?ML,_`,$6lv>zb1%hggEKb!&,{H*?2)k>xG=yy^MnAv2@D%Z.xZ?dSJ^m@wL.P_' );
define( 'LOGGED_IN_KEY',    'S/a*%W-4^-Zv8>fy~=/<P6}Hw8<w5nu1-@9o Ns0MbDY)sXTBQ=!]w3a:#!o_(5%' );
define( 'NONCE_KEY',        '{]:/bAyK:8Jh73pUzg,|S.>S 0e%r[h8sH27/EF {PKdX,Z?dpzHzG*<HE N67[C' );
define( 'AUTH_SALT',        'v-,Ah5UP)aE,p)&*&fpXOIUhDN0=r|txShWDi7{~<r]g7*]9aXEE;)7ZvZT:vBO6' );
define( 'SECURE_AUTH_SALT', 'Vag7Jgdv{bC-Wm(}9YJyfJueTR>N[rOe];hH5jg0j-lFbb[|F%A4ko8)fd8hR/.&' );
define( 'LOGGED_IN_SALT',   '~ 3jmjc>RNY*7HtSUIZ1;Tg?T6EH&_>aG|^ldhYW#t`o}D2_xZV^HJDb=SB6p:%I' );
define( 'NONCE_SALT',       'Ul5u/% @7oY&}G%6OI6?FbN4@nDSvInV_.<o>C+kjBeaZc~eHQXUUk6Js_NYHLy;' );

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
