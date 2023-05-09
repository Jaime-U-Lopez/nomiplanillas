<?php
define( 'WP_CACHE', true );
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nomiplan_wp165' );

/** Database username */
define( 'DB_USER', 'nomiplan_wp165' );

/** Database password */
define( 'DB_PASSWORD', '99yS(-@p[9-alhz6' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'edpqgcc2g97txnzvjv3lpsaggqqm2o66vsvyxr5ruem1ukdpxaegpjyyg56bkqpb' );
define( 'SECURE_AUTH_KEY',  'ihcniwqgimkwiqutjmfihopf22lqclpkcdqydpmsdtponi4wbhlxbo8vtbuuwtpi' );
define( 'LOGGED_IN_KEY',    'xmgiemttfc91u49jmtufcllfl7j2cygwc6coqajmwk0pljdzqddrf2pttkgwjjzm' );
define( 'NONCE_KEY',        '6mhglux36sz31ygfluz443qsm6a14v9dgrbjhktoyhs9rdvlhrmqw9wsshufnpsu' );
define( 'AUTH_SALT',        'wiug0rknsq2btaov7tbsev7bzuabtjunewxq4m4r2nzir0eew9yt3rnisjs5mh67' );
define( 'SECURE_AUTH_SALT', 'nqiyaxta5ghgrlfcli2jtzo0n3lpt9xhir2gu6smgojdupytrmbttnt0kkrfkvdz' );
define( 'LOGGED_IN_SALT',   '0gaxkl0wtgmhllysusopatbhfphwqqa6qekczdihjojb4oeqaseroscsjgn5rsc8' );
define( 'NONCE_SALT',       'jzjl4gbai6h6cupkbi2hk6zn1efgptvzengy4d4v1upf10vjq27icbh8med6kau0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgf_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
