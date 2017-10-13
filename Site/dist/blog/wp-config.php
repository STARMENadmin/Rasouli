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
define('DB_NAME', 'rasouli');

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
define('AUTH_KEY',         'w2As<O$m6O,sH7H3gZ6Tg7X=DI0gJBebn1?&nAxPqB5u&q&/)&GNV9@*xg4Nu]eq');
define('SECURE_AUTH_KEY',  '3|[oeb@2Y1cDBv(H%Zwv1yUUvFd<$KB3.})iK]Fbn5HTPm!,/_c[2Cg#povS~zsE');
define('LOGGED_IN_KEY',    'H^}UEc0~m^FI;&G{b7wP qCzVvCeQ&K193Y&&uiXV[bHkzFuth|2Am$2k|PT7%m_');
define('NONCE_KEY',        '8~oC|spiH4xMm<#@&unTo+Vg7+N]4/zFyP1?4tUFs$yOQ`B^2G6qcn3~^1Ss^_{*');
define('AUTH_SALT',        'k.I2qm1^|#);+#`Fv]<,_nANn9p7[8g}P,]8XsLJf3y+MNO6azdq>YLue>HQ_}sJ');
define('SECURE_AUTH_SALT', '0kfw}]s%S#$d_ :Da~.AMBx |TRkDe?w@AY]n{H0S9^)2>;TPW8{C--8f:-@Efdj');
define('LOGGED_IN_SALT',   '{V&e+q57 zkn%wA+)<lxpc~M6M(y9mJg!gS7vG#lMR+#Vt1$}e[]d,xO%C3fv@!9');
define('NONCE_SALT',       'E4=06/2Bs3;k>HvmIUw /x9}JF8z9-CLWNsyu/)O[@OEd)O[2%Y[8 Pie)G+|d8l');

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
