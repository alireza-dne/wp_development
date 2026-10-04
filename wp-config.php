<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_development' );

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
define( 'AUTH_KEY',         'm@*^c*Hg.$o%oA0)/J+dm7{e&~2:3Wv{g[PJ=L!SpxXgbfXfmO!h03a-{MV0vag#' );
define( 'SECURE_AUTH_KEY',  'EM%-N`NsH&C<$pRd4n>,!~haJAtZXK6Q8)] a5?K!uEf7EpF$8UsVh}53tk#k{, ' );
define( 'LOGGED_IN_KEY',    'b:%+M^CFt1Rt;~,j5GJIi8mfJE-rH-a1)ZiV*;RR4j w<pUVHmF;/Y9nQBj:Dj,C' );
define( 'NONCE_KEY',        'LGIk@Ym_xW:rjgfMNX<]P1:UzC.$-qop%:wRz(?s.VmFdna09{(WZ04MMGU|yQFL' );
define( 'AUTH_SALT',        'A%s$Dqf8~)7,5_L{B_D3w5*kl.9gR~=M4)wVR}><zH$Yc+0xcB{@ [kJr`?tfrFi' );
define( 'SECURE_AUTH_SALT', 'nj$y6$sYk[HnGqEq*K}qY?:EG=TOFKF&Gb&<5}eli+r#I8y{h[g*_^,,}+iQoyUQ' );
define( 'LOGGED_IN_SALT',   '8rrj`!j%VmS(Bz|NTcEn`DzMv}H%i1mvo<e&$mt c):jYDqfo`t1{f_ 5[.PS:D>' );
define( 'NONCE_SALT',       '8XM&l-bR7[ f{[/@w@`[=jCH(w!fcR<2]-qAlLzQFPB8L]C4%avlKfuh6xeFBg`Z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'cy_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
