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
define( 'DB_NAME', 'yellowsweet' );

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
define( 'AUTH_KEY',         'IWC5t8fP7boMh2TE1J52pbZUm73Siv5VauoQsGzJEAo4BO2pL5Jx4cWLZBzzp1xX' );
define( 'SECURE_AUTH_KEY',  'idPTXRlO58Dsmpc97gn2bgqj37dPNHJladst2neSNFfcT7bJVHM8uVedIF90Mtbd' );
define( 'LOGGED_IN_KEY',    'Vi4q1Gf9fX72EozWFOuuLvUOtm19yHn4oTRrD31hRJi8K3rKQlfhci5Zdj17GfTT' );
define( 'NONCE_KEY',        'JlknsndJLKVaAHlvWMVbdZUrTquT3T486vuvCmVqWWtt7yYsp5BjnQ4SczBMIlUk' );
define( 'AUTH_SALT',        'EIXBuFyauakHAS4y2nAmgXhvY46ZjUn6r4WEaqD32AK890ZFHdxecQNcayFDukti' );
define( 'SECURE_AUTH_SALT', 'Y3HGjI19RsrmQGy6vRRX5pHP5i424mJLKpPYtLE79wgB0UwjgxgRXbNL5IbXv1FN' );
define( 'LOGGED_IN_SALT',   'MEUSw8Xs6fPzpZOCcQ1udQyRQKwj34K2FyYy89K7ia8eQU6SOsm6jlO1TNBVve4l' );
define( 'NONCE_SALT',       'SIbIjkuGMWL9Vg0KWv8kG0HA7p1P6zMPi4XMiXBbt2E2hMwvO2jASK3qWMA2FYVx' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
