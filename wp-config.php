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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '401etpn00SCLVU' );

/** Database username */
define( 'DB_USER', '401etpn00SCLVU' );

/** Database password */
define( 'DB_PASSWORD', 'G3OX1XQbFr3mgA' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '_?}bfEnga_fh:kHQCiD?6xoQ<qUcX,GV j&JrG3#6D(2_o2eT 0GNv(QBcA}iRrA' );
define( 'SECURE_AUTH_KEY',   'zrO(&,OV^S=CJLowwtrE*=e:TVs:z%+q3x*o1ujYi%E&9j=mC.H,LwMt.$0pq|vL' );
define( 'LOGGED_IN_KEY',     'p`,cCXd)pF`;5Pedt/-tpg0]nL^5vMfwiuzt.qAd@bw}oVgF[4]N|Ekzb]]k,#gi' );
define( 'NONCE_KEY',         'xz8j9UW:<eGOuzPY?xi%H~$>>Ntl^!Gnf#j0bM+ ivHAqr0M,o lWob:u`{ItU)I' );
define( 'AUTH_SALT',         '{|JXWE+0<C8Cp6fq[e;o$5p#a)?JaI|p(G@7~sIK0/Qn] ~b:@B0lWr.EFIYOR/U' );
define( 'SECURE_AUTH_SALT',  '):Yodg:+Jf`]|RMo0:?8{g<NS}`*FBymymJj>:O<$Ve xPvsOcYoWq)nS rhjF6L' );
define( 'LOGGED_IN_SALT',    'COkXyDhqT^SYtx:5nTZ]-xn#ITKcp-RjL0lkvr=bv##`lxcYR;YXh)(:p#QzSSn_' );
define( 'NONCE_SALT',        'U:nEO~DkMF{tjUd2P50ER4.iYC=3$%)L)k^J;m~QNi4:^Jg&[2PB^l^Qq66>M]^7' );
define( 'WP_CACHE_KEY_SALT', 'p8Sw:opP2y{G*H(S:eO@In:;Y,)8UQfRLkJw<0DZhNyLdkni5F+.u8,eE3tAXAbB' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
