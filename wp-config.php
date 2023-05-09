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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project-4' );

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
define( 'AUTH_KEY',         'f`9(tt&{(|{E7ErHg&k|u{]*nDH8CR=CA)[b}$i_(oAtY;c{cVV77Ah[x)*CR:[2' );
define( 'SECURE_AUTH_KEY',  'Kz[BVcE2JJLP4@LoL%k9>m/3Q;k0{4_!C]tX/$VF[d)aojp|Z~ }_M?(fKj@^+Jo' );
define( 'LOGGED_IN_KEY',    'zab:/%f#UC2>q`wZUo,SbF(..[f8_f/(Vk$M7,vve-2a^%J9u4uO^{V$a#Xr^YvC' );
define( 'NONCE_KEY',        '=0+:q`|I].*M~k7JpfnSv~*`H)QWLVFK;Lur/$n)rZ>w`UC7P%n~JIeR~-[#m;g]' );
define( 'AUTH_SALT',        'X2#JT.1@8PsH>8kS5#]l6x^[ak|Z`BY 9B6X88#q2~EVT.0U)OT>xxoQ^a)TFWV_' );
define( 'SECURE_AUTH_SALT', 'QirZ=buYUQ<NxZr7~K=EFB+$]DRA9-7*AAFKD0I&e>orP4$Qczi+M(_ffox]:qw.' );
define( 'LOGGED_IN_SALT',   '$v/@u8!p+&^RZ=$vT*{2%Dj>PaJIC![wf{d^@9Cb<fu{HLR<*`>e9X8v*y&NFv+c' );
define( 'NONCE_SALT',       '8YCP9=`CBjz:A3vB,QLNj=4V~kA=OKJ|Cn@k82ts~d*g9H@vU{QL<yyD%(5[s{7U' );

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
