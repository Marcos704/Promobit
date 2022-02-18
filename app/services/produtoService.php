<?php

namespace app\services;

use app\core\Controller;
use app\models\ProductModel;
use app\models\TagModel;

class ProdutoService extends Controller
{
  private ProductModel   $productModel;
  private TagModel   $tagModel;

  public function callBackProdutosCadastrados()
  {
    $this->productModel = new ProductModel();
    $Data = $this->productModel->obterProdutosCadastrado();
    return $Data;
  }
  public function callBackTagsCadastradas()
  {
    $this->tagModel = new TagModel();
    $Data = $this->tagModel->obterTagsCadastradas();
    return $Data;
  }
  public function callBackTagsPorProduto()
  {
    $this->tagModel = new TagModel();
    $Data = $this->tagModel->obterTagsCadastradas();
    return $Data;
  }
  public function getProductName($id)
  {
    $this->productModel = new ProductModel();
    return $this->productModel->obterProdutoPorId($id);
  }
  public function callbackProductRegister($var)
  {
    $this->productModel = new ProductModel();
    if (!$this->productModel->obterProdutosCadastradoPorNome($var['produto'])) {
      if ($this->productModel->salvarRegistroNovoProduto($var['produto'])) {
        echo "requisicaoCompleta";
      } else {
        echo 'RequisicaoIncompleta';
      }
    } else {
      echo 'duplicidade';
    }
  }
  public function callBackEditarProduto($data)
  {
    @session_start();
    @$_SESSION['id'] = $data;
    $dados["view"] = "Suporte/produto/editar";
    $this->load(TEMPLATE_SISTEMA, $dados);
  }
  public function callEditarProduto($varPost, $varId)
  {
    $this->productModel = new ProductModel();
    if ($this->productModel->edicaoProduto($varId, $varPost['produto'])) {
      echo 'requisicaoCompleta';
    } else {
      echo 'RequisicaoIncompleta';
    }
  }
  public function getNameProduct($id)
  {
    $this->productModel = new ProductModel();
    return $this->productModel->obterNomeProdutoPorId($id);
  }
}
