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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'J7wtONgld0KJIBEJexU3CbszdkQIYjIn6pi5ggk3ebJaouqK7f3eE2Hz8EJnurXerEgAMFMFgcI4U7b6RnRrRg==');
define('SECURE_AUTH_KEY',  'C7cbNiq9Aif3DXbxLagGgpBMkXN37K6LzRmURijSJ1qkYLdxEdXZPFUOWyaMKvAxbFA+bWhuMKF2yCfjKAAUhw==');
define('LOGGED_IN_KEY',    'LsMDXyEsA1rWMmvucio5+fQYNYqyXJjxyYehsT2dlBMq+CX5Gfq8acu4jz8DJq++t0letdHugqhIxGwjj43Bag==');
define('NONCE_KEY',        'ngD2RUQ+wU1WzcVg0/r209GiGIIdbq5aZhdQfoKqru4RnpoqRYIyFCHa0rbne1QzQSynP1oYYKcXScMvsV09dQ==');
define('AUTH_SALT',        '5ae7+kOCm1qSWVonmSFJkp6ai52LoIzFk0uffrtFx66HhgXS5bTlWEkgHnC7sTA6abck8NBI3qCUozGUHLHrZA==');
define('SECURE_AUTH_SALT', 'blrMjAhDOkFhz6+OIb7Dec11pKcmSBFSmFPeiZ8R+bL20Vzs04o3IRzVLtdEJqNXd6Hn/PbHnxXg7XYvOokK+g==');
define('LOGGED_IN_SALT',   'ANc5OHS8BXDvOkjwhoYCP7V/Mxq0RfPI0A3CJducFMvcFKOqJUIl10KPdLVKGgTMcVYrKvYnmtc6wXv1RAtQkQ==');
define('NONCE_SALT',       '2iS/zVr0HoVJvRZm5TDQNFd565PCHfPs2dymbO3h2dntmOtwfW0P1jkmBO0eYZMutHw9kLmcXkAH9i4gSLltBQ==');

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
