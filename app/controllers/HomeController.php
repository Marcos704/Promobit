<?php
namespace app\controllers;
use app\core\Controller;
use app\functions\ParametrosIniciais;


class HomeController extends Controller {
    public function index(){
      $Paramentros = new ParametrosIniciais();
      $Paramentros->verificacaoInicial();
    }
    
}
?>