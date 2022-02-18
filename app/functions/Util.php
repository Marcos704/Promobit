<?php

namespace app\functions;

use app\core\validacao\Valitation;

class Util
{
    public function acessoVerification()
    {
        @session_start();
        $acesso = new Valitation();
        $acesso->URL_ACESS_CHECK($_SESSION['tipo_usuario']);
    }
    
    public function isSessaoExistente($Responser)
    {
        if (isset($_SESSION[$Responser]) != null) {
            echo @$_SESSION[$Responser];
            unset($_SESSION[$Responser]);
        }
    }
    public function MENU_LINK()
    {
        @session_start();
        $nivel = $_SESSION['tipo_usuario'];
        switch ($nivel){
            case 'Suporte':
                include_once(MENU_SUPORTE);
            break;
            case 'Administrador':
                include_once(MENU_ADMINISTRADOR);
            break;
            case 'Funcionario':
                include_once(MENU_FUNCIONARIO);
            break;
        }
    }
    public function OPCAO_PAGINA(){
            @session_start();
            $nivel = $_SESSION['tipo_usuario'];
            switch ($nivel){
                case 'Suporte':
                    include_once(OPCAO_SUPORTE_MASTER);
                break;
                case 'Administrador':
                    include_once(OPCAO_SUPORTE_MASTER);
                break;
                case 'Funcionario':
                    include_once(OPCAO_FUNCIONARIO);
                break;
            }

    }
    public function NOTIFICACOES_PAGE(){
        @session_start();
        $nivel = $_SESSION['tipo_usuario'];
        switch ($nivel){
            case 'Suporte':
                include_once(NOTIFICACOES);
            break;
            case 'Administrador':
                include_once(NOTIFICACOES);
            break;
            case 'Funcionario':
            break;
        }

}
    public function TITULO_PAGINA()
    {
        @session_start();
        $nivel = $_SESSION['tipo_usuario'];
        switch ($nivel) {
            case 'Suporte':
                echo TITULO_SUPORTE;
            break;
            case 'Administrador':
                echo TITULO_ADMINISTRADOR;
            break;
            case 'Funcionario':
                echo TITULO_FUNCIONARIO;
            break;
        }
    }
    public function verificarAcessoPagina(){

    }
}
