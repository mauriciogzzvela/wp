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

// The URL of the Next.js WordPress Starter.
define( 'HEADLESS_FRONTEND_URL', 'http://localhost:3000/' );

// Any random string.
define( 'PREVIEW_SECRET_TOKEN', 'ANY_RANDOM_STRING');

// https://www.wpgraphql.com/extenstion-plugins/wpgraphql-jwt-authentication/
define( 'GRAPHQL_JWT_AUTH_SECRET_KEY', 'your-secret-token' );

// wp-config.php
define('WORDPRESS_PREVIEW_SECRET', 'ANY_RANDOM_STRING');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6dZD0rOJqgg9VEDr1me8Lsb0nWn1122s+vcVHDfl8blEMGEwx996KShVYoegBNVp/JVQJdSKUxVtXWn7J5ZfXQ==');
define('SECURE_AUTH_KEY',  'GIKkTAuNvigiGciJ2VMpqLjD3C5AsqWv2kKS9NpwFj4NrVQhrd1dy/P+GbrDjgluQTzdfHGZbYevbyGHymxFXA==');
define('LOGGED_IN_KEY',    'XFkCRmRvyKDA2ID4ZvJErd6lzV6Qm+sj/JlvRklkUgk0ji0WoS+vJg8uiE07EMww3yz5kYKaC9TKlnGMZUTKFg==');
define('NONCE_KEY',        'XmV29c2fFriHFnDXJHYhFPxAzEmE0mopf0ng+Wzi2fsOpqYN2VckZeOweg/s07/AXTzSmKp8HFKddq1Qf7Tg2Q==');
define('AUTH_SALT',        'Is3epQEVvHxD14L23G3+jtjz6rPgBvns8eHAuMZNUGN8BJAPJJJiX9nEJHuHGqtAI9ciasf8h9hY17lSsam4zQ==');
define('SECURE_AUTH_SALT', 'qQduA1hoNvBOjS/+TXc7R3KJK2ZH++XY+5rQI52IuPTUrtVjkjyPA7hirJoT2c0NKUhduerfRSItNQB5Ff9PVQ==');
define('LOGGED_IN_SALT',   '4TNjnA8Q9qz8e4fjwaKX8kb1kYLRCp4EKG30eZIjIOWyfHRyDXBPpM4r74dXjexbOf+KK2qsMI4iYGFPQ8LpCg==');
define('NONCE_SALT',       'BOX+hdv87ZJDor4PzQb+lDdNP+EN4TGty7w8bF7JOo0cmbgdAHApfw0GZ89bLXhGtCtsFAWs8FmH93zBOTcrTQ==');

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
