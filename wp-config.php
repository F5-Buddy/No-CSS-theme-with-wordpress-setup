<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nocss');

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
define('AUTH_KEY',         'KTM/U01giUCh3MHQku,x}h]+e+D:?ipe5=J2.DQ][UogO%xtCIT!yA%Y u7gT3<u');
define('SECURE_AUTH_KEY',  'p8H#mfa_hlD_pHQX_w6CA-{CrR$QnFFUPenWy.W920n*ddO!xRg!>;2R7Ar.nhir');
define('LOGGED_IN_KEY',    'DCXEKjcP|Tbvr:4s;-TN=pu85rVR/kmYT [JI-H}RP~~o0:Nr=Bh9U.$IwO!V)Np');
define('NONCE_KEY',        'S#yf&j`!iwqTMtExKa [D%UHmYwI{PeEu;~4M:5y tjMBJndQM,>RKn?E<@iMD{P');
define('AUTH_SALT',        ' /GMXBzgt=[Br_N%IadKbT-Toz1PdyOXbi&mK^25K+165 _SAP1!ii79U>M(C]@6');
define('SECURE_AUTH_SALT', '*,b%A;+;nM =Q3=H:K*C=?lR4;1}e9P[hTg3[X<eQny7nxQrew7P`5Ia`xMp ?4=');
define('LOGGED_IN_SALT',   'TKy7|G)24fyXAU6KLR|B>2H<U;THIPH}50!Qi!@;KHqgoiw2,cYuWtjIIZ8eht^+');
define('NONCE_SALT',       '*;KA^Sl(>}4uey&|19~VTz2^YV`U],ZA<3|j1:l,.4F?~GEkO95%B#:eG(`#2KR:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
