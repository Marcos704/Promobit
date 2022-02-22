<?php

namespace app\services;

use app\core\Controller;
use app\models\GenericModel;
use app\models\ProductModel;
use app\models\TagModel;
use app\functions\CustomAlerts;

class ProdutoService extends Controller
{
  private ProductModel    $productModel;
  private TagModel        $tagModel;
  private GenericModel    $genericModel;
  private CustomAlerts    $customAlert;

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
  public function callExcluirProduto($varId)
  {
    $this->productModel = new ProductModel();
    $this->genericModel = new GenericModel();
    $this->customAlert = new CustomAlerts();
    $this->customAlert->confirmAlert("Aviso importante!","Realmente deseja excluir o item selecionado? A exclusão desse item pode influênciar em outras funcionalidades do sistema.", null);
    if($this->genericModel->verificarItemTagProduto($varId)>=1){
      if($this->genericModel->exclusaoTagProdutoId($varId)){
        if($this->productModel->exclusaoProdutoId($varId)){
          $this->redirectAfter();
        }
      }
    }
  }
  public function getNameProduct($id)
  {
    $this->productModel = new ProductModel();
    return $this->productModel->obterNomeProdutoPorId($id);
  }
}
