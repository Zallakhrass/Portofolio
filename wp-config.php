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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portofolio' );

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
define( 'AUTH_KEY',         'g(]Y.|Cbi ?B cJmRti+|kP&Tzo*6T*9:LR`:KA;4. PP9j/J*GQf.<61a-s)bsL' );
define( 'SECURE_AUTH_KEY',  '^1Eww(ZZ5+R_HT2pZ{oK/ n%=m[U+ Y2+@.j`7#s,PwQoA379. [LbJL`)uLh+zw' );
define( 'LOGGED_IN_KEY',    'PQ2-BQd2^L3,}W ]hRN`!d?EcVq_s}reKf70R@J+tmi)p9V#PTL2kJ SrK*G#Eke' );
define( 'NONCE_KEY',        'hlu<m&uF:a8^oyQ1#cW8#(]<OeV<e-RD}!-lGL4vaO6cg@F32Zz4&4%M95#2@See' );
define( 'AUTH_SALT',        '^:yhcI>_QV8%mWks?p[C94;H?yHw?a#^?1J2cSt][_d;~f i1BC{|2YDY+^B%SoH' );
define( 'SECURE_AUTH_SALT', 'Czo:/*by1DOj=0IG$B=yRhZg1k%Tq{|Uy MxHUmLyYL;B*BBR8?2 j(_0r7dfnp^' );
define( 'LOGGED_IN_SALT',   'bQC6B%Bc0{+] J[w3M?-pshP8Q0A;:ENl)EN41V;]bJ%-SbM|.7x:KjDc&mOqp.T' );
define( 'NONCE_SALT',       'w-2>(f^z!QdJU3Z6`b7gLu:9{,TH0wTjO%*{Fu.Bz4(hcdo.PJo*Bd^ l+]Tbm,V' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
