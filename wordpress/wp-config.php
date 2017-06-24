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
define('DB_NAME', 'mylearningexperience');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ';/Hadl|G?h-V8GBLP*v*^z2[dmV,eKY,<yO]flqca$13Oy.fy%Q1/EzpR6:>?X(T');
define('SECURE_AUTH_KEY',  '~Sa(C%nJX+)fHl(u$7STuKO82nVrZ+|Z$>5t:~#->Z#ngW=ZN|c9SWA)*4i(EDOg');
define('LOGGED_IN_KEY',    '<>Cn}3d{jo4M]B`syYD)O;q=g-0m~}C1W kq}c@<SQD6U_82p}fqGzS4~2v<&#e)');
define('NONCE_KEY',        'wFv|LQS?R9QUJf>U0#9#invOoxy1Px/wvwRnT+zx|dmx|BI9ZnS>d LWi|<!3#l:');
define('AUTH_SALT',        'm9Koa7!C3r&~8H;L[+$QR0eZowdX1SR+smTX!yq2A.i65/*Qt@Q4Nu*^v0|?6]T5');
define('SECURE_AUTH_SALT', 'mFXr_-(Lf2 {uyHT0ON6]^N> <mbsH,$}KIh++hb4r9%x#f||jW=U4pN3jps~Plg');
define('LOGGED_IN_SALT',   '6MKHKz6 8fua<o!fa_{VV<^7Mp8[d0en2G/x@|k02P2N+:7*Zp;t]O#. cRplX3<');
define('NONCE_SALT',       '4+H4R)Cq%>,^22oQ9J455Q!`J/N:TZvPr^t43T[%HQOhkgXhik_e`%bg6}}[J.;?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mlp_';

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
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

