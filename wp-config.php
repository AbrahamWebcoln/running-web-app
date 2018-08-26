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
define('DB_NAME', 'colemaad_running');

/** MySQL database username */
define('DB_USER', 'colemaad_abe');

/** MySQL database password */
define('DB_PASSWORD', '9com309TR@');

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
define('AUTH_KEY',         '[k#YQFkL~^V5FW_5s*(Odh:wR>hwf_X1;Bi}=BP>R/be>Vo^DR1{JZXIsEhKEk-/');
define('SECURE_AUTH_KEY',  's1fdA06oz+=;Tn~S?27)94KMoE?8T=|!_>dn!]AsTL$_|l8C6Y]#0]=;5xlV$tv$');
define('LOGGED_IN_KEY',    '7^EBDO![/dExGuM@~SigxlyMcR:.uN$uYyv5FkmhiwVIlz4-%mM|nl*6Cj{)?rYi');
define('NONCE_KEY',        '[Ap(%9?JpZq[;Yw;#n8<$~ovLJq_F/DKt-@TERL~~vZ,U<@F.e8SOm. uY#8@S8y');
define('AUTH_SALT',        'H (yh&g+3Dd0=I<m1Y9O`ZV5gmuxz:Ip6m[ZUI=;_18-N)T&sXut+q$v2{euwaZu');
define('SECURE_AUTH_SALT', 'Z:BEqq@::*H^m*^AbP=PJ8Q:XpzKB*9X/S.&~K $erlut4,Cr*|=Oho#b(k&F#NS');
define('LOGGED_IN_SALT',   'Jy61l*U4Q6]wTYTWFe,a9]J.sY=Wa_.ar_$bKC-keSlxqw~2Y.BxUKSw[@IFXM a');
define('NONCE_SALT',       'B:x|2L?v@8lIM*L$-Aco2Lvu0, *-7$)09TZLMSJApxN1AE:~H|#yzn;AxbuC?F&');

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
