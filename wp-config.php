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
define( 'DB_NAME', 'b2becom' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'brY-XUis2&*^>9|Yz@$+^fZpQ&;QE6U6ude+3LuqSbfspaTY]t?Y.#G9MPsG]ok0' );
define( 'SECURE_AUTH_KEY',  '?&RaUaOLx`?%J!n4D1_z~6lsM8{ 7VW)g.o{f6-ityAW]uU!ByruV#ju+iOitw=%' );
define( 'LOGGED_IN_KEY',    '!Uj/@U)A9+;TV_k@8N.h>Ta)4HB`y%yG8p!6vNg86?O14.csg`}89/+*iM{BW:q0' );
define( 'NONCE_KEY',        '0plmhocz.pNA@|#:X%EZ`/0=Nmph#IA)1Fj#8&vEC<3xf5z,M(hpO;3qu>Uy_$r/' );
define( 'AUTH_SALT',        '+OKByc/?Iu#}&6i`#*R%UXg@c^a/z@&40~_.BdSiyA_uUd8)600?9.6,/UR,@|>&' );
define( 'SECURE_AUTH_SALT', 'hRa3`ELWHOfM+U`kc_!jT~t;C+BfHC5K{/:r8QnC=h}`5NZ7|~vrR+K1n{TiyBbL' );
define( 'LOGGED_IN_SALT',   'I+0rv<XTe[F[H(2y]NnRX|kp@EG!/N5eb0#0}Lw-xOE c=Wy6`mVfro;aaYaf:mg' );
define( 'NONCE_SALT',       '[B^Scohm`PI|gag[T7k0m,UT{K5x.U3b2[Hwm (N@,v:O{Eec:&}ACQ2}kHD.l]-' );

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
