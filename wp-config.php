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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '6^T!-9P/[)}NH!gisUtXbM.PV<T:YIbPt#U,R4,qCjs76~; 1^iir<sf4T=t5W2t' );
define( 'SECURE_AUTH_KEY',  ' tW2fG-Hc:Ms]^jeR!Y#VkJrG4pMJZ(%YeE.sv884yl<-eA3LpNr-3fRqRZe*-K:' );
define( 'LOGGED_IN_KEY',    'p[)j6{Y@6Hf^sVdT51Nvv@ac)p)9$csB^k,&BsVqR6,T..F%G1QrqD7sDA3m1y<B' );
define( 'NONCE_KEY',        ';Q,O6f|Rh>WI:gM[|+OiC ~g/Ky|fZR~l?PXDlqVLru+c,v-Mk:Hp5YeeQ4;#||?' );
define( 'AUTH_SALT',        'y06{7~pc`_HG$;O9>Uvo)I!(}Gm2- *:90MC9a,B2dN:uh*=SJA09:sY,.B;#4Iz' );
define( 'SECURE_AUTH_SALT', 'i9;)A,6LDn?}R`Hk5.$>wNuMGnHLD-WZCW-nBoy(Yv&]|&-mNexn*dsKU=C!<KxU' );
define( 'LOGGED_IN_SALT',   'KFq_IPi`IJ&{M4FKuD<MH)AHT>5Sz{FC@DD6};Julw#3%JNt>#]J-Vu0NeW#^k~n' );
define( 'NONCE_SALT',       'm?.1U}ogSon`RpEqwJ.U3+>sM1:!/zL$%9hz{!}b6%.p5/7|NmK`nuqyTD-N(=+&' );

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
