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
define( 'DB_NAME', 'studentenkamer' );

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
define( 'AUTH_KEY',         ' /S=S3Lks:/att6HG0`Z`lp_8h3!hboQZMo//5+IA=/L7#<<g{kon_r2#@^:yNRi' );
define( 'SECURE_AUTH_KEY',  'pxw6b9{k1A8&U&qv$Qr%dOM1/`eaZ[F_&&L&Q5:t)SGtr]oIXc}712DbT Ri<xv&' );
define( 'LOGGED_IN_KEY',    '@beSXl=4k}ZVMdot9U;A.Oenl8/6# <va2^8+sR?Kpa^q!M}3G)u^Ug(gm&D2s%h' );
define( 'NONCE_KEY',        'b%/, .arsHr>8a/nOKJNEYZ-4~7^<;o,>FaoOQ:lw3Y!moBOrzKO</|kPw1G;(jL' );
define( 'AUTH_SALT',        'ZNbf;VjKsR#vzjgg3*]M0/_fyj6B`N)q*sU+a{V}=)JCVwStM X2&av!B30j},$3' );
define( 'SECURE_AUTH_SALT', '#z_pk~$8gM6XVFP/)dI-W}N<DU5Wueg[>qg-1/exO]LV7AOyp[BwZJ6uMd;E+)>W' );
define( 'LOGGED_IN_SALT',   'Zw(0xIzZ_)oB/d&Ns*d=[o@g5=qa%FU(#SADx7fqR|%/eWOT*xL&`-{[9&L{#71>' );
define( 'NONCE_SALT',       '$f]ynN31[7!B.plLvt#dtYBe&viMUYfhN}a>,Dh>;5+!kN6;-{+`ckmbgSS~2(hc' );

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
