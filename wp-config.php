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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hotel' );

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
define( 'AUTH_KEY',         'c=/{ryN1Ot,ReD;7Sr0dTR0g&kdwuI#Zc<YlW:qR5Hzbt3@_.dqlyIx!<+W)$hz9' );
define( 'SECURE_AUTH_KEY',  '%&=pP=9{RjqIqko^9*3%1%>yK]g>nj~h[t[tDllswM*+<[}_!/U@v~A[F.!AG~.D' );
define( 'LOGGED_IN_KEY',    '!Xo~koixs~2ha_y|hxxJ~Tga4!DR;=2M3d+jfr&}z~zLV<3.9@(]S@sgoaRlRBA8' );
define( 'NONCE_KEY',        '>eZp?k I0G{7{2KJrSOOY f6!vc=mODY3x@E<?:y]Kb-|6F5A}Z*V_|;ak$1v8f;' );
define( 'AUTH_SALT',        'IpV`|l?NtaL|Qt AAcu;]YF+85Xdm1CMRuU)w%b<A_r4G=Huj;ek>cH9Avk-Xj#E' );
define( 'SECURE_AUTH_SALT', ')9p|f>JJ|#:9|1!I{z<aMUceuv>A},(D[>HNAkxxkOC&aum#!pH?hhQp3@aG5|Iz' );
define( 'LOGGED_IN_SALT',   '>us7d;a)(hA=GJcj2Z),oQ]p8Fe/uiRFf];hwG1ntRdkNCCU//%=O#fWMXgc1ws3' );
define( 'NONCE_SALT',       ';:/&!vRDIjVW_#NB;zZkI@aG ,SQ=GPiHyHoZ`}qYn%)$Tv~]^-*Mt}_8k*s187~' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
