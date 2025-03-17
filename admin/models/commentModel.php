<?php
class commentModel{
    public $conn;
    function __construct() {
        $this->conn = connDBAss();
    }
    function comment()
    {
        $sql = "SELECT * FROM comment JOIN product ON product.id_pro=comment.id_pro order by comment.id_pro desc, id_com desc";
        return $this->conn->query($sql)->fetchAll();
    }
    function deleteComment($id)
    {
        $sql = "DELETE from comment where id_com=$id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
}