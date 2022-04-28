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
define( 'DB_NAME', 'digi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'K/BrfpQ_AmkDpc+?J#1F-?Ge|Ybh=M=n2YF2n--WbFnLw%Vck{*:BkX+f9_m+b9O' );
define( 'SECURE_AUTH_KEY',  '!Q=FYKXjHP3^SoZe&X1xB8]Pv*JR$h*,Ta*UcK3w{p45:i^z/aoeG5Q)~L7(VQK+' );
define( 'LOGGED_IN_KEY',    'CMw2:d;Y_vO9z`}t,^h|W_n9k5%*E@#l>Y* K-,cBt<N7-%a_[k<<cp=8><PZ==j' );
define( 'NONCE_KEY',        'ix,UF)HxX2)>,~8!-X;fpEuOp=}1p1F/q=aUDTAh!.{hNy6:2c14;e$(uh<;F3`@' );
define( 'AUTH_SALT',        'C=/Y6{&pDE~N&NwO1=l]f,a:c)9N:07&l*n:ZExh)qp-oGd@@Pj>.QS.=b36?TDT' );
define( 'SECURE_AUTH_SALT', 'o}-p:)suYjD9p3p|C%wN_EJMb4Q&ILtV8/~!C8./76#cBU<m{ym*bX=Qj==#ghhs' );
define( 'LOGGED_IN_SALT',   'AVdN/$k tB~!a5M%$&n1DFy^=fb (CO)*WTw.b^-b.,`rqUP~BTX8K}&SD&N|bHG' );
define( 'NONCE_SALT',       'wGz-`y*-lfzp/2.v/Ate.l5QHYT>l3lMxAn$wF9l`BR5d=kN *#cOGE$pomie[$v' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
