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
define( 'DB_NAME', 'suleiwordpress_db' );

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
define( 'AUTH_KEY',         '_>+[5XP8b2wlmffTi-At{2woQgj|@3E3$QUfH%NlL?HOr;&7x}J#hN{#o5FL*)5-' );
define( 'SECURE_AUTH_KEY',  'k8nSd~-2bNJfxbESM}EpN|;-W*140:!df$%e()K%N3B(c,s7yv9Z#VkVVc%F*|77' );
define( 'LOGGED_IN_KEY',    '<r}n(bc|Of(L{M=JWM~*~g3p36P9.N*(&-u0+U@+Z;}&JdYS1P$-hZi}!Q7`!2K8' );
define( 'NONCE_KEY',        '){I,wXAuFgip@Zjh|)vAz5|#qo>Al}5)y2S!6m:z2=mLEBFF)O*)FI$h`GtV44v&' );
define( 'AUTH_SALT',        'DvEMa%7G[F(YVSCDS>h-Cq4qg4>h-68oXpDQ{pufw`nH/D QJEad)OZBmfZvc3P2' );
define( 'SECURE_AUTH_SALT', 'z.3m^nx<<T@eGol%w(9lCgHJN/J]d0:eCf<17PhIZNBjHNh=XK|m:J-^&qT}Ns4e' );
define( 'LOGGED_IN_SALT',   'Xi%PQebZQ`=UR&Rm0oi>^zF7=qn,8,[IwLt#K45z%W]c9_e~<8Oo.~ &L)`#W[WW' );
define( 'NONCE_SALT',       'Y|%{YuT&RahIH*69q=$-feR!Chylqfe7=2tqHEYJ`5%~(m?aEh3%^UST+zBCZ9W;' );

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
