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
define('DB_NAME', 'rwh-1');

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
define('AUTH_KEY',         '(8$/^fr}r. t<FLc2Hc21kuCkSQ+jreav*.fcKrEeDoCKapxD;f%wAKwpz^}/~Hq');
define('SECURE_AUTH_KEY',  '7.owjusMF6g!kJv%Iv?siK> &7[{M`yp(|b1$CH6boWDt}qZuK.zjgT#b0W5N83 ');
define('LOGGED_IN_KEY',    'f*nfXkcps  m^Dt[VuS)MIZ!U9`]z8f?q6a#w:7p4&r9CdNbtR^Fk)9<uNdv{?-6');
define('NONCE_KEY',        'JXpC~gs>.bEm!JVE@<RIA{d,[!YeY_&EB*~U7VOm<DQ:Js~Z+`q/aOB!Qhiz^MV{');
define('AUTH_SALT',        'sBH`a@yKZw2#klr`wi2@$Y{hIzFU/)F9 i)`0ZVMC4+sL o7KaE+{_y!$a),=GG]');
define('SECURE_AUTH_SALT', '&B$VkGi#VgH:_qrh6q;{C+z c[R-H0j,8X*3Aw!TAP7ClNfV-ApaxPlpo-0A+S?=');
define('LOGGED_IN_SALT',   'W}FljStHawl`/epRz@=XLB,3j^<60=W7`3T)~2_GkoL1V;>Tb9_$N~!0Yt4[uF*%');
define('NONCE_SALT',       ',l`nF,c&6}sVAr2fFr2.JoxBbu$`uWJVJkqc]{7%?X& Gme1^O%yZ}-;|`;ts5Y$');

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
