<?php

namespace app\services;

use app\core\validacao\Valitation;
use app\models\UserModel;
use app\functions\CustomAlerts;

class LoginService
{

  public function loginUsuario($CPF, $SENHA)
  {
    @session_start();
    $validador = new Valitation();
    $login = new UserModel();
    $s = new CustomAlerts();
    if ($validador->isSessaoAtiva() != null && $validador->isCPFValido($CPF)) {
      if ($login->isVerificarLogin($CPF, $SENHA)) {
        $validador->validarRotaUsuario();
      } else {
        $s->alertDanger("Usuário ou senha inválidos", "", "loginResponser", URL_BASE);
        $s->isEsqueceuSenha("recoverPasswordResponser", URL_BASE);
      }
    } else {
      $s->alertDanger("O CPF informado não é válido", "", "loginResponser", URL_BASE);
    }
  }
  public function callBackRecoverPassoword()
  {
    $s = new CustomAlerts();
    $s->alertDangerBtn("Aviso", "Usuário ou senhas incorretos", "loginResponser", URL_BASE);
  }
}
