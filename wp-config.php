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
define( 'DB_NAME', 'himanshu_portfolio' );

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
define( 'AUTH_KEY',         'O2^.KO[mDuRM^E,})7<Ed,VFGbq(cZe^*$:P4@E7x;I@A--lC(fwtxht%qI?ak4R' );
define( 'SECURE_AUTH_KEY',  'OgRFnY8imns8eNCKi#T1wByfw,5f|abY$=azD9Eu*,>*$]?GnBe7mom|;&@mcZ-!' );
define( 'LOGGED_IN_KEY',    '-X@m/`&@HEOd>+E, c;?sVG%lRnVNN_.}PM@xVo4/JRz&0?2w)7W$3&w,=6:,7KR' );
define( 'NONCE_KEY',        'G/T7{>8D:NT(yg&M)LQ[#E9#Yt?*@OzWbl4YW5u[DmknTI]V,OAemuT&?C9-n1K<' );
define( 'AUTH_SALT',        '*sUvl+,K!|M]/F9S>,Kpm4#{;[#os]fPg+ydIP2Pyi-z2Wj;Jvpi3DC@1,{-kM@d' );
define( 'SECURE_AUTH_SALT', 'e]|qOxpur1(bIjzLy rMW3~xljLxb8v!_Q2)i3mtqG?rJ,uc*I*z)!Vc]egZ8m5K' );
define( 'LOGGED_IN_SALT',   ')/Ucui~sPXhpX%b0F_eE&[2[@c+6J=jJtbr]2D_[3w*z<>KszNFiVbev6>UDnO}P' );
define( 'NONCE_SALT',       '_kjoKA1tGuKq9KKi3+m)Z)w{Pd:Ghhsfb(J.#>fE:==8~aBaCd$<Z,4j#0c?,7-]' );

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
$table_prefix = 'wp_portfolio';

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
