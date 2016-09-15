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
define('DB_NAME', 'wp_themes');

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
define('AUTH_KEY',         '%2CT{9/;T)}Jxci(t@r<xWp{jtM<<$w3|])]brcN]QYlzW(i0-U_([})ddzGx(Xu');
define('SECURE_AUTH_KEY',  '+xS=5.1`z4~pA9&3s#e[KIK/~p/syD#a!U)d,uz#JjdTVJ)J,c)GT/vEFfe*={OT');
define('LOGGED_IN_KEY',    'JVX?YX27r_[Rmnm:7W:.#1>2)Pr[ajz]:jV%6vrqcX=<yw]MEb_$5chElr7x-7?}');
define('NONCE_KEY',        'nWKLL4U.|ObAR`|<gfIWDCslntPOt$nQY!%vo`0YuN7&myAOnY$cx4AEkp*R%P`%');
define('AUTH_SALT',        ';VDp0F?!#DGTFeba_}di=w/3TYG8es57G6RXcus4<264L5Bh=9XUpJ[}k2ndIvZL');
define('SECURE_AUTH_SALT', '0U}G>7c=uSIIGKq2L?4Cj)rrTP1SI~]8Q`UAu+mR]-#(5KtP71;yTaH-Zx6U|qZU');
define('LOGGED_IN_SALT',   '-qAvZm04Ou.:[EI31AOfA($kF72fEMhg+iw.lZoH`5E7j9n@nUBV,pcM3fa_k{D<');
define('NONCE_SALT',       'nT5(LviIT0sK0.0hHXaS,p~)O,!>:nUYg^]t>aV;[*SwvnGA]Axf+$^!$!YtZ>xh');

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
