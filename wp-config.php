<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ')<BEPk9fHwE}yv1C9U`@8zSq1lstCz{-u14/`04W`Lb(3^8>&>@1v2`UP1M@+DtF');
define('SECURE_AUTH_KEY',  'Xtlid/lC+tKXc8x|-Ge(n~lG^hpBct:z|U!}ei)7OF+s8Y0kgV&M!O{:I}8;qB`p');
define('LOGGED_IN_KEY',    'fChuQYwcB=+^lHU03A}xC+Iuw[;<Yji:kwbw-+9|;`04XV:p;]V$[i-heELTJHva');
define('NONCE_KEY',        '^~8^gCq+J. R/[RUU=EF|zt-M6*%s(|@D<m_063WxG9X?sp-^y2i&Bls%{?>}NJ ');
define('AUTH_SALT',        '`|Y_gIN(S!|)XHKR5E%Y@EBamFIB4qw+D?dCo3b-0pPeXi:IXEX;9zK9O-{k9h#*');
define('SECURE_AUTH_SALT', 'I`1+r5/wG d#{zvAz`.)]H{l|RpMqU5^53V$@^5+2*}*rye?HeewYr{Mku|n45TF');
define('LOGGED_IN_SALT',   '*Dd>>i_sg{O-F6CQUuQ$mn*su+?u`p-(uN(T~2gw.n,U,QY2.2]-T|UV_Zcfbcs}');
define('NONCE_SALT',       'u<-ZsN{gj8V;2+0YMNuE=0SAXeEVy^5{ls5+3$MS;X06Kfy&_+6nILTQD`I<y+Nq');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
