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
define( 'DB_NAME', 'adnan' );

/** MySQL database username */
define( 'DB_USER', 'masud' );

/** MySQL database password */
define( 'DB_PASSWORD', 'OisAFsCrc9a64ZxR' );

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
define( 'AUTH_KEY',         'BPVOzv),CUK7oE}WHNPBtl~&3F|jijda[(-Q%[K+Y5;`E%@<QTABS&N[:6A.vt<p' );
define( 'SECURE_AUTH_KEY',  '9/~l7id.m$<fz~Dh9R<pm&pEO.rY#`p0wk.7!AgVut.pVW1W9jVyd1yZq]vib&RA' );
define( 'LOGGED_IN_KEY',    'QoGsLQz4LZRb|zZFWh!M<`!m/*J9uCl`vdW1J2v-*N)+d}qmAI]2ZI5[N,9*wkew' );
define( 'NONCE_KEY',        'glw.@ ^e4~C(YGNhYGT(pL9E+uV~wLAXhn{g8;-Dub)^d2gOcUROk~7faQt0*uDx' );
define( 'AUTH_SALT',        '0,:-$v%a$qi5Q46A-?^v{5_Wk|D@u|L1pco~V)DhFADM%Fm%/g7,k.!DiY7xHn^x' );
define( 'SECURE_AUTH_SALT', '8@/}k{#uKP~8T^lMZQITz7KOBuYi2LlxHkukyUd)La._yd];v~-0<r_{Z65Q]mi5' );
define( 'LOGGED_IN_SALT',   '/cmX}RsJ;t6@$`k@)cS]@K6}v6a2V8puHi>ly3WZl2bP9~Q:-%7d 1!x=]A^N#{q' );
define( 'NONCE_SALT',       '9[yR;T8]d7cU~U4<`)%.ulEu-LcL3W].EaR+Hg7P3!^o`@uJ^>mX6@BC4s0$CaV2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'am_';

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
