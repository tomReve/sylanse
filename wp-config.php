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
define( 'DB_NAME', 'sylanse' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ':0p+l-JNiFNYNv$PD573fu7j/_ilh)Mrqv0w)^wv5OVLGQ#HVKr|-(9b3|{DNo!i' );
define( 'SECURE_AUTH_KEY',  '](D-!gJ*6a|)}Oe85v19X2.Z9jS{[]oA:~A!+bY-X@rte[4$%+V}.[$9Zu;i/:LI' );
define( 'LOGGED_IN_KEY',    'u53t{P+|gV/!m_MesxWLH[23R9,T(puEFl4E&(%zx3EKT}[akB.9* zJ~hZ|9aH@' );
define( 'NONCE_KEY',        '4UFXq}!E $ym-:W{+)oX;huP(eFyUme>J_qZ_KT&/_g3@V%ELeh6in.GQ.lUG!H1' );
define( 'AUTH_SALT',        'i%+`6: $ TZnAW._bl$67;<5W9pLabvIzw0tAry7w,lZkkysU#wr|6Wr?(8Ewy 1' );
define( 'SECURE_AUTH_SALT', '^@uTVu]=&x&}E2g1c+#Lniy(5R<`28v9Od]?E&m6 <*gk.]NHpkP$QpHDRaEDap?' );
define( 'LOGGED_IN_SALT',   '`reDIU/M73`^Pc6~ZGonyW[cE9^0u+1O.d,RR:K@-_Rn{jMGfb#lAUO .Yidm:j{' );
define( 'NONCE_SALT',       'BdjfIS*#3h[O]oZn.cO3)-Jf^+=sV$,[?cP:{}svkq(b a/2zdXZ.Qfb]HIP& LB' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
