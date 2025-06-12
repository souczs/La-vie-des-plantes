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
define( 'DB_NAME', 'laviedesplantes' );

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
define( 'AUTH_KEY',         'TI;2X4ALG99l6~%CAb.NWX{qgl_irN}zXWwO1t5J5Ls{wK21I{z?FfIbcQ8D}L;>' );
define( 'SECURE_AUTH_KEY',  '.3y9TG+q- Zi[0~~C/x;o=9%UG Rq5<zg{ectLkxO6Q7!TLq5jb2n->_JvE=N.sy' );
define( 'LOGGED_IN_KEY',    '7a^(Ny4A>_m)_7_guK9AbgsU}A<HfW#q;FsOc,ZYzggw0q*fo$?!fA+J)r7^utT)' );
define( 'NONCE_KEY',        'n!xpUrW 51u%nCxl2$,2}CzVkwZY<smWu*b<@k,MltwP!]!6oF`B>d%~*@CQj${-' );
define( 'AUTH_SALT',        'lr?ZLsZD`0|evU_*q;:ZbcVF*`K2)phq4)-$weACNzu^Kh^A^@|_QB#}6U<pv-AK' );
define( 'SECURE_AUTH_SALT', '6P%XRL:0IHLkSz<?v2tI%`N$.lX/N{PujX(#_Zr8oS/^Y`I}$ZzX sHm!y|g80^u' );
define( 'LOGGED_IN_SALT',   ' Hq4qe HWp~(?tKS6qX1vPWMrn{C:tQP~3IzB>hcX%nm`;no3HKm}OB$4=px;a>P' );
define( 'NONCE_SALT',       '#%V3+a|y=li [4GcK?PLND5e|Lv`#``lU-_=16lMg2qSojDt;fRdXUC~y]WKN$s-' );

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
