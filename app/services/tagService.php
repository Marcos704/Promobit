<?php

namespace app\services;

use app\core\Controller;
use app\models\TagModel;

class TagService extends Controller
{
  private TagModel   $tagModel;

  public function callbackTagRegister($var)
  {
    $this->tagModel = new TagModel();
    if(!$this->tagModel->obterTagsCadastradoPorNome($var['tag'])){
      if($this->tagModel->salvarRegistroNovaTag($var['tag'])){
        echo 'requisicaoCompleta';
      }else{
        echo 'RequisicaoIncompleta';
      }
    }else{
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
  public function getTagName($id)
  {
    $this->tagModel = new TagModel();
    return $this->tagModel->obterTagPorId($id);
  }
}
