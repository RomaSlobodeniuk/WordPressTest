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
define('AUTH_KEY',         'nZE8(a^1QE=]GmRxmma?l!4pmXZ4)-D0n!c(;v3D=G}:4,Wb:LVH%Ta9Ey$i44~;');
define('SECURE_AUTH_KEY',  '_hEtzHg2t-rkC,=UsiC;N!B.L{V!!-?r=^g/trg?Q$a<mJxSqZ+!B)VsY{]W_*1<');
define('LOGGED_IN_KEY',    '!#8lW9T<&X.J[5_>;K;=R~zr#3-?2V@S$(Uk}]XOcH0$y/n<5zNl<0[zvo^9,;L7');
define('NONCE_KEY',        '^1g`t1T.oh.^j~~&=H*WE$NTVLMr], L|`c:@K$H !5,E(62)[KmiEecQ A_LVAw');
define('AUTH_SALT',        '@+(%?z@-q*#^9^;jSh-g[p?C%ux%-)IB9W:jtkS{iCLS|Y|^m_nu_tIj1C<0|c<=');
define('SECURE_AUTH_SALT', '!KUR?mTtn>k}q.@;q^RIgtj(AtJued){bGuw#SZp@F9(xv+Gyvm+m:BPRMcUNZOP');
define('LOGGED_IN_SALT',   'ciu5+1`<S$)` <t$OUl^}l f^P^vF5n7}b=uu#e.^@!Zb}5pk^&6ttV=k*tFs8(j');
define('NONCE_SALT',       '>gDo]+[S+ZEi>ZL3S^k<{[(i8$A#C|(y:9E;0aTtO x<wWYXn`sjAa?en$b{>f#B');

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
