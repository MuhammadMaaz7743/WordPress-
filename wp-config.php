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
define( 'DB_NAME', 'estore1' );

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
define( 'AUTH_KEY',         '9b%9po#/G<u25o+2]-m1q4sPZ,cISO_nd`5fs7$WAnqydA[9P*nicpBL0dCn<c&-' );
define( 'SECURE_AUTH_KEY',  '([JSo}GBsYjR l,oKUiQW-w-ta+=,]E8JLKL6L|x9$Xlzyes%^aO^znXp#IS !PO' );
define( 'LOGGED_IN_KEY',    '11ikf)8|kmJqBE<R(.+QM)V4EQ#tGlq-( g[][gTSgv^BD$3`xHx)>9N%@uu4-mk' );
define( 'NONCE_KEY',        'sxJ::CcfwpTHW%W3UFgrl%OVkCGY9fDvWRLUZ/E}e$}jDz9{uiS.Ji361DhJUe$T' );
define( 'AUTH_SALT',        'Sxp^$@r9oS<WcFe5#!p`WK/MFyytr3LJHiGT[u@kK}bxI9fMeBRE<;/h0.Wgp)o{' );
define( 'SECURE_AUTH_SALT', '`&tfQlX#Ey_+S9x@P,A|0N)p7M7QArTk@1U)`Sjb@^ygRm{8dZO^3BVGJ`Qnek  ' );
define( 'LOGGED_IN_SALT',   'vhEVKlT~VHs8kxP<aKnl.Q #~9fCV AeGxGeUhyuJ5;1DTrUb$w683=.g&t9[V;%' );
define( 'NONCE_SALT',       'Vs%}[SMsb{JW,=ipOK$BfM40FV* 8N<Bsk|Xw}~L02Kn}hwhy:~NC:#ZP@;PZt;B' );

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
