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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'itranszEsolutions' );

/** Database username */
define( 'DB_USER', 'itranszEsolutions' );

/** Database password */
define( 'DB_PASSWORD', 'itransz1@ml' );

/** Database hostname */
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
define( 'AUTH_KEY',         'wi*gWF3uJXR~NDVRT9ng:b4Fxvr>4|9/m(5eqi5qM8L.x^d_0]7}9;@5Hr6 @|7u' );
define( 'SECURE_AUTH_KEY',  'TFd?Lu<c;Vy(Z{q+Be#R5osImzK[qM<XB`C4T@Xm[GpMl9l,Pi?`-),f^Tv}.Dej' );
define( 'LOGGED_IN_KEY',    'PYb-70Sh@G_S]o)-f||-9Eu}g.C.3(wk{e&kgMwHUd33jM3<{h_@o*D?|NEUA;>)' );
define( 'NONCE_KEY',        'p6.s;!ctxtukN!X&qE6-F_<^]SW?p&Kd*><$i~DSG1[c=]Kw]ke|z.rGT >L*JW|' );
define( 'AUTH_SALT',        'QmeI[*;8],E,hx#1dH#IUrq+/aANXYsp3ga4<5R[shdQ%MHclr^yGGr6JH+yPe$n' );
define( 'SECURE_AUTH_SALT', 'Hb5{Cr+B19K)V2If}f[S1f%t:C,D`&yBo97S$U0`>e;_sW{*|*WH{z[NiyK|FC45' );
define( 'LOGGED_IN_SALT',   'y9 z>eFXbR=uH?DzRCfXRHpT6`PUZfW81.ot4k!?d1%ok=`a=p `AV3C-}#m{UK+' );
define( 'NONCE_SALT',       'gc>Q(at6IKqO7o/;ne&~lgLH{]!V`a(9tJ9&s^/u7NC}KB>c&#D#@@}SXh~2]n^U' );

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
