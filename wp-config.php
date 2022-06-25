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
define( 'DB_NAME', 'furniture' );

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
define( 'AUTH_KEY',         '60jlBTR 2oJBGX31H@LC; 9N<l%Bah>Y:ClmwmV|))HRrFSU-n;qC?}DjIx/WvO|' );
define( 'SECURE_AUTH_KEY',  ';Ks3J%6rs<;U7:/hEhYzX)+Kp$$NEbcX3<Y$,e),6q}_dn^~lYr`~}9^llQYB(h;' );
define( 'LOGGED_IN_KEY',    'Uq&{RORAi=.x,EX_jYp9BB!Kta&nvrzP6ojyznyW:>v^n*Jic`Pf<bI/-ZF-QDbC' );
define( 'NONCE_KEY',        '`G62wg n`(|UfSG6eq1{[L;L)u!Jk/z8gwjmcdU|,7Y&LXHr!;LL:k44[@{drr2`' );
define( 'AUTH_SALT',        'h6T:4J?_$JSxlgcS<vIk7WCg5GGXUT4#gEBe^*<xH8bVN4dc2&<sG:xKBq!UQ@2[' );
define( 'SECURE_AUTH_SALT', '6J?Y^U:NKW2}HLgDQ<92$)C1-mHp:172#sU6[z,]]Y!~/gZ%8Y[G+9Y7D.BMi7.(' );
define( 'LOGGED_IN_SALT',   'SkgtbQ-u/8MD8`M~cBYVHf^,+=6B`g<=yOJ8jf#m^K?7/byr28+]y+y+T ]/Rr,9' );
define( 'NONCE_SALT',       'j[~6q_V8;=bZM2Sf7.wa, 2 EIQPM&$L<zABl`A9pBJ21(w&U=ko, u6-(pt1b)c' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Fu_';

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
