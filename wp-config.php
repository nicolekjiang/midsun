<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'mDJU(S|*OuH&SB!-h>;.9 j|Y>q[v) ae1b.g:w=CAB3,9`WokUHJm7r+.?AlK2 ');
define('SECURE_AUTH_KEY',  '|OKn5gXo.pS4Bgx$FU]D^(/HU$vN#!;E(b!T|^Gm)mGB;nJ23)s&-HS?wnus$ncL');
define('LOGGED_IN_KEY',    'yg&Chl`js1FaCC[(1Ic=)5h+q22R+%pL1c`hh0n89F.B[W`QvvrwtnuX+y+m$bQ{');
define('NONCE_KEY',        'uVk2h{/gk.RFa?yey+%nc>+ma@wF$&<e=QXju;+%zXMR{5.E.WO_xBd[VS]d+ao%');
define('AUTH_SALT',        'm<^LZXf`@hN72t3Y_e[&y&3V7K*%3NKkXab8q%+:y9djlM<=-~m;]E+*>y1>Ho&V');
define('SECURE_AUTH_SALT', 'uG^rQad[~1wx$|P8#>q1:u9LOjy=r9#98slFmMpJXhx.Qhs+(V}oC&~)C:2]yD/|');
define('LOGGED_IN_SALT',   'Cz8+P|_kE>Mp90=nT&K#|N;FiNEO+r))[Zq-_c+@$(9f`pq_I+A)NpH`^Jo+*Ws`');
define('NONCE_SALT',       'UFkYl7MlZ9a *KIF<fT* R-M[3ZF;JKir|l$Xe dN<{=#g@ T|`&oBV;zEMzHnlR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
