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
define( 'DB_NAME', 'wp-blog-dark' );

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
define( 'AUTH_KEY',         'W =fY@r/xv|pd2)(psGb@#aXPknPkm4#q==btU$Sv,8#kBvqdF)zt[BRk2^aO9H.' );
define( 'SECURE_AUTH_KEY',  '575OM!Yes`|TB7Y6NXg6~e}8c]9;V{2SmdbCine+TW#ShMCUEN#*e yq d-a$G*<' );
define( 'LOGGED_IN_KEY',    'W1)B[ |GPF9$N*o%<%.nORbzZ:chV:=5e%kL<_^WPBKz:!wYIH[{vR9!0M{>HfH_' );
define( 'NONCE_KEY',        '.Dzr:$7Zcq+y5^oNYS6E@HC7TIqGCSb/H!<ir;@aF:its-V=!OSnN.*,9Ar]}Abf' );
define( 'AUTH_SALT',        'gbozuIDJ$wBAI}jmg[2_%-y~J@`FppI44)o]*M+T}S?Q$,Cm{S;ywcw^GVQ&TXW ' );
define( 'SECURE_AUTH_SALT', 'vPRb0NjfcW!BUJ(#.AVQqQ>-ax]^`[EC+<sABY?e92N`WB$Wa`-k;8.%]He>>cPo' );
define( 'LOGGED_IN_SALT',   '{m^.$w#;yO^B5:DT2T9x?9GJvf#}OHNFvD]|rmPB#l7l9zA,16an}Cv(le26{p`Z' );
define( 'NONCE_SALT',       '4t#Id,%Yes:.ci9a4/DW.8sn44OZ%.-3~Vo@.0F.0DAO#b]X&5^(gt8.L1}AL%wy' );

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
