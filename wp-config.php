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
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
    // Use these settings on the local server
    include( dirname( __FILE__ ) . '/wp-config-local.php' );
} else {
    /** The name of the database for WordPress */
    define('DB_NAME', 'firetoss_analytics');
    /** MySQL database username */
    define('DB_USER', '');
    /** MySQL database password */
    define('DB_PASSWORD', '');
    /** MySQL hostname */
    define('DB_HOST', 'localhost');
}
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j3 e~(G1P/+MM?b v6}TgMHv=gjiDy]ir(1$L RNw{;LObV@)i]6CxiB{P6js)<<');
define('SECURE_AUTH_KEY',  'egV_?z8fM4V=C/.0!)NYQ,OYFs+22.x6D1dy,pp65FXAFkQ]:aQ~VnU{o1$gv[M#');
define('LOGGED_IN_KEY',    'DYL&+1UT$gLMD*EPv<(e2+^J5u+,wrLzRQfu8u.Vx6jT`Cc<$Z&|0|b^A#3HF!FC');
define('NONCE_KEY',        '&F`N{+0lXAmB}FT9PO`3=Oj<&HuiF{Y:413/hRc=Rg)]!PR6V9te9}Jl-#`{zNn(');
define('AUTH_SALT',        ')?LU^%Xkv35NzR}PR@iI]nw|iGSr=$~^rH&fadLwh7x<o^-i<RR1F&{)5 ^Q4FvE');
define('SECURE_AUTH_SALT', '.k58YT@bt9FV2_htCK]iVN.-vWVl5DD9~L(P]=2i,H3{R9!_mcu8<paO2um~QC/o');
define('LOGGED_IN_SALT',   'B^;[X{|(YRy7hCY1ISr:Mqg41iP9Yl0=7AQ=wtBXe-*^ LG6}|N6o4fmLa;@5Ja&');
define('NONCE_SALT',       '980-z;il7A(K2D)osaX&/l8*Xx(^lQL%-FT^*DdCmw`-P#ApYD89BU9LOOz 45pt');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
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
define('WP_DEBUG', true);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
?>