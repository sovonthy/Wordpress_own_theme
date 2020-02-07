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
define( 'DB_NAME', 'cmsLearning' );

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
define( 'AUTH_KEY',         'g6JU-!]ydnNR]- `RC0(b?ME=EpFRV)bKrq6G%@2Bp:aY<9@*^[vvt*s>So_l u^' );
define( 'SECURE_AUTH_KEY',  'EO)q=4m&+q]`5VN_LGY[^d7T jX3=O45yI5#MaqbkG(p|7Dfz-=s-YD[g].MlX]L' );
define( 'LOGGED_IN_KEY',    '3-b+|=,ZWnAKN[4|`u%H#uLS?#+pUTpTcMHj3/8wj}-qJbZ%3#8[Jd^)R3j3,,-X' );
define( 'NONCE_KEY',        'Qt&M7Vx.[X+Y_OY|uNfN)sA_x^4lm{9$]j*aM{21%7,0])t)]XzFchP{8Vd/t^jz' );
define( 'AUTH_SALT',        'gBwS$zNMCdqpS)I5Ov)3lSkSc[=:%ArU~sn~3Q3_c~x@R9OogT8f%[+BWHCms(fb' );
define( 'SECURE_AUTH_SALT', '5I2l5tA8km+T!x*#s6jp}}<Mj.Oy7L%;;9gD*|T;Mi}n`aQoQ,p9}(pd(54q/s ]' );
define( 'LOGGED_IN_SALT',   'hH+c~G6%32ZMkNpXWf?.cXPp:bnT7RQVIy7+|ShJ:.J=V&@cbYZ0B-!eo8s];O[n' );
define( 'NONCE_SALT',       '?y*I+f!xduHtu=M+%A4>]Knq~ADVSD!%u0prV6X7x+I:CBpw;I$=~pD;J&!dTK!Z' );

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
