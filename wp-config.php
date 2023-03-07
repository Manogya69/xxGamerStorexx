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
define( 'DB_NAME', 'xxGamerStorexx' );

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
define( 'AUTH_KEY',         '$/IOCIbPR|`kO}$%: =fvg=GaDgoBQ)^Q^?X{mOs/<S2O SDm_Uy[Y<M{/R*r8|7' );
define( 'SECURE_AUTH_KEY',  '3`%TN5&F(qdX$tuDBA#n1#V5ii!C-vG3@jKw:uL|m!;t3(!Rr@Zn]BU2pUM5bz1L' );
define( 'LOGGED_IN_KEY',    'E0[`vR4<s-<!,Twq%[Uu3s>Kkd85mw`wxQ[D3G=#2K3zX4`H*@.g]ww+3NrxP/<m' );
define( 'NONCE_KEY',        'CR#Ln7vH}iAFLWSfx#P0M)ELHBk&Y?LUS:zrIy107w<e72D;zj)@#)r-n8htUC|S' );
define( 'AUTH_SALT',        'hVVf-!FAX3&URAl%vWbbs6fx4S`<&7z5KZ?;Q.=&ZL|i&<[WNJBW`0?<VU/knM}=' );
define( 'SECURE_AUTH_SALT', 'XBw&V7G19G)!$_E1fV!g!#n_#ErDlj=1Y6NVTb^)NR>GeOvNzEKJ~wmE|{Y|~PQ{' );
define( 'LOGGED_IN_SALT',   'Y*oc3I]=H_(p6fX-n&l,VA[tbgEO$mGFzX^CvVh#%V}~r)OY=_j(`C2`^v:?*p3!' );
define( 'NONCE_SALT',       'Skf#e[p2RC[LB>CgD -9w>OSeo}G_k]2vfkdLL&cDV#qJsmqb,(nuavb.bS+lI|;' );

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
