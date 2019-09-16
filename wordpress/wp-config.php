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
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         't[wlUUKPa|KIPjeP~`.%>6_JQB]$C0:dYO0xg#x|s7#:.>LT7iOXm~hlsjLDJj=)' );
define( 'SECURE_AUTH_KEY',  ')Vzd-!]M8=b,`,CGk,-h+;E9^RX9D[B}[D[MtGJr2oH91GUc ]]<R6<2xL[dpeS[' );
define( 'LOGGED_IN_KEY',    '>>+<7Z,*Po7$4s;hu}V}MsK`:M{BOS,f[mr1+{JikBBG49>P{r[_#]HW(hxc%`} ' );
define( 'NONCE_KEY',        '|1k2P?A(/(RIgrZ>bw6MF;=2%IOBfMTFi>zF+ph0K,(6joDuAs@&q;2!e09B5|!-' );
define( 'AUTH_SALT',        'Iog+60k!3J2{=CW Zob?T1?|^OZ?%Gu[|tgjUqhjdb GMTm[5w8hB1RUE(h<r-5+' );
define( 'SECURE_AUTH_SALT', 'esU^2&JO#0Ubr@LO%>w`:D,EyUiV[?=AV[M]/(~boac|Ev6FYmSCaM)_)b>CN_>5' );
define( 'LOGGED_IN_SALT',   'Ukv!J||WeDw>?6r]&*]HUdP7>pm`2$Y3o&M9C4CGMmC~RkN=u<Z?]n<tL$c{>:>z' );
define( 'NONCE_SALT',       '`t=+$i#~ZD2OI5S~J8V_Nz9#gjQHZGR+`cRE%Jqq4h@.-Nuk@|0kvp#gBov:}MUg' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
