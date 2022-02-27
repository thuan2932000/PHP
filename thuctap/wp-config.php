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
define( 'DB_NAME', 'thuctap' );

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
define( 'AUTH_KEY',         'yy7*nY]LOdi<vkJ w6M,%uU?}*]:Z/za?G/;iN6gnn:JviZLT6xRz!Y:]~1E%>g5' );
define( 'SECURE_AUTH_KEY',  'rk6$8E/E9=432Vh<QkR1-?V#)npL!u0&i4<&k(1ebl<Fp:xO[!FE{L{&H#Vts=[e' );
define( 'LOGGED_IN_KEY',    'fzFW~6+O7cbU5+:%s#%IJwe95ZP`|7AQPi^985ITHHf- .{>H0)l6#LO%f?o42bQ' );
define( 'NONCE_KEY',        'DorMut>fsVM=+^)@Zf1G]w6!Ce^E)H|1Uh8+jB(]3 >]i8;|V7y*u!F|Y6Vlv|g-' );
define( 'AUTH_SALT',        '.^`w$p!>l)WYc)S*X7<$.02oA[8o^*c`%fL]vnen=Z{yeu9&{U^+QIawj7nBhilq' );
define( 'SECURE_AUTH_SALT', 'TI;e.vOKT_bg+p@+hbmra6;I$CRw;-*tTzTN=vXaNY A^|6_4-r~|6BCTOD)7MjA' );
define( 'LOGGED_IN_SALT',   'sLLFwmmC&H2{%J+}G=>(7Kl7iBOHVG#RVnRZL6JCwMi@5+)weB%1r6|J>kghhI:{' );
define( 'NONCE_SALT',       '[_5fh@i9ie <Ho>7h`bemDS|jfC&Go+Ud,P G!Sh@LDN=b@79n3NIis<G~H7hJ,r' );

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
