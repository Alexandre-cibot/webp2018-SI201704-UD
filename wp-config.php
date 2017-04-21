<?php
// For security purpose we don't share './config_database.php' on github.
require(__DIR__.'/config_database.php');
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
define('DB_NAME', $NAME_DB );

/** MySQL database username */
define('DB_USER', $USER_DB);

/** MySQL database password */
define('DB_PASSWORD', $MDP_DB);

/** MySQL hostname */
define('DB_HOST', $HOST_DB);

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
define('AUTH_KEY',         'O9E]P0/L7x$Q!@G8F?)n$fp)7x%CLUzCX7?cU{$*BA.u^}kjaq;olcRN[QI^]<M6');
define('SECURE_AUTH_KEY',  'ya{cQwH[X`A_01agQIZ!-RWzapV#5%d(a$UVu?I]g:{*PQ)7~H3RmqA6t<9XgW*{');
define('LOGGED_IN_KEY',    '9-]&r_BT8nX,@78+le26sJ&is$`&=l3&AlDeK>i?;S:=u<uz.esx_S|}IerdByO*');
define('NONCE_KEY',        'X<r3irRt M^2j71Bad`gvv[}|Y/z&o$Vu)pA03c1T#]! ;IAy`ZfA[Rrm-*?|_0h');
define('AUTH_SALT',        '`h^m~?(dZ:t9LUCYQW &q0h+EAHNVG<9aX@-s7zhA>+#eoaX`R<f_~BkI!B]/67l');
define('SECURE_AUTH_SALT', '6|2Hgn=z>g/-nRU#+No4_Pwx}H.RIlBm`sFYxwzy]`x0!s$t.:K+N@h},f%pGHq9');
define('LOGGED_IN_SALT',   'RKo,!8<GHj8nDe-<qG1tmAa [qdfd5ToTDp64-)Z[{n0AhjjwV|j+0bH&!2gx5jr');
define('NONCE_SALT',       '/>b~I$~>,G=RNbpEy2 V^cd:K]&(UPCCc*O_P4P{0&s:pH]<j.:cMPRn*f FH:*`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = $PREFIX_DB;

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
