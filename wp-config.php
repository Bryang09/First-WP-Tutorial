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
define('AUTH_KEY',         'Ny2X9HTN/prB60yOqM0TFvPe0410+z3JDwH41I4iNTf40vva/B6RJF/DDkLlt1vTSr/SrSSOUhkpJUUZPnGqdg==');
define('SECURE_AUTH_KEY',  'FGuHHUF+FJNivBEfxP4EHGrB9yxOQx38kpbTs9johru5ci9WnCIAQ5OAn2EvVpMMXoMU2iB9GCUabg9WLUpO4Q==');
define('LOGGED_IN_KEY',    'dh51DGJOPtNBGehK3LGMdQtSyL73VLSupj2YEZZ7HqTiM4vFPrB/kF2ojzrDUHGbo9k802ribMX94mbnRnDp7A==');
define('NONCE_KEY',        'vycvJL1qtjshEvCfABrwJTnbt9s7LVGtuWGvxxJMre8eEWldj+B79/M6pCOm5OPoKxhMllT6iIr5jx+7iAaACQ==');
define('AUTH_SALT',        '87X9brfhCdYLuvsMWWZaN5MoxOu7PGL5kXrSdont6nYvhEpnNaBbS/9Wc56Ytn6DJ/JP1brghIeEYeqcpYL3Fg==');
define('SECURE_AUTH_SALT', 'Rlcqa5/xjTyjvnIeW2P9kMYcWdJQTXO/jX2EMYozeHQb7m4mYiv6ELDrTW1FPtuLO9S1avrEchZ8wiTJQeyBxQ==');
define('LOGGED_IN_SALT',   'fEI2gdATmTgrvFOSasHFNLbNNxR6275IHfWqyU0yDPgh2JKSuI8SOfPsI/wInpttC64NBRv9eWvej1iqRrBkjg==');
define('NONCE_SALT',       'M8thfUEl8O0OGIIDCR34tHfENFiyvOf8WamwXExxxL9ihHMHGDqQUVFSufuzD/bRa9M+pcxQW+kb8kAKQHvUMg==');

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
