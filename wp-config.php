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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'Avisos' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ',`WA{gn29iGM~6qD(9upD|{8*loI&tvsqu(Sh/<D778-Nf{4%0zq]%V@xI@=ge*+' );
define( 'SECURE_AUTH_KEY',  '_;-pq~7j?>KJX).mcgx8xEUE,W(TkNiw(}jeiE/^eEN:117jjc$ HKsAl?/Bv`aZ' );
define( 'LOGGED_IN_KEY',    'y8mw~y<)u+K;yHam[L^.E]mm^^H@88nqz!TqE Y?PgV|kvCx]mzUQ;:VbXX3M.t1' );
define( 'NONCE_KEY',        '0gjuO.vXuzR/)J~JEd06Rk-Hm+ 2aG#/0y)WpTw`9-P^Cy8){#NN_?6?u?htt4n1' );
define( 'AUTH_SALT',        'Uz[p|E^BDyV^!iUX:}24niH|XDeo0+|;^5_#8So[;@E[p7Z-|{GI),Ikr`J%JiSR' );
define( 'SECURE_AUTH_SALT', 'vMI#7:e5uVWf1K*9xBcID7x*Wkckpnik4b72 o$^z=h o$PF{[-wV:3&>WGu~}kY' );
define( 'LOGGED_IN_SALT',   'z58{:-;O|gie2MU1DWAPdB}R1K!zO=^QiV(GG9E]X2I|`Dp>&d)y<[*9pBCVQ|x5' );
define( 'NONCE_SALT',       '>uqv7,LcvcwkGnV!W.IMrUi4MF*vpK4dn;}KHb.R*9p;l<#<A`XTh:g-*ud<*A&e' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
