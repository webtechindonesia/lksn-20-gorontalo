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
define( 'DB_NAME', 'wp_gorontalo' );

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
define( 'AUTH_KEY',         'z0[SsFLw:}rAINc-_QN>`!zL8{N(rJH=Jm=q!+0>7OQlu<f9A2X_PM-WR^(DG}G3' );
define( 'SECURE_AUTH_KEY',  'E|-r^$j:1qQ!f|%#t#*)>zU=opef&:%A#UUws1VUe0&~>w&Skz7]C){2#lp2xGPc' );
define( 'LOGGED_IN_KEY',    'e!o0Ke`W~<yk2jK[JHR ]gY~$t_.=h6J7+nXX^9B1;Y!+mcJ-MV{!*G?JTSox6n+' );
define( 'NONCE_KEY',        '.wq7JUIr1M1D%Q&-TgdL;#~2I.xwt<)([ah/yZKJ/1bb*lQ]cAuJ2|?6 ak[FZav' );
define( 'AUTH_SALT',        'fj#T{3?k?q`r9z ,GqUy4m/F*JChc_g6fIXI3Ur+Y^zL;wE3%1|L&Yd:4%&`T505' );
define( 'SECURE_AUTH_SALT', '~M<PTyEjd=Rrmyh9AlUm-W-bT@E^aCcsw<^P!2~8/dU^,wv6}Rt&^)i(-)*Z5EIW' );
define( 'LOGGED_IN_SALT',   's!Fm`KOMhq7[6DN?@P-^zZm&w=`3X77>hayFtUr+-VrdgJKD[i~{9!QK%|vE>T-~' );
define( 'NONCE_SALT',       ':9jK]I2p4#*2HiOnd7o|-Rbu*}G TvxH7N,D*mv4lQ0vh@0NJ@wEaW{`dDsY1Tc;' );

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
