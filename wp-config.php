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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'OOThqq,,Rz$wV,b.*Aom`#9.U{k:~vtI|8jHGUaP+w/9==I?N7c7s{vA>m3zl8 -' );
define( 'SECURE_AUTH_KEY',   'Y In.cGo0y<G~]Qh64hfuw+ZI#H8uPRH9pq;[L?tc9AZtAqpf^,>KlE9he,PJe@:' );
define( 'LOGGED_IN_KEY',     '|Z&C((QlfqQWjrmobt?;}LPg3 q)NbnLin+}<WWQ:rc}[a*2,PK}4L2o>qQjcg I' );
define( 'NONCE_KEY',         'u,4^q/%,=qKOI.>m9Y,R(F8EfzR?/j[>Ee-tQ `YOEWtq*~7!V}h_Tjb%_OB:ak*' );
define( 'AUTH_SALT',         'QL];+^0 q0N~[1?5)k8(u?t.<1_YfZHhk2kEMSYu&u|g%JakVro0v?A9Du1:jSS~' );
define( 'SECURE_AUTH_SALT',  'd`JcA*$kpNiAY&JKBb8+$(|$e?7TH!4@]pN.WomU@j ]+,#NB C{i%^[Mo`[G<%O' );
define( 'LOGGED_IN_SALT',    'wM7$-B|FqhVp?o7}UQ+sEv7Viy3ci{frjVxarlZ6|,{cEtlEjn#5O2p}KFyPGMIF' );
define( 'NONCE_SALT',        '#M$@Q[&OEV9EHdyE@woW9;+z5ocf#m0,g3(kKc)7Iy%$Sr<wG-lieq3HOi %j_9@' );
define( 'WP_CACHE_KEY_SALT', '@IO:Koqp1vqcQ+[D/ix#n::>g[ydw7D7/.1Z)!mD9]}@_ /+]&5bmy2DlT-MpnO_' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
