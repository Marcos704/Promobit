<?php
namespace app\config;
/**DADOS DE ACESSO PARA AMBIENTE DE DESENVOLVIMENTO */
define("SERVIDOR", "localhost");
define("BANCO", "promobit");
define("USUARIO", "suport");
define("SENHA", "swu@660031");
define("HORA_PADRAO", date('Y-m-d H:i:s'));


define('CONTROLLER_PADRAO', 'home');
define('METODO_PADRAO', 'index');
define('NAMESPACE_CONTROLLER', 'app\\controllers\\');

define('URL_BASE', 'http://localhost/Promobit/');
define('URL_BASE_ROTAS', 'http://localhost/Promobit/app/views/');
define('URL_BASE_TEMPLATE_SISTEMA','../../../../Promobit/');
//
/**DADOS DE ACESSO PARA O AMBIENTE DE PRODUÇÃO 

define("SERVIDOR", "mysql592.lnxserversecure.com");
define("BANCO", "credimai_cadastro_ficha");
define("USUARIO", "credimai_suport");
define("SENHA", "swu@660031");
define("HORA_PADRAO", date('Y-m-d H:i:s'));

define('URL_BASE', 'http://fizcard.credimaisbr.com.br/');
define('URL_BASE_ROTAS', 'http://fizcard.credimaisbr.com.br/app/views/');
define('URL_BASE_TEMPLATE_SISTEMA','http://fizcard.credimaisbr.com.br');
*/

/** ROTAS PARA REDIRECIONAMENTO NO SISTEMA */
define('ROTA_ADMINISTRADOR_DASHBOARD','Administrador/dashboard');
define('ROTA_FUNCIONARIO_DASHBOARD','Funcionario/dashboard');
define('ROTA_DESENVOLVEDOR_DASHBOARD','Suporte/dashboard');
define('MENU_ADMINISTRADOR','app/views/menu-sistema/menu_Administrador.php');
define('MENU_FUNCIONARIO','app/views/menu-sistema/menu_Funcionario.php');
define('MENU_SUPORTE','app/views/menu-sistema/menu_Suporte.php');
define('OPCAO_SUPORTE_MASTER','app/views/opcoes-sistema/opcao_suporte_master.php');
define('OPCAO_FUNCIONARIO','app/views/opcoes-sistema/opcao_funcionario.php');
define('NOTIFICACOES','app/views/notificacoes/notificacoes.php');
define('TEMPLATE_SISTEMA','templateSistema');
define('TEMPLATE_LOGIN','templateLogin');

/**VARIAVEIS DO SISTEMA */
define ('TB_USUARIO','users');
define ('ROTA_LOGIN','templateLogin');

/** REGISTRO PARA USUARIO PADRAO DO SISTEMA */
define ('NOME_USUARIO_PADRAO','Promobit');
define ('SOBRENOME_USUARIO_PADRAO', 'softwares');
define ('SENHA_USUARIO_PADRAO', 'swu@660031');
define ('SENHA_USUARIO_PADRAO_CRIPTOGRAFADA', password_hash(SENHA_USUARIO_PADRAO, PASSWORD_DEFAULT));
define ('CPF_USUARIO_PADRAO', '500.376.342-59');
define ('STATUS_USUARIO_PADRAO', 'Cadastrado');

?>