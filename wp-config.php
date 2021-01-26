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
define( 'DB_NAME', 'localan' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'x9C(#T5)|-gGGhZ@+#%#V7)Uy<J*SU#nvp,?Q1)o_Q.]NiP3iTs!0.3bdIch.lEG' );
define( 'SECURE_AUTH_KEY',  '% >*=R9oCJ=F0O^Y>`O3Z=`(lM/s{hf2?`n%E%GtG*s4)Gn&eTraa^1tEryDv/My' );
define( 'LOGGED_IN_KEY',    'U9Edj;R<;.|3!)^WQ2yE?HBRES?2: ?Nn!#E0zBaQ8JRRW P_qITlrr*6&v|N5?I' );
define( 'NONCE_KEY',        '<*)yNu69_rE3u?=Nqi?$}B!Vp>NBZ*lV&dB Mg@Opm<z:yco?m{3HbJsR5^m,Xp-' );
define( 'AUTH_SALT',        '+ZwscGLSuDHQ!~2MzB702C$vPOiW$vrT_4!^2/cxsy>uvT<0Sw1sNyh;<BA4Se#d' );
define( 'SECURE_AUTH_SALT', '~tvjbLx|&d0e[ptuX.eYptB`46WHl!lJF,cLwir+rDP`HD=S/{GRya4Cr]M;g_r}' );
define( 'LOGGED_IN_SALT',   ')z*lWF-3)$:x*|~njrEI5~mH5O`8a1wB{C*1JlH12#=aH:8GX#uu-3@MR-id(5|j' );
define( 'NONCE_SALT',       'rcORI9.%Q4z<yKDPX4-[LlANn3v0bCCf9;,Wq0U-Sb1?Yw$0(+(LjB!SdO s0w*<' );

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
