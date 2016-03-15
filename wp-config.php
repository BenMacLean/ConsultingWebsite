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
//mysql://b5bf9afd87bf98:6f2e4ebc@us-cdbr-iron-east-03.cleardb.net/heroku_d128042b176614f?reconnect=true
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'heroku_7101c9bed1650c0');

/** MySQL database username */
define('DB_USER', 'b12b4fd3f1f0cb');

/** MySQL database password */
define('DB_PASSWORD', '955ca6cc');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-iron-east-03.cleardb.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('WP_HOME', 'https://thawing-atoll-10378.herokuapp.com');
define('WP_SITEURL', 'https://thawing-atoll-10378.herokuapp.com');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!6Y.Y-yX/H|F{8bG|I6?ol.~o+xF|-sceP/Isve&z1&kG|Jle|fxz>-#3yW-.MDu');
define('SECURE_AUTH_KEY',  '.%i%TRDp#aA9FO{>=7$OlZ<j()s,v!rHe.Gxub6+?jYIrboCfd#!p;&t|yDha^E#');
define('LOGGED_IN_KEY',    '&V>y,@gR9N0YLA~^_VW#,5bK?(5mO* )d<fQ)YnO0Y1qq#4||W7^F|:ru51{f(&u');
define('NONCE_KEY',        'br,{I+2C=<g. cC&+YDV6kzi+h=5,Q:zR6MblyhhUSl)NV2EKYV9p/3A/N0_*^;c');
define('AUTH_SALT',        '8cp7$Kha&s 4U^i~b-vk;8/]nUDwvUh]LJAk>#94Wf$blmlE7=r0Q/EK7v+x_BYl');
define('SECURE_AUTH_SALT', 'A}$dkwq7ba0%[+5{nEvSOiljvl6enZ 3XWx%&%pqh&@W#vo57;}JS@AIl7H<e2ti');
define('LOGGED_IN_SALT',   ',P_O|4s@XS-0;N$Q&*R~Mv0I#t*K`-_|GDj97#%]M4V)HKDKD7by[aTYB*LB~hX2');
define('NONCE_SALT',       '4m_F2)hp)nAoxO;|QA-(eA0fYhQ4R-+|7d=|UOn3,qo/EZu,p28K}ramgMX~KdB-');

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
