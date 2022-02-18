<?php

namespace app\core\validacao;

use app\core\Controller;
use app\functions\CustomAlerts;

class Valitation extends Controller
{

    public function validarRotaUsuario()
    {
        @session_start();
        @$_SESSION['status'] = 'longado';
        $controller = new Controller();
        $controller->redirect(ROTA_DESENVOLVEDOR_DASHBOARD);
    }
    public function MENU_LINK($MENU)
    {
        require_once($MENU);
    }
    public function URL_ACESS_CHECK($sessionKey)
    {
        @session_start();
        $s = new CustomAlerts();
        if (!strpos($_SERVER["REQUEST_URI"], $sessionKey)) {
            $s->confirmAlert("Você não tem permissão para acessar essa página!\\n(Nivel de acesso requerido)", "Recuperando sessão", null);
            $this->redirectAfter();
        }
    }
    public function getURL($url)
    {
        if (substr($_SERVER["REQUEST_URI"], strpos($_SERVER["REQUEST_URI"], $url)) == $url) {
            return true;
        }
        return false;
    }
    public function pageAcess()
    {
        @session_start();
        $s = new CustomAlerts();
        //echo "aqui: ".$_SESSION['status_sessao_usuario']; exit;
        if ($_SESSION['status_sessao_usuario'] == "deslogado" || $_SESSION['status_sessao_usuario'] == null) {
            return true;
        }
    }
    public function isPass()
    {
        @session_start();
        if (
            $this->isVariavelSessaoExistente($_SESSION['cpf'])
        ) {
            return true;
        } else {
            return false;
        }
    }
    public function isSessionOk($varSessao, $verificador)
    {
        @session_start();
        if ($this->isSessaoAtiva()) {
            if (@$_SESSION[$varSessao] == $verificador) {
                return true;
            }
            return false;
        }
        return false;
    }
    public function isVariavelSessaoExistente($varSessao)
    {
        @session_start();
        if ($this->isSessaoAtiva()) {
            if (@$_SESSION[$varSessao] != " ") {
                return true;
            }
            return false;
        }
        return false;
    }

    public function isSessaoAtiva()
    {
        if (@session_status() == PHP_SESSION_ACTIVE) {
            return true;
        }

        return false;
    }
    public function isSessaoExistente($Responser)
    {
        if (isset($_SESSION[$Responser]) != null) {
            echo $_SESSION[$Responser];
            unset($_SESSION[$Responser]);
        }
    }

    public function isCPFValido($cpf)
    {
        // Extrai somente os números
        $cpf = preg_replace('/[^0-9]/is', '', $cpf);

        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;
    }
    /** 
     * @param   mixed       $data = Recebe o valor inserido nos campos
     * @return  boolean     false-> senha menor que 8 caracteres ou 
     *                              Senha sem caracteres especiais
     *                      true-> Senha Ok
     */
    public function verificarCampoSenha($data)
    {
        if (strlen($data) < 8) {
            return false;
        }
        if (!preg_match('/^[a-zA-Z0-9]+/', $data)) {
            return false;
        }
        return true;
    }
}
