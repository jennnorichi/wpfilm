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
define('DB_NAME', 'wpfilm');

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
define('AUTH_KEY',         'aQgo;xM2@c%Ut(>g=wpltE(>$?$-A(#}<2{EAEQ~FcrV&S,Z8.R-^w>{6@ $Gg~I');
define('SECURE_AUTH_KEY',  '&+HZc*3/w@t><(,rv@=5u,a]aRhL=adO.m$#sA}vCt.YCaJ56Bh1<-pk8Klwbpx$');
define('LOGGED_IN_KEY',    'P~qhRkQV!DmimcB/z[Ua7T`_Pv*4?K+^sxU @~,=-x`(=,Ng$R+N:w^r:dOY7]rH');
define('NONCE_KEY',        'L%-vnpFh~GI[:X?t_WJ~3Hk-EKDGkJ<tja8#{BdXB,O&yu0t<G=XBSMhLw<z9K 0');
define('AUTH_SALT',        'Lb#TCt]~+:ZA>9nq7JaTY,XzFIAZM(FLDsHh*]1# 6j%2uAl;Z+n~rDD@1:2d`yn');
define('SECURE_AUTH_SALT', 'U}th}[LOA9i]|3}.J2ll8#7-%}<1{Gs}/k]sPhX_uweEb _I&V]_XMHwF.M99<;?');
define('LOGGED_IN_SALT',   '=1+%GnfSuzklBq8kI?~non|?#KH?3#4cIW/XiX-@oPyE3$G8OUEjbNe (2SG&D=Y');
define('NONCE_SALT',       '#A,K&y!I?!23_2Sxarj^:FbXYR5l=_pKo^Ky?iCeji[Y@Cd<S#er6|OP,yVo7ssp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpfilm_';

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
