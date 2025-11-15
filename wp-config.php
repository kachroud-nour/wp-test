<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '!q#GGa>}9pddaPgS=-|~L60=_`U@;n4eZRSDLc/iSA!v^XI7l~Tz3Y4+oMJ3p/:6' );
define( 'SECURE_AUTH_KEY',  '-Yta!@[wcQD((LtX#{ok,UPJ>YKP>&;X[~,OxYOPUu&[eGG7ejX-sWq.?Xi)*M>%' );
define( 'LOGGED_IN_KEY',    '+_XL|dQlR5i-APPvq/I;[f!Ta|0Ex62btOwSGI-gL*<j$}Mz|[SZvM=J=m44JG&]' );
define( 'NONCE_KEY',        '3yoV.Esn[#xwmy|9GoV Z`FK}<//_:KizO~(:3L@IimlCy*mk$9r|/~HFt1Ohqu0' );
define( 'AUTH_SALT',        '`>qm6MDwViyamXh=0aFn;pK4^XZ|]<g~N|sx{eu;||c<u%/*E_~{l8faB/T%~g-F' );
define( 'SECURE_AUTH_SALT', ';etR*Fn:cww`H$Xd+@Fbi/+4_PuAfN`f/X;`}qDLsMV=@nA&bp5;0K=Rf mBkEOw' );
define( 'LOGGED_IN_SALT',   'jB(@.0_GnN%xpue]Qj#_32xEH[lvhUaqY-N>|hBm#z~dB;Na/s}FKiV/mp]M+T_X' );
define( 'NONCE_SALT',       '_N/V9f[nHI!wOf5D`C<nHpe+ pXRWMl[{|V4m{`nKVVu^@Mh~A_DWwVKvty{$HVN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
