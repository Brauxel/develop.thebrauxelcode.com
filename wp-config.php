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
define('DB_NAME', 'develop_wp556');

/** MySQL database username */
define('DB_USER', 'developer556');

/** MySQL database password */
define('DB_PASSWORD', 'a0MqhR3~GBN;');

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
define('AUTH_KEY',         '6/7b0yr-Y}EjfgalP_Gb^bUC7,cK^Wv|;BMuFU|%mEY~GpsDt3 *@lvcXYH!R1TE');
define('SECURE_AUTH_KEY',  'J_m5Q5^eVbxKh#yxhNf=3*)10+Yx7]H8_$h!][l-U&R?45Q_Lo.. kwmc,~WQ@eE');
define('LOGGED_IN_KEY',    'xii&fV/#;@LP^YT$[]hv$1Mi#)p)yf.0dLpZENJrz+tk>W5oXZCZJ#zN?kVwxALp');
define('NONCE_KEY',        'q5J9%3{~QTN8[q>ZUq7]T&A!Vp8_H?Cwmy}GQlL#Cm3,GZ@$XQy7lvS}-eH*Fm8:');
define('AUTH_SALT',        '>SZD2A>;7+,%;%WsSn3%_M1^3.MY)G**iJ}fP|lwOn-w5gQwX/Ao/;&NY:kB3yv[');
define('SECURE_AUTH_SALT', '+z/3mr(=sL.^<@o^ OPnslMEP~>~rYc{F?^B6#M$zksU5zCE.;=.4#$5Elqg8lki');
define('LOGGED_IN_SALT',   '!v0-M$}#Ib)?I*r-@Eww?Y&+^8-R1x];yMpnfo}#ldwm$DMwDU+=_*7$xclVxCC(');
define('NONCE_SALT',       'f3f4{RrG0[g~-Oc1ivGPy/2($X@+0Nw0HUG/7Fb:m8t{!O=590Tok63Fo+DnDWEc');

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
