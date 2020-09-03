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
define( 'DB_NAME', 'morya' );

/** MySQL database username */
define( 'DB_USER', 'th' );

/** MySQL database password */
define( 'DB_PASSWORD', 'th012725' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bVJc8A1xKemGJ2+dHiitWfdaqS4+DJbxDyxYory4TjsTj3Gi+VfecBV4XgB5W2FxXgSHtNM7XoJBYA3zlDdKvw==');
define('SECURE_AUTH_KEY',  'mJlmWqU5NWDn3+2ZEI6rrHFr2RYbui5tabOnVds38hP5faoKUhxWCcGz9l8T8QpV0ICt/d3LEYPTURfeQqPkZQ==');
define('LOGGED_IN_KEY',    'PQjhuPGxhw/zf3FmLcRGBhSzdcwZvZG3fKmD7OPTIMt+yNjxgS22kQrbD05YG3gxX2tkXItZKozemF0R0AY4Gg==');
define('NONCE_KEY',        'dxBzVOgBAcNp10XZWhR4kT5QazW9q13U4qTuzaigyAIiqZCouLpkzHAaLf4yNJO1OuyvYuzGejY2hvkAFPh8ig==');
define('AUTH_SALT',        'Vp7DLZQ5z5KeOorWwEjbBwUkFt+7Mj75jWC0cElFDkOdBie6FOL6e9y8vHIc8B945CWuNimE1gkEfXqRKhgiwg==');
define('SECURE_AUTH_SALT', 'Vmv3+wnvroicoiaAuTe+2yDGUOu21AMqqcG8tLSTBXt/u3U/S9Og/7NCLN2ARagIzPPN13OfMvXox5NJ/P0KCg==');
define('LOGGED_IN_SALT',   'hzZGI6qqhQ9+75/LvpGtYNZ0Rj4wWIyhwBw/sR1SUgbnoSSxp6BFjhzb1iQaTYF8QEuqiqajgGlvvoXJg7UqKQ==');
define('NONCE_SALT',       'aWob5qsAUGtv5CTuzUs8KqkF+JDvYPWZ0zTgFdott0oWFZVMIXQ2J6LvETBK2Q5KtqN4FMm4AWz1Qzt4OVyv4g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
