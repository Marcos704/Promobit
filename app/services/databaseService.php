<?php
namespace app\services;
use app\models\UserModel;
use app\models\ProductModel;
use app\models\TagModel;

class DatabaseService {
  private UserModel $userModel;
  private ProductModel $produtoModel;
  private TagModel $tagModel;


  public function getUsersCount(){
    $this->userModel = new UserModel();
    return $this->userModel->getTotalUsuarios();
  }
  public function getProductsCount(){
    $this->produtoModel = new ProductModel();
    return $this->produtoModel->getTotalProdutos();
  }
  public function getTagsCount(){
    $this->tagModel = new TagModel();
    return $this->tagModel->getTotalTags();
  }
  public function getTBCount(){
    $this->userModel = new UserModel();
    return $this->userModel->getTotalTables();
  }
}