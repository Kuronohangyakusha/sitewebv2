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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '(xK*^J)/C:SOhF=q6L7KOAp7!.A9Ja]km&;%6^GFC6_lT;o$mO>g9BWFunNt?0T{' );
define( 'SECURE_AUTH_KEY',   'ptF?fT/tz8e $6p[.4*UDJN/p3q7:QKt5kjJkGu=]w6ik#?-u|zVzP*Cca%g5MLN' );
define( 'LOGGED_IN_KEY',     '>YyjlfWDq}0CG )VvO<fO=3<@8%ZBKGjf0?EzD^Y~D$4#(i4*VH8,C8BO!MRE./u' );
define( 'NONCE_KEY',         'JnJ,WwzY)w>YOxC/IY*F|H/IJd(MMBAsYjHFmTB%0&* lu1B mMVoW2zTZj:meBx' );
define( 'AUTH_SALT',         '}DMC4YkBD/n8DWBe1M]:axVOZvc[bDd^9_3}[f.81C+ni&M9@SId(cKYSylS9NB=' );
define( 'SECURE_AUTH_SALT',  'WVEgq%{ap%D$tIp|F&<K7;rJ7_bJ?h=FLR[F&lk|nV0n_a]NLd/E9/_TBKy8a!^(' );
define( 'LOGGED_IN_SALT',    '(Ps$a21QmzFPMP2vUozsD;$wb,rx~$rHBD/xEG9-[P8=*W34Y}[$q~k-6`v^Jn=a' );
define( 'NONCE_SALT',        '-)mC_`SQ~dq(bm+! zH]J)-T_D-Y>tuSG)D1mj&+Dfk z6MNN!A:!mn}1ffpv=C.' );
define( 'WP_CACHE_KEY_SALT', 'TeyL9yTq;L_GtA|FIYet<Zh<a<U(soUb9^HuXsU7e%=q0nJcv+Sf2rOB@x=[L3y<' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
