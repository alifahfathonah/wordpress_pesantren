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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '@i!9od)LOeB^TmSmNgF@2- /YP5XFb2P@2Z ^V-_R@(TvP/fZ._R<N3nHJ{Rh$p*');
define('SECURE_AUTH_KEY',  'o~f%y49R7u7wjMMR#$1nL dANVA7slGK<M4NUFfOZ}y Y&d{tsXp2Mj!!yS+MSXm');
define('LOGGED_IN_KEY',    '(EGcu)N522M-(eE&@HmA@r<r24=z{&Jp=X-w=OYj4BFcS){GnSRv1|{6fQ9;~^9F');
define('NONCE_KEY',        'b`rIR]*V[g{BfY@cs<7?bR:mcLYN/k:$rQc[X#Har{f)GuH9(ZQj{J9U*5uN%x}+');
define('AUTH_SALT',        't{vLhaX&CP8Fo)u@+mw3k1U=1%r|:yc@XD!u5E/::|rQtDu(7 @*xk&n&H0dxAxb');
define('SECURE_AUTH_SALT', 'h11ieV8|P3,OsD|O_iWstAM%%yY!c]zEBn,w%5Ymr7cVSA8R8`:).Wm+8f)0l{ y');
define('LOGGED_IN_SALT',   '+&<:>28i}1#xVP0jHOVe=h_Au#z(%ci8SuB> Ql6_shV!;}*&P:|Xs!#pFR&Io=.');
define('NONCE_SALT',       '+EWfs<*;-C TR?##`L@jn SUq?_(y<2=Wk-1PCF5ci,ozA2olsI(tOys$cm^m063');

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
