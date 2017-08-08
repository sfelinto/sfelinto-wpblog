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
define('DB_NAME', 'sfelintowp');

/** MySQL database username */
define('DB_USER', 'sfelintowp');

/** MySQL database password */
define('DB_PASSWORD', 'sfelintowp');

/** MySQL hostname */
define('DB_HOST', 'sfelintowp.cqj8jtyxyfok.sa-east-1.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         'Lxu%F~}h=@PuxH0Ru(Yg@2^wUMa3nnW%|QM-^|RRhpgAN=S]{].M+(TnoG|9>4PS');
define('SECURE_AUTH_KEY',  '?g,.SOxy~[yRqh_K|eB]dyHCUs;fn2.~li})N@@+NI7S65pC^F@[hqchi7uKEv!&');
define('LOGGED_IN_KEY',    '6,nM^<(MJw=+bM@.QGi~FuI<sBV|LVDq&[=X`Nc2X $G*978gZ0J]V]GPh;{zEQ<');
define('NONCE_KEY',        '%p)s=z>e?o8N<O=)JQZ8Dk9[-;J>] AaC|;|]Gd5dHO@V%dUnL_|kJ$@bZXl o83');
define('AUTH_SALT',        '`0jw%A7Win;rcZ3<dH{oA|gWKh3{H1[NEg{oI2b!|CIO5m{U-k%~ZVnXaM@ Y5%1');
define('SECURE_AUTH_SALT', 'YL_93qPc>!R~g^wn>7pgBrGW G9A*zo{{.e.D:FXy1Ey;:/^:{T]maEImS6ck:]~');
define('LOGGED_IN_SALT',   ')#)HM!q6sfN>G:;ta(M9GrJ8sU/v`yiv[Tl[^mX+1l`1)v )wRDQDs2*}uJ6n]b;');
define('NONCE_SALT',       'OH|o.G/sbIedc-pSbQA43Z``W]Te<98~!Ib&0}`Y/[I_IKy=UUh7cdDKE,`acM,c');

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

define('RELOCATE',true);
