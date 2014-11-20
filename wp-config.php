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


if ($_SERVER['REMOTE_ADDR']=='::1') {
    define('WP_ENV', 'development');
} else {
    define('WP_ENV', 'production');
}

if (WP_ENV == 'development') {
    define('DB_NAME', 'mywpsdss');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_HOST', 'localhost');
} else {
    define('DB_NAME', 'sdsswp_testng');
    define('DB_USER', 'sdsswp');
    define('DB_PASSWORD', 'BTNjnFO2JXQzgj4DsrnBewR85cb');
    define('DB_HOST', 'dsa008');
}


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define('DB_NAME', 'sdsswp_testng');

/** MySQL database username */
//define('DB_USER', 'sdsswp');

/** MySQL database password */
//define('DB_PASSWORD', 'BTNjnFO2JXQzgj4DsrnBewR85cb');

/** MySQL hostname */
//define('DB_HOST', 'dsa008');

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
define('AUTH_KEY',         '%+(bX!p|_Ucl*O5KDS6Y$n$&^lBnB-[9acjPi3C`K9VA2<,H)D-m.wBs,yo&LEq4');
define('SECURE_AUTH_KEY',  'g+3,Rel+40R-54/OmF_c|eI!1%Y#(0%n+912+U,00f5;>I^x;iafVEcjd#c_o9,3');
define('LOGGED_IN_KEY',    ']!wHWUsMUj:tL=24k-ODg`E?K_kKVU,rK`:j_SFd.1-vr.7B;g:)-9{U/919-m`V');
define('NONCE_KEY',        'qg2G_]^ }(}01j_Mp!U_XdHR6wBVkYjK{Em5[~btO~cEis2C@P/;+Fk0GXr)US}V');
define('AUTH_SALT',        '&S;?Lt$I,]z0_^|Z)EOk+~]IEZewgy01~1+~bm7~MMpy-v9.`Lf04VD68wWF)!|S');
define('SECURE_AUTH_SALT', '+~:04;ftP0oY|xD yq&8+jP$9pgzlv_-d_XY54u#dipJ*W[j*c!VOp]1Dk.]:s8d');
define('LOGGED_IN_SALT',   'wEW:eXug_8tbjpV09vf1l+>xdpzOl8$0|VtwADCr[&.Ssm*jy1;Zm]dQlW=l0iwj');
define('NONCE_SALT',       ',szmItK6TNq$FeE ~Sy>i6n;SHK`CAh&l,`!xV d[s)l`3++w$ qQR!yT7[AUm,l');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
