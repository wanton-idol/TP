<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tp_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(8eg&-^HMB#J}}UyFFVOGi]MD<k-rn>H` j$hS|BOwp_t0v,GSvZx=FL&vG</u{L' );
define( 'SECURE_AUTH_KEY',  'Z)*4:mBC4sS;r74YBx36&^0sJNR&8O.(63jt)Y%*%^#5?UWbc*WX@Mm>j.E +/^p' );
define( 'LOGGED_IN_KEY',    'AM+U?|8,*9;HlaU9hF[;}cvKw[nB[6~!c`^xgUc#VItyr4fMFunN{UZ.f> gDBwn' );
define( 'NONCE_KEY',        '4-kMvhv|fH2@~g2PnEl+*fccoRw:Tj%/g,dUe>G>e~yb/5Tz0fo4:)C%at1o0xP&' );
define( 'AUTH_SALT',        'h!88u)lgP-/Qp_ye9f8=cDFs-u1:1m4YCwsv9-oc49LyLcY;vcZJt$DK7iSOdt4u' );
define( 'SECURE_AUTH_SALT', 'vOffA1EH>a (hI`(yjy3~F#inPtKMo(~5!conm./&,)I)Sr[6V</l7>S?Q<YITJ0' );
define( 'LOGGED_IN_SALT',   '9&j* a[U*QY17*6U5:{1YdBTz=vS3h-~w};wq|+!HZ|CgC-cV@stJ`wl]gtq{r.,' );
define( 'NONCE_SALT',       '=@Cu^J:D>[O^YHaCM1j$_M7 RAO(o[@tcjBnMPL#D8`#Z &{t+4OM- $61dwAZ&0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
