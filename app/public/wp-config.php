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
define('AUTH_KEY',         'K2pAnBwxgJrzUUYlI86CZM0oN81sCRPrM9pHGf4mi2r5quBsicUWUGXUQXgiyXsuQuNerna8ZYz11IVXfJo8Tg==');
define('SECURE_AUTH_KEY',  'HgJYvpBjOaeaGEsxUblOZ1eRkHzD6igHWieGXteSP39+S9xxpufSavKu6LqSYa/r6+BQG5zYzuZLtpZKQwI6Sg==');
define('LOGGED_IN_KEY',    'iQy/0Qw8A36Hnu8X9B/zWqBJI5MyxL36cnj4mJ6Yu98MR6bS99BH4xOSp9ZOcvA3dF1XRLeaBxv1fqbdEs96vQ==');
define('NONCE_KEY',        '72I64//HwwGNCSH9/1yxss9KqHrfZ2Q4yqAkLPh8bErydwyFndrP0Vmb+Bzto49qBCy0lDwBNixIMhMLLPSleg==');
define('AUTH_SALT',        'vFuOu/TPayqxv8IC+ljC8OPUnmjvdDgJAyudm97YV/elXeLGWdHD6SzBA17wDKFpvQF79P1Sm1FWQy+WrCMMog==');
define('SECURE_AUTH_SALT', 'Gx/e7/MzJ4fYp+ef2uvLUX+O4FouSPk5kXgjqnaJrl2/J3KOGFcr6B4T6GkqXWYez+6i89Q1cAztiZ+Dx0MaEA==');
define('LOGGED_IN_SALT',   '7v9exgMW2lzLIedrOwCmRUxhKYc+TjaMV8H9T10E4nQTbH8diJxB/Ks/qXzUx0Zk+R8Vv3WyEFIsygIe+hXvaw==');
define('NONCE_SALT',       'qwk32/8QutXl5Vh1C1HYG0CE8ZsB2xVBxlh/2kB39VHSCQRhydUCcGxw29bb6xcWF7skUwn22obstgP+o/4zMg==');

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
