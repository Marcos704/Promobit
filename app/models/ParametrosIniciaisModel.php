<?php

namespace app\models;

use app\core\Model;
use app\functions\CustomAlerts;
use app\config;

class ParametrosIniciaisModel extends Model
{



    /**Metodo que gera a chave de sessao do usuario para ser registrado no sistema
     * - O metodo verifica antes se a chave já existe, caso já exista, ele é chamado
     *   novamente e retorna a chave somente se a mesma não exista no banco;
     * - Exemplo de chave de registro
     *      1604716014ENGCRIA29122021
     *      
     *      1604716014 -> Parametro de diferenciação
     *      ENGCRIA    -> Parametro de identificação
     *      29122021   -> Data de geração da chave
     */
    public function initTB_USUARIO($TB_USUARIO)
    {
        if ($TB_USUARIO != null) {
            $sql2 = "INSERT INTO " . $TB_USUARIO . " SET "
                . "firstname         =:nome_usuario_padrao,"
                . "lastname          =:sobrenome_usuario_padrao,"
                . "password          =:senha_usuario_padrao,"
                . "cpf               =:cpf_usuario_padrao,"
                . "status            =:status_usuario_padrao";

            $query2 = $this->db->prepare($sql2);

            $query2->bindValue(":nome_usuario_padrao",                    NOME_USUARIO_PADRAO);
            $query2->bindValue(":sobrenome_usuario_padrao",               SOBRENOME_USUARIO_PADRAO);
            $query2->bindValue(":senha_usuario_padrao",                   SENHA_USUARIO_PADRAO_CRIPTOGRAFADA);
            $query2->bindValue(":cpf_usuario_padrao",                     CPF_USUARIO_PADRAO);
            $query2->bindValue(":status_usuario_padrao",                  STATUS_USUARIO_PADRAO);
            $query2->execute();
        }
    }
}
