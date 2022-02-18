<?php

namespace app\services;

use app\models\GenericModel;
use app\services\ProdutoService;
use app\core\Controller;

class ProductTagService extends Controller
{
  private ProdutoService $serviceProduto;
  public function callBackSalvarTagProduto($data)
  {
    $this->model = new GenericModel();
    if ($this->model->salvarProdutoTag($data['produto_id'], $data['tag_id'])) {
      echo 'requisicaoCompleta';
    } else {
      echo 'RequisicaoIncompleta';
    }
  }
  public function callObterTagsProdutoId($product_id)
  {
    $this->model = new GenericModel();
    return $this->model->obterTagsProdutoId($product_id);
  }
  public function callObterTagsProdutoIdRequisicao($product_id)
  {
    @session_start();
    $this->serviceProduto = new ProdutoService();
    @$_SESSION['data'] = $product_id['produto_id'];
    @$_SESSION['nameProduto'] =  $this->serviceProduto->getNameProduct($product_id['produto_id']);
    if (count($this->callObterTagsProdutoId($product_id['produto_id'])) > 0) {
      echo 'requisicaoCompleta';
    } else {
      echo 'RequisicaoIncompleta';
    }
  }
  public function callbackTagProductRegister($var)
  {
    $this->model = new GenericModel();
    if ($this->model->salvarRegistroTagProduto($var['produto_id'],$var['tag_id'])) {
      echo 'requisicaoCompleta';
    } else {
      echo 'RequisicaoIncompleta';
    }
  }
}
