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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Sekolah' );

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
define( 'AUTH_KEY',         'Md{l|R)GK)--MzSq.!|7V+pW.QqJm?Y=7[WpOz-?R92uxKsXK(Lq;_sRW<?bPEDu' );
define( 'SECURE_AUTH_KEY',  '>_g7|6Lrd*jy{NFR[[&<e=)b_8?Iq4eVF:Yr{T&4i~ sVo .z)f.ysE=EIU0Eg*!' );
define( 'LOGGED_IN_KEY',    'Pmsrb%{Ds3NzAo99eh?Y)Hvm7wQyN_A hNd.vF<<O~1RAr;m5S$#g7>Z[qO$,e[m' );
define( 'NONCE_KEY',        'BXYsJ}D*$[tvD}keJAV[M/z.+|4#Jx,XO`HQ(N~,`5m?[![{zG;T )E(UHOQy!S9' );
define( 'AUTH_SALT',        '1^ct>EM&@G|<6~0f$=_H;gV}h[=g!+eZekY5?hd3p!ZCVmMG8OY.40-#2}(KVHg^' );
define( 'SECURE_AUTH_SALT', 'YE{NYNbLut*0@,/&I)>w^9x:h[.,Uw.P@&)n|sLNDt/{t}F+<8|U_A.n-%DKC8JM' );
define( 'LOGGED_IN_SALT',   ':>09mGN}Iz82rfYvI#3J@J7>8~iKW4]V!>j7SAICvD92IUKaiSEwQIO5l:b!+QLe' );
define( 'NONCE_SALT',       '7G*}rWKxosi68K71ZmWDO{U_2__r)Rc[IIw&R;7iiT3K{5L?:i*WP*@vyF_ld6[I' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
