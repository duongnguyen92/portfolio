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
define('DB_NAME', 'billing_cs');

/** MySQL database username */
define('DB_USER', 'tavandung12');

/** MySQL database password */
define('DB_PASSWORD', 'Duong12!@#'); 

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
define('AUTH_KEY',         'K>+KVC0jAIN= ^=*fn.d.+W{O3R~r(F&Uy9mPcnv=,-fXkdXyMjD+SZ4}.6XI=f}');
define('SECURE_AUTH_KEY',  'H6fuz@PmuteYf(*u~0H5:.IXF0Jo8vDHS?-Acz||^o)ezHh^~0j1hsfXku*10}gb');
define('LOGGED_IN_KEY',    ' |P)9R6-*?ru/{a0 H8TsYQoEIQJSnF&T_ B6$)l9-J[2%r4%8dy/r!+#.Fx:~1r');
define('NONCE_KEY',        '|3{`TA+&)2~Hp!k|;?]p>^(<+W:=|{cqZ,q/aoXZ0X_1KN<FXc}W-^K9g,n<^Y6A');
define('AUTH_SALT',        '-f+XAk:UC>QZ5rt~]}@>^CxF7UI=by_ksE4b~eQR/-Or%0TY<V0xJA9 45RvAL-f');
define('SECURE_AUTH_SALT', 'bb!1ZRQmEb,%ucXzO-{_{pZzwr.QQ~&c3Umy8=Gw:^3-ld;7#A(39YW~U0(l535g');
define('LOGGED_IN_SALT',   'r8j2syJ.5^.USihi$!R>?voAt[Y^yq/+79:Fq`aL6-kW~YIXe?{2.XjD{z2=W/(U');
define('NONCE_SALT',       'XT>Ls}U>~^lt~-;E4@2[P5@keYOA{BHN$0@~a`Fs8T$l :q=>AhK-TnDt7c+IHLT');

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
