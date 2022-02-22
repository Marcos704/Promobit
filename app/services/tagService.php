<?php

namespace app\services;

use app\core\Controller;
use app\models\TagModel;
use app\models\GenericModel;
use app\functions\CustomAlerts;

class TagService extends Controller
{
  private TagModel        $tagModel;
  private GenericModel    $genericModel;
  private CustomAlerts    $customAlert;

  public function callbackTagRegister($var)
  {
    $this->tagModel = new TagModel();
    if (!$this->tagModel->obterTagsCadastradoPorNome($var['tag'])) {
      if ($this->tagModel->salvarRegistroNovaTag($var['tag'])) {
        echo 'requisicaoCompleta';
      } else {
        echo 'RequisicaoIncompleta';
      }
    } else {
      echo 'duplicidade';
    }
  }
  public function callBackEditarTag($data)
  {
    @session_start();
    @$_SESSION['id'] = $data;
    $dados["view"] = "Suporte/tag/editar";
    $this->load(TEMPLATE_SISTEMA, $dados);
  }
  public function callEditarTag($varPost, $varId)
  {
    $this->tagModel = new TagModel();
    if ($this->tagModel->edicaoTag($varId, $varPost['tag'])) {
      echo 'requisicaoCompleta';
    } else {
      echo 'RequisicaoIncompleta';
    }
  }
  public function callBackTagsCadastrados()
  {
    $this->tagModel = new TagModel();
    $Data = $this->tagModel->obterTagsCadastradas();
    return $Data;
  }
  public function callExcluirProduto($varId)
  {
    $this->tagModel = new TagModel();
    $this->genericModel = new GenericModel();
    $this->customAlert = new CustomAlerts();
    $this->customAlert->confirmAlert("Aviso importante!", "Realmente deseja excluir o item selecionado? A exclusão desse item pode influênciar em outras funcionalidades do sistema.", null);
    if ($this->genericModel->verificarItemTagProduto($varId) >= 1) {
      if ($this->genericModel->exclusaoTagProdutoId($varId)) {
        if ($this->tagModel->exclusaoTagId($varId)) {
          $this->redirectAfter();
        }
      }
    }
  }
  public function getTagName($id)
  {
    $this->tagModel = new TagModel();
    return $this->tagModel->obterTagPorId($id);
  }
}
