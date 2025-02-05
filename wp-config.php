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
define( 'DB_NAME', 'boilerplatelp' );

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
define( 'AUTH_KEY',         '/Mo5]{y}*8/0zS[NVvN2zcy8f8^B]Y,hO<rl>b/ f/2Y?^YS3/{050:oMHI#xC`c' );
define( 'SECURE_AUTH_KEY',  '`ytSohTR8p|j~{>@E1}KE3J[xvI~uoR@uDAxBnq52UHMm7Hns:B/^vFu_Qm4swsH' );
define( 'LOGGED_IN_KEY',    '/kMha?;m9Y>F_]gqRn0[+(]D(MhRw6#5Bx@|q>E[6KE`5@%4ho+H|Zl^4a5@UA{B' );
define( 'NONCE_KEY',        'C1ePgAi%Egm.od4?*XKUqA0h6h.qR|p/+5c-.1r_O7tu^kQNT>aEIcP:~Z7A.o]W' );
define( 'AUTH_SALT',        'nmz<w/ab!pA74noz;qZ:#roP toPOv&-vI0+%8^n=#RTtp6Blj*[o7d.Hjd<=uOG' );
define( 'SECURE_AUTH_SALT', '6bbs$%F~G}{~ta7e~!Xy%Bt%1?,!~/l()mZ+Yf9YY;Mfzd%TL`Pi`EDudG#n*p%t' );
define( 'LOGGED_IN_SALT',   '0}@bZKL&[_98&CA*@^#a^t]Xoqf3Or8F%JOIpi=fPFwHPWnoU^I6EZv1g+RVeBc/' );
define( 'NONCE_SALT',       ';bAi^+<KLy[mVI#W:n4$M<M}^R<Jc h-l+8xN1w?#H5J7!ZS)ySe2bjl&u=DKS+n' );

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
