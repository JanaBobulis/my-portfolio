<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jana-portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'X(^BMVPzeJOq[NtqsT2UEf4-c~!Qz;~b&beW<%Ku}0W&--i[-/Y)&:JLh8oB(h,t' );
define( 'SECURE_AUTH_KEY',  '3myH.}J6]h>o) p]R=-&!*~{+I VAtlz ddW$[zv?ulq^V_,XL6xCaEzki0{u7LI' );
define( 'LOGGED_IN_KEY',    '#u.b$aS4Ygxl@k$0X3<j+ss<pV|0G3]MA4mo$AWTE(|`.)9Nx^j7wVc{2,B9:HqF' );
define( 'NONCE_KEY',        '|V2tsAB)u5ESwD.fo,?CN?Lj`_Dhte0Q&(sP!Qd7w{zXGR3$xq{J^P&#nmRKjtNs' );
define( 'AUTH_SALT',        '[uMatX*pG60ZTcqB iy2yv&N%c.ziosnsSFkaGM`=oUg/TV{iQG0FcOfFt&vzM7H' );
define( 'SECURE_AUTH_SALT', 'E5`Pf@gn}5 dqsQcm}=DF2lGz!~SB#2 q<`T,MU|ch<X+{rQr(Wev:r(3R%;2KD:' );
define( 'LOGGED_IN_SALT',   '0KHg,ceon%!M/_@{WRw)]JnqjElOhQ>kXRYpFO)kt%b76~Svu@SP=H/0iRRbc|TI' );
define( 'NONCE_SALT',       '<]9R`S-e]:>AHrP~gT?S-{aurlkvNp*7267EOflj+_E&Tp_`AN50 8hE%)!CDY)(' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
