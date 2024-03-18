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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'J0E#q*,j*-&+Y%2T2jmn+@ZT}}znh|w}c/-v~|0|c)>/|@zo/$jrr8^-wCCM#w=f');
define('SECURE_AUTH_KEY',  'C|rR44<S#TO 839hoIc2t!Cc^v,B_u4@QHvCnCokx+j7k] >NIMr>T(&z;;k`,Zo');
define('LOGGED_IN_KEY',    'Yd5&MH/NO`O`i*cc2VZ[+Mc.fMQTly*=t}s%(*aIjK,J`E$cy~*j#Ds;]6fR=#4J');
define('NONCE_KEY',        '5M>-I7]#x==Pdir a=%Zkm[x7OlQ(J|@eW/u$%@W[`*>>Sv!RjzZX-MB$cFc8n|M');
define('AUTH_SALT',        '6AFN<PIyBPM@*]ex++*!/[q;V^8?sR2cv(&_nuV|q*(<BA,2#HPW#M:>l-u[;I%a');
define('SECURE_AUTH_SALT', '!F%eRnA%zG%?E/^*($LP?Ht_4ax1^-i)POuWY9 =sm*;B,++q3Q>%yyGjOA1-W:5');
define('LOGGED_IN_SALT',   'EF(4t$!5,6:yS~dVjAp@~-8%R$M;WoA)|(+BU22NkYo=|eOOPY?v$O=!IP-`8S/,');
define('NONCE_SALT',       '}8qLiNkB) [>~L5/|_Wz,C}ZbZ,g1Xa:{|kt$_/}|uUCU,jNDZ#~d.~-;&l[^4[i');
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
