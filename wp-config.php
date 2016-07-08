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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '112');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'IC>iIhBP96qOj_k.,(R$%/Kj=cj<c9;[g$&x<}Qhu4*{M]2u/o,Mq$Y4(IdY8b.`');
define('SECURE_AUTH_KEY',  '63gLyv1eE^$B=7xM8qUnrMSby8ZZDH0*,9qkd=(`p:.@!dhg{b=EZol7WW;%UjIm');
define('LOGGED_IN_KEY',    'N%s:M7||~f%2uU2rWFK8}S[{KS[7_DPX^ba.7N=S0-nC8QVCXn%FF-9wa>V{(=}d');
define('NONCE_KEY',        'L(!UyuUgI<Xu$y~21E3[h6X%_1R&5;.~&hKPShwY-q~wI%8>B19i0z/P=v2[a#>G');
define('AUTH_SALT',        '&vc7&mNe(x-1JyvU;),0u$Vf%j*X#1]e|~%Z2yO[F*spt<5)eT9OU[G:+c^Ya5#b');
define('SECURE_AUTH_SALT', ']EmI]bnstLO`3o,6Hl$dwx43xW?x(;KO$p|SnaG,=UR}Xo]2uOg`}.+.`-h,;QN.');
define('LOGGED_IN_SALT',   'VxA39G`+@5]``Hnb4fWNplT3/!xLt=mD@2dloF1@vp8}o:7eT7pF!X@x=$qkAE:h');
define('NONCE_SALT',       '[?(*gt%)Nk;f7;*!,BaY2jbysFI/!}uUw;Z Mu)x$)2+[~/b0YgyHQq{sI!v|yXh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

