<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'blog_website' );

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
define( 'AUTH_KEY',         'n5m$c0zS7zXHyqD8R5AL4m)lgu?p~VcfMI9ttGPp_IKSFyNj/bxe?8N4jN)|QejQ' );
define( 'SECURE_AUTH_KEY',  'a0btMJn`f^~7Z7Bb!cw9X?@S 2TV0pFn}lhj;N1p]1P=CUV&_}[P,6ndr9M/Y-Vn' );
define( 'LOGGED_IN_KEY',    'L3>m^=&kyRuloySftb>|pG@u;CBRlb^p<Vqn3:v2WsG]@>-HkU9uT7H^P+dlFf|O' );
define( 'NONCE_KEY',        ';ilpL.HjAgMKg+Ii&<S^>`7/iT|;;C*<H8R#{3Htqjwpdoyt/2UCw&K8=t>|F,qM' );
define( 'AUTH_SALT',        'cD3087k~u@*fA<OV+^B7WO=]3/)r*,bx*+X,&-V(18FMdjbPYcLm+ngS5uNnV$3[' );
define( 'SECURE_AUTH_SALT', '7SiSr=H#,538EV7+7OQBgV-d_BCxv`/<Cz>-nq]X}Mx>HtW<7_nDoXH},o=h[wY6' );
define( 'LOGGED_IN_SALT',   'm;Ulhfml&C8T<zwy{MY9$]^WQcz^ohv;UoN/v%#ze:Ovbm_Zh(&m7d6@3ddpQ)OY' );
define( 'NONCE_SALT',       'g6uoUlv/exBLpf[1&bb(tA5 C($&=$rV[JsWk-2nki(t,z<-cdN7zT U=S.1xD/[' );

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
$table_prefix = 'blog_';

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
