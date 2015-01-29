<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dripDBv8ykb');

/** MySQL database username */
define('DB_USER', 'dripDBv8ykb');

/** MySQL database password */
define('DB_PASSWORD', '1QcTf4Oow7');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'cU>|vzkJ00}zNJN8so*+m6<;{bLIEAubXfM{$yuf<<yXEAB>nYfM^$nUE,ryub');
define('SECURE_AUTH_KEY',  '~|sGf3<<bIEE{rYfbM$yzfc0$$yM730kQNQB^<XITAuqXqb{$ySC_swsd:[[ws');
define('LOGGED_IN_KEY',    'yie2*^I{bXUEBrbub<,hOK-l~l95_;~OL595lWSS9*ptea;+#tHD]2;iPLkV4!');
define('NONCE_KEY',        'pl>zJFgcZJGwgzg40@@-K414|kRSO5-lolV|wJ0}cMfM^$jkg4!@,rQB84|VRYFBv');
define('AUTH_SALT',        'K-whl~YI>vJF040kRNmX6.{<uIEA{<XIbIEyfqb{<y$mM73$bIQM7njH:lWaWDwt');
define('SECURE_AUTH_SALT', '{bMfQvf>y{yMIB>,YFYIzvf95lWSWS#tppW]#]#xHDA]<a95C[|ZGGDtdadO:--');
define('LOGGED_IN_SALT',   'H;-h41@|!RN851hSOVC!spZW#w[wKG::]aKHO5ta!@N8474oUzwgkg0!@@kK0:4!g');
define('NONCE_SALT',       'oNAuquqb{$>urE{E{<bIUB7rYrYU>v^nB7,7>YUF*+LH252iePLH+ieiT2*+xiI;{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);define('WP_ALLOW_MULTISITE', true);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
