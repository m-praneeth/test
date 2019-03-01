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
define( 'DB_NAME', 'wordpress-Test' );

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
define( 'AUTH_KEY',         '#+#L~88g%#quzf:~!ILNPv~H-pKHz5FOj/DA)wfBQvzZmCJPTx2FA C(gKBoY7hX' );
define( 'SECURE_AUTH_KEY',  'EGto*!AvYdEar!5ST~QJEb)vU7wK;i 5!d6sXGR@8uJr+3]U:i7xP Jym#-/K5}^' );
define( 'LOGGED_IN_KEY',    'N,Q9&2hhq=)CZs%R(yzGqLHJF#+bd|BFAx12H0K}L($=,KSi3bm*m`oF5o0s^^5G' );
define( 'NONCE_KEY',        'jQ3afi^P$?-d?Pzdr_%~4S=dY<;>U7r(eVeXTlLb*[3z>)#5yoxA/WeTGr=c9/}0' );
define( 'AUTH_SALT',        'R <Z4u~Zj#e0UCD^;i?)Y(-~&xjQ8XsLf_@3(ON.f2N5pOul&q]c7mJ`|T$AgIM3' );
define( 'SECURE_AUTH_SALT', '1HuK]4TTFBPaico]GzMD<JU6v-owIc)4u%(&agWIx&B;XAd?iHf?Dp=*k5D-I-6D' );
define( 'LOGGED_IN_SALT',   'Kk:qjtd,kd}qfV>Ps]x9h,AAV6>oXwP[uwMkx}ikSH6FNmevb#)RjYa~{BfhQcYf' );
define( 'NONCE_SALT',       'AQc&h}%*!@a{Ifl!fX>=^cJZRW =8zuc|k>n.)N]u/a@B0o!@rOPB&T:$5&58h|)' );

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
