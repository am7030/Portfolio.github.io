<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'RvEmJOpL/tvYaJA4RoOCWV52sy+EQxsU1Vl99+CxCX7mczx51H8H7OUVXepYt/g7BqYQBLuOFDGKv7FoZBPx5g==');
define('SECURE_AUTH_KEY',  '13nlDZOzOLTXfo+p7U/i+aI+U6DwsVdYjRe9k3+M/tf+Fwiv5CaIEBlbzmjm6AnZk3RiDgL8iJxEmEWUk/sRYQ==');
define('LOGGED_IN_KEY',    'bBUIIMGghf7p8Yi3dMesFkOi4wYhp8dVLG/7mM6BmD9KK7BhkehIlMNkDfH1qJxTpzfS66sMsigWKkQtA4qM8w==');
define('NONCE_KEY',        '5kYaBS6EBGnB4F+yWohNNkKf7qf42Bxt2hbw9nZYwhXl4g07MvIX4saN/MVpm3nkzfntWMjxt8Mw+tBcbSMAqg==');
define('AUTH_SALT',        'RQMNyb1VofXKcqG6MW0Sjb6zSEKMUZnFlm5jF6kpVE17UAWIufEQWibOdvaogxgbEmS3USgZ+ZvtltrJt4FfuQ==');
define('SECURE_AUTH_SALT', 'lEDZiL2Mjk7H3t0LEbHbY4zyJCtxPSnQnhHKjgj86uF/Qhy0s7V0iktwHH1KX/6OApRuMjsf4Ovy51AnLS0IOA==');
define('LOGGED_IN_SALT',   'SZsIr7OKQfR1jtgT7RKJtPzRSUhY49IM0SljyAaxcI4J+Hhwawm3B1x6a1x71zjilSo14J/FwP8iS/oyhnM+vw==');
define('NONCE_SALT',       'CxQflYDmPqaoFX8K8Ss56rY70UNnGWmwFaDgpxfMfcgNY0cWSUxHnEqUm5qgSgq6VLS0O6D6QFbMpvmQuYeq+w==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
