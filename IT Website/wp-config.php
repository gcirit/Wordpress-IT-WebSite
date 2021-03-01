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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'DigiDehaIT' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PZC5GHonQt0010BCop2D0cihDuowEYsviCqJWkMkDZBQMHnI2161vvp49UfoxBQP' );
define( 'SECURE_AUTH_KEY',  'A7xLh4ymYeRI6p7tTe8Pp2Mn1f3wyMUJ5pob388G1iLG9WyVx8Ed6C5UrDpuSuzk' );
define( 'LOGGED_IN_KEY',    '9p4X7SNSIoO7M0YWedkrEI9vc3euibGSWNV1nj7bm8ivyQBjvhH7icVh2kf5pkBq' );
define( 'NONCE_KEY',        'FSe6w4dbpUnTHFBN8N1GKyTLeHERAnMipHgkjAUzIziLyZMzwA6vAp5jmAsRgqfU' );
define( 'AUTH_SALT',        'ZVi4i3xXvu0aESjSJW4yE7YhBUmiEQfzCeT4wgI78jQSo1IWUZkgA49x67McXkVI' );
define( 'SECURE_AUTH_SALT', 'RweX7kdzMd2w3NwBzZORmxdXs5m4VgHYCtt4ORDPvGAqZyxvfEQUUgSs88NFloP6' );
define( 'LOGGED_IN_SALT',   '1Afuvsu6xRrenHPVtHyuoQKlPsn1gv0Tl6SGFViDUh18kZea1WdOrJNzn2pgVXc9' );
define( 'NONCE_SALT',       '2kTKiYnL6SiyCIcLzM5EPEWiwihEOXWUqLtfVdaXislw1mpk3QYOkKYgDdwHKD2E' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
