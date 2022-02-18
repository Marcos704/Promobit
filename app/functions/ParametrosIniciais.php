<?php

namespace app\functions;

use app\core\Controller;
use app\functions\Debugs;
use app\models\GenericModel;
use app\models\ParametrosIniciaisModel;

class ParametrosIniciais extends Controller
{

    public function verificacaoInicial()
    {
        $objDebug = new Debugs();
        $objGenericModel = new GenericModel();
        $objParametrosModel = new ParametrosIniciaisModel();

        if ($objGenericModel->obterTotalRegistrosTabela(TB_USUARIO) == 0) {
            $objDebug->confirmAlert("Deseja inicar os parametros do sistema?", "Iniciando Parametros", null);
            $objDebug->confirmAlert("Paramestros gravados no banco!", "Redirecionando para o login", null);
            $objDebug->inforAlert("Em caso de Bugs no layout, pressione F5 para limpar o cache.");
            $objParametrosModel->initTB_USUARIO(TB_USUARIO);
        } else {
            @session_start();
            $this->load(ROTA_LOGIN);
        }
    }
}
