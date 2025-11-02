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
define( 'DB_NAME', 'nomerika' );

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
define( 'AUTH_KEY',         '_TnvwY e4J2~mv!s`v>g|<nV`N_>L~~Zmg_Zhi#}|+=`E]:@Mt<j80%nMTr(I.v;' );
define( 'SECURE_AUTH_KEY',  'WKbGXuRa4HQ3.v(9]=&*ur%nvw]&5Y5oRzlxC<>nYoqfIS5VSVq>?x`9.&rtbakQ' );
define( 'LOGGED_IN_KEY',    '{he?|8|Tq+fUUUGDH+|FMr.27da1B%9|yV6S)q( ww$YZjK61^tv6eGVwFNCxa2Q' );
define( 'NONCE_KEY',        '<%7m2&TS0VkVY$[sn$qtyM>oID{bGIsww4WWj5_7Wdx3FLr`:@%xdJs4)*bPabBs' );
define( 'AUTH_SALT',        '4)yhE+-r9:]eS$#C59MCul8Ld@|cl LD{K%%0pX <f}4K3}$Y%/EQ.f}3nS|@tj|' );
define( 'SECURE_AUTH_SALT', 'rTr5[%DbsScMp.rcmNo0^/!(wke4a=)lxgU|Venmp siz3Y8*AFXFz+.xLG/.sB3' );
define( 'LOGGED_IN_SALT',   '{a9WRmd|NJ4Lc]_h@Y)wiT.&L;}XPVd6+D[Azl*/acf:E7/0[PcTuV0ri]W#qA^Q' );
define( 'NONCE_SALT',       '.?J%Y@l&VXkV#(9Z]5f7M=Ks{ME?Gj`c+_E3qKL/>Rtubv4Q&5)-;r3nY=%2`OA>' );

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
