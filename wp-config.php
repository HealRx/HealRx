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
define('DB_NAME', 'HealRx');

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
define('AUTH_KEY',         'Pi4C{~ao#<Z?AlY./VOeL]cJZv,w}Kb<!CJ0fsG#]F+z~!vrO5XPYpjfX3o95$wr');
define('SECURE_AUTH_KEY',  'Pv4I[M01@#^D}_KlER;B&jYnq:Rbl/w}<6NrPrpy:k%rHa+#qPP+5YN _rTeTEW>');
define('LOGGED_IN_KEY',    'hv>(KtpI-xAkZX~?%gChMEC~]_PycplTEaacQh+1 X%,6USc<vqZ&e)Q^B#txt({');
define('NONCE_KEY',        'A,+pzfis]i~0Zv.pN,y{n)D|(3Tk?4/Z$9I{NW0J(@-4uVr#IajYwRkDg7$@5c2!');
define('AUTH_SALT',        'jwXKNj_X#P>0g:aM+KQHrqSSW}8u20<ic^(oyWA2u#MF!)m|S?QSDZhI?F=!GAnd');
define('SECURE_AUTH_SALT', 'nj+FTSEU?gr4FJ&SxR9,w.]v<|-xRHU6~8vUm4~h|406b+PFOlL lp;A,/i}%QF+');
define('LOGGED_IN_SALT',   'GfKWTA8y6igJmgK)=wxzFcd<&Ug&;`(F6JZ? jrc!G!`!IuxF@ELfSAsb2PP6{^=');
define('NONCE_SALT',       'PGq7$L;{>L=k1HreO-;KOa92--;#`pkA #1^b;(d}Kp3,cy&lRgGajzA0P@`%}KG');

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
