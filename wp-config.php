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
define( 'DB_NAME', 'wordpressedatabase' );

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
define( 'AUTH_KEY',         'sN!v[N4d@#8HCC0vf?PcLD#MJ*%IbWMnZ_4~%:m|ID(A:rqV+(^8FH}^}0%?R8/`' );
define( 'SECURE_AUTH_KEY',  ',u--K8/p10<{oTVLS^/9}$`b8fJq]0aVux:DKW Xvb2v<A,<<~=Qr?Tjv2W4i7sQ' );
define( 'LOGGED_IN_KEY',    'ig)bQ$XH*3g~%0]X7<CPZ0@,p.=1=bx{g$QS0:%5B8}18<%y=S0Qda<NT[}qh E8' );
define( 'NONCE_KEY',        '9Ua=KjEaW7UB}5%q<3)0ztT7Ux_+f@.n&3iX3}*a<fW/kGND_S1<!oU`R@DG0TG%' );
define( 'AUTH_SALT',        'c+~cNC,Rr%Dc(*1XpXpk.oZwqkqx).DXoR5e4A9=H_#q2`N21v!ue> d>*bH6x0/' );
define( 'SECURE_AUTH_SALT', 'Aw{1P1bvNj  4xi/6SI|Y}k!1pxv!I8oj86beogi8*zwPgn/Gj%O, c3aChQSo]a' );
define( 'LOGGED_IN_SALT',   'fv/KQx+L#]>2-av^##DSRBt(FauP9&Ff`=V<%f 8a?QM0[&I.~=fVw4whFHGK{?s' );
define( 'NONCE_SALT',       'B*mla l^07TRB[:=RiIiXoF$4oXa~7$z.-)OwM`yP{K60&pk6Y+.X=m2@JZ;Lq=0' );

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
