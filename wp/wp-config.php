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
define('DB_NAME', 'magento1931');

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
define('AUTH_KEY',         'd)A{]1WVS63r?;[wD@0]&&wVv9NOs0M?)|Tt#?r<hI%mjo+n8TZ-1VJE@8 ;P]aq');
define('SECURE_AUTH_KEY',  'G` l_==0G4zD-i]#Gs8qzwoH.$jduaDN=;V,Y%N~(@%}Fg+uOwNXORVqUv4zk_L5');
define('LOGGED_IN_KEY',    'Jo*^(lbov1(E>]k$]E^Y9Xe,pp8<FaqU#y0DARbAEk5t@+G;<B@U:E_&/$IDmYj1');
define('NONCE_KEY',        'Z?Vpv6GhQ*=Q|V<zLA6Mdw=JV0malM;JKGwrHTU=D)b66nn.id{fK5kLb>[F/N>;');
define('AUTH_SALT',        '*7~.sL~AI qpBql:/bIaPOsvgXi4aap*54cjNvG_5P:iTM:ijE/q~x3P9|aDm(4#');
define('SECURE_AUTH_SALT', '99^!i<Jw}MlBD<t904k90r^oT= rv.L_*EN^PmwQH;VJ5N.M<EZm$%&bju/{lxEa');
define('LOGGED_IN_SALT',   'bkyTS{O3xsoI w!$bO/@f`{cirdS?{A@-fJT*U%~)#n:av@0i4_r1!-/>p#Q0H^I');
define('NONCE_SALT',       'sq]-._jR!Bg}[,lk5WkCI(Q-aNIOSs<;RhK8 zgIHE;xs]mm`4z.; ^9^ORf0BpX');

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
