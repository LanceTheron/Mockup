<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'f58oj_wn6hv' );

/** Database username */
define( 'DB_USER', '2nuvt_7trd9' );

/** Database password */
define( 'DB_PASSWORD', 'm249h56PG0652U' );

/** Database hostname */
define( 'DB_HOST', 'sql56.jnb1.host-h.net' );

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
define( 'AUTH_KEY',         '^qt#hE|^F$*P_={,Rd8>A>A`9F*=o/Kik^6JQx|ygbN<D3,cz1h,r:?py3Byy,[V' );
define( 'SECURE_AUTH_KEY',  'q%C`CRC+4ogwgI}EHR6E/p6Wnt(,c7VQPik?OPX]Q>N($tVOs3=SCU32UtC%l*s-' );
define( 'LOGGED_IN_KEY',    'r&b0*D$DOr.:J>KGV6OE-kAtid)u8^1#h=7<=,L-%M<{#XLf/3 &ZCr-u2ofZ(&_' );
define( 'NONCE_KEY',        'q)+M|VhAXL%K)pW47Fqgv[kvjd1R9m7a{}F.~eZf[Hw:L%9$ gM~foQ>otw!.-#7' );
define( 'AUTH_SALT',        'XVX@_Bi#mMc)HjT/>J6?CkDcn9JraQF}K`--J1!i&qfrl(=t)J+DHmd-?(RI]ui`' );
define( 'SECURE_AUTH_SALT', '1f_DWTV8;2*5#{|}L$VK_$]:a}WK)ws#wCd?pt&PLy9~kwL4lF-s.Y2s=<5sT-{Q' );
define( 'LOGGED_IN_SALT',   ';pGY1fNu|066.L9$^#wbmRz)^eLKjKpI*`?i(&;!9: }{4VdU4-cx%(PS-fXFefI' );
define( 'NONCE_SALT',       '%U7LaMR>AX:/9,Nmb*&0SLoc rs--1~XiKm^<0]C(2S5{[eLrlb}n45kREO@-Vt*' );

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

@ini_set('upload_max_size' , '256M' );