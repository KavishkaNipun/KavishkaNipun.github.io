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
define('AUTH_KEY',         'k0IMvJB7idlkFijyohrRu2g0ux3UIB4MG6UyY164oS+YYouRQBi3gf8jVl8O2GynqdGbxWPiibtPYe7TrRURBQ==');
define('SECURE_AUTH_KEY',  '/rosGBzMAX/tavRp5sz/yjcfLoQCasIqUlBJvC3gneP1ui7xbh3kH71cl9jPmwzFFSo5zbrgUWgLb7mBVuNAkw==');
define('LOGGED_IN_KEY',    'HRAtDkdQJRz16Q6qb9rfcDE7LBNhYQr1KavGSnbc/Qu7SDshkdhKH5VZWeBfQ3TZpa29WnVlxdltDl19Vw7OuA==');
define('NONCE_KEY',        'dWxRK2ADBgxqEmcdjT1aMK6KRAk6VwXR2ySgvxkMQAY6AxPfTymtlUiVsEzWBaNc/EanVkR9wHm2yPFhjwgZUA==');
define('AUTH_SALT',        'Z3+4nvHQ7Bvb2oD61WphbuUeougIkDNJ91kZv5v4VMc4syEGMAriPWPDABFghntYyxuBH5UdDaqRZatUhsPHPg==');
define('SECURE_AUTH_SALT', 'CWh+dmUGxCiqu0WFnEHf+zqevYKL6252qqqDGSqmlh332Qi197zJXJLdL5MgCF416+h56UZeqJy9qtnkxw85YQ==');
define('LOGGED_IN_SALT',   'A+TtMRhJnDCt+UQcr2iPNCfzyIDvXY6DIpBAP+ejRtuKMkqMtV7FH2WsCvqy3eIpd0FfgOWpybJjBXX7cBF4sw==');
define('NONCE_SALT',       'g1DDJ62bH6FEiUFv6IOQh0mW3qbECk4B19/9KvsQfyB/9BEV3/eALDGnqc5rkIiZsxFkHN3z7FSqF2lG2gi+Gw==');

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
