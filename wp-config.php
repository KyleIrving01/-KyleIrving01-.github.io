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
define( 'DB_NAME', 'ingraine_wp977' );

/** MySQL database username */
define( 'DB_USER', 'ingraine_wp977' );

/** MySQL database password */
define( 'DB_PASSWORD', '[7234xplS(' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xrehpdtngxnvmtw7pyj2lcis9jtr7kbvzigj5yb5zg2bwue7iqs4mpa5o0eflmwf' );
define( 'SECURE_AUTH_KEY',  '8ikjjotrzkhfixunvd6jnacuvrkujuzsyawimyxb0lqrte6gpngjw3xihy1hhszj' );
define( 'LOGGED_IN_KEY',    'mt991evly1w3cfyuqsbmk1xmccuxfol6v38uxfl854xnltdl2kvjisakkq2cvzzc' );
define( 'NONCE_KEY',        'ds01jcqci9wbgqotjqqknx1ycgkjnrullalvuq8jxc6qznjakxonzbcgrspaxmqi' );
define( 'AUTH_SALT',        '6vffww1rkgltiggfj72bz2flpgvgdrreso2zk1yc3yerl7pmqceyaz55fcjvgiks' );
define( 'SECURE_AUTH_SALT', '7gnethhpeqcielhqohiat0nteatf1umgsrxod0vy5itugbzn8ye6eda1fnum0nau' );
define( 'LOGGED_IN_SALT',   'yry5pftbdzkuzm7af8ua6oxcc5b1ttrozzqh61dvofzfs6cxvaxbrh94ze1yaqky' );
define( 'NONCE_SALT',       'z5wvhrkvkoxywhgczhjjpgprapuo3dyclidm84k7asvh2m0cvxn4xomqqzyfjput' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpie_';

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

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );

@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

