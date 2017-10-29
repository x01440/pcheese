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
define('DB_NAME', 'viizgkia_wp_prod');

/** MySQL database username */
define('DB_USER', 'viizgkia_prod');

/** MySQL database password */
define('DB_PASSWORD', 'R8*2b8SBq@');

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
define('AUTH_KEY',         'LvZLdhzz5ctEx5jVtGUyjo65hJtG7tfUV5eI2h3jIWgq7MEDY387AyesoMH3GEKL');
define('SECURE_AUTH_KEY',  'ULrYKAEx0Kgvh2ojZ4aEMq5luF1VS9jAf6Skbs9sC0Pl6JVYKdJiWAPRsDkJ9iC0');
define('LOGGED_IN_KEY',    'XM4BJLcQi3M6kirqYGmxO44ZTgtwzGLYSdtChTAPqJGvEFFGetkcrPGNwvyZB5cf');
define('NONCE_KEY',        'drT5KOiSZusCoEsNq8xNbYrUwpdQXKvWFrTuJjQtibjT3nP3dha3kxEDejPGMx5L');
define('AUTH_SALT',        'LN4ZhciLKwNFgzZrsgYA8ZoThPflrb4zkBSgMFFd3Gq4lPUFijmslf1BvObNj8zn');
define('SECURE_AUTH_SALT', 'vzDpFJrWa90JlCxx6Pm8VELxZovDHUY61Y7ouC48TVMEc6Q9gGxHBqPho6VVlFF1');
define('LOGGED_IN_SALT',   'wu2xkY0PwXRbgKHmWbbeCoZi45KLKbS11MoPkQEOFlxg1NLDzP2PkokQGCfXOjB0');
define('NONCE_SALT',       'TDCRxJeRNC1hp5TTPk293iVpSHe7RkI2GbibWCDaPcgi4M3yM4RdixCflC3UsKy2');

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
define('WP_DEBUG_LOG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Cart Redirect Location - Prod */
define('WP_CART_REDIRECT_URL', "http://prod.pinconningcheese.com/");

/* Handling fee added if any items in the cart require handling and packing. */
define('WP_CART_HANDLING_FEE', 8.00);