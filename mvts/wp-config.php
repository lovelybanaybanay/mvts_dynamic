<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mvts' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '==AoE0%pxT#hG#_;0MfT4AF`]_#HaYP/CdD1x<`I`e5]ZBgu^@Y BUu;vxGsLi_U' );
define( 'SECURE_AUTH_KEY',  '~.E)TbY&/W9q{*el0]w2.X.,r>lK@QRCd&Ao`5!#NzNS3rNOtni4s^F7~8yy:SnT' );
define( 'LOGGED_IN_KEY',    '6DclW/_EJTNKqu1|vZD w!?P-$w{[yUg!Nv?OXbP&,vcVbhn6C]:;Kl~0;yF-~4I' );
define( 'NONCE_KEY',        'scwiIEQ-mDb&3:6N}%?$!?&VS@WE@x6n.v@4+m[^1F[iFv|>_b+2dF? ]jNQC=k7' );
define( 'AUTH_SALT',        '@3T>pvDL[Ojb/8<4@)_*;)CXomFJQRtx2<4tukgd?08]38OHg|PWeVM%3I(2U8t ' );
define( 'SECURE_AUTH_SALT', 'j2UuA[h|n~EgV)DkICb9icn5Ga)Q8Vs&5H!sm2q*p.oaEA0ammG@6lp[tI+w7ay^' );
define( 'LOGGED_IN_SALT',   'Mp&WQpgfkWAu*Mt(XPu*7*:_3l-%Q^DUqe Zg5eeZ|6cX%K_/llo3n1d[/BWA]Kp' );
define( 'NONCE_SALT',       '7=6LJtGIbo^(FoGf.FhdX-]oAB-M|_yg,2Q(}Quu[[A;H+(omkw6MS<WeVEPZH(a' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
