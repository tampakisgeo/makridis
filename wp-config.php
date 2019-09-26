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
define( 'DB_NAME', 'makridis' );

/** MySQL database username */
define( 'DB_USER', 'tampakisgeo' );

/** MySQL database password */
define( 'DB_PASSWORD', '12salamakey12' );

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
define( 'AUTH_KEY',         'u<gMaLkjNA`;Ma1 <N4`GT[ND;%UR%0>N;<8v.pLG;NWG?JxZ+y`^md4?~+CA/Jn' );
define( 'SECURE_AUTH_KEY',  'fvI8RB8kpU.{}p}&ZDdq5!ix<RnQU9{<0U~ l=h$v^iUlH]VFLh;an}R6J:t6!ql' );
define( 'LOGGED_IN_KEY',    'g9Dn&7Z,mZnvy4N{:m[bb2!c5JMXP~rd50UTWa1),7S0|=0A3=5;|qbkpin@p-:P' );
define( 'NONCE_KEY',        'mR>vgCp;6t? 8K%%j3M@f.PoyC/Yj5%.7_yQY4gz/L{vmP;_HVBjAi eaAMx2*/,' );
define( 'AUTH_SALT',        '^X&6{Bmu1gMgcv+ L<ctM;g`-6Q-K`<SiFPnU~I~)h4/1.Unu+J:-MksOt~4~3Cg' );
define( 'SECURE_AUTH_SALT', 'FTR6E{ 6~|@Y;p8w29CY9@4FY+g8%XY$o<vrBdo.t S|)TPAi61|14SS|8^zHm-F' );
define( 'LOGGED_IN_SALT',   'sTQ5ovpU]eZxL _]vpIGK}GEtJy#hX.GsMX}[:6sP~85rS]@u]y2g_]~C9+&lWkt' );
define( 'NONCE_SALT',       '7aQ;&hK3 OltsQe38tkdlkvdHB?Mt7_^iT34]R%Z-NrtsG$ilG$#!J7`,`y!Uzgi' );

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
