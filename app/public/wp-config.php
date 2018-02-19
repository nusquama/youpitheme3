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
define('AUTH_KEY',         'Hb6l2M5dpYzw7areJPynk0t2dZEZDpngpFP4mfmmVF+s6c4L8S6aDj8tydbjFYcj+g7y0DzowI+AmcRKmCCtMg==');
define('SECURE_AUTH_KEY',  'aBBKhF+9N3r6UGfba8eeOstNPeiRHRZr1k6WVM5wTl9DK/nPqmziG3wjZaRQ1m6MnjtSwYu/azKOdjf0nJ0+Kw==');
define('LOGGED_IN_KEY',    'sYrnxEBEEF8iNijfBKPXqCJKdLuZ1HMYWUHUWsFA0Tqj9HJ5eoKyQP/R81rahlok4Yn36KvtK5utCNxhSUQl4w==');
define('NONCE_KEY',        '2A+gySiI7lr+OEuQj1JnEKUV4j/tWuk5pFiI+1WKNUTJdNALX3++FHlzSlbsAb0NK6/fuEFp2fBgPWvvlwKM8w==');
define('AUTH_SALT',        'lQScoArPyXlUsGO85d2GZ3fXoB5IJtOgZef1LbUtb3l3AOPRc0jWNP4zY8dLTAFOwoRzQEPI6Y79z0n8gEmkCg==');
define('SECURE_AUTH_SALT', 'RBR3z021nDdqkBFBPx34KlcFlrw7nYDSnbav8834qLKa8mPzq4KwM1t09D4n810RfJ4V+jZuW/gbjj4U8G4eEg==');
define('LOGGED_IN_SALT',   'hHbo8P6xSOuxKRfOKvEumpoFZOljtdMdVBPqh6RR7CrAYIfKmDarNAnKUR5DgE6VwKUPGmmK15Q+x5b4YH7BEw==');
define('NONCE_SALT',       'roe8BZLSLCSntMnErykh8sYfPruzndgpvngTgUBfLNCeNOUUu/3rI5rG9c9VN0hCIe87+oe8Iwq4JIIOSC1lTw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
