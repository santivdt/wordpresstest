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
define('DB_NAME', 'bookaroo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'lxBQ:RZ$&y=czm`=phv/b5M}D%{` 7YSpr$b|DR.O]5?tw@;*mlC;%/k{>f/WDU.');
define('SECURE_AUTH_KEY',  '+q#A#NTSru#uNm0Vnuw>G%+f1[^T+Ikc5C-F:(hJ]n[d$b6!v06YkvT<6/Qv>cOg');
define('LOGGED_IN_KEY',    '`}pa>2a-qR XwY%}nhw3||CiV[`o0h_is 4Ux;piZ!tDC+-zhVZJ9+OO~!i]iI$X');
define('NONCE_KEY',        '-FgJtWC0nnGu d(MEv2OFYczA9Witt(> D`sMe,]vCaYhFk`27kY&;(b]zEM~sFo');
define('AUTH_SALT',        '!vzK_xQzTo j}5E7%m*17c*@XcaQw^:(+R5;)x-Hx#OS6(mqVU!=IIo.2%V@829i');
define('SECURE_AUTH_SALT', 'nH*fbbIkPN[Pcw6;&T,EzG =~yA&JRnMEM#gw:{G,,l0 ?T*l2|Q9CzW/skk%aZx');
define('LOGGED_IN_SALT',   'X&wkA?6a9w8QK,|K~XY)vzwnydNF0L|iNBvG/q5oKltrnT<RSF;ge(ON$*5TB,O%');
define('NONCE_SALT',       'P`Vmv-ML6R]]9eZVWEf&Ud+)5:{~qex@5j4pLbr2e8mchzOFVE-oHOOBbXnDD5A+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
