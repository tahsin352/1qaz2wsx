<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'hfe*]{)bOT+ZEN3@Iw8}3%$6Tnz^(SeSlq}8_WyyGb=zwxKTbHDj:&&bVHX+@/B ');
define('SECURE_AUTH_KEY',  '8.h)-+i0E@E+fN+J{;-QJ*pNZV(MG8O8-L=#p>X@L*0^(uNqp|j.=ri)e-8M1p`-');
define('LOGGED_IN_KEY',    'M{| ?`Z_To,<KCeW+||b:`,A!+)|}C|eY-tJ_;AmlpC;~O%N3*x@+ ^-[n[se;hC');
define('NONCE_KEY',        'N+z+(m[.L:t+%JPSpT vw@=0Z}w<[VqfW1#VEEF.fs;%qjI@8fU#c;Dsq!yP15r5');
define('AUTH_SALT',        '6=-?;do.=h&STDNn T|T,1 $8g~l@/:2/?^Zn]Jcl{< e!a<P.tzi@XBr-3]T/,w');
define('SECURE_AUTH_SALT', 'eJb@U+zg<64Cy&GiyfPIw@p/1AH)^*AR-Jd4UKBU6%>^:.1Kj`Jzu;{|}-+tVe7+');
define('LOGGED_IN_SALT',   '0`cv8;i%>fnrul@~5 dj2CMMLB0xD@D`Khrij# U+Y?Y*eY2@rm6A-Zv_/vMKUp|');
define('NONCE_SALT',       '?8|7LF*93w%L|JV5tt 1K%1F&^o]kUKYG |g*&x(-<C)]~{3.+k{xel!_Y*x*QwP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
