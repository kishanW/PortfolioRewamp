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
define('DB_NAME', 'db395540173');

/** MySQL database username */
define('DB_USER', 'dbo395540173');

/** MySQL database password */
define('DB_PASSWORD', 'atox-d1109');

/** MySQL hostname */
define('DB_HOST', 'db395540173.db.1and1.com');

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
//define('AUTH_KEY',         '^T>NDln(, G~qB <wHHsZ8r$U<uL`9Pp>n@1i^>-LX+@SH,Hx+|b7HAPWV%1xk?9');
//define('SECURE_AUTH_KEY',  'r%f(qC>s>22CCyjh9KU6DVjXI]VP[%$D)J!84-=P9%p$?-8U+>advdB~g=.7I|ZN');
//define('LOGGED_IN_KEY',    'Zkr!<(:~&-]z<rk`eYB|?[;t(@DHqk(L?~`7-hPS.pT87qwyi+kssS=*,$pl--eM');
//define('NONCE_KEY',        'U@/lwbmzO+l{dY}nm;Q5;~+-aEjY= k5[z9AsAYF5f vAk]?#3eBE[T&X%|[tT_H');
//define('AUTH_SALT',        '|?x[TE.~u45-E9XC}2N?eh&u| L?K2T&Ht3~E^7a))bAE<J:</|!V6x+|Sl6]-W1');
//define('SECURE_AUTH_SALT', 'h^|{$H@:f-;g:<dp2+)WK:|&6/+.N_{8L#9Hiq}Qq>[SUM-WAOYl+{,iX?}*t%Mv');
//define('LOGGED_IN_SALT',   'n}9#oDBdLiNO4kr2hgH|rru|cLxTGB1zA+w%(^lgpUnCGOnE|0I[tc+Ab7YH|2,z');
//define('NONCE_SALT',       'k~Z>Jgrf{eMv[%oBA=Wd]kjQp!Y/.z, GP#RZK=^3KgSC{,D7x7t3>?!k`6Bnkhj');
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');
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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
