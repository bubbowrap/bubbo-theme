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
define('DB_NAME', 'bubbo2018_db');

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
define('AUTH_KEY',         'bVWf;L`fumBfD-X#q0t4jVo>yi(tSJW 9x=wt(}Rbl?l!O,xiYqV)7/-/ZvbvShK');
define('SECURE_AUTH_KEY',  '(AW;pe0aE7 f1MqP^0VOAao:p. ~(DnYe?5yWL*!-zV!AsKa6pQr]TwOcBf~uf>Y');
define('LOGGED_IN_KEY',    'oP1%D,?:iVJpR(/B;jx*)22a0]6r6{]K8^h<GdSr}|C_%@UBiM4q+9- 7q0gB|Q&');
define('NONCE_KEY',        'C5%+6=WY/zM#x.7o<3;G/p&_elTZ|Bn3WH$[sn^yBO-o><=X?$(<u]5c-Kh+<$zB');
define('AUTH_SALT',        '=08r9%r9Ncy[O9+Z]qbP,lJ]^3WLr8I5(mP!cWtbAlk=!+MGdN}3+YY`i)o4VUr|');
define('SECURE_AUTH_SALT', ',@!b/4V[&q(F7*%dem>e/Sk!3Zpgg8G0/):GR2X<Px u6D;zhh#!$&L=G_<3U=Z%');
define('LOGGED_IN_SALT',   '605I8.~[/@m+M!>fw@W^-G:X.h,-*$Pangc#?)v%8+UB+zz^c]<?OjU32@~V9[.]');
define('NONCE_SALT',       '/8GD*X ]{kn/_t6KPD0W8J^[Hm~piq/J%<MJPV3m)Ejgi[|THNoD%Zyk]-*2K%mg');

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
