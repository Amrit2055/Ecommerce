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
define( 'DB_NAME', 'wpd' );

/** MySQL database username */
define( 'DB_USER', 'mrtbhusal' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bhusal555' );

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
define( 'AUTH_KEY',         'Mee#zse.ZHQA=xiD_AZ&?}fJ-rd3n=gB>{S8mIMulIb:zuWPw4c!U&0~!P)zNj??' );
define( 'SECURE_AUTH_KEY',  'vNg_F +9)q$6_ qp^<YYVP-8ttyfGNN>C@PX{Y*43OF{^G]u+uaPP&UT7q=c{r2u' );
define( 'LOGGED_IN_KEY',    'm.7(kP#s?}J43@<22O,V:GjBj[+Y0}o%4W,)O|hv^gwKg88dbe&Z_!`b~uj*X~t(' );
define( 'NONCE_KEY',        ',{|Ku,,E?Mj);Pgnct+6=r1 +jnNNa~9$6|{>KB}hNDLIHq|{mB]?13iLzSmyr:8' );
define( 'AUTH_SALT',        '9^Ef^So4x*&0e;R2(Y;Wf4cue~[j$3s)!YGW_<`wZoTE&xm3,FRRnd>e~:=${S7_' );
define( 'SECURE_AUTH_SALT', '6(&QL1+IT(F0n@faCW)G9%^fE&snFXk+{t0NB!-OnIiL#U,Z6Zl>I}rrHxt0;!Fu' );
define( 'LOGGED_IN_SALT',   '|?(ZZN6QDG!Q{mjD5BbM3~<8{s%Jhyyk/Xr5Swc(xRr#H#@&c!^HEXPx$ Pb#Jx7' );
define( 'NONCE_SALT',       'Ll0c`Q~L=Qgy5`mbHLVQKMhkUSh?q G}NR9s~Bj6:zs8xJ11.,l$yV[JNPfmH9WM' );

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
