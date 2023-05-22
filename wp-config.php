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
define( 'DB_NAME', 'wordpress_10min_exercicios' );

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
define( 'AUTH_KEY',         '&CxpfW?(9XS3&oAp|FI7iYi9Y#Z)Le)!`04NW4_!K5Y9GS#Xg*yeE]Jf3$v>Z~EZ' );
define( 'SECURE_AUTH_KEY',  'f7F;EMC{N};gzBR[Z)P_)KU&.vHYeh1+DH*iS:4Mh@d]BY^I@+Oocj+`@Aw`(CGy' );
define( 'LOGGED_IN_KEY',    '7W[!qqwnjZ9:%2DGLt`t.kAD`C-f}g.+c]}-{%MmFw$cNWX-d!))z6sNKM.e5%?r' );
define( 'NONCE_KEY',        'h4$Uy#i2WMQS?17i)kIB@;$Ky,psom:tT3}<4iB(8hfP+=tkWYaLtCL-JC:`BN8~' );
define( 'AUTH_SALT',        'iZB4-zi9Nq$gF0+OZrj8Ph$sfh!-hL{5s<!WD9F(AF$$J?-T]g[]aF9Ym%E$2q|`' );
define( 'SECURE_AUTH_SALT', ']bET3g|3Iob>3%jJ$#rm_(69v`aU%VGwt%`Vhzr{^DH7v6`W67~6/_(-Oy&Qh2nq' );
define( 'LOGGED_IN_SALT',   '%QwrQ|pr/1^IjihXs;cXSv6b7W!>>eN8q>Z.#0x<pm.k)M8oU=Ow.w=DecKb;`0T' );
define( 'NONCE_SALT',       '3#rt.savliGZg:4;4HVnY$VYfo,WJLpM]5R`3!$r*CS14jY6r{m8{.RH:f%OwBh:' );

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
