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
define('DB_NAME', 'browserq_browque');

/** MySQL database username */
define('DB_USER', 'browserq_browque');

/** MySQL database password */
define('DB_PASSWORD', 'cTS(9(p6f8');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zpwzz7a8rv0cktljlqjjtzpezqnhbghvt53qh9kc9rcadnb8fij0ursyxj2o4mxq');
define('SECURE_AUTH_KEY',  'hjn3n4gp2r9eidn2wbbqpeyvgrrw5s7jpohfaozxepj3ymdhko0k875zmnnivxcq');
define('LOGGED_IN_KEY',    'w1wqg6nrgghlf2fcysi8urliernbas8fpzjiapkmromste4z17a2oltwdqduvoef');
define('NONCE_KEY',        'afqynw2fjswvjyndoytwt04jefyxksuxwuf4lxmb21khcrpnyscmba0jxno1qvg0');
define('AUTH_SALT',        'qavtz0raojye9pimcp9qeerybmnyg8shafmyqqyathz04kklux8oepaj6gq73xaa');
define('SECURE_AUTH_SALT', 's33jfomqlcmpvfk5qlennqlfmihzvr9uwkkhqmoprlt9etuwbxw7tz2nvueltngk');
define('LOGGED_IN_SALT',   'rspwyzemmyxb8dl7fo5vu3bemi5bsvktqugz8wi5akhnylejmm25ssbih3rtadrf');
define('NONCE_SALT',       'duqxxiz0byksvz6zdvybxwc6vajab1cfuxbmsrquegleprdpmype8tltryz9dtbq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
