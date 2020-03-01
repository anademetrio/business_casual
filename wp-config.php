<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'business_casual');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8|M4Oj,F|1v ZeXYe=$,w0*fGP{s8O%~j8eS?RR~?_sqTHV0Td,XgE;)=j%P<(W[');
define('SECURE_AUTH_KEY',  'dM(#c?:n6mbU_mxi!OG<Q`uY4mst8q;t^`F^Xif,+tfu}>RwY<Zy>:W;U2ZkHM),');
define('LOGGED_IN_KEY',    'dKr.NP&S8+R2Q[cCUFBC(h{G+]%}.;?eH?|3Xq/Wc}Ylp r%v_s{h/Uh~OI8o|ok');
define('NONCE_KEY',        'CJERhW._,tb3!C{]MCAUm;/A&g8EjNWA=u}/:=6g_{#soZE/S8J,7kgn)H&WfRyx');
define('AUTH_SALT',        '56mtU;h-4e)<d[M,St{HJI51Ke|U8AKQ:f:s[-.@ $&r1DJ90$8Ml!z+jTw)P;e9');
define('SECURE_AUTH_SALT', 'D}ek~j..!sQB3fbs3#{w!&!*b#{|H@h{y`<{i3@;Ww9Sz3zB Z]{E5)1!>xMkxJ@');
define('LOGGED_IN_SALT',   '6={7Z48J?EAVqds:4|S,T1_c@qsd;SUg=VE]{aveYNh}WSws%L5r4~/RtLR75NuI');
define('NONCE_SALT',       '/AY 2p2:*5iNb`Fjkp[Z:A#CgN1!MCzwkc5SGt+Mu!wW#9l(k~X<WQfk`@AvB.n/');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
