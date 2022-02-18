<?php

namespace app\services;

use app\core\Controller;
use app\models\UserModel;
use app\core\validacao\Valitation;

class UserService extends Controller
{
  private UserModel   $userModel;
  private Valitation  $valitationService;

  public function callbackUserVerification($CPF)
  {
    @session_start();
    $userModel = new UserModel();
    $validador = new Valitation();
    if (!$validador->isCPFValido($CPF)) {
      echo 'CPF invalido';
    } else
        if ($userModel->isUsuarioExistente($CPF) > 0) {
      @$_SESSION['cpf_edicao'] = $CPF;
      echo 'O CPF informado ja consta na base de dados';
    } else {
      $_SESSION['novoUsuario_CPF'] = $CPF;
      echo 'redirecionar';
    }
  }
  public function callbackUserRegister($var)
  {
    $this->userModel = new UserModel();

    if ($var['senha_usuario'] == $var['confirm_senha_usuario']) {
      if ($this->userModel->salvarRegistroNovoUsuario(
        $var['cpf_usuario'],
        $var['nome_usuario'],
        $var['sobrenome_usuario'],
        $var['senha_usuario'],
        $var['email_usuario'],
        $var['tipo_usuario'],
        $var['data_cadastro_usuario']
      )) {
        echo 'requisicaoCompleta';
      } else {
        echo 'RequisicaoIncompleta';
      }
    } else {
      echo 'senhasNaoConferem';
    }
  }
  public function callBackEditarUsuarioPorCPF($data)
  {
    @session_start();
    @$_SESSION['id'] = $data;
    $dados["view"] = "Suporte/produto/editar";
    $this->load(TEMPLATE_SISTEMA, $dados);
  }
  public function callBackEditarUsuario($data)
  {
    $this->userModel          = new UserModel();
    $this->valitationService  = new Valitation();
    if($data['senha_usuario'] == "" ||$data['confirm_senha_usuario'] == ""){
      echo 'digiteSuaSenha';
    }else
    if($data['senha_usuario'] != $data['confirm_senha_usuario']){
      echo 'senhasNaoConferem';
    }else
    if(!$this->valitationService->verificarCampoSenha($data['senha_usuario'])){
      echo 'senhainvalida';
    }else
    if ($data['tipo_usuario'] == "null") {
      echo 'Tipo de usuario invalido';
    }else
    if ($this->userModel->edicaoUsuario(
      $data['cpf_usuario'],
      $data['nome_usuario'],
      $data['sobrenome_usuario'],
      $data['senha_usuario'],
      $data['email_usuario'],
      $data['tipo_usuario'],
      $data['data_cadastro_usuario']
    )) {

      echo 'requisicaoCompleta';
    } else {
      echo 'RequisicaoIncompleta';
    }
  }
  public function callbackDataUser($key)
  {
    $this->userModel = new UserModel();
    $DATA = $this->userModel->obterUsuarioCadastradoPorCPF($key);
    return $DATA;
  }
  public function callBackUsuariosCadastrados()
  {
    $this->userModel = new UserModel();
    $Data = $this->userModel->obterTodosUsuarioCadastrado();
    return $Data;
  }
}
