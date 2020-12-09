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
define( 'DB_NAME', 'www_jiaxinbingg' );

/** MySQL database username */
define( 'DB_USER', 'www_jiaxinbingg' );

/** MySQL database password */
define( 'DB_PASSWORD', 'twmytjPwsh' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**language **/
define('WPLANG', 'zh_CN');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mwr^)jP1eQRN0;NC<TO9qBbWK(woSEMm3H|b^+qZZ!s1Y7,D~fS(:j{x&t7~M&60' );
define( 'SECURE_AUTH_KEY',  'xDP.UXM.D>ay}4|AC,1y8ge[j{?@S`pn,}g6els2[T4h9A@maLx_*2W(ZQ<;+6dL' );
define( 'LOGGED_IN_KEY',    'K56M~}98Lu?6t*MKW~WCsoD06t$%wo-.gy%Y r~!>I{&YkKu[X} Y ^QP]]Ys-?s' );
define( 'NONCE_KEY',        'ZtW)~cqF1+Fb0<NnHolwj!!!{n_{i[i,VG#HEg$$Qa8m7Lw&x)BI2Q)u&e;wma<{' );
define( 'AUTH_SALT',        ':C|p`E]=5e0$iH-mtr1;,/*}E]=Y8vCHELi{V-ka=Sf<,|-Q^{+2=?I@ca28Iy4>' );
define( 'SECURE_AUTH_SALT', 'My3%nahi?-AX!8t+YI{^3bz6`{pxe3(?C$v(]Gb>-|)y:x5_qAc<jX7V=qJq~WAb' );
define( 'LOGGED_IN_SALT',   '8W/jiM&>La,wlffQ[kAbr{X/%TXU),rUvca)t^@_ba@t`K$4j!Z~0.SGHKifRF{j' );
define( 'NONCE_SALT',       'FbWo7XjVjyhu(Xijf<vi>X32a!JMpjP(8$Q5z[]SO)O3[yuo86D%RopNSrr<XA_4' );

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
