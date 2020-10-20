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
define( 'DB_NAME', 'db_wp_gorontalo' );

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
define( 'AUTH_KEY',         'C~u4yk*)W^~`oQFmukWqe_4#y>uCZ!~iQc@%/.V,dq3!x=XKoaj4]KhS?W%J/,&X' );
define( 'SECURE_AUTH_KEY',  'R2MH#6C%/vI+o[lnpZPw.wz91dhp6)gRSA,DH>GWnpdq<{tL][7ytdKol5-nwG}1' );
define( 'LOGGED_IN_KEY',    '8q?ma9b0V:XcT-!C3OPN)_{YGg3p}Ugk@U.]CFt<D+UEA/S7ZzoFA6}JqbHA:rQ6' );
define( 'NONCE_KEY',        '_0m.S6#>xn:tpBjVPGqDi9Dck>ASz{sn[!UnzY#c55/o9%}`H%GARf[:q[yW8Yje' );
define( 'AUTH_SALT',        '$P+Zl5-CdV*.9Ot?V88 nJoFX_*Q4?[IqO#^-x#0^g%jT46i|E=gF@ac#E[biomU' );
define( 'SECURE_AUTH_SALT', 'uJ)y[@D>eu5sG=OTOhu47>.Fl0V[Kz$MBdR@[drD(ni<b#U|6@ez>*SS<cfqKqEn' );
define( 'LOGGED_IN_SALT',   '/=yjXRw<Rk+n: of%mq.%wk%?[6C^=TCWV^~P60<}M$y{-BIXK/W3f#nC;Elhu<w' );
define( 'NONCE_SALT',       '}Q(@cif?C)c^kB cVen8(S4Jh{W=$PD`e`/!f<8W;}k,a-VCvDhR_;r4tN7xD<vN' );

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
