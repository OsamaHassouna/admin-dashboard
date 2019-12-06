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
define( 'DB_NAME', 'admin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '`d^(_XIh{5LicD/{!,NOLng)Z3DfE&(iIiwr}Gh&.]>/W_P`qMP[xU[~N?BG@`(7' );
define( 'SECURE_AUTH_KEY',  ';z)JJ5|Tupc{Q=xyy9Pwu1RS:=[=GSd.2t9uBmV6:VgfQ>yrz@k (i.DgfWk)@kj' );
define( 'LOGGED_IN_KEY',    ',S3w}zy^|u>5x`*kbT4o{ooMe=}gw{8_*xi<NeyyB?WQyeGSzOk3j?eI_D=UWaVZ' );
define( 'NONCE_KEY',        'R$@:~K(rb.&hK0U&k[{scYwEzedD4$?$lvB.6X+ad0;-;:GGEpog.I)~E=[XTpF)' );
define( 'AUTH_SALT',        ')%-x5A,oa4?bJDA;]xw-J5fBYETxv-7BF#-^{9qeW~.3oQia0DjRi2g]|&gJ23D,' );
define( 'SECURE_AUTH_SALT', 'kcsTDCyZFP)YDaHzN[|]UzsAMq@:7ykM(M=2lke}:(5TOc<d8)P5[fqo1g6S3^dJ' );
define( 'LOGGED_IN_SALT',   'prcmIvQ{Iy/RFtg%wWfzh{O$g;)R%&acEH`}P5y(<m,-I=}8A.@fFhT+Tj$}SFY*' );
define( 'NONCE_SALT',       '@el&2V|%S!itCKe_)c>`m*<:2zRb$%~^`Q gk# 4ns^A}_N+m#xbi%C_tU@ll?%n' );

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
