<?php

namespace app\controllers;

use app\core\Controller;
use app\services\UserService;
use app\services\ProdutoService;
use app\services\TagService;
use app\services\DatabaseService;
use app\models\UserModel;
use app\services\ProductTagService;

class SuporteController extends Controller
{
    private ProductTagService $serviceProdutoTags;
    private ProdutoService $serviceProduto;
    private TagService $serviceTag;
    private DatabaseService $dbService;

    public function index()
    {
        $dados["view"] = ROTA_DESENVOLVEDOR_DASHBOARD;
        $this->load(TEMPLATE_SISTEMA, $dados); //view
    }
    public function dashboard()
    {
        $dados["view"] = ROTA_DESENVOLVEDOR_DASHBOARD;
        $this->load(TEMPLATE_SISTEMA, $dados);
    }
    public function cadastrarProduto()
    {
        $dados["view"] = "Suporte/produto/cadastrar";
        $this->load(TEMPLATE_SISTEMA, $dados);
    }
    public function visualizarDadosProdutos()
    {
        $dados["view"] = "Suporte/produto/visualizar";
        $this->load(TEMPLATE_SISTEMA, $dados);
    }
    public function cadastrarTag()
    {
        $dados["view"] = "Suporte/tag/cadastrar";
        $this->load(TEMPLATE_SISTEMA, $dados);
    }
    public function adicionarTagProduto()
    {   
        $dados["view"] = "Suporte/produto/adicionarTagProduto";
        $this->load(TEMPLATE_SISTEMA, $dados);
    }
    public function cadastrarTagProduto()
    {   
        $dados["view"] = "Suporte/produto/cadastrarTagProduto";
        $this->load(TEMPLATE_SISTEMA, $dados);
    }
    public function visualizarDadosTag()
    {
        $dados["view"] = "Suporte/tag/visualizar";
        $this->load(TEMPLATE_SISTEMA, $dados);
    }
    public function gerarRelatorio()
    {
        $dados["view"] = "Suporte/relatorio/gerarRelatorio";
        $this->load(TEMPLATE_SISTEMA, $dados);
    }
    public function totalUsuariosCadastrados()
    {
        $this->dbService = new DatabaseService();
        echo $this->dbService->getUsersCount();
    }
    public function totalProdutosCadastrados()
    {
        $this->dbService = new DatabaseService();
        echo $this->dbService->getProductsCount();
    }
    public function totalTagsCadastradas()
    {
        $this->dbService = new DatabaseService();
        echo $this->dbService->getTagsCount();
    }
    public function totalTBCadastradas()
    {
        $this->dbService = new DatabaseService();
        echo $this->dbService->getTBCount();
    }
    public function edicaoDadosRapidaProdutos()
    {
        $this->serviceProduto = new ProdutoService();
        $this->serviceProduto->callBackEditarProduto($_GET['data']);
    }
    public function exclusaoProdutos()
    {
        $this->serviceProduto = new ProdutoService();
        $this->serviceProduto->callExcluirProduto($_GET['data']);
    }
    public function exclusaoTags()
    {
        $this->serviceTag = new TagService();
        $this->serviceTag->callExcluirProduto($_GET['data']);
    }
    public function edicaoDadosRapidaTags()
    {
        $this->serviceTag = new TagService();
        $this->serviceTag->callBackEditarTag($_GET['data']);
    }
    public function editarProduto()
    {
        @session_start();
        $id = @$_SESSION['id'];
        $this->serviceProduto = new ProdutoService();
        $this->serviceProduto->callEditarProduto($_POST, $id);
    }
    public function editarTag()
    {
        @session_start();
        $id = @$_SESSION['id'];
        $this->serviceTag = new TagService();
        $this->serviceTag->callEditarTag($_POST, $id);
    }
    public function salvarNovoProduto()
    {
        $this->serviceProduto = new ProdutoService();
        $this->serviceProduto->callbackProductRegister($_POST);
    }
    public function salvarTagProduto()
    {
        $this->serviceProdutoTags = new ProductTagService();
        $this->serviceProdutoTags->callbackTagProductRegister($_POST);
    }
    public function salvarNovaTag()
    {
        $this->serviceTag = new TagService();
        $this->serviceTag->callbackTagRegister($_POST);
    }
    public function salvarProdutoTag()
    {
        $this->serviceProduto = new ProdutoService();
        $this->serviceProduto->callBackEditarProduto($_GET['data']);
    }
    public function pesquisarTagsProduto()
    {
        $this->serviceProdutoTags = new ProductTagService();
        $this->serviceProdutoTags->callObterTagsProdutoIdRequisicao($_POST);
    }
}
