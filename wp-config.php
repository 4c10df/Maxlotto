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
define( 'DB_NAME', 'maxlotto.local' );

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
define( 'AUTH_KEY',         'Rv]2OPV+xYD/tR`|=ceFf@)PR{%[c*FZz$Tk?)%%R-^-K$S[|#H:ix;6Jl+$0-Z*' );
define( 'SECURE_AUTH_KEY',  ')7_=#vPQ7`)d}i.TMhFT526ehxz;hY;`=p;:pi_:>J{%~kyB_k?9i3-DG^X*A_iy' );
define( 'LOGGED_IN_KEY',    'jBQ+?(wdO@b=|`Wcnz4y+R3x%!_d8&Uz^n8[k(].<&pQF{Cv0*lz^qzs6Q}C!($~' );
define( 'NONCE_KEY',        '!.uw$R+`>;K$8(Ys1Z%CB1la4;OSqg(B[wIa!^iuGGm$[aiO(2@by+E3bGmIzXt5' );
define( 'AUTH_SALT',        '.5n~]*.;JL!:YNFW&aX&)8ywOiO*(pt9xbK,>U/Hb6#`WakB=J3<m!%YO6ZEq){8' );
define( 'SECURE_AUTH_SALT', '#y!4-F?+E:p1,:B?8LV0k*<oSr;m.dI/dg1cH<b_G$ I{iqv.&!hjL7;AXZe+zxa' );
define( 'LOGGED_IN_SALT',   'pZzU;q~U+<alTn(0{h=-^a +X&m%U)rww};t}{0_lM-^;uzxMNSkHzvTS2g2A`=4' );
define( 'NONCE_SALT',       'n#>A~~[D(H$znFC4^HQq#?A#[=9CJHYWZ.TWJtN2n1cO+@gZ;PM/LjNQ>KPXo|4;' );

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
