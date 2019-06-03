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
define( 'DB_NAME', 'bxl' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         'w4p!gv6DC850np/%-qBUWz@Ck~IsBHg o8GC*6HtW:klA:2GK.m+|b#_M|4S01> ' );
define( 'SECURE_AUTH_KEY',  'H &_5u WCyu1CB7Ad#X>h*U&<YPWfs&Qd:W41fZiN{f%@67PIcolKwx@MID-W.6!' );
define( 'LOGGED_IN_KEY',    'd1z+3e{+x&3En<aRnk*&c6|kz_PX)1b/3E%~4vy6+VXoW??D*U>F[X/ce.L/5/u+' );
define( 'NONCE_KEY',        'oJ`BA$u9}F5uLuK@*R_x%WgakJm?&f%ORv~I%!Dq_loQ#-gX@#gZ&$_SpSTN1_FN' );
define( 'AUTH_SALT',        '/}7iYB(,mveF3oOy?9/%bf#CZ!.|3*3u$gl*%kUo!OW#!QCTYDL4dXjUVs(m[]22' );
define( 'SECURE_AUTH_SALT', 'N{A3|WtqFu&p*.F$2bZ6/w9 <q|/kYj1tyj]> I%]0*_p<Rd7=}|2j&(df&j,y_9' );
define( 'LOGGED_IN_SALT',   't}dtL|vbS9g{?*lUuKjpd$:uY{)S+bFm|8PF_zZ{74SZZ7Z,}bBF~V:iU&ySOkC[' );
define( 'NONCE_SALT',       'Pkon<_>#YsKu s79`|`UPuQ,~DZnE1-9[P8nmO9G+q`_7h`)aBkkd;*f_S?I[Sox' );

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
