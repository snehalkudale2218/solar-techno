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
define('DB_NAME', 'solar_techno_web');

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
define('AUTH_KEY',         '*|G 3gF]#]_6M{d-c?7k(l@k4_b?V5iIN5,qR|O6<Y*q>^C!?{#`:C,+jg*22-j*');
define('SECURE_AUTH_KEY',  'C?bCg$imZ{ZTp.>2h-R *E<mVHNf) 4;}w{90Dz x`&5EH0.6spha~[0D^fr9@i!');
define('LOGGED_IN_KEY',    'f3^!+Jvrz|pq;.YFjpu|5y_k#yVhK`T>w;Y_`P$R<mD=4{I9=p*DlrKkfog=&{uN');
define('NONCE_KEY',        'A6LTb?4;f.KWG(fW{2WsLb.W5ZJA@DVh>L^3J /m=!>ST/&^g+Q%x>b$4]:vuwdc');
define('AUTH_SALT',        '3C)BA7KiB}&0OC=.Cr?,(~lJkJ;h:=OOy1_Ij.%=HP7de^x3d@}4Mxy/w`Cs5{9/');
define('SECURE_AUTH_SALT', 'WIZT=&9w19p~Kmu`^=%dCmFcp^qr+QGggk|936<CXiu^]?U64~:&<vxU1o}}^Crv');
define('LOGGED_IN_SALT',   '[&/;fX7[:m_EoH.ue?_Ka@SZBzIK[u6]g#iJANl4Zx>tr/;.C78k=| R,wAGPjGL');
define('NONCE_SALT',       ':46Cl<$d7U9Y5D-TkC8 MBh=w^Td45_;c-6ef>E0@zSPE^w4;_`+ImzWU?OD385?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'solar_';

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
