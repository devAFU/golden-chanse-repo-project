<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qCtTmbZAVHyBlm9ZK1vBCW4xlNQrx4uVnbsGhr9EYCJRbCDpUh5R2914pJHY7Zle' );
define( 'SECURE_AUTH_KEY',  'PZaq9SXVaXp9yPPm1I00xZ6PhP9J9BcY9yu5qFUXb4tlN9Qfhlu8Ha72U3SX9X5I' );
define( 'LOGGED_IN_KEY',    'm8iZKsjmUQgYcaYgE4jlnyD9x3zP3tdIljN1vzhRjuEQJgwJoBL5Q4V5weJOXGYB' );
define( 'NONCE_KEY',        'Tgqym2FNEJ8PQv7bhntxc9bsOf1UWketx68XAuEMrUOkFnbdvS21ZWK80qzGLpTv' );
define( 'AUTH_SALT',        'ozd4AXb1kXA5IC2sti6mSP9VTjFqo1zukmengtPzzZrfbJYzGjEuetSOxcNKUqpL' );
define( 'SECURE_AUTH_SALT', 'n4CbEPe9sGcICeIN2H9rwAQjZQQ96WSHily2XlJyAU6KImIbRX9aHAXv9chT6JnS' );
define( 'LOGGED_IN_SALT',   'pVriOl79gqmTHSdRWeObG4fONjR6PL4yYB3NSI4tej5vUNLt54EszxkTyTmjZ7gP' );
define( 'NONCE_SALT',       'FUeqjCL1HNHC65b7xHBuZoMFNWefNW3HPt5fuZNpmOHV3r0BRbdhUDINODJZvm4O' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
