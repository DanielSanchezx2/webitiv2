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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webitiv2' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '20948b6199d6e290a51d5be6995f6e85aacda56f21b9cd9a' );

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
define( 'AUTH_KEY',         'DrkST(y(wEK?(0/c|%#F-CHJmLg69f/.jGFnsSO8Z-*L;.l{~5%Nxz[D;ec5-XRb' );
define( 'SECURE_AUTH_KEY',  'J@l@a-+EXb~V{r(:s0erTk[@Num-@>)A0^+vQu};^hiFcwZ>qR=iA`C-T2:_$G&5' );
define( 'LOGGED_IN_KEY',    'L@}9ZFS;%)&r5):$Lk*T.u.Wr3)Y<!BUlhBMqFAylQ&Xl+TWXutu;D!%{bz4q>D.' );
define( 'NONCE_KEY',        'Vag*Rb3|fY)rny$9*[l,{`heqvirYZ.;N<EEkP<Ee^fCy+VuOX#3~;_h8yMJ*/W9' );
define( 'AUTH_SALT',        'w+W=Mv4rT&&4/~k28b+v;2x^r}Y}E<.0E9e8zoq3m=.1dvK7@8MJ}Tg$D1p[,3sA' );
define( 'SECURE_AUTH_SALT', '^u.HLrw} hwn,@M,!hk7:vUb#nEmc|&1=VOVqb]bVPtbY10 dY^!8l;V>qx?Q3,^' );
define( 'LOGGED_IN_SALT',   '>d*[F%l,X+ST,7lCkWW7eQO^Xa;rUL,Y6FQ1>q85>F58rn?kHL,}Z9pI9WQ$2w](' );
define( 'NONCE_SALT',       '&FUx5>I;vsKz,aFgm(:[{@= NV=}N<l*YemZnxd26#l@:l:-t->CZz1/uhX*6nZS' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
