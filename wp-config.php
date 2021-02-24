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
define( 'DB_NAME', 'noithat' );

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
define( 'AUTH_KEY',         '?l5am/z3@> :r1&)2p@ZeXg]b9XZb>Fb7MDvcX3m6H*,~(^6uE6DE2?k6w[i=9P}' );
define( 'SECURE_AUTH_KEY',  '~$:&uC40;;54!&Ap:81fK|dXly`Z0WwNy:BM+iQEH8rFhFi)?X9jm70%nGQdGXP-' );
define( 'LOGGED_IN_KEY',    '!z;S)!2BKz<0;L7)OuM+&a/dclY:N,aoQ@!dmBqO+)W7n^b5nl`^jE|o929fk+WN' );
define( 'NONCE_KEY',        '|^j7h|`CvyAM30~:+X.hyjoB3v7s8j-exE%V]R#>8RuZ{Y{d9mF4i[4M+nX1h,rE' );
define( 'AUTH_SALT',        'vx$j5%OsE1GT %qoqe:v0vsNKh*Z+!Dp`)Lg{>0 {Aq-F~k&*r]f;h9]_}f&j;{C' );
define( 'SECURE_AUTH_SALT', '=a+l$]bZZ#b+am3DHoEpId@j(4|?WvCki`[SyAWpx-UOeV_Z7tUh9!jJ_-(BK.D6' );
define( 'LOGGED_IN_SALT',   ';~X`3?/:G;yN&E*;N:F_V{~fZ(){1y`gZ?=09J 4L}.?.e~2nSlZT!XstLBv/Qbg' );
define( 'NONCE_SALT',       'gSGBARn/25}JY!T-PD;DI#zr&`z2!N]KdjKwa}LG!JqACCL]M}~2)),D2{;dpKQ*' );

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
