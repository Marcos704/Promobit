<?php

namespace app\models;

use app\core\Model;

class GenericModel extends Model
{

    /**Metodo que retorna o total de registro de uma tabela em forma de array
     * @paramets 
     * $tabela 
     * -> Nome da tabela no qual será 
     *    obtido o total de registros
     */
    public function obterTotalRegistrosTabela($tabela)
    {
        $sql = "SELECT *FROM " . $tabela;
        $query = $this->db->query($sql);
        $resultQuery = $query->fetchAll(\PDO::FETCH_ASSOC);
        return count($resultQuery);
    }
    public function obterTagsProdutoId($product_id)
    {
        $sql = "SELECT tag.id, tag.name
                FROM product JOIN product_tag 
                ON product.id = product_tag.product_id 
                JOIN tag ON product_tag.tag_id = tag.id 
                WHERE product.id =:id";

        $query          = $this->db->prepare($sql);
        $query->bindParam(':id', $product_id);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function obterTotalTagsProdutoId($product_id)
    {
        $sql = "SELECT COUNT(tag.id)
                FROM product JOIN product_tag 
                ON product.id = product_tag.product_id 
                JOIN tag ON product_tag.tag_id = tag.id 
                WHERE product.id =:id";

        $query          = $this->db->prepare($sql);
        $query->bindParam(':id', $product_id);
        $query->execute();
        $total = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $total;
    }
    public function verificarItemTagProduto($product_id)
    {
        $sql = "SELECT COUNT(product_tag.product_id)
                FROM product_tag
                WHERE product_tag.product_id =:id";

        $query          = $this->db->prepare($sql);
        $query->bindParam(':id', $product_id);
        $query->execute();
        $total = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $total;
    }
    public function salvarProdutoTag($id_Produto, $id_Tag)
    {

        $sql = "INSERT INTO  product_tag 
                SET     product_id  =:product_id,
                        tag_id      =:tag_id
                    ";

        $query = $this->db->prepare($sql);

        $query->bindValue(":product_id",   $id_Produto);
        $query->bindValue(":tag_id", $id_Tag);
        if ($query->execute()) {
            return true;
        }
        return false;
    }
    public function salvarRegistroTagProduto($product_id, $tag_id)
    {
        if (
            $this->adicionarTagProduto($product_id, $tag_id)
        ) {
            return true;
        } else {
            return false;
        }
    }
    public function adicionarTagProduto($product_id, $tag_id)
    {
        $sql = "INSERT INTO product_tag SET
                product_id           =:product_id,
                tag_id               =:tag_id";

        $query = $this->db->prepare($sql);

        $query->bindValue(":product_id",                 $product_id);
        $query->bindValue(":tag_id",                     $tag_id);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function exclusaoTagProdutoId($id)
    {

        $sql = "DELETE product_tag FROM product_tag WHERE product_tag.product_id =:id";

        $query = $this->db->prepare($sql);

        $query->bindValue(":id",   $id);
        if ($query->execute()) {
            return true;
        }
        return false;
    }
}
