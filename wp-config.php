<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'mon-site-wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=B%4UVQf|n.aEJn`RNVl69+OtAa~W*EEzgBgMBc)2lQF$ZnY5*6e5m~z^Ao#Eyj/');
define('SECURE_AUTH_KEY',  'U,L+Cfr@JI^8 RA]o93ox1o=|xcwun6Kn%{cVli1}%X& hyB:eom1EMB.?]ygTFU');
define('LOGGED_IN_KEY',    '/SW|y5#V|9KlTPmj?[sRm!@F*F%z1Pcp(!/}A$5n[#DW4fdpaX4I_{F6N]Hn%(2N');
define('NONCE_KEY',        'QMbPdW&F,G[@s:p&69<I6(zRF3Lc~nFvR%NHKyJY7W3dDTVp~aK!VRspHL-&1}P`');
define('AUTH_SALT',        '10 k_!pXjzzg<o99or$P9;9paH<73>M3Hi-W%a_t)b~=CggON^{;e4lA)z(uB*D{');
define('SECURE_AUTH_SALT', 'J_kS_1R*$.:% w7n-|k~o1Z_NM-|EFnjGw0wij`)2]HaG;9wD[LN>n~[DI.DX/D[');
define('LOGGED_IN_SALT',   '&YhHe@MvJ>6vpM!}7 G7fRONpeN+RR;/{0+0lWpWO@#DtNG kpoAU0~k8z1hPgN ');
define('NONCE_SALT',       '_;[0C0_AD%4@y;1|2|Ch${Jb3Z4$`bR=@b7kAeT_h+efcMD/S-5fP^j-_&2MGZMy');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'monsite_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');