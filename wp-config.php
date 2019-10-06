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
define( 'DB_NAME', 'db_kodekoding' );

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
define( 'AUTH_KEY',         'oO#AGm1NBTpYtTr3|UXe`tYm?LV`l_ LSt;T?2#sO&{c6W{[xP.eAY^QUC/.T;MA' );
define( 'SECURE_AUTH_KEY',  ']OO1W(%c4Y=+qOD_8<=vs3h:0~MSpRAt1mvLl8!NU;kk!*A3Vgt7fa&vC2,o]`w(' );
define( 'LOGGED_IN_KEY',    '*{+/Do|#&<-`qn4=OM77K>[Xbh=:8se4T7eaIDr2;-O/c;s8,!kZUr# C7f6h*VR' );
define( 'NONCE_KEY',        'JP3F#z#&.g$+?2bD{d$JG?>xg:7~@??5bWk{iH_pB?][= MKl2Il xN>:NOKt]jt' );
define( 'AUTH_SALT',        '#%Z1*XLVdF}u(lOw8@y1c}~<vU6`1-YM;.)0V84t6y&Z`CAu%jAz+lWX+3}6U>sk' );
define( 'SECURE_AUTH_SALT', 'fWND}ID`[o:537V+=xnZ&`;V^Bk9Ym,eCe=0Iqh<Dd*0@6}O4BR7%pI8:Hf}jh*)' );
define( 'LOGGED_IN_SALT',   '_b=csr5x<J:<qM`-!=,`}g&Dwo$,;{Rs%qy.EzMeW>|j_@0oI~H0,.ZS}5`>1Ou+' );
define( 'NONCE_SALT',       'ubVx@L}wixJq92?H^Zz^:TB=*o2@{[x]lwg)k7.?<pKF?.m`c`l<T7gw{HNBR-U{' );

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

@ini_set('upload_max_size' , '256M' );