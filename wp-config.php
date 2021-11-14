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
define( 'DB_NAME', 'projekt' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'GLs,ZHvQ}VDERDSBHFoD_{dN[gj<Hsq#$ dG?gAg>94Xy`BEF1o>xmYkFu5Y):zz' );
define( 'SECURE_AUTH_KEY',  'LdeS#Rvn#^j i,6 [pOTEH[J77moY7#V?F!!kJm{W$xT;k4%-N.VLUp?AkQSxbUd' );
define( 'LOGGED_IN_KEY',    '#xMjdf?=iu)_m5a]7CE9G^N>Vho{eNBxi2p(]vnZX*er^/cM3qjJqpA:Ub_3@z/T' );
define( 'NONCE_KEY',        'A[71M:vQAO :O~@@Ho}v=b86wq>!fq5Z%:*}g3aO46*S9^|EzNu:Kk:;m($Coh-G' );
define( 'AUTH_SALT',        '7m:(l3yc KC+t{}20t*IZM6>L7Y}mJQsyc#):FT4E<|~E2 v^GdnSU43G5Ap#t9i' );
define( 'SECURE_AUTH_SALT', '|;a[T ;HJ<k@E/N>~5A|CWWq@))(d.~FN*<H<5LQQ~Kb|L/ujq`*,{-MDY$U~Mqo' );
define( 'LOGGED_IN_SALT',   'E0k8-kO]Sp+NOPOQr6wAEl_mTx$VRf]?*=yCp8U;7dfW9rDh!7Miql`,Z6qKTw#b' );
define( 'NONCE_SALT',       'CN<.iDpD !KYub8!U7UB+$|$@4C}%QhSGpUt1IN3BRIx-]165z%r?_]7~MxX(+~z' );

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
