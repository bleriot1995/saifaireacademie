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
define( 'DB_NAME', 'saifaireacademie' );

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
define( 'AUTH_KEY',         'cB/F,U;A(<Z0=zRVH3_dW<updwlHWu?p,Gm}<b6bP7*44(}@*O;c@$FW65JoM6DH' );
define( 'SECURE_AUTH_KEY',  '&ej,L%EOP-fuuw6:]?y|2nP7Eb~rlxA!JEsv}^j|;po_ WFb)7@!J3STs=Zs!$>y' );
define( 'LOGGED_IN_KEY',    'aqPFm6`.?h|-cnh!aBi-&E`MTLn7[^}oPNnH9e&!*mpqYkOB>e:BT%R3B2+#{,]2' );
define( 'NONCE_KEY',        '42fvC,s_Mt6<A~xG:3h=1W1Y}E$t(L0!oy?eB;uu1MtBzBWYl]>4Qly48RFVip&%' );
define( 'AUTH_SALT',        'Wa&QJLA5E:lbcuCMz3a<Rpl3d(Ex-R-u#9bH{Z2.M6h%;U^Gy07_znz}X(`o;(Lt' );
define( 'SECURE_AUTH_SALT', '~jlz&e&Q @@{u}I(~dI@ghaRJ}6&_pQ4_q+;}0tV){SeMP`M)c3+R:dA>>L;Mk,A' );
define( 'LOGGED_IN_SALT',   'iJ:P[D.v.R#/KoDkCLKYE?54rslh#ms(vP|EphD3`98M%VfK+cQP<sGR,Z=Ftk}E' );
define( 'NONCE_SALT',       '/ Las0`lE0WIi^B$3h!hZsKH6Fr>gk+>fCuOE]!V|0*p:Xsvz^T!Y?[DM~kNq; +' );

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
