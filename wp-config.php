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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Users/lalalello3/Sites/dev-leslielello/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'leslielello_local');

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
define('AUTH_KEY',         'e5nQ`Tl8+YiQi}RKAq`Xfc=2u;h#2=eIYL?%J|V.5%3S/8]0x#  JR}4?sugp^4^');
define('SECURE_AUTH_KEY',  '(nc!n%NnD.Oo5r2}[1wg}uMLhD*4iAyf>C<RlItugT[f?{-`,%Gw}+!O2OB.m!48');
define('LOGGED_IN_KEY',    '*W9:;I.Y4zS1hHfMQ2/W9Hd32}~#<J[&a;&xaXSy.hfre>l8q|q4n%#BE;G^Em7b');
define('NONCE_KEY',        '.J&DYg)hprUuQU0.GD~=KT6b7V(/Jxpd`J: 7KZ$[4<cV2/1Nu!Yq) f`gVsVOM!');
define('AUTH_SALT',        '}x?VaKCJARF9Yth+J>d0VSN~TES~]{Hrhi2,:c!N^XGri-~PSaN9?pV.Hvn49AdN');
define('SECURE_AUTH_SALT', ' y%=[3nD,-D7EY7s;&bSw#p{OjcT[&jOPZ?yN+}6eb8lf)kOsB%L=}]&gXbp4svl');
define('LOGGED_IN_SALT',   'bQKE}R&9^ d^W$FINfaay<icf&mV3c0Y%Jvzku<Mt-UMB{oeax01ha)Eh+ m{0J,');
define('NONCE_SALT',       '6nWEz|whp|[84bS)W~NpTcu[T=O5oLgF&SkB.-|6OaFlq5_6oaoBs :caDPaB5G7');

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
