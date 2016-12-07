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
define('DB_NAME', 'wordpress_test');

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
define('AUTH_KEY',         '/~%?Zx`wX}[Pf~[/sQ$%+ VZ?!9o`93N2@IAo_<)@L*g$8Ok>:9w@FyF7!afWL(P');
define('SECURE_AUTH_KEY',  'yx},Q!~=+X]6|K*?+MiIF Am1z::lZ>l5U&i;*U>+tUORh1b.5Axr}Q,Ff/3Bn2a');
define('LOGGED_IN_KEY',    '&LWxORfF7.x]I+OuS!|>c:&;JK6mkr9n7kP;.oDLiam9+8:]a;;qWPU_~HgLVh.4');
define('NONCE_KEY',        '&i:1=={<w t./!8l2I@9|QdT1x~~J@tY}_KX*P%R!+s(=fM)*{7kWAMA:tcmXs|-');
define('AUTH_SALT',        '$_bb0RxAv;!t|yNV=69xWrUIsGaO#yX/7w,-RIJMKe0h>Ru4PG?!:4{ezMbk`)O[');
define('SECURE_AUTH_SALT', ']%&Osm~m@LAi;OLZ` :?1xv%Gf6u`ZkCJ[}4^ZvRWVxEDciK&6I6y*A:q5e]~7(a');
define('LOGGED_IN_SALT',   '6XI2/tjNb +*})VLvk=<kW:?NIjOW2hxXmDyBlJy2w_>c}relMegt4OxrLe$w5#x');
define('NONCE_SALT',       ':zQmm~n5NB0$O%.)6+_1+5;v!7U*0J8#;`oYoSMMJ8T~+_R%WtHG.<E547qgZmTE');

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
