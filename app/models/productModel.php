<?php

namespace app\models;

use app\core\Model;

class ProductModel extends Model
{

    public function obterProdutosCadastrado()
    {
        $SQL = "SELECT *FROM product";
        $query = $this->db->prepare($SQL);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function obterProdutoPorId($id)
    {
        $sql            = "SELECT name AS nome_produto FROM product WHERE id =:id";
        $query          = $this->db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        $responser = $query->fetchAll(\PDO::FETCH_OBJ);
        return $responser[0]->nome_produto;
    }
    public function obterProdutosCadastradoPorNome($name)
    {
        $sql            = "SELECT COUNT(id) AS produto_cadastrado FROM product WHERE name =:name";
        $query          = $this->db->prepare($sql);
        $query->bindParam(':name', $name);
        $query->execute();
        $responser = $query->fetchAll(\PDO::FETCH_OBJ);
        $count = $responser[0]->produto_cadastrado;
        if ($count >= 1) {
            return true;
        } else {
            return false;
        }
    }
    public function edicaoProduto($id, $nome)
    {

        $sql = "UPDATE  product 
                SET     name             =:name
                WHERE   id =:id";

        $query = $this->db->prepare($sql);

        $query->bindValue(":id",   $id);
        $query->bindValue(":name", $nome);
        if ($query->execute()) {
            return true;
        }
        return false;
    }
    public function exclusaoProdutoId($id)
    {

        $sql = "DELETE  product FROM product WHERE id =:id";

        $query = $this->db->prepare($sql);

        $query->bindValue(":id",   $id);
        if ($query->execute()) {
            return true;
        }
        return false;
    }
    public function salvarRegistroNovoProduto($nome)
    {
        if ($this->adicionarNovoProduto($nome)) 
        {
            return true;
        } else {
            return false;
        }
    }
    public function adicionarNovoProduto($nome)
    {
        $sql = "INSERT INTO product SET 
                name               =:name";

        $query = $this->db->prepare($sql);

        $query->bindValue(":name",     $nome);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function getTotalProdutos()
    {
        $sql            = "SELECT COUNT(id) AS total_produtos FROM product";
        $query          = $this->db->prepare($sql);
        $query->execute();
        $responser = $query->fetchAll(\PDO::FETCH_OBJ);
        return $responser[0]->total_produtos;
    }
    public function obterNomeProdutoPorId($id)
    {
        $sql            = "SELECT name AS name_produto FROM product WHERE id =:id";
        $query          = $this->db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        $responser = $query->fetchAll(\PDO::FETCH_OBJ);
        return $responser[0]->name_produto;
    }
}
