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
define('DB_NAME', 'wp_bolora');

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
define('AUTH_KEY',         'lUG-qV{xm{>C6jxW{)cgEd}%o.MC.dto;ep7J9VMysl5hm3p0Yw bGxky/~Y|Y2)');
define('SECURE_AUTH_KEY',  '8mVQ+be)m-gLxRwf`U7zB]::sWD_<uBuaNsd2[H;n9;6<CVuV%<c[VtV.DAsk]~l');
define('LOGGED_IN_KEY',    '~>OR|%Jr1,:TxgicoRO[]?5}Z+]G3H}_3oMGu1Ii3t6)~`d5S;-<:lVw(85RbU4/');
define('NONCE_KEY',        ':e$RxWX;z*GkvZvboE0|t9Fq4.gv-H!h34; |Cs^8;Jp)t+Kcg`!ZkthX1x-%cPn');
define('AUTH_SALT',        'h4eXdpt5l`bWL^Y@J~6Zg+s:Hbp!7WdP|)#o%MPq$ A;zIsetBa!^%?*(;}Ae5)~');
define('SECURE_AUTH_SALT', '-!~,RwAg)T0tRbnDK5D!&J&(~8BiOkH9(@JG/p*V0Zu*{8#) mMeKdlTxyA&$5j?');
define('LOGGED_IN_SALT',   ' P&.scZq4Gu9Z/U,rL{ss34t;#WhH8Nkpw0#;cJjAt=)6LUA&$AV<Iywx{]$>JDb');
define('NONCE_SALT',       'Gr81danrT|rgmO*}/7#eZ>~sE{v0JNG!V|7DekU{sR(^d`~E`-nJ/c62(jyZp85y');

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
