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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dienthoai_wp' );

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
define( 'AUTH_KEY',         'q/}1qi(pWk<shs<m)BU~$9F;dA2iC,6AN3*m{/I!PoCeF[HBUuqjTNwb&v|g38=3' );
define( 'SECURE_AUTH_KEY',  '^>JQ^knlx@K9~*X#6VScD,?][J?qMSuBBv/13XvtwStbiXUig*A!1h0QQ)>5%mp4' );
define( 'LOGGED_IN_KEY',    'WT#1;}u#qPTz]0d_t1P5[,lNRd>|?Z2aYme:Ll_h{!5}nAk2KbD)RIZ87DkO{E4]' );
define( 'NONCE_KEY',        '=xL:sZdnICcl+hz^EnwdstWNrYhC|CVZDii~+C`i|ICC?bm@B{9<6a<F:U*5eSoF' );
define( 'AUTH_SALT',        'HFs^eq-nM0IC3zkH3qB0,.@J1SiB7dD`}lIJ7xbjrU0n#X#+Nam/wx34xI12Dp9t' );
define( 'SECURE_AUTH_SALT', 'o:Amjh^k4{^CMzBPZ;f#?aoqVXgS|jg.+/~$<g*Bu`LCM.5o9jEMX[{&YS>7y*W@' );
define( 'LOGGED_IN_SALT',   '>$,$j)-cAJXUOOYE ct73#rJ7DM4;,9 >kGN6r~$=?HmZ)oD4@nUjj.&Ff5f>U|J' );
define( 'NONCE_SALT',       'iJzJJAt+()@0c9%VI^(,mOZhn9DC1eTelbuvBMfI#]99UZSjWcf{5k<$GV&?&VBD' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
