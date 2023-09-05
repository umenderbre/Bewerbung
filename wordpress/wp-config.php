<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es
 * auf der {@link http://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt,
 * wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von
 * wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define('DB_NAME', 'www/wordpress');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', 'yanmei');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', 'Y-potter3');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', 'localhost');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', 'utf8mb4');

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern,
 * alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define('AUTH_KEY',         'yAkP`/XE]Bo/%72Pz~cdg{h.>BZJxZmg==@h1kZ,vT0V#JVtfH,(_VOBj&25M~;z');
define('SECURE_AUTH_KEY',  'K7nmfk=}{4OD-NqvC2Q[9%9*t9McGVRL#3uT/{K}@}8^a;WGd/5}E uI9vNV>$ZM');
define('LOGGED_IN_KEY',    'K[qrN4?Wze~gkupmA)90QZLXpAG>(&n?9!1GY]/wb)2FdxqNsQe[%b-9.o2gUcB{');
define('NONCE_KEY',        ':q]US9#mq}&r?1Pv{+`n/>n0R_1sQ%eCxm!dHtuwU[pnNWTcZK;(;${y/+B#UR!:');
define('AUTH_SALT',        '&KChO/DILbbJ-DH1<!L$[:2~W20(/1=U$Y/>}Br}ZqZR#n)N}IMon>r:!#6J(,%*');
define('SECURE_AUTH_SALT', '+EOw*}G^6R>>eU*N/@[x.CK(yEY:b{%6g7XR]Fv{]x`IW)/mLE@m-0c-~f-GvgRT');
define('LOGGED_IN_SALT',   'WA@5(-Qm.)m|4?0Ot>M`:#KS;CWRrq)P_o 8^nUx@Ka<V2eY{3qfTo#${U[`492L');
define('NONCE_SALT',       ']v/Ck7}(y{f`A;?*rz)6,/+v1*_X:8k`Uu-o*Y0jf/mRq~7Enrz B Pnk%$</H*j');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
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
