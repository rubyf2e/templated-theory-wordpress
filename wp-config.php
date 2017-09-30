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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress0112');

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
define('AUTH_KEY',         '?`{>YQ4?jK^R}w%&H8?Pl,.InWT.&? n~qhNT(-Gp`|nDCj^<dvLbR~Uj*T|F)(a');
define('SECURE_AUTH_KEY',  'J<1sc=S;/Tpef{]GQH1IGcFzO~L@X<V(Au/~x)z37}Z,nX[p>jSu#dC(`&-D{pqC');
define('LOGGED_IN_KEY',    '//5K<1JJe[imUIsOl&%#J,rw?N&,_adQbBw|X7#k&@;puHXf(QLJwE:y6Y88`8+I');
define('NONCE_KEY',        'q5ueFhxM,~Z*Zl0<lSu3s>*>0r$Co1L^%ZbUn]Rxk.:b_>NVEkbw0#`K?Znuv*iW');
define('AUTH_SALT',        '$4>K|}Mb>{sD9y=|K@^M)}?>6[%+>QZcoZ`o3bO:uE7htU`S][:5LNWpK@M3CMi@');
define('SECURE_AUTH_SALT', 'O16u2p}HSU+PJ!.HWn^UXgR4YD#QLCe4gy?n~=*]z]Dt(q^]{Wh%-iv8tkh1<S(T');
define('LOGGED_IN_SALT',   '8Ad%`D[(K,MT~}Dy!>-b)p0%e)DBd+IL1pFyD[q;:Z[Ay$`Z|1C~7T!B/(.;.>5|');
define('NONCE_SALT',       'ejn` WQ;Uy(aN1&&U*!P*8OVffr^??AP#Li48w:F`HMgS#BY1;IPseVxE+m,2+Uf');

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
