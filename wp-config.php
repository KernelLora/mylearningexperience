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

define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6}`K[|04+Gmr/p#yvH%+#I!|6EL+k8GmdYtYKeC`aj&qOrqq@1@bb #T~vhmO!](');
define('SECURE_AUTH_KEY',  'y_Y*Wg/{RQhn.YM@.#YPLH[!`r;t;ZER,T2qL0Ma--|ab^Iu_/R]W*L22vpJCq0x');
define('LOGGED_IN_KEY',    'Vy4I~C$YE}Dr$Ay=JiW]y) Qm VQB8,!c6,S*:Oue8g{*-cBw,y`Ola-=`wTlJ<$');
define('NONCE_KEY',        '^&w@$ixf9=~?W&TprpD[jSxWY`[PhlU0=nqfd[JKmAOx<shG^yaMKI{c5Qi;36er');
define('AUTH_SALT',        'P:rT~Uv~+[;aUI{KN0rTDE$WWSFY>VVn]30e;bfa& YW^JO)=oRMZXEHvo w!tHw');
define('SECURE_AUTH_SALT', 'D*$R3#1E{TT+`r,S]4y,Hma0Gf>!RjhA58I-O;`2ygLY:~1X^cc?dyEz#:(}<)SR');
define('LOGGED_IN_SALT',   '$YS>k7P-U9Nm4-$*44,mn-,kOLAAD^@20dW+G{y*??ZX 8dWaA%coi(9>;[yDp^E');
define('NONCE_SALT',       'm+F0AsXOAOac`LtaPq5t<voScj,z}jkf&8v=J&~,Q^Yg*JSAxb/djQsvjn72u*j/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mle_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

