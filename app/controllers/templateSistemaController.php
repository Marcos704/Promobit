<?php
namespace app\controllers;
use app\core\Controller;
use app\services\SystemService;
class templateSistemaController extends Controller {
    private SystemService $service;
    public function index(){
        $this->load(TEMPLATE_SISTEMA); //view
    }
    public function longOut(){
        $this->service = new SystemService();
        $this->service->longOut();
    }
}


?>