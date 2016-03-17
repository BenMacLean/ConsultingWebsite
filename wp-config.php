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
define('DB_NAME', 'i2342675_wp1');

/** MySQL database username */
define('DB_USER', 'i2342675_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'Y&1fMzkM^pmzho@HHM*80[.8');

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
define('AUTH_KEY',         '6NRpouZmxUqhlgt3LFb7v5UnpnQqDF2x8lERwOt0deveMR2PoLPPbzl0wkLzDqFR');
define('SECURE_AUTH_KEY',  'BsjvIKbnJqa1ts3GEueGTGlHapyxLwXPOKcGisHhXVbIqJloUEnXU6qGxDbO0P3W');
define('LOGGED_IN_KEY',    'gN7eOASIomSmJaTuLvAyXTDVikEhpNFH3wUCDjMIXl5zcrdDyTEzPxwfoX1ofyve');
define('NONCE_KEY',        'BZApXMczJ6Xp2r8wY0w7vO2kVxTjVgIU4NN2w0YX9RrNKOt1npy4L2ZOlALoAruF');
define('AUTH_SALT',        '5sW2vwShFsDQZnUYdYdrisXTlt9X9qz1KUSE7rMvua58gzkLuwKjbr4nLhTuk5CL');
define('SECURE_AUTH_SALT', '9efOZ0XKGy540zoraRjTlaJeYm8Q517YBZQTcZFKpCMm3qY80AZmudeFsfDXjWad');
define('LOGGED_IN_SALT',   'H2tQEbYR0TGJtBxHdlrWxbAmPeWuGtEF9LjMO0LQvsxOkj7rlVsSRdQCoSzO1F6P');
define('NONCE_SALT',       'KleUugVr3VsjGNOrEZnpPfHlPRxMvep35GtOxZjN9GKAxpUt84f6i3W8cpDzWAwn');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
