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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'SZ,$T%1t[,aG#0WUi&}PB*z(4h95+Bm O*TtDuAX`GL9{H3&&E=7rB,mHb~$F^M.' );
define( 'SECURE_AUTH_KEY',   'rx?KN$*=z#rZ]iCFhQ@.!6UbjeVE&p_z.>?/T&56rI($0PGpw&_  }^@qND2Ny!3' );
define( 'LOGGED_IN_KEY',     ' Z-c1b*:2F8CGWn[_ZyUrzNG^LbjT5KQ.glwO{lLmDwR6dF9v~WwDBNEgMhBe/RF' );
define( 'NONCE_KEY',         'gjB(vv{TRT]]+llC?l,:kE2I1({$*XpB!cH.,RiYpGui1x1YTYthcm7;6>UX_6vz' );
define( 'AUTH_SALT',         'V4vq;UlA^|Ep3xf8</(mIH ;a(H?i7_?6I(abJA?aaaK@^I:R7ACWHUPHTuy_($=' );
define( 'SECURE_AUTH_SALT',  'XyXQ?I2<#Ua_]ANQg7*f&Q0&Ef*^;1^>>AVS!Ni#t}O{-~w8,<-J>S!b8eQ,HDD2' );
define( 'LOGGED_IN_SALT',    '=T[i&gP-nRR8~:<s_v~ }uzjpR{s9G#*4IYm`R0)T{N@]cAs&W*<7$:effIS${a*' );
define( 'NONCE_SALT',        'cVylPSxN:wfwcXlOwli>Jjle}K0.;uMbWwKjjJo}2Pa<2[1mkMC?TgdXMZ{b_Zbq' );
define( 'WP_CACHE_KEY_SALT', '4%p#[}wi[-1Hri*iPeU(8bFf`,ulqzVA{]A@(`BZ8o~d6B/F;i-jrIg]Gk_Sn7a$' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
