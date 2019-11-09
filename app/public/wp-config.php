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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'UPeY+YEkogrxB2En1t0ObLk642HjpVF0oIxFbuHKydlujYsrP3nd1pZXxt6pjK+wMlw/UhjUFjfzrYuS5E9NJg==');
define('SECURE_AUTH_KEY',  'TMbjSTQqVkfChWgdyCYRJM/gUfwu98DdjfvG/56j3BtJi0wqtVuvKLhUwAxVus9he4Fzj21MtOjA/DDdPCR6Iw==');
define('LOGGED_IN_KEY',    'TdWeMgtX5o6f6dQHkSYu2lm6Z23UrMgGFeN0l58ZLbyTv2PzWltZ+uQnYpqYdtku9oeoeFhZy4z+OcNhFgWPtg==');
define('NONCE_KEY',        'A0NbeO+pvLp+Q7cG0h5ShVa1bs8Iik+I3cRhc5nRE6hjckEIAT4DgeUNfnlRVcAQGlwdl0eL0jETdh3S+S5QjQ==');
define('AUTH_SALT',        '71GIlCxOd/dUe8vC9zdP5suuDYxihTatemAK+KYPXDEpfNyycFESm///wVFbwSKBbzaMCvBAjsAmJviawLvCDg==');
define('SECURE_AUTH_SALT', 'RezJ/9qYvGQwdX5/ed5sBmmEWEt3cFDWdOl9wyIY+Kqs8w7Tij9ohXYQgOA6JR/6fGMMn54ZQ1BMfrUYmmIKbA==');
define('LOGGED_IN_SALT',   '73YOiDOXb+hsw04X7p/If/ZoCksqhcahJTqDXLdIM9j5C4v9p8ZobFoJsPHlPnLVHTBbL0SiaBSGk3AgsxA+Yg==');
define('NONCE_SALT',       'LPtqwMfH3P4oFPmhGqpVdNNmgwgHVk9VMO+aCaBoWlmT04qcgSSsxliOPlgaIdXAxFUyMP2Gpa6HFIQHnIte2g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
