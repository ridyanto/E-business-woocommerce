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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>g,`nym8;%>>UE:maFoVW2@#zhQM[tToVjm?.]cVo f v1:uKnT-*K7>y8kTQ$5_' );
define( 'SECURE_AUTH_KEY',  'l($UpI+90Pg#I p8mH)NJ}4j]js>5p{DW9T0JoT;Y!VTNzk&`OE]uiIl;-k>xYVs' );
define( 'LOGGED_IN_KEY',    'rb>8UeR#=%+D<,f06=_qj?^vkE#4MeAhan(79?gn!*[wEyJ2Py{LrVy5y7*mca#S' );
define( 'NONCE_KEY',        'ARAy7(=fAJGU=@;?e#a?i|/g<k-N4#DgeYW5)wJanvL4Pk}@6cL]m<;1q~Yr:|v`' );
define( 'AUTH_SALT',        '_6pi18TjL[lHt7)A`C=U+S#l2M7=qi4Vu!uT<7hNi6cLhc&{W!A{/x~YVDRw&o8}' );
define( 'SECURE_AUTH_SALT', 'g:cbx.#XiyfN+lK`:/P[DSn)(~&u/kSH.4AmYzt)1uAZn,:-=9dq7h[t3DNqKE9=' );
define( 'LOGGED_IN_SALT',   'k|X`kT]IJ9*zt_8e&sHv21M3RY(CYlZnuJQPFD^]efb59h5Ct8O<^H^eox^5TAdK' );
define( 'NONCE_SALT',       '{(-=.Q|=Xa8/H|y?8@bTKshO5n5H8azvy!ee;3R2. ?XK%;c.R6Qb[OcI?&g++PM' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
