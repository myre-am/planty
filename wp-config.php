<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'hCCqw}*AUF+8$YmV#vs_hBsYlxE3iZ:rdF,AB{GtH:D6CF1<Vs^Mc>nn)CynD@k0' );
define( 'SECURE_AUTH_KEY',  ')!0DzEvr!;k6tv<ylUp)Kl).^Q$7J#aq5a3Gw4oCM HM,C NwJ_;ty cJDny0YlW' );
define( 'LOGGED_IN_KEY',    'IO7eB+---h+.mlz#ck_QV^uBY4>NcN4D~$dZHKJdRHIfb|gs&aT0du<)VPWOG@{%' );
define( 'NONCE_KEY',        '}HVwfXr_/0IP~3hNOW#J6R~a$^22JCx`*}iUh3U{ ^*o)3,k@O)}-kJ8.QBc5Sqp' );
define( 'AUTH_SALT',        'n9|m?s#,=4M7X^Q@aJ44YPhM2B?G4exKcC-i-|OyM}NO?sZ`-cPT?[ESpV@xs5Je' );
define( 'SECURE_AUTH_SALT', '#o{hk]!&OVc1^wdz+FX4Kn4[hW7 ;~m/y+8):K~4|(TH oTIRM(r$_Hk&*SQYK;s' );
define( 'LOGGED_IN_SALT',   '<1)>I6SsgDu/]qH>$:pH$%8Ca|*ya3r0q0|Bv,!V[<>vN{w4&&H7wjZT-tNeA& p' );
define( 'NONCE_SALT',       '8+EcWbv9>Y[Bln4_S@d_G 1zXQ^~hGKzaCpi Y^P2x,,qpkCftnR.`,eDYW*Olge' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
