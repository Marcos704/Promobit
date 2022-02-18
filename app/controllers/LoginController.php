<?php
namespace app\controllers;
use app\core\Controller;
use app\services\LoginService;

class LoginController extends Controller {
    private LoginService $service;

    public function index(){
        @session_start();
    }
    public function singIn(){
        @session_start();
        $this->service = new LoginService();
        $this->service->loginUsuario($_POST['cpf'], $_POST['senha']);
    }
}
