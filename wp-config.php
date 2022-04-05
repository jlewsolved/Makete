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
define( 'DB_NAME', 'maketeDBq0ztk');

/** MySQL database username */
define( 'DB_USER', 'maketeDBq0ztk');

/** MySQL database password */
define( 'DB_PASSWORD', 'Qp603bVmhB');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY', 'yTIqfmDL9ltS]2x*W6D+ei;.]TaP+*tpsW:1-Sa9G~hl1#:xDH]w@dkC|[-ow8G5h');
define( 'SECURE_AUTH_KEY', 'SC>}!JRFsvY04@VcCJwks4C0dgJQYBF$fj0,}UcQ@^jBJ>gnNU}vzfIMy^uAE<fnM');
define( 'LOGGED_IN_KEY', '^I7B+qxA;6imP<y+I6EquXf6*.PEI_x*LPDpxWe6*.PDLt+q6A.aiLP4B0cgJ!>o');
define( 'NONCE_KEY', 'nrf}0zQYBFrgn07^muTb3$^MAIqyn7^XfEM,jrI{3qxm;.{TIP+*iAI<biX.<q');
define( 'AUTH_SALT', 'UE6*txE<;.LTIuybHO15iWe]2x~W9D+ei;_]TaP+*iOW5C-dh9_#SGOw~t9D#ehK_');
define( 'SECURE_AUTH_SALT', '@oGN}4sRZ0-@K8Gowk:4@VdCK,z@J7Fovk04@VcBJ!koF>}ZNV}^>QYMz$fnF>}YM');
define( 'LOGGED_IN_SALT', 'iPX;u+T6AmXe6*.bEI_x~H;2+Ta9H*ip2A;aeH:5~_ODKt-p59_]hKO-_xDL]1pSW');
define( 'NONCE_SALT', 'd1wOW5D-ehdRZ![@KN0owVd4@!ZCG~hl1|:krg}0zRY8F@gk0|}VcR@|ksJ}0rfj0');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
