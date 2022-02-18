<?php

namespace app\models;

use app\core\Model;

class TagModel extends Model
{

    public function obterTagsCadastradas()
    {
        $SQL = "SELECT *FROM tag";
        $query = $this->db->prepare($SQL);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function obterTagsCadastradasResponser(){
        if(count($this->obterTagsCadastradas()) > 0 ){
            return true;
        }else{
            return false;
        }
    }
    public function obterTagsCadastradoPorNome($name)
    {
        $sql            = "SELECT COUNT(id) AS tag_cadastrada FROM tag WHERE name =:name";
        $query          = $this->db->prepare($sql);
        $query->bindParam(':name', $name);
        $query->execute();
        $responser = $query->fetchAll(\PDO::FETCH_OBJ);
        $count = $responser[0]->tag_cadastrada;
        if ($count >= 1) {
            return true;
        } else {
            return false;
        }
    }
    public function obterTagPorId($id)
    {
        $sql            = "SELECT name AS tag_produto FROM tag WHERE id =:id";
        $query          = $this->db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        $responser = $query->fetchAll(\PDO::FETCH_OBJ);
        return $responser[0]->tag_produto;
    }
    public function obterTagProdutosPorId($id)
    {
        $sql            = "SELECT name AS tag_produto FROM tag WHERE id =:id";
        $query          = $this->db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        $responser = $query->fetchAll(\PDO::FETCH_OBJ);
        return $responser[0]->tag_produto;
    }
    public function salvarRegistroNovaTag($nome)
    {
        if (
            $this->adicionarNovaTag($nome)
        ) {
            return true;
        } else {
            return false;
        }
    }
    public function adicionarNovaTag($nome)
    {
        $sql = "INSERT INTO tag SET "
            . "name               =:name";

        $query = $this->db->prepare($sql);

        $query->bindValue(":name",                     $nome);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function edicaoTag($id, $nome)
    {

        $sql = "UPDATE  tag 
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
    public function getTotalTags()
    {
        $sql            = "SELECT COUNT(id) AS total_tags FROM tag";
        $query          = $this->db->prepare($sql);
        $query->execute();
        $responser = $query->fetchAll(\PDO::FETCH_OBJ);
        return $responser[0]->total_tags;
    }
}
