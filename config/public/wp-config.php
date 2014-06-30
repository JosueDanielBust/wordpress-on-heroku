<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */


$url = parse_url(getenv("DATABASE_URL"));

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define("DB_NAME", "dflf3hpjg38j70", "/");
// define("DB_NAME", "heroku_4eed1f5663e035f");

/** MySQL database username */
define("DB_USER", "khjmoeoxniqdol");
// define("DB_USER", "b7cfc877a785ae");

/** MySQL database password */
define("DB_PASSWORD", "d9NxamVPBhzH0Dw8Souru1x6fd");
// define("DB_PASSWORD", "db3717c2");

/** MySQL hostname */
define("DB_HOST", "ec2-23-21-185-168.compute-1.amazonaws.com");
// define("DB_HOST", "us-cdbr-east-03.cleardb.com");

/** MySQL database port  */
define("DB_PORT", "5432");
// define("DB_PORT", trim($url["port"]));

/** Database Charset to use in creating database tables. */
define("DB_CHARSET", "utf8");

/** Allows both foobar.com and foobar.herokuapp.com to load media assets correctly. */
define("WP_SITEURL", "http://" . $_SERVER["HTTP_HOST"]);

/** WP_HOME is your Blog Address (URL). */
// define('WP_HOME', "http://" . $_SERVER["HTTP_HOST"]);

define("FORCE_SSL_LOGIN", getenv("FORCE_SSL_LOGIN") == "false");
define("FORCE_SSL_ADMIN", getenv("FORCE_SSL_ADMIN") == "false");
if ($_SERVER["HTTP_X_FORWARDED_PROTO"] == "https")
  $_SERVER["HTTPS"] = "on";

/** The Database Collate type. Don't change this if in doubt. */
define("DB_COLLATE", "");

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.+l6p+*<mB*^eb? kfz+rA!Nr2~BNU(d`<Z^^/IwV GY=Hn*@]+a&#}XwJHLn<*U');
define('SECURE_AUTH_KEY',  ')2}@%o0TCN#@pi-^b.ijhpBrtptXclp>^P>|)>CTb+ljt~,h21+~*eW1h=0-5L;<');
define('LOGGED_IN_KEY',    '.{qB`IW]Y12?g|+-ZH|O8%4~hN.eV0r]y/3;E+YAJ %`K|5:fW_SN@,;Ni]=ER4s');
define('NONCE_KEY',        'oF2)c7jQ^/fnt~8GB%41mN<xiZ25A&6n:j<d5G27LZ9~uO|M!v^V*yau`,R[c7FN');
define('AUTH_SALT',        '(%rt]B$;vQWi5;*m-)F+r{s U.;CDhlk*j]`AsStU_n& ykFBw;<+xG{k$WLm[oM');
define('SECURE_AUTH_SALT', '2dDt+u5d hc,J2x:Z$HT*W(ig1gBg||t/D0$}S&VM1N+Kz59;]FE& u8:kU>$A/8');
define('LOGGED_IN_SALT',   'h{W(.d8=5kn+=}F!,WWxQ[P.Ulvxum&CtTkT1Tz.#vMwMYu/cQiS;Yb0Te+R&jX}');
define('NONCE_SALT',       '*3$zD^2lbp)iztvSfm=jqfkL]=5CpJOrkN=tmxT{3ZS(,:8Y- +6I*5.&;m5DtO ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = "wp_";

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to "de_DE" to enable German
 * language support.
 */
define("WPLANG", "");

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define("WP_DEBUG", false);

/**
 * Enable the WordPress Object Cache
 */
define("WP_CACHE", getenv("WP_CACHE") == "true");

/**
 * Disable the built-in cron job
 */
define("DISABLE_WP_CRON", getenv("DISABLE_WP_CRON") == "true");

/**
 * Disable automatic updates, they won't survive restarting and scaling dynos
 */
define( 'AUTOMATIC_UPDATER_DISABLED', true );

/* That"s all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined("ABSPATH") )
  define("ABSPATH", dirname(__FILE__) . "/");

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . "wp-settings.php");
