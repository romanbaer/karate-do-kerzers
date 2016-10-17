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
define('DB_NAME', 'WP');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'M{A9+28&Fvth{kb*uL15vk_ EY|k,L/:J<F!u*|B[g=AgK%3Qeif~x]-^Y::.r#[');
define('SECURE_AUTH_KEY',  'frC@saEsDQ}f]_Dehg.#_*?ioiO7(px[JHyse4mxmtx5HBc~{bWC}uuxgVjx4t?8');
define('LOGGED_IN_KEY',    'KW3J<<O*FV^>Q5phpJ,}(N9c5#a`xNKHtp9rCl[<[F~;R#uTCYI/h>amGXi?J0dO');
define('NONCE_KEY',        'Dcw[xNoaCgdx@Cw5,8m|`<-$Y[2@T%=vC|]kj*Ph^cT32H2<ZY)?5qyA,pi^;OT&');
define('AUTH_SALT',        's|m/7-anp2)^FwJnk3*_4Z(%ROFDO6MTylQiS zLaHQZ`LwfEg;TfSKO!H5ovKEb');
define('SECURE_AUTH_SALT', 'tW<j9A|R5Sd$2f`H1UVDZpY#BG-|k|h!;F(W]i5!U29WG dFB&~>_U{S_huknlZy');
define('LOGGED_IN_SALT',   '!f+38KRvGB2 Xoes-]w?FZ&ci0}oPcLcyxTo}JS[F r-.$>u(I1 Y_eKU:0?V2~L');
define('NONCE_SALT',       ')]4FIPqXF/B/0|3Q MXr`~Cc{|O=YI`1M:ylxT?FHuOg,iEb2XHKcI#S?,FwGd`$');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
