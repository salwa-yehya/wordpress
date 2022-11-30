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
define( 'DB_NAME', 'reflection' );

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
define( 'AUTH_KEY',         'fz+4v/2.ue&X[lta#`lMb?,~&!_Ruq2df&o@TkT2Z*r$N T359cPbvw~48Y`=pe<' );
define( 'SECURE_AUTH_KEY',  '!P-yIRu%6Ica7O^>rSgajmrl4/Qe.`8p+D~m>9e:zi9!|pL=KytgpH8?OxE`SsL`' );
define( 'LOGGED_IN_KEY',    '>9A?3[-Z:lzH9xT}*ZCL]MS[!?PQ2g&Nh9eF#UCJ(&SO-M:&)T4%ZgUhxI6ucq)0' );
define( 'NONCE_KEY',        '1H|xPgzt~3A-I%V1|{Fy}Vbo2[lY;H{WDrpm*$c&:TUcj=&h;8yr@N;Eg#=8Bbz^' );
define( 'AUTH_SALT',        'Oi{Npshb7I>!:g?L>rq$bA~my=3G2m3vn`rM61U 5%*~(<?PEE/!7y-Kg-7JB@qP' );
define( 'SECURE_AUTH_SALT', '/#;LXjLJW=R}1$PkI=}yy29${{;cQH!T4/ 4a93rq,f&D#Of8,cQy,]]6TSUp_ml' );
define( 'LOGGED_IN_SALT',   'f{89d1W7cxQnQ*IW6WVP<pQ3$XO>vIi:N76N6T~X7Vz@G`[vnIItz6!]S{bWw79v' );
define( 'NONCE_SALT',       'xJ>WLvRs%qT3?sTL71sygnfU]Py4X&::)9^^O*LCng;S}(2YT?bI`_)$3SSOI>gh' );

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
