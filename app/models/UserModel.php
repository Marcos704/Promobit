<?php

namespace app\models;

use app\core\Model;

class UserModel extends Model
{
    // verifica se o usuario está longado no sistema
    public function isLogin($cpf_usuario, $senha_usuario)
    {
        $this->isVerificarLogin($cpf_usuario, $senha_usuario);
    }
    public function isVerificarLogin($cpf_usuario, $senha_usuario)
    {
        @session_start();
        if ($this->isSessaoAtiva()) {
            $sql = "SELECT *FROM users WHERE cpf =:cpf";
            $query = $this->db->prepare($sql);
            $query->bindParam(':cpf', $cpf_usuario);
            $query->execute();
            $responser = $query->fetchAll(\PDO::FETCH_ASSOC);
            if (count($responser) > 0) {
                $databasePasswordHash = $responser[0]['password'];
                if (password_verify($senha_usuario, $databasePasswordHash)) {
                    $_SESSION['cpf'] = $responser[0]['cpf'];
                    return true;
                }
            } else {
                return false;
            }
        }
        return false;
    }
    public function isUsuarioExistente($cpf_usuario)
    {
        $sql            = "SELECT COUNT(cpf_usuario) AS total FROM tb_usuario WHERE cpf_usuario =:cpf";
        $query          = $this->db->prepare($sql);
        $query->bindParam(':cpf', $cpf_usuario);
        $query->execute();
        $responser = $query->fetchAll(\PDO::FETCH_OBJ);
        return $responser[0]->total;
    }
    public function getTotalUsuarios()
    {
        $sql            = "SELECT COUNT(id) AS total_usuarios FROM users";
        $query          = $this->db->prepare($sql);
        $query->execute();
        $responser = $query->fetchAll(\PDO::FETCH_OBJ);
        return $responser[0]->total_usuarios;
    }
    
    public function getTotalTables()
    {
        $sql            = "SELECT COUNT(*) AS total_tabelas FROM information_schema.tables WHERE table_schema = 'promobit'";
        $query          = $this->db->prepare($sql);
        $query->execute();
        $responser = $query->fetchAll(\PDO::FETCH_OBJ);
        return $responser[0]->total_tabelas;
    }
    public function isSessaoAtiva()
    {
        if (session_status() != null) {
            if (session_status() == 1 || session_status() == 0) {
                return false;
            }
            return true;
        }

        return false;
    }
}
