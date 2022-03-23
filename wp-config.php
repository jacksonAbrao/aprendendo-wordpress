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
define( 'AUTH_KEY',         '=gSv9JY71m]+yhrkWRyi]Ne83fP&UH4L~L.%p3As(z38F5vAmrS!OPv5|0a=[4D[' );
define( 'SECURE_AUTH_KEY',  '~e%Qin;pVACC7EQZO#l0(R+W0.fuVvVXi:Az|zN|[<(eH`yin%=TYZ]]E~95XKSv' );
define( 'LOGGED_IN_KEY',    ':i0u1OV}U{i;WBoKnZrV;/c([mXS=*FF0k74q_I&kbKPK;B[v5Z&1M8nS4LGIaLk' );
define( 'NONCE_KEY',        'M<&.,%#AskHBt&gl5tYEt]DHV,F2$@T%>7@B#6A,a_&^xPk9~yk@rrKxe,9j_pE*' );
define( 'AUTH_SALT',        '-(,Q~A^V0oQ3#Li/@V4)1Yr$h1H9$)])j|U;.7h9^.r;D1Jfu-4U5U MH~C~O7^g' );
define( 'SECURE_AUTH_SALT', 'Is!=@yB+;gnM]s17Jafec_#dkR>T=Sohi1*8B{&pg&AkxXx@?/c=gac&uHAqVuuF' );
define( 'LOGGED_IN_SALT',   '>YVU[~l;OW$NC17<x,clNl@j]$vZy}kBao1ye8bO,|T|?T3VU90fce]jOh{,M8yH' );
define( 'NONCE_SALT',       '~Veard<Gvxr(C.@f3^O#-D!W6Iwc1=J^^Ix#jl_ds1`uyy)Qt/+Fm/yg08L^I7{j' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
