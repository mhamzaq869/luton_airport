<?php
define('WP_CACHE', false); // Added by WP Rocket
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
 
 define('FORCE_SSL_ADMIN', false);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define('DB_NAME', 'mbbxxjmy_lutonairport_website');
define('DB_NAME', 'lutontaxi');

/** MySQL database username */
//define('DB_USER', 'mbbxxjmy_user_final');
define('DB_USER', 'root');

/** MySQL database password */
//define('DB_PASSWORD', 'ZEESHANshan!@');
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
define('AUTH_KEY',         'ZCL99aXm1;#+/#UZ{((5dmk3W29+(|~(3E=4QgfM0y2$xO>^$:rZ2pntBp(:2#*-');
define('SECURE_AUTH_KEY',  '_`RTtN<NO/k&($Ig1SR2?o~zI+GvE0Rboxc;~;mNL#t[5Qc@pdbM/Ks@rbsDm]>Y');
define('LOGGED_IN_KEY',    'I,6~PQ{Rt,xw<a&%mxc.o0@]i#^7i{=F+2;7)_zg1>Vbdfzeb$m LzR&caLdA^q<');
define('NONCE_KEY',        'k$tVk:]M{sL+`ei1L?-{.ragS9 7Oyk%Im {=gh!B LoG+%7J&En))66E %[=0Q*');
define('AUTH_SALT',        'bkKFx=:&]crO/ZwDJmLq&c:^c|Dpuu8dhA];%AfB5.X!wJlv*vI+Y)388n!SBsl!');
define('SECURE_AUTH_SALT', '-5F6`4(.$Pp S_q_rU6reea%EcIWd$]2Sd{AxQ}pc{hwKjSAe~k;ga8kF(/jIpa)');
define('LOGGED_IN_SALT',   'F_Fa|jYMg%Qli[[6Hp<Xw<:<j].!m&N#Z:{Wolb8%K#2=F(2a:B-Dyqq:K,Y6f.5');
define('NONCE_SALT',       'Ebso}Vjz;ih%BE~vfkDIYR5cBb]<@m-}LA8?b%g?r j`K3.Jhxo^ZhhnSdtkmLG&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'taxi_';

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
ini_set('max_execution_time', 300); //300 seconds = 5 minutes

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
