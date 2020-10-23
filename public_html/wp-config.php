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
define( 'DB_NAME', 'curso_plugins_wp');

/** MySQL database username */
define( 'DB_USER', 'curso_plugins_wp');

/** MySQL database password */
define( 'DB_PASSWORD', 'password');

/** MySQL hostname */
define( 'DB_HOST', 'mariadb_10_5_5:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b7ebedeb403d554705c1b7ea23c2b3216d1daa54');
define( 'SECURE_AUTH_KEY',  '9697dcbc3e922f11a55295d714b0194a5bf4a808');
define( 'LOGGED_IN_KEY',    'ab323425bb47608c576450dd45e71e617ba699ec');
define( 'NONCE_KEY',        'f9028042de876c512ff0956a9047bfbffde86d41');
define( 'AUTH_SALT',        'c2635c04bb386cbac513348f5d1223fed82f5c43');
define( 'SECURE_AUTH_SALT', '632f182f349c1f67526911798b9f4abc99f4b198');
define( 'LOGGED_IN_SALT',   'f47dfe358e7a76cbc0733ecff69db9343aaa7a31');
define( 'NONCE_SALT',       'ed0bafee45ddf2d73cf27429b2c58f6dde556b8c');

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

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
