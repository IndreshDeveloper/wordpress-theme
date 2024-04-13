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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'real-home' );

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
define( 'AUTH_KEY',         'r4/5im!v];.;N7C!Y!3RJ-^tV1I`Im7MH)X|6WJ>./>6iC~YqC1;O.hEtiKFfmtS' );
define( 'SECURE_AUTH_KEY',  '?<2/(bN|d:hzPmAI=vD9W(5)N|w&>>I`/8FpiW;gS&l~77*FlYs,TkT@)b[$7*?+' );
define( 'LOGGED_IN_KEY',    '_>RR$AOK_tbK? 7xs<KY*Nb(ipxyqxq[u$!j.hhBfe?4 h9f;d1#QVW6zq| J`nu' );
define( 'NONCE_KEY',        '3Uqn_c+rthT3r67`eTQ<8 W.U!f7P7u9V3#bL4<D-8JB9H(5{%$&g@JHi5A7< *p' );
define( 'AUTH_SALT',        'Bv6D$ahU_Lm3R2;&tSy>eRf[e6*^DPBfLRV`_aIIVHv2*bCNyimDj}t%Wv-[%)b{' );
define( 'SECURE_AUTH_SALT', 'iP`>m)>5??5BDj`:v|MPSNQD#*2z4F1cP{f^GHa]d9m*Ducny$~ya4Fn!lQSGAX%' );
define( 'LOGGED_IN_SALT',   'rs0K#2% brEZ,[{xw&>IJ5RnO ^Odl9/ZJMZ2^p sR@~0s[r6Wt.k|fV:bJL]Wn*' );
define( 'NONCE_SALT',       '0Z<7O_<a;|~Y bndZ4.4)c/?jGp5DNzCqco$<[9Z$]$iRb4v_lIfm&6}<liBJfP^' );

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
