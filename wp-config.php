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
define('DB_NAME', 'MoGo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'coderslab');

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
define('AUTH_KEY',         '4Zf;AhM8,04g%}&Dm/vB^RNPj^[yb)Y{.T@_:j&:Oty`Eu>Vw5F[+dm*9.I4u{f|');
define('SECURE_AUTH_KEY',  'd|o:JDE6V57$Q7vyh>A[924 vErtR$ko*MUn$ho{/)`/E}zSMHut.&ux?IVcNYpH');
define('LOGGED_IN_KEY',    '_Q>=v4c:H)*pt4B*v|~|BaTVJ<`G.QK~FD#,aY9B,s)piG~%U~mpi{bEEVG;ZP>Y');
define('NONCE_KEY',        '8Hv$?m{{0~T;@Ta}+)lPN57>tCkXAy?ebr)J=9%PuNq[<m_G >}7R|=7!5&lj-R6');
define('AUTH_SALT',        '!<w,#{gWg|(9ictnI>j*|=<deX(<T}OXd3g=PZfvW@a}w=v$=<klO;Dx`YT#.NbI');
define('SECURE_AUTH_SALT', ':~(dEMRz/?ZiFJ73J:+1Sl:u/sK#a>CpQ0fy-7q$YA%T||PrYFB5AO6Qjf0IaFcT');
define('LOGGED_IN_SALT',   '+?:/Un#m /Ctv!N2cMMae;Dpf^+|@(l|4o~)[@Ps4XJ=^8=@M[hh$lFE8W7*@xK0');
define('NONCE_SALT',       'W$;1):l&M_Dzca1 %m)qk)Y%:a/K+:mFn0<YFQakn3vUvg8(pMg3vqD1DWLH0 Od');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
